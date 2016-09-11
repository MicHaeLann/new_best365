<?php

/* StoreTemplateBundle:Modules:_product-item.html.twig */
class __TwigTemplate_6b90a754e1b7626e91f4869ea578442cf51b508c9e16c9b372d96c8e768d2f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pin_title' => array($this, 'block_pin_title'),
            'pin_image' => array($this, 'block_pin_image'),
            'pin_button_view' => array($this, 'block_pin_button_view'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4f988ec12286bca986ca4cbb5360255b567226fbb72007ed919338dd863b05 = $this->env->getExtension("native_profiler");
        $__internal_ea4f988ec12286bca986ca4cbb5360255b567226fbb72007ed919338dd863b05->enter($__internal_ea4f988ec12286bca986ca4cbb5360255b567226fbb72007ed919338dd863b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_product-item.html.twig"));

        // line 4
        echo "<div class=\"product-item\">
    ";
        // line 5
        $context["productRoute"] = $this->env->getExtension('routing')->getUrl("store_product_view", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())));
        // line 6
        echo "    ";
        $context["productName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["product"]) ? $context["product"] : null)));
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('pin_title', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('pin_image', $context, $blocks);
        // line 25
        echo "
    <p class=\"product-actions\">
        ";
        // line 27
        $this->displayBlock('pin_button_view', $context, $blocks);
        // line 32
        echo "        ";
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "inOffer", array())) {
            // line 33
            echo "            <span class=\"product-pricing product-pricing-before\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()))), "html", null, true);
            echo "</span>
            <span class=\"product-pricing product-pricing-now\">";
            // line 34
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "reducedPrice", array()))), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 36
            echo "            <span class=\"product-pricing\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()))), "html", null, true);
            echo "</span>
        ";
        }
        // line 38
        echo "        ";
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hasVariants", array(), "method")) {
            // line 39
            echo "            <a class=\"fa fa-list button button-secondary\"
               title=\"Choose a model of ";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : null), "html", null, true);
            echo "\"
               href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_product_view", array("slug" => $this->getAttribute(            // line 42
(isset($context["product"]) ? $context["product"] : null), "slug", array()), "id" => $this->getAttribute(            // line 43
(isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
            // line 44
            echo "#variant-add-to-cart\"></a>
        ";
        } else {
            // line 46
            echo "            <a class=\"fa fa-shopping-cart button button-secondary\"
               data-test=\"add-product-";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
            echo "-to-cart\"
               href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_cart_add_purchasable", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
            echo "\"
               title=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : null), "html", null, true);
            echo "\"></a>
        ";
        }
        // line 51
        echo "
    </p>

    ";
        // line 54
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.product_pin_bottom", array("product" =>         // line 55
(isset($context["purchasable"]) ? $context["purchasable"] : null))));
        // line 56
        echo "
