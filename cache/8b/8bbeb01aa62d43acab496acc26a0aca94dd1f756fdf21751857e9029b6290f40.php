<?php

/* grupo/_grupo.twig */
class __TwigTemplate_002982b5c04580b3a16acd601ba50d10f86cfafaef2d35eca767000c9b816db4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "grupo/_grupo.twig", 1);
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
        echo "\t<link id=\"group\" rel=\"stylesheet\" class=\"link-group\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/warranty.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"group\">
";
    }

    // line 10
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 14, "153533383")->display($context);
    }

    // line 32
    public function block_content_current($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 33, "197057736")->display($context);
    }

    // line 35
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 36, "1306362201")->display($context);
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 39, "2093735977")->display($context);
    }

    // line 41
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 43
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 44
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 46
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  110 => 44,  107 => 43,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  81 => 33,  78 => 32,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_002982b5c04580b3a16acd601ba50d10f86cfafaef2d35eca767000c9b816db4_153533383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("super_navbar.twig", "grupo/_grupo.twig", 14);
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

    // line 15
    public function block_phone_call($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t";
        // line 23
        echo "\t\t";
    }

    // line 24
    public function block_models_header($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t";
        // line 26
        echo "\t    ";
    }

    // line 27
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 28
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 28, "747987372")->display($context);
        // line 29
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 29,  188 => 28,  183 => 27,  179 => 26,  177 => 25,  174 => 24,  170 => 23,  168 => 16,  165 => 15,  146 => 14,  117 => 46,  110 => 44,  107 => 43,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  81 => 33,  78 => 32,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_002982b5c04580b3a16acd601ba50d10f86cfafaef2d35eca767000c9b816db4_747987372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "grupo/_grupo.twig", 28);
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
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 28,  190 => 29,  188 => 28,  183 => 27,  179 => 26,  177 => 25,  174 => 24,  170 => 23,  168 => 16,  165 => 15,  146 => 14,  117 => 46,  110 => 44,  107 => 43,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  81 => 33,  78 => 32,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_002982b5c04580b3a16acd601ba50d10f86cfafaef2d35eca767000c9b816db4_197057736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("grupo/container.twig", "grupo/_grupo.twig", 33);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "grupo/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 33,  218 => 28,  190 => 29,  188 => 28,  183 => 27,  179 => 26,  177 => 25,  174 => 24,  170 => 23,  168 => 16,  165 => 15,  146 => 14,  117 => 46,  110 => 44,  107 => 43,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  81 => 33,  78 => 32,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_002982b5c04580b3a16acd601ba50d10f86cfafaef2d35eca767000c9b816db4_1306362201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 36
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "grupo/_grupo.twig", 36);
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
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 36,  258 => 33,  218 => 28,  190 => 29,  188 => 28,  183 => 27,  179 => 26,  177 => 25,  174 => 24,  170 => 23,  168 => 16,  165 => 15,  146 => 14,  117 => 46,  110 => 44,  107 => 43,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  81 => 33,  78 => 32,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_002982b5c04580b3a16acd601ba50d10f86cfafaef2d35eca767000c9b816db4_2093735977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 39
        $this->parent = $this->loadTemplate("super_footer.twig", "grupo/_grupo.twig", 39);
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
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 39,  298 => 36,  258 => 33,  218 => 28,  190 => 29,  188 => 28,  183 => 27,  179 => 26,  177 => 25,  174 => 24,  170 => 23,  168 => 16,  165 => 15,  146 => 14,  117 => 46,  110 => 44,  107 => 43,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  81 => 33,  78 => 32,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="group" rel="stylesheet" class="link-group" href="{{ _host }}css/sections/warranty.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="group">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 			{#<div id="phone-call">*/
/* 				<a href="tel: +013337771989">*/
/* 					<span style="color: #ffffff;">*/
/* 				    	Tel. 01(33)3777-1989*/
/* 					</span>*/
/* 				</a>*/
/* 			</div>#}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 			{#{% embed "menus/models_menu.twig" %}{% endembed %}#}*/
/* 	    {% endblock %}*/
/* 	    {% block menu_catalogs %}                */
/* 		    {% embed "menus/list_catallogs.twig" %}{% endembed %}*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "grupo/container.twig" %}{% endembed %}*/
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
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
