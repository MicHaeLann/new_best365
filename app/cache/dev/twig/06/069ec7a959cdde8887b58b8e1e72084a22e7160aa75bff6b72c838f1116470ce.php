<?php

/* StoreTemplateBundle:Modules:_coupon-item.html.twig */
class __TwigTemplate_537584accdfcf9e294b67e96bc12ddbf02bd442af23811b4dd55619ed18c6b47 extends Twig_Template
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
        $__internal_0c08139e5c3f7eaf9c0bef809d091e3773348b1c29d5c173099678d37c7803ed = $this->env->getExtension("native_profiler");
        $__internal_0c08139e5c3f7eaf9c0bef809d091e3773348b1c29d5c173099678d37c7803ed->enter($__internal_0c08139e5c3f7eaf9c0bef809d091e3773348b1c29d5c173099678d37c7803ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_coupon-item.html.twig"));

        // line 1
        echo "<dl class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "coupon-item")) : ("coupon-item")), "html", null, true);
        echo "\" data-test=\"coupon-item\">
    <dt class=\"coupon-item-code\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.coupon.item.coupon"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-code\"><strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "code", array()), "html", null, true);
        echo "</strong></dd>
    <dt class=\"coupon-item-name\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.coupon.item.description"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-name\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "name", array()), "html", null, true);
        echo "</dd>
    <dt class=\"coupon-item-units\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.coupon.item.units"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-units\">1</dd>
    ";
        // line 8
        if (($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "type", array()) == "2")) {
            // line 9
            echo "        ";
            $context["couponValue"] = ($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "discount", array()) . "%");
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["couponValue"] = ("-" . call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "absolutePrice", array()))));
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <dt class=\"coupon-item-value\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.coupon.item.value"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-value\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["couponValue"]) ? $context["couponValue"] : null), "html", null, true);
        echo "</dd>
    <dt class=\"coupon-item-total\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.coupon.item.total"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-total\">-";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "absolutePrice", array()))), "html", null, true);
        echo "</dd>
    <dt class=\"coupon-item-remove\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.coupon.item.remove"), "html", null, true);
        echo "</dt>
    <dd class=\"coupon-item-remove\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_coupon_remove", array("code" => $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "code", array()))), "html", null, true);
        echo "\" class=\"fa fa-trash-o button\"></a></dd>
</dl>
";
        
        $__internal_0c08139e5c3f7eaf9c0bef809d091e3773348b1c29d5c173099678d37c7803ed->leave($__internal_0c08139e5c3f7eaf9c0bef809d091e3773348b1c29d5c173099678d37c7803ed_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_coupon-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  48 => 8,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <dl class="{{ class|default('coupon-item') }}" data-test="coupon-item">*/
/*     <dt class="coupon-item-code">{{ 'template.store_template_bundle.coupon.item.coupon'|trans }}</dt>*/
/*     <dd class="coupon-item-code"><strong>{{ coupon.code }}</strong></dd>*/
/*     <dt class="coupon-item-name">{{ 'template.store_template_bundle.coupon.item.description'|trans }}</dt>*/
/*     <dd class="coupon-item-name">{{ coupon.name }}</dd>*/
/*     <dt class="coupon-item-units">{{ 'template.store_template_bundle.coupon.item.units'|trans }}</dt>*/
/*     <dd class="coupon-item-units">1</dd>*/
/*     {% if coupon.type == '2'%}*/
/*         {% set couponValue =  coupon.discount ~ '%' %}*/
/*     {% else %}*/
/*         {% set couponValue =  '-' ~ coupon.absolutePrice|print_convert_money() %}*/
/*     {% endif %}*/
/*     <dt class="coupon-item-value">{{ 'template.store_template_bundle.coupon.item.value'|trans }}</dt>*/
/*     <dd class="coupon-item-value">{{ couponValue }}</dd>*/
/*     <dt class="coupon-item-total">{{ 'template.store_template_bundle.coupon.item.total'|trans }}</dt>*/
/*     <dd class="coupon-item-total">-{{ coupon.absolutePrice|print_convert_money() }}</dd>*/
/*     <dt class="coupon-item-remove">{{ 'template.store_template_bundle.coupon.item.remove'|trans }}</dt>*/
/*     <dd class="coupon-item-remove"><a href="{{ url('store_coupon_remove', { code: coupon.code }) }}" class="fa fa-trash-o button"></a></dd>*/
/* </dl>*/
/* */
