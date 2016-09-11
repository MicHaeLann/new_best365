<?php

/* AdminPageBundle:Page:list.html.twig */
class __TwigTemplate_932cf6b1c146055a3855c94c6a1ba1a5f3bfd1668c5eb6ae1a51808997fc3fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPageBundle:Page:list.html.twig", 1);
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
        $__internal_ff75def2d2592c47f7889ab257321d71a4f7928cd7ed169fae10b0108a3e11a3 = $this->env->getExtension("native_profiler");
        $__internal_ff75def2d2592c47f7889ab257321d71a4f7928cd7ed169fae10b0108a3e11a3->enter($__internal_ff75def2d2592c47f7889ab257321d71a4f7928cd7ed169fae10b0108a3e11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Page:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "page");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff75def2d2592c47f7889ab257321d71a4f7928cd7ed169fae10b0108a3e11a3->leave($__internal_ff75def2d2592c47f7889ab257321d71a4f7928cd7ed169fae10b0108a3e11a3_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5d0823ece9b38be704fc3a1b2948b6b5b530ae593a65e25dd0c51dae75db6562 = $this->env->getExtension("native_profiler");
        $__internal_5d0823ece9b38be704fc3a1b2948b6b5b530ae593a65e25dd0c51dae75db6562->enter($__internal_5d0823ece9b38be704fc3a1b2948b6b5b530ae593a65e25dd0c51dae75db6562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPageBundle:Page:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.communication.single"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.page.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_5d0823ece9b38be704fc3a1b2948b6b5b530ae593a65e25dd0c51dae75db6562->leave($__internal_5d0823ece9b38be704fc3a1b2948b6b5b530ae593a65e25dd0c51dae75db6562_prof);

    }

    // line 21
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_9c663c88a4fd64b702d27ee366509071d7040bc8b251280eec0c1252e12a678b = $this->env->getExtension("native_profiler");
        $__internal_9c663c88a4fd64b702d27ee366509071d7040bc8b251280eec0c1252e12a678b->enter($__internal_9c663c88a4fd64b702d27ee366509071d7040bc8b251280eec0c1252e12a678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_page_new");
        echo "\" class=\"button-primary\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_9c663c88a4fd64b702d27ee366509071d7040bc8b251280eec0c1252e12a678b->leave($__internal_9c663c88a4fd64b702d27ee366509071d7040bc8b251280eec0c1252e12a678b_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1cb42ff6c7ee77220ad291fb8844eb0c943685624cb79a7e1caac335d2311b9 = $this->env->getExtension("native_profiler");
        $__internal_e1cb42ff6c7ee77220ad291fb8844eb0c943685624cb79a7e1caac335d2311b9->enter($__internal_e1cb42ff6c7ee77220ad291fb8844eb0c943685624cb79a7e1caac335d2311b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_page_list_component", array("page" =>         // line 38
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 39
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 40
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 41
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 44
        echo "
        </div>
    </div>

";
        
        $__internal_e1cb42ff6c7ee77220ad291fb8844eb0c943685624cb79a7e1caac335d2311b9->leave($__internal_e1cb42ff6c7ee77220ad291fb8844eb0c943685624cb79a7e1caac335d2311b9_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Page:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  98 => 41,  97 => 40,  96 => 39,  95 => 38,  94 => 35,  89 => 32,  83 => 31,  72 => 25,  67 => 23,  64 => 22,  58 => 21,  50 => 17,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'page',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.communication.single'|trans, active: false },*/
/*             { name: 'admin.page.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_page_new') }}" class="button-primary">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.page.new'|trans }}</span>*/
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
/*                 render(*/
/*                     url('admin_page_list_component', {*/
/*                         page: page,*/
/*                         limit: limit,*/
/*                         orderByField: orderByField,*/
/*                         orderByDirection: orderByDirection,*/
/*                     })*/
/*                 )*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
