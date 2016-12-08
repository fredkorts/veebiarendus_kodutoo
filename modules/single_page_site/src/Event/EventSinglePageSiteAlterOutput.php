<?php

namespace Drupal\single_page_site\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class EventSinglePageSiteAlterOutput
 * @package Drupal\single_page_site\Event
 */
class EventSinglePageSiteAlterOutput extends Event{

  protected $output;
  protected $currentItemCount;

  /**
   * EventAlterOutput constructor.
   * @param $output
   * @param $current_item_count
   */
  public function __construct($output, $current_item_count) {
    $this->output = $output;
    $this->currentItemCount = $current_item_count;
  }

  /**
   * @return mixed
   */
  public function getOutput() {
    return $this->output;
  }

  /**
   * @param mixed $output
   */
  public function setOutput($output) {
    $this->output = $output;
  }

  /**
   * @return mixed
   */
  public function getCurrentItemCount() {
    return $this->currentItemCount;
  }

  /**
   * @param mixed $currentItemCount
   */
  public function setCurrentItemCount($currentItemCount) {
    $this->currentItemCount = $currentItemCount;
  }



}