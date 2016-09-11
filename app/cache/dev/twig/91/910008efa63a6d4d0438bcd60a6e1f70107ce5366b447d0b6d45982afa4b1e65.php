<?php

/* AdminUserBundle:AdminUser:listComponent.html.twig */
class __TwigTemplate_cc6c34e8088cb2c1183440793c09828ee2b1d16cecdda156a46f80df4d67f561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminUserBundle:AdminUser:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_9e160bd4b20206fa831d24ec5aeeddcdc0ad65915530cdf0507a76a1dbd77366 = $this->env->getExtension("native_profiler");
        $__internal_9e160bd4b20206fa831d24ec5aeeddcdc0ad65915530cdf0507a76a1dbd77366->enter($__internal_9e160bd4b20206fa831d24ec5aeeddcdc0ad65915530cdf0507a76a1dbd77366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:AdminUser:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "admin_user");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e160bd4b20206fa831d24ec5aeeddcdc0ad65915530cdf0507a76a1dbd77366->leave($__internal_9e160bd4b20206fa831d24ec5aeeddcdc0ad65915530cdf0507a76a1dbd77366_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_144e90b4b77584dd2c463ba145b769894cb76348d7fc275e3fdd72473266313a = $this->env->getExtension("native_profiler");
        $__internal_144e90b4b77584dd2c463ba145b769894cb76348d7fc275e3fdd72473266313a->enter($__internal_144e90b4b77584dd2c463ba145b769894cb76348d7fc275e3fdd72473266313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.list"), "html", null, true);
        
        $__internal_144e90b4b77584dd2c463ba145b769894cb76348d7fc275e3fdd72473266313a->leave($__internal_144e90b4b77584dd2c463ba145b769894cb76348d7fc275e3fdd72473266313a_prof);

    }

    // line 12
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_b8c60c723265e4294ee3002df44beab31457405fcef054756611b6c539c7e4cd = $this->env->getExtension("native_profiler");
        $__internal_b8c60c723265e4294ee3002df44beab31457405fcef054756611b6c539c7e4cd->enter($__internal_b8c60c723265e4294ee3002df44beab31457405fcef054756611b6c539c7e4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminUserBundle:AdminUser:listComponent.html.twig", 14)->display(array_merge($context, array("class" => "admin_user", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.username.title")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.fullname.title")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.email.title")), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.enabled.title"), "width" => 10)))));
        // line 23
        echo "
";
        
        $__internal_b8c60c723265e4294ee3002df44beab31457405fcef054756611b6c539c7e4cd->leave($__internal_b8c60c723265e4294ee3002df44beab31457405fcef054756611b6c539c7e4cd_prof);

    }

    // line 27
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_9e0b8c1506a35228b90e5dbbdfae8fbdaa50bfb83ac9c49f1f59f246a7c9439f = $this->env->getExtension("native_profiler");
        $__internal_9e0b8c1506a35228b90e5dbbdfae8fbdaa50bfb83ac9c49f1f59f246a7c9439f->enter($__internal_9e0b8c1506a35228b90e5dbbdfae8fbdaa50bfb83ac9c49f1f59f246a7c9439f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 28
        echo "    <td>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username", array()), "html", null, true);
        echo "</strong>
        </a>
    </td>
    <td>
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fullname", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 40
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 41
            echo "            <span class=\"label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.user.field.enabled.options.active"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 43
            echo "            <span class=\"label-ko\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.user.field.enabled.options.inactive"), "html", null, true);
            echo "</span>
        ";
        }
        // line 45
        echo "    </td>

";
        
        $__internal_9e0b8c1506a35228b90e5dbbdfae8fbdaa50bfb83ac9c49f1f59f246a7c9439f->leave($__internal_9e0b8c1506a35228b90e5dbbdfae8fbdaa50bfb83ac9c49f1f59f246a7c9439f_prof);

    }

    // line 50
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_a6113d434acd6a28290caacde4b10f460719c6e1339bc9b511a52577a606b341 = $this->env->getExtension("native_profiler");
        $__internal_a6113d434acd6a28290caacde4b10f460719c6e1339bc9b511a52577a606b341->enter($__internal_a6113d434acd6a28290caacde4b10f460719c6e1339bc9b511a52577a606b341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 51
        echo "
    ";
        // line 52
        $context["url"] = "admin_admin_user_list";
        // line 53
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_a6113d434acd6a28290caacde4b10f460719c6e1339bc9b511a52577a606b341->leave($__internal_a6113d434acd6a28290caacde4b10f460719c6e1339bc9b511a52577a606b341_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:AdminUser:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  135 => 52,  132 => 51,  126 => 50,  117 => 45,  111 => 43,  105 => 41,  103 => 40,  97 => 37,  91 => 34,  84 => 30,  80 => 29,  77 => 28,  71 => 27,  63 => 23,  61 => 14,  58 => 13,  52 => 12,  40 => 9,  33 => 1,  31 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'admin_user',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.admin_user.list'|trans %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'admin_user',*/
/*         rows: [*/
/*             { name: 'admin.user.field.username.title'|trans, },*/
/*             { name: 'admin.user.field.fullname.title'|trans, },*/
/*             { name: 'admin.user.field.email.title'|trans, },*/
/*             { name: 'admin.user.field.enabled.title'|trans, width: 10 },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/*     <td>*/
/*         <a href="{{ url('admin_admin_user_edit', { id: entity.id }) }}">*/
/*             <strong>{{ entity.username }}</strong>*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.fullname }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.email }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label-ok">{{ 'admin.user.field.enabled.options.active'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label-ko">{{ 'admin.user.field.enabled.options.inactive'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_admin_user_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
