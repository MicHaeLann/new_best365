<?php

/* AdminProductBundle:Variant:edit.html.twig */
class __TwigTemplate_b5f932c2a6b3d3073e5c2f797f092929b4c75efe72a27d523046f7e2f9611cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Variant:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79ff60a123d1d986fa8ed9e71fc52ea5bd1ca59ee6e1fc9652891811f7b31ee2 = $this->env->getExtension("native_profiler");
        $__internal_79ff60a123d1d986fa8ed9e71fc52ea5bd1ca59ee6e1fc9652891811f7b31ee2->enter($__internal_79ff60a123d1d986fa8ed9e71fc52ea5bd1ca59ee6e1fc9652891811f7b31ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Variant:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "variant");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ff60a123d1d986fa8ed9e71fc52ea5bd1ca59ee6e1fc9652891811f7b31ee2->leave($__internal_79ff60a123d1d986fa8ed9e71fc52ea5bd1ca59ee6e1fc9652891811f7b31ee2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f52c795e7b98955e64749e09df01df28b949fc95057303880da64b2169b8cef = $this->env->getExtension("native_profiler");
        $__internal_7f52c795e7b98955e64749e09df01df28b949fc95057303880da64b2169b8cef->enter($__internal_7f52c795e7b98955e64749e09df01df28b949fc95057303880da64b2169b8cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "id", array())) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_product_variant_edit_component", array("productId" => $this->getAttribute(            // line 14
(isset($context["product"]) ? $context["product"] : null), "id", array()), "id" => $this->getAttribute(            // line 15
(isset($context["variant"]) ? $context["variant"] : null), "id", array()))));
            // line 17
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_product_variant_new_component", array("productId" => $this->getAttribute(            // line 21
(isset($context["product"]) ? $context["product"] : null), "id", array()))));
            // line 23
            echo "
    ";
        }
        // line 25
        echo "
";
        
        $__internal_7f52c795e7b98955e64749e09df01df28b949fc95057303880da64b2169b8cef->leave($__internal_7f52c795e7b98955e64749e09df01df28b949fc95057303880da64b2169b8cef_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Variant:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  61 => 23,  59 => 21,  57 => 19,  53 => 17,  51 => 15,  50 => 14,  48 => 12,  46 => 11,  43 => 10,  37 => 9,  30 => 1,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'variant'*/
/* } %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     {% if variant.id %}*/
/*         {{*/
/*             render(url('admin_product_variant_edit_component', {*/
/*                 productId: product.id,*/
/*                 id: variant.id,*/
/*             }))*/
/*         }}*/
/*     {% else %}*/
/*         {{*/
/*             render(url('admin_product_variant_new_component', {*/
/*                 productId: product.id,*/
/*             }))*/
/*         }}*/
/*     {% endif %}*/
/* */
/* {% endblock body %}*/
/* */
