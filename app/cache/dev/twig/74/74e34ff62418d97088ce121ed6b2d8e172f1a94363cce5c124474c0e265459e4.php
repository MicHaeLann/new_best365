<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_8ed81b8a4f29ce899241f32e320b4c7efcf4015467442ed0043231502cb2b0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4d02729ae3339a05173a6a4f2c1016d9c6480716ad7f8d753236f2dbd2436ab = $this->env->getExtension("native_profiler");
        $__internal_e4d02729ae3339a05173a6a4f2c1016d9c6480716ad7f8d753236f2dbd2436ab->enter($__internal_e4d02729ae3339a05173a6a4f2c1016d9c6480716ad7f8d753236f2dbd2436ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d02729ae3339a05173a6a4f2c1016d9c6480716ad7f8d753236f2dbd2436ab->leave($__internal_e4d02729ae3339a05173a6a4f2c1016d9c6480716ad7f8d753236f2dbd2436ab_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_fefc0e7596cce9c0b22ffbf990a84cfa0573bc239d73eeb0c3485e96c31fe2b9 = $this->env->getExtension("native_profiler");
        $__internal_fefc0e7596cce9c0b22ffbf990a84cfa0573bc239d73eeb0c3485e96c31fe2b9->enter($__internal_fefc0e7596cce9c0b22ffbf990a84cfa0573bc239d73eeb0c3485e96c31fe2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fefc0e7596cce9c0b22ffbf990a84cfa0573bc239d73eeb0c3485e96c31fe2b9->leave($__internal_fefc0e7596cce9c0b22ffbf990a84cfa0573bc239d73eeb0c3485e96c31fe2b9_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_140c1385be640467b53175af5bbe2c92391ce223979ec7072cfe7b75149e59ea = $this->env->getExtension("native_profiler");
        $__internal_140c1385be640467b53175af5bbe2c92391ce223979ec7072cfe7b75149e59ea->enter($__internal_140c1385be640467b53175af5bbe2c92391ce223979ec7072cfe7b75149e59ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_140c1385be640467b53175af5bbe2c92391ce223979ec7072cfe7b75149e59ea->leave($__internal_140c1385be640467b53175af5bbe2c92391ce223979ec7072cfe7b75149e59ea_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_617af875bc99e7d75589804c4accff6424e55bf365b1e59c86e7ff799fc94610 = $this->env->getExtension("native_profiler");
        $__internal_617af875bc99e7d75589804c4accff6424e55bf365b1e59c86e7ff799fc94610->enter($__internal_617af875bc99e7d75589804c4accff6424e55bf365b1e59c86e7ff799fc94610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_617af875bc99e7d75589804c4accff6424e55bf365b1e59c86e7ff799fc94610->leave($__internal_617af875bc99e7d75589804c4accff6424e55bf365b1e59c86e7ff799fc94610_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
