<?php

/* StoreTemplateBundle:Modules:_paginator.html.twig */
class __TwigTemplate_45d909f96addd432639ef5c712d16d4912318e1e955ce4a6b4e1662d5daadb52 extends Twig_Template
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
        $__internal_07890a670892be60f0c11adba34e9638d2edb018e2db2896d470d455c80847aa = $this->env->getExtension("native_profiler");
        $__internal_07890a670892be60f0c11adba34e9638d2edb018e2db2896d470d455c80847aa->enter($__internal_07890a670892be60f0c11adba34e9638d2edb018e2db2896d470d455c80847aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_paginator.html.twig"));

        // line 18
        ob_start();
        // line 19
        echo "<nav class=\"pagination\">
    <ul>
        ";
        // line 21
        $context["enabled"] = ((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1);
        // line 22
        echo "
        <li class=\"first";
        // line 23
        if ( !(isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo " disabled";
        }
        echo "\">
            ";
        // line 24
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "<a  href=\"";
            echo $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : null), array("page" => 1));
            echo "\">";
        }
        // line 25
        echo "            <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.pagination.first"), "html", null, true);
        echo "</span>
            ";
        // line 26
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "</a>";
        }
        // line 27
        echo "        </li>

        <li class=\"prev";
        // line 29
        if ( !(isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo " disabled";
        }
        echo "\">
            ";
        // line 30
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : null), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1))), "html", null, true);
            echo "\">";
        }
        // line 31
        echo "            <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.pagination.previous"), "html", null, true);
        echo "</span>
            ";
        // line 32
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "</a>";
        }
        // line 33
        echo "        </li>

        ";
        // line 35
        $context["lowerLimit"] = max(1, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - (isset($context["contextPages"]) ? $context["contextPages"] : null)));
        // line 36
        echo "        ";
        $context["upperLimit"] = ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1);
        // line 37
        echo "
        ";
        // line 38
        if (((isset($context["separator"]) ? $context["separator"] : null) && ((isset($context["lowerLimit"]) ? $context["lowerLimit"] : null) > 1))) {
            // line 39
            echo "            <li class=\"separator\"></li>
        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if (((isset($context["lowerLimit"]) ? $context["lowerLimit"] : null) <= (isset($context["upperLimit"]) ? $context["upperLimit"] : null))) {
            // line 43
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["lowerLimit"]) ? $context["lowerLimit"] : null), (isset($context["upperLimit"]) ? $context["upperLimit"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "                <li class=\"page\">
                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : null), array("page" => $context["page"])), "html", null, true);
                echo "\">
                        <span>";
                // line 46
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "
        <li class=\"active\">
            <span>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "</span>
        </li>

        ";
        // line 56
        $context["lowerLimit"] = ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1);
        // line 57
        echo "        ";
        $context["upperLimit"] = min(((isset($context["currentPage"]) ? $context["currentPage"] : null) + (isset($context["contextPages"]) ? $context["contextPages"] : null)), (isset($context["totalPages"]) ? $context["totalPages"] : null));
        // line 58
        echo "
        ";
        // line 59
        if (((isset($context["lowerLimit"]) ? $context["lowerLimit"] : null) <= (isset($context["upperLimit"]) ? $context["upperLimit"] : null))) {
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["lowerLimit"]) ? $context["lowerLimit"] : null), (isset($context["upperLimit"]) ? $context["upperLimit"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 61
                echo "                <li class=\"page\">
                    <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : null), array("page" => $context["page"])), "html", null, true);
                echo "\">
                        <span>";
                // line 63
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((isset($context["separator"]) ? $context["separator"] : null) && ((isset($context["upperLimit"]) ? $context["upperLimit"] : null) < (isset($context["totalPages"]) ? $context["totalPages"] : null)))) {
            // line 70
            echo "            <li class=\"separator\"></li>
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        $context["enabled"] = ((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["totalPages"]) ? $context["totalPages"] : null));
        // line 74
        echo "
        <li class=\"next";
        // line 75
        if ( !(isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo " disabled";
        }
        echo "\">
            ";
        // line 76
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : null), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1))), "html", null, true);
            echo "\">";
        }
        // line 77
        echo "            <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.pagination.next"), "html", null, true);
        echo "</span>
            ";
        // line 78
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "</a>";
        }
        // line 79
        echo "        </li>

        <li class=\"last";
        // line 81
        if ( !(isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo " disabled";
        }
        echo "\">
            ";
        // line 82
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : null), array("page" => (isset($context["totalPages"]) ? $context["totalPages"] : null))), "html", null, true);
            echo "\">";
        }
        // line 83
        echo "            <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("store.pagination.last"), "html", null, true);
        echo "</span>
            ";
        // line 84
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            echo "</a>";
        }
        // line 85
        echo "        </li>
    </ul>
