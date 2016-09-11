<?php

/* StoreTemplateBundle:Pages:product-view-variant.html.twig */
class __TwigTemplate_5944dbcb8a9010a62a83b6dc1cd09d08d2e33b7493a0ab641bb39deb6c9c4419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@StoreTemplate/Pages/product-view-item.html.twig", "StoreTemplateBundle:Pages:product-view-variant.html.twig", 4);
        $this->blocks = array(
            'product_info_add_basket' => array($this, 'block_product_info_add_basket'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Pages/product-view-item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bcd021dde36299651724403e4c9b630e54ad35c5e2a7e7118ee583e02c2408 = $this->env->getExtension("native_profiler");
        $__internal_d8bcd021dde36299651724403e4c9b630e54ad35c5e2a7e7118ee583e02c2408->enter($__internal_d8bcd021dde36299651724403e4c9b630e54ad35c5e2a7e7118ee583e02c2408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:product-view-variant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bcd021dde36299651724403e4c9b630e54ad35c5e2a7e7118ee583e02c2408->leave($__internal_d8bcd021dde36299651724403e4c9b630e54ad35c5e2a7e7118ee583e02c2408_prof);

    }

    // line 10
    public function block_product_info_add_basket($context, array $blocks = array())
    {
        $__internal_9371fe8287218b8b6e17dbcfe4869d461a1ce6ba6065e393bcfa942f959b3271 = $this->env->getExtension("native_profiler");
        $__internal_9371fe8287218b8b6e17dbcfe4869d461a1ce6ba6065e393bcfa942f959b3271->enter($__internal_9371fe8287218b8b6e17dbcfe4869d461a1ce6ba6065e393bcfa942f959b3271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_info_add_basket"));

        // line 11
        echo "<div class= \"product-to-basket-group\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 13
            echo "    <div class= \"product-to-basket\">
        ";
            // line 14
            $context["variant_price"] = (($this->getAttribute($context["variant"], "inOffer", array())) ? ($this->getAttribute($context["variant"], "reducedPrice", array())) : ($this->getAttribute($context["variant"], "price", array())));
            // line 15
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["variant"], "images", array())) > 0)) {
                // line 16
                echo "            <img hspace=\"10\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute($this->getAttribute($context["variant"], "images", array()), "first", array()), array("width" => 300, "height" => 100, "type" => 5)), "html", null, true);
                // line 20
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["variant"], "name", array()), "html", null, true);
                echo "\" />
            ";
            } else {
                // line 22
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "principalImage", array())) ? ($this->env->getExtension('image_extension')->resize($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "principalImage", array()), array("width" => 300, "height" => 100, "type" => 5))) : ("//placehold.it/60x47")), "html", null, true);
                // line 26
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
                echo "\" />
            ";
            }
            // line 28
            echo "
        <h5 class=\"product-title\">";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array($context["variant"])), "html", null, true);
            echo "</h5>
        <p class=\"product-actions\">
            ";
            // line 31
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "inOffer", array())) {
                // line 32
                echo "                <span class=\"product-pricing product-pricing-before\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["variant"], "price", array()))), "html", null, true);
                echo "</span>
                <span class=\"product-pricing product-pricing-now\">";
                // line 33
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["variant"], "reducedPrice", array()))), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 35
                echo "                <span class=\"product-pricing\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute($context["variant"], "price", array()))), "html", null, true);
                echo "</span>
            ";
            }
            // line 37
            echo "            ";
            if (( !(isset($context["useStock"]) ? $context["useStock"] : null) || ($this->getAttribute($context["variant"], "stock", array()) > 0))) {
                // line 38
                echo "            <a title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
                echo "\"
               class=\"fa fa-shopping-cart button button-secondary\"
               href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_cart_add_purchasable", array("id" => $this->getAttribute($context["variant"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 42
                echo "                <a title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.no_stock"), "html", null, true);
                echo "\"
                   class=\"fa fa-times button button\"
                   href=\"#\"> ";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.no_stock"), "html", null, true);
                echo "</a>
            ";
            }
            // line 46
            echo "        </p>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
";
        
        $__internal_9371fe8287218b8b6e17dbcfe4869d461a1ce6ba6065e393bcfa942f959b3271->leave($__internal_9371fe8287218b8b6e17dbcfe4869d461a1ce6ba6065e393bcfa942f959b3271_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:product-view-variant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  126 => 46,  121 => 44,  115 => 42,  108 => 40,  102 => 38,  99 => 37,  93 => 35,  88 => 33,  83 => 32,  81 => 31,  76 => 29,  73 => 28,  67 => 26,  64 => 22,  58 => 20,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  43 => 12,  40 => 11,  34 => 10,  11 => 4,);
    }
}
/* {#*/
/*  # View for a Product detail page with variants.*/
/*  #}*/
/* {% extends '@StoreTemplate/Pages/product-view-item.html.twig' %}*/
/* */
/* {#*/
/*  # The product_info_details should now display a form*/
/*  # to select the product variant*/
/*  #}*/
/* {% block product_info_add_basket %}*/
/* <div class= "product-to-basket-group">*/
/* {% for variant in product.variants %}*/
/*     <div class= "product-to-basket">*/
/*         {% set variant_price = variant.inOffer ? variant.reducedPrice : variant.price %}*/
/*             {% if variant.images|length > 0  %}*/
/*             <img hspace="10" src="{{ variant.images.first|resize({*/
/*                 'width': 300,*/
/*                 'height': 100,*/
/*                 'type': 5*/
/*             }) }}" alt="{{ variant.name }}" />*/
/*             {% else %}*/
/*                 <img src="{{ product.principalImage ? product.principalImage|resize({*/
/*                     'width': 300,*/
/*                     'height': 100,*/
/*                     'type': 5*/
/*                 }) : '//placehold.it/60x47' }}" alt="{{ product.name }}" />*/
/*             {% endif %}*/
/* */
/*         <h5 class="product-title">{{ variant|purchasable_name }}</h5>*/
/*         <p class="product-actions">*/
/*             {% if product.inOffer %}*/
/*                 <span class="product-pricing product-pricing-before">{{ variant.price|print_convert_money() }}</span>*/
/*                 <span class="product-pricing product-pricing-now">{{ variant.reducedPrice|print_convert_money() }}</span>*/
/*             {% else %}*/
/*                 <span class="product-pricing">{{ variant.price|print_convert_money() }}</span>*/
/*             {% endif %}*/
/*             {% if not useStock or variant.stock > 0 %}*/
/*             <a title="{{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }}"*/
/*                class="fa fa-shopping-cart button button-secondary"*/
/*                href="{{ url('store_cart_add_purchasable', { id: variant.id }) }}"> {{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }}</a>*/
/*             {% else %}*/
/*                 <a title="{{ 'template.store_template_bundle.product.view_item.no_stock'|trans }}"*/
/*                    class="fa fa-times button button"*/
/*                    href="#"> {{ 'template.store_template_bundle.product.view_item.no_stock'|trans }}</a>*/
/*             {% endif %}*/
/*         </p>*/
/*     </div>*/
/* */
/* {% endfor %}*/
/* </div>*/
/* {% endblock %}*/
/* */
