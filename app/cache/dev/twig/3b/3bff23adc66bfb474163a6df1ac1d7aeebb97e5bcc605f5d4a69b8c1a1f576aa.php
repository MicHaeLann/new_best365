<?php

/* ElcodiCustomShippingBundle:ShippingRange:listComponent.html.twig */
class __TwigTemplate_81ad3a3b28c8d6e95131029c5403940c8933348452d3d9dc8947dc0bb57ecbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "ElcodiCustomShippingBundle:ShippingRange:listComponent.html.twig", 1);
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
        $__internal_ff074e36a89b3ee1535dd7d9973b6015581c1b60870a2a7a970b4a04c6d3b61a = $this->env->getExtension("native_profiler");
        $__internal_ff074e36a89b3ee1535dd7d9973b6015581c1b60870a2a7a970b4a04c6d3b61a->enter($__internal_ff074e36a89b3ee1535dd7d9973b6015581c1b60870a2a7a970b4a04c6d3b61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:ShippingRange:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "shipping_range");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff074e36a89b3ee1535dd7d9973b6015581c1b60870a2a7a970b4a04c6d3b61a->leave($__internal_ff074e36a89b3ee1535dd7d9973b6015581c1b60870a2a7a970b4a04c6d3b61a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbacb86467c90e337c6cfffac2b19d00fb24eb49363d06b595e056d47fac365f = $this->env->getExtension("native_profiler");
        $__internal_dbacb86467c90e337c6cfffac2b19d00fb24eb49363d06b595e056d47fac365f->enter($__internal_dbacb86467c90e337c6cfffac2b19d00fb24eb49363d06b595e056d47fac365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.list"), "html", null, true);
        
        $__internal_dbacb86467c90e337c6cfffac2b19d00fb24eb49363d06b595e056d47fac365f->leave($__internal_dbacb86467c90e337c6cfffac2b19d00fb24eb49363d06b595e056d47fac365f_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_2cb1329eb653615c74dda2b8771966386a7c9628493ddd68253385a0b70a509c = $this->env->getExtension("native_profiler");
        $__internal_2cb1329eb653615c74dda2b8771966386a7c9628493ddd68253385a0b70a509c->enter($__internal_2cb1329eb653615c74dda2b8771966386a7c9628493ddd68253385a0b70a509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.shipping_range.single"), 1 => $this->env->getExtension('translator')->trans("admin.shipping_range.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_shipping_range_new", array("carrierId" => $this->getAttribute(        // line 16
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array())))), "method"), "html", null, true);
        
        $__internal_2cb1329eb653615c74dda2b8771966386a7c9628493ddd68253385a0b70a509c->leave($__internal_2cb1329eb653615c74dda2b8771966386a7c9628493ddd68253385a0b70a509c_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_9dd7b9021f282e05a233f1e0417219eeac508e77a39d0a461be80cc8cd1778a0 = $this->env->getExtension("native_profiler");
        $__internal_9dd7b9021f282e05a233f1e0417219eeac508e77a39d0a461be80cc8cd1778a0->enter($__internal_9dd7b9021f282e05a233f1e0417219eeac508e77a39d0a461be80cc8cd1778a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "ElcodiCustomShippingBundle:ShippingRange:listComponent.html.twig", 23)->display(array_merge($context, array("class" => "product", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.shipping_range.field.name.title")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.shipping_range.field.value.title"), "width" => 20), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.shipping_range.field.price.title"), "width" => 10)))));
        // line 31
        echo "
";
        
        $__internal_9dd7b9021f282e05a233f1e0417219eeac508e77a39d0a461be80cc8cd1778a0->leave($__internal_9dd7b9021f282e05a233f1e0417219eeac508e77a39d0a461be80cc8cd1778a0_prof);

    }

    // line 35
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_5bae5c3766c12808ebf33f7bbb7d1a2435a830e3950d9e9c75fbb1616ef4e112 = $this->env->getExtension("native_profiler");
        $__internal_5bae5c3766c12808ebf33f7bbb7d1a2435a830e3950d9e9c75fbb1616ef4e112->enter($__internal_5bae5c3766c12808ebf33f7bbb7d1a2435a830e3950d9e9c75fbb1616ef4e112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 36
        echo "
    <td>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_shipping_range_edit", array("carrierId" => $this->getAttribute((isset($context["carrier"]) ? $context["carrier"] : null), "id", array()), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</strong> (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "toZone", array()), "name", array()), "html", null, true);
        echo ")
        </a>
    </td>
    <td>
        ";
        // line 43
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type", array()) == 1)) {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.field.value.price_format", array("%from%" => call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute(            // line 46
(isset($context["entity"]) ? $context["entity"] : null), "fromPrice", array()))), "%to%" => call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute(            // line 47
(isset($context["entity"]) ? $context["entity"] : null), "toPrice", array()))))), "html", null, true);
            // line 49
            echo "
        ";
        } elseif (($this->getAttribute(        // line 50
(isset($context["entity"]) ? $context["entity"] : null), "type", array()) == 2)) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.field.value.weight_format", array("%from%" => $this->getAttribute(            // line 53
(isset($context["entity"]) ? $context["entity"] : null), "fromWeight", array()), "%to%" => $this->getAttribute(            // line 54
(isset($context["entity"]) ? $context["entity"] : null), "toWeight", array()))), "html", null, true);
            // line 56
            echo "
        ";
        }
        // line 58
        echo "    </td>
    <td>
        <strong>";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price", array()))), "html", null, true);
        echo "</strong>
    </td>
    ";
        // line 62
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "ElcodiCustomShippingBundle:ShippingRange:listComponent.html.twig", 62)->display(array_merge($context, array("entity" =>         // line 63
(isset($context["entity"]) ? $context["entity"] : null), "delete_url" => $this->env->getExtension('routing')->getUrl("admin_shipping_range_delete", array("carrierId" => $this->getAttribute($this->getAttribute(        // line 64
(isset($context["entity"]) ? $context["entity"] : null), "carrier", array()), "id", array()), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "class" => "shipping_range")));
        // line 67
        echo "
";
        
        $__internal_5bae5c3766c12808ebf33f7bbb7d1a2435a830e3950d9e9c75fbb1616ef4e112->leave($__internal_5bae5c3766c12808ebf33f7bbb7d1a2435a830e3950d9e9c75fbb1616ef4e112_prof);

    }

    // line 71
    public function block_table_pagination($context, array $blocks = array())
    {
        $__internal_9a75f44b9cdae0d8834483da9eff59d072e49d6e67fdabdc427ab6ef9d29db18 = $this->env->getExtension("native_profiler");
        $__internal_9a75f44b9cdae0d8834483da9eff59d072e49d6e67fdabdc427ab6ef9d29db18->enter($__internal_9a75f44b9cdae0d8834483da9eff59d072e49d6e67fdabdc427ab6ef9d29db18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_pagination"));

        echo "";
        
        $__internal_9a75f44b9cdae0d8834483da9eff59d072e49d6e67fdabdc427ab6ef9d29db18->leave($__internal_9a75f44b9cdae0d8834483da9eff59d072e49d6e67fdabdc427ab6ef9d29db18_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:ShippingRange:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 71,  143 => 67,  141 => 64,  140 => 63,  139 => 62,  134 => 60,  130 => 58,  126 => 56,  124 => 54,  123 => 53,  121 => 51,  119 => 50,  116 => 49,  114 => 47,  113 => 46,  111 => 44,  109 => 43,  100 => 39,  96 => 38,  92 => 36,  86 => 35,  78 => 31,  76 => 23,  73 => 22,  67 => 21,  60 => 16,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'shipping_range',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.shipping_range.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.shipping_range.single'|trans,*/
/*         'admin.shipping_range.plural'|trans,*/
/*         url('admin_shipping_range_new', { carrierId: carrier.id })*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'product',*/
/*         rows: [*/
/*             { name: 'admin.shipping_range.field.name.title'|trans },*/
/*             { name: 'admin.shipping_range.field.value.title'|trans, width: 20 },*/
/*             { name: 'admin.shipping_range.field.price.title'|trans, width: 10 },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_shipping_range_edit', { carrierId: carrier.id, id: entity.id }) }}">*/
/*             <strong>{{ entity.name }}</strong> ({{ entity.toZone.name }})*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.type == 1 %}*/
/*             {{*/
/*                 'admin.shipping_range.field.value.price_format'|trans({*/
/*                     '%from%': entity.fromPrice|print_money,*/
/*                     '%to%': entity.toPrice|print_money,*/
/*                 })*/
/*             }}*/
/*         {% elseif entity.type == 2 %}*/
/*             {{*/
/*                 'admin.shipping_range.field.value.weight_format'|trans({*/
/*                     '%from%': entity.fromWeight,*/
/*                     '%to%': entity.toWeight,*/
/*                 })*/
/*             }}*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>*/
/*         <strong>{{ entity.price|print_money }}</strong>*/
/*     </td>*/
/*     {% include "@AdminCore/Tables/actions.html.twig" with {*/
/*         entity: entity,*/
/*         delete_url: url('admin_shipping_range_delete', { carrierId: entity.carrier.id, id: entity.id }),*/
/*         class: 'shipping_range',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_pagination '' %}*/
/* */
