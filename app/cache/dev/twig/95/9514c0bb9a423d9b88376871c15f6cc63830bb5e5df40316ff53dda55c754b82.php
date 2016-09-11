<?php

/* HWIOAuthBundle:Connect:connect_confirm.html.twig */
class __TwigTemplate_60f37e107d829d2c85158d046d56ebbaecbae4a524c2050fda250df2f15d8ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_confirm.html.twig", 1);
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
        $__internal_cac12d84c7ca63092349449428309f3d2ac12edb2f76d7b568727da762f2ee24 = $this->env->getExtension("native_profiler");
        $__internal_cac12d84c7ca63092349449428309f3d2ac12edb2f76d7b568727da762f2ee24->enter($__internal_cac12d84c7ca63092349449428309f3d2ac12edb2f76d7b568727da762f2ee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac12d84c7ca63092349449428309f3d2ac12edb2f76d7b568727da762f2ee24->leave($__internal_cac12d84c7ca63092349449428309f3d2ac12edb2f76d7b568727da762f2ee24_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_503d36108b40e95037141683a4b435e2c5261073e5bb14b7b7d1bea300b6bcb6 = $this->env->getExtension("native_profiler");
        $__internal_503d36108b40e95037141683a4b435e2c5261073e5bb14b7b7d1bea300b6bcb6->enter($__internal_503d36108b40e95037141683a4b435e2c5261073e5bb14b7b7d1bea300b6bcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.connecting", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.text", array("%service%" => $this->env->getExtension('translator')->trans((isset($context["service"]) ? $context["service"] : null), array(), "HWIOAuthBundle"), "%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</p>
            <p>
                <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hwi_oauth_connect_service", array("service" => (isset($context["service"]) ? $context["service"] : null), "key" => (isset($context["key"]) ? $context["key"] : null))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    <div>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                    </div>
                </form>
            </p>
        </div>
        <div class=\"span6\">
            ";
        // line 19
        if (($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array())))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 22
        echo "        </div>
    </div>
";
        
        $__internal_503d36108b40e95037141683a4b435e2c5261073e5bb14b7b7d1bea300b6bcb6->leave($__internal_503d36108b40e95037141683a4b435e2c5261073e5bb14b7b7d1bea300b6bcb6_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  80 => 20,  78 => 19,  67 => 13,  63 => 12,  58 => 10,  52 => 9,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.connecting' | trans({}, 'HWIOAuthBundle')}}</h3>*/
/*     <div class="row">*/
/*         <div class="span6">*/
/*             <p>{{ 'connect.confirm.text' | trans({'%service%': service | trans({}, 'HWIOAuthBundle'), '%name%': userInformation.realName}, 'HWIOAuthBundle') }}</p>*/
/*             <p>*/
/*                 <form action="{{ path('hwi_oauth_connect_service', {'service': service, 'key': key}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <button type="submit" class="btn btn-primary">{{ 'connect.confirm.submit' | trans({}, 'HWIOAuthBundle') }}</button>*/
/*                         <a href="{{ path('hwi_oauth_connect') }}" class="btn">{{ 'connect.confirm.cancel' | trans({}, 'HWIOAuthBundle') }}</a>*/
/*                     </div>*/
/*                 </form>*/
/*             </p>*/
/*         </div>*/
/*         <div class="span6">*/
/*             {% if userInformation.profilePicture is defined and userInformation.profilePicture is not empty %}*/
/*                 <img src="{{ userInformation.profilePicture }}" />*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock hwi_oauth_content %}*/
/* */
