<?php

namespace Drupal\single_page_site\Manager;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\ControllerResolverInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Menu\MenuLinkTree;
use Drupal\Core\Menu\MenuLinkTreeElement;
use Drupal\Core\Menu\MenuTreeParameters;
use Drupal\language\Plugin\LanguageNegotiation\LanguageNegotiationUrl;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Class SinglePageSiteManager
 * @package Drupal\single_page_site\Manager
 */
class SinglePageSiteManager {

  protected $http_kernel;
  protected $settings;
  protected $dispatcher;
  protected $resolver;
  protected $menuTree;
  protected $languageNegotiation;
  protected $current_language;

  /**
   * SinglePageSiteManager constructor.
   * @param \Symfony\Component\HttpKernel\HttpKernelInterface $http_kernel
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
   * @param \Drupal\Core\Controller\ControllerResolverInterface $resolver
   * @param \Drupal\Core\Menu\MenuLinkTree $menu_tree
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   */
  public function __construct(HttpKernelInterface $http_kernel, ConfigFactoryInterface $config_factory,
                              EventDispatcherInterface $dispatcher, ControllerResolverInterface $resolver,
                              MenuLinkTree $menu_tree, LanguageManagerInterface $language_manager) {
    $this->settings = $config_factory->get('single_page_site.config');
    $this->httpKernel = $http_kernel;
    $this->dispatcher = $dispatcher;
    $this->resolver = $resolver;
    $this->menuTree = $menu_tree;
    $this->languageNegotiation = $config_factory->get('language.negotiation')
      ->get('url');
    $this->current_language = $language_manager->getCurrentLanguage()->getId();
  }

  /**
   * Returns page title.
   * @return array|mixed|null|string
   */
  public function getPageTitle() {
    return (empty($this->settings->get('title'))) ? 'Single page site' : $this->settings->get('title');
  }

  /**
   * Returns wrapper tags for title.
   * @return array|mixed|null
   */
  public function getTitleTag() {
    return $this->settings->get('tag');
  }

  /**
   * Returns menu selected for single page.
   * @return array|mixed|null
   */
  public function getMenu() {
    return $this->settings->get('menu');
  }

  /**
   * Returns menu class.
   * @return array|mixed|null
   */
  public function getMenuClass() {
    return $this->settings->get('menuclass');
  }

  /**
   * Returns distance up.
   * @return array|mixed|null
   */
  public function getDistanceUp() {
    return $this->settings->get('up');
  }

  /**
   * Returns distance down.
   * @return array|mixed|null
   */
  public function getDistanceDown() {
    return $this->settings->get('down');
  }

  /**
   * Returns id url hash has to be updated.
   * @return array|mixed|null
   */
  public function updateHash() {
    return $this->settings->get('updatehash');
  }

  /**
   * Returns offset selector.
   * @return array|mixed|null
   */
  public function getOffsetSelector() {
    return $this->settings->get('offsetselector');
  }

  /**
   * Returns smooth scrolling option.
   * @return array|mixed|null
   */
  public function getSmoothScrolling() {
    return $this->settings->get('smoothscrolling');
  }

  /**
   * Generates a valid anchor.
   * @param $url
   * @return mixed
   */
  public function generateAnchor($url) {

    if ($this->settings->get('filterurlprefix')) {
      $prefix = '';
      if ($this->languageNegotiation['source'] == LanguageNegotiationUrl::CONFIG_PATH_PREFIX) {
        if (!empty($this->languageNegotiation['prefixes'][$this->current_language])) {
          $prefix = $this->languageNegotiation['prefixes'][$this->current_language] . '/';
        }
      }
      // Remove language url prefix
      $url = preg_replace('#^/' . str_replace('#', '\#', $prefix) . '#', '/', $url);
    }

    // Replace odd chars and leading slash.
    return str_replace(array('/', '?q='), array('_', ''), substr($url, 1));
  }

  /**
   * Fetches all children of given menu.
   * @return array|\Drupal\Core\Menu\MenuLinkTreeElement[]|mixed
   */
  public function getMenuChildren() {
    // Set options.
    $parameters = new MenuTreeParameters();
    $parameters->onlyEnabledLinks();
    // Load tree.
    $tree = $this->menuTree->load($this->getMenu(), $parameters);

    $manipulators = array(
      array('callable' => 'menu.default_tree_manipulators:generateIndexAndSort')
    );

    return $this->menuTree->transform($tree, $manipulators);
  }

  /**
   * Checks if a given menu items has to be rendered.
   * @param \Drupal\Core\Menu\MenuLinkTreeElement $menu_item
   * @return bool
   */
  public function isMenuItemRenderable(MenuLinkTreeElement $menu_item) {
    $plugin_definition = $menu_item->link->getPluginDefinition();
    if ($plugin_definition['route_name'] != '<front>') {
      if (empty($this->settings->get('class'))) {
        // If class is empty => all menu items.
        return $plugin_definition;
      }
      //@todo: if menu attributes is ported, add check if class hide is applied or menu items has class that has to be rendered.
    }

    return FALSE;
  }

  /**
   * Mimics the rendering of page content.
   * @param $href
   * @return mixed
   * @throws \Drupal\single_page_site\Manager\NotFoundHttpException
   */
  public function executeAndRenderSubRequest($href) {
    $type = HttpKernelInterface::SUB_REQUEST;
    $request = Request::create($href, 'GET');

    // Request.
    $event = new GetResponseEvent($this->httpKernel, $request, $type);
    $this->dispatcher->dispatch(KernelEvents::REQUEST, $event);

    if ($event->hasResponse()) {
      $event = new FilterResponseEvent($this->httpKernel, $request, $type, $event->getResponse());

      $this->dispatcher->dispatch(KernelEvents::RESPONSE, $event);
      $this->dispatcher->dispatch(KernelEvents::FINISH_REQUEST, new FinishRequestEvent($this->httpKernel, $request, $type));

      return $event->getResponse();
    }
    // Load controller.
    if (FALSE === $controller = $this->resolver->getController($request)) {
      throw new NotFoundHttpException(sprintf('Unable to find the controller for path "%s". The route is wrongly configured.',
        $request->getPathInfo()));
    }

    $event = new FilterControllerEvent($this->httpKernel, $controller, $request, $type);
    $this->dispatcher->dispatch(KernelEvents::CONTROLLER, $event);
    $controller = $event->getController();

    // Controller arguments.
    $arguments = $this->resolver->getArguments($request, $controller);
    // Call controller.
    return call_user_func_array($controller, $arguments);
  }

}