<?php

/* StoreTemplateBundle:Layout:_email.html.twig */
class __TwigTemplate_bcf8866853f37cb6d12f880854d6720d46c7f94d77057edc6c68afe171ff0a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9841046dde14f44ac636e5a87c184774b1649d8cea59f8010f7d94e5ce1ae473 = $this->env->getExtension("native_profiler");
        $__internal_9841046dde14f44ac636e5a87c184774b1649d8cea59f8010f7d94e5ce1ae473->enter($__internal_9841046dde14f44ac636e5a87c184774b1649d8cea59f8010f7d94e5ce1ae473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Layout:_email.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9841046dde14f44ac636e5a87c184774b1649d8cea59f8010f7d94e5ce1ae473->leave($__internal_9841046dde14f44ac636e5a87c184774b1649d8cea59f8010f7d94e5ce1ae473_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_079fa79b0d778bbca30a7230cad972f1a7a482cff0071e96def2a8e81e523e54 = $this->env->getExtension("native_profiler");
        $__internal_079fa79b0d778bbca30a7230cad972f1a7a482cff0071e96def2a8e81e523e54->enter($__internal_079fa79b0d778bbca30a7230cad972f1a7a482cff0071e96def2a8e81e523e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
";
        
        $__internal_079fa79b0d778bbca30a7230cad972f1a7a482cff0071e96def2a8e81e523e54->leave($__internal_079fa79b0d778bbca30a7230cad972f1a7a482cff0071e96def2a8e81e523e54_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Layout:_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/* */
/* {% endblock body %}*/
/* */
