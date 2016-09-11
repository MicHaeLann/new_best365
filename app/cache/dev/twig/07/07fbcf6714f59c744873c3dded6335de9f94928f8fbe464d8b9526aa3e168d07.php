<?php

/* AdminCoreBundle:Tables:paginator.html.twig */
class __TwigTemplate_bc71c62cc6d3e8604a602da56addb880b4911de198b926da99a3fe4a462cbfef extends Twig_Template
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
        $__internal_5317babe9417d98675a6497b27a39815e25a29aa59ffcba2c120b061ac8376ee = $this->env->getExtension("native_profiler");
        $__internal_5317babe9417d98675a6497b27a39815e25a29aa59ffcba2c120b061ac8376ee->enter($__internal_5317babe9417d98675a6497b27a39815e25a29aa59ffcba2c120b061ac8376ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Tables:paginator.html.twig"));

        // line 13
        echo "
";
        // line 14
        $context["is_first_page"] = ((isset($context["page"]) ? $context["page"] : null) == 1);
        // line 15
        $context["is_last_page"] = ((isset($context["page"]) ? $context["page"] : null) == (isset($context["total_pages"]) ? $context["total_pages"] : null));
        // line 16
        $context["prev_page"] = ((isset($context["page"]) ? $context["page"] : null) - 1);
        // line 17
        $context["next_page"] = ((isset($context["page"]) ? $context["page"] : null) + 1);
        // line 18
        echo "
";
        // line 19
        $context["space_left"] = (((isset($context["middle_group_length"]) ? $context["middle_group_length"] : null) + (isset($context["side_group_space_length"]) ? $context["side_group_space_length"] : null)) + 1);
        // line 20
        $context["space_right"] = (((isset($context["total_pages"]) ? $context["total_pages"] : null) - (isset($context["middle_group_length"]) ? $context["middle_group_length"] : null)) - (isset($context["side_group_space_length"]) ? $context["side_group_space_length"] : null));
        // line 21
        $context["first_middle_group_element"] = ((isset($context["page"]) ? $context["page"] : null) - (isset($context["middle_group_length"]) ? $context["middle_group_length"] : null));
        // line 22
        if (((isset($context["first_middle_group_element"]) ? $context["first_middle_group_element"] : null) < 1)) {
            // line 23
            echo "    ";
            $context["first_middle_group_element"] = 1;
        }
        // line 25
        $context["last_middle_group_element"] = (((isset($context["first_middle_group_element"]) ? $context["first_middle_group_element"] : null) + (isset($context["middle_group_length"]) ? $context["middle_group_length"] : null)) + 1);
        // line 26
        if (((isset($context["last_middle_group_element"]) ? $context["last_middle_group_element"] : null) > (isset($context["total_pages"]) ? $context["total_pages"] : null))) {
            // line 27
            echo "    ";
            $context["last_middle_group_element"] = (isset($context["total_pages"]) ? $context["total_pages"] : null);
            // line 28
            echo "    ";
            $context["first_middle_group_element"] = ((isset($context["last_middle_group_element"]) ? $context["last_middle_group_element"] : null) - (2 * (isset($context["middle_group_length"]) ? $context["middle_group_length"] : null)));
        }
        // line 30
        echo "


<nav class=\"pagination\">
    <ul>
        ";
        // line 35
        if ( !(isset($context["is_first_page"]) ? $context["is_first_page"] : null)) {
            // line 36
            echo "        <li>
            <a ";
            // line 37
            if (((isset($context["is_first_page"]) ? $context["is_first_page"] : null) == false)) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["url"]) ? $context["url"] : null), array("page" =>                 // line 38
(isset($context["prev_page"]) ? $context["prev_page"] : null), "limit" =>                 // line 39
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>                 // line 40
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>                 // line 41
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))), "html", null, true);
                // line 42
                echo "\"";
            }
            echo ">
                <span class=\"icon-step-backward\"></span>
            </a>
        </li>
        ";
        }
        // line 47
        echo "        ";
        if (((isset($context["space_left"]) ? $context["space_left"] : null) <= (isset($context["page"]) ? $context["page"] : null))) {
            // line 48
            echo "            <li>
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["url"]) ? $context["url"] : null), array("page" => 1, "limit" =>             // line 51
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>             // line 52
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>             // line 53
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))), "html", null, true);
            // line 54
            echo "\">1</a>
            </li>
            ";
            // line 56
            if (((isset($context["space_left"]) ? $context["space_left"] : null) < (isset($context["page"]) ? $context["page"] : null))) {
                // line 57
                echo "                <li class=\"disabled\"><a>...</a></li>
            ";
            }
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (((isset($context["total_pages"]) ? $context["total_pages"] : null) > 1)) {
            // line 62
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["first_middle_group_element"]) ? $context["first_middle_group_element"] : null), (isset($context["last_middle_group_element"]) ? $context["last_middle_group_element"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["current_iterated_page"]) {
                // line 63
                echo "                <li class=\"prev";
                if (($context["current_iterated_page"] == (isset($context["page"]) ? $context["page"] : null))) {
                    echo " disabled";
                }
                echo "\">
                <a ";
                // line 64
                if (($context["current_iterated_page"] != (isset($context["page"]) ? $context["page"] : null))) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["url"]) ? $context["url"] : null), array("page" =>                     // line 65
$context["current_iterated_page"], "limit" =>                     // line 66
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>                     // line 67
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>                     // line 68
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))), "html", null, true);
                    // line 69
                    echo "\"";
                }
                echo ">
                    ";
                // line 70
                echo twig_escape_filter($this->env, $context["current_iterated_page"], "html", null, true);
                echo "
                </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_iterated_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        ";
        }
        // line 75
        echo "
        ";
        // line 76
        if (((isset($context["space_right"]) ? $context["space_right"] : null) >= (isset($context["page"]) ? $context["page"] : null))) {
            // line 77
            echo "            ";
            if (((isset($context["space_right"]) ? $context["space_right"] : null) > (isset($context["page"]) ? $context["page"] : null))) {
                // line 78
                echo "                <li class=\"disabled\"><a>...</a></li>
            ";
            }
            // line 80
            echo "            <li>
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["url"]) ? $context["url"] : null), array("page" =>             // line 82
(isset($context["total_pages"]) ? $context["total_pages"] : null), "limit" =>             // line 83
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>             // line 84
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>             // line 85
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))), "html", null, true);
            // line 86
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["total_pages"]) ? $context["total_pages"] : null), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 89
        echo "        ";
        if ( !(isset($context["is_last_page"]) ? $context["is_last_page"] : null)) {
            // line 90
            echo "        <li>
            ";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["is_last_page"]) ? $context["is_last_page"] : null), "html", null, true);
            echo "
            <a ";
            // line 92
            if (((isset($context["is_last_page"]) ? $context["is_last_page"] : null) == false)) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["url"]) ? $context["url"] : null), array("page" =>                 // line 93
(isset($context["next_page"]) ? $context["next_page"] : null), "limit" =>                 // line 94
(isset($context["limit"]) ? $context["limit"] : null), "orderByField" =>                 // line 95
(isset($context["orderByField"]) ? $context["orderByField"] : null), "orderByDirection" =>                 // line 96
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null))), "html", null, true);
                // line 97
                echo "\"";
            }
            echo ">
                <span class=\"icon-step-forward\"></span>
            </a>
        </li>
        ";
        }
        // line 102
        echo "    </ul>
