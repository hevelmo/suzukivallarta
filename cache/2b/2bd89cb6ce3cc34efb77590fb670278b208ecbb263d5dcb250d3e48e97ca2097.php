<?php

/* catalogos/container.twig */
class __TwigTemplate_d858dbcf3aaa812dce14e4a945b0d6d7e3b4c85eab425e6d76acd25274080023 extends Twig_Template
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
        // line 1
        echo "<div id=\"content-content\">
    <p id=\"catalog_title\">CATÁLOGOS</p>
    <div class=\"catalog clearfix\" id=\"catalog-menu\">
        <div id=\"catalog-wrapper\" class=\"items-wrapper et-wrapper\">
        ";
        // line 6
        echo "            ";
        $context["catalogo"] = (isset($context["catpa"]) ? $context["catpa"] : null);
        // line 7
        echo "            <div id=\"catalog-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "key", array()), "html", null, true);
        echo "\" class=\"item et-section ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "key", array()), "html", null, true);
        echo "\" data-key=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "key", array()), "html", null, true);
        echo "\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/catalog/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "key", array()), "html", null, true);
        echo ".jpg');\">
                <div class=\"content ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "class", array()), "html", null, true);
        echo "\">
                    <div class=\"car_model\">&nbsp;</div>
                    <div class=\"model\"><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "name", array()), "html", null, true);
        echo "</h2></div>
                    <div class=\"description\">
                        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "description", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"dowload\">

                        <a class=\"button blue big-button\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "files/fichas/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : null), "download", array()), "html", null, true);
        echo "\" target=\"_blank\">
                            Descargar PDF
                            <span>&#128229;</span>
                        </a>
                    </div>
                </div>
            </div>
            ";
        // line 147
        echo "        </div>
        ";
        // line 276
        echo "    </div>
    <div class=\"catalog_switch_menu\">
        <div class=\"catalog_cars_wrapper\">
            <div class=\"title\">Selecciona tu Suzuki</div>
            <div class=\"catalog_car nueva-vitara\">
                <a class=\"switch-catalog nueva-vitara\" data-key=\"nueva-vitara\" href=\"";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/nueva-vitara\">
                    <span>Nueva Vitara</span>
                </a>
            </div>
            <div class=\"catalog_car ciaz\">
                <a class=\"switch-catalog ciaz\" data-key=\"ciaz\" href=\"";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/ciaz\">
                    <span>Ciaz</span>
                </a>
            </div>
            <div class=\"catalog_car swift\">
                <a class=\"switch-catalog swift\" data-key=\"swift\" href=\"";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/swift\">
                    <span>Swift</span>
                </a>
            </div>
            <div class=\"catalog_car kizashi\">
                <a class=\"switch-catalog kizashi\" data-key=\"kizashi\" href=\"";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/kizashi\">
                    <span>Kizashi</span>
                </a>
            </div>
            <div class=\"catalog_car grand-vitara\">
                <a class=\"switch-catalog grand-vitara\" data-key=\"grand-vitara\" href=\"";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/grand-vitara\">
                    <span>Grand Vitara</span>
                </a>
            </div>
            <div class=\"catalog_car swift-sport\">
                <a class=\"switch-catalog swift-sport\" data-key=\"swift-sport\" href=\"";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/swift-sport\">
                    <span>Swift Sport</span>
                </a>
            </div>
            <div class=\"catalog_car s-cross\">
                <a class=\"switch-catalog s-cross\" data-key=\"s-cross\" href=\"";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/s-cross\">
                    <span>S-Cross</span>
                </a>
            </div>
            <div class=\"catalog_car ignis\">
                <a class=\"switch-catalog ignis\" data-key=\"ignis\" href=\"";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos/ignis\">
                    <span>Ignis</span>
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "catalogos/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 316,  128 => 311,  120 => 306,  112 => 301,  104 => 296,  96 => 291,  88 => 286,  80 => 281,  73 => 276,  70 => 147,  58 => 16,  51 => 12,  46 => 10,  41 => 8,  28 => 7,  25 => 6,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <p id="catalog_title">CATÁLOGOS</p>*/
/*     <div class="catalog clearfix" id="catalog-menu">*/
/*         <div id="catalog-wrapper" class="items-wrapper et-wrapper">*/
/*         {#<div id="catalog-wrapper" class="slider responsive items-wrapper et-wrapper hidden-xs hidden-sm hidden-md">#}*/
/*             {% set catalogo = catpa %}*/
/*             <div id="catalog-{{ catalogo.key }}" class="item et-section {{ catalogo.key }}" data-key="{{ catalogo.key }}" style="background-image: url('{{ _host }}img/sections/catalog/{{ catalogo.key }}.jpg');">*/
/*                 <div class="content {{ catalogo.class }}">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>{{ catalogo.name }}</h2></div>*/
/*                     <div class="description">*/
/*                         <p>{{ catalogo.description }}</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/* */
/*                         <a class="button blue big-button" href="{{ _host }}files/fichas/{{ catalogo.download }}" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {#<div id="catalog-nueva-vitara" class="item et-section nueva-vitara" data-key="nueva-vitara" style="background-image: url('img/sections/catalog/nueva-vitara.jpg');">*/
/*                 <div class="content">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Nueva Vitara</h2></div>*/
/*                     <div class="description">*/
/*                         <p>La vida tiene m&aacute;s de un tono</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/* */
/*                         <a class="button blue big-button" href="files/fichas/catalogo-nueva-vitara-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-ciaz" class="item et-section ciaz" data-key="ciaz" style="background-image: url('img/sections/catalog/ciaz.jpg');">*/
/*                 <div class="content white">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Ciaz</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Equipamiento, diseño y elegancia que mereces. <br> El balance perfecto en tu vida.</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/* */
/*                         <a class="button blue big-button" href="files/fichas/catalogo-ciaz-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-swift" class="item et-section swift" data-key="swift" style="background-image: url('img/sections/catalog/swift.jpg');">*/
/*                 <div class="content white">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Swift</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Aerodinámico y divertido para ti que buscas diseño<br />y agilidad en un solo auto.</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-swift-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-kizashi" class="item et-section kizashi" data-key="kizashi" style="background-image: url('img/sections/catalog/kizashi.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Kizashi</h2></div>*/
/*                     <div class="description">*/
/*                         <p>"Algo grande está por venir".<br />Imponente diseño con finos acabados que roban miradas. </p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-kizashi-2016.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-grand-vitara" class="item et-section grand-vitara" data-key="grand-vitara" style="background-image: url('img/sections/catalog/grand-vitara.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Grand Vitara</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Dinamismo, versatilidad y tecnología sin fronteras.<br />Una nueva forma de viajar. </p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-grand-vitara-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-swift-sport" class="item et-section swift-sport" data-key="swift-sport" style="background-image: url('img/sections/catalog/swift-sport.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Swift Sport</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Diseño deportivo, movilidad veloz.<br />La combinación perfecta de un auto deportivo y uno urbano.</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-swift-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-s-cross" class="item et-section s-cross" data-key="s-cross" style="background-image: url('img/sections/catalog/s-cross.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>S-Cross</h2></div>*/
/*                     <div class="description">*/
/*                         <p>El crossover que te hará olvidar<br/>tu primera camioneta</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-s-cross-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-ignis" class="item et-section ignis" data-key="ignis" style="background-image: url('img/sections/catalog/ignis.jpg');">*/
/*                 <div class="content white">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Ignis</h2></div>*/
/*                     <div class="description">*/
/*                         <p>*/
/*                             Redefine todo e inicia un nuevo capítulo en tu vida.*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-ignis-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>#}*/
/*         </div>*/
/*         {#*/
/*         <div id="catalog-wrapper" class="items-wrapper et-wrapper hidden-lg visible-xs visible-sm visible-md" style="display: none;">*/
/*             <div id="catalog-nueva-vitara" class="item et-section nueva-vitara" data-key="nueva-vitara" style="background-image: url('img/sections/catalog/nueva-vitara.jpg');">*/
/*                 <div class="content">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Nueva Vitara</h2></div>*/
/*                     <div class="description">*/
/*                         <p>La vida tiene m&aacute;s de un tono</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/* */
/*                         <a class="button blue big-button" href="files/fichas/catalogo-nueva-vitara-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-ciaz" class="item et-section ciaz" data-key="ciaz" style="background-image: url('img/sections/catalog/ciaz.jpg');">*/
/*                 <div class="content white">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Ciaz</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Equipamiento, diseño y elegancia que mereces. <br> El balance perfecto en tu vida.</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/* */
/*                         <a class="button blue big-button" href="files/fichas/catalogo-ciaz-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-swift" class="item et-section swift" data-key="swift" style="background-image: url('img/sections/catalog/swift.jpg');">*/
/*                 <div class="content white">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Swift</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Aerodinámico y divertido para ti que buscas diseño<br />y agilidad en un solo auto.</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-swift-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-kizashi" class="item et-section kizashi" data-key="kizashi" style="background-image: url('img/sections/catalog/kizashi.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Kizashi</h2></div>*/
/*                     <div class="description">*/
/*                         <p>"Algo grande está por venir".<br />Imponente diseño con finos acabados que roban miradas. </p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-kizashi-2016.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-grand-vitara" class="item et-section grand-vitara" data-key="grand-vitara" style="background-image: url('img/sections/catalog/grand-vitara.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Grand Vitara</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Dinamismo, versatilidad y tecnología sin fronteras.<br />Una nueva forma de viajar. </p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-grand-vitara-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-swift-sport" class="item et-section swift-sport" data-key="swift-sport" style="background-image: url('img/sections/catalog/swift-sport.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Swift Sport</h2></div>*/
/*                     <div class="description">*/
/*                         <p>Diseño deportivo, movilidad veloz.<br />La combinación perfecta de un auto deportivo y uno urbano.</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-swift-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-s-cross" class="item et-section s-cross" data-key="s-cross" style="background-image: url('img/sections/catalog/s-cross.jpg');">*/
/*                 <div class="content ">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>S-Cross</h2></div>*/
/*                     <div class="description">*/
/*                         <p>El crossover que te hará olvidar<br/>tu primera camioneta</p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-s-cross-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="catalog-ignis" class="item et-section ignis" data-key="ignis" style="background-image: url('img/sections/catalog/ignis.jpg');">*/
/*                 <div class="content white">*/
/*                     <div class="car_model">&nbsp;</div>*/
/*                     <div class="model"><h2>Ignis</h2></div>*/
/*                     <div class="description">*/
/*                         <p>*/
/*                             Redefine todo e inicia un nuevo capítulo en tu vida.*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="dowload">*/
/*                         <a class="button blue big-button" href="files/fichas/catalogo-ignis-2017.pdf" target="_blank">*/
/*                             Descargar PDF*/
/*                             <span>&#128229;</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         #}*/
/*     </div>*/
/*     <div class="catalog_switch_menu">*/
/*         <div class="catalog_cars_wrapper">*/
/*             <div class="title">Selecciona tu Suzuki</div>*/
/*             <div class="catalog_car nueva-vitara">*/
/*                 <a class="switch-catalog nueva-vitara" data-key="nueva-vitara" href="{{ _host }}catalogos/nueva-vitara">*/
/*                     <span>Nueva Vitara</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car ciaz">*/
/*                 <a class="switch-catalog ciaz" data-key="ciaz" href="{{ _host }}catalogos/ciaz">*/
/*                     <span>Ciaz</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car swift">*/
/*                 <a class="switch-catalog swift" data-key="swift" href="{{ _host }}catalogos/swift">*/
/*                     <span>Swift</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car kizashi">*/
/*                 <a class="switch-catalog kizashi" data-key="kizashi" href="{{ _host }}catalogos/kizashi">*/
/*                     <span>Kizashi</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car grand-vitara">*/
/*                 <a class="switch-catalog grand-vitara" data-key="grand-vitara" href="{{ _host }}catalogos/grand-vitara">*/
/*                     <span>Grand Vitara</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car swift-sport">*/
/*                 <a class="switch-catalog swift-sport" data-key="swift-sport" href="{{ _host }}catalogos/swift-sport">*/
/*                     <span>Swift Sport</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car s-cross">*/
/*                 <a class="switch-catalog s-cross" data-key="s-cross" href="{{ _host }}catalogos/s-cross">*/
/*                     <span>S-Cross</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="catalog_car ignis">*/
/*                 <a class="switch-catalog ignis" data-key="ignis" href="{{ _host }}catalogos/ignis">*/
/*                     <span>Ignis</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
