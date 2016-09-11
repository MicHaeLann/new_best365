<?php

/* AdminUserBundle:AdminUser:edit.html.twig */
class __TwigTemplate_0ed76ac175d243f6afc25e94b0b09ea33a456f5e485da813104ecabc57f28a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminUserBundle:AdminUser:edit.html.twig", 1);
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
        $__internal_3ccd9fb312ff42e0e19c97426d6696e43cd47d0c8eab5ec3c6747b5f35f58fb1 = $this->env->getExtension("native_profiler");
        $__internal_3ccd9fb312ff42e0e19c97426d6696e43cd47d0c8eab5ec3c6747b5f35f58fb1->enter($__internal_3ccd9fb312ff42e0e19c97426d6696e43cd47d0c8eab5ec3c6747b5f35f58fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:AdminUser:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "admin_user");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ccd9fb312ff42e0e19c97426d6696e43cd47d0c8eab5ec3c6747b5f35f58fb1->leave($__internal_3ccd9fb312ff42e0e19c97426d6696e43cd47d0c8eab5ec3c6747b5f35f58fb1_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_66dd1e6f6e9f5179446748cd9c89c87d93c249c47096af8d27728e1b01eb0743 = $this->env->getExtension("native_profiler");
        $__internal_66dd1e6f6e9f5179446748cd9c89c87d93c249c47096af8d27728e1b01eb0743->enter($__internal_66dd1e6f6e9f5179446748cd9c89c87d93c249c47096af8d27728e1b01eb0743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $context["title"] = $this->env->getExtension('translator')->trans("admin.admin_user.plural");
        // line 12
        echo "    ";
        // line 13
        $context["header"] = (($this->getAttribute((isset($context["adminUser"]) ? $context["adminUser"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.admin_user.edit", array("%name%" => $this->getAttribute(        // line 14
(isset($context["adminUser"]) ? $context["adminUser"] : null), "fullname", array())))) : ($this->env->getExtension('translator')->trans("admin.admin_user.new")));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminUserBundle:AdminUser:edit.html.twig", 18)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 20
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_admin_user_list")), 1 => array("name" =>         // line 21
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 24
        echo "
";
        
        $__internal_66dd1e6f6e9f5179446748cd9c89c87d93c249c47096af8d27728e1b01eb0743->leave($__internal_66dd1e6f6e9f5179446748cd9c89c87d93c249c47096af8d27728e1b01eb0743_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_020cb1f0a77e31179b277f703ab634f6da179d47c25861ed685278bb7d15b55d = $this->env->getExtension("native_profiler");
        $__internal_020cb1f0a77e31179b277f703ab634f6da179d47c25861ed685278bb7d15b55d->enter($__internal_020cb1f0a77e31179b277f703ab634f6da179d47c25861ed685278bb7d15b55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 32
        if ($this->getAttribute((isset($context["adminUser"]) ? $context["adminUser"] : null), "id", array())) {
            // line 33
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_admin_user_edit_component", array("id" => $this->getAttribute((isset($context["adminUser"]) ? $context["adminUser"] : null), "id", array()))));
            echo "
            ";
        } else {
            // line 35
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_admin_user_new_component"));
            echo "
            ";
        }
        // line 37
        echo "        </div>
    </div>

";
        
        $__internal_020cb1f0a77e31179b277f703ab634f6da179d47c25861ed685278bb7d15b55d->leave($__internal_020cb1f0a77e31179b277f703ab634f6da179d47c25861ed685278bb7d15b55d_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:AdminUser:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  88 => 35,  82 => 33,  80 => 32,  75 => 29,  69 => 28,  61 => 24,  59 => 21,  58 => 20,  57 => 18,  54 => 17,  52 => 14,  51 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
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
/*     {% set title = 'admin.admin_user.plural'|trans %}*/
/*     {%*/
/*         set header = adminUser.id*/
/*             ? 'admin.admin_user.edit'|trans({ '%name%': adminUser.fullname })*/
/*             : 'admin.admin_user.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: title, url: url('admin_admin_user_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {% if adminUser.id %}*/
/*                 {{ render(url('admin_admin_user_edit_component', { id: adminUser.id })) }}*/
/*             {% else %}*/
/*                 {{ render(url('admin_admin_user_new_component')) }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
