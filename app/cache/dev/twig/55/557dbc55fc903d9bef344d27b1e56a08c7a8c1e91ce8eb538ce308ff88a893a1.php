<?php

/* StoreTemplateBundle:Modules:_order-item.html.twig */
class __TwigTemplate_65b4ce6d82a9c974228a24514c7fa43656edeac105d51509cb1d2bd67d75169a extends Twig_Template
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
        $__internal_c44633cd155bb16970adb84766e4f35bfa212396b1cac732db1a8f819554e85f = $this->env->getExtension("native_profiler");
        $__internal_c44633cd155bb16970adb84766e4f35bfa212396b1cac732db1a8f819554e85f->enter($__internal_c44633cd155bb16970adb84766e4f35bfa212396b1cac732db1a8f819554e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_order-item.html.twig"));

        // line 1
        $context["purchasable"] = $this->getAttribute((isset($context["line"]) ? $context["line"] : null), "purchasable", array());
        // line 2
        $context["purchasable"] = (($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "product", array())) ? ($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "product", array())) : ((isset($context["purchasable"]) ? $context["purchasable"] : null)));
        // line 3
        $context["purchasableRouteName"] = (($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "products", array())) ? ("store_purchasable_pack_view") : ("store_product_view"));
        // line 4
        $context["purchasableRoute"] = $this->env->getExtension('routing')->getUrl((isset($context["purchasableRouteName"]) ? $context["purchasableRouteName"] : null), array("slug" => $this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "id", array())));
        // line 5
        $context["productName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
        // line 6
        $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
        // line 7
        echo "
<dl class=\"";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "cart-item")) : ("cart-item")), "html", null, true);
        echo "\">
    <dt class=\"cart-item-image\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.item.image"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-image\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["productRoute"]) ? $context["productRoute"] : null), "html", null, true);
        echo "\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 150, "height" => 150, "type" => 5))) : ("//placehold.it/150x150")), "html", null, true);
        // line 16
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\" class=\"product-thumbnail\" />
        </a>
    </dd>
    <dt class=\"cart-item-name\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.item.item"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-name\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["purchasableRoute"]) ? $context["purchasableRoute"] : null), "html", null, true);
        echo "\" class=\"product-title\">";
        echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : null), "html", null, true);
        echo "</a></dd>
    <dt class=\"cart-item-units\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.item.units"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-units\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : null), "quantity", array()), "html", null, true);
        echo "</dd>
    <dt class=\"cart-item-price\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.item.price"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-price\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "purchasableAmount", array()))), "html", null, true);
        echo "</dd>
    <dt class=\"cart-item-total\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.order.item.total"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-total\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "amount", array()))), "html", null, true);
        echo "</dd>
</dl>
";
        
        $__internal_c44633cd155bb16970adb84766e4f35bfa212396b1cac732db1a8f819554e85f->leave($__internal_c44633cd155bb16970adb84766e4f35bfa212396b1cac732db1a8f819554e85f_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_order-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  59 => 19,  52 => 16,  50 => 12,  46 => 11,  41 => 9,  37 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set purchasable = line.purchasable %}*/
/* {% set purchasable = purchasable.product ?: purchasable %}*/
/* {% set purchasableRouteName = purchasable.products ? 'store_purchasable_pack_view' : 'store_product_view' %}*/
/* {% set purchasableRoute = url(purchasableRouteName, { slug: purchasable.slug, id: purchasable.id }) %}*/
/* {% set productName = purchasable|purchasable_name %}*/
/* {% set validImage = purchasable|valid_image %}*/
/* */
/* <dl class="{{ class|default('cart-item') }}">*/
/*     <dt class="cart-item-image">{{ 'template.store_template_bundle.order.item.image'|trans }}</dt>*/
/*     <dd class="cart-item-image">*/
/*         <a href="{{ productRoute }}">*/
/*             <img src="{{ validImage ? validImage|resize({*/
/*                 width: 150,*/
/*                 height: 150,*/
/*                 type: 5 }) : '//placehold.it/150x150'*/
/*             }}" alt="{{ product.name }}" class="product-thumbnail" />*/
/*         </a>*/
/*     </dd>*/
/*     <dt class="cart-item-name">{{ 'template.store_template_bundle.order.item.item'|trans }}</dt>*/
/*     <dd class="cart-item-name"><a href="{{ purchasableRoute }}" class="product-title">{{ productName }}</a></dd>*/
/*     <dt class="cart-item-units">{{ 'template.store_template_bundle.order.item.units'|trans }}</dt>*/
/*     <dd class="cart-item-units">{{ line.quantity }}</dd>*/
/*     <dt class="cart-item-price">{{ 'template.store_template_bundle.order.item.price'|trans }}</dt>*/
/*     <dd class="cart-item-price">{{ line.purchasableAmount|print_convert_money() }}</dd>*/
/*     <dt class="cart-item-total">{{ 'template.store_template_bundle.order.item.total'|trans }}</dt>*/
/*     <dd class="cart-item-total">{{ line.amount|print_convert_money() }}</dd>*/
/* </dl>*/
/* */
