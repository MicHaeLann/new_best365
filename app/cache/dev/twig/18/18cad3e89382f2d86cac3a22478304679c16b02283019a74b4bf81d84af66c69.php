<?php

/* AdminStoreBundle:Store:corporate.html.twig */
class __TwigTemplate_7d30449176e5878b2bdcdb6c306f14202821c877c83a17d66ea00927430eb560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50cb22379eb2fd9dfce5c496a4adc374a5e2b065b8d8e1be875d2c388ad901dd = $this->env->getExtension("native_profiler");
        $__internal_50cb22379eb2fd9dfce5c496a4adc374a5e2b065b8d8e1be875d2c388ad901dd->enter($__internal_50cb22379eb2fd9dfce5c496a4adc374a5e2b065b8d8e1be875d2c388ad901dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminStoreBundle:Store:corporate.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 7
        $context["elcodi_context"] = array("entity_type" => "store");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50cb22379eb2fd9dfce5c496a4adc374a5e2b065b8d8e1be875d2c388ad901dd->leave($__internal_50cb22379eb2fd9dfce5c496a4adc374a5e2b065b8d8e1be875d2c388ad901dd_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5afeb46d18344d2f1e4697063e28d849c9d731b2a0787ede7feb02a0de30cba8 = $this->env->getExtension("native_profiler");
        $__internal_5afeb46d18344d2f1e4697063e28d849c9d731b2a0787ede7feb02a0de30cba8->enter($__internal_5afeb46d18344d2f1e4697063e28d849c9d731b2a0787ede7feb02a0de30cba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 14)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.menu.design"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.section.profile.title"), "active" => true)))));
        // line 20
        echo "
