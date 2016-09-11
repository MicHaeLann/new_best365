<?php

/* AdminProductBundle:Product:list.html.twig */
class __TwigTemplate_cc2911d106028e0ae4aab710971b58e92b1f63f9f284e173b0f33a2a86dee16f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminProductBundle:Product:list.html.twig", 1);
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
        $__internal_a8785738103d65dd9a91a925a11203e0f20a00fcd0a995bf8e2acc28ec6d60b9 = $this->env->getExtension("native_profiler");
        $__internal_a8785738103d65dd9a91a925a11203e0f20a00fcd0a995bf8e2acc28ec6d60b9->enter($__internal_a8785738103d65dd9a91a925a11203e0f20a00fcd0a995bf8e2acc28ec6d60b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Product:list.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "product");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8785738103d65dd9a91a925a11203e0f20a00fcd0a995bf8e2acc28ec6d60b9->leave($__internal_a8785738103d65dd9a91a925a11203e0f20a00fcd0a995bf8e2acc28ec6d60b9_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8e66dd937096b34dfe3b551aba0a562460dbd9abbe9e208f63becc0b7694f2db = $this->env->getExtension("native_profiler");
        $__internal_8e66dd937096b34dfe3b551aba0a562460dbd9abbe9e208f63becc0b7694f2db->enter($__internal_8e66dd937096b34dfe3b551aba0a562460dbd9abbe9e208f63becc0b7694f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Product:list.html.twig", 11)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.product.plural"), "active" => true)))));
        // line 16
        echo "
";
        
        $__internal_8e66dd937096b34dfe3b551aba0a562460dbd9abbe9e208f63becc0b7694f2db->leave($__internal_8e66dd937096b34dfe3b551aba0a562460dbd9abbe9e208f63becc0b7694f2db_prof);

    }

    // line 20
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_7ae646d67913674cbdace7642a5d61653f38bdac529d8d666f9b1af4271ee38a = $this->env->getExtension("native_profiler");
        $__internal_7ae646d67913674cbdace7642a5d61653f38bdac529d8d666f9b1af4271ee38a->enter($__internal_7ae646d67913674cbdace7642a5d61653f38bdac529d8d666f9b1af4271ee38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 21
        echo "
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_product_new");
        echo "\" type=\"button\" class=\"button-primary\" data-test=\"new-product\">
        <i class=\"icon-plus\"></i>
        <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.new"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_7ae646d67913674cbdace7642a5d61653f38bdac529d8d666f9b1af4271ee38a->leave($__internal_7ae646d67913674cbdace7642a5d61653f38bdac529d8d666f9b1af4271ee38a_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_75cc7f2c90238c3d7fd37a925230c3ad8efbf1ebf40bc5459e66832a494faaf2 = $this->env->getExtension("native_profiler");
        $__internal_75cc7f2c90238c3d7fd37a925230c3ad8efbf1ebf40bc5459e66832a494faaf2->enter($__internal_75cc7f2c90238c3d7fd37a925230c3ad8efbf1ebf40bc5459e66832a494faaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "
    ";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_product_list_component", array("page" =>         // line 34
(isset($context["page"]) ? $context["page"] : null), "limit" =>         // line 35
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>         // line 36
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>         // line 37
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))));
        // line 39
        echo "

";
        
        $__internal_75cc7f2c90238c3d7fd37a925230c3ad8efbf1ebf40bc5459e66832a494faaf2->leave($__internal_75cc7f2c90238c3d7fd37a925230c3ad8efbf1ebf40bc5459e66832a494faaf2_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  96 => 37,  95 => 36,  94 => 35,  93 => 34,  92 => 32,  89 => 31,  83 => 30,  72 => 24,  67 => 22,  64 => 21,  58 => 20,  50 => 16,  48 => 11,  45 => 10,  39 => 9,  32 => 1,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'product'*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.product.plural'|trans, active: true },*/
/*         ],*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_product_new') }}" type="button" class="button-primary" data-test="new-product">*/
/*         <i class="icon-plus"></i>*/
/*         <span>{{ 'admin.product.new'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {{*/
/*         render(url('admin_product_list_component', {*/
/*             page: page,*/
/*             limit: limit,*/
/*             orderByField: orderByField,*/
/*             orderByDirection: orderByDirection*/
/*         }))*/
/*     }}*/
/* */
/* {% endblock content %}*/
/* */
