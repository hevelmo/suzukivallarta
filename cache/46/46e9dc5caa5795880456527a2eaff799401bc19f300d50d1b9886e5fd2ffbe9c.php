<?php

/* 404/_404.twig */
class __TwigTemplate_7cf8b4f09b0af2c8cabb1a4098a5e76992f6c050673c8d2db8163fbaaf613faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "404/_404.twig", 1);
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
        echo "\t<link id=\"404\" rel=\"stylesheet\" class=\"link-404\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/404.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"404\">
";
    }

    // line 9
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 13, "834715846")->display($context);
    }

    // line 19
    public function block_content_current($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 20, "99713570")->display($context);
        echo "\t
";
    }

    // line 22
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 23, "63087170")->display($context);
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 26, "1961535020")->display($context);
    }

    // line 28
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 30
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 31
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 33
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_7cf8b4f09b0af2c8cabb1a4098a5e76992f6c050673c8d2db8163fbaaf613faf_834715846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "404/_404.twig", 13);
        $this->blocks = array(
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
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 15
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 15, "208602079")->display($context);
        // line 16
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 16,  170 => 15,  165 => 14,  148 => 13,  119 => 33,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_7cf8b4f09b0af2c8cabb1a4098a5e76992f6c050673c8d2db8163fbaaf613faf_208602079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "404/_404.twig", 15);
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
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 15,  172 => 16,  170 => 15,  165 => 14,  148 => 13,  119 => 33,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_7cf8b4f09b0af2c8cabb1a4098a5e76992f6c050673c8d2db8163fbaaf613faf_99713570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("404/container.twig", "404/_404.twig", 20);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "404/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 20,  200 => 15,  172 => 16,  170 => 15,  165 => 14,  148 => 13,  119 => 33,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_7cf8b4f09b0af2c8cabb1a4098a5e76992f6c050673c8d2db8163fbaaf613faf_63087170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "404/_404.twig", 23);
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
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 23,  240 => 20,  200 => 15,  172 => 16,  170 => 15,  165 => 14,  148 => 13,  119 => 33,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_7cf8b4f09b0af2c8cabb1a4098a5e76992f6c050673c8d2db8163fbaaf613faf_1961535020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("super_footer.twig", "404/_404.twig", 26);
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
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 26,  280 => 23,  240 => 20,  200 => 15,  172 => 16,  170 => 15,  165 => 14,  148 => 13,  119 => 33,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="404" rel="stylesheet" class="link-404" href="{{ _host }}css/sections/404.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="404">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 	    {% block menu_catalogs %}                */
/* 		    {% embed "menus/list_catallogs.twig" %}{% endembed %}*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "404/container.twig" %}{% endembed %}	*/
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
