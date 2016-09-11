<?php

/* ElcodiFacebookBundle:Post:image.html.twig */
class __TwigTemplate_4dafe73cb20c6e2a87101b8e230fdfd525bc3d6e65eb8cf3bba421bbe03ab628 extends Twig_Template
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
        $__internal_ffbb2936e5ac3c07e17b853cc518bd01784cf7a6d301eb3a56bdb15df038f1cf = $this->env->getExtension("native_profiler");
        $__internal_ffbb2936e5ac3c07e17b853cc518bd01784cf7a6d301eb3a56bdb15df038f1cf->enter($__internal_ffbb2936e5ac3c07e17b853cc518bd01784cf7a6d301eb3a56bdb15df038f1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiFacebookBundle:Post:image.html.twig"));

        // line 1
        echo "<meta property=\"og:image\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
        echo "\"/>
";
        
        $__internal_ffbb2936e5ac3c07e17b853cc518bd01784cf7a6d301eb3a56bdb15df038f1cf->leave($__internal_ffbb2936e5ac3c07e17b853cc518bd01784cf7a6d301eb3a56bdb15df038f1cf_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiFacebookBundle:Post:image.html.twig";
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
/* <meta property="og:image" content="{{ image }}"/>*/
/* */
