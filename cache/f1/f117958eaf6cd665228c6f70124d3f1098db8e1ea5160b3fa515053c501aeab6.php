<?php

/* modelos/modelo/container.twig */
class __TwigTemplate_5074b901e51835c72dc9c7e0c46c9d1d407eccb7b04dd364a835e30e7e1966c4 extends Twig_Template
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
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 2
        echo "<div id=\"content-content\">
    ";
        // line 4
        echo "        ";
        $context["begin"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "inicio", array());
        // line 5
        echo "        ";
        if ((isset($context["begin"]) ? $context["begin"] : null)) {
            // line 6
            echo "            <a class=\"section-separator\" name=\"inicio\"></a>
            ";
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array())) {
                // line 8
                echo "                <div class=\"l-landing-section pos-relative js-full-height\">
                    <div class=\"m-model-colors\">
                        <div class=\"l-wrapper\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-12\">
                                    <h1 class=\"m-model-colors__title\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "title", array()), "html", null, true);
                echo "</h1>
                                    <p class=\"m-model-colors__subtitle\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "subtitle", array()), "html", null, true);
                echo "</p>
                                    <ul class=\"m-model-colors__medals\">
                                        ";
                // line 16
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "medals", array())) {
                    // line 17
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "medals", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 18
                        echo "                                                <li class=\"m-model-colors__medals__item\">
                                                    <img src=\"";
                        // line 19
                        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                        echo "img/sections/models/main/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "img", array()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()), "html", null, true);
                        echo "\" class=\"m-model-colors__medals__item__image\">
                                                </li>                                                
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "                                        ";
                }
                // line 23
                echo "                                    </ul>                            
                                    <p class=\"m-model-colors__from-price\">
                                        Desde
                                        <span class=\"m-model-colors__from-price__price\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "price", array()), "html", null, true);
                echo "*</span>
                                    </p>
                                    <span class=\"m-model-colors__asterisk\">*";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "asterisk", array()), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"col-md-5 col-sm-12\">
                                    <div class=\"m-model-colors__car-box\">
                                        <img src=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/main/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "car_box", array()), "img", array()), "html", null, true);
                echo "\" alt=\"Color\" class=\"m-model-colors__car-box__image js-color-image\">
                                    </div>
                                    <p class=\"m-model-colors__available js-color-available\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "car_box", array()), "description", array()), "html", null, true);
                echo "</p>
                                    <ul class=\"m-model-colors__picker\">
                                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "new", array()), "car_box", array()), "picker", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picker"]) {
                    // line 37
                    echo "                                            <li class=\"m-model-colors__picker__item\">
                                                <a href=\"#\" class=\"m-model-colors__picker__item__link js-color-picker ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "class", array()), "html", null, true);
                    echo "\" style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "color_left", array()), "html", null, true);
                    echo ";\" data-hex=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "color_left", array()), "html", null, true);
                    echo "\" data-available=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "available", array()), "html", null, true);
                    echo "\" data-colorname=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "colorname", array()), "html", null, true);
                    echo "\" data-color=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/main/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "image", array()), "html", null, true);
                    echo "\">
                                                    <div class=\"m-model-colors__picker__item__link__circle-o\" style=\"border-color: ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "color_left", array()), "html", null, true);
                    echo ";\"></div>
                                                    <div class=\"m-model-colors__picker__item__link__circle\" style=\"background-color: ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "color_left", array()), "html", null, true);
                    echo ";\"></div>
                                                    <div class=\"m-model-colors__picker__item__link__bicolor\">
                                                        <div class=\"m-model-colors__picker__item__link__bicolor__left\" style=\"background-color: ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "color_left", array()), "html", null, true);
                    echo ";\"></div>
                                                        <div class=\"m-model-colors__picker__item__link__bicolor__right\" style=\"background-color: ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picker"], "color_right", array()), "html", null, true);
                    echo ";\"></div>
                                                    </div>
                                                </a>
                                            </li>                                        
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12\">
                                    <p class=\"m-model-colors__disclaimer\">
                                        Los valores de rendimiento de combustible indicados para este modelo, convenido con las autoridades correspondientes, es el obtenido mediante <b> pruebas de ciclo combinado, en condiciones controladas de laboratorio que pueden no ser reproducibles ni obtenerse en condiciones y hábitos de manejo convencionales</b>, debido a factores climatológicos, de combustible, condiciones topográficas, entre otros.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                // line 68
                echo "                    <div class=\"full-size-section gray-degree window-adaptable model-section\" data-min-height=\"650\">
                        <div class=\"car-main big-main\" ";
                // line 69
                echo ">
                            ";
                // line 76
                echo "                            <div class=\"car-next-step\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "modelos/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "#caracteristicas\"><span>Características</span></a></div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 81
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "normal", array())) {
                // line 82
                echo "                <div class=\"full-size-section gray-degree window-adaptable model-section model-section-normal\" data-min-height=\"650\">
                    <div class=\"car-main big-main\" style=\"background: url('";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/main/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "normal", array()), "image", array()), "html", null, true);
                echo "') center 175px no-repeat\">
                        <div class=\"car-main-title\">
                            <div class=\"title\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "normal", array()), "title", array()), "html", null, true);
                echo "</div>
                            <div class=\"slogan\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "normal", array()), "slogan", array()), "html", null, true);
                echo "</div>
                            <div class=\"price\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "normal", array()), "price", array()), "html", null, true);
                echo "</div>
                            <div class=\"car-main-image\" id=\"car-image-";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "\">&nbsp;</div>
                        </div>
                        <div class=\"car-next-step car-next-step-normal\"><a href=\"";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "modelos/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "#caracteristicas\"><span>Características</span></a></div>
                    </div>
                </div>
            ";
            }
            // line 94
            echo "        ";
        }
        // line 95
        echo "    ";
        // line 96
        echo "    ";
        // line 97
        echo "        ";
        $context["features"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "caracteristicas", array());
        // line 98
        echo "        ";
        if ((isset($context["features"]) ? $context["features"] : null)) {
            // line 99
            echo "            <a class=\"section-separator\" name=\"caracteristicas\"></a>
            <div id=\"model-section-features\" class=\"window-adaptable model-section special-padding-top\" data-min-height=\"750\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "main", array()), "section_features", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "main", array()), "section_features", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"specifications-wrapper\">
                    <div class=\"specifications\" id=\"features-wrapper\">
                        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "main", array()), "specifications", array()), "banner", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 108
                echo "                            <div class=\"specification\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/features/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "image", array()), "html", null, true);
                echo "');\">
                                <div class=\"title-wrapper\" style=\"color: #fff\">
                                    <div class=\"title\">
                                        ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "title", array()), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <div class=\"description compact\">
                                    <p>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "description", array()), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"specifications-controls\">
                    <div class=\"arrows\">
                        <div class=\"arrow left\"><a class=\"specifications-controls\" href=\"#left\"><span>Left</span></a></div>
                        <div class=\"arrow right\"><a class=\"specifications-controls\" href=\"#right\"><span>Right</span></a></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"next-link-text gallery\">
                    <a  class=\"scroll-in-site\" id=\"galeria\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#galeria\"><span>Visita Galería</span></a>
                </div>
            </div>
        ";
        }
        // line 134
        echo "    ";
        // line 135
        echo "    ";
        // line 136
        echo "        ";
        $context["gallery"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "galeria", array());
        // line 137
        echo "        ";
        if ((isset($context["gallery"]) ? $context["gallery"] : null)) {
            // line 138
            echo "            <a class=\"section-separator\"  name=\"galeria\"></a>
            <div class=\"window-adaptable model-section special-padding-top\" data-min-height=\"750\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "section_gallery", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "section_gallery", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"galery-grid galery-of-";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "\">
                    <div class=\"content\">
                        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "boxes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["boxes_gallery"]) {
                // line 147
                echo "                            <div class=\"view view-first ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "class", array()), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/gallery/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/boxes/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "image", array()), "html", null, true);
                echo "\" />
                                <div class=\"mask\">
                                    <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/gallery/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "class", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "href", array()), "html", null, true);
                echo "\" class=\"info gallery-box-link ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "class", array()), "html", null, true);
                echo "\" data-link=\"\">
                                        <span>&nbsp;</span>
                                    </a>
                                </div>
                            </div>                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boxes_gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                    </div>
                    ";
            // line 157
            $context["exterior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "fancybox", array()), "ext", array());
            // line 158
            echo "                    ";
            $context["interior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "fancybox", array()), "int", array());
            // line 159
            echo "                    ";
            $context["special"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "fancybox", array()), "special", array());
            // line 160
            echo "                    ";
            if ((isset($context["exterior"]) ? $context["exterior"] : null)) {
                // line 161
                echo "                        <div class=\"hidden-list\">
                            ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["exterior"]) ? $context["exterior"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
                    // line 163
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "group", array()), "html", null, true);
                    echo "\" title=\". . .\" alt=\". . .\">
                                    <img src=\"";
                    // line 164
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                        </div>
                    ";
            }
            // line 169
            echo "                    ";
            if ((isset($context["interior"]) ? $context["interior"] : null)) {
                // line 170
                echo "                        <div class=\"hidden-list\">
                            ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["interior"]) ? $context["interior"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["int"]) {
                    // line 172
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "group", array()), "html", null, true);
                    echo "\" title=\". . .\" alt=\". . .\">
                                    <img src=\"";
                    // line 173
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['int'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                        </div>
                    ";
            }
            // line 178
            echo "                    ";
            if ((isset($context["special"]) ? $context["special"] : null)) {
                // line 179
                echo "                        <div class=\"hidden-list\">
                            ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["special"]) ? $context["special"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["spe"]) {
                    // line 181
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spe"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spe"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spe"], "group", array()), "html", null, true);
                    echo "\" title=\". . .\" alt=\". . .\">
                                    <img src=\"";
                    // line 182
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spe"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spe"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                        </div>
                    ";
            }
            // line 187
            echo "                </div>
                <div class=\"next-link-text prices\" style=\"margin-top: 40px;\">
                    <a class=\"scroll-in-site\" id=\"precios\" href=\"";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#precios\"><span>Visita Versiones</span></a>
                </div>
            </div>
        ";
        }
        // line 193
        echo "    ";
        // line 194
        echo "    ";
        // line 195
        echo "        ";
        $context["prices"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "precios", array());
        // line 196
        echo "        ";
        if ((isset($context["prices"]) ? $context["prices"] : null)) {
            // line 197
            echo "            <a class=\"section-separator\"  name=\"precios\"></a>
            <div class=\"model-section special-padding-top\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "section_prices", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "section_prices", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"model-prices\">
                    <span class=\"arrow-prices arrow-prices-left\">&nbsp;</span>
                    <span class=\"arrow-prices arrow-prices-right\">&nbsp;</span>
                    <div id=\"features-space-wrapper\" class=\"display-tables\" data-display-table=\"prices\">
                        <div id=\"features-space-mask\">
                            ";
            // line 208
            $context["columns"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "model_prices", array()), "columns", array());
            // line 209
            echo "                            ";
            $context["head"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "model_prices", array()), "head", array());
            // line 210
            echo "                            ";
            $context["body"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "model_prices", array()), "body", array());
            // line 211
            echo "                            <div id=\"features-space\">
                                <div class=\"suzuki-table cols-";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["columns"]) ? $context["columns"] : null), "html", null, true);
            echo "\" id=\"versions-price-table\">
                                    <div class=\"data-wrapper\">
                                        ";
            // line 214
            if ((isset($context["head"]) ? $context["head"] : null)) {
                // line 215
                echo "                                            <div class=\"head\">
                                                ";
                // line 216
                if (($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "row", array()) && $this->getAttribute((isset($context["head"]) ? $context["head"] : null), "col", array()))) {
                    // line 217
                    echo "                                                    <div class=\"row  row-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "row", array()), "class", array()), "html", null, true);
                    echo " cols-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "col", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        ";
                    // line 218
                    if ($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array())) {
                        // line 219
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array())) {
                            // line 220
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\" ";
                            // line 221
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "style", array())) {
                                echo " style=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "style", array()), "html", null, true);
                                echo "\" ";
                            }
                            echo ">
                                                                        <img src=\"";
                            // line 222
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 225
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 229
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array())) {
                            // line 230
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\" ";
                            // line 231
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array()), "style", array())) {
                                echo " style=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array()), "style", array()), "html", null, true);
                                echo "\" ";
                            }
                            echo ">
                                                                        <img src=\"";
                            // line 232
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 235
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 239
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array())) {
                            // line 240
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\" ";
                            // line 241
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array()), "style", array())) {
                                echo " style=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array()), "style", array()), "html", null, true);
                                echo "\" ";
                            }
                            echo ">
                                                                        <img src=\"";
                            // line 242
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 245
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 249
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array())) {
                            // line 250
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\" ";
                            // line 251
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "style", array())) {
                                echo " style=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "style", array()), "html", null, true);
                                echo "\" ";
                            }
                            echo ">
                                                                        <img src=\"";
                            // line 252
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 255
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 259
                        echo "                                                        ";
                    }
                    // line 260
                    echo "                                                    </div>
                                                ";
                }
                // line 262
                echo "                                            </div>
                                        ";
            }
            // line 264
            echo "                                        ";
            if ((isset($context["body"]) ? $context["body"] : null)) {
                // line 265
                echo "                                            <div class=\"body\">
                                                ";
                // line 266
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["body"]) ? $context["body"] : null), "row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                    // line 267
                    echo "                                                    <div class=\"row  row-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "class", array()), "html", null, true);
                    echo " cols-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["body"]) ? $context["body"] : null), "col", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        ";
                    // line 268
                    if ($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array())) {
                        // line 269
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "price", array()))) {
                            // line 270
                            echo "                                                                <div class=\"cell ";
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html ";
                            // line 271
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["body"]) ? $context["body"] : null), "height", array()), "html", null, true);
                            echo "\">
                                                                        ";
                            // line 272
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "title", array())) {
                                // line 273
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 275
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 276
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 277
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 279
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 280
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 283
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "price", array()))) {
                            // line 284
                            echo "                                                                <div class=\"cell ";
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html ";
                            // line 285
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["body"]) ? $context["body"] : null), "height", array()), "html", null, true);
                            echo "\">
                                                                        ";
                            // line 286
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "title", array())) {
                                // line 287
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 289
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 290
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 291
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 293
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 294
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 297
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "price", array()))) {
                            // line 298
                            echo "                                                                <div class=\"cell ";
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html ";
                            // line 299
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["body"]) ? $context["body"] : null), "height", array()), "html", null, true);
                            echo "\">
                                                                        ";
                            // line 300
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "title", array())) {
                                // line 301
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 303
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 304
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 305
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 307
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 308
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 311
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "price", array()))) {
                            // line 312
                            echo "                                                                <div class=\"cell ";
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html ";
                            // line 313
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["body"]) ? $context["body"] : null), "height", array()), "html", null, true);
                            echo "\">
                                                                        ";
                            // line 314
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "title", array())) {
                                // line 315
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 317
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 318
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 319
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 321
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 322
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 325
                        echo "                                                        ";
                    }
                    // line 326
                    echo "                                                    </div>                                                
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                echo "                                            </div>
                                        ";
            }
            // line 330
            echo "                                    </div>
                                </div>
                            </div>
                            <a style='text-align: center; margin: 30px auto 0 auto; display: block' onclick=ga('send', 'event', 'Material de apoyo', 'Descarga', '";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "precios", array()), "main", array()), "model_prices", array()), "event", array()), "ga", array()), "html", null, true);
            echo "' ); href=\"";
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "files/fichas/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "precios", array()), "main", array()), "model_prices", array()), "event", array()), "href", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                <span class=\"entypo\">&#128196;</span><span>Descargar ficha completa en PDF</span>
                            </a>
                            ";
            // line 337
            echo "                                ";
            // line 338
            echo "                            ";
            // line 339
            echo "                        </div>
        ";
        }
        // line 341
        echo "        ";
        $context["maintenance"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "mantenimieto", array());
        // line 342
        echo "        ";
        if ((isset($context["maintenance"]) ? $context["maintenance"] : null)) {
            // line 343
            echo "                        <a name=\"mantenimiento\" id=\"maintenance-prices\" class=\"maintenance-anchors\"></a>
                        <div class=\"maintenance-prices\">
                            <div id=\"maintenance-title\" class=\"section-title\">
                                <div class=\"title\">";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "section_maintenance_prices", array()), "title", array()), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"suzuki-table cols-";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "table", array()), "columns", array()), "html", null, true);
            echo "\" id=\"versions-maintenance-table\">
                                <div class=\"data-wrapper\">
                                    <div class=\"body\">
                                        ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "table", array()), "body", array()), "row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 352
                echo "                                            <div class=\"row row-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "class", array()), "html", null, true);
                echo " cols-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "table", array()), "columns", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "id", array()), "html", null, true);
                echo "\">
                                                ";
                // line 353
                if ((($this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()))) {
                    // line 354
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 356
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 360
                echo "                                                ";
                if ((($this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()))) {
                    // line 361
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 363
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 367
                echo "                                                ";
                if ((($this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()))) {
                    // line 368
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 370
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 374
                echo "                                                ";
                if ((( !$this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()))) {
                    // line 375
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 377
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 381
                echo "                                                ";
                if ((( !$this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fifth", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fifth", array()))) {
                    // line 382
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fifth", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fifth", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fifth", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 384
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fifth", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 388
                echo "                                            </div>                                        
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        ";
            // line 396
            echo "                        <div class=\"clearfix\"></div>
                        <br><br>
                        <p style=\"margin: 5px 0 30px; text-align: center;\">
                            <a href=\"";
            // line 399
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "financiamiento/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "key", array()), "html", null, true);
            echo "\" id=\"go-financing-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "key", array()), "html", null, true);
            echo "\" data-gama-model-key=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "key", array()), "html", null, true);
            echo "\" data-gama-model-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
            echo "\" class=\"button red\">Pide tu cotización y estrena un ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "name", array()), "html", null, true);
            echo ".</a>
                        </p>
                        <p id=\"p-empty\">&nbsp;</p>
                        <div class=\"next-link-text accesories\" style=\"margin-top: 20px;\">
                            <a class=\"scroll-in-site\" id=\"accesorios\" href=\"";
            // line 403
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#accesorios\"><span>Visita Accesorios</span></a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 409
        echo "    ";
        // line 410
        echo "    ";
        // line 411
        echo "        ";
        $context["accessories"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "accesorios", array());
        // line 412
        echo "        ";
        if ((isset($context["accessories"]) ? $context["accessories"] : null)) {
            // line 413
            echo "            <a class=\"section-separator\"  name=\"accesorios\"></a>
            <div class=\"model-section special-padding-top\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 416
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "section_gallery", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "section_gallery", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"galery-grid galery-of-";
            // line 419
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "\" id=\"accesorios-padding\">
                    <div class=\"content\">
                        ";
            // line 421
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "grid", array()), "boxes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["boxes_gallery"]) {
                // line 422
                echo "                            <div class=\"view view-first ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "class", array()), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 423
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/accessories/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/boxes/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "image", array()), "html", null, true);
                echo "\" />
                                <div class=\"mask\">
                                    <a href=\"";
                // line 425
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/accessories/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "href", array()), "html", null, true);
                echo "\" class=\"info gallery-box-link ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "class", array()), "html", null, true);
                echo "\" data-link=\"\">
                                        <span>&nbsp;</span>
                                    </a>
                                </div>
                            </div>                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boxes_gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "                    </div>
                    ";
            // line 432
            $context["interior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "grid", array()), "fancybox", array()), "thumbs", array());
            // line 433
            echo "                    <div class=\"hidden-list\">
                        ";
            // line 434
            if ((isset($context["interior"]) ? $context["interior"] : null)) {
                // line 435
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["interior"]) ? $context["interior"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["thumb"]) {
                    // line 436
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/accessories/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thumb"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"accesorios\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thumb"], "title", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thumb"], "title", array()), "html", null, true);
                    echo "\">
                                    <img src=\"";
                    // line 437
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/accessories/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thumb"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 440
                echo "                        ";
            }
            // line 441
            echo "                    </div>
                    ";
            // line 442
            if ($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "event", array())) {
                // line 443
                echo "                        <p style=\"margin: 5px 0 30px; text-align: center;\">
                            Pregunta en tu concesionaria por los accesorios para que personalices tu Suzuki.<br /><br />
                            <a onclick=\"ga('send', 'event', 'Material de apoyo', 'Descarga', '";
                // line 445
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "event", array()), "ga", array()), "html", null, true);
                echo "');\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "files/accesorios/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "event", array()), "href", array()), "html", null, true);
                echo "\" class=\"button red\" target=\"_blank\">Descargar catálogo de accesorios</a>
                        </p>
                    ";
            }
            // line 448
            echo "                    <div id=\"next-test\" class=\"next-link-text\" style=\"margin-top: 40px;\">
                        <a  class=\"scroll-in-site\" id=\"prueba-de-manejo\" href=\"";
            // line 449
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#prueba-de-manejo\"><span>Haz una prueba</span></a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 454
        echo "    ";
        // line 455
        echo "    ";
        // line 456
        echo "        <a class=\"section-separator\"  name=\"prueba-de-manejo\"></a>
        <div id=\"instant-drive-section\"></div>
        <div id=\"text-drive-section\" class=\"model-section special-padding-top  window-adaptable\"  data-min-height=\"700\">
            <div id=\"test-drive-models\">
                <div class=\"section-title\">
                    <div class=\"title\">Agendar prueba de manejo</div>
                    <div class=\"description\">Contactanos para agendar tu prueba de manejo y vivir la experiencia Suzuki.</div>
                </div>
                <div id=\"test-drive-steps\">
                    <div id=\"header-prueba-manejo-modelos\">
                        <div class=\"test-panel-tabs\">
                            <ul>
                                <li class=\"test-tabs model-test-tab active\">
                                    <a class=\"model-change-tab\" data-number=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\">
                                        ¿Cuándo quieres hacer tu prueba de manejo?
                                    </a>
                                </li>
                                <li class=\"test-tabs model-test-tab bg-button-fuinancing active\">
                                    <a class=\"model-change-tab\" href=\"";
        // line 474
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "financiamiento/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" id=\"go-financing-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" data-gama-model-key=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" data-gama-model-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\">
                                        Pide tu cotización y estrena un Suzuki ";
        // line 475
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name", array()), "html", null, true);
        echo ".
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id=\"content-test-drive-section\">
                            ";
        // line 481
        $this->loadTemplate("modelos/modelo/container.twig", "modelos/modelo/container.twig", 481, "1054523841")->display($context);
        // line 482
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"model-section\"></div>
    ";
        // line 489
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1363 => 489,  1355 => 482,  1353 => 481,  1344 => 475,  1332 => 474,  1324 => 469,  1309 => 456,  1307 => 455,  1305 => 454,  1295 => 449,  1292 => 448,  1282 => 445,  1278 => 443,  1276 => 442,  1273 => 441,  1270 => 440,  1257 => 437,  1244 => 436,  1239 => 435,  1237 => 434,  1234 => 433,  1232 => 432,  1229 => 431,  1211 => 425,  1202 => 423,  1197 => 422,  1193 => 421,  1188 => 419,  1183 => 417,  1179 => 416,  1174 => 413,  1171 => 412,  1168 => 411,  1166 => 410,  1164 => 409,  1153 => 403,  1136 => 399,  1131 => 396,  1124 => 390,  1117 => 388,  1110 => 384,  1100 => 382,  1097 => 381,  1090 => 377,  1080 => 375,  1077 => 374,  1070 => 370,  1060 => 368,  1057 => 367,  1050 => 363,  1040 => 361,  1037 => 360,  1030 => 356,  1020 => 354,  1018 => 353,  1009 => 352,  1005 => 351,  999 => 348,  994 => 346,  989 => 343,  986 => 342,  983 => 341,  979 => 339,  977 => 338,  975 => 337,  965 => 333,  960 => 330,  956 => 328,  949 => 326,  946 => 325,  941 => 322,  935 => 321,  929 => 319,  926 => 318,  921 => 317,  915 => 315,  913 => 314,  909 => 313,  899 => 312,  896 => 311,  891 => 308,  885 => 307,  879 => 305,  876 => 304,  871 => 303,  865 => 301,  863 => 300,  859 => 299,  849 => 298,  846 => 297,  841 => 294,  835 => 293,  829 => 291,  826 => 290,  821 => 289,  815 => 287,  813 => 286,  809 => 285,  799 => 284,  796 => 283,  791 => 280,  785 => 279,  779 => 277,  776 => 276,  771 => 275,  765 => 273,  763 => 272,  759 => 271,  749 => 270,  746 => 269,  744 => 268,  737 => 267,  733 => 266,  730 => 265,  727 => 264,  723 => 262,  719 => 260,  716 => 259,  709 => 255,  701 => 252,  693 => 251,  686 => 250,  683 => 249,  676 => 245,  668 => 242,  660 => 241,  655 => 240,  652 => 239,  645 => 235,  637 => 232,  629 => 231,  624 => 230,  621 => 229,  614 => 225,  606 => 222,  598 => 221,  591 => 220,  588 => 219,  586 => 218,  579 => 217,  577 => 216,  574 => 215,  572 => 214,  567 => 212,  564 => 211,  561 => 210,  558 => 209,  556 => 208,  546 => 201,  542 => 200,  537 => 197,  534 => 196,  531 => 195,  529 => 194,  527 => 193,  518 => 189,  514 => 187,  510 => 185,  495 => 182,  482 => 181,  478 => 180,  475 => 179,  472 => 178,  468 => 176,  453 => 173,  440 => 172,  436 => 171,  433 => 170,  430 => 169,  426 => 167,  411 => 164,  398 => 163,  394 => 162,  391 => 161,  388 => 160,  385 => 159,  382 => 158,  380 => 157,  377 => 156,  357 => 150,  348 => 148,  343 => 147,  339 => 146,  334 => 144,  329 => 142,  325 => 141,  320 => 138,  317 => 137,  314 => 136,  312 => 135,  310 => 134,  301 => 130,  288 => 119,  278 => 115,  271 => 111,  262 => 108,  258 => 107,  251 => 103,  247 => 102,  242 => 99,  239 => 98,  236 => 97,  234 => 96,  232 => 95,  229 => 94,  220 => 90,  215 => 88,  211 => 87,  207 => 86,  203 => 85,  196 => 83,  193 => 82,  190 => 81,  179 => 76,  176 => 69,  173 => 68,  159 => 48,  148 => 43,  144 => 42,  139 => 40,  135 => 39,  117 => 38,  114 => 37,  110 => 36,  105 => 34,  96 => 32,  89 => 28,  84 => 26,  79 => 23,  76 => 22,  61 => 19,  58 => 18,  53 => 17,  51 => 16,  46 => 14,  42 => 13,  35 => 8,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}


