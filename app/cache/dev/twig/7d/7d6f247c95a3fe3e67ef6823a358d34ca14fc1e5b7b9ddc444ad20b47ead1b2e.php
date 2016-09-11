<?php

/* StoreFallbackBundle:Exception:error404.html.twig */
class __TwigTemplate_592fce2eb2edd5b48b31a8ed2154fd37388d04fd547a88d4090a5edc8480883e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminCore/layouts/center_box.html.twig", "StoreFallbackBundle:Exception:error404.html.twig", 1);
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
        $__internal_dbbfc598beadd4b7cc7b4da14208514d1033684da51b3c6ab229589eda903022 = $this->env->getExtension("native_profiler");
        $__internal_dbbfc598beadd4b7cc7b4da14208514d1033684da51b3c6ab229589eda903022->enter($__internal_dbbfc598beadd4b7cc7b4da14208514d1033684da51b3c6ab229589eda903022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreFallbackBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbfc598beadd4b7cc7b4da14208514d1033684da51b3c6ab229589eda903022->leave($__internal_dbbfc598beadd4b7cc7b4da14208514d1033684da51b3c6ab229589eda903022_prof);

    }

    // line 4
    public function block_title_container($context, array $blocks = array())
    {
        $__internal_e2132d4c69bdab779829dff8016b4f8e968d11d08d55301ff820af9abb87fc14 = $this->env->getExtension("native_profiler");
        $__internal_e2132d4c69bdab779829dff8016b4f8e968d11d08d55301ff820af9abb87fc14->enter($__internal_e2132d4c69bdab779829dff8016b4f8e968d11d08d55301ff820af9abb87fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_container"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.error.page_not_found_title"), "html", null, true);
        
        $__internal_e2132d4c69bdab779829dff8016b4f8e968d11d08d55301ff820af9abb87fc14->leave($__internal_e2132d4c69bdab779829dff8016b4f8e968d11d08d55301ff820af9abb87fc14_prof);

    }

    // line 6
    public function block_center_width($context, array $blocks = array())
    {
        $__internal_011ea541ecda2b567d41bae120004c97263b1e20787af1d82ecf63f771dbc3da = $this->env->getExtension("native_profiler");
        $__internal_011ea541ecda2b567d41bae120004c97263b1e20787af1d82ecf63f771dbc3da->enter($__internal_011ea541ecda2b567d41bae120004c97263b1e20787af1d82ecf63f771dbc3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_width"));

        echo "600";
        
        $__internal_011ea541ecda2b567d41bae120004c97263b1e20787af1d82ecf63f771dbc3da->leave($__internal_011ea541ecda2b567d41bae120004c97263b1e20787af1d82ecf63f771dbc3da_prof);

    }

    // line 7
    public function block_center_height($context, array $blocks = array())
    {
        $__internal_35f3e91e7a87887b58ef07a9b27570c3db719c1a0dda5e69132ec7262928c3b6 = $this->env->getExtension("native_profiler");
        $__internal_35f3e91e7a87887b58ef07a9b27570c3db719c1a0dda5e69132ec7262928c3b6->enter($__internal_35f3e91e7a87887b58ef07a9b27570c3db719c1a0dda5e69132ec7262928c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "600";
        
        $__internal_35f3e91e7a87887b58ef07a9b27570c3db719c1a0dda5e69132ec7262928c3b6->leave($__internal_35f3e91e7a87887b58ef07a9b27570c3db719c1a0dda5e69132ec7262928c3b6_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_653a94839fb27f78b1f6875a8b450512b7b744d42f4eeb1a7020ce39af50f6f3 = $this->env->getExtension("native_profiler");
        $__internal_653a94839fb27f78b1f6875a8b450512b7b744d42f4eeb1a7020ce39af50f6f3->enter($__internal_653a94839fb27f78b1f6875a8b450512b7b744d42f4eeb1a7020ce39af50f6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.error.page_not_found"), "html", null, true);
        echo "</h1>
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/images/dr-evil.png"), "html", null, true);
        echo "\" width=\"250\" class=\"fl-r ml-m\" />

";
        
        $__internal_653a94839fb27f78b1f6875a8b450512b7b744d42f4eeb1a7020ce39af50f6f3->leave($__internal_653a94839fb27f78b1f6875a8b450512b7b744d42f4eeb1a7020ce39af50f6f3_prof);

    }

    public function getTemplateName()
    {
        return "StoreFallbackBundle:Exception:error404.html.twig";
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
/* {% block title_container 'store.error.page_not_found_title'|trans %}*/
/* */
/* {% block center_width "600" %}*/
/* {% block center_height "600" %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>{{ 'store.error.page_not_found'|trans }}</h1>*/
/*     <img src="{{ asset('bundles/admincore/images/dr-evil.png') }}" width="250" class="fl-r ml-m" />*/
/* */
/* {% endblock content %}*/
/* */
