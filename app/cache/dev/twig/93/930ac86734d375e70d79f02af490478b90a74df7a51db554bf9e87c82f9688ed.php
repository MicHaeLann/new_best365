<?php

/* StoreTemplateBundle:Pages:user-password-recover.html.twig */
class __TwigTemplate_d5f8b949d1e8caef32649c2c8ed7226d150b61b0b29d5456554c440f329848fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-password-recover.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
            'prefooter' => array($this, 'block_prefooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d934fbf866dbbdb90a7f54471175e325e2f7cf370b989a11c7bb62b03dcfc3f4 = $this->env->getExtension("native_profiler");
        $__internal_d934fbf866dbbdb90a7f54471175e325e2f7cf370b989a11c7bb62b03dcfc3f4->enter($__internal_d934fbf866dbbdb90a7f54471175e325e2f7cf370b989a11c7bb62b03dcfc3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-password-recover.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "@StoreTemplate/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d934fbf866dbbdb90a7f54471175e325e2f7cf370b989a11c7bb62b03dcfc3f4->leave($__internal_d934fbf866dbbdb90a7f54471175e325e2f7cf370b989a11c7bb62b03dcfc3f4_prof);

    }

    // line 5
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_59823cdfbdec5445aea8a018fadb0840809daa83b7e981259e7bdc340f328097 = $this->env->getExtension("native_profiler");
        $__internal_59823cdfbdec5445aea8a018fadb0840809daa83b7e981259e7bdc340f328097->enter($__internal_59823cdfbdec5445aea8a018fadb0840809daa83b7e981259e7bdc340f328097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_59823cdfbdec5445aea8a018fadb0840809daa83b7e981259e7bdc340f328097->leave($__internal_59823cdfbdec5445aea8a018fadb0840809daa83b7e981259e7bdc340f328097_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_7cdd8f519ec1bf218813f5981866b7d93526420185a7db61ce2b35ef58fffe9f = $this->env->getExtension("native_profiler");
        $__internal_7cdd8f519ec1bf218813f5981866b7d93526420185a7db61ce2b35ef58fffe9f->enter($__internal_7cdd8f519ec1bf218813f5981866b7d93526420185a7db61ce2b35ef58fffe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7cdd8f519ec1bf218813f5981866b7d93526420185a7db61ce2b35ef58fffe9f->leave($__internal_7cdd8f519ec1bf218813f5981866b7d93526420185a7db61ce2b35ef58fffe9f_prof);

    }

    // line 9
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_f3ce2fb3bf46db67f49c062ea23fc7ca49b66e1d248f18c7fd16c145df030c98 = $this->env->getExtension("native_profiler");
        $__internal_f3ce2fb3bf46db67f49c062ea23fc7ca49b66e1d248f18c7fd16c145df030c98->enter($__internal_f3ce2fb3bf46db67f49c062ea23fc7ca49b66e1d248f18c7fd16c145df030c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 10
        echo "    <div class=\"form\">
        <div class=\"grid\">
            <div class=\"col-1-2\">
                <legend><i class=\"fa fa-lock\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.password.recover_password"), "html", null, true);
        echo "</legend>
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
                <p class=\"buttons\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "send", array()), 'row', array("attr" => array("class" => "button button-secondary")));
        echo "
                </p>
                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
            <div class=\"col-1-2\">

            </div>
        </div>
    </div>
";
        
        $__internal_f3ce2fb3bf46db67f49c062ea23fc7ca49b66e1d248f18c7fd16c145df030c98->leave($__internal_f3ce2fb3bf46db67f49c062ea23fc7ca49b66e1d248f18c7fd16c145df030c98_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-password-recover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  85 => 17,  80 => 15,  76 => 14,  72 => 13,  67 => 10,  61 => 9,  50 => 7,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% form_theme form '@StoreTemplate/fields.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}{% endblock content %}*/
/* */
/* {% block prefooter %}*/
/*     <div class="form">*/
/*         <div class="grid">*/
/*             <div class="col-1-2">*/
/*                 <legend><i class="fa fa-lock"></i> {{ "template.store_template_bundle.user.password.recover_password"|trans }}</legend>*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_row(form.email) }}*/
/*                 <p class="buttons">*/
/*                     {{ form_row(form.send, { 'attr': {'class': 'button button-secondary' } } ) }}*/
/*                 </p>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*             <div class="col-1-2">*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock prefooter %}*/
/* */
