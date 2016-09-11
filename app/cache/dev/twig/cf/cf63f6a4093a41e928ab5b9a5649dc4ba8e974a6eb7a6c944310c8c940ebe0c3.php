<?php

/* AdminPageBundle:Page:edit.html.twig */
class __TwigTemplate_458eb4d212f25f1d72952a3573ec420356df12176ae1d67a6873c1fdb78e8aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPageBundle:Page:edit.html.twig", 1);
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
        $__internal_31f7840df3ac0e6ae64b06f726384c137e59b96352ccc6262b994c2f5ff14b09 = $this->env->getExtension("native_profiler");
        $__internal_31f7840df3ac0e6ae64b06f726384c137e59b96352ccc6262b994c2f5ff14b09->enter($__internal_31f7840df3ac0e6ae64b06f726384c137e59b96352ccc6262b994c2f5ff14b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Page:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "page");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f7840df3ac0e6ae64b06f726384c137e59b96352ccc6262b994c2f5ff14b09->leave($__internal_31f7840df3ac0e6ae64b06f726384c137e59b96352ccc6262b994c2f5ff14b09_prof);

    }

    // line 9
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_85c828cf2f0ef154b22a9c02f04084de644ff416f16320d94252174bf49bab7d = $this->env->getExtension("native_profiler");
        $__internal_85c828cf2f0ef154b22a9c02f04084de644ff416f16320d94252174bf49bab7d->enter($__internal_85c828cf2f0ef154b22a9c02f04084de644ff416f16320d94252174bf49bab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 10
        echo "
    ";
        // line 11
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()) > 0)) {
            // line 12
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi.route.page_render", array("id" => $this->getAttribute(            // line 13
(isset($context["page"]) ? $context["page"] : null), "id", array()), "path" => $this->getAttribute(            // line 14
(isset($context["page"]) ? $context["page"] : null), "path", array()))), "html", null, true);
            // line 15
            echo "\" class=\"button-primary\">
            <i class=\"icon-eye\"></i>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.in_store"), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 20
        echo "
";
        
        $__internal_85c828cf2f0ef154b22a9c02f04084de644ff416f16320d94252174bf49bab7d->leave($__internal_85c828cf2f0ef154b22a9c02f04084de644ff416f16320d94252174bf49bab7d_prof);

    }

    // line 24
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b96584cf900453f76236efc589d044fa956e608297fe180890f28a166b92629c = $this->env->getExtension("native_profiler");
        $__internal_b96584cf900453f76236efc589d044fa956e608297fe180890f28a166b92629c->enter($__internal_b96584cf900453f76236efc589d044fa956e608297fe180890f28a166b92629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 25
        echo "
    ";
        // line 26
        $context["title"] = $this->env->getExtension('translator')->trans("admin.page.plural");
        // line 27
        echo "    ";
        // line 28
        $context["header"] = (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.page.edit", array("%name%" => $this->getAttribute(        // line 29
(isset($context["page"]) ? $context["page"] : null), "title", array())))) : ($this->env->getExtension('translator')->trans("admin.page.new")));
        // line 32
        echo "
    ";
        // line 33
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPageBundle:Page:edit.html.twig", 33)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.communication.single"), "active" => false), 1 => array("name" =>         // line 36
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_page_list")), 2 => array("name" =>         // line 37
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 40
        echo "
";
        
        $__internal_b96584cf900453f76236efc589d044fa956e608297fe180890f28a166b92629c->leave($__internal_b96584cf900453f76236efc589d044fa956e608297fe180890f28a166b92629c_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc7c244b2362c9a03daa6a1be3a3fa3d911213357b9ab074a073c5e1ab3634b8 = $this->env->getExtension("native_profiler");
        $__internal_dc7c244b2362c9a03daa6a1be3a3fa3d911213357b9ab074a073c5e1ab3634b8->enter($__internal_dc7c244b2362c9a03daa6a1be3a3fa3d911213357b9ab074a073c5e1ab3634b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
    ";
        // line 46
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array())) {
            // line 47
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_page_edit_component", array("id" => $this->getAttribute(            // line 49
(isset($context["page"]) ? $context["page"] : null), "id", array()))));
            // line 51
            echo "
    ";
        } else {
            // line 53
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_page_new_component"));
            echo "
    ";
        }
        // line 55
        echo "
";
        
        $__internal_dc7c244b2362c9a03daa6a1be3a3fa3d911213357b9ab074a073c5e1ab3634b8->leave($__internal_dc7c244b2362c9a03daa6a1be3a3fa3d911213357b9ab074a073c5e1ab3634b8_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  123 => 53,  119 => 51,  117 => 49,  115 => 47,  113 => 46,  110 => 45,  104 => 44,  96 => 40,  94 => 37,  93 => 36,  92 => 33,  89 => 32,  87 => 29,  86 => 28,  84 => 27,  82 => 26,  79 => 25,  73 => 24,  65 => 20,  59 => 17,  55 => 15,  53 => 14,  52 => 13,  50 => 12,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'page',*/
/* } %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     {% if page.id > 0 %}*/
/*         <a target="_blank" href="{{ url('elcodi.route.page_render', {*/
/*             id: page.id,*/
/*             path: page.path*/
/*         }) }}" class="button-primary">*/
/*             <i class="icon-eye"></i>*/
/*             <span>{{ 'admin.page.in_store'|trans }}</span>*/
/*         </a>*/
/*     {% endif %}*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.page.plural'|trans %}*/
/*     {%*/
/*         set header = page.id*/
/*             ? 'admin.page.edit'|trans({ '%name%': page.title })*/
/*             : 'admin.page.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.communication.single'|trans, active: false },*/
/*             { name: title, url: url('admin_page_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if page.id %}*/
/*         {{*/
/*             render(url('admin_page_edit_component', {*/
/*                 id: page.id,*/
/*             }))*/
/*         }}*/
/*     {% else %}*/
/*         {{ render(url('admin_page_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
