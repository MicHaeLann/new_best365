<?php

/* AdminProductBundle:Manufacturer:list.html.twig */
class __TwigTemplate_897605d43341906037b19c4f8a21290d62abbff9b6955f79ca9191b697554c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Manufacturer:list.html.twig", 1);
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
        $__internal_696fd84ea15875c25b1f3cfd6f604c96496e6160ffa15e0ead5106a24ec8d01a = $this->env->getExtension("native_profiler");
        $__internal_696fd84ea15875c25b1f3cfd6f604c96496e6160ffa15e0ead5106a24ec8d01a->enter($__internal_696fd84ea15875c25b1f3cfd6f604c96496e6160ffa15e0ead5106a24ec8d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Manufacturer:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "manufacturer");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_696fd84ea15875c25b1f3cfd6f604c96496e6160ffa15e0ead5106a24ec8d01a->leave($__internal_696fd84ea15875c25b1f3cfd6f604c96496e6160ffa15e0ead5106a24ec8d01a_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f9661b1fecc329776c8cc6fb55248b796ebbf1388d2b6e2743d818bf655f5495 = $this->env->getExtension("native_profiler");
        $__internal_f9661b1fecc329776c8cc6fb55248b796ebbf1388d2b6e2743d818bf655f5495->enter($__internal_f9661b1fecc329776c8cc6fb55248b796ebbf1388d2b6e2743d818bf655f5495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Manufacturer:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.categorization.single"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.manufacturer.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_f9661b1fecc329776c8cc6fb55248b796ebbf1388d2b6e2743d818bf655f5495->leave($__internal_f9661b1fecc329776c8cc6fb55248b796ebbf1388d2b6e2743d818bf655f5495_prof);

    }

    // line 21
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_035b77e9d6cebd5702822a616ecfacafbec6fa73a9fe7befc93c58d01bc09b07 = $this->env->getExtension("native_profiler");
        $__internal_035b77e9d6cebd5702822a616ecfacafbec6fa73a9fe7befc93c58d01bc09b07->enter($__internal_035b77e9d6cebd5702822a616ecfacafbec6fa73a9fe7befc93c58d01bc09b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_manufacturer_new");
        echo "\" class=\"button-primary\" data-test=\"new-manufacturer\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_035b77e9d6cebd5702822a616ecfacafbec6fa73a9fe7befc93c58d01bc09b07->leave($__internal_035b77e9d6cebd5702822a616ecfacafbec6fa73a9fe7befc93c58d01bc09b07_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e9391defb82c145f3503db7ad048be20d95c5388b73bef42a31e97535892f6d = $this->env->getExtension("native_profiler");
        $__internal_2e9391defb82c145f3503db7ad048be20d95c5388b73bef42a31e97535892f6d->enter($__internal_2e9391defb82c145f3503db7ad048be20d95c5388b73bef42a31e97535892f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_manufacturer_list_component", array("page" =>         // line 35
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 36
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 37
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 38
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 40
        echo "

";
        
        $__internal_2e9391defb82c145f3503db7ad048be20d95c5388b73bef42a31e97535892f6d->leave($__internal_2e9391defb82c145f3503db7ad048be20d95c5388b73bef42a31e97535892f6d_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Manufacturer:list.html.twig";
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
/*     entity_type: 'manufacturer',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.categorization.single'|trans, active: false },*/
/*             { name: 'admin.manufacturer.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_manufacturer_new') }}" class="button-primary" data-test="new-manufacturer">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.manufacturer.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_manufacturer_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection,*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
