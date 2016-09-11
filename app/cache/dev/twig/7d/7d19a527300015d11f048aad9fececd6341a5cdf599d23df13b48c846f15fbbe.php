<?php

/* AdminProductBundle:Product:edit.html.twig */
class __TwigTemplate_ceb9ab44d5560e0c432c732482298209e24e9cd171ad29fccd4fe00a3e87fd9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Product:edit.html.twig", 1);
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
        $__internal_a72a8c1e23e6d4818ca0eb6ee80f2566b593d490222574e4c6558fb4c3da9ef2 = $this->env->getExtension("native_profiler");
        $__internal_a72a8c1e23e6d4818ca0eb6ee80f2566b593d490222574e4c6558fb4c3da9ef2->enter($__internal_a72a8c1e23e6d4818ca0eb6ee80f2566b593d490222574e4c6558fb4c3da9ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Product:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "product");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a72a8c1e23e6d4818ca0eb6ee80f2566b593d490222574e4c6558fb4c3da9ef2->leave($__internal_a72a8c1e23e6d4818ca0eb6ee80f2566b593d490222574e4c6558fb4c3da9ef2_prof);

    }

    // line 8
    public function block_body_down($context, array $blocks = array())
    {
        $__internal_4b7205748b5773a53d61e399644ef12c98fa4d5bdfa2a0b62d26c28b68bacdf2 = $this->env->getExtension("native_profiler");
        $__internal_4b7205748b5773a53d61e399644ef12c98fa4d5bdfa2a0b62d26c28b68bacdf2->enter($__internal_4b7205748b5773a53d61e399644ef12c98fa4d5bdfa2a0b62d26c28b68bacdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_down"));

        // line 9
        echo "    ";
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()) > 0)) {
            // line 10
            echo "    ";
            $context["author_token"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "token", array());
            // line 11
            echo "    ";
            $context["context"] = "admin";
            // line 12
            echo "    ";
            $context["source"] = ("product-" . $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()));
            // line 13
            echo "    <div id=\"box-populi\" class=\"boxpopuli-container hidden\">
        <div class=\"boxpopuli-overflow\" data-fc-modules=\"boxpopuli\"
             data-token=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["author_token"]) ? $context["author_token"] : null), "html", null, true);
            echo "\"
             data-author-name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullname", array()), "html", null, true);
            echo "\"
             data-author-email=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
            echo "\"
             data-context=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["context"]) ? $context["context"] : null), "html", null, true);
            echo "\"
             data-source=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["source"]) ? $context["source"] : null), "html", null, true);
            echo "\"
             data-route-list=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi_comments_list", array("source" => (isset($context["source"]) ? $context["source"] : null), "context" => (isset($context["context"]) ? $context["context"] : null))), "html", null, true);
            echo "\"
             data-route-add=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi_comments_add", array("source" => (isset($context["source"]) ? $context["source"] : null), "context" => (isset($context["context"]) ? $context["context"] : null), "authorToken" => (isset($context["author_token"]) ? $context["author_token"] : null))), "html", null, true);
            echo "\"
                ></div>
    </div>
    ";
        }
        
        $__internal_4b7205748b5773a53d61e399644ef12c98fa4d5bdfa2a0b62d26c28b68bacdf2->leave($__internal_4b7205748b5773a53d61e399644ef12c98fa4d5bdfa2a0b62d26c28b68bacdf2_prof);

    }

    // line 27
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_31a5cfa14e19cdb1fabc6a2e9243274f4fc99b53a7aae122a174173c02f05609 = $this->env->getExtension("native_profiler");
        $__internal_31a5cfa14e19cdb1fabc6a2e9243274f4fc99b53a7aae122a174173c02f05609->enter($__internal_31a5cfa14e19cdb1fabc6a2e9243274f4fc99b53a7aae122a174173c02f05609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 28
        echo "
    ";
        // line 29
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()) > 0)) {
            // line 30
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_product_view", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug", array()))), "html", null, true);
            echo "\" data-fc-modules=\"modal\" class=\"button\">
            <i class=\"icon-eye\"></i>
            <span>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.in_store"), "html", null, true);
            echo "</span>
        </a>
        <a data-fc-modules=\"modal\" href=\"#metrics-panel\" class=\"button\">
            <i class=\"icon-bar-chart-o\"></i>
            <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.show_metrics"), "html", null, true);
            echo "</span>
        </a>
        <a data-fc-modules=\"side-panel\" data-fc-position=\"right\" data-fc-width=\"60%\"  href=\"#box-populi\" class=\"button ph-m\">
            <i class=\"icon-pencil\"></i>
            <span>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.note"), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 43
        echo "
