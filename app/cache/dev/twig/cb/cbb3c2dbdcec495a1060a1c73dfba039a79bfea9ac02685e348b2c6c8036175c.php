<?php

/* ElcodiStoreSetupWizardBundle:Wizard:disable-under-construction.html.twig */
class __TwigTemplate_b57df20f07ff2fa5484183eab08299579f0bad9a081e50d99c8f3ea75c7d11ae extends Twig_Template
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
        $__internal_1ce6745e0a609d7e0a6ed81b685d38f72de7ad9ee9ec7818b3c642bc3c6f7140 = $this->env->getExtension("native_profiler");
        $__internal_1ce6745e0a609d7e0a6ed81b685d38f72de7ad9ee9ec7818b3c642bc3c6f7140->enter($__internal_1ce6745e0a609d7e0a6ed81b685d38f72de7ad9ee9ec7818b3c642bc3c6f7140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiStoreSetupWizardBundle:Wizard:disable-under-construction.html.twig"));

        // line 1
        echo "<div class=\"msg-info\">
    <h3>";
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("elcodi_plugin.store_wizard.disable_under_construction", array(), "messages");
        echo "</h3>
</div>
";
        
        $__internal_1ce6745e0a609d7e0a6ed81b685d38f72de7ad9ee9ec7818b3c642bc3c6f7140->leave($__internal_1ce6745e0a609d7e0a6ed81b685d38f72de7ad9ee9ec7818b3c642bc3c6f7140_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiStoreSetupWizardBundle:Wizard:disable-under-construction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="msg-info">*/
/*     <h3>{% trans %}elcodi_plugin.store_wizard.disable_under_construction{% endtrans %}</h3>*/
/* </div>*/
/* */
