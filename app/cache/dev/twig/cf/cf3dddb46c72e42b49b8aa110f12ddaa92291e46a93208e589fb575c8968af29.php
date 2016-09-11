<?php

/* StoreTemplateBundle:Modules:_shipping-item.html.twig */
class __TwigTemplate_c5609b11bf319930f8da0d6592c602b53ac4950d9db511a1b8cccd500f78c4c0 extends Twig_Template
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
        $__internal_df888b901e862ca005c0505326a060dac6066d8558dfbad9d9e65bd0abda5004 = $this->env->getExtension("native_profiler");
        $__internal_df888b901e862ca005c0505326a060dac6066d8558dfbad9d9e65bd0abda5004->enter($__internal_df888b901e862ca005c0505326a060dac6066d8558dfbad9d9e65bd0abda5004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_shipping-item.html.twig"));

        // line 1
        $context["shippingMethod"] = call_user_func_array($this->env->getFunction('elcodi_shipping_method')->getCallable(), array((isset($context["cart"]) ? $context["cart"] : null), $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "shippingMethod", array())));
        // line 2
        if ((null === (isset($context["shippingMethod"]) ? $context["shippingMethod"] : null))) {
            // line 3
            echo "    ";
            if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 4
                echo "        <p class=\"message message-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.shipping.costs_will_be_calculated_after_login"), "html", null, true);
                echo "</p>
    ";
            } else {
                // line 6
                echo "        ";
                $context["shippingMethod"] = call_user_func_array($this->env->getFunction('elcodi_shipping_method')->getCallable(), array((isset($context["cart"]) ? $context["cart"] : null), $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cheapestShippingMethod", array())));
                // line 7
                echo "        ";
                if ( !(null === (isset($context["shippingMethod"]) ? $context["shippingMethod"] : null))) {
                    // line 8
                    echo "            <p class=\"cart-shipping\"><span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.shipping.carrier"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shippingMethod"]) ? $context["shippingMethod"] : null), "carrierName", array()), "html", null, true);
                    echo ") ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.shipping.from"), "html", null, true);
                    echo " </span> ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["shippingMethod"]) ? $context["shippingMethod"] : null), "price", array()))), "html", null, true);
                    echo "</p>
        ";
                } elseif ((null === $this->getAttribute(                // line 9
(isset($context["cart"]) ? $context["cart"] : null), "deliveryAddress", array()))) {
                    // line 10
                    echo "            <p class=\"message message-info\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.shipping.costs_will_be_calculated_after_address"), "html", null, true);
                    echo "</p>
        ";
                } else {
                    // line 12
                    echo "            <p class=\"message message-ko\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.shipping.no_shipping_matching"), "html", null, true);
                    echo "</p>
        ";
                }
                // line 14
                echo "    ";
            }
        } else {
            // line 16
            echo "    <p class=\"cart-shipping\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.shipping.carrier"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shippingMethod"]) ? $context["shippingMethod"] : null), "carrierName", array()), "html", null, true);
            echo ")</span> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["shippingMethod"]) ? $context["shippingMethod"] : null), "price", array()))), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_df888b901e862ca005c0505326a060dac6066d8558dfbad9d9e65bd0abda5004->leave($__internal_df888b901e862ca005c0505326a060dac6066d8558dfbad9d9e65bd0abda5004_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_shipping-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  66 => 14,  60 => 12,  54 => 10,  52 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set shippingMethod = elcodi_shipping_method(cart, cart.shippingMethod) %}*/
/* {% if shippingMethod is null %}*/
/*     {% if app.user is null %}*/
/*         <p class="message message-info">{{ "template.store_template_bundle.shipping.costs_will_be_calculated_after_login"|trans }}</p>*/
/*     {% else %}*/
/*         {% set shippingMethod = elcodi_shipping_method(cart, cart.cheapestShippingMethod) %}*/
/*         {% if shippingMethod is not null %}*/
/*             <p class="cart-shipping"><span>{{ 'template.store_template_bundle.shipping.carrier'|trans }} ({{ shippingMethod.carrierName }}) {{ "template.store_template_bundle.shipping.from"|trans }} </span> {{ shippingMethod.price|print_convert_money() }}</p>*/
/*         {% elseif cart.deliveryAddress is null  %}*/
/*             <p class="message message-info">{{ "template.store_template_bundle.shipping.costs_will_be_calculated_after_address"|trans }}</p>*/
/*         {% else %}*/
/*             <p class="message message-ko">{{ "template.store_template_bundle.shipping.no_shipping_matching"|trans }}</p>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     <p class="cart-shipping"><span>{{ 'template.store_template_bundle.shipping.carrier'|trans }} ({{ shippingMethod.carrierName }})</span> {{ shippingMethod.price|print_convert_money() }}</p>*/
/* {% endif %}*/
/* */
