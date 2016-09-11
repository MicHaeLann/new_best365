<?php

/* AdminPageBundle:BlogPost:edit.html.twig */
class __TwigTemplate_30518bc468d1a1804f2fa8b08faa6136bc1f453978aa9f3f850b1d5808cb8fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPageBundle:BlogPost:edit.html.twig", 1);
        $this->blocks = array(
            'body_down' => array($this, 'block_body_down'),
            'header_actions' => array($this, 'block_header_actions'),
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
        $__internal_74235b2acf613aad08bdc82020674287168a3b7cbf732be3a6d8abe0535c484b = $this->env->getExtension("native_profiler");
        $__internal_74235b2acf613aad08bdc82020674287168a3b7cbf732be3a6d8abe0535c484b->enter($__internal_74235b2acf613aad08bdc82020674287168a3b7cbf732be3a6d8abe0535c484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:BlogPost:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "blog_post");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74235b2acf613aad08bdc82020674287168a3b7cbf732be3a6d8abe0535c484b->leave($__internal_74235b2acf613aad08bdc82020674287168a3b7cbf732be3a6d8abe0535c484b_prof);

    }

    // line 8
    public function block_body_down($context, array $blocks = array())
    {
        $__internal_445fd8044cd782656d586e42033322bff1cf3a1c5188d46aba15b3b71f00e4eb = $this->env->getExtension("native_profiler");
        $__internal_445fd8044cd782656d586e42033322bff1cf3a1c5188d46aba15b3b71f00e4eb->enter($__internal_445fd8044cd782656d586e42033322bff1cf3a1c5188d46aba15b3b71f00e4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_down"));

        // line 9
        echo "
    ";
        // line 10
        if (($this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array()) > 0)) {
            // line 11
            echo "        ";
            $context["author_token"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "token", array());
            // line 12
            echo "        ";
            $context["context"] = "admin";
            // line 13
            echo "        ";
            $context["source"] = ("blog-post-" . $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array()));
            // line 14
            echo "
        <a data-fc-modules=\"side-panel\" data-fc-position=\"right\" data-fc-width=\"60%\" data-fc-tab-top=\"48%\" href=\"#box-populi\" data-fc-tab=\"true\" class=\"button-primary ph-m\"><i class=\"icon-comment\"></i> </a>
        <div id=\"box-populi\" class=\"boxpopuli-container\">
            <div class=\"boxpopuli-overflow\" data-fc-modules=\"boxpopuli\"
                 data-token=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["author_token"]) ? $context["author_token"] : null), "html", null, true);
            echo "\"
                 data-author-name=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullname", array()), "html", null, true);
            echo "\"
                 data-author-email=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
            echo "\"
                 data-context=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["context"]) ? $context["context"] : null), "html", null, true);
            echo "\"
                 data-source=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["source"]) ? $context["source"] : null), "html", null, true);
            echo "\"
                 data-route-list=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi_comments_list", array("source" => (isset($context["source"]) ? $context["source"] : null), "context" => (isset($context["context"]) ? $context["context"] : null))), "html", null, true);
            echo "\"
                 data-route-add=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi_comments_add", array("source" => (isset($context["source"]) ? $context["source"] : null), "context" => (isset($context["context"]) ? $context["context"] : null), "authorToken" => (isset($context["author_token"]) ? $context["author_token"] : null))), "html", null, true);
            echo "\"
                    ></div>
        </div>
    ";
        }
        
        $__internal_445fd8044cd782656d586e42033322bff1cf3a1c5188d46aba15b3b71f00e4eb->leave($__internal_445fd8044cd782656d586e42033322bff1cf3a1c5188d46aba15b3b71f00e4eb_prof);

    }

    // line 30
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_39b014b5594a913154717e6f852fda93566ef00ed9bc0d5e69681af01d35d628 = $this->env->getExtension("native_profiler");
        $__internal_39b014b5594a913154717e6f852fda93566ef00ed9bc0d5e69681af01d35d628->enter($__internal_39b014b5594a913154717e6f852fda93566ef00ed9bc0d5e69681af01d35d628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 31
        echo "
    ";
        // line 32
        if (($this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array()) > 0)) {
            // line 33
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "path", array()))), "html", null, true);
            echo "\" class=\"button-primary\">
            <i class=\"icon-eye\"></i>
            <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.blog_post.in_store"), "html", null, true);
            echo "</span>
        </a>
        <a data-fc-modules=\"modal\" href=\"#metrics-panel\" class=\"button-secondary\">
            <i class=\"icon-bar-chart-o\"></i>
            <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metrics.action.show"), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 42
        echo "
