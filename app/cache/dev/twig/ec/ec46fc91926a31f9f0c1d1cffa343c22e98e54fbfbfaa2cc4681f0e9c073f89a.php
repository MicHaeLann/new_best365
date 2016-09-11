<?php

/* StoreTemplateBundle:Pages:user-login.html.twig */
class __TwigTemplate_925b1a675eb5917b3d127d248e60c45376274975b1403cfc3c0ce9cbc5f6f848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-login.html.twig", 1);
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
        $__internal_be049fe6443bd00471a2aff35a49b7966724cba4d922cbd9c3825dbca5d1037d = $this->env->getExtension("native_profiler");
        $__internal_be049fe6443bd00471a2aff35a49b7966724cba4d922cbd9c3825dbca5d1037d->enter($__internal_be049fe6443bd00471a2aff35a49b7966724cba4d922cbd9c3825dbca5d1037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-login.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "@StoreTemplate/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be049fe6443bd00471a2aff35a49b7966724cba4d922cbd9c3825dbca5d1037d->leave($__internal_be049fe6443bd00471a2aff35a49b7966724cba4d922cbd9c3825dbca5d1037d_prof);

    }

    // line 6
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_43a461eb844555daf8c509fcfaf831ca63fb75ecc530f8b1517ff628cdd7dbe1 = $this->env->getExtension("native_profiler");
        $__internal_43a461eb844555daf8c509fcfaf831ca63fb75ecc530f8b1517ff628cdd7dbe1->enter($__internal_43a461eb844555daf8c509fcfaf831ca63fb75ecc530f8b1517ff628cdd7dbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_43a461eb844555daf8c509fcfaf831ca63fb75ecc530f8b1517ff628cdd7dbe1->leave($__internal_43a461eb844555daf8c509fcfaf831ca63fb75ecc530f8b1517ff628cdd7dbe1_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_5be6b2be96ad6084e7421681bce11ddc54de3f9898842e4b27f992e59159b174 = $this->env->getExtension("native_profiler");
        $__internal_5be6b2be96ad6084e7421681bce11ddc54de3f9898842e4b27f992e59159b174->enter($__internal_5be6b2be96ad6084e7421681bce11ddc54de3f9898842e4b27f992e59159b174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_5be6b2be96ad6084e7421681bce11ddc54de3f9898842e4b27f992e59159b174->leave($__internal_5be6b2be96ad6084e7421681bce11ddc54de3f9898842e4b27f992e59159b174_prof);

    }

    // line 11
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_308f7c4a7522e0d131bf1a2b5404d01b5bd8a521d3e7ff1af01613f4a5935e4d = $this->env->getExtension("native_profiler");
        $__internal_308f7c4a7522e0d131bf1a2b5404d01b5bd8a521d3e7ff1af01613f4a5935e4d->enter($__internal_308f7c4a7522e0d131bf1a2b5404d01b5bd8a521d3e7ff1af01613f4a5935e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 12
        echo "
<div class=\"form form-login\">
    <div class=\"grid\">
        <div class=\"col-1-2\">
            <legend>
                <i class=\"fa fa-sign-in\"></i>
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.login.login_with_account"), "html", null, true);
        echo "
            </legend>
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'row');
        echo "
                <p class=\"buttons\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "send", array()), 'row', array("attr" => array("class" => "button button-secondary")));
        echo "
                    <a class=\"button button-empty\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("store_password_remember");
        echo "\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.login.forgot_your_password"), "html", null, true);
        echo "
                    </a>
                </p>
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>

        <div class=\"col-1-2\">
            <legend>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.login.unregistered"), "html", null, true);
        echo "</legend>
            <a class=\"button button-primary\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("store_register");
        echo "\">
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.login.create_new_account"), "html", null, true);
        echo "
            </a>
            <legend>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.login.login_with_social"), "html", null, true);
        echo "</legend>
            <div class=\"login-social\">
                ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("hwi_oauth_connect"));
        echo "
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_308f7c4a7522e0d131bf1a2b5404d01b5bd8a521d3e7ff1af01613f4a5935e4d->leave($__internal_308f7c4a7522e0d131bf1a2b5404d01b5bd8a521d3e7ff1af01613f4a5935e4d_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  128 => 37,  123 => 35,  119 => 34,  115 => 33,  108 => 29,  102 => 26,  98 => 25,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  76 => 18,  68 => 12,  62 => 11,  50 => 8,  39 => 6,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* */
/* {% form_theme form '@StoreTemplate/fields.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %} {% endblock content %}*/
/* */
/* */
/* {% block prefooter %}*/
/* */
/* <div class="form form-login">*/
/*     <div class="grid">*/
/*         <div class="col-1-2">*/
/*             <legend>*/
/*                 <i class="fa fa-sign-in"></i>*/
/*                 {{ 'template.store_template_bundle.user.login.login_with_account'|trans }}*/
/*             </legend>*/
/*             {{ form_start(form) }}*/
/*                 {{ form_row(form.email) }}*/
/*                 {{ form_row(form.password) }}*/
/*                 <p class="buttons">*/
/*                     {{ form_row(form.send , { attr: { class: 'button button-secondary' } }) }}*/
/*                     <a class="button button-empty" href="{{ url('store_password_remember') }}">*/
/*                         {{ 'template.store_template_bundle.user.login.forgot_your_password'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/* */
/*         <div class="col-1-2">*/
/*             <legend>{{ 'template.store_template_bundle.user.login.unregistered'|trans }}</legend>*/
/*             <a class="button button-primary" href="{{ url('store_register') }}">*/
/*                 {{ 'template.store_template_bundle.user.login.create_new_account'|trans }}*/
/*             </a>*/
/*             <legend>{{ 'template.store_template_bundle.user.login.login_with_social'|trans }}</legend>*/
/*             <div class="login-social">*/
/*                 {{ render(url('hwi_oauth_connect')) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock prefooter %}*/
/* */
