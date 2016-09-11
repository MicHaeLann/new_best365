<?php

/* StoreTemplateBundle:Pages:category-view.html.twig */
class __TwigTemplate_c14cb5395df8dd5c48f7185ad9f21d9a0d05fb808f2e6e7ec3501ebe3817a981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:category-view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b50d5161f4610f5166f363e030cfa33a262a0e1bda3c399fa01f483ee0cee89 = $this->env->getExtension("native_profiler");
        $__internal_3b50d5161f4610f5166f363e030cfa33a262a0e1bda3c399fa01f483ee0cee89->enter($__internal_3b50d5161f4610f5166f363e030cfa33a262a0e1bda3c399fa01f483ee0cee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:category-view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b50d5161f4610f5166f363e030cfa33a262a0e1bda3c399fa01f483ee0cee89->leave($__internal_3b50d5161f4610f5166f363e030cfa33a262a0e1bda3c399fa01f483ee0cee89_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0482e7ea36a7abb0847109ff38ff5a5bd9e3bd0c050c63786c154e0d8ef20283 = $this->env->getExtension("native_profiler");
        $__internal_0482e7ea36a7abb0847109ff38ff5a5bd9e3bd0c050c63786c154e0d8ef20283->enter($__internal_0482e7ea36a7abb0847109ff38ff5a5bd9e3bd0c050c63786c154e0d8ef20283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.category.view.category"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        
        $__internal_0482e7ea36a7abb0847109ff38ff5a5bd9e3bd0c050c63786c154e0d8ef20283->leave($__internal_0482e7ea36a7abb0847109ff38ff5a5bd9e3bd0c050c63786c154e0d8ef20283_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_17a153037c8581f746a129f8ff5c580377bc796aafa8a1fdd2359cd4580ff84d = $this->env->getExtension("native_profiler");
        $__internal_17a153037c8581f746a129f8ff5c580377bc796aafa8a1fdd2359cd4580ff84d->enter($__internal_17a153037c8581f746a129f8ff5c580377bc796aafa8a1fdd2359cd4580ff84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 7
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parent", array()))) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("slug" => $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parent", array()), "slug", array()), "id" => $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parent", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parent", array()), "name", array()), "html", null, true);
            echo "</a> >
        </li>
    ";
        }
        // line 12
        echo "    <li>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "</strong></a>
    </li>
";
        
        $__internal_17a153037c8581f746a129f8ff5c580377bc796aafa8a1fdd2359cd4580ff84d->leave($__internal_17a153037c8581f746a129f8ff5c580377bc796aafa8a1fdd2359cd4580ff84d_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_93ecc2365664e98d9ea8581c0bee67910608d6bc5496a9ae966a2ad906011605 = $this->env->getExtension("native_profiler");
        $__internal_93ecc2365664e98d9ea8581c0bee67910608d6bc5496a9ae966a2ad906011605->enter($__internal_93ecc2365664e98d9ea8581c0bee67910608d6bc5496a9ae966a2ad906011605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("@StoreTemplate/Modules/_purchasable-list.html.twig", "StoreTemplateBundle:Pages:category-view.html.twig", 18)->display(array_merge($context, array("purchasables" =>         // line 19
(isset($context["purchasables"]) ? $context["purchasables"] : null))));
        
        $__internal_93ecc2365664e98d9ea8581c0bee67910608d6bc5496a9ae966a2ad906011605->leave($__internal_93ecc2365664e98d9ea8581c0bee67910608d6bc5496a9ae966a2ad906011605_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:category-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  90 => 18,  84 => 17,  72 => 13,  69 => 12,  61 => 9,  58 => 8,  55 => 7,  49 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* */
/* {% block title %}{{ "template.store_template_bundle.category.view.category"|trans }}{{ category.name }}{% endblock title %}*/
/* */
/* {% block breadcrumb %}*/
/*     {% if category.parent is not null %}*/
/*         <li>*/
/*             <a href="{{ url('store_category_purchasables_list', { slug: category.parent.slug, id: category.parent.id }) }}">{{ category.parent.name }}</a> >*/
/*         </li>*/
/*     {% endif %}*/
/*     <li>*/
/*         <a href="{{ url('store_category_purchasables_list', { slug: category.slug, id: category.id }) }}"><strong>{{ category.name }}</strong></a>*/
/*     </li>*/
/* {% endblock breadcrumb %}*/
/* */
/* {% block content %}*/
/* 	{% include '@StoreTemplate/Modules/_purchasable-list.html.twig' with {*/
/*         'purchasables' : purchasables*/
/*     } %}*/
/* {% endblock content %}*/
/* */
