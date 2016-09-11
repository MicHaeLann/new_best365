<?php

/* StoreTemplateBundle:Pages:user-password-change.html.twig */
class __TwigTemplate_dca351a77670f658263778898fc9795aac2496bfef9eff14d5f5656c6e355657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-password-change.html.twig", 1);
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
        $__internal_ccf0b7585a66cfbd355cc2f382f31b159c964bb1e705028f3033c8b2f781395f = $this->env->getExtension("native_profiler");
        $__internal_ccf0b7585a66cfbd355cc2f382f31b159c964bb1e705028f3033c8b2f781395f->enter($__internal_ccf0b7585a66cfbd355cc2f382f31b159c964bb1e705028f3033c8b2f781395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-password-change.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "@StoreTemplate/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf0b7585a66cfbd355cc2f382f31b159c964bb1e705028f3033c8b2f781395f->leave($__internal_ccf0b7585a66cfbd355cc2f382f31b159c964bb1e705028f3033c8b2f781395f_prof);

    }

    // line 5
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_30cad2344fd3a3de89183882d223e4eb6fd989025b088561f081813f1a7717b5 = $this->env->getExtension("native_profiler");
        $__internal_30cad2344fd3a3de89183882d223e4eb6fd989025b088561f081813f1a7717b5->enter($__internal_30cad2344fd3a3de89183882d223e4eb6fd989025b088561f081813f1a7717b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_30cad2344fd3a3de89183882d223e4eb6fd989025b088561f081813f1a7717b5->leave($__internal_30cad2344fd3a3de89183882d223e4eb6fd989025b088561f081813f1a7717b5_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_25ccfdb1359ecb330a11feb0bf7b94052826958c8954414ca45a6f1730adadbf = $this->env->getExtension("native_profiler");
        $__internal_25ccfdb1359ecb330a11feb0bf7b94052826958c8954414ca45a6f1730adadbf->enter($__internal_25ccfdb1359ecb330a11feb0bf7b94052826958c8954414ca45a6f1730adadbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_25ccfdb1359ecb330a11feb0bf7b94052826958c8954414ca45a6f1730adadbf->leave($__internal_25ccfdb1359ecb330a11feb0bf7b94052826958c8954414ca45a6f1730adadbf_prof);

    }

    // line 9
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_485e0daceea32c1a4c6f0d1809b8f9828a275c16a191ba338cd39aaccd80a013 = $this->env->getExtension("native_profiler");
        $__internal_485e0daceea32c1a4c6f0d1809b8f9828a275c16a191ba338cd39aaccd80a013->enter($__internal_485e0daceea32c1a4c6f0d1809b8f9828a275c16a191ba338cd39aaccd80a013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        // line 10
        echo "    <div class=\"form\">
        <div class=\"grid\">
            <div class=\"col-1-2\">
                <legend><i class=\"fa fa-sign-in\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.password.recover_password"), "html", null, true);
        echo "</legend>
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'row');
        echo "
                <p class=\"buttons\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "send", array()), 'row', array("attr" => array("class" => "button button-secondary")));
        echo "
                </p>
                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_485e0daceea32c1a4c6f0d1809b8f9828a275c16a191ba338cd39aaccd80a013->leave($__internal_485e0daceea32c1a4c6f0d1809b8f9828a275c16a191ba338cd39aaccd80a013_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-password-change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  85 => 17,  80 => 15,  76 => 14,  72 => 13,  67 => 10,  61 => 9,  50 => 7,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% form_theme form '@StoreTemplate/fields.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}{% endblock content %}*/
/* */
/* {% block prefooter %}*/
/*     <div class="form">*/
/*         <div class="grid">*/
/*             <div class="col-1-2">*/
/*                 <legend><i class="fa fa-sign-in"></i> {{ "template.store_template_bundle.user.password.recover_password"|trans }}</legend>*/
/*                 {{ form_start(form) }}*/
/*                     {{ form_row(form.password) }}*/
/*                 <p class="buttons">*/
/*                     {{ form_row(form.send, { 'attr': {'class': 'button button-secondary' } } ) }}*/
/*                 </p>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock prefooter %}*/
/* */
