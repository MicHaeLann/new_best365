<?php

/* AdminCoreBundle:Common:viewComponent.html.twig */
class __TwigTemplate_a9f782085e9feee333bb06a6bb893b6e482679fc91df71841bbecefd79afb262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/component.html.twig", "AdminCoreBundle:Common:viewComponent.html.twig", 1);
        $this->blocks = array(
            'component' => array($this, 'block_component'),
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'view_buttons' => array($this, 'block_view_buttons'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08f5603425646230c1f76e77ed4f2ad6b86c7f92570be940f82b6c440681e04d = $this->env->getExtension("native_profiler");
        $__internal_08f5603425646230c1f76e77ed4f2ad6b86c7f92570be940f82b6c440681e04d->enter($__internal_08f5603425646230c1f76e77ed4f2ad6b86c7f92570be940f82b6c440681e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Common:viewComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f5603425646230c1f76e77ed4f2ad6b86c7f92570be940f82b6c440681e04d->leave($__internal_08f5603425646230c1f76e77ed4f2ad6b86c7f92570be940f82b6c440681e04d_prof);

    }

    // line 3
    public function block_component($context, array $blocks = array())
    {
        $__internal_1bb2a6273f80327515f6328362844c8394ce3af6afece8afd6a346ad2fd1dbde = $this->env->getExtension("native_profiler");
        $__internal_1bb2a6273f80327515f6328362844c8394ce3af6afece8afd6a346ad2fd1dbde->enter($__internal_1bb2a6273f80327515f6328362844c8394ce3af6afece8afd6a346ad2fd1dbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "component"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "
    <div class=\"block-flat\">

        <div class=\"header\">
            <h3>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
        </div>
        <div class=\"content\">
            ";
        // line 14
        $this->displayBlock('view_buttons', $context, $blocks);
        // line 16
        echo "            <table class=\"no-border\">
                <tbody class=\"no-border-x no-border-y\">
                ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 25
        $this->displayBlock('script', $context, $blocks);
        // line 27
        echo "
";
        
        $__internal_1bb2a6273f80327515f6328362844c8394ce3af6afece8afd6a346ad2fd1dbde->leave($__internal_1bb2a6273f80327515f6328362844c8394ce3af6afece8afd6a346ad2fd1dbde_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_45a9b3e4147a9f21e6775fa0f6f92379b833e71c10e8dc537081541fd4e89ca7 = $this->env->getExtension("native_profiler");
        $__internal_45a9b3e4147a9f21e6775fa0f6f92379b833e71c10e8dc537081541fd4e89ca7->enter($__internal_45a9b3e4147a9f21e6775fa0f6f92379b833e71c10e8dc537081541fd4e89ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    ";
        
        $__internal_45a9b3e4147a9f21e6775fa0f6f92379b833e71c10e8dc537081541fd4e89ca7->leave($__internal_45a9b3e4147a9f21e6775fa0f6f92379b833e71c10e8dc537081541fd4e89ca7_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_06ec1ac17d423a30df98665a299da8eb901a9fcd748e3eb39680c3aefd846555 = $this->env->getExtension("native_profiler");
        $__internal_06ec1ac17d423a30df98665a299da8eb901a9fcd748e3eb39680c3aefd846555->enter($__internal_06ec1ac17d423a30df98665a299da8eb901a9fcd748e3eb39680c3aefd846555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_06ec1ac17d423a30df98665a299da8eb901a9fcd748e3eb39680c3aefd846555->leave($__internal_06ec1ac17d423a30df98665a299da8eb901a9fcd748e3eb39680c3aefd846555_prof);

    }

    // line 14
    public function block_view_buttons($context, array $blocks = array())
    {
        $__internal_1223d558e13f48ef65d4701709aaab0c3c643750fbdd75e6f6bfe8542e92d311 = $this->env->getExtension("native_profiler");
        $__internal_1223d558e13f48ef65d4701709aaab0c3c643750fbdd75e6f6bfe8542e92d311->enter($__internal_1223d558e13f48ef65d4701709aaab0c3c643750fbdd75e6f6bfe8542e92d311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_buttons"));

        // line 15
        echo "            ";
        
        $__internal_1223d558e13f48ef65d4701709aaab0c3c643750fbdd75e6f6bfe8542e92d311->leave($__internal_1223d558e13f48ef65d4701709aaab0c3c643750fbdd75e6f6bfe8542e92d311_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee240a161e6f54281416b1e0e7f577bced7d523cf0e9c7240b7f25275388256a = $this->env->getExtension("native_profiler");
        $__internal_ee240a161e6f54281416b1e0e7f577bced7d523cf0e9c7240b7f25275388256a->enter($__internal_ee240a161e6f54281416b1e0e7f577bced7d523cf0e9c7240b7f25275388256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "                ";
        
        $__internal_ee240a161e6f54281416b1e0e7f577bced7d523cf0e9c7240b7f25275388256a->leave($__internal_ee240a161e6f54281416b1e0e7f577bced7d523cf0e9c7240b7f25275388256a_prof);

    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
        $__internal_2cc3d696c983283bf5a8ce2e5b0485d4680efa0fc7e559f6aa2ecfd72bfb9138 = $this->env->getExtension("native_profiler");
        $__internal_2cc3d696c983283bf5a8ce2e5b0485d4680efa0fc7e559f6aa2ecfd72bfb9138->enter($__internal_2cc3d696c983283bf5a8ce2e5b0485d4680efa0fc7e559f6aa2ecfd72bfb9138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 26
        echo "    ";
        
        $__internal_2cc3d696c983283bf5a8ce2e5b0485d4680efa0fc7e559f6aa2ecfd72bfb9138->leave($__internal_2cc3d696c983283bf5a8ce2e5b0485d4680efa0fc7e559f6aa2ecfd72bfb9138_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Common:viewComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 26,  137 => 25,  130 => 19,  124 => 18,  117 => 15,  111 => 14,  100 => 11,  93 => 6,  87 => 5,  79 => 27,  77 => 25,  70 => 20,  68 => 18,  64 => 16,  62 => 14,  56 => 11,  50 => 7,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/component.html.twig' %}*/
/* */
/* {% block component %}*/
/* */
/*     {% block style %}*/
/*     {% endblock style %}*/
/* */
/*     <div class="block-flat">*/
/* */
/*         <div class="header">*/
/*             <h3>{% block title %}{% endblock title %}</h3>*/
/*         </div>*/
/*         <div class="content">*/
/*             {%  block view_buttons %}*/
/*             {% endblock %}*/
/*             <table class="no-border">*/
/*                 <tbody class="no-border-x no-border-y">*/
/*                 {% block content %}*/
/*                 {% endblock content %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block script %}*/
/*     {% endblock script %}*/
/* */
/* {% endblock component %}*/
/* */
