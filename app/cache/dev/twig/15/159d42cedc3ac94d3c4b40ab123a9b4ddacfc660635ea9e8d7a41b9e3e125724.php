<?php

/* ElcodiStoreSetupWizardBundle:Wizard:wizard.html.twig */
class __TwigTemplate_3605c4f2bf3585dba3d55f428a5932e6031d21b2e183964259dd4456ee392f63 extends Twig_Template
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
        $__internal_a0fd864dea9c4b6fd869d87b823b723c1d16f254b4bb1026e941eec1e280fe42 = $this->env->getExtension("native_profiler");
        $__internal_a0fd864dea9c4b6fd869d87b823b723c1d16f254b4bb1026e941eec1e280fe42->enter($__internal_a0fd864dea9c4b6fd869d87b823b723c1d16f254b4bb1026e941eec1e280fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiStoreSetupWizardBundle:Wizard:wizard.html.twig"));

        // line 1
        echo "<div id=\"step1\" class=\"grid welcome ";
        if ((isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            echo "welcome-mini";
        }
        echo "\">
    ";
        // line 2
        $context["minutesStepOne"] = 4;
        // line 3
        echo "    ";
        $context["minutesStepTwo"] = 2;
        // line 4
        echo "    ";
        $context["minutesStepThree"] = 2;
        // line 5
        echo "    ";
        $context["minutesStepFour"] = 2;
        // line 6
        echo "
    ";
        // line 7
        $context["steps"] = 0;
        // line 8
        echo "    ";
        if ( !$this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 1, array(), "array")) {
            $context["steps"] = ((isset($context["steps"]) ? $context["steps"] : null) + 1);
        }
        // line 9
        echo "    ";
        if ( !$this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 2, array(), "array")) {
            $context["steps"] = ((isset($context["steps"]) ? $context["steps"] : null) + 1);
        }
        // line 10
        echo "    ";
        if ( !$this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 3, array(), "array")) {
            $context["steps"] = ((isset($context["steps"]) ? $context["steps"] : null) + 1);
        }
        // line 11
        echo "    ";
        if ( !$this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 4, array(), "array")) {
            $context["steps"] = ((isset($context["steps"]) ? $context["steps"] : null) + 1);
        }
        // line 12
        echo "    <h2><span class=\"icon-clock-o icon-3x mr-s\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.time_to_sell", array("%1" => (isset($context["steps"]) ? $context["steps"] : null)), "messages");
        echo "</h2>
    <div class=\"col-1-4\">
        <div class=\"welcome-item";
        // line 14
        if (((isset($context["activeStep"]) ? $context["activeStep"] : null) == 1)) {
            echo " welcome-active animated bounce";
        }
        if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 1, array(), "array")) {
            echo " welcome-done";
        }
        echo "\">
            ";
        // line 15
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 16
            echo "                <i class=\"icon-dropbox\"></i>
                <span class=\"welcome-done-sign\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.done"), "html", null, true);
            echo "</span>
            <h5>
                ";
            // line 19
            if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 1, array(), "array")) {
                // line 20
                echo "                    <span class=\"icon-check\"></span>
                ";
            } else {
                // line 22
                echo "                    <span>1.</span>
                ";
            }
            // line 24
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step1.title"), "html", null, true);
            echo "
            </h5>

                <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step1.description"), "html", null, true);
            echo "</p>
            ";
        }
        // line 29
        echo "            <p class=\"mb-n\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_product_new");
        echo "\" class=\"button button-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step1.action"), "html", null, true);
        echo "</a></p>
            ";
        // line 30
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 31
            echo "            <p class=\"fz-s\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.estimated_time", array("%1" => (isset($context["minutesStepOne"]) ? $context["minutesStepOne"] : null)), "messages");
            echo "</p>
            ";
        }
        // line 33
        echo "        </div>
    </div>
    <div class=\"col-1-4\">
        <div class=\"welcome-item";
        // line 36
        if (((isset($context["activeStep"]) ? $context["activeStep"] : null) == 2)) {
            echo " welcome-active animated bounce";
        }
        if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 2, array(), "array")) {
            echo " welcome-done";
        }
        echo "\">
            ";
        // line 37
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 38
            echo "                <i class=\"icon-map-marker\"></i>
            <h5>
                ";
            // line 40
            if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 2, array(), "array")) {
                // line 41
                echo "                    <span class=\"icon-check\"></span>
                ";
            } else {
                // line 43
                echo "                    <span>2.</span>
                ";
            }
            // line 45
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step2.title"), "html", null, true);
            echo "
            </h5>
                <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step2.description"), "html", null, true);
            echo "</p>
            ";
        }
        // line 49
        echo "            <p class=\"mb-n\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_store_address");
        echo "\" class=\"button button-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step2.action"), "html", null, true);
        echo "</a></p>
            ";
        // line 50
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 51
            echo "            <p class=\"fz-s\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.estimated_time", array("%1" => (isset($context["minutesStepTwo"]) ? $context["minutesStepTwo"] : null)), "messages");
            echo "</p>
            ";
        }
        // line 53
        echo "        </div>
    </div>
    <div class=\"col-1-4\">
        <div class=\"welcome-item";
        // line 56
        if (((isset($context["activeStep"]) ? $context["activeStep"] : null) == 3)) {
            echo " welcome-active animated bounce";
        }
        if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 3, array(), "array")) {
            echo " welcome-done";
        }
        echo "\">
            ";
        // line 57
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 58
            echo "                <i class=\"icon-credit-card\"></i>
                <span class=\"welcome-done-sign\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.done"), "html", null, true);
            echo "</span>
            <h5>
                ";
            // line 61
            if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 3, array(), "array")) {
                // line 62
                echo "                    <span class=\"icon-check\"></span>
                ";
            } else {
                // line 64
                echo "                    <span>3.</span>
                ";
            }
            // line 66
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step3.title"), "html", null, true);
            echo "
            </h5>
                <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step3.description"), "html", null, true);
            echo "</p>
            ";
        }
        // line 70
        echo "            <p class=\"mb-n\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_plugin_categorized_list", array("category" => "payment"));
        echo "\" class=\"button button-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step3.action"), "html", null, true);
        echo "</a></p>
            ";
        // line 71
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 72
            echo "            <p class=\"fz-s\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.estimated_time", array("%1" => (isset($context["minutesStepThree"]) ? $context["minutesStepThree"] : null)), "messages");
            echo "</p>
            ";
        }
        // line 74
        echo "        </div>
    </div>
    <div class=\"col-1-4\">
        <div class=\"welcome-item";
        // line 77
        if (((isset($context["activeStep"]) ? $context["activeStep"] : null) == 4)) {
            echo " welcome-active animated bounce";
        }
        if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 4, array(), "array")) {
            echo " welcome-done";
        }
        echo "\">
            ";
        // line 78
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 79
            echo "                <i class=\"icon-truck\"></i>
                <span class=\"welcome-done-sign\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.done"), "html", null, true);
            echo "</span>
            <h5>
                ";
            // line 82
            if ($this->getAttribute((isset($context["stepsFinished"]) ? $context["stepsFinished"] : null), 4, array(), "array")) {
                // line 83
                echo "                    <span class=\"icon-check\"></span>
                ";
            } else {
                // line 85
                echo "                    <span>4.</span>
                ";
            }
            // line 87
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step4.title"), "html", null, true);
            echo "
            </h5>
                <p>";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step4.description"), "html", null, true);
            echo "</p>
            ";
        }
        // line 91
        echo "            <p class=\"mb-n\">
                ";
        // line 92
        if ((isset($context["carrier"]) ? $context["carrier"] : null)) {
            // line 93
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_plugin_categorized_list", array("category" => "shipping"));
            echo "\" class=\"button button-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step4.action_range"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 95
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_plugin_categorized_list", array("category" => "shipping"));
            echo "\" class=\"button button-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.step4.action_carrier"), "html", null, true);
            echo "</a>
                ";
        }
        // line 97
        echo "            </p>
            ";
        // line 98
        if ( !(isset($context["isMiniWizard"]) ? $context["isMiniWizard"] : null)) {
            // line 99
            echo "            <p class=\"fz-s\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.estimated_time", array("%1" => (isset($context["minutesStepFour"]) ? $context["minutesStepFour"] : null)), "messages");
            echo "</p>
            ";
        }
        // line 101
        echo "        </div>
    </div>
