<?php

/* AdminStoreBundle:Store:settings.html.twig */
class __TwigTemplate_de367c03d4c6ead7dd3c5312c1052f8513a0c989ce8c98a608f1296692ff11c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminStoreBundle:Store:settings.html.twig", 1);
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
        $__internal_0f31c589dbdc5797b433194b1a4a2d0cbe3cebf2075511bab8533ac54475a789 = $this->env->getExtension("native_profiler");
        $__internal_0f31c589dbdc5797b433194b1a4a2d0cbe3cebf2075511bab8533ac54475a789->enter($__internal_0f31c589dbdc5797b433194b1a4a2d0cbe3cebf2075511bab8533ac54475a789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminStoreBundle:Store:settings.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 7
        $context["elcodi_context"] = array("entity_type" => "store");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f31c589dbdc5797b433194b1a4a2d0cbe3cebf2075511bab8533ac54475a789->leave($__internal_0f31c589dbdc5797b433194b1a4a2d0cbe3cebf2075511bab8533ac54475a789_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f4d2044e473b2f379b322de53eb0662d2199932d39cb66c42b77170a7c44ba88 = $this->env->getExtension("native_profiler");
        $__internal_f4d2044e473b2f379b322de53eb0662d2199932d39cb66c42b77170a7c44ba88->enter($__internal_f4d2044e473b2f379b322de53eb0662d2199932d39cb66c42b77170a7c44ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminStoreBundle:Store:settings.html.twig", 14)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.plural"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.section.store.title"), "active" => true)))));
        // line 20
        echo "
";
        
        $__internal_f4d2044e473b2f379b322de53eb0662d2199932d39cb66c42b77170a7c44ba88->leave($__internal_f4d2044e473b2f379b322de53eb0662d2199932d39cb66c42b77170a7c44ba88_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_5182f17c74e359e81ed2440c1e531ef05e196fd1cbdc58514398156e39fb2ab8 = $this->env->getExtension("native_profiler");
        $__internal_5182f17c74e359e81ed2440c1e531ef05e196fd1cbdc58514398156e39fb2ab8->enter($__internal_5182f17c74e359e81ed2440c1e531ef05e196fd1cbdc58514398156e39fb2ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.store.section.status.title"), "html", null, true);
        echo "</h3>
                <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.store.section.status.description"), "html", null, true);
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
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.store.field.enabled.title", "attr" => array("placeholder" => "admin.store.field.enabled.placeholder")));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.store.section.stock.title"), "html", null, true);
        echo "</h3>
                <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.store.section.stock.description"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"col-2-3\">
            <div class=\"box\">
                <ol>
                    <li>
                        ";
        // line 63
        echo         // line 64
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "useStock", array()), 'row', array("label" => "admin.store.field.useStock.title", "attr" => array("placeholder" => "admin.store.field.useStock.placeholder")));
        // line 70
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.store.section.advanced.title"), "html", null, true);
        echo "</h3>
                <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.store.section.advanced.description"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"col-2-3\">
            <div class=\"box\">
                <ol>
                    <li>
                        ";
        // line 88
        echo         // line 89
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "routingStrategy", array()), 'row', array("label" => "admin.store.field.routingStrategy.title"));
        // line 92
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
            <button id=\"submit-save\" type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
        </div>
    </div>
";
        // line 108
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_5182f17c74e359e81ed2440c1e531ef05e196fd1cbdc58514398156e39fb2ab8->leave($__internal_5182f17c74e359e81ed2440c1e531ef05e196fd1cbdc58514398156e39fb2ab8_prof);

    }

    public function getTemplateName()
    {
        return "AdminStoreBundle:Store:settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 108,  165 => 105,  150 => 92,  148 => 89,  147 => 88,  137 => 81,  133 => 80,  121 => 70,  119 => 64,  118 => 63,  108 => 56,  104 => 55,  93 => 46,  91 => 40,  90 => 39,  80 => 32,  76 => 31,  68 => 26,  65 => 25,  59 => 24,  51 => 20,  49 => 14,  46 => 13,  40 => 12,  33 => 1,  31 => 7,  29 => 4,  11 => 1,);
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
/*             { name: 'admin.settings.plural'|trans, active: false },*/
/*             { name: 'admin.settings.section.store.title'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* {{ form_start(form, { action: formAction }) }}*/
/* <fieldset>*/
/*     <div class="grid">*/
/*         <div class="col-1-3">*/
/*             <div class="box-none">*/
/*                 <h3 class="fw-n">{{ 'admin.store.section.status.title'|trans }}</h3>*/
/*                 <p>{{ 'admin.store.section.status.description'|trans }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <div class="box">*/
/*                 <ol>*/
/*                     <li>*/
/*                         {{*/
/*                         form_row(form.enabled, {*/
/*                             label: 'admin.store.field.enabled.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.store.field.enabled.placeholder'*/
/*                             }*/
/*                         })*/
/*                         }}*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-3">*/
/*             <div class="box-none">*/
/*                 <h3 class="fw-n">{{ 'admin.store.section.stock.title'|trans }}</h3>*/
/*                 <p>{{ 'admin.store.section.stock.description'|trans }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <div class="box">*/
/*                 <ol>*/
/*                     <li>*/
/*                         {{*/
/*                         form_row(form.useStock, {*/
/*                             label: 'admin.store.field.useStock.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.store.field.useStock.placeholder'*/
/*                             }*/
/*                         })*/
/*                         }}*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/* */
/*         <div class="col-1-3">*/
/*             <div class="box-none">*/
/*                 <h3 class="fw-n">{{ 'admin.store.section.advanced.title'|trans }}</h3>*/
/*                 <p>{{ 'admin.store.section.advanced.description'|trans }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <div class="box">*/
/*                 <ol>*/
/*                     <li>*/
/*                         {{*/
/*                         form_row(form.routingStrategy, {*/
/*                             label: 'admin.store.field.routingStrategy.title',*/
/*                         })*/
/*                         }}*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </fieldset>*/
/*     <div class="grid fixed-bottom animated fade-in-up">*/
/*         <div class="col-1-3">*/
/*             &nbsp;*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <button id="submit-save" type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*         </div>*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
