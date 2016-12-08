<?php

/* core/themes/stable/templates/form/textarea.html.twig */
class __TwigTemplate_a797d7d0afbd0de754cdadf8c7c5f734a64e9f9f0a5d5b34f5997c8297a804f8 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 16
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "html", null, true));
        echo ">
  <textarea";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "</textarea>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/form/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'textarea' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - wrapper_attributes: A list of HTML attributes for the wrapper element.*/
/*  * - attributes: A list of HTML attributes for the textarea element.*/
/*  * - resizable: An indicator for whether the textarea is resizable.*/
/*  * - required: An indicator for whether the textarea is required.*/
/*  * - value: The textarea content.*/
/*  **/
/*  * @see template_preprocess_textarea()*/
/*  *//* */
/* #}*/
/* <div{{ wrapper_attributes }}>*/
/*   <textarea{{ attributes }}>{{ value }}</textarea>*/
/* </div>*/
/* */
