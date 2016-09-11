<?php

/* AdminUserBundle:Password:sent.html.twig */
class __TwigTemplate_425d0aacbb1227aad289fbc267756547c22a755200cccceca3fdfc3a33da61aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layouts/center_box.html.twig", "AdminUserBundle:Password:sent.html.twig", 1);
        $this->blocks = array(
            'center_height' => array($this, 'block_center_height'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layouts/center_box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eb6a9557732547e9c7cff9db1c6f51687740efe6ec3167b9d2df62a82c33208 = $this->env->getExtension("native_profiler");
        $__internal_4eb6a9557732547e9c7cff9db1c6f51687740efe6ec3167b9d2df62a82c33208->enter($__internal_4eb6a9557732547e9c7cff9db1c6f51687740efe6ec3167b9d2df62a82c33208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Password:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb6a9557732547e9c7cff9db1c6f51687740efe6ec3167b9d2df62a82c33208->leave($__internal_4eb6a9557732547e9c7cff9db1c6f51687740efe6ec3167b9d2df62a82c33208_prof);

    }

    // line 4
    public function block_center_height($context, array $blocks = array())
    {
        $__internal_5f1121d7781347baca54eff822561a8ee55b8f5b81514d614b828900fec2ef6f = $this->env->getExtension("native_profiler");
        $__internal_5f1121d7781347baca54eff822561a8ee55b8f5b81514d614b828900fec2ef6f->enter($__internal_5f1121d7781347baca54eff822561a8ee55b8f5b81514d614b828900fec2ef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "150";
        
        $__internal_5f1121d7781347baca54eff822561a8ee55b8f5b81514d614b828900fec2ef6f->leave($__internal_5f1121d7781347baca54eff822561a8ee55b8f5b81514d614b828900fec2ef6f_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_0ff84a772b27c4d879b4ef65fdd34bd2dac45affb9d79a5769b6e6e2e64281b9 = $this->env->getExtension("native_profiler");
        $__internal_0ff84a772b27c4d879b4ef65fdd34bd2dac45affb9d79a5769b6e6e2e64281b9->enter($__internal_0ff84a772b27c4d879b4ef65fdd34bd2dac45affb9d79a5769b6e6e2e64281b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "
    <div class=\"msg-ok\">
        <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.recover_user.action.email_sent.title"), "html", null, true);
        echo "</h3>
    </div>
    <p>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.recover_user.action.email_sent.description"), "html", null, true);
        echo "
    </p>

";
        
        $__internal_0ff84a772b27c4d879b4ef65fdd34bd2dac45affb9d79a5769b6e6e2e64281b9->leave($__internal_0ff84a772b27c4d879b4ef65fdd34bd2dac45affb9d79a5769b6e6e2e64281b9_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Password:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layouts/center_box.html.twig' %}*/
/* */
/* */
/* {% block center_height "150" %}*/
/* */
/* {% block container %}*/
/* */
/*     <div class="msg-ok">*/
/*         <h3>{{ 'admin.recover_user.action.email_sent.title'|trans }}</h3>*/
/*     </div>*/
/*     <p>*/
/*         {{ 'admin.recover_user.action.email_sent.description'|trans }}*/
/*     </p>*/
/* */
/* {% endblock container %}*/
/* */
