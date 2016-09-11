<?php

/* ElcodiCustomShippingBundle:Carrier:edit.html.twig */
class __TwigTemplate_a15e47e289b205e17e0dd07477631adb2428c6eccb315f12e764b364625b9941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "ElcodiCustomShippingBundle:Carrier:edit.html.twig", 1);
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
        $__internal_4b01f45d6d15aa3f20c508477bb012b7ab49c3ed419fdf2ffb41fc613a5679d4 = $this->env->getExtension("native_profiler");
        $__internal_4b01f45d6d15aa3f20c508477bb012b7ab49c3ed419fdf2ffb41fc613a5679d4->enter($__internal_4b01f45d6d15aa3f20c508477bb012b7ab49c3ed419fdf2ffb41fc613a5679d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:Carrier:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "carrier");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b01f45d6d15aa3f20c508477bb012b7ab49c3ed419fdf2ffb41fc613a5679d4->leave($__internal_4b01f45d6d15aa3f20c508477bb012b7ab49c3ed419fdf2ffb41fc613a5679d4_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_83baf8c055859ad9234784e7bab7fe4c76a1d199856c4a16791819c06bfc08a7 = $this->env->getExtension("native_profiler");
        $__internal_83baf8c055859ad9234784e7bab7fe4c76a1d199856c4a16791819c06bfc08a7->enter($__internal_83baf8c055859ad9234784e7bab7fe4c76a1d199856c4a16791819c06bfc08a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $context["title"] = $this->env->getExtension('translator')->trans("admin.carrier.plural");
        // line 12
        echo "    ";
        // line 13
        $context["header"] = (($this->getAttribute((isset($context["carrier"]) ? $context["carrier"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.carrier.edit", array("%name%" => $this->getAttribute(        // line 14
(isset($context["carrier"]) ? $context["carrier"] : null), "name", array())))) : ($this->env->getExtension('translator')->trans("admin.carrier.new")));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "ElcodiCustomShippingBundle:Carrier:edit.html.twig", 18)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.plural")), 1 => array("name" =>         // line 21
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_carrier_list")), 2 => array("name" =>         // line 22
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 25
        echo "
";
        
        $__internal_83baf8c055859ad9234784e7bab7fe4c76a1d199856c4a16791819c06bfc08a7->leave($__internal_83baf8c055859ad9234784e7bab7fe4c76a1d199856c4a16791819c06bfc08a7_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_8245a7375d34d8cb3c01f6111f65d86ee26e62829a5d9de88c9d96a4f7964970 = $this->env->getExtension("native_profiler");
        $__internal_8245a7375d34d8cb3c01f6111f65d86ee26e62829a5d9de88c9d96a4f7964970->enter($__internal_8245a7375d34d8cb3c01f6111f65d86ee26e62829a5d9de88c9d96a4f7964970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "
    ";
        // line 31
        if ($this->getAttribute((isset($context["carrier"]) ? $context["carrier"] : null), "id", array())) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_carrier_edit_component", array("id" => $this->getAttribute(            // line 34
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array()))));
            // line 36
            echo "
    ";
        } else {
            // line 38
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_carrier_new_component"));
            echo "
    ";
        }
        // line 40
        echo "
";
        
        $__internal_8245a7375d34d8cb3c01f6111f65d86ee26e62829a5d9de88c9d96a4f7964970->leave($__internal_8245a7375d34d8cb3c01f6111f65d86ee26e62829a5d9de88c9d96a4f7964970_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:Carrier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 40,  88 => 38,  84 => 36,  82 => 34,  80 => 32,  78 => 31,  75 => 30,  69 => 29,  61 => 25,  59 => 22,  58 => 21,  57 => 18,  54 => 17,  52 => 14,  51 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'carrier',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.carrier.plural'|trans %}*/
/*     {%*/
/*         set header = carrier.id*/
/*             ? 'admin.carrier.edit'|trans({ '%name%': carrier.name })*/
/*             : 'admin.carrier.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.settings.plural'|trans },*/
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
/*     {% if carrier.id %}*/
/*         {{*/
/*             render(url('admin_carrier_edit_component', {*/
/*                 id: carrier.id,*/
/*             }))*/
/*         }}*/
/*     {% else %}*/
/*         {{ render(url('admin_carrier_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
