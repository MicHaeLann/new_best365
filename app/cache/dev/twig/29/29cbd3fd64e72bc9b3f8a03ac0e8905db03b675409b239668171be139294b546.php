<?php

/* AdminNewsletterBundle:NewsletterSubscription:edit.html.twig */
class __TwigTemplate_52b1eb0e4fd9edc0fbd0a33eb8b0a5386433346b3d58eaca304229425b6b355b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminNewsletterBundle:NewsletterSubscription:edit.html.twig", 1);
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
        $__internal_fa43df89ba0f523bc5e34374b3d055ee7ba6a1034bec024b93dfdfb888ca8fe1 = $this->env->getExtension("native_profiler");
        $__internal_fa43df89ba0f523bc5e34374b3d055ee7ba6a1034bec024b93dfdfb888ca8fe1->enter($__internal_fa43df89ba0f523bc5e34374b3d055ee7ba6a1034bec024b93dfdfb888ca8fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa43df89ba0f523bc5e34374b3d055ee7ba6a1034bec024b93dfdfb888ca8fe1->leave($__internal_fa43df89ba0f523bc5e34374b3d055ee7ba6a1034bec024b93dfdfb888ca8fe1_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6a4a2e29bea44cc701431a141b269176e204b47252adfc4f949dfaf4fad9b7c = $this->env->getExtension("native_profiler");
        $__internal_b6a4a2e29bea44cc701431a141b269176e204b47252adfc4f949dfaf4fad9b7c->enter($__internal_b6a4a2e29bea44cc701431a141b269176e204b47252adfc4f949dfaf4fad9b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_edit_component", array("id" =>         // line 9
(isset($context["id"]) ? $context["id"] : null))));
        // line 10
        echo "
        </div>
    </div>

";
        
        $__internal_b6a4a2e29bea44cc701431a141b269176e204b47252adfc4f949dfaf4fad9b7c->leave($__internal_b6a4a2e29bea44cc701431a141b269176e204b47252adfc4f949dfaf4fad9b7c_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  46 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_newsletter_subscription_edit_component", {*/
/*                 'id': id*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
