<?php

/* AdminProductBundle:Variant:editComponent.html.twig */
class __TwigTemplate_8f8e0531e98bb121f41d8c8190bbf6c0d36c59decdaac47387a6565997f34b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminProductBundle:Variant:editComponent.html.twig", 1);
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
        $__internal_98e0a3bdabd4c92b98e5fd8dac0bcc88307aeaf7e80eef1eda93a59b4a7fa7e1 = $this->env->getExtension("native_profiler");
        $__internal_98e0a3bdabd4c92b98e5fd8dac0bcc88307aeaf7e80eef1eda93a59b4a7fa7e1->enter($__internal_98e0a3bdabd4c92b98e5fd8dac0bcc88307aeaf7e80eef1eda93a59b4a7fa7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Variant:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "variant");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e0a3bdabd4c92b98e5fd8dac0bcc88307aeaf7e80eef1eda93a59b4a7fa7e1->leave($__internal_98e0a3bdabd4c92b98e5fd8dac0bcc88307aeaf7e80eef1eda93a59b4a7fa7e1_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_b070e31e133ee51f63c095625eafe56c957654dc5637cc082f74c244dbc8595d = $this->env->getExtension("native_profiler");
        $__internal_b070e31e133ee51f63c095625eafe56c957654dc5637cc082f74c244dbc8595d->enter($__internal_b070e31e133ee51f63c095625eafe56c957654dc5637cc082f74c244dbc8595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <header class=\"section-header\">
        ";
        // line 15
        $context["title"] = $this->env->getExtension('translator')->trans("admin.product.plural");
        // line 16
        echo "
        ";
        // line 17
        if ($this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "id", array())) {
            // line 18
            echo "            ";
            ob_start();
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 20
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
            $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "            ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.variant.edit", array("%name%" => trim((isset($context["name"]) ? $context["name"] : null))));
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "            ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.variant.new");
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminProductBundle:Variant:editComponent.html.twig", 28)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 30
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_product_list")), 1 => array("name" => $this->getAttribute(        // line 31
(isset($context["product"]) ? $context["product"] : null), "name", array()), "url" => $this->env->getExtension('routing')->getUrl("admin_product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())))), 2 => array("name" =>         // line 32
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 35
        echo "    </header>

    <div class=\"papa-air\">
    ";
        // line 38
        $this->loadTemplate("AdminCoreBundle::Common/flashMessages.html.twig", "AdminProductBundle:Variant:editComponent.html.twig", 38)->display($context);
        // line 39
        echo "
    ";
        // line 40
        $context["formAction"] = (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_product_variant_update", array("productId" => $this->getAttribute(        // line 42
(isset($context["product"]) ? $context["product"] : null), "id", array()), "id" => $this->getAttribute(        // line 43
(isset($context["variant"]) ? $context["variant"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_product_variant_save", array("productId" => $this->getAttribute(        // line 46
(isset($context["product"]) ? $context["product"] : null), "id", array())))));
        // line 49
        echo "
    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.section.attributes.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.section.attributes.description"), "html", null, true);
        echo "</p>
                        <p>
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getUrl("admin_attribute_new");
        echo "\" id=\"new-attribute\" data-fc-modules=\"window-content\" class=\"button\">
                                <i class=\"icon-plus\"></i>
                                ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.new"), "html", null, true);
        echo "
                            </a>
                        </p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box\">
                        <ol>
                            <li data-fc-modules=\"multiple-select\">
                                <i class=\"icon-circle-o-notch icon-spin fz-xl\"></i>
                                <div class=\"d-n\">
                                    ";
        // line 71
        echo         // line 72
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "options", array()), 'row', array("label" => "admin.variant.field.options.title"));
        // line 75
        echo "
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.section.pricing.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.section.pricing.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box pb-n\">
                        <ol class=\"grid\">
                            <li class=\"col-1-2\">
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("label" => "admin.variant.field.price.title"));
        echo "
                            </li>
                            <li class=\"col-1-2\">
                                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reducedPrice", array()), 'row', array("label" => "admin.variant.field.reduced_price.title"));
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class=\"grid";
        // line 103
        if ( !(isset($context["useStock"]) ? $context["useStock"] : null)) {
            echo " d-n";
        }
        echo "\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.stock.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.stock.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box pb-n\">
                        <ol>
                            <li>
                                ";
        // line 114
        echo         // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'row', array("label" => "admin.product.field.stock.title"));
        // line 118
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
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.sku.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.sku.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box\">
                        ";
        // line 133
        echo         // line 134
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array()), 'row', array("label" => "admin.product.field.sku.title"));
        // line 137
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 141
        $this->loadTemplate("@AdminMedia/Module/_images-form-field.html.twig", "AdminProductBundle:Variant:editComponent.html.twig", 141)->display(array_merge($context, array("images" => $this->getAttribute(        // line 142
(isset($context["variant"]) ? $context["variant"] : null), "images", array()))));
        // line 144
        echo "
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none mb-n pb-m\">
                        <h3 class=\"fw-n\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.section.visibility.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.section.visibility.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box mb-n pb-n\">
                        <ol>
                            <li>
                                ";
        // line 156
        echo         // line 157
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.variant.field.enabled.title"));
        // line 160
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
                <button type=\"submit\" class=\"button-primary button-fat pv-s mr-l\" id=\"submit-variant\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <script type=\"text/javascript\">
                    if ( window!=window.top ) {
                        var oParent = window.parent,
                            oModal = oParent.TinyCore.Module.instantiate('modal');
                    }
                </script>
                <a href=\"javascript:oModal.close();\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 183
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