";
        
        $__internal_31a5cfa14e19cdb1fabc6a2e9243274f4fc99b53a7aae122a174173c02f05609->leave($__internal_31a5cfa14e19cdb1fabc6a2e9243274f4fc99b53a7aae122a174173c02f05609_prof);

    }

    // line 47
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8bf8729cdea0f24a5e2acd3ac0fbc413b5814e18da8b8026e4c29056952ef9c8 = $this->env->getExtension("native_profiler");
        $__internal_8bf8729cdea0f24a5e2acd3ac0fbc413b5814e18da8b8026e4c29056952ef9c8->enter($__internal_8bf8729cdea0f24a5e2acd3ac0fbc413b5814e18da8b8026e4c29056952ef9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 48
        echo "
    ";
        // line 49
        $context["title"] = $this->env->getExtension('translator')->trans("admin.product.plural");
        // line 50
        echo "    ";
        // line 51
        $context["header"] = (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.product.edit", array("%name%" => $this->getAttribute(        // line 52
(isset($context["product"]) ? $context["product"] : null), "name", array())))) : ($this->env->getExtension('translator')->trans("admin.product.new")));
        // line 55
        echo "
    ";
        // line 56
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Product:edit.html.twig", 56)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 58
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_product_list")), 1 => array("name" =>         // line 59
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 62
        echo "
