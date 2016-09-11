<?php

/* AdminCartBundle:Order:editComponent.html.twig */
class __TwigTemplate_8f81836d7db590b2a38a828c1247d5d23e18fb736ae3bcba5091870f4d3927ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminCartBundle:Order:editComponent.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/formComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_199e0f2c71e2efe15f79f3c27d0b9b3b05b755faaacec6b223ed79b51db4add5 = $this->env->getExtension("native_profiler");
        $__internal_199e0f2c71e2efe15f79f3c27d0b9b3b05b755faaacec6b223ed79b51db4add5->enter($__internal_199e0f2c71e2efe15f79f3c27d0b9b3b05b755faaacec6b223ed79b51db4add5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:Order:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "order");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199e0f2c71e2efe15f79f3c27d0b9b3b05b755faaacec6b223ed79b51db4add5->leave($__internal_199e0f2c71e2efe15f79f3c27d0b9b3b05b755faaacec6b223ed79b51db4add5_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_844d2393a44859dc3354582d9da7b5e5119e90ca9d9d29802891639ab4ae3cc8 = $this->env->getExtension("native_profiler");
        $__internal_844d2393a44859dc3354582d9da7b5e5119e90ca9d9d29802891639ab4ae3cc8->enter($__internal_844d2393a44859dc3354582d9da7b5e5119e90ca9d9d29802891639ab4ae3cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
<div class=\"box-background\">
    <p class=\"fl-r fz-s\"><i class=\"icon-calendar-o\"></i> ";
        // line 12
        $this->loadTemplate("@AdminCart/Order/date.html.twig", "AdminCartBundle:Order:editComponent.html.twig", 12)->display(array_merge($context, array("date" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "createdAt", array()))));
        echo "</p>
    <h3 class=\"fw-n\"><i class=\"icon-shopping-cart\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.title"), "html", null, true);
        echo "</h3>
    <table class=\"table\">
        <thead>
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.item"), "html", null, true);
        echo "</th>
                <th class=\"w-10 ta-r\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.units"), "html", null, true);
        echo "</th>
                <th class=\"w-15 ta-r\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.price"), "html", null, true);
        echo "</th>
                <th class=\"w-15 ta-r\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.field.total"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "orderLines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 25
            echo "                ";
            $context["purchasable"] = $this->getAttribute($context["line"], "purchasable", array());
            // line 26
            echo "                ";
            $context["purchasableName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
            // line 27
            echo "                <tr>
                    <td>
                        ";
            // line 29
            if (($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "purchasableType", array()) == "product")) {
                // line 30
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_edit", array("id" => $this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"fw-b\">";
                echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
                echo "</a>
                        ";
            } elseif (($this->getAttribute(            // line 31
(isset($context["purchasable"]) ? $context["purchasable"] : null), "purchasableType", array()) == "purchasable_pack")) {
                // line 32
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_purchasable_pack_edit", array("id" => $this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"fw-b\">";
                echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 34
                echo "                            <a href=\"#\" class=\"fw-b\">";
                echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
                echo "</a>
                        ";
            }
            // line 36
            echo "                        <p class=\"fz-s\">ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "id", array()), "html", null, true);
            echo "</p>
                    </td>
                    <td class=\"ta-r\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "quantity", array()), "html", null, true);
            echo "</td>
                    <td class=\"ta-r\">";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "resolvedPrice", array()))), "html", null, true);
            echo "</td>
                    <td class=\"ta-r\">";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["line"], "amount", array()))), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            <tr>
                <td colspan=\"3\" class=\"ta-r\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.subtotal"), "html", null, true);
        echo "</td>
                <td class=\"ta-r\">";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "purchasableAmount", array()))), "html", null, true);
        echo "</td>
            </tr>

            ";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "couponAmount", array()), "greatterThan", array(0 => 0), "method")) {
            // line 50
            echo "                <tr>
                    <td colspan=\"3\" class=\"ta-r\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.discount"), "html", null, true);
            echo "</td>
                    <td class=\"ta-r\">-";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "couponAmount", array()))), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        // line 55
        echo "
            <tr>
                <td colspan=\"3\" class=\"ta-r\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.details.shipping"), "html", null, true);
        echo "</td>
                <td class=\"ta-r\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "shippingAmount", array()))), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td colspan=\"3\" class=\"ta-r fw-b\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.field.total"), "html", null, true);
        echo "</td>
                <td class=\"ta-r fw-b\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()))), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>

