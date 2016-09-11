<?php

/* ElcodiFacebookBundle:Follow:follow.html.twig */
class __TwigTemplate_d1e11b7b866d8308b25ebaa07ef5a8913c915c8f9319426fff7f526f08e79373 extends Twig_Template
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
        $__internal_70f49586ead81c2d41c38fc0add2da9a922786be7449c650be0448a95256abfd = $this->env->getExtension("native_profiler");
        $__internal_70f49586ead81c2d41c38fc0add2da9a922786be7449c650be0448a95256abfd->enter($__internal_70f49586ead81c2d41c38fc0add2da9a922786be7449c650be0448a95256abfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiFacebookBundle:Follow:follow.html.twig"));

        // line 1
        echo "<li>
    <div class=\"fb-follow\" data-href=\"https://www.facebook.com/";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getFieldValue", array(0 => "facebook_account"), "method"), "html", null, true);
        echo "\" data-colorscheme=\"light\" data-layout=\"button_count\" data-show-faces=\"false\"></div>
</li>
";
        
        $__internal_70f49586ead81c2d41c38fc0add2da9a922786be7449c650be0448a95256abfd->leave($__internal_70f49586ead81c2d41c38fc0add2da9a922786be7449c650be0448a95256abfd_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiFacebookBundle:Follow:follow.html.twig";
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
/* <li>*/
/*     <div class="fb-follow" data-href="https://www.facebook.com/{{ plugin.getFieldValue('facebook_account') }}" data-colorscheme="light" data-layout="button_count" data-show-faces="false"></div>*/
/* </li>*/
/* */
