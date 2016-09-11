<?php

/* AdminNewsletterBundle:NewsletterSubscription:view.html.twig */
class __TwigTemplate_b04d49c0e278ee8322fa85dd53e2431e627cec56ee705358d172b0204fb5444c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminNewsletterBundle:NewsletterSubscription:view.html.twig", 1);
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
        $__internal_f826be3d10ecfd7b6ba9d247729e17b8c92005468d10ce89d7d0f9fcb6a471bb = $this->env->getExtension("native_profiler");
        $__internal_f826be3d10ecfd7b6ba9d247729e17b8c92005468d10ce89d7d0f9fcb6a471bb->enter($__internal_f826be3d10ecfd7b6ba9d247729e17b8c92005468d10ce89d7d0f9fcb6a471bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f826be3d10ecfd7b6ba9d247729e17b8c92005468d10ce89d7d0f9fcb6a471bb->leave($__internal_f826be3d10ecfd7b6ba9d247729e17b8c92005468d10ce89d7d0f9fcb6a471bb_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_184245581fc120b78c6db592481cff32763038e424c06218bdcf61912e6e4cff = $this->env->getExtension("native_profiler");
        $__internal_184245581fc120b78c6db592481cff32763038e424c06218bdcf61912e6e4cff->enter($__internal_184245581fc120b78c6db592481cff32763038e424c06218bdcf61912e6e4cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_view_component", array("id" =>         // line 9
(isset($context["id"]) ? $context["id"] : null))));
        // line 10
        echo "
        </div>
    </div>

";
        
        $__internal_184245581fc120b78c6db592481cff32763038e424c06218bdcf61912e6e4cff->leave($__internal_184245581fc120b78c6db592481cff32763038e424c06218bdcf61912e6e4cff_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription:view.html.twig";
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
/*         <div class="col-md-6">*/
/*             {{ render(url("admin_newsletter_subscription_view_component", {*/
/*                 'id': id,*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
