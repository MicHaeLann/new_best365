<?php

/* StoreTemplateBundle:Modules:_order-coupon-item.html.twig */
class __TwigTemplate_4ee83ab86b60ae9c6634c8f37abb8543743ee8b5cf2f17e235642643a972e257 extends Twig_Template
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
        $__internal_63ab379dbb415585dd5e4d85adae7ebb4d439ae6923385219e977ca1f8ddef1b = $this->env->getExtension("native_profiler");
        $__internal_63ab379dbb415585dd5e4d85adae7ebb4d439ae6923385219e977ca1f8ddef1b->enter($__internal_63ab379dbb415585dd5e4d85adae7ebb4d439ae6923385219e977ca1f8ddef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_order-coupon-item.html.twig"));

        // line 1
        echo "<dl class=\"coupon-item\">
    <dt class=\"coupon-item-code\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.coupon.coupon"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-code\"><strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderCoupon"]) ? $context["orderCoupon"] : null), "code", array()), "html", null, true);
        echo "</strong></dd>
    <dt class=\"coupon-item-name\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.coupon.description"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-name\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderCoupon"]) ? $context["orderCoupon"] : null), "name", array()), "html", null, true);
        echo "</dd>
    <dt class=\"coupon-item-units\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.coupon.units"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-units\">1</dd>
    ";
        // line 8
        if (($this->getAttribute((isset($context["orderCoupon"]) ? $context["orderCoupon"] : null), "type", array()) == "1")) {
            // line 9
            echo "        ";
            $context["couponValue"] = ($this->getAttribute((isset($context["orderCoupon"]) ? $context["orderCoupon"] : null), "discount", array()) . "%");
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["couponValue"] = ("-" . call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["orderCoupon"]) ? $context["orderCoupon"] : null), "amount", array()))));
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <dt class=\"coupon-item-value\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.coupon.values"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-value\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["couponValue"]) ? $context["couponValue"] : null), "html", null, true);
        echo "</dd>
    <dt class=\"coupon-item-total\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.coupon.total"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-total\">-";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["orderCoupon"]) ? $context["orderCoupon"] : null), "amount", array()))), "html", null, true);
        echo "</dd>
</dl>
";
        
        $__internal_63ab379dbb415585dd5e4d85adae7ebb4d439ae6923385219e977ca1f8ddef1b->leave($__internal_63ab379dbb415585dd5e4d85adae7ebb4d439ae6923385219e977ca1f8ddef1b_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_order-coupon-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  69 => 15,  65 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <dl class="coupon-item">*/
/*     <dt class="coupon-item-code">{{ 'template.store_template_bundle.order.coupon.coupon'|trans }}</dt>*/
/*     <dd class="coupon-item-code"><strong>{{ orderCoupon.code }}</strong></dd>*/
/*     <dt class="coupon-item-name">{{ 'template.store_template_bundle.order.coupon.description'|trans }}</dt>*/
/*     <dd class="coupon-item-name">{{ orderCoupon.name }}</dd>*/
/*     <dt class="coupon-item-units">{{ 'template.store_template_bundle.order.coupon.units'|trans }}</dt>*/
/*     <dd class="coupon-item-units">1</dd>*/
/*     {% if orderCoupon.type == '1'%}*/
/*         {% set couponValue =  orderCoupon.discount ~ '%' %}*/
/*     {% else %}*/
/*         {% set couponValue =  '-' ~ orderCoupon.amount|print_convert_money() %}*/
/*     {% endif %}*/
/*     <dt class="coupon-item-value">{{ 'template.store_template_bundle.order.coupon.values'|trans }}</dt>*/
/*     <dd class="coupon-item-value">{{ couponValue }}</dd>*/
/*     <dt class="coupon-item-total">{{ 'template.store_template_bundle.order.coupon.total'|trans }}</dt>*/
/*     <dd class="coupon-item-total">-{{ orderCoupon.amount|print_convert_money() }}</dd>*/
/* </dl>*/
/* */
