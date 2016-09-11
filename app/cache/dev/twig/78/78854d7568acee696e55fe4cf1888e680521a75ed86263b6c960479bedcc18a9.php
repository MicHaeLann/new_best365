<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a94f79f6eacc933bed9be175e5f01a57a33ba27ec61f006bea700c8075fd436e extends Twig_Template
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
        $__internal_3244a94e19c21df6e872db3469f051f47976cf95e6b3f73b9e64f4fec705adc7 = $this->env->getExtension("native_profiler");
        $__internal_3244a94e19c21df6e872db3469f051f47976cf95e6b3f73b9e64f4fec705adc7->enter($__internal_3244a94e19c21df6e872db3469f051f47976cf95e6b3f73b9e64f4fec705adc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "css", null, true);
        echo "

*/
";
        
        $__internal_3244a94e19c21df6e872db3469f051f47976cf95e6b3f73b9e64f4fec705adc7->leave($__internal_3244a94e19c21df6e872db3469f051f47976cf95e6b3f73b9e64f4fec705adc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
