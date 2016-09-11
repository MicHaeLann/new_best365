<?php

/* StoreTemplateBundle:Pages:address-edit.html.twig */
class __TwigTemplate_0ad464cffe3d13063de62b5dd33b0c7c6ba01f3c85b5d2cb372833af3cae74ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:address-edit.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb185751c51f9cf54aac955da61813195262fe198650fdc03d01a89bae48fb88 = $this->env->getExtension("native_profiler");
        $__internal_eb185751c51f9cf54aac955da61813195262fe198650fdc03d01a89bae48fb88->enter($__internal_eb185751c51f9cf54aac955da61813195262fe198650fdc03d01a89bae48fb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:address-edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb185751c51f9cf54aac955da61813195262fe198650fdc03d01a89bae48fb88->leave($__internal_eb185751c51f9cf54aac955da61813195262fe198650fdc03d01a89bae48fb88_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_ee8637bbc0b58eee8c65c2a1731e71ff5a74d2dd97d80f2e6fc34a34b8dbafe0 = $this->env->getExtension("native_profiler");
        $__internal_ee8637bbc0b58eee8c65c2a1731e71ff5a74d2dd97d80f2e6fc34a34b8dbafe0->enter($__internal_ee8637bbc0b58eee8c65c2a1731e71ff5a74d2dd97d80f2e6fc34a34b8dbafe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_ee8637bbc0b58eee8c65c2a1731e71ff5a74d2dd97d80f2e6fc34a34b8dbafe0->leave($__internal_ee8637bbc0b58eee8c65c2a1731e71ff5a74d2dd97d80f2e6fc34a34b8dbafe0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7c1fe65025aca016129079bd9311f2ae357c31d42af3947e83cc2bc2d8f2819 = $this->env->getExtension("native_profiler");
        $__internal_a7c1fe65025aca016129079bd9311f2ae357c31d42af3947e83cc2bc2d8f2819->enter($__internal_a7c1fe65025aca016129079bd9311f2ae357c31d42af3947e83cc2bc2d8f2819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["address"]) ? $context["address"] : null), "name", array())) {
            // line 7
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.edit.edit_address"), "html", null, true);
            echo "</h2>
    ";
        } else {
            // line 9
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.edit.add_new_address"), "html", null, true);
            echo "</h2>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@StoreTemplate/Modules/_address-new.html.twig", "StoreTemplateBundle:Pages:address-edit.html.twig", 12)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
        // line 13
        echo "

";
        // line 20
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5c69106_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5c69106_0") : $this->env->getExtension('asset')->getAssetUrl("js/5c69106_LocationSelectors_1.js");
            // line 21
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5c69106"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5c69106") : $this->env->getExtension('asset')->getAssetUrl("js/5c69106.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_a7c1fe65025aca016129079bd9311f2ae357c31d42af3947e83cc2bc2d8f2819->leave($__internal_a7c1fe65025aca016129079bd9311f2ae357c31d42af3947e83cc2bc2d8f2819_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:address-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  76 => 20,  72 => 13,  70 => 12,  67 => 11,  61 => 9,  55 => 7,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/*     {% if address.name %}*/
/*         <h2>{{ 'template.store_template_bundle.address.edit.edit_address'|trans }}</h2>*/
/*     {% else %}*/
/*         <h2>{{ 'template.store_template_bundle.address.edit.add_new_address'|trans }}</h2>*/
/*     {% endif %}*/
/* */
/*     {% include '@StoreTemplate/Modules/_address-new.html.twig' with {'form' : form} %}*/
/* */
/* */
/* {###########################################################################*/
/* #   IMPORTANT This JS is used on the location-selector to make the city    #*/
/* #   selectors work. If you remove this you should implement the same       #*/
/* #   functionality by yourself                                              #*/
/* ###########################################################################}*/
/*     {% javascripts '@StoreGeoBundle/Resources/public/js/LocationSelectors.js' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock content %}*/
/* */