/* modelos/modelo/container.twig */
class __TwigTemplate_5074b901e51835c72dc9c7e0c46c9d1d407eccb7b04dd364a835e30e7e1966c4_1054523841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 481
        $this->parent = $this->loadTemplate("modelos/modelo/testdrive_form.twig", "modelos/modelo/container.twig", 481);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/modelo/testdrive_form.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1392 => 481,  1363 => 489,  1355 => 482,  1353 => 481,  1344 => 475,  1332 => 474,  1324 => 469,  1309 => 456,  1307 => 455,  1305 => 454,  1295 => 449,  1292 => 448,  1282 => 445,  1278 => 443,  1276 => 442,  1273 => 441,  1270 => 440,  1257 => 437,  1244 => 436,  1239 => 435,  1237 => 434,  1234 => 433,  1232 => 432,  1229 => 431,  1211 => 425,  1202 => 423,  1197 => 422,  1193 => 421,  1188 => 419,  1183 => 417,  1179 => 416,  1174 => 413,  1171 => 412,  1168 => 411,  1166 => 410,  1164 => 409,  1153 => 403,  1136 => 399,  1131 => 396,  1124 => 390,  1117 => 388,  1110 => 384,  1100 => 382,  1097 => 381,  1090 => 377,  1080 => 375,  1077 => 374,  1070 => 370,  1060 => 368,  1057 => 367,  1050 => 363,  1040 => 361,  1037 => 360,  1030 => 356,  1020 => 354,  1018 => 353,  1009 => 352,  1005 => 351,  999 => 348,  994 => 346,  989 => 343,  986 => 342,  983 => 341,  979 => 339,  977 => 338,  975 => 337,  965 => 333,  960 => 330,  956 => 328,  949 => 326,  946 => 325,  941 => 322,  935 => 321,  929 => 319,  926 => 318,  921 => 317,  915 => 315,  913 => 314,  909 => 313,  899 => 312,  896 => 311,  891 => 308,  885 => 307,  879 => 305,  876 => 304,  871 => 303,  865 => 301,  863 => 300,  859 => 299,  849 => 298,  846 => 297,  841 => 294,  835 => 293,  829 => 291,  826 => 290,  821 => 289,  815 => 287,  813 => 286,  809 => 285,  799 => 284,  796 => 283,  791 => 280,  785 => 279,  779 => 277,  776 => 276,  771 => 275,  765 => 273,  763 => 272,  759 => 271,  749 => 270,  746 => 269,  744 => 268,  737 => 267,  733 => 266,  730 => 265,  727 => 264,  723 => 262,  719 => 260,  716 => 259,  709 => 255,  701 => 252,  693 => 251,  686 => 250,  683 => 249,  676 => 245,  668 => 242,  660 => 241,  655 => 240,  652 => 239,  645 => 235,  637 => 232,  629 => 231,  624 => 230,  621 => 229,  614 => 225,  606 => 222,  598 => 221,  591 => 220,  588 => 219,  586 => 218,  579 => 217,  577 => 216,  574 => 215,  572 => 214,  567 => 212,  564 => 211,  561 => 210,  558 => 209,  556 => 208,  546 => 201,  542 => 200,  537 => 197,  534 => 196,  531 => 195,  529 => 194,  527 => 193,  518 => 189,  514 => 187,  510 => 185,  495 => 182,  482 => 181,  478 => 180,  475 => 179,  472 => 178,  468 => 176,  453 => 173,  440 => 172,  436 => 171,  433 => 170,  430 => 169,  426 => 167,  411 => 164,  398 => 163,  394 => 162,  391 => 161,  388 => 160,  385 => 159,  382 => 158,  380 => 157,  377 => 156,  357 => 150,  348 => 148,  343 => 147,  339 => 146,  334 => 144,  329 => 142,  325 => 141,  320 => 138,  317 => 137,  314 => 136,  312 => 135,  310 => 134,  301 => 130,  288 => 119,  278 => 115,  271 => 111,  262 => 108,  258 => 107,  251 => 103,  247 => 102,  242 => 99,  239 => 98,  236 => 97,  234 => 96,  232 => 95,  229 => 94,  220 => 90,  215 => 88,  211 => 87,  207 => 86,  203 => 85,  196 => 83,  193 => 82,  190 => 81,  179 => 76,  176 => 69,  173 => 68,  159 => 48,  148 => 43,  144 => 42,  139 => 40,  135 => 39,  117 => 38,  114 => 37,  110 => 36,  105 => 34,  96 => 32,  89 => 28,  84 => 26,  79 => 23,  76 => 22,  61 => 19,  58 => 18,  53 => 17,  51 => 16,  46 => 14,  42 => 13,  35 => 8,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set model = mdopa %}*/
