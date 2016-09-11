<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f1c846e9d6ff9532fc340fda5ca972c833cf5dc5c6b9d7df84f721f19e72ec22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90a8c2688340e555bfe781fbf55fab3de457f72188269595560a60898650a031 = $this->env->getExtension("native_profiler");
        $__internal_90a8c2688340e555bfe781fbf55fab3de457f72188269595560a60898650a031->enter($__internal_90a8c2688340e555bfe781fbf55fab3de457f72188269595560a60898650a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_90a8c2688340e555bfe781fbf55fab3de457f72188269595560a60898650a031->leave($__internal_90a8c2688340e555bfe781fbf55fab3de457f72188269595560a60898650a031_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e6d85263f3122a8068c38503f5a50b3ecf7c625c258876b4fb6f2cd981d3c3d = $this->env->getExtension("native_profiler");
        $__internal_9e6d85263f3122a8068c38503f5a50b3ecf7c625c258876b4fb6f2cd981d3c3d->enter($__internal_9e6d85263f3122a8068c38503f5a50b3ecf7c625c258876b4fb6f2cd981d3c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e6d85263f3122a8068c38503f5a50b3ecf7c625c258876b4fb6f2cd981d3c3d->leave($__internal_9e6d85263f3122a8068c38503f5a50b3ecf7c625c258876b4fb6f2cd981d3c3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
