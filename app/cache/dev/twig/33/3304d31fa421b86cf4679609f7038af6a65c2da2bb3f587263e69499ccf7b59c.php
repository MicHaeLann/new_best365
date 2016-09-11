<?php

/* StorePageBundle::email.html.twig */
class __TwigTemplate_25e69ee541a6107675ce706cafafe1ac2bf456dc453526d58ae3f7337aba9d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getExtension('template_locator_extension')->locateTemplate("Layout:_email.html.twig"), "StorePageBundle::email.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9c302d45e440d03f2ff72c5d19ee23b57db8e2ba5b4c47dfea90126d8888b87 = $this->env->getExtension("native_profiler");
        $__internal_b9c302d45e440d03f2ff72c5d19ee23b57db8e2ba5b4c47dfea90126d8888b87->enter($__internal_b9c302d45e440d03f2ff72c5d19ee23b57db8e2ba5b4c47dfea90126d8888b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StorePageBundle::email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c302d45e440d03f2ff72c5d19ee23b57db8e2ba5b4c47dfea90126d8888b87->leave($__internal_b9c302d45e440d03f2ff72c5d19ee23b57db8e2ba5b4c47dfea90126d8888b87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a54f273801774edf37445928e20c415b895066bc32faf6ebf1cd6e6dcd5ba7 = $this->env->getExtension("native_profiler");
        $__internal_52a54f273801774edf37445928e20c415b895066bc32faf6ebf1cd6e6dcd5ba7->enter($__internal_52a54f273801774edf37445928e20c415b895066bc32faf6ebf1cd6e6dcd5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate(twig_template_from_string($this->env, (isset($context["content"]) ? $context["content"] : null)), "StorePageBundle::email.html.twig", 4)->display($context);
        
        $__internal_52a54f273801774edf37445928e20c415b895066bc32faf6ebf1cd6e6dcd5ba7->leave($__internal_52a54f273801774edf37445928e20c415b895066bc32faf6ebf1cd6e6dcd5ba7_prof);

    }

    public function getTemplateName()
    {
        return "StorePageBundle::email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends locate_template('Layout:_email.html.twig') %}*/
/* */
/* {% block body %}*/
/*     {% include template_from_string(content) %}*/
/* {% endblock %}*/
/* */
