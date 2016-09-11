<?php

/* AdminProductBundle:Pack:editComponent.html.twig */
class __TwigTemplate_4ce88d99859e1192bb6a7da92c17d2b5e2899d6e5ff0a3303755f32812801027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/formComponent.html.twig", "AdminProductBundle:Pack:editComponent.html.twig", 1);
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
        $__internal_6e7e4bae2978615c533bc0ae04bd70c4d8d552e16ac489f44edfa1f87f48c1a2 = $this->env->getExtension("native_profiler");
        $__internal_6e7e4bae2978615c533bc0ae04bd70c4d8d552e16ac489f44edfa1f87f48c1a2->enter($__internal_6e7e4bae2978615c533bc0ae04bd70c4d8d552e16ac489f44edfa1f87f48c1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminProductBundle:Pack:editComponent.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "purchasable_pack");
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AdminCoreBundle::Forms/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e7e4bae2978615c533bc0ae04bd70c4d8d552e16ac489f44edfa1f87f48c1a2->leave($__internal_6e7e4bae2978615c533bc0ae04bd70c4d8d552e16ac489f44edfa1f87f48c1a2_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_106927664bd58654a85fe8bad94daec9bebeb1f2af3fa62689dd7aa00907bcac = $this->env->getExtension("native_profiler");
        $__internal_106927664bd58654a85fe8bad94daec9bebeb1f2af3fa62689dd7aa00907bcac->enter($__internal_106927664bd58654a85fe8bad94daec9bebeb1f2af3fa62689dd7aa00907bcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $context["formAction"] = (($this->getAttribute(        // line 15
(isset($context["pack"]) ? $context["pack"] : null), "id", array())) ? ($this->env->getExtension('routing')->getUrl("admin_purchasable_pack_update", array("id" => $this->getAttribute(        // line 16
(isset($context["pack"]) ? $context["pack"] : null), "id", array())))) : ($this->env->getExtension('routing')->getUrl("admin_purchasable_pack_save")));
        // line 19
        echo "

    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
        echo "
        <fieldset>
            ";
        // line 23
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("admin.pack_top", array("pack" =>         // line 24
(isset($context["pack"]) ? $context["pack"] : null))));
        // line 25
        echo "
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.basic.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.basic.description"), "html", null, true);
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
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), ($context["language"] . "_name"), array(), "array"), 'row', array("label" => "admin.purchasable_pack.field.name.title", "attr" => array("placeholder" => "admin.purchasable_pack.field.name.placeholder")));
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
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), ($context["language"] . "_slug"), array(), "array"), 'row', array("label" => false, "attr" => array("placeholder" => "admin.purchasable_pack.field.slug.placeholder", "data-fc-modules" => "slug", "data-fc-parent" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 60
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
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), ($context["language"] . "_description"), array(), "array"), 'row', array("label" => "admin.purchasable_pack.field.description.title", "attr" => array("placeholder" => "admin.purchasable_pack.field.description.placeholder", "data-fc-modules" => "wysiwyg", "data-fc-fullscreen" => "false", "data-fc-text-html" => $this->env->getExtension('translator')->trans("admin.UI.show_code"), "data-fc-text-visual" => $this->env->getExtension('translator')->trans("admin.UI.show_visual"), "data-fc-text-help" => $this->env->getExtension('translator')->trans("ui.editor.help"))));
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
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.catalog.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.catalog.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box\">
                        <ol class=\"grid\">
                            <li class=\"col-1-2 pb-n\">
                                <div class=\"pr-l\">
                                    ";
        // line 102
        echo         // line 103
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purchasables", array()), 'row', array("label" => "admin.purchasable_pack.field.purchasables.title", "attr" => array("style" => "height: 200px")));
        // line 109
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
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.pricing.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.pricing.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box pb-n\">
                        <ol class=\"grid\">
                            <li class=\"col-1-2\">
                                ";
        // line 127
        echo         // line 128
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("label" => "admin.purchasable_pack.field.price.title"));
        // line 131
        echo "
                            </li>
                            <li class=\"col-1-2\">
                                ";
        // line 134
        echo         // line 135
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reducedPrice", array()), 'row', array("label" => "admin.purchasable_pack.field.reduced_price.title"));
        // line 138
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class=\"grid";
        // line 144
        if ( !(isset($context["useStock"]) ? $context["useStock"] : null)) {
            echo " d-n";
        }
        echo "\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.stock.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.stock.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box pb-n\">
                        <ol>
                            <li class=\"col-1-2\">
                                <div class=\"pr-l\">
                                    ";
        // line 156
        echo         // line 157
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stockType", array()), 'row', array("label" => "admin.purchasable_pack.field.stock_type.title"));
        // line 160
        echo "
                                </div>
                            </li>
                            <li class=\"col-1-2\">
                                ";
        // line 164
        echo         // line 165
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'row', array("label" => "admin.purchasable_pack.field.stock.title"));
        // line 168
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            ";
        // line 175
        $this->loadTemplate("@AdminMedia/Module/_images-form-field.html.twig", "AdminProductBundle:Pack:editComponent.html.twig", 175)->display(array_merge($context, array("images" => $this->getAttribute(        // line 176
(isset($context["pack"]) ? $context["pack"] : null), "getSortedImages", array()), "redirect_path" => (($this->getAttribute(        // line 177
(isset($context["pack"]) ? $context["pack"] : null), "id", array())) ? ($this->env->getExtension('routing')->getPath("admin_purchasable_pack_edit", array("id" => $this->getAttribute(        // line 178
(isset($context["pack"]) ? $context["pack"] : null), "id", array())))) : ($this->env->getExtension('routing')->getPath("admin_purchasable_pack_new"))))));
        // line 181
        echo "            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none\">
                        <h3 class=\"fw-n\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.categorization.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.categorization.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box\">
                        <ol class=\"grid\">
                            <li class=\"col-1-2 pb-n\">
                                <div class=\"pr-l\">
                                    ";
        // line 193
        echo         // line 194
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "principalCategory", array()), 'row', array("label" => "admin.purchasable_pack.field.main_category.title", "label_help" => $this->env->getExtension('translator')->trans("admin.purchasable_pack.field.main_category.placeholder")));
        // line 198
        echo "
                                    <p class=\"pt-s fz-default mb-n ta-r\">
                                        <a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getUrl("admin_category_new");
        echo "\" data-fc-modules=\"window-content\">
                                            <i class=\"icon-plus\"></i>
                                            ";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.category.new"), "html", null, true);
        echo "
                                        </a>
                                    </p>
                                </div>
                            </li>
                            <li class=\"col-1-2 pb-n\">
                                ";
        // line 208
        echo         // line 209
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "manufacturer", array()), 'row', array("label" => "admin.purchasable_pack.field.manufacturer.title", "label_help" => $this->env->getExtension('translator')->trans("admin.purchasable_pack.field.manufacturer.placeholder")));
        // line 213
        echo "
                                <p class=\"pt-s fz-default mb-n ta-r\">
                                    <a href=\"";
        // line 215
        echo $this->env->getExtension('routing')->getUrl("admin_manufacturer_new");
        echo "\" data-fc-modules=\"window-content\">
                                        <i class=\"icon-plus\"></i>
                                        ";
        // line 217
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
                    <a data-fc-modules=\"toggle\" href=\"#dimensions-edit\"><i class=\"icon-plus-circle\"></i> ";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.dimensions.title"), "html", null, true);
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
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.dimensions.title"), "html", null, true);
        echo "</h3>
                                <p>";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.dimensions.description"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"col-2-3\">
                            <div class=\"box pb-n\">
                                <ol class=\"grid\">
                                    <li class=\"col-1-3\">
                                        <div class=\"pr-l\">
                                            ";
        // line 243
        echo         // line 244
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "width", array()), 'row', array("label" => "admin.purchasable_pack.field.width.title"));
        // line 247
        echo "
                                        </div>
                                    </li>
                                    <li class=\"col-1-3\">
                                        <div class=\"pr-l\">
                                        ";
        // line 252
        echo         // line 253
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'row', array("label" => "admin.purchasable_pack.field.height.title"));
        // line 256
        echo "
                                        </div>
                                    </li>
                                    <li class=\"col-1-3\">
                                        <div class=\"pr-l\">
                                        ";
        // line 261
        echo         // line 262
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "depth", array()), 'row', array("label" => "admin.purchasable_pack.field.depth.title"));
        // line 265
        echo "
                                        </div>
                                    </li>
                                </ol>
                                <ol>
                                    <li class=\"col-1-3\">
                                        ";
        // line 271
        echo         // line 272
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weight", array()), 'row', array("label" => "admin.purchasable_pack.field.weight.title"));
        // line 275
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
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.sku.title"), "html", null, true);
        echo "</h3>
                                <p>";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.sku.description"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"col-2-3\">
                            <div class=\"box\">
                                ";
        // line 290
        echo         // line 291
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array()), 'row', array("label" => "admin.purchasable_pack.field.sku.title"));
        // line 294
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ph-n pt-m mb-l\">
                <div class=\"box-background pv-s mb-n\">
                    <a data-fc-modules=\"toggle\" href=\"#metadata-info\"><i class=\"icon-plus-circle\"></i> ";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.customize"), "html", null, true);
        echo "</a>
                </div>
                <div id=\"metadata-info\" class=\"grid pt-s hidden\">
                    <div class=\"col-1-3\">
                        <div class=\"box-none\">
                            <h3 class=\"fw-n\">";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.title"), "html", null, true);
        echo "</h3>
                            <p>";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.metadata.section.metadata.description"), "html", null, true);
        echo "</p>
                            ";
        // line 309
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            // line 310
            echo "                                <p><i class=\"icon-star\"></i> = ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.language.master_language"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 312
        echo "                        </div>
                    </div>
                    <div class=\"col-2-3\">
                        <div ";
        // line 315
        if ((twig_length_filter($this->env, (isset($context["elcodi_languages"]) ? $context["elcodi_languages"] : null)) > 1)) {
            echo "data-fc-modules=\"tabs\" class=\"tabs-box loading\"";
        }
        echo ">
                            ";
        // line 316
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
            // line 317
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
            // line 321
            echo             // line 322
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), ($context["language"] . "_metaTitle"), array(), "array"), 'row', array("label" => "admin.metadata.field.metatitle.title", "attr" => array("placeholder" => "admin.purchasable_pack.field.metatitle.placeholder")));
            // line 328
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 331
            echo             // line 332
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), ($context["language"] . "_metaDescription"), array(), "array"), 'row', array("label" => "admin.metadata.field.metadescription.title", "attr" => array("placeholder" => "admin.purchasable_pack.field.metadescription.placeholder")));
            // line 338
            echo "
                                            </li>
                                            <li>
                                                ";
            // line 341
            echo             // line 342
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), ($context["language"] . "_metaKeywords"), array(), "array"), 'row', array("label" => "admin.metadata.field.metakeywords.title", "attr" => array("placeholder" => "admin.purchasable_pack.field.metakeywords.placeholder")));
            // line 348
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
        // line 354
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"grid\">
                <div class=\"col-1-3\">
                    <div class=\"box-none mb-n pb-m\">
                        <h3 class=\"fw-n\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.visibility.title"), "html", null, true);
        echo "</h3>
                        <p>";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.purchasable_pack.section.visibility.description"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-2-3\">
                    <div class=\"box mb-n pb-n\">
                        <ol class=\"grid pt-m\">
                            <li class=\"col-1-1\">
                                ";
        // line 369
        echo         // line 370
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "showInHome", array()), 'row', array("label" => "admin.purchasable_pack.field.in_home.title"));
        // line 373
        echo "
                                ";
        // line 374
        echo         // line 375
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'row', array("label" => "admin.purchasable_pack.field.enabled.title"));
        // line 378
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
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.save"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 391
        echo $this->env->getExtension('routing')->getPath("admin_purchasable_pack_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.forms.cancel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        // line 394
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        
        $__internal_106927664bd58654a85fe8bad94daec9bebeb1f2af3fa62689dd7aa00907bcac->leave($__internal_106927664bd58654a85fe8bad94daec9bebeb1f2af3fa62689dd7aa00907bcac_prof);

    }

    public function getTemplateName()
    {
        return "AdminProductBundle:Pack:editComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 394,  618 => 391,  614 => 390,  600 => 378,  598 => 375,  597 => 374,  594 => 373,  592 => 370,  591 => 369,  581 => 362,  577 => 361,  568 => 354,  549 => 348,  547 => 342,  546 => 341,  541 => 338,  539 => 332,  538 => 331,  533 => 328,  531 => 322,  530 => 321,  516 => 317,  499 => 316,  493 => 315,  488 => 312,  482 => 310,  480 => 309,  476 => 308,  472 => 307,  464 => 302,  454 => 294,  452 => 291,  451 => 290,  443 => 285,  439 => 284,  428 => 275,  426 => 272,  425 => 271,  417 => 265,  415 => 262,  414 => 261,  407 => 256,  405 => 253,  404 => 252,  397 => 247,  395 => 244,  394 => 243,  383 => 235,  379 => 234,  365 => 228,  351 => 217,  346 => 215,  342 => 213,  340 => 209,  339 => 208,  330 => 202,  325 => 200,  321 => 198,  319 => 194,  318 => 193,  307 => 185,  303 => 184,  298 => 181,  296 => 178,  295 => 177,  294 => 176,  293 => 175,  284 => 168,  282 => 165,  281 => 164,  275 => 160,  273 => 157,  272 => 156,  261 => 148,  257 => 147,  249 => 144,  241 => 138,  239 => 135,  238 => 134,  233 => 131,  231 => 128,  230 => 127,  220 => 120,  216 => 119,  204 => 109,  202 => 103,  201 => 102,  190 => 94,  186 => 93,  178 => 87,  159 => 81,  157 => 70,  156 => 69,  149 => 64,  147 => 60,  146 => 55,  145 => 54,  141 => 53,  135 => 52,  131 => 50,  129 => 44,  128 => 43,  114 => 39,  97 => 38,  91 => 37,  86 => 34,  80 => 32,  78 => 31,  74 => 30,  70 => 29,  64 => 25,  62 => 24,  61 => 23,  56 => 21,  52 => 19,  50 => 16,  49 => 15,  48 => 14,  45 => 13,  39 => 12,  32 => 1,  30 => 9,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/formComponent.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'purchasable_pack',*/
/* } %}*/
/* */
/* */
/* {% form_theme form 'AdminCoreBundle::Forms/fields.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% set formAction =*/
/*         pack.id*/
/*             ? url('admin_purchasable_pack_update', { id: pack.id })*/
/*             : url('admin_purchasable_pack_save')*/
/*      %}*/
/* */
/* */
/*     {{ form_start(form, { action: formAction }) }}*/
/*         <fieldset>*/
/*             {{ elcodi_hook("admin.pack_top", {*/
/*                 'pack': pack*/
/*             }) }}*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.purchasable_pack.section.basic.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.purchasable_pack.section.basic.description'|trans }}</p>*/
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
/*                                                 label: 'admin.purchasable_pack.field.name.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.purchasable_pack.field.name.placeholder',*/
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
/*                                                         placeholder: 'admin.purchasable_pack.field.slug.placeholder',*/
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
/*                                                 label: 'admin.purchasable_pack.field.description.title',*/
/*                                                 attr: {*/
/*                                                     placeholder: 'admin.purchasable_pack.field.description.placeholder',*/
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
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.purchasable_pack.section.catalog.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.purchasable_pack.section.catalog.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box">*/
/*                         <ol class="grid">*/
/*                             <li class="col-1-2 pb-n">*/
/*                                 <div class="pr-l">*/
/*                                     {{*/
/*                                     form_row(form.purchasables, {*/
/*                                         label: 'admin.purchasable_pack.field.purchasables.title',*/
/*                                         attr: {*/
/*                                             style: "height: 200px"*/
/*                                         }*/
/*                                     })*/
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
/*                         <h3 class="fw-n">{{ 'admin.purchasable_pack.section.pricing.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.purchasable_pack.section.pricing.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box pb-n">*/
/*                         <ol class="grid">*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.price, {*/
/*                                         label: 'admin.purchasable_pack.field.price.title',*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.reducedPrice, {*/
/*                                         label: 'admin.purchasable_pack.field.reduced_price.title',*/
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
/*                         <h3 class="fw-n">{{ 'admin.purchasable_pack.section.stock.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.purchasable_pack.section.stock.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box pb-n">*/
/*                         <ol>*/
/*                             <li class="col-1-2">*/
/*                                 <div class="pr-l">*/
/*                                     {{*/
/*                                         form_row(form.stockType, {*/
/*                                             label: 'admin.purchasable_pack.field.stock_type.title'*/
/*                                         })*/
/*                                     }}*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="col-1-2">*/
/*                                 {{*/
/*                                     form_row(form.stock, {*/
/*                                         label: 'admin.purchasable_pack.field.stock.title'*/
/*                                     })*/
/*                                 }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% include '@AdminMedia/Module/_images-form-field.html.twig' with {*/
/*                 images: pack.getSortedImages,*/
/*                 redirect_path: pack.id*/
/*                     ? path('admin_purchasable_pack_edit', { id: pack.id })*/
/*                     : path('admin_purchasable_pack_new')*/
/*             } %}*/
/*             <div class="grid">*/
/*                 <div class="col-1-3">*/
/*                     <div class="box-none">*/
/*                         <h3 class="fw-n">{{ 'admin.purchasable_pack.section.categorization.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.purchasable_pack.section.categorization.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box">*/
/*                         <ol class="grid">*/
/*                             <li class="col-1-2 pb-n">*/
/*                                 <div class="pr-l">*/
/*                                     {{*/
/*                                     form_row(form.principalCategory, {*/
/*                                         label: 'admin.purchasable_pack.field.main_category.title',*/
/*                                         label_help: 'admin.purchasable_pack.field.main_category.placeholder'|trans,*/
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
/*                                     label: 'admin.purchasable_pack.field.manufacturer.title',*/
/*                                     label_help: 'admin.purchasable_pack.field.manufacturer.placeholder'|trans,*/
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
/* */
/*             <div class="ph-n pt-m mb-n">*/
/*                 <div class="box-background pv-s mb-n">*/
/*                     <a data-fc-modules="toggle" href="#dimensions-edit"><i class="icon-plus-circle"></i> {{ 'admin.purchasable_pack.section.dimensions.title'|trans }}  {% if not product.hasVariants() %}/ {{ 'admin.product.section.sku.title'|trans }}{% endif %}</a>*/
/*                 </div>*/
/*                 <div id="dimensions-edit" class="hidden">*/
/*                     <div class="grid pt-s">*/
/*                         <div class="col-1-3">*/
/*                             <div class="box-none">*/
/*                                 <h3 class="fw-n">{{ 'admin.purchasable_pack.section.dimensions.title'|trans }}</h3>*/
/*                                 <p>{{ 'admin.purchasable_pack.section.dimensions.description'|trans }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-2-3">*/
/*                             <div class="box pb-n">*/
/*                                 <ol class="grid">*/
/*                                     <li class="col-1-3">*/
/*                                         <div class="pr-l">*/
/*                                             {{*/
/*                                             form_row(form.width, {*/
/*                                                 label: 'admin.purchasable_pack.field.width.title',*/
/*                                             })*/
/*                                         }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="col-1-3">*/
/*                                         <div class="pr-l">*/
/*                                         {{*/
/*                                             form_row(form.height, {*/
/*                                                 label: 'admin.purchasable_pack.field.height.title',*/
/*                                             })*/
/*                                         }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="col-1-3">*/
/*                                         <div class="pr-l">*/
/*                                         {{*/
/*                                             form_row(form.depth, {*/
/*                                                 label: 'admin.purchasable_pack.field.depth.title',*/
/*                                             })*/
/*                                         }}*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ol>*/
/*                                 <ol>*/
/*                                     <li class="col-1-3">*/
/*                                         {{*/
/*                                         form_row(form.weight, {*/
/*                                             label: 'admin.purchasable_pack.field.weight.title',*/
/*                                         })*/
/*                                         }}*/
/*                                     </li>*/
/*                                 </ol>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="grid">*/
/*                         <div class="col-1-3">*/
/*                             <div class="box-none">*/
/*                                 <h3 class="fw-n">{{ 'admin.purchasable_pack.section.sku.title'|trans }}</h3>*/
/*                                 <p>{{ 'admin.purchasable_pack.section.sku.description'|trans }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-2-3">*/
/*                             <div class="box">*/
/*                                 {{*/
/*                                 form_row(form.sku, {*/
/*                                     label: 'admin.purchasable_pack.field.sku.title',*/
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
/*                                                             placeholder: 'admin.purchasable_pack.field.metatitle.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaDescription["#{language}_metaDescription"], {*/
/*                                                         label: 'admin.metadata.field.metadescription.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.purchasable_pack.field.metadescription.placeholder',*/
/*                                                         },*/
/*                                                     })*/
/*                                                 }}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 {{*/
/*                                                     form_row(form.metaKeywords["#{language}_metaKeywords"], {*/
/*                                                         label: 'admin.metadata.field.metakeywords.title',*/
/*                                                         attr: {*/
/*                                                             placeholder: 'admin.purchasable_pack.field.metakeywords.placeholder',*/
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
/*                         <h3 class="fw-n">{{ 'admin.purchasable_pack.section.visibility.title'|trans }}</h3>*/
/*                         <p>{{ 'admin.purchasable_pack.section.visibility.description'|trans }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-2-3">*/
/*                     <div class="box mb-n pb-n">*/
/*                         <ol class="grid pt-m">*/
/*                             <li class="col-1-1">*/
/*                                 {{*/
/*                                     form_row(form.showInHome, {*/
/*                                         label: 'admin.purchasable_pack.field.in_home.title'*/
/*                                     })*/
/*                                 }}*/
/*                                 {{*/
/*                                     form_row(form.enabled, {*/
/*                                         label: 'admin.purchasable_pack.field.enabled.title',*/
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
/*                 <a href="{{ path('admin_purchasable_pack_list') }}">{{ 'ui.forms.cancel'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock content %}*/
/* */
