<?php

/* AdminUserBundle:Password:remember.html.twig */
class __TwigTemplate_49ad9e701c546c5fa3d7809876fb8998cabb6718733fd231e086e524e3db2309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layouts/center_box.html.twig", "AdminUserBundle:Password:remember.html.twig", 1);
        $this->blocks = array(
            'center_height' => array($this, 'block_center_height'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layouts/center_box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be807399136e3538802c13fa46af17dca2e0cae2c0dca2ca9bb0b5bf3a7cf639 = $this->env->getExtension("native_profiler");
        $__internal_be807399136e3538802c13fa46af17dca2e0cae2c0dca2ca9bb0b5bf3a7cf639->enter($__internal_be807399136e3538802c13fa46af17dca2e0cae2c0dca2ca9bb0b5bf3a7cf639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Password:remember.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be807399136e3538802c13fa46af17dca2e0cae2c0dca2ca9bb0b5bf3a7cf639->leave($__internal_be807399136e3538802c13fa46af17dca2e0cae2c0dca2ca9bb0b5bf3a7cf639_prof);

    }

    // line 3
    public function block_center_height($context, array $blocks = array())
    {
        $__internal_b43ae822976a9a24a6d0ac2257c7fe72e57a1cbbba4120df443a5c74855398b3 = $this->env->getExtension("native_profiler");
        $__internal_b43ae822976a9a24a6d0ac2257c7fe72e57a1cbbba4120df443a5c74855398b3->enter($__internal_b43ae822976a9a24a6d0ac2257c7fe72e57a1cbbba4120df443a5c74855398b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "350";
        
        $__internal_b43ae822976a9a24a6d0ac2257c7fe72e57a1cbbba4120df443a5c74855398b3->leave($__internal_b43ae822976a9a24a6d0ac2257c7fe72e57a1cbbba4120df443a5c74855398b3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_757b5a1ad22b5111938159f48860463457e505c297718a9be29c64c80d439db6 = $this->env->getExtension("native_profiler");
        $__internal_757b5a1ad22b5111938159f48860463457e505c297718a9be29c64c80d439db6->enter($__internal_757b5a1ad22b5111938159f48860463457e505c297718a9be29c64c80d439db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal", "style" => "margin-bottom: 0px !important;")));
        // line 12
        echo "
        <fieldset>
            <legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.remember_user.title"), "html", null, true);
        echo "</legend>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.remember_user.description"), "html", null, true);
        echo "</p>
            <ol>
                <li>
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => false, "attr" => array("class" => "form-control", "placeholder" => "admin.recover_user.field.email.placeholder")));
        // line 24
        echo "
                </li>
            </ol>
            <button type=\"submit\" class=\"button-primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.remember"), "html", null, true);
        echo "</button>
        </fieldset>
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
        
        $__internal_757b5a1ad22b5111938159f48860463457e505c297718a9be29c64c80d439db6->leave($__internal_757b5a1ad22b5111938159f48860463457e505c297718a9be29c64c80d439db6_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Password:remember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  79 => 27,  74 => 24,  72 => 18,  66 => 15,  62 => 14,  58 => 12,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layouts/center_box.html.twig' %}*/
/* */
/* {% block center_height "350" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {*/
/*         attr: {*/
/*             class: 'form-horizontal',*/
/*             style: 'margin-bottom: 0px !important;'*/
/*         }*/
/*     }) }}*/
/*         <fieldset>*/
/*             <legend>{{ 'admin.remember_user.title'|trans }}</legend>*/
/*             <p>{{ 'admin.remember_user.description'|trans }}</p>*/
/*             <ol>*/
/*                 <li>*/
/*                     {{ form_row(form.email, {*/
/*                         label: false,*/
/*                         attr: {*/
/*                             class: 'form-control',*/
/*                             placeholder: 'admin.recover_user.field.email.placeholder',*/
/*                         }*/
/*                     }) }}*/
/*                 </li>*/
/*             </ol>*/
/*             <button type="submit" class="button-primary">{{ 'admin.login.action.remember'|trans }}</button>*/
/*         </fieldset>*/
/*     {{ form_end(form) }}*/
/* {% endblock content %}*/
/* */
