<?php

/* AdminNewsletterBundle:NewsletterSubscription/Component:listComponent.html.twig */
class __TwigTemplate_40a74ba241160fb1c3bdd39e160672c74d033911288cee6c8b2a733567fedb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminNewsletterBundle:NewsletterSubscription/Component:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'table_head' => array($this, 'block_table_head'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_paginator_links' => array($this, 'block_table_paginator_links'),
            'table_buttons' => array($this, 'block_table_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2af23dd04453db9e0bce688195c6c45332d1409b39b50bb91bc95343b5f9cf2 = $this->env->getExtension("native_profiler");
        $__internal_f2af23dd04453db9e0bce688195c6c45332d1409b39b50bb91bc95343b5f9cf2->enter($__internal_f2af23dd04453db9e0bce688195c6c45332d1409b39b50bb91bc95343b5f9cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription/Component:listComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2af23dd04453db9e0bce688195c6c45332d1409b39b50bb91bc95343b5f9cf2->leave($__internal_f2af23dd04453db9e0bce688195c6c45332d1409b39b50bb91bc95343b5f9cf2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15a036a895c682776ed9febf411842c4afb1b5f5a60bcb5f17b3fe1fa62a5c46 = $this->env->getExtension("native_profiler");
        $__internal_15a036a895c682776ed9febf411842c4afb1b5f5a60bcb5f17b3fe1fa62a5c46->enter($__internal_15a036a895c682776ed9febf411842c4afb1b5f5a60bcb5f17b3fe1fa62a5c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NewsletterSubscription list"), "html", null, true);
        echo "
";
        
        $__internal_15a036a895c682776ed9febf411842c4afb1b5f5a60bcb5f17b3fe1fa62a5c46->leave($__internal_15a036a895c682776ed9febf411842c4afb1b5f5a60bcb5f17b3fe1fa62a5c46_prof);

    }

    // line 7
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_f517412f591655ff0c3c827f5b9234dcc21655d27cf2d02c59ee826fe7e37391 = $this->env->getExtension("native_profiler");
        $__internal_f517412f591655ff0c3c827f5b9234dcc21655d27cf2d02c59ee826fe7e37391->enter($__internal_f517412f591655ff0c3c827f5b9234dcc21655d27cf2d02c59ee826fe7e37391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminNewsletterBundle:NewsletterSubscription/Component:listComponent.html.twig", 9)->display(array_merge($context, array("rows" => array("Id" => array("width" => "25"), "Language" => array(), "Email" => array(), "Reason" => array("sorting_disabled" => true), "Enabled" => array("width" => "25")), "class" => "newsletter_subscription")));
        // line 19
        echo "
";
        
        $__internal_f517412f591655ff0c3c827f5b9234dcc21655d27cf2d02c59ee826fe7e37391->leave($__internal_f517412f591655ff0c3c827f5b9234dcc21655d27cf2d02c59ee826fe7e37391_prof);

    }

    // line 22
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_24295d79a4f45b673a6a1aea7e33dfbe46806b325fbbe5364807c2363f91470c = $this->env->getExtension("native_profiler");
        $__internal_24295d79a4f45b673a6a1aea7e33dfbe46806b325fbbe5364807c2363f91470c->enter($__internal_24295d79a4f45b673a6a1aea7e33dfbe46806b325fbbe5364807c2363f91470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 23
        echo "
    <td>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_view", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "language", array()), "name", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entoty"]) ? $context["entoty"] : null), "reason", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 39
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            echo "<span class=\"label label-success\">true</span>";
        } else {
            echo "<span class=\"label label-danger\">false</span>";
        }
        // line 40
        echo "    </td>

    ";
        // line 42
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminNewsletterBundle:NewsletterSubscription/Component:listComponent.html.twig", 42)->display(array_merge($context, array("entity" =>         // line 43
(isset($context["entity"]) ? $context["entity"] : null), "class" => "newsletter_subscription")));
        // line 46
        echo "
";
        
        $__internal_24295d79a4f45b673a6a1aea7e33dfbe46806b325fbbe5364807c2363f91470c->leave($__internal_24295d79a4f45b673a6a1aea7e33dfbe46806b325fbbe5364807c2363f91470c_prof);

    }

    // line 50
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_15d58579c4a44dc6da7ca399e29d258727c527b039542e1ff794627b47b2599f = $this->env->getExtension("native_profiler");
        $__internal_15d58579c4a44dc6da7ca399e29d258727c527b039542e1ff794627b47b2599f->enter($__internal_15d58579c4a44dc6da7ca399e29d258727c527b039542e1ff794627b47b2599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 51
        echo "
    ";
        // line 52
        $context["url"] = "admin_newsletter_subscription_list";
        // line 53
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_15d58579c4a44dc6da7ca399e29d258727c527b039542e1ff794627b47b2599f->leave($__internal_15d58579c4a44dc6da7ca399e29d258727c527b039542e1ff794627b47b2599f_prof);

    }

    // line 57
    public function block_table_buttons($context, array $blocks = array())
    {
        $__internal_d9671dde0b1461b3f3702eda4203564e8ab759e6ee39740309f2550a835b8ffc = $this->env->getExtension("native_profiler");
        $__internal_d9671dde0b1461b3f3702eda4203564e8ab759e6ee39740309f2550a835b8ffc->enter($__internal_d9671dde0b1461b3f3702eda4203564e8ab759e6ee39740309f2550a835b8ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_buttons"));

        // line 58
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_new");
        echo "\"type=\"button\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New newsletter subscription"), "html", null, true);
        echo "</a>
";
        
        $__internal_d9671dde0b1461b3f3702eda4203564e8ab759e6ee39740309f2550a835b8ffc->leave($__internal_d9671dde0b1461b3f3702eda4203564e8ab759e6ee39740309f2550a835b8ffc_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription/Component:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  155 => 57,  144 => 53,  142 => 52,  139 => 51,  133 => 50,  125 => 46,  123 => 43,  122 => 42,  118 => 40,  112 => 39,  106 => 36,  100 => 33,  94 => 30,  87 => 26,  83 => 25,  79 => 23,  73 => 22,  65 => 19,  63 => 9,  60 => 8,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'NewsletterSubscription list'|trans }}*/
/* {% endblock title %}*/
/* */
/* {% block table_head %}*/
/* */
/*     {% include "@AdminCore/Tables/head.html.twig" with {*/
/*         rows: {*/
/*             "Id": {width:"25"},*/
/*             "Language": {},*/
/*             "Email": {},*/
/*             "Reason": {sorting_disabled: true},*/
/*             "Enabled": {width:"25"},*/
/*         },*/
/*         class: "newsletter_subscription",*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url("admin_newsletter_subscription_view", {"id": entity.id}) }}">*/
/*             {{ entity.id }}*/
/*         </a>*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.language.name }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entity.email }}*/
/*     </td>*/
/*     <td>*/
/*         {{ entoty.reason }}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.enabled %}<span class="label label-success">true</span>{% else %}<span class="label label-danger">false</span>{% endif %}*/
/*     </td>*/
/* */
/*     {% include "@AdminCore/Tables/actions.html.twig" with {*/
/*     entity: entity,*/
/*     class: "newsletter_subscription",*/
/*     } %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_newsletter_subscription_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
/* {% block table_buttons %}*/
/*     <a href="{{ url("admin_newsletter_subscription_new") }}"type="button" class="btn btn-success">{{ "New newsletter subscription"|trans }}</a>*/
/* {% endblock table_buttons %}*/
/* */
