<?php

/* AdminCartBundle:Order:date.html.twig */
class __TwigTemplate_bdfe5d2c6570102811b37e10a521aa9c3f37e2e3ea0b306b8448bbefab1cfe44 extends Twig_Template
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
        $__internal_90867477dad1ccdd51f633a5da85faadd470c20c0c06b0430a714caec28480f2 = $this->env->getExtension("native_profiler");
        $__internal_90867477dad1ccdd51f633a5da85faadd470c20c0c06b0430a714caec28480f2->enter($__internal_90867477dad1ccdd51f633a5da85faadd470c20c0c06b0430a714caec28480f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:Order:date.html.twig"));

        // line 6
        echo "

";
        // line 8
        if ((twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "dmy") == twig_date_format_filter($this->env, "now", "dmy"))) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.date.today_at", array("%time%" => twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "G:ia", false))), "html", null, true);
            echo "

";
        } elseif ((twig_number_format_filter($this->env, twig_date_format_filter($this->env,         // line 11
(isset($context["date"]) ? $context["date"] : null), "dmy")) == (twig_date_format_filter($this->env, "now", "dmy") - 1))) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.date.yesterday_at", array("%time%" => twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "G:ia", false))), "html", null, true);
            echo "

";
        } elseif (((twig_number_format_filter($this->env, twig_date_format_filter($this->env,         // line 14
(isset($context["date"]) ? $context["date"] : null), "d")) > (twig_date_format_filter($this->env, "now", "dmy") - 5)) && (twig_number_format_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "my")) == twig_date_format_filter($this->env, "now", "my")))) {
            // line 15
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "l d \\a\\t G:ia", false), "html", null, true);
            echo "

";
        } else {
            // line 18
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "M d \\a\\t G:ia", false), "html", null, true);
            echo "

";
        }
        
        $__internal_90867477dad1ccdd51f633a5da85faadd470c20c0c06b0430a714caec28480f2->leave($__internal_90867477dad1ccdd51f633a5da85faadd470c20c0c06b0430a714caec28480f2_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:Order:date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  44 => 15,  42 => 14,  36 => 12,  34 => 11,  28 => 9,  26 => 8,  22 => 6,);
    }
}
/* {#*/
/*     Given parameters:*/
/* */
/*     * date*/
/* #}*/
/* */
/* */
/* {% if date|date('dmy') == 'now'|date('dmy') %}*/
/*     {{ 'ui.date.today_at'|trans({ '%time%': date|date('G:ia', false) }) }}*/
/* */
/* {% elseif date|date('dmy')|number_format == 'now'|date('dmy') -1 %}*/
/*     {{ 'ui.date.yesterday_at'|trans({ '%time%': date|date('G:ia', false) }) }}*/
/* */
/* {% elseif date|date('d')|number_format > 'now'|date('dmy') - 5 and date|date('my')|number_format == 'now'|date('my') %}*/
/*     {{ date|date('l d \\a\\t G:ia', false) }}*/
/* */
/* {% else %}*/
/*     {{ date|date('M d \\a\\t G:ia', false) }}*/
/* */
/* {% endif %}*/
/* */
