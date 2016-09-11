<?php

/* StoreTemplateBundle:Modules:_message-item.html.twig */
class __TwigTemplate_c88649458820d4c7f0cca1e6a53d1e7a763314e7067a9a90ab9f86acf334e0fb extends Twig_Template
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
        $__internal_a87ca0d9072aa26ec36157c54dd2f8992a5b04403a2435e9761daea13ca7ea4a = $this->env->getExtension("native_profiler");
        $__internal_a87ca0d9072aa26ec36157c54dd2f8992a5b04403a2435e9761daea13ca7ea4a->enter($__internal_a87ca0d9072aa26ec36157c54dd2f8992a5b04403a2435e9761daea13ca7ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_message-item.html.twig"));

        // line 1
        if ((isset($context["flashMessage"]) ? $context["flashMessage"] : null)) {
            // line 2
            echo "    <div class=\"message ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
        ";
            // line 3
            echo (isset($context["flashMessage"]) ? $context["flashMessage"] : null);
            echo "
    </div>
";
        }
        
        $__internal_a87ca0d9072aa26ec36157c54dd2f8992a5b04403a2435e9761daea13ca7ea4a->leave($__internal_a87ca0d9072aa26ec36157c54dd2f8992a5b04403a2435e9761daea13ca7ea4a_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_message-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if flashMessage %}*/
/*     <div class="message {{ class }}">*/
/*         {{ flashMessage | raw }}*/
/*     </div>*/
/* {% endif %}*/
/* */
