<?php

/* AdminCoreBundle:Tables:actions.html.twig */
class __TwigTemplate_2c3eda9275438c5b85b5d2362f1421fb53846d6c5dc230b55358921c5254b5f1 extends Twig_Template
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
        $__internal_74a008ddccf53b8d50132fbd8c90cabfddd5df1762904713ccc2809e14d1d481 = $this->env->getExtension("native_profiler");
        $__internal_74a008ddccf53b8d50132fbd8c90cabfddd5df1762904713ccc2809e14d1d481->enter($__internal_74a008ddccf53b8d50132fbd8c90cabfddd5df1762904713ccc2809e14d1d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Tables:actions.html.twig"));

        // line 1
        echo "<td class=\"ta-c\">
    ";
        // line 2
        if (( !array_key_exists("delete", $context) || ((isset($context["delete"]) ? $context["delete"] : null) != false))) {
            // line 3
            echo "        ";
            if ( !array_key_exists("delete_url", $context)) {
                // line 4
                echo "            ";
                $context["delete_url"] = $this->env->getExtension('routing')->getUrl((("admin_" . (isset($context["class"]) ? $context["class"] : null)) . "_delete"), array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array())))));
                // line 5
                echo "        ";
            }
            // line 6
            echo "        <a class=\"icon-trash-o c-foreground td-n fz-l\"
           title=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.delete"), "html", null, true);
            echo "\"
           href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["delete_url"]) ? $context["delete_url"] : null), "html", null, true);
            echo "\"
           data-fc-modules=\"confirm\" data-fc-name=\"";
            // line 9
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : null), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()))) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()))), "html", null, true);
            echo "\"
           data-fc-text=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.confirm.delete"), "html", null, true);
            echo "\">
        </a>
    ";
        }
        // line 13
        echo "</td>
";
        
        $__internal_74a008ddccf53b8d50132fbd8c90cabfddd5df1762904713ccc2809e14d1d481->leave($__internal_74a008ddccf53b8d50132fbd8c90cabfddd5df1762904713ccc2809e14d1d481_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Tables:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <td class="ta-c">*/
/*     {% if delete is not defined or delete != false %}*/
/*         {% if delete_url is not defined %}*/
/*             {% set delete_url = url("admin_#{class}_delete", { id: id|default(entity.id) }) %}*/
/*         {% endif %}*/
/*         <a class="icon-trash-o c-foreground td-n fz-l"*/
/*            title="{{ 'ui.forms.delete'|trans }}"*/
/*            href="{{ delete_url }}"*/
/*            data-fc-modules="confirm" data-fc-name="{{ name|default(entity.name) }}"*/
/*            data-fc-text="{{ 'ui.confirm.delete'|trans }}">*/
/*         </a>*/
/*     {% endif %}*/
/* </td>*/
/* */
