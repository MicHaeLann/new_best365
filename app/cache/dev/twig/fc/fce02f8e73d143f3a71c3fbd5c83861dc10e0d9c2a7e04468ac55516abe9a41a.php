<?php

/* AdminCurrencyBundle:Currency:nav.html.twig */
class __TwigTemplate_5d6e3fe27c2b06ac95a69a4767f06c040524cad2c7458da18ff23771a6ae5479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af38f8aeed322d8545be8ff5af2bebfa54aa837a34d5b4dbc5088ef24e0da01 = $this->env->getExtension("native_profiler");
        $__internal_1af38f8aeed322d8545be8ff5af2bebfa54aa837a34d5b4dbc5088ef24e0da01->enter($__internal_1af38f8aeed322d8545be8ff5af2bebfa54aa837a34d5b4dbc5088ef24e0da01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCurrencyBundle:Currency:nav.html.twig"));

        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_currency_list");
        echo "\">
        <i class=\"fa fa-btc\"></i>
        <span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.currency.plural"), "html", null, true);
        echo "</span>
    </a>
</li>
";
        
        $__internal_1af38f8aeed322d8545be8ff5af2bebfa54aa837a34d5b4dbc5088ef24e0da01->leave($__internal_1af38f8aeed322d8545be8ff5af2bebfa54aa837a34d5b4dbc5088ef24e0da01_prof);

    }

    public function getTemplateName()
    {
        return "AdminCurrencyBundle:Currency:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <li>*/
/*     <a href="{{ url('admin_currency_list') }}">*/
/*         <i class="fa fa-btc"></i>*/
/*         <span>{{ 'admin.currency.plural'|trans }}</span>*/
/*     </a>*/
/* </li>*/
/* */
