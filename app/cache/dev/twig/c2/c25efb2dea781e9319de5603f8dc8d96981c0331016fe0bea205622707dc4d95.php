<?php

/* StoreTemplateBundle:Pages:purchasable-pack-view.html.twig */
class __TwigTemplate_fbcb64c4acbedf17f8690d68fc2a28fe065071114bfd14172f9723793d1dd5d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:purchasable-pack-view.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'purchasable_pack_image' => array($this, 'block_purchasable_pack_image'),
            'purchasable_pack_info' => array($this, 'block_purchasable_pack_info'),
            'purchasable_pack_info_add_basket' => array($this, 'block_purchasable_pack_info_add_basket'),
            'purchasable_pack_info_details' => array($this, 'block_purchasable_pack_info_details'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6373b77c915fa4809926b9aad96d4ac633b00d0a8ded0c34ac1b7f128a884aa8 = $this->env->getExtension("native_profiler");
        $__internal_6373b77c915fa4809926b9aad96d4ac633b00d0a8ded0c34ac1b7f128a884aa8->enter($__internal_6373b77c915fa4809926b9aad96d4ac633b00d0a8ded0c34ac1b7f128a884aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:purchasable-pack-view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6373b77c915fa4809926b9aad96d4ac633b00d0a8ded0c34ac1b7f128a884aa8->leave($__internal_6373b77c915fa4809926b9aad96d4ac633b00d0a8ded0c34ac1b7f128a884aa8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dce9704260d4cf69282f7dc34cdba2b8ddfd2a61635ee33a3135b471c413d53 = $this->env->getExtension("native_profiler");
        $__internal_5dce9704260d4cf69282f7dc34cdba2b8ddfd2a61635ee33a3135b471c413d53->enter($__internal_5dce9704260d4cf69282f7dc34cdba2b8ddfd2a61635ee33a3135b471c413d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bamboo - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.purchasable_pack.view_item.purchasable_pack"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "name", array()), "html", null, true);
        
        $__internal_5dce9704260d4cf69282f7dc34cdba2b8ddfd2a61635ee33a3135b471c413d53->leave($__internal_5dce9704260d4cf69282f7dc34cdba2b8ddfd2a61635ee33a3135b471c413d53_prof);

    }

    // line 9
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_af7a5acf200aa3ac807862342e68bca42bc624eab21d92d023ba30ab96c8f547 = $this->env->getExtension("native_profiler");
        $__internal_af7a5acf200aa3ac807862342e68bca42bc624eab21d92d023ba30ab96c8f547->enter($__internal_af7a5acf200aa3ac807862342e68bca42bc624eab21d92d023ba30ab96c8f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 10
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "metaTitle", array()))) {
            // line 11
            echo "        <meta name=\"title\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "metaTitle", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 13
        if ( !twig_test_empty($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "metaDescription", array()))) {
            // line 14
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "metaDescription", array()), "html", null, true);
            echo "\">
";
        }
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "metaKeywords", array()))) {
            // line 17
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "metaKeywords", array()), "html", null, true);
            echo "\">
";
        }
        
        $__internal_af7a5acf200aa3ac807862342e68bca42bc624eab21d92d023ba30ab96c8f547->leave($__internal_af7a5acf200aa3ac807862342e68bca42bc624eab21d92d023ba30ab96c8f547_prof);

    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a21cb69d08f3f8ae8c94f2aa44c9ee687704d7b35ac49c5783a0fdf7c080d1db = $this->env->getExtension("native_profiler");
        $__internal_a21cb69d08f3f8ae8c94f2aa44c9ee687704d7b35ac49c5783a0fdf7c080d1db->enter($__internal_a21cb69d08f3f8ae8c94f2aa44c9ee687704d7b35ac49c5783a0fdf7c080d1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 22
        echo "    <li>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("slug" => $this->getAttribute($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "principalCategory", array()), "slug", array()), "id" => $this->getAttribute($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "principalCategory", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "principalCategory", array()), "html", null, true);
        echo "</a> <i class=\"fa fa-angle-right\"></i>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_purchasable_pack_view", array("slug" => $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "id", array()))), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "name", array()), "html", null, true);
        echo "</strong></a>
    </li>
