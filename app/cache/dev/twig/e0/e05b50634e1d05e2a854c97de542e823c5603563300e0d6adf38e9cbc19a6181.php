<?php

/* ElcodiGoogleAnalyticsBundle::javascript.html.twig */
class __TwigTemplate_d8265570e6b63afd4c057d93a7cd059be9aec198f8655efa82daca2fb4f81ef5 extends Twig_Template
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
        $__internal_de85628616cadf20d0ffabd6a6a58ebbe52b90f03898693f2c9f82a12b9e17c3 = $this->env->getExtension("native_profiler");
        $__internal_de85628616cadf20d0ffabd6a6a58ebbe52b90f03898693f2c9f82a12b9e17c3->enter($__internal_de85628616cadf20d0ffabd6a6a58ebbe52b90f03898693f2c9f82a12b9e17c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiGoogleAnalyticsBundle::javascript.html.twig"));

        // line 1
        echo "<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getFieldValue", array(0 => "analytics_tracker_id"), "method"), "html", null, true);
        echo "', 'auto'); ga('send', 'pageview'); </script>
";
        
        $__internal_de85628616cadf20d0ffabd6a6a58ebbe52b90f03898693f2c9f82a12b9e17c3->leave($__internal_de85628616cadf20d0ffabd6a6a58ebbe52b90f03898693f2c9f82a12b9e17c3_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiGoogleAnalyticsBundle::javascript.html.twig";
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
/* <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', '{{ plugin.getFieldValue('analytics_tracker_id') }}', 'auto'); ga('send', 'pageview'); </script>*/
/* */
