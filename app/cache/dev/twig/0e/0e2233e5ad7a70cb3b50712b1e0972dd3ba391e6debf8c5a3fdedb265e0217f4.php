<?php

/* AdminProductBundle:Product:listComponent.html.twig */
class __TwigTemplate_b5b7b3397cb9050df26db9b2e183f3080f0ece5eadbf280ec19ffaf0b05c9cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminProductBundle:Product:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'no_items' => array($this, 'block_no_items'),
            'table_head' => array($this, 'block_table_head'),
            'table_body_row' => array($this, 'block_table_body_row'),
            'table_paginator_links' => array($this, 'block_table_paginator_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a44dabfd280858c4b5bda7a6987d478858d5da5cc087bc1c0f2d5b61378ce94 = $this->env->getExtension("native_profiler");
        $__internal_4a44dabfd280858c4b5bda7a6987d478858d5da5cc087bc1c0f2d5b61378ce94->enter($__internal_4a44dabfd280858c4b5bda7a6987d478858d5da5cc087bc1c0f2d5b61378ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Product:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "product");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a44dabfd280858c4b5bda7a6987d478858d5da5cc087bc1c0f2d5b61378ce94->leave($__internal_4a44dabfd280858c4b5bda7a6987d478858d5da5cc087bc1c0f2d5b61378ce94_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ff0a0fab3218e7199df4fdc472d2e7cf285925a85ff4e7ad2222db48755024f = $this->env->getExtension("native_profiler");
        $__internal_4ff0a0fab3218e7199df4fdc472d2e7cf285925a85ff4e7ad2222db48755024f->enter($__internal_4ff0a0fab3218e7199df4fdc472d2e7cf285925a85ff4e7ad2222db48755024f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.list"), "html", null, true);
        
        $__internal_4ff0a0fab3218e7199df4fdc472d2e7cf285925a85ff4e7ad2222db48755024f->leave($__internal_4ff0a0fab3218e7199df4fdc472d2e7cf285925a85ff4e7ad2222db48755024f_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_d45e05c427e95e929860e4ab39b1b4d7489d67f8a603fcd0661708f55bcc846b = $this->env->getExtension("native_profiler");
        $__internal_d45e05c427e95e929860e4ab39b1b4d7489d67f8a603fcd0661708f55bcc846b->enter($__internal_d45e05c427e95e929860e4ab39b1b4d7489d67f8a603fcd0661708f55bcc846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.product.single"), 1 => $this->env->getExtension('translator')->trans("admin.product.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_product_new")), "method"), "html", null, true);
        
        $__internal_d45e05c427e95e929860e4ab39b1b4d7489d67f8a603fcd0661708f55bcc846b->leave($__internal_d45e05c427e95e929860e4ab39b1b4d7489d67f8a603fcd0661708f55bcc846b_prof);

    }

    // line 21
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_de5496edb937bcb8d3a8447aacfb24eba6be7a17a21df9ad08f50f8bfcd1eb1b = $this->env->getExtension("native_profiler");
        $__internal_de5496edb937bcb8d3a8447aacfb24eba6be7a17a21df9ad08f50f8bfcd1eb1b->enter($__internal_de5496edb937bcb8d3a8447aacfb24eba6be7a17a21df9ad08f50f8bfcd1eb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 22
        echo "

    ";
        // line 24
        $context["stockClass"] = "ta-r";
        // line 25
        echo "    ";
        if ( !$this->getAttribute((isset($context["store"]) ? $context["store"] : null), "useStock", array())) {
            // line 26
            echo "        ";
            $context["stockClass"] = "d-n ta-r";
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    ";
        // line 29
        $this->loadTemplate("@AdminCore/Tables/head.html.twig", "AdminProductBundle:Product:listComponent.html.twig", 29)->display(array_merge($context, array("rows" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.product.field.image.title"), "width" => 10), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.product.field.name_details.title")), 2 => array("name" => $this->env->getExtension('translator')->trans("admin.product.field.main_category.title"), "width" => 15), 3 => array("name" => $this->env->getExtension('translator')->trans("admin.product.field.price.title"), "width" => 10, "class" => "ta-r"), 4 => array("name" => $this->env->getExtension('translator')->trans("admin.product.field.stock.title"), "class" =>         // line 35
(isset($context["stockClass"]) ? $context["stockClass"] : null))), "class" => "product")));
        // line 39
        echo "
";
        
        $__internal_de5496edb937bcb8d3a8447aacfb24eba6be7a17a21df9ad08f50f8bfcd1eb1b->leave($__internal_de5496edb937bcb8d3a8447aacfb24eba6be7a17a21df9ad08f50f8bfcd1eb1b_prof);

    }

    // line 43
    public function block_table_body_row($context, array $blocks = array())
    {
        $__internal_accbb1292309124ee1de9c35401f1fad37a709b609f172fba3f232bf2b9cd26a = $this->env->getExtension("native_profiler");
        $__internal_accbb1292309124ee1de9c35401f1fad37a709b609f172fba3f232bf2b9cd26a->enter($__internal_accbb1292309124ee1de9c35401f1fad37a709b609f172fba3f232bf2b9cd26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body_row"));

        // line 44
        echo "
    <td data-test=\"product-";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "images", array())) > 0)) {
            // line 47
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"thumbnail\">
                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getSortedImages", array()), "first", array()), array("height" => 100, "width" => 100, "type" => 5)), "html", null, true);
            echo "\" />
            </a>
        ";
        }
        // line 51
        echo "    </td>
    <td>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</strong>
        </a>

        ";
        // line 57
        $context["path"] = $this->env->getExtension('routing')->getUrl("store_product_view", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slug", array())));
        // line 58
        echo "        ";
        $context["relativePath"] = $this->env->getExtension('routing')->getPath("store_product_view", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slug", array())));
        // line 59
        echo "        <p class=\"fz-s\">
            <a target=\"_blank\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["relativePath"]) ? $context["relativePath"] : null), "html", null, true);
        echo "</a>
        </p>

        ";
        // line 63
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 64
            echo "            <span class=\"label-ok fz-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.field.enabled.options.active"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 66
            echo "            <span class=\"label fz-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.field.enabled.options.inactive"), "html", null, true);
            echo "</span>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "showInHome", array())) {
            // line 70
            echo "            <span class=\"label-info fz-xs\">
                ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.tag.in_home"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 74
        echo "
        ";
        // line 75
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hasVariants", array())) {
            // line 76
            echo "            <span class=\"label bg-secondary fz-xs c-background\">
                ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.tag.has_variants"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 80
        echo "
        ";
        // line 81
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "principalCategory", array()))) {
            // line 82
            echo "            <span class=\"label label-ko fz-xs\">
                <i class=\"icon-warning mr-s\"></i>
                ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.tag.no_category"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 87
        echo "
        ";
        // line 88
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "manufacturer", array()))) {
            // line 89
            echo "            <span class=\"label label-ko fz-xs\">
                <i class=\"icon-warning mr-s\"></i>
                ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.tag.no_manufacturer"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 94
        echo "    </td>
    <td>
        ";
        // line 96
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "principalCategory", array())) {
            // line 97
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_category_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "principalCategory", array()), "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "principalCategory", array()), "name", array()), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 101
        echo "    </td>
    <td class=\"ta-r\">
        ";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price", array()))), "html", null, true);
        echo "
    </td>
    <td class=\"ta-r ";
        // line 105
        if ( !$this->getAttribute((isset($context["store"]) ? $context["store"] : null), "useStock", array())) {
            echo "d-n";
        }
        echo "\">
        ";
        // line 106
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stock", array()) >= 5)) {
            // line 107
            echo "            ";
            $context["stockColor"] = "c-ok";
            // line 108
            echo "        ";
        } elseif ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stock", array()) > 0) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stock", array()) < 10))) {
            // line 109
            echo "            ";
            $context["stockColor"] = "c-warning";
            // line 110
            echo "        ";
        } else {
            // line 111
            echo "            ";
            $context["stockColor"] = "c-ko";
            // line 112
            echo "        ";
        }
        // line 113
        echo "        <span class=\"";
        echo twig_escape_filter($this->env, (isset($context["stockColor"]) ? $context["stockColor"] : null), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stock", array()), "html", null, true);
        echo "</span>
    </td>
    ";
        // line 115
        $this->loadTemplate("@AdminCore/Tables/actions.html.twig", "AdminProductBundle:Product:listComponent.html.twig", 115)->display(array_merge($context, array("entity" =>         // line 116
(isset($context["entity"]) ? $context["entity"] : null), "class" => "product")));
        // line 119
        echo "
";
        
        $__internal_accbb1292309124ee1de9c35401f1fad37a709b609f172fba3f232bf2b9cd26a->leave($__internal_accbb1292309124ee1de9c35401f1fad37a709b609f172fba3f232bf2b9cd26a_prof);

    }

    // line 123
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_cd5eec19b1106d2c0661f87e5fe75106cf865d974e479a8aeae2f09d4f895e63 = $this->env->getExtension("native_profiler");
        $__internal_cd5eec19b1106d2c0661f87e5fe75106cf865d974e479a8aeae2f09d4f895e63->enter($__internal_cd5eec19b1106d2c0661f87e5fe75106cf865d974e479a8aeae2f09d4f895e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 124
        echo "
    ";
        // line 125
        $context["url"] = "admin_product_list";
        // line 126
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "

";
        
        $__internal_cd5eec19b1106d2c0661f87e5fe75106cf865d974e479a8aeae2f09d4f895e63->leave($__internal_cd5eec19b1106d2c0661f87e5fe75106cf865d974e479a8aeae2f09d4f895e63_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Product:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 126,  309 => 125,  306 => 124,  300 => 123,  292 => 119,  290 => 116,  289 => 115,  281 => 113,  278 => 112,  275 => 111,  272 => 110,  269 => 109,  266 => 108,  263 => 107,  261 => 106,  255 => 105,  250 => 103,  246 => 101,  240 => 98,  235 => 97,  233 => 96,  229 => 94,  223 => 91,  219 => 89,  217 => 88,  214 => 87,  208 => 84,  204 => 82,  202 => 81,  199 => 80,  193 => 77,  190 => 76,  188 => 75,  185 => 74,  179 => 71,  176 => 70,  174 => 69,  171 => 68,  165 => 66,  159 => 64,  157 => 63,  149 => 60,  146 => 59,  143 => 58,  141 => 57,  135 => 54,  131 => 53,  127 => 51,  121 => 48,  116 => 47,  114 => 46,  110 => 45,  107 => 44,  101 => 43,  93 => 39,  91 => 35,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  72 => 22,  66 => 21,  59 => 13,  53 => 12,  41 => 9,  34 => 1,  32 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'product'*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.product.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.product.single'|trans,*/
/*         'admin.product.plural'|trans,*/
/*         url('admin_product_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% block table_head %}*/
/* */
/* */
/*     {% set stockClass = 'ta-r' %}*/
/*     {% if not store.useStock %}*/
/*         {% set stockClass = 'd-n ta-r' %}*/
/*     {% endif %}*/
/* */
/*     {% include '@AdminCore/Tables/head.html.twig' with {*/
/*         rows: [*/
/*             { name: 'admin.product.field.image.title'|trans, width: 10 },*/
/*             { name: 'admin.product.field.name_details.title'|trans },*/
/*             { name: 'admin.product.field.main_category.title'|trans, width: 15 },*/
/*             { name: 'admin.product.field.price.title'|trans, width: 10, class: 'ta-r' },*/
/*             { name: 'admin.product.field.stock.title'|trans, class: stockClass }*/
/*         ],*/
/*         class: 'product',*/
/*     } %}*/
/* */
/* {% endblock table_head %}*/
/* */
/* */
/* {% block table_body_row %}*/
/* */
/*     <td data-test="product-{{ entity.id }}">*/
/*         {% if entity.images|length > 0 %}*/
/*             <a href="{{ url('admin_product_edit', { id: entity.id }) }}" class="thumbnail">*/
/*                 <img src="{{ entity.getSortedImages.first|resize({ height: 100, width: 100, type: 5 }) }}" />*/
/*             </a>*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>*/
/*         <a href="{{ url('admin_product_edit', { id: entity.id }) }}">*/
/*             <strong>{{ entity.name }}</strong>*/
/*         </a>*/
/* */
/*         {% set path = url('store_product_view', { id: entity.id, slug: entity.slug }) %}*/
/*         {% set relativePath = path('store_product_view', { id: entity.id, slug: entity.slug }) %}*/
/*         <p class="fz-s">*/
/*             <a target="_blank" href="{{ path }}">{{ relativePath }}</a>*/
/*         </p>*/
/* */
/*         {% if entity.enabled %}*/
/*             <span class="label-ok fz-xs">{{ 'admin.product.field.enabled.options.active'|trans }}</span>*/
/*         {% else %}*/
/*             <span class="label fz-xs">{{ 'admin.product.field.enabled.options.inactive'|trans }}</span>*/
/*         {% endif %}*/
/* */
/*         {% if entity.showInHome %}*/
/*             <span class="label-info fz-xs">*/
/*                 {{'admin.product.tag.in_home'|trans}}*/
/*             </span>*/
/*         {% endif %}*/
/* */
/*         {% if entity.hasVariants %}*/
/*             <span class="label bg-secondary fz-xs c-background">*/
/*                 {{'admin.product.tag.has_variants'|trans}}*/
/*             </span>*/
/*         {% endif %}*/
/* */
/*         {% if entity.principalCategory is null %}*/
/*             <span class="label label-ko fz-xs">*/
/*                 <i class="icon-warning mr-s"></i>*/
/*                 {{'admin.product.tag.no_category'|trans}}*/
/*             </span>*/
/*         {% endif %}*/
/* */
/*         {% if entity.manufacturer is null %}*/
/*             <span class="label label-ko fz-xs">*/
/*                 <i class="icon-warning mr-s"></i>*/
/*                 {{'admin.product.tag.no_manufacturer'|trans}}*/
/*             </span>*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>*/
/*         {% if entity.principalCategory %}*/
/*             <a href="{{ url('admin_category_edit', { id: entity.principalCategory.id }) }}">*/
/*                 {{ entity.principalCategory.name }}*/
/*             </a>*/
/*         {% endif %}*/
/*     </td>*/
/*     <td class="ta-r">*/
/*         {{ entity.price|print_money }}*/
/*     </td>*/
/*     <td class="ta-r {% if not store.useStock %}d-n{% endif %}">*/
/*         {% if entity.stock >= 5 %}*/
/*             {% set stockColor = 'c-ok' %}*/
/*         {% elseif entity.stock > 0 and entity.stock < 10 %}*/
/*             {% set stockColor = 'c-warning' %}*/
/*         {% else %}*/
/*             {% set stockColor = 'c-ko' %}*/
/*         {% endif %}*/
/*         <span class="{{ stockColor }}"> {{ entity.stock }}</span>*/
/*     </td>*/
/*     {% include '@AdminCore/Tables/actions.html.twig' with {*/
/*         entity: entity,*/
/*         class: 'product',*/
/*     } %}*/
/* */
/* {% endblock table_body_row %}*/
/* */
/* */
/* {% block table_paginator_links %}*/
/* */
/*     {% set url = 'admin_product_list' %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock table_paginator_links %}*/
/* */
