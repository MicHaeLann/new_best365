<?php

/* ElcodiCustomShippingBundle:Carrier:editComponent.html.twig */
class __TwigTemplate_fc1aee044e81db7c01ccdeda8943011a1bf09d17d24cf8fb54dd55d864c1c3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "ElcodiCustomShippingBundle:Carrier:editComponent.html.twig", 1);
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
        $__internal_e5c7aa5e819a5d5e8a3c711ebcb4551e59b8a3f436e73ecbbeecb65e6c780832 = $this->env->getExtension("native_profiler");
        $__internal_e5c7aa5e819a5d5e8a3c711ebcb4551e59b8a3f436e73ecbbeecb65e6c780832->enter($__internal_e5c7aa5e819a5d5e8a3c711ebcb4551e59b8a3f436e73ecbbeecb65e6c780832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiCustomShippingBundle:Carrier:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "carrier");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c7aa5e819a5d5e8a3c711ebcb4551e59b8a3f436e73ecbbeecb65e6c780832->leave($__internal_e5c7aa5e819a5d5e8a3c711ebcb4551e59b8a3f436e73ecbbeecb65e6c780832_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_e704c7fabbd60a00d7755564a3362da11ac1d71b0fa64a6505bad291a4b665ce = $this->env->getExtension("native_profiler");
        $__internal_e704c7fabbd60a00d7755564a3362da11ac1d71b0fa64a6505bad291a4b665ce->enter($__internal_e704c7fabbd60a00d7755564a3362da11ac1d71b0fa64a6505bad291a4b665ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_carrier_update", array("id" => $this->getAttribute(        // line 16
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_carrier_save")));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.basic.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.basic.description"), "html", null, true);
        echo "</p>
                    ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 28
            echo "                        <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 30
        echo "                </div>
            </div>
            <div class=\"col-2-3\">
                <div ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\" ";
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
            echo "                    <section id=\"tab-";
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
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), 'row', array("label" => "admin.carrier.field.name.title", "attr" => array("placeholder" => "admin.carrier.field.name.placeholder")));
            // line 44
            echo "
                                </li>
                                <li>
                                    ";
            // line 47
            echo             // line 48
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), ($context["language"] . "_description"), array(), "array"), 'row', array("label" => "admin.carrier.field.description.title", "attr" => array("placeholder" => "admin.carrier.field.description.placeholder")));
            // line 52
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
        // line 58
        echo "                </div>
            </div>
        </div>

        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.taxes.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.taxes.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    <ol class=\"grid pt-m\">
                        <li class=\"w-30\">
                            ";
        // line 73
        echo         // line 74
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tax", array()), 'row', array("label" => "admin.carrier.field.taxes.title"));
        // line 77
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none\">
                    <h3 class=\"fw-n\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.shipping_rates.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.shipping_rates.description"), "html", null, true);
        echo "</p>
                    ";
        // line 89
        if ($this->getAttribute((isset($context["carrier"]) ? $context["carrier"] : null), "id", array())) {
            // line 90
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_shipping_range_new", array("carrierId" => $this->getAttribute(            // line 91
(isset($context["carrier"]) ? $context["carrier"] : null), "id", array()))), "html", null, true);
            // line 92
            echo "\" class=\"button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.action.add_shipping_range"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 94
        echo "                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box\">
                    ";
        // line 98
        if ($this->getAttribute((isset($context["carrier"]) ? $context["carrier"] : null), "id", array())) {
            // line 99
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_shipping_range_list_component", array("carrierId" => $this->getAttribute((isset($context["carrier"]) ? $context["carrier"] : null), "id", array()))));
            echo "
                    ";
        } else {
            // line 101
            echo "                        <div class=\"box-background pa-n\">
                            <p class=\"msg-info ma-n\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.info.shipping_rates_before_saving"), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        // line 105
        echo "                </div>
            </div>
        </div>
        <div class=\"grid\">
            <div class=\"col-1-3\">
                <div class=\"box-none mb-n pb-m\">
                    <h3 class=\"fw-n\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.visibility.title"), "html", null, true);
        echo "</h3>
                    <p>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.carrier.section.visibility.description"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-2-3\">
                <div class=\"box mb-n pb-n\">
                    <ol class=\"grid pt-m\">
                        <li class=\"col-1-2\">
                            ";
        // line 119
        echo         // line 120
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.carrier.field.status.title"));
        // line 123
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        </fieldset>
        <div class=\"grid fixed-bottom animated fade-in-up\">
            <div class=\"col-1-3\">
                &nbsp;
            </div>
            <div class=\"col-2-3\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("admin_carrier_list");
        echo "\" id=\"cancel-button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 139
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_e704c7fabbd60a00d7755564a3362da11ac1d71b0fa64a6505bad291a4b665ce->leave($__internal_e704c7fabbd60a00d7755564a3362da11ac1d71b0fa64a6505bad291a4b665ce_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiCustomShippingBundle:Carrier:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 139,  275 => 136,  271 => 135,  257 => 123,  255 => 120,  254 => 119,  244 => 112,  240 => 111,  232 => 105,  226 => 102,  223 => 101,  217 => 99,  215 => 98,  209 => 94,  203 => 92,  201 => 91,  199 => 90,  197 => 89,  193 => 88,  189 => 87,  177 => 77,  175 => 74,  174 => 73,  164 => 66,  160 => 65,  151 => 58,  132 => 52,  130 => 48,  129 => 47,  124 => 44,  122 => 40,  121 => 39,  107 => 35,  90 => 34,  84 => 33,  79 => 30,  73 => 28,  71 => 27,  67 => 26,  63 => 25,  55 => 20,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'carrier',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         carrier.id*/
/*             ? url('admin_carrier_update', { id: carrier.id })*/
/*             : url('admin_carrier_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*     <fieldset>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.carrier.section.basic.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.carrier.section.basic.description'|trans }}</p>*/
/*                     {% if elcodi_languages|length > 1 %}*/
/*                         <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading" {% endif %}>*/
/*                     {% for language in elcodi_languages %}*/
/*                     <section id="tab-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                         <div class="box">*/
/*                             <ol>*/
/*                                 <li>*/
/*                                     {{*/
/*                                         form_row(form.name["#{language}_name"], {*/
/*                                             label: 'admin.carrier.field.name.title',*/
/*                                             attr: { placeholder: 'admin.carrier.field.name.placeholder' }*/
/*                                         })*/
/*                                     }}*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     {{*/
/*                                         form_row(form.description["#{language}_description"], {*/
/*                                             label: 'admin.carrier.field.description.title',*/
/*                                             attr: { placeholder: 'admin.carrier.field.description.placeholder' }*/
/*                                         })*/
/*                                     }}*/
/*                                 </li>*/
/*                             </ol>*/
/*                         </div>*/
/*                     </section>*/
/*                 {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.carrier.section.taxes.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.carrier.section.taxes.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     <ol class="grid pt-m">*/
/*                         <li class="w-30">*/
/*                             {{*/
/*                                 form_row(form.tax, {*/
/*                                     label: 'admin.carrier.field.taxes.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none">*/
/*                     <h3 class="fw-n">{{ 'admin.carrier.section.shipping_rates.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.carrier.section.shipping_rates.description'|trans }}</p>*/
/*                     {% if carrier.id %}*/
/*                         <a href="{{ url('admin_shipping_range_new', {*/
/*                             carrierId: carrier.id,*/
/*                         }) }}" class="button">{{ 'admin.carrier.action.add_shipping_range'|trans }}</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box">*/
/*                     {% if carrier.id %}*/
/*                         {{ render(url('admin_shipping_range_list_component', { carrierId: carrier.id })) }}*/
/*                     {% else %}*/
/*                         <div class="box-background pa-n">*/
/*                             <p class="msg-info ma-n">{{ 'admin.carrier.info.shipping_rates_before_saving'|trans }}</p>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid">*/
/*             <div class="col-1-3">*/
/*                 <div class="box-none mb-n pb-m">*/
/*                     <h3 class="fw-n">{{ 'admin.carrier.section.visibility.title'|trans }}</h3>*/
/*                     <p>{{ 'admin.carrier.section.visibility.description'|trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <div class="box mb-n pb-n">*/
/*                     <ol class="grid pt-m">*/
/*                         <li class="col-1-2">*/
/*                             {{*/
/*                                 form_row(form.enabled, {*/
/*                                     label: 'admin.carrier.field.status.title',*/
/*                                 })*/
/*                             }}*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </fieldset>*/
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_carrier_list') }}" id="cancel-button">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
