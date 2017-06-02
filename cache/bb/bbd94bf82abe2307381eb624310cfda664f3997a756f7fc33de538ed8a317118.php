<?php

/* financiamiento/modelo/container.twig */
class __TwigTemplate_43db526972c3ebad3bd53a7061bacd6f6b98470457fcb2dc0eb32da099923310 extends Twig_Template
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
    <div class=\"promos-wrapper-financing\">
        <div class=\"promos-container-financing\">
            <div id=\"promocion-financing_by_model\" class=\"promotion-financing ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "-bg\">
                <div class=\"promo-content-financing\">
                    <div class=\"description\">
                        <p class=\"description_title\">FINANCIAMIENTO</p>
                    </div>
                </div>
                <div class=\"\">
                    <div id=\"content-section-form-test-drive-selection\">
                        <div id=\"content-financing-newform\" class=\"ptb25 mtb25 clearfix\">
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <div class=\"financing_main\">
                                        <div class=\"financing_content\">
                                            <div class=\"col-md-4 plr0\">
                                                <div class=\"col-md-12 pl0 pr0 pt25 pb25\">
                                                    <div class=\"row\">
                                                        <div id=\"model_select_preview\" class=\"content-thumb-model\">
                                                            <img id=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" class=\"thumb-model thumb-model-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/template/models/financing/thumbs/thumb-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo ".png\" alt=\"...\">
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <h3 id=\"model_select_title\" class=\"secondary-title\">
                                                            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "inicio", array()), "main", array()), "title", array()), "html", null, true);
        echo "
                                                        </h3>
                                                    </div>
                                                    <div class=\"row text-center\">
                                                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "financiamiento\" id=\"go-financing\" class=\"button blue\">Regresar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-7 borderleft plr30\">
                                                <div id=\"content-leads-financing-form\">
                                                    ";
        // line 37
        $this->loadTemplate("financiamiento/modelo/container.twig", "financiamiento/modelo/container.twig", 37, "1985040260")->display($context);
        // line 38
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  76 => 37,  67 => 31,  60 => 27,  46 => 22,  26 => 5,  21 => 2,  19 => 1,);
    }
}


/* financiamiento/modelo/container.twig */
class __TwigTemplate_43db526972c3ebad3bd53a7061bacd6f6b98470457fcb2dc0eb32da099923310_1985040260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 37
        $this->parent = $this->loadTemplate("financiamiento/modelo/form_financing.twig", "financiamiento/modelo/container.twig", 37);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "financiamiento/modelo/form_financing.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  78 => 38,  76 => 37,  67 => 31,  60 => 27,  46 => 22,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% set model = mdopa %}*/
/* <div id="content-content">*/
/*     <div class="promos-wrapper-financing">*/
/*         <div class="promos-container-financing">*/
/*             <div id="promocion-financing_by_model" class="promotion-financing {{ model.key }}-bg">*/
/*                 <div class="promo-content-financing">*/
/*                     <div class="description">*/
/*                         <p class="description_title">FINANCIAMIENTO</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="">*/
/*                     <div id="content-section-form-test-drive-selection">*/
/*                         <div id="content-financing-newform" class="ptb25 mtb25 clearfix">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="row">*/
/*                                     <div class="financing_main">*/
/*                                         <div class="financing_content">*/
/*                                             <div class="col-md-4 plr0">*/
/*                                                 <div class="col-md-12 pl0 pr0 pt25 pb25">*/
/*                                                     <div class="row">*/
/*                                                         <div id="model_select_preview" class="content-thumb-model">*/
/*                                                             <img id="{{ model.key }}" class="thumb-model thumb-model-{{ model.key }}" src="{{ _host }}img/template/models/financing/thumbs/thumb-{{ model.key }}.png" alt="...">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="row">*/
/*                                                         <h3 id="model_select_title" class="secondary-title">*/
/*                                                             {{ model.inicio.main.title }}*/
/*                                                         </h3>*/
/*                                                     </div>*/
/*                                                     <div class="row text-center">*/
/*                                                         <a href="{{ _host }}financiamiento" id="go-financing" class="button blue">Regresar</a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-md-7 borderleft plr30">*/
/*                                                 <div id="content-leads-financing-form">*/
/*                                                     {% embed "financiamiento/modelo/form_financing.twig" %}{% endembed %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
