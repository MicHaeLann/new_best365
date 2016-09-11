<?php

/* AdminBannerBundle:BannerZone:editComponent.html.twig */
class __TwigTemplate_758b4715a7bc8b784c3021894c84fcc9fa85530cdc5cf5c8fc42007a4b5fc3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminBannerBundle:BannerZone:editComponent.html.twig", 1);
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
        $__internal_b2597bd4c09629219f117195a5a17b8460439c432578d319a84e1449486ba466 = $this->env->getExtension("native_profiler");
        $__internal_b2597bd4c09629219f117195a5a17b8460439c432578d319a84e1449486ba466->enter($__internal_b2597bd4c09629219f117195a5a17b8460439c432578d319a84e1449486ba466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:editComponent.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2597bd4c09629219f117195a5a17b8460439c432578d319a84e1449486ba466->leave($__internal_b2597bd4c09629219f117195a5a17b8460439c432578d319a84e1449486ba466_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc0f93c0c8a6a1e980284bc8d91c02c064a56452ce0e7dddf6cbfff8b3dbb853 = $this->env->getExtension("native_profiler");
        $__internal_fc0f93c0c8a6a1e980284bc8d91c02c064a56452ce0e7dddf6cbfff8b3dbb853->enter($__internal_fc0f93c0c8a6a1e980284bc8d91c02c064a56452ce0e7dddf6cbfff8b3dbb853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit BannerZone"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_fc0f93c0c8a6a1e980284bc8d91c02c064a56452ce0e7dddf6cbfff8b3dbb853->leave($__internal_fc0f93c0c8a6a1e980284bc8d91c02c064a56452ce0e7dddf6cbfff8b3dbb853_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_5aab15e9fdd7a317b302d18803c83ec360e132f8b96a615cd5cd8b5fd8182cd9 = $this->env->getExtension("native_profiler");
        $__internal_5aab15e9fdd7a317b302d18803c83ec360e132f8b96a615cd5cd8b5fd8182cd9->enter($__internal_5aab15e9fdd7a317b302d18803c83ec360e132f8b96a615cd5cd8b5fd8182cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl("admin_banner_zone_update", array("id" => $this->getAttribute(        // line 12
(isset($context["entity"]) ? $context["entity"] : null), "id", array())))));
        // line 13
        echo "

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "width", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banners", array()), 'row');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Update"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_banner_zone_list");
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
        
        $__internal_5aab15e9fdd7a317b302d18803c83ec360e132f8b96a615cd5cd8b5fd8182cd9->leave($__internal_5aab15e9fdd7a317b302d18803c83ec360e132f8b96a615cd5cd8b5fd8182cd9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  103 => 25,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 13,  66 => 12,  65 => 11,  62 => 10,  56 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'Edit BannerZone'|trans }} - {{ entity.id }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {'action': url('admin_banner_zone_update', {*/
/*         'id': entity.id*/
/*     })}) }}*/
/* */
/*         {{ form_row(form.name) }}*/
/*         {{ form_row(form.code) }}*/
/*         {{ form_row(form.height) }}*/
/*         {{ form_row(form.width) }}*/
/*         {{ form_row(form.language) }}*/
/*         {{ form_row(form.banners) }}*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-primary">{{ 'Update'|trans }}</button>*/
/*                 <a href="{{ path('admin_banner_zone_list') }}" class="btn btn-default">{{ 'Cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
