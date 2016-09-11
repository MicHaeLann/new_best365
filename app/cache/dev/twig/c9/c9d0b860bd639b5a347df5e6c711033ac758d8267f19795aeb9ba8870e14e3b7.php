<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1cc1baf05cd6a1fede73358b4bd04d2b93644151651292a0ac083c12e21fd58f extends Twig_Template
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
        $__internal_808f037c5eb5f6b886fb2356ca0e9e6b6f5f01097fe558599169377783837ece = $this->env->getExtension("native_profiler");
        $__internal_808f037c5eb5f6b886fb2356ca0e9e6b6f5f01097fe558599169377783837ece->enter($__internal_808f037c5eb5f6b886fb2356ca0e9e6b6f5f01097fe558599169377783837ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        
        $__internal_808f037c5eb5f6b886fb2356ca0e9e6b6f5f01097fe558599169377783837ece->leave($__internal_808f037c5eb5f6b886fb2356ca0e9e6b6f5f01097fe558599169377783837ece_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
