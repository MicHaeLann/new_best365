<?php

/* AdminCartBundle:Order:listComponent.html.twig */
class __TwigTemplate_adaadc91faedd1ef8336715affdac6368429515953aafb022556cbd3ac9b55e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminCartBundle:Order:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'no_items' => array($this, 'block_no_items'),
            'table_head' => array($this, 'block_table_head'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_paginator_links' => array($this, 'block_table_paginator_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e3fd27c9307935f234bb883588733a0ae65a9f0f7cc8949f8d58dbcbdb254a6 = $this->env->getExtension("native_profiler");
        $__internal_4e3fd27c9307935f234bb883588733a0ae65a9f0f7cc8949f8d58dbcbdb254a6->enter($__internal_4e3fd27c9307935f234bb883588733a0ae65a9f0f7cc8949f8d58dbcbdb254a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:Order:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "order");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3fd27c9307935f234bb883588733a0ae65a9f0f7cc8949f8d58dbcbdb254a6->leave($__internal_4e3fd27c9307935f234bb883588733a0ae65a9f0f7cc8949f8d58dbcbdb254a6_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_84ccf8af32c895166f422b7a52e07be9ec3caa5dc7f44d1d16510431cbd12f4f = $this->env->getExtension("native_profiler");
        $__internal_84ccf8af32c895166f422b7a52e07be9ec3caa5dc7f44d1d16510431cbd12f4f->enter($__internal_84ccf8af32c895166f422b7a52e07be9ec3caa5dc7f44d1d16510431cbd12f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.list"), "html", null, true);
        
        $__internal_84ccf8af32c895166f422b7a52e07be9ec3caa5dc7f44d1d16510431cbd12f4f->leave($__internal_84ccf8af32c895166f422b7a52e07be9ec3caa5dc7f44d1d16510431cbd12f4f_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_bb2bcca23a1cbe264944a8a451665804c1d6dcba7cf19cdaf0615ac50ddbdabf = $this->env->getExtension("native_profiler");
        $__internal_bb2bcca23a1cbe264944a8a451665804c1d6dcba7cf19cdaf0615ac50ddbdabf->enter($__internal_bb2bcca23a1cbe264944a8a451665804c1d6dcba7cf19cdaf0615ac50ddbdabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.order.single"), 1 => $this->env->getExtension('translator')->trans("admin.order.plural")), "method"), "html", null, true);
        
        $__internal_bb2bcca23a1cbe264944a8a451665804c1d6dcba7cf19cdaf0615ac50ddbdabf->leave($__internal_bb2bcca23a1cbe264944a8a451665804c1d6dcba7cf19cdaf0615ac50ddbdabf_prof);

    }

    // line 20
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_a0b013a9b7e187e1a218abe3cf03da7be7542d50a5a475fd15dfef38c67dbd1a = $this->env->getExtension("native_profiler");
        $__internal_a0b013a9b7e187e1a218abe3cf03da7be7542d50a5a475fd15dfef38c67dbd1a->enter($__internal_a0b013a9b7e187e1a218abe3cf03da7be7542d50a5a475fd15dfef38c67dbd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminCartBundle:Order:listComponent.html.twig", 22)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.order.single")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.order.field.date")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.order.field.customer")), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.order.field.status")), 4 => array("name" => $this->env->getExtension('translator')->trans("admin.order.field.total"))), "class" => "order")));
        // line 32
        echo "
";
        
        $__internal_a0b013a9b7e187e1a218abe3cf03da7be7542d50a5a475fd15dfef38c67dbd1a->leave($__internal_a0b013a9b7e187e1a218abe3cf03da7be7542d50a5a475fd15dfef38c67dbd1a_prof);

    }

    // line 36
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_ff4cb6ed98ff84f47ea075754344f3cdc5a98fc0dac67a5dd9a1f6e41f3a33ab = $this->env->getExtension("native_profiler");
        $__internal_ff4cb6ed98ff84f47ea075754344f3cdc5a98fc0dac67a5dd9a1f6e41f3a33ab->enter($__internal_ff4cb6ed98ff84f47ea075754344f3cdc5a98fc0dac67a5dd9a1f6e41f3a33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 37
        echo "
    <td>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_order_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" data-test=\"order-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.field.id", array("%id%" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        ";
        // line 44
        $this->loadTemplate("AdminCartBundle:Order:date.html.twig", "AdminCartBundle:Order:listComponent.html.twig", 44)->display(array_merge($context, array("date" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt", array()))));
        // line 45
        echo "    </td>
    <td>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_customer_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "customer", array()), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "customer", array()), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        <span class=\"label label-warning\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("common.order.states." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paymentStateLineStack", array()), "lastStateLine", array()), "name", array()))), "html", null, true);
        echo "
        </span>
        <span class=\"label label-info\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("common.order.states." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "shippingStateLineStack", array()), "lastStateLine", array()), "name", array()))), "html", null, true);
        echo "
        </span>
    </td>
    <td>
        ";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "amount", array()))), "html", null, true);
        echo "
    </td>

