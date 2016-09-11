<?php

/* AdminAttributeBundle:Attribute:edit.html.twig */
class __TwigTemplate_d26a00231b78821604e7b8b8cb977128ca767c1d1fa0d8c3c47ecb59902db4d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminAttributeBundle:Attribute:edit.html.twig", 1);
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
        $__internal_dfe4b177d61e466b44e25c579402274349b469bfefa2001b39bfe83d9b1a1d33 = $this->env->getExtension("native_profiler");
        $__internal_dfe4b177d61e466b44e25c579402274349b469bfefa2001b39bfe83d9b1a1d33->enter($__internal_dfe4b177d61e466b44e25c579402274349b469bfefa2001b39bfe83d9b1a1d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAttributeBundle:Attribute:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "attribute");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe4b177d61e466b44e25c579402274349b469bfefa2001b39bfe83d9b1a1d33->leave($__internal_dfe4b177d61e466b44e25c579402274349b469bfefa2001b39bfe83d9b1a1d33_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2df376121071b51416aeda20d395f54f73457470056086d9be4a58997e31cfaa = $this->env->getExtension("native_profiler");
        $__internal_2df376121071b51416aeda20d395f54f73457470056086d9be4a58997e31cfaa->enter($__internal_2df376121071b51416aeda20d395f54f73457470056086d9be4a58997e31cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $context["title"] = $this->env->getExtension('translator')->trans("admin.attribute.plural");
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "id", array())) {
            // line 14
            echo "        ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.attribute.edit", array("%name%" => $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "name", array())));
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.attribute.new");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminAttributeBundle:Attribute:edit.html.twig", 19)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.categorization.single"), "active" => false), 1 => array("name" =>         // line 22
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_attribute_list")), 2 => array("name" =>         // line 23
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 26
        echo "
";
        
        $__internal_2df376121071b51416aeda20d395f54f73457470056086d9be4a58997e31cfaa->leave($__internal_2df376121071b51416aeda20d395f54f73457470056086d9be4a58997e31cfaa_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffc7d692c9623a38cf14b59bf7166aaadc37020d6f4bb752d4a782f6a8800d15 = $this->env->getExtension("native_profiler");
        $__internal_ffc7d692c9623a38cf14b59bf7166aaadc37020d6f4bb752d4a782f6a8800d15->enter($__internal_ffc7d692c9623a38cf14b59bf7166aaadc37020d6f4bb752d4a782f6a8800d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "
    ";
        // line 32
        if ($this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "id", array())) {
            // line 33
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_attribute_edit_component", array("id" => $this->getAttribute(            // line 36
(isset($context["attribute"]) ? $context["attribute"] : null), "id", array()))));
            // line 39
            echo "
    ";
        } else {
            // line 41
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_attribute_new_component"));
            // line 45
            echo "
    ";
        }
        // line 47
        echo "
";
        
        $__internal_ffc7d692c9623a38cf14b59bf7166aaadc37020d6f4bb752d4a782f6a8800d15->leave($__internal_ffc7d692c9623a38cf14b59bf7166aaadc37020d6f4bb752d4a782f6a8800d15_prof);

    }

    public function getTemplateName()
    {
        return "AdminAttributeBundle:Attribute:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  103 => 45,  100 => 41,  96 => 39,  94 => 36,  92 => 33,  90 => 32,  87 => 31,  81 => 30,  73 => 26,  71 => 23,  70 => 22,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  52 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
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
/*     {% set title = 'admin.attribute.plural'|trans %}*/
/* */
/*     {% if attribute.id %}*/
/*         {% set header = 'admin.attribute.edit'|trans({ '%name%': attribute.name }) %}*/
/*     {% else %}*/
/*         {% set header = 'admin.attribute.new'|trans %}*/
/*     {% endif %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.categorization.single'|trans, active: false },*/
/*             { name: title, url: url('admin_attribute_list'), },*/
/*             { name: header, 'active' : true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if attribute.id %}*/
/*         {{*/
/*             render(*/
/*                 url('admin_attribute_edit_component', {*/
/*                     id: attribute.id,*/
/*                 })*/
/*             )*/
/*         }}*/
/*     {% else %}*/
/*         {{*/
/*             render(*/
/*                 url('admin_attribute_new_component')*/
/*             )*/
/*         }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
