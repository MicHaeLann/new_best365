<?php

/* StoreOverrideBundle:Exception:error.html.twig */
class __TwigTemplate_f440b8caad8efc8351ced2092d8cd5636aba962937f47f061ebde33465c08937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminCore/layouts/center_box.html.twig", "StoreOverrideBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'center_width' => array($this, 'block_center_width'),
            'center_height' => array($this, 'block_center_height'),
            'title_container' => array($this, 'block_title_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AdminCore/layouts/center_box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adcfc50ac091f103143dac52cc683f8de30552c91270fd20229fed149ed07fd9 = $this->env->getExtension("native_profiler");
        $__internal_adcfc50ac091f103143dac52cc683f8de30552c91270fd20229fed149ed07fd9->enter($__internal_adcfc50ac091f103143dac52cc683f8de30552c91270fd20229fed149ed07fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreOverrideBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adcfc50ac091f103143dac52cc683f8de30552c91270fd20229fed149ed07fd9->leave($__internal_adcfc50ac091f103143dac52cc683f8de30552c91270fd20229fed149ed07fd9_prof);

    }

    // line 3
    public function block_center_width($context, array $blocks = array())
    {
        $__internal_88350a88d5beb7444958009770518bf411c32aea5a6ea9d1b1aeb7f38b3d5b43 = $this->env->getExtension("native_profiler");
        $__internal_88350a88d5beb7444958009770518bf411c32aea5a6ea9d1b1aeb7f38b3d5b43->enter($__internal_88350a88d5beb7444958009770518bf411c32aea5a6ea9d1b1aeb7f38b3d5b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_width"));

        echo "600";
        
        $__internal_88350a88d5beb7444958009770518bf411c32aea5a6ea9d1b1aeb7f38b3d5b43->leave($__internal_88350a88d5beb7444958009770518bf411c32aea5a6ea9d1b1aeb7f38b3d5b43_prof);

    }

    // line 4
    public function block_center_height($context, array $blocks = array())
    {
        $__internal_00771886c844f6833b1b39803dd1901aaa398c2163abf8ee3d9f00da0e8de493 = $this->env->getExtension("native_profiler");
        $__internal_00771886c844f6833b1b39803dd1901aaa398c2163abf8ee3d9f00da0e8de493->enter($__internal_00771886c844f6833b1b39803dd1901aaa398c2163abf8ee3d9f00da0e8de493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_height"));

        echo "600";
        
        $__internal_00771886c844f6833b1b39803dd1901aaa398c2163abf8ee3d9f00da0e8de493->leave($__internal_00771886c844f6833b1b39803dd1901aaa398c2163abf8ee3d9f00da0e8de493_prof);

    }

    // line 6
    public function block_title_container($context, array $blocks = array())
    {
        $__internal_244714bd84cf0d1de344d54ffc9a6a4dc58915096434af64a882f3ccb2141ddf = $this->env->getExtension("native_profiler");
        $__internal_244714bd84cf0d1de344d54ffc9a6a4dc58915096434af64a882f3ccb2141ddf->enter($__internal_244714bd84cf0d1de344d54ffc9a6a4dc58915096434af64a882f3ccb2141ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_container"));

        echo "Unknown error";
        
        $__internal_244714bd84cf0d1de344d54ffc9a6a4dc58915096434af64a882f3ccb2141ddf->leave($__internal_244714bd84cf0d1de344d54ffc9a6a4dc58915096434af64a882f3ccb2141ddf_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_2958f6edf38dab70e301e2f32a96ec903cc425c1db298412dd5fb170d3e2df03 = $this->env->getExtension("native_profiler");
        $__internal_2958f6edf38dab70e301e2f32a96ec903cc425c1db298412dd5fb170d3e2df03->enter($__internal_2958f6edf38dab70e301e2f32a96ec903cc425c1db298412dd5fb170d3e2df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <h1>Oops! A wild error appeared!</h1>
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/images/uh-si.png"), "html", null, true);
        echo "\" width=\"250\" class=\"fl-r ml-m\" />
    <p>
        Something is broken. Please let us know what you were doing when this error occurred.
        We will fix it as soon as possible. Sorry for any inconvenience caused.
    </p>
";
        
        $__internal_2958f6edf38dab70e301e2f32a96ec903cc425c1db298412dd5fb170d3e2df03->leave($__internal_2958f6edf38dab70e301e2f32a96ec903cc425c1db298412dd5fb170d3e2df03_prof);

    }

    public function getTemplateName()
    {
        return "StoreOverrideBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  79 => 9,  73 => 8,  61 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '@AdminCore/layouts/center_box.html.twig' %}*/
/* */
/* {% block center_width "600" %}*/
/* {% block center_height "600" %}*/
/* */
/* {% block title_container 'Unknown error' %}*/
/* */
/* {% block content %}*/
/*     <h1>Oops! A wild error appeared!</h1>*/
/*     <img src="{{ asset('bundles/admincore/images/uh-si.png') }}" width="250" class="fl-r ml-m" />*/
/*     <p>*/
/*         Something is broken. Please let us know what you were doing when this error occurred.*/
/*         We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/*     </p>*/
/* {% endblock content %}*/
/* */
