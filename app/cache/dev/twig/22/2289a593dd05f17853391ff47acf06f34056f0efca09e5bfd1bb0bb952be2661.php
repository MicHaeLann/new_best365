<?php

/* AdminUserBundle:Profile:view.html.twig */
class __TwigTemplate_720a2bb5746d87c60f15d7e866604fe6a2e3a5855715aba830d48f72d4e89cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminUserBundle:Profile:view.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33c790b62aff4f969726663556e75cd3ef5010b136f62d6fd92462f40ee8708c = $this->env->getExtension("native_profiler");
        $__internal_33c790b62aff4f969726663556e75cd3ef5010b136f62d6fd92462f40ee8708c->enter($__internal_33c790b62aff4f969726663556e75cd3ef5010b136f62d6fd92462f40ee8708c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Profile:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c790b62aff4f969726663556e75cd3ef5010b136f62d6fd92462f40ee8708c->leave($__internal_33c790b62aff4f969726663556e75cd3ef5010b136f62d6fd92462f40ee8708c_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Profile:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
