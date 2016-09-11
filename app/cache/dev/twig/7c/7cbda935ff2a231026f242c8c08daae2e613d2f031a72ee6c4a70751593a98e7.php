<?php

/* AdminPageBundle:Email:editComponent.html.twig */
class __TwigTemplate_be92707fbd4d6d2f45a0eb58cb62815215cbcb903af0847e6742cf8064c3355a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminPageBundle:Email:editComponent.html.twig", 1);
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
        $__internal_91c4c8bea6a6218ba2938e642f10c5def8ffbb0d698defba1b1e85336d33a3a0 = $this->env->getExtension("native_profiler");
        $__internal_91c4c8bea6a6218ba2938e642f10c5def8ffbb0d698defba1b1e85336d33a3a0->enter($__internal_91c4c8bea6a6218ba2938e642f10c5def8ffbb0d698defba1b1e85336d33a3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminPageBundle:Email:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "mailing");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c4c8bea6a6218ba2938e642f10c5def8ffbb0d698defba1b1e85336d33a3a0->leave($__internal_91c4c8bea6a6218ba2938e642f10c5def8ffbb0d698defba1b1e85336d33a3a0_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c684108c4b6f8c24d40a02f20a5be5acb0a2e2a73341965456068bf09f33ece = $this->env->getExtension("native_profiler");
        $__internal_1c684108c4b6f8c24d40a02f20a5be5acb0a2e2a73341965456068bf09f33ece->enter($__internal_1c684108c4b6f8c24d40a02f20a5be5acb0a2e2a73341965456068bf09f33ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = $this->env->getExtension('routing')->getUrl("admin_email_update", array("id" => $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id", array())));
        // line 15
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.mailing.section.basic.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.mailing.section.basic.description"), "html", null, true);
        echo "</p>
                        ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 23
            echo "                            <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 25
        echo "                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\" ";
        }
        echo ">
                        ";
        // line 29
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
            // line 30
            echo "                        <section id=\"tab-";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" data-fc-name=\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "<i class='icon-star'></i> ";
            }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["language"]), "html", null, true);
            echo "\">
                            <div class=\"box\">
                                <ol>
                                    <li>
                                        ";
            // line 34
            echo             // line 35
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), ($context["language"] . "_title"), array(), "array"), 'row', array("label" => "admin.mailing.field.title.title", "attr" => array("placeholder" => "admin.mailing.field.title.placeholder")));
            // line 41
            echo "
                                    </li>
                                    <li>
                                        ";
            // line 44
            echo             // line 45
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), ($context["language"] . "_content"), array(), "array"), 'row', array("label" => "admin.mailing.field.content.title", "attr" => array("placeholder" => "admin.mailing.field.content.placeholder", "data-fc-modules" => "wysiwyg", "data-fc-fullscreen" => "false", "data-fc-text-html" => $this->env->getExtension('translator')->trans("admin.UI.show_code"), "data-fc-text-visual" => $this->env->getExtension('translator')->trans("admin.UI.show_visual"), "data-fc-text-help" => $this->env->getExtension('translator')->trans("ui.editor.help"))));
            // line 56
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
        // line 62
        echo "                    </div>
                </div>
            </div>
        </fieldset>

        <div class=\"grid fixed-bottom animated fade-in-up\">
            <div class=\"col-1-3\">
                &nbsp;
            </div>
            <div class=\"col-2-3\">
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("admin_email_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_1c684108c4b6f8c24d40a02f20a5be5acb0a2e2a73341965456068bf09f33ece->leave($__internal_1c684108c4b6f8c24d40a02f20a5be5acb0a2e2a73341965456068bf09f33ece_prof);

    }

    public function getTemplateName()
    {
        return "AdminPageBundle:Email:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 76,  162 => 73,  158 => 72,  146 => 62,  127 => 56,  125 => 45,  124 => 44,  119 => 41,  117 => 35,  116 => 34,  103 => 30,  86 => 29,  80 => 28,  75 => 25,  69 => 23,  67 => 22,  63 => 21,  59 => 20,  50 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'mailing',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =  url('admin_email_update', { id: email.id }) %}*/
/*     {{ form_start(form, { action: formAction}) }}*/
/*         <fieldset>*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.mailing.section.basic.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.mailing.section.basic.description'|trans }}</p>*/
/*                         {% if elcodi_languages|length > 1 %}*/
/*                             <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading" {% endif %}>*/
/*                         {% for language in elcodi_languages %}*/
/*                         <section id="tab-{{ language }}" data-fc-name="{% if loop.first %}<i class='icon-star'></i> {% endif %}{{ language|capitalize }}">*/
/*                             <div class="box">*/
/*                                 <ol>*/
/*                                     <li>*/
/*                                         {{*/
/*                                             form_row(form.title["#{language}_title"], {*/
/*                                                 label: 'admin.mailing.field.title.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.mailing.field.title.placeholder',*/
/*                                                 }*/
/*                                             })*/
/*                                         }}*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         {{*/
/*                                             form_row(form.content["#{language}_content"], {*/
/*                                                 label: 'admin.mailing.field.content.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.mailing.field.content.placeholder',*/
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
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </fieldset>*/
/* */
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_email_list') }}">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
