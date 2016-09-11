<?php

/* AdminCoreBundle:Common:flashMessages.html.twig */
class __TwigTemplate_d2751e0557eb7d4951edaf0e853e29f09b94c4e0516bc894c2c797d3fe2314f4 extends Twig_Template
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
        $__internal_eb2d028abb97d1c08029256589f82edafd3a502a75a036dd8c5f9fef58cb2d55 = $this->env->getExtension("native_profiler");
        $__internal_eb2d028abb97d1c08029256589f82edafd3a502a75a036dd8c5f9fef58cb2d55->enter($__internal_eb2d028abb97d1c08029256589f82edafd3a502a75a036dd8c5f9fef58cb2d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Common:flashMessages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <script type=\"text/javascript\">
        var Mediator,
            sUrl;
            if ( window!=window.top ) {
                document.body.innerHTML = '';
                Mediator = window.parent.FrontendMediator;
                sUrl = window.parent.document.getElementById('variants-url') !== null? window.parent.document.getElementById('variants-url').value : '';
                Mediator.publish( 'response:success', { url : sUrl } );
            }
    </script>
    <input type=\"hidden\"  data-fc-modules=\"notification\" data-fc-event=\"load\" data-fc-type=\"ok\" data-fc-text=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"]), "html", null, true);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "    <input type=\"hidden\"  data-fc-modules=\"notification\" data-fc-event=\"load\" data-fc-type=\"ko\" data-fc-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"]), "html", null, true);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eb2d028abb97d1c08029256589f82edafd3a502a75a036dd8c5f9fef58cb2d55->leave($__internal_eb2d028abb97d1c08029256589f82edafd3a502a75a036dd8c5f9fef58cb2d55_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Common:flashMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,  38 => 12,  26 => 2,  22 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('success') %}*/
/*     <script type="text/javascript">*/
/*         var Mediator,*/
/*             sUrl;*/
/*             if ( window!=window.top ) {*/
/*                 document.body.innerHTML = '';*/
/*                 Mediator = window.parent.FrontendMediator;*/
/*                 sUrl = window.parent.document.getElementById('variants-url') !== null? window.parent.document.getElementById('variants-url').value : '';*/
/*                 Mediator.publish( 'response:success', { url : sUrl } );*/
/*             }*/
/*     </script>*/
/*     <input type="hidden"  data-fc-modules="notification" data-fc-event="load" data-fc-type="ok" data-fc-text="{{ flashMessage|trans }}" />*/
/* {% endfor %}*/
/* {% for flashMessage in app.session.flashbag.get('error') %}*/
/*     <input type="hidden"  data-fc-modules="notification" data-fc-event="load" data-fc-type="ko" data-fc-text="{{ flashMessage|trans }}" />*/
/* {% endfor %}*/
/* */
