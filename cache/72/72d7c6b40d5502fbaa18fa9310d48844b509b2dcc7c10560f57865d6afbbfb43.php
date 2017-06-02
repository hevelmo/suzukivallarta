<?php

/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_ae89db76156e341dc032ef56bd03b521462b1cf2e1a48ea25132c0aee54b084a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "financiamiento/modelo/_modelo.twig", 1);
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
        echo "\t<link id=\"financing\" rel=\"stylesheet\" class=\"link-financing\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/financing-selection.css\">
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
    public function block_menu_patch($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 16, "1497516495")->display($context);
    }

    // line 26
    public function block_content_current($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 27, "291558725")->display($context);
    }

    // line 29
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 30, "1487445087")->display($context);
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 33, "1001084525")->display($context);
    }

    // line 35
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 37
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 38
        echo "\t";
        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 41
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 42
        echo "\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  129 => 41,  122 => 39,  120 => 38,  117 => 37,  112 => 35,  107 => 33,  104 => 32,  99 => 30,  96 => 29,  91 => 27,  88 => 26,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_ae89db76156e341dc032ef56bd03b521462b1cf2e1a48ea25132c0aee54b084a_1497516495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("super_navbar.twig", "financiamiento/modelo/_modelo.twig", 16);
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

    // line 17
    public function block_phone_call($context, array $blocks = array())
    {
        // line 18
        echo "\t\t";
    }

    // line 19
    public function block_models_header($context, array $blocks = array())
    {
        // line 20
        echo "\t    ";
    }

    // line 21
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 22
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 22, "1399709946")->display($context);
        // line 23
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 23,  199 => 22,  194 => 21,  190 => 20,  187 => 19,  183 => 18,  180 => 17,  161 => 16,  132 => 42,  129 => 41,  122 => 39,  120 => 38,  117 => 37,  112 => 35,  107 => 33,  104 => 32,  99 => 30,  96 => 29,  91 => 27,  88 => 26,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_ae89db76156e341dc032ef56bd03b521462b1cf2e1a48ea25132c0aee54b084a_1399709946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "financiamiento/modelo/_modelo.twig", 22);
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
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 22,  201 => 23,  199 => 22,  194 => 21,  190 => 20,  187 => 19,  183 => 18,  180 => 17,  161 => 16,  132 => 42,  129 => 41,  122 => 39,  120 => 38,  117 => 37,  112 => 35,  107 => 33,  104 => 32,  99 => 30,  96 => 29,  91 => 27,  88 => 26,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_ae89db76156e341dc032ef56bd03b521462b1cf2e1a48ea25132c0aee54b084a_291558725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("financiamiento/modelo/container.twig", "financiamiento/modelo/_modelo.twig", 27);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "financiamiento/modelo/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 27,  229 => 22,  201 => 23,  199 => 22,  194 => 21,  190 => 20,  187 => 19,  183 => 18,  180 => 17,  161 => 16,  132 => 42,  129 => 41,  122 => 39,  120 => 38,  117 => 37,  112 => 35,  107 => 33,  104 => 32,  99 => 30,  96 => 29,  91 => 27,  88 => 26,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_ae89db76156e341dc032ef56bd03b521462b1cf2e1a48ea25132c0aee54b084a_1487445087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "financiamiento/modelo/_modelo.twig", 30);
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
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 30,  269 => 27,  229 => 22,  201 => 23,  199 => 22,  194 => 21,  190 => 20,  187 => 19,  183 => 18,  180 => 17,  161 => 16,  132 => 42,  129 => 41,  122 => 39,  120 => 38,  117 => 37,  112 => 35,  107 => 33,  104 => 32,  99 => 30,  96 => 29,  91 => 27,  88 => 26,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_ae89db76156e341dc032ef56bd03b521462b1cf2e1a48ea25132c0aee54b084a_1001084525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("super_footer.twig", "financiamiento/modelo/_modelo.twig", 33);
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
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 33,  309 => 30,  269 => 27,  229 => 22,  201 => 23,  199 => 22,  194 => 21,  190 => 20,  187 => 19,  183 => 18,  180 => 17,  161 => 16,  132 => 42,  129 => 41,  122 => 39,  120 => 38,  117 => 37,  112 => 35,  107 => 33,  104 => 32,  99 => 30,  96 => 29,  91 => 27,  88 => 26,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="financing" rel="stylesheet" class="link-financing" href="{{ _host }}css/sections/financing-selection.css">*/
/* 	<link id="financing-test-drive" rel="stylesheet" class="link-financing-test-drive" href="{{ _host }}css/sections/test-drive-selection.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/* 	{% set model = mdopa %}*/
/*     <input type="hidden" id="hidden_section" value="{{ model.key }}">*/
/*     <input type="hidden" id="hidden_lugar" value="modelos">*/
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
/*     {% embed "financiamiento/modelo/container.twig" %}{% endembed %}*/
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
/* 	{#<script src="{{ _host }}js/sections/models.js"></script>#}*/
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
