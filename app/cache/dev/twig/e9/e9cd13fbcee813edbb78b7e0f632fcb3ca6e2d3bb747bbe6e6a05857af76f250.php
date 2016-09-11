<?php

/* AdminMetricBundle:Panel:panel.html.twig */
class __TwigTemplate_0241aa80adcb77dbf2107acc315514a8a929e1b5ec0378a6c08e2d9c86ba8aec extends Twig_Template
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
        $__internal_8f840607e26e0067fb194662338d73fe70307689fb73f950dbd3a35e915a3fac = $this->env->getExtension("native_profiler");
        $__internal_8f840607e26e0067fb194662338d73fe70307689fb73f950dbd3a35e915a3fac->enter($__internal_8f840607e26e0067fb194662338d73fe70307689fb73f950dbd3a35e915a3fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMetricBundle:Panel:panel.html.twig"));

        // line 1
        echo "<nav class=\"navigation-sub dashboard-tabs\">
    <ul>
        <li";
        // line 3
        if (((isset($context["type"]) ? $context["type"] : null) == 1)) {
            echo " class=\"active\"";
        }
        echo ">
            <a title=\"tab 1\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_reports_today");
        echo "\">
                <span class='dashboard-tabs-range'>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart_range.today"), "html", null, true);
        echo "</span>
                ";
        // line 6
        $context["todayIntervalContainer"] = $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(1);
        // line 7
        echo "                <span class='dashboard-tabs-amount'>
                    ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money_from_value')->getCallable(), array(call_user_func_array($this->env->getFunction('metric_accumulation')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_total", $this->getAttribute((isset($context["todayIntervalContainer"]) ? $context["todayIntervalContainer"] : null), "elements", array()))))), "html", null, true);
        echo "
                </span>
                <span class='dashboard-tabs-orders'>
                    ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('metric_beacon_total')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_nb", $this->getAttribute((isset($context["todayIntervalContainer"]) ? $context["todayIntervalContainer"] : null), "elements", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.orders"), "html", null, true);
        echo "
                </span>
                ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == 1)) {
            // line 14
            echo "                    ";
            $context["intervalContainer"] = (isset($context["todayIntervalContainer"]) ? $context["todayIntervalContainer"] : null);
            // line 15
            echo "                ";
        }
        // line 16
        echo "            </a>
        </li>

        <li";
        // line 19
        if (((isset($context["type"]) ? $context["type"] : null) == 2)) {
            echo " class=\"active\"";
        }
        echo ">
            <a title=\"tab 2\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("admin_reports_yesterday");
        echo "\">
                <span class='dashboard-tabs-range'>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart_range.yesterday"), "html", null, true);
        echo "</span>
                ";
        // line 22
        $context["yesterdayIntervalContainer"] = $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(2);
        // line 23
        echo "                <span class='dashboard-tabs-amount'>
                    ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money_from_value')->getCallable(), array(call_user_func_array($this->env->getFunction('metric_accumulation')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_total", $this->getAttribute((isset($context["yesterdayIntervalContainer"]) ? $context["yesterdayIntervalContainer"] : null), "elements", array()))))), "html", null, true);
        echo "
                </span>
                <span class='dashboard-tabs-orders'>
                    ";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('metric_beacon_total')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_nb", $this->getAttribute((isset($context["yesterdayIntervalContainer"]) ? $context["yesterdayIntervalContainer"] : null), "elements", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.orders"), "html", null, true);
        echo "
                </span>
                ";
        // line 29
        if (((isset($context["type"]) ? $context["type"] : null) == 2)) {
            // line 30
            echo "                    ";
            $context["intervalContainer"] = (isset($context["yesterdayIntervalContainer"]) ? $context["yesterdayIntervalContainer"] : null);
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </a>
        </li>

        <li";
        // line 35
        if (((isset($context["type"]) ? $context["type"] : null) == 3)) {
            echo " class=\"active\"";
        }
        echo ">
            <a title=\"tab 3\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("admin_reports_last_week");
        echo "\">
                <span class='dashboard-tabs-range'>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart_range.last7days"), "html", null, true);
        echo "</span>
                ";
        // line 38
        $context["lastWeekIntervalContainer"] = $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(1);
        // line 39
        echo "                <span class='dashboard-tabs-amount'>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money_from_value')->getCallable(), array(call_user_func_array($this->env->getFunction('metric_accumulation')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_total", $this->getAttribute((isset($context["lastWeekIntervalContainer"]) ? $context["lastWeekIntervalContainer"] : null), "elements", array()))))), "html", null, true);
        echo "
                </span>
                <span class='dashboard-tabs-orders'>
                    ";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('metric_beacon_total')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_nb", $this->getAttribute((isset($context["lastWeekIntervalContainer"]) ? $context["lastWeekIntervalContainer"] : null), "elements", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.orders"), "html", null, true);
        echo "
                </span>
                ";
        // line 45
        if (((isset($context["type"]) ? $context["type"] : null) == 3)) {
            // line 46
            echo "                    ";
            $context["intervalContainer"] = (isset($context["lastWeekIntervalContainer"]) ? $context["lastWeekIntervalContainer"] : null);
            // line 47
            echo "                ";
        }
        // line 48
        echo "            </a>
        </li>

        <li";
        // line 51
        if (((isset($context["type"]) ? $context["type"] : null) == 4)) {
            echo " class=\"active\"";
        }
        echo ">
            <a title=\"tab 4\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("admin_reports_last_month");
        echo "\">
                <span class='dashboard-tabs-range'>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart_range.last30days"), "html", null, true);
        echo "</span>
                ";
        // line 54
        $context["lastMonthIntervalContainer"] = $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(4);
        // line 55
        echo "                <span class='dashboard-tabs-amount'>
                    ";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money_from_value')->getCallable(), array(call_user_func_array($this->env->getFunction('metric_accumulation')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_total", $this->getAttribute((isset($context["lastMonthIntervalContainer"]) ? $context["lastMonthIntervalContainer"] : null), "elements", array()))))), "html", null, true);
        echo "
                </span>
                <span class='dashboard-tabs-orders'>
                    ";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('metric_beacon_total')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_nb", $this->getAttribute((isset($context["lastMonthIntervalContainer"]) ? $context["lastMonthIntervalContainer"] : null), "elements", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.orders"), "html", null, true);
        echo "
                </span>
                ";
        // line 61
        if (((isset($context["type"]) ? $context["type"] : null) == 4)) {
            // line 62
            echo "                    ";
            $context["intervalContainer"] = (isset($context["lastMonthIntervalContainer"]) ? $context["lastMonthIntervalContainer"] : null);
            // line 63
            echo "                ";
        }
        // line 64
        echo "            </a>
        </li>

        <li";
        // line 67
        if (((isset($context["type"]) ? $context["type"] : null) == 5)) {
            echo " class=\"active\"";
        }
        echo ">
            <a title=\"tab 5\" href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getUrl("admin_reports_last_quarter");
        echo "\">
                <span class='dashboard-tabs-range'>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart_range.last90days"), "html", null, true);
        echo "</span>
                ";
        // line 70
        $context["lastQuarterIntervalContainer"] = $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(5);
        // line 71
        echo "                <span class='dashboard-tabs-amount'>
                    ";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money_from_value')->getCallable(), array(call_user_func_array($this->env->getFunction('metric_accumulation')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_total", $this->getAttribute((isset($context["lastQuarterIntervalContainer"]) ? $context["lastQuarterIntervalContainer"] : null), "elements", array()))))), "html", null, true);
        echo "
                </span>
                <span class='dashboard-tabs-orders'>
                    ";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('metric_beacon_total')->getCallable(), array($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "tracker", array()), "order_nb", $this->getAttribute((isset($context["lastQuarterIntervalContainer"]) ? $context["lastQuarterIntervalContainer"] : null), "elements", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.orders"), "html", null, true);
        echo "
                </span>
                ";
        // line 77
        if (((isset($context["type"]) ? $context["type"] : null) == 5)) {
            // line 78
            echo "                    ";
            $context["intervalContainer"] = (isset($context["lastQuarterIntervalContainer"]) ? $context["lastQuarterIntervalContainer"] : null);
            // line 79
            echo "                ";
        }
        // line 80
        echo "            </a>
        </li>
    </ul>