</nav>
";
        
        $__internal_5317babe9417d98675a6497b27a39815e25a29aa59ffcba2c120b061ac8376ee->leave($__internal_5317babe9417d98675a6497b27a39815e25a29aa59ffcba2c120b061ac8376ee_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Tables:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 102,  201 => 97,  199 => 96,  198 => 95,  197 => 94,  196 => 93,  193 => 92,  189 => 91,  186 => 90,  183 => 89,  176 => 86,  174 => 85,  173 => 84,  172 => 83,  171 => 82,  170 => 81,  167 => 80,  163 => 78,  160 => 77,  158 => 76,  155 => 75,  152 => 74,  142 => 70,  137 => 69,  135 => 68,  134 => 67,  133 => 66,  132 => 65,  129 => 64,  122 => 63,  117 => 62,  115 => 61,  112 => 60,  109 => 59,  105 => 57,  103 => 56,  99 => 54,  97 => 53,  96 => 52,  95 => 51,  94 => 49,  91 => 48,  88 => 47,  79 => 42,  77 => 41,  76 => 40,  75 => 39,  74 => 38,  71 => 37,  68 => 36,  66 => 35,  59 => 30,  55 => 28,  52 => 27,  50 => 26,  48 => 25,  44 => 23,  42 => 22,  40 => 21,  38 => 20,  36 => 19,  33 => 18,  31 => 17,  29 => 16,  27 => 15,  25 => 14,  22 => 13,);
    }
}
/* {# vars*/
/* */
/*     * page : Current page*/
/*     * total_pages : Total pages of query*/
/*     * url : Url of pagination*/
/*     * limit : Elements per page*/
/*     * order_by_field : Field to order by*/
/*     * order_by_direction : Direction to order by this field*/
/*     * middle_group_length : Length of middle group -> 1 ... 3,4,5 ... 19 <- length = 1 [3,[4],5]*/
/*     * side_group_space_length : Length of separation between first and last page*/
/*       and middle group -> 1 ... 4,5,6 ... 19 <- length = 2 [ 1 ... 4 ]*/
/* #}*/
/* */
/* {% set is_first_page = page == 1 %}*/
/* {% set is_last_page = page == total_pages %}*/
/* {% set prev_page = page - 1 %}*/
/* {% set next_page = page + 1 %}*/
/* */
/* {% set space_left = middle_group_length + side_group_space_length + 1 %}*/
/* {% set space_right = total_pages - middle_group_length - side_group_space_length %}*/
/* {% set first_middle_group_element = page - middle_group_length %}*/
/* {% if first_middle_group_element < 1 %}*/
/*     {% set first_middle_group_element = 1 %}*/
/* {% endif %}*/
/* {% set last_middle_group_element = first_middle_group_element + middle_group_length + 1 %}*/
/* {% if last_middle_group_element > total_pages %}*/
/*     {% set last_middle_group_element = total_pages %}*/
/*     {% set first_middle_group_element = last_middle_group_element - (2 * middle_group_length) %}*/
/* {% endif %}*/
/* */
/* */
/* */
/* <nav class="pagination">*/
/*     <ul>*/
/*         {% if not is_first_page %}*/
/*         <li>*/
/*             <a {% if is_first_page == false %} href="{{ url(url, {*/
/*                 page: prev_page,*/
/*                 limit: limit,*/
/*                 orderByField: orderByField,*/
/*                 orderByDirection: orderByDirection*/
/*             }) }}"{% endif %}>*/
/*                 <span class="icon-step-backward"></span>*/
/*             </a>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% if space_left <= page %}*/
/*             <li>*/
/*                 <a href="{{ url(url, {*/
/*                     page: 1,*/
/*                     limit: limit,*/
/*                     orderByField: orderByField,*/
/*                     orderByDirection: orderByDirection*/
/*                 }) }}">1</a>*/
/*             </li>*/
/*             {% if space_left < page %}*/
/*                 <li class="disabled"><a>...</a></li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if total_pages > 1 %}*/
/*             {% for current_iterated_page in first_middle_group_element..last_middle_group_element %}*/
/*                 <li class="prev{% if current_iterated_page == page %} disabled{% endif %}">*/
/*                 <a {% if current_iterated_page != page %} href="{{ url(url, {*/
/*                     page: current_iterated_page,*/
/*                     limit: limit,*/
/*                     orderByField: orderByField,*/
/*                     orderByDirection: orderByDirection*/
/*                 }) }}"{% endif %}>*/
/*                     {{ current_iterated_page }}*/
/*                 </a>*/
/*             </li>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         {% if space_right >= page %}*/
/*             {% if space_right > page %}*/
/*                 <li class="disabled"><a>...</a></li>*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ url(url, {*/
/*                     page: total_pages,*/
/*                     limit: limit,*/
/*                     orderByField: orderByField,*/
/*                     orderByDirection: orderByDirection*/
/*                 }) }}">{{ total_pages }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if not is_last_page %}*/
/*         <li>*/
/*             {{ is_last_page }}*/
/*             <a {% if is_last_page == false %} href="{{ url(url, {*/
/*                 page: next_page,*/
/*                 limit: limit,*/
/*                 orderByField: orderByField,*/
/*                 orderByDirection: orderByDirection*/
/*             }) }}"{% endif %}>*/
/*                 <span class="icon-step-forward"></span>*/
/*             </a>*/
/*         </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </nav>*/
/* */
