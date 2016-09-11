<?php

/* AdminNewsletterBundle:NewsletterSubscription:new.html.twig */
class __TwigTemplate_21f825cb3fff6f42496aa537829161c13379911ac19caaf788933faf66624be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminNewsletterBundle:NewsletterSubscription:new.html.twig", 1);
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
        $__internal_b4dfa02362cb47f09538726c667b2ea671e3bc25647ae950d4a86fb067afb7ad = $this->env->getExtension("native_profiler");
        $__internal_b4dfa02362cb47f09538726c667b2ea671e3bc25647ae950d4a86fb067afb7ad->enter($__internal_b4dfa02362cb47f09538726c667b2ea671e3bc25647ae950d4a86fb067afb7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4dfa02362cb47f09538726c667b2ea671e3bc25647ae950d4a86fb067afb7ad->leave($__internal_b4dfa02362cb47f09538726c667b2ea671e3bc25647ae950d4a86fb067afb7ad_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd8d71a34fd6c78b3a948d5a5ca32636e533de57626983e578e7b0483dcd2ca5 = $this->env->getExtension("native_profiler");
        $__internal_bd8d71a34fd6c78b3a948d5a5ca32636e533de57626983e578e7b0483dcd2ca5->enter($__internal_bd8d71a34fd6c78b3a948d5a5ca32636e533de57626983e578e7b0483dcd2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_new_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_bd8d71a34fd6c78b3a948d5a5ca32636e533de57626983e578e7b0483dcd2ca5->leave($__internal_bd8d71a34fd6c78b3a948d5a5ca32636e533de57626983e578e7b0483dcd2ca5_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_newsletter_subscription_new_component")) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
