<?php

/* AdminMediaBundle:Gallery/Component:view.html.twig */
class __TwigTemplate_d9fb80d185af10788a71cb457cfa8bb686685bc872c1384bdfb39ab30c5d4037 extends Twig_Template
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
        $__internal_643b511b3cfe2875302ba883028f00910c6a9355d06d1543f8fac193132a9af5 = $this->env->getExtension("native_profiler");
        $__internal_643b511b3cfe2875302ba883028f00910c6a9355d06d1543f8fac193132a9af5->enter($__internal_643b511b3cfe2875302ba883028f00910c6a9355d06d1543f8fac193132a9af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMediaBundle:Gallery/Component:view.html.twig"));

        // line 1
        echo "<ul class=\"thumbnail-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "        <li>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
            echo "
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($context["image"], array("width" => 1024, "height" => 1024, "type" => 4)), "html", null, true);
            echo "\" data-fc-modules=\"modal\" class=\"thumbnail\">
                <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($context["image"], array("width" => 150, "height" => 150, "type" => 5)), "html", null, true);
            echo "\" width=\"150\" height=\"150\"/>
            </a>
            <ul class=\"thumbnail-actions\">
                <li>
                    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_image_delete", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\"
                       data-fc-modules=\"confirm\" data-fc-name=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "\"
                       data-fc-text=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.confirm.delete"), "html", null, true);
            echo "\">
                        <i class=\"icon-trash-o\"></i>
                    </a>
                </li>
            </ul>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
";
        
        $__internal_643b511b3cfe2875302ba883028f00910c6a9355d06d1543f8fac193132a9af5->leave($__internal_643b511b3cfe2875302ba883028f00910c6a9355d06d1543f8fac193132a9af5_prof);

    }

    public function getTemplateName()
    {
        return "AdminMediaBundle:Gallery/Component:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  55 => 12,  51 => 11,  47 => 10,  40 => 6,  36 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="thumbnail-group">*/
/*     {% for image in images %}*/
/*         <li>*/
/*             {{ entity.name }}*/
/*             <a href="{{ image|resize({'width': 1024,'height': 1024,'type': 4}) }}" data-fc-modules="modal" class="thumbnail">*/
/*                 <img src="{{ image|resize({'width': 150,'height': 150,'type': 5}) }}" width="150" height="150"/>*/
/*             </a>*/
/*             <ul class="thumbnail-actions">*/
/*                 <li>*/
/*                     <a href="{{ url('admin_image_delete', { id: image.id }) }}"*/
/*                        data-fc-modules="confirm" data-fc-name="{{ image.name }}"*/
/*                        data-fc-text="{{ 'ui.confirm.delete'|trans }}">*/
/*                         <i class="icon-trash-o"></i>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
