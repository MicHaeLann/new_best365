<?php

/* AdminMetricBundle:Metric:metricOrderTotals.html.twig */
class __TwigTemplate_f638e7cea26ea6e4fa3f9f5f96af9b5bfe51a20f68633fdbe73eee6951679e9e extends Twig_Template
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
        $__internal_600c84979226d71157102025c26a26152f61f62562881cc8a85b135e94aeccb8 = $this->env->getExtension("native_profiler");
        $__internal_600c84979226d71157102025c26a26152f61f62562881cc8a85b135e94aeccb8->enter($__internal_600c84979226d71157102025c26a26152f61f62562881cc8a85b135e94aeccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMetricBundle:Metric:metricOrderTotals.html.twig"));

        // line 1
        $context["partialIntervals"] = $this->getAttribute((isset($context["intervalContainer"]) ? $context["intervalContainer"] : null), "partialIntervals", array());
        // line 2
        $context["chartElementsSeparation"] = $this->getAttribute((isset($context["intervalContainer"]) ? $context["intervalContainer"] : null), "chartElementsSeparation", array());
        // line 3
        $context["chartLegendFormat"] = $this->getAttribute((isset($context["intervalContainer"]) ? $context["intervalContainer"] : null), "chartLegendFormat", array());
        // line 4
        echo "
<div class=\"box-none pa-n\">
    <canvas
        height=\"250\"
        data-fc-modules=\"charts\"
        data-fc-type=\"bar\"
        data-fc-text-no-data=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metrics.info.no_data"), "html", null, true);
        echo "\"
        data-fc-labels-x=\"";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partialIntervals"]) ? $context["partialIntervals"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["partialInterval"]) {
            if ((($this->getAttribute($context["loop"], "index", array()) % (isset($context["chartElementsSeparation"]) ? $context["chartElementsSeparation"] : null)) == 0)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partialInterval"], "first", array()), (isset($context["chartLegendFormat"]) ? $context["chartLegendFormat"] : null)), "html", null, true);
            }
            echo ",";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partialInterval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
    >
        <input
            name=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metrics.type.line.unique"), "html", null, true);
        echo "\"
            type=\"hidden\"
            value=\"";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partialIntervals"]) ? $context["partialIntervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["partialInterval"]) {
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('metric_accumulation')->getCallable(), array((isset($context["tracker"]) ? $context["tracker"] : null), (isset($context["event"]) ? $context["event"] : null), $this->getAttribute($context["partialInterval"], "elements", array()))) / 100), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partialInterval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
        />
    </canvas>
</div>
";
        
        $__internal_600c84979226d71157102025c26a26152f61f62562881cc8a85b135e94aeccb8->leave($__internal_600c84979226d71157102025c26a26152f61f62562881cc8a85b135e94aeccb8_prof);

    }

    public function getTemplateName()
    {
        return "AdminMetricBundle:Metric:metricOrderTotals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  77 => 14,  40 => 11,  36 => 10,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set partialIntervals = intervalContainer.partialIntervals %}*/
/* {% set chartElementsSeparation = intervalContainer.chartElementsSeparation %}*/
/* {% set chartLegendFormat = intervalContainer.chartLegendFormat %}*/
/* */
/* <div class="box-none pa-n">*/
/*     <canvas*/
/*         height="250"*/
/*         data-fc-modules="charts"*/
/*         data-fc-type="bar"*/
/*         data-fc-text-no-data="{{ 'admin.metrics.info.no_data'|trans }}"*/
/*         data-fc-labels-x="{% for partialInterval in partialIntervals %}{% if loop.index % chartElementsSeparation == 0 %}{{ partialInterval.first|date(chartLegendFormat) }}{% endif %},{% endfor %}"*/
/*     >*/
/*         <input*/
/*             name="{{ 'admin.metrics.type.line.unique'|trans }}"*/
/*             type="hidden"*/
/*             value="{% for partialInterval in partialIntervals %}{{ metric_accumulation(tracker, event, partialInterval.elements)/100 }},{% endfor %}"*/
/*         />*/
/*     </canvas>*/
/* </div>*/
/* */
