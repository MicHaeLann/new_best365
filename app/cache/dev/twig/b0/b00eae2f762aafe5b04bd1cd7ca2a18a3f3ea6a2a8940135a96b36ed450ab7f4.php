<?php

/* ElcodiFacebookBundle:Post:share.html.twig */
class __TwigTemplate_96444efe0750ad498f13455e9d6ae865cebcaaab4a6ffe98fae14aa0824c5ad4 extends Twig_Template
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
        $__internal_c3fda9e64da7de9fc84dea8f28b5c8dd2ae4ba253ced46ed6c5ffafa1db11b97 = $this->env->getExtension("native_profiler");
        $__internal_c3fda9e64da7de9fc84dea8f28b5c8dd2ae4ba253ced46ed6c5ffafa1db11b97->enter($__internal_c3fda9e64da7de9fc84dea8f28b5c8dd2ae4ba253ced46ed6c5ffafa1db11b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiFacebookBundle:Post:share.html.twig"));

        // line 1
        echo "<div class=\"fb-share-button\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" data-layout=\"button_count\"></div>
";
        
        $__internal_c3fda9e64da7de9fc84dea8f28b5c8dd2ae4ba253ced46ed6c5ffafa1db11b97->leave($__internal_c3fda9e64da7de9fc84dea8f28b5c8dd2ae4ba253ced46ed6c5ffafa1db11b97_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiFacebookBundle:Post:share.html.twig";
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
/* <div class="fb-share-button" data-href="{{ url }}" data-layout="button_count"></div>*/
/* */
