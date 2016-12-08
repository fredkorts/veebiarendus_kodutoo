<?php

/* modules/juicebox/templates/juicebox-embed-markup.html.twig */
class __TwigTemplate_0259a1cb68fb23589d80f1b77247dc69364620f7316a62e5e40e7444a6758b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 23, "for" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  <div id=\"";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["gallery_id"]) ? $context["gallery_id"] : null), "html", null, true));
        echo "\" class=\"juicebox-container\">
    <noscript>
      <!-- Image gallery content for non-javascript devices -->
      ";
        // line 23
        if ($this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerytitle", array(), "any", true, true)) {
            // line 24
            echo "      <h1 class=\"jb-name\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerytitle", array()), "html", null, true));
            echo "</h1>
      ";
        }
        // line 26
        echo "      ";
        if ($this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerydescription", array(), "any", true, true)) {
            // line 27
            echo "      <p class=\"jb-description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerydescription", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 29
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gallery_images"]) ? $context["gallery_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "      <p class=\"jb-image\">
        ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["image"], "image_plain", array()), "html", null, true));
            echo "<br/>
        <span class=\"jb-title\">";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true));
            echo "</span><br/>
        <span class=\"jb-caption\">";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["image"], "caption", array()), "html", null, true));
            echo "</span>
      </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </noscript>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/juicebox/templates/juicebox-embed-markup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  91 => 33,  87 => 32,  83 => 31,  80 => 30,  75 => 29,  69 => 27,  66 => 26,  60 => 24,  58 => 23,  52 => 20,  48 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display the embed code for a Juicebox*/
/*  * gallery.*/
/*  **/
/*  * Available variables:*/
/*  * - gallery_id: The unique identifier for this gallery.*/
/*  * - gallery_images: Image data for all the images in the gallery.*/
/*  * - gallery_options: Options to be passed to the Juicebox javascript library*/
/*  *   for this gallery.*/
/*  * - attributes: Any overall attributes for the parent wrapper.*/
/*  * - title_suffix: Title suffix data as typically provided by contextual links.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {{ title_suffix }}*/
/*   <div id="{{ gallery_id }}" class="juicebox-container">*/
/*     <noscript>*/
/*       <!-- Image gallery content for non-javascript devices -->*/
/*       {% if gallery_options.gallerytitle is defined %}*/
/*       <h1 class="jb-name">{{ gallery_options.gallerytitle}}</h1>*/
/*       {% endif %}*/
/*       {% if gallery_options.gallerydescription is defined %}*/
/*       <p class="jb-description">{{ gallery_options.gallerydescription}}</p>*/
/*       {% endif %}*/
/*       {% for image in gallery_images %}*/
/*       <p class="jb-image">*/
/*         {{ image.image_plain }}<br/>*/
/*         <span class="jb-title">{{ image.title }}</span><br/>*/
/*         <span class="jb-caption">{{ image.caption }}</span>*/
/*       </p>*/
/*       {% endfor %}*/
/*     </noscript>*/
/*   </div>*/
/* </div>*/
/* */
