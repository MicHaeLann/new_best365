<?php

/* ElcodiStoreSetupWizardBundle:Wizard:next-step.html.twig */
class __TwigTemplate_60c4836241251b636d769b689037f4584f09acb4f6060d10aeab1ca18e3b0ad8 extends Twig_Template
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
        $__internal_321deefcb2877222509a9466c9d15441e3c5f3421edb3350c5617cf931509d1a = $this->env->getExtension("native_profiler");
        $__internal_321deefcb2877222509a9466c9d15441e3c5f3421edb3350c5617cf931509d1a->enter($__internal_321deefcb2877222509a9466c9d15441e3c5f3421edb3350c5617cf931509d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiStoreSetupWizardBundle:Wizard:next-step.html.twig"));

        // line 1
        echo "<div class=\"msg-ok\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_configuration_list");
        echo "\" class=\"button button-ok fl-r\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.go_next_step"), "html", null, true);
        echo "</a>
    <h2 class=\"c-ok\">";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.step_finished", array(), "messages");
        echo "</h2>
</div>
";
        
        $__internal_321deefcb2877222509a9466c9d15441e3c5f3421edb3350c5617cf931509d1a->leave($__internal_321deefcb2877222509a9466c9d15441e3c5f3421edb3350c5617cf931509d1a_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiStoreSetupWizardBundle:Wizard:next-step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="msg-ok">*/
/*     <a href="{{ url('admin_configuration_list') }}" class="button button-ok fl-r">{{ 'elcodi_plugin.store_wizard.go_next_step'|trans }}</a>*/
/*     <h2 class="c-ok">{% trans %}elcodi_plugin.store_wizard.step_finished{% endtrans %}</h2>*/
/* </div>*/
/* */
