<?php

/* ElcodiPinterestBundle::javascript_asynchronous.html.twig */
class __TwigTemplate_f8f36376f3cf96ffcc12bd5664966e27a661d294be28354f9d20f4f3879faa53 extends Twig_Template
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
        $__internal_438becded9946c9e63e546d91f116df224f5a4ca67d881b91987b3a6f09458fc = $this->env->getExtension("native_profiler");
        $__internal_438becded9946c9e63e546d91f116df224f5a4ca67d881b91987b3a6f09458fc->enter($__internal_438becded9946c9e63e546d91f116df224f5a4ca67d881b91987b3a6f09458fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiPinterestBundle::javascript_asynchronous.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    (function (d) {
        var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
        p.type = 'text/javascript';
        p.async = true;
        p.src = '//assets.pinterest.com/js/pinit.js';
        f.parentNode.insertBefore(p, f);
    }(document));
</script>
";
        
        $__internal_438becded9946c9e63e546d91f116df224f5a4ca67d881b91987b3a6f09458fc->leave($__internal_438becded9946c9e63e546d91f116df224f5a4ca67d881b91987b3a6f09458fc_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiPinterestBundle::javascript_asynchronous.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     (function (d) {*/
/*         var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');*/
/*         p.type = 'text/javascript';*/
/*         p.async = true;*/
/*         p.src = '//assets.pinterest.com/js/pinit.js';*/
/*         f.parentNode.insertBefore(p, f);*/
/*     }(document));*/
/* </script>*/
/* */
