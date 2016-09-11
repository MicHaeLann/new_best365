<?php

/* AdminMediaBundle:Image:list.html.twig */
class __TwigTemplate_56449bfb677ee33977198f13e35c9f4a348869d3b7bbf47f837768097f899a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminMediaBundle:Image:list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87b68179e1e767486f04addedacc3a2e8f53c20b7172773b284e70907f6fe078 = $this->env->getExtension("native_profiler");
        $__internal_87b68179e1e767486f04addedacc3a2e8f53c20b7172773b284e70907f6fe078->enter($__internal_87b68179e1e767486f04addedacc3a2e8f53c20b7172773b284e70907f6fe078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMediaBundle:Image:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b68179e1e767486f04addedacc3a2e8f53c20b7172773b284e70907f6fe078->leave($__internal_87b68179e1e767486f04addedacc3a2e8f53c20b7172773b284e70907f6fe078_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c0fcfcfe0a149d23be9eadc181be31c2f156aab0152acaa76e778aeed160e751 = $this->env->getExtension("native_profiler");
        $__internal_c0fcfcfe0a149d23be9eadc181be31c2f156aab0152acaa76e778aeed160e751->enter($__internal_c0fcfcfe0a149d23be9eadc181be31c2f156aab0152acaa76e778aeed160e751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminMediaBundle:Image:list.html.twig", 6)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.media.plural"), "active" => true)))));
        // line 11
        echo "
";
        
        $__internal_c0fcfcfe0a149d23be9eadc181be31c2f156aab0152acaa76e778aeed160e751->leave($__internal_c0fcfcfe0a149d23be9eadc181be31c2f156aab0152acaa76e778aeed160e751_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9892ca808852d0b558bfdfe5f80e403a29be7daab5c84446a96d616d701c8be = $this->env->getExtension("native_profiler");
        $__internal_e9892ca808852d0b558bfdfe5f80e403a29be7daab5c84446a96d616d701c8be->enter($__internal_e9892ca808852d0b558bfdfe5f80e403a29be7daab5c84446a96d616d701c8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_image_list_component"));
        echo "

";
        
        $__internal_e9892ca808852d0b558bfdfe5f80e403a29be7daab5c84446a96d616d701c8be->leave($__internal_e9892ca808852d0b558bfdfe5f80e403a29be7daab5c84446a96d616d701c8be_prof);

    }

    public function getTemplateName()
    {
        return "AdminMediaBundle:Image:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  60 => 16,  54 => 15,  46 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.media.plural'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{ render(url('admin_image_list_component')) }}*/
/* */
/* {% endblock content %}*/
/* */
