<?php

/* AdminPageBundle:Email:listComponent.html.twig */
class __TwigTemplate_66cc5231b6ed7634ca6c5d2e9373d0b9695a3f596ccb56351c8d0a62ab958ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminPageBundle:Email:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'no_items' => array($this, 'block_no_items'),
            'table_head' => array($this, 'block_table_head'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_pagination' => array($this, 'block_table_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e84cf91c2effa130c81ceaa03161e7cb3ea08c72b6bcdaba2c984832017e93 = $this->env->getExtension("native_profiler");
        $__internal_80e84cf91c2effa130c81ceaa03161e7cb3ea08c72b6bcdaba2c984832017e93->enter($__internal_80e84cf91c2effa130c81ceaa03161e7cb3ea08c72b6bcdaba2c984832017e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Email:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "mailing");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e84cf91c2effa130c81ceaa03161e7cb3ea08c72b6bcdaba2c984832017e93->leave($__internal_80e84cf91c2effa130c81ceaa03161e7cb3ea08c72b6bcdaba2c984832017e93_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1991fc84723e4008aaf92d3940a90daee9baad2c0ea3cdc863a73b5e2f9920f = $this->env->getExtension("native_profiler");
        $__internal_f1991fc84723e4008aaf92d3940a90daee9baad2c0ea3cdc863a73b5e2f9920f->enter($__internal_f1991fc84723e4008aaf92d3940a90daee9baad2c0ea3cdc863a73b5e2f9920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.mailing.list"), "html", null, true);
        
        $__internal_f1991fc84723e4008aaf92d3940a90daee9baad2c0ea3cdc863a73b5e2f9920f->leave($__internal_f1991fc84723e4008aaf92d3940a90daee9baad2c0ea3cdc863a73b5e2f9920f_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_ca8b1aa51db18cccf873b9a11655d2e96e824eb12070c3087f26533ceda803fe = $this->env->getExtension("native_profiler");
        $__internal_ca8b1aa51db18cccf873b9a11655d2e96e824eb12070c3087f26533ceda803fe->enter($__internal_ca8b1aa51db18cccf873b9a11655d2e96e824eb12070c3087f26533ceda803fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.mailing.single"), 1 => $this->env->getExtension('translator')->trans("admin.mailing.plural")), "method"), "html", null, true);
        
        $__internal_ca8b1aa51db18cccf873b9a11655d2e96e824eb12070c3087f26533ceda803fe->leave($__internal_ca8b1aa51db18cccf873b9a11655d2e96e824eb12070c3087f26533ceda803fe_prof);

    }

    // line 20
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_542e029d195c996c281de024c03896053f9ffd8cc663801431e7a0cf1406b4ee = $this->env->getExtension("native_profiler");
        $__internal_542e029d195c996c281de024c03896053f9ffd8cc663801431e7a0cf1406b4ee->enter($__internal_542e029d195c996c281de024c03896053f9ffd8cc663801431e7a0cf1406b4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminPageBundle:Email:listComponent.html.twig", 22)->display(array_merge($context, array("class" => "email", "rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.mailing.field.title.title"))))));
        // line 28
        echo "
";
        
        $__internal_542e029d195c996c281de024c03896053f9ffd8cc663801431e7a0cf1406b4ee->leave($__internal_542e029d195c996c281de024c03896053f9ffd8cc663801431e7a0cf1406b4ee_prof);

    }

    // line 32
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_5caea8f4c8fab2508559cca4bb85e47ab545cee49838b4b6020c577a7860e148 = $this->env->getExtension("native_profiler");
        $__internal_5caea8f4c8fab2508559cca4bb85e47ab545cee49838b4b6020c577a7860e148->enter($__internal_5caea8f4c8fab2508559cca4bb85e47ab545cee49838b4b6020c577a7860e148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 33
        echo "
    <td>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_email_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo "
        </a>
    </td>

";
        
        $__internal_5caea8f4c8fab2508559cca4bb85e47ab545cee49838b4b6020c577a7860e148->leave($__internal_5caea8f4c8fab2508559cca4bb85e47ab545cee49838b4b6020c577a7860e148_prof);

    }

    // line 43
    public function block_table_pagination($context, array $blocks = array())
    {
        $__internal_0bda70e2a5fc4d88b93a5c7f01b5b41c37bce83a6dc0bb198715209e4a46e5a3 = $this->env->getExtension("native_profiler");
        $__internal_0bda70e2a5fc4d88b93a5c7f01b5b41c37bce83a6dc0bb198715209e4a46e5a3->enter($__internal_0bda70e2a5fc4d88b93a5c7f01b5b41c37bce83a6dc0bb198715209e4a46e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_pagination"));

        echo "";
        
        $__internal_0bda70e2a5fc4d88b93a5c7f01b5b41c37bce83a6dc0bb198715209e4a46e5a3->leave($__internal_0bda70e2a5fc4d88b93a5c7f01b5b41c37bce83a6dc0bb198715209e4a46e5a3_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Email:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  99 => 36,  95 => 35,  91 => 33,  85 => 32,  77 => 28,  75 => 22,  72 => 21,  66 => 20,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'mailing',*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.mailing.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.mailing.single'|trans,*/
/*         'admin.mailing.plural'|trans*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         class: 'email',*/
/*         rows: [*/
/*             { name: 'admin.mailing.field.title.title'|trans },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td>*/
/*         <a href="{{ url('admin_email_edit', { id: entity.id }) }}">*/
/*             {{ entity.title }}*/
/*         </a>*/
/*     </td>*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_pagination '' %}*/
/* */
