<?php

/* modelos/_modelos.twig */
class __TwigTemplate_f8164ec850ee9e5065197a7ef462c7d38cc782e863317f75031701bfb09d3ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "modelos/_modelos.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'section' => array($this, 'block_section'),
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
        echo "\t<link id=\"models\" rel=\"stylesheet\" class=\"link-models\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models_gama.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"modelos\">
";
    }

    // line 9
    public function block_menu_patch($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 13, "1653415009")->display($context);
    }

    // line 23
    public function block_content_current($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 24, "1277268334")->display($context);
    }

    // line 26
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 27, "61447068")->display($context);
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 30, "1460558015")->display($context);
    }

    // line 32
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 34
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 35
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 37
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 38
        echo "\t";
        // line 39
        echo "\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  102 => 32,  97 => 30,  94 => 29,  89 => 27,  86 => 26,  81 => 24,  78 => 23,  73 => 13,  70 => 12,  65 => 10,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_f8164ec850ee9e5065197a7ef462c7d38cc782e863317f75031701bfb09d3ce4_1653415009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/_modelos.twig", 13);
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

    // line 14
    public function block_phone_call($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
    }

    // line 16
    public function block_models_header($context, array $blocks = array())
    {
        // line 17
        echo "\t    ";
    }

    // line 18
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 19
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 19, "1351392111")->display($context);
        // line 20
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 20,  189 => 19,  184 => 18,  180 => 17,  177 => 16,  173 => 15,  170 => 14,  151 => 13,  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  102 => 32,  97 => 30,  94 => 29,  89 => 27,  86 => 26,  81 => 24,  78 => 23,  73 => 13,  70 => 12,  65 => 10,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_f8164ec850ee9e5065197a7ef462c7d38cc782e863317f75031701bfb09d3ce4_1351392111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "modelos/_modelos.twig", 19);
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
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 19,  191 => 20,  189 => 19,  184 => 18,  180 => 17,  177 => 16,  173 => 15,  170 => 14,  151 => 13,  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  102 => 32,  97 => 30,  94 => 29,  89 => 27,  86 => 26,  81 => 24,  78 => 23,  73 => 13,  70 => 12,  65 => 10,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_f8164ec850ee9e5065197a7ef462c7d38cc782e863317f75031701bfb09d3ce4_1277268334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("modelos/container.twig", "modelos/_modelos.twig", 24);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 24,  219 => 19,  191 => 20,  189 => 19,  184 => 18,  180 => 17,  177 => 16,  173 => 15,  170 => 14,  151 => 13,  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  102 => 32,  97 => 30,  94 => 29,  89 => 27,  86 => 26,  81 => 24,  78 => 23,  73 => 13,  70 => 12,  65 => 10,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_f8164ec850ee9e5065197a7ef462c7d38cc782e863317f75031701bfb09d3ce4_61447068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "modelos/_modelos.twig", 27);
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
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 27,  259 => 24,  219 => 19,  191 => 20,  189 => 19,  184 => 18,  180 => 17,  177 => 16,  173 => 15,  170 => 14,  151 => 13,  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  102 => 32,  97 => 30,  94 => 29,  89 => 27,  86 => 26,  81 => 24,  78 => 23,  73 => 13,  70 => 12,  65 => 10,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_f8164ec850ee9e5065197a7ef462c7d38cc782e863317f75031701bfb09d3ce4_1460558015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/_modelos.twig", 30);
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
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 30,  299 => 27,  259 => 24,  219 => 19,  191 => 20,  189 => 19,  184 => 18,  180 => 17,  177 => 16,  173 => 15,  170 => 14,  151 => 13,  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  102 => 32,  97 => 30,  94 => 29,  89 => 27,  86 => 26,  81 => 24,  78 => 23,  73 => 13,  70 => 12,  65 => 10,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="models" rel="stylesheet" class="link-models" href="{{ _host }}css/sections/models_gama.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="modelos">*/
/* {% endblock %}*/
/* {% block menu_patch %}*/
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 	    {% endblock %}*/
/* 	    {% block menu_catalogs %}                */
/* 		    {% embed "menus/list_catallogs.twig" %}{% endembed %}*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "modelos/container.twig" %}{% endembed %}*/
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
/* 	<script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	{#$('.seleccionar').chosen();#}*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
