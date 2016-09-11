<?php

/* StoreTemplateBundle:Modules:_address-item.html.twig */
class __TwigTemplate_766bdddbba049988a7fd1133f91402af23292e71189c9f9f85c6ae91f4563f06 extends Twig_Template
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
        $__internal_cc56a756b34d5ba7e9bfa636e964fccbe389f13151d55c8006be6c1467c7704e = $this->env->getExtension("native_profiler");
        $__internal_cc56a756b34d5ba7e9bfa636e964fccbe389f13151d55c8006be6c1467c7704e->enter($__internal_cc56a756b34d5ba7e9bfa636e964fccbe389f13151d55c8006be6c1467c7704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_address-item.html.twig"));

        // line 1
        echo "<dl class=\"address-item\" data-test=\"address-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\">
    <dt class=\"address-item-selection\"></dt>
    <dd class=\"address-item-selection\">
        <div class=\"address-item-selection-item\">
            <div class=\"switch\">
                <input id=\"billing-";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\"
                       type=\"radio\"
                       name=\"billing\"
                       value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\"
                        ";
        // line 10
        if ((($this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "billingAddress", array()), "id", array())) || ((null === $this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "billingAddress", array()), "id", array())) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0", array()) == 0)))) {
            echo " checked=\"checked\"";
        }
        // line 11
        echo "                        >
                <label for=\"billing-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\"></label>
            </div>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.billing"), "html", null, true);
        echo "
        </div>
        <div class=\"address-item-selection-item\">
            <div class=\"switch\">
                <input id=\"delivery-";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\"
                       type=\"radio\"
                       name=\"delivery\"
                       value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\"
                        ";
        // line 22
        if ((($this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "deliveryAddress", array()), "id", array())) || ((null === $this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "deliveryAddress", array()), "id", array())) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0", array()) == 0)))) {
            echo " checked=\"checked\"";
        }
        // line 23
        echo "                        >
                <label for=\"delivery-";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\"></label>
            </div>
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.delivery"), "html", null, true);
        echo "
        </div>
    </dd>
    <dt>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.address_name"), "html", null, true);
        echo "</dt>
    <dd><strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "name", array()), "html", null, true);
        echo "</strong></dd>
    <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.fullname"), "html", null, true);
        echo "</dt>
    <dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "recipientName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "recipientSurname", array()), "html", null, true);
        echo "</dd>
    <dt>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.address"), "html", null, true);
        echo "</dt>
    <dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "address", array()), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "address_more", array()), "html", null, true);
        echo "</dd>
    <dt>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.phone_and_mobile"), "html", null, true);
        echo "</dt>
    <dd>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "phone", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "mobile", array()), "html", null, true);
        echo "</dd>
    <dt>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.address"), "html", null, true);
        echo "</dt>
    <dd>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "fullAddress", array()), "html", null, true);
        echo "</dd>
    <dt>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.postal_code"), "html", null, true);
        echo "</dt>
    <dd>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "postalCode", array()), "html", null, true);
        echo "</dd>
    <dt>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.comment"), "html", null, true);
        echo "</dt>
    <dd>";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["address"]) ? $context["address"] : null), "comments", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["address"]) ? $context["address"] : null), "comments", array()), "-")) : ("-")), "html", null, true);
        echo "</dd>
    <dt class=\"address-item-actions\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.actions"), "html", null, true);
        echo "</dt>
    <dd class=\"address-item-actions\">
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_address_edit", array("id" => $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "source" => (isset($context["source"]) ? $context["source"] : null))), "html", null, true);
        echo "\" class=\"button button-primary\" data-test=\"address-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "-edit\"><i
                    class=\"fa fa-pencil\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.edit"), "html", null, true);
        echo "
        </a>
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_address_delete", array("id" => $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "source" => (isset($context["source"]) ? $context["source"] : null))), "html", null, true);
        echo "\" class=\"button button-ko\" data-test=\"address-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "-remove\"><i
                    class=\"fa fa-trash-o\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.item.remove"), "html", null, true);
        echo "
        </a>
    </dd>
