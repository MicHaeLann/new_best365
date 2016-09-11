<?php

/* AdminProductBundle:Manufacturer:editComponent.html.twig */
class __TwigTemplate_c0f0766c8f3a8478de6250de8bc5c10c2320963873ee99f130cd21caf96e3f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminProductBundle:Manufacturer:editComponent.html.twig", 1);
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
        $__internal_637d79fcc61478d9819a495858a70192979cc7cb938c092942524fbc0177c4a0 = $this->env->getExtension("native_profiler");
        $__internal_637d79fcc61478d9819a495858a70192979cc7cb938c092942524fbc0177c4a0->enter($__internal_637d79fcc61478d9819a495858a70192979cc7cb938c092942524fbc0177c4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Manufacturer:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "manufacturer");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637d79fcc61478d9819a495858a70192979cc7cb938c092942524fbc0177c4a0->leave($__internal_637d79fcc61478d9819a495858a70192979cc7cb938c092942524fbc0177c4a0_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_feef283be9bd34beab9486529dbbe70c4658353bb601b5dab790c77a23508ec6 = $this->env->getExtension("native_profiler");
        $__internal_feef283be9bd34beab9486529dbbe70c4658353bb601b5dab790c77a23508ec6->enter($__internal_feef283be9bd34beab9486529dbbe70c4658353bb601b5dab790c77a23508ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array())) {
            // line 15
            echo "        <script type=\"text/javascript\">
            if ( window != window.top ) {
                var Mediator =  Mediator ? Mediator : window.parent.FrontendMediator;
                Mediator.publish( 'new:manufacturer', { id : \"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array()), "html", null, true);
            echo "\", name : \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manufacturer"]) ? $context["manufacturer"] : null), "name", array()), "html", null, true);
            echo "\"} );
            }
        </script>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["formAction"] = (($this->getAttribute(        // line 24
(isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_manufacturer_update", array("id" => $this->getAttribute(        // line 25
(isset($context["manufacturer"]) ? $context["manufacturer"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_manufacturer_save")));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.section.basic.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.section.basic.description"), "html", null, true);
        echo "</p>
                        ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 37
            echo "                            <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 39
        echo "                    </div>
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
            echo "                            <section id=\"tab-";
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
            // line 48
            echo             // line 49
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), 'row', array("label" => "admin.manufacturer.field.name.title", "attr" => array("placeholder" => "admin.manufacturer.field.name.placeholder")));
            // line 55
            echo "
                                            <div class=\"mt-m\">
                                                <a data-fc-modules=\"toggle\" href=\"#slug-";
            // line 57
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"fz-default\"><i class=\"icon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.field.slug.customize"), "html", null, true);
            echo "</a>
                                            </div>
                                            <div id=\"slug-";
            // line 59
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"ph-n pt-m mb-n hidden\">
                                                ";
            // line 60
            echo             // line 61
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), ($context["language"] . "_slug"), array(), "array"), 'row', array("label" => false, "attr" => array("placeholder" => "admin.manufacturer.field.slug.placeholder", "data-fc-modules" => "slug", "data-fc-parent" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 66
(isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), "vars", array()), "id", array()), "pattern" => "^[a-z0-9-]+\$")));
            // line 70
            echo "
                                            </div>
                                        </li>
                                        <li>
                                            ";
            // line 74
            echo             // line 75
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), ($context["language"] . "_description"), array(), "array"), 'row', array("label" => "admin.manufacturer.field.description.title", "attr" => array("placeholder" => "admin.manufacturer.field.description.placeholder", "data-fc-modules" => "wysiwyg", "data-fc-fullscreen" => "false", "data-fc-text-html" => $this->env->getExtension('translator')->trans("admin.UI.show_code"), "data-fc-text-visual" => $this->env->getExtension('translator')->trans("admin.UI.show_visual"), "data-fc-text-help" => $this->env->getExtension('translator')->trans("ui.editor.help"))));
            // line 86
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
        // line 92
        echo "                    </div>
                </div>
            </div>
            ";
        // line 95
        $this->loadTemplate("@AdminMedia/Module/_image-single-form-field.html.twig", "AdminProductBundle:Manufacturer:editComponent.html.twig", 95)->display(array_merge($context, array("sectionTitle" => "admin.manufacturer.section.logo.title", "sectionDescription" => "admin.manufacturer.section.logo.description", "image" => $this->getAttribute($this->getAttribute(        // line 98
(isset($context["manufacturer"]) ? $context["manufacturer"] : null), "images", array()), 0, array()), "imageForm" => $this->getAttribute(        // line 99
(isset($context["form"]) ? $context["form"] : null), "images", array()), "imageName" => "logo")));
        // line 102
        echo "            <div class=\"ph-n\">
                <div class=\"box-background pv-s mb-l\">
                    <a data-fc-modules=\"toggle\" href=\"#metadata-edit\"><i class=\"icon-plus-circle\"></i> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.customize"), "html", null, true);
        echo "</a>
                </div>
                <div id=\"metadata-edit\" class=\"grid pt-s hidden\">
                    <div class=\"col-1-3\">
                        <div class=\"box-none\">
                            <h3 class=\"fw-n\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.title"), "html", null, true);
        echo "</h3>
                            <p>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.description"), "html", null, true);
        echo "</p>
                            ";
        // line 111
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 112
            echo "                                <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 114
        echo "                        </div>
                    </div>
                    <div class=\"col-2-3\">
                        <div ";
        // line 117
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\"";
        }
        echo ">
                            ";
        // line 118
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
            // line 119
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
            // line 123
            echo             // line 124
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), ($context["language"] . "_metaTitle"), array(), "array"), 'row', array("label" => "admin.metadata.field.metatitle.title", "attr" => array("placeholder" => "admin.manufacturer.field.metatitle.placeholder")));
            // line 130
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 133
            echo             // line 134
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), ($context["language"] . "_metaDescription"), array(), "array"), 'row', array("label" => "admin.metadata.field.metadescription.title", "attr" => array("placeholder" => "admin.manufacturer.field.metadescription.placeholder")));
            // line 140
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 143
            echo             // line 144
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), ($context["language"] . "_metaKeywords"), array(), "array"), 'row', array("label" => "admin.metadata.field.metakeywords.title", "attr" => array("placeholder" => "admin.manufacturer.field.metakeywords.placeholder")));
            // line 150
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
        // line 156
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none mb-n pb-m\">
                        <h3 class=\"fw-n\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.section.visibility.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.section.visibility.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box mb-n pb-n\">
                        <ol>
                            <li>
                                ";
        // line 171
        echo         // line 172
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.manufacturer.field.enabled.title"));
        // line 175
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
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                    <script type=\"text/javascript\">
                        if ( window!=window.top ) {
                            var oParent = window.parent,
                                    oModal = oParent.TinyCore.Module.instantiate('modal');
                        }
                    </script>
                    <a href=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("admin_manufacturer_list");
        echo "\" onclick=\"if(oModal !== undefined);oModal.close();\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </fieldset>
    ";
        // line 197
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_feef283be9bd34beab9486529dbbe70c4658353bb601b5dab790c77a23508ec6->leave($__internal_feef283be9bd34beab9486529dbbe70c4658353bb601b5dab790c77a23508ec6_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Manufacturer:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 197,  356 => 193,  346 => 186,  333 => 175,  331 => 172,  330 => 171,  320 => 164,  316 => 163,  307 => 156,  288 => 150,  286 => 144,  285 => 143,  280 => 140,  278 => 134,  277 => 133,  272 => 130,  270 => 124,  269 => 123,  255 => 119,  238 => 118,  232 => 117,  227 => 114,  221 => 112,  219 => 111,  215 => 110,  211 => 109,  203 => 104,  199 => 102,  197 => 99,  196 => 98,  195 => 95,  190 => 92,  171 => 86,  169 => 75,  168 => 74,  162 => 70,  160 => 66,  159 => 61,  158 => 60,  154 => 59,  147 => 57,  143 => 55,  141 => 49,  140 => 48,  126 => 44,  109 => 43,  103 => 42,  98 => 39,  92 => 37,  90 => 36,  86 => 35,  82 => 34,  74 => 29,  71 => 28,  69 => 25,  68 => 24,  67 => 23,  64 => 22,  55 => 18,  50 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'manufacturer',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if manufacturer.id %}*/
/*         <script type="text/javascript">*/
/*             if ( window != window.top ) {*/
/*                 var Mediator =  Mediator ? Mediator : window.parent.FrontendMediator;*/
/*                 Mediator.publish( 'new:manufacturer', { id : "{{ manufacturer.id }}", name : "{{ manufacturer.name }}"} );*/
/*             }*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     {% set formAction =*/
/*         manufacturer.id*/
/*             ? url('admin_manufacturer_update', { id: manufacturer.id })*/
/*             : url('admin_manufacturer_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*         <fieldset>*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.manufacturer.section.basic.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.manufacturer.section.basic.description'|trans }}</p>*/
/*                         {% if elcodi_languages|length > 1 %}*/
/*                             <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading" {% endif %}>*/
/*                         {% for language in elcodi_languages %}*/
/*                             <section id="tab-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                                 <div class="box">*/
/*                                     <ol>*/
/*                                         <li>*/
/*                                             {{*/
/*                                                 form_row(form.name["#{language}_name"], {*/
/*                                                     label: 'admin.manufacturer.field.name.title',*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.manufacturer.field.name.placeholder',*/
/*                                                     }*/
/*                                                 })*/
/*                                             }}*/
/*                                             <div class="mt-m">*/
/*                                                 <a data-fc-modules="toggle" href="#slug-{{ language }}" class="fz-default"><i class="icon-plus"></i> {{ 'admin.manufacturer.field.slug.customize'|trans }}</a>*/
/*                                             </div>*/
/*                                             <div id="slug-{{ language }}" class="ph-n pt-m mb-n hidden">*/
/*                                                 {{*/
/*                                                     form_row(form.slug["#{language}_slug"], {*/
/*                                                         label: false,*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.manufacturer.field.slug.placeholder',*/
/*                                                             'data-fc-modules': 'slug',*/
/*                                                             'data-fc-parent': form.name["#{language}_name"].vars.id,*/
/*                                                             'pattern' : '^[a-z0-9-]+$'*/
/*                                                         }*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </div>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             {{*/
/*                                                 form_row(form.description["#{language}_description"], {*/
/*                                                     label: 'admin.manufacturer.field.description.title',*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.manufacturer.field.description.placeholder',*/
/*                                                         'data-fc-modules': 'wysiwyg',*/
/*                                                         'data-fc-fullscreen': 'false',*/
/*                                                         'data-fc-text-html': 'admin.UI.show_code'|trans,*/
/*                                                         'data-fc-text-visual': 'admin.UI.show_visual'|trans,*/
/*                                                         'data-fc-text-help': 'ui.editor.help'|trans,*/
/*                                                     }*/
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
/*             {% include "@AdminMedia/Module/_image-single-form-field.html.twig" with {*/
/*                 sectionTitle: 'admin.manufacturer.section.logo.title',*/
/*                 sectionDescription: 'admin.manufacturer.section.logo.description',*/
/*                 image: manufacturer.images.0,*/
/*                 imageForm: form.images,*/
/*                 imageName : 'logo'*/
/*             } %}*/
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
/*                                                             placeholder: 'admin.manufacturer.field.metatitle.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaDescription["#{language}_metaDescription"], {*/
/*                                                         label: 'admin.metadata.field.metadescription.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.manufacturer.field.metadescription.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaKeywords["#{language}_metaKeywords"], {*/
/*                                                         label: 'admin.metadata.field.metakeywords.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.manufacturer.field.metakeywords.placeholder',*/
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
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none mb-n pb-m">*/
/*                         <h3 class="fw-n">{{ 'admin.manufacturer.section.visibility.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.manufacturer.section.visibility.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box mb-n pb-n">*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {{*/
/*                                     form_row(form.enabled, {*/
/*                                         label: 'admin.manufacturer.field.enabled.title',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid fixed-bottom animated fade-in-up">*/
/*                 <div class="col-1-3">*/
/*                     &nbsp;*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                     <script type="text/javascript">*/
/*                         if ( window!=window.top ) {*/
/*                             var oParent = window.parent,*/
/*                                     oModal = oParent.TinyCore.Module.instantiate('modal');*/
/*                         }*/
/*                     </script>*/
/*                     <a href="{{ path('admin_manufacturer_list') }}" onclick="if(oModal !== undefined);oModal.close();">{{ 'ui.forms.cancel'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/*         </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