</nav>

<div class=\"box-background dashboard-panels\">
    <div class=\"grid\">
        <div class=\"col-1-2\">
            <div class=\"pr-l\">
            <h2>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.visitors.title"), "html", null, true);
        echo "</h2>
            ";
        // line 90
        $this->loadTemplate("AdminMetricBundle:Metric:metricLine.html.twig", "AdminMetricBundle:Panel:panel.html.twig", 90)->display(array_merge($context, array("tracker" => $this->getAttribute(        // line 91
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "event" => "pv", "intervalContainer" =>         // line 93
(isset($context["intervalContainer"]) ? $context["intervalContainer"] : null))));
        // line 95
        echo "            </div>
        </div>
        <div class=\"col-1-2\">
            <div class=\"pr-l\">
            <h2>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.sales.title"), "html", null, true);
        echo "</h2>
            ";
        // line 100
        $this->loadTemplate("AdminMetricBundle:Metric:metricOrderTotals.html.twig", "AdminMetricBundle:Panel:panel.html.twig", 100)->display(array_merge($context, array("tracker" => $this->getAttribute(        // line 101
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "event" => "order_total", "intervalContainer" =>         // line 103
(isset($context["intervalContainer"]) ? $context["intervalContainer"] : null))));
        // line 105
        echo "            </div>
        </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-1-3\">
            <div class=\"box-none pa-n ta-c\">
                <h2>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.cart_conversion.title"), "html", null, true);
        echo "</h2>
                ";
        // line 112
        $this->loadTemplate("AdminMetricBundle:Metric:metricCheese.html.twig", "AdminMetricBundle:Panel:panel.html.twig", 112)->display(array_merge($context, array("tracker" => $this->getAttribute(        // line 113
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "events" => array($this->env->getExtension('translator')->trans("admin.dashboard.chart.cart_conversion.cart_view") => "pv_store_cart_view", $this->env->getExtension('translator')->trans("admin.dashboard.chart.cart_conversion.billing_shipping") => "pv_store_checkout_address", $this->env->getExtension('translator')->trans("admin.dashboard.chart.cart_conversion.payment") => "pv_store_checkout_payment", $this->env->getExtension('translator')->trans("admin.dashboard.chart.cart_conversion.ordered") => "order_nb"), "intervalContainer" =>         // line 120
(isset($context["intervalContainer"]) ? $context["intervalContainer"] : null))));
        // line 122
        echo "            </div>
        </div>
        <div class=\"col-1-3\">
            <div class=\"box-none pa-n ta-c\">
                <h2>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.devices.title"), "html", null, true);
        echo "</h2>
                ";
        // line 127
        $this->loadTemplate("AdminMetricBundle:Metric:metricCheese.html.twig", "AdminMetricBundle:Panel:panel.html.twig", 127)->display(array_merge($context, array("tracker" => $this->getAttribute(        // line 128
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "events" => array($this->env->getExtension('translator')->trans("admin.dashboard.chart.devices.mobile") => "mob", $this->env->getExtension('translator')->trans("admin.dashboard.chart.devices.desktop") => "no_mob"), "intervalContainer" =>         // line 133
(isset($context["intervalContainer"]) ? $context["intervalContainer"] : null))));
        // line 135
        echo "            </div>
        </div>
        <div class=\"col-1-3\">
            <div class=\"box-none pa-n ta-c\">
                <h2>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.chart.traffic_source.title"), "html", null, true);
        echo "</h2>
                ";
        // line 140
        $this->loadTemplate("AdminMetricBundle:Metric:metricCheese.html.twig", "AdminMetricBundle:Panel:panel.html.twig", 140)->display(array_merge($context, array("tracker" => $this->getAttribute(        // line 141
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "events" => array($this->env->getExtension('translator')->trans("admin.dashboard.chart.traffic_source.direct") => "source_dir", $this->env->getExtension('translator')->trans("admin.dashboard.chart.traffic_source.referrals") => "source_ref", $this->env->getExtension('translator')->trans("admin.dashboard.chart.traffic_source.search_engine") => "source_se"), "intervalContainer" =>         // line 147
(isset($context["intervalContainer"]) ? $context["intervalContainer"] : null))));
        // line 149
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_8f840607e26e0067fb194662338d73fe70307689fb73f950dbd3a35e915a3fac->leave($__internal_8f840607e26e0067fb194662338d73fe70307689fb73f950dbd3a35e915a3fac_prof);

    }

    public function getTemplateName()
    {
        return "AdminMetricBundle:Panel:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 149,  321 => 147,  320 => 141,  319 => 140,  315 => 139,  309 => 135,  307 => 133,  306 => 128,  305 => 127,  301 => 126,  295 => 122,  293 => 120,  292 => 113,  291 => 112,  287 => 111,  279 => 105,  277 => 103,  276 => 101,  275 => 100,  271 => 99,  265 => 95,  263 => 93,  262 => 91,  261 => 90,  257 => 89,  246 => 80,  243 => 79,  240 => 78,  238 => 77,  231 => 75,  225 => 72,  222 => 71,  220 => 70,  216 => 69,  212 => 68,  206 => 67,  201 => 64,  198 => 63,  195 => 62,  193 => 61,  186 => 59,  180 => 56,  177 => 55,  175 => 54,  171 => 53,  167 => 52,  161 => 51,  156 => 48,  153 => 47,  150 => 46,  148 => 45,  141 => 43,  135 => 40,  132 => 39,  130 => 38,  126 => 37,  122 => 36,  116 => 35,  111 => 32,  108 => 31,  105 => 30,  103 => 29,  96 => 27,  90 => 24,  87 => 23,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  66 => 16,  63 => 15,  60 => 14,  58 => 13,  51 => 11,  45 => 8,  42 => 7,  40 => 6,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* <nav class="navigation-sub dashboard-tabs">*/
/*     <ul>*/
/*         <li{% if type == 1 %} class="active"{% endif %}>*/
/*             <a title="tab 1" href="{{ url("admin_reports_today") }}">*/
/*                 <span class='dashboard-tabs-range'>{{ 'admin.dashboard.chart_range.today'|trans }}</span>*/
/*                 {% set todayIntervalContainer = metric_create_interval_container(1) %}*/
/*                 <span class='dashboard-tabs-amount'>*/
/*                     {{ metric_accumulation(store.tracker, 'order_total', todayIntervalContainer.elements)|print_money_from_value }}*/
/*                 </span>*/
/*                 <span class='dashboard-tabs-orders'>*/
/*                     {{ metric_beacon_total(store.tracker, 'order_nb', todayIntervalContainer.elements) }} {{ "admin.dashboard.chart.orders"|trans }}*/
/*                 </span>*/
/*                 {% if type == 1 %}*/
/*                     {% set intervalContainer = todayIntervalContainer %}*/
/*                 {% endif %}*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li{% if type == 2 %} class="active"{% endif %}>*/
/*             <a title="tab 2" href="{{ url("admin_reports_yesterday") }}">*/
/*                 <span class='dashboard-tabs-range'>{{ 'admin.dashboard.chart_range.yesterday'|trans }}</span>*/
/*                 {% set yesterdayIntervalContainer = metric_create_interval_container(2) %}*/
/*                 <span class='dashboard-tabs-amount'>*/
/*                     {{ metric_accumulation(store.tracker, 'order_total', yesterdayIntervalContainer.elements)|print_money_from_value }}*/
/*                 </span>*/
/*                 <span class='dashboard-tabs-orders'>*/
/*                     {{ metric_beacon_total(store.tracker, 'order_nb', yesterdayIntervalContainer.elements) }} {{ "admin.dashboard.chart.orders"|trans }}*/
/*                 </span>*/
/*                 {% if type == 2 %}*/
/*                     {% set intervalContainer = yesterdayIntervalContainer %}*/
/*                 {% endif %}*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li{% if type == 3 %} class="active"{% endif %}>*/
/*             <a title="tab 3" href="{{ url("admin_reports_last_week") }}">*/
/*                 <span class='dashboard-tabs-range'>{{ 'admin.dashboard.chart_range.last7days'|trans }}</span>*/
/*                 {% set lastWeekIntervalContainer = metric_create_interval_container(1) %}*/
/*                 <span class='dashboard-tabs-amount'>*/
/*                     {{ metric_accumulation(store.tracker, 'order_total', lastWeekIntervalContainer.elements)|print_money_from_value }}*/
/*                 </span>*/
/*                 <span class='dashboard-tabs-orders'>*/
/*                     {{ metric_beacon_total(store.tracker, 'order_nb', lastWeekIntervalContainer.elements) }} {{ "admin.dashboard.chart.orders"|trans }}*/
/*                 </span>*/
/*                 {% if type == 3 %}*/
/*                     {% set intervalContainer = lastWeekIntervalContainer %}*/
/*                 {% endif %}*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li{% if type == 4 %} class="active"{% endif %}>*/
/*             <a title="tab 4" href="{{ url("admin_reports_last_month") }}">*/
/*                 <span class='dashboard-tabs-range'>{{ 'admin.dashboard.chart_range.last30days'|trans }}</span>*/
/*                 {% set lastMonthIntervalContainer = metric_create_interval_container(4) %}*/
/*                 <span class='dashboard-tabs-amount'>*/
/*                     {{ metric_accumulation(store.tracker, 'order_total', lastMonthIntervalContainer.elements)|print_money_from_value }}*/
/*                 </span>*/
/*                 <span class='dashboard-tabs-orders'>*/
/*                     {{ metric_beacon_total(store.tracker, 'order_nb', lastMonthIntervalContainer.elements) }} {{ "admin.dashboard.chart.orders"|trans }}*/
/*                 </span>*/
/*                 {% if type == 4 %}*/
/*                     {% set intervalContainer = lastMonthIntervalContainer %}*/
/*                 {% endif %}*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li{% if type == 5 %} class="active"{% endif %}>*/
/*             <a title="tab 5" href="{{ url("admin_reports_last_quarter") }}">*/
/*                 <span class='dashboard-tabs-range'>{{ 'admin.dashboard.chart_range.last90days'|trans }}</span>*/
/*                 {% set lastQuarterIntervalContainer = metric_create_interval_container(5) %}*/
/*                 <span class='dashboard-tabs-amount'>*/
/*                     {{ metric_accumulation(store.tracker, 'order_total', lastQuarterIntervalContainer.elements)|print_money_from_value }}*/
/*                 </span>*/
/*                 <span class='dashboard-tabs-orders'>*/
/*                     {{ metric_beacon_total(store.tracker, 'order_nb', lastQuarterIntervalContainer.elements) }} {{ "admin.dashboard.chart.orders"|trans }}*/
/*                 </span>*/
/*                 {% if type == 5 %}*/
/*                     {% set intervalContainer = lastQuarterIntervalContainer %}*/
/*                 {% endif %}*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
/* */
/* <div class="box-background dashboard-panels">*/
/*     <div class="grid">*/
/*         <div class="col-1-2">*/
/*             <div class="pr-l">*/
/*             <h2>{{ 'admin.dashboard.chart.visitors.title'|trans }}</h2>*/
/*             {% include 'AdminMetricBundle:Metric:metricLine.html.twig' with {*/
/*                 'tracker': store.tracker,*/
/*                 'event': 'pv',*/
/*                 'intervalContainer': intervalContainer,*/
/*             } %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-1-2">*/
/*             <div class="pr-l">*/
/*             <h2>{{ 'admin.dashboard.chart.sales.title'|trans }}</h2>*/
/*             {% include 'AdminMetricBundle:Metric:metricOrderTotals.html.twig' with {*/
/*                 'tracker': store.tracker,*/
/*                 'event': 'order_total',*/
/*                 'intervalContainer': intervalContainer,*/
/*             } %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-3">*/
/*             <div class="box-none pa-n ta-c">*/
/*                 <h2>{{ 'admin.dashboard.chart.cart_conversion.title'|trans }}</h2>*/
/*                 {% include 'AdminMetricBundle:Metric:metricCheese.html.twig' with {*/
/*                     'tracker': store.tracker,*/
/*                     'events': {*/
/*                         ('admin.dashboard.chart.cart_conversion.cart_view'|trans): 'pv_store_cart_view',*/
/*                         ('admin.dashboard.chart.cart_conversion.billing_shipping'|trans): 'pv_store_checkout_address',*/
/*                         ('admin.dashboard.chart.cart_conversion.payment'|trans): 'pv_store_checkout_payment',*/
/*                         ('admin.dashboard.chart.cart_conversion.ordered'|trans): 'order_nb',*/
/*                     },*/
/*                     'intervalContainer': intervalContainer,*/
/*                 } %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-1-3">*/
/*             <div class="box-none pa-n ta-c">*/
/*                 <h2>{{ 'admin.dashboard.chart.devices.title'|trans }}</h2>*/
/*                 {% include 'AdminMetricBundle:Metric:metricCheese.html.twig' with {*/
/*                     'tracker': store.tracker,*/
/*                     'events': {*/
/*                         ('admin.dashboard.chart.devices.mobile'|trans): 'mob',*/
/*                         ('admin.dashboard.chart.devices.desktop'|trans): 'no_mob',*/
/*                     },*/
/*                     'intervalContainer': intervalContainer,*/
/*                 } %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-1-3">*/
/*             <div class="box-none pa-n ta-c">*/
/*                 <h2>{{ 'admin.dashboard.chart.traffic_source.title'|trans }}</h2>*/
/*                 {% include 'AdminMetricBundle:Metric:metricCheese.html.twig' with {*/
/*                     'tracker': store.tracker,*/
/*                     'events': {*/
/*                         ('admin.dashboard.chart.traffic_source.direct'|trans): 'source_dir',*/
/*                         ('admin.dashboard.chart.traffic_source.referrals'|trans): 'source_ref',*/
/*                         ('admin.dashboard.chart.traffic_source.search_engine'|trans): 'source_se',*/
/*                     },*/
/*                     'intervalContainer': intervalContainer,*/
/*                 } %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
