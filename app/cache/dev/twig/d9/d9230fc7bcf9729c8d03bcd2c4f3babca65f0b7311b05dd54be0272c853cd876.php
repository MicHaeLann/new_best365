<?php

/* AdminCoreBundle:Common:breadcrumb.html.twig */
class __TwigTemplate_980909cf054a989101b7d0b43565acc28866188cbf4e4387f385117a3c2a202d extends Twig_Template
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
        $__internal_3bacd717a8b07cd24ab2ab8624b12ef71b98eb5d8a10a0f5e89ed8a55d2ab12b = $this->env->getExtension("native_profiler");
        $__internal_3bacd717a8b07cd24ab2ab8624b12ef71b98eb5d8a10a0f5e89ed8a55d2ab12b->enter($__internal_3bacd717a8b07cd24ab2ab8624b12ef71b98eb5d8a10a0f5e89ed8a55d2ab12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Common:breadcrumb.html.twig"));

        // line 1
        echo "<ol id=\"breadcrumb\" class=\"list-horizontal\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
            // line 3
            echo "        <li>
            ";
            // line 4
            if ($this->getAttribute($context["attr"], "url", array())) {
                // line 5
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "url", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "name", array()), "html", null, true);
            echo "
            ";
            // line 8
            if ( !$this->getAttribute($context["attr"], "active", array())) {
                // line 9
                echo "                <i class=\"icon-angle-right\"></i>
            ";
            }
            // line 11
            echo "            ";
            if ($this->getAttribute($context["attr"], "url", array())) {
                // line 12
                echo "                </a>
            ";
            }
            // line 14
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ol>
";
        
        $__internal_3bacd717a8b07cd24ab2ab8624b12ef71b98eb5d8a10a0f5e89ed8a55d2ab12b->leave($__internal_3bacd717a8b07cd24ab2ab8624b12ef71b98eb5d8a10a0f5e89ed8a55d2ab12b_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Common:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  58 => 14,  54 => 12,  51 => 11,  47 => 9,  45 => 8,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ol id="breadcrumb" class="list-horizontal">*/
/*     {% for attr in breadcrumb %}*/
/*         <li>*/
/*             {% if attr.url %}*/
/*                 <a href="{{ attr.url }}">*/
/*             {% endif %}*/
/*             {{ attr.name }}*/
/*             {% if not attr.active %}*/
/*                 <i class="icon-angle-right"></i>*/
/*             {% endif %}*/
/*             {% if attr.url %}*/
/*                 </a>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ol>*/
/* */
