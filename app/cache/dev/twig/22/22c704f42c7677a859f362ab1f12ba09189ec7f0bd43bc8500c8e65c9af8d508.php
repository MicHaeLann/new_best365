<?php

/* AdminProductBundle:Category:list.html.twig */
class __TwigTemplate_42ce39bc47c9de53359175ae8d1cd06b24d54bd911058cc30163e0031dd1d693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Category:list.html.twig", 1);
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
        $__internal_03e74dd91a5e451cdccccc7e63b91cec850ae4113bb1ef124e0103535ff14f97 = $this->env->getExtension("native_profiler");
        $__internal_03e74dd91a5e451cdccccc7e63b91cec850ae4113bb1ef124e0103535ff14f97->enter($__internal_03e74dd91a5e451cdccccc7e63b91cec850ae4113bb1ef124e0103535ff14f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Category:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "category");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e74dd91a5e451cdccccc7e63b91cec850ae4113bb1ef124e0103535ff14f97->leave($__internal_03e74dd91a5e451cdccccc7e63b91cec850ae4113bb1ef124e0103535ff14f97_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_40359b4a1851f192239815738474da40ae7893a227889f47f070e18ab055440d = $this->env->getExtension("native_profiler");
        $__internal_40359b4a1851f192239815738474da40ae7893a227889f47f070e18ab055440d->enter($__internal_40359b4a1851f192239815738474da40ae7893a227889f47f070e18ab055440d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Category:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.categorization.single"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.category.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_40359b4a1851f192239815738474da40ae7893a227889f47f070e18ab055440d->leave($__internal_40359b4a1851f192239815738474da40ae7893a227889f47f070e18ab055440d_prof);

    }

    // line 21
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_db711ae4a495ad096e1c9b8ada69755adf7ae2bbfd9ff3e5cff409421cf661c9 = $this->env->getExtension("native_profiler");
        $__internal_db711ae4a495ad096e1c9b8ada69755adf7ae2bbfd9ff3e5cff409421cf661c9->enter($__internal_db711ae4a495ad096e1c9b8ada69755adf7ae2bbfd9ff3e5cff409421cf661c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_category_new");
        echo "\" class=\"button-primary\" data-test=\"new-category\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_db711ae4a495ad096e1c9b8ada69755adf7ae2bbfd9ff3e5cff409421cf661c9->leave($__internal_db711ae4a495ad096e1c9b8ada69755adf7ae2bbfd9ff3e5cff409421cf661c9_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_80e17c45a3319d8362c25661c50e2bd86c8bba4cf161cdc9fc2ee2d11f13ed22 = $this->env->getExtension("native_profiler");
        $__internal_80e17c45a3319d8362c25661c50e2bd86c8bba4cf161cdc9fc2ee2d11f13ed22->enter($__internal_80e17c45a3319d8362c25661c50e2bd86c8bba4cf161cdc9fc2ee2d11f13ed22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_category_list_component"));
        echo "

";
        
        $__internal_80e17c45a3319d8362c25661c50e2bd86c8bba4cf161cdc9fc2ee2d11f13ed22->leave($__internal_80e17c45a3319d8362c25661c50e2bd86c8bba4cf161cdc9fc2ee2d11f13ed22_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  89 => 32,  83 => 31,  72 => 25,  67 => 23,  64 => 22,  58 => 21,  50 => 17,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'category'*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.categorization.single'|trans, active: false },*/
/*             { name: 'admin.category.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_category_new') }}" class="button-primary" data-test="new-category">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.category.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{ render(url('admin_category_list_component'))}}*/
/* */
/* {% endblock content %}*/
/* */
