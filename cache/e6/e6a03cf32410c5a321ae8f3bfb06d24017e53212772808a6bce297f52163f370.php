<?php

/* bolsa/contact_form.twig */
class __TwigTemplate_f915acfd571b47729367e3c7fe6c592122ba1f18f86a6bad1d742912046071c8 extends Twig_Template
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
        echo "<div class=\"contact_content\">
    <div id=\"form-wrapper\">
        <div class=\"financing_main\">
            <div class=\"financing_content\">
                <form id=\"contact\">
                    ";
        // line 8
        echo "                    <div class=\"contact_elements\">
                        <div class=\"contact_element ab\">
                            <fieldset class=\"custom-file-upload\" id=\"content_custom_file_upload\">
                                <label for=\"file\">
                                    Adjunta tu CV. 
                                    <span style=\"float:right; color: #e1251b;\">
                                        <i class=\"fa fa-asterisk fa-fw\" style=\"position: relative; top: 0px; left: 0px;\"></i>
                                        Sólo archivos en PDF.
                                    </span>
                                </label>
                                <div class=\"text-center\">
                                    <input type=\"file\" class=\"input-standard validate-required validate-upload\" name=\"archivo\" id=\"suk_update_file\" data-validation-data=\"required|upload\" size=\"2120\">
                                    <p class=\"invalid-message\" id=\"error_upload\">Este campo es obligatorio<span>&nbsp;</span></p>
                                </div>                                
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element a\">
                            <fieldset>
                                <label for=\"suk_name\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Nombre
                                </label>
                                <input type=\"text\" id=\"suk_name\" name=\"nombre\" class=\"validate-required\" placeholder=\"Nombre\" data-validation-data=\"required|name\">
                                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"contact_element b\">
                            <fieldset>
                                <label for=\"suk_lastname\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Apellido
                                </label>
                                <input type=\"text\" id=\"suk_lastname\" name=\"apellidos\" class=\"validate-required\" placeholder=\"Apellidos\" data-validation-data=\"required|name\">
                                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element a\">
                            <fieldset>
                                <label for=\"suk_email\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Correo electrónico
                                </label>
                                <input type=\"text\" id=\"suk_email\" name=\"correo\" class=\"validate-required\" placeholder=\"Correo electrónico\" data-validation-data=\"required|email\">
                                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"contact_element b\">
                            <fieldset>
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element ab\">
                            <fieldset>
                                <label for=\"suk_message\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Mensaje
                                </label>
                                <textarea name=\"mensaje\" class=\"escribir2 validate-required\" id=\"suk_message\" data-validation-data=\"required|address\" placeholder=\"Mensaje\"></textarea>
                                <p class=\"invalid-message\" id=\"error_mensaje\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"dia\" id=\"suk_date\" value=\"\">
                    <input type=\"hidden\" name=\"nombre_archivo\" id=\"suk_filename\" value=\"\">
                    <input type=\"hidden\" name=\"mime\" id=\"suk_mime\" value=\"\">
                    <input type=\"hidden\" name=\"file_content\" id=\"suk_filecontent\" value=\"\">

                    <input type=\"hidden\" name=\"producto\" id=\"suk_product\" value=\"Bolsa de Trabajo Camcar\">
                    <input type=\"hidden\" id=\"suk_agn\" name=\"agencia\" value=\"Suzuki Autos ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">

                    <input type=\"hidden\" name=\"imagen\" id=\"suk_imagen\" value=\"\">
                    <input type=\"hidden\" name=\"campaign\" id=\"suk_campaign\" value=\"Suzuki Autos ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo " - Bolsa de Trabajo\">
                    <div class=\"clearfix\"></div>
                </form>
                <div class=\"contact_elements\">
                    <div class=\"contact_element a\">
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
                    <div class=\"contact_element b\">
                        <fieldset>
                            <button id=\"contact_send\" class=\"enviar button red send_contact_form job-board-form-send\">Enviar</button>
                        </fieldset>
                    </div>
                </div>
                <div class=\"financing_elements\">
                    <div class=\"financing_element ab\">
                        <fieldset>
                            <p>
                                Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "aviso-de-privacidad\" id=\"go-privacy-notice\">Aviso de Privacidad</a>
                            </p>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bolsa/contact_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 106,  106 => 81,  100 => 78,  28 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% set model = mdopa %}*/
