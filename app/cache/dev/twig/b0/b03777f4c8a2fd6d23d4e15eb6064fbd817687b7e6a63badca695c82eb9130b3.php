<?php

/* ElcodiStoreSetupWizardBundle:Wizard:view.html.twig */
class __TwigTemplate_676d4efd1feed60669ea3bad13cb99403343619f35f539c087661d2d02f5ed60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "ElcodiStoreSetupWizardBundle:Wizard:view.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body_top_hook' => array($this, 'block_body_top_hook'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e010592694b1996a0b07addf24e7d051898e04bcc3d7a8813badeef79fba15ee = $this->env->getExtension("native_profiler");
        $__internal_e010592694b1996a0b07addf24e7d051898e04bcc3d7a8813badeef79fba15ee->enter($__internal_e010592694b1996a0b07addf24e7d051898e04bcc3d7a8813badeef79fba15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiStoreSetupWizardBundle:Wizard:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e010592694b1996a0b07addf24e7d051898e04bcc3d7a8813badeef79fba15ee->leave($__internal_e010592694b1996a0b07addf24e7d051898e04bcc3d7a8813badeef79fba15ee_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1ef5e836909f4afe17e6da31118c57705b0fab8c869c5f88db8638ecf64e1681 = $this->env->getExtension("native_profiler");
        $__internal_1ef5e836909f4afe17e6da31118c57705b0fab8c869c5f88db8638ecf64e1681->enter($__internal_1ef5e836909f4afe17e6da31118c57705b0fab8c869c5f88db8638ecf64e1681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo "<h1 class=\"ta-c\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("elcodi_plugin.store_wizard.welcome_title"), "html", null, true);
        echo "</h1>";
        
        $__internal_1ef5e836909f4afe17e6da31118c57705b0fab8c869c5f88db8638ecf64e1681->leave($__internal_1ef5e836909f4afe17e6da31118c57705b0fab8c869c5f88db8638ecf64e1681_prof);

    }

    // line 5
    public function block_body_top_hook($context, array $blocks = array())
    {
        $__internal_299d5c91c9e50de472577e7eaf7da6766caae3297bffa324cc905ed54350d178 = $this->env->getExtension("native_profiler");
        $__internal_299d5c91c9e50de472577e7eaf7da6766caae3297bffa324cc905ed54350d178->enter($__internal_299d5c91c9e50de472577e7eaf7da6766caae3297bffa324cc905ed54350d178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_top_hook"));

        echo "";
        
        $__internal_299d5c91c9e50de472577e7eaf7da6766caae3297bffa324cc905ed54350d178->leave($__internal_299d5c91c9e50de472577e7eaf7da6766caae3297bffa324cc905ed54350d178_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_cea14d7a3144c07fd0b57b217a35bc568c17c6fb8a2cb5992860a78f25d8a59f = $this->env->getExtension("native_profiler");
        $__internal_cea14d7a3144c07fd0b57b217a35bc568c17c6fb8a2cb5992860a78f25d8a59f->enter($__internal_cea14d7a3144c07fd0b57b217a35bc568c17c6fb8a2cb5992860a78f25d8a59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("ElcodiStoreSetupWizardBundle:Wizard:wizard.html.twig", "ElcodiStoreSetupWizardBundle:Wizard:view.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_cea14d7a3144c07fd0b57b217a35bc568c17c6fb8a2cb5992860a78f25d8a59f->leave($__internal_cea14d7a3144c07fd0b57b217a35bc568c17c6fb8a2cb5992860a78f25d8a59f_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiStoreSetupWizardBundle:Wizard:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  71 => 9,  68 => 8,  62 => 7,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}<h1 class="ta-c">{{ 'elcodi_plugin.store_wizard.welcome_title'|trans }}</h1>{% endblock %}*/
/* */
/* {% block body_top_hook '' %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'ElcodiStoreSetupWizardBundle:Wizard:wizard.html.twig' %}*/
/* */
/* {% endblock content %}*/
/* */
