<?php

/* AdminCartBundle:Order:address.html.twig */
class __TwigTemplate_e189101dcd6e8f94cf1be7c8779a5cbae4c40811b6f8afbd9adbd249069e4dba extends Twig_Template
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
        $__internal_a19a6bba38994308f0a3a7e5f01b731452bb9d3cbe077312fb3635553eee4222 = $this->env->getExtension("native_profiler");
        $__internal_a19a6bba38994308f0a3a7e5f01b731452bb9d3cbe077312fb3635553eee4222->enter($__internal_a19a6bba38994308f0a3a7e5f01b731452bb9d3cbe077312fb3635553eee4222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:Order:address.html.twig"));

        // line 1
        echo "<div class=\"box-none mb-n\">
    <h4>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h4>
    <dl class=\"list\">
        <dt>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.address.full_name"), "html", null, true);
        echo "</dt>
        <dd>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "recipientName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "recipientSurname", array()), "html", null, true);
        echo "</dd>
        <dt>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.address.phone"), "html", null, true);
        echo "</dt>
        <dd> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "phone", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "mobile", array()), "html", null, true);
        echo "</dd>
        <dt>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.address.address"), "html", null, true);
        echo "</dt>
        <dd>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "address", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "addressMore", array()), "html", null, true);
        echo "</dd>
        <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.address.city"), "html", null, true);
        echo "</dt>
        <dd>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "city", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cityLocation"]) {
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, $context["cityLocation"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cityLocation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </dd>
        <dt>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.address.zipcode"), "html", null, true);
        echo "</dt>
        <dd>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "postalCode", array()), "html", null, true);
        echo "</dd>
        <dt>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ui.address.comment"), "html", null, true);
        echo "</dt>
        <dd>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addressInfo"]) ? $context["addressInfo"] : null), "comment", array()), "html", null, true);
        echo "</dd>
    </dl>
</div>
";
        
        $__internal_a19a6bba38994308f0a3a7e5f01b731452bb9d3cbe077312fb3635553eee4222->leave($__internal_a19a6bba38994308f0a3a7e5f01b731452bb9d3cbe077312fb3635553eee4222_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:Order:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  89 => 18,  85 => 17,  81 => 16,  78 => 15,  69 => 13,  65 => 12,  60 => 10,  54 => 9,  50 => 8,  44 => 7,  40 => 6,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <div class="box-none mb-n">*/
/*     <h4>{{ title }}</h4>*/
/*     <dl class="list">*/
/*         <dt>{{ 'ui.address.full_name'|trans }}</dt>*/
/*         <dd>{{ addressInfo.recipientName }} {{addressInfo.recipientSurname }}</dd>*/
/*         <dt>{{ 'ui.address.phone'|trans }}</dt>*/
/*         <dd> {{ addressInfo.phone }} / {{ addressInfo.mobile }}</dd>*/
/*         <dt>{{ 'ui.address.address'|trans }}</dt>*/
/*         <dd>{{ addressInfo.address }} {{addressInfo.addressMore }}</dd>*/
/*         <dt>{{ 'ui.address.city'|trans }}</dt>*/
/*         <dd>*/
/*         {% for cityLocation in addressInfo.city %}*/
/*             {{ cityLocation }}*/
/*         {% endfor %}*/
/*         </dd>*/
/*         <dt>{{ 'ui.address.zipcode'|trans }}</dt>*/
/*         <dd>{{ addressInfo.postalCode }}</dd>*/
/*         <dt>{{ 'ui.address.comment'|trans }}</dt>*/
/*         <dd>{{ addressInfo.comment }}</dd>*/
/*     </dl>*/
/* </div>*/
/* */
