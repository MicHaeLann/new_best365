<?php

/* AdminNewsletterBundle:NewsletterSubscription:nav.html.twig */
class __TwigTemplate_283a79e99a2adf07a0f29f266b8c2dbd973c80f7c7823a41522df002134ed3b9 extends Twig_Template
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
        $__internal_937af8ad88aefef9934d20d855e1c409170cf4c532e9d2ccb01c188a73388ce7 = $this->env->getExtension("native_profiler");
        $__internal_937af8ad88aefef9934d20d855e1c409170cf4c532e9d2ccb01c188a73388ce7->enter($__internal_937af8ad88aefef9934d20d855e1c409170cf4c532e9d2ccb01c188a73388ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription:nav.html.twig"));

        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_list");
        echo "\">
        <i class=\"fa fa-folder\"></i>
        <span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NewsletterSubscription"), "html", null, true);
        echo "</span>
    </a>
</li>
";
        
        $__internal_937af8ad88aefef9934d20d855e1c409170cf4c532e9d2ccb01c188a73388ce7->leave($__internal_937af8ad88aefef9934d20d855e1c409170cf4c532e9d2ccb01c188a73388ce7_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription:nav.html.twig";
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
/*     <a href="{{ url("admin_newsletter_subscription_list") }}">*/
/*         <i class="fa fa-folder"></i>*/
/*         <span>{{ 'NewsletterSubscription'|trans }}</span>*/
/*     </a>*/
/* </li>*/
/* */
