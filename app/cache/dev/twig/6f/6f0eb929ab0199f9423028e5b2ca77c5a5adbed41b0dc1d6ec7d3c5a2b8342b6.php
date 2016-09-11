<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_52cae36c93ed960610c58e13bc7de14f2549789b487e7c0646f9477055e863c6 extends Twig_Template
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
        $__internal_9b1d33371f0dcd66afbf871eead478042780014da89feeedf5e6b332c63273d5 = $this->env->getExtension("native_profiler");
        $__internal_9b1d33371f0dcd66afbf871eead478042780014da89feeedf5e6b332c63273d5->enter($__internal_9b1d33371f0dcd66afbf871eead478042780014da89feeedf5e6b332c63273d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray", array()))));
        echo "
";
        
        $__internal_9b1d33371f0dcd66afbf871eead478042780014da89feeedf5e6b332c63273d5->leave($__internal_9b1d33371f0dcd66afbf871eead478042780014da89feeedf5e6b332c63273d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
