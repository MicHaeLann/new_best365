<?php

/* ElcodiStoreSetupWizardBundle:Wizard:enable-store.html.twig */
class __TwigTemplate_3d57e9f4a80f6ff7e165fcabd02815f7ddf1a1b09203d0aafcb989b3f568d580 extends Twig_Template
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
        $__internal_2abd3da1083f699c049ed3bf843777cda2c4bdd804a508595b875fa68cdde5d7 = $this->env->getExtension("native_profiler");
        $__internal_2abd3da1083f699c049ed3bf843777cda2c4bdd804a508595b875fa68cdde5d7->enter($__internal_2abd3da1083f699c049ed3bf843777cda2c4bdd804a508595b875fa68cdde5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiStoreSetupWizardBundle:Wizard:enable-store.html.twig"));

        // line 1
        echo "<div class=\"msg-ok\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_configuration_list");
        echo "\" class=\"button button-ok fl-r\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.go_general_settings"), "html", null, true);
        echo "</a>
    <h2 class=\"c-ok mb-n\"><strong>";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.ready_launch", array(), "messages");
        echo "</strong></h2>
    <h3>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.go_enable_store", array(), "messages");
        echo "</h3>
</div>
";
        
        $__internal_2abd3da1083f699c049ed3bf843777cda2c4bdd804a508595b875fa68cdde5d7->leave($__internal_2abd3da1083f699c049ed3bf843777cda2c4bdd804a508595b875fa68cdde5d7_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiStoreSetupWizardBundle:Wizard:enable-store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="msg-ok">*/
/*     <a href="{{ url('admin_configuration_list') }}" class="button button-ok fl-r">{{ 'elcodi_plugin.store_wizard.go_general_settings'|trans }}</a>*/
/*     <h2 class="c-ok mb-n"><strong>{% trans %}elcodi_plugin.store_wizard.ready_launch{% endtrans %}</strong></h2>*/
/*     <h3>{% trans %}elcodi_plugin.store_wizard.go_enable_store{% endtrans %}</h3>*/
/* </div>*/
/* */
