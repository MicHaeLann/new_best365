<?php

/* AdminBannerBundle:Banner:new.html.twig */
class __TwigTemplate_18f072782137c0184fd939c039bb45d5aa55b9a62b4075163135f1859c7285f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:Banner:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b98cbd1babfb583337829083277440c3230d8adb139499716a483e295020bf3 = $this->env->getExtension("native_profiler");
        $__internal_3b98cbd1babfb583337829083277440c3230d8adb139499716a483e295020bf3->enter($__internal_3b98cbd1babfb583337829083277440c3230d8adb139499716a483e295020bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b98cbd1babfb583337829083277440c3230d8adb139499716a483e295020bf3->leave($__internal_3b98cbd1babfb583337829083277440c3230d8adb139499716a483e295020bf3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f618bfdebec2426a219f404bae03a2ff530fc9326ce0b5f082d84d978cd569a = $this->env->getExtension("native_profiler");
        $__internal_5f618bfdebec2426a219f404bae03a2ff530fc9326ce0b5f082d84d978cd569a->enter($__internal_5f618bfdebec2426a219f404bae03a2ff530fc9326ce0b5f082d84d978cd569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_new_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_5f618bfdebec2426a219f404bae03a2ff530fc9326ce0b5f082d84d978cd569a->leave($__internal_5f618bfdebec2426a219f404bae03a2ff530fc9326ce0b5f082d84d978cd569a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_banner_new_component")) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
