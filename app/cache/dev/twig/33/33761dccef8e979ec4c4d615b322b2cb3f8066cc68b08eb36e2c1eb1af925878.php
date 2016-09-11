<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_323cc1ffbe47c0f54b81ff88f6b3a603b03becc9495fc19dee29a6d5c3b305c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
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
        $__internal_4e940ef6e25996b025d84563093e699e1f447b93c87c98affc84375f5d0f765b = $this->env->getExtension("native_profiler");
        $__internal_4e940ef6e25996b025d84563093e699e1f447b93c87c98affc84375f5d0f765b->enter($__internal_4e940ef6e25996b025d84563093e699e1f447b93c87c98affc84375f5d0f765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e940ef6e25996b025d84563093e699e1f447b93c87c98affc84375f5d0f765b->leave($__internal_4e940ef6e25996b025d84563093e699e1f447b93c87c98affc84375f5d0f765b_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_7b54e4dfa9102bf4bd35315955089c0479796ec135bf584e1632274d056f71e5 = $this->env->getExtension("native_profiler");
        $__internal_7b54e4dfa9102bf4bd35315955089c0479796ec135bf584e1632274d056f71e5->enter($__internal_7b54e4dfa9102bf4bd35315955089c0479796ec135bf584e1632274d056f71e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_7b54e4dfa9102bf4bd35315955089c0479796ec135bf584e1632274d056f71e5->leave($__internal_7b54e4dfa9102bf4bd35315955089c0479796ec135bf584e1632274d056f71e5_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
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
/*     <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
