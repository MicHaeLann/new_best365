<?php

/* StripeBundle:Stripe:scripts.html.twig */
class __TwigTemplate_915c842172a63084f8e4c757552b4c8169572ae53e6d3a22eed5cb7c247c9a0d extends Twig_Template
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
        $__internal_2c8f03eb0826d1bfb201ef57cd8f9b733731286e895ee498ed96062b8d8611af = $this->env->getExtension("native_profiler");
        $__internal_2c8f03eb0826d1bfb201ef57cd8f9b733731286e895ee498ed96062b8d8611af->enter($__internal_2c8f03eb0826d1bfb201ef57cd8f9b733731286e895ee498ed96062b8d8611af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StripeBundle:Stripe:scripts.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\" src=\"https://js.stripe.com/v2/\"></script>

<script type=\"text/javascript\">

    var STRIPE_PUBLIC_KEY = '";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "';

    // This identifies your website in the createToken call below
    Stripe.setPublishableKey(STRIPE_PUBLIC_KEY);

    /**
     * Validation for stripe payment
     */
    var stripeResponseHandler = function(status, response) {
        var \$form = \$('#payment-form');

        if (response.error) {
            // Show the errors on the form
            \$form.find('.payment-errors').text(response.error.message);
            \$form.find('button').prop('disabled', false);
        } else {
            // token contains id, last4, and card type
            var token = response.id;
            // Insert the token into the form so it gets submitted to the server
            \$form.append(\$('<input type=\"hidden\" name=\"stripeToken\" />').val(token));
            \$('#stripe_view_api_token').val(\$('#stripe_view__token').val());
            // and submit
            \$form.get(0).submit();
        }
    };

    \$(\"#payment-submit\").on(\"click\", function(event){

        var \$form = \$(this).closest('form');
        \$form.find('button').prop('disabled', true);

        Stripe.createToken(\$form, stripeResponseHandler);

        return false;
    });

</script>
";
        
        $__internal_2c8f03eb0826d1bfb201ef57cd8f9b733731286e895ee498ed96062b8d8611af->leave($__internal_2c8f03eb0826d1bfb201ef57cd8f9b733731286e895ee498ed96062b8d8611af_prof);

    }

    public function getTemplateName()
    {
        return "StripeBundle:Stripe:scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <script type="text/javascript" src="https://js.stripe.com/v2/"></script>*/
/* */
/* <script type="text/javascript">*/
/* */
/*     var STRIPE_PUBLIC_KEY = '{{ public_key }}';*/
/* */
/*     // This identifies your website in the createToken call below*/
/*     Stripe.setPublishableKey(STRIPE_PUBLIC_KEY);*/
/* */
/*     /***/
/*      * Validation for stripe payment*/
/*      *//* */
/*     var stripeResponseHandler = function(status, response) {*/
/*         var $form = $('#payment-form');*/
/* */
/*         if (response.error) {*/
/*             // Show the errors on the form*/
/*             $form.find('.payment-errors').text(response.error.message);*/
/*             $form.find('button').prop('disabled', false);*/
/*         } else {*/
/*             // token contains id, last4, and card type*/
/*             var token = response.id;*/
/*             // Insert the token into the form so it gets submitted to the server*/
/*             $form.append($('<input type="hidden" name="stripeToken" />').val(token));*/
/*             $('#stripe_view_api_token').val($('#stripe_view__token').val());*/
/*             // and submit*/
/*             $form.get(0).submit();*/
/*         }*/
/*     };*/
/* */
/*     $("#payment-submit").on("click", function(event){*/
/* */
/*         var $form = $(this).closest('form');*/
/*         $form.find('button').prop('disabled', true);*/
/* */
/*         Stripe.createToken($form, stripeResponseHandler);*/
/* */
/*         return false;*/
/*     });*/
/* */
/* </script>*/
/* */