";
        
        $__internal_39b014b5594a913154717e6f852fda93566ef00ed9bc0d5e69681af01d35d628->leave($__internal_39b014b5594a913154717e6f852fda93566ef00ed9bc0d5e69681af01d35d628_prof);

    }

    // line 46
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_155e809e2e6d7cb5a46115b4a85841fee1a3032c06b4f083167c4c23a240c563 = $this->env->getExtension("native_profiler");
        $__internal_155e809e2e6d7cb5a46115b4a85841fee1a3032c06b4f083167c4c23a240c563->enter($__internal_155e809e2e6d7cb5a46115b4a85841fee1a3032c06b4f083167c4c23a240c563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 47
        echo "
    ";
        // line 48
        $context["title"] = $this->env->getExtension('translator')->trans("admin.blog_post.plural");
        // line 49
        echo "    ";
        // line 50
        $context["header"] = (($this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.blog_post.edit", array("%name%" => $this->getAttribute(        // line 51
(isset($context["blog_post"]) ? $context["blog_post"] : null), "title", array())))) : ($this->env->getExtension('translator')->trans("admin.blog_post.new")));
        // line 54
        echo "
    ";
        // line 55
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPageBundle:BlogPost:edit.html.twig", 55)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.communication.single"), "active" => false), 1 => array("name" =>         // line 58
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_blog_post_list")), 2 => array("name" =>         // line 59
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 62
        echo "
";
        
        $__internal_155e809e2e6d7cb5a46115b4a85841fee1a3032c06b4f083167c4c23a240c563->leave($__internal_155e809e2e6d7cb5a46115b4a85841fee1a3032c06b4f083167c4c23a240c563_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc3a351f10f99358125feaef493a504c6beb3ade985c82ce2d60cfedc2612407 = $this->env->getExtension("native_profiler");
        $__internal_cc3a351f10f99358125feaef493a504c6beb3ade985c82ce2d60cfedc2612407->enter($__internal_cc3a351f10f99358125feaef493a504c6beb3ade985c82ce2d60cfedc2612407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "
    ";
        // line 68
        if ($this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array())) {
            // line 69
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_blog_post_edit_component", array("id" => $this->getAttribute(            // line 71
(isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array()))));
            // line 73
            echo "

        <div class=\"hidden-placeholder\">
            <div id=\"metrics-panel\" class=\"box-background\">
                <h2>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metrics.info.visitors"), "html", null, true);
            echo "</h2>
                ";
            // line 78
            $this->loadTemplate("AdminMetricBundle:Metric:metricLine.html.twig", "AdminPageBundle:BlogPost:edit.html.twig", 78)->display(array_merge($context, array("tracker" => $this->getAttribute(            // line 79
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "event" => ("pv_store_blog_post_view_" . $this->getAttribute(            // line 80
(isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array())), "intervalContainer" => $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(3))));
            // line 83
            echo "            </div>
        </div>

    ";
        } else {
            // line 87
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_blog_post_new_component"));
            echo "
    ";
        }
        // line 89
        echo "
";
        
        $__internal_cc3a351f10f99358125feaef493a504c6beb3ade985c82ce2d60cfedc2612407->leave($__internal_cc3a351f10f99358125feaef493a504c6beb3ade985c82ce2d60cfedc2612407_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:BlogPost:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 89,  206 => 87,  200 => 83,  198 => 80,  197 => 79,  196 => 78,  192 => 77,  186 => 73,  184 => 71,  182 => 69,  180 => 68,  177 => 67,  171 => 66,  163 => 62,  161 => 59,  160 => 58,  159 => 55,  156 => 54,  154 => 51,  153 => 50,  151 => 49,  149 => 48,  146 => 47,  140 => 46,  132 => 42,  126 => 39,  119 => 35,  113 => 33,  111 => 32,  108 => 31,  102 => 30,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  40 => 8,  33 => 1,  31 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'blog_post',*/
/* } %}*/
/* */
/* {% block body_down %}*/
/* */
/*     {% if blog_post.id > 0 %}*/
/*         {% set author_token = app.user.token %}*/
/*         {% set context = 'admin' %}*/
/*         {% set source = "blog-post-#{blog_post.id}" %}*/
/* */
/*         <a data-fc-modules="side-panel" data-fc-position="right" data-fc-width="60%" data-fc-tab-top="48%" href="#box-populi" data-fc-tab="true" class="button-primary ph-m"><i class="icon-comment"></i> </a>*/
/*         <div id="box-populi" class="boxpopuli-container">*/
/*             <div class="boxpopuli-overflow" data-fc-modules="boxpopuli"*/
/*                  data-token="{{ author_token }}"*/
/*                  data-author-name="{{ app.user.fullname }}"*/
/*                  data-author-email="{{ app.user.email }}"*/
/*                  data-context="{{ context }}"*/
/*                  data-source="{{ source }}"*/
/*                  data-route-list="{{ url('elcodi_comments_list', { source: source, context: context }) }}"*/
/*                  data-route-add="{{ url('elcodi_comments_add', { source: source, context: context, authorToken: author_token }) }}"*/
/*                     ></div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock body_down %}*/
/* */
/* {% block header_actions %}*/
/* */
/*     {% if blog_post.id > 0 %}*/
/*         <a target="_blank" href="{{ url('store_blog_post_view', { id: blog_post.id, slug: blog_post.path }) }}" class="button-primary">*/
/*             <i class="icon-eye"></i>*/
/*             <span>{{ 'admin.blog_post.in_store'|trans }}</span>*/
/*         </a>*/
/*         <a data-fc-modules="modal" href="#metrics-panel" class="button-secondary">*/
/*             <i class="icon-bar-chart-o"></i>*/
/*             <span>{{ 'admin.metrics.action.show'|trans }}</span>*/
/*         </a>*/
/*     {% endif %}*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.blog_post.plural'|trans %}*/
/*     {%*/
/*         set header = blog_post.id*/
/*             ? 'admin.blog_post.edit'|trans({ '%name%': blog_post.title })*/
/*             : 'admin.blog_post.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.communication.single'|trans, active: false },*/
/*             { name: title, url: url('admin_blog_post_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if blog_post.id %}*/
/*         {{*/
/*             render(url('admin_blog_post_edit_component', {*/
/*                 id: blog_post.id,*/
/*             }))*/
/*         }}*/
/* */
/*         <div class="hidden-placeholder">*/
/*             <div id="metrics-panel" class="box-background">*/
/*                 <h2>{{ 'admin.metrics.info.visitors'|trans }}</h2>*/
/*                 {% include 'AdminMetricBundle:Metric:metricLine.html.twig' with {*/
/*                     tracker: store.tracker,*/
/*                     event: "pv_store_blog_post_view_#{blog_post.id}",*/
/*                     intervalContainer: metric_create_interval_container(3),*/
/*                 } %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% else %}*/
/*         {{ render(url('admin_blog_post_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
