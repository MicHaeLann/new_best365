<?php

/* StoreTemplateBundle:Pages:home-view.html.twig */
class __TwigTemplate_04c7f95a344d665b99a43edb3580c621b3b8c4acd7e8682d29fc4189f79a6f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:home-view.html.twig", 1);
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
        $__internal_efc0d6f9dada57245d642a12473d5ffef53e8bd3c831354aea37f5e976204196 = $this->env->getExtension("native_profiler");
        $__internal_efc0d6f9dada57245d642a12473d5ffef53e8bd3c831354aea37f5e976204196->enter($__internal_efc0d6f9dada57245d642a12473d5ffef53e8bd3c831354aea37f5e976204196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:home-view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc0d6f9dada57245d642a12473d5ffef53e8bd3c831354aea37f5e976204196->leave($__internal_efc0d6f9dada57245d642a12473d5ffef53e8bd3c831354aea37f5e976204196_prof);

    }

    // line 4
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_232e6016d367f27a68729f3e68f2e15471222a78855dcf3ffbbd3179f9ecf032 = $this->env->getExtension("native_profiler");
        $__internal_232e6016d367f27a68729f3e68f2e15471222a78855dcf3ffbbd3179f9ecf032->enter($__internal_232e6016d367f27a68729f3e68f2e15471222a78855dcf3ffbbd3179f9ecf032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_232e6016d367f27a68729f3e68f2e15471222a78855dcf3ffbbd3179f9ecf032->leave($__internal_232e6016d367f27a68729f3e68f2e15471222a78855dcf3ffbbd3179f9ecf032_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_8dc4fa2be67ef2e80a7b3d0f00d6ec921fb4850c127b976700d671cedc4bd203 = $this->env->getExtension("native_profiler");
        $__internal_8dc4fa2be67ef2e80a7b3d0f00d6ec921fb4850c127b976700d671cedc4bd203->enter($__internal_8dc4fa2be67ef2e80a7b3d0f00d6ec921fb4850c127b976700d671cedc4bd203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->loadTemplate("@StoreTemplate/Modules/_purchasable-list.html.twig", "StoreTemplateBundle:Pages:home-view.html.twig", 8)->display(array_merge($context, array("purchasables" =>         // line 9
(isset($context["purchasables"]) ? $context["purchasables"] : null))));
        
        $__internal_8dc4fa2be67ef2e80a7b3d0f00d6ec921fb4850c127b976700d671cedc4bd203->leave($__internal_8dc4fa2be67ef2e80a7b3d0f00d6ec921fb4850c127b976700d671cedc4bd203_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:home-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  52 => 8,  46 => 7,  35 => 4,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* */
/* {% block content %}*/
/*     {% include '@StoreTemplate/Modules/_purchasable-list.html.twig' with {*/
/*         purchasables: purchasables*/
/*     } %}*/
/* {% endblock content %}*/
/* */
