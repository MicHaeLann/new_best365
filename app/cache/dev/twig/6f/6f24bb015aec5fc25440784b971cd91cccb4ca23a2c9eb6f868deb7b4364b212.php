<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dc64a9265f44098618066aa32c119c9218cad3189f257e97a044fef52021fbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c0fd287f9f93646e4dd9a16b41d26739bfa1c0796332fa9917d252420bd0023 = $this->env->getExtension("native_profiler");
        $__internal_5c0fd287f9f93646e4dd9a16b41d26739bfa1c0796332fa9917d252420bd0023->enter($__internal_5c0fd287f9f93646e4dd9a16b41d26739bfa1c0796332fa9917d252420bd0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
        
        $__internal_5c0fd287f9f93646e4dd9a16b41d26739bfa1c0796332fa9917d252420bd0023->leave($__internal_5c0fd287f9f93646e4dd9a16b41d26739bfa1c0796332fa9917d252420bd0023_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
