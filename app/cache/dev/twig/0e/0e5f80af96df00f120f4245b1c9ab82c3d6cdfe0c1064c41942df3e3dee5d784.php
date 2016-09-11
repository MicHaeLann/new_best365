<?php

/* ElcodiCustomShippingBundle:ShippingRange:editComponent.html.twig */
class __TwigTemplate_6b88654c31a146f1080180649b34213b196ac02d3126cf8cf0cb1303090c3c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "ElcodiCustomShippingBundle:ShippingRange:editComponent.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/formComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23a1f99e9a18ac2a42c08cafabaf95203bb47aa296560e0a408b870eba99308e = $this->env->getExtension("native_profiler");
        $__internal_23a1f99e9a18ac2a42c08cafabaf95203bb47aa296560e0a408b870eba99308e->enter($__internal_23a1f99e9a18ac2a42c08cafabaf95203bb47aa296560e0a408b870eba99308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:ShippingRange:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "shipping_range");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a1f99e9a18ac2a42c08cafabaf95203bb47aa296560e0a408b870eba99308e->leave($__internal_23a1f99e9a18ac2a42c08cafabaf95203bb47aa296560e0a408b870eba99308e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8907c384c9077f2cdea1749b3d2522fc3878657a6a89cb783e8d00ed454710e = $this->env->getExtension("native_profiler");
        $__internal_d8907c384c9077f2cdea1749b3d2522fc3878657a6a89cb783e8d00ed454710e->enter($__internal_d8907c384c9077f2cdea1749b3d2522fc3878657a6a89cb783e8d00ed454710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["shippingRange"]) ? $context["shippingRange"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_shipping_range_update", array("carrierId" => $this->getAttribute(        // line 16
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array()), "id" => $this->getAttribute((isset($context["shippingRange"]) ? $context["shippingRange"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_shipping_range_save", array("carrierId" => $this->getAttribute(        // line 17
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array())))));
        // line 19
        echo "
    <div data-fc-modules=\"form-shipping-rates\">
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.section.basic.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.section.basic.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 34
        echo         // line 35
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row', array("label" => "admin.shipping_range.field.name.title", "attr" => array("placeholder" => "admin.shipping_range.field.name.placeholder")));
        // line 39
        echo "
                        </li>
                        <li>
                            ";
        // line 42
        echo         // line 43
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "toZone", array()), 'row', array("label" => "admin.shipping_range.field.to_zone.title"));
        // line 46
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.section.pricing.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.shipping_range.section.pricing.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol class=\"grid\">
                        <li class=\"col-1-2\">
                            ";
        // line 63
        echo         // line 64
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("label" => "admin.shipping_range.field.price.title"));
        // line 67
        echo "
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 70
        echo         // line 71
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'row', array("label" => "admin.shipping_range.field.type.title"));
        // line 74
        echo "
                        </li>
                    </ol>
                    <ol id=\"apply-price\" class=\"grid\">
                        <li class=\"col-1-2\">
                            ";
        // line 79
        echo         // line 80
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fromPrice", array()), 'row', array("label" => "admin.shipping_range.field.fromPrice.title"));
        // line 83
        echo "
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 86
        echo         // line 87
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "toPrice", array()), 'row', array("label" => "admin.shipping_range.field.toPrice.title"));
        // line 90
        echo "
                        </li>
                    </ol>
                    <ol id=\"apply-weight\" class=\"grid\">
                        <li class=\"col-1-2\">
                            <div class=\"pr-l\">
                            ";
        // line 96
        echo         // line 97
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fromWeight", array()), 'row', array("label" => "admin.shipping_range.field.fromWeight.title"));
        // line 100
        echo "
                            </div>
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 104
        echo         // line 105
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "toWeight", array()), 'row', array("label" => "admin.shipping_range.field.toWeight.title"));
        // line 108
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        </fieldset>
        <div class=\"grid fixed-bottom animated fade-in-up\">
            <div class=\"col-1-3\">
                &nbsp;
            </div>
            <div class=\"col-2-3\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("admin_carrier_list");
        echo "\" id=\"cancel-button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 124
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

";
        
        $__internal_d8907c384c9077f2cdea1749b3d2522fc3878657a6a89cb783e8d00ed454710e->leave($__internal_d8907c384c9077f2cdea1749b3d2522fc3878657a6a89cb783e8d00ed454710e_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:ShippingRange:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 124,  182 => 121,  178 => 120,  164 => 108,  162 => 105,  161 => 104,  155 => 100,  153 => 97,  152 => 96,  144 => 90,  142 => 87,  141 => 86,  136 => 83,  134 => 80,  133 => 79,  126 => 74,  124 => 71,  123 => 70,  118 => 67,  116 => 64,  115 => 63,  105 => 56,  101 => 55,  90 => 46,  88 => 43,  87 => 42,  82 => 39,  80 => 35,  79 => 34,  69 => 27,  65 => 26,  57 => 21,  53 => 19,  51 => 17,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'shipping_range',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         shippingRange.id*/
/*             ? url('admin_shipping_range_update', { carrierId: carrier.id, id: shippingRange.id })*/
/*             : url('admin_shipping_range_save', { carrierId: carrier.id })*/
/*     %}*/
/* */
/*     <div data-fc-modules="form-shipping-rates">*/
/*         {{ form_start(form, { action: formAction}) }}*/
/*         <fieldset>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.shipping_range.section.basic.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.shipping_range.section.basic.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.name, {*/
/*                                     label: 'admin.shipping_range.field.name.title',*/
/*                                     attr: { placeholder: 'admin.shipping_range.field.name.placeholder' }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.toZone, {*/
/*                                     label: 'admin.shipping_range.field.to_zone.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.shipping_range.section.pricing.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.shipping_range.section.pricing.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.price, {*/
/*                                     label: 'admin.shipping_range.field.price.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.type, {*/
/*                                     label: 'admin.shipping_range.field.type.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol id="apply-price" class="grid">*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.fromPrice, {*/
/*                                     label: 'admin.shipping_range.field.fromPrice.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.toPrice, {*/
/*                                     label: 'admin.shipping_range.field.toPrice.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol id="apply-weight" class="grid">*/
/*                         <li class="col-1-2">*/
/*                             <div class="pr-l">*/
/*                             {{*/
/*                                 form_row(form.fromWeight, {*/
/*                                     label: 'admin.shipping_range.field.fromWeight.title',*/
/*                                 })*/
/*                             }}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.toWeight, {*/
/*                                     label: 'admin.shipping_range.field.toWeight.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </fieldset>*/
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_carrier_list') }}" id="cancel-button">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
