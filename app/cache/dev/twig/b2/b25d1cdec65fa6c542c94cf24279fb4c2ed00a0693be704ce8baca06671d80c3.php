<?php

/* AdminLanguageBundle:Language:list.html.twig */
class __TwigTemplate_5765a13437aa279a2c9b969e659e5ea83b979bcf14c73e4f6d07327322cf071d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminLanguageBundle:Language:list.html.twig", 1);
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
        $__internal_4818c3c25c86c4e51db461fb7f225dd0cc2d1d088d36dfff83661a05c9e0242b = $this->env->getExtension("native_profiler");
        $__internal_4818c3c25c86c4e51db461fb7f225dd0cc2d1d088d36dfff83661a05c9e0242b->enter($__internal_4818c3c25c86c4e51db461fb7f225dd0cc2d1d088d36dfff83661a05c9e0242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLanguageBundle:Language:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4818c3c25c86c4e51db461fb7f225dd0cc2d1d088d36dfff83661a05c9e0242b->leave($__internal_4818c3c25c86c4e51db461fb7f225dd0cc2d1d088d36dfff83661a05c9e0242b_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_da71d65782f034413b1c5044d4a86f6ed5c865829a3b0bf40768099e1f4a301b = $this->env->getExtension("native_profiler");
        $__internal_da71d65782f034413b1c5044d4a86f6ed5c865829a3b0bf40768099e1f4a301b->enter($__internal_da71d65782f034413b1c5044d4a86f6ed5c865829a3b0bf40768099e1f4a301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminLanguageBundle:Language:list.html.twig", 6)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.plural")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.language.plural"), "active" => true)))));
        // line 12
        echo "
";
        
        $__internal_da71d65782f034413b1c5044d4a86f6ed5c865829a3b0bf40768099e1f4a301b->leave($__internal_da71d65782f034413b1c5044d4a86f6ed5c865829a3b0bf40768099e1f4a301b_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ac381f9e7296fb08233d0559c8ebc16967764e10cd6d4afdf9edb0badfdae4c = $this->env->getExtension("native_profiler");
        $__internal_2ac381f9e7296fb08233d0559c8ebc16967764e10cd6d4afdf9edb0badfdae4c->enter($__internal_2ac381f9e7296fb08233d0559c8ebc16967764e10cd6d4afdf9edb0badfdae4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"loading\">
        ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_language_list_component"));
        echo "
    </div>
";
        
        $__internal_2ac381f9e7296fb08233d0559c8ebc16967764e10cd6d4afdf9edb0badfdae4c->leave($__internal_2ac381f9e7296fb08233d0559c8ebc16967764e10cd6d4afdf9edb0badfdae4c_prof);

    }

    public function getTemplateName()
    {
        return "AdminLanguageBundle:Language:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  60 => 17,  54 => 16,  46 => 12,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.settings.plural'|trans },*/
/*             { name: 'admin.language.plural'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     <div class="loading">*/
/*         {{ render(url('admin_language_list_component')) }}*/
/*     </div>*/
/* {% endblock content %}*/
/* */
