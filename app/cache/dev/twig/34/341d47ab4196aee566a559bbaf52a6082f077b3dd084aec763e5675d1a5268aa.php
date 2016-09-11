<?php

/* StoreTemplateBundle:Pages:user-register.html.twig */
class __TwigTemplate_76ab9ec45b7b14d9f9583e63ddbb4979e7faae67ce360009e965af2e28ae2e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-register.html.twig", 1);
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
        $__internal_f63f236a79a8abe8d054481421e54552f467da8d6c155a86b6d7218f3ef524b4 = $this->env->getExtension("native_profiler");
        $__internal_f63f236a79a8abe8d054481421e54552f467da8d6c155a86b6d7218f3ef524b4->enter($__internal_f63f236a79a8abe8d054481421e54552f467da8d6c155a86b6d7218f3ef524b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-register.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "@StoreTemplate/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f63f236a79a8abe8d054481421e54552f467da8d6c155a86b6d7218f3ef524b4->leave($__internal_f63f236a79a8abe8d054481421e54552f467da8d6c155a86b6d7218f3ef524b4_prof);

    }

    // line 6
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_bf0728e6a5866358fa08ad535f5523f9dd57e3b4a9d835356b3419bf6cbbf908 = $this->env->getExtension("native_profiler");
        $__internal_bf0728e6a5866358fa08ad535f5523f9dd57e3b4a9d835356b3419bf6cbbf908->enter($__internal_bf0728e6a5866358fa08ad535f5523f9dd57e3b4a9d835356b3419bf6cbbf908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_bf0728e6a5866358fa08ad535f5523f9dd57e3b4a9d835356b3419bf6cbbf908->leave($__internal_bf0728e6a5866358fa08ad535f5523f9dd57e3b4a9d835356b3419bf6cbbf908_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5b2fec7339a7268d5fa175f18afe536d64e34f76a2b8cc45c7ee9f3b1b0ed3a = $this->env->getExtension("native_profiler");
        $__internal_c5b2fec7339a7268d5fa175f18afe536d64e34f76a2b8cc45c7ee9f3b1b0ed3a->enter($__internal_c5b2fec7339a7268d5fa175f18afe536d64e34f76a2b8cc45c7ee9f3b1b0ed3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c5b2fec7339a7268d5fa175f18afe536d64e34f76a2b8cc45c7ee9f3b1b0ed3a->leave($__internal_c5b2fec7339a7268d5fa175f18afe536d64e34f76a2b8cc45c7ee9f3b1b0ed3a_prof);

    }

    // line 10
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_2c113e6e47b90d38446bc6265bf7cb66cd3d4b601461955848cd8181e33bb265 = $this->env->getExtension("native_profiler");
        $__internal_2c113e6e47b90d38446bc6265bf7cb66cd3d4b601461955848cd8181e33bb265->enter($__internal_2c113e6e47b90d38446bc6265bf7cb66cd3d4b601461955848cd8181e33bb265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 11
        echo "    <div class=\"form\">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <div class=\"grid\">
            <legend><i class=\"fa fa-user\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.password.register"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'row');
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
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_2c113e6e47b90d38446bc6265bf7cb66cd3d4b601461955848cd8181e33bb265->leave($__internal_2c113e6e47b90d38446bc6265bf7cb66cd3d4b601461955848cd8181e33bb265_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  110 => 31,  104 => 28,  98 => 25,  92 => 22,  86 => 19,  80 => 16,  75 => 14,  70 => 12,  67 => 11,  61 => 10,  50 => 8,  39 => 6,  32 => 1,  30 => 4,  11 => 1,);
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
/*             <legend><i class="fa fa-user"></i> {{ "template.store_template_bundle.user.password.register"|trans }}</legend>*/
/*             <div class="col-1-2">*/
/*                 {{ form_row(form.firstname) }}*/
/*             </div>*/
/*             <div class="col-1-2">*/
/*                 {{ form_row(form.lastName) }}*/
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
/* */
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock prefooter %}*/
/* */
