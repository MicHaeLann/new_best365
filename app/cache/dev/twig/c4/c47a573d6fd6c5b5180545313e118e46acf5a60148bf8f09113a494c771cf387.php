<?php

/* AdminUserBundle:Customer:edit.html.twig */
class __TwigTemplate_50183d3c90aa89cfec1b6a04bfec4606ddf5ce0081739490af62348c61c156e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminUserBundle:Customer:edit.html.twig", 1);
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
        $__internal_ad02544378e9422eaeac98246841291111c0d74c7d438d39728c45b42792c63f = $this->env->getExtension("native_profiler");
        $__internal_ad02544378e9422eaeac98246841291111c0d74c7d438d39728c45b42792c63f->enter($__internal_ad02544378e9422eaeac98246841291111c0d74c7d438d39728c45b42792c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Customer:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "customer");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad02544378e9422eaeac98246841291111c0d74c7d438d39728c45b42792c63f->leave($__internal_ad02544378e9422eaeac98246841291111c0d74c7d438d39728c45b42792c63f_prof);

    }

    // line 8
    public function block_body_down($context, array $blocks = array())
    {
        $__internal_3f5507432a3613b19fc452d91c6678d851fd31bb79fc6fae201e3ecb2fafe5ec = $this->env->getExtension("native_profiler");
        $__internal_3f5507432a3613b19fc452d91c6678d851fd31bb79fc6fae201e3ecb2fafe5ec->enter($__internal_3f5507432a3613b19fc452d91c6678d851fd31bb79fc6fae201e3ecb2fafe5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_down"));

        // line 9
        echo "
    ";
        // line 10
        if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array()) > 0)) {
            // line 11
            echo "
        ";
            // line 12
            $context["author_token"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "token", array());
            // line 13
            echo "        ";
            $context["context"] = "admin";
            // line 14
            echo "        ";
            $context["source"] = ("customer-" . $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array()));
            // line 15
            echo "        <div id=\"box-populi\" class=\"boxpopuli-container\">

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
        
        $__internal_3f5507432a3613b19fc452d91c6678d851fd31bb79fc6fae201e3ecb2fafe5ec->leave($__internal_3f5507432a3613b19fc452d91c6678d851fd31bb79fc6fae201e3ecb2fafe5ec_prof);

    }

    // line 30
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_8c68f0cc2b6d016e5f95c19df1b3646f41190dfa42f2eb6b0f1a57ed45aaa5e0 = $this->env->getExtension("native_profiler");
        $__internal_8c68f0cc2b6d016e5f95c19df1b3646f41190dfa42f2eb6b0f1a57ed45aaa5e0->enter($__internal_8c68f0cc2b6d016e5f95c19df1b3646f41190dfa42f2eb6b0f1a57ed45aaa5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 31
        echo "
    ";
        // line 32
        if ($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array())) {
            // line 33
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_customer_order_list", array("customerId" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"button\">
            <i class=\"icon-shopping-cart\"></i>
            <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.from_user", array("%name%" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "firstname", array()))), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 38
        echo "    <a data-fc-modules=\"side-panel\" data-fc-position=\"right\" data-fc-width=\"60%\" href=\"#box-populi\" class=\"button ph-m\">
        <i class=\"icon-pencil\"></i>
        <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.notes"), "html", null, true);
        echo "</span>
    </a>


";
        
        $__internal_8c68f0cc2b6d016e5f95c19df1b3646f41190dfa42f2eb6b0f1a57ed45aaa5e0->leave($__internal_8c68f0cc2b6d016e5f95c19df1b3646f41190dfa42f2eb6b0f1a57ed45aaa5e0_prof);

    }

    // line 47
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_261b3a822e6bd977339a665c02e9ea43e2b3ebcfdc376642936b590ee44546f8 = $this->env->getExtension("native_profiler");
        $__internal_261b3a822e6bd977339a665c02e9ea43e2b3ebcfdc376642936b590ee44546f8->enter($__internal_261b3a822e6bd977339a665c02e9ea43e2b3ebcfdc376642936b590ee44546f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 48
        echo "
    ";
        // line 49
        $context["title"] = $this->env->getExtension('translator')->trans("admin.customer.plural");
        // line 50
        echo "    ";
        // line 51
        $context["header"] = (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.customer.edit", array("%name%" => $this->getAttribute(        // line 52
(isset($context["customer"]) ? $context["customer"] : null), "fullName", array())))) : ($this->env->getExtension('translator')->trans("admin.customer.new")));
        // line 55
        echo "
    ";
        // line 56
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminUserBundle:Customer:edit.html.twig", 56)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 58
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_customer_list")), 1 => array("name" =>         // line 59
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 62
        echo "
