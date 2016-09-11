<?php

/* AdminCoreBundle::footscript.html.twig */
class __TwigTemplate_cbbe39b2c5a7119f9a1e0598500f155c5ef78f544076624d8108142d7d78dc7b extends Twig_Template
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
        $__internal_08804e85c2e39f714ac7adfc610c609aafce716e233c7672c48b8de44b3ffd07 = $this->env->getExtension("native_profiler");
        $__internal_08804e85c2e39f714ac7adfc610c609aafce716e233c7672c48b8de44b3ffd07->enter($__internal_08804e85c2e39f714ac7adfc610c609aafce716e233c7672c48b8de44b3ffd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle::footscript.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    var oGlobalSettings = {
        sPathJs: \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/js/"), "html", null, true);
        echo "\",
        sPathJsModules: \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/js/modules/"), "html", null, true);
        echo "\",
        sPathJsTwig: \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/twig/"), "html", null, true);
        echo "\",
        sPathJsComponents: \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/components/"), "html", null, true);
        echo "\",
        sPathJsCore: \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/components/frontendcore-js/"), "html", null, true);
        echo "\",
        sPathJsLibs: \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/components/frontendcore-js/libs/"), "html", null, true);
        echo "\",
        sPathRoot: \"http://bamboo.dev/app_dev.php/\",
        sPathCss: \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/css/"), "html", null, true);
        echo "\",
        bCss: false,
        bTrackModules: true,
        sHash:  '100',
        sDevice: 'desktop'
    }
</script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/components/twig.js/twig.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/components/frontendcore-js/core.js"), "html", null, true);
        echo "\"></script>
";
        // line 19
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("admin.footer_script"));
        echo "
";
        
        $__internal_08804e85c2e39f714ac7adfc610c609aafce716e233c7672c48b8de44b3ffd07->leave($__internal_08804e85c2e39f714ac7adfc610c609aafce716e233c7672c48b8de44b3ffd07_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle::footscript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  65 => 18,  61 => 17,  51 => 10,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     var oGlobalSettings = {*/
/*         sPathJs: "{{ asset('bundles/admincore/js/') }}",*/
/*         sPathJsModules: "{{ asset('bundles/admincore/js/modules/') }}",*/
/*         sPathJsTwig: "{{ asset('bundles/admincore/twig/') }}",*/
/*         sPathJsComponents: "{{ asset('bundles/admincore/components/') }}",*/
/*         sPathJsCore: "{{ asset('bundles/admincore/components/frontendcore-js/') }}",*/
/*         sPathJsLibs: "{{ asset('bundles/admincore/components/frontendcore-js/libs/') }}",*/
/*         sPathRoot: "http://bamboo.dev/app_dev.php/",*/
/*         sPathCss: "{{ asset('bundles/admincore/css/') }}",*/
/*         bCss: false,*/
/*         bTrackModules: true,*/
/*         sHash:  '100',*/
/*         sDevice: 'desktop'*/
/*     }*/
/* </script>*/
/* <script type="text/javascript" src="{{ asset('bundles/admincore/components/twig.js/twig.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/admincore/components/frontendcore-js/core.js') }}"></script>*/
/* {{ elcodi_hook("admin.footer_script") }}*/
/* */
