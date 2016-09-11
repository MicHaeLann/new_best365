<?php

/* StoreTemplateBundle:Pages:order-list.html.twig */
class __TwigTemplate_c9ba1cc18f77b91a69b465f860af15240b920c1c1e34421806f4981d1bb4410a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:order-list.html.twig", 1);
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
        $__internal_5e149da31ffbf58b90ba449d1e60565200ae7c0350dd9a905ef292ba47d7b039 = $this->env->getExtension("native_profiler");
        $__internal_5e149da31ffbf58b90ba449d1e60565200ae7c0350dd9a905ef292ba47d7b039->enter($__internal_5e149da31ffbf58b90ba449d1e60565200ae7c0350dd9a905ef292ba47d7b039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:order-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e149da31ffbf58b90ba449d1e60565200ae7c0350dd9a905ef292ba47d7b039->leave($__internal_5e149da31ffbf58b90ba449d1e60565200ae7c0350dd9a905ef292ba47d7b039_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_a7a6286bac60a28d422196347e4b782ab07bd10c589b2d7d77239f4c5330075f = $this->env->getExtension("native_profiler");
        $__internal_a7a6286bac60a28d422196347e4b782ab07bd10c589b2d7d77239f4c5330075f->enter($__internal_a7a6286bac60a28d422196347e4b782ab07bd10c589b2d7d77239f4c5330075f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_a7a6286bac60a28d422196347e4b782ab07bd10c589b2d7d77239f4c5330075f->leave($__internal_a7a6286bac60a28d422196347e4b782ab07bd10c589b2d7d77239f4c5330075f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0aab7244937060fe742ad87a8a68e80428b603c444b4682ba47814de39c141c = $this->env->getExtension("native_profiler");
        $__internal_b0aab7244937060fe742ad87a8a68e80428b603c444b4682ba47814de39c141c->enter($__internal_b0aab7244937060fe742ad87a8a68e80428b603c444b4682ba47814de39c141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"white-panel\">
    <div class=\"order-list\">
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.orders"), "html", null, true);
        echo "</h1>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 10
            echo "        <dl class=\"order-item\">
            <dt class=\"order-item-image\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.image"), "html", null, true);
            echo "
            </dt>
            <dd class=\"order-item-image\">
                ";
            // line 15
            $context["purchasable"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["order"], "orderLines", array()), "first", array()), "purchasable", array());
            // line 16
            echo "                ";
            $context["purchasableName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
            // line 17
            echo "                ";
            $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
            // line 18
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 80, "height" => 80, "type" => 5))) : ("//placehold.it/80x80")), "html", null, true);
            // line 22
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
            echo "\" class=\"product-thumbnail\" />
            </dd>
            <dt class=\"order-item-id\">
                ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.number_of_order"), "html", null, true);
            echo "
            </dt>
            <dd class=\"order-item-id\">
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_order_view", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\" class=\"order-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.order_number"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</a>
            </dd>
            <dt class=\"order-item-payment-status\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.payment_state"), "html", null, true);
            echo "</dt>
            <dd class=\"order-item-payment-status\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("common.order.states." . $this->getAttribute($this->getAttribute($this->getAttribute($context["order"], "paymentStateLineStack", array()), "lastStateLine", array()), "name", array()))), "html", null, true);
            echo "</dd>
            <dt class=\"order-item-shipping-status\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.shipping_state"), "html", null, true);
            echo "</dt>
            <dd class=\"order-item-shipping-status\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("common.order.states." . $this->getAttribute($this->getAttribute($this->getAttribute($context["order"], "shippingStateLineStack", array()), "lastStateLine", array()), "name", array()))), "html", null, true);
            echo "</dd>
            <dt class=\"order-item-date\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.date"), "html", null, true);
            echo "</dt>
            <dd class=\"order-item-date\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdAt", array()), "d.m.Y"), "html", null, true);
            echo "</dd>
            <dt class=\"order-item-total\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.total"), "html", null, true);
            echo "</dt>
            <dd class=\"order-item-total\">";
            // line 37
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["order"], "amount", array()))), "html", null, true);
            echo "</dd>
        </dl>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "            <div class=\"empty-page\">
                <i class=\"fa fa-shopping-cart fa-3x\"></i>
                <h2 class=\"product-title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.list.no_orders"), "html", null, true);
            echo "</h2>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
</div>
";
        
        $__internal_b0aab7244937060fe742ad87a8a68e80428b603c444b4682ba47814de39c141c->leave($__internal_b0aab7244937060fe742ad87a8a68e80428b603c444b4682ba47814de39c141c_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:order-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  147 => 42,  143 => 40,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  99 => 28,  93 => 25,  86 => 22,  83 => 18,  80 => 17,  77 => 16,  75 => 15,  69 => 12,  65 => 10,  60 => 9,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/* <div class="white-panel">*/
/*     <div class="order-list">*/
/*         <h1>{{ 'template.store_template_bundle.order.list.orders'|trans }}</h1>*/
/*         {% for order in orders %}*/
/*         <dl class="order-item">*/
/*             <dt class="order-item-image">*/
/*                 {{ 'template.store_template_bundle.order.list.image'|trans }}*/
/*             </dt>*/
/*             <dd class="order-item-image">*/
/*                 {% set purchasable = order.orderLines.first.purchasable %}*/
/*                 {% set purchasableName = purchasable|purchasable_name %}*/
/*                 {% set validImage = purchasable|valid_image %}*/
/*                 <img src="{{ validImage ? validImage|resize({*/
/*                    'width': 80,*/
/*                    'height': 80,*/
/*                    'type': 5*/
/*                }) : '//placehold.it/80x80' }}" alt="{{ purchasableName }}" class="product-thumbnail" />*/
/*             </dd>*/
/*             <dt class="order-item-id">*/
/*                 {{ 'template.store_template_bundle.order.list.number_of_order'|trans }}*/
/*             </dt>*/
/*             <dd class="order-item-id">*/
/*                 <a href="{{ url('store_order_view', { id: order.id }) }}" class="order-title">{{ 'template.store_template_bundle.order.list.order_number'|trans }}{{ order.id }}</a>*/
/*             </dd>*/
/*             <dt class="order-item-payment-status">{{ 'template.store_template_bundle.order.list.payment_state'|trans }}</dt>*/
/*             <dd class="order-item-payment-status">{{ "common.order.states.#{order.paymentStateLineStack.lastStateLine.name}"|trans }}</dd>*/
/*             <dt class="order-item-shipping-status">{{ 'template.store_template_bundle.order.list.shipping_state'|trans }}</dt>*/
/*             <dd class="order-item-shipping-status">{{ "common.order.states.#{order.shippingStateLineStack.lastStateLine.name}"|trans }}</dd>*/
/*             <dt class="order-item-date">{{ 'template.store_template_bundle.order.list.date'|trans }}</dt>*/
/*             <dd class="order-item-date">{{ order.createdAt|date('d.m.Y') }}</dd>*/
/*             <dt class="order-item-total">{{ 'template.store_template_bundle.order.list.total'|trans }}</dt>*/
/*             <dd class="order-item-total">{{ order.amount|print_convert_money() }}</dd>*/
/*         </dl>*/
/*         {% else %}*/
/*             <div class="empty-page">*/
/*                 <i class="fa fa-shopping-cart fa-3x"></i>*/
/*                 <h2 class="product-title">{{ "template.store_template_bundle.order.list.no_orders"|trans}}</h2>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