";
        
        $__internal_844d2393a44859dc3354582d9da7b5e5119e90ca9d9d29802891639ab4ae3cc8->leave($__internal_844d2393a44859dc3354582d9da7b5e5119e90ca9d9d29802891639ab4ae3cc8_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:Order:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 62,  182 => 61,  176 => 58,  172 => 57,  168 => 55,  162 => 52,  158 => 51,  155 => 50,  153 => 49,  147 => 46,  143 => 45,  139 => 43,  130 => 40,  126 => 39,  122 => 38,  116 => 36,  110 => 34,  102 => 32,  100 => 31,  93 => 30,  91 => 29,  87 => 27,  84 => 26,  81 => 25,  77 => 24,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  51 => 13,  47 => 12,  43 => 10,  37 => 9,  30 => 1,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'order',*/
/* } %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* <div class="box-background">*/
/*     <p class="fl-r fz-s"><i class="icon-calendar-o"></i> {% include '@AdminCart/Order/date.html.twig' with { date: order.createdAt } %}</p>*/
/*     <h3 class="fw-n"><i class="icon-shopping-cart"></i> {{ 'admin.order.details.title'|trans }}</h3>*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ 'admin.order.details.item'|trans }}</th>*/
/*                 <th class="w-10 ta-r">{{ 'admin.order.details.units'|trans }}</th>*/
/*                 <th class="w-15 ta-r">{{ 'admin.order.details.price'|trans }}</th>*/
/*                 <th class="w-15 ta-r">{{ 'admin.order.field.total'|trans }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for line in order.orderLines %}*/
/*                 {% set purchasable = line.purchasable %}*/
/*                 {% set purchasableName = purchasable|purchasable_name %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {% if purchasable.purchasableType == 'product' %}*/
/*                             <a href="{{ url('admin_product_edit', { id: purchasable.id}) }}" class="fw-b">{{ purchasableName }}</a>*/
/*                         {% elseif purchasable.purchasableType == 'purchasable_pack' %}*/
/*                             <a href="{{ url('admin_purchasable_pack_edit', { id: purchasable.id}) }}" class="fw-b">{{ purchasableName }}</a>*/
/*                         {% else %}*/
/*                             <a href="#" class="fw-b">{{ purchasableName }}</a>*/
/*                         {% endif %}*/
/*                         <p class="fz-s">ID: {{ purchasable.id }}</p>*/
/*                     </td>*/
/*                     <td class="ta-r">{{ line.quantity }}</td>*/
/*                     <td class="ta-r">{{ purchasable.resolvedPrice|print_convert_money }}</td>*/
/*                     <td class="ta-r">{{ line.amount|print_convert_money }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/* */
/*             <tr>*/
/*                 <td colspan="3" class="ta-r">{{ 'admin.order.details.subtotal'|trans }}</td>*/
/*                 <td class="ta-r">{{ order.purchasableAmount|print_convert_money }}</td>*/
/*             </tr>*/
/* */
/*             {% if order.couponAmount.greatterThan(0) %}*/
/*                 <tr>*/
/*                     <td colspan="3" class="ta-r">{{ 'admin.order.details.discount'|trans }}</td>*/
/*                     <td class="ta-r">-{{ order.couponAmount|print_convert_money }}</td>*/
/*                 </tr>*/
/*             {% endif %}*/
/* */
/*             <tr>*/
/*                 <td colspan="3" class="ta-r">{{ 'admin.order.details.shipping'|trans }}</td>*/
/*                 <td class="ta-r">{{ order.shippingAmount|print_convert_money }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3" class="ta-r fw-b">{{ 'admin.order.field.total'|trans }}</td>*/
/*                 <td class="ta-r fw-b">{{ order.amount|print_convert_money }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* {% endblock content %}*/
/* */
