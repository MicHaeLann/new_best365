<?php

/* StoreTemplateBundle:Layout:_checkout.html.twig */
class __TwigTemplate_a43e0f8de6b1c51cf8a43c8c23e87c3ac3c3679b9b5d65924c6b8f1923dd56e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Layout:_checkout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'content_checkout' => array($this, 'block_content_checkout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20bd8f332c2ff36edc85b6f15e4c0c136bb420b5286d6ce7822dacbe66d94ef4 = $this->env->getExtension("native_profiler");
        $__internal_20bd8f332c2ff36edc85b6f15e4c0c136bb420b5286d6ce7822dacbe66d94ef4->enter($__internal_20bd8f332c2ff36edc85b6f15e4c0c136bb420b5286d6ce7822dacbe66d94ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Layout:_checkout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bd8f332c2ff36edc85b6f15e4c0c136bb420b5286d6ce7822dacbe66d94ef4->leave($__internal_20bd8f332c2ff36edc85b6f15e4c0c136bb420b5286d6ce7822dacbe66d94ef4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fb820d4e7523a750db81701a65435fb4651517e513f52f453ed3924f22e451f = $this->env->getExtension("native_profiler");
        $__internal_1fb820d4e7523a750db81701a65435fb4651517e513f52f453ed3924f22e451f->enter($__internal_1fb820d4e7523a750db81701a65435fb4651517e513f52f453ed3924f22e451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"grid\">
        <div class=\"col-2-3\">
            ";
        // line 6
        $this->displayBlock('content_checkout', $context, $blocks);
        // line 8
        echo "        </div>
        <div class=\"col-1-3\">
            <div class=\"white-panel\">
                <div class=\"cart-preview\">
                    <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.layout.your_cart"), "html", null, true);
        echo "</h2>
                    <div class=\"cart-list\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartLines", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 15
            echo "                            ";
            $this->loadTemplate("@StoreTemplate/Modules/_order-item.html.twig", "StoreTemplateBundle:Layout:_checkout.html.twig", 15)->display(array_merge($context, array("line" => $context["line"], "class" => "cart-item-preview")));
            // line 16
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </div>
                    <div class=\"coupon-list\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartCoupons"]) ? $context["cartCoupons"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cartCoupon"]) {
            // line 20
            echo "                            ";
            $this->loadTemplate("@StoreTemplate/Modules/_coupon-item.html.twig", "StoreTemplateBundle:Layout:_checkout.html.twig", 20)->display(array_merge($context, array("coupon" => $this->getAttribute($context["cartCoupon"], "coupon", array()), "class" => "coupon-item-preview")));
            // line 21
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartCoupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </div>
                    <div class=\"shipping-list\">
                        ";
        // line 24
        $this->loadTemplate("@StoreTemplate/Modules/_shipping-item.html.twig", "StoreTemplateBundle:Layout:_checkout.html.twig", 24)->display(array_merge($context, array("shippingRange" => $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "shippingRange", array()), "shippingAmount" => $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "shippingAmount", array()))));
        // line 25
        echo "                    </div>
                    <p class=\"cart-total\"><span>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.layout.total"), "html", null, true);
        echo " </span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "amount", array()))), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_1fb820d4e7523a750db81701a65435fb4651517e513f52f453ed3924f22e451f->leave($__internal_1fb820d4e7523a750db81701a65435fb4651517e513f52f453ed3924f22e451f_prof);

    }

    // line 6
    public function block_content_checkout($context, array $blocks = array())
    {
        $__internal_5be73bfefc0e514933a72b70fd679c1eefa494fd34ebac1dc0d2136f28424ea8 = $this->env->getExtension("native_profiler");
        $__internal_5be73bfefc0e514933a72b70fd679c1eefa494fd34ebac1dc0d2136f28424ea8->enter($__internal_5be73bfefc0e514933a72b70fd679c1eefa494fd34ebac1dc0d2136f28424ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_checkout"));

        // line 7
        echo "            ";
        
        $__internal_5be73bfefc0e514933a72b70fd679c1eefa494fd34ebac1dc0d2136f28424ea8->leave($__internal_5be73bfefc0e514933a72b70fd679c1eefa494fd34ebac1dc0d2136f28424ea8_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Layout:_checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 7,  155 => 6,  139 => 26,  136 => 25,  134 => 24,  130 => 22,  116 => 21,  113 => 20,  96 => 19,  92 => 17,  78 => 16,  75 => 15,  58 => 14,  53 => 12,  47 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="grid">*/
/*         <div class="col-2-3">*/
/*             {% block content_checkout %}*/
/*             {% endblock content_checkout %}*/
/*         </div>*/
/*         <div class="col-1-3">*/
/*             <div class="white-panel">*/
/*                 <div class="cart-preview">*/
/*                     <h2>{{ 'template.store_template_bundle.checkout.layout.your_cart'|trans }}</h2>*/
/*                     <div class="cart-list">*/
/*                         {% for line in cart.cartLines %}*/
/*                             {% include "@StoreTemplate/Modules/_order-item.html.twig" with {"line": line, "class": "cart-item-preview"} %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="coupon-list">*/
/*                         {% for cartCoupon in cartCoupons %}*/
/*                             {% include "@StoreTemplate/Modules/_coupon-item.html.twig" with { "coupon": cartCoupon.coupon, "class": "coupon-item-preview" } %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="shipping-list">*/
/*                         {% include "@StoreTemplate/Modules/_shipping-item.html.twig" with { "shippingRange": cart.shippingRange,"shippingAmount": cart.shippingAmount } %}*/
/*                     </div>*/
/*                     <p class="cart-total"><span>{{ 'template.store_template_bundle.checkout.layout.total'|trans }} </span>{{ cart.amount|print_convert_money() }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