";
        
        $__internal_ff4cb6ed98ff84f47ea075754344f3cdc5a98fc0dac67a5dd9a1f6e41f3a33ab->leave($__internal_ff4cb6ed98ff84f47ea075754344f3cdc5a98fc0dac67a5dd9a1f6e41f3a33ab_prof);

    }

    // line 66
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_c657e48e87d3d395df65e6e7d12aca67030b84ec3b6b5bd14f88859cee51757e = $this->env->getExtension("native_profiler");
        $__internal_c657e48e87d3d395df65e6e7d12aca67030b84ec3b6b5bd14f88859cee51757e->enter($__internal_c657e48e87d3d395df65e6e7d12aca67030b84ec3b6b5bd14f88859cee51757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 67
        echo "
    ";
        // line 68
        $context["url"] = "admin_order_list";
        // line 69
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_c657e48e87d3d395df65e6e7d12aca67030b84ec3b6b5bd14f88859cee51757e->leave($__internal_c657e48e87d3d395df65e6e7d12aca67030b84ec3b6b5bd14f88859cee51757e_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:Order:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  159 => 68,  156 => 67,  150 => 66,  139 => 60,  132 => 56,  126 => 53,  118 => 48,  114 => 47,  110 => 45,  108 => 44,  101 => 40,  95 => 39,  91 => 37,  85 => 36,  77 => 32,  75 => 22,  72 => 21,  66 => 20,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'order',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.order.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.order.single'|trans,*/
/*         'admin.order.plural'|trans*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.order.single'|trans },*/
/*             { name: 'admin.order.field.date'|trans },*/
/*             { name: 'admin.order.field.customer'|trans },*/
/*             { name: 'admin.order.field.status'|trans },*/
/*             { name: 'admin.order.field.total'|trans },*/
/*         ],*/
/*         class: 'order',*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_order_edit', { id: entity.id }) }}" data-test="order-{{ entity.id }}">*/
/*             {{ 'admin.order.field.id'|trans({ '%id%': entity.id }) }}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {% include 'AdminCartBundle:Order:date.html.twig' with { date: entity.createdAt } %}*/
/*     </td>*/
/*     <td>*/
/*         <a href="{{ url('admin_customer_edit', { id: entity.customer.id }) }}">*/
/*             {{ entity.customer }}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         <span class="label label-warning">*/
/*             {{ "common.order.states.#{entity.paymentStateLineStack.lastStateLine.name}"|trans }}*/
/*         </span>*/
/*         <span class="label label-info">*/
/*             {{ "common.order.states.#{entity.shippingStateLineStack.lastStateLine.name}"|trans }}*/
/*         </span>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.amount|print_money }}*/
/*     </td>*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_order_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
