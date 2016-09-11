<?php

/* StoreTemplateBundle:Pages:checkout-payment.html.twig */
class __TwigTemplate_4b3ea8d0959082cff421f988fdde7bddc2e757be54efb49f1452937ee7869432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_checkout.html.twig", "StoreTemplateBundle:Pages:checkout-payment.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content_checkout' => array($this, 'block_content_checkout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_checkout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6924b0f294a85295a9780c200495f21b11b998e8179765afc8243590721a390 = $this->env->getExtension("native_profiler");
        $__internal_a6924b0f294a85295a9780c200495f21b11b998e8179765afc8243590721a390->enter($__internal_a6924b0f294a85295a9780c200495f21b11b998e8179765afc8243590721a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:checkout-payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6924b0f294a85295a9780c200495f21b11b998e8179765afc8243590721a390->leave($__internal_a6924b0f294a85295a9780c200495f21b11b998e8179765afc8243590721a390_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_5b304697900d86c91bfa242d3b208983c97ec5834b561abbf775a4f7d0725129 = $this->env->getExtension("native_profiler");
        $__internal_5b304697900d86c91bfa242d3b208983c97ec5834b561abbf775a4f7d0725129->enter($__internal_5b304697900d86c91bfa242d3b208983c97ec5834b561abbf775a4f7d0725129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_5b304697900d86c91bfa242d3b208983c97ec5834b561abbf775a4f7d0725129->leave($__internal_5b304697900d86c91bfa242d3b208983c97ec5834b561abbf775a4f7d0725129_prof);

    }

    // line 5
    public function block_content_checkout($context, array $blocks = array())
    {
        $__internal_c2bb513707ce99475e6079f6f55bfe270cf6ba5f5b4079549e0e1f09fa9ee80f = $this->env->getExtension("native_profiler");
        $__internal_c2bb513707ce99475e6079f6f55bfe270cf6ba5f5b4079549e0e1f09fa9ee80f->enter($__internal_c2bb513707ce99475e6079f6f55bfe270cf6ba5f5b4079549e0e1f09fa9ee80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_checkout"));

        // line 6
        echo "<div class=\"checkout\">
<h1 class=\"checkout-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.payment.set_shipping_payment"), "html", null, true);
        echo "</h1>
<p class=\"checkout-actions checkout-actions-top\">
    <a class=\"button desktop\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("store_checkout_address");
        echo "\"> <i class=\"fa fa-arrow-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.back"), "html", null, true);
        echo "</a>
    ";
        // line 10
        $this->loadTemplate("@StoreTemplate/Modules/_checkout-progress.html.twig", "StoreTemplateBundle:Pages:checkout-payment.html.twig", 10)->display(array_merge($context, array("step" => "3")));
        // line 11
        echo "</p>

";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["shippingMethods"]) ? $context["shippingMethods"] : null)) > 0)) {
            // line 14
            echo "<div class=\"form form-checkout\">
    ";
            // line 15
            $context["actualShippingMethod"] = $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "shippingMethod", array());
            // line 16
            echo "    <div class=\"grid grid-pad\">
        <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.payment.shipping_carrier_method"), "html", null, true);
            echo "</h2>
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shippingMethods"]) ? $context["shippingMethods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
                // line 19
                echo "            ";
                if (($this->getAttribute($context["shippingMethod"], "id", array()) == (isset($context["actualShippingMethod"]) ? $context["actualShippingMethod"] : null))) {
                    // line 20
                    echo "                <div class=\"col-1-3\"><i class=\"fa fa-caret-right\"></i> <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shippingMethod"], "carrierName", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["shippingMethod"], "price", array()))), "html", null, true);
                    echo "</strong></div>
            ";
                } else {
                    // line 22
                    echo "                <div class=\"col-1-3\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_checkout_shipping_method_apply", array("shippingMethod" => $this->getAttribute(                    // line 23
$context["shippingMethod"], "id", array()))), "html", null, true);
                    // line 24
                    echo "\">
                        ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shippingMethod"], "carrierName", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["shippingMethod"], "price", array()))), "html", null, true);
                    echo "
                    </a></div>
            ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
