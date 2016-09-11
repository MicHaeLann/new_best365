<?php

/* StoreTemplateBundle:Subpages:user-nav.html.twig */
class __TwigTemplate_eb5cb5d2cc6a87a830fbc148da85d58527edab3b417712112a507b9ff127432f extends Twig_Template
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
        $__internal_d905833860b00f7250fe1ccfba63284eb75b84a57b07c9a7122579b8c80286d0 = $this->env->getExtension("native_profiler");
        $__internal_d905833860b00f7250fe1ccfba63284eb75b84a57b07c9a7122579b8c80286d0->enter($__internal_d905833860b00f7250fe1ccfba63284eb75b84a57b07c9a7122579b8c80286d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:user-nav.html.twig"));

        // line 1
        echo "<ul class=\"user-nav\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array())) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getUrl("store_user");
            echo "\">
                <strong data-test=\"logged-username\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "firstname", array()), "html", null, true);
            echo "</strong>
            </a>
        </li>
        <li>
            <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("store_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.nav.logout"), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getUrl("store_login");
            echo "\"><i class=\"fa fa-sign-in\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.nav.login"), "html", null, true);
            echo "</a>
        </li>
        <li>
            <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getUrl("store_register");
            echo "\"><strong><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.nav.create_new_account"), "html", null, true);
            echo "</strong></a>
        </li>
    ";
        }
        // line 19
        echo "</ul>
";
        
        $__internal_d905833860b00f7250fe1ccfba63284eb75b84a57b07c9a7122579b8c80286d0->leave($__internal_d905833860b00f7250fe1ccfba63284eb75b84a57b07c9a7122579b8c80286d0_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:user-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  60 => 16,  52 => 13,  49 => 12,  41 => 9,  34 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="user-nav">*/
/*     {% if customer.id %}*/
/*         <li>*/
/*             <a href="{{ url("store_user") }}">*/
/*                 <strong data-test="logged-username">{{ customer.firstname }}</strong>*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ url("store_logout") }}"><i class="fa fa-sign-out"></i> {{ "template.store_template_bundle.user.nav.logout"|trans }}</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li>*/
/*             <a href="{{ url("store_login") }}"><i class="fa fa-sign-in"></i> {{ "template.store_template_bundle.user.nav.login"|trans }}</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ url("store_register") }}"><strong><i class="fa fa-user"></i> {{ "template.store_template_bundle.user.nav.create_new_account"|trans }}</strong></a>*/
/*         </li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
