<?php

/* AdminBannerBundle:Banner:view.html.twig */
class __TwigTemplate_02cd476ab3f30418219d402ade254e24c33d331f27c7c5e2de8ca0f347f4efb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:Banner:view.html.twig", 1);
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
        $__internal_d4d59a349c28715dbcf5c0c64dba98225a72661d7a3aa6bb1c416d8d3b0a90da = $this->env->getExtension("native_profiler");
        $__internal_d4d59a349c28715dbcf5c0c64dba98225a72661d7a3aa6bb1c416d8d3b0a90da->enter($__internal_d4d59a349c28715dbcf5c0c64dba98225a72661d7a3aa6bb1c416d8d3b0a90da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d59a349c28715dbcf5c0c64dba98225a72661d7a3aa6bb1c416d8d3b0a90da->leave($__internal_d4d59a349c28715dbcf5c0c64dba98225a72661d7a3aa6bb1c416d8d3b0a90da_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_90c5108bbc5a28eeb6b0d6ec64e63fcc377f02418968885c1c2eb2a9ee8ef135 = $this->env->getExtension("native_profiler");
        $__internal_90c5108bbc5a28eeb6b0d6ec64e63fcc377f02418968885c1c2eb2a9ee8ef135->enter($__internal_90c5108bbc5a28eeb6b0d6ec64e63fcc377f02418968885c1c2eb2a9ee8ef135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_view_component", array("id" =>         // line 9
(isset($context["id"]) ? $context["id"] : null))));
        // line 10
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_new_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_90c5108bbc5a28eeb6b0d6ec64e63fcc377f02418968885c1c2eb2a9ee8ef135->leave($__internal_90c5108bbc5a28eeb6b0d6ec64e63fcc377f02418968885c1c2eb2a9ee8ef135_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  48 => 10,  46 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             {{ render(url("admin_banner_view_component", {*/
/*                 'id': id,*/
/*             })) }}*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ render(url("admin_banner_new_component")) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
