<?php

/* AdminNewsletterBundle:NewsletterSubscription/Component:editComponent.html.twig */
class __TwigTemplate_ce53938519beb3969c2464cfa7d3f2cb62bef271c57530650b574557c483a19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminNewsletterBundle:NewsletterSubscription/Component:editComponent.html.twig", 1);
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
        $__internal_f6bece2149b5bc95e15d3f242611fb5a85d32085e3c8eb2944282d64101fb944 = $this->env->getExtension("native_profiler");
        $__internal_f6bece2149b5bc95e15d3f242611fb5a85d32085e3c8eb2944282d64101fb944->enter($__internal_f6bece2149b5bc95e15d3f242611fb5a85d32085e3c8eb2944282d64101fb944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription/Component:editComponent.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bece2149b5bc95e15d3f242611fb5a85d32085e3c8eb2944282d64101fb944->leave($__internal_f6bece2149b5bc95e15d3f242611fb5a85d32085e3c8eb2944282d64101fb944_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93542072b63141f569a4a64db3423a09c953fa924aa6fb36548da7db52d197e2 = $this->env->getExtension("native_profiler");
        $__internal_93542072b63141f569a4a64db3423a09c953fa924aa6fb36548da7db52d197e2->enter($__internal_93542072b63141f569a4a64db3423a09c953fa924aa6fb36548da7db52d197e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit NewsletterSubscription"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_93542072b63141f569a4a64db3423a09c953fa924aa6fb36548da7db52d197e2->leave($__internal_93542072b63141f569a4a64db3423a09c953fa924aa6fb36548da7db52d197e2_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8ab9ebd76e2cf62cfead474e21184410fe839ddb1cb40e8c8a765fb003d7b4a = $this->env->getExtension("native_profiler");
        $__internal_c8ab9ebd76e2cf62cfead474e21184410fe839ddb1cb40e8c8a765fb003d7b4a->enter($__internal_c8ab9ebd76e2cf62cfead474e21184410fe839ddb1cb40e8c8a765fb003d7b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_update", array("id" => $this->getAttribute(        // line 12
(isset($context["entity"]) ? $context["entity"] : null), "id", array())))));
        // line 13
        echo "

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hash", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reason", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "createdAt", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "updatedAt", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'row');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Update"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_newsletter_subscription_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>

    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_c8ab9ebd76e2cf62cfead474e21184410fe839ddb1cb40e8c8a765fb003d7b4a->leave($__internal_c8ab9ebd76e2cf62cfead474e21184410fe839ddb1cb40e8c8a765fb003d7b4a_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription/Component:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  107 => 26,  103 => 25,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 13,  66 => 12,  65 => 11,  62 => 10,  56 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'Edit NewsletterSubscription'|trans }} - {{ entity.id }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ form_start(form, {'action': url('admin_newsletter_subscription_update', {*/
/*         'id': entity.id*/
/*     })}) }}*/
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
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'Update'|trans }}</button>*/
/*                 <a href="{{ path('admin_newsletter_subscription_list') }}">{{ 'Cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
