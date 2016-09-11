<?php

/* AdminBannerBundle:BannerZone:newComponent.html.twig */
class __TwigTemplate_fe68571981966bf3da969158fe5d37eedfefb59b8a9351bf49f34ed7fcd49b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminBannerBundle:BannerZone:newComponent.html.twig", 1);
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
        $__internal_399952c8dfaf1e17927b14252bed2553c4de04a529bb1c23031d7f61b62ba236 = $this->env->getExtension("native_profiler");
        $__internal_399952c8dfaf1e17927b14252bed2553c4de04a529bb1c23031d7f61b62ba236->enter($__internal_399952c8dfaf1e17927b14252bed2553c4de04a529bb1c23031d7f61b62ba236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:newComponent.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399952c8dfaf1e17927b14252bed2553c4de04a529bb1c23031d7f61b62ba236->leave($__internal_399952c8dfaf1e17927b14252bed2553c4de04a529bb1c23031d7f61b62ba236_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da06a39ca10043b6c6602f2fa42411925eee63a85d8a352eb6897847d8991400 = $this->env->getExtension("native_profiler");
        $__internal_da06a39ca10043b6c6602f2fa42411925eee63a85d8a352eb6897847d8991400->enter($__internal_da06a39ca10043b6c6602f2fa42411925eee63a85d8a352eb6897847d8991400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New BannerZone"), "html", null, true);
        echo "
";
        
        $__internal_da06a39ca10043b6c6602f2fa42411925eee63a85d8a352eb6897847d8991400->leave($__internal_da06a39ca10043b6c6602f2fa42411925eee63a85d8a352eb6897847d8991400_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b63e2b7dd4fb05382401d67046d54a3a5494ff683daae9818981e07ef172680c = $this->env->getExtension("native_profiler");
        $__internal_b63e2b7dd4fb05382401d67046d54a3a5494ff683daae9818981e07ef172680c->enter($__internal_b63e2b7dd4fb05382401d67046d54a3a5494ff683daae9818981e07ef172680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl("admin_banner_zone_save")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "width", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banners", array()), 'row');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_banner_zone_list");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>

    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_b63e2b7dd4fb05382401d67046d54a3a5494ff683daae9818981e07ef172680c->leave($__internal_b63e2b7dd4fb05382401d67046d54a3a5494ff683daae9818981e07ef172680c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:newComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  99 => 23,  95 => 22,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  60 => 10,  54 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'New BannerZone'|trans }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {'action': url('admin_banner_zone_save')}) }}*/
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
/*                 <button type="submit" class="btn btn-primary">{{ 'Save'|trans }}</button>*/
/*                 <a href="{{ path('admin_banner_zone_list') }}" class="btn btn-default">{{ 'Cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
