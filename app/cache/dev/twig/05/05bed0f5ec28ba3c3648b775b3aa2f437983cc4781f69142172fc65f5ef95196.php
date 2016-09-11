<?php

/* ElcodiTwitterBundle:Follow:follow.html.twig */
class __TwigTemplate_17413cbee33bc7621c5439bbf7e6c412951cd0d93afae43eb520607f93f77726 extends Twig_Template
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
        $__internal_9bdd11ee74749e72ef5d0325e3f2167b9c431871571bde39a7f20ce8d270f436 = $this->env->getExtension("native_profiler");
        $__internal_9bdd11ee74749e72ef5d0325e3f2167b9c431871571bde39a7f20ce8d270f436->enter($__internal_9bdd11ee74749e72ef5d0325e3f2167b9c431871571bde39a7f20ce8d270f436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiTwitterBundle:Follow:follow.html.twig"));

        // line 1
        echo "<li>
    <a
        href=\"https://twitter.com/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getFieldValue", array(0 => "twitter_account"), "method"), "html", null, true);
        echo "\"
        class=\"twitter-follow-button\"
        data-show-count=\"false\">
        Follow @";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getFieldValue", array(0 => "twitter_account"), "method"), "html", null, true);
        echo "
    </a>
</li>
";
        
        $__internal_9bdd11ee74749e72ef5d0325e3f2167b9c431871571bde39a7f20ce8d270f436->leave($__internal_9bdd11ee74749e72ef5d0325e3f2167b9c431871571bde39a7f20ce8d270f436_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiTwitterBundle:Follow:follow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <li>*/
/*     <a*/
/*         href="https://twitter.com/{{ plugin.getFieldValue('twitter_account') }}"*/
/*         class="twitter-follow-button"*/
/*         data-show-count="false">*/
/*         Follow @{{ plugin.getFieldValue('twitter_account') }}*/
/*     </a>*/
/* </li>*/
/* */
