<?php

/* AdminPageBundle:Page:editComponent.html.twig */
class __TwigTemplate_ea06196d41a892cc0786a44d9e9d44fc5f8ae57a22ef79e91941ddd1d2cd4e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminPageBundle:Page:editComponent.html.twig", 1);
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
        $__internal_8b1221ac0ff3d9b7936df20414442d6ae4c7540443c4ac257ea0b962c1355286 = $this->env->getExtension("native_profiler");
        $__internal_8b1221ac0ff3d9b7936df20414442d6ae4c7540443c4ac257ea0b962c1355286->enter($__internal_8b1221ac0ff3d9b7936df20414442d6ae4c7540443c4ac257ea0b962c1355286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Page:editComponent.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 7
        $context["elcodi_context"] = array("entity_type" => "page");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1221ac0ff3d9b7936df20414442d6ae4c7540443c4ac257ea0b962c1355286->leave($__internal_8b1221ac0ff3d9b7936df20414442d6ae4c7540443c4ac257ea0b962c1355286_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_884d6e28a2b42aa72d404f7c8fc06b47baadb8dc99bfd138674459544422f504 = $this->env->getExtension("native_profiler");
        $__internal_884d6e28a2b42aa72d404f7c8fc06b47baadb8dc99bfd138674459544422f504->enter($__internal_884d6e28a2b42aa72d404f7c8fc06b47baadb8dc99bfd138674459544422f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["page"]) ? $context["page"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_page_update", array("id" => $this->getAttribute(        // line 16
(isset($context["page"]) ? $context["page"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_page_save")));
        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.section.basic.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.section.basic.description"), "html", null, true);
        echo "</p>
                        ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 28
            echo "                            <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 30
        echo "                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\"";
        }
        echo ">
                        ";
        // line 34
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
            // line 35
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
                                    <li>
                                        ";
            // line 39
            echo             // line 40
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), ($context["language"] . "_title"), array(), "array"), 'row', array("label" => "admin.page.field.title.title", "attr" => array("placeholder" => "admin.page.field.title.placeholder")));
            // line 46
            echo "
                                        <div class=\"mt-m ta-r\">
                                            <a data-fc-modules=\"toggle\" href=\"#slug-";
            // line 48
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"fz-default\"><i class=\"icon-plus-circle\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.field.path.customize"), "html", null, true);
            echo "</a>
                                        </div>
                                        <div id=\"slug-";
            // line 50
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"ph-n pt-m mb-n hidden\">
                                            ";
            // line 51
            echo             // line 52
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "path", array()), ($context["language"] . "_path"), array(), "array"), 'row', array("label" => false, "attr" => array("placeholder" => "admin.page.field.path.placeholder", "data-fc-modules" => "slug", "data-fc-parent" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 57
(isset($context["form"]) ? $context["form"] : null), "title", array()), ($context["language"] . "_title"), array(), "array"), "vars", array()), "id", array()))));
            // line 60
            echo "
                                        </div>
                                    </li>
                                    <li>
                                        ";
            // line 64
            echo             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), ($context["language"] . "_content"), array(), "array"), 'row', array("label" => "admin.page.field.content.title", "attr" => array("placeholder" => "admin.page.field.content.placeholder", "data-fc-modules" => "wysiwyg", "data-fc-fullscreen" => "false", "data-fc-text-html" => $this->env->getExtension('translator')->trans("admin.UI.show_code"), "data-fc-text-visual" => $this->env->getExtension('translator')->trans("admin.UI.show_visual"), "data-fc-text-help" => $this->env->getExtension('translator')->trans("ui.editor.help"))));
            // line 76
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
        // line 82
        echo "                        </div>
                </div>
            </div>

            <div class=\"ph-n\">
                <div class=\"box-background pv-s mb-l\">
                    <a data-fc-modules=\"toggle\" href=\"#metadata-edit\"><i class=\"icon-plus-circle\"></i> ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.customize"), "html", null, true);
        echo "</a>
                </div>
                <div id=\"metadata-edit\" class=\"grid pt-s hidden\">
                    <div class=\"col-1-3\">
                        <div class=\"box-none\">
                            <h3 class=\"fw-n\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.title"), "html", null, true);
        echo "</h3>
                            <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.description"), "html", null, true);
        echo "</p>
                            ";
        // line 95
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 96
            echo "                                <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 98
        echo "                        </div>
                    </div>
                    <div class=\"col-2-3\">
                        <div ";
        // line 101
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\"";
        }
        echo ">
                            ";
        // line 102
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
            // line 103
            echo "                                <section id=\"metadata-";
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
            // line 107
            echo             // line 108
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), ($context["language"] . "_metaTitle"), array(), "array"), 'row', array("label" => "admin.metadata.field.metatitle.title", "attr" => array("placeholder" => "admin.page.field.metatitle.placeholder")));
            // line 114
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 117
            echo             // line 118
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), ($context["language"] . "_metaDescription"), array(), "array"), 'row', array("label" => "admin.metadata.field.metadescription.title", "attr" => array("placeholder" => "admin.page.field.metadescription.placeholder")));
            // line 124
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 127
            echo             // line 128
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), ($context["language"] . "_metaKeywords"), array(), "array"), 'row', array("label" => "admin.metadata.field.metakeywords.title", "attr" => array("placeholder" => "admin.page.field.metakeywords.placeholder")));
            // line 134
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
        // line 140
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 145
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array(), "any", true, true)) {
            // line 146
            echo "            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none mb-n pb-m\">
                        <h3 class=\"fw-n\">";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.section.visibility.title"), "html", null, true);
            echo "</h3>
                        <p>";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.page.section.visibility.description"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box mb-n pb-n\">
                        <ol class=\"grid pt-m\">
                            <li class=\"col-1-2\">
                                ";
            // line 157
            echo             // line 158
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "ui.label.enabled"));
            // line 161
            echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            ";
        }
        // line 168
        echo "        </fieldset>

        <div class=\"grid fixed-bottom animated fade-in-up\">
            <div class=\"col-1-3\">
                &nbsp;
            </div>
            <div class=\"col-2-3\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\" id=\"submit-page\">";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("admin_page_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 179
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_884d6e28a2b42aa72d404f7c8fc06b47baadb8dc99bfd138674459544422f504->leave($__internal_884d6e28a2b42aa72d404f7c8fc06b47baadb8dc99bfd138674459544422f504_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Page:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 179,  336 => 176,  332 => 175,  323 => 168,  314 => 161,  312 => 158,  311 => 157,  301 => 150,  297 => 149,  292 => 146,  290 => 145,  283 => 140,  264 => 134,  262 => 128,  261 => 127,  256 => 124,  254 => 118,  253 => 117,  248 => 114,  246 => 108,  245 => 107,  231 => 103,  214 => 102,  208 => 101,  203 => 98,  197 => 96,  195 => 95,  191 => 94,  187 => 93,  179 => 88,  171 => 82,  152 => 76,  150 => 65,  149 => 64,  143 => 60,  141 => 57,  140 => 52,  139 => 51,  135 => 50,  128 => 48,  124 => 46,  122 => 40,  121 => 39,  107 => 35,  90 => 34,  84 => 33,  79 => 30,  73 => 28,  71 => 27,  67 => 26,  63 => 25,  55 => 20,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 7,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'page',*/
/* } %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         page.id*/
/*             ? url('admin_page_update', { id: page.id })*/
/*             : url('admin_page_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*         <fieldset>*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.page.section.basic.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.page.section.basic.description'|trans }}</p>*/
/*                         {% if elcodi_languages|length > 1 %}*/
/*                             <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading"{% endif %}>*/
/*                         {% for language in elcodi_languages %}*/
/*                         <section id="tab-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                             <div class="box">*/
/*                                 <ol>*/
/*                                     <li>*/
/*                                         {{*/
/*                                             form_row(form.title["#{language}_title"], {*/
/*                                                 label: 'admin.page.field.title.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.page.field.title.placeholder',*/
/*                                                 }*/
/*                                             })*/
/*                                         }}*/
/*                                         <div class="mt-m ta-r">*/
/*                                             <a data-fc-modules="toggle" href="#slug-{{ language }}" class="fz-default"><i class="icon-plus-circle"></i> {{ 'admin.page.field.path.customize'|trans }}</a>*/
/*                                         </div>*/
/*                                         <div id="slug-{{ language }}" class="ph-n pt-m mb-n hidden">*/
/*                                             {{*/
/*                                                 form_row(form.path["#{language}_path"], {*/
/*                                                     label: false,*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.page.field.path.placeholder',*/
/*                                                         'data-fc-modules': 'slug',*/
/*                                                         'data-fc-parent': form.title["#{language}_title"].vars.id,*/
/*                                                     }*/
/*                                                 })*/
/*                                             }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         {{*/
/*                                             form_row(form.content["#{language}_content"], {*/
/*                                                 label: 'admin.page.field.content.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.page.field.content.placeholder',*/
/*                                                     'data-fc-modules': 'wysiwyg',*/
/*                                                     'data-fc-fullscreen': 'false',*/
/*                                                     'data-fc-text-html': 'admin.UI.show_code'|trans,*/
/*                                                     'data-fc-text-visual': 'admin.UI.show_visual'|trans,*/
/*                                                     'data-fc-text-help': 'ui.editor.help'|trans,*/
/*                                                 }*/
/*                                             })*/
/*                                         }}*/
/*                                     </li>*/
/*                                 </ol>*/
/*                             </div>*/
/*                         </section>*/
/*                         {% endfor %}*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="ph-n">*/
/*                 <div class="box-background pv-s mb-l">*/
/*                     <a data-fc-modules="toggle" href="#metadata-edit"><i class="icon-plus-circle"></i> {{ 'admin.metadata.customize'|trans }}</a>*/
/*                 </div>*/
/*                 <div id="metadata-edit" class="grid pt-s hidden">*/
/*                     <div class="col-1-3">*/
/*                         <div class="box-none">*/
/*                             <h3 class="fw-n">{{ 'admin.metadata.section.metadata.title'|trans }}</h3>*/
/*                             <p>{{ 'admin.metadata.section.metadata.description'|trans }}</p>*/
/*                             {% if elcodi_languages|length > 1 %}*/
/*                                 <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-2-3">*/
/*                         <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading"{% endif %}>*/
/*                             {% for language in elcodi_languages %}*/
/*                                 <section id="metadata-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                                     <div class="box">*/
/*                                         <ol>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaTitle["#{language}_metaTitle"], {*/
/*                                                         label: 'admin.metadata.field.metatitle.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.page.field.metatitle.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaDescription["#{language}_metaDescription"], {*/
/*                                                         label: 'admin.metadata.field.metadescription.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.page.field.metadescription.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaKeywords["#{language}_metaKeywords"], {*/
/*                                                         label: 'admin.metadata.field.metakeywords.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.page.field.metakeywords.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                         </ol>*/
/*                                     </div>*/
/*                                 </section>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if form.enabled is defined %}*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none mb-n pb-m">*/
/*                         <h3 class="fw-n">{{ 'admin.page.section.visibility.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.page.section.visibility.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box mb-n pb-n">*/
/*                         <ol class="grid pt-m">*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.enabled, {*/
/*                                         label: 'ui.label.enabled',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*         </fieldset>*/
/* */
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l" id="submit-page">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_page_list') }}">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
