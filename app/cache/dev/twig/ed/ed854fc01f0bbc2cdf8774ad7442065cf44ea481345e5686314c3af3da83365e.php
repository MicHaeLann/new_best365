<?php

/* AdminBannerBundle:Banner:editComponent.html.twig */
class __TwigTemplate_a1be0306698651a9e86c022fd7d78a8bf16868e31a7df16f347bd0114a56af11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminBannerBundle:Banner:editComponent.html.twig", 1);
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
        $__internal_13bb63d46d8d472229f4af1d4d148b505c7a3d5b7d47f681b63a0d26733011f4 = $this->env->getExtension("native_profiler");
        $__internal_13bb63d46d8d472229f4af1d4d148b505c7a3d5b7d47f681b63a0d26733011f4->enter($__internal_13bb63d46d8d472229f4af1d4d148b505c7a3d5b7d47f681b63a0d26733011f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:editComponent.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13bb63d46d8d472229f4af1d4d148b505c7a3d5b7d47f681b63a0d26733011f4->leave($__internal_13bb63d46d8d472229f4af1d4d148b505c7a3d5b7d47f681b63a0d26733011f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_953e7da2962b30f7c0ccecb832246cb3fbfba9dd74dc5c765542f588a03c1ad5 = $this->env->getExtension("native_profiler");
        $__internal_953e7da2962b30f7c0ccecb832246cb3fbfba9dd74dc5c765542f588a03c1ad5->enter($__internal_953e7da2962b30f7c0ccecb832246cb3fbfba9dd74dc5c765542f588a03c1ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit Banner"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_953e7da2962b30f7c0ccecb832246cb3fbfba9dd74dc5c765542f588a03c1ad5->leave($__internal_953e7da2962b30f7c0ccecb832246cb3fbfba9dd74dc5c765542f588a03c1ad5_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_23eb532872cd4f30edfcb6f45f8801a7117a2526f08091a667d2f59daccb13ef = $this->env->getExtension("native_profiler");
        $__internal_23eb532872cd4f30edfcb6f45f8801a7117a2526f08091a667d2f59daccb13ef->enter($__internal_23eb532872cd4f30edfcb6f45f8801a7117a2526f08091a667d2f59daccb13ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl("admin_banner_update", array("id" => $this->getAttribute(        // line 12
(isset($context["entity"]) ? $context["entity"] : null), "id", array())))));
        // line 13
        echo "

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "principalImage", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bannerZones", array()), 'row');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Update"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_banner_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>

    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_23eb532872cd4f30edfcb6f45f8801a7117a2526f08091a667d2f59daccb13ef->leave($__internal_23eb532872cd4f30edfcb6f45f8801a7117a2526f08091a667d2f59daccb13ef_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  111 => 27,  107 => 26,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 13,  66 => 12,  65 => 11,  62 => 10,  56 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'Edit Banner'|trans }} - {{ entity.id }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {'action': url('admin_banner_update', {*/
/*         'id': entity.id*/
/*     })}) }}*/
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
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'Update'|trans }}</button>*/
/*                 <a href="{{ path('admin_banner_list') }}">{{ 'Cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
