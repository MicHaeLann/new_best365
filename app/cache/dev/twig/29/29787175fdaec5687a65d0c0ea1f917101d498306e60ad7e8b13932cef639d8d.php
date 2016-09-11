<?php

/* AdminProductBundle:Pack:list.html.twig */
class __TwigTemplate_5d8e21a559ae755b2eac4d989aec93a289e6ce6854bb447058953190d29fffd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Pack:list.html.twig", 1);
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
        $__internal_124701351536fd843b1e4fafd3d413d2e18dcb985dfc3188cfad48a4d678916c = $this->env->getExtension("native_profiler");
        $__internal_124701351536fd843b1e4fafd3d413d2e18dcb985dfc3188cfad48a4d678916c->enter($__internal_124701351536fd843b1e4fafd3d413d2e18dcb985dfc3188cfad48a4d678916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Pack:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "purchasable_pack");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_124701351536fd843b1e4fafd3d413d2e18dcb985dfc3188cfad48a4d678916c->leave($__internal_124701351536fd843b1e4fafd3d413d2e18dcb985dfc3188cfad48a4d678916c_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dc1002a5faeff6348a8b7dd8e1152026f4ed19cc4c79fa072b34df1f9be701d9 = $this->env->getExtension("native_profiler");
        $__internal_dc1002a5faeff6348a8b7dd8e1152026f4ed19cc4c79fa072b34df1f9be701d9->enter($__internal_dc1002a5faeff6348a8b7dd8e1152026f4ed19cc4c79fa072b34df1f9be701d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Pack:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.purchasable_pack.plural"), "active" => true)))));
        // line 16
        echo "
";
        
        $__internal_dc1002a5faeff6348a8b7dd8e1152026f4ed19cc4c79fa072b34df1f9be701d9->leave($__internal_dc1002a5faeff6348a8b7dd8e1152026f4ed19cc4c79fa072b34df1f9be701d9_prof);

    }

    // line 20
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_5832db88fa37f2b7be098e51523ea54e2a7991ccfc45bb4b9d1da960c609ac3e = $this->env->getExtension("native_profiler");
        $__internal_5832db88fa37f2b7be098e51523ea54e2a7991ccfc45bb4b9d1da960c609ac3e->enter($__internal_5832db88fa37f2b7be098e51523ea54e2a7991ccfc45bb4b9d1da960c609ac3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 21
        echo "
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_purchasable_pack_new");
        echo "\" type=\"button\" class=\"button-primary\" data-test=\"new-purchasable-pack\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_5832db88fa37f2b7be098e51523ea54e2a7991ccfc45bb4b9d1da960c609ac3e->leave($__internal_5832db88fa37f2b7be098e51523ea54e2a7991ccfc45bb4b9d1da960c609ac3e_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd71d7325fd9ce67e2aa6076e63cedf84b9fed8dc9fbe9f593a9c232ab171eba = $this->env->getExtension("native_profiler");
        $__internal_fd71d7325fd9ce67e2aa6076e63cedf84b9fed8dc9fbe9f593a9c232ab171eba->enter($__internal_fd71d7325fd9ce67e2aa6076e63cedf84b9fed8dc9fbe9f593a9c232ab171eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "
    ";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_purchasable_pack_list_component", array("page" =>         // line 34
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 35
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 36
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 37
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 39
        echo "

";
        
        $__internal_fd71d7325fd9ce67e2aa6076e63cedf84b9fed8dc9fbe9f593a9c232ab171eba->leave($__internal_fd71d7325fd9ce67e2aa6076e63cedf84b9fed8dc9fbe9f593a9c232ab171eba_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Pack:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  96 => 37,  95 => 36,  94 => 35,  93 => 34,  92 => 32,  89 => 31,  83 => 30,  72 => 24,  67 => 22,  64 => 21,  58 => 20,  50 => 16,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'purchasable_pack'*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.purchasable_pack.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_purchasable_pack_new') }}" type="button" class="button-primary" data-test="new-purchasable-pack">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.purchasable_pack.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_purchasable_pack_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
