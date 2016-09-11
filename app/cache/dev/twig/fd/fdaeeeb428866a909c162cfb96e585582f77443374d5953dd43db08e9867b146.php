<?php

/* AdminProductBundle:Category:editComponent.html.twig */
class __TwigTemplate_f36c512fbaed2ac86d4a51bae976057b60f6351b702c23ff3bb49c94df7b8c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminProductBundle:Category:editComponent.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/formComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78a867b7e1304047f838359a65502ce98e745e73192789db0477f672fdea1add = $this->env->getExtension("native_profiler");
        $__internal_78a867b7e1304047f838359a65502ce98e745e73192789db0477f672fdea1add->enter($__internal_78a867b7e1304047f838359a65502ce98e745e73192789db0477f672fdea1add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Category:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "category");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a867b7e1304047f838359a65502ce98e745e73192789db0477f672fdea1add->leave($__internal_78a867b7e1304047f838359a65502ce98e745e73192789db0477f672fdea1add_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_142e124f3f88c842f08be0b41b64ee3d6f8514c3b7a94a616caf227491f3242a = $this->env->getExtension("native_profiler");
        $__internal_142e124f3f88c842f08be0b41b64ee3d6f8514c3b7a94a616caf227491f3242a->enter($__internal_142e124f3f88c842f08be0b41b64ee3d6f8514c3b7a94a616caf227491f3242a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            // line 15
            echo "        <script type=\"text/javascript\">
            if ( window != window.top ) {
                var Mediator =  Mediator ? Mediator : window.parent.FrontendMediator;
                Mediator.publish( 'new:category', { id : \"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
            echo "\", name : \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "\" } );
            }
        </script>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["formAction"] = (($this->getAttribute(        // line 24
(isset($context["category"]) ? $context["category"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_category_update", array("id" => $this->getAttribute(        // line 25
(isset($context["category"]) ? $context["category"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_category_save")));
        // line 28
        echo "
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
    <fieldset>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.basic.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.basic.description"), "html", null, true);
        echo "</p>
                    ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 37
            echo "                        <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 39
        echo "                </div>
            </div>
            <div class=\"col-2-3\">
                <div ";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\" ";
        }
        echo ">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                        <section id=\"tab-";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" data-fc-name=\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo twig_escape_filter($this->env, "<i class=\"icon-star\"></i>");
                echo " ";
            }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["language"]), "html", null, true);
            echo "\">
                            <div class=\"box\">
                                <ol>
                                    <li class=\"pb-n\">
                                        ";
            // line 48
            echo             // line 49
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), 'row', array("label" => "admin.category.field.name.title", "attr" => array("placeholder" => "admin.category.field.name.placeholder")));
            // line 55
            echo "
                                        <div class=\"mt-m\">
                                            <p class=\"ta-r mb-n\"><a data-fc-modules=\"toggle\" href=\"#slug-";
            // line 57
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"fz-default\"><i class=\"icon-plus-circle\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.field.slug.customize"), "html", null, true);
            echo "</a></p>
                                        </div>
                                        <div id=\"slug-";
            // line 59
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"grid pt-s hidden\">
                                            <summary class=\"pl-l mb-n\"></summary>
                                            ";
            // line 61
            echo             // line 62
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), ($context["language"] . "_slug"), array(), "array"), 'row', array("label" => false, "attr" => array("placeholder" => "admin.category.field.slug.placeholder", "data-fc-modules" => "slug", "data-fc-parent" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 67
(isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), "vars", array()), "id", array()), "pattern" => "^[a-z0-9-]+\$")));
            // line 71
            echo "
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </section>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </div>
            </div>
        </div>
        <div class=\"grid ";
        // line 81
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "choices", array())) <= 0)) {
            echo "d-n";
        }
        echo "\">
            <div class=\"col-1-3\">
                <div class=\"box-none mb-n pb-m\">
                    <h3 class=\"fw-n\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.categorization.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.categorization.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box mb-n pb-n\">
                    <ol class=\"grid pt-m\" data-fc-modules=\"category-parent\">
                        <li class=\"col-1-3\">
                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "root", array()), 'row', array("label" => "admin.category.field.root.title"));
        echo "
                        </li>
                        <li id=\"parent-categories\" style=\"display: none; margin-top: -2px;\" class=\"col-2-3\">
                            <label for=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"d-ib\">
                                ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.field.parent.title"), "html", null, true);
        echo "
                            </label>
                            <div class=\"d-ib w-80\">
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), 'widget');
        echo "
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class=\"ph-n pt-m mb-n\">
            <div class=\"box-background pv-s mb-l\">
                <a data-fc-modules=\"toggle\" href=\"#metadata-edit\"><i class=\"icon-plus-circle\"></i> ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.customize"), "html", null, true);
        echo "</a>
            </div>
            <div id=\"metadata-edit\" class=\"grid pt-s hidden\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.description"), "html", null, true);
        echo "</p>
                        ";
        // line 116
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 117
            echo "                            <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 119
        echo "                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div ";
        // line 122
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\"";
        }
        echo ">
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 124
            echo "                            <section id=\"metadata-";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" data-fc-name=\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo twig_escape_filter($this->env, "<i class=\"icon-star\"></i>");
                echo " ";
            }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["language"]), "html", null, true);
            echo "\">
                                <div class=\"box\">
                                    <ol>
                                        <li>
                                            ";
            // line 128
            echo             // line 129
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), ($context["language"] . "_metaTitle"), array(), "array"), 'row', array("label" => "admin.metadata.field.metatitle.title", "attr" => array("placeholder" => "admin.category.field.metatitle.placeholder")));
            // line 135
            echo "
                                        </li>
                                        <li>
                                            ";
            // line 138
            echo             // line 139
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), ($context["language"] . "_metaDescription"), array(), "array"), 'row', array("label" => "admin.metadata.field.metadescription.title", "attr" => array("placeholder" => "admin.category.field.metadescription.placeholder")));
            // line 145
            echo "
                                        </li>
                                        <li>
                                            ";
            // line 148
            echo             // line 149
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), ($context["language"] . "_metaKeywords"), array(), "array"), 'row', array("label" => "admin.metadata.field.metakeywords.title", "attr" => array("placeholder" => "admin.category.field.metakeywords.placeholder")));
            // line 155
            echo "
                                        </li>
                                    </ol>
                                </div>
                            </section>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                    </div>
                </div>
            </div>
        </div>

        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none mb-n pb-m\">
                    <h3 class=\"fw-n\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.visibility.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.section.visibility.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box mb-n pb-n\">
                    <ol class=\"pt-m\">
                        <li>
                            ";
        // line 177
        echo         // line 178
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.category.field.enabled.title"));
        // line 181
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class=\"grid fixed-bottom animated fade-in-up\">
            <div class=\"col-1-3\">
                &nbsp;
            </div>
            <div class=\"col-2-3\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <script type=\"text/javascript\">
                    if ( window!=window.top ) {
                        var oParent = window.parent,
                                oModal = oParent.TinyCore.Module.instantiate('modal');
                    }
                </script>
                <a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\" onclick=\"if(oModal !== undefined);oModal.close();\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </fieldset>
    ";
        // line 204
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_142e124f3f88c842f08be0b41b64ee3d6f8514c3b7a94a616caf227491f3242a->leave($__internal_142e124f3f88c842f08be0b41b64ee3d6f8514c3b7a94a616caf227491f3242a_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Category:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 204,  394 => 200,  384 => 193,  370 => 181,  368 => 178,  367 => 177,  357 => 170,  353 => 169,  343 => 161,  324 => 155,  322 => 149,  321 => 148,  316 => 145,  314 => 139,  313 => 138,  308 => 135,  306 => 129,  305 => 128,  291 => 124,  274 => 123,  268 => 122,  263 => 119,  257 => 117,  255 => 116,  251 => 115,  247 => 114,  239 => 109,  226 => 99,  220 => 96,  216 => 95,  210 => 92,  200 => 85,  196 => 84,  188 => 81,  183 => 78,  163 => 71,  161 => 67,  160 => 62,  159 => 61,  154 => 59,  147 => 57,  143 => 55,  141 => 49,  140 => 48,  126 => 44,  109 => 43,  103 => 42,  98 => 39,  92 => 37,  90 => 36,  86 => 35,  82 => 34,  74 => 29,  71 => 28,  69 => 25,  68 => 24,  67 => 23,  64 => 22,  55 => 18,  50 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'category',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if category.id %}*/
/*         <script type="text/javascript">*/
/*             if ( window != window.top ) {*/
/*                 var Mediator =  Mediator ? Mediator : window.parent.FrontendMediator;*/
/*                 Mediator.publish( 'new:category', { id : "{{ category.id }}", name : "{{ category.name }}" } );*/
/*             }*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     {% set formAction =*/
/*         category.id*/
/*             ? url('admin_category_update', { id: category.id })*/
/*             : url('admin_category_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*     <fieldset>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.category.section.basic.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.category.section.basic.description'|trans }}</p>*/
/*                     {% if elcodi_languages|length > 1 %}*/
/*                         <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading" {% endif %}>*/
/*                     {% for language in elcodi_languages %}*/
/*                         <section id="tab-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                             <div class="box">*/
/*                                 <ol>*/
/*                                     <li class="pb-n">*/
/*                                         {{*/
/*                                             form_row(form.name["#{language}_name"], {*/
/*                                                 label: 'admin.category.field.name.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.category.field.name.placeholder',*/
/*                                                 }*/
/*                                             })*/
/*                                         }}*/
/*                                         <div class="mt-m">*/
/*                                             <p class="ta-r mb-n"><a data-fc-modules="toggle" href="#slug-{{ language }}" class="fz-default"><i class="icon-plus-circle"></i> {{ 'admin.category.field.slug.customize'|trans }}</a></p>*/
/*                                         </div>*/
/*                                         <div id="slug-{{ language }}" class="grid pt-s hidden">*/
/*                                             <summary class="pl-l mb-n"></summary>*/
/*                                             {{*/
/*                                                 form_row(form.slug["#{language}_slug"], {*/
/*                                                     label: false,*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.category.field.slug.placeholder',*/
/*                                                         'data-fc-modules': 'slug',*/
/*                                                         'data-fc-parent': form.name["#{language}_name"].vars.id,*/
/*                                                         'pattern' : '^[a-z0-9-]+$'*/
/*                                                     }*/
/*                                                 })*/
/*                                             }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ol>*/
/*                             </div>*/
/*                         </section>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid {% if form.parent.vars.choices|length <= 0 %}d-n{% endif %}">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none mb-n pb-m">*/
/*                     <h3 class="fw-n">{{ 'admin.category.section.categorization.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.category.section.categorization.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box mb-n pb-n">*/
/*                     <ol class="grid pt-m" data-fc-modules="category-parent">*/
/*                         <li class="col-1-3">*/
/*                             {{ form_row(form.root, { label: 'admin.category.field.root.title' }) }}*/
/*                         </li>*/
/*                         <li id="parent-categories" style="display: none; margin-top: -2px;" class="col-2-3">*/
/*                             <label for="{{ form.parent.vars.id }}" class="d-ib">*/
/*                                 {{ 'admin.category.field.parent.title'|trans }}*/
/*                             </label>*/
/*                             <div class="d-ib w-80">*/
/*                                 {{ form_widget(form.parent) }}*/
/*                             </div>*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="ph-n pt-m mb-n">*/
/*             <div class="box-background pv-s mb-l">*/
/*                 <a data-fc-modules="toggle" href="#metadata-edit"><i class="icon-plus-circle"></i> {{ 'admin.metadata.customize'|trans }}</a>*/
/*             </div>*/
/*             <div id="metadata-edit" class="grid pt-s hidden">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.metadata.section.metadata.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.metadata.section.metadata.description'|trans }}</p>*/
/*                         {% if elcodi_languages|length > 1 %}*/
/*                             <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading"{% endif %}>*/
/*                         {% for language in elcodi_languages %}*/
/*                             <section id="metadata-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                                 <div class="box">*/
/*                                     <ol>*/
/*                                         <li>*/
/*                                             {{*/
/*                                                 form_row(form.metaTitle["#{language}_metaTitle"], {*/
/*                                                     label: 'admin.metadata.field.metatitle.title',*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.category.field.metatitle.placeholder',*/
/*                                                     },*/
/*                                                 })*/
/*                                             }}*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             {{*/
/*                                                 form_row(form.metaDescription["#{language}_metaDescription"], {*/
/*                                                     label: 'admin.metadata.field.metadescription.title',*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.category.field.metadescription.placeholder',*/
/*                                                     },*/
/*                                                 })*/
/*                                             }}*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             {{*/
/*                                                 form_row(form.metaKeywords["#{language}_metaKeywords"], {*/
/*                                                     label: 'admin.metadata.field.metakeywords.title',*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.category.field.metakeywords.placeholder',*/
/*                                                     },*/
/*                                                 })*/
/*                                             }}*/
/*                                         </li>*/
/*                                     </ol>*/
/*                                 </div>*/
/*                             </section>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none mb-n pb-m">*/
/*                     <h3 class="fw-n">{{ 'admin.category.section.visibility.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.category.section.visibility.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box mb-n pb-n">*/
/*                     <ol class="pt-m">*/
/*                         <li>*/
/*                             {{*/
/*                                 form_row(form.enabled, {*/
/*                                     label: 'admin.category.field.enabled.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <script type="text/javascript">*/
/*                     if ( window!=window.top ) {*/
/*                         var oParent = window.parent,*/
/*                                 oModal = oParent.TinyCore.Module.instantiate('modal');*/
/*                     }*/
/*                 </script>*/
/*                 <a href="{{ path('admin_category_list') }}" onclick="if(oModal !== undefined);oModal.close();">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
