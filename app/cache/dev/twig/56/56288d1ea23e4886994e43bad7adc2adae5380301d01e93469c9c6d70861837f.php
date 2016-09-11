<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0c918d47c6a98f6852819c429738eecb56d3395cd3d0665c3afc51f187d6376f extends Twig_Template
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
        $__internal_badb315b367ba55188737759006317aaeac191a04b9448fd106ed324b0d994d2 = $this->env->getExtension("native_profiler");
        $__internal_badb315b367ba55188737759006317aaeac191a04b9448fd106ed324b0d994d2->enter($__internal_badb315b367ba55188737759006317aaeac191a04b9448fd106ed324b0d994d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_badb315b367ba55188737759006317aaeac191a04b9448fd106ed324b0d994d2->leave($__internal_badb315b367ba55188737759006317aaeac191a04b9448fd106ed324b0d994d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
