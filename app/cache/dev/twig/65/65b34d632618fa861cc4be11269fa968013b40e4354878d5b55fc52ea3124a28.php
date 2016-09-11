<?php

/* AdminBannerBundle:Banner:listComponent.html.twig */
class __TwigTemplate_2db85db2a93f0f5a06c388f258ee182ee48e5a90a26a3c8b23fd242a33909520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/listComponent.html.twig", "AdminBannerBundle:Banner:listComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'table_paginator_links' => array($this, 'block_table_paginator_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/listComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9af6b2043cde0c379b99dc7efc44120be5a7acbab3d8a7dc4b45232457571693 = $this->env->getExtension("native_profiler");
        $__internal_9af6b2043cde0c379b99dc7efc44120be5a7acbab3d8a7dc4b45232457571693->enter($__internal_9af6b2043cde0c379b99dc7efc44120be5a7acbab3d8a7dc4b45232457571693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:listComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af6b2043cde0c379b99dc7efc44120be5a7acbab3d8a7dc4b45232457571693->leave($__internal_9af6b2043cde0c379b99dc7efc44120be5a7acbab3d8a7dc4b45232457571693_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_773606ca1773d4700f5a5a9249e87e3948b144b27e71cc5996710e1d6b9991c5 = $this->env->getExtension("native_profiler");
        $__internal_773606ca1773d4700f5a5a9249e87e3948b144b27e71cc5996710e1d6b9991c5->enter($__internal_773606ca1773d4700f5a5a9249e87e3948b144b27e71cc5996710e1d6b9991c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Banner list"), "html", null, true);
        echo "
";
        
        $__internal_773606ca1773d4700f5a5a9249e87e3948b144b27e71cc5996710e1d6b9991c5->leave($__internal_773606ca1773d4700f5a5a9249e87e3948b144b27e71cc5996710e1d6b9991c5_prof);

    }

    // line 7
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_4363164cb67776dc5b6e4c9cb90871f30e72d3d68dc8ec202d4f9219c43e9817 = $this->env->getExtension("native_profiler");
        $__internal_4363164cb67776dc5b6e4c9cb90871f30e72d3d68dc8ec202d4f9219c43e9817->enter($__internal_4363164cb67776dc5b6e4c9cb90871f30e72d3d68dc8ec202d4f9219c43e9817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginatorFields"]) ? $context["paginatorFields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 9
            echo "        <th
            class=\"sorting_asc\"
            tabindex=\"0\"
            rowspan=\"1\"
            colspan=\"1\"
            aria-controls=\"datatable\"
            aria-sort=\"ascending\"
            aria-label=\"Rendering engine: activate to sort column descending\"
            role=\"columnheader\"
            style=\"width: 268px;\"
            >";
            // line 19
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "
        </th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <th>Actions</th>
";
        
        $__internal_4363164cb67776dc5b6e4c9cb90871f30e72d3d68dc8ec202d4f9219c43e9817->leave($__internal_4363164cb67776dc5b6e4c9cb90871f30e72d3d68dc8ec202d4f9219c43e9817_prof);

    }

    // line 25
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_0ae551ede8bb9d7312b5155358ebeb4773e87f14fc7ed79b65cce31bef27240d = $this->env->getExtension("native_profiler");
        $__internal_0ae551ede8bb9d7312b5155358ebeb4773e87f14fc7ed79b65cce31bef27240d->enter($__internal_0ae551ede8bb9d7312b5155358ebeb4773e87f14fc7ed79b65cce31bef27240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 26
        echo "
    ";
        // line 27
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
            // line 28
            echo "        <tr class=\"gradeA odd\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginatorFields"]) ? $context["paginatorFields"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 30
                echo "
                <td>
                    ";
                // line 32
                $this->loadTemplate("AdminCoreBundle::Common/listField.html.twig", "AdminBannerBundle:Banner:listComponent.html.twig", 32)->display(array_merge($context, array("entity" =>                 // line 33
$context["entity"], "field" =>                 // line 34
$context["field"])));
                // line 36
                echo "                </td>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            <td class=\"center \">
                <div class=\"btn-group\">
                    <button class=\"btn btn-default btn-xs\" type=\"button\">
                        Actions
                    </button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-xs btn-primary dropdown-toggle\" type=\"button\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul role=\"menu\" class=\"dropdown-menu pull-right\">
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_view", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Details"), "html", null, true);
            echo "
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove"), "html", null, true);
            echo "
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
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
        // line 70
        echo "
";
        
        $__internal_0ae551ede8bb9d7312b5155358ebeb4773e87f14fc7ed79b65cce31bef27240d->leave($__internal_0ae551ede8bb9d7312b5155358ebeb4773e87f14fc7ed79b65cce31bef27240d_prof);

    }

    // line 73
    public function block_table_paginator_links($context, array $blocks = array())
    {
        $__internal_7f3821a8bd76cd8e17b8ce78145ca616cebda76fc7638aab4bf4f4bc61b7c2b1 = $this->env->getExtension("native_profiler");
        $__internal_7f3821a8bd76cd8e17b8ce78145ca616cebda76fc7638aab4bf4f4bc61b7c2b1->enter($__internal_7f3821a8bd76cd8e17b8ce78145ca616cebda76fc7638aab4bf4f4bc61b7c2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_paginator_links"));

        // line 74
        echo "    ";
        $context["url"] = "admin_banner_list";
        // line 75
        echo "    ";
        $this->displayParentBlock("table_paginator_links", $context, $blocks);
        echo "
";
        
        $__internal_7f3821a8bd76cd8e17b8ce78145ca616cebda76fc7638aab4bf4f4bc61b7c2b1->leave($__internal_7f3821a8bd76cd8e17b8ce78145ca616cebda76fc7638aab4bf4f4bc61b7c2b1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:listComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 75,  239 => 74,  233 => 73,  225 => 70,  203 => 62,  199 => 61,  191 => 56,  187 => 55,  180 => 51,  176 => 50,  163 => 39,  147 => 36,  145 => 34,  144 => 33,  143 => 32,  139 => 30,  122 => 29,  119 => 28,  102 => 27,  99 => 26,  93 => 25,  85 => 22,  76 => 19,  64 => 9,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/listComponent.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'Banner list'|trans }}*/
/* {% endblock title %}*/
/* */
/* {% block table_head %}*/
/*     {% for field in paginatorFields %}*/
/*         <th*/
/*             class="sorting_asc"*/
/*             tabindex="0"*/
/*             rowspan="1"*/
/*             colspan="1"*/
/*             aria-controls="datatable"*/
/*             aria-sort="ascending"*/
/*             aria-label="Rendering engine: activate to sort column descending"*/
/*             role="columnheader"*/
/*             style="width: 268px;"*/
/*             >{{ field }}*/
/*         </th>*/
/*     {% endfor %}*/
/*     <th>Actions</th>*/
/* {% endblock table_head %}*/
/* */
/* {% block table_body %}*/
/* */
/*     {% for entity in paginator %}*/
/*         <tr class="gradeA odd">*/
/*             {% for field in paginatorFields %}*/
/* */
/*                 <td>*/
/*                     {% include 'AdminCoreBundle::Common/listField.html.twig' with {*/
/*                     'entity': entity,*/
/*                     'field': field,*/
/*                     } %}*/
/*                 </td>*/
/* */
/*             {% endfor %}*/
/*             <td class="center ">*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-default btn-xs" type="button">*/
/*                         Actions*/
/*                     </button>*/
/*                     <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">*/
/*                         <span class="caret"></span>*/
/*                         <span class="sr-only">Toggle Dropdown</span>*/
/*                     </button>*/
/*                     <ul role="menu" class="dropdown-menu pull-right">*/
/*                         <li>*/
/*                             <a href="{{ url("admin_banner_edit", {"id": entity.id}) }}">*/
/*                                 {{ "Edit"|trans }}*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ url("admin_banner_view", {"id": entity.id}) }}">*/
/*                                 {{ "Details"|trans }}*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="{{ url("admin_banner_delete", {"id": entity.id}) }}">*/
/*                                 {{ "Remove"|trans }}*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* */
/* {% endblock table_body %}*/
/* */
/* {% block table_paginator_links %}*/
/*     {% set url = 'admin_banner_list' %}*/
/*     {{ parent() }}*/
/* {% endblock table_paginator_links %}*/
/* */
