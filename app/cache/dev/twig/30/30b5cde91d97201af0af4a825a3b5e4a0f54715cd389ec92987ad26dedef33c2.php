<?php

/* StoreTemplateBundle:Pages:checkout-address.html.twig */
class __TwigTemplate_d6d7c713bce252795834bf8839b114a411b1a8232bb8978a7bb3bf724fe8b104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_checkout.html.twig", "StoreTemplateBundle:Pages:checkout-address.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content_checkout' => array($this, 'block_content_checkout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_checkout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27b913feb3d1321e1ced504a93449bc0ea0b1b5aac256343a22033b0f82cb8a1 = $this->env->getExtension("native_profiler");
        $__internal_27b913feb3d1321e1ced504a93449bc0ea0b1b5aac256343a22033b0f82cb8a1->enter($__internal_27b913feb3d1321e1ced504a93449bc0ea0b1b5aac256343a22033b0f82cb8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:checkout-address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b913feb3d1321e1ced504a93449bc0ea0b1b5aac256343a22033b0f82cb8a1->leave($__internal_27b913feb3d1321e1ced504a93449bc0ea0b1b5aac256343a22033b0f82cb8a1_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_9e51be0beca227d927a694dd18389893dc60cd8d70a4c41ef8947e126831b484 = $this->env->getExtension("native_profiler");
        $__internal_9e51be0beca227d927a694dd18389893dc60cd8d70a4c41ef8947e126831b484->enter($__internal_9e51be0beca227d927a694dd18389893dc60cd8d70a4c41ef8947e126831b484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_9e51be0beca227d927a694dd18389893dc60cd8d70a4c41ef8947e126831b484->leave($__internal_9e51be0beca227d927a694dd18389893dc60cd8d70a4c41ef8947e126831b484_prof);

    }

    // line 5
    public function block_content_checkout($context, array $blocks = array())
    {
        $__internal_e3f2f159b1ed2ddec1636d8e56681f6b17e8b1e7c9cac0c201fc284e99406ec1 = $this->env->getExtension("native_profiler");
        $__internal_e3f2f159b1ed2ddec1636d8e56681f6b17e8b1e7c9cac0c201fc284e99406ec1->enter($__internal_e3f2f159b1ed2ddec1636d8e56681f6b17e8b1e7c9cac0c201fc284e99406ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_checkout"));

        // line 6
        echo "    <div class=\"checkout\">
    ";
        // line 7
        if ( !twig_test_empty((isset($context["addresses"]) ? $context["addresses"] : null))) {
            // line 8
            echo "        <h1 class=\"checkout-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.address.select_address"), "html", null, true);
            echo "</h1>
        <form method=\"post\" action=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("store_checkout_address_save");
            echo "\" ";
            if ((twig_length_filter($this->env, (isset($context["addresses"]) ? $context["addresses"] : null)) > 1)) {
                echo "class=\"address-list\" ";
            }
            echo ">
            <p class=\"checkout-actions checkout-actions-top\">
                <button type=\"submit\" name=\"payment\" class=\"button button-secondary desktop\" data-test=\"payment-button\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.address.payment"), "html", null, true);
            echo "
                    <i class=\"fa fa-arrow-right\"></i>
                </button>
                <a class=\"button desktop\" href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getUrl("store_cart_view");
            echo "\">
                    <i class=\"fa fa-arrow-left\"></i>
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.back"), "html", null, true);
            echo "
                </a>
                ";
            // line 19
            $this->loadTemplate("@StoreTemplate/Modules/_checkout-progress.html.twig", "StoreTemplateBundle:Pages:checkout-address.html.twig", 19)->display(array_merge($context, array("step" => 2)));
            // line 20
            echo "            </p>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 22
                echo "                ";
                $this->loadTemplate("@StoreTemplate/Modules/_address-item.html.twig", "StoreTemplateBundle:Pages:checkout-address.html.twig", 22)->display(array_merge($context, array("address" => $context["address"], "source" => "checkout")));
                // line 23
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            <p class=\"checkout-actions checkout-actions-bottom\">
                <button type=\"submit\" name=\"payment\" class=\"button button-secondary\" data-test=\"payment-button\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.address.payment"), "html", null, true);
            echo "
                    <i class=\"fa fa-arrow-right\"></i>
                </button>
                <a class=\"button\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getUrl("store_cart_view");
            echo "\">
                    <i class=\"fa fa-arrow-left\"></i>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.back"), "html", null, true);
            echo "
                </a>
            </p>
        </form>
    ";
        } else {
            // line 36
            echo "        <h1 class=\"checkout-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.address.add_new_address"), "html", null, true);
            echo "</h1>
        <p class=\"checkout-actions checkout-actions-top\">
            <a class=\"button desktop\" href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getUrl("store_cart_view");
            echo "\">
                <i class=\"fa fa-arrow-left\"></i>
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.back"), "html", null, true);
            echo "
            </a>
            ";
            // line 42
            $this->loadTemplate("@StoreTemplate/Modules/_checkout-progress.html.twig", "StoreTemplateBundle:Pages:checkout-address.html.twig", 42)->display(array_merge($context, array("step" => 2)));
            // line 43
            echo "        </p>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ( !twig_test_empty((isset($context["addresses"]) ? $context["addresses"] : null))) {
            // line 47
            echo "        <h1 class=\"checkout-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.address.add_new_address"), "html", null, true);
            echo "</h1>
    ";
        }
        // line 49
        echo "
    ";
        // line 55
        echo "
    ";
        // line 56
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5c69106_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5c69106_0") : $this->env->getExtension('asset')->getAssetUrl("js/5c69106_LocationSelectors_1.js");
            // line 57
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5c69106"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5c69106") : $this->env->getExtension('asset')->getAssetUrl("js/5c69106.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 59
        echo "
    ";
        // line 60
        $this->loadTemplate("@StoreTemplate/Modules/_address-new.html.twig", "StoreTemplateBundle:Pages:checkout-address.html.twig", 60)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
        // line 61
        echo "    </div>
";
        
        $__internal_e3f2f159b1ed2ddec1636d8e56681f6b17e8b1e7c9cac0c201fc284e99406ec1->leave($__internal_e3f2f159b1ed2ddec1636d8e56681f6b17e8b1e7c9cac0c201fc284e99406ec1_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:checkout-address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 61,  210 => 60,  207 => 59,  193 => 57,  189 => 56,  186 => 55,  183 => 49,  177 => 47,  175 => 46,  172 => 45,  168 => 43,  166 => 42,  161 => 40,  156 => 38,  150 => 36,  142 => 31,  137 => 29,  131 => 26,  127 => 24,  113 => 23,  110 => 22,  93 => 21,  90 => 20,  88 => 19,  83 => 17,  78 => 15,  72 => 12,  62 => 9,  57 => 8,  55 => 7,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_checkout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content_checkout %}*/
/*     <div class="checkout">*/
/*     {% if addresses is not empty %}*/
/*         <h1 class="checkout-title">{{ 'template.store_template_bundle.checkout.address.select_address'|trans }}</h1>*/
/*         <form method="post" action="{{ url('store_checkout_address_save') }}" {% if addresses|length > 1 %}class="address-list" {% endif %}>*/
/*             <p class="checkout-actions checkout-actions-top">*/
/*                 <button type="submit" name="payment" class="button button-secondary desktop" data-test="payment-button">*/
/*                     {{ 'template.store_template_bundle.checkout.address.payment'|trans }}*/
/*                     <i class="fa fa-arrow-right"></i>*/
/*                 </button>*/
/*                 <a class="button desktop" href="{{ url('store_cart_view') }}">*/
/*                     <i class="fa fa-arrow-left"></i>*/
/*                     {{ 'template.store_template_bundle.checkout.back'|trans }}*/
/*                 </a>*/
/*                 {% include '@StoreTemplate/Modules/_checkout-progress.html.twig' with { step: 2 } %}*/
/*             </p>*/
/*             {% for address in addresses %}*/
/*                 {% include '@StoreTemplate/Modules/_address-item.html.twig' with { address: address, source: 'checkout' } %}*/
/*             {% endfor %}*/
/*             <p class="checkout-actions checkout-actions-bottom">*/
/*                 <button type="submit" name="payment" class="button button-secondary" data-test="payment-button">*/
/*                     {{ 'template.store_template_bundle.checkout.address.payment'|trans }}*/
/*                     <i class="fa fa-arrow-right"></i>*/
/*                 </button>*/
/*                 <a class="button" href="{{ url('store_cart_view') }}">*/
/*                     <i class="fa fa-arrow-left"></i>*/
/*                     {{ 'template.store_template_bundle.checkout.back'|trans }}*/
/*                 </a>*/
/*             </p>*/
/*         </form>*/
/*     {% else %}*/
/*         <h1 class="checkout-title">{{ 'template.store_template_bundle.checkout.address.add_new_address'|trans }}</h1>*/
/*         <p class="checkout-actions checkout-actions-top">*/
/*             <a class="button desktop" href="{{ url('store_cart_view') }}">*/
/*                 <i class="fa fa-arrow-left"></i>*/
/*                 {{ 'template.store_template_bundle.checkout.back'|trans }}*/
/*             </a>*/
/*             {% include '@StoreTemplate/Modules/_checkout-progress.html.twig' with { step: 2 } %}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     {% if addresses is not empty %}*/
/*         <h1 class="checkout-title">{{ "template.store_template_bundle.checkout.address.add_new_address"|trans }}</h1>*/
/*     {% endif %}*/
/* */
/*     {###########################################################################*/
/*     #   IMPORTANT This JS is used on the location-selector to make the city    #*/
/*     #   selectors work. If you remove this you should implement the same       #*/
/*     #   functionality by yourself                                              #*/
/*     ###########################################################################}*/
/* */
/*     {% javascripts '@StoreGeoBundle/Resources/public/js/LocationSelectors.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     {% include '@StoreTemplate/Modules/_address-new.html.twig' with { form: form } %}*/
/*     </div>*/
/* {% endblock content_checkout %}*/
/* */
