<?php

/* AdminLanguageBundle:Language/Component:listComponent.html.twig */
class __TwigTemplate_e68065ce9498a49582d101be89a87a7f9d5aee6debe72a209b5fa1149b57c8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminLanguageBundle:Language/Component:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'table_attributes' => array($this, 'block_table_attributes'),
            'table_head' => array($this, 'block_table_head'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_paginator_links' => array($this, 'block_table_paginator_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f85743a002db2e1c5d23fb6c798dd27a139ff23be64424071824e200486de3b9 = $this->env->getExtension("native_profiler");
        $__internal_f85743a002db2e1c5d23fb6c798dd27a139ff23be64424071824e200486de3b9->enter($__internal_f85743a002db2e1c5d23fb6c798dd27a139ff23be64424071824e200486de3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLanguageBundle:Language/Component:listComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85743a002db2e1c5d23fb6c798dd27a139ff23be64424071824e200486de3b9->leave($__internal_f85743a002db2e1c5d23fb6c798dd27a139ff23be64424071824e200486de3b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_13670695ea45a7d471772a67c8da888be220dd8f91cf60ab15c07257d046e5f7 = $this->env->getExtension("native_profiler");
        $__internal_13670695ea45a7d471772a67c8da888be220dd8f91cf60ab15c07257d046e5f7->enter($__internal_13670695ea45a7d471772a67c8da888be220dd8f91cf60ab15c07257d046e5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Language list"), "html", null, true);
        echo "
";
        
        $__internal_13670695ea45a7d471772a67c8da888be220dd8f91cf60ab15c07257d046e5f7->leave($__internal_13670695ea45a7d471772a67c8da888be220dd8f91cf60ab15c07257d046e5f7_prof);

    }

    // line 8
    public function block_table_attributes($context, array $blocks = array())
    {
        $__internal_0df65e2faa7f1318ad5038aff4cd4d8d16f601d674bb5cdc73479684478e2464 = $this->env->getExtension("native_profiler");
        $__internal_0df65e2faa7f1318ad5038aff4cd4d8d16f601d674bb5cdc73479684478e2464->enter($__internal_0df65e2faa7f1318ad5038aff4cd4d8d16f601d674bb5cdc73479684478e2464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_attributes"));

        echo "data-fc-modules=\"table,on-off-table\"";
        
        $__internal_0df65e2faa7f1318ad5038aff4cd4d8d16f601d674bb5cdc73479684478e2464->leave($__internal_0df65e2faa7f1318ad5038aff4cd4d8d16f601d674bb5cdc73479684478e2464_prof);

    }

    // line 10
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_a577549d39bbd10cf27addbe1a362ebb54f761a6728ce290252c2ccb5a99e7ce = $this->env->getExtension("native_profiler");
        $__internal_a577549d39bbd10cf27addbe1a362ebb54f761a6728ce290252c2ccb5a99e7ce->enter($__internal_a577549d39bbd10cf27addbe1a362ebb54f761a6728ce290252c2ccb5a99e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminLanguageBundle:Language/Component:listComponent.html.twig", 12)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.language.field.iso"), "width" => 10), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.language.single")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.language.field.master"), "width" => 15), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.language.field.status"), "width" => 15)), "class" => "language", "actions" => false)));
        // line 22
        echo "
";
        
        $__internal_a577549d39bbd10cf27addbe1a362ebb54f761a6728ce290252c2ccb5a99e7ce->leave($__internal_a577549d39bbd10cf27addbe1a362ebb54f761a6728ce290252c2ccb5a99e7ce_prof);

    }

    // line 26
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_0fd6cf7e41509562dfb3f9950002868c8101b1243da95bab16097380e70520ee = $this->env->getExtension("native_profiler");
        $__internal_0fd6cf7e41509562dfb3f9950002868c8101b1243da95bab16097380e70520ee->enter($__internal_0fd6cf7e41509562dfb3f9950002868c8101b1243da95bab16097380e70520ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 27
        echo "
    <td>
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "
    </td>
    <td>
        <div class=\"switch\">
            <input id=\"enable-";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "-master\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_language_master", array("iso" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()))), "html", null, true);
        echo "\" />
            <input id=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "-master\" name=\"language-master\" type=\"radio\" ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()) == $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "defaultLanguage", array()))) {
            echo "checked=\"checked\"";
        }
        echo " />
            <label for=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "-master\"></label>
        </div>
    </td>
    <td>
        <div class=\"switch\">
            <input id=\"enable-";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_language_enable", array("iso" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()))), "html", null, true);
        echo "\" />
            <input id=\"disable-";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_language_disable", array("iso" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()))), "html", null, true);
        echo "\" />
            <input id=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            <label for=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\"></label>
        </div>
    </td>