</div>
";
        
        $__internal_a0fd864dea9c4b6fd869d87b823b723c1d16f254b4bb1026e941eec1e280fe42->leave($__internal_a0fd864dea9c4b6fd869d87b823b723c1d16f254b4bb1026e941eec1e280fe42_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiStoreSetupWizardBundle:Wizard:wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 101,  314 => 99,  312 => 98,  309 => 97,  301 => 95,  293 => 93,  291 => 92,  288 => 91,  283 => 89,  277 => 87,  273 => 85,  269 => 83,  267 => 82,  262 => 80,  259 => 79,  257 => 78,  248 => 77,  243 => 74,  237 => 72,  235 => 71,  228 => 70,  223 => 68,  217 => 66,  213 => 64,  209 => 62,  207 => 61,  202 => 59,  199 => 58,  197 => 57,  188 => 56,  183 => 53,  177 => 51,  175 => 50,  168 => 49,  163 => 47,  157 => 45,  153 => 43,  149 => 41,  147 => 40,  143 => 38,  141 => 37,  132 => 36,  127 => 33,  121 => 31,  119 => 30,  112 => 29,  107 => 27,  100 => 24,  96 => 22,  92 => 20,  90 => 19,  85 => 17,  82 => 16,  80 => 15,  71 => 14,  65 => 12,  60 => 11,  55 => 10,  50 => 9,  45 => 8,  43 => 7,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  29 => 2,  22 => 1,);
    }
}
/* <div id="step1" class="grid welcome {% if isMiniWizard %}welcome-mini{% endif %}">*/
/*     {% set minutesStepOne = 4 %}*/
/*     {% set minutesStepTwo = 2 %}*/
/*     {% set minutesStepThree = 2 %}*/
/*     {% set minutesStepFour = 2 %}*/
/* */
/*     {% set steps = 0 %}*/
/*     {% if not stepsFinished[1] %}{% set steps = steps + 1 %}{% endif %}*/
/*     {% if not stepsFinished[2] %}{% set steps = steps + 1 %}{% endif %}*/
/*     {% if not stepsFinished[3] %}{% set steps = steps + 1 %}{% endif %}*/
/*     {% if not stepsFinished[4] %}{% set steps = steps + 1 %}{% endif %}*/
/*     <h2><span class="icon-clock-o icon-3x mr-s"></span> {% trans with {'%1': steps } %}elcodi_plugin.store_wizard.time_to_sell{% endtrans %}</h2>*/
/*     <div class="col-1-4">*/
/*         <div class="welcome-item{% if activeStep == 1 %} welcome-active animated bounce{% endif %}{% if stepsFinished[1] %} welcome-done{% endif %}">*/
/*             {% if not isMiniWizard %}*/
/*                 <i class="icon-dropbox"></i>*/
/*                 <span class="welcome-done-sign">{{ 'elcodi_plugin.store_wizard.done'|trans }}</span>*/
/*             <h5>*/
/*                 {% if stepsFinished[1] %}*/
/*                     <span class="icon-check"></span>*/
/*                 {% else %}*/
/*                     <span>1.</span>*/
/*                 {% endif %}*/
/*                 {{ 'elcodi_plugin.store_wizard.step1.title'|trans }}*/
/*             </h5>*/
/* */
/*                 <p>{{ 'elcodi_plugin.store_wizard.step1.description'|trans }}</p>*/
/*             {% endif %}*/
/*             <p class="mb-n"><a href="{{ url('admin_product_new') }}" class="button button-primary">{{ 'elcodi_plugin.store_wizard.step1.action'|trans }}</a></p>*/
/*             {% if not isMiniWizard %}*/
/*             <p class="fz-s">{% trans with {'%1': minutesStepOne } %}elcodi_plugin.store_wizard.estimated_time{% endtrans %}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-1-4">*/
/*         <div class="welcome-item{% if activeStep == 2 %} welcome-active animated bounce{% endif %}{% if stepsFinished[2] %} welcome-done{% endif %}">*/
/*             {% if not isMiniWizard %}*/
/*                 <i class="icon-map-marker"></i>*/
/*             <h5>*/
/*                 {% if stepsFinished[2] %}*/
/*                     <span class="icon-check"></span>*/
/*                 {% else %}*/
/*                     <span>2.</span>*/
/*                 {% endif %}*/
/*                 {{ 'elcodi_plugin.store_wizard.step2.title'|trans }}*/
/*             </h5>*/
/*                 <p>{{ 'elcodi_plugin.store_wizard.step2.description'|trans }}</p>*/
/*             {% endif %}*/
/*             <p class="mb-n"><a href="{{ url('admin_store_address') }}" class="button button-primary">{{ 'elcodi_plugin.store_wizard.step2.action'|trans }}</a></p>*/
/*             {% if not isMiniWizard %}*/
/*             <p class="fz-s">{% trans with {'%1': minutesStepTwo } %}elcodi_plugin.store_wizard.estimated_time{% endtrans %}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-1-4">*/
/*         <div class="welcome-item{% if activeStep == 3 %} welcome-active animated bounce{% endif %}{% if stepsFinished[3] %} welcome-done{% endif %}">*/
/*             {% if not isMiniWizard %}*/
/*                 <i class="icon-credit-card"></i>*/
/*                 <span class="welcome-done-sign">{{ 'elcodi_plugin.store_wizard.done'|trans }}</span>*/
/*             <h5>*/
/*                 {% if stepsFinished[3] %}*/
/*                     <span class="icon-check"></span>*/
/*                 {% else %}*/
/*                     <span>3.</span>*/
/*                 {% endif %}*/
/*                 {{ 'elcodi_plugin.store_wizard.step3.title'|trans }}*/
/*             </h5>*/
/*                 <p>{{ 'elcodi_plugin.store_wizard.step3.description'|trans }}</p>*/
/*             {% endif %}*/
/*             <p class="mb-n"><a href="{{ url('admin_plugin_categorized_list', { 'category': 'payment'}) }}" class="button button-primary">{{ 'elcodi_plugin.store_wizard.step3.action'|trans }}</a></p>*/
/*             {% if not isMiniWizard %}*/
/*             <p class="fz-s">{% trans with {'%1': minutesStepThree } %}elcodi_plugin.store_wizard.estimated_time{% endtrans %}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-1-4">*/
/*         <div class="welcome-item{% if activeStep == 4 %} welcome-active animated bounce{% endif %}{% if stepsFinished[4] %} welcome-done{% endif %}">*/
/*             {% if not isMiniWizard %}*/
/*                 <i class="icon-truck"></i>*/
/*                 <span class="welcome-done-sign">{{ 'elcodi_plugin.store_wizard.done'|trans }}</span>*/
/*             <h5>*/
/*                 {% if stepsFinished[4] %}*/
/*                     <span class="icon-check"></span>*/
/*                 {% else %}*/
/*                     <span>4.</span>*/
/*                 {% endif %}*/
/*                 {{ 'elcodi_plugin.store_wizard.step4.title'|trans }}*/
/*             </h5>*/
/*                 <p>{{ 'elcodi_plugin.store_wizard.step4.description'|trans }}</p>*/
/*             {% endif %}*/
/*             <p class="mb-n">*/
/*                 {% if carrier %}*/
/*                 <a href="{{ url('admin_plugin_categorized_list', { 'category': 'shipping'}) }}" class="button button-primary">{{ 'elcodi_plugin.store_wizard.step4.action_range'|trans }}</a>*/
/*                 {% else %}*/
/*                 <a href="{{ url('admin_plugin_categorized_list', { 'category': 'shipping'}) }}" class="button button-primary">{{ 'elcodi_plugin.store_wizard.step4.action_carrier'|trans }}</a>*/
/*                 {% endif %}*/
/*             </p>*/
/*             {% if not isMiniWizard %}*/
/*             <p class="fz-s">{% trans with {'%1': minutesStepFour } %}elcodi_plugin.store_wizard.estimated_time{% endtrans %}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
