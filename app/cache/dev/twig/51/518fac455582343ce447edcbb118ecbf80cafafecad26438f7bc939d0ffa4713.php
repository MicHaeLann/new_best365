<?php

/* ElcodiTwitterBundle:Tweet:share.html.twig */
class __TwigTemplate_98406b4a6c96423e8f5fac8e40ab5bf48d67882846e88f7bd316fb04aea9ca96 extends Twig_Template
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
        $__internal_e7b64962ad38d427c9528b5e23100ab8ab03a382ef290761e527f8f12b929288 = $this->env->getExtension("native_profiler");
        $__internal_e7b64962ad38d427c9528b5e23100ab8ab03a382ef290761e527f8f12b929288->enter($__internal_e7b64962ad38d427c9528b5e23100ab8ab03a382ef290761e527f8f12b929288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiTwitterBundle:Tweet:share.html.twig"));

        // line 1
        echo "<a
    href=\"https://twitter.com/share\"
    class=\"twitter-share-button\"
    data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"
    data-text=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html_attr");
        echo "\"
    data-via=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getFieldValue", array(0 => "twitter_account"), "method"), "html", null, true);
        echo "\"
>Tweet</a>
";
        
        $__internal_e7b64962ad38d427c9528b5e23100ab8ab03a382ef290761e527f8f12b929288->leave($__internal_e7b64962ad38d427c9528b5e23100ab8ab03a382ef290761e527f8f12b929288_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiTwitterBundle:Tweet:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <a*/
/*     href="https://twitter.com/share"*/
/*     class="twitter-share-button"*/
/*     data-url="{{ url }}"*/
/*     data-text="{{ text|escape('html_attr') }}"*/
/*     data-via="{{ plugin.getFieldValue('twitter_account') }}"*/
/* >Tweet</a>*/
/* */
