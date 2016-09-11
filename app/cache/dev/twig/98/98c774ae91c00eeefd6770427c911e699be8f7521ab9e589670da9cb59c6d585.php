<?php

/* ElcodiCustomShippingBundle:ShippingRange:edit.html.twig */
class __TwigTemplate_4aa3a24687f4b8065870fdc2cfa87dcfbafa1f9e9e5aaeeada8f8880afad5001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "ElcodiCustomShippingBundle:ShippingRange:edit.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3efd67e45815c446af8716b96bb95b2051a47025d0a15aadf7093ab7d424d207 = $this->env->getExtension("native_profiler");
        $__internal_3efd67e45815c446af8716b96bb95b2051a47025d0a15aadf7093ab7d424d207->enter($__internal_3efd67e45815c446af8716b96bb95b2051a47025d0a15aadf7093ab7d424d207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:ShippingRange:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "shipping_range");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3efd67e45815c446af8716b96bb95b2051a47025d0a15aadf7093ab7d424d207->leave($__internal_3efd67e45815c446af8716b96bb95b2051a47025d0a15aadf7093ab7d424d207_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6e49f8369ad00bfec71680d369c8281d5510aeb27e922d82f63a3461603279c7 = $this->env->getExtension("native_profiler");
        $__internal_6e49f8369ad00bfec71680d369c8281d5510aeb27e922d82f63a3461603279c7->enter($__internal_6e49f8369ad00bfec71680d369c8281d5510aeb27e922d82f63a3461603279c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $context["title"] = $this->env->getExtension('translator')->trans("admin.carrier.plural");
        // line 12
        echo "    ";
        // line 13
        $context["header"] = (($this->getAttribute((isset($context["shippingRange"]) ? $context["shippingRange"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.shipping_range.edit", array("%name%" => $this->getAttribute(        // line 14
(isset($context["shippingRange"]) ? $context["shippingRange"] : null), "name", array())))) : ($this->env->getExtension('translator')->trans("admin.shipping_range.new")));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "ElcodiCustomShippingBundle:ShippingRange:edit.html.twig", 18)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 20
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_carrier_list")), 1 => array("name" =>         // line 21
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 24
        echo "
";
        
        $__internal_6e49f8369ad00bfec71680d369c8281d5510aeb27e922d82f63a3461603279c7->leave($__internal_6e49f8369ad00bfec71680d369c8281d5510aeb27e922d82f63a3461603279c7_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_4efa6896c07170cf6666145299399e4ceb3d758f5e22301ba9e0297dc1cb8257 = $this->env->getExtension("native_profiler");
        $__internal_4efa6896c07170cf6666145299399e4ceb3d758f5e22301ba9e0297dc1cb8257->enter($__internal_4efa6896c07170cf6666145299399e4ceb3d758f5e22301ba9e0297dc1cb8257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute((isset($context["shippingRange"]) ? $context["shippingRange"] : null), "id", array())) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_shipping_range_edit_component", array("carrierId" => $this->getAttribute(            // line 33
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array()), "id" => $this->getAttribute(            // line 34
(isset($context["shippingRange"]) ? $context["shippingRange"] : null), "id", array()))));
            // line 36
            echo "
    ";
        } else {
            // line 38
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_shipping_range_new_component", array("carrierId" => $this->getAttribute(            // line 40
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array()))));
            // line 42
            echo "
    ";
        }
        // line 44
        echo "
";
        
        $__internal_4efa6896c07170cf6666145299399e4ceb3d758f5e22301ba9e0297dc1cb8257->leave($__internal_4efa6896c07170cf6666145299399e4ceb3d758f5e22301ba9e0297dc1cb8257_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:ShippingRange:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  93 => 42,  91 => 40,  89 => 38,  85 => 36,  83 => 34,  82 => 33,  80 => 31,  78 => 30,  75 => 29,  69 => 28,  61 => 24,  59 => 21,  58 => 20,  57 => 18,  54 => 17,  52 => 14,  51 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'shipping_range',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.carrier.plural'|trans %}*/
/*     {%*/
/*         set header = shippingRange.id*/
/*             ? 'admin.shipping_range.edit'|trans({ '%name%': shippingRange.name })*/
/*             : 'admin.shipping_range.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: title, url: url('admin_carrier_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if shippingRange.id %}*/
/*         {{*/
/*             render(url('admin_shipping_range_edit_component', {*/
/*                 carrierId: carrier.id,*/
/*                 id: shippingRange.id,*/
/*             }))*/
/*         }}*/
/*     {% else %}*/
/*         {{*/
/*             render(url('admin_shipping_range_new_component', {*/
/*                 carrierId: carrier.id,*/
/*             }))*/
/*         }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
