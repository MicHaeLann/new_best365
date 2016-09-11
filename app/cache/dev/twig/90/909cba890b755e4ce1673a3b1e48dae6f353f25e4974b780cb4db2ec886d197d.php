<?php

/* AdminBannerBundle:BannerZone:view.html.twig */
class __TwigTemplate_ae5a65cf56d136d43c7a9a8be580b925ec7c7b7dd28c3273dc733391d3692f73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:BannerZone:view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3d4ef750cf45536335daebfe0b9cb516d12c9f2120fbfb5a81646eba9b1209c = $this->env->getExtension("native_profiler");
        $__internal_b3d4ef750cf45536335daebfe0b9cb516d12c9f2120fbfb5a81646eba9b1209c->enter($__internal_b3d4ef750cf45536335daebfe0b9cb516d12c9f2120fbfb5a81646eba9b1209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d4ef750cf45536335daebfe0b9cb516d12c9f2120fbfb5a81646eba9b1209c->leave($__internal_b3d4ef750cf45536335daebfe0b9cb516d12c9f2120fbfb5a81646eba9b1209c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdf586f70375c177468015d9eb50ff65ea19b7d56d2a61fe4c19c6227916a6f1 = $this->env->getExtension("native_profiler");
        $__internal_cdf586f70375c177468015d9eb50ff65ea19b7d56d2a61fe4c19c6227916a6f1->enter($__internal_cdf586f70375c177468015d9eb50ff65ea19b7d56d2a61fe4c19c6227916a6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_zone_view_component", array("id" =>         // line 9
(isset($context["id"]) ? $context["id"] : null))));
        // line 10
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_zone_new_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_cdf586f70375c177468015d9eb50ff65ea19b7d56d2a61fe4c19c6227916a6f1->leave($__internal_cdf586f70375c177468015d9eb50ff65ea19b7d56d2a61fe4c19c6227916a6f1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  48 => 10,  46 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             {{ render(url("admin_banner_zone_view_component", {*/
/*                 'id': id,*/
/*             })) }}*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ render(url("admin_banner_zone_new_component")) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
