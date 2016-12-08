<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_562aee5c205e86c339856a49c38489424fc528f7af6a8f703516a6cf4a366425 extends Twig_Template
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
        $tags = array("if" => 74);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 83
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 92
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()))) {
            echo "  
    <div class=\"container welcome-banner-text\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 101
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  ";
        // line 108
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 109
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 121
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 122
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()))) {
                // line 123
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 129
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 130
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 131
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 133
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 136
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 137
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 138
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 140
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 143
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 144
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 145
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 147
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 154
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 158
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 159
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 163
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 168
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 177
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 178
            echo "        <div class=\"row\">
          ";
            // line 179
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 182
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 186
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 191
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 192
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 193
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 194
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 198
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 201
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 202
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 203
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 204
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 208
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 211
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 212
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 213
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 214
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 218
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 224
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 225
            echo "      <div class=\"row\">
        ";
            // line 226
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 229
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->






<!-- Start bottom -->
";
        // line 240
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 241
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()))) {
                // line 242
                echo "    <div class=\"bottom-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Bottom First Region -->
          <div class = ";
                // line 249
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 250
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 251
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 253
                echo "          </div>
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          <div class = ";
                // line 257
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 258
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 259
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 261
                echo "          </div>
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->
          <div class = ";
                // line 265
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 266
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 267
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 269
                echo "          </div>
          <!-- End Bottom Third Region -->

          <div class = ";
                // line 272
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 273
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 274
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
            ";
                }
                // line 276
                echo "          </div>

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 283
        echo "<!--End Bottom -->




<!-- start: Footer -->
";
        // line 289
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 290
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 296
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 297
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 298
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 300
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 304
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 305
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 306
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 308
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 312
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_class"]) ? $context["footer_third_class"] : null), "html", null, true));
            echo ">
          ";
            // line 313
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 314
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 316
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 322
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 325
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 326
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 330
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 332
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 333
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 335
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 336
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 338
                echo "            ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 339
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 341
                echo "            ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 342
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 344
                echo "            ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 345
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 347
                echo "            ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 348
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 350
                echo "            ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 351
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 353
                echo "          </div>
        </div>
        ";
            }
            // line 356
            echo "      </div>
    </div>
  </div>
";
        }
        // line 360
        echo "<!-- End Footer Menu -->

";
        // line 362
        if (((isset($context["copyright_text"]) ? $context["copyright_text"] : null) || (isset($context["show_credit_link"]) ? $context["show_credit_link"] : null))) {
            // line 363
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 369
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                echo "        
          <p>";
                // line 370
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
                echo "</p>        
        ";
            }
            // line 372
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 376
            if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
                // line 377
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 381
            echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>
";
        }
        // line 387
        echo "

