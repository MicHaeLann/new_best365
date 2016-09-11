<?php

/* AdminCoreBundle:Home:index.html.twig */
class __TwigTemplate_8ec2a5069bb416f0c9cdf5a43ff982df321ad9e3405a565698b3f7b191b9ac2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCoreBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'header_actions' => array($this, 'block_header_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0391e7d3fff25a8f583e7326018ff61def6de40f51c6cb9bff00e75cf8dfb20 = $this->env->getExtension("native_profiler");
        $__internal_c0391e7d3fff25a8f583e7326018ff61def6de40f51c6cb9bff00e75cf8dfb20->enter($__internal_c0391e7d3fff25a8f583e7326018ff61def6de40f51c6cb9bff00e75cf8dfb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0391e7d3fff25a8f583e7326018ff61def6de40f51c6cb9bff00e75cf8dfb20->leave($__internal_c0391e7d3fff25a8f583e7326018ff61def6de40f51c6cb9bff00e75cf8dfb20_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ee1a2a38b08eeca7b17c44c90c3efcf30a36f7c957479a691ab4657be3431c23 = $this->env->getExtension("native_profiler");
        $__internal_ee1a2a38b08eeca7b17c44c90c3efcf30a36f7c957479a691ab4657be3431c23->enter($__internal_ee1a2a38b08eeca7b17c44c90c3efcf30a36f7c957479a691ab4657be3431c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCoreBundle:Home:index.html.twig", 6)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.dashboard.title"), "active" => true)))));
        // line 11
        echo "
";
        
        $__internal_ee1a2a38b08eeca7b17c44c90c3efcf30a36f7c957479a691ab4657be3431c23->leave($__internal_ee1a2a38b08eeca7b17c44c90c3efcf30a36f7c957479a691ab4657be3431c23_prof);

    }

    // line 14
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_5258637f713d1ade7658f94305edd4d5c7a4b87dac297e7a405bb5abc1985eaa = $this->env->getExtension("native_profiler");
        $__internal_5258637f713d1ade7658f94305edd4d5c7a4b87dac297e7a405bb5abc1985eaa->enter($__internal_5258637f713d1ade7658f94305edd4d5c7a4b87dac297e7a405bb5abc1985eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 15
        echo "
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("store_homepage");
        echo "\" target=\"_blank\" class=\"button button-primary\">
        <i class=\"icon-home\"></i> <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.dashboard.view_store"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_5258637f713d1ade7658f94305edd4d5c7a4b87dac297e7a405bb5abc1985eaa->leave($__internal_5258637f713d1ade7658f94305edd4d5c7a4b87dac297e7a405bb5abc1985eaa_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_d83ad849ca626ac5f9beffe2e254540b0cbb96f37e360b68beb30ead7dab92a6 = $this->env->getExtension("native_profiler");
        $__internal_d83ad849ca626ac5f9beffe2e254540b0cbb96f37e360b68beb30ead7dab92a6->enter($__internal_d83ad849ca626ac5f9beffe2e254540b0cbb96f37e360b68beb30ead7dab92a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AdminMetricBundle:Panel:metricPanelToday"), array());
        // line 25
        echo "
";
        
        $__internal_d83ad849ca626ac5f9beffe2e254540b0cbb96f37e360b68beb30ead7dab92a6->leave($__internal_d83ad849ca626ac5f9beffe2e254540b0cbb96f37e360b68beb30ead7dab92a6_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  88 => 24,  85 => 23,  79 => 22,  68 => 17,  64 => 16,  61 => 15,  55 => 14,  47 => 11,  45 => 6,  42 => 5,  36 => 4,  11 => 1,);
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
/* {% endblock %}*/
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('store_homepage') }}" target="_blank" class="button button-primary">*/
/*         <i class="icon-home"></i> <span>{{ 'admin.dashboard.view_store'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* {% block content %}*/
/* */
/*     {% render(controller("AdminMetricBundle:Panel:metricPanelToday")) %}*/
/* */
/* {% endblock content %}*/
/* */
