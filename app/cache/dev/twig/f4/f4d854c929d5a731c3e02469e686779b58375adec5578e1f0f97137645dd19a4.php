<?php

/* AdminCouponBundle:Coupon:listComponent.html.twig */
class __TwigTemplate_54bddb0a4c2b0e27a213ddffdf493847009292a00da5c1e27d47f55e01e87f21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminCouponBundle:Coupon:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'no_items' => array($this, 'block_no_items'),
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
        $__internal_fe83e3f52b9bd07a4e5fd216f1f491e3365b295b045cdee3215b23ebfdbbee60 = $this->env->getExtension("native_profiler");
        $__internal_fe83e3f52b9bd07a4e5fd216f1f491e3365b295b045cdee3215b23ebfdbbee60->enter($__internal_fe83e3f52b9bd07a4e5fd216f1f491e3365b295b045cdee3215b23ebfdbbee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCouponBundle:Coupon:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "coupon");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe83e3f52b9bd07a4e5fd216f1f491e3365b295b045cdee3215b23ebfdbbee60->leave($__internal_fe83e3f52b9bd07a4e5fd216f1f491e3365b295b045cdee3215b23ebfdbbee60_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f892b1f5e9d575ab552ac8626ebf8ce001a86f69c1c17c42023ae4068ce94ae5 = $this->env->getExtension("native_profiler");
        $__internal_f892b1f5e9d575ab552ac8626ebf8ce001a86f69c1c17c42023ae4068ce94ae5->enter($__internal_f892b1f5e9d575ab552ac8626ebf8ce001a86f69c1c17c42023ae4068ce94ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.list"), "html", null, true);
        
        $__internal_f892b1f5e9d575ab552ac8626ebf8ce001a86f69c1c17c42023ae4068ce94ae5->leave($__internal_f892b1f5e9d575ab552ac8626ebf8ce001a86f69c1c17c42023ae4068ce94ae5_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_11e68ddb7b825d8b7db15ae3ac49a5cc8a00092a4c4a58fbc99bdac5fad1e7e1 = $this->env->getExtension("native_profiler");
        $__internal_11e68ddb7b825d8b7db15ae3ac49a5cc8a00092a4c4a58fbc99bdac5fad1e7e1->enter($__internal_11e68ddb7b825d8b7db15ae3ac49a5cc8a00092a4c4a58fbc99bdac5fad1e7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.coupon.single"), 1 => $this->env->getExtension('translator')->trans("admin.coupon.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_coupon_new")), "method"), "html", null, true);
        
        $__internal_11e68ddb7b825d8b7db15ae3ac49a5cc8a00092a4c4a58fbc99bdac5fad1e7e1->leave($__internal_11e68ddb7b825d8b7db15ae3ac49a5cc8a00092a4c4a58fbc99bdac5fad1e7e1_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_559555f6d25d6ce193f5bf949ade2d1b4ccf8c8500acdd43a1a0df093cf21f73 = $this->env->getExtension("native_profiler");
        $__internal_559555f6d25d6ce193f5bf949ade2d1b4ccf8c8500acdd43a1a0df093cf21f73->enter($__internal_559555f6d25d6ce193f5bf949ade2d1b4ccf8c8500acdd43a1a0df093cf21f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminCouponBundle:Coupon:listComponent.html.twig", 23)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.coupon.field.code.title")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.coupon.field.description.title"), "width" => 40), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.coupon.field.rule.title"), "width" => 20), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.coupon.field.status.title"), "width" => 10)), "class" => "coupon")));
        // line 32
        echo "
";
        
        $__internal_559555f6d25d6ce193f5bf949ade2d1b4ccf8c8500acdd43a1a0df093cf21f73->leave($__internal_559555f6d25d6ce193f5bf949ade2d1b4ccf8c8500acdd43a1a0df093cf21f73_prof);

    }

    // line 36
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_001694f95320b60d9d2fb6549e724a276b307f55f9eed6ae0ceb0022bde3fe8f = $this->env->getExtension("native_profiler");
        $__internal_001694f95320b60d9d2fb6549e724a276b307f55f9eed6ae0ceb0022bde3fe8f->enter($__internal_001694f95320b60d9d2fb6549e724a276b307f55f9eed6ae0ceb0022bde3fe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 37
        echo "
    <td>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_coupon_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "code", array()), "html", null, true);
        echo "</strong>
        </a>
    </td>
    <td>
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 47
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rule", array())) {
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rule", array()), "name", array()), "html", null, true);
            echo "
        ";
        } else {
            // line 50
            echo "            -
        ";
        }
        // line 52
        echo "    </td>
    <td>
        ";
        // line 54
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 55
            echo "            <span class=\"label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.enabled"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 57
            echo "            <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.disabled"), "html", null, true);
            echo "</span>
        ";
        }
        // line 59
        echo "    </td>

    ";
        // line 61
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminCouponBundle:Coupon:listComponent.html.twig", 61)->display(array_merge($context, array("entity" =>         // line 62
(isset($context["entity"]) ? $context["entity"] : null), "class" => "coupon")));
        // line 65
        echo "
";
        
        $__internal_001694f95320b60d9d2fb6549e724a276b307f55f9eed6ae0ceb0022bde3fe8f->leave($__internal_001694f95320b60d9d2fb6549e724a276b307f55f9eed6ae0ceb0022bde3fe8f_prof);

    }

    // line 69
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_6d0ba4b02595cb38959a06895ce0ae7ac1d8f1440ce6946bb23ec1af329f0be7 = $this->env->getExtension("native_profiler");
        $__internal_6d0ba4b02595cb38959a06895ce0ae7ac1d8f1440ce6946bb23ec1af329f0be7->enter($__internal_6d0ba4b02595cb38959a06895ce0ae7ac1d8f1440ce6946bb23ec1af329f0be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 70
        echo "
    ";
        // line 71
        $context["url"] = "admin_coupon_list";
        // line 72
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_6d0ba4b02595cb38959a06895ce0ae7ac1d8f1440ce6946bb23ec1af329f0be7->leave($__internal_6d0ba4b02595cb38959a06895ce0ae7ac1d8f1440ce6946bb23ec1af329f0be7_prof);

    }

    public function getTemplateName()
    {
        return "AdminCouponBundle:Coupon:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 72,  166 => 71,  163 => 70,  157 => 69,  149 => 65,  147 => 62,  146 => 61,  142 => 59,  136 => 57,  130 => 55,  128 => 54,  124 => 52,  120 => 50,  114 => 48,  112 => 47,  106 => 44,  99 => 40,  95 => 39,  91 => 37,  85 => 36,  77 => 32,  75 => 23,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'coupon',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.coupon.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.coupon.single'|trans,*/
/*         'admin.coupon.plural'|trans,*/
/*         url('admin_coupon_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.coupon.field.code.title'|trans },*/
/*             { name: 'admin.coupon.field.description.title'|trans, width: 40 },*/
/*             { name: 'admin.coupon.field.rule.title'|trans, width: 20 },*/
/*             { name: 'admin.coupon.field.status.title'|trans, width: 10 },*/
/*         ],*/
/*         class: 'coupon',*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_coupon_edit', { id: entity.id }) }}">*/
/*             <strong>{{ entity.code }}</strong>*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.name }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.rule %}*/
/*             {{ entity.rule.name }}*/
/*         {% else %}*/
/*             -*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label-ok">{{ 'ui.label.enabled'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label">{{ 'ui.label.disabled'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'coupon',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_coupon_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
