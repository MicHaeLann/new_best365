<?php

/* AdminProductBundle:Category:listComponent.html.twig */
class __TwigTemplate_90ceeab62d9c0f810bce9270f75ab02f9f633d446db3480b65812a53df8ede9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminProductBundle:Category:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'no_items' => array($this, 'block_no_items'),
            'table_content' => array($this, 'block_table_content'),
            'table_pagination' => array($this, 'block_table_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef988f32208a3d0840d4a98157556d93248cec7cb5cb334bb8a4755876ee742f = $this->env->getExtension("native_profiler");
        $__internal_ef988f32208a3d0840d4a98157556d93248cec7cb5cb334bb8a4755876ee742f->enter($__internal_ef988f32208a3d0840d4a98157556d93248cec7cb5cb334bb8a4755876ee742f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Category:listComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "category");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef988f32208a3d0840d4a98157556d93248cec7cb5cb334bb8a4755876ee742f->leave($__internal_ef988f32208a3d0840d4a98157556d93248cec7cb5cb334bb8a4755876ee742f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bc61cda0be26ade28a86fbfe282db2a05f3e9238c5f6a98f9d24db61112a6f5 = $this->env->getExtension("native_profiler");
        $__internal_1bc61cda0be26ade28a86fbfe282db2a05f3e9238c5f6a98f9d24db61112a6f5->enter($__internal_1bc61cda0be26ade28a86fbfe282db2a05f3e9238c5f6a98f9d24db61112a6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.list"), "html", null, true);
        
        $__internal_1bc61cda0be26ade28a86fbfe282db2a05f3e9238c5f6a98f9d24db61112a6f5->leave($__internal_1bc61cda0be26ade28a86fbfe282db2a05f3e9238c5f6a98f9d24db61112a6f5_prof);

    }

    // line 12
    public function block_no_items($context, array $blocks = array())
    {
        $__internal_5c51378703f3f081d595d65505d378f406776248d4d1cd4be7f6b6e0d65121f6 = $this->env->getExtension("native_profiler");
        $__internal_5c51378703f3f081d595d65505d378f406776248d4d1cd4be7f6b6e0d65121f6->enter($__internal_5c51378703f3f081d595d65505d378f406776248d4d1cd4be7f6b6e0d65121f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_items"));

        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["lists"]) ? $context["lists"] : null), "no_items", array(0 => $this->env->getExtension('translator')->trans("admin.category.single"), 1 => $this->env->getExtension('translator')->trans("admin.category.plural"), 2 => $this->env->getExtension('routing')->getUrl("admin_category_new")), "method"), "html", null, true);
        
        $__internal_5c51378703f3f081d595d65505d378f406776248d4d1cd4be7f6b6e0d65121f6->leave($__internal_5c51378703f3f081d595d65505d378f406776248d4d1cd4be7f6b6e0d65121f6_prof);

    }

    // line 60
    public function block_table_content($context, array $blocks = array())
    {
        $__internal_6c3ab7f0c581a5062d338c529361111c06c8f534fd380a54961b30d3d9714e9b = $this->env->getExtension("native_profiler");
        $__internal_6c3ab7f0c581a5062d338c529361111c06c8f534fd380a54961b30d3d9714e9b->enter($__internal_6c3ab7f0c581a5062d338c529361111c06c8f534fd380a54961b30d3d9714e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_content"));

        // line 61
        echo "
    <div class=\"grid\">
        <div class=\"col-1-3\">
            <div class=\"box-none\">
                <h3 class=\"fw-n\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.edit.title"), "html", null, true);
        echo "</h3>
                <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.edit.description.0"), "html", null, true);
        echo "</p>
                <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.edit.description.1"), "html", null, true);
        echo "</p>
                <p>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.edit.description.2"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"col-2-3\">
            <div class=\"box-background\">
            <ol id=\"categories-list\"
                data-fc-modules=\"sortable\"
                data-fc-url=\"";
        // line 75
        echo $this->env->getExtension('routing')->getUrl("admin_category_sort_component");
        echo "\"
                data-fc-type=\"nested\"
                data-fc-output=\"json\"
                data-fc-depth=\"2\"
            >
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) ? $context["paginator"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 81
            echo "                    ";
            echo $this->getAttribute($this, "category_tree", array(0 => $this->getAttribute($context["node"], "entity", array()), 1 => $this->getAttribute($context["node"], "children", array())), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </ol>
            </div>
        </div>
    </div>

";
        
        $__internal_6c3ab7f0c581a5062d338c529361111c06c8f534fd380a54961b30d3d9714e9b->leave($__internal_6c3ab7f0c581a5062d338c529361111c06c8f534fd380a54961b30d3d9714e9b_prof);

    }

    // line 91
    public function block_table_pagination($context, array $blocks = array())
    {
        $__internal_fda281978fc4f3588406b346400bdddc6579381e8d605bd8b34bec3207a5b377 = $this->env->getExtension("native_profiler");
        $__internal_fda281978fc4f3588406b346400bdddc6579381e8d605bd8b34bec3207a5b377->enter($__internal_fda281978fc4f3588406b346400bdddc6579381e8d605bd8b34bec3207a5b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_pagination"));

        echo "";
        
        $__internal_fda281978fc4f3588406b346400bdddc6579381e8d605bd8b34bec3207a5b377->leave($__internal_fda281978fc4f3588406b346400bdddc6579381e8d605bd8b34bec3207a5b377_prof);

    }

    // line 21
    public function getcategory_tree($__category__ = null, $__children__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "children" => $__children__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_331474f91ceb7c8fdb266022831302e5a8d2bde5228435907bc76f14b9917326 = $this->env->getExtension("native_profiler");
            $__internal_331474f91ceb7c8fdb266022831302e5a8d2bde5228435907bc76f14b9917326->enter($__internal_331474f91ceb7c8fdb266022831302e5a8d2bde5228435907bc76f14b9917326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "category_tree"));

            // line 22
            echo "
    <li class=\"pr-n\" data-fc-id=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
            echo "\" data-fc-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "\" data-test=\"category-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
            echo "\">
        <p class=\"fl-r fz-s pr-l\">
            ";
            // line 25
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "enabled", array())) {
                // line 26
                echo "                <span class=\"label-ok fz-xs\">
                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.field.enabled.options.active"), "html", null, true);
                echo "
                </span>
            ";
            } else {
                // line 30
                echo "                <span class=\"label fz-xs\">
                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.field.enabled.options.inactive"), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 34
            echo "
            <a class=\"icon-trash-o c-ko td-n fz-l ml-l\"
               title=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.delete"), "html", null, true);
            echo "\"
               href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\"
               data-fc-modules=\"confirm\"
               data-fc-name=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "\"
               data-fc-text=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.confirm.delete"), "html", null, true);
            echo "\">
            </a>
        </p>

        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"fw-n va-b\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "
        </a>

        ";
            // line 48
            if ((twig_length_filter($this->env, (isset($context["children"]) ? $context["children"] : null)) > 0)) {
                // line 49
                echo "            <ol>
                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 51
                    echo "                    ";
                    echo $this->getAttribute($this, "category_tree", array(0 => $this->getAttribute($context["child"], "entity", array()), 1 => $this->getAttribute($context["child"], "children", array())), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "            </ol>
        ";
            }
            // line 55
            echo "    </li>

";
            
            $__internal_331474f91ceb7c8fdb266022831302e5a8d2bde5228435907bc76f14b9917326->leave($__internal_331474f91ceb7c8fdb266022831302e5a8d2bde5228435907bc76f14b9917326_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Category:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 55,  244 => 53,  235 => 51,  231 => 50,  228 => 49,  226 => 48,  220 => 45,  216 => 44,  209 => 40,  205 => 39,  200 => 37,  196 => 36,  192 => 34,  186 => 31,  183 => 30,  177 => 27,  174 => 26,  172 => 25,  163 => 23,  160 => 22,  144 => 21,  132 => 91,  120 => 83,  111 => 81,  107 => 80,  99 => 75,  89 => 68,  85 => 67,  81 => 66,  77 => 65,  71 => 61,  65 => 60,  58 => 13,  52 => 12,  40 => 9,  33 => 1,  31 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'category'*/
/* } %}*/
/* */
/* */
/* {% block title 'admin.category.list'|trans %}*/
/* */
/* */
/* {% block no_items*/
/*     lists.no_items(*/
/*         'admin.category.single'|trans,*/
/*         'admin.category.plural'|trans,*/
/*         url('admin_category_new')*/
/*     )*/
/* %}*/
/* */
/* */
/* {% macro category_tree(category, children) %}*/
/* */
/*     <li class="pr-n" data-fc-id="{{ category.id }}" data-fc-name="{{ category.name }}" data-test="category-{{ category.id }}">*/
/*         <p class="fl-r fz-s pr-l">*/
/*             {% if category.enabled %}*/
/*                 <span class="label-ok fz-xs">*/
/*                     {{ 'admin.category.field.enabled.options.active'|trans }}*/
/*                 </span>*/
/*             {% else %}*/
/*                 <span class="label fz-xs">*/
/*                     {{ 'admin.category.field.enabled.options.inactive'|trans }}*/
/*                 </span>*/
/*             {% endif %}*/
/* */
/*             <a class="icon-trash-o c-ko td-n fz-l ml-l"*/
/*                title="{{ 'ui.forms.delete'|trans }}"*/
/*                href="{{ url('admin_category_delete', { id: category.id }) }}"*/
/*                data-fc-modules="confirm"*/
/*                data-fc-name="{{ category.name }}"*/
/*                data-fc-text="{{ 'ui.confirm.delete'|trans }}">*/
/*             </a>*/
/*         </p>*/
/* */
/*         <a href="{{ url('admin_category_edit', { id: category.id }) }}" class="fw-n va-b">*/
/*             {{ category.name }}*/
/*         </a>*/
/* */
/*         {% if children|length > 0 %}*/
/*             <ol>*/
/*                 {% for child in children %}*/
/*                     {{ _self.category_tree(child.entity, child.children) }}*/
/*                 {% endfor %}*/
/*             </ol>*/
/*         {% endif %}*/
/*     </li>*/
/* */
/* {% endmacro category_tree %}*/
/* */
/* */
/* {% block table_content %}*/
/* */
/*     <div class="grid">*/
/*         <div class="col-1-3">*/
/*             <div class="box-none">*/
/*                 <h3 class="fw-n">{{ 'admin.category.section.edit.title'|trans }}</h3>*/
/*                 <p>{{ 'admin.category.section.edit.description.0'|trans }}</p>*/
/*                 <p>{{ 'admin.category.section.edit.description.1'|trans }}</p>*/
/*                 <p>{{ 'admin.category.section.edit.description.2'|trans }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             <div class="box-background">*/
/*             <ol id="categories-list"*/
/*                 data-fc-modules="sortable"*/
/*                 data-fc-url="{{ url('admin_category_sort_component') }}"*/
/*                 data-fc-type="nested"*/
/*                 data-fc-output="json"*/
/*                 data-fc-depth="2"*/
/*             >*/
/*                 {% for node in paginator %}*/
/*                     {{ _self.category_tree(node.entity, node.children) }}*/
/*                 {% endfor %}*/
/*             </ol>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock table_content %}*/
/* */
/* */
/* {% block table_pagination '' %}*/
/* */
