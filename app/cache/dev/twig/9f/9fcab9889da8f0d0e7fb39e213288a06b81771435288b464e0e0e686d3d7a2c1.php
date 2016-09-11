<?php

/* AdminCouponBundle:Coupon:list.html.twig */
class __TwigTemplate_4adb2c79ad796ed94300714fb53ba73f4e42f99e3fd4c86fcda5e4d388df58df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCouponBundle:Coupon:list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'header_actions' => array($this, 'block_header_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03eb2a2a3858fd708eeca2114ee5a92e0e2707687f83db6be5b14b83eb78f950 = $this->env->getExtension("native_profiler");
        $__internal_03eb2a2a3858fd708eeca2114ee5a92e0e2707687f83db6be5b14b83eb78f950->enter($__internal_03eb2a2a3858fd708eeca2114ee5a92e0e2707687f83db6be5b14b83eb78f950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCouponBundle:Coupon:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "coupon");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03eb2a2a3858fd708eeca2114ee5a92e0e2707687f83db6be5b14b83eb78f950->leave($__internal_03eb2a2a3858fd708eeca2114ee5a92e0e2707687f83db6be5b14b83eb78f950_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e6705508c9603bbc3f0ab1dbc624b70c363d4bcff536af193eb253595b33ae00 = $this->env->getExtension("native_profiler");
        $__internal_e6705508c9603bbc3f0ab1dbc624b70c363d4bcff536af193eb253595b33ae00->enter($__internal_e6705508c9603bbc3f0ab1dbc624b70c363d4bcff536af193eb253595b33ae00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCouponBundle:Coupon:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.coupon.plural"), "active" => true)))));
        // line 16
        echo "
";
        
        $__internal_e6705508c9603bbc3f0ab1dbc624b70c363d4bcff536af193eb253595b33ae00->leave($__internal_e6705508c9603bbc3f0ab1dbc624b70c363d4bcff536af193eb253595b33ae00_prof);

    }

    // line 20
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_de83219c5a049bbf6b4663082b119bc53dd1f1eda3b44b0fa4378067012915c0 = $this->env->getExtension("native_profiler");
        $__internal_de83219c5a049bbf6b4663082b119bc53dd1f1eda3b44b0fa4378067012915c0->enter($__internal_de83219c5a049bbf6b4663082b119bc53dd1f1eda3b44b0fa4378067012915c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 21
        echo "
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_coupon_new");
        echo "\" class=\"button-primary\">
        <i class=\"icon-plus\"></i> <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_de83219c5a049bbf6b4663082b119bc53dd1f1eda3b44b0fa4378067012915c0->leave($__internal_de83219c5a049bbf6b4663082b119bc53dd1f1eda3b44b0fa4378067012915c0_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ff494917f73688708070a54cb9007b0ddad071bc913962c05e163bcd5e39209 = $this->env->getExtension("native_profiler");
        $__internal_0ff494917f73688708070a54cb9007b0ddad071bc913962c05e163bcd5e39209->enter($__internal_0ff494917f73688708070a54cb9007b0ddad071bc913962c05e163bcd5e39209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_coupon_list_component", array("page" =>         // line 35
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 36
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 37
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 38
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 40
        echo "
        </div>
    </div>

";
        
        $__internal_0ff494917f73688708070a54cb9007b0ddad071bc913962c05e163bcd5e39209->leave($__internal_0ff494917f73688708070a54cb9007b0ddad071bc913962c05e163bcd5e39209_prof);

    }

    public function getTemplateName()
    {
        return "AdminCouponBundle:Coupon:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  97 => 38,  96 => 37,  95 => 36,  94 => 35,  93 => 33,  88 => 30,  82 => 29,  71 => 23,  67 => 22,  64 => 21,  58 => 20,  50 => 16,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'coupon',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.coupon.plural'|trans, active: true }*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_coupon_new') }}" class="button-primary">*/
/*         <i class="icon-plus"></i> <span>{{ 'admin.coupon.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{*/
/*                 render(url('admin_coupon_list_component', {*/
/*                     page: page,*/
/*                     limit: limit,*/
/*                     orderByField: orderByField,*/
/*                     orderByDirection: orderByDirection*/
/*                 }))*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
