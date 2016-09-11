<?php

/* StoreTemplateBundle:Pages:cart-view.html.twig */
class __TwigTemplate_fc1a4d1e5064995003b30840915c9b243315c62fae2d3d3777e2d40e5e6f0b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:cart-view.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
            'prefooter' => array($this, 'block_prefooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e5171d60b31eddb14469105c8e70d09539cb1ab1ea13ef696d77a0203bce387 = $this->env->getExtension("native_profiler");
        $__internal_8e5171d60b31eddb14469105c8e70d09539cb1ab1ea13ef696d77a0203bce387->enter($__internal_8e5171d60b31eddb14469105c8e70d09539cb1ab1ea13ef696d77a0203bce387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:cart-view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5171d60b31eddb14469105c8e70d09539cb1ab1ea13ef696d77a0203bce387->leave($__internal_8e5171d60b31eddb14469105c8e70d09539cb1ab1ea13ef696d77a0203bce387_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_a2eb2a47a0917de75fc144957a1b038b11a6af01831e2fdc1b8ba643a61184f6 = $this->env->getExtension("native_profiler");
        $__internal_a2eb2a47a0917de75fc144957a1b038b11a6af01831e2fdc1b8ba643a61184f6->enter($__internal_a2eb2a47a0917de75fc144957a1b038b11a6af01831e2fdc1b8ba643a61184f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_a2eb2a47a0917de75fc144957a1b038b11a6af01831e2fdc1b8ba643a61184f6->leave($__internal_a2eb2a47a0917de75fc144957a1b038b11a6af01831e2fdc1b8ba643a61184f6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_72e699cc2eb102753d97fce3019fa9d3a8431e163d809fb10def5b4acda086fd = $this->env->getExtension("native_profiler");
        $__internal_72e699cc2eb102753d97fce3019fa9d3a8431e163d809fb10def5b4acda086fd->enter($__internal_72e699cc2eb102753d97fce3019fa9d3a8431e163d809fb10def5b4acda086fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"checkout\">
    ";
        // line 7
        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalItemNumber", array()) > 0)) {
            // line 8
            echo "            <h1 class=\"checkout-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.title"), "html", null, true);
            echo "</h1>
            <p class=\"checkout-actions checkout-actions-top\">
                ";
            // line 10
            $this->loadTemplate("@StoreTemplate/Modules/_checkout-progress.html.twig", "StoreTemplateBundle:Pages:cart-view.html.twig", 10)->display(array_merge($context, array("step" => "1")));
            // line 11
            echo "                <a class=\"button button-secondary desktop\" href=\"";
            echo $this->env->getExtension('routing')->getUrl("store_checkout_address");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.checkout"), "html", null, true);
            echo " &nbsp;<i class=\"fa fa-arrow-right\"></i> </a>
            </p>
        ";
            // line 13
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
            echo "
            <div class=\"cart-list\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cartLines", array()));
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
                // line 16
                echo "                    ";
                $this->loadTemplate("@StoreTemplate/Modules/_cart-item.html.twig", "StoreTemplateBundle:Pages:cart-view.html.twig", 16)->display(array_merge($context, array("line" => $context["line"])));
                // line 17
                echo "                ";
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
            // line 18
            echo "            </div>
            <div class=\"coupon-list\">
                ";
            // line 20
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
                // line 21
                echo "                    ";
                $this->loadTemplate("@StoreTemplate/Modules/_coupon-item.html.twig", "StoreTemplateBundle:Pages:cart-view.html.twig", 21)->display(array_merge($context, array("coupon" => $this->getAttribute($context["cartCoupon"], "coupon", array()))));
                // line 22
                echo "                ";
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
            // line 23
            echo "            </div>
            <div class=\"shipping-list\">
                ";
            // line 25
            $this->loadTemplate("@StoreTemplate/Modules/_shipping-item.html.twig", "StoreTemplateBundle:Pages:cart-view.html.twig", 25)->display(array_merge($context, array("shippingRange" => $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "shippingRange", array()), "shippingAmount" => $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "shippingAmount", array()))));
            // line 26
            echo "            </div>
            <p class=\"cart-total\"><span>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.total"), "html", null, true);
            echo " </span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "amount", array()))), "html", null, true);
            echo "</p>

            <div class=\"cart-actions\">
                <a class=\"button button-secondary\" href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getUrl("store_checkout_address");
            echo "\" data-test=\"checkout-button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.checkout"), "html", null, true);
            echo " &nbsp;<i class=\"fa fa-arrow-right\"></i> </a>
                ";
            // line 31
            echo             // line 32
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "update", array()), 'widget', array("label" => "template.store_template_bundle.cart.view.update_basket", "attr" => array("class" => "button button-empty fa fa-refresh")));
            // line 38
            echo "
                <a class=\"button button-empty\" href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getUrl("store_cart_empty");
            echo "\" data-test=\"do-empty-cart\"><i class=\"fa fa-trash-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.empty_basket"), "html", null, true);
            echo "</a>
                <a class=\"button button-empty cart-actions-continue\" href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getUrl("store_homepage");
            echo "\"><i class=\"fa fa-arrow-left\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.continue_shopping"), "html", null, true);
            echo "</a>
            </div>
        ";
            // line 42
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "

        ";
            // line 44
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_coupon_view"));
            echo "

        <!-- Related products -->

    ";
        } else {
            // line 49
            echo "        <div class=\"empty-page\" data-test=\"empty-cart\">
            <i class=\"fa fa-shopping-cart fa-3x\"></i>
            <h2 class=\"product-title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.your_cart_is_empty"), "html", null, true);
            echo "</h2>
            <a class=\"button button-secondary\" href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getUrl("store_homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.view.continue_shopping"), "html", null, true);
            echo " <i class=\"fa fa-arrow-right\"></i></a>
        </div>
    ";
        }
        // line 55
        echo "    </div>
