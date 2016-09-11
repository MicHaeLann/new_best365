<?php

/* AdminUserBundle:Password:recover.html.twig */
class __TwigTemplate_cad1a4c8abd07a6ba51b7f6a7bd061c6021be624a2f2979204de37de29269c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layouts/center_box.html.twig", "AdminUserBundle:Password:recover.html.twig", 1);
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
        $__internal_fbf2e01d06ad76978681171d17977d3f6f3ffd65e0808dfdb1a43616b13d2a1d = $this->env->getExtension("native_profiler");
        $__internal_fbf2e01d06ad76978681171d17977d3f6f3ffd65e0808dfdb1a43616b13d2a1d->enter($__internal_fbf2e01d06ad76978681171d17977d3f6f3ffd65e0808dfdb1a43616b13d2a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Password:recover.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf2e01d06ad76978681171d17977d3f6f3ffd65e0808dfdb1a43616b13d2a1d->leave($__internal_fbf2e01d06ad76978681171d17977d3f6f3ffd65e0808dfdb1a43616b13d2a1d_prof);

    }

    // line 3
    public function block_center_height($context, array $blocks = array())
    {
        $__internal_42baac0c2816bfdb7ef2ff98a1b27ab291e768a97382a628c0bbe557e3ba52ea = $this->env->getExtension("native_profiler");
        $__internal_42baac0c2816bfdb7ef2ff98a1b27ab291e768a97382a628c0bbe557e3ba52ea->enter($__internal_42baac0c2816bfdb7ef2ff98a1b27ab291e768a97382a628c0bbe557e3ba52ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "450";
        
        $__internal_42baac0c2816bfdb7ef2ff98a1b27ab291e768a97382a628c0bbe557e3ba52ea->leave($__internal_42baac0c2816bfdb7ef2ff98a1b27ab291e768a97382a628c0bbe557e3ba52ea_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_48c7a3b3edf2ac6488dcacd253e5d526c45862bd70f3566beaec341e69bfe964 = $this->env->getExtension("native_profiler");
        $__internal_48c7a3b3edf2ac6488dcacd253e5d526c45862bd70f3566beaec341e69bfe964->enter($__internal_48c7a3b3edf2ac6488dcacd253e5d526c45862bd70f3566beaec341e69bfe964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal", "style" => "margin-bottom: 0px !important;")));
        // line 11
        echo "
    <fieldset>
        <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.recover_user.title"), "html", null, true);
        echo "</legend>
        <ol>
            <li>
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => false, "attr" => array("class" => "form-control", "placeholder" => "admin.recover_user.field.email.placeholder")));
        // line 22
        echo "
            </li>
            <li>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'row', array("label" => false, "attr" => array("class" => "form-control", "placeholder" => "admin.recover_user.field.password.placeholder")));
        // line 32
        echo "
            </li>
            <li>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'row', array("label" => false, "attr" => array("class" => "form-control", "placeholder" => "admin.recover_user.field.repeat_password.placeholder")));
        // line 41
        echo "
            </li>
        </ol>
        <button type=\"submit\" class=\"button-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
    </fieldset>
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_48c7a3b3edf2ac6488dcacd253e5d526c45862bd70f3566beaec341e69bfe964->leave($__internal_48c7a3b3edf2ac6488dcacd253e5d526c45862bd70f3566beaec341e69bfe964_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Password:recover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 46,  91 => 44,  86 => 41,  84 => 35,  79 => 32,  77 => 26,  73 => 25,  68 => 22,  66 => 16,  60 => 13,  56 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layouts/center_box.html.twig' %}*/
/* */
/* {% block center_height "450" %}*/
/* */
/* {% block content %}*/
/*     {{ form_start(form, {*/
/*         attr: {*/
/*             class: 'form-horizontal',*/
/*             style: 'margin-bottom: 0px !important;'*/
/*         }*/
/*     }) }}*/
/*     <fieldset>*/
/*         <legend>{{ 'admin.recover_user.title'|trans }}</legend>*/
/*         <ol>*/
/*             <li>*/
/*                 {{ form_row(form.email, {*/
/*                     label: false,*/
/*                     attr: {*/
/*                         class: 'form-control',*/
/*                         placeholder: 'admin.recover_user.field.email.placeholder'*/
/*                     }*/
/*                 }) }}*/
/*             </li>*/
/*             <li>*/
/*                 {{ form_errors(form.password) }}*/
/*                 {{ form_row(form.password.first, {*/
/*                     label: false,*/
/*                     attr: {*/
/*                         class: 'form-control',*/
/*                         placeholder: 'admin.recover_user.field.password.placeholder',*/
/*                     }*/
/*                 }) }}*/
/*             </li>*/
/*             <li>*/
/*                 {{ form_row(form.password.second, {*/
/*                     label: false,*/
/*                     attr: {*/
/*                         class: 'form-control',*/
/*                         placeholder: 'admin.recover_user.field.repeat_password.placeholder',*/
/*                     }*/
/*                 }) }}*/
/*             </li>*/
/*         </ol>*/
/*         <button type="submit" class="button-primary">{{ 'ui.forms.save'|trans }}</button>*/
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
