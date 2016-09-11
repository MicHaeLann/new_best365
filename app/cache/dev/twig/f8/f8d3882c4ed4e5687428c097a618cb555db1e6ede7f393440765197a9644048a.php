<?php

/* StoreTemplateBundle:Subpages:location-selector.html.twig */
class __TwigTemplate_80df73227089768e7493e8bad9bc66a4cf4c550e41dcf6e77e0a72d7890e4e85 extends Twig_Template
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
        $__internal_f68d95495862ccc72b47ab6248ff72a916629dd201f0c5f32059a6813ec717c9 = $this->env->getExtension("native_profiler");
        $__internal_f68d95495862ccc72b47ab6248ff72a916629dd201f0c5f32059a6813ec717c9->enter($__internal_f68d95495862ccc72b47ab6248ff72a916629dd201f0c5f32059a6813ec717c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:location-selector.html.twig"));

        // line 8
        echo "<div id=\"js-location-selectors\" data-url=\"";
        echo $this->env->getExtension('routing')->getUrl("location_selectors");
        echo "\" class=\"grid\">
    <div class=\"col-1-1\">
    ";
        // line 10
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
            // line 11
            echo "        <div class=\"form-inline\">
            ";
            // line 12
            $context["fieldType"] = (("store.address.form.fields." . $this->getAttribute($context["select"], "type", array())) . ".label");
            // line 13
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["select"], "type", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["fieldType"]) ? $context["fieldType"] : null)), "html", null, true);
            echo "</label>
            <select";
            // line 14
            if (($this->getAttribute($context["select"], "type", array()) == (isset($context["maxLocationType"]) ? $context["maxLocationType"] : null))) {
                echo " data-max-type";
            }
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " class=\"last\"";
            }
            echo ">
                <option>Select one</option>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["select"], "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 17
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (($context["key"] == $this->getAttribute($context["select"], "selected", array()))) {
                    echo " selected";
                }
                echo ">
                        ";
                // line 18
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </select>
        </div>
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
        // line 24
        echo "    </div>
</div>
";
        
        $__internal_f68d95495862ccc72b47ab6248ff72a916629dd201f0c5f32059a6813ec717c9->leave($__internal_f68d95495862ccc72b47ab6248ff72a916629dd201f0c5f32059a6813ec717c9_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:location-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  89 => 21,  80 => 18,  71 => 17,  67 => 16,  57 => 14,  50 => 13,  48 => 12,  45 => 11,  28 => 10,  22 => 8,);
    }
}
/* {###############################################################################*/
/* #   IMPORTANT: To make this work with JS you have to keep:                     #*/
/* #       - The identifier "js-location-selectors" wrapping the selectors        #*/
/* #       - The "data-url" attribute                                             #*/
/* #       - In each selector the "if" telling us if is the max location we can   #*/
/* #         choose                                                               #*/
/* ###############################################################################}*/
/* <div id="js-location-selectors" data-url="{{ url('location_selectors') }}" class="grid">*/
/*     <div class="col-1-1">*/
/*     {% for select in selects %}*/
/*         <div class="form-inline">*/
/*             {% set fieldType = 'store.address.form.fields.' ~ select.type ~ '.label' %}*/
/*             <label for="{{ select.type }}">{{ fieldType|trans  }}</label>*/
/*             <select{% if select.type == maxLocationType %} data-max-type{% endif %}{% if loop.last %} class="last"{% endif %}>*/
/*                 <option>Select one</option>*/
/*                 {% for key, value in select.options %}*/
/*                     <option value="{{ key }}"{% if key == select.selected %} selected{% endif %}>*/
/*                         {{ value }}*/
/*                     </option>*/
/*                 {% endfor%}*/
/*             </select>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
