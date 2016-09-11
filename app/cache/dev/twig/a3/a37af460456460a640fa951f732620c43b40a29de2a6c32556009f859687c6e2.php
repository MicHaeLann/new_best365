<?php

/* AdminBannerBundle:Banner:list.html.twig */
class __TwigTemplate_58dc694810dfe25149be36cd733f3915478099274cf13e9d8e8ee6697c49664c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:Banner:list.html.twig", 1);
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
        $__internal_b2ac0052cc57955637b1e34ca81059b4225d36dce094384f9f81a72000db06e9 = $this->env->getExtension("native_profiler");
        $__internal_b2ac0052cc57955637b1e34ca81059b4225d36dce094384f9f81a72000db06e9->enter($__internal_b2ac0052cc57955637b1e34ca81059b4225d36dce094384f9f81a72000db06e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ac0052cc57955637b1e34ca81059b4225d36dce094384f9f81a72000db06e9->leave($__internal_b2ac0052cc57955637b1e34ca81059b4225d36dce094384f9f81a72000db06e9_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_840ba57f0292e60278049a6858774ea5ec575218dbbe9ddf8258a264fae9634f = $this->env->getExtension("native_profiler");
        $__internal_840ba57f0292e60278049a6858774ea5ec575218dbbe9ddf8258a264fae9634f->enter($__internal_840ba57f0292e60278049a6858774ea5ec575218dbbe9ddf8258a264fae9634f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_list_component", array("page" =>         // line 9
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 10
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 11
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 12
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 13
        echo "
        </div>
    </div>

";
        
        $__internal_840ba57f0292e60278049a6858774ea5ec575218dbbe9ddf8258a264fae9634f->leave($__internal_840ba57f0292e60278049a6858774ea5ec575218dbbe9ddf8258a264fae9634f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:list.html.twig";
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
/*             {{ render(url("admin_banner_list_component", {*/
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
