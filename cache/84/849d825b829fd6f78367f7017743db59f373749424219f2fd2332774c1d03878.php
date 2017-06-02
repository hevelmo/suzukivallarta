<?php

/* modelos/gama_models.twig */
class __TwigTemplate_f27d9e91769419e91d7ef19e3ec0af52aa61a7576d83df8aa67b301eb5a550ef extends Twig_Template
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
        echo "<div class=\"header-section\" style=\"display: block;\">
\t<div class=\"header-section-content-wrapper\">
\t\t<div class=\"close-menu-box\">
\t\t\t<a id=\"close-models-panel\">Cerrar<span>&nbsp;</span></a>
\t\t</div>
\t\t<div class=\"header-section-content models\">
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
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "key", array()), "html", null, true);
            echo "\" onclick=\"ga('send', 'event', 'Gamma Suzuki ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "title", array()), "html", null, true);
            echo "', 'Liga_interna', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "title", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "slogan", array()), "html", null, true);
            echo "');\" class=\"gama-model cur-hover\" id=\"go-model-";
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
\t\t\t                    <div class=\"slogan\">
\t\t\t                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "slogan", array()), "html", null, true);
            echo "
\t\t\t                    </div>
\t\t\t                    <div class=\"info\">
\t\t\t                        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["gama"], "info", array()), "html", null, true);
            echo "
\t\t\t                    </div>
\t\t\t                </div>
\t\t\t                <i></i>
\t\t\t                <div class=\"clearfix\"></div>
\t\t\t            </a>
\t\t\t        </div>\t\t    \t    
\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gama'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t        <div class=\"clearfix\"></div>
\t\t        <div class=\"note\">
\t\t            <p>* El valor de rendimiento de combustible combinado para este modelo, convenido con las autoridades
\t\t                correspondientes, es el obtenido mediante pruebas de ciclo en ciudad y en carretera, en condiciones
\t\t                controladas de laboratorio que no pueden ser reproducibles ni obtenerse en condiciones y hábitos de
\t\t                manejo convencionales, debido a los factores climatológicos, de combustible, condiciones topográficas, entre otros.
\t\t            </p>
\t\t        </div>
\t\t   \t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modelos/gama_models.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  75 => 25,  69 => 22,  63 => 19,  40 => 13,  35 => 12,  31 => 11,  21 => 3,  19 => 2,);
    }
}
/* {# Begin: Modelos #}*/
/* {% set modelo = mdopa %}*/
/* <div class="header-section" style="display: block;">*/
/* 	<div class="header-section-content-wrapper">*/
/* 		<div class="close-menu-box">*/
/* 			<a id="close-models-panel">Cerrar<span>&nbsp;</span></a>*/
/* 		</div>*/
/* 		<div class="header-section-content models">*/
/*     		<div class="header-title"></div>*/
/* 		    <div class="models-wrapper">*/
/* 		    	{% for gama in modelo %}*/
/* 			    	<div class="model {{ gama.key }}">*/
/* 			            <a href="{{ _host }}modelos/{{ gama.key }}" onclick="ga('send', 'event', 'Gamma Suzuki {{ gama.title }}', 'Liga_interna', '{{ gama.title }} - {{ gama.slogan }}');" class="gama-model cur-hover" id="go-model-{{ gama.key }}" data-gama-model="{{ gama.key }}" data-gama-id="{{ gama.id }}">*/
/* 			                <div class="car-preview">*/
/* 			                    <span>&nbsp;</span>*/
/* 			                </div>*/
/* 			                <div class="car-info">*/
/* 			                    <div class="title">*/
/* 			                        {{ gama.title }}*/
/* 			                    </div>*/
/* 			                    <div class="slogan">*/
/* 			                        {{ gama.slogan }}*/
/* 			                    </div>*/
/* 			                    <div class="info">*/
/* 			                        {{ gama.info }}*/
/* 			                    </div>*/
/* 			                </div>*/
/* 			                <i></i>*/
/* 			                <div class="clearfix"></div>*/
/* 			            </a>*/
/* 			        </div>		    	    */
/* 		    	{% endfor %}*/
/* 		        <div class="clearfix"></div>*/
/* 		        <div class="note">*/
/* 		            <p>* El valor de rendimiento de combustible combinado para este modelo, convenido con las autoridades*/
/* 		                correspondientes, es el obtenido mediante pruebas de ciclo en ciudad y en carretera, en condiciones*/
/* 		                controladas de laboratorio que no pueden ser reproducibles ni obtenerse en condiciones y hábitos de*/
/* 		                manejo convencionales, debido a los factores climatológicos, de combustible, condiciones topográficas, entre otros.*/
/* 		            </p>*/
/* 		        </div>*/
/* 		   	</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {# End: Modelos #}*/
