<?php

/* StoreTemplateBundle:Pages:blog-posts-list.html.twig */
class __TwigTemplate_c385f0183c8d50ad46ccb24c6df8ee6ee6719ee32ab0fd8b5ccc42e71add32c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_static.html.twig", "StoreTemplateBundle:Pages:blog-posts-list.html.twig", 1);
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
        $__internal_e168bcce45e6d58f34050baa375d24ecbb443bffa967643c8a6f919f62d9f3f5 = $this->env->getExtension("native_profiler");
        $__internal_e168bcce45e6d58f34050baa375d24ecbb443bffa967643c8a6f919f62d9f3f5->enter($__internal_e168bcce45e6d58f34050baa375d24ecbb443bffa967643c8a6f919f62d9f3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:blog-posts-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e168bcce45e6d58f34050baa375d24ecbb443bffa967643c8a6f919f62d9f3f5->leave($__internal_e168bcce45e6d58f34050baa375d24ecbb443bffa967643c8a6f919f62d9f3f5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c08754cd873b74f4fca3b4fe6495afa1d530ad59d3661821d82ed76a55bc5f4 = $this->env->getExtension("native_profiler");
        $__internal_1c08754cd873b74f4fca3b4fe6495afa1d530ad59d3661821d82ed76a55bc5f4->enter($__internal_1c08754cd873b74f4fca3b4fe6495afa1d530ad59d3661821d82ed76a55bc5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.blog.post.list.blog_posts"), "html", null, true);
        echo "</h1>
    <div class=\"grid\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_posts"]) ? $context["blog_posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog_post"]) {
            // line 7
            echo "            <div class=\"col-1-2\">
                <div class=\"blog-post blog-post-mini\">
                    <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute(            // line 10
$context["blog_post"], "id", array()), "slug" => $this->getAttribute(            // line 11
$context["blog_post"], "path", array()))), "html", null, true);
            // line 12
            echo "\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog_post"], "title", array()), "html", null, true);
            echo "
                        </a></h2>
                    ";
            // line 15
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags($this->getAttribute($context["blog_post"], "content", array())), 100), "html", null, true);
            echo "
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_post_view", array("id" => $this->getAttribute(            // line 17
$context["blog_post"], "id", array()), "slug" => $this->getAttribute(            // line 18
$context["blog_post"], "path", array()))), "html", null, true);
            // line 19
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.blog.post.list.read_more"), "html", null, true);
            echo "</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <p>
            ";
        // line 24
        if (((isset($context["number_of_pages"]) ? $context["number_of_pages"] : null) > (isset($context["current_page"]) ? $context["current_page"] : null))) {
            // line 25
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_view", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : null) + 1))), "html", null, true);
            echo "\" class=\"button button-secondary\" style=\"float:right;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.blog.post.list.next_posts"), "html", null, true);
            echo " <i class=\"fa fa-caret-right\"></i></a>
            ";
        }
        // line 27
        echo "            ";
        if (((isset($context["current_page"]) ? $context["current_page"] : null) > 1)) {
            // line 28
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_blog_view", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : null) - 1))), "html", null, true);
            echo "\" class=\"button button-secondary\"><i class=\"fa fa-caret-left\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.blog.post.list.previous_posts"), "html", null, true);
            echo "</a>
            ";
        }
        // line 30
        echo "        </p>
    </div>

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.blog_posts_list_bottom", array("blog_posts" =>         // line 34
(isset($context["blog_posts"]) ? $context["blog_posts"] : null), "current_page" =>         // line 35
(isset($context["current_page"]) ? $context["current_page"] : null), "number_of_pages" =>         // line 36
(isset($context["number_of_pages"]) ? $context["number_of_pages"] : null))));
        // line 37
        echo "

";
        
        $__internal_1c08754cd873b74f4fca3b4fe6495afa1d530ad59d3661821d82ed76a55bc5f4->leave($__internal_1c08754cd873b74f4fca3b4fe6495afa1d530ad59d3661821d82ed76a55bc5f4_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:blog-posts-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  117 => 36,  116 => 35,  115 => 34,  114 => 33,  109 => 30,  101 => 28,  98 => 27,  90 => 25,  88 => 24,  85 => 23,  74 => 19,  72 => 18,  71 => 17,  70 => 16,  66 => 15,  61 => 13,  58 => 12,  56 => 11,  55 => 10,  54 => 9,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_static.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>{{ 'template.store_template_bundle.blog.post.list.blog_posts'|trans }}</h1>*/
/*     <div class="grid">*/
/*         {% for blog_post in blog_posts %}*/
/*             <div class="col-1-2">*/
/*                 <div class="blog-post blog-post-mini">*/
/*                     <h2><a href="{{ url("store_blog_post_view", {*/
/*                             'id': blog_post.id,*/
/*                             'slug': blog_post.path*/
/*                         }) }}">*/
/*                             {{ blog_post.title }}*/
/*                         </a></h2>*/
/*                     {{ blog_post.content|striptags|raw|truncate(100) }}*/
/*                     <a href="{{ url("store_blog_post_view", {*/
/*                         'id': blog_post.id,*/
/*                         'slug': blog_post.path*/
/*                     }) }}">{{ "template.store_template_bundle.blog.post.list.read_more"|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         <p>*/
/*             {% if number_of_pages > current_page %}*/
/*                 <a href="{{ url("store_blog_view", {"page": current_page+1}) }}" class="button button-secondary" style="float:right;">{{ "template.store_template_bundle.blog.post.list.next_posts"|trans }} <i class="fa fa-caret-right"></i></a>*/
/*             {% endif %}*/
/*             {% if current_page > 1 %}*/
/*             <a href="{{ url("store_blog_view", {"page": current_page-1}) }}" class="button button-secondary"><i class="fa fa-caret-left"></i> {{ "template.store_template_bundle.blog.post.list.previous_posts"|trans }}</a>*/
/*             {% endif %}*/
/*         </p>*/
/*     </div>*/
/* */
/*     {{ elcodi_hook("store.blog_posts_list_bottom", {*/
/*         'blog_posts': blog_posts,*/
/*         'current_page': current_page,*/
/*         'number_of_pages': number_of_pages,*/
/*     }) }}*/
/* */
/* {% endblock content %}*/
/* */
