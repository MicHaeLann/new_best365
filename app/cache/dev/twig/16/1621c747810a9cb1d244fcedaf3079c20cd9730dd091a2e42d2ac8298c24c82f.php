<?php

/* @AdminCore/layouts/center_box.html.twig */
class __TwigTemplate_dc6d9f31b4ab0916e289df9a958c2f216c373c0581921a307c24edaa4605dd40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "@AdminCore/layouts/center_box.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'center_width' => array($this, 'block_center_width'),
            'center_height' => array($this, 'block_center_height'),
            'container' => array($this, 'block_container'),
            'title_container' => array($this, 'block_title_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43d3c8fde2f5a28eee04e7a825da38395e440bc74748a393fa04ec5c5e559d48 = $this->env->getExtension("native_profiler");
        $__internal_43d3c8fde2f5a28eee04e7a825da38395e440bc74748a393fa04ec5c5e559d48->enter($__internal_43d3c8fde2f5a28eee04e7a825da38395e440bc74748a393fa04ec5c5e559d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminCore/layouts/center_box.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d3c8fde2f5a28eee04e7a825da38395e440bc74748a393fa04ec5c5e559d48->leave($__internal_43d3c8fde2f5a28eee04e7a825da38395e440bc74748a393fa04ec5c5e559d48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c9da2b1cb689e94ce09a9537766679c9720ecf066af58e64d839d14f6c4bbdf = $this->env->getExtension("native_profiler");
        $__internal_4c9da2b1cb689e94ce09a9537766679c9720ecf066af58e64d839d14f6c4bbdf->enter($__internal_4c9da2b1cb689e94ce09a9537766679c9720ecf066af58e64d839d14f6c4bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"loading\">
        <div class=\"box-lighten\" data-fc-modules=\"center-box\" data-fc-width=\"";
        // line 5
        $this->displayBlock('center_width', $context, $blocks);
        echo "\" data-fc-height=\"";
        $this->displayBlock('center_height', $context, $blocks);
        echo "\">
            ";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_4c9da2b1cb689e94ce09a9537766679c9720ecf066af58e64d839d14f6c4bbdf->leave($__internal_4c9da2b1cb689e94ce09a9537766679c9720ecf066af58e64d839d14f6c4bbdf_prof);

    }

    // line 5
    public function block_center_width($context, array $blocks = array())
    {
        $__internal_42e4f574ea424ccdba737109521005d8dcce3af533c6d5e24acc23d93af1d5f1 = $this->env->getExtension("native_profiler");
        $__internal_42e4f574ea424ccdba737109521005d8dcce3af533c6d5e24acc23d93af1d5f1->enter($__internal_42e4f574ea424ccdba737109521005d8dcce3af533c6d5e24acc23d93af1d5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_width"));

        echo "500";
        
        $__internal_42e4f574ea424ccdba737109521005d8dcce3af533c6d5e24acc23d93af1d5f1->leave($__internal_42e4f574ea424ccdba737109521005d8dcce3af533c6d5e24acc23d93af1d5f1_prof);

    }

    public function block_center_height($context, array $blocks = array())
    {
        $__internal_e9db986569d29849d194b7a6b95037f782e424a2648bc48aecd5464aa9400e65 = $this->env->getExtension("native_profiler");
        $__internal_e9db986569d29849d194b7a6b95037f782e424a2648bc48aecd5464aa9400e65->enter($__internal_e9db986569d29849d194b7a6b95037f782e424a2648bc48aecd5464aa9400e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "400";
        
        $__internal_e9db986569d29849d194b7a6b95037f782e424a2648bc48aecd5464aa9400e65->leave($__internal_e9db986569d29849d194b7a6b95037f782e424a2648bc48aecd5464aa9400e65_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_23b09cde369607fbbdf65a8ca5310e4f095fd8dceee5d84f92e37c8fbc4b38bf = $this->env->getExtension("native_profiler");
        $__internal_23b09cde369607fbbdf65a8ca5310e4f095fd8dceee5d84f92e37c8fbc4b38bf->enter($__internal_23b09cde369607fbbdf65a8ca5310e4f095fd8dceee5d84f92e37c8fbc4b38bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "                <div class=\"box-primary\">
                    <h2 class=\"mb-n c-background\">";
        // line 8
        $this->displayBlock('title_container', $context, $blocks);
        echo "</h2>
                </div>
                ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "            ";
        
        $__internal_23b09cde369607fbbdf65a8ca5310e4f095fd8dceee5d84f92e37c8fbc4b38bf->leave($__internal_23b09cde369607fbbdf65a8ca5310e4f095fd8dceee5d84f92e37c8fbc4b38bf_prof);

    }

    // line 8
    public function block_title_container($context, array $blocks = array())
    {
        $__internal_a98c628e7f08cb038c0e01337d4105442f835b5ddc0bc1f3eed32518d8e0e915 = $this->env->getExtension("native_profiler");
        $__internal_a98c628e7f08cb038c0e01337d4105442f835b5ddc0bc1f3eed32518d8e0e915->enter($__internal_a98c628e7f08cb038c0e01337d4105442f835b5ddc0bc1f3eed32518d8e0e915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_container"));

        echo "<i class=\"icon-lock\"></i> Bamboo Admin ";
        
        $__internal_a98c628e7f08cb038c0e01337d4105442f835b5ddc0bc1f3eed32518d8e0e915->leave($__internal_a98c628e7f08cb038c0e01337d4105442f835b5ddc0bc1f3eed32518d8e0e915_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d35a3796c5c14742a936de1c449b8df619225911d3c96f67c6c90279c259282 = $this->env->getExtension("native_profiler");
        $__internal_0d35a3796c5c14742a936de1c449b8df619225911d3c96f67c6c90279c259282->enter($__internal_0d35a3796c5c14742a936de1c449b8df619225911d3c96f67c6c90279c259282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_0d35a3796c5c14742a936de1c449b8df619225911d3c96f67c6c90279c259282->leave($__internal_0d35a3796c5c14742a936de1c449b8df619225911d3c96f67c6c90279c259282_prof);

    }

    public function getTemplateName()
    {
        return "@AdminCore/layouts/center_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 10,  111 => 8,  104 => 11,  102 => 10,  97 => 8,  94 => 7,  88 => 6,  65 => 5,  56 => 12,  54 => 6,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="loading">*/
/*         <div class="box-lighten" data-fc-modules="center-box" data-fc-width="{% block center_width %}500{% endblock %}" data-fc-height="{% block center_height %}400{% endblock %}">*/
/*             {% block container %}*/
/*                 <div class="box-primary">*/
/*                     <h2 class="mb-n c-background">{% block title_container %}<i class="icon-lock"></i> Bamboo Admin {% endblock title_container %}</h2>*/
/*                 </div>*/
/*                 {% block content '' %}*/
/*             {% endblock container %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock body %}*/
/* */