";
        
        $__internal_5afeb46d18344d2f1e4697063e28d849c9d731b2a0787ede7feb02a0de30cba8->leave($__internal_5afeb46d18344d2f1e4697063e28d849c9d731b2a0787ede7feb02a0de30cba8_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_86fd682854aa9e9518d5917863de26c8823a6203c3ab1b18bbf06af53a573740 = $this->env->getExtension("native_profiler");
        $__internal_86fd682854aa9e9518d5917863de26c8823a6203c3ab1b18bbf06af53a573740->enter($__internal_86fd682854aa9e9518d5917863de26c8823a6203c3ab1b18bbf06af53a573740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
    <fieldset>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.identity.section.info.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.identity.section.info.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol>
                        <li>
                            ";
        // line 39
        echo         // line 40
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row', array("label" => "admin.identity.field.name.title", "attr" => array("placeholder" => "admin.identity.field.name.placeholder")));
        // line 46
        echo "
                        </li>
                        <li>
                            ";
        // line 49
        echo         // line 50
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "leitmotiv", array()), 'row', array("label" => "admin.identity.field.leitmotiv.title", "attr" => array("placeholder" => "admin.identity.field.leitmotiv.placeholder")));
        // line 56
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        ";
        // line 63
        $this->loadTemplate("@AdminMedia/Module/_image-single-form-field.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 63)->display(array_merge($context, array("sectionTitle" => "admin.identity.section.logo.title", "sectionDescription" => "admin.identity.section.logo.description", "image" => $this->getAttribute(        // line 66
(isset($context["store"]) ? $context["store"] : null), "logo", array()), "imageForm" => $this->getAttribute(        // line 67
(isset($context["form"]) ? $context["form"] : null), "logo", array()), "imageName" => "logo", "imageWidth" => 300, "imageHeight" => 100)));
        // line 72
        echo "
        ";
        // line 73
        $this->loadTemplate("@AdminMedia/Module/_image-single-form-field.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 73)->display(array_merge($context, array("sectionTitle" => "admin.identity.section.secondaryLogo.title", "sectionDescription" => "admin.identity.section.secondaryLogo.description", "image" => $this->getAttribute(        // line 76
(isset($context["store"]) ? $context["store"] : null), "secondaryLogo", array()), "imageForm" => $this->getAttribute(        // line 77
(isset($context["form"]) ? $context["form"] : null), "secondaryLogo", array()), "imageName" => "secondaryLogo", "imageWidth" => 300, "imageHeight" => 100)));
        // line 82
        echo "
        ";
        // line 83
        $this->loadTemplate("@AdminMedia/Module/_image-single-form-field.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 83)->display(array_merge($context, array("sectionTitle" => "admin.identity.section.mobileLogo.title", "sectionDescription" => "admin.identity.section.mobileLogo.description", "image" => $this->getAttribute(        // line 86
(isset($context["store"]) ? $context["store"] : null), "mobileLogo", array()), "imageForm" => $this->getAttribute(        // line 87
(isset($context["form"]) ? $context["form"] : null), "mobileLogo", array()), "imageName" => "mobileLogo", "imageWidth" => 300, "imageHeight" => 100)));
        // line 92
        echo "
        ";
        // line 93
        $this->loadTemplate("@AdminMedia/Module/_image-single-form-field.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 93)->display(array_merge($context, array("sectionTitle" => "admin.identity.section.headerImage.title", "sectionDescription" => "admin.identity.section.headerImage.description", "image" => $this->getAttribute(        // line 96
(isset($context["store"]) ? $context["store"] : null), "headerImage", array()), "imageForm" => $this->getAttribute(        // line 97
(isset($context["form"]) ? $context["form"] : null), "headerImage", array()), "imageName" => "headerImage", "imageWidth" => 600, "imageHeight" => 150)));
        // line 102
        echo "
        ";
        // line 103
        $this->loadTemplate("@AdminMedia/Module/_image-single-form-field.html.twig", "AdminStoreBundle:Store:corporate.html.twig", 103)->display(array_merge($context, array("sectionTitle" => "admin.identity.section.backgroundImage.title", "sectionDescription" => "admin.identity.section.backgroundImage.description", "image" => $this->getAttribute(        // line 106
(isset($context["store"]) ? $context["store"] : null), "backgroundImage", array()), "imageForm" => $this->getAttribute(        // line 107
(isset($context["form"]) ? $context["form"] : null), "backgroundImage", array()), "imageName" => "backgroundImage", "imageWidth" => 600, "imageHeight" => 400)));
        // line 112
        echo "
    </fieldset>
    <div class=\"grid fixed-bottom animated fade-in-up\">
        <div class=\"col-1-3\">
            &nbsp;
        </div>
        <div class=\"col-2-3\">
            <button id=\"submit-save\" type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
        </div>
    </div>
    ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_86fd682854aa9e9518d5917863de26c8823a6203c3ab1b18bbf06af53a573740->leave($__internal_86fd682854aa9e9518d5917863de26c8823a6203c3ab1b18bbf06af53a573740_prof);

    }

    public function getTemplateName()
    {
        return "AdminStoreBundle:Store:corporate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 122,  151 => 119,  142 => 112,  140 => 107,  139 => 106,  138 => 103,  135 => 102,  133 => 97,  132 => 96,  131 => 93,  128 => 92,  126 => 87,  125 => 86,  124 => 83,  121 => 82,  119 => 77,  118 => 76,  117 => 73,  114 => 72,  112 => 67,  111 => 66,  110 => 63,  101 => 56,  99 => 50,  98 => 49,  93 => 46,  91 => 40,  90 => 39,  80 => 32,  76 => 31,  68 => 26,  65 => 25,  59 => 24,  51 => 20,  49 => 14,  46 => 13,  40 => 12,  33 => 1,  31 => 7,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'store',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.menu.design'|trans, active: false },*/
/*             { name: 'admin.settings.section.profile.title'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*     <fieldset>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.identity.section.info.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.identity.section.info.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol>*/
/*                         <li>*/
/*                             {{*/
/*                             form_row(form.name, {*/
/*                                 label: 'admin.identity.field.name.title',*/
/*                                 attr: {*/
/*                                     placeholder: 'admin.identity.field.name.placeholder'*/
/*                                 }*/
/*                             })*/
/*                             }}*/
/*                         </li>*/
/*                         <li>*/
/*                             {{*/
/*                             form_row(form.leitmotiv, {*/
/*                                 label: 'admin.identity.field.leitmotiv.title',*/
/*                                 attr: {*/
/*                                     placeholder: 'admin.identity.field.leitmotiv.placeholder'*/
/*                                 }*/
/*                             })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% include "@AdminMedia/Module/_image-single-form-field.html.twig" with {*/
/*             sectionTitle: 'admin.identity.section.logo.title',*/
/*             sectionDescription: 'admin.identity.section.logo.description',*/
/*             image: store.logo,*/
/*             imageForm: form.logo,*/
/*             imageName : 'logo',*/
/*             imageWidth: 300,*/
/*             imageHeight: 100*/
/*         } %}*/
/* */
/*         {% include "@AdminMedia/Module/_image-single-form-field.html.twig" with {*/
/*             sectionTitle: 'admin.identity.section.secondaryLogo.title',*/
/*             sectionDescription: 'admin.identity.section.secondaryLogo.description',*/
/*             image: store.secondaryLogo,*/
/*             imageForm: form.secondaryLogo,*/
/*             imageName : 'secondaryLogo',*/
/*             imageWidth: 300,*/
/*             imageHeight: 100*/
/*         } %}*/
/* */
/*         {% include "@AdminMedia/Module/_image-single-form-field.html.twig" with {*/
/*             sectionTitle: 'admin.identity.section.mobileLogo.title',*/
/*             sectionDescription: 'admin.identity.section.mobileLogo.description',*/
/*             image: store.mobileLogo,*/
/*             imageForm: form.mobileLogo,*/
/*             imageName : 'mobileLogo',*/
/*             imageWidth: 300,*/
/*             imageHeight: 100*/
/*         } %}*/
/* */
/*         {% include "@AdminMedia/Module/_image-single-form-field.html.twig" with {*/
/*             sectionTitle: 'admin.identity.section.headerImage.title',*/
/*             sectionDescription: 'admin.identity.section.headerImage.description',*/
/*             image: store.headerImage,*/
/*             imageForm: form.headerImage,*/
/*             imageName : 'headerImage',*/
/*             imageWidth: 600,*/
/*             imageHeight: 150*/
/*         } %}*/
/* */
/*         {% include "@AdminMedia/Module/_image-single-form-field.html.twig" with {*/
/*             sectionTitle: 'admin.identity.section.backgroundImage.title',*/
/*             sectionDescription: 'admin.identity.section.backgroundImage.description',*/
/*             image: store.backgroundImage,*/
/*             imageForm: form.backgroundImage,*/
/*             imageName : 'backgroundImage',*/
/*             imageWidth: 600,*/
/*             imageHeight: 400*/
/*         } %}*/
/* */
/*     </fieldset>*/
/*     <div class="grid fixed-bottom animated fade-in-up">*/
/*         <div class="col-1-3">*/
/*             &nbsp;*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <button id="submit-save" type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*         </div>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
