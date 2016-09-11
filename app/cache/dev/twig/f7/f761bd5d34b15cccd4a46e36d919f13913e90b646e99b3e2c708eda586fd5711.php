<?php

/* StoreTemplateBundle:Pages:product-view-item.html.twig */
class __TwigTemplate_5a0851eefe846972f73e0436103548ce651eacdf54c532be8c6ef00ce2fc0e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:product-view-item.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'product_image' => array($this, 'block_product_image'),
            'product_info' => array($this, 'block_product_info'),
            'product_info_add_basket' => array($this, 'block_product_info_add_basket'),
            'product_info_details' => array($this, 'block_product_info_details'),
            'prefooter' => array($this, 'block_prefooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bc8c8d41a63a9b77f18e01952ad83c2d49fbe928dfb490d11634a14899a894b = $this->env->getExtension("native_profiler");
        $__internal_3bc8c8d41a63a9b77f18e01952ad83c2d49fbe928dfb490d11634a14899a894b->enter($__internal_3bc8c8d41a63a9b77f18e01952ad83c2d49fbe928dfb490d11634a14899a894b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:product-view-item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc8c8d41a63a9b77f18e01952ad83c2d49fbe928dfb490d11634a14899a894b->leave($__internal_3bc8c8d41a63a9b77f18e01952ad83c2d49fbe928dfb490d11634a14899a894b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd9eb7beb0f520784b19a5ce512b45c5d4892dc55b489b7b982f0febfa181841 = $this->env->getExtension("native_profiler");
        $__internal_bd9eb7beb0f520784b19a5ce512b45c5d4892dc55b489b7b982f0febfa181841->enter($__internal_bd9eb7beb0f520784b19a5ce512b45c5d4892dc55b489b7b982f0febfa181841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bamboo - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.product"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        
        $__internal_bd9eb7beb0f520784b19a5ce512b45c5d4892dc55b489b7b982f0febfa181841->leave($__internal_bd9eb7beb0f520784b19a5ce512b45c5d4892dc55b489b7b982f0febfa181841_prof);

    }

    // line 9
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_d0e5854562d17727d8ceb67907107cc474a835d50761705ef49ee5e5c709327a = $this->env->getExtension("native_profiler");
        $__internal_d0e5854562d17727d8ceb67907107cc474a835d50761705ef49ee5e5c709327a->enter($__internal_d0e5854562d17727d8ceb67907107cc474a835d50761705ef49ee5e5c709327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 10
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaTitle", array()))) {
            // line 11
            echo "        <meta name=\"title\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaTitle", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 13
        if ( !twig_test_empty($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaDescription", array()))) {
            // line 14
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaDescription", array()), "html", null, true);
            echo "\">
";
        }
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaKeywords", array()))) {
            // line 17
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaKeywords", array()), "html", null, true);
            echo "\">
";
        }
        
        $__internal_d0e5854562d17727d8ceb67907107cc474a835d50761705ef49ee5e5c709327a->leave($__internal_d0e5854562d17727d8ceb67907107cc474a835d50761705ef49ee5e5c709327a_prof);

    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d87a469e31ec174d6f7d889f5bcfc1ca92284ce6c37f32ddeaa985be7c254cf7 = $this->env->getExtension("native_profiler");
        $__internal_d87a469e31ec174d6f7d889f5bcfc1ca92284ce6c37f32ddeaa985be7c254cf7->enter($__internal_d87a469e31ec174d6f7d889f5bcfc1ca92284ce6c37f32ddeaa985be7c254cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 22
        echo "    <li>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("slug" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "principalCategory", array()), "slug", array()), "id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "principalCategory", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "principalCategory", array()), "html", null, true);
        echo "</a> <i class=\"fa fa-angle-right\"></i>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_product_view", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</strong></a>
    </li>
";
        
        $__internal_d87a469e31ec174d6f7d889f5bcfc1ca92284ce6c37f32ddeaa985be7c254cf7->leave($__internal_d87a469e31ec174d6f7d889f5bcfc1ca92284ce6c37f32ddeaa985be7c254cf7_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_59a14c181bc3e370366005cb69902146523f90b5cc7226beb47737107772c5ad = $this->env->getExtension("native_profiler");
        $__internal_59a14c181bc3e370366005cb69902146523f90b5cc7226beb47737107772c5ad->enter($__internal_59a14c181bc3e370366005cb69902146523f90b5cc7226beb47737107772c5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "    ";
        $context["productName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["product"]) ? $context["product"] : null)));
        // line 32
        echo "    ";
        $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["product"]) ? $context["product"] : null)));
        // line 33
        echo "
    <div class=\"product-view\">
       <h1 class=\"product-title\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h1>
       <div class=\"grid\">
           <div class=\"col-1-2\">
            ";
        // line 38
        $this->displayBlock('product_image', $context, $blocks);
        // line 52
        echo "           </div>
           <div class=\"col-1-2\">
               ";
        // line 54
        $this->displayBlock('product_info', $context, $blocks);
        // line 83
        echo "           </div>
       </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-1-1\">
            ";
        // line 88
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.product_view_bottom", array("product" =>         // line 89
(isset($context["product"]) ? $context["product"] : null))));
        // line 90
        echo "
        </div>
    </div>
