<?php

/* AdminPageBundle:BlogPost:listComponent.html.twig */
class __TwigTemplate_7285fda6f209151dae968763ca19347e9e4178083671205a432ce9a8e1755447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminPageBundle:BlogPost:listComponent.html.twig", 1);
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
        $__internal_75cef508b360435cf6820a0725c6c0b966234ddf514baaf93be5a03bd21d0923 = $this->env->getExtension("native_profiler");
        $__internal_75cef508b360435cf6820a0725c6c0b966234ddf514baaf93be5a03bd21d0923->enter($__internal_75cef508b360435cf6820a0725c6c0b966234ddf514baaf93be5a03bd21d0923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:BlogPost:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "blog_post");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75cef508b360435cf6820a0725c6c0b966234ddf514baaf93be5a03bd21d0923->leave($__internal_75cef508b360435cf6820a0725c6c0b966234ddf514baaf93be5a03bd21d0923_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6b7e8e7dd22d02c3d78ff2ccae8df71a13389865b11b439cca2f725791da989 = $this->env->getExtension("native_profiler");
        $__internal_a6b7e8e7dd22d02c3d78ff2ccae8df71a13389865b11b439cca2f725791da989->enter($__internal_a6b7e8e7dd22d02c3d78ff2ccae8df71a13389865b11b439cca2f725791da989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.blog_post.list"), "html", null, true);
        
        $__internal_a6b7e8e7dd22d02c3d78ff2ccae8df71a13389865b11b439cca2f725791da989->leave($__internal_a6b7e8e7dd22d02c3d78ff2ccae8df71a13389865b11b439cca2f725791da989_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_88c4e07af28562455f52065a974f76bd6d6fffaab937ad8abffaf82170351f7d = $this->env->getExtension("native_profiler");
        $__internal_88c4e07af28562455f52065a974f76bd6d6fffaab937ad8abffaf82170351f7d->enter($__internal_88c4e07af28562455f52065a974f76bd6d6fffaab937ad8abffaf82170351f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.blog_post.single"), 1 => $this->env->getExtension('translator')->trans("admin.blog_post.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_blog_post_new")), "method"), "html", null, true);
        
        $__internal_88c4e07af28562455f52065a974f76bd6d6fffaab937ad8abffaf82170351f7d->leave($__internal_88c4e07af28562455f52065a974f76bd6d6fffaab937ad8abffaf82170351f7d_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_14f91b7d51dfa55cffd82ffadce368a8bf8529203824da27f58578a66a09d9ac = $this->env->getExtension("native_profiler");
        $__internal_14f91b7d51dfa55cffd82ffadce368a8bf8529203824da27f58578a66a09d9ac->enter($__internal_14f91b7d51dfa55cffd82ffadce368a8bf8529203824da27f58578a66a09d9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminPageBundle:BlogPost:listComponent.html.twig", 23)->display(array_merge($context, array("class" => "blog_post", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.blog_post.single")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.blog_post.field.path.title"), "width" => 25), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.blog_post.field.enabled.title"), "width" => 15)))));
        // line 31
        echo "
";
        
        $__internal_14f91b7d51dfa55cffd82ffadce368a8bf8529203824da27f58578a66a09d9ac->leave($__internal_14f91b7d51dfa55cffd82ffadce368a8bf8529203824da27f58578a66a09d9ac_prof);

    }

    // line 35
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_b66a0ce5074cc08780ead232723f5d60224eab55aa88fb75f7c68ca27910a1d7 = $this->env->getExtension("native_profiler");
        $__internal_b66a0ce5074cc08780ead232723f5d60224eab55aa88fb75f7c68ca27910a1d7->enter($__internal_b66a0ce5074cc08780ead232723f5d60224eab55aa88fb75f7c68ca27910a1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 36
        echo "    <td>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_blog_post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
           <strong>";
        // line 38
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), 30, "…"), "html", null, true);
        echo "</strong>
        </a>
        <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array())), 150, "…"), "html", null, true);
        echo "</p>
    </td>
    <td>
        ";
        // line 43
        $context["path"] = $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute(        // line 44
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "slug" => $this->getAttribute(        // line 45
(isset($context["entity"]) ? $context["entity"] : null), "path", array())));
        // line 47
        echo "        <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "\">
            /";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "path", array()), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        ";
        // line 52
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 53
            echo "            <span class=\"label label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.enabled"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 55
            echo "            <span class=\"label label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.disabled"), "html", null, true);
            echo "</span>
        ";
        }
        // line 57
        echo "    </td>

    ";
        // line 59
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminPageBundle:BlogPost:listComponent.html.twig", 59)->display(array_merge($context, array("entity" =>         // line 60
(isset($context["entity"]) ? $context["entity"] : null), "class" => "blog_post")));
        // line 63
        echo "
";
        
        $__internal_b66a0ce5074cc08780ead232723f5d60224eab55aa88fb75f7c68ca27910a1d7->leave($__internal_b66a0ce5074cc08780ead232723f5d60224eab55aa88fb75f7c68ca27910a1d7_prof);

    }

    // line 67
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_7402518d8956e59ec4925e8cee10183e1e15564fb3d55102c650aaf4fb0ac256 = $this->env->getExtension("native_profiler");
        $__internal_7402518d8956e59ec4925e8cee10183e1e15564fb3d55102c650aaf4fb0ac256->enter($__internal_7402518d8956e59ec4925e8cee10183e1e15564fb3d55102c650aaf4fb0ac256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 68
        echo "
    ";
        // line 69
        $context["url"] = "admin_blog_post_list";
        // line 70
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_7402518d8956e59ec4925e8cee10183e1e15564fb3d55102c650aaf4fb0ac256->leave($__internal_7402518d8956e59ec4925e8cee10183e1e15564fb3d55102c650aaf4fb0ac256_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:BlogPost:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  163 => 69,  160 => 68,  154 => 67,  146 => 63,  144 => 60,  143 => 59,  139 => 57,  133 => 55,  127 => 53,  125 => 52,  118 => 48,  113 => 47,  111 => 45,  110 => 44,  109 => 43,  103 => 40,  98 => 38,  94 => 37,  91 => 36,  85 => 35,  77 => 31,  75 => 23,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'blog_post',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.blog_post.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.blog_post.single'|trans,*/
/*         'admin.blog_post.plural'|trans,*/
/*         url('admin_blog_post_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'blog_post',*/
/*         rows: [*/
/*             { name: 'admin.blog_post.single'|trans },*/
/*             { name: 'admin.blog_post.field.path.title'|trans, width: 25 },*/
/*             { name: 'admin.blog_post.field.enabled.title'|trans, width: 15 },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/*     <td>*/
/*         <a href="{{ url('admin_blog_post_edit', { id: entity.id}) }}">*/
/*            <strong>{{ entity.title|truncate(30, '…') }}</strong>*/
/*         </a>*/
/*         <p>{{ entity.content|striptags|truncate(150, '…') }}</p>*/
/*     </td>*/
/*     <td>*/
/*         {% set path = url('store_blog_post_view', {*/
/*         id: entity.id,*/
/*         slug: entity.path,*/
/*         }) %}*/
/*         <a target="_blank" href="{{ path }}">*/
/*             /{{ entity.path }}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label label-ok">{{ 'ui.label.enabled'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label label">{{ 'ui.label.disabled'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'blog_post',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_blog_post_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
