<?php

/* AdminPluginBundle:Plugin:list.html.twig */
class __TwigTemplate_c4aea1e941835c0dcb8439468e7c5d05def85303f6bad03b8a1ffcd562b473b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPluginBundle:Plugin:list.html.twig", 1);
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
        $__internal_df4d85fe3a7f846d590cc0fad7e0b81a9580ebaf3e6311f671bec4d44977702e = $this->env->getExtension("native_profiler");
        $__internal_df4d85fe3a7f846d590cc0fad7e0b81a9580ebaf3e6311f671bec4d44977702e->enter($__internal_df4d85fe3a7f846d590cc0fad7e0b81a9580ebaf3e6311f671bec4d44977702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPluginBundle:Plugin:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "plugin");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4d85fe3a7f846d590cc0fad7e0b81a9580ebaf3e6311f671bec4d44977702e->leave($__internal_df4d85fe3a7f846d590cc0fad7e0b81a9580ebaf3e6311f671bec4d44977702e_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d58aebb73cec6ec77123aeaab0c7d3f74757b4fa32d0e3a942b516d282a925f5 = $this->env->getExtension("native_profiler");
        $__internal_d58aebb73cec6ec77123aeaab0c7d3f74757b4fa32d0e3a942b516d282a925f5->enter($__internal_d58aebb73cec6ec77123aeaab0c7d3f74757b4fa32d0e3a942b516d282a925f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 12
            echo "
        ";
            // line 13
            $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPluginBundle:Plugin:list.html.twig", 13)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.plugin.plural"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans(("plugin_type." .             // line 16
(isset($context["category"]) ? $context["category"] : null))), "active" => true)))));
            // line 19
            echo "
    ";
        } else {
            // line 21
            echo "
        ";
            // line 22
            $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPluginBundle:Plugin:list.html.twig", 22)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.plugin.plural"), "active" => true)))));
            // line 27
            echo "
    ";
        }
        // line 29
        echo "
";
        
        $__internal_d58aebb73cec6ec77123aeaab0c7d3f74757b4fa32d0e3a942b516d282a925f5->leave($__internal_d58aebb73cec6ec77123aeaab0c7d3f74757b4fa32d0e3a942b516d282a925f5_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_c036041a64d6fc5d373ee9c823b3a06a2f84d0095935c71c02208d63c456e16e = $this->env->getExtension("native_profiler");
        $__internal_c036041a64d6fc5d373ee9c823b3a06a2f84d0095935c71c02208d63c456e16e->enter($__internal_c036041a64d6fc5d373ee9c823b3a06a2f84d0095935c71c02208d63c456e16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "
    <form class=\"form-grid form-grid-has-settings form-save-on-edit\" data-fc-modules=\"form-save-on-edit\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            if ($this->getAttribute($context["plugin"], "getConfigurationValue", array(0 => "visible"), "method")) {
                // line 37
                echo "
            ";
                // line 38
                $context["pluginName"] = $this->env->getExtension('translator')->trans($this->getAttribute($context["plugin"], "getConfigurationValue", array(0 => "name"), "method"));
                // line 39
                echo "            ";
                $context["pluginDescription"] = strip_tags($this->env->getExtension('translator')->trans($this->getAttribute($context["plugin"], "getConfigurationValue", array(0 => "description"), "method")));
                // line 40
                echo "            ";
                $context["assetPath"] = ("bundles/" . twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["plugin"], "bundleName", array()), array("Bundle" => ""))));
                // line 41
                echo "            ";
                $context["iconPath"] = $this->env->getExtension('asset')->getAssetUrl(((isset($context["assetPath"]) ? $context["assetPath"] : null) . "/images/icon.png"));
                // line 42
                echo "
            <article class=\"box-background\">
                <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["iconPath"]) ? $context["iconPath"] : null), "html", null, true);
                echo "\" class=\"form-grid-background\" />
                <div class=\"box-none pa-n mb-n\">
                    <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["iconPath"]) ? $context["iconPath"] : null), "html", null, true);
                echo "\" width=\"50\" class=\"form-grid-icon\" />
                    <h4 class=\"fw-n\">";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["pluginName"]) ? $context["pluginName"] : null)), "html", null, true);
                echo "</h4>
                    <p data-fc-modules=\"truncate\" data-fc-max=\"100\" data-fc-more=\"+\" data-fc-less=\"-\">
                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["pluginDescription"]) ? $context["pluginDescription"] : null)), "html", null, true);
                echo "
                    </p>
                    <input type=\"hidden\" id=\"url-enable-plugin-";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "hash", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_plugin_enable", array("pluginHash" => $this->getAttribute($context["plugin"], "hash", array()))), "html", null, true);
                echo "\" />
                </div>
                <div class=\"form-grid-settings\">
                    ";
                // line 54
                if ($this->getAttribute($context["plugin"], "hasFields", array(), "method")) {
                    // line 55
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_plugin_configure", array("pluginHash" => $this->getAttribute($context["plugin"], "hash", array()))), "html", null, true);
                    echo "\" class=\"button icon-cogs\">
                            ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.plugin.section.settings"), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 59
                echo "                    <div class=\"fl-r pt-s\">
                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.plugin.field.visibility"), "html", null, true);
                echo "
                        <div class=\"switch\">
                            <input type=\"checkbox\" id=\"enable-plugin-";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "hash", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["plugin"], "enabled", array())) {
                    echo " checked=\"checked\"";
                }
                echo " />
                            <label for=\"enable-plugin-";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "hash", array()), "html", null, true);
                echo "\" class=\"mr-n\"></label>
                        </div>
                    </div>
                </div>
            </article>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </form>