";
        
        $__internal_59a14c181bc3e370366005cb69902146523f90b5cc7226beb47737107772c5ad->leave($__internal_59a14c181bc3e370366005cb69902146523f90b5cc7226beb47737107772c5ad_prof);

    }

    // line 38
    public function block_product_image($context, array $blocks = array())
    {
        $__internal_fc18bdb64a987b5473284fab33c30902288c235cbcfd897a474399d67372acbf = $this->env->getExtension("native_profiler");
        $__internal_fc18bdb64a987b5473284fab33c30902288c235cbcfd897a474399d67372acbf->enter($__internal_fc18bdb64a987b5473284fab33c30902288c235cbcfd897a474399d67372acbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_image"));

        // line 39
        echo "               <a href=\"";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "images", array())) > 0)) ? ($this->env->getExtension('image_extension')->resize($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "images", array()), "first", array()), array("width" => 1024, "height" => 1024, "type" => 5))) : ("//placehold.it/772x604")), "html", null, true);
        // line 43
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\" class=\"product-thumbnail\">
                ";
        // line 44
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "inOffer", array())) {
            echo "<span class=\"product-badge\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.offer"), "html", null, true);
            echo "</span> ";
        }
        // line 45
        echo "                   <img src=\"";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "images", array())) > 0)) ? ($this->env->getExtension('image_extension')->resize($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "images", array()), "first", array()), array("width" => 772, "height" => 604, "type" => 5))) : ("//placehold.it/772x604")), "html", null, true);
        // line 49
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\"/>
               </a>
            ";
        
        $__internal_fc18bdb64a987b5473284fab33c30902288c235cbcfd897a474399d67372acbf->leave($__internal_fc18bdb64a987b5473284fab33c30902288c235cbcfd897a474399d67372acbf_prof);

    }

    // line 54
    public function block_product_info($context, array $blocks = array())
    {
        $__internal_fe3b3bd3de204afa9f3b2348619f61f24cb82a972149170ede50df65e59e7f31 = $this->env->getExtension("native_profiler");
        $__internal_fe3b3bd3de204afa9f3b2348619f61f24cb82a972149170ede50df65e59e7f31->enter($__internal_fe3b3bd3de204afa9f3b2348619f61f24cb82a972149170ede50df65e59e7f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_info"));

        // line 55
        echo "                   ";
        $this->displayBlock('product_info_add_basket', $context, $blocks);
        // line 78
        echo "
                   ";
        // line 79
        $this->displayBlock('product_info_details', $context, $blocks);
        // line 82
        echo "               ";
        
        $__internal_fe3b3bd3de204afa9f3b2348619f61f24cb82a972149170ede50df65e59e7f31->leave($__internal_fe3b3bd3de204afa9f3b2348619f61f24cb82a972149170ede50df65e59e7f31_prof);

    }

    // line 55
    public function block_product_info_add_basket($context, array $blocks = array())
    {
        $__internal_8e3db8c3584ba1049b6ba9c82afde7ed7512a8c2b4bd7e93faa6c33c61ef0b1d = $this->env->getExtension("native_profiler");
        $__internal_8e3db8c3584ba1049b6ba9c82afde7ed7512a8c2b4bd7e93faa6c33c61ef0b1d->enter($__internal_8e3db8c3584ba1049b6ba9c82afde7ed7512a8c2b4bd7e93faa6c33c61ef0b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_info_add_basket"));

        // line 56
        echo "                       <div class= \"product-to-basket\">
                           <h5 class=\"product-title desktop\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h5>
                           <p class=\"product-actions\">
                               ";
        // line 59
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "inOffer", array())) {
            // line 60
            echo "                                   <span class=\"product-pricing product-pricing-before\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()))), "html", null, true);
            echo "</span>
                                   <span class=\"product-pricing product-pricing-now\">";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "reducedPrice", array()))), "html", null, true);
            echo "</span>
                               ";
        } else {
            // line 63
            echo "                                   <span class=\"product-pricing\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()))), "html", null, true);
            echo "</span>
                               ";
        }
        // line 65
        echo "                               ";
        if (( !(isset($context["useStock"]) ? $context["useStock"] : null) || ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock", array()) > 0))) {
            // line 66
            echo "                               <a title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
            echo "\"
                                  class=\"fa fa-shopping-cart button button-secondary\"
                                  data-test=\"add-product-";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
            echo "-to-cart\"
                                  href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_cart_add_purchasable", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
            echo "</a>
                               ";
        } else {
            // line 71
            echo "                               <a title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.no_stock"), "html", null, true);
            echo "\"
                                  class=\"fa fa-times button\"
                                  href=\"#\"> ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.no_stock"), "html", null, true);
            echo "</a>
                               ";
        }
        // line 75
        echo "                           </p>
                       </div>
                   ";
        
        $__internal_8e3db8c3584ba1049b6ba9c82afde7ed7512a8c2b4bd7e93faa6c33c61ef0b1d->leave($__internal_8e3db8c3584ba1049b6ba9c82afde7ed7512a8c2b4bd7e93faa6c33c61ef0b1d_prof);

    }

    // line 79
    public function block_product_info_details($context, array $blocks = array())
    {
        $__internal_49dfc161822b8e11079481033015e2ee19f3d475047a96d3deacf3a57b44671c = $this->env->getExtension("native_profiler");
        $__internal_49dfc161822b8e11079481033015e2ee19f3d475047a96d3deacf3a57b44671c->enter($__internal_49dfc161822b8e11079481033015e2ee19f3d475047a96d3deacf3a57b44671c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_info_details"));

        // line 80
        echo "                       <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</p>
                   ";
        
        $__internal_49dfc161822b8e11079481033015e2ee19f3d475047a96d3deacf3a57b44671c->leave($__internal_49dfc161822b8e11079481033015e2ee19f3d475047a96d3deacf3a57b44671c_prof);

    }

    // line 95
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_bf08f263221bf608700a3f9fc8ac5b1cbfd2670a38322b4e66e91ff8b9983bf1 = $this->env->getExtension("native_profiler");
        $__internal_bf08f263221bf608700a3f9fc8ac5b1cbfd2670a38322b4e66e91ff8b9983bf1->enter($__internal_bf08f263221bf608700a3f9fc8ac5b1cbfd2670a38322b4e66e91ff8b9983bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 96
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_purchasable_related", array("id" => $this->getAttribute(        // line 97
(isset($context["product"]) ? $context["product"] : null), "id", array()))));
        // line 98
        echo "
