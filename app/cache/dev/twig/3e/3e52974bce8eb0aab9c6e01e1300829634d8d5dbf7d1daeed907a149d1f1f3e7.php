<?php

/* ElcodiCustomShippingBundle:Carrier:listComponent.html.twig */
class __TwigTemplate_e86891215d60b89602991771da56f9f1733806ef8a5c5f175b1f924dea5d369e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "ElcodiCustomShippingBundle:Carrier:listComponent.html.twig", 1);
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
        $__internal_0d94faf693d6ccc57e32587d6ef77d6e880c8008ce37259b263e8c3bf5678827 = $this->env->getExtension("native_profiler");
        $__internal_0d94faf693d6ccc57e32587d6ef77d6e880c8008ce37259b263e8c3bf5678827->enter($__internal_0d94faf693d6ccc57e32587d6ef77d6e880c8008ce37259b263e8c3bf5678827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:Carrier:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "carrier");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d94faf693d6ccc57e32587d6ef77d6e880c8008ce37259b263e8c3bf5678827->leave($__internal_0d94faf693d6ccc57e32587d6ef77d6e880c8008ce37259b263e8c3bf5678827_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03a250512003de25d50a55d1e965e39e546c8478fde22ff8db66e425491d6ae = $this->env->getExtension("native_profiler");
        $__internal_a03a250512003de25d50a55d1e965e39e546c8478fde22ff8db66e425491d6ae->enter($__internal_a03a250512003de25d50a55d1e965e39e546c8478fde22ff8db66e425491d6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.list"), "html", null, true);
        
        $__internal_a03a250512003de25d50a55d1e965e39e546c8478fde22ff8db66e425491d6ae->leave($__internal_a03a250512003de25d50a55d1e965e39e546c8478fde22ff8db66e425491d6ae_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_7a30f4d8923d3904bd5f97e507086c9e234763e7a3db7f313c7d565d37220483 = $this->env->getExtension("native_profiler");
        $__internal_7a30f4d8923d3904bd5f97e507086c9e234763e7a3db7f313c7d565d37220483->enter($__internal_7a30f4d8923d3904bd5f97e507086c9e234763e7a3db7f313c7d565d37220483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.carrier.single"), 1 => $this->env->getExtension('translator')->trans("admin.carrier.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_carrier_new")), "method"), "html", null, true);
        
        $__internal_7a30f4d8923d3904bd5f97e507086c9e234763e7a3db7f313c7d565d37220483->leave($__internal_7a30f4d8923d3904bd5f97e507086c9e234763e7a3db7f313c7d565d37220483_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_ef4f5b8cd97c67d74202f191a2c7c13d1e57aa307d68fb0b851371c02dc3f4cc = $this->env->getExtension("native_profiler");
        $__internal_ef4f5b8cd97c67d74202f191a2c7c13d1e57aa307d68fb0b851371c02dc3f4cc->enter($__internal_ef4f5b8cd97c67d74202f191a2c7c13d1e57aa307d68fb0b851371c02dc3f4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "ElcodiCustomShippingBundle:Carrier:listComponent.html.twig", 23)->display(array_merge($context, array("class" => "carriers", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.carrier.field.name.title")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.carrier.field.description.title")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.carrier.field.taxes.title"), "width" => 20), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.carrier.field.status.title"), "width" => 10)))));
        // line 32
        echo "
";
        
        $__internal_ef4f5b8cd97c67d74202f191a2c7c13d1e57aa307d68fb0b851371c02dc3f4cc->leave($__internal_ef4f5b8cd97c67d74202f191a2c7c13d1e57aa307d68fb0b851371c02dc3f4cc_prof);

    }

    // line 36
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_4edb9903f89604f8c17e1420047917bfc113392eca7e0f1604802fb86431aaa9 = $this->env->getExtension("native_profiler");
        $__internal_4edb9903f89604f8c17e1420047917bfc113392eca7e0f1604802fb86431aaa9->enter($__internal_4edb9903f89604f8c17e1420047917bfc113392eca7e0f1604802fb86431aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 37
        echo "
    <td>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_carrier_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.field.taxes.format", array("%value%" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tax", array()), "value", array()))), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 50
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 51
            echo "            <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.enabled"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 53
            echo "            <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.disabled"), "html", null, true);
            echo "</span>
        ";
        }
        // line 55
        echo "    </td>

    ";
        // line 57
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "ElcodiCustomShippingBundle:Carrier:listComponent.html.twig", 57)->display(array_merge($context, array("entity" =>         // line 58
(isset($context["entity"]) ? $context["entity"] : null), "class" => "carrier")));
        // line 61
        echo "
";
        
        $__internal_4edb9903f89604f8c17e1420047917bfc113392eca7e0f1604802fb86431aaa9->leave($__internal_4edb9903f89604f8c17e1420047917bfc113392eca7e0f1604802fb86431aaa9_prof);

    }

    // line 65
    public function block_table_pagination($context, array $blocks = array())
    {
        $__internal_1216caba2d549db25f4f24087c4691e2c14c713493c7a94d05a9ecaf2e1e69ee = $this->env->getExtension("native_profiler");
        $__internal_1216caba2d549db25f4f24087c4691e2c14c713493c7a94d05a9ecaf2e1e69ee->enter($__internal_1216caba2d549db25f4f24087c4691e2c14c713493c7a94d05a9ecaf2e1e69ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_pagination"));

        echo "";
        
        $__internal_1216caba2d549db25f4f24087c4691e2c14c713493c7a94d05a9ecaf2e1e69ee->leave($__internal_1216caba2d549db25f4f24087c4691e2c14c713493c7a94d05a9ecaf2e1e69ee_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:Carrier:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  139 => 61,  137 => 58,  136 => 57,  132 => 55,  126 => 53,  120 => 51,  118 => 50,  112 => 47,  106 => 44,  99 => 40,  95 => 39,  91 => 37,  85 => 36,  77 => 32,  75 => 23,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'carrier',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.carrier.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.carrier.single'|trans,*/
/*         'admin.carrier.plural'|trans,*/
/*         url('admin_carrier_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'carriers',*/
/*         rows: [*/
/*             { name: 'admin.carrier.field.name.title'|trans, },*/
/*             { name: 'admin.carrier.field.description.title'|trans, },*/
/*             { name: 'admin.carrier.field.taxes.title'|trans, width: 20 },*/
/*             { name: 'admin.carrier.field.status.title'|trans, width: 10 },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_carrier_edit', { id: entity.id }) }}">*/
/*             {{ entity.name }}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.description }}*/
/*     </td>*/
/*     <td>*/
/*         {{ 'admin.carrier.field.taxes.format'|trans({ '%value%': entity.tax.value }) }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}*/
/*             <span class="label label-success">{{ 'ui.label.enabled'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label label-danger">{{ 'ui.label.disabled'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* */
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'carrier',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_pagination '' %}*/
/* */
