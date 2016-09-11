<?php

/* AdminCartBundle:CustomerOrder:list.html.twig */
class __TwigTemplate_34b29a02f77bb29088d3961d3d892df42cf999b2004084085c1136a0770dfd79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCartBundle:CustomerOrder:list.html.twig", 1);
        $this->blocks = array(
            'header_actions' => array($this, 'block_header_actions'),
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
        $__internal_87594454be35820e6cf7752033fe4485d4a3c630a1e90255553b2b01fd3b4843 = $this->env->getExtension("native_profiler");
        $__internal_87594454be35820e6cf7752033fe4485d4a3c630a1e90255553b2b01fd3b4843->enter($__internal_87594454be35820e6cf7752033fe4485d4a3c630a1e90255553b2b01fd3b4843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:CustomerOrder:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "order");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87594454be35820e6cf7752033fe4485d4a3c630a1e90255553b2b01fd3b4843->leave($__internal_87594454be35820e6cf7752033fe4485d4a3c630a1e90255553b2b01fd3b4843_prof);

    }

    // line 9
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_b1bfd6932f11e19d3963140df19e6d81f9570dac4e38cb4d6dc27aa99afb4eec = $this->env->getExtension("native_profiler");
        $__internal_b1bfd6932f11e19d3963140df19e6d81f9570dac4e38cb4d6dc27aa99afb4eec->enter($__internal_b1bfd6932f11e19d3963140df19e6d81f9570dac4e38cb4d6dc27aa99afb4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 10
        echo "
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_order_list");
        echo "\" type=\"button\" class=\"button-primary\">
        <i class=\"icon-shopping-cart\"></i>
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.all"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_customer_edit", array("id" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"button-secondary\">
        <i class=\"icon-user\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.to_user"), "html", null, true);
        echo "
    </a>

";
        
        $__internal_b1bfd6932f11e19d3963140df19e6d81f9570dac4e38cb4d6dc27aa99afb4eec->leave($__internal_b1bfd6932f11e19d3963140df19e6d81f9570dac4e38cb4d6dc27aa99afb4eec_prof);

    }

    // line 23
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dc043c7d963142c24617c3b280fd2ace0f29c4d423462fdb63fcb884b1bdd1c7 = $this->env->getExtension("native_profiler");
        $__internal_dc043c7d963142c24617c3b280fd2ace0f29c4d423462fdb63fcb884b1bdd1c7->enter($__internal_dc043c7d963142c24617c3b280fd2ace0f29c4d423462fdb63fcb884b1bdd1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCartBundle:CustomerOrder:list.html.twig", 25)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.order.plural"), "url" => $this->env->getExtension('routing')->getUrl("admin_order_list")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.order.from_user", array("%name%" => $this->getAttribute(        // line 28
(isset($context["customer"]) ? $context["customer"] : null), "fullName", array()))), "active" => true)))));
        // line 31
        echo "
";
        
        $__internal_dc043c7d963142c24617c3b280fd2ace0f29c4d423462fdb63fcb884b1bdd1c7->leave($__internal_dc043c7d963142c24617c3b280fd2ace0f29c4d423462fdb63fcb884b1bdd1c7_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef7af11cc8c05c2ff6467685526826e631c91d98c91146ccf9b07b944cdc8a1b = $this->env->getExtension("native_profiler");
        $__internal_ef7af11cc8c05c2ff6467685526826e631c91d98c91146ccf9b07b944cdc8a1b->enter($__internal_ef7af11cc8c05c2ff6467685526826e631c91d98c91146ccf9b07b944cdc8a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 36
        echo "
    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_customer_order_list_component", array("customerId" => $this->getAttribute(        // line 39
(isset($context["customer"]) ? $context["customer"] : null), "id", array()), "page" =>         // line 40
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 41
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 42
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 43
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 45
        echo "

";
        
        $__internal_ef7af11cc8c05c2ff6467685526826e631c91d98c91146ccf9b07b944cdc8a1b->leave($__internal_ef7af11cc8c05c2ff6467685526826e631c91d98c91146ccf9b07b944cdc8a1b_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:CustomerOrder:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  108 => 43,  107 => 42,  106 => 41,  105 => 40,  104 => 39,  103 => 37,  100 => 36,  94 => 35,  86 => 31,  84 => 28,  83 => 25,  80 => 24,  74 => 23,  63 => 17,  58 => 15,  53 => 13,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
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
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_order_list') }}" type="button" class="button-primary">*/
/*         <i class="icon-shopping-cart"></i>*/
/*         {{ 'admin.order.all'|trans }}*/
/*     </a>*/
/*     <a href="{{ url('admin_customer_edit', { id: customer.id }) }}" type="button" class="button-secondary">*/
/*         <i class="icon-user"></i>*/
/*         {{ 'admin.order.to_user'|trans }}*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.order.plural'|trans, url: url('admin_order_list') },*/
/*             { name: 'admin.order.from_user'|trans({ '%name%': customer.fullName }), active: true }*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_customer_order_list_component', {*/
/*             customerId: customer.id,*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
