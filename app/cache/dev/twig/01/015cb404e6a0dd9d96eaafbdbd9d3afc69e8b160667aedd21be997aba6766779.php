<?php

/* AdminProductBundle:Variant:listComponent.html.twig */
class __TwigTemplate_384a105faa27ba99989e15b2dc56f3d187a284936b80996a1e5604d0b305979a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminProductBundle:Variant:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'no_items' => array($this, 'block_no_items'),
            'table_head' => array($this, 'block_table_head'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_pagination' => array($this, 'block_table_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb96c42761419009dbdb4bd83ec7db56aeea1d87df90a5446c91d2ad9214aa0e = $this->env->getExtension("native_profiler");
        $__internal_eb96c42761419009dbdb4bd83ec7db56aeea1d87df90a5446c91d2ad9214aa0e->enter($__internal_eb96c42761419009dbdb4bd83ec7db56aeea1d87df90a5446c91d2ad9214aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Variant:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "variant");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb96c42761419009dbdb4bd83ec7db56aeea1d87df90a5446c91d2ad9214aa0e->leave($__internal_eb96c42761419009dbdb4bd83ec7db56aeea1d87df90a5446c91d2ad9214aa0e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f19b7248a2009a72877afb8ca0dc27c918a8e92c749e359141bdbe27a39b6f2a = $this->env->getExtension("native_profiler");
        $__internal_f19b7248a2009a72877afb8ca0dc27c918a8e92c749e359141bdbe27a39b6f2a->enter($__internal_f19b7248a2009a72877afb8ca0dc27c918a8e92c749e359141bdbe27a39b6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.list"), "html", null, true);
        
        $__internal_f19b7248a2009a72877afb8ca0dc27c918a8e92c749e359141bdbe27a39b6f2a->leave($__internal_f19b7248a2009a72877afb8ca0dc27c918a8e92c749e359141bdbe27a39b6f2a_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_616d78fa83eeee4ee3dd23710dba17ee7f70424e25055792acff254c668dc934 = $this->env->getExtension("native_profiler");
        $__internal_616d78fa83eeee4ee3dd23710dba17ee7f70424e25055792acff254c668dc934->enter($__internal_616d78fa83eeee4ee3dd23710dba17ee7f70424e25055792acff254c668dc934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.variant.single"), 1 => $this->env->getExtension('translator')->trans("admin.variant.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_product_variant_new", array("productId" =>         // line 16
(isset($context["productId"]) ? $context["productId"] : null)))), "method"), "html", null, true);
        
        $__internal_616d78fa83eeee4ee3dd23710dba17ee7f70424e25055792acff254c668dc934->leave($__internal_616d78fa83eeee4ee3dd23710dba17ee7f70424e25055792acff254c668dc934_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_6a0ad3c6b65b50370ded940a2e7a71927099af66f3151cea5a143d42ebf19f03 = $this->env->getExtension("native_profiler");
        $__internal_6a0ad3c6b65b50370ded940a2e7a71927099af66f3151cea5a143d42ebf19f03->enter($__internal_6a0ad3c6b65b50370ded940a2e7a71927099af66f3151cea5a143d42ebf19f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminProductBundle:Variant:listComponent.html.twig", 23)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.variant.field.name.title"), "width" => 50), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.variant.field.price.title"), "width" => 10), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.variant.field.reduced_price.title"), "width" => 20), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.variant.field.enabled.title"), "width" => 10)), "class" => "variant")));
        // line 32
        echo "
";
        
        $__internal_6a0ad3c6b65b50370ded940a2e7a71927099af66f3151cea5a143d42ebf19f03->leave($__internal_6a0ad3c6b65b50370ded940a2e7a71927099af66f3151cea5a143d42ebf19f03_prof);

    }

    // line 36
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_0286e707cb4c762892fcbf946fefbba68a52daacb647619ffce69a6e635b901b = $this->env->getExtension("native_profiler");
        $__internal_0286e707cb4c762892fcbf946fefbba68a52daacb647619ffce69a6e635b901b->enter($__internal_0286e707cb4c762892fcbf946fefbba68a52daacb647619ffce69a6e635b901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 37
        echo "
    <td>
        <a target=\"_blank\" data-fc-modules=\"modal\"
           data-fc-width=\"95%\" data-fc-height=\"95%\"
           href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_variant_edit", array("productId" => $this->getAttribute($this->getAttribute(        // line 43
(isset($context["entity"]) ? $context["entity"] : null), "product", array()), "id", array()), "id" => $this->getAttribute(        // line 44
(isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        // line 46
        echo "\">
            ";
        // line 47
        $context["optionName"] = "";
        // line 48
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 49
            echo "                ";
            $context["optionName"] = (((isset($context["optionName"]) ? $context["optionName"] : null) . $this->getAttribute($context["option"], "value", array())) . " ");
            // line 50
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            ";
        if ((twig_replace_filter((isset($context["optionName"]) ? $context["optionName"] : null), " ", "") == "")) {
            // line 52
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.single"), "html", null, true);
            echo "
            ";
        } else {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["optionName"]) ? $context["optionName"] : null), "html", null, true);
            echo "
            ";
        }
        // line 56
        echo "        </a>
    </td>
    <td>
        ";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price", array()))), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reducedPrice", array()))), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 65
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 66
            echo "            <span class=\"label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.field.enabled.options.active"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 68
            echo "            <span class=\"label-ko\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.field.enabled.options.inactive"), "html", null, true);
            echo "</span>
        ";
        }
        // line 70
        echo "    </td>

    <td class=\"center\">
        ";
        // line 73
        if (( !array_key_exists("delete", $context) || ((isset($context["delete"]) ? $context["delete"] : null) != false))) {
            // line 74
            echo "            <a class=\"icon-trash-o c-ko td-n fz-l\"
               data-fc-modules=\"confirm\"
               data-fc-name=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "product", array()), "name", array()), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"
               data-fc-text=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.confirm.delete"), "html", null, true);
            echo "\"
               href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_variant_delete", array("productId" => $this->getAttribute($this->getAttribute(            // line 80
