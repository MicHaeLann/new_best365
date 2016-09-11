<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09952ffc2755b09738d4d3504aa4b200ce0d5fe5955fe2f019749906aaf45226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecb201cf8d97c1795e9d46a7b9d455c27f86a95307382d6be072b9a6751747ad = $this->env->getExtension("native_profiler");
        $__internal_ecb201cf8d97c1795e9d46a7b9d455c27f86a95307382d6be072b9a6751747ad->enter($__internal_ecb201cf8d97c1795e9d46a7b9d455c27f86a95307382d6be072b9a6751747ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb201cf8d97c1795e9d46a7b9d455c27f86a95307382d6be072b9a6751747ad->leave($__internal_ecb201cf8d97c1795e9d46a7b9d455c27f86a95307382d6be072b9a6751747ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_363593512a832c9597b34ff80c65e2a50052ca818f50338ed0087fd5f489ca8a = $this->env->getExtension("native_profiler");
        $__internal_363593512a832c9597b34ff80c65e2a50052ca818f50338ed0087fd5f489ca8a->enter($__internal_363593512a832c9597b34ff80c65e2a50052ca818f50338ed0087fd5f489ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_363593512a832c9597b34ff80c65e2a50052ca818f50338ed0087fd5f489ca8a->leave($__internal_363593512a832c9597b34ff80c65e2a50052ca818f50338ed0087fd5f489ca8a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc60dfc7901a93c0d9928c3b923a2e23d32f89af2b2b8ea8ebea210d61ecceac = $this->env->getExtension("native_profiler");
        $__internal_dc60dfc7901a93c0d9928c3b923a2e23d32f89af2b2b8ea8ebea210d61ecceac->enter($__internal_dc60dfc7901a93c0d9928c3b923a2e23d32f89af2b2b8ea8ebea210d61ecceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dc60dfc7901a93c0d9928c3b923a2e23d32f89af2b2b8ea8ebea210d61ecceac->leave($__internal_dc60dfc7901a93c0d9928c3b923a2e23d32f89af2b2b8ea8ebea210d61ecceac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
