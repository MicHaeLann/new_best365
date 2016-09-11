<?php

/* StoreTemplateBundle:Pages:checkout-payment-fail.html.twig */
class __TwigTemplate_087c2180913f6c9d0342056938d0a68c7e12f517d7f6e7edb9fddfa0fa48ce79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:checkout-payment-fail.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c76b3311d2ec5521d4fdba499314e835a536139bb86742eb314eeba22101b68 = $this->env->getExtension("native_profiler");
        $__internal_3c76b3311d2ec5521d4fdba499314e835a536139bb86742eb314eeba22101b68->enter($__internal_3c76b3311d2ec5521d4fdba499314e835a536139bb86742eb314eeba22101b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:checkout-payment-fail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c76b3311d2ec5521d4fdba499314e835a536139bb86742eb314eeba22101b68->leave($__internal_3c76b3311d2ec5521d4fdba499314e835a536139bb86742eb314eeba22101b68_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_ab41b668da45c0e37001da03e7d4e51cc0d24f3eb544b3f47e9f601b8bd83d25 = $this->env->getExtension("native_profiler");
        $__internal_ab41b668da45c0e37001da03e7d4e51cc0d24f3eb544b3f47e9f601b8bd83d25->enter($__internal_ab41b668da45c0e37001da03e7d4e51cc0d24f3eb544b3f47e9f601b8bd83d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_ab41b668da45c0e37001da03e7d4e51cc0d24f3eb544b3f47e9f601b8bd83d25->leave($__internal_ab41b668da45c0e37001da03e7d4e51cc0d24f3eb544b3f47e9f601b8bd83d25_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_847e1c0664941d8a9270b2910f3ee04c0e3e530f07dca2cf093874d10d2dd31c = $this->env->getExtension("native_profiler");
        $__internal_847e1c0664941d8a9270b2910f3ee04c0e3e530f07dca2cf093874d10d2dd31c->enter($__internal_847e1c0664941d8a9270b2910f3ee04c0e3e530f07dca2cf093874d10d2dd31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.checkout.payment.try_again"), "html", null, true);
        echo "</h3>
";
        
        $__internal_847e1c0664941d8a9270b2910f3ee04c0e3e530f07dca2cf093874d10d2dd31c->leave($__internal_847e1c0664941d8a9270b2910f3ee04c0e3e530f07dca2cf093874d10d2dd31c_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:checkout-payment-fail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/*     <h3>{{ 'template.store_template_bundle.checkout.payment.try_again'|trans }}</h3>*/
/* {% endblock content %}*/
/* */
