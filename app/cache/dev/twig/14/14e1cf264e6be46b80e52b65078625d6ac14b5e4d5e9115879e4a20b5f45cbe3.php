<?php

/* AdminCoreBundle:Common:listComponent.html.twig */
class __TwigTemplate_c19db5cd168ed363ea536905173cd5bb9945c8e3080392362a80ea1e0b6aec0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/component.html.twig", "AdminCoreBundle:Common:listComponent.html.twig", 1);
        $this->blocks = array(
            'table_content' => array($this, 'block_table_content'),
            'title' => array($this, 'block_title'),
            'table_attributes' => array($this, 'block_table_attributes'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_pagination' => array($this, 'block_table_pagination'),
            'table_paginator_links' => array($this, 'block_table_paginator_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31aed3bffc87e44fc11fa391f04035fa8411fc0012cc7894227a2cbbe8423d17 = $this->env->getExtension("native_profiler");
        $__internal_31aed3bffc87e44fc11fa391f04035fa8411fc0012cc7894227a2cbbe8423d17->enter($__internal_31aed3bffc87e44fc11fa391f04035fa8411fc0012cc7894227a2cbbe8423d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Common:listComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31aed3bffc87e44fc11fa391f04035fa8411fc0012cc7894227a2cbbe8423d17->leave($__internal_31aed3bffc87e44fc11fa391f04035fa8411fc0012cc7894227a2cbbe8423d17_prof);

    }

    // line 4
    public function block_table_content($context, array $blocks = array())
    {
        $__internal_8904fa61845f71213cb1ea81373432f4e4af89a6a0eeb8c7c2751461e5366c7d = $this->env->getExtension("native_profiler");
        $__internal_8904fa61845f71213cb1ea81373432f4e4af89a6a0eeb8c7c2751461e5366c7d->enter($__internal_8904fa61845f71213cb1ea81373432f4e4af89a6a0eeb8c7c2751461e5366c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_content"));

        // line 5
        echo "
    <table class=\"table\" id=\"datatable-icons\" summary=\"";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "\" ";
        $this->displayBlock('table_attributes', $context, $blocks);
        echo ">
        <thead>
            <tr role=\"row\">
                ";
        // line 9
        $this->displayBlock('table_head', $context, $blocks);
        // line 10
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 13
        $this->displayBlock('table_body', $context, $blocks);
        // line 20
        echo "        </tbody>
    </table>

";
        
        $__internal_8904fa61845f71213cb1ea81373432f4e4af89a6a0eeb8c7c2751461e5366c7d->leave($__internal_8904fa61845f71213cb1ea81373432f4e4af89a6a0eeb8c7c2751461e5366c7d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_959a3b73a92aae3d43478c4c7e0ff64d0891355b824178c035dd88dda7632cc6 = $this->env->getExtension("native_profiler");
        $__internal_959a3b73a92aae3d43478c4c7e0ff64d0891355b824178c035dd88dda7632cc6->enter($__internal_959a3b73a92aae3d43478c4c7e0ff64d0891355b824178c035dd88dda7632cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_959a3b73a92aae3d43478c4c7e0ff64d0891355b824178c035dd88dda7632cc6->leave($__internal_959a3b73a92aae3d43478c4c7e0ff64d0891355b824178c035dd88dda7632cc6_prof);

    }

    public function block_table_attributes($context, array $blocks = array())
    {
        $__internal_91c1c2d6c845c916ba1f6ff28445055907d4a2dd2047959944c156d0912fa156 = $this->env->getExtension("native_profiler");
        $__internal_91c1c2d6c845c916ba1f6ff28445055907d4a2dd2047959944c156d0912fa156->enter($__internal_91c1c2d6c845c916ba1f6ff28445055907d4a2dd2047959944c156d0912fa156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_attributes"));

        echo "";
        
        $__internal_91c1c2d6c845c916ba1f6ff28445055907d4a2dd2047959944c156d0912fa156->leave($__internal_91c1c2d6c845c916ba1f6ff28445055907d4a2dd2047959944c156d0912fa156_prof);

    }

    // line 9
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_b340547805abff3a6e923cc7139905b872e96d895a1d5bc116b5d71ae18c2253 = $this->env->getExtension("native_profiler");
        $__internal_b340547805abff3a6e923cc7139905b872e96d895a1d5bc116b5d71ae18c2253->enter($__internal_b340547805abff3a6e923cc7139905b872e96d895a1d5bc116b5d71ae18c2253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        echo "";
        
        $__internal_b340547805abff3a6e923cc7139905b872e96d895a1d5bc116b5d71ae18c2253->leave($__internal_b340547805abff3a6e923cc7139905b872e96d895a1d5bc116b5d71ae18c2253_prof);

    }

    // line 13
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_f67fb2eaa546260e0b05591e56bfbafdc3db67704c6aa1eab7b2b0ccd1f4b9f6 = $this->env->getExtension("native_profiler");
        $__internal_f67fb2eaa546260e0b05591e56bfbafdc3db67704c6aa1eab7b2b0ccd1f4b9f6->enter($__internal_f67fb2eaa546260e0b05591e56bfbafdc3db67704c6aa1eab7b2b0ccd1f4b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 14
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) ? $context["paginator"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "                <tr class=\"gradeA ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\">
                    ";
            // line 16
            $this->displayBlock('table_body_row', $context, $blocks);
            // line 17
            echo "                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            ";
        
        $__internal_f67fb2eaa546260e0b05591e56bfbafdc3db67704c6aa1eab7b2b0ccd1f4b9f6->leave($__internal_f67fb2eaa546260e0b05591e56bfbafdc3db67704c6aa1eab7b2b0ccd1f4b9f6_prof);

    }

    // line 16
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_d56d86a61ad9079f8836187e18ee2de087581dd569d9072f7aa6afdf57ca6053 = $this->env->getExtension("native_profiler");
        $__internal_d56d86a61ad9079f8836187e18ee2de087581dd569d9072f7aa6afdf57ca6053->enter($__internal_d56d86a61ad9079f8836187e18ee2de087581dd569d9072f7aa6afdf57ca6053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        echo "";
        
        $__internal_d56d86a61ad9079f8836187e18ee2de087581dd569d9072f7aa6afdf57ca6053->leave($__internal_d56d86a61ad9079f8836187e18ee2de087581dd569d9072f7aa6afdf57ca6053_prof);

    }

    // line 26
    public function block_table_pagination($context, array $blocks = array())
    {
        $__internal_d8ea1a248f336056709a395ad040778c5fbf6f6493e922b8a25d10a512238c7d = $this->env->getExtension("native_profiler");
        $__internal_d8ea1a248f336056709a395ad040778c5fbf6f6493e922b8a25d10a512238c7d->enter($__internal_d8ea1a248f336056709a395ad040778c5fbf6f6493e922b8a25d10a512238c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_pagination"));

        // line 27
        echo "
    <div class=\"box-none pa-n mb-n\">
        <div class=\"fl-l\">
            <p class=\"fz-default\">
                ";
        // line 31
        $context["firstElement"] = (((isset($context["limit"]) ? $context["limit"] : null) * ((isset($context["page"]) ? $context["page"] : null) - 1)) + 1);
        // line 32
        echo "                ";
        $context["lastElement"] = min((((isset($context["firstElement"]) ? $context["firstElement"] : null) + (isset($context["limit"]) ? $context["limit"] : null)) - 1), (isset($context["totalElements"]) ? $context["totalElements"] : null));
        // line 33
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.paginator.elements", array("%first%" =>         // line 35
(isset($context["firstElement"]) ? $context["firstElement"] : null), "%last%" =>         // line 36
(isset($context["lastElement"]) ? $context["lastElement"] : null), "%total%" =>         // line 37
(isset($context["totalElements"]) ? $context["totalElements"] : null))), "html", null, true);
        // line 39
        echo "
            </p>
        </div>
        <div class=\"fl-r\">
            ";
        // line 43
        $this->displayBlock("table_paginator_links", $context, $blocks);
        echo "
        </div>
    </div>

";
        
        $__internal_d8ea1a248f336056709a395ad040778c5fbf6f6493e922b8a25d10a512238c7d->leave($__internal_d8ea1a248f336056709a395ad040778c5fbf6f6493e922b8a25d10a512238c7d_prof);

    }

    // line 59
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_b0286ab8a5261bfd4aee4f6fa13d176f895e579917d7ba530f555760d9ed9eb4 = $this->env->getExtension("native_profiler");
        $__internal_b0286ab8a5261bfd4aee4f6fa13d176f895e579917d7ba530f555760d9ed9eb4->enter($__internal_b0286ab8a5261bfd4aee4f6fa13d176f895e579917d7ba530f555760d9ed9eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 60
        echo "
    ";
        // line 61
        $this->loadTemplate("@AdminCore/Tables/paginator.html.twig", "AdminCoreBundle:Common:listComponent.html.twig", 61)->display(array_merge($context, array("page" =>         // line 62
(isset($context["page"]) ? $context["page"] : null), "total_pages" =>         // line 63
(isset($context["totalPages"]) ? $context["totalPages"] : null), "url" =>         // line 64
(isset($context["url"]) ? $context["url"] : null), "limit" =>         // line 65
(isset($context["limit"]) ? $context["limit"] : null), "order_by_field" =>         // line 66
(isset($context["orderByField"]) ? $context["orderByField"] : null), "order_by_direction" =>         // line 67
(isset($context["orderByDirection"]) ? $context["orderByDirection"] : null), "middle_group_length" => 1, "side_group_space_length" => 1)));
        // line 71
        echo "
";
        
        $__internal_b0286ab8a5261bfd4aee4f6fa13d176f895e579917d7ba530f555760d9ed9eb4->leave($__internal_b0286ab8a5261bfd4aee4f6fa13d176f895e579917d7ba530f555760d9ed9eb4_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Common:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 71,  233 => 67,  232 => 66,  231 => 65,  230 => 64,  229 => 63,  228 => 62,  227 => 61,  224 => 60,  218 => 59,  206 => 43,  200 => 39,  198 => 37,  197 => 36,  196 => 35,  194 => 33,  191 => 32,  189 => 31,  183 => 27,  177 => 26,  165 => 16,  158 => 19,  143 => 17,  141 => 16,  136 => 15,  118 => 14,  112 => 13,  100 => 9,  77 => 6,  67 => 20,  65 => 13,  60 => 10,  58 => 9,  50 => 6,  47 => 5,  41 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/component.html.twig' %}*/
/* */
/* */
/* {% block table_content %}*/
/* */
/*     <table class="table" id="datatable-icons" summary="{% block title '' %}" {% block table_attributes '' %}>*/
/*         <thead>*/
/*             <tr role="row">*/
/*                 {% block table_head '' %}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% block table_body %}*/
/*             {% for entity in paginator %}*/
/*                 <tr class="gradeA {{ cycle(['odd', 'even'], loop.index0) }}">*/
/*                     {% block table_body_row '' %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             {% endblock table_body %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock table_content %}*/
/* */
/* */
/* {% block table_pagination %}*/
/* */
/*     <div class="box-none pa-n mb-n">*/
/*         <div class="fl-l">*/
/*             <p class="fz-default">*/
/*                 {% set firstElement = limit * (page - 1) + 1 %}*/
/*                 {% set lastElement = min(firstElement + limit - 1, totalElements) %}*/
/*                 {{*/
/*                     'ui.paginator.elements'|trans({*/
/*                         '%first%': firstElement,*/
/*                         '%last%': lastElement,*/
/*                         '%total%': totalElements,*/
/*                     })*/
/*                 }}*/
/*             </p>*/
/*         </div>*/
/*         <div class="fl-r">*/
/*             {{ block('table_paginator_links') }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock table_pagination %}*/
/* */
/* */
/* {#*/
/*     Pagination block.*/
/* */
/*     To render this block you need to define the "url" parameter in the principal*/
/*     template, and then render the parent:*/
/* */
/*     {% set url = "admin_product_list" %}*/
/*     {{ parent() }}*/
/* #}*/
/* {% block table_paginator_links %}*/
/* */
/*     {% include '@AdminCore/Tables/paginator.html.twig' with {*/
/*         page: page,*/
/*         total_pages: totalPages,*/
/*         url: url,*/
/*         limit: limit,*/
/*         order_by_field: orderByField,*/
/*         order_by_direction: orderByDirection,*/
/*         middle_group_length: 1,*/
/*         side_group_space_length: 1,*/
/*     } %}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
