<?php

/* contacto/container.twig */
class __TwigTemplate_ca27ba86153e77b4ef804dfd7e883d9637576e5cf411c99ab3a14787613c9391 extends Twig_Template
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
                        <p class=\"description_title\">CONTÁCTANOS</p>
                        <p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>
                    </div>
                </div>
                <div class=\"contact_main\">
                    <div id=\"content-section-form-contact\">
                        ";
        // line 13
        $this->loadTemplate("contacto/container.twig", "contacto/container.twig", 13, "254845821")->display($context);
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
                            <div class=\"social fb\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook');\" href=\"http://facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta\" target=\"_blank\">Suzuki GDL</a></div>
                            <div class=\"social tw\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram');\" href=\"http://twitter.com/Suzuki_Gdl\" target=\"_blank\">Suzuki GDL</a></div>
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
        return "contacto/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  33 => 13,  19 => 1,);
    }
}


/* contacto/container.twig */
class __TwigTemplate_ca27ba86153e77b4ef804dfd7e883d9637576e5cf411c99ab3a14787613c9391_254845821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("contacto/contact_form.twig", "contacto/container.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "contacto/contact_form.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "contacto/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  35 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-contact">*/
/*         <div class="promos-container-contact">*/
/*             <div class="promotion-contact">*/
/*                 <div class="promo-content-contact">*/
/*                     <div class="description">*/
/*                         <p class="description_title">CONTÁCTANOS</p>*/
/*                         <p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="contact_main">*/
/*                     <div id="content-section-form-contact">*/
/*                         {% embed "contacto/contact_form.twig" %}{% endembed %}*/
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
/*                             <div class="social fb"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook');" href="http://facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta" target="_blank">Suzuki GDL</a></div>*/
/*                             <div class="social tw"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram');" href="http://twitter.com/Suzuki_Gdl" target="_blank">Suzuki GDL</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
