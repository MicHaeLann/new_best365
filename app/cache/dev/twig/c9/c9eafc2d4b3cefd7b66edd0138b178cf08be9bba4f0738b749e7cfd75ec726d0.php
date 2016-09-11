<?php

/* AdminCurrencyBundle:Currency:list.html.twig */
class __TwigTemplate_5b2bfa5ff2e9104faa84c7980e631146993b2c2aeadf779f24e045159e043b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCurrencyBundle:Currency:list.html.twig", 1);
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
        $__internal_1d6644b9bb1ae4acd37bda7f0f4d8822c4719aa8afa50f95c4af0e856c1113b9 = $this->env->getExtension("native_profiler");
        $__internal_1d6644b9bb1ae4acd37bda7f0f4d8822c4719aa8afa50f95c4af0e856c1113b9->enter($__internal_1d6644b9bb1ae4acd37bda7f0f4d8822c4719aa8afa50f95c4af0e856c1113b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCurrencyBundle:Currency:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d6644b9bb1ae4acd37bda7f0f4d8822c4719aa8afa50f95c4af0e856c1113b9->leave($__internal_1d6644b9bb1ae4acd37bda7f0f4d8822c4719aa8afa50f95c4af0e856c1113b9_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2ca28e82dbbcdaa2264dbaeefc904287ef5009d74d33a02b4651f5e3fd33b311 = $this->env->getExtension("native_profiler");
        $__internal_2ca28e82dbbcdaa2264dbaeefc904287ef5009d74d33a02b4651f5e3fd33b311->enter($__internal_2ca28e82dbbcdaa2264dbaeefc904287ef5009d74d33a02b4651f5e3fd33b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCurrencyBundle:Currency:list.html.twig", 6)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.plural")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.currency.single"), "active" => true)))));
        // line 12
        echo "
";
        
        $__internal_2ca28e82dbbcdaa2264dbaeefc904287ef5009d74d33a02b4651f5e3fd33b311->leave($__internal_2ca28e82dbbcdaa2264dbaeefc904287ef5009d74d33a02b4651f5e3fd33b311_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_78eda5273393dabfd8750eaef522f59040687f93bef81bb0f1bc88ee635cb2fe = $this->env->getExtension("native_profiler");
        $__internal_78eda5273393dabfd8750eaef522f59040687f93bef81bb0f1bc88ee635cb2fe->enter($__internal_78eda5273393dabfd8750eaef522f59040687f93bef81bb0f1bc88ee635cb2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"loading\">
        ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_currency_list_component"));
        echo "
    </div>
";
        
        $__internal_78eda5273393dabfd8750eaef522f59040687f93bef81bb0f1bc88ee635cb2fe->leave($__internal_78eda5273393dabfd8750eaef522f59040687f93bef81bb0f1bc88ee635cb2fe_prof);

    }

    public function getTemplateName()
    {
        return "AdminCurrencyBundle:Currency:list.html.twig";
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
/*             { name: 'admin.currency.single'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     <div class="loading">*/
/*         {{ render(url('admin_currency_list_component')) }}*/
/*     </div>*/
/* {% endblock content %}*/
/* */
