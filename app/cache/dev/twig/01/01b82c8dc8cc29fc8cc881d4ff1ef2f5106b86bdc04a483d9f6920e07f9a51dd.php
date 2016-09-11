<?php

/* StoreTemplateBundle:Modules:_address-new.html.twig */
class __TwigTemplate_9877911a0f28bfe58b21da47f15e893f2569a6dcb220fbc51a9508fcf03540a8 extends Twig_Template
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
        $__internal_986a12fa32099b4a4b6f95f7651bdf448036d0da1928ed07657cc7a7d98ca7be = $this->env->getExtension("native_profiler");
        $__internal_986a12fa32099b4a4b6f95f7651bdf448036d0da1928ed07657cc7a7d98ca7be->enter($__internal_986a12fa32099b4a4b6f95f7651bdf448036d0da1928ed07657cc7a7d98ca7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_address-new.html.twig"));

        // line 1
        echo "<div class=\"form form-address\">
    ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 3
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 4
            echo "        <div class=\"message message-ko\">
            ";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        </div>
    ";
        }
        // line 8
        echo "    <div class=\"grid\">
        <div class=\"col-1-1\">
            <div class=\"form-row\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.name.example"))));
        echo "</div>
            <hr class=\"rule\" />
        </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-1-2 form-row\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recipientName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.recipient.example_name"))));
        echo "
        </div>
        <div class=\"col-1-2 form-row\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recipientSurname", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.recipient.example_surname"))));
        echo "
        </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-1-1 form-row\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.address.example"))));
        echo "
        </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-2-3 form-row\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "addressMore", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.address_more.example"))));
        echo "
        </div>
        <div class=\"col-1-3 form-row\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "postalcode", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.postalcode.example"))));
        echo "
        </div>
    </div>

    ";
        // line 36
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("location_selectors", array("locationId" => $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "city", array()))));
        echo "

    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'row');
        echo "
    <div class=\"grid\">
        <div class=\"col-1-2 form-row\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.phone.example"))));
        echo "
        </div>
        <div class=\"col-1-2 form-row\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.mobile.example"))));
        echo "
        </div>
    </div>
    <div class=\"grid\">
        <div class=\"col-1-1 form-row\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comments", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.comments.example"))));
        echo "
        </div>
    </div>
    <div class=\"form-row\">
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "send", array()), 'widget', array("attr" => array("class" => "button button-primary")));
        echo "
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("store_address_list");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.new.cancel"), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
        
        $__internal_986a12fa32099b4a4b6f95f7651bdf448036d0da1928ed07657cc7a7d98ca7be->leave($__internal_986a12fa32099b4a4b6f95f7651bdf448036d0da1928ed07657cc7a7d98ca7be_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_address-new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  124 => 54,  120 => 53,  113 => 49,  105 => 44,  99 => 41,  93 => 38,  88 => 36,  81 => 32,  75 => 29,  67 => 24,  59 => 19,  53 => 16,  44 => 10,  40 => 8,  34 => 5,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="form form-address">*/
/*     {{ form_start(form) }}*/
/*     {% if form_errors(form) %}*/
/*         <div class="message message-ko">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="grid">*/
/*         <div class="col-1-1">*/
/*             <div class="form-row">{{ form_row(form.name, { 'attr': {'placeholder':'template.store_template_bundle.address.new.name.example'|trans }} ) }}</div>*/
/*             <hr class="rule" />*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-2 form-row">*/
/*             {{ form_row(form.recipientName, { 'attr': {'placeholder':'template.store_template_bundle.address.new.recipient.example_name'|trans }}) }}*/
/*         </div>*/
/*         <div class="col-1-2 form-row">*/
/*             {{ form_row(form.recipientSurname, { 'attr': {'placeholder':'template.store_template_bundle.address.new.recipient.example_surname'|trans }}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-1 form-row">*/
/*             {{ form_row(form.address, { 'attr' : {'placeholder':'template.store_template_bundle.address.new.address.example'|trans }}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-2-3 form-row">*/
/*             {{ form_row(form.addressMore, { 'attr' : {'placeholder':'template.store_template_bundle.address.new.address_more.example'|trans }} ) }}*/
/*         </div>*/
/*         <div class="col-1-3 form-row">*/
/*             {{ form_row(form.postalcode, { 'attr' : {'placeholder':'template.store_template_bundle.address.new.postalcode.example'|trans }} ) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ render(url('location_selectors',{locationId:address.city})) }}*/
/* */
/*     {{ form_row(form.city) }}*/
/*     <div class="grid">*/
/*         <div class="col-1-2 form-row">*/
/*             {{ form_row(form.phone, { 'attr': {'placeholder':'template.store_template_bundle.address.new.phone.example'|trans }}) }}*/
/*         </div>*/
/*         <div class="col-1-2 form-row">*/
/*             {{ form_row(form.mobile, { 'attr': {'placeholder':'template.store_template_bundle.address.new.mobile.example'|trans }}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="grid">*/
/*         <div class="col-1-1 form-row">*/
/*             {{ form_row(form.comments, { 'attr' : {'placeholder': "template.store_template_bundle.address.new.comments.example"|trans }}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-row">*/
/*         {{ form_widget(form.send, { 'attr': {'class': 'button button-primary' } }) }}*/
/*         <a href="{{ url('store_address_list') }}" class="button">{{ "template.store_template_bundle.address.new.cancel"|trans }}</a>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
