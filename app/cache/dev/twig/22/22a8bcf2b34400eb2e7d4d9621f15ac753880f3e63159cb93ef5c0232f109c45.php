<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bc8babd3dd8d45cf86018fba85a050725daa62fe0dd95f95bd8549ced22ba467 extends Twig_Template
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
        $__internal_877934c1d8bba30203a2823174d1a04670ab0250533fce631b10371c105b8005 = $this->env->getExtension("native_profiler");
        $__internal_877934c1d8bba30203a2823174d1a04670ab0250533fce631b10371c105b8005->enter($__internal_877934c1d8bba30203a2823174d1a04670ab0250533fce631b10371c105b8005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
        
        $__internal_877934c1d8bba30203a2823174d1a04670ab0250533fce631b10371c105b8005->leave($__internal_877934c1d8bba30203a2823174d1a04670ab0250533fce631b10371c105b8005_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
