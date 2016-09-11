<?php

/* ElcodiCustomShippingBundle:Carrier:list.html.twig */
class __TwigTemplate_a944eeeb0679f1f525f054cc90d5329bfde35cffc113417af99335b34382c9a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "ElcodiCustomShippingBundle:Carrier:list.html.twig", 1);
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
        $__internal_5d09149a38f5f37575554601baf93b45975c929a8233ceaf60f363f109e1196f = $this->env->getExtension("native_profiler");
        $__internal_5d09149a38f5f37575554601baf93b45975c929a8233ceaf60f363f109e1196f->enter($__internal_5d09149a38f5f37575554601baf93b45975c929a8233ceaf60f363f109e1196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:Carrier:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "carrier");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d09149a38f5f37575554601baf93b45975c929a8233ceaf60f363f109e1196f->leave($__internal_5d09149a38f5f37575554601baf93b45975c929a8233ceaf60f363f109e1196f_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3414424dc03f1052b4229775587782def6df453eee9d9f2bbccc11063f90d41b = $this->env->getExtension("native_profiler");
        $__internal_3414424dc03f1052b4229775587782def6df453eee9d9f2bbccc11063f90d41b->enter($__internal_3414424dc03f1052b4229775587782def6df453eee9d9f2bbccc11063f90d41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "ElcodiCustomShippingBundle:Carrier:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.plural")), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.carrier.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_3414424dc03f1052b4229775587782def6df453eee9d9f2bbccc11063f90d41b->leave($__internal_3414424dc03f1052b4229775587782def6df453eee9d9f2bbccc11063f90d41b_prof);

    }

    // line 21
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_c90d94ff98c3f4641659eca5e9dff34ab35e62ce7975e858d6dde5d884210550 = $this->env->getExtension("native_profiler");
        $__internal_c90d94ff98c3f4641659eca5e9dff34ab35e62ce7975e858d6dde5d884210550->enter($__internal_c90d94ff98c3f4641659eca5e9dff34ab35e62ce7975e858d6dde5d884210550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_carrier_new");
        echo "\" class=\"button-primary\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_c90d94ff98c3f4641659eca5e9dff34ab35e62ce7975e858d6dde5d884210550->leave($__internal_c90d94ff98c3f4641659eca5e9dff34ab35e62ce7975e858d6dde5d884210550_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_1cb89782beaa04e70e2f9d31db3d9d0626f0a06c932e0f10db1aac1d3763b867 = $this->env->getExtension("native_profiler");
        $__internal_1cb89782beaa04e70e2f9d31db3d9d0626f0a06c932e0f10db1aac1d3763b867->enter($__internal_1cb89782beaa04e70e2f9d31db3d9d0626f0a06c932e0f10db1aac1d3763b867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    ";
        // line 33
        if (((twig_length_filter($this->env, (isset($context["carriers"]) ? $context["carriers"] : null)) > 0) && (isset($context["noEnabledCarriers"]) ? $context["noEnabledCarriers"] : null))) {
            // line 34
            echo "        <p class=\"msg-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.error.no_active_carrier"), "html", null, true);
            echo "</p>
    ";
        }
        // line 36
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_carrier_list_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_1cb89782beaa04e70e2f9d31db3d9d0626f0a06c932e0f10db1aac1d3763b867->leave($__internal_1cb89782beaa04e70e2f9d31db3d9d0626f0a06c932e0f10db1aac1d3763b867_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:Carrier:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  100 => 36,  94 => 34,  92 => 33,  89 => 32,  83 => 31,  72 => 25,  67 => 23,  64 => 22,  58 => 21,  50 => 17,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'carrier',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.settings.plural'|trans },*/
/*             { name: 'admin.carrier.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_carrier_new') }}" class="button-primary">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.carrier.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if carriers|length > 0 and noEnabledCarriers %}*/
/*         <p class="msg-warning">{{ 'admin.carrier.error.no_active_carrier'|trans }}</p>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url('admin_carrier_list_component')) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
