<?php

/* AdminProductBundle:Category:edit.html.twig */
class __TwigTemplate_60d77f313dd506fc517d49083a536e65dc6cf543e6340f3492fcc23bf12402df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Category:edit.html.twig", 1);
        $this->blocks = array(
            'header_actions' => array($this, 'block_header_actions'),
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
        $__internal_e22a45060bb80d25f1389a3dbea2e596948008b49f25bf0a55d64949a8bba3e6 = $this->env->getExtension("native_profiler");
        $__internal_e22a45060bb80d25f1389a3dbea2e596948008b49f25bf0a55d64949a8bba3e6->enter($__internal_e22a45060bb80d25f1389a3dbea2e596948008b49f25bf0a55d64949a8bba3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Category:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "category");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22a45060bb80d25f1389a3dbea2e596948008b49f25bf0a55d64949a8bba3e6->leave($__internal_e22a45060bb80d25f1389a3dbea2e596948008b49f25bf0a55d64949a8bba3e6_prof);

    }

    // line 9
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_dbd38c9375fcdddb4c900149913764f3b5aa74e21ec1790c139d56ef5d8e4354 = $this->env->getExtension("native_profiler");
        $__internal_dbd38c9375fcdddb4c900149913764f3b5aa74e21ec1790c139d56ef5d8e4354->enter($__internal_dbd38c9375fcdddb4c900149913764f3b5aa74e21ec1790c139d56ef5d8e4354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 10
        echo "    ";
        if ((($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()) > 0) && false)) {
            // line 11
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()))), "html", null, true);
            echo "\" class=\"button-primary\">
            <i class=\"icon-eye\"></i>
            <span>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.in_store"), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        
        $__internal_dbd38c9375fcdddb4c900149913764f3b5aa74e21ec1790c139d56ef5d8e4354->leave($__internal_dbd38c9375fcdddb4c900149913764f3b5aa74e21ec1790c139d56ef5d8e4354_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cd9ee1487798ff18f32059479061b0d5eecf01146fa1703392085823e538036d = $this->env->getExtension("native_profiler");
        $__internal_cd9ee1487798ff18f32059479061b0d5eecf01146fa1703392085823e538036d->enter($__internal_cd9ee1487798ff18f32059479061b0d5eecf01146fa1703392085823e538036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "
    ";
        // line 21
        $context["title"] = $this->env->getExtension('translator')->trans("admin.category.plural");
        // line 22
        echo "    ";
        // line 23
        $context["header"] = (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.category.edit", array("%name%" => $this->getAttribute(        // line 24
(isset($context["category"]) ? $context["category"] : null), "name", array())))) : ($this->env->getExtension('translator')->trans("admin.category.new")));
        // line 27
        echo "
    ";
        // line 28
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Category:edit.html.twig", 28)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.categorization.single"), "active" => false), 1 => array("name" =>         // line 31
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_category_list")), 2 => array("name" =>         // line 32
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 35
        echo "
";
        
        $__internal_cd9ee1487798ff18f32059479061b0d5eecf01146fa1703392085823e538036d->leave($__internal_cd9ee1487798ff18f32059479061b0d5eecf01146fa1703392085823e538036d_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_0efe45d6eae37f54ff55c63539aac9f2d95d3d96376f77227b8665b59cb81773 = $this->env->getExtension("native_profiler");
        $__internal_0efe45d6eae37f54ff55c63539aac9f2d95d3d96376f77227b8665b59cb81773->enter($__internal_0efe45d6eae37f54ff55c63539aac9f2d95d3d96376f77227b8665b59cb81773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "
    ";
        // line 41
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            // line 42
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_category_edit_component", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))));
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_category_new_component"));
            echo "
    ";
        }
        // line 46
        echo "
";
        
        $__internal_0efe45d6eae37f54ff55c63539aac9f2d95d3d96376f77227b8665b59cb81773->leave($__internal_0efe45d6eae37f54ff55c63539aac9f2d95d3d96376f77227b8665b59cb81773_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  113 => 44,  107 => 42,  105 => 41,  102 => 40,  96 => 39,  88 => 35,  86 => 32,  85 => 31,  84 => 28,  81 => 27,  79 => 24,  78 => 23,  76 => 22,  74 => 21,  71 => 20,  65 => 19,  54 => 13,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'category',*/
/* } %}*/
/* */
/* */
/* {% block header_actions %}*/
/*     {% if category.id > 0 and false %}*/
/*         <a target="_blank" href="{{ url('store_category_purchasables_list', { id: category.id, slug: category.slug }) }}" class="button-primary">*/
/*             <i class="icon-eye"></i>*/
/*             <span>{{ 'admin.category.in_store'|trans }}</span>*/
/*         </a>*/
/*     {% endif %}*/
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.category.plural'|trans %}*/
/*     {%*/
/*         set header = category.id*/
/*             ? 'admin.category.edit'|trans({ '%name%': category.name })*/
/*             : 'admin.category.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.categorization.single'|trans, active: false },*/
/*             { name: title, url: url('admin_category_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if category.id %}*/
/*         {{ render(url('admin_category_edit_component', { id: category.id })) }}*/
/*     {% else %}*/
/*         {{ render(url('admin_category_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
