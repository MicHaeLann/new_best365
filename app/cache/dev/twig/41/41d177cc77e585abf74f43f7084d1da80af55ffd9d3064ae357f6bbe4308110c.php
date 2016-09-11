<?php

/* AdminMetricBundle:Reports:view.html.twig */
class __TwigTemplate_12547273850c5827055ea817576cad8fd6cdc7c6d0a9bdd921d1c9debdd67faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminMetricBundle:Reports:view.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95908ebc9c29df181c201a28b5f8406547174a9bee538a4f26cfd4e43ab258b9 = $this->env->getExtension("native_profiler");
        $__internal_95908ebc9c29df181c201a28b5f8406547174a9bee538a4f26cfd4e43ab258b9->enter($__internal_95908ebc9c29df181c201a28b5f8406547174a9bee538a4f26cfd4e43ab258b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMetricBundle:Reports:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95908ebc9c29df181c201a28b5f8406547174a9bee538a4f26cfd4e43ab258b9->leave($__internal_95908ebc9c29df181c201a28b5f8406547174a9bee538a4f26cfd4e43ab258b9_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f550a133f7034ed4900ff2676bb0d57750feabdbefc2a0bbaa8f5c7ebecb267c = $this->env->getExtension("native_profiler");
        $__internal_f550a133f7034ed4900ff2676bb0d57750feabdbefc2a0bbaa8f5c7ebecb267c->enter($__internal_f550a133f7034ed4900ff2676bb0d57750feabdbefc2a0bbaa8f5c7ebecb267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminMetricBundle:Reports:view.html.twig", 6)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.dashboard.title"), "active" => true)))));
        // line 11
        echo "
";
        
        $__internal_f550a133f7034ed4900ff2676bb0d57750feabdbefc2a0bbaa8f5c7ebecb267c->leave($__internal_f550a133f7034ed4900ff2676bb0d57750feabdbefc2a0bbaa8f5c7ebecb267c_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_8805dce413d14aa1bc1a1eb7d574cec7022a7b2eb7e48931cfb84ce4462e2ead = $this->env->getExtension("native_profiler");
        $__internal_8805dce413d14aa1bc1a1eb7d574cec7022a7b2eb7e48931cfb84ce4462e2ead->enter($__internal_8805dce413d14aa1bc1a1eb7d574cec7022a7b2eb7e48931cfb84ce4462e2ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller(("AdminMetricBundle:Panel:" . (isset($context["panel"]) ? $context["panel"] : null))), array());
        // line 18
        echo "
";
        
        $__internal_8805dce413d14aa1bc1a1eb7d574cec7022a7b2eb7e48931cfb84ce4462e2ead->leave($__internal_8805dce413d14aa1bc1a1eb7d574cec7022a7b2eb7e48931cfb84ce4462e2ead_prof);

    }

    public function getTemplateName()
    {
        return "AdminMetricBundle:Reports:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  63 => 17,  60 => 16,  54 => 15,  46 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include "@AdminCore/Common/breadcrumb.html.twig" with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.dashboard.title'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% render(controller("AdminMetricBundle:Panel:" ~ panel)) %}*/
/* */
/* {% endblock content %}*/
/* */
