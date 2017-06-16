<?php

/* financiamiento/gama_models.twig */
class __TwigTemplate_40453b1dc36f7aa4b03b8f0b617c79749a44018439dbc9286e56182199fc3c9b extends Twig_Template
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
        // line 2
        $context["modelo"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 3
        echo "<div class=\"header-section financing-general\" style=\"display: block;\">
\t<div class=\"header-section-content-financing-general-wrapper\">
\t\t";
        // line 8
        echo "\t\t<div class=\"header-section-content-financing-general no-padding models\">
    \t\t<div class=\"header-title\"></div>
\t\t    <div class=\"models-wrapper\">
\t\t    \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelo"]) ? $context["modelo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gama"]) {
            // line 12
            echo "\t\t\t    \t<div class=\"model ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "key", array()), "html", null, true);
            echo "\">
\t\t\t            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "financiamiento/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "key", array()), "html", null, true);
            echo "\" class=\"gama-model financing cur-hover\" id=\"go-financing-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "key", array()), "html", null, true);
            echo "\" data-gama-model=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "key", array()), "html", null, true);
            echo "\" data-gama-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "id", array()), "html", null, true);
            echo "\">
\t\t\t                <div class=\"car-preview\">
\t\t\t                    <span>&nbsp;</span>
\t\t\t                </div>
\t\t\t                <div class=\"car-info\">
\t\t\t                    <div class=\"title\">
\t\t\t                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "title", array()), "html", null, true);
            echo "
\t\t\t                    </div>
\t\t\t                    ";
            // line 27
            echo "\t\t\t                </div>
\t\t\t                <i></i>
\t\t\t                <div class=\"clearfix\"></div>
\t\t\t            </a>
\t\t\t        </div>
\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gama'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t        <div class=\"clearfix\"></div>
\t\t   \t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "financiamiento/gama_models.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  61 => 27,  56 => 19,  39 => 13,  34 => 12,  30 => 11,  25 => 8,  21 => 3,  19 => 2,);
    }
}
/* {# Begin: Modelos #}*/
/* {% set modelo = mdopa %}*/
/* <div class="header-section financing-general" style="display: block;">*/
/* 	<div class="header-section-content-financing-general-wrapper">*/
/* 		{#<div class="close-menu-box">*/
/* 			<a id="close-models-panel">Cerrar<span>&nbsp;</span></a>*/
/* 		</div>#}*/
/* 		<div class="header-section-content-financing-general no-padding models">*/
/*     		<div class="header-title"></div>*/
/* 		    <div class="models-wrapper">*/
/* 		    	{% for gama in modelo %}*/
/* 			    	<div class="model {{ gama.key }}">*/
/* 			            <a href="{{ _host }}financiamiento/{{ gama.key }}" class="gama-model financing cur-hover" id="go-financing-{{ gama.key }}" data-gama-model="{{ gama.key }}" data-gama-id="{{ gama.id }}">*/
/* 			                <div class="car-preview">*/
/* 			                    <span>&nbsp;</span>*/
/* 			                </div>*/
/* 			                <div class="car-info">*/
/* 			                    <div class="title">*/
/* 			                        {{ gama.title }}*/
/* 			                    </div>*/
/* 			                    {#<div class="slogan">*/
/* 			                        {{ gama.slogan }}*/
/* 			                    </div>*/
/* 			                    <div class="info">*/
/* 			                        {{ gama.info }}*/
/* 			                    </div>#}*/
/* 			                </div>*/
/* 			                <i></i>*/
/* 			                <div class="clearfix"></div>*/
/* 			            </a>*/
/* 			        </div>*/
/* 		    	{% endfor %}*/
/* 		        <div class="clearfix"></div>*/
/* 		   	</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {# End: Modelos #}*/
/* */
