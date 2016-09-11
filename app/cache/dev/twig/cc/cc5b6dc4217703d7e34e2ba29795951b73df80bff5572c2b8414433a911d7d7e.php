<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_cbccfdd664f76703e054f04d57e096d743bd8be63a7206f4a1072eedecaad389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85f918c33ebb861e973198b0566a653549b782d61ac25c33ea39fa99153a8a0e = $this->env->getExtension("native_profiler");
        $__internal_85f918c33ebb861e973198b0566a653549b782d61ac25c33ea39fa99153a8a0e->enter($__internal_85f918c33ebb861e973198b0566a653549b782d61ac25c33ea39fa99153a8a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f918c33ebb861e973198b0566a653549b782d61ac25c33ea39fa99153a8a0e->leave($__internal_85f918c33ebb861e973198b0566a653549b782d61ac25c33ea39fa99153a8a0e_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_6140660a57a5b84080513bea6b9af25f4657806097b4fb0b4b7c353af9b594ee = $this->env->getExtension("native_profiler");
        $__internal_6140660a57a5b84080513bea6b9af25f4657806097b4fb0b4b7c353af9b594ee->enter($__internal_6140660a57a5b84080513bea6b9af25f4657806097b4fb0b4b7c353af9b594ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_6140660a57a5b84080513bea6b9af25f4657806097b4fb0b4b7c353af9b594ee->leave($__internal_6140660a57a5b84080513bea6b9af25f4657806097b4fb0b4b7c353af9b594ee_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
