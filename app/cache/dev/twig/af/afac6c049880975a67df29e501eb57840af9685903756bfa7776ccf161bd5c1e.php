<?php

/* StoreTemplateBundle:Pages:order-view.html.twig */
class __TwigTemplate_a371b86c14d0fe8e280abb7fb04ee0f554d71b4dadaa5358458dc82c654d163e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:order-view.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a69dd7365e7b527fa67af8b3559f81f6693bcba0125f09089e6f9be73504bb0 = $this->env->getExtension("native_profiler");
        $__internal_5a69dd7365e7b527fa67af8b3559f81f6693bcba0125f09089e6f9be73504bb0->enter($__internal_5a69dd7365e7b527fa67af8b3559f81f6693bcba0125f09089e6f9be73504bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:order-view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a69dd7365e7b527fa67af8b3559f81f6693bcba0125f09089e6f9be73504bb0->leave($__internal_5a69dd7365e7b527fa67af8b3559f81f6693bcba0125f09089e6f9be73504bb0_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_f3ed5d9d96a26cdfbbc09dc1f0b7764e0ef489cf25298ae591b587461c41da61 = $this->env->getExtension("native_profiler");
        $__internal_f3ed5d9d96a26cdfbbc09dc1f0b7764e0ef489cf25298ae591b587461c41da61->enter($__internal_f3ed5d9d96a26cdfbbc09dc1f0b7764e0ef489cf25298ae591b587461c41da61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_f3ed5d9d96a26cdfbbc09dc1f0b7764e0ef489cf25298ae591b587461c41da61->leave($__internal_f3ed5d9d96a26cdfbbc09dc1f0b7764e0ef489cf25298ae591b587461c41da61_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a62fcda73c0db9fc91110f04ecbded07afa87a9374ea06ef2c2e106d06f02d6 = $this->env->getExtension("native_profiler");
        $__internal_7a62fcda73c0db9fc91110f04ecbded07afa87a9374ea06ef2c2e106d06f02d6->enter($__internal_7a62fcda73c0db9fc91110f04ecbded07afa87a9374ea06ef2c2e106d06f02d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"white-panel\">
    ";
        // line 7
        if ((isset($context["thanks"]) ? $context["thanks"] : null)) {
            // line 8
            echo "        <div class=\"message message-ok\">
            <p><i class=\"fa fa-check\"></i> <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.view.congratulations"), "html", null, true);
            echo "</strong></p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.view.thanks"), "html", null, true);
            echo "</p>
        </div>

        ";
            // line 13
            echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.order_thanks"));
            echo "
    ";
        } else {
            // line 15
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.view.order"), "html", null, true);
            echo " #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
            echo "</h1>
    ";
        }
        // line 17
        echo "    <div class=\"cart-list\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "orderLines", array()));
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
            // line 19
            echo "            ";
            $this->loadTemplate("@StoreTemplate/Modules/_order-item.html.twig", "StoreTemplateBundle:Pages:order-view.html.twig", 19)->display(array_merge($context, array("line" =>             // line 20
$context["line"])));
            // line 22
            echo "        ";
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
        // line 23
        echo "    </div>
    <div class=\"coupon-list\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderCoupons"]) ? $context["orderCoupons"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderCoupon"]) {
            // line 26
            echo "            ";
            $this->loadTemplate("@StoreTemplate/Modules/_order-coupon-item.html.twig", "StoreTemplateBundle:Pages:order-view.html.twig", 26)->display(array_merge($context, array("orderCoupon" => $context["orderCoupon"])));
            // line 27
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderCoupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    <p class=\"cart-total\"><span>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.view.shipping"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "shippingAmount", array()))), "html", null, true);
        echo "</p>
    <p class=\"cart-total\"><span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.view.total"), "html", null, true);
        echo " </span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()))), "html", null, true);
        echo "</p>
    <div class=\"cart-actions\">
        <a class=\"button button-empty cart-actions-continue\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("store_homepage");
        echo "\"><i class=\"fa fa-arrow-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.view.continue_shopping"), "html", null, true);
        echo "</a>
    </div>
</div>
";
        
        $__internal_7a62fcda73c0db9fc91110f04ecbded07afa87a9374ea06ef2c2e106d06f02d6->leave($__internal_7a62fcda73c0db9fc91110f04ecbded07afa87a9374ea06ef2c2e106d06f02d6_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:order-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 32,  168 => 30,  162 => 29,  159 => 28,  145 => 27,  142 => 26,  125 => 25,  121 => 23,  107 => 22,  105 => 20,  103 => 19,  86 => 18,  83 => 17,  75 => 15,  70 => 13,  64 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/* <div class="white-panel">*/
/*     {% if thanks %}*/
/*         <div class="message message-ok">*/
/*             <p><i class="fa fa-check"></i> <strong>{{ 'template.store_template_bundle.order.view.congratulations'|trans }}</strong></p>*/
/*             <p>{{ 'template.store_template_bundle.order.view.thanks'|trans }}</p>*/
/*         </div>*/
/* */
/*         {{ elcodi_hook("store.order_thanks") }}*/
/*     {% else %}*/
/*         <h1>{{ 'template.store_template_bundle.order.view.order'|trans }} #{{ order.id }}</h1>*/
/*     {% endif %}*/
/*     <div class="cart-list">*/
/*         {% for line in order.orderLines %}*/
/*             {% include "@StoreTemplate/Modules/_order-item.html.twig" with {*/
/*                 "line": line*/
/*             } %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="coupon-list">*/
/*         {% for orderCoupon in orderCoupons %}*/
/*             {% include "@StoreTemplate/Modules/_order-coupon-item.html.twig" with {"orderCoupon": orderCoupon} %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     <p class="cart-total"><span>{{ 'template.store_template_bundle.order.view.shipping'|trans }}</span> {{ order.shippingAmount|print_convert_money() }}</p>*/
/*     <p class="cart-total"><span>{{ 'template.store_template_bundle.order.view.total'|trans }} </span>{{ order.amount|print_convert_money() }}</p>*/
/*     <div class="cart-actions">*/
/*         <a class="button button-empty cart-actions-continue" href="{{ url('store_homepage') }}"><i class="fa fa-arrow-left"></i> {{ 'template.store_template_bundle.order.view.continue_shopping'|trans }}</a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
