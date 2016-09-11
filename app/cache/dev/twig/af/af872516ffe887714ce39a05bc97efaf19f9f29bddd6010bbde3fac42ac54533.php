<?php

/* AdminUserBundle:AdminUser:editComponent.html.twig */
class __TwigTemplate_e17e95a56ffe888abd0fbdedf19ec4f8991ff53854e39cc4b4e83f0a181b2b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminUserBundle:AdminUser:editComponent.html.twig", 1);
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
        $__internal_c6c93704c5b582cf04eb79ed7cf176cefcf39096d0492c2e52964009ed684c09 = $this->env->getExtension("native_profiler");
        $__internal_c6c93704c5b582cf04eb79ed7cf176cefcf39096d0492c2e52964009ed684c09->enter($__internal_c6c93704c5b582cf04eb79ed7cf176cefcf39096d0492c2e52964009ed684c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:AdminUser:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "admin_user");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c93704c5b582cf04eb79ed7cf176cefcf39096d0492c2e52964009ed684c09->leave($__internal_c6c93704c5b582cf04eb79ed7cf176cefcf39096d0492c2e52964009ed684c09_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_c571d7dd150b1a664fb139814e765e2dd584ffbe1c7310d0f85aeb90869d0b89 = $this->env->getExtension("native_profiler");
        $__internal_c571d7dd150b1a664fb139814e765e2dd584ffbe1c7310d0f85aeb90869d0b89->enter($__internal_c571d7dd150b1a664fb139814e765e2dd584ffbe1c7310d0f85aeb90869d0b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["adminUser"]) ? $context["adminUser"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_admin_user_update", array("id" => $this->getAttribute(        // line 16
(isset($context["adminUser"]) ? $context["adminUser"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_admin_user_save")));
        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
    <fieldset>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h2 class=\"fw-n\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.login.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.login.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 33
        echo         // line 34
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => "admin.user.field.email.title", "attr" => array("placeholder" => "admin.user.field.email.placeholder")));
        // line 40
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.password.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.password.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 57
        echo         // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'row', array("label" => "admin.user.field.password.title"));
        // line 61
        echo "
                        </li>
                        <li>
                            ";
        // line 64
        echo         // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new_password", array()), "first", array()), 'row', array("label" => "admin.user.field.new_password.first.title"));
        // line 68
        echo "
                        </li>
                        <li>
                            ";
        // line 71
        echo         // line 72
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new_password", array()), "second", array()), 'row', array("label" => "admin.user.field.new_password.second.title"));
        // line 75
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.contact.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.contact.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 92
        echo         // line 93
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'row', array("label" => "admin.user.field.firstname.title", "attr" => array("placeholder" => "admin.user.field.firstname.placeholder")));
        // line 99
        echo "
                        </li>
                        <li>
                            ";
        // line 102
        echo         // line 103
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'row', array("label" => "admin.user.field.lastname.title", "attr" => array("placeholder" => "admin.user.field.lastname.placeholder")));
        // line 109
        echo "
                        </li>
                    </ol>
                    <ol class=\"grid\">
                        <li class=\"col-1-2\">
                            <div class=\"pr-l\">
                                ";
        // line 115
        echo         // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'row', array("label" => "admin.user.field.gender.title"));
        // line 119
        echo "
                            </div>
                        </li>
                        <li class=\"col-1-2\">
                            ";
        // line 123
        echo         // line 124
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'row', array("label" => "admin.user.field.birthday.title"));
        // line 127
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class=\"grid";
        // line 133
        if (($this->getAttribute((isset($context["adminUser"]) ? $context["adminUser"] : null), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            echo " hidden";
        }
        echo "\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h2 class=\"fw-n\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.status.title"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.admin_user.section.status.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 144
        echo         // line 145
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.user.field.enabled.title"));
        // line 148
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
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("admin_admin_user_list");
        echo "\" id=\"cancel-button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </fieldset>
    ";
        // line 165
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_c571d7dd150b1a664fb139814e765e2dd584ffbe1c7310d0f85aeb90869d0b89->leave($__internal_c571d7dd150b1a664fb139814e765e2dd584ffbe1c7310d0f85aeb90869d0b89_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:AdminUser:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 165,  231 => 161,  227 => 160,  213 => 148,  211 => 145,  210 => 144,  200 => 137,  196 => 136,  188 => 133,  180 => 127,  178 => 124,  177 => 123,  171 => 119,  169 => 116,  168 => 115,  160 => 109,  158 => 103,  157 => 102,  152 => 99,  150 => 93,  149 => 92,  139 => 85,  135 => 84,  124 => 75,  122 => 72,  121 => 71,  116 => 68,  114 => 65,  113 => 64,  108 => 61,  106 => 58,  105 => 57,  95 => 50,  91 => 49,  80 => 40,  78 => 34,  77 => 33,  67 => 26,  63 => 25,  55 => 20,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'admin_user',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         adminUser.id*/
/*             ? url('admin_admin_user_update', { id: adminUser.id })*/
/*             : url('admin_admin_user_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*     <fieldset>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h2 class="fw-n">{{ 'admin.admin_user.section.login.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.admin_user.section.login.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
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
/*                     <h2 class="fw-n">{{ 'admin.admin_user.section.password.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.admin_user.section.password.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.password, {*/
/*                                     label: 'admin.user.field.password.title'*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.new_password.first, {*/
/*                                     label: 'admin.user.field.new_password.first.title'*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.new_password.second, {*/
/*                                     label: 'admin.user.field.new_password.second.title'*/
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
/*                     <h2 class="fw-n">{{ 'admin.admin_user.section.contact.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.admin_user.section.contact.description'|trans }}</p>*/
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
/*                     </ol>*/
/*                     <ol class="grid">*/
/*                         <li class="col-1-2">*/
/*                             <div class="pr-l">*/
/*                                 {{*/
/*                                     form_row(form.gender, {*/
/*                                         label: 'admin.user.field.gender.title',*/
/*                                     })*/
/*                                 }}*/
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
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid{% if adminUser.id == app.user.id %} hidden{% endif %}">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h2 class="fw-n">{{ 'admin.admin_user.section.status.title'|trans }}</h2>*/
/*                     <p>{{ 'admin.admin_user.section.status.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.enabled, {*/
/*                                     label: 'admin.user.field.enabled.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_admin_user_list') }}" id="cancel-button">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
