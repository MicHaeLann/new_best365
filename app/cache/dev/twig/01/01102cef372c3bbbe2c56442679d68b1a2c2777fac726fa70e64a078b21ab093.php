<?php

/* AdminAttributeBundle:Attribute:list.html.twig */
class __TwigTemplate_de0d9adc1ad48b55264b959aff9197913c5f268b1cf21f9c70ec01bfb1fa047e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminAttributeBundle:Attribute:list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'header_actions' => array($this, 'block_header_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c653854f646458044944cafaeee4a3f56555f6e059c2992d1502a58abb7d38f5 = $this->env->getExtension("native_profiler");
        $__internal_c653854f646458044944cafaeee4a3f56555f6e059c2992d1502a58abb7d38f5->enter($__internal_c653854f646458044944cafaeee4a3f56555f6e059c2992d1502a58abb7d38f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAttributeBundle:Attribute:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "attribute");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c653854f646458044944cafaeee4a3f56555f6e059c2992d1502a58abb7d38f5->leave($__internal_c653854f646458044944cafaeee4a3f56555f6e059c2992d1502a58abb7d38f5_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_036fc5eb74ab1d41a7d1a122514a442fc96cf1207f30ac8c247caf0757be1d99 = $this->env->getExtension("native_profiler");
        $__internal_036fc5eb74ab1d41a7d1a122514a442fc96cf1207f30ac8c247caf0757be1d99->enter($__internal_036fc5eb74ab1d41a7d1a122514a442fc96cf1207f30ac8c247caf0757be1d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminAttributeBundle:Attribute:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.categorization.single"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.attribute.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_036fc5eb74ab1d41a7d1a122514a442fc96cf1207f30ac8c247caf0757be1d99->leave($__internal_036fc5eb74ab1d41a7d1a122514a442fc96cf1207f30ac8c247caf0757be1d99_prof);

    }

    // line 21
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_849389ef961d82e2a5ae7ddb7c74794d41c15a41a0c177c328b99cd898066344 = $this->env->getExtension("native_profiler");
        $__internal_849389ef961d82e2a5ae7ddb7c74794d41c15a41a0c177c328b99cd898066344->enter($__internal_849389ef961d82e2a5ae7ddb7c74794d41c15a41a0c177c328b99cd898066344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_attribute_new");
        echo "\" type=\"button\" class=\"button-primary\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_849389ef961d82e2a5ae7ddb7c74794d41c15a41a0c177c328b99cd898066344->leave($__internal_849389ef961d82e2a5ae7ddb7c74794d41c15a41a0c177c328b99cd898066344_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_db510f326348f8d8b0238f443d34eebdff328fc70e0e53c9afa7c1f493a63e92 = $this->env->getExtension("native_profiler");
        $__internal_db510f326348f8d8b0238f443d34eebdff328fc70e0e53c9afa7c1f493a63e92->enter($__internal_db510f326348f8d8b0238f443d34eebdff328fc70e0e53c9afa7c1f493a63e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_attribute_list_component", array("page" =>         // line 35
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 36
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 37
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 38
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 40
        echo "

";
        
        $__internal_db510f326348f8d8b0238f443d34eebdff328fc70e0e53c9afa7c1f493a63e92->leave($__internal_db510f326348f8d8b0238f443d34eebdff328fc70e0e53c9afa7c1f493a63e92_prof);

    }

    public function getTemplateName()
    {
        return "AdminAttributeBundle:Attribute:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  96 => 38,  95 => 37,  94 => 36,  93 => 35,  92 => 33,  89 => 32,  83 => 31,  72 => 25,  67 => 23,  64 => 22,  58 => 21,  50 => 17,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'attribute',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.categorization.single'|trans, active: false },*/
/*             { name: 'admin.attribute.plural'|trans, active : true, },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_attribute_new') }}" type="button" class="button-primary">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.attribute.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_attribute_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection,*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
