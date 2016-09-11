<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d22067fd49c59108f060d56acab81eb6c56425efd6ae9d9a4c47f6986f96d5d1 extends Twig_Template
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
        $__internal_d18819be557b21c70708b5d13fd9edb38c28f59dc0f91e70d8b0ca59fe3423c1 = $this->env->getExtension("native_profiler");
        $__internal_d18819be557b21c70708b5d13fd9edb38c28f59dc0f91e70d8b0ca59fe3423c1->enter($__internal_d18819be557b21c70708b5d13fd9edb38c28f59dc0f91e70d8b0ca59fe3423c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\" />
";
        
        $__internal_d18819be557b21c70708b5d13fd9edb38c28f59dc0f91e70d8b0ca59fe3423c1->leave($__internal_d18819be557b21c70708b5d13fd9edb38c28f59dc0f91e70d8b0ca59fe3423c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