";
        
        $__internal_a21cb69d08f3f8ae8c94f2aa44c9ee687704d7b35ac49c5783a0fdf7c080d1db->leave($__internal_a21cb69d08f3f8ae8c94f2aa44c9ee687704d7b35ac49c5783a0fdf7c080d1db_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_6957091c1c8407ee14b234434704be75e8eca6762b07c951678fc99f883a51e7 = $this->env->getExtension("native_profiler");
        $__internal_6957091c1c8407ee14b234434704be75e8eca6762b07c951678fc99f883a51e7->enter($__internal_6957091c1c8407ee14b234434704be75e8eca6762b07c951678fc99f883a51e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "    ";
        $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["pack"]) ? $context["pack"] : null)));
        // line 32
        echo "    ";
        $context["packName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["pack"]) ? $context["pack"] : null)));
        // line 33
        echo "    ";
        $context["packPriceConverted"] = call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "price", array())));
        // line 34
        echo "
    <div class=\"product-view\">
       <h1 class=\"product-title\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "name", array()), "html", null, true);
        echo "</h1>
       <div class=\"grid\">
           <div class=\"col-1-2\">
            ";
        // line 39
        $this->displayBlock('purchasable_pack_image', $context, $blocks);
        // line 53
        echo "           </div>
           <div class=\"col-1-2\">
               ";
        // line 55
        $this->displayBlock('purchasable_pack_info', $context, $blocks);
        // line 102
        echo "           </div>
       </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-1-1\">
            ";
        // line 107
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.purchasable_pack_view_bottom", array("pack" =>         // line 108
(isset($context["pack"]) ? $context["pack"] : null))));
        // line 109
        echo "
        </div>
    </div>
