<?php

/* AdminProductBundle:Product:editComponent.html.twig */
class __TwigTemplate_8c8d81c21910ce8acacd3c5e244151dc215e51d18200463414fc867ee1d4749e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminProductBundle:Product:editComponent.html.twig", 1);
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
        $__internal_440b2a4f613fe69a5657250e20bdd94b754cd736937754345e8b0c6df7c81f3d = $this->env->getExtension("native_profiler");
        $__internal_440b2a4f613fe69a5657250e20bdd94b754cd736937754345e8b0c6df7c81f3d->enter($__internal_440b2a4f613fe69a5657250e20bdd94b754cd736937754345e8b0c6df7c81f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Product:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "product");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440b2a4f613fe69a5657250e20bdd94b754cd736937754345e8b0c6df7c81f3d->leave($__internal_440b2a4f613fe69a5657250e20bdd94b754cd736937754345e8b0c6df7c81f3d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b479ee8a1bfa98acf5230e413fceb8289657bef44195d8d7e94612c48bba600 = $this->env->getExtension("native_profiler");
        $__internal_4b479ee8a1bfa98acf5230e413fceb8289657bef44195d8d7e94612c48bba600->enter($__internal_4b479ee8a1bfa98acf5230e413fceb8289657bef44195d8d7e94612c48bba600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["product"]) ? $context["product"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_product_update", array("id" => $this->getAttribute(        // line 16
(isset($context["product"]) ? $context["product"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_product_save")));
        // line 19
        echo "

    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset>
            ";
        // line 23
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("admin.product_top", array("product" =>         // line 24
(isset($context["product"]) ? $context["product"] : null))));
        // line 25
        echo "
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.basic.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.basic.description"), "html", null, true);
        echo "</p>
                        ";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 32
            echo "                            <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 34
        echo "                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\" ";
        }
        echo ">
                        ";
        // line 38
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
            // line 39
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
            // line 43
            echo             // line 44
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), 'row', array("label" => "admin.product.field.name.title", "attr" => array("placeholder" => "admin.product.field.name.placeholder")));
            // line 50
            echo "
                                        <div class=\"pt-m\">
                                            <p class=\"ta-r mb-n\"><a data-fc-modules=\"toggle\" href=\"#slug-";
            // line 52
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"fz-default\"><i class=\"icon-plus-circle\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.field.slug.customize"), "html", null, true);
            echo "</a></p>
                                            <div id=\"slug-";
            // line 53
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" class=\"hidden mt-m\">
                                            ";
            // line 54
            echo             // line 55
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), ($context["language"] . "_slug"), array(), "array"), 'row', array("label" => false, "attr" => array("placeholder" => "admin.product.field.slug.placeholder", "data-fc-modules" => "slug", "data-fc-parent" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 60
(isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), "vars", array()), "id", array()), "pattern" => "^[a-z0-9-]+\$")));
            // line 64
            echo "
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        ";
            // line 69
            echo             // line 70
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), ($context["language"] . "_description"), array(), "array"), 'row', array("label" => "admin.product.field.description.title", "attr" => array("placeholder" => "admin.product.field.description.placeholder", "data-fc-modules" => "wysiwyg", "data-fc-fullscreen" => "false", "data-fc-text-html" => $this->env->getExtension('translator')->trans("admin.UI.show_code"), "data-fc-text-visual" => $this->env->getExtension('translator')->trans("admin.UI.show_visual"), "data-fc-text-help" => $this->env->getExtension('translator')->trans("ui.editor.help"))));
            // line 81
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
        // line 87
        echo "                        </div>
                </div>
            </div>
            <div class=\"grid";
        // line 90
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hasVariants", array())) {
            echo " d-n";
        }
        echo "\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.pricing.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.pricing.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box pb-n\">
                        <ol class=\"grid\">
                            <li class=\"col-1-2\">
                                ";
        // line 101
        echo         // line 102
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("label" => "admin.product.field.price.title"));
        // line 105
        echo "
                            </li>
                            <li class=\"col-1-2\">
                                ";
        // line 108
        echo         // line 109
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reducedPrice", array()), 'row', array("label" => "admin.product.field.reduced_price.title"));
        // line 112
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class=\"grid";
        // line 118
        if ( !(isset($context["useStock"]) ? $context["useStock"] : null)) {
            echo " d-n";
        }
        echo "\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.stock.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.stock.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box pb-n\">
                        <ol>
                            <li>
                                ";
        // line 129
        echo         // line 130
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'row', array("label" => "admin.product.field.stock.title", "attr" => array("class" => "w-10")));
        // line 136
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            ";
        // line 143
        $this->loadTemplate("@AdminMedia/Module/_images-form-field.html.twig", "AdminProductBundle:Product:editComponent.html.twig", 143)->display(array_merge($context, array("images" => $this->getAttribute(        // line 144
(isset($context["product"]) ? $context["product"] : null), "getSortedImages", array()), "redirect_path" => (($this->getAttribute(        // line 145
(isset($context["product"]) ? $context["product"] : null), "id", array())) ? ($this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute(        // line 146
(isset($context["product"]) ? $context["product"] : null), "id", array())))) : ($this->env->getExtension('routing')->getPath("admin_product_new"))))));
        // line 149
        echo "            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.categorization.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.categorization.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box\">
                        <ol class=\"grid\">
                            <li class=\"col-1-2 pb-n\">
                                <div class=\"pr-l\">
                                    ";
        // line 161
        echo         // line 162
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "principalCategory", array()), 'row', array("label" => "admin.product.field.main_category.title", "label_help" => $this->env->getExtension('translator')->trans("admin.product.field.main_category.placeholder")));
        // line 166
        echo "
                                    <p class=\"pt-s fz-default mb-n ta-r\">
                                        <a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getUrl("admin_category_new");
        echo "\" data-fc-modules=\"window-content\">
                                            <i class=\"icon-plus\"></i>
                                            ";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.new"), "html", null, true);
        echo "
                                        </a>
                                    </p>
                                </div>
                            </li>
                            <li class=\"col-1-2 pb-n\">
                                ";
        // line 176
        echo         // line 177
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "manufacturer", array()), 'row', array("label" => "admin.product.field.manufacturer.title", "label_help" => $this->env->getExtension('translator')->trans("admin.product.field.manufacturer.placeholder")));
        // line 181
        echo "
                                <p class=\"pt-s fz-default mb-n ta-r\">
                                    <a href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getUrl("admin_manufacturer_new");
        echo "\" data-fc-modules=\"window-content\">
                                        <i class=\"icon-plus\"></i>
                                        ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.manufacturer.new"), "html", null, true);
        echo "
                                    </a>
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class=\"ph-n pt-m mb-n\">
                <div class=\"box-background pv-s mb-n\">
                    <a data-fc-modules=\"toggle\" href=\"#variants-edit\"><i class=\"icon-plus-circle\"></i> ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.variants.title"), "html", null, true);
        echo "</a>
                </div>
                <div id=\"variants-edit\" class=\"grid pt-s ";
        // line 197
        if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hasVariants", array(), "method")) {
            echo "hidden";
        }
        echo "\">
                    <div class=\"col-1-3\">
                        <div class=\"box-none\">
                            <h3 class=\"fw-n\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.variants.title"), "html", null, true);
        echo "</h3>
                            <p>";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.variants.description"), "html", null, true);
        echo "</p>
                            ";
        // line 202
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())) {
            // line 203
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_variant_new", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
            echo "\" data-fc-modules=\"window-content\" class=\"button\">
                                    ";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.new"), "html", null, true);
            echo "
                                </a>
                                <p>
                                    <a href=\"";
            // line 207
            echo $this->env->getExtension('routing')->getUrl("admin_attribute_new");
            echo "\" id=\"modal-attribute\" class=\"button\" data-fc-modules=\"window-content\">
                                        ";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.attribute.new"), "html", null, true);
            echo "
                                    </a>
                                </p>
                            ";
        }
        // line 212
        echo "                        </div>
                    </div>
                    <div class=\"col-2-3\" data-fc-modules=\"variants\">
                        <div class=\"box\" id=\"variants-list\">
                            ";
        // line 216
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array())) {
            // line 217
            echo "                                <input id=\"variants-url\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_variant_list_component", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
            echo "\" />
                                <input id=\"variants-message-ok\" type=\"hidden\" value=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.variant.saved"), "html", null, true);
            echo "\" />
                                ";
            // line 219
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_product_variant_list_component", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))));
            echo "
                            ";
        } else {
            // line 221
            echo "                                <div class=\"box-background pa-n\">
                                    <p class=\"msg-info ma-n\">";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.info.variants_before_saving"), "html", null, true);
            echo "</p>
                                </div>
                            ";
        }
        // line 225
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ph-n pt-m mb-n\">
                <div class=\"box-background pv-s mb-n\">
                    <a data-fc-modules=\"toggle\" href=\"#dimensions-edit\"><i class=\"icon-plus-circle\"></i> ";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.dimensions.title"), "html", null, true);
        echo "  ";
        if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hasVariants", array(), "method")) {
            echo "/ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.sku.title"), "html", null, true);
        }
        echo "</a>
                </div>
                <div id=\"dimensions-edit\" class=\"hidden\">
                    <div class=\"grid pt-s\">
                        <div class=\"col-1-3\">
                            <div class=\"box-none\">
                                <h3 class=\"fw-n\">";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.dimensions.title"), "html", null, true);
        echo "</h3>
                                <p>";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.dimensions.description"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"col-2-3\">
                            <div class=\"box pb-n\">
                                <ol class=\"grid\">
                                    <li class=\"col-1-3\">
                                        <div class=\"pr-l\">
                                            ";
        // line 246
        echo         // line 247
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "width", array()), 'row', array("label" => "admin.product.field.width.title"));
        // line 250
        echo "
                                        </div>
                                    </li>
                                    <li class=\"col-1-3\">
                                        <div class=\"pr-l\">
                                        ";
        // line 255
        echo         // line 256
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'row', array("label" => "admin.product.field.height.title"));
        // line 259
        echo "
                                        </div>
                                    </li>
                                    <li class=\"col-1-3\">
                                        <div class=\"pr-l\">
                                        ";
        // line 264
        echo         // line 265
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "depth", array()), 'row', array("label" => "admin.product.field.depth.title"));
        // line 268
        echo "
                                        </div>
                                    </li>
                                </ol>
                                <ol>
                                    <li class=\"col-1-3\">
                                        ";
        // line 274
        echo         // line 275
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weight", array()), 'row', array("label" => "admin.product.field.weight.title"));
        // line 278
        echo "
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class=\"grid ";
        // line 284
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hasVariants", array(), "method")) {
            echo "hidden";
        }
        echo "\">
                        <div class=\"col-1-3\">
                            <div class=\"box-none\">
                                <h3 class=\"fw-n\">";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.sku.title"), "html", null, true);
        echo "</h3>
                                <p>";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.sku.description"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"col-2-3\">
                            <div class=\"box\">
                                ";
        // line 293
        echo         // line 294
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array()), 'row', array("label" => "admin.product.field.sku.title"));
        // line 297
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ph-n pt-m mb-l\">
                <div class=\"box-background pv-s mb-n\">
                    <a data-fc-modules=\"toggle\" href=\"#metadata-info\"><i class=\"icon-plus-circle\"></i> ";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.customize"), "html", null, true);
        echo "</a>
                </div>
                <div id=\"metadata-info\" class=\"grid pt-s hidden\">
                    <div class=\"col-1-3\">
                        <div class=\"box-none\">
                            <h3 class=\"fw-n\">";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.title"), "html", null, true);
        echo "</h3>
                            <p>";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.description"), "html", null, true);
        echo "</p>
                            ";
        // line 312
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 313
            echo "                                <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 315
        echo "                        </div>
                    </div>
                    <div class=\"col-2-3\">
                        <div ";
        // line 318
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\"";
        }
        echo ">
                            ";
        // line 319
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
            // line 320
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
            // line 324
            echo             // line 325
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), ($context["language"] . "_metaTitle"), array(), "array"), 'row', array("label" => "admin.metadata.field.metatitle.title", "attr" => array("placeholder" => "admin.product.field.metatitle.placeholder")));
            // line 331
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 334
            echo             // line 335
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), ($context["language"] . "_metaDescription"), array(), "array"), 'row', array("label" => "admin.metadata.field.metadescription.title", "attr" => array("placeholder" => "admin.product.field.metadescription.placeholder")));
            // line 341
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 344
            echo             // line 345
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), ($context["language"] . "_metaKeywords"), array(), "array"), 'row', array("label" => "admin.metadata.field.metakeywords.title", "attr" => array("placeholder" => "admin.product.field.metakeywords.placeholder")));
            // line 351
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
        // line 357
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none mb-n pb-m\">
                        <h3 class=\"fw-n\">";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.visibility.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.product.section.visibility.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box mb-n pb-n\">
                        <ol class=\"grid pt-m\">
                            <li class=\"col-1-1\">
                                ";
        // line 372
        echo         // line 373
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "showInHome", array()), 'row', array("label" => "admin.product.field.in_home.title"));
        // line 376
        echo "
                                ";
        // line 377
        echo         // line 378
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.product.field.enabled.title"));
        // line 381
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
                <button id=\"submit-save\" type=\"submit\" class=\"button-primary button-fat pv-s mr-l\">";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 394
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 397
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_4b479ee8a1bfa98acf5230e413fceb8289657bef44195d8d7e94612c48bba600->leave($__internal_4b479ee8a1bfa98acf5230e413fceb8289657bef44195d8d7e94612c48bba600_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Product:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 397,  671 => 394,  667 => 393,  653 => 381,  651 => 378,  650 => 377,  647 => 376,  645 => 373,  644 => 372,  634 => 365,  630 => 364,  621 => 357,  602 => 351,  600 => 345,  599 => 344,  594 => 341,  592 => 335,  591 => 334,  586 => 331,  584 => 325,  583 => 324,  569 => 320,  552 => 319,  546 => 318,  541 => 315,  535 => 313,  533 => 312,  529 => 311,  525 => 310,  517 => 305,  507 => 297,  505 => 294,  504 => 293,  496 => 288,  492 => 287,  484 => 284,  476 => 278,  474 => 275,  473 => 274,  465 => 268,  463 => 265,  462 => 264,  455 => 259,  453 => 256,  452 => 255,  445 => 250,  443 => 247,  442 => 246,  431 => 238,  427 => 237,  413 => 231,  405 => 225,  399 => 222,  396 => 221,  391 => 219,  387 => 218,  382 => 217,  380 => 216,  374 => 212,  367 => 208,  363 => 207,  357 => 204,  352 => 203,  350 => 202,  346 => 201,  342 => 200,  334 => 197,  329 => 195,  316 => 185,  311 => 183,  307 => 181,  305 => 177,  304 => 176,  295 => 170,  290 => 168,  286 => 166,  284 => 162,  283 => 161,  272 => 153,  268 => 152,  263 => 149,  261 => 146,  260 => 145,  259 => 144,  258 => 143,  249 => 136,  247 => 130,  246 => 129,  236 => 122,  232 => 121,  224 => 118,  216 => 112,  214 => 109,  213 => 108,  208 => 105,  206 => 102,  205 => 101,  195 => 94,  191 => 93,  183 => 90,  178 => 87,  159 => 81,  157 => 70,  156 => 69,  149 => 64,  147 => 60,  146 => 55,  145 => 54,  141 => 53,  135 => 52,  131 => 50,  129 => 44,  128 => 43,  114 => 39,  97 => 38,  91 => 37,  86 => 34,  80 => 32,  78 => 31,  74 => 30,  70 => 29,  64 => 25,  62 => 24,  61 => 23,  56 => 21,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'product',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         product.id*/
/*             ? url('admin_product_update', { id: product.id })*/
/*             : url('admin_product_save')*/
/*      %}*/
/* */
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*         <fieldset>*/
/*             {{ elcodi_hook("admin.product_top", {*/
/*                 'product': product*/
/*             }) }}*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.product.section.basic.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.product.section.basic.description'|trans }}</p>*/
/*                         {% if elcodi_languages|length > 1 %}*/
/*                             <p><i class="icon-star"></i> = {{ 'ui.language.master_language'|trans }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div {% if elcodi_languages|length > 1 %}data-fc-modules="tabs" class="tabs-box loading" {% endif %}>*/
/*                         {% for language in elcodi_languages %}*/
/*                         <section id="tab-{{ language }}" data-fc-name="{% if loop.first %}{{ '<i class="icon-star"></i>'|e }} {% endif %}{{ language|capitalize }}">*/
/*                             <div class="box">*/
/*                                 <ol>*/
/*                                     <li>*/
/*                                         {{*/
/*                                             form_row(form.name["#{language}_name"], {*/
/*                                                 label: 'admin.product.field.name.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.product.field.name.placeholder',*/
/*                                                 }*/
/*                                             })*/
/*                                         }}*/
/*                                         <div class="pt-m">*/
/*                                             <p class="ta-r mb-n"><a data-fc-modules="toggle" href="#slug-{{ language }}" class="fz-default"><i class="icon-plus-circle"></i> {{ 'admin.product.field.slug.customize'|trans }}</a></p>*/
/*                                             <div id="slug-{{ language }}" class="hidden mt-m">*/
/*                                             {{*/
/*                                                 form_row(form.slug["#{language}_slug"], {*/
/*                                                     label: false,*/
/*                                                     attr: {*/
/*                                                         placeholder: 'admin.product.field.slug.placeholder',*/
/*                                                         'data-fc-modules': 'slug',*/
/*                                                         'data-fc-parent': form.name["#{language}_name"].vars.id,*/
/*                                                         'pattern' : '^[a-z0-9-]+$'*/
/*                                                     }*/
/*                                                 })*/
/*                                             }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         {{*/
/*                                             form_row(form.description["#{language}_description"], {*/
/*                                                 label: 'admin.product.field.description.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.product.field.description.placeholder',*/
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
/*             <div class="grid{% if product.hasVariants %} d-n{% endif %}">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.product.section.pricing.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.product.section.pricing.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box pb-n">*/
/*                         <ol class="grid">*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.price, {*/
/*                                         label: 'admin.product.field.price.title',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.reducedPrice, {*/
/*                                         label: 'admin.product.field.reduced_price.title',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
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
/*                                         attr: {*/
/*                                         class: 'w-10'*/
/*                                     }*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% include '@AdminMedia/Module/_images-form-field.html.twig' with {*/
/*                 images: product.getSortedImages,*/
/*                 redirect_path: product.id*/
/*                     ? path('admin_product_edit', { id: product.id })*/
/*                     : path('admin_product_new')*/
/*             } %}*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.product.section.categorization.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.product.section.categorization.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box">*/
/*                         <ol class="grid">*/
/*                             <li class="col-1-2 pb-n">*/
/*                                 <div class="pr-l">*/
/*                                     {{*/
/*                                     form_row(form.principalCategory, {*/
/*                                         label: 'admin.product.field.main_category.title',*/
/*                                         label_help: 'admin.product.field.main_category.placeholder'|trans,*/
/*                                     })*/
/*                                     }}*/
/*                                     <p class="pt-s fz-default mb-n ta-r">*/
/*                                         <a href="{{ url('admin_category_new') }}" data-fc-modules="window-content">*/
/*                                             <i class="icon-plus"></i>*/
/*                                             {{ 'admin.category.new'|trans }}*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="col-1-2 pb-n">*/
/*                                 {{*/
/*                                 form_row(form.manufacturer, {*/
/*                                     label: 'admin.product.field.manufacturer.title',*/
/*                                     label_help: 'admin.product.field.manufacturer.placeholder'|trans,*/
/*                                 })*/
/*                                 }}*/
/*                                 <p class="pt-s fz-default mb-n ta-r">*/
/*                                     <a href="{{ url('admin_manufacturer_new') }}" data-fc-modules="window-content">*/
/*                                         <i class="icon-plus"></i>*/
/*                                         {{ 'admin.manufacturer.new'|trans }}*/
/*                                     </a>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="ph-n pt-m mb-n">*/
/*                 <div class="box-background pv-s mb-n">*/
/*                     <a data-fc-modules="toggle" href="#variants-edit"><i class="icon-plus-circle"></i> {{ 'admin.product.section.variants.title'|trans }}</a>*/
/*                 </div>*/
/*                 <div id="variants-edit" class="grid pt-s {% if not product.hasVariants() %}hidden{% endif %}">*/
/*                     <div class="col-1-3">*/
/*                         <div class="box-none">*/
/*                             <h3 class="fw-n">{{ 'admin.product.section.variants.title'|trans }}</h3>*/
/*                             <p>{{ 'admin.product.section.variants.description'|trans }}</p>*/
/*                             {% if product.id %}*/
/*                                 <a href="{{ url('admin_product_variant_new', { productId: product.id }) }}" data-fc-modules="window-content" class="button">*/
/*                                     {{ 'admin.variant.new'|trans }}*/
/*                                 </a>*/
/*                                 <p>*/
/*                                     <a href="{{ url('admin_attribute_new') }}" id="modal-attribute" class="button" data-fc-modules="window-content">*/
/*                                         {{ 'admin.attribute.new'|trans }}*/
/*                                     </a>*/
/*                                 </p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-2-3" data-fc-modules="variants">*/
/*                         <div class="box" id="variants-list">*/
/*                             {% if product.id %}*/
/*                                 <input id="variants-url" type="hidden" value="{{ url('admin_product_variant_list_component', { productId: product.id }) }}" />*/
/*                                 <input id="variants-message-ok" type="hidden" value="{{ 'admin.variant.saved'|trans }}" />*/
/*                                 {{ render(url('admin_product_variant_list_component', { productId: product.id })) }}*/
/*                             {% else %}*/
/*                                 <div class="box-background pa-n">*/
/*                                     <p class="msg-info ma-n">{{ 'admin.product.info.variants_before_saving'|trans }}</p>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="ph-n pt-m mb-n">*/
/*                 <div class="box-background pv-s mb-n">*/
/*                     <a data-fc-modules="toggle" href="#dimensions-edit"><i class="icon-plus-circle"></i> {{ 'admin.product.section.dimensions.title'|trans }}  {% if not product.hasVariants() %}/ {{ 'admin.product.section.sku.title'|trans }}{% endif %}</a>*/
/*                 </div>*/
/*                 <div id="dimensions-edit" class="hidden">*/
/*                     <div class="grid pt-s">*/
/*                         <div class="col-1-3">*/
/*                             <div class="box-none">*/
/*                                 <h3 class="fw-n">{{ 'admin.product.section.dimensions.title'|trans }}</h3>*/
/*                                 <p>{{ 'admin.product.section.dimensions.description'|trans }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-2-3">*/
/*                             <div class="box pb-n">*/
/*                                 <ol class="grid">*/
/*                                     <li class="col-1-3">*/
/*                                         <div class="pr-l">*/
/*                                             {{*/
/*                                             form_row(form.width, {*/
/*                                                 label: 'admin.product.field.width.title',*/
/*                                             })*/
/*                                         }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="col-1-3">*/
/*                                         <div class="pr-l">*/
/*                                         {{*/
/*                                             form_row(form.height, {*/
/*                                                 label: 'admin.product.field.height.title',*/
/*                                             })*/
/*                                         }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="col-1-3">*/
/*                                         <div class="pr-l">*/
/*                                         {{*/
/*                                             form_row(form.depth, {*/
/*                                                 label: 'admin.product.field.depth.title',*/
/*                                             })*/
/*                                         }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ol>*/
/*                                 <ol>*/
/*                                     <li class="col-1-3">*/
/*                                         {{*/
/*                                         form_row(form.weight, {*/
/*                                             label: 'admin.product.field.weight.title',*/
/*                                         })*/
/*                                         }}*/
/*                                     </li>*/
/*                                 </ol>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="grid {% if product.hasVariants() %}hidden{% endif %}">*/
/*                         <div class="col-1-3">*/
/*                             <div class="box-none">*/
/*                                 <h3 class="fw-n">{{ 'admin.product.section.sku.title'|trans }}</h3>*/
/*                                 <p>{{ 'admin.product.section.sku.description'|trans }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-2-3">*/
/*                             <div class="box">*/
/*                                 {{*/
/*                                 form_row(form.sku, {*/
/*                                     label: 'admin.product.field.sku.title',*/
/*                                 })*/
/*                                 }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="ph-n pt-m mb-l">*/
/*                 <div class="box-background pv-s mb-n">*/
/*                     <a data-fc-modules="toggle" href="#metadata-info"><i class="icon-plus-circle"></i> {{ 'admin.metadata.customize'|trans }}</a>*/
/*                 </div>*/
/*                 <div id="metadata-info" class="grid pt-s hidden">*/
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
/*                                                             placeholder: 'admin.product.field.metatitle.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaDescription["#{language}_metaDescription"], {*/
/*                                                         label: 'admin.metadata.field.metadescription.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.product.field.metadescription.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaKeywords["#{language}_metaKeywords"], {*/
/*                                                         label: 'admin.metadata.field.metakeywords.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.product.field.metakeywords.placeholder',*/
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
/*                         <h3 class="fw-n">{{ 'admin.product.section.visibility.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.product.section.visibility.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box mb-n pb-n">*/
/*                         <ol class="grid pt-m">*/
/*                             <li class="col-1-1">*/
/*                                 {{*/
/*                                     form_row(form.showInHome, {*/
/*                                         label: 'admin.product.field.in_home.title'*/
/*                                     })*/
/*                                 }}*/
/*                                 {{*/
/*                                     form_row(form.enabled, {*/
/*                                         label: 'admin.product.field.enabled.title',*/
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
/*                 <button id="submit-save" type="submit" class="button-primary button-fat pv-s mr-l">{{ 'ui.forms.save'|trans }}</button>*/
/*                 <a href="{{ path('admin_product_list') }}">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
