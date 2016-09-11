<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d6e3914a7919dcdd242f45b8fb4de8e5a12b65477d9c7a75cc69acfe5f0df576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a89f860e881af911ddb54fff385d6f4b732168333997220d085f4a131e8ed9c = $this->env->getExtension("native_profiler");
        $__internal_3a89f860e881af911ddb54fff385d6f4b732168333997220d085f4a131e8ed9c->enter($__internal_3a89f860e881af911ddb54fff385d6f4b732168333997220d085f4a131e8ed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a89f860e881af911ddb54fff385d6f4b732168333997220d085f4a131e8ed9c->leave($__internal_3a89f860e881af911ddb54fff385d6f4b732168333997220d085f4a131e8ed9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba3733970b65fad40c27d294c75f06628586ef8c3bb458ba13b19878200e1c5e = $this->env->getExtension("native_profiler");
        $__internal_ba3733970b65fad40c27d294c75f06628586ef8c3bb458ba13b19878200e1c5e->enter($__internal_ba3733970b65fad40c27d294c75f06628586ef8c3bb458ba13b19878200e1c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ba3733970b65fad40c27d294c75f06628586ef8c3bb458ba13b19878200e1c5e->leave($__internal_ba3733970b65fad40c27d294c75f06628586ef8c3bb458ba13b19878200e1c5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c834e179ad1edb100265454b94c8216fe7f1be7fa287cbc87696865998584eed = $this->env->getExtension("native_profiler");
        $__internal_c834e179ad1edb100265454b94c8216fe7f1be7fa287cbc87696865998584eed->enter($__internal_c834e179ad1edb100265454b94c8216fe7f1be7fa287cbc87696865998584eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c834e179ad1edb100265454b94c8216fe7f1be7fa287cbc87696865998584eed->leave($__internal_c834e179ad1edb100265454b94c8216fe7f1be7fa287cbc87696865998584eed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fbac392e502823a50c99d9ab65e11e30ddc75b52c22483671598f836d870ea2 = $this->env->getExtension("native_profiler");
        $__internal_9fbac392e502823a50c99d9ab65e11e30ddc75b52c22483671598f836d870ea2->enter($__internal_9fbac392e502823a50c99d9ab65e11e30ddc75b52c22483671598f836d870ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</div>
";
        
        $__internal_9fbac392e502823a50c99d9ab65e11e30ddc75b52c22483671598f836d870ea2->leave($__internal_9fbac392e502823a50c99d9ab65e11e30ddc75b52c22483671598f836d870ea2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_51d209e6c0ed6289578c7281c19fdc5b896f1096b2e4310dba1cd7b081a1dece = $this->env->getExtension("native_profiler");
        $__internal_51d209e6c0ed6289578c7281c19fdc5b896f1096b2e4310dba1cd7b081a1dece->enter($__internal_51d209e6c0ed6289578c7281c19fdc5b896f1096b2e4310dba1cd7b081a1dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_51d209e6c0ed6289578c7281c19fdc5b896f1096b2e4310dba1cd7b081a1dece->leave($__internal_51d209e6c0ed6289578c7281c19fdc5b896f1096b2e4310dba1cd7b081a1dece_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
