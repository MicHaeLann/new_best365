<?php

/* StoreOverrideBundle:Exception:error503.html.twig */
class __TwigTemplate_7aecaf2950e37001e3a2b26fa09339935656344e85a374b9092e6c035896a9b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminCore/layouts/center_box.html.twig", "StoreOverrideBundle:Exception:error503.html.twig", 1);
        $this->blocks = array(
            'title_container' => array($this, 'block_title_container'),
            'center_width' => array($this, 'block_center_width'),
            'center_height' => array($this, 'block_center_height'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AdminCore/layouts/center_box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9555ef85cfe3bef16fe789437b10817d3a8ef8fb09ee1ad47375888f61940390 = $this->env->getExtension("native_profiler");
        $__internal_9555ef85cfe3bef16fe789437b10817d3a8ef8fb09ee1ad47375888f61940390->enter($__internal_9555ef85cfe3bef16fe789437b10817d3a8ef8fb09ee1ad47375888f61940390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreOverrideBundle:Exception:error503.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9555ef85cfe3bef16fe789437b10817d3a8ef8fb09ee1ad47375888f61940390->leave($__internal_9555ef85cfe3bef16fe789437b10817d3a8ef8fb09ee1ad47375888f61940390_prof);

    }

    // line 4
    public function block_title_container($context, array $blocks = array())
    {
        $__internal_9a4d23a08b4a44992d4c7cb778de45b70d11a14f0ecd5ccdf80f9eb4b3cdf5f3 = $this->env->getExtension("native_profiler");
        $__internal_9a4d23a08b4a44992d4c7cb778de45b70d11a14f0ecd5ccdf80f9eb4b3cdf5f3->enter($__internal_9a4d23a08b4a44992d4c7cb778de45b70d11a14f0ecd5ccdf80f9eb4b3cdf5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_container"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.error.store_unavailable_title"), "html", null, true);
        
        $__internal_9a4d23a08b4a44992d4c7cb778de45b70d11a14f0ecd5ccdf80f9eb4b3cdf5f3->leave($__internal_9a4d23a08b4a44992d4c7cb778de45b70d11a14f0ecd5ccdf80f9eb4b3cdf5f3_prof);

    }

    // line 6
    public function block_center_width($context, array $blocks = array())
    {
        $__internal_622e8263114d4d44b13f9e1cdb4e152abe2a4e1bc8c1bf8eeb630e24949f899c = $this->env->getExtension("native_profiler");
        $__internal_622e8263114d4d44b13f9e1cdb4e152abe2a4e1bc8c1bf8eeb630e24949f899c->enter($__internal_622e8263114d4d44b13f9e1cdb4e152abe2a4e1bc8c1bf8eeb630e24949f899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_width"));

        echo "600";
        
        $__internal_622e8263114d4d44b13f9e1cdb4e152abe2a4e1bc8c1bf8eeb630e24949f899c->leave($__internal_622e8263114d4d44b13f9e1cdb4e152abe2a4e1bc8c1bf8eeb630e24949f899c_prof);

    }

    // line 7
    public function block_center_height($context, array $blocks = array())
    {
        $__internal_9d09e7ae5aa9e8f7b2753a5e46147409382d39ae233ddc2bef779ff28ce0865e = $this->env->getExtension("native_profiler");
        $__internal_9d09e7ae5aa9e8f7b2753a5e46147409382d39ae233ddc2bef779ff28ce0865e->enter($__internal_9d09e7ae5aa9e8f7b2753a5e46147409382d39ae233ddc2bef779ff28ce0865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "600";
        
        $__internal_9d09e7ae5aa9e8f7b2753a5e46147409382d39ae233ddc2bef779ff28ce0865e->leave($__internal_9d09e7ae5aa9e8f7b2753a5e46147409382d39ae233ddc2bef779ff28ce0865e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_ecee4154c7c99ad683a5bfbec2a3ac933a405b587c92002557670a3f2ecfd2e1 = $this->env->getExtension("native_profiler");
        $__internal_ecee4154c7c99ad683a5bfbec2a3ac933a405b587c92002557670a3f2ecfd2e1->enter($__internal_ecee4154c7c99ad683a5bfbec2a3ac933a405b587c92002557670a3f2ecfd2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array())), "html", null, true);
        echo "</h1>
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/images/uh-si.png"), "html", null, true);
        echo "\" width=\"250\" class=\"fl-r ml-m\" />

";
        
        $__internal_ecee4154c7c99ad683a5bfbec2a3ac933a405b587c92002557670a3f2ecfd2e1->leave($__internal_ecee4154c7c99ad683a5bfbec2a3ac933a405b587c92002557670a3f2ecfd2e1_prof);

    }

    public function getTemplateName()
    {
        return "StoreOverrideBundle:Exception:error503.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  82 => 11,  79 => 10,  73 => 9,  61 => 7,  49 => 6,  37 => 4,  11 => 1,);
    }
}
/* {% extends '@AdminCore/layouts/center_box.html.twig' %}*/
/* */
/* */
/* {% block title_container 'store.error.store_unavailable_title'|trans %}*/
/* */
/* {% block center_width "600" %}*/
/* {% block center_height "600" %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>{{ exception.message|trans }}</h1>*/
/*     <img src="{{ asset('bundles/admincore/images/uh-si.png') }}" width="250" class="fl-r ml-m" />*/
/* */
/* {% endblock content %}*/
/* */
