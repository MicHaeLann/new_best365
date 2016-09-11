<?php

/* AdminUserBundle:Customer:list.html.twig */
class __TwigTemplate_bd4d1b2a955a22749d45ac679b023c3fbbd700c59f6cf070ab4add78276d1462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminUserBundle:Customer:list.html.twig", 1);
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
        $__internal_9494a6b3f71b2234ae595b0d0a364bc7dd938c70243fe65a72cb10f5e8324f74 = $this->env->getExtension("native_profiler");
        $__internal_9494a6b3f71b2234ae595b0d0a364bc7dd938c70243fe65a72cb10f5e8324f74->enter($__internal_9494a6b3f71b2234ae595b0d0a364bc7dd938c70243fe65a72cb10f5e8324f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Customer:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "customer");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9494a6b3f71b2234ae595b0d0a364bc7dd938c70243fe65a72cb10f5e8324f74->leave($__internal_9494a6b3f71b2234ae595b0d0a364bc7dd938c70243fe65a72cb10f5e8324f74_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7e6dd2e3d11f902bb96f718a6ff53fde6ef34efdf2e7d0d55d697aeaadb92d25 = $this->env->getExtension("native_profiler");
        $__internal_7e6dd2e3d11f902bb96f718a6ff53fde6ef34efdf2e7d0d55d697aeaadb92d25->enter($__internal_7e6dd2e3d11f902bb96f718a6ff53fde6ef34efdf2e7d0d55d697aeaadb92d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminUserBundle:Customer:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.customer.plural"), "active" => true)))));
        // line 16
        echo "
";
        
        $__internal_7e6dd2e3d11f902bb96f718a6ff53fde6ef34efdf2e7d0d55d697aeaadb92d25->leave($__internal_7e6dd2e3d11f902bb96f718a6ff53fde6ef34efdf2e7d0d55d697aeaadb92d25_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f332bd7c9d9e84d5b143555e794e59cc76af0d0ff11e80bb55a7fc1aab2d5aa = $this->env->getExtension("native_profiler");
        $__internal_6f332bd7c9d9e84d5b143555e794e59cc76af0d0ff11e80bb55a7fc1aab2d5aa->enter($__internal_6f332bd7c9d9e84d5b143555e794e59cc76af0d0ff11e80bb55a7fc1aab2d5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_customer_list_component", array("page" =>         // line 24
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 25
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 26
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 27
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 29
        echo "

";
        
        $__internal_6f332bd7c9d9e84d5b143555e794e59cc76af0d0ff11e80bb55a7fc1aab2d5aa->leave($__internal_6f332bd7c9d9e84d5b143555e794e59cc76af0d0ff11e80bb55a7fc1aab2d5aa_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Customer:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  70 => 27,  69 => 26,  68 => 25,  67 => 24,  66 => 22,  63 => 21,  57 => 20,  49 => 16,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'customer',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.customer.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_customer_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection,*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
