<?php

/* AdminProductBundle:Manufacturer:edit.html.twig */
class __TwigTemplate_da52176472aea688c107167954f2c20dc108b26bf08ade4f608749a10c9bba35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Manufacturer:edit.html.twig", 1);
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
        $__internal_a061dcbb78b4b15c47daf55b5270909c0dd540d848d064b96ec7bb3912c1feb5 = $this->env->getExtension("native_profiler");
        $__internal_a061dcbb78b4b15c47daf55b5270909c0dd540d848d064b96ec7bb3912c1feb5->enter($__internal_a061dcbb78b4b15c47daf55b5270909c0dd540d848d064b96ec7bb3912c1feb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Manufacturer:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "manufacturer");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a061dcbb78b4b15c47daf55b5270909c0dd540d848d064b96ec7bb3912c1feb5->leave($__internal_a061dcbb78b4b15c47daf55b5270909c0dd540d848d064b96ec7bb3912c1feb5_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1114c75f8b824e1852b43733620a55686db84494d7479106fa7b7df566526028 = $this->env->getExtension("native_profiler");
        $__internal_1114c75f8b824e1852b43733620a55686db84494d7479106fa7b7df566526028->enter($__internal_1114c75f8b824e1852b43733620a55686db84494d7479106fa7b7df566526028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $context["title"] = $this->env->getExtension('translator')->trans("admin.manufacturer.plural");
        // line 12
        echo "    ";
        // line 13
        $context["header"] = (($this->getAttribute((isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.manufacturer.edit", array("%name%" => $this->getAttribute(        // line 14
(isset($context["manufacturer"]) ? $context["manufacturer"] : null), "name", array())))) : ($this->env->getExtension('translator')->trans("admin.manufacturer.new")));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Manufacturer:edit.html.twig", 18)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.categorization.single"), "active" => false), 1 => array("name" =>         // line 21
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_manufacturer_list")), 2 => array("name" =>         // line 22
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 25
        echo "
";
        
        $__internal_1114c75f8b824e1852b43733620a55686db84494d7479106fa7b7df566526028->leave($__internal_1114c75f8b824e1852b43733620a55686db84494d7479106fa7b7df566526028_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_3956def5630895fdb24eed1c049dd2b7b338a87254ce22be07b49127b08d705f = $this->env->getExtension("native_profiler");
        $__internal_3956def5630895fdb24eed1c049dd2b7b338a87254ce22be07b49127b08d705f->enter($__internal_3956def5630895fdb24eed1c049dd2b7b338a87254ce22be07b49127b08d705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "
    ";
        // line 31
        if ($this->getAttribute((isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array())) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_manufacturer_edit_component", array("id" => $this->getAttribute((isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array()))));
            echo "
    ";
        } else {
            // line 34
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_manufacturer_new_component"));
            echo "
    ";
        }
        // line 36
        echo "
";
        
        $__internal_3956def5630895fdb24eed1c049dd2b7b338a87254ce22be07b49127b08d705f->leave($__internal_3956def5630895fdb24eed1c049dd2b7b338a87254ce22be07b49127b08d705f_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Manufacturer:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  86 => 34,  80 => 32,  78 => 31,  75 => 30,  69 => 29,  61 => 25,  59 => 22,  58 => 21,  57 => 18,  54 => 17,  52 => 14,  51 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'manufacturer',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.manufacturer.plural'|trans %}*/
/*     {%*/
/*         set header = manufacturer.id*/
/*             ? 'admin.manufacturer.edit'|trans({ '%name%': manufacturer.name })*/
/*             : 'admin.manufacturer.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.categorization.single'|trans, active: false },*/
/*             { name: title, url: url('admin_manufacturer_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if manufacturer.id %}*/
/*         {{ render(url('admin_manufacturer_edit_component', { id: manufacturer.id })) }}*/
/*     {% else %}*/
/*         {{ render(url('admin_manufacturer_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
