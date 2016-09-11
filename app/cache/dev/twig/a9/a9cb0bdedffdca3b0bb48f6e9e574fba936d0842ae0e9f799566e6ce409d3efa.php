<?php

/* AdminCouponBundle:Coupon:editComponent.html.twig */
class __TwigTemplate_6f691703a0f94921bac7e16c5f442076b3102c41bd994f64cabf8a9658afca88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminCouponBundle:Coupon:editComponent.html.twig", 1);
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
        $__internal_1c89141ffadbbf568fca427a80923a772527497b791b50b77fbce8076ebee1c1 = $this->env->getExtension("native_profiler");
        $__internal_1c89141ffadbbf568fca427a80923a772527497b791b50b77fbce8076ebee1c1->enter($__internal_1c89141ffadbbf568fca427a80923a772527497b791b50b77fbce8076ebee1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCouponBundle:Coupon:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "coupon");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c89141ffadbbf568fca427a80923a772527497b791b50b77fbce8076ebee1c1->leave($__internal_1c89141ffadbbf568fca427a80923a772527497b791b50b77fbce8076ebee1c1_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_c094666a3c08b93389c9f2c1d03cb15d2f9f2d7c3843c1646d76f552cffe81a7 = $this->env->getExtension("native_profiler");
        $__internal_c094666a3c08b93389c9f2c1d03cb15d2f9f2d7c3843c1646d76f552cffe81a7->enter($__internal_c094666a3c08b93389c9f2c1d03cb15d2f9f2d7c3843c1646d76f552cffe81a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["coupon"]) ? $context["coupon"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_coupon_update", array("id" => $this->getAttribute(        // line 16
(isset($context["coupon"]) ? $context["coupon"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_coupon_save")));
        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
    <fieldset data-fc-modules=\"form-coupons\">
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.basic.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.basic.description.0"), "html", null, true);
        echo "</p>
                    <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.basic.description.1"), "html", null, true);
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
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code", array()), 'row', array("label" => "admin.coupon.field.code.title", "attr" => array("placeholder" => "admin.coupon.field.code.placeholder")));
        // line 39
        echo "
                        </li>
                        <li>
                            ";
        // line 42
        echo         // line 43
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row', array("label" => "admin.coupon.field.description.title", "attr" => array("placeholder" => "admin.coupon.field.description.placeholder")));
        // line 47
        echo "
                        </li>
                    </ol>
                    <ol class=\"grid\">
                        <li class=\"col-1-2\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'row', array("label" => "admin.coupon.field.type.title"));
        echo "
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enforcement", array()), 'row', array("label" => "admin.coupon.field.enforcement.title"));
        echo "
                        </li>
                    </ol>
                    <ol>
                        <li>
                            ";
        // line 60
        echo         // line 61
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stackable", array()), 'row', array("label" => "admin.coupon.field.stackable.title"));
        // line 64
        echo "
                        </li>
                    </ol>

                </div>
            </div>
        </div>
        <div id=\"fixed-amount\" class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.fixed_amount.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.fixed_amount.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("label" => "admin.coupon.field.price.title"));
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div id=\"percent-amount\" class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.percent_amount.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.percent_amount.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'row', array("label" => "admin.coupon.field.discount.title"));
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
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.field.rule.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.rules.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 116
        echo         // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rule", array()), 'row', array("label" => "admin.coupon.field.rule.title", "placeholder" => "admin.coupon.field.rule.placeholder"));
        // line 121
        echo "
                        </li>
                        <li class=\"d-n\">
                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "priority", array()), 'row', array("label" => "admin.coupon.field.priority.title"));
        echo "
                        </li>
                    </ol>
                    <ol>
                        <li class=\"col-1-2\">
                            ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minimumPurchase", array()), 'row', array("label" => "admin.coupon.field.minimum_purchase.title"));
        echo "
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "count", array()), 'row', array("label" => "admin.coupon.field.count.title"));
        echo "
                            <div class=\"d-n\">
                                ";
        // line 134
        echo         // line 135
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "used", array()), 'row', array("label" => "admin.coupon.field.used.title", "attr" => array("readonly" => true)));
        // line 139
        echo "
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class=\"grid o-v\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.validity.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.section.validity.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3 o-v\">
                <div class=\"box o-v\">
                    <h5>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.coupon.field.datetime.title"), "html", null, true);
        echo "</h5>
                    <ol class=\"grid\">
                        <li class=\"col-1-2 date-hour o-v\">
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "validFrom", array()), 'row', array("label" => "admin.coupon.field.valid_from.title"));
        echo "
                        </li>
                        <li  class=\"col-1-2 date-hour\">
                            ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "validTo", array()), 'row', array("label" => "admin.coupon.field.valid_to.title"));
        echo "
                        </li>
                    </ol>
                    <hr />
                    <ol>
                        <li>
                            ";
        // line 167
        echo         // line 168
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.coupon.field.enabled.title"));
        // line 171
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class=\"grid fixed-bottom animated fade-in-up\">
            <div class=\"col-1-3\">
                &nbsp;
            </div>
            <div class=\"col-2-3\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("admin_coupon_list");
        echo "\" id=\"cancel-button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </fieldset>
    ";
        // line 187
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_c094666a3c08b93389c9f2c1d03cb15d2f9f2d7c3843c1646d76f552cffe81a7->leave($__internal_c094666a3c08b93389c9f2c1d03cb15d2f9f2d7c3843c1646d76f552cffe81a7_prof);

    }

    public function getTemplateName()
    {
        return "AdminCouponBundle:Coupon:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 187,  289 => 183,  285 => 182,  272 => 171,  270 => 168,  269 => 167,  260 => 161,  254 => 158,  248 => 155,  240 => 150,  236 => 149,  224 => 139,  222 => 135,  221 => 134,  216 => 132,  210 => 129,  202 => 124,  197 => 121,  195 => 117,  194 => 116,  184 => 109,  180 => 108,  168 => 99,  158 => 92,  154 => 91,  142 => 82,  132 => 75,  128 => 74,  116 => 64,  114 => 61,  113 => 60,  105 => 55,  99 => 52,  92 => 47,  90 => 43,  89 => 42,  84 => 39,  82 => 35,  81 => 34,  71 => 27,  67 => 26,  63 => 25,  55 => 20,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'coupon',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         coupon.id*/
/*             ? url('admin_coupon_update', { id: coupon.id })*/
/*             : url('admin_coupon_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*     <fieldset data-fc-modules="form-coupons">*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.coupon.section.basic.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.coupon.section.basic.description.0'|trans }}</p>*/
/*                     <p>{{ 'admin.coupon.section.basic.description.1'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.code, {*/
/*                                     label: 'admin.coupon.field.code.title',*/
/*                                     attr: { placeholder: 'admin.coupon.field.code.placeholder' }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.name, {*/
/*                                     label: 'admin.coupon.field.description.title',*/
/*                                     attr: { placeholder: 'admin.coupon.field.description.placeholder' }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-2">*/
/*                             {{ form_row(form.type, { label: 'admin.coupon.field.type.title' }) }}*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{ form_row(form.enforcement, { label: 'admin.coupon.field.enforcement.title' } ) }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                             form_row(form.stackable, {*/
/*                                 label: 'admin.coupon.field.stackable.title',*/
/*                             })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="fixed-amount" class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.coupon.section.fixed_amount.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.coupon.section.fixed_amount.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{ form_row(form.price, { label: 'admin.coupon.field.price.title' }) }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="percent-amount" class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.coupon.section.percent_amount.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.coupon.section.percent_amount.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{ form_row(form.discount, { label: 'admin.coupon.field.discount.title' }) }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.coupon.field.rule.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.coupon.section.rules.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.rule, {*/
/*                                     label: 'admin.coupon.field.rule.title',*/
/*                                     placeholder: 'admin.coupon.field.rule.placeholder',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li class="d-n">*/
/*                             {{ form_row(form.priority, { label: 'admin.coupon.field.priority.title' }) }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol>*/
/*                         <li class="col-1-2">*/
/*                             {{ form_row(form.minimumPurchase, { label: 'admin.coupon.field.minimum_purchase.title' }) }}*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{ form_row(form.count, { label: 'admin.coupon.field.count.title' }) }}*/
/*                             <div class="d-n">*/
/*                                 {{*/
/*                                     form_row(form.used, {*/
/*                                         label: 'admin.coupon.field.used.title',*/
/*                                         attr: { readonly: true },*/
/*                                     })*/
/*                                 }}*/
/*                             </div>*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid o-v">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.coupon.section.validity.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.coupon.section.validity.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3 o-v">*/
/*                 <div class="box o-v">*/
/*                     <h5>{{ 'admin.coupon.field.datetime.title'|trans }}</h5>*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-2 date-hour o-v">*/
/*                             {{ form_row(form.validFrom, { label: 'admin.coupon.field.valid_from.title' }) }}*/
/*                         </li>*/
/*                         <li  class="col-1-2 date-hour">*/
/*                             {{ form_row(form.validTo, { label: 'admin.coupon.field.valid_to.title' }) }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <hr />*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.enabled, {*/
/*                                     label: 'admin.coupon.field.enabled.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_coupon_list') }}" id="cancel-button">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
