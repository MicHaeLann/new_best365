<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_54e1f2fc43d7f487a44cbe53df3668befb1f3e2a346498cbbaf68a36985ad787 extends Twig_Template
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
        $__internal_bcef1df8f85c34b8533e2e388a3a06c50ac648a9324ce7fd514d671aa19071d8 = $this->env->getExtension("native_profiler");
        $__internal_bcef1df8f85c34b8533e2e388a3a06c50ac648a9324ce7fd514d671aa19071d8->enter($__internal_bcef1df8f85c34b8533e2e388a3a06c50ac648a9324ce7fd514d671aa19071d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null))));
        echo "
";
        
        $__internal_bcef1df8f85c34b8533e2e388a3a06c50ac648a9324ce7fd514d671aa19071d8->leave($__internal_bcef1df8f85c34b8533e2e388a3a06c50ac648a9324ce7fd514d671aa19071d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
