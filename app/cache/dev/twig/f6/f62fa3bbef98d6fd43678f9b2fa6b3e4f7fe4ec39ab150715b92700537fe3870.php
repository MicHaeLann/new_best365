<?php

/* AdminMetricBundle:Metric:metricTop.html.twig */
class __TwigTemplate_859e75065b7929197eec316df6ea08b2875aca83058127a303c1e5bfd611f5f7 extends Twig_Template
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
        $__internal_f81f43b43a3e02308aeeaf091e9a798cb5be9225f9380739cc90af08a0a2e571 = $this->env->getExtension("native_profiler");
        $__internal_f81f43b43a3e02308aeeaf091e9a798cb5be9225f9380739cc90af08a0a2e571->enter($__internal_f81f43b43a3e02308aeeaf091e9a798cb5be9225f9380739cc90af08a0a2e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMetricBundle:Metric:metricTop.html.twig"));

        // line 1
        echo "<table class=\"table\">
    <tbody>

        ";
        // line 4
        $context["results"] = twig_slice($this->env, call_user_func_array($this->env->getFunction('metric_distributions')->getCallable(), array((isset($context["tracker"]) ? $context["tracker"] : null), (isset($context["event"]) ? $context["event"] : null), $this->getAttribute((isset($context["intervalContainer"]) ? $context["intervalContainer"] : null), "elements", array()))), 1, 10);
        // line 5
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["result"] => $context["count"]) {
            // line 7
            echo "            <tr>
                <td class=\"w-60\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "</a></td>
                <td class=\"ta-c\">";
            // line 9
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['result'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </tbody>
</table>
";
        
        $__internal_f81f43b43a3e02308aeeaf091e9a798cb5be9225f9380739cc90af08a0a2e571->leave($__internal_f81f43b43a3e02308aeeaf091e9a798cb5be9225f9380739cc90af08a0a2e571_prof);

    }

    public function getTemplateName()
    {
        return "AdminMetricBundle:Metric:metricTop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  45 => 9,  39 => 8,  36 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <table class="table">*/
/*     <tbody>*/
/* */
/*         {% set results = metric_distributions(tracker, event, intervalContainer.elements)|slice(1,10) %}*/
/* */
/*         {% for result, count in results %}*/
/*             <tr>*/
/*                 <td class="w-60"><a href="{{ result }}">{{ result }}</a></td>*/
/*                 <td class="ta-c">{{ count }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
