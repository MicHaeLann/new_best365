<?php

/* StoreTemplateBundle:Subpages:cart-nav.html.twig */
class __TwigTemplate_c4d75464bb1d32b5e120e5bb389ec2806f8ce302cbf84bdb98b07f1981778199 extends Twig_Template
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
        $__internal_3d2db308621f66261d375311e59754292ce7933115cc33ea1afd9da0a4bfb869 = $this->env->getExtension("native_profiler");
        $__internal_3d2db308621f66261d375311e59754292ce7933115cc33ea1afd9da0a4bfb869->enter($__internal_3d2db308621f66261d375311e59754292ce7933115cc33ea1afd9da0a4bfb869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:cart-nav.html.twig"));

        // line 1
        echo "<ul class=\"cart-nav\">
    <li>
        <small>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.nav.amount"), "html", null, true);
        echo "</small>
        <strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_convert_money')->getCallable(), array($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "amount", array()))), "html", null, true);
        echo "</strong>
    </li>
    <li>
        <small>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.cart.nav.items"), "html", null, true);
        echo "</small>
        <strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalItemNumber", array()), "html", null, true);
        echo "</strong>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("store_cart_view");
        echo "\" class=\"fa fa-shopping-cart fa-2x\"></a>
    </li>
</ul>
";
        
        $__internal_3d2db308621f66261d375311e59754292ce7933115cc33ea1afd9da0a4bfb869->leave($__internal_3d2db308621f66261d375311e59754292ce7933115cc33ea1afd9da0a4bfb869_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:cart-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <ul class="cart-nav">*/
/*     <li>*/
/*         <small>{{ 'template.store_template_bundle.cart.nav.amount'|trans }}</small>*/
/*         <strong>{{ cart.amount|print_convert_money() }}</strong>*/
/*     </li>*/
/*     <li>*/
/*         <small>{{ 'template.store_template_bundle.cart.nav.items'|trans }}</small>*/
/*         <strong>{{ cart.totalItemNumber }}</strong>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ url('store_cart_view') }}" class="fa fa-shopping-cart fa-2x"></a>*/
/*     </li>*/
/* </ul>*/
/* */
