<?php

/* AdminUserBundle:Security:login.html.twig */
class __TwigTemplate_0d159da85630c98a100f5c493cc5170b9dc7b58bc27039e6043f732c02502620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layouts/center_box.html.twig", "AdminUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layouts/center_box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c32f403c95110f0085844384759f832e34095c44cbd949efbc68ac8e43815382 = $this->env->getExtension("native_profiler");
        $__internal_c32f403c95110f0085844384759f832e34095c44cbd949efbc68ac8e43815382->enter($__internal_c32f403c95110f0085844384759f832e34095c44cbd949efbc68ac8e43815382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32f403c95110f0085844384759f832e34095c44cbd949efbc68ac8e43815382->leave($__internal_c32f403c95110f0085844384759f832e34095c44cbd949efbc68ac8e43815382_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_00e1a9c3f7d0a605c827065326af4a1c3fe0c73037d9e471586a654531d270b8 = $this->env->getExtension("native_profiler");
        $__internal_00e1a9c3f7d0a605c827065326af4a1c3fe0c73037d9e471586a654531d270b8->enter($__internal_00e1a9c3f7d0a605c827065326af4a1c3fe0c73037d9e471586a654531d270b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "@AdminCore/Common/flashMessages.html.twig");
        echo "
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_00e1a9c3f7d0a605c827065326af4a1c3fe0c73037d9e471586a654531d270b8->leave($__internal_00e1a9c3f7d0a605c827065326af4a1c3fe0c73037d9e471586a654531d270b8_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3c8b443e58dea67905c5c8969a9cf0a44afe1c5e5550f6ad47cabc2bd6222f4 = $this->env->getExtension("native_profiler");
        $__internal_e3c8b443e58dea67905c5c8969a9cf0a44afe1c5e5550f6ad47cabc2bd6222f4->enter($__internal_e3c8b443e58dea67905c5c8969a9cf0a44afe1c5e5550f6ad47cabc2bd6222f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form")));
        // line 18
        echo "
                    <fieldset>
                        <legend>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.title"), "html", null, true);
        echo "</legend>
                        <ol>
                            <li>
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => false, "attr" => array("class" => "form-control", "placeholder" => "admin.login.field.email.placeholder")));
        // line 29
        echo "
                            </li>
                            <li>
                                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'row', array("label" => false, "attr" => array("class" => "form-control", "placeholder" => "admin.login.field.password.placeholder")));
        // line 38
        echo "
                            </li>
                        </ol>
                        <button id=\"submit-login\" type=\"submit\" class=\"button-primary button-fat pv-s mr-l\" data-test=\"submit-login\">
                            ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.login"), "html", null, true);
        echo "
                        </button>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("admin_password_remember");
        echo "\" data-dismiss=\"modal\" type=\"warning\" class=\"fl-r\">
                            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.remember"), "html", null, true);
        echo "
                        </a>
                    </fieldset>
                ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_e3c8b443e58dea67905c5c8969a9cf0a44afe1c5e5550f6ad47cabc2bd6222f4->leave($__internal_e3c8b443e58dea67905c5c8969a9cf0a44afe1c5e5550f6ad47cabc2bd6222f4_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 48,  103 => 45,  99 => 44,  94 => 42,  88 => 38,  86 => 32,  81 => 29,  79 => 23,  73 => 20,  69 => 18,  67 => 14,  64 => 13,  58 => 12,  48 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layouts/center_box.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     {{ include('@AdminCore/Common/flashMessages.html.twig') }}*/
/*     {{ parent() }}*/
/* */
/* {% endblock body %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*                 {{ form_start(form, {*/
/*                     attr: {*/
/*                         class: 'form'*/
/*                     }*/
/*                 }) }}*/
/*                     <fieldset>*/
/*                         <legend>{{ 'admin.login.title'|trans }}</legend>*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {{ form_row(form.email, {*/
/*                                     label: false,*/
/*                                     attr: {*/
/*                                         class: 'form-control',*/
/*                                         placeholder: 'admin.login.field.email.placeholder',*/
/*                                     }*/
/*                                 }) }}*/
/*                             </li>*/
/*                             <li>*/
/*                                 {{ form_row(form.password, {*/
/*                                     label: false,*/
/*                                     attr: {*/
/*                                         class: 'form-control',*/
/*                                         placeholder: 'admin.login.field.password.placeholder',*/
/*                                     }*/
/*                                 }) }}*/
/*                             </li>*/
/*                         </ol>*/
/*                         <button id="submit-login" type="submit" class="button-primary button-fat pv-s mr-l" data-test="submit-login">*/
/*                             {{ 'admin.login.action.login'|trans }}*/
/*                         </button>*/
/*                         <a href="{{ url('admin_password_remember') }}" data-dismiss="modal" type="warning" class="fl-r">*/
/*                             {{ 'admin.login.action.remember'|trans }}*/
/*                         </a>*/
/*                     </fieldset>*/
/*                 {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
