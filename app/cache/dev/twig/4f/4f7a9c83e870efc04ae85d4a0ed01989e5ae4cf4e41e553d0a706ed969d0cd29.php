<?php

/* HWIOAuthBundle:Connect:registration.html.twig */
class __TwigTemplate_48ce7fb15c73691cde6e7752f4d9453f6d7ac51b75ba1d48f53faaf41ef11a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90f1b91a09f54118e63cfc4124f1e5a00bd5a1d706850103390d455617f1573c = $this->env->getExtension("native_profiler");
        $__internal_90f1b91a09f54118e63cfc4124f1e5a00bd5a1d706850103390d455617f1573c->enter($__internal_90f1b91a09f54118e63cfc4124f1e5a00bd5a1d706850103390d455617f1573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f1b91a09f54118e63cfc4124f1e5a00bd5a1d706850103390d455617f1573c->leave($__internal_90f1b91a09f54118e63cfc4124f1e5a00bd5a1d706850103390d455617f1573c_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_cb9fde49d29c2ca43c148fccbc1d70d0a6fb15881cefef3fe83f52e2ae67a43a = $this->env->getExtension("native_profiler");
        $__internal_cb9fde49d29c2ca43c148fccbc1d70d0a6fb15881cefef3fe83f52e2ae67a43a->enter($__internal_cb9fde49d29c2ca43c148fccbc1d70d0a6fb15881cefef3fe83f52e2ae67a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.register", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hwi_oauth_connect_registration", array("key" => (isset($context["key"]) ? $context["key"] : null))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"hwi_oauth_registration_register\">
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.registration.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.registration.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            </form>
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array()))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>

";
        
        $__internal_cb9fde49d29c2ca43c148fccbc1d70d0a6fb15881cefef3fe83f52e2ae67a43a->leave($__internal_cb9fde49d29c2ca43c148fccbc1d70d0a6fb15881cefef3fe83f52e2ae67a43a_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 17,  72 => 16,  62 => 11,  58 => 10,  53 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.register' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>*/
/*     <div class="row">*/
/*         <div class="span6">*/
/*             <form action="{{ path('hwi_oauth_connect_registration', {'key': key}) }}" {{ form_enctype(form) }} method="POST" class="hwi_oauth_registration_register">*/
/*                 {{ form_widget(form) }}*/
/*                 <div>*/
/*                     <button type="submit" class="btn btn-primary">{{ 'connect.registration.submit'|trans({}, 'HWIOAuthBundle') }}</button>*/
/*                     <a href="{{ path('hwi_oauth_connect') }}" class="btn">{{ 'connect.registration.cancel' | trans({}, 'HWIOAuthBundle') }}</a>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <div class="span6">*/
/*             {% if userInformation.profilePicture is not empty %}*/
/*                 <img src="{{ userInformation.profilePicture }}" />*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock hwi_oauth_content %}*/
/* */
