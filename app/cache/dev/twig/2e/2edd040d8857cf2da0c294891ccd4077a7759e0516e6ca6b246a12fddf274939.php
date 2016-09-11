<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2e34ab17e005ef08f5b2d63a5228e7370eadefc97a939aa5532450d3d15d04ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a42366b3e81c799348de410f9bfc2d36ecf7e4da81a7e68153f4b681146396f = $this->env->getExtension("native_profiler");
        $__internal_7a42366b3e81c799348de410f9bfc2d36ecf7e4da81a7e68153f4b681146396f->enter($__internal_7a42366b3e81c799348de410f9bfc2d36ecf7e4da81a7e68153f4b681146396f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a42366b3e81c799348de410f9bfc2d36ecf7e4da81a7e68153f4b681146396f->leave($__internal_7a42366b3e81c799348de410f9bfc2d36ecf7e4da81a7e68153f4b681146396f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bee29dacbb7bd5edaac0a2e345b46af1924f9f56ba03ec6376fe39a6e6357c4d = $this->env->getExtension("native_profiler");
        $__internal_bee29dacbb7bd5edaac0a2e345b46af1924f9f56ba03ec6376fe39a6e6357c4d->enter($__internal_bee29dacbb7bd5edaac0a2e345b46af1924f9f56ba03ec6376fe39a6e6357c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bee29dacbb7bd5edaac0a2e345b46af1924f9f56ba03ec6376fe39a6e6357c4d->leave($__internal_bee29dacbb7bd5edaac0a2e345b46af1924f9f56ba03ec6376fe39a6e6357c4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_884fabd91e974e0d2f0454cdd467bf936698b2b6d2d42b310a8914bfd2696a08 = $this->env->getExtension("native_profiler");
        $__internal_884fabd91e974e0d2f0454cdd467bf936698b2b6d2d42b310a8914bfd2696a08->enter($__internal_884fabd91e974e0d2f0454cdd467bf936698b2b6d2d42b310a8914bfd2696a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_884fabd91e974e0d2f0454cdd467bf936698b2b6d2d42b310a8914bfd2696a08->leave($__internal_884fabd91e974e0d2f0454cdd467bf936698b2b6d2d42b310a8914bfd2696a08_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b050bc5c053e621aa641aa7a0cf3361c26f78376f4278849f9e13e6dc815beec = $this->env->getExtension("native_profiler");
        $__internal_b050bc5c053e621aa641aa7a0cf3361c26f78376f4278849f9e13e6dc815beec->enter($__internal_b050bc5c053e621aa641aa7a0cf3361c26f78376f4278849f9e13e6dc815beec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b050bc5c053e621aa641aa7a0cf3361c26f78376f4278849f9e13e6dc815beec->leave($__internal_b050bc5c053e621aa641aa7a0cf3361c26f78376f4278849f9e13e6dc815beec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
