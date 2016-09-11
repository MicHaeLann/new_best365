<?php

/* AdminProductBundle:Manufacturer:listComponent.html.twig */
class __TwigTemplate_548788eeae2159eff36e3ae4917c7dfee2042db07deca49609c4ccfe79c52b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminProductBundle:Manufacturer:listComponent.html.twig", 1);
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
        $__internal_5625cce95a6bfdc87bb2f97ee4d5d1b03996fbdb06b5901528f5f09fc9f673bc = $this->env->getExtension("native_profiler");
        $__internal_5625cce95a6bfdc87bb2f97ee4d5d1b03996fbdb06b5901528f5f09fc9f673bc->enter($__internal_5625cce95a6bfdc87bb2f97ee4d5d1b03996fbdb06b5901528f5f09fc9f673bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Manufacturer:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "manufacturer");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5625cce95a6bfdc87bb2f97ee4d5d1b03996fbdb06b5901528f5f09fc9f673bc->leave($__internal_5625cce95a6bfdc87bb2f97ee4d5d1b03996fbdb06b5901528f5f09fc9f673bc_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ffaa0aa78a895c4483279bf8335cef37b6c07e25dd32cb3b79468c40037475d = $this->env->getExtension("native_profiler");
        $__internal_2ffaa0aa78a895c4483279bf8335cef37b6c07e25dd32cb3b79468c40037475d->enter($__internal_2ffaa0aa78a895c4483279bf8335cef37b6c07e25dd32cb3b79468c40037475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.list"), "html", null, true);
        
        $__internal_2ffaa0aa78a895c4483279bf8335cef37b6c07e25dd32cb3b79468c40037475d->leave($__internal_2ffaa0aa78a895c4483279bf8335cef37b6c07e25dd32cb3b79468c40037475d_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_ac1bd1843c242e3382eddc6bd69c714f60713b7f65591e5a507d303bbf76a2d4 = $this->env->getExtension("native_profiler");
        $__internal_ac1bd1843c242e3382eddc6bd69c714f60713b7f65591e5a507d303bbf76a2d4->enter($__internal_ac1bd1843c242e3382eddc6bd69c714f60713b7f65591e5a507d303bbf76a2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.manufacturer.single"), 1 => $this->env->getExtension('translator')->trans("admin.manufacturer.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_manufacturer_new")), "method"), "html", null, true);
        
        $__internal_ac1bd1843c242e3382eddc6bd69c714f60713b7f65591e5a507d303bbf76a2d4->leave($__internal_ac1bd1843c242e3382eddc6bd69c714f60713b7f65591e5a507d303bbf76a2d4_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_14e6397be27589e44e46b8289c4f855e84af3cb6993c5bfe32c67ec83a455fe8 = $this->env->getExtension("native_profiler");
        $__internal_14e6397be27589e44e46b8289c4f855e84af3cb6993c5bfe32c67ec83a455fe8->enter($__internal_14e6397be27589e44e46b8289c4f855e84af3cb6993c5bfe32c67ec83a455fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminProductBundle:Manufacturer:listComponent.html.twig", 23)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.manufacturer.field.image.title"), "width" => 20), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.manufacturer.field.name_slug.title")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.manufacturer.field.product_count.title")), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.manufacturer.field.enabled.title"), "width" => 10)), "class" => "manufacturer")));
        // line 32
        echo "
";
        
        $__internal_14e6397be27589e44e46b8289c4f855e84af3cb6993c5bfe32c67ec83a455fe8->leave($__internal_14e6397be27589e44e46b8289c4f855e84af3cb6993c5bfe32c67ec83a455fe8_prof);

    }

    // line 36
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_81049b474a8e3de1fab8fef69feacbd9abecb011be5314fe447fe62bbdfb348d = $this->env->getExtension("native_profiler");
        $__internal_81049b474a8e3de1fab8fef69feacbd9abecb011be5314fe447fe62bbdfb348d->enter($__internal_81049b474a8e3de1fab8fef69feacbd9abecb011be5314fe447fe62bbdfb348d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 37
        echo "
    <td data-test=\"manufacturer-";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "images", array())) > 0)) {
            // line 40
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_manufacturer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"thumbnail\">
                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getSortedImages", array()), "first", array()), array("height" => 100, "width" => 100, "type" => 4)), "html", null, true);
            echo "\" />
            </a>
        ";
        }
        // line 44
        echo "    </td>

    <td>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_manufacturer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"fw-b\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "
        </a>
        <p class=\"fz-\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slug", array()), "html", null, true);
        echo "</p>
    </td>
    <td>
        ";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products", array())), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 56
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 57
            echo "            <span class=\"label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.field.enabled.options.active"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 59
            echo "            <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.field.enabled.options.inactive"), "html", null, true);
            echo "</span>
        ";
        }
        // line 61
        echo "    </td>

    ";
        // line 63
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminProductBundle:Manufacturer:listComponent.html.twig", 63)->display(array_merge($context, array("entity" =>         // line 64
(isset($context["entity"]) ? $context["entity"] : null), "class" => "manufacturer")));
        // line 67
        echo "
