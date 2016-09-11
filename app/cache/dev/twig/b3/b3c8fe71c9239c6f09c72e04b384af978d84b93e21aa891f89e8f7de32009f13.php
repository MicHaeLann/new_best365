<?php

/* AdminBannerBundle:Banner:edit.html.twig */
class __TwigTemplate_0dfff446d3bfa539cec92e38cbc0dbb621d7533bd210765d4e0533d623324496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:Banner:edit.html.twig", 1);
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
        $__internal_cc5dc7c266b47c34a4ec108b33367199f32a2678ab01b275b99f7033a57bcb1c = $this->env->getExtension("native_profiler");
        $__internal_cc5dc7c266b47c34a4ec108b33367199f32a2678ab01b275b99f7033a57bcb1c->enter($__internal_cc5dc7c266b47c34a4ec108b33367199f32a2678ab01b275b99f7033a57bcb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5dc7c266b47c34a4ec108b33367199f32a2678ab01b275b99f7033a57bcb1c->leave($__internal_cc5dc7c266b47c34a4ec108b33367199f32a2678ab01b275b99f7033a57bcb1c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_6265fa288a80ed22ea33a3241cd1bfdc2bb074fea16b6b8fd729d10ff78be2c2 = $this->env->getExtension("native_profiler");
        $__internal_6265fa288a80ed22ea33a3241cd1bfdc2bb074fea16b6b8fd729d10ff78be2c2->enter($__internal_6265fa288a80ed22ea33a3241cd1bfdc2bb074fea16b6b8fd729d10ff78be2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_edit_component", array("id" =>         // line 9
(isset($context["id"]) ? $context["id"] : null))));
        // line 10
        echo "
        </div>
    </div>

";
        
        $__internal_6265fa288a80ed22ea33a3241cd1bfdc2bb074fea16b6b8fd729d10ff78be2c2->leave($__internal_6265fa288a80ed22ea33a3241cd1bfdc2bb074fea16b6b8fd729d10ff78be2c2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  46 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_banner_edit_component", {*/
/*                 'id': id*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
