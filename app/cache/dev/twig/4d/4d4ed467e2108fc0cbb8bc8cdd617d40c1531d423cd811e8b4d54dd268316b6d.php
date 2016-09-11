<?php

/* AdminCouponBundle:Coupon:edit.html.twig */
class __TwigTemplate_3c5a062b064eae845ae7457116160d4bd5b6345ebf5e0b33e8b39525fa3b6694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCouponBundle:Coupon:edit.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1caa0f644ab0a8416280262e44dac650243cc4ee3df437e4c01922b07f5a7769 = $this->env->getExtension("native_profiler");
        $__internal_1caa0f644ab0a8416280262e44dac650243cc4ee3df437e4c01922b07f5a7769->enter($__internal_1caa0f644ab0a8416280262e44dac650243cc4ee3df437e4c01922b07f5a7769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCouponBundle:Coupon:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "coupon");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1caa0f644ab0a8416280262e44dac650243cc4ee3df437e4c01922b07f5a7769->leave($__internal_1caa0f644ab0a8416280262e44dac650243cc4ee3df437e4c01922b07f5a7769_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b99af409926f9f2915e4c7efebe75c76a7a1ac977a72334f3bcf01fa37c1a86b = $this->env->getExtension("native_profiler");
        $__internal_b99af409926f9f2915e4c7efebe75c76a7a1ac977a72334f3bcf01fa37c1a86b->enter($__internal_b99af409926f9f2915e4c7efebe75c76a7a1ac977a72334f3bcf01fa37c1a86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "
    ";
        // line 11
        $context["title"] = $this->env->getExtension('translator')->trans("admin.coupon.plural");
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "id", array())) {
            // line 14
            echo "        ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.coupon.edit", array("%code%" => $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "code", array())));
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.coupon.new");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCouponBundle:Coupon:edit.html.twig", 19)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 21
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_coupon_list")), 1 => array("name" =>         // line 22
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        
        $__internal_b99af409926f9f2915e4c7efebe75c76a7a1ac977a72334f3bcf01fa37c1a86b->leave($__internal_b99af409926f9f2915e4c7efebe75c76a7a1ac977a72334f3bcf01fa37c1a86b_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_308e352d7316ac15c30921a0fc6ecbc4b31424ba1521ae9e8362b50d1063a246 = $this->env->getExtension("native_profiler");
        $__internal_308e352d7316ac15c30921a0fc6ecbc4b31424ba1521ae9e8362b50d1063a246->enter($__internal_308e352d7316ac15c30921a0fc6ecbc4b31424ba1521ae9e8362b50d1063a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "id", array())) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_coupon_edit_component", array("id" => $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "id", array()))));
            echo "
    ";
        } else {
            // line 33
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_coupon_new_component"));
            echo "
    ";
        }
        // line 35
        echo "
";
        
        $__internal_308e352d7316ac15c30921a0fc6ecbc4b31424ba1521ae9e8362b50d1063a246->leave($__internal_308e352d7316ac15c30921a0fc6ecbc4b31424ba1521ae9e8362b50d1063a246_prof);

    }

    public function getTemplateName()
    {
        return "AdminCouponBundle:Coupon:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  95 => 33,  89 => 31,  87 => 30,  84 => 29,  78 => 28,  71 => 22,  70 => 21,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  52 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 9,  31 => 1,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'coupon',*/
/* } %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.coupon.plural'|trans %}*/
/* */
/*     {% if coupon.id %}*/
/*         {% set header = 'admin.coupon.edit'|trans({ '%code%': coupon.code }) %}*/
/*     {% else %}*/
/*         {% set header = 'admin.coupon.new'|trans %}*/
/*     {% endif %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: title, url: url('admin_coupon_list') },*/
/*             { name: header, active: true },*/
/*         ]*/
/*     } %}*/
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     {% if coupon.id %}*/
/*         {{ render(url('admin_coupon_edit_component', { id: coupon.id })) }}*/
/*     {% else %}*/
/*         {{ render(url('admin_coupon_new_component')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
/* */