";
        
        $__internal_bf08f263221bf608700a3f9fc8ac5b1cbfd2670a38322b4e66e91ff8b9983bf1->leave($__internal_bf08f263221bf608700a3f9fc8ac5b1cbfd2670a38322b4e66e91ff8b9983bf1_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:product-view-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 98,  323 => 97,  321 => 96,  315 => 95,  305 => 80,  299 => 79,  290 => 75,  285 => 73,  279 => 71,  272 => 69,  268 => 68,  262 => 66,  259 => 65,  253 => 63,  248 => 61,  243 => 60,  241 => 59,  236 => 57,  233 => 56,  227 => 55,  220 => 82,  218 => 79,  215 => 78,  212 => 55,  206 => 54,  195 => 49,  192 => 45,  186 => 44,  181 => 43,  178 => 39,  172 => 38,  162 => 90,  160 => 89,  159 => 88,  152 => 83,  150 => 54,  146 => 52,  144 => 38,  138 => 35,  134 => 33,  131 => 32,  128 => 31,  122 => 30,  110 => 26,  102 => 23,  99 => 22,  93 => 21,  82 => 17,  80 => 16,  74 => 14,  72 => 13,  66 => 11,  63 => 10,  57 => 9,  42 => 7,  11 => 4,);
    }
}
/* {#*/
/*  # Base view for a Product detail page with no variants.*/
/*  #}*/
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* */
/* {% block title %}Bamboo - {{ 'template.store_template_bundle.product.view_item.product'|trans }} {{ product.name }}{% endblock title %}*/
/* */
/* {% block meta_tags %}*/
/*     {% if product.metaTitle is not empty %}*/
/*         <meta name="title" content="{{ product.metaTitle }}">*/
/*     {% endif %}*/
/* {% if product.metaDescription is not empty %}*/
/*     <meta name="description" content="{{ product.metaDescription }}">*/
/* {% endif %}*/
/* {% if product.metaKeywords is not empty %}*/
/*     <meta name="keywords" content="{{ product.metaKeywords }}">*/
/* {% endif %}*/
/* {% endblock meta_tags %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li>*/
/*         <a href="{{ url('store_category_purchasables_list', { slug: product.principalCategory.slug, id: product.principalCategory.id }) }}">{{ product.principalCategory }}</a> <i class="fa fa-angle-right"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ url('store_product_view', { 'slug': product.slug, 'id': product.id }) }}"><strong>{{ product.name }}</strong></a>*/
/*     </li>*/
/* {% endblock breadcrumb %}*/
/* */
/* {% block content %}*/
/*     {% set productName = product|purchasable_name %}*/
/*     {% set validImage = product|valid_image %}*/
/* */
/*     <div class="product-view">*/
/*        <h1 class="product-title">{{ product.name }}</h1>*/
/*        <div class="grid">*/
/*            <div class="col-1-2">*/
/*             {% block product_image %}*/
/*                <a href="{{ product.images|length > 0 ? product.images.first|resize({*/
/*                    'width': 1024,*/
/*                    'height': 1024,*/
/*                    'type': 5*/
/*                }) : '//placehold.it/772x604' }}" alt="{{ product.name }}" class="product-thumbnail">*/
/*                 {% if product.inOffer %}<span class="product-badge">{{ 'template.store_template_bundle.product.view_item.offer'|trans }}</span> {% endif %}*/
/*                    <img src="{{ product.images|length > 0 ? product.images.first|resize({*/
/*                        'width': 772,*/
/*                        'height': 604,*/
/*                        'type': 5*/
/*                    }) : '//placehold.it/772x604' }}" alt="{{ product.name }}"/>*/
/*                </a>*/
/*             {% endblock %}*/
/*            </div>*/
/*            <div class="col-1-2">*/
/*                {% block product_info %}*/
/*                    {% block product_info_add_basket %}*/
/*                        <div class= "product-to-basket">*/
/*                            <h5 class="product-title desktop">{{ product.name }}</h5>*/
/*                            <p class="product-actions">*/
/*                                {% if product.inOffer %}*/
/*                                    <span class="product-pricing product-pricing-before">{{ product.price|print_convert_money() }}</span>*/
/*                                    <span class="product-pricing product-pricing-now">{{ product.reducedPrice|print_convert_money() }}</span>*/
/*                                {% else %}*/
/*                                    <span class="product-pricing">{{ product.price|print_convert_money() }}</span>*/
/*                                {% endif %}*/
/*                                {% if not useStock or product.stock > 0 %}*/
/*                                <a title="{{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }}"*/
/*                                   class="fa fa-shopping-cart button button-secondary"*/
/*                                   data-test="add-product-{{ product.id }}-to-cart"*/
/*                                   href="{{ url('store_cart_add_purchasable', { id: product.id }) }}"> {{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }}</a>*/
/*                                {% else %}*/
/*                                <a title="{{ 'template.store_template_bundle.product.view_item.no_stock'|trans }}"*/
/*                                   class="fa fa-times button"*/
/*                                   href="#"> {{ 'template.store_template_bundle.product.view_item.no_stock'|trans }}</a>*/
/*                                {% endif %}*/
/*                            </p>*/
/*                        </div>*/
/*                    {% endblock %}*/
/* */
/*                    {% block product_info_details %}*/
/*                        <p>{{ product.description }}</p>*/
/*                    {% endblock %}*/
/*                {% endblock %}*/
/*            </div>*/
/*        </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-1">*/
/*             {{ elcodi_hook("store.product_view_bottom", {*/
/*                 'product': product,*/
/*             }) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
/* {% block prefooter %}*/
/*     {{ render(url('store_purchasable_related', {*/
/*         'id': product.id*/
/*     })) }}*/
/* {% endblock prefooter %}*/
/* */
