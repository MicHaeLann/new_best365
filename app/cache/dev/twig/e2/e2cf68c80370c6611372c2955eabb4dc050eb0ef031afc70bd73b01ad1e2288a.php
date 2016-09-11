<?php

/* AdminStoreBundle:Store:address.html.twig */
class __TwigTemplate_347553d6084f30341dd1216944ce4b3fcfcfabb70487baf3681a4725c61c75d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminStoreBundle:Store:address.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a11a0e6d7c1d9c60b40e1d35e55062007673c2be51ca10078a765cfdf68af11 = $this->env->getExtension("native_profiler");
        $__internal_6a11a0e6d7c1d9c60b40e1d35e55062007673c2be51ca10078a765cfdf68af11->enter($__internal_6a11a0e6d7c1d9c60b40e1d35e55062007673c2be51ca10078a765cfdf68af11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminStoreBundle:Store:address.html.twig"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 7
        $context["elcodi_context"] = array("entity_type" => "store");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a11a0e6d7c1d9c60b40e1d35e55062007673c2be51ca10078a765cfdf68af11->leave($__internal_6a11a0e6d7c1d9c60b40e1d35e55062007673c2be51ca10078a765cfdf68af11_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_df394498d2b930b4ad75fdc12db2c2a2310b5beb43f280d850262cbff8322ecb = $this->env->getExtension("native_profiler");
        $__internal_df394498d2b930b4ad75fdc12db2c2a2310b5beb43f280d850262cbff8322ecb->enter($__internal_df394498d2b930b4ad75fdc12db2c2a2310b5beb43f280d850262cbff8322ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminStoreBundle:Store:address.html.twig", 14)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.plural"), "active" => false), 1 => array("name" => $this->env->getExtension('translator')->trans("admin.settings.section.address.title"), "active" => true)))));
        // line 20
        echo "
