<?php

/* StoreTemplateBundle:Modules:_checkout-progress.html.twig */
class __TwigTemplate_4e51b03251e36a6ded68e278d856bcd36db30bf776bdb7cebbec9d6862f2953f extends Twig_Template
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
        $__internal_68349a7bf1819dde02c421c99e3e8d0e600c4306bdf5cbf3b21e6a28264f0941 = $this->env->getExtension("native_profiler");
        $__internal_68349a7bf1819dde02c421c99e3e8d0e600c4306bdf5cbf3b21e6a28264f0941->enter($__internal_68349a7bf1819dde02c421c99e3e8d0e600c4306bdf5cbf3b21e6a28264f0941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_checkout-progress.html.twig"));

        // line 1
        echo "<span class=\"progress\">
    <span class=\"progress-complete progress-status-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["step"]) ? $context["step"] : null), "html", null, true);
        echo "\">
        <span class=\"progress-marker\"></span>
    </span>
</span>
";
        
        $__internal_68349a7bf1819dde02c421c99e3e8d0e600c4306bdf5cbf3b21e6a28264f0941->leave($__internal_68349a7bf1819dde02c421c99e3e8d0e600c4306bdf5cbf3b21e6a28264f0941_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_checkout-progress.html.twig";
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
/* <span class="progress">*/
/*     <span class="progress-complete progress-status-{{ step }}">*/
/*         <span class="progress-marker"></span>*/
/*     </span>*/
/* </span>*/
/* */
