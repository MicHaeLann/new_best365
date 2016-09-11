<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2651543273b087b4624b64a1fc4791fb2108bdf7e0f3d8180af26876a412c16b extends Twig_Template
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
        $__internal_1adfe7baaae6d9caef99b6826832c8a56ddcae5587976a67d3bf6c0399affe12 = $this->env->getExtension("native_profiler");
        $__internal_1adfe7baaae6d9caef99b6826832c8a56ddcae5587976a67d3bf6c0399affe12->enter($__internal_1adfe7baaae6d9caef99b6826832c8a56ddcae5587976a67d3bf6c0399affe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "js", null, true);
        echo "

*/
";
        
        $__internal_1adfe7baaae6d9caef99b6826832c8a56ddcae5587976a67d3bf6c0399affe12->leave($__internal_1adfe7baaae6d9caef99b6826832c8a56ddcae5587976a67d3bf6c0399affe12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