<!-- Google map -->
";
        // line 390
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()))) {
            // line 391
            echo "  <div class=\"google_map\">
    ";
            // line 392
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 395
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  666 => 395,  660 => 392,  657 => 391,  655 => 390,  650 => 387,  642 => 381,  636 => 377,  634 => 376,  628 => 372,  623 => 370,  619 => 369,  611 => 363,  609 => 362,  605 => 360,  599 => 356,  594 => 353,  588 => 351,  585 => 350,  579 => 348,  576 => 347,  570 => 345,  567 => 344,  561 => 342,  558 => 341,  552 => 339,  549 => 338,  543 => 336,  541 => 335,  537 => 333,  535 => 332,  530 => 330,  524 => 326,  522 => 325,  517 => 322,  509 => 316,  503 => 314,  501 => 313,  497 => 312,  491 => 308,  485 => 306,  483 => 305,  479 => 304,  473 => 300,  467 => 298,  465 => 297,  461 => 296,  453 => 290,  451 => 289,  443 => 283,  434 => 276,  428 => 274,  426 => 273,  422 => 272,  417 => 269,  411 => 267,  409 => 266,  405 => 265,  399 => 261,  393 => 259,  391 => 258,  387 => 257,  381 => 253,  375 => 251,  373 => 250,  369 => 249,  360 => 242,  358 => 241,  354 => 240,  341 => 229,  335 => 226,  332 => 225,  330 => 224,  322 => 218,  315 => 214,  311 => 213,  308 => 212,  306 => 211,  301 => 208,  294 => 204,  290 => 203,  287 => 202,  285 => 201,  280 => 198,  273 => 194,  269 => 193,  266 => 192,  264 => 191,  256 => 186,  250 => 182,  244 => 179,  241 => 178,  239 => 177,  228 => 168,  220 => 163,  214 => 159,  212 => 158,  206 => 154,  197 => 147,  191 => 145,  189 => 144,  185 => 143,  180 => 140,  174 => 138,  172 => 137,  168 => 136,  163 => 133,  157 => 131,  155 => 130,  151 => 129,  143 => 123,  141 => 122,  137 => 121,  131 => 117,  123 => 112,  118 => 109,  116 => 108,  107 => 101,  99 => 96,  92 => 92,  81 => 83,  75 => 82,  73 => 81,  67 => 77,  61 => 75,  59 => 74,  43 => 60,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the Navigation region.*/
/*  * - page.page_title: Used by Current page Title.*/
/*  * - page.banner: Items for the banner region.*/
/*  * - page.highlighted: Items for the highlighted top  region.*/
/*  * - page.content_top: The main content top of the current page.*/
/*  * - page.help: Item for the help region.*/
/*  * - page.breadcrumb: Item for the Breadcrumb region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.content_bottom: Items for the bottom in content region.*/
/*  * - page.footer_top: Items for the footer top region.*/
/*  * - page.footer_first: Items for the footer first region.*/
/*  * - page.footer_second: Items for the footer Second region.*/
/*  * - page.footer_third: Items for the footer third region.*/
/*  * - page.footer_bottom: Items for the footer bottom region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* */
/* <!-- Header and Navbar -->*/
/* <header class="main-header">*/
/*   <nav class="navbar navbar-default" role="navigation">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*       <div class="navbar-header col-md-3">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/*         {% if page.header %}*/
/*           {{ page.header }}*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <!-- Navigation -->*/
/*       <div class="col-md-9">*/
/*         {% if page.primary_menu %}*/
/*           {{ page.primary_menu }}*/
/*         {% endif %}      */
/*       </div>*/
/*       <!--End Navigation -->*/
/* */
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/* */
/*   <!-- Banner -->*/
/*   {% if is_front and page.welcome_banner_text %}  */
/*     <div class="container welcome-banner-text">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ page.welcome_banner_text }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <!-- End Banner -->*/
/* */
/* </header>*/
/* <!--End Header & Navbar -->*/
/* */
/* */
/* <!--Highlighted-->*/
/*   {% if page.highlighted %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.highlighted }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Highlighted-->*/
/* */
/* */
/* <!-- Start Top Widget -->*/
/* {% if is_front %}  */
/*   {% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}*/
/*     <div class="topwidget">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/*           <!-- Top widget first region -->*/
/*           <div class = {{ topwidget_class }}>*/
/*             {% if page.topwidget_first %}*/
/*               {{ page.topwidget_first }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*           <!-- Top widget second region -->*/
/*           <div class = {{ topwidget_class }}>*/
/*             {% if page.topwidget_second %}*/
/*               {{ page.topwidget_second }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*           <!-- Top widget third region -->*/
/*           <div class = {{ topwidget_third_class }}>*/
/*             {% if page.topwidget_third %}*/
/*               {{ page.topwidget_third }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Top Widget -->*/
/* */
/* */
/* <!-- Page Title -->*/
/* {%  if page.page_title and not is_front %}*/
/*   <div id="page-title">*/
/*     <div id="page-title-inner">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         {{ page.page_title }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Page Title ---- >*/
/* */
/* */
/* <!-- layout -->*/
/* <div id="wrapper">*/
/*   <!-- start: Container -->*/
/*   <div class="container">*/
/*     */
/*     <!--Content top-->*/
/*       {% if page.content_top %}*/
/*         <div class="row">*/
/*           {{ page.content_top }}*/
/*         </div>*/
/*       {% endif %}*/
/*     <!--End Content top-->*/
/*     */
/*     <!--start:content -->*/
/*     <div class="row">*/
/*       <div class="col-md-12">{{ page.breadcrumb }}</div>*/
/*     </div>*/
/* */
/*     <div class="row layout">*/
/*       <!--- Start Left SideBar -->*/
/*       {% if page.sidebar_first %}*/
/*         <div class="sidebar" >*/
/*           <div class = {{sidebarfirst}} >*/
/*             {{ page.sidebar_first }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right SideBar -->*/
/* */
/*       <!--- Start content -->*/
/*       {% if page.content %}*/
/*         <div class="content_layout">*/
/*           <div class={{contentlayout}}>*/
/*             {{ page.content }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End content -->*/
/* */
/*       <!--- Start Right SideBar -->*/
/*       {% if page.sidebar_second %}*/
/*         <div class="sidebar">*/
/*           <div class={{sidebarsecond}}>*/
/*             {{ page.sidebar_second }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right SideBar -->*/
/*       */
/*     </div>*/
/*     <!--End Content -->*/
/* */
/*     <!--Start Content Bottom-->*/
/*     {% if page.content_bottom %}*/
/*       <div class="row">*/
/*         {{ page.content_bottom }}*/
/*       </div>*/
/*     {% endif %}*/
/*     <!--End Content Bottom-->*/
/*   </div>*/
/* </div>*/
/* <!-- End layout -->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* <!-- Start bottom -->*/
/* {% if is_front %}  */
/*   {% if page.bottom_first or page.bottom_second or page.bottom_third %}*/
/*     <div class="bottom-widgets">*/
/*       <!-- Start Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/* */
/*           <!-- Start Bottom First Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_first %}*/
/*               {{ page.bottom_first }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom First Region -->*/
/* */
/*           <!-- Start Bottom Second Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_second %}*/
/*               {{ page.bottom_second }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom Second Region -->*/
/* */
/*           <!-- Start Bottom third Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_third %}*/
/*               {{ page.bottom_third }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom Third Region -->*/
/* */
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_forth %}*/
/*               {{ page.bottom_forth }}*/
/*             {% endif %}*/
/*           </div>*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Bottom -->*/
/* */
/* */
/* */
/* */
/* <!-- start: Footer -->*/
/* {% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}*/
/*   <div class="footerwidget">*/
/*     <div class="container">*/
/*       */
/*       <div class="row">*/
/*         */
/*         <!-- Start Footer First Region -->*/
/*         <div class = {{ footer_class }}>*/
/*           {% if page.footer_first %}*/
/*             {{ page.footer_first }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer First Region -->*/
/* */
/*         <!-- Start Footer Second Region -->*/
/*         <div class = {{ footer_class }}>*/
/*           {% if page.footer_second %}*/
/*             {{ page.footer_second }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer Second Region -->*/
/* */
/*         <!-- Start Footer third Region -->*/
/*         <div class = {{ footer_third_class }}>*/
/*           {% if page.footer_third %}*/
/*             {{ page.footer_third }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer Third Region -->*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--End Footer -->*/
/* */
/* <!-- Start Footer Menu -->*/
/* {% if page.footer_menu %}*/
/*   <div class="footer-menu">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-sm-6 col-md-6">*/
/*           {{ page.footer_menu }}*/
/*         </div>*/
/*         {% if show_social_icon %}*/
/*         <div class="col-sm-6 col-md-6">*/
/*           <div class="social-media">*/
/*             {% if facebook_url %}*/
/*               <a href="{{ facebook_url }}"  class="facebook" target="_blank" ><i class="fa fa-facebook"></i></a>*/
/*             {% endif %}*/
/*             {% if google_plus_url %}*/
/*               <a href="{{ google_plus_url }}"  class="google-plus" target="_blank" ><i class="fa fa-google-plus"></i></a>*/
/*             {% endif %}*/
/*             {% if twitter_url %}*/
/*               <a href="{{ twitter_url }}" class="twitter" target="_blank" ><i class="fa fa-twitter"></i></a>*/
/*             {% endif %}*/
/*             {% if linkedin_url %}*/
/*               <a href="{{ linkedin_url }}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*             {% endif %}*/
/*             {% if pinterest_url %}*/
/*               <a href="{{ pinterest_url }}" class="pinterest" target="_blank" ><i class="fa fa-pinterest"></i></a>*/
/*             {% endif %}*/
/*             {% if rss_url %}*/
/*               <a href="{{ rss_url }}" class="rss" target="_blank" ><i class="fa fa-rss"></i></a>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Footer Menu -->*/
/* */
/* {% if copyright_text or show_credit_link %}*/
/* <div class="copyright">*/
/*   <div class="container">*/
/*     <div class="row">*/
/* */
/*       <!-- Copyright -->*/
/*       <div class="col-sm-6 col-md-6">*/
/*         {% if copyright_text %}        */
/*           <p>{{copyright_text}}</p>        */
/*         {% endif %}*/
/*       </div>*/
/*       <!-- End Copyright -->*/
/* */
/*       <!-- Credit link -->*/
/*       {% if show_credit_link %}*/
/*         <div class="col-sm-6 col-md-6">*/
/*           <p class="credit-link">Designed by <a href="http://www.zymphonies.in" target="_blank">Zymphonies</a></p>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!-- End Credit link -->*/
/*       */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* <!-- Google map -->*/
/* {% if is_front and page.google_map %}*/
/*   <div class="google_map">*/
/*     {{ page.google_map }}*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Google map -->*/
