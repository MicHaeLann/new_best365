<?php

/* AdminCoreBundle::base.html.twig */
class __TwigTemplate_d73f6c4a17c2f352908218b540c0b010b6b10c0cc8e63bb1fc89275ed1a2e181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'doctype_and_html' => array($this, 'block_doctype_and_html'),
            'title' => array($this, 'block_title'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e147d96e124e2206c33ac27f444f06db0615628b8c151a1334cc62ea6e61338 = $this->env->getExtension("native_profiler");
        $__internal_9e147d96e124e2206c33ac27f444f06db0615628b8c151a1334cc62ea6e61338->enter($__internal_9e147d96e124e2206c33ac27f444f06db0615628b8c151a1334cc62ea6e61338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle::base.html.twig"));

        // line 1
        $this->displayBlock('doctype_and_html', $context, $blocks);
        // line 6
        echo "    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script type=\"text/javascript\">document.documentElement.className = document.documentElement.className.replace(/\\bno-js\\b/,'js');</script>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\" type=\"image/x-icon\">
        ";
        // line 14
        $this->displayBlock('head_style', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 16
        echo "    </head>
    <body data-fc-modules=\"polyfills\" class=\"";
        // line 17
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        <!--[if lt IE 8]><!-- should warn for outdated browser --><!--[endif]-->
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('foot_script', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_9e147d96e124e2206c33ac27f444f06db0615628b8c151a1334cc62ea6e61338->leave($__internal_9e147d96e124e2206c33ac27f444f06db0615628b8c151a1334cc62ea6e61338_prof);

    }

    // line 1
    public function block_doctype_and_html($context, array $blocks = array())
    {
        $__internal_c520884e2fc131e81e78a18e9de91ca6fdc9d2f2d0464b55c8b99aede0d1b18a = $this->env->getExtension("native_profiler");
        $__internal_c520884e2fc131e81e78a18e9de91ca6fdc9d2f2d0464b55c8b99aede0d1b18a->enter($__internal_c520884e2fc131e81e78a18e9de91ca6fdc9d2f2d0464b55c8b99aede0d1b18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "doctype_and_html"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\">
";
        
        $__internal_c520884e2fc131e81e78a18e9de91ca6fdc9d2f2d0464b55c8b99aede0d1b18a->leave($__internal_c520884e2fc131e81e78a18e9de91ca6fdc9d2f2d0464b55c8b99aede0d1b18a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ba9826954dfedc24021e54b9d0e1dbfb98a64b63dd30b16f04ad20ac15bdde2 = $this->env->getExtension("native_profiler");
        $__internal_9ba9826954dfedc24021e54b9d0e1dbfb98a64b63dd30b16f04ad20ac15bdde2->enter($__internal_9ba9826954dfedc24021e54b9d0e1dbfb98a64b63dd30b16f04ad20ac15bdde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.name"), "html", null, true);
        
        $__internal_9ba9826954dfedc24021e54b9d0e1dbfb98a64b63dd30b16f04ad20ac15bdde2->leave($__internal_9ba9826954dfedc24021e54b9d0e1dbfb98a64b63dd30b16f04ad20ac15bdde2_prof);

    }

    // line 10
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_2ffdda8186465d61c856f9ef3cb20ce07f6ec006684adf54e58b2123acb8cdef = $this->env->getExtension("native_profiler");
        $__internal_2ffdda8186465d61c856f9ef3cb20ce07f6ec006684adf54e58b2123acb8cdef->enter($__internal_2ffdda8186465d61c856f9ef3cb20ce07f6ec006684adf54e58b2123acb8cdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        echo "";
        
        $__internal_2ffdda8186465d61c856f9ef3cb20ce07f6ec006684adf54e58b2123acb8cdef->leave($__internal_2ffdda8186465d61c856f9ef3cb20ce07f6ec006684adf54e58b2123acb8cdef_prof);

    }

    // line 14
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_de6a85a42f0428100ec3d7dc822c36b6087f4bd65f7e76ae3846c06f3c64806d = $this->env->getExtension("native_profiler");
        $__internal_de6a85a42f0428100ec3d7dc822c36b6087f4bd65f7e76ae3846c06f3c64806d->enter($__internal_de6a85a42f0428100ec3d7dc822c36b6087f4bd65f7e76ae3846c06f3c64806d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        echo "";
        
        $__internal_de6a85a42f0428100ec3d7dc822c36b6087f4bd65f7e76ae3846c06f3c64806d->leave($__internal_de6a85a42f0428100ec3d7dc822c36b6087f4bd65f7e76ae3846c06f3c64806d_prof);

    }

    // line 15
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_7143a47106e7fbca1ac2097675602dacba28500310d21377bcc92ef72a979dc8 = $this->env->getExtension("native_profiler");
        $__internal_7143a47106e7fbca1ac2097675602dacba28500310d21377bcc92ef72a979dc8->enter($__internal_7143a47106e7fbca1ac2097675602dacba28500310d21377bcc92ef72a979dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        echo "";
        
        $__internal_7143a47106e7fbca1ac2097675602dacba28500310d21377bcc92ef72a979dc8->leave($__internal_7143a47106e7fbca1ac2097675602dacba28500310d21377bcc92ef72a979dc8_prof);

    }

    // line 17
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e05ecbf3a610d10a9316712220195b74d7b5ca5e1f2448cffd9091d690a768f9 = $this->env->getExtension("native_profiler");
        $__internal_e05ecbf3a610d10a9316712220195b74d7b5ca5e1f2448cffd9091d690a768f9->enter($__internal_e05ecbf3a610d10a9316712220195b74d7b5ca5e1f2448cffd9091d690a768f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "";
        
        $__internal_e05ecbf3a610d10a9316712220195b74d7b5ca5e1f2448cffd9091d690a768f9->leave($__internal_e05ecbf3a610d10a9316712220195b74d7b5ca5e1f2448cffd9091d690a768f9_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53e54f2c60c52e2725300fe8ea0b35198baf2240a9d56f79176014d97f42c7b = $this->env->getExtension("native_profiler");
        $__internal_e53e54f2c60c52e2725300fe8ea0b35198baf2240a9d56f79176014d97f42c7b->enter($__internal_e53e54f2c60c52e2725300fe8ea0b35198baf2240a9d56f79176014d97f42c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_e53e54f2c60c52e2725300fe8ea0b35198baf2240a9d56f79176014d97f42c7b->leave($__internal_e53e54f2c60c52e2725300fe8ea0b35198baf2240a9d56f79176014d97f42c7b_prof);

    }

    // line 20
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_59c6f21dcdbbbd20987d55bf82fb7f065b59d3906231597f75ff7b27d13331ca = $this->env->getExtension("native_profiler");
        $__internal_59c6f21dcdbbbd20987d55bf82fb7f065b59d3906231597f75ff7b27d13331ca->enter($__internal_59c6f21dcdbbbd20987d55bf82fb7f065b59d3906231597f75ff7b27d13331ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        echo "";
        
        $__internal_59c6f21dcdbbbd20987d55bf82fb7f065b59d3906231597f75ff7b27d13331ca->leave($__internal_59c6f21dcdbbbd20987d55bf82fb7f065b59d3906231597f75ff7b27d13331ca_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 20,  159 => 19,  147 => 17,  135 => 15,  123 => 14,  111 => 10,  97 => 9,  88 => 4,  84 => 2,  78 => 1,  69 => 21,  66 => 20,  64 => 19,  59 => 17,  56 => 16,  53 => 15,  51 => 14,  47 => 13,  43 => 11,  41 => 10,  37 => 9,  32 => 6,  30 => 1,);
    }
}
/* {% block doctype_and_html %}*/
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale }}">*/
/* {% endblock doctype_and_html %}*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>{% block title %}{{ store.name }} - {{ 'admin.name'|trans }}{% endblock %}</title>*/
/*         {% block meta_tags '' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <script type="text/javascript">document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');</script>*/
/*         <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">*/
/*         {% block head_style '' %}*/
/*         {% block head_script '' %}*/
/*     </head>*/
/*     <body data-fc-modules="polyfills" class="{% block body_class '' %}">*/
/*         <!--[if lt IE 8]><!-- should warn for outdated browser --><!--[endif]-->*/
/*         {% block body '' %}*/
/*         {% block foot_script '' %}*/
/*     </body>*/
/* </html>*/
/* */
