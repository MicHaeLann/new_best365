<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ab7c942c3467bae5043706a748b7435eeb1f908e3ffb84d23548831d6a1d2297 extends Twig_Template
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
        $__internal_04bd2502610ab9584684773d7076ee55796909de33a5055987484340b36b97d9 = $this->env->getExtension("native_profiler");
        $__internal_04bd2502610ab9584684773d7076ee55796909de33a5055987484340b36b97d9->enter($__internal_04bd2502610ab9584684773d7076ee55796909de33a5055987484340b36b97d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        
        $__internal_04bd2502610ab9584684773d7076ee55796909de33a5055987484340b36b97d9->leave($__internal_04bd2502610ab9584684773d7076ee55796909de33a5055987484340b36b97d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
