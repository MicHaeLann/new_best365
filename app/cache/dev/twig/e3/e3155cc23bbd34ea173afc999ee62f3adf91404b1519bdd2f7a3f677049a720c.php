<?php

/* AdminUserBundle:Customer:editComponent.html.twig */
class __TwigTemplate_b09e9bd5b0c12c57399ea015e26fe9cd50f987c01ee047cd475d2ed80f3699c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminUserBundle:Customer:editComponent.html.twig", 1);
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
        $__internal_adc988ac2932b7b47720d3e6e1cb9dea9a0e6a1d0b911bbcfb15cd063c1935b6 = $this->env->getExtension("native_profiler");
        $__internal_adc988ac2932b7b47720d3e6e1cb9dea9a0e6a1d0b911bbcfb15cd063c1935b6->enter($__internal_adc988ac2932b7b47720d3e6e1cb9dea9a0e6a1d0b911bbcfb15cd063c1935b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Customer:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "customer");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc988ac2932b7b47720d3e6e1cb9dea9a0e6a1d0b911bbcfb15cd063c1935b6->leave($__internal_adc988ac2932b7b47720d3e6e1cb9dea9a0e6a1d0b911bbcfb15cd063c1935b6_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_d57d931b8b69e9db422ceeb270fa19cc0e24c9f48b6f0038c185e64b6d56c778 = $this->env->getExtension("native_profiler");
        $__internal_d57d931b8b69e9db422ceeb270fa19cc0e24c9f48b6f0038c185e64b6d56c778->enter($__internal_d57d931b8b69e9db422ceeb270fa19cc0e24c9f48b6f0038c185e64b6d56c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("AdminCoreBundle::Common/flashMessages.html.twig", "AdminUserBundle:Customer:editComponent.html.twig", 14)->display($context);
        // line 15
        echo "
    ";
        // line 16
        $context["formAction"] = (($this->getAttribute(        // line 17
(isset($context["customer"]) ? $context["customer"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_customer_update", array("id" => $this->getAttribute(        // line 18
(isset($context["customer"]) ? $context["customer"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_customer_save")));
        // line 21
        echo "
    <div class=\"pr-l\">
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
    <fieldset>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h2 class=\"fw-n\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.section.login.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.section.login.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 36
        echo         // line 37
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("label" => "admin.customer.field.username.title", "attr" => array("placeholder" => "admin.customer.field.username.placeholder")));
        // line 43
        echo "
                        </li>
                        <li>
                            ";
        // line 46
        echo         // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => "admin.user.field.email.title", "attr" => array("placeholder" => "admin.user.field.email.placeholder")));
        // line 53
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h2 class=\"fw-n\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.section.contact.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.section.contact.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 70
        echo         // line 71
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'row', array("label" => "admin.user.field.firstname.title", "attr" => array("placeholder" => "admin.user.field.firstname.placeholder")));
        // line 77
        echo "
                        </li>
                        <li>
                            ";
        // line 80
        echo         // line 81
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'row', array("label" => "admin.user.field.lastname.title", "attr" => array("placeholder" => "admin.user.field.lastname.placeholder")));
        // line 87
        echo "
                        </li>
                        <li>
                            ";
        // line 90
        echo         // line 91
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identityDocument", array()), 'row', array("label" => "admin.customer.field.identity_document.title", "attr" => array("placeholder" => "admin.customer.field.identity_document.placeholder")));
        // line 97
        echo "
                        </li>
                    </ol>
                    <ol class=\"grid\">
                        <li class=\"col-1-2\">
                            <div class=\"pr-l\">
                            ";
        // line 103
        echo         // line 104
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'row', array("label" => "admin.customer.field.phone.title", "attr" => array("placeholder" => "admin.customer.field.phone.placeholder")));
        // line 110
        echo "
                            </div>
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 114
        echo         // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'row', array("label" => "admin.user.field.birthday.title"));
        // line 118
        echo "
                        </li>
                    </ol>
                    <ol class=\"grid\">
                        <li class=\"col-1-2\">
                            <div class=\"pr-l\">
                            ";
        // line 124
        echo         // line 125
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'row', array("label" => "admin.user.field.gender.title"));
        // line 128
        echo "
                            </div>
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 132
        echo         // line 133
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'row', array("label" => "admin.customer.field.language.title"));
        // line 136
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h2 class=\"fw-n\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.section.status.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.customer.section.status.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol class=\"grid\">
                        <li class=\"col-1-3\">
                            ";
        // line 153
        echo         // line 154
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.user.field.enabled.title"));
        // line 157
        echo "
                        </li>
                        <li class=\"col-1-3\">
                            ";
        // line 160
        echo         // line 161
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "guest", array()), 'row', array("label" => "admin.customer.field.guest.title"));
        // line 164
        echo "
                        </li>
                        <li class=\"col-1-3\">
                            ";
        // line 167
        echo         // line 168
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newsletter", array()), 'row', array("label" => "admin.customer.field.newsletter.title"));
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
        echo $this->env->getExtension('routing')->getPath("admin_customer_list");
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
</div>

";
        
        $__internal_d57d931b8b69e9db422ceeb270fa19cc0e24c9f48b6f0038c185e64b6d56c778->leave($__internal_d57d931b8b69e9db422ceeb270fa19cc0e24c9f48b6f0038c185e64b6d56c778_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Customer:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 187,  239 => 183,  235 => 182,  222 => 171,  220 => 168,  219 => 167,  214 => 164,  212 => 161,  211 => 160,  206 => 157,  204 => 154,  203 => 153,  193 => 146,  189 => 145,  178 => 136,  176 => 133,  175 => 132,  169 => 128,  167 => 125,  166 => 124,  158 => 118,  156 => 115,  155 => 114,  149 => 110,  147 => 104,  146 => 103,  138 => 97,  136 => 91,  135 => 90,  130 => 87,  128 => 81,  127 => 80,  122 => 77,  120 => 71,  119 => 70,  109 => 63,  105 => 62,  94 => 53,  92 => 47,  91 => 46,  86 => 43,  84 => 37,  83 => 36,  73 => 29,  69 => 28,  61 => 23,  57 => 21,  55 => 18,  54 => 17,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'customer',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% include 'AdminCoreBundle::Common/flashMessages.html.twig' %}*/
/* */
/*     {% set formAction =*/
/*         customer.id*/
/*             ? url('admin_customer_update', { id: customer.id })*/
/*             : url('admin_customer_save')*/
/*      %}*/
/* */
/*     <div class="pr-l">*/
/*     {{ form_start(form, { action: formAction }) }}*/
/*     <fieldset>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h2 class="fw-n">{{ 'admin.customer.section.login.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.customer.section.login.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.username, {*/
/*                                     label: 'admin.customer.field.username.title',*/
/*                                     attr: {*/
/*                                         placeholder: 'admin.customer.field.username.placeholder',*/
/*                                     }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.email, {*/
/*                                     label: 'admin.user.field.email.title',*/
/*                                     attr: {*/
/*                                         placeholder: 'admin.user.field.email.placeholder',*/
/*                                     }*/
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
/*                     <h2 class="fw-n">{{ 'admin.customer.section.contact.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.customer.section.contact.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.firstname, {*/
/*                                     label: 'admin.user.field.firstname.title',*/
/*                                     attr: {*/
/*                                         placeholder: 'admin.user.field.firstname.placeholder',*/
/*                                     }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.lastname, {*/
/*                                     label: 'admin.user.field.lastname.title',*/
/*                                     attr: {*/
/*                                         placeholder: 'admin.user.field.lastname.placeholder',*/
/*                                     }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.identityDocument, {*/
/*                                     label: 'admin.customer.field.identity_document.title',*/
/*                                     attr: {*/
/*                                         placeholder: 'admin.customer.field.identity_document.placeholder',*/
/*                                     }*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-2">*/
/*                             <div class="pr-l">*/
/*                             {{*/
/*                                 form_row(form.phone, {*/
/*                                     label: 'admin.customer.field.phone.title',*/
/*                                     attr: {*/
/*                                         placeholder: 'admin.customer.field.phone.placeholder',*/
/*                                     }*/
/*                                 })*/
/*                             }}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.birthday, {*/
/*                                     label: 'admin.user.field.birthday.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-2">*/
/*                             <div class="pr-l">*/
/*                             {{*/
/*                                 form_row(form.gender, {*/
/*                                     label: 'admin.user.field.gender.title',*/
/*                                 })*/
/*                             }}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.language, {*/
/*                                     label: 'admin.customer.field.language.title',*/
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
/*                     <h2 class="fw-n">{{ 'admin.customer.section.status.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.customer.section.status.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-3">*/
/*                             {{*/
/*                                 form_row(form.enabled, {*/
/*                                     label: 'admin.user.field.enabled.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li class="col-1-3">*/
/*                             {{*/
/*                                 form_row(form.guest, {*/
/*                                     label: 'admin.customer.field.guest.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li class="col-1-3">*/
/*                             {{*/
/*                                 form_row(form.newsletter, {*/
/*                                     label: 'admin.customer.field.newsletter.title',*/
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
/*                 <a href="{{ path('admin_customer_list') }}" id="cancel-button">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock content %}*/
/* */
