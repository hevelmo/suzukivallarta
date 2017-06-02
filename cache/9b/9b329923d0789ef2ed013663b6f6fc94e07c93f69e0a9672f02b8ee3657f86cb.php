<?php

/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "modelos/modelo/_modelo.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'section' => array($this, 'block_section'),
            'section_arrow' => array($this, 'block_section_arrow'),
            'testdrive_flag' => array($this, 'block_testdrive_flag'),
            'menu_patch' => array($this, 'block_menu_patch'),
            'navbar' => array($this, 'block_navbar'),
            'content_current' => array($this, 'block_content_current'),
            'scroll_to_top' => array($this, 'block_scroll_to_top'),
            'footer' => array($this, 'block_footer'),
            'script_load_js' => array($this, 'block_script_load_js'),
            'section_scripts' => array($this, 'block_section_scripts'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 3
    public function block_section_stylessheet($context, array $blocks = array())
    {
        // line 4
        echo "\t<link id=\"model-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" rel=\"stylesheet\" class=\"link-model-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models.css\">
\t<link id=\"financing-test-drive\" rel=\"stylesheet\" class=\"link-financing-test-drive\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/test-drive-selection.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 9
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"hidden_lugar\" value=\"modelos\">
";
    }

    // line 12
    public function block_section_arrow($context, array $blocks = array())
    {
        // line 13
        echo "\t<div id=\"model-section-arrow\" style=\"display: none; top: 0px; margin-left: -403px; opacity: 1;\">
\t\t<span>&nbsp;</span>
\t</div>
";
    }

    // line 17
    public function block_testdrive_flag($context, array $blocks = array())
    {
        echo "            
\t<div id=\"model-test-drive-flag\">
\t\t<a href=\"#prueba-de-manejo\" id=\"model-test-drive-flag-link\">
\t\t\t<span>Prueba de Manejo</span>
\t\t</a>
\t</div>
";
    }

    // line 24
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 27
    public function block_navbar($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 28, "821730043")->display($context);
    }

    // line 39
    public function block_content_current($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 40, "2102714995")->display($context);
    }

    // line 42
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 43, "1369713875")->display($context);
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 46, "805622314")->display($context);
    }

    // line 48
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 50
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 51
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/models.js\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 54
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 55
        echo "\ttoHtmlMethod.toHtml();
\t//_datepicker.init();
\t// Initialization
    \$('.test_drive_model_date').datepicker();
";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2_821730043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/modelo/_modelo.twig", 28);
        $this->blocks = array(
            'phone_call' => array($this, 'block_phone_call'),
            'models_header' => array($this, 'block_models_header'),
            'menu_catalogs' => array($this, 'block_menu_catalogs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_phone_call($context, array $blocks = array())
    {
        // line 30
        echo "\t\t";
    }

    // line 31
    public function block_models_header($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 32, "20667465")->display($context);
        // line 33
        echo "\t    ";
    }

    // line 34
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 35
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 35, "1443372474")->display($context);
        // line 36
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 36,  235 => 35,  230 => 34,  226 => 33,  223 => 32,  220 => 31,  216 => 30,  213 => 29,  194 => 28,  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2_20667465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 32
        $this->parent = $this->loadTemplate("menus/models_menu.twig", "modelos/modelo/_modelo.twig", 32);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/models_menu.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 32,  237 => 36,  235 => 35,  230 => 34,  226 => 33,  223 => 32,  220 => 31,  216 => 30,  213 => 29,  194 => 28,  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2_1443372474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 35
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "modelos/modelo/_modelo.twig", 35);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/list_catallogs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 35,  265 => 32,  237 => 36,  235 => 35,  230 => 34,  226 => 33,  223 => 32,  220 => 31,  216 => 30,  213 => 29,  194 => 28,  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2_2102714995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("modelos/modelo/container.twig", "modelos/modelo/_modelo.twig", 40);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/modelo/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 40,  305 => 35,  265 => 32,  237 => 36,  235 => 35,  230 => 34,  226 => 33,  223 => 32,  220 => 31,  216 => 30,  213 => 29,  194 => 28,  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2_1369713875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 43
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "modelos/modelo/_modelo.twig", 43);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/scrolltotop.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 43,  345 => 40,  305 => 35,  265 => 32,  237 => 36,  235 => 35,  230 => 34,  226 => 33,  223 => 32,  220 => 31,  216 => 30,  213 => 29,  194 => 28,  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_f88a336ace2d780059adbf7b84953846ff2c878894ff41583979739bb5afa0b2_805622314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 46
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/modelo/_modelo.twig", 46);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_footer.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 46,  385 => 43,  345 => 40,  305 => 35,  265 => 32,  237 => 36,  235 => 35,  230 => 34,  226 => 33,  223 => 32,  220 => 31,  216 => 30,  213 => 29,  194 => 28,  162 => 55,  159 => 54,  153 => 52,  148 => 51,  145 => 50,  140 => 48,  135 => 46,  132 => 45,  127 => 43,  124 => 42,  119 => 40,  116 => 39,  111 => 28,  108 => 27,  100 => 24,  88 => 17,  81 => 13,  78 => 12,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="model-{{ model.key }}" rel="stylesheet" class="link-model-{{ model.key }}" href="{{ _host }}css/sections/models.css">*/
/* 	<link id="financing-test-drive" rel="stylesheet" class="link-financing-test-drive" href="{{ _host }}css/sections/test-drive-selection.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/* 	{% set model = mdopa %}*/
/*     <input type="hidden" id="hidden_section" value="{{ model.key }}">*/
/*     <input type="hidden" id="hidden_lugar" value="modelos">*/
/* {% endblock %}*/
/* {% block section_arrow %}*/
/* 	<div id="model-section-arrow" style="display: none; top: 0px; margin-left: -403px; opacity: 1;">*/
/* 		<span>&nbsp;</span>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block testdrive_flag %}            */
/* 	<div id="model-test-drive-flag">*/
/* 		<a href="#prueba-de-manejo" id="model-test-drive-flag-link">*/
/* 			<span>Prueba de Manejo</span>*/
/* 		</a>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 			{% embed "menus/models_menu.twig" %}{% endembed %}*/
/* 	    {% endblock %}*/
/* 	    {% block menu_catalogs %}                */
/* 		    {% embed "menus/list_catallogs.twig" %}{% endembed %}*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "modelos/modelo/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block scroll_to_top %}*/
/*     {% embed "menus/scrolltotop.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* 	<script src="{{ _host }}js/sections/models.js"></script>*/
/* 	<script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	toHtmlMethod.toHtml();*/
/* 	//_datepicker.init();*/
/* 	// Initialization*/
/*     $('.test_drive_model_date').datepicker();*/
/* {% endblock %}*/
