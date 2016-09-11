<?php

/* AdminCurrencyBundle:Currency/Component:listComponent.html.twig */
class __TwigTemplate_248890a96fa972994fd20099bd4a4174b8125a6616b118e4b6b7e52bf6dbb50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminCurrencyBundle:Currency/Component:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'table_attributes' => array($this, 'block_table_attributes'),
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
        $__internal_bf341bef8f5f6f3773e3267cb9dae0dc3003aac2dee0b82a252a6bc8d0678f9b = $this->env->getExtension("native_profiler");
        $__internal_bf341bef8f5f6f3773e3267cb9dae0dc3003aac2dee0b82a252a6bc8d0678f9b->enter($__internal_bf341bef8f5f6f3773e3267cb9dae0dc3003aac2dee0b82a252a6bc8d0678f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCurrencyBundle:Currency/Component:listComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf341bef8f5f6f3773e3267cb9dae0dc3003aac2dee0b82a252a6bc8d0678f9b->leave($__internal_bf341bef8f5f6f3773e3267cb9dae0dc3003aac2dee0b82a252a6bc8d0678f9b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ce5ae3ec97327bc9e54ca468e84276e36d9e4093c36270abe47caae816d25cc = $this->env->getExtension("native_profiler");
        $__internal_0ce5ae3ec97327bc9e54ca468e84276e36d9e4093c36270abe47caae816d25cc->enter($__internal_0ce5ae3ec97327bc9e54ca468e84276e36d9e4093c36270abe47caae816d25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.currency.list"), "html", null, true);
        
        $__internal_0ce5ae3ec97327bc9e54ca468e84276e36d9e4093c36270abe47caae816d25cc->leave($__internal_0ce5ae3ec97327bc9e54ca468e84276e36d9e4093c36270abe47caae816d25cc_prof);

    }

    // line 7
    public function block_table_attributes($context, array $blocks = array())
    {
        $__internal_4eaaaa04c7ad21788985dcde9bd08f492a3809b507d49be948481410bfc05a6d = $this->env->getExtension("native_profiler");
        $__internal_4eaaaa04c7ad21788985dcde9bd08f492a3809b507d49be948481410bfc05a6d->enter($__internal_4eaaaa04c7ad21788985dcde9bd08f492a3809b507d49be948481410bfc05a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_attributes"));

        echo "data-fc-modules=\"table,on-off-table\"";
        
        $__internal_4eaaaa04c7ad21788985dcde9bd08f492a3809b507d49be948481410bfc05a6d->leave($__internal_4eaaaa04c7ad21788985dcde9bd08f492a3809b507d49be948481410bfc05a6d_prof);

    }

    // line 10
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_d25745b29cb4ec35034ea73b9a747ea355401ebeec76bf62d8a67aad8cf20a9e = $this->env->getExtension("native_profiler");
        $__internal_d25745b29cb4ec35034ea73b9a747ea355401ebeec76bf62d8a67aad8cf20a9e->enter($__internal_d25745b29cb4ec35034ea73b9a747ea355401ebeec76bf62d8a67aad8cf20a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminCurrencyBundle:Currency/Component:listComponent.html.twig", 12)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.currency.field.symbol"), "width" => 10), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.currency.field.iso"), "width" => 10), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.currency.field.name")), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.currency.field.master"), "width" => 10), 4 => array("name" => $this->env->getExtension('translator')->trans("admin.currency.field.status"), "width" => 10)), "class" => "currency", "actions" => false)));
        // line 23
        echo "