</dl>
";
        
        $__internal_cc56a756b34d5ba7e9bfa636e964fccbe389f13151d55c8006be6c1467c7704e->leave($__internal_cc56a756b34d5ba7e9bfa636e964fccbe389f13151d55c8006be6c1467c7704e_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_address-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 49,  166 => 48,  161 => 46,  155 => 45,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  120 => 36,  116 => 35,  110 => 34,  106 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  82 => 26,  77 => 24,  74 => 23,  70 => 22,  66 => 21,  60 => 18,  53 => 14,  48 => 12,  45 => 11,  41 => 10,  37 => 9,  31 => 6,  22 => 1,);
    }
}
/* <dl class="address-item" data-test="address-{{ address.id }}">*/
/*     <dt class="address-item-selection"></dt>*/
/*     <dd class="address-item-selection">*/
/*         <div class="address-item-selection-item">*/
/*             <div class="switch">*/
/*                 <input id="billing-{{ address.id }}"*/
/*                        type="radio"*/
/*                        name="billing"*/
/*                        value="{{ address.id }}"*/
/*                         {% if address.id == cart.billingAddress.id or ( cart.billingAddress.id is null and loop.index0 == 0 ) %} checked="checked"{% endif %}*/
/*                         >*/
/*                 <label for="billing-{{ address.id }}"></label>*/
/*             </div>*/
/*             {{ 'template.store_template_bundle.address.item.billing'|trans }}*/
/*         </div>*/
/*         <div class="address-item-selection-item">*/
/*             <div class="switch">*/
/*                 <input id="delivery-{{ address.id }}"*/
/*                        type="radio"*/
/*                        name="delivery"*/
/*                        value="{{ address.id }}"*/
/*                         {% if address.id == cart.deliveryAddress.id or ( cart.deliveryAddress.id is null and loop.index0 == 0) %} checked="checked"{% endif %}*/
/*                         >*/
/*                 <label for="delivery-{{ address.id }}"></label>*/
/*             </div>*/
/*             {{ 'template.store_template_bundle.address.item.delivery'|trans }}*/
/*         </div>*/
/*     </dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.address_name'|trans }}</dt>*/
/*     <dd><strong>{{ address.name }}</strong></dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.fullname'|trans }}</dt>*/
/*     <dd>{{ address.recipientName }} {{ address.recipientSurname }}</dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.address'|trans }}</dt>*/
/*     <dd>{{ address.address }}<br/>{{ address.address_more }}</dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.phone_and_mobile'|trans }}</dt>*/
/*     <dd>{{ address.phone }} / {{ address.mobile }}</dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.address'|trans }}</dt>*/
/*     <dd>{{ address.fullAddress }}</dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.postal_code'|trans }}</dt>*/
/*     <dd>{{ address.postalCode }}</dd>*/
/*     <dt>{{ 'template.store_template_bundle.address.item.comment'|trans }}</dt>*/
/*     <dd>{{ address.comments|default('-') }}</dd>*/
/*     <dt class="address-item-actions">{{ 'template.store_template_bundle.address.item.actions'|trans }}</dt>*/
/*     <dd class="address-item-actions">*/
/*         <a href="{{ url('store_address_edit',{id:address.id,source:source}) }}" class="button button-primary" data-test="address-{{ address.id }}-edit"><i*/
/*                     class="fa fa-pencil"></i> {{ 'template.store_template_bundle.address.item.edit'|trans }}*/
/*         </a>*/
/*         <a href="{{ url('store_address_delete',{id:address.id,source:source}) }}" class="button button-ko" data-test="address-{{ address.id }}-remove"><i*/
/*                     class="fa fa-trash-o"></i> {{ 'template.store_template_bundle.address.item.remove'|trans }}*/
/*         </a>*/
/*     </dd>*/
/* </dl>*/
/* */