</nav>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07890a670892be60f0c11adba34e9638d2edb018e2db2896d470d455c80847aa->leave($__internal_07890a670892be60f0c11adba34e9638d2edb018e2db2896d470d455c80847aa_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 85,  231 => 84,  226 => 83,  220 => 82,  214 => 81,  210 => 79,  206 => 78,  201 => 77,  195 => 76,  189 => 75,  186 => 74,  184 => 73,  181 => 72,  177 => 70,  175 => 69,  172 => 68,  169 => 67,  159 => 63,  155 => 62,  152 => 61,  147 => 60,  145 => 59,  142 => 58,  139 => 57,  137 => 56,  131 => 53,  127 => 51,  124 => 50,  114 => 46,  110 => 45,  107 => 44,  102 => 43,  100 => 42,  97 => 41,  93 => 39,  91 => 38,  88 => 37,  85 => 36,  83 => 35,  79 => 33,  75 => 32,  70 => 31,  64 => 30,  58 => 29,  54 => 27,  50 => 26,  45 => 25,  39 => 24,  33 => 23,  30 => 22,  28 => 21,  24 => 19,  22 => 18,);
    }
}
/* {#*/
/*  # Generate a list of pagination links*/
/*  #*/
/*  # This module expects the following variables:*/
/*  #*/
/*  # Mandatory variables*/
/*  #*/
/*  # - currentPage:  Number of the current page*/
/*  # - totalPages:   Total number of pages*/
/*  # - limitPerPage: Number of items in a page*/
/*  # - route:        Route name to generate pages*/
/*  #*/
/*  # Optional variables*/
/*  #*/
/*  # - contextPages: How many pages in the context (default: 0)*/
/*  # - separator:    Add separator if context is far from edges (default: true)*/
/*  #}*/
/* {% spaceless %}*/
/* <nav class="pagination">*/
/*     <ul>*/
/*         {% set enabled = currentPage > 1 %}*/
/* */
/*         <li class="first{% if not enabled %} disabled{% endif %}">*/
/*             {% if enabled %}<a  href="{{ url(route, { page: 1 }) }}">{% endif %}*/
/*             <span>{{ 'store.pagination.first'|trans }}</span>*/
/*             {% if enabled %}</a>{% endif %}*/
/*         </li>*/
/* */
/*         <li class="prev{% if not enabled %} disabled{% endif %}">*/
/*             {% if enabled %}<a href="{{ url(route, { page: currentPage - 1 }) }}">{% endif %}*/
/*             <span>{{ 'store.pagination.previous'|trans }}</span>*/
/*             {% if enabled %}</a>{% endif %}*/
/*         </li>*/
/* */
/*         {% set lowerLimit = max(1, currentPage - contextPages) %}*/
/*         {% set upperLimit = currentPage - 1 %}*/
/* */
/*         {% if separator and lowerLimit > 1 %}*/
/*             <li class="separator"></li>*/
/*         {% endif %}*/
/* */
/*         {% if lowerLimit <= upperLimit %}*/
/*             {% for page in lowerLimit..upperLimit %}*/
/*                 <li class="page">*/
/*                     <a href="{{ url(route, { page: page }) }}">*/
/*                         <span>{{ page }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <li class="active">*/
/*             <span>{{ currentPage }}</span>*/
/*         </li>*/
/* */
/*         {% set lowerLimit = currentPage + 1 %}*/
/*         {% set upperLimit = min(currentPage + contextPages, totalPages) %}*/
/* */
/*         {% if lowerLimit <= upperLimit %}*/
/*             {% for page in lowerLimit..upperLimit %}*/
/*                 <li class="page">*/
/*                     <a href="{{ url(route, { page: page }) }}">*/
/*                         <span>{{ page }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         {% if separator and upperLimit < totalPages %}*/
/*             <li class="separator"></li>*/
/*         {% endif %}*/
/* */
/*         {% set enabled = currentPage < totalPages %}*/
/* */
/*         <li class="next{% if not enabled %} disabled{% endif %}">*/
/*             {% if enabled %}<a href="{{ url(route, { page: currentPage + 1 }) }}">{% endif %}*/
/*             <span>{{ 'store.pagination.next'|trans }}</span>*/
/*             {% if enabled %}</a>{% endif %}*/
/*         </li>*/
/* */
/*         <li class="last{% if not enabled %} disabled{% endif %}">*/
/*             {% if enabled %}<a href="{{ url(route, { page: totalPages }) }}">{% endif %}*/
/*             <span>{{ 'store.pagination.last'|trans }}</span>*/
/*             {% if enabled %}</a>{% endif %}*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
/* {% endspaceless %}*/
/* */
