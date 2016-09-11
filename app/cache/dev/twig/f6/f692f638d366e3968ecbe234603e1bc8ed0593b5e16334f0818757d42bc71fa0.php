<?php

/* AdminNewsletterBundle:NewsletterSubscription:list.html.twig */
class __TwigTemplate_0cef0c75ee6bd82dbc85d6ac486c70603e29988647081202206424dffd787c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminNewsletterBundle:NewsletterSubscription:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05962084157419056c8b96508f2610c9cf8851fb24fa8218f3da40a7d1523b7c = $this->env->getExtension("native_profiler");
        $__internal_05962084157419056c8b96508f2610c9cf8851fb24fa8218f3da40a7d1523b7c->enter($__internal_05962084157419056c8b96508f2610c9cf8851fb24fa8218f3da40a7d1523b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05962084157419056c8b96508f2610c9cf8851fb24fa8218f3da40a7d1523b7c->leave($__internal_05962084157419056c8b96508f2610c9cf8851fb24fa8218f3da40a7d1523b7c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_61fb94cdd0e5c750107aaaf747facd9dc19f5c425f9389ea69f2727790d9fcf7 = $this->env->getExtension("native_profiler");
        $__internal_61fb94cdd0e5c750107aaaf747facd9dc19f5c425f9389ea69f2727790d9fcf7->enter($__internal_61fb94cdd0e5c750107aaaf747facd9dc19f5c425f9389ea69f2727790d9fcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_list_component", array("page" =>         // line 9
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 10
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 11
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 12
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 13
        echo "
        </div>
    </div>

";
        
        $__internal_61fb94cdd0e5c750107aaaf747facd9dc19f5c425f9389ea69f2727790d9fcf7->leave($__internal_61fb94cdd0e5c750107aaaf747facd9dc19f5c425f9389ea69f2727790d9fcf7_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  49 => 12,  48 => 11,  47 => 10,  46 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_newsletter_subscription_list_component", {*/
/*                 'page': page,*/
/*                 'limit': limit,*/
/*                 'orderByField': orderByField,*/
/*                 'orderByDirection': orderByDirection*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