</div>
";
        
        $__internal_ea4f988ec12286bca986ca4cbb5360255b567226fbb72007ed919338dd863b05->leave($__internal_ea4f988ec12286bca986ca4cbb5360255b567226fbb72007ed919338dd863b05_prof);

    }

    // line 8
    public function block_pin_title($context, array $blocks = array())
    {
        $__internal_87b36650e0b54b9878fecc67856162fc674a88f6f78d8cbf8af973e52eac6638 = $this->env->getExtension("native_profiler");
        $__internal_87b36650e0b54b9878fecc67856162fc674a88f6f78d8cbf8af973e52eac6638->enter($__internal_87b36650e0b54b9878fecc67856162fc674a88f6f78d8cbf8af973e52eac6638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_title"));

        // line 9
        echo "    <h4 class=\"product-title\">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["productRoute"]) ? $context["productRoute"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : null), "html", null, true);
        echo "</a>
    </h4>
    ";
        
        $__internal_87b36650e0b54b9878fecc67856162fc674a88f6f78d8cbf8af973e52eac6638->leave($__internal_87b36650e0b54b9878fecc67856162fc674a88f6f78d8cbf8af973e52eac6638_prof);

    }

    // line 14
    public function block_pin_image($context, array $blocks = array())
    {
        $__internal_ef2db3483326db2c06fd02bcb7e7d10cd5db6482f395cc133ad3ba9644851051 = $this->env->getExtension("native_profiler");
        $__internal_ef2db3483326db2c06fd02bcb7e7d10cd5db6482f395cc133ad3ba9644851051->enter($__internal_ef2db3483326db2c06fd02bcb7e7d10cd5db6482f395cc133ad3ba9644851051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_image"));

        // line 15
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["productRoute"]) ? $context["productRoute"] : null), "html", null, true);
        echo "\" class=\"product-thumbnail\">
            ";
        // line 16
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "inOffer", array())) {
            echo "<span class=\"product-badge\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.item.offer"), "html", null, true);
            echo "</span> ";
        }
        // line 17
        echo "            ";
        $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["product"]) ? $context["product"] : null)));
        // line 18
        echo "            <img class=\"image\" src=\"";
        echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 372, "height" => 291, "type" => 5))) : ("//placehold.it/372x291")), "html", null, true);
        // line 22
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : null), "html", null, true);
        echo "\" />
        </a>
    ";
        
        $__internal_ef2db3483326db2c06fd02bcb7e7d10cd5db6482f395cc133ad3ba9644851051->leave($__internal_ef2db3483326db2c06fd02bcb7e7d10cd5db6482f395cc133ad3ba9644851051_prof);

    }

    // line 27
    public function block_pin_button_view($context, array $blocks = array())
    {
        $__internal_8d4cbbcf09a9911f51d8776f4833355abc2d87d4d831db02a26c704bac6b0694 = $this->env->getExtension("native_profiler");
        $__internal_8d4cbbcf09a9911f51d8776f4833355abc2d87d4d831db02a26c704bac6b0694->enter($__internal_8d4cbbcf09a9911f51d8776f4833355abc2d87d4d831db02a26c704bac6b0694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_button_view"));

        // line 28
        echo "            <a class=\"fa fa-eye button button\"
               title=\"View details for ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : null), "html", null, true);
        echo "\"
               href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["productRoute"]) ? $context["productRoute"] : null), "html", null, true);
        echo "\"></a>
        ";
        
        $__internal_8d4cbbcf09a9911f51d8776f4833355abc2d87d4d831db02a26c704bac6b0694->leave($__internal_8d4cbbcf09a9911f51d8776f4833355abc2d87d4d831db02a26c704bac6b0694_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_product-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 30,  185 => 29,  182 => 28,  176 => 27,  165 => 22,  162 => 18,  159 => 17,  153 => 16,  148 => 15,  142 => 14,  130 => 10,  127 => 9,  121 => 8,  112 => 56,  110 => 55,  109 => 54,  104 => 51,  97 => 49,  93 => 48,  89 => 47,  86 => 46,  82 => 44,  80 => 43,  79 => 42,  78 => 41,  74 => 40,  71 => 39,  68 => 38,  62 => 36,  57 => 34,  52 => 33,  49 => 32,  47 => 27,  43 => 25,  41 => 14,  38 => 13,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,);
    }
}
/* {#*/
/*  # Base display block for a Product with no variants in listing page.*/
/*  #}*/
/* <div class="product-item">*/
/*     {% set productRoute = url('store_product_view', { 'slug': product.slug, 'id': product.id }) %}*/
/*     {% set productName = product|purchasable_name %}*/
/* */
/*     {% block pin_title %}*/
/*     <h4 class="product-title">*/
/*         <a href="{{ productRoute }}">{{ productName }}</a>*/
/*     </h4>*/
/*     {% endblock %}*/
/* */
/*     {% block pin_image %}*/
/*         <a href="{{ productRoute }}" class="product-thumbnail">*/
/*             {% if product.inOffer %}<span class="product-badge">{{ 'template.store_template_bundle.product.item.offer'|trans }}</span> {% endif %}*/
/*             {% set validImage = product|valid_image %}*/
/*             <img class="image" src="{{ validImage ? validImage|resize({*/
/*                 'width': 372,*/
/*                 'height': 291,*/
/*                 'type': 5*/
/*             }) : '//placehold.it/372x291'  }}" alt="{{ productName }}" />*/
/*         </a>*/
/*     {% endblock %}*/
/* */
/*     <p class="product-actions">*/
/*         {% block pin_button_view %}*/
/*             <a class="fa fa-eye button button"*/
/*                title="View details for {{ productName }}"*/
/*                href="{{ productRoute }}"></a>*/
/*         {% endblock %}*/
/*         {% if product.inOffer %}*/
/*             <span class="product-pricing product-pricing-before">{{ product.price|print_convert_money() }}</span>*/
/*             <span class="product-pricing product-pricing-now">{{ product.reducedPrice|print_convert_money() }}</span>*/
/*         {% else %}*/
/*             <span class="product-pricing">{{ product.price|print_convert_money() }}</span>*/
/*         {% endif %}*/
/*         {% if product.hasVariants() %}*/
/*             <a class="fa fa-list button button-secondary"*/
/*                title="Choose a model of {{ productName }}"*/
/*                href="{{ url('store_product_view', {*/
/*                    'slug': product.slug,*/
/*                    'id': product.id*/
/*                }) }}#variant-add-to-cart"></a>*/
/*         {% else %}*/
/*             <a class="fa fa-shopping-cart button button-secondary"*/
/*                data-test="add-product-{{ product.id }}-to-cart"*/
/*                href="{{ url('store_cart_add_purchasable', { id: product.id }) }}"*/
/*                title="{{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }} {{ productName }}"></a>*/
/*         {% endif %}*/
/* */
/*     </p>*/
/* */
/*     {{ elcodi_hook("store.product_pin_bottom", {*/
/*         'product': purchasable*/
/*     }) }}*/
/* </div>*/
/* */
