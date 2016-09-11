<?php

/* StoreTemplateBundle:Pages:user-home.html.twig */
class __TwigTemplate_62a08dcdebfe2ed8fc8db29b126ef5081501bf85173195fe23b78e801ba11d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:user-home.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d663bd84afbe7bfcc98ffe15c3708e73b25751f86fdd3e145351aa5f9bc73dae = $this->env->getExtension("native_profiler");
        $__internal_d663bd84afbe7bfcc98ffe15c3708e73b25751f86fdd3e145351aa5f9bc73dae->enter($__internal_d663bd84afbe7bfcc98ffe15c3708e73b25751f86fdd3e145351aa5f9bc73dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:user-home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d663bd84afbe7bfcc98ffe15c3708e73b25751f86fdd3e145351aa5f9bc73dae->leave($__internal_d663bd84afbe7bfcc98ffe15c3708e73b25751f86fdd3e145351aa5f9bc73dae_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_588d8598468efa20901fe86300b77e78c5be92dae8235f0b80924aec8d112147 = $this->env->getExtension("native_profiler");
        $__internal_588d8598468efa20901fe86300b77e78c5be92dae8235f0b80924aec8d112147->enter($__internal_588d8598468efa20901fe86300b77e78c5be92dae8235f0b80924aec8d112147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_588d8598468efa20901fe86300b77e78c5be92dae8235f0b80924aec8d112147->leave($__internal_588d8598468efa20901fe86300b77e78c5be92dae8235f0b80924aec8d112147_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_43ba2f8f2582ec6ba0b2ba52184061d38ecb010195f58ee141b08330ca2f18c3 = $this->env->getExtension("native_profiler");
        $__internal_43ba2f8f2582ec6ba0b2ba52184061d38ecb010195f58ee141b08330ca2f18c3->enter($__internal_43ba2f8f2582ec6ba0b2ba52184061d38ecb010195f58ee141b08330ca2f18c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"grid grid-pad user-home\">
        <div class=\"col-1-4\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("store_user_edit");
        echo "\" data-test=\"user-dashboard-profile-link\">
                <i class=\"fa fa-user fa-3x\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.home.profile"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"col-1-4\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("store_order_list");
        echo "\" data-test=\"user-dashboard-orders-link\">
                <i class=\"fa fa-files-o fa-3x\"></i>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.home.my_orders"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"col-1-4\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("store_address_list");
        echo "\" data-test=\"user-dashboard-address-link\">
                <i class=\"fa fa-map-marker fa-3x\"></i>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.user.home.my_addresses"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
";
        
        $__internal_43ba2f8f2582ec6ba0b2ba52184061d38ecb010195f58ee141b08330ca2f18c3->leave($__internal_43ba2f8f2582ec6ba0b2ba52184061d38ecb010195f58ee141b08330ca2f18c3_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:user-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  80 => 20,  73 => 16,  68 => 14,  61 => 10,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/*     <div class="grid grid-pad user-home">*/
/*         <div class="col-1-4">*/
/*             <a href="{{ url("store_user_edit") }}" data-test="user-dashboard-profile-link">*/
/*                 <i class="fa fa-user fa-3x"></i>*/
/*                 {{ "template.store_template_bundle.user.home.profile"|trans }}*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-1-4">*/
/*             <a href="{{ url("store_order_list") }}" data-test="user-dashboard-orders-link">*/
/*                 <i class="fa fa-files-o fa-3x"></i>*/
/*                 {{ "template.store_template_bundle.user.home.my_orders"|trans }}*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-1-4">*/
/*             <a href="{{ url("store_address_list") }}" data-test="user-dashboard-address-link">*/
/*                 <i class="fa fa-map-marker fa-3x"></i>*/
/*                 {{ "template.store_template_bundle.user.home.my_addresses"|trans }}*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