(isset($context["entity"]) ? $context["entity"] : null), "product", array()), "id", array()), "id" => $this->getAttribute(            // line 81
(isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            // line 83
            echo "\"
            >
                <i class=\"fa fa-times\"></i>
            </a>
        ";
        }
        // line 88
        echo "    </td>

";
        
        $__internal_0286e707cb4c762892fcbf946fefbba68a52daacb647619ffce69a6e635b901b->leave($__internal_0286e707cb4c762892fcbf946fefbba68a52daacb647619ffce69a6e635b901b_prof);

    }

    // line 93
    public function block_table_pagination($context, array $blocks = array())
    {
        $__internal_ad3cfae25f88266180eec2b6f4c74349e3941ab0c17aa04d64660b5b9200bfbd = $this->env->getExtension("native_profiler");
        $__internal_ad3cfae25f88266180eec2b6f4c74349e3941ab0c17aa04d64660b5b9200bfbd->enter($__internal_ad3cfae25f88266180eec2b6f4c74349e3941ab0c17aa04d64660b5b9200bfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_pagination"));

        echo "";
        
        $__internal_ad3cfae25f88266180eec2b6f4c74349e3941ab0c17aa04d64660b5b9200bfbd->leave($__internal_ad3cfae25f88266180eec2b6f4c74349e3941ab0c17aa04d64660b5b9200bfbd_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Variant:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 93,  206 => 88,  199 => 83,  197 => 81,  196 => 80,  195 => 78,  191 => 77,  178 => 76,  174 => 74,  172 => 73,  167 => 70,  161 => 68,  155 => 66,  153 => 65,  147 => 62,  141 => 59,  136 => 56,  130 => 54,  124 => 52,  121 => 51,  115 => 50,  112 => 49,  107 => 48,  105 => 47,  102 => 46,  100 => 44,  99 => 43,  98 => 41,  92 => 37,  86 => 36,  78 => 32,  76 => 23,  73 => 22,  67 => 21,  60 => 16,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'variant'*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.variant.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.variant.single'|trans,*/
/*         'admin.variant.plural'|trans,*/
/*         url('admin_product_variant_new', { productId: productId })*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.variant.field.name.title'|trans, width: 50 },*/
/*             { name: 'admin.variant.field.price.title'|trans, width: 10 },*/
/*             { name: 'admin.variant.field.reduced_price.title'|trans, width: 20 },*/
/*             { name: 'admin.variant.field.enabled.title'|trans, width: 10 },*/
/*         ],*/
/*         class: 'variant'*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a target="_blank" data-fc-modules="modal"*/
/*            data-fc-width="95%" data-fc-height="95%"*/
/*            href="{{*/
/*                 url( 'admin_product_variant_edit', {*/
/*                     productId: entity.product.id,*/
/*                     id: entity.id,*/
/*                 })*/
/*            }}">*/
/*             {% set optionName = '' %}*/
/*             {% for option in entity.options %}*/
/*                 {% set optionName = optionName ~ option.value ~ ' ' %}*/
/*             {% endfor %}*/
/*             {%  if optionName|replace(' ','') == '' %}*/
/*                 {{ 'admin.variant.single'|trans }}*/
/*             {% else %}*/
/*                 {{ optionName }}*/
/*             {% endif %}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.price|print_money }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.reducedPrice|print_money }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label-ok">{{ 'admin.variant.field.enabled.options.active'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label-ko">{{ 'admin.variant.field.enabled.options.inactive'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     <td class="center">*/
/*         {% if delete is not defined or delete != false %}*/
/*             <a class="icon-trash-o c-ko td-n fz-l"*/
/*                data-fc-modules="confirm"*/
/*                data-fc-name="{{ entity.product.name }}{% for option in entity.options %} {{ option.value }}{% endfor %}"*/
/*                data-fc-text="{{ 'ui.confirm.delete'|trans }}"*/
/*                href="{{*/
/*                     url('admin_product_variant_delete', {*/
/*                         productId: entity.product.id,*/
/*                         id: entity.id,*/
/*                     })*/
/*                 }}"*/
/*             >*/
/*                 <i class="fa fa-times"></i>*/
/*             </a>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_pagination '' %}*/
/* */
/* */
/* {#*/
/*  # Twig variable 'productId' is passed directly*/
/*  # from VariantComponentController::listComponentAction*/
/*  # since in this block scope we cannot access entities*/
/*  # being iterated*/
/*  #}*/
/* */