/* <div id="content-content">*/
/*     {# block home #}*/
/*         {% set begin = model.inicio %}*/
/*         {% if begin %}*/
/*             <a class="section-separator" name="inicio"></a>*/
/*             {% if begin.main.new %}*/
/*                 <div class="l-landing-section pos-relative js-full-height">*/
/*                     <div class="m-model-colors">*/
/*                         <div class="l-wrapper">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6 col-sm-12">*/
/*                                     <h1 class="m-model-colors__title">{{ begin.main.new.title }}</h1>*/
/*                                     <p class="m-model-colors__subtitle">{{ begin.main.new.subtitle }}</p>*/
/*                                     <ul class="m-model-colors__medals">*/
/*                                         {% if begin.main.new.medals %}*/
/*                                             {% for item in begin.main.new.medals %}*/
/*                                                 <li class="m-model-colors__medals__item">*/
/*                                                     <img src="{{ _host }}img/sections/models/main/{{ model.key }}/{{ item.img }}" alt="{{ item.alt }}" class="m-model-colors__medals__item__image">*/
/*                                                 </li>                                                */
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </ul>                            */
/*                                     <p class="m-model-colors__from-price">*/
/*                                         Desde*/
/*                                         <span class="m-model-colors__from-price__price">{{ begin.main.new.price }}*</span>*/
/*                                     </p>*/
/*                                     <span class="m-model-colors__asterisk">*{{ begin.main.new.asterisk }}</span>*/
/*                                 </div>*/
/*                                 <div class="col-md-5 col-sm-12">*/
/*                                     <div class="m-model-colors__car-box">*/
/*                                         <img src="{{ _host }}img/sections/models/main/{{ model.key }}/{{ begin.main.new.car_box.img }}" alt="Color" class="m-model-colors__car-box__image js-color-image">*/
/*                                     </div>*/
/*                                     <p class="m-model-colors__available js-color-available">{{ begin.main.new.car_box.description }}</p>*/
/*                                     <ul class="m-model-colors__picker">*/
/*                                         {% for picker in begin.main.new.car_box.picker %}*/
/*                                             <li class="m-model-colors__picker__item">*/
/*                                                 <a href="#" class="m-model-colors__picker__item__link js-color-picker {{ picker.class }}" style="color: {{ picker.color_left }};" data-hex="{{ picker.color_left }}" data-available="{{ picker.available }}" data-colorname="{{ picker.colorname }}" data-color="{{ _host }}img/sections/models/main/{{ model.key }}/{{ picker.image }}">*/
/*                                                     <div class="m-model-colors__picker__item__link__circle-o" style="border-color: {{ picker.color_left }};"></div>*/
/*                                                     <div class="m-model-colors__picker__item__link__circle" style="background-color: {{ picker.color_left }};"></div>*/
/*                                                     <div class="m-model-colors__picker__item__link__bicolor">*/
/*                                                         <div class="m-model-colors__picker__item__link__bicolor__left" style="background-color: {{ picker.color_left }};"></div>*/
/*                                                         <div class="m-model-colors__picker__item__link__bicolor__right" style="background-color: {{ picker.color_right }};"></div>*/
/*                                                     </div>*/
/*                                                 </a>*/
/*                                             </li>                                        */
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-sm-12">*/
/*                                     <p class="m-model-colors__disclaimer">*/
/*                                         Los valores de rendimiento de combustible indicados para este modelo, convenido con las autoridades correspondientes, es el obtenido mediante <b> pruebas de ciclo combinado, en condiciones controladas de laboratorio que pueden no ser reproducibles ni obtenerse en condiciones y hábitos de manejo convencionales</b>, debido a factores climatológicos, de combustible, condiciones topográficas, entre otros.*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {#*/
/*                     <div class="m-scroll-down car-next-step">*/
/*                         <a href="{{ _host }}modelos/{{ model.key }}#caracteristicas" class="m-scroll-down__link m-scroll-down__link--real js-scroll-to">*/
/*                             <i class="fa fa-angle-down m-scroll-down__link__icon"></i>*/
/*                         </a>*/
/*                         <a href="{{ _host }}modelos/{{ model.key }}#caracteristicas" class="m-scroll-down__link m-scroll-down__link--fake js-scroll-to"></a>*/
/*                     </div>*/
/*                     #}*/
/*                     <div class="full-size-section gray-degree window-adaptable model-section" data-min-height="650">*/
/*                         <div class="car-main big-main" {#style="background: url('{{ _host }}img/sections/models/main/{{ begin.main.image }}') center 175px no-repeat"#}>*/
/*                             {#<div class="car-main-title">*/
/*                                 <div class="title">{{ begin.main.title }}</div>*/
/*                                 <div class="slogan">{{ begin.main.slogan }}</div>*/
/*                                 <div class="price">{{ begin.main.price }}</div>*/
/*                                 <div class="car-main-image" id="car-image-{{ model.key }}">&nbsp;</div>*/
/*                             </div>#}*/
/*                             <div class="car-next-step"><a href="{{ _host }}modelos/{{ model.key }}#caracteristicas"><span>Características</span></a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if begin.main.normal %}*/
/*                 <div class="full-size-section gray-degree window-adaptable model-section model-section-normal" data-min-height="650">*/
/*                     <div class="car-main big-main" style="background: url('{{ _host }}img/sections/models/main/{{ begin.main.normal.image }}') center 175px no-repeat">*/
/*                         <div class="car-main-title">*/
/*                             <div class="title">{{ begin.main.normal.title }}</div>*/
/*                             <div class="slogan">{{ begin.main.normal.slogan }}</div>*/
/*                             <div class="price">{{ begin.main.normal.price }}</div>*/
/*                             <div class="car-main-image" id="car-image-{{ model.key }}">&nbsp;</div>*/
/*                         </div>*/
/*                         <div class="car-next-step car-next-step-normal"><a href="{{ _host }}modelos/{{ model.key }}#caracteristicas"><span>Características</span></a></div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {# block home end #}*/
/*     {# block characteristics #}*/
/*         {% set features = model.caracteristicas %}*/
/*         {% if features %}*/
/*             <a class="section-separator" name="caracteristicas"></a>*/
/*             <div id="model-section-features" class="window-adaptable model-section special-padding-top" data-min-height="750">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ features.main.section_features.title }}</div>*/
/*                     <div class="description">{{ features.main.section_features.description }}</div>*/
/*                 </div>*/
/*                 <div class="specifications-wrapper">*/
/*                     <div class="specifications" id="features-wrapper">*/
/*                         {% for banner in features.main.specifications.banner %}*/
/*                             <div class="specification" style="background-image: url('{{ _host }}img/sections/models/features/{{ banner.image }}');">*/
/*                                 <div class="title-wrapper" style="color: #fff">*/
/*                                     <div class="title">*/
/*                                         {{ banner.title }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="description compact">*/
/*                                     <p>{{ banner.description }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="specifications-controls">*/
/*                     <div class="arrows">*/
/*                         <div class="arrow left"><a class="specifications-controls" href="#left"><span>Left</span></a></div>*/
/*                         <div class="arrow right"><a class="specifications-controls" href="#right"><span>Right</span></a></div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="next-link-text gallery">*/
/*                     <a  class="scroll-in-site" id="galeria" href="{{ _host }}modelos/{{ model.key }}#galeria"><span>Visita Galería</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block characteristics end #}*/
/*     {# block gallery #}*/
/*         {% set gallery = model.galeria %}*/
/*         {% if gallery %}*/
/*             <a class="section-separator"  name="galeria"></a>*/
/*             <div class="window-adaptable model-section special-padding-top" data-min-height="750">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ gallery.main.section_gallery.title }}</div>*/
/*                     <div class="description">{{ gallery.main.section_gallery.description }}</div>*/
/*                 </div>*/
/*                 <div class="galery-grid galery-of-{{ model.key }}">*/
/*                     <div class="content">*/
/*                         {% for boxes_gallery in gallery.main.grid.boxes %}*/
/*                             <div class="view view-first {{ boxes_gallery.class }}">*/
/*                                 <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/boxes/{{ boxes_gallery.image }}" />*/
/*                                 <div class="mask">*/
/*                                     <a href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ boxes_gallery.mask.class }}/{{ boxes_gallery.mask.href }}" class="info gallery-box-link {{ boxes_gallery.mask.class }}" data-link="">*/
/*                                         <span>&nbsp;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>                        */
/*                         {% endfor %}*/
/*                     </div>*/
/*                     {% set exterior = gallery.main.grid.fancybox.ext %}*/
/*                     {% set interior = gallery.main.grid.fancybox.int %}*/
/*                     {% set special = gallery.main.grid.fancybox.special %}*/
/*                     {% if exterior %}*/
/*                         <div class="hidden-list">*/
/*                             {% for ext in exterior %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ ext.group }}/{{ ext.href }}" data-fancybox-group="{{ ext.group }}" title=". . ." alt=". . .">*/
/*                                     <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ ext.group }}/{{ ext.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if interior %}*/
/*                         <div class="hidden-list">*/
/*                             {% for int in interior %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ int.group }}/{{ int.href }}" data-fancybox-group="{{ int.group }}" title=". . ." alt=". . .">*/
/*                                     <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ int.group }}/{{ int.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if special %}*/
/*                         <div class="hidden-list">*/
/*                             {% for spe in special %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ spe.group }}/{{ spe.href }}" data-fancybox-group="{{ spe.group }}" title=". . ." alt=". . .">*/
/*                                     <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ spe.group }}/{{ spe.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="next-link-text prices" style="margin-top: 40px;">*/
/*                     <a class="scroll-in-site" id="precios" href="{{ _host }}modelos/{{ model.key }}#precios"><span>Visita Versiones</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block gallery end #}*/
/*     {# block prices #}*/
/*         {% set prices = model.precios %}*/
/*         {% if prices %}*/
/*             <a class="section-separator"  name="precios"></a>*/
/*             <div class="model-section special-padding-top">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ prices.main.section_prices.title }}</div>*/
/*                     <div class="description">{{ prices.main.section_prices.description }}</div>*/
/*                 </div>*/
/*                 <div class="model-prices">*/
/*                     <span class="arrow-prices arrow-prices-left">&nbsp;</span>*/
/*                     <span class="arrow-prices arrow-prices-right">&nbsp;</span>*/
/*                     <div id="features-space-wrapper" class="display-tables" data-display-table="prices">*/
/*                         <div id="features-space-mask">*/
/*                             {% set columns = prices.main.model_prices.columns %}*/
/*                             {% set head = prices.main.model_prices.head %}*/
/*                             {% set body = prices.main.model_prices.body %}*/
/*                             <div id="features-space">*/
/*                                 <div class="suzuki-table cols-{{ columns }}" id="versions-price-table">*/
/*                                     <div class="data-wrapper">*/
/*                                         {% if head %}*/
/*                                             <div class="head">*/
/*                                                 {% if head.row and head.col %}*/
/*                                                     <div class="row  row-{{ head.row.class }} cols-{{ head.col.class }}">*/
/*                                                         {% if head.cell %}*/
/*                                                             {% if head.cell.first %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }} {{ head.cell.first.class }}">*/
/*                                                                     <div class="image" {% if head.cell.first.style %} style="{{ head.cell.first.style }}" {% endif %}>*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.first.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.first.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if head.cell.second %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }}">*/
/*                                                                     <div class="image" {% if head.cell.second.style %} style="{{ head.cell.second.style }}" {% endif %}>*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.second.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.second.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if head.cell.third %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }}">*/
/*                                                                     <div class="image" {% if head.cell.third.style %} style="{{ head.cell.third.style }}" {% endif %}>*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.third.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.third.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if head.cell.fourth %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }} {{ head.cell.fourth.class }}">*/
/*                                                                     <div class="image" {% if head.cell.fourth.style %} style="{{ head.cell.fourth.style }}" {% endif %}>*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.fourth.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.fourth.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         {% if body %}*/
/*                                             <div class="body">*/
/*                                                 {% for rows in body.row %}*/
/*                                                     <div class="row  row-{{ rows.class }} cols-{{ body.col.class }}">*/
/*                                                         {% if rows.cell.first %}*/
/*                                                             {% if rows.cell.first or rows.cell.first.price %}*/
/*                                                                 <div class="cell {#{{ body.height }}#} {{ rows.cell.first.price.class }} col-{{ rows.cell.class }} {{ rows.cell.first.class }}">*/
/*                                                                     <div class="title to-html {{ body.height }}">*/
/*                                                                         {% if rows.cell.first.title %}*/
/*                                                                             {{ rows.cell.first.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.first.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if rows.cell.second or rows.cell.second.price %}*/
/*                                                                 <div class="cell {#{{ body.height }}#} {{ rows.cell.second.price.class }} col-{{ rows.cell.class }} {{ rows.cell.second.class }}">*/
/*                                                                     <div class="title to-html {{ body.height }}">*/
/*                                                                         {% if rows.cell.second.title %}*/
/*                                                                             {{ rows.cell.second.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.second.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if rows.cell.third or rows.cell.third.price %}*/
/*                                                                 <div class="cell {#{{ body.height }}#} {{ rows.cell.third.price.class }} col-{{ rows.cell.class }} {{ rows.cell.third.class }}">*/
/*                                                                     <div class="title to-html {{ body.height }}">*/
/*                                                                         {% if rows.cell.third.title %}*/
/*                                                                             {{ rows.cell.third.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.third.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if rows.cell.fourth or rows.cell.fourth.price %}*/
/*                                                                 <div class="cell {#{{ body.height }}#} {{ rows.cell.fourth.price.class }} col-{{ rows.cell.class }} {{ rows.cell.fourth.class }}">*/
/*                                                                     <div class="title to-html {{ body.height }}">*/
/*                                                                         {% if rows.cell.fourth.title %}*/
/*                                                                             {{ rows.cell.fourth.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.fourth.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     </div>                                                */
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a style='text-align: center; margin: 30px auto 0 auto; display: block' onclick=ga('send', 'event', 'Material de apoyo', 'Descarga', '{{ model.precios.main.model_prices.event.ga }}' ); href="{{ _host }}files/fichas/{{ model.precios.main.model_prices.event.href }}" target="_blank">*/
/*                                 <span class="entypo">&#128196;</span><span>Descargar ficha completa en PDF</span>*/
/*                             </a>*/
/*                             {#<div class="comparative-button-wrapper">#}*/
/*                                 {#<a class="swap-display-tables button blue" data-display-table="comparative">Comparar con otros modelos</a>#}*/
/*                             {#</div>#}*/
/*                         </div>*/
/*         {% endif %}*/
/*         {% set maintenance = model.mantenimieto %}*/
/*         {% if maintenance %}*/
/*                         <a name="mantenimiento" id="maintenance-prices" class="maintenance-anchors"></a>*/
/*                         <div class="maintenance-prices">*/
/*                             <div id="maintenance-title" class="section-title">*/
/*                                 <div class="title">{{ maintenance.main.maintenance_prices.section_maintenance_prices.title }}</div>*/
/*                             </div>*/
/*                             <div class="suzuki-table cols-{{ maintenance.main.maintenance_prices.table.columns }}" id="versions-maintenance-table">*/
/*                                 <div class="data-wrapper">*/
/*                                     <div class="body">*/
/*                                         {% for rows in maintenance.main.maintenance_prices.table.body.row %}*/
/*                                             <div class="row row-{{ rows.class }} cols-{{ maintenance.main.maintenance_prices.table.columns }}" data-id="{{ rows.id }}">*/
/*                                                 {% if rows.cell or rows.cell.first.head_class or rows.cell.first %}*/
/*                                                     <div class="cell {{ rows.cell.first.head_class }} col-{{ rows.cell.first.col }} {{ rows.cell.first.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.first.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if rows.cell or rows.cell.second.head_class or rows.cell.second %}*/
/*                                                     <div class="cell {{ rows.cell.second.head_class }} col-{{ rows.cell.second.col }} {{ rows.cell.second.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.second.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if rows.cell or rows.cell.third.head_class or rows.cell.third %}*/
/*                                                     <div class="cell {{ rows.cell.third.head_class }} col-{{ rows.cell.third.col }} {{ rows.cell.third.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.third.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if not rows.cell or rows.cell.fourth.head_class or rows.cell.fourth %}*/
/*                                                     <div class="cell {{ rows.cell.fourth.head_class }} col-{{ rows.cell.fourth.col }} {{ rows.cell.fourth.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.fourth.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if not rows.cell or rows.cell.fifth.head_class or rows.cell.fifth %}*/
/*                                                     <div class="cell {{ rows.cell.fifth.head_class }} col-{{ rows.cell.fifth.col }} {{ rows.cell.fifth.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.fifth.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             </div>                                        */
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         {#<div class="maintenance-image" style="background: url('{{ _host }}img/sections/models/prices/big-models/{{ maintenance.main.image }}') right 80px no-repeat;">&nbsp;</div>#}*/
/*                         <div class="clearfix"></div>*/
/*                         <br><br>*/
/*                         <p style="margin: 5px 0 30px; text-align: center;">*/
/*                             <a href="{{ _host }}financiamiento/{{ maintenance.main.key }}" id="go-financing-{{ maintenance.main.key }}" data-gama-model-key="{{ maintenance.main.key }}" data-gama-model-id="{{ model.id }}" class="button red">Pide tu cotización y estrena un {{ maintenance.main.name }}.</a>*/
/*                         </p>*/
/*                         <p id="p-empty">&nbsp;</p>*/
/*                         <div class="next-link-text accesories" style="margin-top: 20px;">*/
/*                             <a class="scroll-in-site" id="accesorios" href="{{ _host }}modelos/{{ model.key }}#accesorios"><span>Visita Accesorios</span></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block prices end #}*/
/*     {# block accessories #}*/
/*         {% set accessories = model.accesorios %}*/
/*         {% if accessories %}*/
/*             <a class="section-separator"  name="accesorios"></a>*/
/*             <div class="model-section special-padding-top">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ accessories.main.section_gallery.title }}</div>*/
/*                     <div class="description">{{ accessories.main.section_gallery.description }}</div>*/
/*                 </div>*/
/*                 <div class="galery-grid galery-of-{{ model.key }}" id="accesorios-padding">*/
/*                     <div class="content">*/
/*                         {% for boxes_gallery in accessories.main.grid.boxes %}*/
/*                             <div class="view view-first {{ boxes_gallery.class }}">*/
/*                                 <img src="{{ _host }}img/sections/models/accessories/{{ model.key }}/boxes/{{ boxes_gallery.image }}" />*/
/*                                 <div class="mask">*/
/*                                     <a href="{{ _host }}img/sections/models/accessories/{{ model.key }}/{{ boxes_gallery.mask.href }}" class="info gallery-box-link {{ accessories.main.class }}" data-link="">*/
/*                                         <span>&nbsp;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>                        */
/*                         {% endfor %}*/
/*                     </div>*/
/*                     {% set interior = accessories.main.grid.fancybox.thumbs %}*/
/*                     <div class="hidden-list">*/
/*                         {% if interior %}*/
/*                             {% for thumb in interior %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/accessories/{{ model.key }}/{{ thumb.href }}" data-fancybox-group="accesorios" title="{{ thumb.title }}" alt="{{ thumb.title }}">*/
/*                                     <img src="{{ _host }}img/sections/models/accessories/{{ model.key }}/{{ thumb.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% if accessories.main.event %}*/
/*                         <p style="margin: 5px 0 30px; text-align: center;">*/
/*                             Pregunta en tu concesionaria por los accesorios para que personalices tu Suzuki.<br /><br />*/
/*                             <a onclick="ga('send', 'event', 'Material de apoyo', 'Descarga', '{{ accessories.main.event.ga }}');" href="{{ _host }}files/accesorios/{{ accessories.main.event.href }}" class="button red" target="_blank">Descargar catálogo de accesorios</a>*/
/*                         </p>*/
/*                     {% endif %}*/
/*                     <div id="next-test" class="next-link-text" style="margin-top: 40px;">*/
/*                         <a  class="scroll-in-site" id="prueba-de-manejo" href="{{ _host }}modelos/{{ model.key }}#prueba-de-manejo"><span>Haz una prueba</span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block accessories end #}*/
/*     {# block test drive #}*/
/*         <a class="section-separator"  name="prueba-de-manejo"></a>*/
/*         <div id="instant-drive-section"></div>*/
/*         <div id="text-drive-section" class="model-section special-padding-top  window-adaptable"  data-min-height="700">*/
/*             <div id="test-drive-models">*/
/*                 <div class="section-title">*/
/*                     <div class="title">Agendar prueba de manejo</div>*/
/*                     <div class="description">Contactanos para agendar tu prueba de manejo y vivir la experiencia Suzuki.</div>*/
/*                 </div>*/
/*                 <div id="test-drive-steps">*/
/*                     <div id="header-prueba-manejo-modelos">*/
/*                         <div class="test-panel-tabs">*/
/*                             <ul>*/
/*                                 <li class="test-tabs model-test-tab active">*/
/*                                     <a class="model-change-tab" data-number="{{ model.id }}">*/
/*                                         ¿Cuándo quieres hacer tu prueba de manejo?*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="test-tabs model-test-tab bg-button-fuinancing active">*/
/*                                     <a class="model-change-tab" href="{{ _host }}financiamiento/{{ model.key }}" id="go-financing-{{ model.key }}" data-gama-model-key="{{ model.key }}" data-gama-model-id="{{ model.id }}">*/
/*                                         Pide tu cotización y estrena un Suzuki {{ model.name }}.*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div id="content-test-drive-section">*/
/*                             {% embed "modelos/modelo/testdrive_form.twig" %}{% endembed %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="model-section"></div>*/
/*     {# block test drive end #}*/
/* </div>*/
/* */
