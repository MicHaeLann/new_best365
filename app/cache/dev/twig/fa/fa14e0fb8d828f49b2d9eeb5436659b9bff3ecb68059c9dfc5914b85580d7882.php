<?php

/* AdminGeoBundle:Location:showCitySelector.html.twig */
class __TwigTemplate_16ee3b9d4da11a006d81811326bb6138e037b63fee0ce6bc82c1a7d38e11608d extends Twig_Template
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
        $__internal_c2312904aff0cc425b0a1096333629faa2ea9479ca62b53ddb2cace96dab2d50 = $this->env->getExtension("native_profiler");
        $__internal_c2312904aff0cc425b0a1096333629faa2ea9479ca62b53ddb2cace96dab2d50->enter($__internal_c2312904aff0cc425b0a1096333629faa2ea9479ca62b53ddb2cace96dab2d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminGeoBundle:Location:showCitySelector.html.twig"));

        // line 1
        echo "<ol id=\"js-location-selectors\" data-url=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_location_selectors");
        echo "\" class=\"grid\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selects"]) ? $context["selects"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
            // line 3
            echo "        <li class=\"d-ib mr-m\">
            ";
            // line 4
            $context["fieldType"] = (("admin.address.field." . $this->getAttribute($context["select"], "type", array())) . ".title");
            // line 5
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["select"], "type", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["fieldType"]) ? $context["fieldType"] : null)), "html", null, true);
            echo "</label>
            <select";
            // line 6
            if (($this->getAttribute($context["select"], "type", array()) == (isset($context["maxLocationType"]) ? $context["maxLocationType"] : null))) {
                echo " data-max-type";
            }
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " class=\"last\"";
            }
            echo ">
                <option>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.address.select.placeholder"), "html", null, true);
            echo "</option>
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["select"], "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 9
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (($context["key"] == $this->getAttribute($context["select"], "selected", array()))) {
                    echo " selected";
                }
                echo ">
                        ";
                // line 10
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </select>
        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ol>
";
        
        $__internal_c2312904aff0cc425b0a1096333629faa2ea9479ca62b53ddb2cace96dab2d50->leave($__internal_c2312904aff0cc425b0a1096333629faa2ea9479ca62b53ddb2cace96dab2d50_prof);

    }

    public function getTemplateName()
    {
        return "AdminGeoBundle:Location:showCitySelector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 16,  91 => 13,  82 => 10,  73 => 9,  69 => 8,  65 => 7,  56 => 6,  49 => 5,  47 => 4,  44 => 3,  27 => 2,  22 => 1,);
    }
}
/* <ol id="js-location-selectors" data-url="{{ url('admin_location_selectors') }}" class="grid">*/
/*     {% for select in selects %}*/
/*         <li class="d-ib mr-m">*/
/*             {% set fieldType = 'admin.address.field.' ~ select.type ~ '.title' %}*/
/*             <label for="{{ select.type }}">{{ fieldType|trans }}</label>*/
/*             <select{% if select.type == maxLocationType %} data-max-type{% endif %}{% if loop.last %} class="last"{% endif %}>*/
/*                 <option>{{ 'admin.address.select.placeholder'|trans }}</option>*/
/*                 {% for key, value in select.options %}*/
/*                     <option value="{{ key }}"{% if key == select.selected %} selected{% endif %}>*/
/*                         {{ value }}*/
/*                     </option>*/
/*                 {% endfor%}*/
/*             </select>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ol>*/
/* */