";
        
        $__internal_b070e31e133ee51f63c095625eafe56c957654dc5637cc082f74c244dbc8595d->leave($__internal_b070e31e133ee51f63c095625eafe56c957654dc5637cc082f74c244dbc8595d_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Variant:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 183,  303 => 180,  293 => 173,  278 => 160,  276 => 157,  275 => 156,  265 => 149,  261 => 148,  255 => 144,  253 => 142,  252 => 141,  246 => 137,  244 => 134,  243 => 133,  235 => 128,  231 => 127,  220 => 118,  218 => 115,  217 => 114,  207 => 107,  203 => 106,  195 => 103,  185 => 96,  179 => 93,  169 => 86,  165 => 85,  153 => 75,  151 => 72,  150 => 71,  136 => 60,  131 => 58,  126 => 56,  122 => 55,  114 => 50,  111 => 49,  109 => 46,  108 => 43,  107 => 42,  106 => 40,  103 => 39,  101 => 38,  96 => 35,  94 => 32,  93 => 31,  92 => 30,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  64 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  49 => 15,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'variant'*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <header class="section-header">*/
/*         {% set title = 'admin.product.plural'|trans %}*/
/* */
/*         {% if variant.id %}*/
/*             {% set name %}*/
/*                 {% for option in variant.options %}*/
/*                     {{ option.value }}*/
/*                 {% endfor %}*/
/*             {% endset %}*/
/*             {% set header = 'admin.variant.edit'|trans({ '%name%': name|trim }) %}*/
/*         {% else %}*/
/*             {% set header = 'admin.variant.new'|trans %}*/
/*         {% endif %}*/
/* */
/*         {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*             breadcrumb: [*/
/*                 { name: title, url: url('admin_product_list') },*/
/*                 { name: product.name, url: url('admin_product_edit', { id: product.id }) },*/
/*                 { name: header, active: true },*/
/*             ],*/
/*         } %}*/
/*     </header>*/
/* */
/*     <div class="papa-air">*/
/*     {% include 'AdminCoreBundle::Common/flashMessages.html.twig' %}*/
/* */
/*     {% set formAction = variant.id*/
/*         ? url('admin_product_variant_update', {*/
/*             productId: product.id,*/
/*             id: variant.id,*/
/*         })*/
/*         : url('admin_product_variant_save', {*/
/*             productId: product.id,*/
/*         })*/
/*     %}*/
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*         <fieldset>*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.variant.section.attributes.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.variant.section.attributes.description'|trans }}</p>*/
/*                         <p>*/
/*                             <a href="{{ url('admin_attribute_new') }}" id="new-attribute" data-fc-modules="window-content" class="button">*/
/*                                 <i class="icon-plus"></i>*/
/*                                 {{ 'admin.attribute.new'|trans }}*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box">*/
/*                         <ol>*/
/*                             <li data-fc-modules="multiple-select">*/
/*                                 <i class="icon-circle-o-notch icon-spin fz-xl"></i>*/
/*                                 <div class="d-n">*/
/*                                     {{*/
/*                                         form_row(form.options, {*/
/*                                             label: 'admin.variant.field.options.title',*/
/*                                         })*/
/*                                     }}*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.variant.section.pricing.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.variant.section.pricing.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box pb-n">*/
/*                         <ol class="grid">*/
/*                             <li class="col-1-2">*/
/*                                 {{ form_row(form.price, { label: 'admin.variant.field.price.title' }) }}*/
/*                             </li>*/
/*                             <li class="col-1-2">*/
/*                                 {{ form_row(form.reducedPrice, { label: 'admin.variant.field.reduced_price.title' }) }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="grid{% if not useStock %} d-n{% endif %}">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.product.section.stock.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.product.section.stock.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box pb-n">*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {{*/
/*                                     form_row(form.stock, {*/
/*                                         label: 'admin.product.field.stock.title',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.product.section.sku.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.product.section.sku.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box">*/
/*                         {{*/
/*                         form_row(form.sku, {*/
/*                             label: 'admin.product.field.sku.title',*/
/*                         })*/
/*                         }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% include '@AdminMedia/Module/_images-form-field.html.twig' with {*/
/*                 images: variant.images,*/
/*             } %}*/
/* */
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none mb-n pb-m">*/
/*                         <h3 class="fw-n">{{ 'admin.variant.section.visibility.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.variant.section.visibility.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box mb-n pb-n">*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {{*/
/*                                     form_row(form.enabled, {*/
/*                                         label: 'admin.variant.field.enabled.title'*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
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
/*                 <button type="submit" class="button-primary button-fat pv-s mr-l" id="submit-variant">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <script type="text/javascript">*/
/*                     if ( window!=window.top ) {*/
/*                         var oParent = window.parent,*/
/*                             oModal = oParent.TinyCore.Module.instantiate('modal');*/
/*                     }*/
/*                 </script>*/
/*                 <a href="javascript:oModal.close();">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
