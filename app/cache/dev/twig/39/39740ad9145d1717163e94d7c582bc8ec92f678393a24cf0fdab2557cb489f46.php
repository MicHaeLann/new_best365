<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a6e2b2b9550ee5b8f55476a2279acfaab2a351ec133ac6d8ace161309429ef8c extends Twig_Template
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
        $__internal_8eb3461f89f75413310a003f5d35f20380835b89c45e4c4d68cccbc7f3b178d6 = $this->env->getExtension("native_profiler");
        $__internal_8eb3461f89f75413310a003f5d35f20380835b89c45e4c4d68cccbc7f3b178d6->enter($__internal_8eb3461f89f75413310a003f5d35f20380835b89c45e4c4d68cccbc7f3b178d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : null);
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8eb3461f89f75413310a003f5d35f20380835b89c45e4c4d68cccbc7f3b178d6->leave($__internal_8eb3461f89f75413310a003f5d35f20380835b89c45e4c4d68cccbc7f3b178d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
