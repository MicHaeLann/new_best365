<?php

/* AdminCoreBundle::layout.html.twig */
class __TwigTemplate_5c8edd8922dc69cb5f19f83737215f74de635ba9b4c02543e0b1236b839b9f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::base.html.twig", "AdminCoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'body' => array($this, 'block_body'),
            'body_top' => array($this, 'block_body_top'),
            'body_top_hook' => array($this, 'block_body_top_hook'),
            'header_actions' => array($this, 'block_header_actions'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'body_down' => array($this, 'block_body_down'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e475e32acdfeec3243515b09fe4e4c7ae05a87baf9491d35e9f64989bef81376 = $this->env->getExtension("native_profiler");
        $__internal_e475e32acdfeec3243515b09fe4e4c7ae05a87baf9491d35e9f64989bef81376->enter($__internal_e475e32acdfeec3243515b09fe4e4c7ae05a87baf9491d35e9f64989bef81376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e475e32acdfeec3243515b09fe4e4c7ae05a87baf9491d35e9f64989bef81376->leave($__internal_e475e32acdfeec3243515b09fe4e4c7ae05a87baf9491d35e9f64989bef81376_prof);

    }

    // line 4
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_fe8a96f779ebdf208eb29cf03323936c6745d9740d0ad536a2bfe93c30347972 = $this->env->getExtension("native_profiler");
        $__internal_fe8a96f779ebdf208eb29cf03323936c6745d9740d0ad536a2bfe93c30347972->enter($__internal_fe8a96f779ebdf208eb29cf03323936c6745d9740d0ad536a2bfe93c30347972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 5
        echo "
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/css/main.css"), "html", null, true);
        echo "\" media=\"all\">
    <!--[if gte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/css/ie-new.css"), "html", null, true);
        echo "\" media=\"all\">
    <![endif]-->
    <!--[if lte IE 8]>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/js/ie-old.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/css/ie-old.css"), "html", null, true);
        echo "\" media=\"all\">
    <![endif]-->
    <script src=\"//code.jquery.com/jquery-1.11.2.min.js\"></script>

";
        
        $__internal_fe8a96f779ebdf208eb29cf03323936c6745d9740d0ad536a2bfe93c30347972->leave($__internal_fe8a96f779ebdf208eb29cf03323936c6745d9740d0ad536a2bfe93c30347972_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_205600dbfc3a84b202cd77ff584756da13bf2aaf3cecf8613f82c96be6ff4715 = $this->env->getExtension("native_profiler");
        $__internal_205600dbfc3a84b202cd77ff584756da13bf2aaf3cecf8613f82c96be6ff4715->enter($__internal_205600dbfc3a84b202cd77ff584756da13bf2aaf3cecf8613f82c96be6ff4715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        $this->displayBlock('body_top', $context, $blocks);
        // line 21
        echo "
    <header class=\"header-mobile mobile tablet\">
        <div class=\"header-mobile-container\">
            <nav class=\"header-mobile-buttons-left\">
                <a data-fc-modules=\"side-panel\" data-fc-clone=\"true\" href=\"#menu-mobile\" data-fc-width=\"50%\" class=\"icon-align-justify button button-icon topbar-main-menu\"></a>
            </nav>
            <a class=\"logo\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
        echo "</a>
            <nav class=\"header-mobile-buttons-right\">
                <a data-fc-modules=\"side-panel\" data-fc-clone=\"true\" data-fc-position=\"right\" data-fc-width=\"50%\" href=\"#sidebar-user-mobile\" class=\"icon-user button button-icon topbar-user-menu\"></a>
            </nav>
        </div>
    </header>
    <div class=\"grid\">
        <div class=\"col-10-12 push-right\">
            ";
        // line 35
        $this->displayBlock('body_top_hook', $context, $blocks);
        // line 38
        echo "            <header class=\"section-header\">
                <div class=\"buttons-group\">
                    ";
        // line 40
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("admin.header_actions", (isset($context["elcodi_context"]) ? $context["elcodi_context"] : null)));
        echo "
                    ";
        // line 41
        $this->displayBlock('header_actions', $context, $blocks);
        // line 42
        echo "                </div>
                ";
        // line 43
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 44
        echo "            </header>
            <div class=\"papa-air\">
                ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "            </div>
        </div>
        <aside class=\"col-2-12 sidebar\" data-test=\"admin-menu\">
            ";
        // line 50
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("admin_menu_side"), array());
        // line 51
        echo "        </aside>
    </div>
    ";
        // line 53
        $this->loadTemplate("AdminCoreBundle::Common/flashMessages.html.twig", "AdminCoreBundle::layout.html.twig", 53)->display($context);
        // line 54
        $this->displayBlock('body_down', $context, $blocks);
        
        $__internal_205600dbfc3a84b202cd77ff584756da13bf2aaf3cecf8613f82c96be6ff4715->leave($__internal_205600dbfc3a84b202cd77ff584756da13bf2aaf3cecf8613f82c96be6ff4715_prof);

    }

    // line 20
    public function block_body_top($context, array $blocks = array())
    {
        $__internal_c85b813307c2a475bab7e2263d62f33b60def2bc579f093ff18ec31b2a34c259 = $this->env->getExtension("native_profiler");
        $__internal_c85b813307c2a475bab7e2263d62f33b60def2bc579f093ff18ec31b2a34c259->enter($__internal_c85b813307c2a475bab7e2263d62f33b60def2bc579f093ff18ec31b2a34c259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_top"));

        echo "";
        
        $__internal_c85b813307c2a475bab7e2263d62f33b60def2bc579f093ff18ec31b2a34c259->leave($__internal_c85b813307c2a475bab7e2263d62f33b60def2bc579f093ff18ec31b2a34c259_prof);

    }

    // line 35
    public function block_body_top_hook($context, array $blocks = array())
    {
        $__internal_10b37919bb812a12826e705cc57da8bcbbb0aab70c2adc3c17f2df4075ed9a0a = $this->env->getExtension("native_profiler");
        $__internal_10b37919bb812a12826e705cc57da8bcbbb0aab70c2adc3c17f2df4075ed9a0a->enter($__internal_10b37919bb812a12826e705cc57da8bcbbb0aab70c2adc3c17f2df4075ed9a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_top_hook"));

        // line 36
        echo "            ";
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("admin.body_top"));
        echo "
            ";
        
        $__internal_10b37919bb812a12826e705cc57da8bcbbb0aab70c2adc3c17f2df4075ed9a0a->leave($__internal_10b37919bb812a12826e705cc57da8bcbbb0aab70c2adc3c17f2df4075ed9a0a_prof);

    }

    // line 41
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_ffe245f4c36f3f16921c38b0dc1490c4cea6cfc140f2103623cecfe906fe1300 = $this->env->getExtension("native_profiler");
        $__internal_ffe245f4c36f3f16921c38b0dc1490c4cea6cfc140f2103623cecfe906fe1300->enter($__internal_ffe245f4c36f3f16921c38b0dc1490c4cea6cfc140f2103623cecfe906fe1300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        echo "";
        
        $__internal_ffe245f4c36f3f16921c38b0dc1490c4cea6cfc140f2103623cecfe906fe1300->leave($__internal_ffe245f4c36f3f16921c38b0dc1490c4cea6cfc140f2103623cecfe906fe1300_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7e767edecea7ec60e838454af31e4a6f98abb956f5c1caff6241bf370427bcf0 = $this->env->getExtension("native_profiler");
        $__internal_7e767edecea7ec60e838454af31e4a6f98abb956f5c1caff6241bf370427bcf0->enter($__internal_7e767edecea7ec60e838454af31e4a6f98abb956f5c1caff6241bf370427bcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo "";
        
        $__internal_7e767edecea7ec60e838454af31e4a6f98abb956f5c1caff6241bf370427bcf0->leave($__internal_7e767edecea7ec60e838454af31e4a6f98abb956f5c1caff6241bf370427bcf0_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6fcc6b0485e50791775cc60a98e6ac9a12384910293d8ecc9b9bb52fed1a588 = $this->env->getExtension("native_profiler");
        $__internal_d6fcc6b0485e50791775cc60a98e6ac9a12384910293d8ecc9b9bb52fed1a588->enter($__internal_d6fcc6b0485e50791775cc60a98e6ac9a12384910293d8ecc9b9bb52fed1a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_d6fcc6b0485e50791775cc60a98e6ac9a12384910293d8ecc9b9bb52fed1a588->leave($__internal_d6fcc6b0485e50791775cc60a98e6ac9a12384910293d8ecc9b9bb52fed1a588_prof);

    }

    // line 54
    public function block_body_down($context, array $blocks = array())
    {
        $__internal_6dc1ac99410b2fa3bf05f5320feb5ef0c15c8b9e6b54340a486483e4880b95b6 = $this->env->getExtension("native_profiler");
        $__internal_6dc1ac99410b2fa3bf05f5320feb5ef0c15c8b9e6b54340a486483e4880b95b6->enter($__internal_6dc1ac99410b2fa3bf05f5320feb5ef0c15c8b9e6b54340a486483e4880b95b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_down"));

        echo "";
        
        $__internal_6dc1ac99410b2fa3bf05f5320feb5ef0c15c8b9e6b54340a486483e4880b95b6->leave($__internal_6dc1ac99410b2fa3bf05f5320feb5ef0c15c8b9e6b54340a486483e4880b95b6_prof);

    }

    // line 58
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_576b9bc3ac9bf70afd9cf5493373fe35cceb012e3d994d4046f318182aac1f54 = $this->env->getExtension("native_profiler");
        $__internal_576b9bc3ac9bf70afd9cf5493373fe35cceb012e3d994d4046f318182aac1f54->enter($__internal_576b9bc3ac9bf70afd9cf5493373fe35cceb012e3d994d4046f318182aac1f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        // line 59
        echo "
    ";
        // line 60
        $this->loadTemplate("AdminCoreBundle::footscript.html.twig", "AdminCoreBundle::layout.html.twig", 60)->display($context);
        // line 61
        echo "
";
        
        $__internal_576b9bc3ac9bf70afd9cf5493373fe35cceb012e3d994d4046f318182aac1f54->leave($__internal_576b9bc3ac9bf70afd9cf5493373fe35cceb012e3d994d4046f318182aac1f54_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 61,  235 => 60,  232 => 59,  226 => 58,  214 => 54,  202 => 46,  190 => 43,  178 => 41,  168 => 36,  162 => 35,  150 => 20,  143 => 54,  141 => 53,  137 => 51,  135 => 50,  130 => 47,  128 => 46,  124 => 44,  122 => 43,  119 => 42,  117 => 41,  113 => 40,  109 => 38,  107 => 35,  94 => 27,  86 => 21,  84 => 20,  78 => 19,  66 => 12,  62 => 11,  56 => 8,  51 => 6,  48 => 5,  42 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head_style %}*/
/* */
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/admincore/css/main.css') }}" media="all">*/
/*     <!--[if gte IE 9]>*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/admincore/css/ie-new.css') }}" media="all">*/
/*     <![endif]-->*/
/*     <!--[if lte IE 8]>*/
/*     <script src="{{ asset('bundles/admincore/js/ie-old.js') }}"></script>*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/admincore/css/ie-old.css') }}" media="all">*/
/*     <![endif]-->*/
/*     <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>*/
/* */
/* {% endblock head_style %}*/
/* */
/* */
/* {% block body %}*/
/* {% block body_top '' %}*/
/* */
/*     <header class="header-mobile mobile tablet">*/
/*         <div class="header-mobile-container">*/
/*             <nav class="header-mobile-buttons-left">*/
/*                 <a data-fc-modules="side-panel" data-fc-clone="true" href="#menu-mobile" data-fc-width="50%" class="icon-align-justify button button-icon topbar-main-menu"></a>*/
/*             </nav>*/
/*             <a class="logo" href="{{ url('admin_homepage') }}">{{ store.name }}</a>*/
/*             <nav class="header-mobile-buttons-right">*/
/*                 <a data-fc-modules="side-panel" data-fc-clone="true" data-fc-position="right" data-fc-width="50%" href="#sidebar-user-mobile" class="icon-user button button-icon topbar-user-menu"></a>*/
/*             </nav>*/
/*         </div>*/
/*     </header>*/
/*     <div class="grid">*/
/*         <div class="col-10-12 push-right">*/
/*             {% block body_top_hook %}*/
/*             {{ elcodi_hook("admin.body_top") }}*/
/*             {% endblock body_top_hook %}*/
/*             <header class="section-header">*/
/*                 <div class="buttons-group">*/
/*                     {{ elcodi_hook('admin.header_actions', elcodi_context) }}*/
/*                     {% block header_actions '' %}*/
/*                 </div>*/
/*                 {% block breadcrumb '' %}*/
/*             </header>*/
/*             <div class="papa-air">*/
/*                 {% block content '' %}*/
/*             </div>*/
/*         </div>*/
/*         <aside class="col-2-12 sidebar" data-test="admin-menu">*/
/*             {% render url('admin_menu_side') %}*/
/*         </aside>*/
/*     </div>*/
/*     {% include 'AdminCoreBundle::Common/flashMessages.html.twig' %}*/
/* {% block body_down '' %}*/
/* {% endblock body %}*/
/* */
/* */
/* {% block foot_script %}*/
/* */
/*     {% include 'AdminCoreBundle::footscript.html.twig' %}*/
/* */
/* {% endblock foot_script %}*/
/* */
