<?php

/* StoreTemplateBundle:Modules:_cart-item.html.twig */
class __TwigTemplate_e942d732e754cd0d4a5aa603319aadcbfa46f81874ce154c94d94371423d473f extends Twig_Template
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
        $__internal_afeff539d043a88411bac859c49e834defb95cf35f10b3631be2d2b137b56c44 = $this->env->getExtension("native_profiler");
        $__internal_afeff539d043a88411bac859c49e834defb95cf35f10b3631be2d2b137b56c44->enter($__internal_afeff539d043a88411bac859c49e834defb95cf35f10b3631be2d2b137b56c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_cart-item.html.twig"));

        // line 1
        $context["lineObject"] = $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "vars", array()), "data", array());
        // line 2
        $context["purchasable"] = $this->getAttribute((isset($context["lineObject"]) ? $context["lineObject"] : null), "purchasable", array());
        // line 3
        $context["masterPurchasable"] = (($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "product", array())) ? ($this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "product", array())) : ((isset($context["purchasable"]) ? $context["purchasable"] : null)));
        // line 4
        $context["purchasableRouteName"] = (($this->getAttribute((isset($context["masterPurchasable"]) ? $context["masterPurchasable"] : null), "products", array())) ? ("store_purchasable_pack_view") : ("store_product_view"));
        // line 5
        $context["purchasableRoute"] = $this->env->getExtension('routing')->getUrl((isset($context["purchasableRouteName"]) ? $context["purchasableRouteName"] : null), array("slug" => $this->getAttribute((isset($context["masterPurchasable"]) ? $context["masterPurchasable"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["masterPurchasable"]) ? $context["masterPurchasable"] : null), "id", array())));
        // line 6
        $context["purchasableName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
        // line 7
        $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["purchasable"]) ? $context["purchasable"] : null)));
        // line 8
        $context["purchasablePrice"] = $this->getAttribute((isset($context["purchasable"]) ? $context["purchasable"] : null), "resolvedPrice", array());
        // line 9
        echo "
<dl class=\"cart-item\">
    <dt class=\"cart-item-image\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.item.image"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-image\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["purchasableRoute"]) ? $context["purchasableRoute"] : null), "html", null, true);
        echo "\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 150, "height" => 150, "type" => 5))) : ("//placehold.it/150x150")), "html", null, true);
        // line 18
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
        echo "\" class=\"product-thumbnail\" />
        </a>
    </dd>
    <dt class=\"cart-item-name\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.item.item"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-name\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["purchasableRoute"]) ? $context["purchasableRoute"] : null), "html", null, true);
        echo "\" class=\"purchasable-title\">";
        echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
        echo "</a></dd>
    <dt class=\"cart-item-units\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.item.units"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-units\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "quantity", array()), 'row');
        echo "</dd>
    <dt class=\"cart-item-price\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.item.price"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-price\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array((isset($context["purchasablePrice"]) ? $context["purchasablePrice"] : null))), "html", null, true);
        echo "</dd>
    <dt class=\"cart-item-total\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.item.total"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-total\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["lineObject"]) ? $context["lineObject"] : null), "amount", array()))), "html", null, true);
        echo "</dd>
    <dt class=\"cart-item-remove\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.item.remove"), "html", null, true);
        echo "</dt>
    <dd class=\"cart-item-remove\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_cartline_remove", array("id" => $this->getAttribute((isset($context["lineObject"]) ? $context["lineObject"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"fa fa-trash-o button\"></a></dd>
</dl>
";
        
        $__internal_afeff539d043a88411bac859c49e834defb95cf35f10b3631be2d2b137b56c44->leave($__internal_afeff539d043a88411bac859c49e834defb95cf35f10b3631be2d2b137b56c44_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_cart-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  64 => 22,  60 => 21,  53 => 18,  51 => 14,  47 => 13,  42 => 11,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set lineObject = line.vars.data %}*/
/* {% set purchasable = lineObject.purchasable %}*/
/* {% set masterPurchasable = purchasable.product ?: purchasable %}*/
/* {% set purchasableRouteName = masterPurchasable.products ? 'store_purchasable_pack_view' : 'store_product_view' %}*/
/* {% set purchasableRoute = url(purchasableRouteName, { slug: masterPurchasable.slug, id: masterPurchasable.id }) %}*/
/* {% set purchasableName = purchasable|purchasable_name %}*/
/* {% set validImage = purchasable|valid_image %}*/
/* {% set purchasablePrice = purchasable.resolvedPrice %}*/
/* */
/* <dl class="cart-item">*/
/*     <dt class="cart-item-image">{{ 'template.store_template_bundle.cart.item.image'|trans }}</dt>*/
/*     <dd class="cart-item-image">*/
/*         <a href="{{ purchasableRoute }}">*/
/*             <img src="{{ validImage ? validImage|resize({*/
/*                 width: 150,*/
/*                 height: 150,*/
/*                 type: 5 }) : '//placehold.it/150x150'*/
/*             }}" alt="{{ purchasableName }}" class="product-thumbnail" />*/
/*         </a>*/
/*     </dd>*/
/*     <dt class="cart-item-name">{{ 'template.store_template_bundle.cart.item.item'|trans }}</dt>*/
/*     <dd class="cart-item-name"><a href="{{ purchasableRoute }}" class="purchasable-title">{{ purchasableName }}</a></dd>*/
/*     <dt class="cart-item-units">{{ 'template.store_template_bundle.cart.item.units'|trans }}</dt>*/
/*     <dd class="cart-item-units">{{ form_row(line.quantity) }}</dd>*/
/*     <dt class="cart-item-price">{{ 'template.store_template_bundle.cart.item.price'|trans }}</dt>*/
/*     <dd class="cart-item-price">{{ purchasablePrice|print_convert_money() }}</dd>*/
/*     <dt class="cart-item-total">{{ 'template.store_template_bundle.cart.item.total'|trans }}</dt>*/
/*     <dd class="cart-item-total">{{ lineObject.amount|print_convert_money() }}</dd>*/
/*     <dt class="cart-item-remove">{{ 'template.store_template_bundle.cart.item.remove'|trans }}</dt>*/
/*     <dd class="cart-item-remove"><a href="{{ url('store_cartline_remove', { id: lineObject.id }) }}" class="fa fa-trash-o button"></a></dd>*/
/* </dl>*/
/* */
