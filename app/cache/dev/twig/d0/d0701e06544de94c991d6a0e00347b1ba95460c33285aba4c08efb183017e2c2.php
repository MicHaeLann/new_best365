<?php

/* StoreTemplateBundle:Subpages:currency-nav.html.twig */
class __TwigTemplate_801a3dea13d185754308bf4465807fb52abd6dc32292d1dcbfcd675d870f4734 extends Twig_Template
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
        $__internal_f75dbc45ae9c0d7d7cb0bc6b810ba704329e7cbde817f4cdc249d00be4f8da51 = $this->env->getExtension("native_profiler");
        $__internal_f75dbc45ae9c0d7d7cb0bc6b810ba704329e7cbde817f4cdc249d00be4f8da51->enter($__internal_f75dbc45ae9c0d7d7cb0bc6b810ba704329e7cbde817f4cdc249d00be4f8da51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:currency-nav.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "    <nav class=\"currency-nav\">
        <div class=\"grid\">
            <ul>
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "                    <li>
                        <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_currency_switch", array("iso" => $this->getAttribute($context["currency"], "iso", array()))), "html", null, true);
                echo "\" ";
                if (($context["currency"] == (isset($context["activeCurrency"]) ? $context["activeCurrency"] : null))) {
                    echo " class=\"active\" ";
                }
                echo ">
                            ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "iso", array()), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        </div>
    </nav>
";
        }
        
        $__internal_f75dbc45ae9c0d7d7cb0bc6b810ba704329e7cbde817f4cdc249d00be4f8da51->leave($__internal_f75dbc45ae9c0d7d7cb0bc6b810ba704329e7cbde817f4cdc249d00be4f8da51_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:currency-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  44 => 8,  36 => 7,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/*     <nav class="currency-nav">*/
/*         <div class="grid">*/
/*             <ul>*/
/*                 {% for currency in currencies %}*/
/*                     <li>*/
/*                         <a href="{{ url("store_currency_switch", {'iso': currency.iso}) }}" {% if currency == activeCurrency %} class="active" {% endif %}>*/
/*                             {{ currency.iso }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* {% endif %}*/
/* */
