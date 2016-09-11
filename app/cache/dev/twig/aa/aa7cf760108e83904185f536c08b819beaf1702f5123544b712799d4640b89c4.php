<?php

/* AdminBannerBundle:BannerZone:list.html.twig */
class __TwigTemplate_9f94966037356cae88ee8b0565a344617d67686aec5a070898610788284e8146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:BannerZone:list.html.twig", 1);
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
        $__internal_0c7c6e9ed5a9c712504806b8c4804bb23aea133f15307eb1eb42d6bf658a02a4 = $this->env->getExtension("native_profiler");
        $__internal_0c7c6e9ed5a9c712504806b8c4804bb23aea133f15307eb1eb42d6bf658a02a4->enter($__internal_0c7c6e9ed5a9c712504806b8c4804bb23aea133f15307eb1eb42d6bf658a02a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c7c6e9ed5a9c712504806b8c4804bb23aea133f15307eb1eb42d6bf658a02a4->leave($__internal_0c7c6e9ed5a9c712504806b8c4804bb23aea133f15307eb1eb42d6bf658a02a4_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_710e87287ea9c3d65c50ef7cc82821ab95fc2087e6712e3c37f1cbd7b95f4dff = $this->env->getExtension("native_profiler");
        $__internal_710e87287ea9c3d65c50ef7cc82821ab95fc2087e6712e3c37f1cbd7b95f4dff->enter($__internal_710e87287ea9c3d65c50ef7cc82821ab95fc2087e6712e3c37f1cbd7b95f4dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_zone_list_component", array("page" =>         // line 9
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 10
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 11
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 12
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 13
        echo "
        </div>
    </div>

";
        
        $__internal_710e87287ea9c3d65c50ef7cc82821ab95fc2087e6712e3c37f1cbd7b95f4dff->leave($__internal_710e87287ea9c3d65c50ef7cc82821ab95fc2087e6712e3c37f1cbd7b95f4dff_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  49 => 12,  48 => 11,  47 => 10,  46 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_banner_zone_list_component", {*/
/*                 'page': page,*/
/*                 'limit': limit,*/
/*                 'orderByField': orderByField,*/
/*                 'orderByDirection': orderByDirection*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
