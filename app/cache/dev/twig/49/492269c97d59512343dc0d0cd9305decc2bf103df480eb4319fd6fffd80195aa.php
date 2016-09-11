<?php

/* ElcodiDisqusBundle::javascript.html.twig */
class __TwigTemplate_2bc1a22f522025baccabf4943d084b49177208f6b103240de9910b949e9d223d extends Twig_Template
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
        $__internal_f332627cac555cc4d93c5a41c5a0a1268580e3d7bb46f627d057dc6abf5f10de = $this->env->getExtension("native_profiler");
        $__internal_f332627cac555cc4d93c5a41c5a0a1268580e3d7bb46f627d057dc6abf5f10de->enter($__internal_f332627cac555cc4d93c5a41c5a0a1268580e3d7bb46f627d057dc6abf5f10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiDisqusBundle::javascript.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
        echo "';
    var disqus_identifier = plugin.getFieldValue('disqus_identifier');
    var disqus_url = '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
        echo "';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
";
        
        $__internal_f332627cac555cc4d93c5a41c5a0a1268580e3d7bb46f627d057dc6abf5f10de->leave($__internal_f332627cac555cc4d93c5a41c5a0a1268580e3d7bb46f627d057dc6abf5f10de_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiDisqusBundle::javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * *//* */
/*     var disqus_shortname = '{{ store.name }}';*/
/*     var disqus_identifier = plugin.getFieldValue('disqus_identifier');*/
/*     var disqus_url = '{{ url(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}';*/
/* */
/*     /* * * DON'T EDIT BELOW THIS LINE * * *//* */
/*     (function() {*/
/*         var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;*/
/*         dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';*/
/*         (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);*/
/*     })();*/
/* </script>*/
/* <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>*/
/* */