";
        
        $__internal_d25745b29cb4ec35034ea73b9a747ea355401ebeec76bf62d8a67aad8cf20a9e->leave($__internal_d25745b29cb4ec35034ea73b9a747ea355401ebeec76bf62d8a67aad8cf20a9e_prof);

    }

    // line 27
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_11c56af8971dca3d7e26edfc2a2df03c2e7750394bd579595eb2ebd05b34d71e = $this->env->getExtension("native_profiler");
        $__internal_11c56af8971dca3d7e26edfc2a2df03c2e7750394bd579595eb2ebd05b34d71e->enter($__internal_11c56af8971dca3d7e26edfc2a2df03c2e7750394bd579595eb2ebd05b34d71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 28
        echo "
    <td>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "symbol", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "
    </td>
    <td>
        <div class=\"switch\">
            <input id=\"enable-";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "-master\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_currency_master", array("iso" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()))), "html", null, true);
        echo "\" />
            <input id=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "-master\" type=\"radio\" name=\"currency-master\" ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()) == $this->getAttribute($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "defaultCurrency", array()), "iso", array()))) {
            echo "checked=\"checked\"";
        }
        echo " />
            <label for=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "-master\"></label>
        </div>
    </td>
    <td>
        <div class=\"switch\">
            <input id=\"enable-";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_currency_enable", array("iso" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()))), "html", null, true);
        echo "\" />
            <input id=\"disable-";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_currency_disable", array("iso" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()))), "html", null, true);
        echo "\" />
            <input id=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            <label for=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso", array()), "html", null, true);
        echo "\"></label>
        </div>
    </td>

";
        
        $__internal_11c56af8971dca3d7e26edfc2a2df03c2e7750394bd579595eb2ebd05b34d71e->leave($__internal_11c56af8971dca3d7e26edfc2a2df03c2e7750394bd579595eb2ebd05b34d71e_prof);

    }

    // line 57
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_680fdc62c87c567ef2c2616abc9defad4eb6e5ed203c0b89ac58495f49be6768 = $this->env->getExtension("native_profiler");
        $__internal_680fdc62c87c567ef2c2616abc9defad4eb6e5ed203c0b89ac58495f49be6768->enter($__internal_680fdc62c87c567ef2c2616abc9defad4eb6e5ed203c0b89ac58495f49be6768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        echo "";
        
        $__internal_680fdc62c87c567ef2c2616abc9defad4eb6e5ed203c0b89ac58495f49be6768->leave($__internal_680fdc62c87c567ef2c2616abc9defad4eb6e5ed203c0b89ac58495f49be6768_prof);

    }

    public function getTemplateName()
    {
        return "AdminCurrencyBundle:Currency/Component:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  152 => 50,  144 => 49,  138 => 48,  132 => 47,  124 => 42,  116 => 41,  110 => 40,  103 => 36,  97 => 33,  91 => 30,  87 => 28,  81 => 27,  73 => 23,  71 => 12,  68 => 11,  62 => 10,  50 => 7,  38 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% block title 'admin.currency.list'|trans %}*/
/* */
/* */
/* {% block table_attributes 'data-fc-modules="table,on-off-table"' %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.currency.field.symbol'|trans, width: 10 },*/
/*             { name: 'admin.currency.field.iso'|trans, width: 10 },*/
/*             { name: 'admin.currency.field.name'|trans },*/
/*             { name: 'admin.currency.field.master'|trans, width: 10 },*/
/*             { name: 'admin.currency.field.status'|trans, width: 10 },*/
/*         ],*/
/*         class: 'currency',*/
/*         actions: false*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         {{ entity.symbol }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.iso }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.name }}*/
/*     </td>*/
/*     <td>*/
/*         <div class="switch">*/
/*             <input id="enable-{{ entity.iso }}-master" type="hidden" value="{{ url('admin_currency_master', { iso: entity.iso }) }}" />*/
/*             <input id="{{ entity.iso }}-master" type="radio" name="currency-master" {% if entity.iso == store.defaultCurrency.iso %}checked="checked"{% endif %} />*/
/*             <label for="{{ entity.iso }}-master"></label>*/
/*         </div>*/
/*     </td>*/
/*     <td>*/
/*         <div class="switch">*/
/*             <input id="enable-{{ entity.iso }}" type="hidden" value="{{ url('admin_currency_enable', { iso: entity.iso }) }}" />*/
/*             <input id="disable-{{ entity.iso }}" type="hidden" value="{{ url('admin_currency_disable', { iso: entity.iso }) }}" />*/
/*             <input id="{{ entity.iso }}" type="checkbox" {% if entity.enabled %}checked="checked"{% endif %} />*/
/*             <label for="{{ entity.iso }}"></label>*/
/*         </div>*/
/*     </td>*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links '' %}*/
/* */
