<?php

/* AdminAttributeBundle:Attribute:listComponent.html.twig */
class __TwigTemplate_f4814a6706370ee9d2da28adc19eb25d1b7ea37d473004323201e966d2c34192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminAttributeBundle:Attribute:listComponent.html.twig", 1);
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
        $__internal_f9a519051bcb6bb788d5e431f86b3497133be816910e87d44f0b81ed8f1d00c4 = $this->env->getExtension("native_profiler");
        $__internal_f9a519051bcb6bb788d5e431f86b3497133be816910e87d44f0b81ed8f1d00c4->enter($__internal_f9a519051bcb6bb788d5e431f86b3497133be816910e87d44f0b81ed8f1d00c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAttributeBundle:Attribute:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "attribute");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a519051bcb6bb788d5e431f86b3497133be816910e87d44f0b81ed8f1d00c4->leave($__internal_f9a519051bcb6bb788d5e431f86b3497133be816910e87d44f0b81ed8f1d00c4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e9089486cd5a44e49d719a805f02748c60eff133381d1a32911fe0af50267a2 = $this->env->getExtension("native_profiler");
        $__internal_7e9089486cd5a44e49d719a805f02748c60eff133381d1a32911fe0af50267a2->enter($__internal_7e9089486cd5a44e49d719a805f02748c60eff133381d1a32911fe0af50267a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.list"), "html", null, true);
        
        $__internal_7e9089486cd5a44e49d719a805f02748c60eff133381d1a32911fe0af50267a2->leave($__internal_7e9089486cd5a44e49d719a805f02748c60eff133381d1a32911fe0af50267a2_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_9393c9fd1d512a0493ad89a7349f65717868ab92f0ed04d632715142f134da15 = $this->env->getExtension("native_profiler");
        $__internal_9393c9fd1d512a0493ad89a7349f65717868ab92f0ed04d632715142f134da15->enter($__internal_9393c9fd1d512a0493ad89a7349f65717868ab92f0ed04d632715142f134da15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.attribute.single"), 1 => $this->env->getExtension('translator')->trans("admin.attribute.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_attribute_new")), "method"), "html", null, true);
        
        $__internal_9393c9fd1d512a0493ad89a7349f65717868ab92f0ed04d632715142f134da15->leave($__internal_9393c9fd1d512a0493ad89a7349f65717868ab92f0ed04d632715142f134da15_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_42221122ce32b03323886aaf80f0ff428262245a0b5875979ed7a9d1773d08aa = $this->env->getExtension("native_profiler");
        $__internal_42221122ce32b03323886aaf80f0ff428262245a0b5875979ed7a9d1773d08aa->enter($__internal_42221122ce32b03323886aaf80f0ff428262245a0b5875979ed7a9d1773d08aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "    ";
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminAttributeBundle:Attribute:listComponent.html.twig", 22)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.attribute.field.name.title"), "width" => 20), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.attribute.field.name.values")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.attribute.field.enabled.title"), "width" => 15)), "class" => "attribute")));
        
        $__internal_42221122ce32b03323886aaf80f0ff428262245a0b5875979ed7a9d1773d08aa->leave($__internal_42221122ce32b03323886aaf80f0ff428262245a0b5875979ed7a9d1773d08aa_prof);

    }

    // line 33
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_e2d87d570083eaf2d13ee3bf9c4257c86eadf0037c69d9b8c5fc517a2fb69ba6 = $this->env->getExtension("native_profiler");
        $__internal_e2d87d570083eaf2d13ee3bf9c4257c86eadf0037c69d9b8c5fc517a2fb69ba6->enter($__internal_e2d87d570083eaf2d13ee3bf9c4257c86eadf0037c69d9b8c5fc517a2fb69ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 34
        echo "
    <td>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_attribute_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</strong>
        </a>
    </td>
    <td>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "values", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 42
            echo "            ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 43
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </td>
    <td>
        ";
        // line 46
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array()) == 1)) {
            // line 47
            echo "            <span class=\"label label-ok\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.enabled"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 49
            echo "            <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.label.disabled"), "html", null, true);
            echo "</span>
        ";
        }
        // line 51
        echo "    </td>
    ";
        // line 52
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminAttributeBundle:Attribute:listComponent.html.twig", 52)->display(array_merge($context, array("entity" =>         // line 53
(isset($context["entity"]) ? $context["entity"] : null), "class" => "attribute")));
        // line 56
        echo "
";
        
        $__internal_e2d87d570083eaf2d13ee3bf9c4257c86eadf0037c69d9b8c5fc517a2fb69ba6->leave($__internal_e2d87d570083eaf2d13ee3bf9c4257c86eadf0037c69d9b8c5fc517a2fb69ba6_prof);

    }

    // line 60
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_c9b022d6ee64793a67a250b25c4788440a4aee0ca4076a04e2d6e0e75d967fcd = $this->env->getExtension("native_profiler");
        $__internal_c9b022d6ee64793a67a250b25c4788440a4aee0ca4076a04e2d6e0e75d967fcd->enter($__internal_c9b022d6ee64793a67a250b25c4788440a4aee0ca4076a04e2d6e0e75d967fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 61
        echo "
    ";
        // line 62
        $context["url"] = "admin_attribute_list";
        // line 63
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_c9b022d6ee64793a67a250b25c4788440a4aee0ca4076a04e2d6e0e75d967fcd->leave($__internal_c9b022d6ee64793a67a250b25c4788440a4aee0ca4076a04e2d6e0e75d967fcd_prof);

    }

    public function getTemplateName()
    {
        return "AdminAttributeBundle:Attribute:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 63,  179 => 62,  176 => 61,  170 => 60,  162 => 56,  160 => 53,  159 => 52,  156 => 51,  150 => 49,  144 => 47,  142 => 46,  138 => 44,  124 => 43,  118 => 42,  101 => 41,  94 => 37,  90 => 36,  86 => 34,  80 => 33,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'attribute',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.attribute.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.attribute.single'|trans,*/
/*         'admin.attribute.plural'|trans,*/
/*         url('admin_attribute_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.attribute.field.name.title'|trans, width: 20 },*/
/*             { name: 'admin.attribute.field.name.values'|trans },*/
/*             { name: 'admin.attribute.field.enabled.title'|trans, width: 15 },*/
/*         ],*/
/*         class: 'attribute',*/
/*     } %}*/
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_attribute_edit', { id: entity.id }) }}">*/
/*             <strong>{{ entity.name }}</strong>*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {% for value in entity.values %}*/
/*             {{ value }}{% if not loop.last %},{% endif %}*/
/*         {% endfor %}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled == 1%}*/
/*             <span class="label label-ok">{{ 'ui.label.enabled'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label">{{ 'ui.label.disabled'|trans }}</span>*/
/*         {% endif %}*/
/*     </td>*/
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'attribute',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_attribute_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
