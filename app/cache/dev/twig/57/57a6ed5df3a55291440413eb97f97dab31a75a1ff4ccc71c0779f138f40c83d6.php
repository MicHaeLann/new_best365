<?php

/* StoreTemplateBundle:Layout:_static.html.twig */
class __TwigTemplate_7179f14969fe759a6b25d34f1588c37a6d02a55f1ede7bb879c036d7a18a7990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Layout:_static.html.twig", 1);
        $this->blocks = array(
            'meta_tags' => array($this, 'block_meta_tags'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'prefooter' => array($this, 'block_prefooter'),
            'footer' => array($this, 'block_footer'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_711e602a78113678a492a35031c00257fbc838ee917b11121dcc4f61c4f51aa4 = $this->env->getExtension("native_profiler");
        $__internal_711e602a78113678a492a35031c00257fbc838ee917b11121dcc4f61c4f51aa4->enter($__internal_711e602a78113678a492a35031c00257fbc838ee917b11121dcc4f61c4f51aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Layout:_static.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711e602a78113678a492a35031c00257fbc838ee917b11121dcc4f61c4f51aa4->leave($__internal_711e602a78113678a492a35031c00257fbc838ee917b11121dcc4f61c4f51aa4_prof);

    }

    // line 3
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_abfe39f9066b222f79acba96d23aad789f11277068f9a6db26484db202a1c5db = $this->env->getExtension("native_profiler");
        $__internal_abfe39f9066b222f79acba96d23aad789f11277068f9a6db26484db202a1c5db->enter($__internal_abfe39f9066b222f79acba96d23aad789f11277068f9a6db26484db202a1c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 4
        echo "    <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadescription", array()), "html", null, true);
        echo "\">
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metakeywords", array()))) {
            // line 6
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metakeywords", array()), "html", null, true);
            echo "\">
    ";
        }
        
        $__internal_abfe39f9066b222f79acba96d23aad789f11277068f9a6db26484db202a1c5db->leave($__internal_abfe39f9066b222f79acba96d23aad789f11277068f9a6db26484db202a1c5db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0e1630239b261ba72d90f306ee416afad5d18b4838effd569454b13cabedcb = $this->env->getExtension("native_profiler");
        $__internal_8a0e1630239b261ba72d90f306ee416afad5d18b4838effd569454b13cabedcb->enter($__internal_8a0e1630239b261ba72d90f306ee416afad5d18b4838effd569454b13cabedcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"pages\">
    ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 40
        echo "</div>
";
        
        $__internal_8a0e1630239b261ba72d90f306ee416afad5d18b4838effd569454b13cabedcb->leave($__internal_8a0e1630239b261ba72d90f306ee416afad5d18b4838effd569454b13cabedcb_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_6d0ffba5af82298dfb03f356ba692ebb7ab0b5b568d5b624c83e9bf592de03d3 = $this->env->getExtension("native_profiler");
        $__internal_6d0ffba5af82298dfb03f356ba692ebb7ab0b5b568d5b624c83e9bf592de03d3->enter($__internal_6d0ffba5af82298dfb03f356ba692ebb7ab0b5b568d5b624c83e9bf592de03d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "        ";
        $this->loadTemplate("@StoreTemplate/Modules/_header.html.twig", "StoreTemplateBundle:Layout:_static.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        
        $__internal_6d0ffba5af82298dfb03f356ba692ebb7ab0b5b568d5b624c83e9bf592de03d3->leave($__internal_6d0ffba5af82298dfb03f356ba692ebb7ab0b5b568d5b624c83e9bf592de03d3_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_11765c3342897b49a8b0747852418b48e24d9ce06f39b4eb55e9a120b84ba0c9 = $this->env->getExtension("native_profiler");
        $__internal_11765c3342897b49a8b0747852418b48e24d9ce06f39b4eb55e9a120b84ba0c9->enter($__internal_11765c3342897b49a8b0747852418b48e24d9ce06f39b4eb55e9a120b84ba0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('messages', $context, $blocks);
        // line 21
        echo "
        <div class=\"grid grid-pad\">
            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "        </div>
        ";
        // line 32
        $this->displayBlock('prefooter', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "
    ";
        
        $__internal_11765c3342897b49a8b0747852418b48e24d9ce06f39b4eb55e9a120b84ba0c9->leave($__internal_11765c3342897b49a8b0747852418b48e24d9ce06f39b4eb55e9a120b84ba0c9_prof);

    }

    // line 18
    public function block_messages($context, array $blocks = array())
    {
        $__internal_630d6f3704c8570237c6bdf301d6f3a42014401ebdccb8883ac993db40c7ca82 = $this->env->getExtension("native_profiler");
        $__internal_630d6f3704c8570237c6bdf301d6f3a42014401ebdccb8883ac993db40c7ca82->enter($__internal_630d6f3704c8570237c6bdf301d6f3a42014401ebdccb8883ac993db40c7ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 19
        echo "            ";
        $this->loadTemplate("@StoreTemplate/Modules/_message-list.html.twig", "StoreTemplateBundle:Layout:_static.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_630d6f3704c8570237c6bdf301d6f3a42014401ebdccb8883ac993db40c7ca82->leave($__internal_630d6f3704c8570237c6bdf301d6f3a42014401ebdccb8883ac993db40c7ca82_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_54fe4d6e1c16dace897e0178a63e63fedc5e63984346d8f34d6add458ed3af74 = $this->env->getExtension("native_profiler");
        $__internal_54fe4d6e1c16dace897e0178a63e63fedc5e63984346d8f34d6add458ed3af74->enter($__internal_54fe4d6e1c16dace897e0178a63e63fedc5e63984346d8f34d6add458ed3af74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "                <article class=\"blog-post\">
                    <h1>";
        // line 25
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                    <div class=\"blog-post-content\">
                        ";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                    </div>
                </article>
            ";
        
        $__internal_54fe4d6e1c16dace897e0178a63e63fedc5e63984346d8f34d6add458ed3af74->leave($__internal_54fe4d6e1c16dace897e0178a63e63fedc5e63984346d8f34d6add458ed3af74_prof);

    }

    // line 32
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_da9a47d1ab1ae0edd76c745bb0ca566db55cece5fc7c173194e25f2ea4cb3cea = $this->env->getExtension("native_profiler");
        $__internal_da9a47d1ab1ae0edd76c745bb0ca566db55cece5fc7c173194e25f2ea4cb3cea->enter($__internal_da9a47d1ab1ae0edd76c745bb0ca566db55cece5fc7c173194e25f2ea4cb3cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        
        $__internal_da9a47d1ab1ae0edd76c745bb0ca566db55cece5fc7c173194e25f2ea4cb3cea->leave($__internal_da9a47d1ab1ae0edd76c745bb0ca566db55cece5fc7c173194e25f2ea4cb3cea_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2a6faaca59ab8463fcbad3b9c27eded58c47f93202fc33e96133363e9498b4ac = $this->env->getExtension("native_profiler");
        $__internal_2a6faaca59ab8463fcbad3b9c27eded58c47f93202fc33e96133363e9498b4ac->enter($__internal_2a6faaca59ab8463fcbad3b9c27eded58c47f93202fc33e96133363e9498b4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 34
        echo "
            ";
        // line 35
        $this->loadTemplate("@StoreTemplate/Modules/_footer.html.twig", "StoreTemplateBundle:Layout:_static.html.twig", 35)->display($context);
        // line 36
        echo "
        ";
        
        $__internal_2a6faaca59ab8463fcbad3b9c27eded58c47f93202fc33e96133363e9498b4ac->leave($__internal_2a6faaca59ab8463fcbad3b9c27eded58c47f93202fc33e96133363e9498b4ac_prof);

    }

    // line 42
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0b3960540b1d69872ba7a4b12b61222fdede9ed1e71370b17034f1f61dd881 = $this->env->getExtension("native_profiler");
        $__internal_7c0b3960540b1d69872ba7a4b12b61222fdede9ed1e71370b17034f1f61dd881->enter($__internal_7c0b3960540b1d69872ba7a4b12b61222fdede9ed1e71370b17034f1f61dd881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        
        $__internal_7c0b3960540b1d69872ba7a4b12b61222fdede9ed1e71370b17034f1f61dd881->leave($__internal_7c0b3960540b1d69872ba7a4b12b61222fdede9ed1e71370b17034f1f61dd881_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Layout:_static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 42,  202 => 36,  200 => 35,  197 => 34,  191 => 33,  180 => 32,  169 => 27,  164 => 25,  161 => 24,  155 => 23,  148 => 20,  145 => 19,  139 => 18,  131 => 38,  128 => 33,  126 => 32,  123 => 31,  121 => 23,  117 => 21,  115 => 18,  112 => 17,  106 => 16,  99 => 14,  96 => 13,  90 => 12,  82 => 40,  80 => 16,  77 => 15,  75 => 12,  72 => 11,  66 => 10,  55 => 6,  53 => 5,  48 => 4,  42 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block meta_tags %}*/
/*     <meta name="description" content="{{ page.metadescription }}">*/
/*     {% if page.metakeywords is not empty %}*/
/*         <meta name="keywords" content="{{ page.metakeywords }}">*/
/*     {% endif %}*/
/* {% endblock meta_tags %}*/
/* */
/* {% block body %}*/
/* <div class="pages">*/
/*     {% block header %}*/
/*         {% include '@StoreTemplate/Modules/_header.html.twig' %}*/
/*     {% endblock header %}*/
/* */
/*     {% block container %}*/
/* */
/*         {% block messages %}*/
/*             {% include "@StoreTemplate/Modules/_message-list.html.twig" %}*/
/*         {% endblock messages %}*/
/* */
/*         <div class="grid grid-pad">*/
/*             {% block content %}*/
/*                 <article class="blog-post">*/
/*                     <h1>{{ block('title') }}</h1>*/
/*                     <div class="blog-post-content">*/
/*                         {{ page.content|raw }}*/
/*                     </div>*/
/*                 </article>*/
/*             {% endblock content %}*/
/*         </div>*/
/*         {% block prefooter %}{% endblock prefooter %}*/
/*         {%  block footer %}*/
/* */
/*             {% include '@StoreTemplate/Modules/_footer.html.twig' %}*/
/* */
/*         {%  endblock footer %}*/
/* */
/*     {% endblock container %}*/
/* </div>*/
/* {% endblock body %}*/
/* {% block title %}{{ page.title }}{% endblock title %}*/
/* */
