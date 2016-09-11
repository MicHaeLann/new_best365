<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_c2f21efda500021de6fa360b6951be6d711a445e7d664ed2c5245392bd70eb4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_478ec551a725f9db565e1d591c08663702b84350c1469f1371fb48fcfbca8433 = $this->env->getExtension("native_profiler");
        $__internal_478ec551a725f9db565e1d591c08663702b84350c1469f1371fb48fcfbca8433->enter($__internal_478ec551a725f9db565e1d591c08663702b84350c1469f1371fb48fcfbca8433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478ec551a725f9db565e1d591c08663702b84350c1469f1371fb48fcfbca8433->leave($__internal_478ec551a725f9db565e1d591c08663702b84350c1469f1371fb48fcfbca8433_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_33de28ecbefe11322225fa8c92f2511ff269ce7ee3f25350b0b677cf409edbc3 = $this->env->getExtension("native_profiler");
        $__internal_33de28ecbefe11322225fa8c92f2511ff269ce7ee3f25350b0b677cf409edbc3->enter($__internal_33de28ecbefe11322225fa8c92f2511ff269ce7ee3f25350b0b677cf409edbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : null))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_33de28ecbefe11322225fa8c92f2511ff269ce7ee3f25350b0b677cf409edbc3->leave($__internal_33de28ecbefe11322225fa8c92f2511ff269ce7ee3f25350b0b677cf409edbc3_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     {% if error is defined and error %}*/
/*         <span>{{ error }}</span>*/
/*     {% endif %}*/
/*     {% for owner in hwi_oauth_resource_owners() %}*/
/*     <a href="{{ hwi_oauth_login_url(owner) }}">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />*/
/*     {% endfor %}*/
/* {% endblock hwi_oauth_content %}*/
/* */
