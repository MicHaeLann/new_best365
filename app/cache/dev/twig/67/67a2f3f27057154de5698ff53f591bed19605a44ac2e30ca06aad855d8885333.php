<?php

/* ElcodiProductCsvBundle::buttons.html.twig */
class __TwigTemplate_9fe2bf3aff362dc66c26c3d5165ae646758d2982412979a5d9415aed49a7603e extends Twig_Template
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
        $__internal_4cc4aa368f305feffa8bffc6c831765f2b6864922ee1834f8a8072278f27f0dc = $this->env->getExtension("native_profiler");
        $__internal_4cc4aa368f305feffa8bffc6c831765f2b6864922ee1834f8a8072278f27f0dc->enter($__internal_4cc4aa368f305feffa8bffc6c831765f2b6864922ee1834f8a8072278f27f0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiProductCsvBundle::buttons.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("elcodi_plugin_productcsv_export");
        echo "\" type=\"button\" class=\"button-primary\">
    <i class=\"icon-download\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.product_csv.action"), "html", null, true);
        echo "
</a>
";
        
        $__internal_4cc4aa368f305feffa8bffc6c831765f2b6864922ee1834f8a8072278f27f0dc->leave($__internal_4cc4aa368f305feffa8bffc6c831765f2b6864922ee1834f8a8072278f27f0dc_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiProductCsvBundle::buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <a href="{{ path('elcodi_plugin_productcsv_export') }}" type="button" class="button-primary">*/
/*     <i class="icon-download" aria-hidden="true"></i>*/
/*     {{ 'elcodi_plugin.product_csv.action'|trans }}*/
/* </a>*/
/* */