";
        
        $__internal_81049b474a8e3de1fab8fef69feacbd9abecb011be5314fe447fe62bbdfb348d->leave($__internal_81049b474a8e3de1fab8fef69feacbd9abecb011be5314fe447fe62bbdfb348d_prof);

    }

    // line 71
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_c7f31b2d58528352dbeaef0ab5dae023ba1911df246620e3ac46169b330c5eba = $this->env->getExtension("native_profiler");
        $__internal_c7f31b2d58528352dbeaef0ab5dae023ba1911df246620e3ac46169b330c5eba->enter($__internal_c7f31b2d58528352dbeaef0ab5dae023ba1911df246620e3ac46169b330c5eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 72
        echo "
    ";
        // line 73
        $context["url"] = "admin_manufacturer_list";
        // line 74
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_c7f31b2d58528352dbeaef0ab5dae023ba1911df246620e3ac46169b330c5eba->leave($__internal_c7f31b2d58528352dbeaef0ab5dae023ba1911df246620e3ac46169b330c5eba_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Manufacturer:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 74,  175 => 73,  172 => 72,  166 => 71,  158 => 67,  156 => 64,  155 => 63,  151 => 61,  145 => 59,  139 => 57,  137 => 56,  131 => 53,  125 => 50,  120 => 48,  116 => 47,  111 => 44,  105 => 41,  100 => 40,  98 => 39,  94 => 38,  91 => 37,  85 => 36,  77 => 32,  75 => 23,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'manufacturer',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.manufacturer.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.manufacturer.single'|trans,*/
/*         'admin.manufacturer.plural'|trans,*/
/*         url('admin_manufacturer_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.manufacturer.field.image.title'|trans, width: 20 },*/
/*             { name: 'admin.manufacturer.field.name_slug.title'|trans },*/
/*             { name: 'admin.manufacturer.field.product_count.title'|trans },*/
/*             { name: 'admin.manufacturer.field.enabled.title'|trans, width: 10 },*/
/*         ],*/
/*         class: 'manufacturer',*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td data-test="manufacturer-{{ entity.id }}">*/
/*         {% if entity.images|length > 0 %}*/
/*             <a href="{{ url('admin_manufacturer_edit', { id: entity.id }) }}" class="thumbnail">*/
/*                 <img src="{{ entity.getSortedImages.first|resize({ height: 100, width: 100, type: 4 }) }}" />*/
/*             </a>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_manufacturer_edit', { id: entity.id }) }}" class="fw-b">*/
/*             {{ entity.name }}*/
/*         </a>*/
/*         <p class="fz-">{{ entity.slug }}</p>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.products|length }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label-ok">{{ 'admin.manufacturer.field.enabled.options.active'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label">{{ 'admin.manufacturer.field.enabled.options.inactive'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'manufacturer',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_manufacturer_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
