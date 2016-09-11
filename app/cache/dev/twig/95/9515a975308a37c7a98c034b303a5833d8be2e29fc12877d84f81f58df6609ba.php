<?php

/* StoreTemplateBundle:Subpages:coupon-add.html.twig */
class __TwigTemplate_4065aea1b998c2251851b8ec5dbf1747e854a6a9f776dbbc64ee1f821f895e95 extends Twig_Template
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
        $__internal_dc161985e90d561b3b83355b77f276091e0072bce549797e6c6ac7e06556e973 = $this->env->getExtension("native_profiler");
        $__internal_dc161985e90d561b3b83355b77f276091e0072bce549797e6c6ac7e06556e973->enter($__internal_dc161985e90d561b3b83355b77f276091e0072bce549797e6c6ac7e06556e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:coupon-add.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "coupons", array())) == 0)) {
            // line 2
            echo "    <div class=\"coupon-add\" data-test=\"coupon-add\">
        ";
            // line 3
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
            echo "
                ";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code", array()), 'widget');
            echo "
                ";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apply", array()), 'widget', array("attr" => array("class" => "button button-primary")));
            echo "
        ";
            // line 6
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "
    </div>
";
        }
        
        $__internal_dc161985e90d561b3b83355b77f276091e0072bce549797e6c6ac7e06556e973->leave($__internal_dc161985e90d561b3b83355b77f276091e0072bce549797e6c6ac7e06556e973_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:coupon-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if cart.coupons|length == 0 %}*/
/*     <div class="coupon-add" data-test="coupon-add">*/
/*         {{ form_start(form) }}*/
/*                 {{ form_widget( form.code ) }}*/
/*                 {{ form_widget( form.apply, { 'attr':{ 'class':'button button-primary' } } ) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endif %}*/
/* */
