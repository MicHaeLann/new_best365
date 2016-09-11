<?php

/* StoreTemplateBundle:Subpages:language-nav.html.twig */
class __TwigTemplate_45b6a11a18a2cdef3c3f4feedce1a1c660e52062d17c720e65427ded177da1a8 extends Twig_Template
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
        $__internal_dca106230d416a191cd1fa437c96c233cfab0b01d86408bc1c110c4a2cd54c92 = $this->env->getExtension("native_profiler");
        $__internal_dca106230d416a191cd1fa437c96c233cfab0b01d86408bc1c110c4a2cd54c92->enter($__internal_dca106230d416a191cd1fa437c96c233cfab0b01d86408bc1c110c4a2cd54c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:language-nav.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "    <nav class=\"currency-nav\">
        <div class=\"grid\">
            <ul>
                ";
            // line 5
            $context["routeName"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "attributes", array()), "get", array(0 => "_route"), "method");
            // line 6
            echo "                ";
            $context["routeParameters"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 8
                echo "                    <li>
                        <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["routeName"]) ? $context["routeName"] : null), twig_array_merge((isset($context["routeParameters"]) ? $context["routeParameters"] : null), array("_locale" => $this->getAttribute($context["language"], "iso", array())))), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["language"], "iso", array()) == (isset($context["activeLocale"]) ? $context["activeLocale"] : null))) {
                    echo " class=\"active\" ";
                }
                echo ">
                            ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso", array()), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </ul>
        </div>
    </nav>
";
        }
        
        $__internal_dca106230d416a191cd1fa437c96c233cfab0b01d86408bc1c110c4a2cd54c92->leave($__internal_dca106230d416a191cd1fa437c96c233cfab0b01d86408bc1c110c4a2cd54c92_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:language-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  50 => 10,  42 => 9,  39 => 8,  34 => 7,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/*     <nav class="currency-nav">*/
/*         <div class="grid">*/
/*             <ul>*/
/*                 {% set routeName = request.attributes.get('_route') %}*/
/*                 {% set routeParameters = request.attributes.get('_route_params') %}*/
/*                 {% for language in languages %}*/
/*                     <li>*/
/*                         <a href="{{ url(routeName, routeParameters|merge({'_locale': language.iso })) }}" {% if language.iso == activeLocale %} class="active" {% endif %}>*/
/*                             {{ language.iso }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* {% endif %}*/
/* */