</div>
";
        }
        // line 32
        echo "<div class=\"form-checkout\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paymentMethods"]) ? $context["paymentMethods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 34
            echo "        ";
            $context["paymentMethodName"] = $this->getAttribute($context["paymentMethod"], "name", array());
            // line 35
            echo "        ";
            if ($this->getAttribute($context["paymentMethod"], "url", array())) {
                // line 36
                echo "                <h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["paymentMethodName"]) ? $context["paymentMethodName"] : null)), "html", null, true);
                echo "</h2>
                <p><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["paymentMethod"], "url", array()), "html", null, true);
                echo "\" class=\"button button-secondary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.payment.continue"), "html", null, true);
                echo "</a></p>
                <hr />
        ";
            } else {
                // line 40
                echo "            <details class=\"test-payment-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["paymentMethod"], "id", array()), "html", null, true);
                echo " form form-";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["paymentMethodName"]) ? $context["paymentMethodName"] : null))), "html", null, true);
                echo "\">
                <summary>";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["paymentMethodName"]) ? $context["paymentMethodName"] : null)), "html", null, true);
                echo "</summary>
                <div class=\"payment-wrapper\">
                    ";
                // line 43
                echo $this->getAttribute($context["paymentMethod"], "script", array());
                echo "
                </div>
            </details>
        ";
            }
            // line 47
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>

<p class=\"checkout-actions checkout-actions-bottom\">
    <a class=\"button\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("store_checkout_address");
        echo "\"> <i class=\"fa fa-arrow-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.back"), "html", null, true);
        echo "</a>
</p>
</div>
";
        
        $__internal_c2bb513707ce99475e6079f6f55bfe270cf6ba5f5b4079549e0e1f09fa9ee80f->leave($__internal_c2bb513707ce99475e6079f6f55bfe270cf6ba5f5b4079549e0e1f09fa9ee80f_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:checkout-payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 52,  179 => 49,  172 => 47,  165 => 43,  160 => 41,  153 => 40,  145 => 37,  140 => 36,  137 => 35,  134 => 34,  130 => 33,  127 => 32,  122 => 29,  116 => 28,  108 => 25,  105 => 24,  103 => 23,  101 => 22,  93 => 20,  90 => 19,  86 => 18,  82 => 17,  79 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 11,  66 => 10,  60 => 9,  55 => 7,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_checkout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content_checkout %}*/
/* <div class="checkout">*/
/* <h1 class="checkout-title">{{ 'template.store_template_bundle.checkout.payment.set_shipping_payment'|trans }}</h1>*/
/* <p class="checkout-actions checkout-actions-top">*/
/*     <a class="button desktop" href="{{ url('store_checkout_address') }}"> <i class="fa fa-arrow-left"></i> {{ 'template.store_template_bundle.checkout.back'|trans }}</a>*/
/*     {% include "@StoreTemplate/Modules/_checkout-progress.html.twig" with {"step": "3"} %}*/
/* </p>*/
/* */
/* {% if shippingMethods|length > 0 %}*/
/* <div class="form form-checkout">*/
/*     {% set actualShippingMethod = cart.shippingMethod %}*/
/*     <div class="grid grid-pad">*/
/*         <h2>{{ 'template.store_template_bundle.checkout.payment.shipping_carrier_method'|trans }}</h2>*/
/*         {% for shippingMethod in shippingMethods %}*/
/*             {% if shippingMethod.id == actualShippingMethod %}*/
/*                 <div class="col-1-3"><i class="fa fa-caret-right"></i> <strong>{{ shippingMethod.carrierName }} - {{ shippingMethod.price|print_convert_money }}</strong></div>*/
/*             {% else %}*/
/*                 <div class="col-1-3"><a href="{{ url("store_checkout_shipping_method_apply", {*/
/*                         'shippingMethod': shippingMethod.id*/
/*                     }) }}">*/
/*                         {{ shippingMethod.carrierName }} - {{ shippingMethod.price|print_convert_money }}*/
/*                     </a></div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* <div class="form-checkout">*/
/*     {% for paymentMethod in paymentMethods %}*/
/*         {% set paymentMethodName = paymentMethod.name %}*/
/*         {% if paymentMethod.url %}*/
/*                 <h2>{{ paymentMethodName|trans }}</h2>*/
/*                 <p><a href="{{ paymentMethod.url }}" class="button button-secondary">{{ 'template.store_template_bundle.checkout.payment.continue'|trans }}</a></p>*/
/*                 <hr />*/
/*         {% else %}*/
/*             <details class="test-payment-{{ paymentMethod.id }} form form-{{ paymentMethodName|trans|lower }}">*/
/*                 <summary>{{ paymentMethodName|trans }}</summary>*/
/*                 <div class="payment-wrapper">*/
/*                     {{ paymentMethod.script|raw }}*/
/*                 </div>*/
/*             </details>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* </div>*/
/* */
/* <p class="checkout-actions checkout-actions-bottom">*/
/*     <a class="button" href="{{ url('store_checkout_address') }}"> <i class="fa fa-arrow-left"></i> {{ 'template.store_template_bundle.checkout.back'|trans }}</a>*/
/* </p>*/
/* </div>*/
/* {% endblock content_checkout %}*/
/* */
