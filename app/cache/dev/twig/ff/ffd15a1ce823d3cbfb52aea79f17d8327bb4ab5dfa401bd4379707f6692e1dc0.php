<?php

/* AdminNewsletterBundle:NewsletterSubscription/Component:newComponent.html.twig */
class __TwigTemplate_65bd0a2865283478e6d4b6e0d57f040b258ebd127317fc4e71339f1be581d126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminNewsletterBundle:NewsletterSubscription/Component:newComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/formComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48ebb1736559172da368bfe1256eba3a5d1d84d26c8997fcae06da54135f361f = $this->env->getExtension("native_profiler");
        $__internal_48ebb1736559172da368bfe1256eba3a5d1d84d26c8997fcae06da54135f361f->enter($__internal_48ebb1736559172da368bfe1256eba3a5d1d84d26c8997fcae06da54135f361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription/Component:newComponent.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48ebb1736559172da368bfe1256eba3a5d1d84d26c8997fcae06da54135f361f->leave($__internal_48ebb1736559172da368bfe1256eba3a5d1d84d26c8997fcae06da54135f361f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_839e70db67216dea4726b3a50d82b89ca8e27a16b2d9c0610046cbb3a5e8edbf = $this->env->getExtension("native_profiler");
        $__internal_839e70db67216dea4726b3a50d82b89ca8e27a16b2d9c0610046cbb3a5e8edbf->enter($__internal_839e70db67216dea4726b3a50d82b89ca8e27a16b2d9c0610046cbb3a5e8edbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New NewsletterSubscription"), "html", null, true);
        echo "
";
        
        $__internal_839e70db67216dea4726b3a50d82b89ca8e27a16b2d9c0610046cbb3a5e8edbf->leave($__internal_839e70db67216dea4726b3a50d82b89ca8e27a16b2d9c0610046cbb3a5e8edbf_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_42d9622f27a85af15fdb0ba7606d8aeb624341282c27cd7d0cce75c3c43126d1 = $this->env->getExtension("native_profiler");
        $__internal_42d9622f27a85af15fdb0ba7606d8aeb624341282c27cd7d0cce75c3c43126d1->enter($__internal_42d9622f27a85af15fdb0ba7606d8aeb624341282c27cd7d0cce75c3c43126d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_save")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hash", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reason", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "createdAt", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "updatedAt", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'row');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_newsletter_subscription_list");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>

    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_42d9622f27a85af15fdb0ba7606d8aeb624341282c27cd7d0cce75c3c43126d1->leave($__internal_42d9622f27a85af15fdb0ba7606d8aeb624341282c27cd7d0cce75c3c43126d1_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription/Component:newComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  103 => 24,  99 => 23,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  60 => 10,  54 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'New NewsletterSubscription'|trans }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {'action': url('admin_newsletter_subscription_save')}) }}*/
/* */
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.hash) }}*/
/*         {{ form_row(form.reason) }}*/
/*         {{ form_row(form.createdAt) }}*/
/*         {{ form_row(form.updatedAt) }}*/
/*         {{ form_row(form.enabled) }}*/
/*         {{ form_row(form.language) }}*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-primary">{{ 'Save'|trans }}</button>*/
/*                 <a href="{{ path('admin_newsletter_subscription_list') }}" class="btn btn-default">{{ 'Cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
