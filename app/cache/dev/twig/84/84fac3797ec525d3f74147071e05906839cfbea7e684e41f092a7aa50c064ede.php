<?php

/* AdminUserBundle:AdminUser:list.html.twig */
class __TwigTemplate_bb870fab7444ff6caf5589f92d9c42f067a9063239c65bef89ea3b44ece74abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminUserBundle:AdminUser:list.html.twig", 1);
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
        $__internal_8d1d4d9e3265b04d3ca28cf614130d65a45d9d34bb1b5f5e5ec55ae2f5105344 = $this->env->getExtension("native_profiler");
        $__internal_8d1d4d9e3265b04d3ca28cf614130d65a45d9d34bb1b5f5e5ec55ae2f5105344->enter($__internal_8d1d4d9e3265b04d3ca28cf614130d65a45d9d34bb1b5f5e5ec55ae2f5105344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:AdminUser:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "admin_user");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1d4d9e3265b04d3ca28cf614130d65a45d9d34bb1b5f5e5ec55ae2f5105344->leave($__internal_8d1d4d9e3265b04d3ca28cf614130d65a45d9d34bb1b5f5e5ec55ae2f5105344_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8807174477e91ffc8dbcb154f8f677fa8babfe636b716a862eb73d889590a464 = $this->env->getExtension("native_profiler");
        $__internal_8807174477e91ffc8dbcb154f8f677fa8babfe636b716a862eb73d889590a464->enter($__internal_8807174477e91ffc8dbcb154f8f677fa8babfe636b716a862eb73d889590a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminUserBundle:AdminUser:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.admin_user.single"), "active" => true)))));
        // line 16
        echo "
";
        
        $__internal_8807174477e91ffc8dbcb154f8f677fa8babfe636b716a862eb73d889590a464->leave($__internal_8807174477e91ffc8dbcb154f8f677fa8babfe636b716a862eb73d889590a464_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6c1b1b6b46319b351e728e5d7e1b48e9ff393eacf94d6de4c2d9d1b66d6c764 = $this->env->getExtension("native_profiler");
        $__internal_c6c1b1b6b46319b351e728e5d7e1b48e9ff393eacf94d6de4c2d9d1b66d6c764->enter($__internal_c6c1b1b6b46319b351e728e5d7e1b48e9ff393eacf94d6de4c2d9d1b66d6c764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_admin_user_list_component", array("page" =>         // line 24
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 25
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 26
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 27
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 29
        echo "

";
        
        $__internal_c6c1b1b6b46319b351e728e5d7e1b48e9ff393eacf94d6de4c2d9d1b66d6c764->leave($__internal_c6c1b1b6b46319b351e728e5d7e1b48e9ff393eacf94d6de4c2d9d1b66d6c764_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:AdminUser:list.html.twig";
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
/*     entity_type: 'admin_user',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.admin_user.single'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_admin_user_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
