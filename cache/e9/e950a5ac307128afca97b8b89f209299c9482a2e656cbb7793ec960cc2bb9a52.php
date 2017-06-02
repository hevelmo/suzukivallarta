<?php

/* garantia/_garantia.twig */
class __TwigTemplate_77d6b12671def6d2a0bdd5502cbf8c66c6a37d91ca84f27d57f88471fe9163d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "garantia/_garantia.twig", 1);
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
        echo "\t<link id=\"home\" rel=\"stylesheet\" class=\"link-home\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/warranty.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"reasons\">
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
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 14, "251178728")->display($context);
    }

    // line 24
    public function block_content_current($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 25, "982037661")->display($context);
    }

    // line 27
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 28, "530359345")->display($context);
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 31, "1652510063")->display($context);
    }

    // line 33
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 35
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 36
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/warranty.js\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 39
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 33,  97 => 31,  94 => 30,  89 => 28,  86 => 27,  81 => 25,  78 => 24,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_77d6b12671def6d2a0bdd5502cbf8c66c6a37d91ca84f27d57f88471fe9163d6_251178728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("super_navbar.twig", "garantia/_garantia.twig", 14);
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
        echo "\t\t";
    }

    // line 17
    public function block_models_header($context, array $blocks = array())
    {
        // line 18
        echo "\t    ";
    }

    // line 19
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 20
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 20, "931835303")->display($context);
        // line 21
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 21,  188 => 20,  183 => 19,  179 => 18,  176 => 17,  172 => 16,  169 => 15,  150 => 14,  121 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 33,  97 => 31,  94 => 30,  89 => 28,  86 => 27,  81 => 25,  78 => 24,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_77d6b12671def6d2a0bdd5502cbf8c66c6a37d91ca84f27d57f88471fe9163d6_931835303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "garantia/_garantia.twig", 20);
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
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 20,  190 => 21,  188 => 20,  183 => 19,  179 => 18,  176 => 17,  172 => 16,  169 => 15,  150 => 14,  121 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 33,  97 => 31,  94 => 30,  89 => 28,  86 => 27,  81 => 25,  78 => 24,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_77d6b12671def6d2a0bdd5502cbf8c66c6a37d91ca84f27d57f88471fe9163d6_982037661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("garantia/container.twig", "garantia/_garantia.twig", 25);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "garantia/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 25,  218 => 20,  190 => 21,  188 => 20,  183 => 19,  179 => 18,  176 => 17,  172 => 16,  169 => 15,  150 => 14,  121 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 33,  97 => 31,  94 => 30,  89 => 28,  86 => 27,  81 => 25,  78 => 24,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_77d6b12671def6d2a0bdd5502cbf8c66c6a37d91ca84f27d57f88471fe9163d6_530359345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "garantia/_garantia.twig", 28);
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
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 28,  258 => 25,  218 => 20,  190 => 21,  188 => 20,  183 => 19,  179 => 18,  176 => 17,  172 => 16,  169 => 15,  150 => 14,  121 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 33,  97 => 31,  94 => 30,  89 => 28,  86 => 27,  81 => 25,  78 => 24,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_77d6b12671def6d2a0bdd5502cbf8c66c6a37d91ca84f27d57f88471fe9163d6_1652510063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 31
        $this->parent = $this->loadTemplate("super_footer.twig", "garantia/_garantia.twig", 31);
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
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 31,  298 => 28,  258 => 25,  218 => 20,  190 => 21,  188 => 20,  183 => 19,  179 => 18,  176 => 17,  172 => 16,  169 => 15,  150 => 14,  121 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 33,  97 => 31,  94 => 30,  89 => 28,  86 => 27,  81 => 25,  78 => 24,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/warranty.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="reasons">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
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
/*     {% embed "garantia/container.twig" %}{% endembed %}*/
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
/* 	<script src="{{ _host }}js/sections/warranty.js"></script>*/
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
