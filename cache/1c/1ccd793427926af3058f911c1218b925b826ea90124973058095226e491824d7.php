<?php

/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "catalogos/_catalogos.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'social_bar' => array($this, 'block_social_bar'),
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
        echo "    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/catalog.css\">
    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/socialbar.css\">
    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models.css\">
\t";
    }

    // line 9
    public function block_social_bar($context, array $blocks = array())
    {
        echo " 
\t";
        // line 10
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 10, "824751515")->display($context);
        echo "               
";
    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["catalogo"] = (isset($context["catpa"]) ? $context["catpa"] : null);
        // line 14
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"catalogs-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "key", array()), "html", null, true);
        echo "\">
";
    }

    // line 16
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
    <div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 20, "119999783")->display($context);
    }

    // line 30
    public function block_content_current($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 31, "548789574")->display($context);
    }

    // line 33
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 34, "704363568")->display($context);
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 37, "1678833513")->display($context);
    }

    // line 39
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 41
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 42
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/catalogs.js\"></script>
    ";
        // line 44
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 46
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 47
        echo "    \$('body').prepend( patch_bar );
    detectNavigatorMethods.IE10();
";
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6_824751515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("super_socialbar.twig", "catalogos/_catalogos.twig", 10);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_socialbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 10,  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6_119999783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("super_navbar.twig", "catalogos/_catalogos.twig", 20);
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

    // line 21
    public function block_phone_call($context, array $blocks = array())
    {
        // line 22
        echo "        ";
    }

    // line 23
    public function block_models_header($context, array $blocks = array())
    {
        // line 24
        echo "\t\t";
    }

    // line 25
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
            ";
        // line 26
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 26, "2077012932")->display($context);
        // line 27
        echo "        ";
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 27,  258 => 26,  253 => 25,  249 => 24,  246 => 23,  242 => 22,  239 => 21,  220 => 20,  180 => 10,  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6_2077012932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "catalogos/_catalogos.twig", 26);
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
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 26,  260 => 27,  258 => 26,  253 => 25,  249 => 24,  246 => 23,  242 => 22,  239 => 21,  220 => 20,  180 => 10,  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6_548789574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 31
        $this->parent = $this->loadTemplate("catalogos/container.twig", "catalogos/_catalogos.twig", 31);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "catalogos/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 31,  288 => 26,  260 => 27,  258 => 26,  253 => 25,  249 => 24,  246 => 23,  242 => 22,  239 => 21,  220 => 20,  180 => 10,  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6_704363568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 34
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "catalogos/_catalogos.twig", 34);
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
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 34,  328 => 31,  288 => 26,  260 => 27,  258 => 26,  253 => 25,  249 => 24,  246 => 23,  242 => 22,  239 => 21,  220 => 20,  180 => 10,  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_e23c90fd357f63730c004e4d95742e589acf2fc03d92e376baa3028e369a0fb6_1678833513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 37
        $this->parent = $this->loadTemplate("super_footer.twig", "catalogos/_catalogos.twig", 37);
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
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 37,  368 => 34,  328 => 31,  288 => 26,  260 => 27,  258 => 26,  253 => 25,  249 => 24,  246 => 23,  242 => 22,  239 => 21,  220 => 20,  180 => 10,  150 => 47,  147 => 46,  140 => 44,  135 => 42,  132 => 41,  127 => 39,  122 => 37,  119 => 36,  114 => 34,  111 => 33,  106 => 31,  103 => 30,  98 => 20,  95 => 19,  87 => 16,  80 => 14,  77 => 13,  74 => 12,  68 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/catalog.css">*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/socialbar.css">*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/models.css">*/
/* 	{#<link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/slick-theme.css">#}*/
/* {% endblock %}*/
/* {% block social_bar %} */
/* 	{% embed "super_socialbar.twig" %}{% endembed %}               */
/* {% endblock %}*/
/* {% block section %}*/
/*     {% set catalogo = catpa %}*/
/*     <input type="hidden" id="hidden_section" value="catalogs-{{ catalogo.key }}">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/*     <div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/*         {% endblock %}*/
/*         {% block models_header %}*/
/* 		{% endblock %}*/
/*         {% block menu_catalogs %}                */
/*             {% embed "menus/list_catallogs.twig" %}{% endembed %}*/
/*         {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "catalogos/container.twig" %}{% endembed %}*/
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
/*     <script src="{{ _host }}js/sections/catalogs.js"></script>*/
/*     {#<script src="{{ _host }}lib/assets/plugins/slick/slick.js"></script>#}*/
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/*     $('body').prepend( patch_bar );*/
/*     detectNavigatorMethods.IE10();*/
/* {% endblock %}*/
