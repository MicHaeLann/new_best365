<?php

/* StripeBundle:Stripe:view.html.twig */
class __TwigTemplate_99f373ae2e1a65c8e90d2e51873013b3aa40eea18251f48a0755464e82cdf5ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'payment_form' => array($this, 'block_payment_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4deaab3769016afc1077d402bf774333db28d69fcefceb041a34995708627a7e = $this->env->getExtension("native_profiler");
        $__internal_4deaab3769016afc1077d402bf774333db28d69fcefceb041a34995708627a7e->enter($__internal_4deaab3769016afc1077d402bf774333db28d69fcefceb041a34995708627a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StripeBundle:Stripe:view.html.twig"));

        // line 1
        $this->displayBlock('payment_form', $context, $blocks);
        
        $__internal_4deaab3769016afc1077d402bf774333db28d69fcefceb041a34995708627a7e->leave($__internal_4deaab3769016afc1077d402bf774333db28d69fcefceb041a34995708627a7e_prof);

    }

    public function block_payment_form($context, array $blocks = array())
    {
        $__internal_8766858d3d5d874bea9f9bc1463b1f2eb961075cc21e83f39c8f7d6f5577077a = $this->env->getExtension("native_profiler");
        $__internal_8766858d3d5d874bea9f9bc1463b1f2eb961075cc21e83f39c8f7d6f5577077a->enter($__internal_8766858d3d5d874bea9f9bc1463b1f2eb961075cc21e83f39c8f7d6f5577077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "payment_form"));

        // line 2
        echo "
    <ul id=\"stripe_payment_error\">

    </ul>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["stripe_form"]) ? $context["stripe_form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getUrl((isset($context["stripe_execute_route"]) ? $context["stripe_execute_route"] : null)), "attr" => array("id" => "payment-form", "method" => "GET")));
        echo "
        <span class=\"payment-errors\"></span>

        <div class=\"form-row\">
            <label>
                <span>Card number</span>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["stripe_form"]) ? $context["stripe_form"] : null), "credit_card", array()), 'widget', array("attr" => array("data-stripe" => "number")));
        echo "
            </label>
        </div>

        <div class=\"form-row\">
            <label>
                <span>CVC</span>
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["stripe_form"]) ? $context["stripe_form"] : null), "credit_card_security", array()), 'widget', array("attr" => array("data-stripe" => "cvc")));
        echo "
            </label>
        </div>

        <div class=\"form-row\">
            <label>
                <span>Expiration (MM/YYYY)</span>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["stripe_form"]) ? $context["stripe_form"] : null), "credit_card_expiration_month", array()), 'widget', array("attr" => array("data-stripe" => "exp-month")));
        echo "
            </label>
            <span> / </span>
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["stripe_form"]) ? $context["stripe_form"] : null), "credit_card_expiration_year", array()), 'widget', array("attr" => array("data-stripe" => "exp-year")));
        echo "
        </div>

        <button type=\"submit\" id=\"payment-submit\">Submit Payment</button>

    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["stripe_form"]) ? $context["stripe_form"] : null), 'form_end');
        echo "

";
        
        $__internal_8766858d3d5d874bea9f9bc1463b1f2eb961075cc21e83f39c8f7d6f5577077a->leave($__internal_8766858d3d5d874bea9f9bc1463b1f2eb961075cc21e83f39c8f7d6f5577077a_prof);

    }

    public function getTemplateName()
    {
        return "StripeBundle:Stripe:view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  77 => 30,  71 => 27,  61 => 20,  51 => 13,  42 => 7,  35 => 2,  23 => 1,);
    }
}
/* {% block payment_form %}*/
/* */
/*     <ul id="stripe_payment_error">*/
/* */
/*     </ul>*/
/* */
/*     {{ form_start(stripe_form, {action: url(stripe_execute_route), attr: {"id" : "payment-form", "method": "GET"}}) }}*/
/*         <span class="payment-errors"></span>*/
/* */
/*         <div class="form-row">*/
/*             <label>*/
/*                 <span>Card number</span>*/
/*                 {{ form_widget(stripe_form.credit_card, {'attr': {'data-stripe': 'number'}}) }}*/
/*             </label>*/
/*         </div>*/
/* */
/*         <div class="form-row">*/
/*             <label>*/
/*                 <span>CVC</span>*/
/*                 {{ form_widget(stripe_form.credit_card_security, {'attr': {'data-stripe': 'cvc'}}) }}*/
/*             </label>*/
/*         </div>*/
/* */
/*         <div class="form-row">*/
/*             <label>*/
/*                 <span>Expiration (MM/YYYY)</span>*/
/*                 {{ form_widget(stripe_form.credit_card_expiration_month, {'attr': {'data-stripe': 'exp-month'}}) }}*/
/*             </label>*/
/*             <span> / </span>*/
/*             {{ form_widget(stripe_form.credit_card_expiration_year, {'attr': {'data-stripe': 'exp-year'}}) }}*/
/*         </div>*/
/* */
/*         <button type="submit" id="payment-submit">Submit Payment</button>*/
/* */
/*     {{ form_end(stripe_form) }}*/
/* */
/* {% endblock payment_form %}*/
/* */
