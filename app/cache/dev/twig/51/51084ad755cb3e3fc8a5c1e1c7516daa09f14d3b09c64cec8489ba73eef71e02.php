<?php

/* StoreTemplateBundle:Pages:user-password-sent.html.twig */
class __TwigTemplate_4c463e376f94b4a095a7485c09767a89bffc1b25a32c6c483744cd77f05c728e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-password-sent.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a354cc5e29648f7c470b1cd0305e4e27c21cce8229f1e5b8bf889a37f2718e07 = $this->env->getExtension("native_profiler");
        $__internal_a354cc5e29648f7c470b1cd0305e4e27c21cce8229f1e5b8bf889a37f2718e07->enter($__internal_a354cc5e29648f7c470b1cd0305e4e27c21cce8229f1e5b8bf889a37f2718e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-password-sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a354cc5e29648f7c470b1cd0305e4e27c21cce8229f1e5b8bf889a37f2718e07->leave($__internal_a354cc5e29648f7c470b1cd0305e4e27c21cce8229f1e5b8bf889a37f2718e07_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_8fe4ba3ea8c082cd86d00ab4c88660677e3d3a2087c1eee48ac33879bbc1447b = $this->env->getExtension("native_profiler");
        $__internal_8fe4ba3ea8c082cd86d00ab4c88660677e3d3a2087c1eee48ac33879bbc1447b->enter($__internal_8fe4ba3ea8c082cd86d00ab4c88660677e3d3a2087c1eee48ac33879bbc1447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_8fe4ba3ea8c082cd86d00ab4c88660677e3d3a2087c1eee48ac33879bbc1447b->leave($__internal_8fe4ba3ea8c082cd86d00ab4c88660677e3d3a2087c1eee48ac33879bbc1447b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb2d91f2e103b540fc8389086702194cd6006ab19a2699e6c584fe1558e89d02 = $this->env->getExtension("native_profiler");
        $__internal_bb2d91f2e103b540fc8389086702194cd6006ab19a2699e6c584fe1558e89d02->enter($__internal_bb2d91f2e103b540fc8389086702194cd6006ab19a2699e6c584fe1558e89d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span6 offset3\">
                <div class=\"member-box\">
                    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.password.password_sent"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.password.password_sent_text"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_bb2d91f2e103b540fc8389086702194cd6006ab19a2699e6c584fe1558e89d02->leave($__internal_bb2d91f2e103b540fc8389086702194cd6006ab19a2699e6c584fe1558e89d02_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-password-sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 11,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span6 offset3">*/
/*                 <div class="member-box">*/
/*                     <h2>{{ "template.store_template_bundle.user.password.password_sent"|trans }}</h2>*/
/*                     <p>{{ 'template.store_template_bundle.user.password.password_sent_text'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
