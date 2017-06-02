<?php

/* menus/panel_menu_before_buy.twig */
class __TwigTemplate_624162b473f021669a6ed4f12ed33fd16d06d2103f41ad4ea5f7da67da88d450 extends Twig_Template
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
        echo "\t<div class=\"header-section nav_before_buy\" style=\"display: none;\">
\t\t<div class=\"header-section-content-wrapper\">
\t\t\t<div class=\"close-menu-box\">
\t\t\t\t<a id=\"close-before-buy-panel\" class=\"cur-hover\">Cerrar<span>&nbsp;</span></a>
\t\t\t</div>
\t\t\t<div class=\"header-section-content before-buy\">
\t\t\t    <div class=\"header-title\">Comprar un Suzuki</div>
\t\t\t    <div class=\"header-links-list\">
\t\t\t        <i class=\"back-list-arrow\"></i>
\t\t\t        ";
        // line 40
        echo "\t\t\t        <div class=\"header-column\">
\t\t\t            <div class=\"title\">10 Razones</div>
\t\t\t            <div class=\"description\">
\t\t\t                Conoce las 10 razones para comprar un Suzuki
\t\t\t            </div>
\t\t\t            <ul class=\"links-list\">
\t\t\t                <li>
\t\t\t                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "razones\" onclick=\"ga('send', 'event', '10 Razones', 'Liga_interna', 'Conoce las 10 razones para comprar un Suzuki');\"><span>Conócelas</span><i></i></a>
\t\t\t                </li>
\t\t\t            </ul>
\t\t\t            <i class=\"header-column-arrow\"></i>
\t\t\t        </div>
\t\t\t        <div class=\"header-column social last\">
\t\t\t            <div class=\"title\">Social</div>
\t\t\t            <div class=\"description\">
\t\t\t                ¿Tienes alguna duda? Te la resolvemos.
\t\t\t            </div>
\t\t\t            <ul class=\"links-list\">
\t\t\t                <li class=\"icon facebook\">
\t\t\t                \t<i></i>
\t\t\t                \t<a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Comprar_Suzuki_Facebook');\" target=\"_blank\" href=\"https://www.facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta\">
\t\t\t                \t\t<span>Facebook</span>
\t\t                \t\t</a>
\t                \t\t</li>
\t\t\t                <li class=\"icon twitter\">
\t\t                \t\t<i></i>
\t                \t\t\t<a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Comprar_Suzuki_Twitter');\" target=\"_blank\" href=\"https://twitter.com/Suzuki_Gdl\">
\t                \t\t\t\t<span>Twitter</span>
                \t\t\t\t</a>
            \t\t\t\t</li>
\t\t\t            </ul>
\t\t\t            <i class=\"header-column-arrow\"></i>
\t\t\t        </div>
\t\t\t        <div class=\"clearfix\"></div>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "menus/panel_menu_before_buy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 47,  30 => 40,  19 => 2,);
    }
}
/* {# Begin: before buy #}*/
/* 	<div class="header-section nav_before_buy" style="display: none;">*/
/* 		<div class="header-section-content-wrapper">*/
/* 			<div class="close-menu-box">*/
/* 				<a id="close-before-buy-panel" class="cur-hover">Cerrar<span>&nbsp;</span></a>*/
/* 			</div>*/
/* 			<div class="header-section-content before-buy">*/
/* 			    <div class="header-title">Comprar un Suzuki</div>*/
/* 			    <div class="header-links-list">*/
/* 			        <i class="back-list-arrow"></i>*/
/* 			        {#*/
/* 			        <div class="header-column">*/
/* 			            <div class="title">Prueba de manejo</div>*/
/* 			            <div class="description">*/
/* 			                Elige un modelo Suzuki y manéjalo. Te enamorarás.*/
/* 			            </div>*/
/* 			            <ul class="links-list">*/
/* 			                <li>*/
/* 			                    <a href="#prueba-de-manejo" onclick="$.openPanel( 'test-drive',  {'key': 'swift'});return false;"><span>Swift</span><i></i></a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#financiamiento" onclick="$.openPanel( 'test-drive',  {'key': 'swift-sport'});return false;"><span>Swift Sport</span><i></i></a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#financiamiento" onclick="$.openPanel( 'test-drive',  {'key': 'grand-vitara'});return false;"><span>Grand Vitara</span><i></i></a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#financiamiento" onclick="$.openPanel( 'test-drive',  {'key': 'kizashi'});return false;"><span>Kizashi</span><i></i></a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#ciaz" onclick="$.openPanel( 'test-drive',  {'key': 'ciaz'});return false;"><span>Ciaz</span><i></i></a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#financiamiento" onclick="$.openPanel( 'test-drive',  {'key': 's-cross'});return false;"><span>S Cross</span><i></i></a>*/
/* 			                </li>*/
/* 			            </ul>*/
/* 			            <i class="header-column-arrow"></i>*/
/* 			        </div>*/
/* 			        #}*/
/* 			        <div class="header-column">*/
/* 			            <div class="title">10 Razones</div>*/
/* 			            <div class="description">*/
/* 			                Conoce las 10 razones para comprar un Suzuki*/
/* 			            </div>*/
/* 			            <ul class="links-list">*/
/* 			                <li>*/
/* 			                    <a href="{{ _host}}razones" onclick="ga('send', 'event', '10 Razones', 'Liga_interna', 'Conoce las 10 razones para comprar un Suzuki');"><span>Conócelas</span><i></i></a>*/
/* 			                </li>*/
/* 			            </ul>*/
/* 			            <i class="header-column-arrow"></i>*/
/* 			        </div>*/
/* 			        <div class="header-column social last">*/
/* 			            <div class="title">Social</div>*/
/* 			            <div class="description">*/
/* 			                ¿Tienes alguna duda? Te la resolvemos.*/
/* 			            </div>*/
/* 			            <ul class="links-list">*/
/* 			                <li class="icon facebook">*/
/* 			                	<i></i>*/
/* 			                	<a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Comprar_Suzuki_Facebook');" target="_blank" href="https://www.facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta">*/
/* 			                		<span>Facebook</span>*/
/* 		                		</a>*/
/* 	                		</li>*/
/* 			                <li class="icon twitter">*/
/* 		                		<i></i>*/
/* 	                			<a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Comprar_Suzuki_Twitter');" target="_blank" href="https://twitter.com/Suzuki_Gdl">*/
/* 	                				<span>Twitter</span>*/
/*                 				</a>*/
/*             				</li>*/
/* 			            </ul>*/
/* 			            <i class="header-column-arrow"></i>*/
/* 			        </div>*/
/* 			        <div class="clearfix"></div>*/
/* 			    </div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {# End: before buy #}*/
/* */
