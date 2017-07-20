<?php

/* bolsa/container.twig */
class __TwigTemplate_a49d753ba071e505662d0c9d736e5f52b74e5bacd344ba7e98f9c16fc1dc20f8 extends Twig_Template
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
    <div class=\"promos-wrapper-contact\">
        <div class=\"promos-container-contact\">
            <div class=\"promotion-contact\">
                <div class=\"promo-content-contact\">
                    <div class=\"description\">
                        <p class=\"description_title\">Bolsa de trabajo</p>
                        ";
        // line 9
        echo "                    </div>
                </div>
                <div class=\"contact_main\">
                    <div id=\"content-section-form-contact\">
                        ";
        // line 13
        $this->loadTemplate("bolsa/container.twig", "bolsa/container.twig", 13, "2094558894")->display($context);
        // line 14
        echo "                    </div>
                    <div class=\"contact_sidebar\">
                        <div class=\"contact_social\">
                            <p class=\"contact_social_title\">Domicilio Vallarta</p>
                            <p>Av. Vallarta No. 5300.</p>
                            <p>Col. Jardines Vallarta. Zapopan, Jal.
                            <p>Tel. 01(33)3777-1989</p>
                            <p>CP. 45027</p>
                        <br>
                            <p class=\"contact_social_title\">Domicilio López Mateos</p>
                            <p>Av. López Mateos Núm. 5654</p>
                            <p>Col. Arboledas, Zapopan, Jalisco.</p>
                            <p>Tel. 01-(33)-3884-8200</p>
                            <p>CP. 45070</p>
                        <br>
                            <p class=\"contact_social_title\">Redes sociales</p>
                            <p>Comparte tus experiencias con la comunidad Suzuki</p>
                            <div class=\"social fb\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook');\" href=\"https://www.facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta/\" target=\"_blank\">Suzuki Facebook</a></div>
                            <div class=\"social tw\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Twitter');\" href=\"https://twitter.com/Suzuki_Gdl\" target=\"_blank\">Suzuki Twitter</a></div>
                            <div class=\"social in\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram');\" href=\"https://www.instagram.com/suzukiguadalajara/\" target=\"_blank\">Suzuki Instagram</a></div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bolsa/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 14,  34 => 13,  28 => 9,  19 => 1,);
    }
}


/* bolsa/container.twig */
class __TwigTemplate_a49d753ba071e505662d0c9d736e5f52b74e5bacd344ba7e98f9c16fc1dc20f8_2094558894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("bolsa/contact_form.twig", "bolsa/container.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "bolsa/contact_form.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "bolsa/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  36 => 14,  34 => 13,  28 => 9,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-contact">*/
/*         <div class="promos-container-contact">*/
/*             <div class="promotion-contact">*/
/*                 <div class="promo-content-contact">*/
/*                     <div class="description">*/
/*                         <p class="description_title">Bolsa de trabajo</p>*/
/*                         {#<p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>#}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="contact_main">*/
/*                     <div id="content-section-form-contact">*/
/*                         {% embed "bolsa/contact_form.twig" %}{% endembed %}*/
/*                     </div>*/
/*                     <div class="contact_sidebar">*/
/*                         <div class="contact_social">*/
/*                             <p class="contact_social_title">Domicilio Vallarta</p>*/
/*                             <p>Av. Vallarta No. 5300.</p>*/
/*                             <p>Col. Jardines Vallarta. Zapopan, Jal.*/
/*                             <p>Tel. 01(33)3777-1989</p>*/
/*                             <p>CP. 45027</p>*/
/*                         <br>*/
/*                             <p class="contact_social_title">Domicilio López Mateos</p>*/
/*                             <p>Av. López Mateos Núm. 5654</p>*/
/*                             <p>Col. Arboledas, Zapopan, Jalisco.</p>*/
/*                             <p>Tel. 01-(33)-3884-8200</p>*/
/*                             <p>CP. 45070</p>*/
/*                         <br>*/
/*                             <p class="contact_social_title">Redes sociales</p>*/
/*                             <p>Comparte tus experiencias con la comunidad Suzuki</p>*/
/*                             <div class="social fb"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook');" href="https://www.facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta/" target="_blank">Suzuki Facebook</a></div>*/
/*                             <div class="social tw"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Twitter');" href="https://twitter.com/Suzuki_Gdl" target="_blank">Suzuki Twitter</a></div>*/
/*                             <div class="social in"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram');" href="https://www.instagram.com/suzukiguadalajara/" target="_blank">Suzuki Instagram</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