/* <div class="contact_content">*/
/*     <div id="form-wrapper">*/
/*         <div class="financing_main">*/
/*             <div class="financing_content">*/
/*                 <form id="contact">*/
/*                     {# Contacto #}*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element ab">*/
/*                             <fieldset class="custom-file-upload" id="content_custom_file_upload">*/
/*                                 <label for="file">*/
/*                                     Adjunta tu CV. */
/*                                     <span style="float:right; color: #e1251b;">*/
/*                                         <i class="fa fa-asterisk fa-fw" style="position: relative; top: 0px; left: 0px;"></i>*/
/*                                         Sólo archivos en PDF.*/
/*                                     </span>*/
/*                                 </label>*/
/*                                 <div class="text-center">*/
/*                                     <input type="file" class="input-standard validate-required validate-upload" name="archivo" id="suk_update_file" data-validation-data="required|upload" size="2120">*/
/*                                     <p class="invalid-message" id="error_upload">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                                 </div>                                */
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element a">*/
/*                             <fieldset>*/
/*                                 <label for="suk_name" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Nombre*/
/*                                 </label>*/
/*                                 <input type="text" id="suk_name" name="nombre" class="validate-required" placeholder="Nombre" data-validation-data="required|name">*/
/*                                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="contact_element b">*/
/*                             <fieldset>*/
/*                                 <label for="suk_lastname" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Apellido*/
/*                                 </label>*/
/*                                 <input type="text" id="suk_lastname" name="apellidos" class="validate-required" placeholder="Apellidos" data-validation-data="required|name">*/
/*                                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element a">*/
/*                             <fieldset>*/
/*                                 <label for="suk_email" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Correo electrónico*/
/*                                 </label>*/
/*                                 <input type="text" id="suk_email" name="correo" class="validate-required" placeholder="Correo electrónico" data-validation-data="required|email">*/
/*                                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="contact_element b">*/
/*                             <fieldset>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element ab">*/
/*                             <fieldset>*/
/*                                 <label for="suk_message" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Mensaje*/
/*                                 </label>*/
/*                                 <textarea name="mensaje" class="escribir2 validate-required" id="suk_message" data-validation-data="required|address" placeholder="Mensaje"></textarea>*/
/*                                 <p class="invalid-message" id="error_mensaje">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <input type="hidden" name="dia" id="suk_date" value="">*/
/*                     <input type="hidden" name="nombre_archivo" id="suk_filename" value="">*/
/*                     <input type="hidden" name="mime" id="suk_mime" value="">*/
/*                     <input type="hidden" name="file_content" id="suk_filecontent" value="">*/
/* */
/*                     <input type="hidden" name="producto" id="suk_product" value="Bolsa de Trabajo Camcar">*/
/*                     <input type="hidden" id="suk_agn" name="agencia" value="Suzuki Autos {{ _loc }}">*/
/* */
/*                     <input type="hidden" name="imagen" id="suk_imagen" value="">*/
/*                     <input type="hidden" name="campaign" id="suk_campaign" value="Suzuki Autos {{ _loc }} - Bolsa de Trabajo">*/
/*                     <div class="clearfix"></div>*/
/*                 </form>*/
/*                 <div class="contact_elements">*/
/*                     <div class="contact_element a">*/
/*                         <fieldset>*/
/*                             <div id="loader_send_icon" class="form-loader" style="display: none;">*/
/*                                 <div class="loader">*/
/*                                     <div class="loader-wrap">*/
/*                                         <div class="loader-item"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                     <div class="contact_element b">*/
/*                         <fieldset>*/
/*                             <button id="contact_send" class="enviar button red send_contact_form job-board-form-send">Enviar</button>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="financing_elements">*/
/*                     <div class="financing_element ab">*/
/*                         <fieldset>*/
/*                             <p>*/
/*                                 Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href="{{ _host }}aviso-de-privacidad" id="go-privacy-notice">Aviso de Privacidad</a>*/
/*                             </p>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
