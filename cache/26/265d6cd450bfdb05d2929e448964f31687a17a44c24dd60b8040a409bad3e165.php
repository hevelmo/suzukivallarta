<?php

/* super_navbar.twig */
class __TwigTemplate_57203b5d23acb56ccf3af4e54db2406e6b8fb47f808895ceab4d5bd577016973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'phone_call' => array($this, 'block_phone_call'),
            'models_header' => array($this, 'block_models_header'),
            'menu_panel' => array($this, 'block_menu_panel'),
            'menu_catalogs' => array($this, 'block_menu_catalogs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<section id=\"header-wrapper\" class=\"wrap push\">
    <section id=\"header-content\">
        <div class=\"header-wrapper\" id=\"header-spacer\">
            <header id=\"header-zone\">
                <div id=\"logo-wrapper\">
                    <div id=\"logo\">
                        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" title=\"Suzuki Autos ";
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                            <span>Suzuki <sup style=\"position: relative; top: -2px;\">&copy;</sup> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
                <div id=\"regular-header\">
                    <div class=\"content-no_wrapper\">
                        <div id=\"top-bar\">
                            <nav>
                                <ul>
                                    <li>
                                        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "grupo\" title=\"Grupo\" onclick=\"ga('send', 'event', 'Grupo', 'Liga_interna', 'Grupo Suzuki');\">
                                            <span>Grupo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "concesionarias\" title=\"Concesionarias\" onclick=\"ga('send', 'event', 'Concesionarias', 'Liga_interna', 'Ubica nuestras concesionarias');\">
                                            <span>Concesionarias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" ";
        // line 29
        echo " class=\"catalogo-dropdown\" title=\"Catalogos\" onclick=\"ga('send', 'event', 'Catalogo', 'Liga_interna', 'Conoce nuestro catalogo Suzuki');\">
                                            <span>Catálogos</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "contactanos\" title=\"Contactános\" onclick=\"ga('send', 'event', 'Contactanos', 'Liga_interna', 'Contactanos');\">
                                            <span>Contáctanos</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        <a href=\"http://suzukigdl.com.mx/seminuevos/\" title=\"Seminuevos López Mateos\" onclick=\"ga('send', 'event', 'Seminuevos', 'Liga_interna', 'Seminuevos Suzuki');\">
                                            <span>Seminuevos</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        ";
        // line 44
        $this->displayBlock('phone_call', $context, $blocks);
        // line 46
        echo "                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div id=\"main-nav\">
                            <nav>
                                <ul>
                                    <li>
                                        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "modelos\" title=\"Modelos\"onclick=\"ga('send', 'event', 'Modelos', 'Liga_interna', 'Descubre nuestra gamma de modelos Suzuki');\">
                                            <span>Modelos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "financiamiento\" title=\"Financiamiento\" onclick=\"ga('send', 'event', 'Financiamento', 'Liga_interna', 'Financiamiento');\">
                                            <span>Financiamiento</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a id=\"header-owners-button\" title=\"Propietarios\" class=\"owners expand-header cur-hover\">
                                            <span>Mi Suzuki</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        <a id=\"header-before-buy-button\" title=\"Antes de comprar\" class=\"before-buy expand-header cur-hover\">
                                            <span>Comprar un Suzuki</span>
                                        </a>
                                    </li>
                                    <div class=\"clearfix\"></div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id=\"models-header\">
                    ";
        // line 80
        $this->displayBlock('models_header', $context, $blocks);
        // line 82
        echo "                </div>
            </header>
            <div id=\"header-mobile\">
                <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/template/common/header/horizontal_logo.png\" alt=\"Logo Suzuki\">
                </a>
                <a href=\"#mobile-menu\" class=\"menu-link\">☰</a>
                ";
        // line 93
        echo "            </div>
            <div id=\"header-panel\" class=\"header-panel\">
                <div id=\"header-sections-wrapper\" class=\"current-sections-wrapper\">
                    ";
        // line 96
        $this->displayBlock('menu_panel', $context, $blocks);
        // line 100
        echo "                </div>
            </div>
            ";
        // line 102
        $this->displayBlock('menu_catalogs', $context, $blocks);
        // line 104
        echo "        </div>
    </section>
</section>
";
    }

    // line 44
    public function block_phone_call($context, array $blocks = array())
    {
        // line 45
        echo "                                        ";
    }

    // line 80
    public function block_models_header($context, array $blocks = array())
    {
        // line 81
        echo "                    ";
    }

    // line 96
    public function block_menu_panel($context, array $blocks = array())
    {
        // line 97
        echo "                        ";
        $this->loadTemplate("super_navbar.twig", "super_navbar.twig", 97, "1344254732")->display($context);
        // line 98
        echo "                        ";
        $this->loadTemplate("super_navbar.twig", "super_navbar.twig", 98, "1869126149")->display($context);
        // line 99
        echo "                    ";
    }

    // line 102
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
            ";
    }

    public function getTemplateName()
    {
        return "super_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 102,  190 => 99,  187 => 98,  184 => 97,  181 => 96,  177 => 81,  174 => 80,  170 => 45,  167 => 44,  160 => 104,  158 => 102,  154 => 100,  152 => 96,  147 => 93,  141 => 86,  137 => 85,  132 => 82,  130 => 80,  106 => 59,  98 => 54,  88 => 46,  86 => 44,  73 => 34,  66 => 29,  58 => 24,  50 => 19,  37 => 9,  31 => 8,  23 => 2,);
    }
}


