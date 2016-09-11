<?php

/* StoreTemplateBundle:Modules:_purchasable-related.html.twig */
class __TwigTemplate_5b94ae83f061ec7f1b5711ac9c2bee93612a4c7ac39f2b3d4f33c22b7fd7aece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_453e8e0a119273d775883d96217640ac60cb10ca96938f3899dc159c16fbfdc1 = $this->env->getExtension("native_profiler");
        $__internal_453e8e0a119273d775883d96217640ac60cb10ca96938f3899dc159c16fbfdc1->enter($__internal_453e8e0a119273d775883d96217640ac60cb10ca96938f3899dc159c16fbfdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_purchasable-related.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["purchasables"]) ? $context["purchasables"] : null)) > 0)) {
            // line 2
            echo "<div class=\"product-related\">
    <div class=\"grid\">
        <div class=\"col-1-1\">
            <h2 class=\"product-title\">";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.also_like"), "html", null, true);
            echo "</h2>
            ";
            // line 6
            $this->loadTemplate("@StoreTemplate/Modules/_purchasable-list.html.twig", "StoreTemplateBundle:Modules:_purchasable-related.html.twig", 6)->display(array_merge($context, array("purchasables" =>             // line 7
(isset($context["purchasables"]) ? $context["purchasables"] : null))));
            // line 9
            echo "        </div>
    </div>
</div>
";
        }
        
        $__internal_453e8e0a119273d775883d96217640ac60cb10ca96938f3899dc159c16fbfdc1->leave($__internal_453e8e0a119273d775883d96217640ac60cb10ca96938f3899dc159c16fbfdc1_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_purchasable-related.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  34 => 7,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% if purchasables|length > 0 %}*/
/* <div class="product-related">*/
/*     <div class="grid">*/
/*         <div class="col-1-1">*/
/*             <h2 class="product-title">{{ "template.store_template_bundle.product.also_like"|trans }}</h2>*/
/*             {% include "@StoreTemplate/Modules/_purchasable-list.html.twig" with {*/
/*                 'purchasables' : purchasables*/
/*             } %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
