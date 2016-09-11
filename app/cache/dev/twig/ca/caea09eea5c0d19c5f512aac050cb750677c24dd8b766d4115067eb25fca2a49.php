<?php

/* StoreTemplateBundle:Modules:_footer.html.twig */
class __TwigTemplate_56b0632fa11626870fa3011d70438c93af582c32e12da45b7f8d0d53887b1b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f31f129e654e8722d08c007664870cbc3ffa1009ba16d5c6e1cdcac074f1e1f = $this->env->getExtension("native_profiler");
        $__internal_2f31f129e654e8722d08c007664870cbc3ffa1009ba16d5c6e1cdcac074f1e1f->enter($__internal_2f31f129e654e8722d08c007664870cbc3ffa1009ba16d5c6e1cdcac074f1e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_footer.html.twig"));

        // line 1
        echo "<div id=\"mobile-menu\" class=\"grid mobile\">
    ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_categories_nav"));
        echo "
</div>
<footer class=\"footer\">
    <div class=\"grid\">
        <div class=\"col-1-1\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("store_homepage");
        echo "\" class=\"logo\">
                ";
        // line 8
        if ($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "secondaryLogo", array())) {
            // line 9
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "secondaryLogo", array()), array("height" => 59, "width" => 200, "type" => 2)), "html", null, true);
            echo "\" />
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
            echo "
                ";
        }
        // line 13
        echo "            </a>
            <p class=\"leitmotiv\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "leitmotiv", array()), "html", null, true);
        echo "</strong></p>
        </div>
    </div>
    <div class=\"grid\">
        ";
        // line 18
        $context["last_post"] = $this->getAttribute($this->env->getExtension('store_page_extension')->getBlogPages(), 0, array(), "array");
        // line 19
        echo "        ";
        if ((isset($context["last_post"]) ? $context["last_post"] : null)) {
            // line 20
            echo "            <div class=\"col-1-3\">
                <h5>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.footer.latest_news"), "html", null, true);
            echo "</h5>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute(            // line 25
(isset($context["last_post"]) ? $context["last_post"] : null), "id", array()), "slug" => $this->getAttribute(            // line 26
(isset($context["last_post"]) ? $context["last_post"] : null), "path", array()))), "html", null, true);
            // line 27
            echo "\">
                            <strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_post"]) ? $context["last_post"] : null), "title", array()), "html", null, true);
            echo "</strong>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getUrl("store_blog_view");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.footer.more"), "html", null, true);
            echo "</a>
                    </li>
                </ul>
            </div>
        ";
        }
        // line 37
        echo "        <div class=\"col-1-3\">
            <h5>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.footer.quick_links"), "html", null, true);
        echo "</h5>
            <ul>
                ";
        // line 40
        $context["pages"] = $this->env->getExtension('store_page_extension')->getFooterPages();
        // line 41
        echo "
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 43
            echo "                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi.route.page_render", array("id" => $this->getAttribute(            // line 45
$context["page"], "id", array()), "path" => $this->getAttribute(            // line 46
$context["page"], "path", array()))), "html", null, true);
            // line 47
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </ul>
        </div>
        <div class=\"col-1-3\">
            <h5>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.footer.follow_us"), "html", null, true);
        echo "</h5>
            <ul>
                ";
        // line 55
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.footer_social"));
        echo "
            </ul>
        </div>
    </div>
</footer>
";
        
        $__internal_2f31f129e654e8722d08c007664870cbc3ffa1009ba16d5c6e1cdcac074f1e1f->leave($__internal_2f31f129e654e8722d08c007664870cbc3ffa1009ba16d5c6e1cdcac074f1e1f_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  138 => 53,  133 => 50,  123 => 47,  121 => 46,  120 => 45,  119 => 44,  116 => 43,  112 => 42,  109 => 41,  107 => 40,  102 => 38,  99 => 37,  89 => 32,  82 => 28,  79 => 27,  77 => 26,  76 => 25,  75 => 24,  69 => 21,  66 => 20,  63 => 19,  61 => 18,  54 => 14,  51 => 13,  45 => 11,  39 => 9,  37 => 8,  33 => 7,  25 => 2,  22 => 1,);
    }
}
/* <div id="mobile-menu" class="grid mobile">*/
/*     {{ render(url('store_categories_nav')) }}*/
/* </div>*/
/* <footer class="footer">*/
/*     <div class="grid">*/
/*         <div class="col-1-1">*/
/*             <a href="{{ url('store_homepage') }}" class="logo">*/
/*                 {% if store.secondaryLogo %}*/
/*                     <img src="{{ store.secondaryLogo|resize({ height: 59, width: 200, type: 2 })  }}" />*/
/*                 {% else %}*/
/*                     {{ store.name }}*/
/*                 {% endif %}*/
/*             </a>*/
/*             <p class="leitmotiv"><strong>{{ store.leitmotiv }}</strong></p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         {% set last_post = elcodi_blog_pages()[0] %}*/
/*         {% if last_post %}*/
/*             <div class="col-1-3">*/
/*                 <h5>{{ 'template.store_template_bundle.footer.latest_news'|trans }}</h5>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ url("store_blog_post_view", {*/
/*                             "id": last_post.id,*/
/*                             "slug": last_post.path*/
/*                         }) }}">*/
/*                             <strong>{{ last_post.title }}</strong>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('store_blog_view') }}">{{ 'template.store_template_bundle.footer.more'|trans }}</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="col-1-3">*/
/*             <h5>{{ 'template.store_template_bundle.footer.quick_links'|trans }}</h5>*/
/*             <ul>*/
/*                 {% set pages = elcodi_footer_pages() %}*/
/* */
/*                 {% for page in pages %}*/
/*                     <li>*/
/*                         <a href="{{ url("elcodi.route.page_render", {*/
/*                             "id": page.id,*/
/*                             "path": page.path*/
/*                         }) }}">{{ page.title }}</a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-1-3">*/
/*             <h5>{{ 'template.store_template_bundle.footer.follow_us'|trans }}</h5>*/
/*             <ul>*/
/*                 {{ elcodi_hook("store.footer_social") }}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
