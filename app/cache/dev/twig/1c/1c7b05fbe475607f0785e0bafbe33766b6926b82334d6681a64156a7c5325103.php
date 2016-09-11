<?php

/* StoreTemplateBundle:Modules:_product-pack-item.html.twig */
class __TwigTemplate_9b39ea34ac120f277f76422601921714352aa4ab9b02844d55f8fcc5aed84d49 extends Twig_Template
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
        $__internal_6e5d38f63f725c2e62ef77e3c6539921246c6c1b694ca85bee005bc2c4cf5615 = $this->env->getExtension("native_profiler");
        $__internal_6e5d38f63f725c2e62ef77e3c6539921246c6c1b694ca85bee005bc2c4cf5615->enter($__internal_6e5d38f63f725c2e62ef77e3c6539921246c6c1b694ca85bee005bc2c4cf5615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_product-pack-item.html.twig"));

        // line 4
        echo "<div class=\"product-item\">

    ";
        // line 6
        $context["packRoute"] = $this->env->getExtension('routing')->getUrl("store_purchasable_pack_view", array("slug" => $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "id", array())));
        // line 7
        echo "    ";
        $context["packName"] = call_user_func_array($this->env->getFilter('purchasable_name')->getCallable(), array((isset($context["pack"]) ? $context["pack"] : null)));
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('pin_title', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('pin_image', $context, $blocks);
        // line 26
        echo "
    <p class=\"product-actions\">
        ";
        // line 28
        $this->displayBlock('pin_button_view', $context, $blocks);
        // line 33
        echo "        ";
        if ($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "inOffer", array())) {
            // line 34
            echo "            <span class=\"product-pricing product-pricing-before\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "price", array()))), "html", null, true);
            echo "</span>
            <span class=\"product-pricing product-pricing-now\">";
            // line 35
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "reducedPrice", array()))), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 37
            echo "            <span class=\"product-pricing\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "price", array()))), "html", null, true);
            echo "</span>
        ";
        }
        // line 39
        echo "
        <a class=\"fa fa-shopping-cart button button-secondary\"
           data-test=\"add-product-";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "id", array()), "html", null, true);
        echo "-to-cart\"
           href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_cart_add_purchasable", array("id" => $this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "id", array()))), "html", null, true);
        echo "\"
           title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.view_item.add_to_cart"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["packName"]) ? $context["packName"] : null), "html", null, true);
        echo "\"></a>

    </p>

    ";
        // line 47
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.pack_pin_bottom", array("pack" =>         // line 48
(isset($context["purchasable"]) ? $context["purchasable"] : null))));
        // line 49
        echo "
