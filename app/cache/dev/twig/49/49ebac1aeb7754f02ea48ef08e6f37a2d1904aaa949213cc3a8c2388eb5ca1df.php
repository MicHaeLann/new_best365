<?php

/* AdminMetricBundle:Metric:metricCheese.html.twig */
class __TwigTemplate_eaf14303992ced100c1229d1f1f6bb92553cfc2eb7d0a8fd9e7632f044ad3c0c extends Twig_Template
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
        $__internal_93141f867ecc670a950211b0feeccfdcd9be6c0ea6c3d66707ef2f5e2533bf1b = $this->env->getExtension("native_profiler");
        $__internal_93141f867ecc670a950211b0feeccfdcd9be6c0ea6c3d66707ef2f5e2533bf1b->enter($__internal_93141f867ecc670a950211b0feeccfdcd9be6c0ea6c3d66707ef2f5e2533bf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMetricBundle:Metric:metricCheese.html.twig"));

        // line 1
        echo "<canvas height=\"100\" data-fc-modules=\"charts\" data-fc-type=\"doughnut\" data-fc-text-no-data=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metrics.info.no_data"), "html", null, true);
        echo "\" data-fc-colors=\"[b55151,5b90bf,b48ead,96c47f,82b2af]\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["eventDescriptor"] => $context["eventName"]) {
            // line 3
            echo "        ";
            $context["value"] = call_user_func_array($this->env->getFunction('metric_beacon_unique')->getCallable(), array((isset($context["tracker"]) ? $context["tracker"] : null), $context["eventName"], $this->getAttribute((isset($context["intervalContainer"]) ? $context["intervalContainer"] : null), "elements", array())));
            // line 4
            echo "        <input name=\"";
            echo twig_escape_filter($this->env, $context["eventDescriptor"], "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['eventDescriptor'], $context['eventName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</canvas>
";
        
        $__internal_93141f867ecc670a950211b0feeccfdcd9be6c0ea6c3d66707ef2f5e2533bf1b->leave($__internal_93141f867ecc670a950211b0feeccfdcd9be6c0ea6c3d66707ef2f5e2533bf1b_prof);

    }

    public function getTemplateName()
    {
        return "AdminMetricBundle:Metric:metricCheese.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  34 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <canvas height="100" data-fc-modules="charts" data-fc-type="doughnut" data-fc-text-no-data="{{ 'admin.metrics.info.no_data'|trans }}" data-fc-colors="[b55151,5b90bf,b48ead,96c47f,82b2af]">*/
/*     {% for eventDescriptor, eventName in events %}*/
/*         {% set value = metric_beacon_unique(tracker, eventName, intervalContainer.elements) %}*/
/*         <input name="{{ eventDescriptor }}" type="hidden" value="{{ value }}" />*/
/*     {% endfor %}*/
/* </canvas>*/
/* */