";
        
        $__internal_6957091c1c8407ee14b234434704be75e8eca6762b07c951678fc99f883a51e7->leave($__internal_6957091c1c8407ee14b234434704be75e8eca6762b07c951678fc99f883a51e7_prof);

    }

    // line 39
    public function block_purchasable_pack_image($context, array $blocks = array())
    {
        $__internal_2324856a8f8f469bffd9b743e66968603f1a1e55190c80df1eb2d0e2498fdda0 = $this->env->getExtension("native_profiler");
        $__internal_2324856a8f8f469bffd9b743e66968603f1a1e55190c80df1eb2d0e2498fdda0->enter($__internal_2324856a8f8f469bffd9b743e66968603f1a1e55190c80df1eb2d0e2498fdda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "purchasable_pack_image"));

        // line 40
        echo "               <a href=\"";
        echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 1024, "height" => 1024, "type" => 5))) : ("//placehold.it/1024x1024")), "html", null, true);
        // line 44
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["packName"]) ? $context["packName"] : null), "html", null, true);
        echo "\" class=\"product-thumbnail\">
                ";
        // line 45
        if ($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "inOffer", array())) {
            echo "<span class=\"product-badge\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.offer"), "html", null, true);
            echo "</span> ";
        }
        // line 46
        echo "                   <img src=\"";
        echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 772, "height" => 604, "type" => 5))) : ("//placehold.it/772x604")), "html", null, true);
        // line 50
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["packName"]) ? $context["packName"] : null), "html", null, true);
        echo "\"/>
               </a>
            ";
        
        $__internal_2324856a8f8f469bffd9b743e66968603f1a1e55190c80df1eb2d0e2498fdda0->leave($__internal_2324856a8f8f469bffd9b743e66968603f1a1e55190c80df1eb2d0e2498fdda0_prof);

    }

    // line 55
    public function block_purchasable_pack_info($context, array $blocks = array())
    {
        $__internal_abfb3ac5bbdaa78d2eae87c05bd99fdabf84abfaf5d96a1913955b4c60fcb885 = $this->env->getExtension("native_profiler");
        $__internal_abfb3ac5bbdaa78d2eae87c05bd99fdabf84abfaf5d96a1913955b4c60fcb885->enter($__internal_abfb3ac5bbdaa78d2eae87c05bd99fdabf84abfaf5d96a1913955b4c60fcb885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "purchasable_pack_info"));

        // line 56
        echo "                   ";
        $this->displayBlock('purchasable_pack_info_add_basket', $context, $blocks);
        // line 97
        echo "
                   ";
        // line 98
        $this->displayBlock('purchasable_pack_info_details', $context, $blocks);
        // line 101
        echo "               ";
        
        $__internal_abfb3ac5bbdaa78d2eae87c05bd99fdabf84abfaf5d96a1913955b4c60fcb885->leave($__internal_abfb3ac5bbdaa78d2eae87c05bd99fdabf84abfaf5d96a1913955b4c60fcb885_prof);

    }

    // line 56
    public function block_purchasable_pack_info_add_basket($context, array $blocks = array())
    {
        $__internal_f4e3ecf1b4d2a2fa49f866a64b0db216604f11d50017da8eccdb74fbbbebc6d2 = $this->env->getExtension("native_profiler");
        $__internal_f4e3ecf1b4d2a2fa49f866a64b0db216604f11d50017da8eccdb74fbbbebc6d2->enter($__internal_f4e3ecf1b4d2a2fa49f866a64b0db216604f11d50017da8eccdb74fbbbebc6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "purchasable_pack_info_add_basket"));

        // line 57
        echo "                       <div class= \"product-to-basket-group\">
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "purchasables", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchasable"]) {
            // line 59
            echo "                                <div class=\"product-to-basket\">
                                    ";
            // line 60
            $context["purchasableValidImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array($context["purchasable"]));
            // line 61
            echo "                                    ";
            $context["purchasableName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array($context["purchasable"]));
            // line 62
            echo "
                                    <img hspace=\"10\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, (((isset($context["purchasableValidImage"]) ? $context["purchasableValidImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["purchasableValidImage"]) ? $context["purchasableValidImage"] : null), array("width" => 300, "height" => 100, "type" => 5))) : ("//placehold.it/300x100")), "html", null, true);
            // line 67
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
            echo "\" />

                                    <h5 class=\"product-title\">";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["purchasableName"]) ? $context["purchasableName"] : null), "html", null, true);
            echo "</h5>
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchasable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </div>

                       <div class= \"product-to-basket\">
                           <h5 class=\"product-title desktop\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "name", array()), "html", null, true);
        echo "</h5>
                           <p class=\"product-actions\">
                               ";
        // line 78
        if ($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "inOffer", array())) {
            // line 79
            echo "                                   <span class=\"product-pricing product-pricing-before\">";
            echo twig_escape_filter($this->env, (isset($context["packPriceConverted"]) ? $context["packPriceConverted"] : null), "html", null, true);
            echo "</span>
                                   <span class=\"product-pricing product-pricing-now\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "reducedPrice", array()))), "html", null, true);
            echo "</span>
                               ";
        } else {
            // line 82
            echo "                                   <span class=\"product-pricing\">";
            echo twig_escape_filter($this->env, (isset($context["packPriceConverted"]) ? $context["packPriceConverted"] : null), "html", null, true);
            echo "</span>
                               ";
        }
        // line 84
        echo "                               ";
        if (( !(isset($context["useStock"]) ? $context["useStock"] : null) || ($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "stock", array()) > 0))) {
            // line 85
            echo "                               <a title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
            echo "\"
                                  class=\"fa fa-shopping-cart button button-secondary\"
                                  data-test=\"add-pack-";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "id", array()), "html", null, true);
            echo "-to-cart\"
                                  href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_cart_add_purchasable", array("id" => $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
            echo "</a>
                               ";
        } else {
            // line 90
            echo "                               <a title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.no_stock"), "html", null, true);
            echo "\"
                                  class=\"fa fa-times button\"
                                  href=\"#\"> ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.no_stock"), "html", null, true);
            echo "</a>
                               ";
        }
        // line 94
        echo "                           </p>
                       </div>
                   ";
        
        $__internal_f4e3ecf1b4d2a2fa49f866a64b0db216604f11d50017da8eccdb74fbbbebc6d2->leave($__internal_f4e3ecf1b4d2a2fa49f866a64b0db216604f11d50017da8eccdb74fbbbebc6d2_prof);

    }

    // line 98
    public function block_purchasable_pack_info_details($context, array $blocks = array())
    {
        $__internal_31e25ffd47790f9799faa0bef3a5e2ddaef4c8c79462a2f28b6c959f88f25d7e = $this->env->getExtension("native_profiler");
        $__internal_31e25ffd47790f9799faa0bef3a5e2ddaef4c8c79462a2f28b6c959f88f25d7e->enter($__internal_31e25ffd47790f9799faa0bef3a5e2ddaef4c8c79462a2f28b6c959f88f25d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "purchasable_pack_info_details"));

        // line 99
        echo "                       <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "description", array()), "html", null, true);
        echo "</p>
                   ";
        
        $__internal_31e25ffd47790f9799faa0bef3a5e2ddaef4c8c79462a2f28b6c959f88f25d7e->leave($__internal_31e25ffd47790f9799faa0bef3a5e2ddaef4c8c79462a2f28b6c959f88f25d7e_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:purchasable-pack-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 99,  339 => 98,  330 => 94,  325 => 92,  319 => 90,  312 => 88,  308 => 87,  302 => 85,  299 => 84,  293 => 82,  288 => 80,  283 => 79,  281 => 78,  276 => 76,  271 => 73,  261 => 69,  255 => 67,  253 => 63,  250 => 62,  247 => 61,  245 => 60,  242 => 59,  238 => 58,  235 => 57,  229 => 56,  222 => 101,  220 => 98,  217 => 97,  214 => 56,  208 => 55,  197 => 50,  194 => 46,  188 => 45,  183 => 44,  180 => 40,  174 => 39,  164 => 109,  162 => 108,  161 => 107,  154 => 102,  152 => 55,  148 => 53,  146 => 39,  140 => 36,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  121 => 30,  109 => 26,  101 => 23,  98 => 22,  92 => 21,  81 => 17,  79 => 16,  73 => 14,  71 => 13,  65 => 11,  62 => 10,  56 => 9,  41 => 7,  11 => 4,);
    }
}
/* {#*/
/*  # Base view for a Pack detail page with no variants.*/
/*  #}*/
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* */
/* {% block title %}Bamboo - {{ 'template.store_template_bundle.purchasable_pack.view_item.purchasable_pack'|trans }} {{ pack.name }}{% endblock title %}*/
/* */
/* {% block meta_tags %}*/
/*     {% if pack.metaTitle is not empty %}*/
/*         <meta name="title" content="{{ pack.metaTitle }}">*/
/*     {% endif %}*/
/* {% if pack.metaDescription is not empty %}*/
/*     <meta name="description" content="{{ pack.metaDescription }}">*/
/* {% endif %}*/
/* {% if pack.metaKeywords is not empty %}*/
/*     <meta name="keywords" content="{{ pack.metaKeywords }}">*/
/* {% endif %}*/
/* {% endblock meta_tags %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li>*/
/*         <a href="{{ url('store_category_purchasables_list', { slug: pack.principalCategory.slug, id: pack.principalCategory.id }) }}">{{ pack.principalCategory }}</a> <i class="fa fa-angle-right"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ url('store_purchasable_pack_view', { 'slug': pack.slug, 'id': pack.id }) }}"><strong>{{ pack.name }}</strong></a>*/
/*     </li>*/
/* {% endblock breadcrumb %}*/
/* */
/* {% block content %}*/
/*     {% set validImage = pack|valid_image %}*/
/*     {% set packName = pack|purchasable_name %}*/
/*     {% set packPriceConverted = pack.price|print_convert_money() %}*/
/* */
/*     <div class="product-view">*/
/*        <h1 class="product-title">{{ pack.name }}</h1>*/
/*        <div class="grid">*/
/*            <div class="col-1-2">*/
/*             {% block purchasable_pack_image %}*/
/*                <a href="{{ validImage ? validImage|resize({*/
/*                    'width': 1024,*/
/*                    'height': 1024,*/
/*                    'type': 5*/
/*                }) : '//placehold.it/1024x1024' }}" alt="{{ packName }}" class="product-thumbnail">*/
/*                 {% if pack.inOffer %}<span class="product-badge">{{ 'template.store_template_bundle.product.view_item.offer'|trans }}</span> {% endif %}*/
/*                    <img src="{{ validImage ? validImage|resize({*/
/*                        'width': 772,*/
/*                        'height': 604,*/
/*                        'type': 5*/
/*                    }) : '//placehold.it/772x604' }}" alt="{{ packName }}"/>*/
/*                </a>*/
/*             {% endblock %}*/
/*            </div>*/
/*            <div class="col-1-2">*/
/*                {% block purchasable_pack_info %}*/
/*                    {% block purchasable_pack_info_add_basket %}*/
/*                        <div class= "product-to-basket-group">*/
/*                             {% for purchasable in pack.purchasables %}*/
/*                                 <div class="product-to-basket">*/
/*                                     {% set purchasableValidImage = purchasable|valid_image %}*/
/*                                     {% set purchasableName = purchasable|purchasable_name %}*/
/* */
/*                                     <img hspace="10" src="{{ purchasableValidImage ? purchasableValidImage|resize({*/
/*                                         'width': 300,*/
/*                                         'height': 100,*/
/*                                         'type': 5*/
/*                                     }) : '//placehold.it/300x100' }}" alt="{{ purchasableName }}" />*/
/* */
/*                                     <h5 class="product-title">{{ purchasableName }}</h5>*/
/*                                 </div>*/
/* */
/*                             {% endfor %}*/
/*                             </div>*/
/* */
/*                        <div class= "product-to-basket">*/
/*                            <h5 class="product-title desktop">{{ pack.name }}</h5>*/
/*                            <p class="product-actions">*/
/*                                {% if pack.inOffer %}*/
/*                                    <span class="product-pricing product-pricing-before">{{ packPriceConverted }}</span>*/
/*                                    <span class="product-pricing product-pricing-now">{{ pack.reducedPrice|print_convert_money() }}</span>*/
/*                                {% else %}*/
/*                                    <span class="product-pricing">{{ packPriceConverted }}</span>*/
/*                                {% endif %}*/
/*                                {% if not useStock or pack.stock > 0 %}*/
/*                                <a title="{{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }}"*/
/*                                   class="fa fa-shopping-cart button button-secondary"*/
/*                                   data-test="add-pack-{{ pack.id }}-to-cart"*/
/*                                   href="{{ url('store_cart_add_purchasable', { id: pack.id }) }}"> {{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }}</a>*/
/*                                {% else %}*/
/*                                <a title="{{ 'template.store_template_bundle.product.view_item.no_stock'|trans }}"*/
/*                                   class="fa fa-times button"*/
/*                                   href="#"> {{ 'template.store_template_bundle.product.view_item.no_stock'|trans }}</a>*/
/*                                {% endif %}*/
/*                            </p>*/
/*                        </div>*/
/*                    {% endblock %}*/
/* */
/*                    {% block purchasable_pack_info_details %}*/
/*                        <p>{{ pack.description }}</p>*/
/*                    {% endblock %}*/
/*                {% endblock %}*/
/*            </div>*/
/*        </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-1">*/
/*             {{ elcodi_hook("store.purchasable_pack_view_bottom", {*/
/*                 'pack': pack,*/
/*             }) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
