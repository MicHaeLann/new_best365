<?php

/* ElcodiFacebookBundle::javascript.html.twig */
class __TwigTemplate_974f72bc1f26c93114ba3f7769b740b9ef0464a45f15bc5396a5d638fad43e71 extends Twig_Template
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
        $__internal_827c42a31dd4d7b30309085bfd90d550d141f70984d6fd7bd9676b16894bc4c5 = $this->env->getExtension("native_profiler");
        $__internal_827c42a31dd4d7b30309085bfd90d550d141f70984d6fd7bd9676b16894bc4c5->enter($__internal_827c42a31dd4d7b30309085bfd90d550d141f70984d6fd7bd9676b16894bc4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiFacebookBundle::javascript.html.twig"));

        // line 1
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/ca_ES/sdk.js#xfbml=1&version=v2.0\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
";
        
        $__internal_827c42a31dd4d7b30309085bfd90d550d141f70984d6fd7bd9676b16894bc4c5->leave($__internal_827c42a31dd4d7b30309085bfd90d550d141f70984d6fd7bd9676b16894bc4c5_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiFacebookBundle::javascript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div id="fb-root"></div>*/
/* <script>(function(d, s, id) {*/
/*         var js, fjs = d.getElementsByTagName(s)[0];*/
/*         if (d.getElementById(id)) return;*/
/*         js = d.createElement(s); js.id = id;*/
/*         js.src = "//connect.facebook.net/ca_ES/sdk.js#xfbml=1&version=v2.0";*/
/*         fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
