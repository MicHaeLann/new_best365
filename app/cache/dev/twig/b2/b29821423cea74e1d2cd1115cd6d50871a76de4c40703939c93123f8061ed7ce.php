<?php

/* AdminAttributeBundle:Attribute:editComponent.html.twig */
class __TwigTemplate_bf89556bb5685ede2538bb2ed5e10c3847fa92b448d282a19f2974ddf35ad3d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminAttributeBundle:Attribute:editComponent.html.twig", 1);
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
        $__internal_1fef5d72b22f434abc0144df466729f3e0f588799a66f788ae2118dd5e1229d4 = $this->env->getExtension("native_profiler");
        $__internal_1fef5d72b22f434abc0144df466729f3e0f588799a66f788ae2118dd5e1229d4->enter($__internal_1fef5d72b22f434abc0144df466729f3e0f588799a66f788ae2118dd5e1229d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAttributeBundle:Attribute:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "attribute");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fef5d72b22f434abc0144df466729f3e0f588799a66f788ae2118dd5e1229d4->leave($__internal_1fef5d72b22f434abc0144df466729f3e0f588799a66f788ae2118dd5e1229d4_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_98c0357a923d30bec4c0db1c287c834e6300121db82dbaefb9e8748d83ac54a8 = $this->env->getExtension("native_profiler");
        $__internal_98c0357a923d30bec4c0db1c287c834e6300121db82dbaefb9e8748d83ac54a8->enter($__internal_98c0357a923d30bec4c0db1c287c834e6300121db82dbaefb9e8748d83ac54a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["attribute"]) ? $context["attribute"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_attribute_update", array("id" => $this->getAttribute(        // line 16
(isset($context["attribute"]) ? $context["attribute"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_attribute_save")));
        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset class=\"mb-n\">
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.section.basic.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.section.basic.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box\">
                        <ol>
                            <li>
                                ";
        // line 33
        echo         // line 34
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row', array("label" => "admin.attribute.field.name.title", "attr" => array("placeholder" => "admin.attribute.field.name.placeholder")));
        // line 40
        echo "
                            </li>
                            <li>
                                <label for=\"values\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.field.name.values"), "html", null, true);
        echo "</label>
                                <input id=\"values\" required=\"required\" name=\"values\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["attributeValues"]) ? $context["attributeValues"] : null), "html", null, true);
        echo "\"
                                       data-fc-modules=\"tags\" data-fc-values=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["allValues"]) ? $context["allValues"] : null), "html", null, true);
        echo "\"
                                       placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.tags.placeholder.comma_separated"), "html", null, true);
        echo "\"
                                >
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none mb-n pb-m\">
                        <h3 class=\"fw-n\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.section.visibility.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.section.visibility.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box mb-n pb-n\">
                        <ol class=\"grid pt-m\">
                            <li class=\"col-1-2\">
                                ";
        // line 65
        echo         // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.attribute.field.enabled.title"));
        // line 69
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("admin_attribute_list");
        echo "\" id=\"cancel-button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_98c0357a923d30bec4c0db1c287c834e6300121db82dbaefb9e8748d83ac54a8->leave($__internal_98c0357a923d30bec4c0db1c287c834e6300121db82dbaefb9e8748d83ac54a8_prof);

    }

    public function getTemplateName()
    {
        return "AdminAttributeBundle:Attribute:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 85,  146 => 82,  142 => 81,  128 => 69,  126 => 66,  125 => 65,  115 => 58,  111 => 57,  97 => 46,  93 => 45,  89 => 44,  85 => 43,  80 => 40,  78 => 34,  77 => 33,  67 => 26,  63 => 25,  55 => 20,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'attribute',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         attribute.id*/
/*             ? url('admin_attribute_update', { id: attribute.id })*/
/*             : url('admin_attribute_save')*/
/*      %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*         <fieldset class="mb-n">*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.attribute.section.basic.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.attribute.section.basic.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box">*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {{*/
/*                                     form_row(form.name, {*/
/*                                         label: 'admin.attribute.field.name.title',*/
/*                                         attr: {*/
/*                                             placeholder: 'admin.attribute.field.name.placeholder',*/
/*                                         }*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                             <li>*/
/*                                 <label for="values">{{ 'admin.attribute.field.name.values'|trans }}</label>*/
/*                                 <input id="values" required="required" name="values" value="{{ attributeValues }}"*/
/*                                        data-fc-modules="tags" data-fc-values="{{ allValues }}"*/
/*                                        placeholder="{{ 'ui.tags.placeholder.comma_separated'|trans }}"*/
/*                                 >*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none mb-n pb-m">*/
/*                         <h3 class="fw-n">{{ 'admin.attribute.section.visibility.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.attribute.section.visibility.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box mb-n pb-n">*/
/*                         <ol class="grid pt-m">*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.enabled, {*/
/*                                         label: 'admin.attribute.field.enabled.title',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </fieldset>*/
/*         <div class="grid fixed-bottom animated fade-in-up">*/
/*             <div class="col-1-3">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-2-3">*/
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_attribute_list') }}" id="cancel-button">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
