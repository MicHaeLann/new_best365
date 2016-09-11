<?php

/* AdminPluginBundle:Plugin:configure.html.twig */
class __TwigTemplate_76c3be9dfcd98e73f1b17aa79281b06e0e9194b47f9192a01b1263558d7811cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPluginBundle:Plugin:configure.html.twig", 1);
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
        $__internal_ca5cd38faf0767ad88e85c715bfb4a2075f5a098db23794cbc5f1acea1927580 = $this->env->getExtension("native_profiler");
        $__internal_ca5cd38faf0767ad88e85c715bfb4a2075f5a098db23794cbc5f1acea1927580->enter($__internal_ca5cd38faf0767ad88e85c715bfb4a2075f5a098db23794cbc5f1acea1927580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPluginBundle:Plugin:configure.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "plugin");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields-plugins.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca5cd38faf0767ad88e85c715bfb4a2075f5a098db23794cbc5f1acea1927580->leave($__internal_ca5cd38faf0767ad88e85c715bfb4a2075f5a098db23794cbc5f1acea1927580_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d47cf36abe51e926990225aa74e5444d9048f871fa79dd315d160bd26fa8400a = $this->env->getExtension("native_profiler");
        $__internal_d47cf36abe51e926990225aa74e5444d9048f871fa79dd315d160bd26fa8400a->enter($__internal_d47cf36abe51e926990225aa74e5444d9048f871fa79dd315d160bd26fa8400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPluginBundle:Plugin:configure.html.twig", 14)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.plugin.plural"), "url" => $this->env->getExtension('routing')->getUrl("admin_plugin_list")), 1 => array("name" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 17
(isset($context["plugin"]) ? $context["plugin"] : null), "getConfigurationValue", array(0 => "name"), "method")), "active" => true)))));
        // line 20
        echo "
";
        
        $__internal_d47cf36abe51e926990225aa74e5444d9048f871fa79dd315d160bd26fa8400a->leave($__internal_d47cf36abe51e926990225aa74e5444d9048f871fa79dd315d160bd26fa8400a_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad639c69d660a899b6ffbd98a234101d2718cc97eebeb12b91f1d5dd3e69eb5c = $this->env->getExtension("native_profiler");
        $__internal_ad639c69d660a899b6ffbd98a234101d2718cc97eebeb12b91f1d5dd3e69eb5c->enter($__internal_ad639c69d660a899b6ffbd98a234101d2718cc97eebeb12b91f1d5dd3e69eb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    <div class=\"grid pb-xl\">
        <div class=\"col-1-3\">
            <img src=\"/bundles";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getBundleName", array(), "method"), array("Bundle" => ""))) . "/images/icon.png")), "html", null, true);
        echo "\" width=\"150\"/>
            <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getConfigurationValue", array(0 => "name"), "method")), "html", null, true);
        echo "</h2>
            <p>";
        // line 29
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getConfigurationValue", array(0 => "description"), "method"));
        echo "</p>

        </div>
        <div class=\"col-2-3\">
            <div class=\"box\">
                ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ad639c69d660a899b6ffbd98a234101d2718cc97eebeb12b91f1d5dd3e69eb5c->leave($__internal_ad639c69d660a899b6ffbd98a234101d2718cc97eebeb12b91f1d5dd3e69eb5c_prof);

    }

    public function getTemplateName()
    {
        return "AdminPluginBundle:Plugin:configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  78 => 29,  74 => 28,  70 => 27,  66 => 25,  60 => 24,  52 => 20,  50 => 17,  49 => 14,  46 => 13,  40 => 12,  33 => 1,  31 => 9,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'plugin',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields-plugins.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.plugin.plural'|trans, url:url('admin_plugin_list')  },*/
/*             { name: plugin.getConfigurationValue("name")|trans , active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/*     <div class="grid pb-xl">*/
/*         <div class="col-1-3">*/
/*             <img src="/bundles{{ asset(plugin.getBundleName()|replace({'Bundle': ''})|lower ~ "/images/icon.png") }}" width="150"/>*/
/*             <h2>{{ plugin.getConfigurationValue("name")|trans }}</h2>*/
/*             <p>{{ plugin.getConfigurationValue("description")|trans|raw }}</p>*/
/* */
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <div class="box">*/
/*                 {{ form(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
