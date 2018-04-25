<?php

/* themes/contrib/blogs/templates/page.html.twig */
class __TwigTemplate_c275557edce056f5b3d4e63e51f7e961da63a74d4f50cc65455bb9798a15027e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'navbar' => array($this, 'block_navbar'),
            'main_cover' => array($this, 'block_main_cover'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'blogs_aboutme' => array($this, 'block_blogs_aboutme'),
            'education_jobs' => array($this, 'block_education_jobs'),
            'whatimdoing' => array($this, 'block_whatimdoing'),
            'skills' => array($this, 'block_skills'),
            'portafolio' => array($this, 'block_portafolio'),
            'testimonials' => array($this, 'block_testimonials'),
            'blog' => array($this, 'block_blog'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'communities' => array($this, 'block_communities'),
            'footer_date' => array($this, 'block_footer_date'),
            'block_form' => array($this, 'block_block_form'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 55, "block" => 56, "set" => 72);
        $filters = array("clean_class" => 80);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        echo "
";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 56
            echo "  ";
            $this->displayBlock('navigation', $context, $blocks);
        }
        // line 70
        echo "

";
        // line 72
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 74
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 75
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 85
        echo "
";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "main_cover", array())) {
            // line 87
            echo "  ";
            $this->displayBlock('main_cover', $context, $blocks);
        }
        // line 93
        echo "
";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 225
        echo "
";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "communities", array())) {
            // line 228
            echo "  ";
            $this->displayBlock('communities', $context, $blocks);
        }
        // line 234
        echo "
";
        // line 236
        if ($this->getAttribute(($context["page"] ?? null), "footer_date", array())) {
            // line 237
            echo "  ";
            $this->displayBlock('footer_date', $context, $blocks);
        }
        // line 243
        echo "
";
        // line 245
        if ($this->getAttribute(($context["page"] ?? null), "block_form", array())) {
            // line 246
            echo "  ";
            $this->displayBlock('block_form', $context, $blocks);
        }
        // line 252
        echo "
";
        // line 253
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 254
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 56
    public function block_navigation($context, array $blocks = array())
    {
        // line 57
        echo "
    <div class=\"container_top col-md-12\">
      <div class=\"row col-md-12\">
        <div class=\"top_header_left col-sm-4 col-md-4 \">
            ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header_left", array()), "html", null, true));
        echo "
        </div>
        <div class=\"top_header_right col-sm-8 col-md-8\">
          ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header_right", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 75
    public function block_navbar($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        // line 77
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 79
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 80
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 83
        echo "  ";
    }

    // line 87
    public function block_main_cover($context, array $blocks = array())
    {
        // line 88
        echo "    <div class=\"main_cover\" role=\"contentinfo\">
      ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_cover", array()), "html", null, true));
        echo "
    </div>
  ";
    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        // line 96
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 100
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 101
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 106
            echo "      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 110
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 115
            echo "      ";
        }
        // line 116
        echo "
      ";
        // line 118
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "blogs_aboutme", array())) {
            // line 119
            echo "        ";
            $this->displayBlock('blogs_aboutme', $context, $blocks);
            // line 124
            echo "      ";
        }
        // line 125
        echo "
      ";
        // line 127
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "education_jobs", array())) {
            // line 128
            echo "        ";
            $this->displayBlock('education_jobs', $context, $blocks);
            // line 133
            echo "      ";
        }
        // line 134
        echo "
      ";
        // line 136
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "whatimdoing", array())) {
            // line 137
            echo "        ";
            $this->displayBlock('whatimdoing', $context, $blocks);
            // line 142
            echo "      ";
        }
        // line 143
        echo "
      ";
        // line 145
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "skills", array())) {
            // line 146
            echo "        ";
            $this->displayBlock('skills', $context, $blocks);
            // line 151
            echo "      ";
        }
        // line 152
        echo "
      ";
        // line 154
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "portafolio", array())) {
            // line 155
            echo "        ";
            $this->displayBlock('portafolio', $context, $blocks);
            // line 160
            echo "      ";
        }
        // line 161
        echo "
      ";
        // line 163
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "testimonials", array())) {
            // line 164
            echo "        ";
            $this->displayBlock('testimonials', $context, $blocks);
            // line 169
            echo "      ";
        }
        // line 170
        echo "
      ";
        // line 172
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "blog", array())) {
            // line 173
            echo "        ";
            $this->displayBlock('blog', $context, $blocks);
            // line 178
            echo "      ";
        }
        // line 179
        echo "


      ";
        // line 183
        echo "      ";
        // line 184
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 185
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 186
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 187
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 188
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 191
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 194
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 195
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 198
            echo "        ";
        }
        // line 199
        echo "
        ";
        // line 201
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 202
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 205
            echo "        ";
        }
        // line 206
        echo "
        ";
        // line 208
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 212
        echo "      </section>

      ";
        // line 215
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 216
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 221
            echo "      ";
        }
        // line 222
        echo "    </div>
  </div>
