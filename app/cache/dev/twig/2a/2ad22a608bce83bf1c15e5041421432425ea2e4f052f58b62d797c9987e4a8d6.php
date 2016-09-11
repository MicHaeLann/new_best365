<?php

/* StoreTemplateBundle:Pages:user-edit.html.twig */
class __TwigTemplate_dacb87ff7bc4d772d70e9d9cf5c685fbcd3c874846c2a156dd43e78c8e52a828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-edit.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
            'prefooter' => array($this, 'block_prefooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3253157e69f250492bbd526c92729e52986d0ecbeb4c8bee885c7614ae2f61 = $this->env->getExtension("native_profiler");
        $__internal_fc3253157e69f250492bbd526c92729e52986d0ecbeb4c8bee885c7614ae2f61->enter($__internal_fc3253157e69f250492bbd526c92729e52986d0ecbeb4c8bee885c7614ae2f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-edit.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "@StoreTemplate/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3253157e69f250492bbd526c92729e52986d0ecbeb4c8bee885c7614ae2f61->leave($__internal_fc3253157e69f250492bbd526c92729e52986d0ecbeb4c8bee885c7614ae2f61_prof);

    }

    // line 6
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_6680ba3732366df85b53f89f5de95144a08383cf4883746bd41cd8660e591639 = $this->env->getExtension("native_profiler");
        $__internal_6680ba3732366df85b53f89f5de95144a08383cf4883746bd41cd8660e591639->enter($__internal_6680ba3732366df85b53f89f5de95144a08383cf4883746bd41cd8660e591639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_6680ba3732366df85b53f89f5de95144a08383cf4883746bd41cd8660e591639->leave($__internal_6680ba3732366df85b53f89f5de95144a08383cf4883746bd41cd8660e591639_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_acbe4698f5768a180183ed45e91c8d9894d2e2bb1b04de3f360e6f865c820a8d = $this->env->getExtension("native_profiler");
        $__internal_acbe4698f5768a180183ed45e91c8d9894d2e2bb1b04de3f360e6f865c820a8d->enter($__internal_acbe4698f5768a180183ed45e91c8d9894d2e2bb1b04de3f360e6f865c820a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_acbe4698f5768a180183ed45e91c8d9894d2e2bb1b04de3f360e6f865c820a8d->leave($__internal_acbe4698f5768a180183ed45e91c8d9894d2e2bb1b04de3f360e6f865c820a8d_prof);

    }

    // line 10
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_02e81cf46686174eafff0da01660722c43c2e8857e762029ba41bd93e6976e5b = $this->env->getExtension("native_profiler");
        $__internal_02e81cf46686174eafff0da01660722c43c2e8857e762029ba41bd93e6976e5b->enter($__internal_02e81cf46686174eafff0da01660722c43c2e8857e762029ba41bd93e6976e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 11
        echo "    <div class=\"form\">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <div class=\"grid\">
            <legend><i class=\"fa fa-user\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.edit.profile"), "html", null, true);
        echo "</legend>
            <div class=\"col-1-2\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'row');
        echo "
            </div>
            <div class=\"col-1-2\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'row');
        echo "
            </div>
            <div class=\"col-1-1\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
            </div>
            <div class=\"col-1-2\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'row');
        echo "
            </div>
            <div class=\"col-1-2\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'row');
        echo "
            </div>
            <p class=\"buttons\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "send", array()), 'row', array("attr" => array("class" => "button button-secondary")));
        echo "
            </p>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_02e81cf46686174eafff0da01660722c43c2e8857e762029ba41bd93e6976e5b->leave($__internal_02e81cf46686174eafff0da01660722c43c2e8857e762029ba41bd93e6976e5b_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  110 => 31,  104 => 28,  98 => 25,  92 => 22,  86 => 19,  80 => 16,  75 => 14,  70 => 12,  67 => 11,  61 => 10,  50 => 8,  39 => 6,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* */
/* {% form_theme form '@StoreTemplate/fields.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}{% endblock content %}*/
/* */
/* {% block prefooter %}*/
/*     <div class="form">*/
/*         {{ form_start(form) }}*/
/*         <div class="grid">*/
/*             <legend><i class="fa fa-user"></i> {{ "template.store_template_bundle.user.edit.profile"|trans }}</legend>*/
/*             <div class="col-1-2">*/
/*                 {{ form_row(form.firstname) }}*/
/*             </div>*/
/*             <div class="col-1-2">*/
/*                 {{ form_row(form.lastname) }}*/
/*             </div>*/
/*             <div class="col-1-1">*/
/*                 {{ form_row(form.email) }}*/
/*             </div>*/
/*             <div class="col-1-2">*/
/*                 {{ form_row(form.password.first) }}*/
/*             </div>*/
/*             <div class="col-1-2">*/
/*                 {{ form_row(form.password.second) }}*/
/*             </div>*/
/*             <p class="buttons">*/
/*                 {{ form_row( form.send , { 'attr': {'class': 'button button-secondary' } } ) }}*/
/*             </p>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock prefooter %}*/
/* */