";
        
        $__internal_df394498d2b930b4ad75fdc12db2c2a2310b5beb43f280d850262cbff8322ecb->leave($__internal_df394498d2b930b4ad75fdc12db2c2a2310b5beb43f280d850262cbff8322ecb_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9591c2fbc083f510aa28d12c5bf7cb79ede568d2097c66ca4212e909a116343 = $this->env->getExtension("native_profiler");
        $__internal_e9591c2fbc083f510aa28d12c5bf7cb79ede568d2097c66ca4212e909a116343->enter($__internal_e9591c2fbc083f510aa28d12c5bf7cb79ede568d2097c66ca4212e909a116343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    ";
        // line 26
        if ((((null === $this->getAttribute($this->getAttribute(        // line 27
(isset($context["store"]) ? $context["store"] : null), "address", array()), "city", array())) || twig_test_empty($this->getAttribute($this->getAttribute(        // line 28
(isset($context["store"]) ? $context["store"] : null), "address", array()), "postalcode", array()))) || twig_test_empty($this->getAttribute($this->getAttribute(        // line 29
(isset($context["store"]) ? $context["store"] : null), "address", array()), "address", array())))) {
            // line 31
            echo "        <div class=\"msg-warning\">
            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.address.incomplete"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 35
        echo "
    <div class=\"msg-info\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.address.edit.description"), "html", null, true);
        echo "
    </div>

    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "name", array()), 'row', array("value" => "Store address"));
        echo "
    <fieldset>
        <div class=\"box\">
            <ol class=\"grid\">
                <li>
                    ";
        // line 46
        echo         // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isCompany", array()), 'widget');
        // line 48
        echo "
                </li>
            </ol>
            <ol class=\"grid\">
                <li class=\"col-1-5\">
                    <div class=\"pr-l\">
                        ";
        // line 54
        echo         // line 55
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cif", array()), 'row', array("label" => "admin.address.field.cif.title", "attr" => array("placeholder" => "admin.address.field.cif.placeholder")));
        // line 61
        echo "
                    </div>
                </li>
                <li class=\"col-1-5\">
                    <div class=\"pr-l\">
                        ";
        // line 66
        echo         // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "recipientName", array()), 'row', array("label" => "admin.address.field.recipient_name.title", "attr" => array("placeholder" => "admin.address.field.recipient_name.placeholder")));
        // line 73
        echo "
                    </div>
                </li>
                <li class=\"col-3-5\">
                    ";
        // line 77
        echo         // line 78
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "recipientSurname", array()), 'row', array("label" => "admin.address.field.recipient_surname.title", "attr" => array("placeholder" => "admin.address.field.recipient_surname.placeholder")));
        // line 84
        echo "
                </li>
            </ol>
            <ol>
                <li>
                    ";
        // line 89
        echo         // line 90
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "address", array()), 'row', array("label" => "admin.address.field.address.title", "attr" => array("placeholder" => "admin.address.field.address.placeholder")));
        // line 96
        echo "
                </li>
            </ol>
            <ol class=\"grid\">
                <li class=\"col-2-3\">
                    <div class=\"pr-l\">
                        ";
        // line 102
        echo         // line 103
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addressMore", array()), 'row', array("label" => "admin.address.field.address_more.title", "attr" => array("placeholder" => "admin.address.field.address_more.placeholder")));
        // line 109
        echo "
                    </div>
                </li>
                <li class=\"col-1-3\">
                    ";
        // line 113
        echo         // line 114
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "postalcode", array()), 'row', array("label" => "admin.address.field.postalcode.title", "attr" => array("placeholder" => "admin.address.field.postalcode.placeholder")));
        // line 120
        echo "
                </li>
            </ol>
            <ol>
                <li class=\"pb-n\">
                    ";
        // line 125
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("admin_location_selectors", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "address", array()), "city", array()))), array());
        // line 126
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "city", array()), 'row', array("attr" => array("class" => "address-city")));
        // line 130
        echo "
                </li>
            </ol>
            <ol class=\"grid\">
                <li class=\"col-1-3 \">
                    <div class=\"pr-l\">
                        ";
        // line 136
        echo         // line 137
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "phone", array()), 'row', array("label" => "admin.address.field.phone.title", "attr" => array("placeholder" => "admin.address.field.phone.placeholder")));
        // line 143
        echo "
                    </div>
                </li>
                <li class=\"col-1-3\">
                    <div class=\"pr-l\">
                        ";
        // line 148
        echo         // line 149
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "mobile", array()), 'row', array("label" => "admin.address.field.mobile.title", "attr" => array("placeholder" => "admin.address.field.mobile.placeholder")));
        // line 155
        echo "
                    </div>
                </li>
                <li class=\"col-1-3\">
                    ";
        // line 159
        echo         // line 160
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => "admin.address.field.email.title", "attr" => array("placeholder" => "admin.address.field.email.placeholder")));
        // line 166
        echo "
                </li>
            </ol>
            <ol>
                <li>
                    ";
        // line 171
        echo         // line 172
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "comments", array()), 'row', array("label" => "admin.address.field.comments.title", "attr" => array("placeholder" => "admin.address.field.comments.placeholder")));
        // line 178
        echo "
                </li>
            </ol>
        </div>
        <div class=\"grid fixed-bottom animated fade-in-up ta-c\">
            ";
        // line 183
        echo         // line 184
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "send", array()), 'widget', array("label" => "admin.address.field.save", "attr" => array("class" => "button-primary button-fat pv-s mr-l")));
        // line 190
        echo "
        </div>
    </fieldset>
    ";
        // line 193
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    ";
        // line 195
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fde1123_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fde1123_0") : $this->env->getExtension('asset')->getAssetUrl("js/fde1123_LocationSelectors_1.js");
            // line 196
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fde1123"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fde1123") : $this->env->getExtension('asset')->getAssetUrl("js/fde1123.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 198
        echo "
";
        
        $__internal_e9591c2fbc083f510aa28d12c5bf7cb79ede568d2097c66ca4212e909a116343->leave($__internal_e9591c2fbc083f510aa28d12c5bf7cb79ede568d2097c66ca4212e909a116343_prof);

    }

    public function getTemplateName()
    {
        return "AdminStoreBundle:Store:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 198,  243 => 196,  239 => 195,  234 => 193,  229 => 190,  227 => 184,  226 => 183,  219 => 178,  217 => 172,  216 => 171,  209 => 166,  207 => 160,  206 => 159,  200 => 155,  198 => 149,  197 => 148,  190 => 143,  188 => 137,  187 => 136,  179 => 130,  176 => 126,  174 => 125,  167 => 120,  165 => 114,  164 => 113,  158 => 109,  156 => 103,  155 => 102,  147 => 96,  145 => 90,  144 => 89,  137 => 84,  135 => 78,  134 => 77,  128 => 73,  126 => 67,  125 => 66,  118 => 61,  116 => 55,  115 => 54,  107 => 48,  105 => 47,  104 => 46,  96 => 41,  92 => 40,  86 => 37,  82 => 35,  76 => 32,  73 => 31,  71 => 29,  70 => 28,  69 => 27,  68 => 26,  65 => 25,  59 => 24,  51 => 20,  49 => 14,  46 => 13,  40 => 12,  33 => 1,  31 => 7,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'store',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: 'admin.settings.plural'|trans, active: false },*/
/*             { name: 'admin.settings.section.address.title'|trans, active: true },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if*/
/*         store.address.city is null or*/
/*         store.address.postalcode is empty or*/
/*         store.address.address is empty*/
/*     %}*/
/*         <div class="msg-warning">*/
/*             {{ 'admin.address.incomplete'|trans }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="msg-info">*/
/*         {{ 'admin.address.edit.description'|trans }}*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_row(form.address.name, { value: 'Store address' }) }}*/
/*     <fieldset>*/
/*         <div class="box">*/
/*             <ol class="grid">*/
/*                 <li>*/
/*                     {{*/
/*                     form_widget(form.isCompany)*/
/*                     }}*/
/*                 </li>*/
/*             </ol>*/
/*             <ol class="grid">*/
/*                 <li class="col-1-5">*/
/*                     <div class="pr-l">*/
/*                         {{*/
/*                         form_row(form.cif, {*/
/*                             label: 'admin.address.field.cif.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.cif.placeholder'*/
/*                             }*/
/*                         })*/
/*                         }}*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="col-1-5">*/
/*                     <div class="pr-l">*/
/*                         {{*/
/*                         form_row(form.address.recipientName, {*/
/*                             label: 'admin.address.field.recipient_name.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.recipient_name.placeholder',*/
/*                             }*/
/*                         })*/
/*                         }}*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="col-3-5">*/
/*                     {{*/
/*                     form_row(form.address.recipientSurname, {*/
/*                         label: 'admin.address.field.recipient_surname.title',*/
/*                         attr: {*/
/*                             placeholder: 'admin.address.field.recipient_surname.placeholder',*/
/*                         }*/
/*                     })*/
/*                     }}*/
/*                 </li>*/
/*             </ol>*/
/*             <ol>*/
/*                 <li>*/
/*                     {{*/
/*                         form_row(form.address.address, {*/
/*                             label: 'admin.address.field.address.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.address.placeholder',*/
/*                             }*/
/*                         })*/
/*                     }}*/
/*                 </li>*/
/*             </ol>*/
/*             <ol class="grid">*/
/*                 <li class="col-2-3">*/
/*                     <div class="pr-l">*/
/*                         {{*/
/*                         form_row(form.address.addressMore, {*/
/*                             label: 'admin.address.field.address_more.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.address_more.placeholder',*/
/*                             }*/
/*                         })*/
/*                         }}*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="col-1-3">*/
/*                     {{*/
/*                         form_row(form.address.postalcode, {*/
/*                             label: 'admin.address.field.postalcode.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.postalcode.placeholder',*/
/*                             }*/
/*                         })*/
/*                     }}*/
/*                 </li>*/
/*             </ol>*/
/*             <ol>*/
/*                 <li class="pb-n">*/
/*                     {% render url('admin_location_selectors', { locationId: store.address.city }) %}*/
/*                     {{ form_row(form.address.city, {*/
/*                         attr: {*/
/*                             class: "address-city"*/
/*                         }*/
/*                     }) }}*/
/*                 </li>*/
/*             </ol>*/
/*             <ol class="grid">*/
/*                 <li class="col-1-3 ">*/
/*                     <div class="pr-l">*/
/*                         {{*/
/*                         form_row(form.address.phone, {*/
/*                             label: 'admin.address.field.phone.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.phone.placeholder',*/
/*                             }*/
/*                         })*/
/*                         }}*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="col-1-3">*/
/*                     <div class="pr-l">*/
/*                         {{*/
/*                             form_row(form.address.mobile, {*/
/*                                 label: 'admin.address.field.mobile.title',*/
/*                                 attr: {*/
/*                                     placeholder: 'admin.address.field.mobile.placeholder',*/
/*                                 }*/
/*                             })*/
/*                         }}*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="col-1-3">*/
/*                     {{*/
/*                         form_row(form.email, {*/
/*                             label: 'admin.address.field.email.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.email.placeholder',*/
/*                             }*/
/*                         })*/
/*                     }}*/
/*                 </li>*/
/*             </ol>*/
/*             <ol>*/
/*                 <li>*/
/*                     {{*/
/*                         form_row(form.address.comments, {*/
/*                             label: 'admin.address.field.comments.title',*/
/*                             attr: {*/
/*                                 placeholder: 'admin.address.field.comments.placeholder',*/
/*                             }*/
/*                         })*/
/*                     }}*/
/*                 </li>*/
/*             </ol>*/
/*         </div>*/
/*         <div class="grid fixed-bottom animated fade-in-up ta-c">*/
/*             {{*/
/*             form_widget(form.send, {*/
/*                 label: 'admin.address.field.save',*/
/*                 attr: {*/
/*                     class: 'button-primary button-fat pv-s mr-l',*/
/*                 }*/
/*             })*/
/*             }}*/
/*         </div>*/
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/*     {% javascripts '@AdminGeoBundle/Resources/public/js/LocationSelectors.js' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* {% endblock content %}*/
/* */