";
        
        $__internal_72e699cc2eb102753d97fce3019fa9d3a8431e163d809fb10def5b4acda086fd->leave($__internal_72e699cc2eb102753d97fce3019fa9d3a8431e163d809fb10def5b4acda086fd_prof);

    }

    // line 58
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_0da5b1a9c8ef58bdbb1761da5beddccd1c6b3c07feafc259cbe3823348e6028b = $this->env->getExtension("native_profiler");
        $__internal_0da5b1a9c8ef58bdbb1761da5beddccd1c6b3c07feafc259cbe3823348e6028b->enter($__internal_0da5b1a9c8ef58bdbb1761da5beddccd1c6b3c07feafc259cbe3823348e6028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 59
        echo "    ";
        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalItemNumber", array()) > 0)) {
            // line 60
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_cart_related"));
            echo "
    ";
        }
        
        $__internal_0da5b1a9c8ef58bdbb1761da5beddccd1c6b3c07feafc259cbe3823348e6028b->leave($__internal_0da5b1a9c8ef58bdbb1761da5beddccd1c6b3c07feafc259cbe3823348e6028b_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:cart-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 60,  236 => 59,  230 => 58,  222 => 55,  214 => 52,  210 => 51,  206 => 49,  198 => 44,  193 => 42,  186 => 40,  180 => 39,  177 => 38,  175 => 32,  174 => 31,  168 => 30,  160 => 27,  157 => 26,  155 => 25,  151 => 23,  137 => 22,  134 => 21,  117 => 20,  113 => 18,  99 => 17,  96 => 16,  79 => 15,  74 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/*     <div class="checkout">*/
/*     {% if cart.totalItemNumber > 0 %}*/
/*             <h1 class="checkout-title">{{ 'template.store_template_bundle.cart.view.title'|trans }}</h1>*/
/*             <p class="checkout-actions checkout-actions-top">*/
/*                 {% include "@StoreTemplate/Modules/_checkout-progress.html.twig" with {"step": "1"} %}*/
/*                 <a class="button button-secondary desktop" href="{{ url('store_checkout_address') }}">{{ 'template.store_template_bundle.cart.view.checkout'|trans }} &nbsp;<i class="fa fa-arrow-right"></i> </a>*/
/*             </p>*/
/*         {{ form_start(form) }}*/
/*             <div class="cart-list">*/
/*                 {% for line in form.cartLines %}*/
/*                     {% include "@StoreTemplate/Modules/_cart-item.html.twig" with { "line": line } %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="coupon-list">*/
/*                 {% for cartCoupon in cartCoupons %}*/
/*                     {% include "@StoreTemplate/Modules/_coupon-item.html.twig" with { "coupon": cartCoupon.coupon } %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="shipping-list">*/
/*                 {% include "@StoreTemplate/Modules/_shipping-item.html.twig" with { "shippingRange": cart.shippingRange, "shippingAmount": cart.shippingAmount } %}*/
/*             </div>*/
/*             <p class="cart-total"><span>{{ 'template.store_template_bundle.cart.view.total'|trans }} </span>{{ cart.amount|print_convert_money() }}</p>*/
/* */
/*             <div class="cart-actions">*/
/*                 <a class="button button-secondary" href="{{ url('store_checkout_address') }}" data-test="checkout-button">{{ 'template.store_template_bundle.cart.view.checkout'|trans }} &nbsp;<i class="fa fa-arrow-right"></i> </a>*/
/*                 {{*/
/*                     form_widget(form.update, {*/
/*                         label: 'template.store_template_bundle.cart.view.update_basket',*/
/*                         attr: {*/
/*                             class: 'button button-empty fa fa-refresh'*/
/*                         }*/
/*                     })*/
/*                 }}*/
/*                 <a class="button button-empty" href="{{ url('store_cart_empty') }}" data-test="do-empty-cart"><i class="fa fa-trash-o"></i> {{ 'template.store_template_bundle.cart.view.empty_basket'|trans }}</a>*/
/*                 <a class="button button-empty cart-actions-continue" href="{{ url('store_homepage') }}"><i class="fa fa-arrow-left"></i> {{ 'template.store_template_bundle.cart.view.continue_shopping'|trans }}</a>*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/* */
/*         {{ render(url('store_coupon_view')) }}*/
/* */
/*         <!-- Related products -->*/
/* */
/*     {% else %}*/
/*         <div class="empty-page" data-test="empty-cart">*/
/*             <i class="fa fa-shopping-cart fa-3x"></i>*/
/*             <h2 class="product-title">{{ "template.store_template_bundle.cart.view.your_cart_is_empty"|trans}}</h2>*/
/*             <a class="button button-secondary" href="{{ url('store_homepage') }}">{{ 'template.store_template_bundle.cart.view.continue_shopping'|trans }} <i class="fa fa-arrow-right"></i></a>*/
/*         </div>*/
/*     {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block prefooter %}*/
/*     {% if cart.totalItemNumber > 0 %}*/
/*         {{ render(url('store_cart_related')) }}*/
/*     {% endif %}*/
/* {% endblock prefooter %}*/
/* */
