<?php

/* AdminPageBundle:Page:listComponent.html.twig */
class __TwigTemplate_6fb1b785314014858d83b6a9a7520456399633b84c62f70b460bdf0fa376898f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminPageBundle:Page:listComponent.html.twig", 1);
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
        $__internal_0a02f975ef6d745d7224032d6370b47b0a7ea55c2ffeb03542cb5fa0cb37df68 = $this->env->getExtension("native_profiler");
        $__internal_0a02f975ef6d745d7224032d6370b47b0a7ea55c2ffeb03542cb5fa0cb37df68->enter($__internal_0a02f975ef6d745d7224032d6370b47b0a7ea55c2ffeb03542cb5fa0cb37df68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Page:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "page");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a02f975ef6d745d7224032d6370b47b0a7ea55c2ffeb03542cb5fa0cb37df68->leave($__internal_0a02f975ef6d745d7224032d6370b47b0a7ea55c2ffeb03542cb5fa0cb37df68_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_24fd3837f697207c08d54e94890d15452f34c0148c66614e6abc13732c613e98 = $this->env->getExtension("native_profiler");
        $__internal_24fd3837f697207c08d54e94890d15452f34c0148c66614e6abc13732c613e98->enter($__internal_24fd3837f697207c08d54e94890d15452f34c0148c66614e6abc13732c613e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.list"), "html", null, true);
        
        $__internal_24fd3837f697207c08d54e94890d15452f34c0148c66614e6abc13732c613e98->leave($__internal_24fd3837f697207c08d54e94890d15452f34c0148c66614e6abc13732c613e98_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_9e6ea86b25a0d11e1d930009da70ee443e8aefcc51b9087558709acf189bd526 = $this->env->getExtension("native_profiler");
        $__internal_9e6ea86b25a0d11e1d930009da70ee443e8aefcc51b9087558709acf189bd526->enter($__internal_9e6ea86b25a0d11e1d930009da70ee443e8aefcc51b9087558709acf189bd526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.page.single"), 1 => $this->env->getExtension('translator')->trans("admin.page.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_page_new")), "method"), "html", null, true);
        
        $__internal_9e6ea86b25a0d11e1d930009da70ee443e8aefcc51b9087558709acf189bd526->leave($__internal_9e6ea86b25a0d11e1d930009da70ee443e8aefcc51b9087558709acf189bd526_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_c721ee8b816477986fdc248c9a5285a26ef70eb0edd486024468f73778d59e35 = $this->env->getExtension("native_profiler");
        $__internal_c721ee8b816477986fdc248c9a5285a26ef70eb0edd486024468f73778d59e35->enter($__internal_c721ee8b816477986fdc248c9a5285a26ef70eb0edd486024468f73778d59e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "    ";
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminPageBundle:Page:listComponent.html.twig", 22)->display(array_merge($context, array("class" => "page", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.page.field.title.title")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.page.field.link.title")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.page.field.enabled.title"), "width" => 25)))));
        
        $__internal_c721ee8b816477986fdc248c9a5285a26ef70eb0edd486024468f73778d59e35->leave($__internal_c721ee8b816477986fdc248c9a5285a26ef70eb0edd486024468f73778d59e35_prof);

    }

    // line 33
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_301d857f3bbcb11ef0870f964c40f1f21f36efb783fa039076c1274e7075781e = $this->env->getExtension("native_profiler");
        $__internal_301d857f3bbcb11ef0870f964c40f1f21f36efb783fa039076c1274e7075781e->enter($__internal_301d857f3bbcb11ef0870f964c40f1f21f36efb783fa039076c1274e7075781e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 34
        echo "    <td>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_page_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 36
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), 20, "…"), "html", null, true);
        echo "</strong>
        </a>
    </td>
    <td>
        ";
        // line 40
        $context["path"] = $this->env->getExtension('routing')->getUrl("elcodi.route.page_render", array("id" => $this->getAttribute(        // line 41
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "path" => $this->getAttribute(        // line 42
(isset($context["entity"]) ? $context["entity"] : null), "path", array())));
        // line 44
        echo "        <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "path", array()), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        ";
        // line 49
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 50
            echo "            <span class=\"label label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.enabled"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 52
            echo "            <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.disabled"), "html", null, true);
            echo "</span>
        ";
        }
        // line 54
        echo "    </td>

    ";
        // line 56
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminPageBundle:Page:listComponent.html.twig", 56)->display(array_merge($context, array("entity" =>         // line 57
(isset($context["entity"]) ? $context["entity"] : null), "delete" =>  !$this->getAttribute(        // line 58
(isset($context["entity"]) ? $context["entity"] : null), "persistent", array()), "class" => "page")));
        // line 61
        echo "
";
        
        $__internal_301d857f3bbcb11ef0870f964c40f1f21f36efb783fa039076c1274e7075781e->leave($__internal_301d857f3bbcb11ef0870f964c40f1f21f36efb783fa039076c1274e7075781e_prof);

    }

    // line 65
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_c26c103134e310a9648a50c98dfd9d25c95615631952232b293877f9d0603cac = $this->env->getExtension("native_profiler");
        $__internal_c26c103134e310a9648a50c98dfd9d25c95615631952232b293877f9d0603cac->enter($__internal_c26c103134e310a9648a50c98dfd9d25c95615631952232b293877f9d0603cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 66
        echo "
    ";
        // line 67
        $context["url"] = "admin_page_list";
        // line 68
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_c26c103134e310a9648a50c98dfd9d25c95615631952232b293877f9d0603cac->leave($__internal_c26c103134e310a9648a50c98dfd9d25c95615631952232b293877f9d0603cac_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Page:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  155 => 67,  152 => 66,  146 => 65,  138 => 61,  136 => 58,  135 => 57,  134 => 56,  130 => 54,  124 => 52,  118 => 50,  116 => 49,  109 => 45,  104 => 44,  102 => 42,  101 => 41,  100 => 40,  93 => 36,  89 => 35,  86 => 34,  80 => 33,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'page',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.page.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.page.single'|trans,*/
/*         'admin.page.plural'|trans,*/
/*         url('admin_page_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'page',*/
/*         rows: [*/
/*             { name: 'admin.page.field.title.title'|trans },*/
/*             { name: 'admin.page.field.link.title'|trans },*/
/*             { name: 'admin.page.field.enabled.title'|trans, width: 25 },*/
/*         ]*/
/*     } %}*/
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/*     <td>*/
/*         <a href="{{ url('admin_page_edit', { id: entity.id }) }}">*/
/*             <strong>{{ entity.title|truncate(20, '…') }}</strong>*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {% set path = url('elcodi.route.page_render', {*/
/*             'id': entity.id,*/
/*             'path': entity.path*/
/*         }) %}*/
/*         <a target="_blank" href="{{ path }}">*/
/*             {{ entity.path }}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label label-ok">{{ 'ui.label.enabled'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label">{{ 'ui.label.disabled'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         delete: not entity.persistent,*/
/*         class: 'page',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_page_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