</div>
";
        
        $__internal_6e5d38f63f725c2e62ef77e3c6539921246c6c1b694ca85bee005bc2c4cf5615->leave($__internal_6e5d38f63f725c2e62ef77e3c6539921246c6c1b694ca85bee005bc2c4cf5615_prof);

    }

    // line 9
    public function block_pin_title($context, array $blocks = array())
    {
        $__internal_4b82798e6034dc1a6118ae808760602d62811a8d342781418ef2bf963eb6f730 = $this->env->getExtension("native_profiler");
        $__internal_4b82798e6034dc1a6118ae808760602d62811a8d342781418ef2bf963eb6f730->enter($__internal_4b82798e6034dc1a6118ae808760602d62811a8d342781418ef2bf963eb6f730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_title"));

        // line 10
        echo "    <h4 class=\"product-title\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["packRoute"]) ? $context["packRoute"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["packName"]) ? $context["packName"] : null), "html", null, true);
        echo "</a>
    </h4>
    ";
        
        $__internal_4b82798e6034dc1a6118ae808760602d62811a8d342781418ef2bf963eb6f730->leave($__internal_4b82798e6034dc1a6118ae808760602d62811a8d342781418ef2bf963eb6f730_prof);

    }

    // line 15
    public function block_pin_image($context, array $blocks = array())
    {
        $__internal_98903d12292d4a7f9590b0d0151738745151b02f41a4d0950fa5d14c63006bfb = $this->env->getExtension("native_profiler");
        $__internal_98903d12292d4a7f9590b0d0151738745151b02f41a4d0950fa5d14c63006bfb->enter($__internal_98903d12292d4a7f9590b0d0151738745151b02f41a4d0950fa5d14c63006bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_image"));

        // line 16
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["packRoute"]) ? $context["packRoute"] : null), "html", null, true);
        echo "\" class=\"product-thumbnail\">
            ";
        // line 17
        if ($this->getAttribute((isset($context["pack"]) ? $context["pack"] : null), "inOffer", array())) {
            echo "<span class=\"product-badge\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.item.offer"), "html", null, true);
            echo "</span> ";
        }
        // line 18
        echo "            ";
        $context["validImage"] = call_user_func_array($this->env->getFilter('valid_image')->getCallable(), array((isset($context["pack"]) ? $context["pack"] : null)));
        // line 19
        echo "            <img class=\"image\" src=\"";
        echo twig_escape_filter($this->env, (((isset($context["validImage"]) ? $context["validImage"] : null)) ? ($this->env->getExtension('image_extension')->resize((isset($context["validImage"]) ? $context["validImage"] : null), array("width" => 372, "height" => 291, "type" => 5))) : ("//placehold.it/372x291")), "html", null, true);
        // line 23
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["packName"]) ? $context["packName"] : null), "html", null, true);
        echo "\" />
        </a>
    ";
        
        $__internal_98903d12292d4a7f9590b0d0151738745151b02f41a4d0950fa5d14c63006bfb->leave($__internal_98903d12292d4a7f9590b0d0151738745151b02f41a4d0950fa5d14c63006bfb_prof);

    }

    // line 28
    public function block_pin_button_view($context, array $blocks = array())
    {
        $__internal_4c8bb452a164c04311ad04ab8aa57def54ef808bbab728b9a759db0e36dffc2d = $this->env->getExtension("native_profiler");
        $__internal_4c8bb452a164c04311ad04ab8aa57def54ef808bbab728b9a759db0e36dffc2d->enter($__internal_4c8bb452a164c04311ad04ab8aa57def54ef808bbab728b9a759db0e36dffc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pin_button_view"));

        // line 29
        echo "            <a class=\"fa fa-eye button button\"
               title=\"View details for ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["packName"]) ? $context["packName"] : null), "html", null, true);
        echo "\"
               href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["packRoute"]) ? $context["packRoute"] : null), "html", null, true);
        echo "\"></a>
        ";
        
        $__internal_4c8bb452a164c04311ad04ab8aa57def54ef808bbab728b9a759db0e36dffc2d->leave($__internal_4c8bb452a164c04311ad04ab8aa57def54ef808bbab728b9a759db0e36dffc2d_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_product-pack-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 31,  166 => 30,  163 => 29,  157 => 28,  146 => 23,  143 => 19,  140 => 18,  134 => 17,  129 => 16,  123 => 15,  111 => 11,  108 => 10,  102 => 9,  93 => 49,  91 => 48,  90 => 47,  81 => 43,  77 => 42,  73 => 41,  69 => 39,  63 => 37,  58 => 35,  53 => 34,  50 => 33,  48 => 28,  44 => 26,  42 => 15,  39 => 14,  37 => 9,  34 => 8,  31 => 7,  29 => 6,  25 => 4,);
    }
}
/* {#*/
/*  # Base display block for a Product with no variants in listing page.*/
/*  #}*/
/* <div class="product-item">*/
/* */
/*     {% set packRoute = url('store_purchasable_pack_view', { 'slug': pack.slug, 'id': pack.id }) %}*/
/*     {% set packName = pack|purchasable_name %}*/
/* */
/*     {% block pin_title %}*/
/*     <h4 class="product-title">*/
/*         <a href="{{ packRoute }}">{{ packName }}</a>*/
/*     </h4>*/
/*     {% endblock %}*/
/* */
/*     {% block pin_image %}*/
/*         <a href="{{ packRoute }}" class="product-thumbnail">*/
/*             {% if pack.inOffer %}<span class="product-badge">{{ 'template.store_template_bundle.product.item.offer'|trans }}</span> {% endif %}*/
/*             {% set validImage = pack|valid_image %}*/
/*             <img class="image" src="{{ validImage ? validImage|resize({*/
/*                 'width': 372,*/
/*                 'height': 291,*/
/*                 'type': 5*/
/*             }) : '//placehold.it/372x291'  }}" alt="{{ packName }}" />*/
/*         </a>*/
/*     {% endblock %}*/
/* */
/*     <p class="product-actions">*/
/*         {% block pin_button_view %}*/
/*             <a class="fa fa-eye button button"*/
/*                title="View details for {{ packName }}"*/
/*                href="{{ packRoute }}"></a>*/
/*         {% endblock %}*/
/*         {% if pack.inOffer %}*/
/*             <span class="product-pricing product-pricing-before">{{ pack.price|print_convert_money() }}</span>*/
/*             <span class="product-pricing product-pricing-now">{{ pack.reducedPrice|print_convert_money() }}</span>*/
/*         {% else %}*/
/*             <span class="product-pricing">{{ pack.price|print_convert_money() }}</span>*/
/*         {% endif %}*/
/* */
/*         <a class="fa fa-shopping-cart button button-secondary"*/
/*            data-test="add-product-{{ pack.id }}-to-cart"*/
/*            href="{{ url('store_cart_add_purchasable', { id: pack.id }) }}"*/
/*            title="{{ 'template.store_template_bundle.product.view_item.add_to_cart'|trans }} {{ packName }}"></a>*/
/* */
/*     </p>*/
/* */
/*     {{ elcodi_hook("store.pack_pin_bottom", {*/
/*         'pack': purchasable*/
/*     }) }}*/
/* </div>*/
/* */