";
        
        $__internal_c036041a64d6fc5d373ee9c823b3a06a2f84d0095935c71c02208d63c456e16e->leave($__internal_c036041a64d6fc5d373ee9c823b3a06a2f84d0095935c71c02208d63c456e16e_prof);

    }

    public function getTemplateName()
    {
        return "AdminPluginBundle:Plugin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 69,  165 => 63,  157 => 62,  152 => 60,  149 => 59,  143 => 56,  138 => 55,  136 => 54,  128 => 51,  123 => 49,  118 => 47,  114 => 46,  109 => 44,  105 => 42,  102 => 41,  99 => 40,  96 => 39,  94 => 38,  91 => 37,  86 => 36,  82 => 34,  76 => 33,  68 => 29,  64 => 27,  62 => 22,  59 => 21,  55 => 19,  53 => 16,  52 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
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
/* {% block breadcrumb %}*/
/* */
/*     {% if category %}*/
/* */
/*         {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*             breadcrumb: [*/
/*                 { name: 'admin.plugin.plural'|trans, active: false },*/
/*                 { name: "plugin_type.#{category}"|trans, active: true },*/
/*             ]*/
/*         } %}*/
/* */
/*     {% else %}*/
/* */
/*         {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*             breadcrumb: [*/
/*                 { name: 'admin.plugin.plural'|trans, active: true },*/
/*             ]*/
/*         } %}*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <form class="form-grid form-grid-has-settings form-save-on-edit" data-fc-modules="form-save-on-edit">*/
/*         {% for plugin in plugins if plugin.getConfigurationValue('visible') %}*/
/* */
/*             {% set pluginName = plugin.getConfigurationValue('name')|trans %}*/
/*             {% set pluginDescription = plugin.getConfigurationValue('description')|trans|striptags %}*/
/*             {% set assetPath = 'bundles/' ~ plugin.bundleName|replace({'Bundle': ''})|lower %}*/
/*             {% set iconPath = asset(assetPath ~ '/images/icon.png') %}*/
/* */
/*             <article class="box-background">*/
/*                 <img src="{{ iconPath }}" class="form-grid-background" />*/
/*                 <div class="box-none pa-n mb-n">*/
/*                     <img src="{{ iconPath }}" width="50" class="form-grid-icon" />*/
/*                     <h4 class="fw-n">{{ pluginName|trans }}</h4>*/
/*                     <p data-fc-modules="truncate" data-fc-max="100" data-fc-more="+" data-fc-less="-">*/
/*                         {{ pluginDescription|trans }}*/
/*                     </p>*/
/*                     <input type="hidden" id="url-enable-plugin-{{ plugin.hash }}" value="{{ url('admin_plugin_enable', { pluginHash: plugin.hash }) }}" />*/
/*                 </div>*/
/*                 <div class="form-grid-settings">*/
/*                     {% if plugin.hasFields() %}*/
/*                         <a href="{{ url('admin_plugin_configure', { pluginHash: plugin.hash }) }}" class="button icon-cogs">*/
/*                             {{ 'admin.plugin.section.settings'|trans }}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     <div class="fl-r pt-s">*/
/*                         {{ 'admin.plugin.field.visibility'|trans }}*/
/*                         <div class="switch">*/
/*                             <input type="checkbox" id="enable-plugin-{{ plugin.hash }}"{% if plugin.enabled %} checked="checked"{% endif %} />*/
/*                             <label for="enable-plugin-{{ plugin.hash }}" class="mr-n"></label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </article>*/
/*         {% endfor %}*/
/*     </form>*/
/* */
/* {% endblock content %}*/
/* */
