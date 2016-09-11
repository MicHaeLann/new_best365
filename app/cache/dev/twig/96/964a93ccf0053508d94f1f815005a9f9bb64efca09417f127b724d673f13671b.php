<?php

/* AdminBannerBundle:BannerZone:new.html.twig */
class __TwigTemplate_7d2550ade291f22a5592a0896971dbac4c573a6363be6b29f627679c0231d1f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminBannerBundle:BannerZone:new.html.twig", 1);
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
        $__internal_25296f479f555cd73a0fb76f847ef13e5ca17fbe714f4d4eab6b551b7f449edc = $this->env->getExtension("native_profiler");
        $__internal_25296f479f555cd73a0fb76f847ef13e5ca17fbe714f4d4eab6b551b7f449edc->enter($__internal_25296f479f555cd73a0fb76f847ef13e5ca17fbe714f4d4eab6b551b7f449edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25296f479f555cd73a0fb76f847ef13e5ca17fbe714f4d4eab6b551b7f449edc->leave($__internal_25296f479f555cd73a0fb76f847ef13e5ca17fbe714f4d4eab6b551b7f449edc_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce4e460d3fe92b5decf2856e46284b687c329b7fd0cb34a94999c96b0fda3289 = $this->env->getExtension("native_profiler");
        $__internal_ce4e460d3fe92b5decf2856e46284b687c329b7fd0cb34a94999c96b0fda3289->enter($__internal_ce4e460d3fe92b5decf2856e46284b687c329b7fd0cb34a94999c96b0fda3289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_banner_zone_new_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_ce4e460d3fe92b5decf2856e46284b687c329b7fd0cb34a94999c96b0fda3289->leave($__internal_ce4e460d3fe92b5decf2856e46284b687c329b7fd0cb34a94999c96b0fda3289_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url("admin_banner_zone_new_component")) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
