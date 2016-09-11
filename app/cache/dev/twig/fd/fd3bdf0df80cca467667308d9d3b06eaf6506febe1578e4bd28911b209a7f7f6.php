<?php

/* AdminCartBundle:Order:list.html.twig */
class __TwigTemplate_b4c227053b3a5cfa5903a04c5feb6e443a0a2ec6099118b48f7c19faed512759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCartBundle:Order:list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebfcd21bfbcc29895174c1dc3f8f3ebbe42e3e6a1f3c0bbc89f5c78a6049279f = $this->env->getExtension("native_profiler");
        $__internal_ebfcd21bfbcc29895174c1dc3f8f3ebbe42e3e6a1f3c0bbc89f5c78a6049279f->enter($__internal_ebfcd21bfbcc29895174c1dc3f8f3ebbe42e3e6a1f3c0bbc89f5c78a6049279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:Order:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "order");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebfcd21bfbcc29895174c1dc3f8f3ebbe42e3e6a1f3c0bbc89f5c78a6049279f->leave($__internal_ebfcd21bfbcc29895174c1dc3f8f3ebbe42e3e6a1f3c0bbc89f5c78a6049279f_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d73cacba0e77ceab0233d134f5ebc7fb6b343a634c7b77f28eeb0caa41e58ce2 = $this->env->getExtension("native_profiler");
        $__internal_d73cacba0e77ceab0233d134f5ebc7fb6b343a634c7b77f28eeb0caa41e58ce2->enter($__internal_d73cacba0e77ceab0233d134f5ebc7fb6b343a634c7b77f28eeb0caa41e58ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCartBundle:Order:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.order.plural"), "active" => true)))));
        // line 16
        echo "
";
        
        $__internal_d73cacba0e77ceab0233d134f5ebc7fb6b343a634c7b77f28eeb0caa41e58ce2->leave($__internal_d73cacba0e77ceab0233d134f5ebc7fb6b343a634c7b77f28eeb0caa41e58ce2_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_171e23533db55ef92986855fb4917ebe952752608cc53ef13ffdc1ee9698c338 = $this->env->getExtension("native_profiler");
        $__internal_171e23533db55ef92986855fb4917ebe952752608cc53ef13ffdc1ee9698c338->enter($__internal_171e23533db55ef92986855fb4917ebe952752608cc53ef13ffdc1ee9698c338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_order_list_component", array("page" =>         // line 24
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 25
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 26
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 27
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 29
        echo "

";
        
        $__internal_171e23533db55ef92986855fb4917ebe952752608cc53ef13ffdc1ee9698c338->leave($__internal_171e23533db55ef92986855fb4917ebe952752608cc53ef13ffdc1ee9698c338_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:Order:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  70 => 27,  69 => 26,  68 => 25,  67 => 24,  66 => 22,  63 => 21,  57 => 20,  49 => 16,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'order',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.order.plural'|trans, active: true }*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_order_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection,*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
