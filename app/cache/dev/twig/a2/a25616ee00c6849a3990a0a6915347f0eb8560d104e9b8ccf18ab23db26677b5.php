<?php

/* StoreTemplateBundle:Pages:blog-post-view.html.twig */
class __TwigTemplate_6631d55a18d7a6d7db8eec0122d8efe16477aa7c5f935821fd648a8b9bbbce66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_static.html.twig", "StoreTemplateBundle:Pages:blog-post-view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_static.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf55d552196113e3fdaf2afc2d927857147e99be028ac1032d64ab9e7b4cf5e5 = $this->env->getExtension("native_profiler");
        $__internal_cf55d552196113e3fdaf2afc2d927857147e99be028ac1032d64ab9e7b4cf5e5->enter($__internal_cf55d552196113e3fdaf2afc2d927857147e99be028ac1032d64ab9e7b4cf5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:blog-post-view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf55d552196113e3fdaf2afc2d927857147e99be028ac1032d64ab9e7b4cf5e5->leave($__internal_cf55d552196113e3fdaf2afc2d927857147e99be028ac1032d64ab9e7b4cf5e5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1967307ac1e0d6ccc09d39ab65d854f029115af0eb8c6f44d66810ecb82bed63 = $this->env->getExtension("native_profiler");
        $__internal_1967307ac1e0d6ccc09d39ab65d854f029115af0eb8c6f44d66810ecb82bed63->enter($__internal_1967307ac1e0d6ccc09d39ab65d854f029115af0eb8c6f44d66810ecb82bed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <article class=\"blog-post\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "title", array()), "html", null, true);
        echo "</h1>
        <span class=\"blog-post-date fa fa-calendar\"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "publishedDate", array()), "Y-m-d"), "html", null, true);
        echo "</span>
        <div class=\"blog-post-content\">

            ";
        // line 9
        echo $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "content", array());
        echo "
        </div>
    </article>
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.blog_post_view_bottom", array("blog_post" => (isset($context["blog_post"]) ? $context["blog_post"] : null))));
        echo "
    <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.blog.post.view.last_post"), "html", null, true);
        echo "</h3>
    ";
        // line 14
        $context["last_posts"] = $this->env->getExtension('store_page_extension')->getBlogPages(1);
        // line 15
        echo "    ";
        $context["col"] = (((twig_length_filter($this->env, (isset($context["last_posts"]) ? $context["last_posts"] : null)) < 3)) ? (twig_length_filter($this->env, (isset($context["last_posts"]) ? $context["last_posts"] : null))) : (3));
        // line 16
        echo "    <div class=\"grid\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_posts"]) ? $context["last_posts"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["blog_post"]) {
            // line 18
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) <= (isset($context["col"]) ? $context["col"] : null))) {
                // line 19
                echo "        <div class=\"col-1-";
                echo twig_escape_filter($this->env, (isset($context["col"]) ? $context["col"] : null), "html", null, true);
                echo "\">
            <div class=\"blog-post blog-post-mini\">
                <h2><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute(                // line 22
$context["blog_post"], "id", array()), "slug" => $this->getAttribute(                // line 23
$context["blog_post"], "path", array()))), "html", null, true);
                // line 24
                echo "\">
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["blog_post"], "title", array()), "html", null, true);
                echo "
                </a></h2>
                ";
                // line 27
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags($this->getAttribute($context["blog_post"], "content", array())), 100), "html", null, true);
                echo "
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute(                // line 29
$context["blog_post"], "id", array()), "slug" => $this->getAttribute(                // line 30
$context["blog_post"], "path", array()))), "html", null, true);
                // line 31
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.blog.post.view.read_more"), "html", null, true);
                echo "</a>
            </div>
        </div>
        ";
            }
            // line 35
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
";
        
        $__internal_1967307ac1e0d6ccc09d39ab65d854f029115af0eb8c6f44d66810ecb82bed63->leave($__internal_1967307ac1e0d6ccc09d39ab65d854f029115af0eb8c6f44d66810ecb82bed63_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:blog-post-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  129 => 35,  121 => 31,  119 => 30,  118 => 29,  117 => 28,  113 => 27,  108 => 25,  105 => 24,  103 => 23,  102 => 22,  101 => 21,  95 => 19,  92 => 18,  75 => 17,  72 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_static.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <article class="blog-post">*/
/*         <h1>{{ blog_post.title }}</h1>*/
/*         <span class="blog-post-date fa fa-calendar"> {{ blog_post.publishedDate|date('Y-m-d') }}</span>*/
/*         <div class="blog-post-content">*/
/* */
/*             {{ blog_post.content|raw }}*/
/*         </div>*/
/*     </article>*/
/*     {{ elcodi_hook("store.blog_post_view_bottom", {'blog_post': blog_post }) }}*/
/*     <h3>{{ 'template.store_template_bundle.blog.post.view.last_post'|trans }}</h3>*/
/*     {% set last_posts = elcodi_blog_pages(1) %}*/
/*     {% set col = last_posts|length < 3 ? last_posts|length : 3  %}*/
/*     <div class="grid">*/
/*     {% for blog_post in last_posts %}*/
/*         {% if loop.index <= col  %}*/
/*         <div class="col-1-{{ col }}">*/
/*             <div class="blog-post blog-post-mini">*/
/*                 <h2><a href="{{ url("store_blog_post_view", {*/
/*                         'id': blog_post.id,*/
/*                         'slug': blog_post.path*/
/*                     }) }}">*/
/*                     {{ blog_post.title }}*/
/*                 </a></h2>*/
/*                 {{ blog_post.content|striptags|raw|truncate(100) }}*/
/*                 <a href="{{ url("store_blog_post_view", {*/
/*                     'id': blog_post.id,*/
/*                     'slug': blog_post.path*/
/*                 }) }}">{{ "template.store_template_bundle.blog.post.view.read_more"|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock content %}*/
/* */
