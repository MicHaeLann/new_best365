<?php

/* AdminPageBundle:Email:list.html.twig */
class __TwigTemplate_6571e1414ffd293601767b0786b53425a38b5dcc02ae0e5e0eb42812d52b1dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminPageBundle:Email:list.html.twig", 1);
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
        $__internal_6086329e241d9455eb46e9e06f84a5698b05b1705e8996836b33e2482f4b659d = $this->env->getExtension("native_profiler");
        $__internal_6086329e241d9455eb46e9e06f84a5698b05b1705e8996836b33e2482f4b659d->enter($__internal_6086329e241d9455eb46e9e06f84a5698b05b1705e8996836b33e2482f4b659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Email:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "mailing");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6086329e241d9455eb46e9e06f84a5698b05b1705e8996836b33e2482f4b659d->leave($__internal_6086329e241d9455eb46e9e06f84a5698b05b1705e8996836b33e2482f4b659d_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b71d3d13eb945cfd13d325b1c2258b038b9d663b2bb9566e9caa886df69c2ab8 = $this->env->getExtension("native_profiler");
        $__internal_b71d3d13eb945cfd13d325b1c2258b038b9d663b2bb9566e9caa886df69c2ab8->enter($__internal_b71d3d13eb945cfd13d325b1c2258b038b9d663b2bb9566e9caa886df69c2ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminPageBundle:Email:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.communication.single"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.mailing.plural"), "active" => true)))));
        // line 17
        echo "
";
        
        $__internal_b71d3d13eb945cfd13d325b1c2258b038b9d663b2bb9566e9caa886df69c2ab8->leave($__internal_b71d3d13eb945cfd13d325b1c2258b038b9d663b2bb9566e9caa886df69c2ab8_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_af25027a7e7bf28f76e0dc26426b8efc97e69ff939fe1137cdc09cffdc0c156a = $this->env->getExtension("native_profiler");
        $__internal_af25027a7e7bf28f76e0dc26426b8efc97e69ff939fe1137cdc09cffdc0c156a->enter($__internal_af25027a7e7bf28f76e0dc26426b8efc97e69ff939fe1137cdc09cffdc0c156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_email_list_component"));
        echo "
        </div>
    </div>

";
        
        $__internal_af25027a7e7bf28f76e0dc26426b8efc97e69ff939fe1137cdc09cffdc0c156a->leave($__internal_af25027a7e7bf28f76e0dc26426b8efc97e69ff939fe1137cdc09cffdc0c156a_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Email:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  63 => 22,  57 => 21,  49 => 17,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
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
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.communication.single'|trans, active: false },*/
/*             { name: 'admin.mailing.plural'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(url('admin_email_list_component')) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