/* super_navbar.twig */
class __TwigTemplate_57203b5d23acb56ccf3af4e54db2406e6b8fb47f808895ceab4d5bd577016973_1344254732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 97
        $this->parent = $this->loadTemplate("menus/panel_menu_before_buy.twig", "super_navbar.twig", 97);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/panel_menu_before_buy.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "super_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 97,  194 => 102,  190 => 99,  187 => 98,  184 => 97,  181 => 96,  177 => 81,  174 => 80,  170 => 45,  167 => 44,  160 => 104,  158 => 102,  154 => 100,  152 => 96,  147 => 93,  141 => 86,  137 => 85,  132 => 82,  130 => 80,  106 => 59,  98 => 54,  88 => 46,  86 => 44,  73 => 34,  66 => 29,  58 => 24,  50 => 19,  37 => 9,  31 => 8,  23 => 2,);
    }
}


/* super_navbar.twig */
class __TwigTemplate_57203b5d23acb56ccf3af4e54db2406e6b8fb47f808895ceab4d5bd577016973_1869126149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 98
        $this->parent = $this->loadTemplate("menus/panel_menu_owners.twig", "super_navbar.twig", 98);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/panel_menu_owners.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "super_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 98,  225 => 97,  194 => 102,  190 => 99,  187 => 98,  184 => 97,  181 => 96,  177 => 81,  174 => 80,  170 => 45,  167 => 44,  160 => 104,  158 => 102,  154 => 100,  152 => 96,  147 => 93,  141 => 86,  137 => 85,  132 => 82,  130 => 80,  106 => 59,  98 => 54,  88 => 46,  86 => 44,  73 => 34,  66 => 29,  58 => 24,  50 => 19,  37 => 9,  31 => 8,  23 => 2,);
    }
}
/* {# Begin: Header #}*/
/* <section id="header-wrapper" class="wrap push">*/
/*     <section id="header-content">*/
/*         <div class="header-wrapper" id="header-spacer">*/
/*             <header id="header-zone">*/
/*                 <div id="logo-wrapper">*/
/*                     <div id="logo">*/
/*                         <a href="{{ _host }}" title="Suzuki Autos {{ _loc }}">*/
/*                             <span>Suzuki <sup style="position: relative; top: -2px;">&copy;</sup> {{ _loc }}</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="regular-header">*/
/*                     <div class="content-no_wrapper">*/
/*                         <div id="top-bar">*/
/*                             <nav>*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}grupo" title="Grupo" onclick="ga('send', 'event', 'Grupo', 'Liga_interna', 'Grupo Suzuki');">*/
/*                                             <span>Grupo</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}concesionarias" title="Concesionarias" onclick="ga('send', 'event', 'Concesionarias', 'Liga_interna', 'Ubica nuestras concesionarias');">*/
/*                                             <span>Concesionarias</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" {#href="{{ _host }}catalogos"#} class="catalogo-dropdown" title="Catalogos" onclick="ga('send', 'event', 'Catalogo', 'Liga_interna', 'Conoce nuestro catalogo Suzuki');">*/
/*                                             <span>Catálogos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         <a href="{{ _host }}contactanos" title="Contactános" onclick="ga('send', 'event', 'Contactanos', 'Liga_interna', 'Contactanos');">*/
/*                                             <span>Contáctanos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         <a href="http://suzukigdl.com.mx/seminuevos/" title="Seminuevos López Mateos" onclick="ga('send', 'event', 'Seminuevos', 'Liga_interna', 'Seminuevos Suzuki');">*/
/*                                             <span>Seminuevos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         {% block phone_call %}*/
/*                                         {% endblock %}*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </nav>*/
/*                         </div>*/
/*                         <div id="main-nav">*/
/*                             <nav>*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}modelos" title="Modelos"onclick="ga('send', 'event', 'Modelos', 'Liga_interna', 'Descubre nuestra gamma de modelos Suzuki');">*/
/*                                             <span>Modelos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}financiamiento" title="Financiamiento" onclick="ga('send', 'event', 'Financiamento', 'Liga_interna', 'Financiamiento');">*/
/*                                             <span>Financiamiento</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a id="header-owners-button" title="Propietarios" class="owners expand-header cur-hover">*/
/*                                             <span>Mi Suzuki</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         <a id="header-before-buy-button" title="Antes de comprar" class="before-buy expand-header cur-hover">*/
/*                                             <span>Comprar un Suzuki</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </ul>*/
/*                             </nav>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="models-header">*/
/*                     {% block models_header %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </header>*/
/*             <div id="header-mobile">*/
/*                 <a href="{{ _host }}">*/
/*                     <img src="{{ _host }}img/template/common/header/horizontal_logo.png" alt="Logo Suzuki">*/
/*                 </a>*/
/*                 <a href="#mobile-menu" class="menu-link">☰</a>*/
/*                 {#<a href="#menu" class="icon-hamburger-animate menu-link">*/
/*                     <i class="icon-hamburger"></i>*/
/*                 </a>*/
/*                 #}*/
/*             </div>*/
/*             <div id="header-panel" class="header-panel">*/
/*                 <div id="header-sections-wrapper" class="current-sections-wrapper">*/
/*                     {% block menu_panel %}*/
/*                         {% embed "menus/panel_menu_before_buy.twig" %}{% endembed %}*/
/*                         {% embed "menus/panel_menu_owners.twig" %}{% endembed %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             {% block menu_catalogs %}                */
/*             {% endblock %}*/
/*         </div>*/
/*     </section>*/
/* </section>*/
/* {# End: Header #}*/
