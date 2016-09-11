<?php

/* AdminUserBundle:Customer:listComponent.html.twig */
class __TwigTemplate_56603fa1c9ff0f94b8d50d28eb66346cc83d63cad66359e0c10e70152c3255a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminUserBundle:Customer:listComponent.html.twig", 1);
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
        $__internal_56b027969f602ba18a16c06c714443c768b5c44b763c7925867185c25d2bd5f8 = $this->env->getExtension("native_profiler");
        $__internal_56b027969f602ba18a16c06c714443c768b5c44b763c7925867185c25d2bd5f8->enter($__internal_56b027969f602ba18a16c06c714443c768b5c44b763c7925867185c25d2bd5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Customer:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "customer");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b027969f602ba18a16c06c714443c768b5c44b763c7925867185c25d2bd5f8->leave($__internal_56b027969f602ba18a16c06c714443c768b5c44b763c7925867185c25d2bd5f8_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d30202157d216ed3f7ef4d85f1ab9bf3ac5da20345c440d76cc6212fded730ec = $this->env->getExtension("native_profiler");
        $__internal_d30202157d216ed3f7ef4d85f1ab9bf3ac5da20345c440d76cc6212fded730ec->enter($__internal_d30202157d216ed3f7ef4d85f1ab9bf3ac5da20345c440d76cc6212fded730ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.list"), "html", null, true);
        
        $__internal_d30202157d216ed3f7ef4d85f1ab9bf3ac5da20345c440d76cc6212fded730ec->leave($__internal_d30202157d216ed3f7ef4d85f1ab9bf3ac5da20345c440d76cc6212fded730ec_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_db97becd158ad9356ea0f6e7940683388cc679b7e43b2dcc97c5e2d232312d4e = $this->env->getExtension("native_profiler");
        $__internal_db97becd158ad9356ea0f6e7940683388cc679b7e43b2dcc97c5e2d232312d4e->enter($__internal_db97becd158ad9356ea0f6e7940683388cc679b7e43b2dcc97c5e2d232312d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.customer.single"), 1 => $this->env->getExtension('translator')->trans("admin.customer.plural")), "method"), "html", null, true);
        
        $__internal_db97becd158ad9356ea0f6e7940683388cc679b7e43b2dcc97c5e2d232312d4e->leave($__internal_db97becd158ad9356ea0f6e7940683388cc679b7e43b2dcc97c5e2d232312d4e_prof);

    }

    // line 20
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_01a68878d54e2677015422824f3038ad8f0ca08bdca102994f5c0254e7af5c8a = $this->env->getExtension("native_profiler");
        $__internal_01a68878d54e2677015422824f3038ad8f0ca08bdca102994f5c0254e7af5c8a->enter($__internal_01a68878d54e2677015422824f3038ad8f0ca08bdca102994f5c0254e7af5c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminUserBundle:Customer:listComponent.html.twig", 22)->display(array_merge($context, array("class" => "customer", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.username.title")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.fullname.title")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.email.title")), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.customer.field.order_count.title"), "width" => 10), 4 => array("name" => $this->env->getExtension('translator')->trans("admin.user.field.enabled.title"), "width" => 10)))));
        // line 32
        echo "
";
        
        $__internal_01a68878d54e2677015422824f3038ad8f0ca08bdca102994f5c0254e7af5c8a->leave($__internal_01a68878d54e2677015422824f3038ad8f0ca08bdca102994f5c0254e7af5c8a_prof);

    }

    // line 36
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_4fd6d1437f0a0ac395f9da0c3fae6f0dc07844c37f5761930f1328e7137a241c = $this->env->getExtension("native_profiler");
        $__internal_4fd6d1437f0a0ac395f9da0c3fae6f0dc07844c37f5761930f1328e7137a241c->enter($__internal_4fd6d1437f0a0ac395f9da0c3fae6f0dc07844c37f5761930f1328e7137a241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 37
        echo "
    <td>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_customer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username", array()), "html", null, true);
        echo "</strong>
        </a>
    </td>
    <td>
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fullname", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "orders", array())), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 53
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 54
            echo "            <span class=\"label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.user.field.enabled.options.active"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 56
            echo "            <span class=\"label-ko\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.user.field.enabled.options.inactive"), "html", null, true);
            echo "</span>
        ";
        }
        // line 58
        echo "    </td>

    ";
        // line 60
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminUserBundle:Customer:listComponent.html.twig", 60)->display(array_merge($context, array("entity" =>         // line 61
(isset($context["entity"]) ? $context["entity"] : null), "class" => "customer")));
        // line 64
        echo "
";
        
        $__internal_4fd6d1437f0a0ac395f9da0c3fae6f0dc07844c37f5761930f1328e7137a241c->leave($__internal_4fd6d1437f0a0ac395f9da0c3fae6f0dc07844c37f5761930f1328e7137a241c_prof);

    }

    // line 68
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_c172274f550ecd712802785ea6d2626a63404d7a4ce2fd6d03b3d2fdaf52cb09 = $this->env->getExtension("native_profiler");
        $__internal_c172274f550ecd712802785ea6d2626a63404d7a4ce2fd6d03b3d2fdaf52cb09->enter($__internal_c172274f550ecd712802785ea6d2626a63404d7a4ce2fd6d03b3d2fdaf52cb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 69
        echo "
    ";
        // line 70
        $context["url"] = "admin_customer_list";
        // line 71
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_c172274f550ecd712802785ea6d2626a63404d7a4ce2fd6d03b3d2fdaf52cb09->leave($__internal_c172274f550ecd712802785ea6d2626a63404d7a4ce2fd6d03b3d2fdaf52cb09_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Customer:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 71,  162 => 70,  159 => 69,  153 => 68,  145 => 64,  143 => 61,  142 => 60,  138 => 58,  132 => 56,  126 => 54,  124 => 53,  118 => 50,  112 => 47,  106 => 44,  99 => 40,  95 => 39,  91 => 37,  85 => 36,  77 => 32,  75 => 22,  72 => 21,  66 => 20,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'customer',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.customer.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.customer.single'|trans,*/
/*         'admin.customer.plural'|trans*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'customer',*/
/*         rows: [*/
/*             { name: 'admin.user.field.username.title'|trans, },*/
/*             { name: 'admin.user.field.fullname.title'|trans, },*/
/*             { name: 'admin.user.field.email.title'|trans, },*/
/*             { name: 'admin.customer.field.order_count.title'|trans, width: 10 },*/
/*             { name: 'admin.user.field.enabled.title'|trans, width: 10 },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_customer_edit', { id: entity.id }) }}">*/
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
/*         {{ entity.orders|length }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label-ok">{{ 'admin.user.field.enabled.options.active'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label-ko">{{ 'admin.user.field.enabled.options.inactive'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'customer',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_customer_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
