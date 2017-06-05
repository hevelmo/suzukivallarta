<?php

/* modelos/modelo/testdrive_form.twig */
class __TwigTemplate_a7925ba29f47870025504bb91a4698649625bbe36eef34d2813bcb2b3ec84f52 extends Twig_Template
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
        echo "<div class=\"panel_tabs_container\">
    <br><br><br>
    <div class=\"panel_tabs\" id=\"\">
        <div class=\"step-tab step-tab-model active\" id=\"td-model-step-2\">
            <div id=\"step-2-car\" class=\"step-left\">
                <div class=\"car_thumb_180\">
                    <div class=\"car\">&nbsp;</div>
                </div>
                <h3 class=\"secondary-title thumb-name\"></h3>
            </div>
            <div class=\"step-right\">
                <div class=\"financing_main\">
                    <div class=\"financing_content\">
                        <form id=\"test_drive\">
                            <p>Para mejorar tu experiencia nos gustaría conocerte.<br>Proporciónanos los siguientes datos para poder comunicarnos contigo.</p>
                            ";
        // line 18
        echo "                            <div class=\"financing_elements\">
                                <div class=\"financing_element a\">
                                    <fieldset>
                                        <label for=\"suk_date\" style=\"display: none;\">
                                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Fecha
                                        </label>
                                        <input type=\"text\" value=\"\" name=\"fecha\" class=\"test_drive_model_date datepicker-here model_date\" id=\"suk_date\" data-position=\"top left\" data-language='es' placeholder=\"Fecha prueba de manejo\" data-validation-data=\"required|date\">
                                        <p class=\"invalid-message\">Este campo es obligatorio<span>&nbsp;</span></p>
                                    </fieldset>                                    
                                </div>
                                <div class=\"financing_element b\">
                                    <fieldset>
                                        <label for=\"suk_name\" style=\"display: none;\">
                                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Nombre
                                        </label>
                                        <input type=\"text\" id=\"suk_name\" name=\"nombre\" class=\"validate-required\" placeholder=\"Nombre\" data-validation-data=\"required|name\">
                                        <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"financing_elements\">
                                <div class=\"financing_element a\">
                                    <fieldset>
                                        <label for=\"suk_lastname\" style=\"display: none;\">
                                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Apellido
                                        </label>
                                        <input type=\"text\" id=\"suk_lastname\" name=\"apellido\" class=\"validate-required\" placeholder=\"Apellidos\" data-validation-data=\"required|name\">
                                        <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                                    </fieldset>
                                </div>
                                <div class=\"financing_element b\">
                                    <fieldset>
                                        <label for=\"suk_email\" style=\"display: none;\">
                                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Correo electrónico
                                        </label>
                                        <input type=\"text\" id=\"suk_email\" name=\"correo\" class=\"validate-required\" placeholder=\"Correo electrónico\" data-validation-data=\"required|email\">
                                        <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                                    </fieldset>
                                </div>
                            </div>
                            <div class=\"financing_elements\">
                                <div class=\"financing_element a\">
                                    <fieldset>
                                        <label for=\"suk_phone\" style=\"display: none;\">
                                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Número de celular
                                        </label>
                                        <input type=\"text\" id=\"suk_phone\" name=\"telefono\" class=\"validate-required\" placeholder=\"Número de celular\" data-validation-data=\"required|phone\">
                                        <p class=\"invalid-message\" id=\"error_phone\">Este campo es obligatorio<span>&nbsp;</span></p>
                                    </fieldset>
                                </div>
                                <div class=\"financing_element b\">
                                </div>
                            </div>
                            <div class=\"financing_elements\">
                                <div class=\"financing_element a\">
                                    <fieldset class=\"fieldset-radio-checkbox\" style=\"clear: both;\">
                                        <label for=\"suk_model_newsletter\" class=\"label-checkbox\">
                                            <input
                                                type=\"checkbox\"
                                                id=\"suk_model_newsletter\"
                                                name=\"model_newsletter\"
                                                value=\"\"> Deseo recibir noticias y promociones.
                                        </label>
                                    </fieldset>
                                </div>
                                <div class=\"financing_element b\">
                                    <fieldset id=\"fields_hidden\">
                                        <input type=\"hidden\" name=\"producto\" id=\"suk_producto\" value=\"Prueba de manejo - ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"modelo\" id=\"suk_modelo\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"concesionaria\" id=\"suk_concesionaria\" value=\"Suzuki Autos ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"imagen\" id=\"suk_imagen\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"news\" id=\"suk_news\" value=\"0\">
                                        <input type=\"hidden\" name=\"campaign\" id=\"suk_campaign\" value=\"Suzuki Autos ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo " - Prueba de Manejo\">
                                        <input type=\"hidden\" id=\"suk_agn\" name=\"agencia\" value=\"Suzuki Autos ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                        <div class=\"financing_elements\">
                            <div class=\"financing_element a\">
                                <fieldset>
                                    <div id=\"loader_send_icon\" class=\"form-loader\" style=\"display: none;\">
                                        <div class=\"loader\">
                                            <div class=\"loader-wrap\">
                                                <div class=\"loader-item\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class=\"financing_element b\">
                                <fieldset>
                                    <button id=\"testdrive_send\" class=\"enviar button red send_contact_form testdrive-form-send\">Agendar prueba de manejo</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class=\"financing_elements\">
                            <div class=\"financing_element ab\">
                                <fieldset>
                                    <p>
                                        Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "aviso-de-privacidad\" id=\"go-privacy-notice\">Aviso de Privacidad</a>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</div>";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/testdrive_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 118,  128 => 91,  124 => 90,  119 => 88,  115 => 87,  111 => 86,  107 => 85,  38 => 18,  21 => 2,  19 => 1,);
    }
}
/* {% set model = mdopa %}*/
/* <div class="panel_tabs_container">*/
/*     <br><br><br>*/
/*     <div class="panel_tabs" id="">*/
/*         <div class="step-tab step-tab-model active" id="td-model-step-2">*/
/*             <div id="step-2-car" class="step-left">*/
/*                 <div class="car_thumb_180">*/
/*                     <div class="car">&nbsp;</div>*/
/*                 </div>*/
/*                 <h3 class="secondary-title thumb-name"></h3>*/
/*             </div>*/
/*             <div class="step-right">*/
/*                 <div class="financing_main">*/
/*                     <div class="financing_content">*/
/*                         <form id="test_drive">*/
/*                             <p>Para mejorar tu experiencia nos gustaría conocerte.<br>Proporciónanos los siguientes datos para poder comunicarnos contigo.</p>*/
/*                             {# test drive #}*/
/*                             <div class="financing_elements">*/
/*                                 <div class="financing_element a">*/
/*                                     <fieldset>*/
/*                                         <label for="suk_date" style="display: none;">*/
/*                                             <span style="color: red;" class="fa fa-asterisk"></span> Fecha*/
/*                                         </label>*/
/*                                         <input type="text" value="" name="fecha" class="test_drive_model_date datepicker-here model_date" id="suk_date" data-position="top left" data-language='es' placeholder="Fecha prueba de manejo" data-validation-data="required|date">*/
/*                                         <p class="invalid-message">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                                     </fieldset>                                    */
/*                                 </div>*/
/*                                 <div class="financing_element b">*/
/*                                     <fieldset>*/
/*                                         <label for="suk_name" style="display: none;">*/
/*                                             <span style="color: red;" class="fa fa-asterisk"></span> Nombre*/
/*                                         </label>*/
/*                                         <input type="text" id="suk_name" name="nombre" class="validate-required" placeholder="Nombre" data-validation-data="required|name">*/
/*                                         <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                                     </fieldset>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="financing_elements">*/
/*                                 <div class="financing_element a">*/
/*                                     <fieldset>*/
/*                                         <label for="suk_lastname" style="display: none;">*/
/*                                             <span style="color: red;" class="fa fa-asterisk"></span> Apellido*/
/*                                         </label>*/
/*                                         <input type="text" id="suk_lastname" name="apellido" class="validate-required" placeholder="Apellidos" data-validation-data="required|name">*/
/*                                         <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                                     </fieldset>*/
/*                                 </div>*/
/*                                 <div class="financing_element b">*/
/*                                     <fieldset>*/
/*                                         <label for="suk_email" style="display: none;">*/
/*                                             <span style="color: red;" class="fa fa-asterisk"></span> Correo electrónico*/
/*                                         </label>*/
/*                                         <input type="text" id="suk_email" name="correo" class="validate-required" placeholder="Correo electrónico" data-validation-data="required|email">*/
/*                                         <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                                     </fieldset>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="financing_elements">*/
/*                                 <div class="financing_element a">*/
/*                                     <fieldset>*/
/*                                         <label for="suk_phone" style="display: none;">*/
/*                                             <span style="color: red;" class="fa fa-asterisk"></span> Número de celular*/
/*                                         </label>*/
/*                                         <input type="text" id="suk_phone" name="telefono" class="validate-required" placeholder="Número de celular" data-validation-data="required|phone">*/
/*                                         <p class="invalid-message" id="error_phone">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                                     </fieldset>*/
/*                                 </div>*/
/*                                 <div class="financing_element b">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="financing_elements">*/
/*                                 <div class="financing_element a">*/
/*                                     <fieldset class="fieldset-radio-checkbox" style="clear: both;">*/
/*                                         <label for="suk_model_newsletter" class="label-checkbox">*/
/*                                             <input*/
/*                                                 type="checkbox"*/
/*                                                 id="suk_model_newsletter"*/
/*                                                 name="model_newsletter"*/
/*                                                 value=""> Deseo recibir noticias y promociones.*/
/*                                         </label>*/
/*                                     </fieldset>*/
/*                                 </div>*/
/*                                 <div class="financing_element b">*/
/*                                     <fieldset id="fields_hidden">*/
/*                                         <input type="hidden" name="producto" id="suk_producto" value="Prueba de manejo - {{ model.name }}">*/
/*                                         <input type="hidden" name="modelo" id="suk_modelo" value="{{ model.name }}">*/
/*                                         <input type="hidden" name="concesionaria" id="suk_concesionaria" value="Suzuki Autos {{ _loc }}">*/
/*                                         <input type="hidden" name="imagen" id="suk_imagen" value="{{ model.key }}">*/
/*                                         <input type="hidden" name="news" id="suk_news" value="0">*/
/*                                         <input type="hidden" name="campaign" id="suk_campaign" value="Suzuki Autos {{ _loc }} - Prueba de Manejo">*/
/*                                         <input type="hidden" id="suk_agn" name="agencia" value="Suzuki Autos {{ _loc }}">*/
/*                                     </fieldset>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                         <div class="financing_elements">*/
/*                             <div class="financing_element a">*/
/*                                 <fieldset>*/
/*                                     <div id="loader_send_icon" class="form-loader" style="display: none;">*/
/*                                         <div class="loader">*/
/*                                             <div class="loader-wrap">*/
/*                                                 <div class="loader-item"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </fieldset>*/
/*                             </div>*/
/*                             <div class="financing_element b">*/
/*                                 <fieldset>*/
/*                                     <button id="testdrive_send" class="enviar button red send_contact_form testdrive-form-send">Agendar prueba de manejo</button>*/
/*                                 </fieldset>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="financing_elements">*/
/*                             <div class="financing_element ab">*/
/*                                 <fieldset>*/
/*                                     <p>*/
/*                                         Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href="{{ _host }}aviso-de-privacidad" id="go-privacy-notice">Aviso de Privacidad</a>*/
/*                                     </p>*/
/*                                 </fieldset>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br><br><br>*/
/* </div>*/
