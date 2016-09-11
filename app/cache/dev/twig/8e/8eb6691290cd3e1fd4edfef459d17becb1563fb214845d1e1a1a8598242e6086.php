<?php

/* AdminCoreBundle:Tables:head.html.twig */
class __TwigTemplate_ddeb0cf346d0a94590dc282eb3bba2993f6c14d519f1827265236c888391604a extends Twig_Template
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
        $__internal_4fe56bf5d116770bf0476c4f1c685555f26e3f43140f663fb000c3f7e19e7425 = $this->env->getExtension("native_profiler");
        $__internal_4fe56bf5d116770bf0476c4f1c685555f26e3f43140f663fb000c3f7e19e7425->enter($__internal_4fe56bf5d116770bf0476c4f1c685555f26e3f43140f663fb000c3f7e19e7425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Tables:head.html.twig"));

        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 14
            echo "    <th role=\"columnheader\"";
            // line 15
            if (($this->getAttribute($context["info"], "width", array(), "any", true, true) || $this->getAttribute($context["info"], "class", array(), "any", true, true))) {
                // line 16
                echo "class=\"";
                if ($this->getAttribute($context["info"], "width", array(), "any", true, true)) {
                    echo "w-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "width", array()), "html", null, true);
                }
                if ($this->getAttribute($context["info"], "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "class", array()), "html", null, true);
                }
                echo "\"";
            }
            // line 18
            echo ">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array()), "html", null, true);
            // line 20
            echo "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4fe56bf5d116770bf0476c4f1c685555f26e3f43140f663fb000c3f7e19e7425->leave($__internal_4fe56bf5d116770bf0476c4f1c685555f26e3f43140f663fb000c3f7e19e7425_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Tables:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  47 => 19,  45 => 18,  33 => 16,  31 => 15,  29 => 14,  25 => 13,  22 => 12,);
    }
}
/* {#*/
/*     This template needs this formatted data:*/
/* */
/*     {*/
/*         rows: [*/
/*             { name: 'name', width: 25 },*/
/*         ],*/
/*     }*/
/* */
/*     You can override the row name by defining "row" field*/
/* #}*/
/* */
/* {% for info in rows %}*/
/*     <th role="columnheader"*/
/*         {%- if info.width is defined or info.class is defined -%}*/
/*             class="{%- if info.width is defined %}w-{{ info.width }}{% endif %}{%- if info.class is defined %} {{ info.class }}{% endif %}"*/
/*         {%- endif -%}*/
/*     >*/
/*         {{- info.name -}}*/
/*     </th>*/
/* {% endfor %}*/
/* */
