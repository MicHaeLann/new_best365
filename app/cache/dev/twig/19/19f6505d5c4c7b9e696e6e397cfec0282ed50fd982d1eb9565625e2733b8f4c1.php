<?php

/* AdminTemplateBundle:Template:list.html.twig */
class __TwigTemplate_66c1f6ef0561a6b001520fe60b4ccede070d16a1671a92f6fe76f8692d636261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminTemplateBundle:Template:list.html.twig", 1);
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
        $__internal_aa6e9b1e29219e7788fd7fef4593dad9a293c44bdd9e3ad1b24d81685bd11fc6 = $this->env->getExtension("native_profiler");
        $__internal_aa6e9b1e29219e7788fd7fef4593dad9a293c44bdd9e3ad1b24d81685bd11fc6->enter($__internal_aa6e9b1e29219e7788fd7fef4593dad9a293c44bdd9e3ad1b24d81685bd11fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminTemplateBundle:Template:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa6e9b1e29219e7788fd7fef4593dad9a293c44bdd9e3ad1b24d81685bd11fc6->leave($__internal_aa6e9b1e29219e7788fd7fef4593dad9a293c44bdd9e3ad1b24d81685bd11fc6_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_60ec5822af5a86c8cc68c60ed9e6a2f0519df43ab764a10a2a2a17a542f17350 = $this->env->getExtension("native_profiler");
        $__internal_60ec5822af5a86c8cc68c60ed9e6a2f0519df43ab764a10a2a2a17a542f17350->enter($__internal_60ec5822af5a86c8cc68c60ed9e6a2f0519df43ab764a10a2a2a17a542f17350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminTemplateBundle:Template:list.html.twig", 6)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.menu.design"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.template.plural"), "active" => true)))));
        // line 12
        echo "
";
        
        $__internal_60ec5822af5a86c8cc68c60ed9e6a2f0519df43ab764a10a2a2a17a542f17350->leave($__internal_60ec5822af5a86c8cc68c60ed9e6a2f0519df43ab764a10a2a2a17a542f17350_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_87d4b5f57736f8e811139d2ed8159a6b71c3ffaff05ec1337cb60bdcb2b0b41f = $this->env->getExtension("native_profiler");
        $__internal_87d4b5f57736f8e811139d2ed8159a6b71c3ffaff05ec1337cb60bdcb2b0b41f->enter($__internal_87d4b5f57736f8e811139d2ed8159a6b71c3ffaff05ec1337cb60bdcb2b0b41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    <form class=\"form-grid form-save-on-edit\" data-fc-modules=\"form-save-on-edit\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 20
            echo "            ";
            $context["templateBundle"] = $this->getAttribute($context["template"], "getBundleName", array());
            // line 21
            echo "            ";
            $context["templateAssetPath"] = $this->getAttribute((isset($context["assetPaths"]) ? $context["assetPaths"] : null), $this->getAttribute($context["template"], "hash", array()), array(), "array");
            // line 22
            echo "            ";
            $context["assetPath"] = ("bundles/" . (isset($context["templateAssetPath"]) ? $context["templateAssetPath"] : null));
            // line 23
            echo "            <article class=\"box-background\">
                <h4 class=\"fw-n\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["templateBundle"]) ? $context["templateBundle"] : null), "html", null, true);
            echo "</h4>
                ";
            // line 25
            $context["imageUrl"] = $this->env->getExtension('asset')->getAssetUrl(((isset($context["assetPath"]) ? $context["assetPath"] : null) . "/preview.jpg"));
            // line 26
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["imageUrl"]) ? $context["imageUrl"] : null), "html", null, true);
            echo "\" data-fc-modules=\"modal\" class=\"thumbnail mt-s mb-l\">
                    <img width=\"100%\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["imageUrl"]) ? $context["imageUrl"] : null), "html", null, true);
            echo "\" />
                </a>
                <input type=\"hidden\" id=\"url-";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["templateBundle"]) ? $context["templateBundle"] : null), "html", null, true);
            echo "-store.template\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_template_assign", array("hash" => $this->getAttribute($context["template"], "hash", array()))), "html", null, true);
            echo "\" />
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["assetPath"]) ? $context["assetPath"] : null) . "/preview/index.html")), "html", null, true);
            echo "\" data-fc-modules=\"modal\" data-fc-width=\"95%\" data-fc-height=\"95%\" class=\"button\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.template.action.preview"), "html", null, true);
            echo "
                </a>
                <div class=\"fl-r pt-s\">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.template.label.status"), "html", null, true);
            echo "
                    <div class=\"switch\">
                        <input type=\"radio\" name=\"store.template\" id=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["templateBundle"]) ? $context["templateBundle"] : null), "html", null, true);
            echo "-store.template\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["templateBundle"]) ? $context["templateBundle"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["template"], "hash", array()) == $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "template", array()))) {
                echo " checked=\"checked\"";
            }
            echo " />
                        <label for=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["templateBundle"]) ? $context["templateBundle"] : null), "html", null, true);
            echo "-store.template\" class=\"mr-n\"></label>
                    </div>
                </div>

            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </form>

";
        
        $__internal_87d4b5f57736f8e811139d2ed8159a6b71c3ffaff05ec1337cb60bdcb2b0b41f->leave($__internal_87d4b5f57736f8e811139d2ed8159a6b71c3ffaff05ec1337cb60bdcb2b0b41f_prof);

    }

    public function getTemplateName()
    {
        return "AdminTemplateBundle:Template:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 43,  127 => 37,  117 => 36,  112 => 34,  106 => 31,  102 => 30,  96 => 29,  91 => 27,  86 => 26,  84 => 25,  80 => 24,  77 => 23,  74 => 22,  71 => 21,  68 => 20,  64 => 19,  60 => 17,  54 => 16,  46 => 12,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.menu.design'|trans, active: false },*/
/*             { name: 'admin.template.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <form class="form-grid form-save-on-edit" data-fc-modules="form-save-on-edit">*/
/*         {% for template in templates %}*/
/*             {% set templateBundle = template.getBundleName %}*/
/*             {% set templateAssetPath = assetPaths[template.hash] %}*/
/*             {% set assetPath = "bundles/#{templateAssetPath}" %}*/
/*             <article class="box-background">*/
/*                 <h4 class="fw-n">{{ templateBundle }}</h4>*/
/*                 {% set imageUrl = asset("#{assetPath}/preview.jpg") %}*/
/*                 <a href="{{ imageUrl }}" data-fc-modules="modal" class="thumbnail mt-s mb-l">*/
/*                     <img width="100%" src="{{ imageUrl }}" />*/
/*                 </a>*/
/*                 <input type="hidden" id="url-{{ templateBundle }}-store.template" value="{{ url('admin_template_assign', { hash: template.hash}) }}" />*/
/*                 <a href="{{ asset("#{assetPath}/preview/index.html") }}" data-fc-modules="modal" data-fc-width="95%" data-fc-height="95%" class="button">*/
/*                     {{ 'admin.template.action.preview'|trans }}*/
/*                 </a>*/
/*                 <div class="fl-r pt-s">*/
/*                     {{ 'admin.template.label.status'|trans }}*/
/*                     <div class="switch">*/
/*                         <input type="radio" name="store.template" id="{{ templateBundle }}-store.template" value="{{ templateBundle }}"{% if template.hash == store.template %} checked="checked"{% endif %} />*/
/*                         <label for="{{ templateBundle }}-store.template" class="mr-n"></label>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </article>*/
/*         {% endfor %}*/
/*     </form>*/
/* */
/* {% endblock content %}*/
/* */
