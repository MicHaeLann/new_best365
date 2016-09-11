<?php

/* AdminMediaBundle:Image:listComponent.html.twig */
class __TwigTemplate_de1e2bd6f2f7c51d814e01b728d2aba74dbac1d1df34c9e24114bee87a796d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/component.html.twig", "AdminMediaBundle:Image:listComponent.html.twig", 1);
        $this->blocks = array(
            'component' => array($this, 'block_component'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8605f38bd5ed2f77c0c19493cb861a4c581481c384157eb3bc4fb36eea5b979b = $this->env->getExtension("native_profiler");
        $__internal_8605f38bd5ed2f77c0c19493cb861a4c581481c384157eb3bc4fb36eea5b979b->enter($__internal_8605f38bd5ed2f77c0c19493cb861a4c581481c384157eb3bc4fb36eea5b979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMediaBundle:Image:listComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8605f38bd5ed2f77c0c19493cb861a4c581481c384157eb3bc4fb36eea5b979b->leave($__internal_8605f38bd5ed2f77c0c19493cb861a4c581481c384157eb3bc4fb36eea5b979b_prof);

    }

    // line 4
    public function block_component($context, array $blocks = array())
    {
        $__internal_5d40677d8c18abac3880fe088d9e24e7b998a64a9d132d081be10d581bd4b74a = $this->env->getExtension("native_profiler");
        $__internal_5d40677d8c18abac3880fe088d9e24e7b998a64a9d132d081be10d581bd4b74a->enter($__internal_5d40677d8c18abac3880fe088d9e24e7b998a64a9d132d081be10d581bd4b74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "component"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminMedia/Module/_images-gallery.html.twig", "AdminMediaBundle:Image:listComponent.html.twig", 6)->display(array_merge($context, array("images" =>         // line 7
(isset($context["images"]) ? $context["images"] : null))));
        // line 9
        echo "
";
        
        $__internal_5d40677d8c18abac3880fe088d9e24e7b998a64a9d132d081be10d581bd4b74a->leave($__internal_5d40677d8c18abac3880fe088d9e24e7b998a64a9d132d081be10d581bd4b74a_prof);

    }

    public function getTemplateName()
    {
        return "AdminMediaBundle:Image:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  44 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/component.html.twig' %}*/
/* */
/* */
/* {% block component %}*/
/* */
/*     {% include '@AdminMedia/Module/_images-gallery.html.twig' with {*/
/*         images: images*/
/*     } %}*/
/* */
/* {% endblock component %}*/
/* */
