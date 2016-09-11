<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_271a0792af7151dec48be224aed4df7d72d428aaca1fd8f6013587907b9ebca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b338f735c75e32931b5637a65ac1bc5b6b895427bcc6ede675b8ee4999e92b6 = $this->env->getExtension("native_profiler");
        $__internal_0b338f735c75e32931b5637a65ac1bc5b6b895427bcc6ede675b8ee4999e92b6->enter($__internal_0b338f735c75e32931b5637a65ac1bc5b6b895427bcc6ede675b8ee4999e92b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_0b338f735c75e32931b5637a65ac1bc5b6b895427bcc6ede675b8ee4999e92b6->leave($__internal_0b338f735c75e32931b5637a65ac1bc5b6b895427bcc6ede675b8ee4999e92b6_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_e36723cf690cd043b38b75cf66977f13cef6077d4303287838a1a63761a57135 = $this->env->getExtension("native_profiler");
        $__internal_e36723cf690cd043b38b75cf66977f13cef6077d4303287838a1a63761a57135->enter($__internal_e36723cf690cd043b38b75cf66977f13cef6077d4303287838a1a63761a57135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_e36723cf690cd043b38b75cf66977f13cef6077d4303287838a1a63761a57135->leave($__internal_e36723cf690cd043b38b75cf66977f13cef6077d4303287838a1a63761a57135_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% block hwi_oauth_content %}*/
/*             {% endblock hwi_oauth_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
