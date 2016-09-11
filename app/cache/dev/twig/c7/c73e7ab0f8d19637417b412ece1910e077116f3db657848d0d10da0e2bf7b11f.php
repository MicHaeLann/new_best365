<?php

/* AdminPageBundle:Email:edit.html.twig */
class __TwigTemplate_23631ea73d892243f6501b62d82da9a67e1fcf767faedc3d76beb3d6768f3a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPageBundle:Email:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6d91ddc987210442e805a05175b8c08104ee3573652d0142de488080bddfacf1 = $this->env->getExtension("native_profiler");
        $__internal_6d91ddc987210442e805a05175b8c08104ee3573652d0142de488080bddfacf1->enter($__internal_6d91ddc987210442e805a05175b8c08104ee3573652d0142de488080bddfacf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Email:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "mailing");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d91ddc987210442e805a05175b8c08104ee3573652d0142de488080bddfacf1->leave($__internal_6d91ddc987210442e805a05175b8c08104ee3573652d0142de488080bddfacf1_prof);

    }

    // line 9
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_88f68904ea1629925845575a1b6e9a4f6ce1b1c361115fe01efaf495e73a5319 = $this->env->getExtension("native_profiler");
        $__internal_88f68904ea1629925845575a1b6e9a4f6ce1b1c361115fe01efaf495e73a5319->enter($__internal_88f68904ea1629925845575a1b6e9a4f6ce1b1c361115fe01efaf495e73a5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        echo "";
        
        $__internal_88f68904ea1629925845575a1b6e9a4f6ce1b1c361115fe01efaf495e73a5319->leave($__internal_88f68904ea1629925845575a1b6e9a4f6ce1b1c361115fe01efaf495e73a5319_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4317a296538bb8d18e343791d17bbf136b7caaf0bebc483a71e0981dcaf8a522 = $this->env->getExtension("native_profiler");
        $__internal_4317a296538bb8d18e343791d17bbf136b7caaf0bebc483a71e0981dcaf8a522->enter($__internal_4317a296538bb8d18e343791d17bbf136b7caaf0bebc483a71e0981dcaf8a522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "
    ";
        // line 14
        $context["title"] = $this->env->getExtension('translator')->trans("admin.mailing.plural");
        // line 15
        echo "
    ";
        // line 17
        $context["header"] = (($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id", array())) ? ($this->env->getExtension('translator')->trans("admin.mailing.edit", array("%title%" => $this->getAttribute(        // line 18
(isset($context["email"]) ? $context["email"] : null), "title", array())))) : ($this->env->getExtension('translator')->trans("admin.mailing.new")));
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPageBundle:Email:edit.html.twig", 22)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.communication.single"), "active" => false), 1 => array("name" =>         // line 25
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_email_list")), 2 => array("name" =>         // line 26
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 29
        echo "
";
        
        $__internal_4317a296538bb8d18e343791d17bbf136b7caaf0bebc483a71e0981dcaf8a522->leave($__internal_4317a296538bb8d18e343791d17bbf136b7caaf0bebc483a71e0981dcaf8a522_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf29c50574b41ef9c5c1ef54ff317a0ca053ace43ba74a81a9fea33362ecfbb2 = $this->env->getExtension("native_profiler");
        $__internal_cf29c50574b41ef9c5c1ef54ff317a0ca053ace43ba74a81a9fea33362ecfbb2->enter($__internal_cf29c50574b41ef9c5c1ef54ff317a0ca053ace43ba74a81a9fea33362ecfbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "
    ";
        // line 35
        if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id", array())) {
            // line 36
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_email_edit_component", array("id" => $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id", array()))));
            echo "
    ";
        } else {
            // line 38
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_email_new_component"));
            echo "
    ";
        }
        // line 40
        echo "
";
        
        $__internal_cf29c50574b41ef9c5c1ef54ff317a0ca053ace43ba74a81a9fea33362ecfbb2->leave($__internal_cf29c50574b41ef9c5c1ef54ff317a0ca053ace43ba74a81a9fea33362ecfbb2_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Email:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  100 => 38,  94 => 36,  92 => 35,  89 => 34,  83 => 33,  75 => 29,  73 => 26,  72 => 25,  71 => 22,  68 => 21,  66 => 18,  65 => 17,  62 => 15,  60 => 14,  57 => 13,  51 => 12,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'mailing',*/
/* } %}*/
/* */
/* */
/* {% block header_actions '' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.mailing.plural'|trans %}*/
/* */
/*     {%*/
/*         set header = email.id*/
/*             ? 'admin.mailing.edit'|trans({ '%title%': email.title })*/
/*             : 'admin.mailing.new'|trans*/
/*     %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.communication.single'|trans, active: false },*/
/*             { name: title, url: url('admin_email_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if email.id %}*/
/*         {{ render(url('admin_email_edit_component', { id: email.id })) }}*/
/*     {% else %}*/
/*         {{ render(url('admin_email_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
