<?php

/* AdminBannerBundle:Banner:newComponent.html.twig */
class __TwigTemplate_0bb7a78ba76d8081b64a9b831c57d03f1235e2b506db62a312f8d1c034ea115c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminBannerBundle:Banner:newComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/formComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4cb67eca106e51397a450a2451716f65b088de958e4539a1e4fe942c3260d1 = $this->env->getExtension("native_profiler");
        $__internal_be4cb67eca106e51397a450a2451716f65b088de958e4539a1e4fe942c3260d1->enter($__internal_be4cb67eca106e51397a450a2451716f65b088de958e4539a1e4fe942c3260d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:newComponent.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4cb67eca106e51397a450a2451716f65b088de958e4539a1e4fe942c3260d1->leave($__internal_be4cb67eca106e51397a450a2451716f65b088de958e4539a1e4fe942c3260d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0676fe740c18996c246279bd873b69f8817c48acc75846a4a93c0c9f03d37fdc = $this->env->getExtension("native_profiler");
        $__internal_0676fe740c18996c246279bd873b69f8817c48acc75846a4a93c0c9f03d37fdc->enter($__internal_0676fe740c18996c246279bd873b69f8817c48acc75846a4a93c0c9f03d37fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New Banner"), "html", null, true);
        echo "
";
        
        $__internal_0676fe740c18996c246279bd873b69f8817c48acc75846a4a93c0c9f03d37fdc->leave($__internal_0676fe740c18996c246279bd873b69f8817c48acc75846a4a93c0c9f03d37fdc_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf631d36ab9a52a515bf5e40742079c9a386d87b809069af88dc2b9c5e1adf89 = $this->env->getExtension("native_profiler");
        $__internal_bf631d36ab9a52a515bf5e40742079c9a386d87b809069af88dc2b9c5e1adf89->enter($__internal_bf631d36ab9a52a515bf5e40742079c9a386d87b809069af88dc2b9c5e1adf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl("admin_banner_save")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "principalImage", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bannerZones", array()), 'row');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_banner_list");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>

    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_bf631d36ab9a52a515bf5e40742079c9a386d87b809069af88dc2b9c5e1adf89->leave($__internal_bf631d36ab9a52a515bf5e40742079c9a386d87b809069af88dc2b9c5e1adf89_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:newComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  107 => 25,  103 => 24,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  60 => 10,  54 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'New Banner'|trans }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {'action': url('admin_banner_save')}) }}*/
/* */
/*         {{ form_row(form.name) }}*/
/*         {{ form_row(form.description) }}*/
/*         {{ form_row(form.url) }}*/
/*         {{ form_row(form.position) }}*/
/*         {{ form_row(form.enabled) }}*/
/*         {{ form_row(form.image) }}*/
/*         {{ form_row(form.principalImage) }}*/
/*         {{ form_row(form.bannerZones) }}*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-primary">{{ 'Save'|trans }}</button>*/
/*                 <a href="{{ path('admin_banner_list') }}" class="btn btn-default">{{ 'Cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
