<?php

/* AdminCoreBundle:Common:component.html.twig */
class __TwigTemplate_b8a7a86c6ef4849eb44a0031f9524a1b1e864967fe5250ee96fc12fc62f06b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'component' => array($this, 'block_component'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af2d1a9f975cce95af48a4e90beda49e00320da582c77c3a66b620f2355ccbf = $this->env->getExtension("native_profiler");
        $__internal_1af2d1a9f975cce95af48a4e90beda49e00320da582c77c3a66b620f2355ccbf->enter($__internal_1af2d1a9f975cce95af48a4e90beda49e00320da582c77c3a66b620f2355ccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Common:component.html.twig"));

        // line 1
        $context["lists"] = $this;
        // line 2
        echo "

";
        // line 20
        echo "

";
        // line 22
        $this->displayBlock('component', $context, $blocks);
        
        $__internal_1af2d1a9f975cce95af48a4e90beda49e00320da582c77c3a66b620f2355ccbf->leave($__internal_1af2d1a9f975cce95af48a4e90beda49e00320da582c77c3a66b620f2355ccbf_prof);

    }

    public function block_component($context, array $blocks = array())
    {
        $__internal_b488d526cce37df6539a9f05b6868cd60ae8f4938b423d5f71115a3401d5f980 = $this->env->getExtension("native_profiler");
        $__internal_b488d526cce37df6539a9f05b6868cd60ae8f4938b423d5f71115a3401d5f980->enter($__internal_b488d526cce37df6539a9f05b6868cd60ae8f4938b423d5f71115a3401d5f980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "component"));

        // line 23
        echo "
    ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["paginator"]) ? $context["paginator"] : null)) > 0)) {
            // line 25
            echo "
        ";
            // line 26
            $this->displayBlock("table_pagination", $context, $blocks);
            echo "
        ";
            // line 27
            $this->displayBlock("table_content", $context, $blocks);
            echo "
        ";
            // line 28
            $this->displayBlock("table_pagination", $context, $blocks);
            echo "

    ";
        } else {
            // line 31
            echo "
        ";
            // line 32
            $this->displayBlock("no_items", $context, $blocks);
            echo "

    ";
        }
        // line 35
        echo "
";
        
        $__internal_b488d526cce37df6539a9f05b6868cd60ae8f4938b423d5f71115a3401d5f980->leave($__internal_b488d526cce37df6539a9f05b6868cd60ae8f4938b423d5f71115a3401d5f980_prof);

    }

    // line 4
    public function getno_items($__item__ = null, $__items__ = null, $__no_item_url__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "items" => $__items__,
            "no_item_url" => $__no_item_url__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2e4f1c877e6cfb28f46d939aa30b151defc055c21e6c3efe7d7a588decabc0cd = $this->env->getExtension("native_profiler");
            $__internal_2e4f1c877e6cfb28f46d939aa30b151defc055c21e6c3efe7d7a588decabc0cd->enter($__internal_2e4f1c877e6cfb28f46d939aa30b151defc055c21e6c3efe7d7a588decabc0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "no_items"));

            // line 5
            echo "
    <div class=\"no-items\">
        <i class=\"icon-table no-items-icon\"></i>
        <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.list.no_items", array("%items%" => (isset($context["items"]) ? $context["items"] : null))), "html", null, true);
            echo "</h2>
        ";
            // line 9
            if ( !twig_test_empty((isset($context["no_item_url"]) ? $context["no_item_url"] : null))) {
                // line 10
                echo "            <p>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, ((array_key_exists("no_item_url", $context)) ? (_twig_default_filter((isset($context["no_item_url"]) ? $context["no_item_url"] : null), "#")) : ("#")), "html", null, true);
                echo "\" class=\"button-primary\">
                    <i class=\"icon-plus\"></i>
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.list.create_first", array("%item%" => (isset($context["item"]) ? $context["item"] : null))), "html", null, true);
                echo "
                </a>
            </p>
        ";
            }
            // line 17
            echo "    </div>

";
            
            $__internal_2e4f1c877e6cfb28f46d939aa30b151defc055c21e6c3efe7d7a588decabc0cd->leave($__internal_2e4f1c877e6cfb28f46d939aa30b151defc055c21e6c3efe7d7a588decabc0cd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Common:component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 17,  120 => 13,  115 => 11,  112 => 10,  110 => 9,  106 => 8,  101 => 5,  84 => 4,  76 => 35,  70 => 32,  67 => 31,  61 => 28,  57 => 27,  53 => 26,  50 => 25,  48 => 24,  45 => 23,  33 => 22,  29 => 20,  25 => 2,  23 => 1,);
    }
}
/* {% import _self as lists %}*/
/* */
/* */
/* {% macro no_items(item, items, no_item_url) %}*/
/* */
/*     <div class="no-items">*/
/*         <i class="icon-table no-items-icon"></i>*/
/*         <h2>{{ 'ui.list.no_items'|trans({ '%items%': items }) }}</h2>*/
/*         {% if no_item_url is not empty %}*/
/*             <p>*/
/*                 <a href="{{ no_item_url|default('#') }}" class="button-primary">*/
/*                     <i class="icon-plus"></i>*/
/*                     {{ 'ui.list.create_first'|trans({ '%item%': item }) }}*/
/*                 </a>*/
/*             </p>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endmacro no_items %}*/
/* */
/* */
/* {% block component %}*/
/* */
/*     {% if paginator|length > 0 %}*/
/* */
/*         {{ block('table_pagination') }}*/
/*         {{ block('table_content') }}*/
/*         {{ block('table_pagination') }}*/
/* */
/*     {% else %}*/
/* */
/*         {{ block('no_items') }}*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock component %}*/
/* */
