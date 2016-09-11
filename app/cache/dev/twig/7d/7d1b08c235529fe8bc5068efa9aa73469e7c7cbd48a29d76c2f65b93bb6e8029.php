<?php

/* AdminBannerBundle:BannerZone:edit.html.twig */
class __TwigTemplate_6e4aee09307dd0b136eac3b22b314059808436f625e1bf140f8f03904a265d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:BannerZone:edit.html.twig", 1);
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
        $__internal_244bac615d3e2027417739acfb088f4fecb5ed2998ad554e66b107d00d165096 = $this->env->getExtension("native_profiler");
        $__internal_244bac615d3e2027417739acfb088f4fecb5ed2998ad554e66b107d00d165096->enter($__internal_244bac615d3e2027417739acfb088f4fecb5ed2998ad554e66b107d00d165096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244bac615d3e2027417739acfb088f4fecb5ed2998ad554e66b107d00d165096->leave($__internal_244bac615d3e2027417739acfb088f4fecb5ed2998ad554e66b107d00d165096_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_42fa53fbf2193cd1962d41e660a5e6592ea377095dd6ebd6a6414fd3a36786ac = $this->env->getExtension("native_profiler");
        $__internal_42fa53fbf2193cd1962d41e660a5e6592ea377095dd6ebd6a6414fd3a36786ac->enter($__internal_42fa53fbf2193cd1962d41e660a5e6592ea377095dd6ebd6a6414fd3a36786ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_zone_edit_component", array("id" =>         // line 9
(isset($context["id"]) ? $context["id"] : null))));
        // line 10
        echo "
        </div>
    </div>

";
        
        $__internal_42fa53fbf2193cd1962d41e660a5e6592ea377095dd6ebd6a6414fd3a36786ac->leave($__internal_42fa53fbf2193cd1962d41e660a5e6592ea377095dd6ebd6a6414fd3a36786ac_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:edit.html.twig";
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
/*             {{ render(url("admin_banner_zone_edit_component", {*/
/*                 'id': id*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
