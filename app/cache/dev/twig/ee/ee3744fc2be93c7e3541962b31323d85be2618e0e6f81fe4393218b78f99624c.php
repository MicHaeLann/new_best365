<?php

/* AdminBannerBundle:Banner:nav.html.twig */
class __TwigTemplate_5bc76699db851a81e33c28b2cbd43e2c82ec4371c45d037ad3f83696a00bd2c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_438c9e9b81ed8f1ef4d414b56452f86a2b4d37350d6449bd664b5286c57f3e96 = $this->env->getExtension("native_profiler");
        $__internal_438c9e9b81ed8f1ef4d414b56452f86a2b4d37350d6449bd664b5286c57f3e96->enter($__internal_438c9e9b81ed8f1ef4d414b56452f86a2b4d37350d6449bd664b5286c57f3e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:nav.html.twig"));

        // line 1
        echo "<li class=\"parent\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_banner_list");
        echo "\">
        <i class=\"fa fa-folder\"></i>
        <span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Banners"), "html", null, true);
        echo "</span>
    </a>

    <ul class=\"sub-menu\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("admin_banner_zone_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Banner Zones"), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("admin_banner_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Banners"), "html", null, true);
        echo "</a></li>
    </ul>
</li>
";
        
        $__internal_438c9e9b81ed8f1ef4d414b56452f86a2b4d37350d6449bd664b5286c57f3e96->leave($__internal_438c9e9b81ed8f1ef4d414b56452f86a2b4d37350d6449bd664b5286c57f3e96_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 8,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <li class="parent">*/
/*     <a href="{{ url("admin_banner_list") }}">*/
/*         <i class="fa fa-folder"></i>*/
/*         <span>{{ 'Banners'|trans }}</span>*/
/*     </a>*/
/* */
/*     <ul class="sub-menu">*/
/*         <li><a href="{{ url("admin_banner_zone_list") }}">{{ 'Banner Zones'|trans }}</a></li>*/
/*         <li><a href="{{ url("admin_banner_list") }}">{{ 'Banners'|trans }}</a></li>*/
/*     </ul>*/
/* </li>*/
/* */