";
        
        $__internal_261b3a822e6bd977339a665c02e9ea43e2b3ebcfdc376642936b590ee44546f8->leave($__internal_261b3a822e6bd977339a665c02e9ea43e2b3ebcfdc376642936b590ee44546f8_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_533fc49c63aa09edf79294486b638c0e9347b168543e48c05946fb8a0b86fd53 = $this->env->getExtension("native_profiler");
        $__internal_533fc49c63aa09edf79294486b638c0e9347b168543e48c05946fb8a0b86fd53->enter($__internal_533fc49c63aa09edf79294486b638c0e9347b168543e48c05946fb8a0b86fd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "
    ";
        // line 68
        if ($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array())) {
            // line 69
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_customer_edit_component", array("id" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id", array()))));
            echo "
    ";
        } else {
            // line 71
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_customer_new_component"));
            echo "
    ";
        }
        // line 73
        echo "
";
        
        $__internal_533fc49c63aa09edf79294486b638c0e9347b168543e48c05946fb8a0b86fd53->leave($__internal_533fc49c63aa09edf79294486b638c0e9347b168543e48c05946fb8a0b86fd53_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Customer:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 73,  190 => 71,  184 => 69,  182 => 68,  179 => 67,  173 => 66,  165 => 62,  163 => 59,  162 => 58,  161 => 56,  158 => 55,  156 => 52,  155 => 51,  153 => 50,  151 => 49,  148 => 48,  142 => 47,  130 => 40,  126 => 38,  120 => 35,  114 => 33,  112 => 32,  109 => 31,  103 => 30,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  62 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  40 => 8,  33 => 1,  31 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'customer',*/
/* } %}*/
/* */
/* {% block body_down %}*/
/* */
/*     {% if customer.id > 0 %}*/
/* */
/*         {% set author_token = app.user.token %}*/
/*         {% set context = 'admin' %}*/
/*         {% set source = "customer-#{customer.id}" %}*/
/*         <div id="box-populi" class="boxpopuli-container">*/
/* */
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
/*     {% if customer.id %}*/
/*         <a href="{{ url('admin_customer_order_list', { customerId: customer.id }) }}" type="button" class="button">*/
/*             <i class="icon-shopping-cart"></i>*/
/*             <span>{{ 'admin.order.from_user'|trans({ '%name%': customer.firstname }) }}</span>*/
/*         </a>*/
/*     {% endif %}*/
/*     <a data-fc-modules="side-panel" data-fc-position="right" data-fc-width="60%" href="#box-populi" class="button ph-m">*/
/*         <i class="icon-pencil"></i>*/
/*         <span>{{ 'admin.order.notes'|trans }}</span>*/
/*     </a>*/
/* */
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.customer.plural'|trans %}*/
/*     {%*/
/*         set header = customer.id*/
/*             ? 'admin.customer.edit'|trans({ '%name%': customer.fullName })*/
/*             : 'admin.customer.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: title, url: url('admin_customer_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if customer.id %}*/
/*         {{ render(url('admin_customer_edit_component', { id: customer.id })) }}*/
/*     {% else %}*/
/*         {{ render(url('admin_customer_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
