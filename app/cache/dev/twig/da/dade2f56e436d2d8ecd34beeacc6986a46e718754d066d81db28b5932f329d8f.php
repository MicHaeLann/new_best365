<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_20fd06fa2ad0f06956698d9f4828b41688ab06566843ddae7bf048b712c11f05 extends Twig_Template
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
        $__internal_56841f69263492153a36ac30482bb5094c7179003ae3f86f62ccd942f87305fa = $this->env->getExtension("native_profiler");
        $__internal_56841f69263492153a36ac30482bb5094c7179003ae3f86f62ccd942f87305fa->enter($__internal_56841f69263492153a36ac30482bb5094c7179003ae3f86f62ccd942f87305fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_56841f69263492153a36ac30482bb5094c7179003ae3f86f62ccd942f87305fa->leave($__internal_56841f69263492153a36ac30482bb5094c7179003ae3f86f62ccd942f87305fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