";
    }

    // line 101
    public function block_header($context, array $blocks = array())
    {
        // line 102
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 110
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 111
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 119
    public function block_blogs_aboutme($context, array $blocks = array())
    {
        // line 120
        echo "          <div class=\"blogs_aboutme col-md-6 col-md-offset-3\" role=\"contentinfo\">
            ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "blogs_aboutme", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 128
    public function block_education_jobs($context, array $blocks = array())
    {
        // line 129
        echo "          <div class=\"education_jobs col-md-4\" role=\"contentinfo\">
            ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "education_jobs", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 137
    public function block_whatimdoing($context, array $blocks = array())
    {
        // line 138
        echo "          <div class=\"blogs_whatimdoing col-md-4\" role=\"contentinfo\">
            ";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "whatimdoing", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 146
    public function block_skills($context, array $blocks = array())
    {
        // line 147
        echo "          <div class=\"skills col-md-4\" role=\"contentinfo\">
            ";
        // line 148
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "skills", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 155
    public function block_portafolio($context, array $blocks = array())
    {
        // line 156
        echo "          <div class=\"portafolio col-md-12\" role=\"contentinfo\">
            ";
        // line 157
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "portafolio", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 164
    public function block_testimonials($context, array $blocks = array())
    {
        // line 165
        echo "          <div class=\"testimonials col-md-8 col-md-offset-2\" role=\"contentinfo\">
            ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "testimonials", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 173
    public function block_blog($context, array $blocks = array())
    {
        // line 174
        echo "          <div class=\"blog col-md-10 col-md-offset-1\" role=\"contentinfo\">
            ";
        // line 175
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "blog", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 195
    public function block_highlighted($context, array $blocks = array())
    {
        // line 196
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 202
    public function block_help($context, array $blocks = array())
    {
        // line 203
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 208
    public function block_content($context, array $blocks = array())
    {
        // line 209
        echo "          <a id=\"main-content\"></a>
          ";
        // line 210
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 216
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 217
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 218
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 228
    public function block_communities($context, array $blocks = array())
    {
        // line 229
        echo "    <div class=\"communities col-md-12 \" role=\"contentinfo\">
      ";
        // line 230
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "communities", array()), "html", null, true));
        echo "
    </div>
  ";
    }

    // line 237
    public function block_footer_date($context, array $blocks = array())
    {
        // line 238
        echo "    <div class=\" date_block col-md-12\" role=\"contentinfo\">
      ";
        // line 239
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_date", array()), "html", null, true));
        echo "
    </div>
  ";
    }

    // line 246
    public function block_block_form($context, array $blocks = array())
    {
        // line 247
        echo "    <div class=\" block_form col-md-6\" role=\"contentinfo\">
      ";
        // line 248
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "block_form", array()), "html", null, true));
        echo "
    </div>
  ";
    }

    // line 254
    public function block_footer($context, array $blocks = array())
    {
        // line 255
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 256
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/blogs/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 256,  571 => 255,  568 => 254,  561 => 248,  558 => 247,  555 => 246,  548 => 239,  545 => 238,  542 => 237,  535 => 230,  532 => 229,  529 => 228,  522 => 218,  519 => 217,  516 => 216,  510 => 210,  507 => 209,  504 => 208,  497 => 203,  494 => 202,  487 => 196,  484 => 195,  477 => 175,  474 => 174,  471 => 173,  464 => 166,  461 => 165,  458 => 164,  451 => 157,  448 => 156,  445 => 155,  438 => 148,  435 => 147,  432 => 146,  425 => 139,  422 => 138,  419 => 137,  412 => 130,  409 => 129,  406 => 128,  399 => 121,  396 => 120,  393 => 119,  386 => 112,  383 => 111,  380 => 110,  373 => 103,  370 => 102,  367 => 101,  361 => 222,  358 => 221,  355 => 216,  352 => 215,  348 => 212,  345 => 208,  342 => 206,  339 => 205,  336 => 202,  333 => 201,  330 => 199,  327 => 198,  324 => 195,  321 => 194,  315 => 191,  313 => 188,  312 => 187,  311 => 186,  310 => 185,  309 => 184,  307 => 183,  302 => 179,  299 => 178,  296 => 173,  293 => 172,  290 => 170,  287 => 169,  284 => 164,  281 => 163,  278 => 161,  275 => 160,  272 => 155,  269 => 154,  266 => 152,  263 => 151,  260 => 146,  257 => 145,  254 => 143,  251 => 142,  248 => 137,  245 => 136,  242 => 134,  239 => 133,  236 => 128,  233 => 127,  230 => 125,  227 => 124,  224 => 119,  221 => 118,  218 => 116,  215 => 115,  212 => 110,  209 => 109,  206 => 107,  203 => 106,  200 => 101,  197 => 100,  190 => 96,  187 => 95,  180 => 89,  177 => 88,  174 => 87,  170 => 83,  168 => 80,  167 => 79,  166 => 77,  164 => 76,  161 => 75,  152 => 64,  146 => 61,  140 => 57,  137 => 56,  131 => 254,  129 => 253,  126 => 252,  122 => 246,  120 => 245,  117 => 243,  113 => 237,  111 => 236,  108 => 234,  104 => 228,  102 => 227,  99 => 225,  97 => 95,  94 => 93,  90 => 87,  88 => 86,  85 => 85,  81 => 75,  79 => 74,  77 => 72,  73 => 70,  69 => 56,  67 => 55,  64 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{% if page.navigation %}
  {% block navigation %}

    <div class=\"container_top col-md-12\">
      <div class=\"row col-md-12\">
        <div class=\"top_header_left col-sm-4 col-md-4 \">
            {{page.top_header_left}}
        </div>
        <div class=\"top_header_right col-sm-8 col-md-8\">
          {{page.top_header_right}}
        </div>
      </div>
    </div>
  {% endblock %}
{% endif %}


{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
  {% endblock %}
{% endif %}

{% if page.main_cover %}
  {% block main_cover %}
    <div class=\"main_cover\" role=\"contentinfo\">
      {{ page.main_cover }}
    </div>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{container}} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {#About Me#}
      {% if page.blogs_aboutme %}
        {% block blogs_aboutme %}
          <div class=\"blogs_aboutme col-md-6 col-md-offset-3\" role=\"contentinfo\">
            {{ page.blogs_aboutme }}
          </div>
        {% endblock %}
      {% endif %}

      {#Education and Jobs#}
      {% if page.education_jobs %}
        {% block education_jobs %}
          <div class=\"education_jobs col-md-4\" role=\"contentinfo\">
            {{ page.education_jobs }}
          </div>
        {% endblock %}
      {% endif %}

      {#What I am doing#}
      {% if page.whatimdoing %}
        {% block whatimdoing %}
          <div class=\"blogs_whatimdoing col-md-4\" role=\"contentinfo\">
            {{ page.whatimdoing }}
          </div>
        {% endblock %}
      {% endif %}

      {#Skills#}
      {% if page.skills %}
        {% block skills %}
          <div class=\"skills col-md-4\" role=\"contentinfo\">
            {{ page.skills }}
          </div>
        {% endblock %}
      {% endif %}

      {#Portafolio#}
      {% if page.portafolio %}
        {% block portafolio %}
          <div class=\"portafolio col-md-12\" role=\"contentinfo\">
            {{ page.portafolio }}
          </div>
        {% endblock %}
      {% endif %}

      {#Testimonials#}
      {% if page.testimonials %}
        {% block testimonials %}
          <div class=\"testimonials col-md-8 col-md-offset-2\" role=\"contentinfo\">
            {{ page.testimonials }}
          </div>
        {% endblock %}
      {% endif %}

      {#Blog#}
      {% if page.blog %}
        {% block blog %}
          <div class=\"blog col-md-10 col-md-offset-1\" role=\"contentinfo\">
            {{ page.blog }}
          </div>
        {% endblock %}
      {% endif %}



      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{#COmmunities#}
{% if page.communities %}
  {% block communities %}
    <div class=\"communities col-md-12 \" role=\"contentinfo\">
      {{ page.communities }}
    </div>
  {% endblock %}
{% endif %}

{#Social Networks#}
{% if page.footer_date %}
  {% block footer_date %}
    <div class=\" date_block col-md-12\" role=\"contentinfo\">
      {{ page.footer_date }}
    </div>
  {% endblock %}
{% endif %}

{#Form block#}
{% if page.block_form %}
  {% block block_form %}
    <div class=\" block_form col-md-6\" role=\"contentinfo\">
      {{ page.block_form }}
    </div>
  {% endblock %}
{% endif %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/contrib/blogs/templates/page.html.twig", "/home/aly/www/myblog/web/themes/contrib/blogs/templates/page.html.twig");
    }
}