";
        
        $__internal_8bf8729cdea0f24a5e2acd3ac0fbc413b5814e18da8b8026e4c29056952ef9c8->leave($__internal_8bf8729cdea0f24a5e2acd3ac0fbc413b5814e18da8b8026e4c29056952ef9c8_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6de4731aa784740ecdc8d941460fd4fe89ae4a6dae7f73bb3b793c7d325e25d = $this->env->getExtension("native_profiler");
        $__internal_a6de4731aa784740ecdc8d941460fd4fe89ae4a6dae7f73bb3b793c7d325e25d->enter($__internal_a6de4731aa784740ecdc8d941460fd4fe89ae4a6dae7f73bb3b793c7d325e25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "
    ";
        // line 68
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())) {
            // line 69
            echo "
        ";
            // line 70
            if ((null === $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "principalCategory", array()))) {
                // line 71
                echo "            <p class=\"msg-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.error.no_category"), "html", null, true);
                echo "</p>
        ";
            }
            // line 73
            echo "
        ";
            // line 74
            if ((null === $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "manufacturer", array()))) {
                // line 75
                echo "            <p class=\"msg-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.error.no_manufacturer"), "html", null, true);
                echo "</p>
        ";
            }
            // line 77
            echo "
        ";
            // line 78
            if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "amount", array()) < 0)) {
                // line 79
                echo "            <p class=\"msg-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.error.price_negative"), "html", null, true);
                echo "</p>
        ";
            }
            // line 81
            echo "
        ";
            // line 82
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_product_edit_component", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))));
            echo "
    ";
        } else {
            // line 84
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_product_new_component"));
            echo "
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())) {
            // line 88
            echo "        <div class=\"hidden-placeholder\">
            <div id=\"metrics-panel\" class=\"box-background\">
                <h2>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metrics.info.visitors"), "html", null, true);
            echo "</h2>
                ";
            // line 91
            $this->loadTemplate("AdminMetricBundle:Metric:metricLine.html.twig", "AdminProductBundle:Product:edit.html.twig", 91)->display(array_merge($context, array("tracker" => $this->getAttribute(            // line 92
(isset($context["store"]) ? $context["store"] : null), "tracker", array()), "event" => ("pv_store_product_view_" . $this->getAttribute(            // line 93
(isset($context["product"]) ? $context["product"] : null), "id", array())), "intervalContainer" => $this->env->getExtension('metric_intervals_extension')->createIntervalContainer(3))));
            // line 96
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_a6de4731aa784740ecdc8d941460fd4fe89ae4a6dae7f73bb3b793c7d325e25d->leave($__internal_a6de4731aa784740ecdc8d941460fd4fe89ae4a6dae7f73bb3b793c7d325e25d_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 96,  247 => 93,  246 => 92,  245 => 91,  241 => 90,  237 => 88,  235 => 87,  232 => 86,  226 => 84,  221 => 82,  218 => 81,  212 => 79,  210 => 78,  207 => 77,  201 => 75,  199 => 74,  196 => 73,  190 => 71,  188 => 70,  185 => 69,  183 => 68,  180 => 67,  174 => 66,  166 => 62,  164 => 59,  163 => 58,  162 => 56,  159 => 55,  157 => 52,  156 => 51,  154 => 50,  152 => 49,  149 => 48,  143 => 47,  135 => 43,  129 => 40,  122 => 36,  115 => 32,  109 => 30,  107 => 29,  104 => 28,  98 => 27,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  40 => 8,  33 => 1,  31 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'product',*/
/* } %}*/
/* */
/* {% block body_down %}*/
/*     {% if product.id > 0 %}*/
/*     {% set author_token = app.user.token %}*/
/*     {% set context = "admin" %}*/
/*     {% set source = "product-#{product.id}" %}*/
/*     <div id="box-populi" class="boxpopuli-container hidden">*/
/*         <div class="boxpopuli-overflow" data-fc-modules="boxpopuli"*/
/*              data-token="{{ author_token }}"*/
/*              data-author-name="{{ app.user.fullname }}"*/
/*              data-author-email="{{ app.user.email }}"*/
/*              data-context="{{ context }}"*/
/*              data-source="{{ source }}"*/
/*              data-route-list="{{ url('elcodi_comments_list', { source: source, context: context }) }}"*/
/*              data-route-add="{{ url('elcodi_comments_add', { source: source, context: context, authorToken: author_token }) }}"*/
/*                 ></div>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock body_down %}*/
/* */
/* {% block header_actions %}*/
/* */
/*     {% if product.id > 0 %}*/
/*         <a target="_blank" href="{{ url('store_product_view', { id: product.id, slug: product.slug }) }}" data-fc-modules="modal" class="button">*/
/*             <i class="icon-eye"></i>*/
/*             <span>{{ 'admin.product.in_store'|trans }}</span>*/
/*         </a>*/
/*         <a data-fc-modules="modal" href="#metrics-panel" class="button">*/
/*             <i class="icon-bar-chart-o"></i>*/
/*             <span>{{ 'admin.product.show_metrics'|trans }}</span>*/
/*         </a>*/
/*         <a data-fc-modules="side-panel" data-fc-position="right" data-fc-width="60%"  href="#box-populi" class="button ph-m">*/
/*             <i class="icon-pencil"></i>*/
/*             <span>{{ 'admin.product.note'|trans }}</span>*/
/*         </a>*/
/*     {% endif %}*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.product.plural'|trans %}*/
/*     {%*/
/*         set header = product.id*/
/*             ? 'admin.product.edit'|trans({ '%name%': product.name })*/
/*             : 'admin.product.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: title, url: url('admin_product_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if product.id %}*/
/* */
/*         {% if product.principalCategory is null %}*/
/*             <p class="msg-warning">{{ 'admin.product.error.no_category'|trans }}</p>*/
/*         {% endif %}*/
/* */
/*         {% if product.manufacturer is null %}*/
/*             <p class="msg-warning">{{ 'admin.product.error.no_manufacturer'|trans }}</p>*/
/*         {% endif %}*/
/* */
/*         {% if product.price.amount < 0 %}*/
/*             <p class="msg-warning">{{ 'admin.product.error.price_negative'|trans }}</p>*/
/*         {% endif %}*/
/* */
/*         {{ render(url('admin_product_edit_component', { id: product.id })) }}*/
/*     {% else %}*/
/*         {{ render(url('admin_product_new_component')) }}*/
/*     {% endif %}*/
/* */
/*     {% if product.id %}*/
/*         <div class="hidden-placeholder">*/
/*             <div id="metrics-panel" class="box-background">*/
/*                 <h2>{{ 'admin.metrics.info.visitors'|trans }}</h2>*/
/*                 {% include 'AdminMetricBundle:Metric:metricLine.html.twig' with {*/
/*                     tracker: store.tracker,*/
/*                     event: "pv_store_product_view_#{product.id}",*/
/*                     intervalContainer: metric_create_interval_container(3),*/
/*                 } %}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock content %}*/
/* */