";
        
        $__internal_0fd6cf7e41509562dfb3f9950002868c8101b1243da95bab16097380e70520ee->leave($__internal_0fd6cf7e41509562dfb3f9950002868c8101b1243da95bab16097380e70520ee_prof);

    }

    // line 53
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_d7091c82373511701228b81cca6c53984650d600fd22ac77d916a18bdeab9579 = $this->env->getExtension("native_profiler");
        $__internal_d7091c82373511701228b81cca6c53984650d600fd22ac77d916a18bdeab9579->enter($__internal_d7091c82373511701228b81cca6c53984650d600fd22ac77d916a18bdeab9579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        echo "";
        
        $__internal_d7091c82373511701228b81cca6c53984650d600fd22ac77d916a18bdeab9579->leave($__internal_d7091c82373511701228b81cca6c53984650d600fd22ac77d916a18bdeab9579_prof);

    }

    public function getTemplateName()
    {
        return "AdminLanguageBundle:Language/Component:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  150 => 46,  142 => 45,  136 => 44,  130 => 43,  122 => 38,  114 => 37,  108 => 36,  101 => 32,  95 => 29,  91 => 27,  85 => 26,  77 => 22,  75 => 12,  72 => 11,  66 => 10,  54 => 8,  44 => 5,  38 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% block title %}*/
/*     {{ 'Language list'|trans }}*/
/* {% endblock title %}*/
/* */
/* {% block table_attributes 'data-fc-modules="table,on-off-table"' %}*/
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.language.field.iso'|trans, width: 10 },*/
/*             { name: 'admin.language.single'|trans },*/
/*             { name: 'admin.language.field.master'|trans, width: 15 },*/
/*             { name: 'admin.language.field.status'|trans, width: 15 },*/
/*         ],*/
/*         class: 'language',*/
/*         actions: false*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         {{ entity.iso }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.name }}*/
/*     </td>*/
/*     <td>*/
/*         <div class="switch">*/
/*             <input id="enable-{{ entity.iso }}-master" type="hidden" value="{{ url('admin_language_master', { iso: entity.iso }) }}" />*/
/*             <input id="{{ entity.iso }}-master" name="language-master" type="radio" {% if entity.iso ==  store.defaultLanguage %}checked="checked"{% endif %} />*/
/*             <label for="{{ entity.iso }}-master"></label>*/
/*         </div>*/
/*     </td>*/
/*     <td>*/
/*         <div class="switch">*/
/*             <input id="enable-{{ entity.iso }}" type="hidden" value="{{ url('admin_language_enable', { iso: entity.iso }) }}" />*/
/*             <input id="disable-{{ entity.iso }}" type="hidden" value="{{ url('admin_language_disable', { iso: entity.iso }) }}" />*/
/*             <input id="{{ entity.iso }}" type="checkbox" {% if entity.enabled %}checked="checked"{% endif %} />*/
/*             <label for="{{ entity.iso }}"></label>*/
/*         </div>*/
/*     </td>*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links '' %}*/
/* */
