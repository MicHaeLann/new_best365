<?php

/* PaypalWebCheckoutBundle:Payment:process.html.twig */
class __TwigTemplate_9ff97b355c6120e20f0a9a53aaf6025153fba28da153cfff949e464c3865f017 extends Twig_Template
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
        $__internal_c77162ba8aa95025994cce38b918149073453c3cae121d6f0b97c16c970166fe = $this->env->getExtension("native_profiler");
        $__internal_c77162ba8aa95025994cce38b918149073453c3cae121d6f0b97c16c970166fe->enter($__internal_c77162ba8aa95025994cce38b918149073453c3cae121d6f0b97c16c970166fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaypalWebCheckoutBundle:Payment:process.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Paypal Web checkout Redirect Form</title>
</head>
<body>
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "paypal_checkout_form")));
        echo "
        <input type=\"hidden\" name=\"cmd\" value=\"_cart\">
        <input type=\"hidden\" name=\"upload\" value=\"1\">
        <input type=\"hidden\" name=\"lc\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    <script language=\"JavaScript\" type=\"text/javascript\">

        var form = document.forms[0];
        form.submit();

    </script>
</body>
</html>
";
        
        $__internal_c77162ba8aa95025994cce38b918149073453c3cae121d6f0b97c16c970166fe->leave($__internal_c77162ba8aa95025994cce38b918149073453c3cae121d6f0b97c16c970166fe_prof);

    }

    public function getTemplateName()
    {
        return "PaypalWebCheckoutBundle:Payment:process.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  41 => 12,  37 => 11,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Paypal Web checkout Redirect Form</title>*/
/* </head>*/
/* <body>*/
/*     {{ form_start(form, {'attr': {'id': 'paypal_checkout_form'}}) }}*/
/*         <input type="hidden" name="cmd" value="_cart">*/
/*         <input type="hidden" name="upload" value="1">*/
/*         <input type="hidden" name="lc" value="{{ app.request.locale }}">*/
/*         {{ form_rest(form) }}*/
/* */
/*     {{ form_end(form) }}*/
/* */
/*     <script language="JavaScript" type="text/javascript">*/
/* */
/*         var form = document.forms[0];*/
/*         form.submit();*/
/* */
/*     </script>*/
/* </body>*/
/* </html>*/
/* */
