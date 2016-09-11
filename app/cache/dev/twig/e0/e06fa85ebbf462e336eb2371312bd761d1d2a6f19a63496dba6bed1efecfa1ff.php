<?php

/* AdminPageBundle:BlogPost:list.html.twig */
class __TwigTemplate_c239796874a625724ab5255d6e0a0c73097fb0ffd3656ace2ab78a345e5f422e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPageBundle:BlogPost:list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'header_actions' => array($this, 'block_header_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c8ff6a1519f357cf2dd5d275adfadc6bdded372c1eabdfa2f87f82d3ecffd04 = $this->env->getExtension("native_profiler");
        $__internal_4c8ff6a1519f357cf2dd5d275adfadc6bdded372c1eabdfa2f87f82d3ecffd04->enter($__internal_4c8ff6a1519f357cf2dd5d275adfadc6bdded372c1eabdfa2f87f82d3ecffd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:BlogPost:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "blog_post");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8ff6a1519f357cf2dd5d275adfadc6bdded372c1eabdfa2f87f82d3ecffd04->leave($__internal_4c8ff6a1519f357cf2dd5d275adfadc6bdded372c1eabdfa2f87f82d3ecffd04_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_14ef1ea5f5bfb1a86e5769d4557ee81daae3d2e151f3c1a1f7017b5a558ba962 = $this->env->getExtension("native_profiler");
        $__internal_14ef1ea5f5bfb1a86e5769d4557ee81daae3d2e151f3c1a1f7017b5a558ba962->enter($__internal_14ef1ea5f5bfb1a86e5769d4557ee81daae3d2e151f3c1a1f7017b5a558ba962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPageBundle:BlogPost:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.communication.single"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.blog_post.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_14ef1ea5f5bfb1a86e5769d4557ee81daae3d2e151f3c1a1f7017b5a558ba962->leave($__internal_14ef1ea5f5bfb1a86e5769d4557ee81daae3d2e151f3c1a1f7017b5a558ba962_prof);

    }

    // line 21
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_80cc4645091e8004395a7f846b8344c9a2bd4d43c660fb4d00d3eccb6cb0316e = $this->env->getExtension("native_profiler");
        $__internal_80cc4645091e8004395a7f846b8344c9a2bd4d43c660fb4d00d3eccb6cb0316e->enter($__internal_80cc4645091e8004395a7f846b8344c9a2bd4d43c660fb4d00d3eccb6cb0316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_blog_post_new");
        echo "\" class=\"button-primary\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.blog_post.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_80cc4645091e8004395a7f846b8344c9a2bd4d43c660fb4d00d3eccb6cb0316e->leave($__internal_80cc4645091e8004395a7f846b8344c9a2bd4d43c660fb4d00d3eccb6cb0316e_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0173d1bbc6d4d394472924121076b286ebd29cadc6968d28a77f936a7ac292a = $this->env->getExtension("native_profiler");
        $__internal_f0173d1bbc6d4d394472924121076b286ebd29cadc6968d28a77f936a7ac292a->enter($__internal_f0173d1bbc6d4d394472924121076b286ebd29cadc6968d28a77f936a7ac292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_blog_post_list_component", array("page" =>         // line 37
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 38
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 39
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 40
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 42
        echo "
        </div>
    </div>

";
        
        $__internal_f0173d1bbc6d4d394472924121076b286ebd29cadc6968d28a77f936a7ac292a->leave($__internal_f0173d1bbc6d4d394472924121076b286ebd29cadc6968d28a77f936a7ac292a_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:BlogPost:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  98 => 40,  97 => 39,  96 => 38,  95 => 37,  94 => 35,  89 => 32,  83 => 31,  72 => 25,  67 => 23,  64 => 22,  58 => 21,  50 => 17,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'blog_post',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.communication.single'|trans, active: false },*/
/*             { name: 'admin.blog_post.plural'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_blog_post_new') }}" class="button-primary">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.blog_post.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{*/
/*                 render(url('admin_blog_post_list_component', {*/
/*                     page: page,*/
/*                     limit: limit,*/
/*                     orderByField: orderByField,*/
/*                     orderByDirection: orderByDirection,*/
/*                 }))*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
