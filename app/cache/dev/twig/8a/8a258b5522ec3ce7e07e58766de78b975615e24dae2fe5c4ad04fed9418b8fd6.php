<?php

/* AdminCartBundle:Order:edit.html.twig */
class __TwigTemplate_2088efb6f3ffc859d61240074745f18ba63bcfb722ae05317a650db325cdac66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::layout.html.twig", "AdminCartBundle:Order:edit.html.twig", 1);
        $this->blocks = array(
            'body_down' => array($this, 'block_body_down'),
            'header_actions' => array($this, 'block_header_actions'),
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
        $__internal_cd1520ca1c032c1e07f1d2a77d913e87474cef28beeacdece468282637dd64ea = $this->env->getExtension("native_profiler");
        $__internal_cd1520ca1c032c1e07f1d2a77d913e87474cef28beeacdece468282637dd64ea->enter($__internal_cd1520ca1c032c1e07f1d2a77d913e87474cef28beeacdece468282637dd64ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCartBundle:Order:edit.html.twig"));

        // line 4
        $context["elcodi_context"] = array("entity_type" => "order");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd1520ca1c032c1e07f1d2a77d913e87474cef28beeacdece468282637dd64ea->leave($__internal_cd1520ca1c032c1e07f1d2a77d913e87474cef28beeacdece468282637dd64ea_prof);

    }

    // line 8
    public function block_body_down($context, array $blocks = array())
    {
        $__internal_422c063ac365c5e9a46f974e0ccb84f22f0a3ef1e34b9c90fc543c12856f4ec5 = $this->env->getExtension("native_profiler");
        $__internal_422c063ac365c5e9a46f974e0ccb84f22f0a3ef1e34b9c90fc543c12856f4ec5->enter($__internal_422c063ac365c5e9a46f974e0ccb84f22f0a3ef1e34b9c90fc543c12856f4ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_down"));

        // line 9
        echo "    ";
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array())) {
            // line 10
            echo "        ";
            $context["author_token"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "token", array());
            // line 11
            echo "        ";
            $context["context"] = "admin";
            // line 12
            echo "        ";
            $context["source"] = ("order-" . $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()));
            // line 13
            echo "        <div id=\"box-populi\" class=\"boxpopuli-container\">
            <div class=\"boxpopuli-overflow\" data-fc-modules=\"boxpopuli\"
                 data-token=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["author_token"]) ? $context["author_token"] : null), "html", null, true);
            echo "\"
                 data-author-name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullname", array()), "html", null, true);
            echo "\"
                 data-author-email=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
            echo "\"
                 data-context=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["context"]) ? $context["context"] : null), "html", null, true);
            echo "\"
                 data-source=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["source"]) ? $context["source"] : null), "html", null, true);
            echo "\"
                 data-route-list=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi_comments_list", array("source" => (isset($context["source"]) ? $context["source"] : null), "context" => (isset($context["context"]) ? $context["context"] : null))), "html", null, true);
            echo "\"
                 data-route-add=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elcodi_comments_add", array("source" => (isset($context["source"]) ? $context["source"] : null), "context" => (isset($context["context"]) ? $context["context"] : null), "authorToken" => (isset($context["author_token"]) ? $context["author_token"] : null))), "html", null, true);
            echo "\"
                    ></div>
        </div>
    ";
        }
        
        $__internal_422c063ac365c5e9a46f974e0ccb84f22f0a3ef1e34b9c90fc543c12856f4ec5->leave($__internal_422c063ac365c5e9a46f974e0ccb84f22f0a3ef1e34b9c90fc543c12856f4ec5_prof);

    }

    // line 27
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_ab4feaccfd05f096530ac69422967a5fa370190a8659699781579dcda0b7a72a = $this->env->getExtension("native_profiler");
        $__internal_ab4feaccfd05f096530ac69422967a5fa370190a8659699781579dcda0b7a72a->enter($__internal_ab4feaccfd05f096530ac69422967a5fa370190a8659699781579dcda0b7a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 28
        echo "
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_customer_order_list", array("customerId" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"button\">
        <i class=\"icon-shopping-cart\"></i>
        <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.from_user", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "firstname", array()))), "html", null, true);
        echo "</span>
    </a>
    <a data-fc-modules=\"side-panel\" data-fc-position=\"right\" data-fc-width=\"60%\" href=\"#box-populi\" class=\"button ph-m\">
        <i class=\"icon-pencil\"></i>
        <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.notes"), "html", null, true);
        echo "</span>
    </a>

";
        
        $__internal_ab4feaccfd05f096530ac69422967a5fa370190a8659699781579dcda0b7a72a->leave($__internal_ab4feaccfd05f096530ac69422967a5fa370190a8659699781579dcda0b7a72a_prof);

    }

    // line 41
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_220dfb70e881bf2fa6d732e37478cc7c7f92a0ea00431309871dcb39ee41a602 = $this->env->getExtension("native_profiler");
        $__internal_220dfb70e881bf2fa6d732e37478cc7c7f92a0ea00431309871dcb39ee41a602->enter($__internal_220dfb70e881bf2fa6d732e37478cc7c7f92a0ea00431309871dcb39ee41a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 42
        echo "
    ";
        // line 43
        $context["title"] = $this->env->getExtension('translator')->trans("admin.order.plural");
        // line 44
        echo "
    ";
        // line 45
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array())) {
            // line 46
            echo "        ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.order.edit", array("%id%" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array())));
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "        ";
            $context["header"] = $this->env->getExtension('translator')->trans("admin.order.new");
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    ";
        // line 51
        $this->loadTemplate("@AdminCore/Common/breadcrumb.html.twig", "AdminCartBundle:Order:edit.html.twig", 51)->display(array_merge($context, array("breadcrumb" => array(0 => array("name" =>         // line 53
(isset($context["title"]) ? $context["title"] : null), "url" => $this->env->getExtension('routing')->getUrl("admin_order_list")), 1 => array("name" =>         // line 54
(isset($context["header"]) ? $context["header"] : null), "active" => true)))));
        // line 57
        echo "
";
        
        $__internal_220dfb70e881bf2fa6d732e37478cc7c7f92a0ea00431309871dcb39ee41a602->leave($__internal_220dfb70e881bf2fa6d732e37478cc7c7f92a0ea00431309871dcb39ee41a602_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_0925505c8064e28262e9d9d2b1d7270d25a81403f76e33e62a8f965c1135352e = $this->env->getExtension("native_profiler");
        $__internal_0925505c8064e28262e9d9d2b1d7270d25a81403f76e33e62a8f965c1135352e->enter($__internal_0925505c8064e28262e9d9d2b1d7270d25a81403f76e33e62a8f965c1135352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "
    <div class=\"grid\">
        <div class=\"col-8-12\">
            <div class=\"pr-l\">
                ";
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("admin_order_edit_component", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))));
        echo "
                <div class=\"box-background\">
                    <h3 class=\"fw-n\"><i class=\"icon-clock-o\"></i>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.states.title"), "html", null, true);
        echo "</h3>
                    <table class=\"table order-history\">
                        <tbody>
                        <tr>
                            <td class=\"w-70\">
                                <i class=\"icon-shopping-cart bg-ok mr-s\"></i>
                                <em></em>
                                ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("common.order.states.initial"), "html", null, true);
        echo "
                            </td>
                            <td class=\"ta-r\">
                                ";
        // line 78
        $this->loadTemplate("AdminCartBundle:Order:date.html.twig", "AdminCartBundle:Order:edit.html.twig", 78)->display(array_merge($context, array("date" => $this->getAttribute($this->getAttribute(        // line 79
(isset($context["allStates"]) ? $context["allStates"] : null), 0, array()), "createdAt", array()))));
        // line 81
        echo "                            </td>
                        </tr>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allStates"]) ? $context["allStates"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["stateLine"]) {
            // line 84
            echo "                            ";
            if ((twig_in_filter("un", $this->getAttribute($context["stateLine"], "name", array())) || twig_in_filter("no", $this->getAttribute($context["stateLine"], "name", array())))) {
                // line 85
                echo "                                ";
                $context["colorClass"] = "bg-warning";
                // line 86
                echo "                            ";
            } else {
                // line 87
                echo "                                ";
                $context["colorClass"] = "bg-ok";
                // line 88
                echo "                            ";
            }
            // line 89
            echo "
                            ";
            // line 90
            if (twig_in_filter("paid", $this->getAttribute($context["stateLine"], "name", array()))) {
                // line 91
                echo "                                ";
                $context["iconClass"] = "icon-credit-card";
                // line 92
                echo "                            ";
            } elseif (twig_in_filter("ship", $this->getAttribute($context["stateLine"], "name", array()))) {
                // line 93
                echo "                                ";
                $context["iconClass"] = "icon-truck";
                // line 94
                echo "                            ";
            }
            // line 95
            echo "                            <tr>
                                <td>
                                    <i class=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["iconClass"]) ? $context["iconClass"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) ? $context["colorClass"] : null), "html", null, true);
            echo " mr-s\"></i>
                                    <em></em>
                                    ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("common.order.states." . $this->getAttribute($context["stateLine"], "name", array()))), "html", null, true);
            echo "
                                </td>
                                <td class=\"ta-r\">
                                    ";
            // line 102
            $this->loadTemplate("AdminCartBundle:Order:date.html.twig", "AdminCartBundle:Order:edit.html.twig", 102)->display(array_merge($context, array("date" => $this->getAttribute(            // line 103
$context["stateLine"], "createdAt", array()))));
            // line 105
            echo "                                </td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stateLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-4-12\">
            <div class=\"box-background ta-c mb-n\">
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nextPaymentTransitions"]) ? $context["nextPaymentTransitions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["paymentTransition"]) {
            // line 116
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_order_change_payment_state", array("id" => $this->getAttribute(            // line 117
(isset($context["order"]) ? $context["order"] : null), "id", array()), "transition" => $this->getAttribute(            // line 118
$context["paymentTransition"], "name", array()))), "html", null, true);
            // line 119
            echo "\" class=\"button-primary\">
                        <i class=\"icon-credit-card\"></i>
                        ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("admin.order.transition." . $this->getAttribute($context["paymentTransition"], "name", array()))), "html", null, true);
            echo "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentTransition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nextShippingTransitions"]) ? $context["nextShippingTransitions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shippingTransition"]) {
            // line 126
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_order_change_shipping_state", array("id" => $this->getAttribute(            // line 127
(isset($context["order"]) ? $context["order"] : null), "id", array()), "transition" => $this->getAttribute(            // line 128
$context["shippingTransition"], "name", array()))), "html", null, true);
            // line 129
            echo "\" class=\"button-secondary\">
                        <i class=\"icon-truck\"></i>
                        ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("admin.order.transition." . $this->getAttribute($context["shippingTransition"], "name", array()))), "html", null, true);
            echo "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingTransition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            </div>
            <div class=\"box ph-n\">
                <div class=\"box-none pv-n\">
                    <h3 class=\"fw-n\"><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_customer_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "fullName", array()), "html", null, true);
        echo "</a></h3>
                    <a href=\"mailto:";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "email", array()), "html", null, true);
        echo "\" class=\"c-foreground\"><i class=\"icon-envelope\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "username", array()), "html", null, true);
        echo "</a>
                </div>
                <a href=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=";
        // line 140
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null), "fullAddress", array())), "html", null, true);
        echo "\" target=\"_blank\">
                    <img id=\"CM_Map_map\" src=\"http://maps.google.com/maps/api/staticmap?size=500x150&amp;zoom=15.5&amp;sensor=false&amp;center=";
        // line 141
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null), "fullAddress", array())), "html", null, true);
        echo "&amp;markers=color:blue|";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null), "fullAddress", array())), "html", null, true);
        echo "\">
                </a>
                ";
        // line 143
        if (($this->getAttribute((isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null), "id", array()) == $this->getAttribute((isset($context["billingInfo"]) ? $context["billingInfo"] : null), "id", array()))) {
            // line 144
            echo "                    ";
            $this->loadTemplate("AdminCartBundle:Order:address.html.twig", "AdminCartBundle:Order:edit.html.twig", 144)->display(array_merge($context, array("title" => $this->env->getExtension('translator')->trans("admin.order.field.both_addresses"), "addressInfo" =>             // line 146
(isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null))));
            // line 148
            echo "                ";
        } else {
            // line 149
            echo "                    ";
            $this->loadTemplate("AdminCartBundle:Order:address.html.twig", "AdminCartBundle:Order:edit.html.twig", 149)->display(array_merge($context, array("title" => $this->env->getExtension('translator')->trans("admin.order.field.delivery_address"), "addressInfo" =>             // line 151
(isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null))));
            // line 153
            echo "
                    ";
            // line 154
            $this->loadTemplate("AdminCartBundle:Order:address.html.twig", "AdminCartBundle:Order:edit.html.twig", 154)->display(array_merge($context, array("title" => $this->env->getExtension('translator')->trans("admin.order.field.billing_address"), "addressInfo" =>             // line 156
(isset($context["deliveryInfo"]) ? $context["deliveryInfo"] : null))));
            // line 158
            echo "                ";
        }
        // line 159
        echo "                <hr class=\"mb-n\"/>
                <div class=\"box-none pb-n\">
                    <h3 class=\"fw-n\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.order.field.carrier"), "html", null, true);
        echo "</h3>
                    <i class=\"icon-truck\"></i>
                    ";
        // line 164
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "shippingMethod", array()), "carrierName", array()), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('print_money')->getCallable(), array($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "shippingAmount", array()))), "html", null, true);
        echo " )
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_0925505c8064e28262e9d9d2b1d7270d25a81403f76e33e62a8f965c1135352e->leave($__internal_0925505c8064e28262e9d9d2b1d7270d25a81403f76e33e62a8f965c1135352e_prof);

    }

    public function getTemplateName()
    {
        return "AdminCartBundle:Order:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 164,  409 => 161,  405 => 159,  402 => 158,  400 => 156,  399 => 154,  396 => 153,  394 => 151,  392 => 149,  389 => 148,  387 => 146,  385 => 144,  383 => 143,  376 => 141,  372 => 140,  365 => 138,  359 => 137,  354 => 134,  345 => 131,  341 => 129,  339 => 128,  338 => 127,  336 => 126,  332 => 125,  329 => 124,  320 => 121,  316 => 119,  314 => 118,  313 => 117,  311 => 116,  307 => 115,  298 => 108,  282 => 105,  280 => 103,  279 => 102,  273 => 99,  266 => 97,  262 => 95,  259 => 94,  256 => 93,  253 => 92,  250 => 91,  248 => 90,  245 => 89,  242 => 88,  239 => 87,  236 => 86,  233 => 85,  230 => 84,  213 => 83,  209 => 81,  207 => 79,  206 => 78,  200 => 75,  190 => 68,  185 => 66,  179 => 62,  173 => 61,  165 => 57,  163 => 54,  162 => 53,  161 => 51,  158 => 50,  155 => 49,  152 => 48,  149 => 47,  146 => 46,  144 => 45,  141 => 44,  139 => 43,  136 => 42,  130 => 41,  119 => 35,  112 => 31,  107 => 29,  104 => 28,  98 => 27,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  40 => 8,  33 => 1,  31 => 4,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set elcodi_context = {*/
/*     entity_type: 'order',*/
/* } %}*/
/* */
/* {% block body_down %}*/
/*     {% if order.id %}*/
/*         {% set author_token = app.user.token %}*/
/*         {% set context = 'admin' %}*/
/*         {% set source = "order-#{order.id}" %}*/
/*         <div id="box-populi" class="boxpopuli-container">*/
/*             <div class="boxpopuli-overflow" data-fc-modules="boxpopuli"*/
/*                  data-token="{{ author_token }}"*/
/*                  data-author-name="{{ app.user.fullname }}"*/
/*                  data-author-email="{{ app.user.email }}"*/
/*                  data-context="{{ context }}"*/
/*                  data-source="{{ source }}"*/
/*                  data-route-list="{{ url('elcodi_comments_list', { source: source, context: context }) }}"*/
/*                  data-route-add="{{ url('elcodi_comments_add', { source: source, context: context, authorToken: author_token }) }}"*/
/*                     ></div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock body_down %}*/
/* */
/* {% block header_actions %}*/
/* */
/*     <a href="{{ url('admin_customer_order_list', {customerId: order.customer.id}) }}" type="button" class="button">*/
/*         <i class="icon-shopping-cart"></i>*/
/*         <span>{{ 'admin.order.from_user'|trans({ '%name%': order.customer.firstname }) }}</span>*/
/*     </a>*/
/*     <a data-fc-modules="side-panel" data-fc-position="right" data-fc-width="60%" href="#box-populi" class="button ph-m">*/
/*         <i class="icon-pencil"></i>*/
/*         <span>{{ 'admin.order.notes'|trans }}</span>*/
/*     </a>*/
/* */
/* {% endblock header_actions %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/* */
/*     {% set title = 'admin.order.plural'|trans %}*/
/* */
/*     {% if order.id %}*/
/*         {% set header = 'admin.order.edit'|trans({ '%id%': order.id }) %}*/
/*     {% else %}*/
/*         {% set header = 'admin.order.new'|trans %}*/
/*     {% endif %}*/
/* */
/*     {% include '@AdminCore/Common/breadcrumb.html.twig' with {*/
/*         breadcrumb: [*/
/*             { name: title, url: url('admin_order_list'), },*/
/*             { name: header, active: true, },*/
/*         ]*/
/*     } %}*/
/* */
/* {% endblock breadcrumb %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="grid">*/
/*         <div class="col-8-12">*/
/*             <div class="pr-l">*/
/*                 {{ render(url('admin_order_edit_component', { id: order.id })) }}*/
/*                 <div class="box-background">*/
/*                     <h3 class="fw-n"><i class="icon-clock-o"></i>{{ 'admin.order.states.title'|trans }}</h3>*/
/*                     <table class="table order-history">*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <td class="w-70">*/
/*                                 <i class="icon-shopping-cart bg-ok mr-s"></i>*/
/*                                 <em></em>*/
/*                                 {{ 'common.order.states.initial'|trans }}*/
/*                             </td>*/
/*                             <td class="ta-r">*/
/*                                 {% include 'AdminCartBundle:Order:date.html.twig' with {*/
/*                                 date: allStates.0.createdAt,*/
/*                                 } %}*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% for stateLine in allStates %}*/
/*                             {% if 'un' in stateLine.name or 'no' in stateLine.name %}*/
/*                                 {% set colorClass = 'bg-warning' %}*/
/*                             {% else  %}*/
/*                                 {% set colorClass = 'bg-ok' %}*/
/*                             {% endif %}*/
/* */
/*                             {% if 'paid' in stateLine.name  %}*/
/*                                 {% set iconClass = 'icon-credit-card' %}*/
/*                             {% elseif 'ship' in stateLine.name  %}*/
/*                                 {% set iconClass = 'icon-truck' %}*/
/*                             {% endif %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <i class="{{ iconClass }} {{ colorClass }} mr-s"></i>*/
/*                                     <em></em>*/
/*                                     {{ "common.order.states.#{stateLine.name}"|trans }}*/
/*                                 </td>*/
/*                                 <td class="ta-r">*/
/*                                     {% include 'AdminCartBundle:Order:date.html.twig' with {*/
/*                                     date: stateLine.createdAt,*/
/*                                     } %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-4-12">*/
/*             <div class="box-background ta-c mb-n">*/
/*                 {% for paymentTransition in nextPaymentTransitions %}*/
/*                     <a href="{{ url('admin_order_change_payment_state', {*/
/*                         id: order.id,*/
/*                         transition: paymentTransition.name,*/
/*                     }) }}" class="button-primary">*/
/*                         <i class="icon-credit-card"></i>*/
/*                         {{ "admin.order.transition.#{paymentTransition.name}"|trans }}*/
/*                     </a>*/
/*                 {% endfor %}*/
/* */
/*                 {% for shippingTransition in nextShippingTransitions %}*/
/*                     <a href="{{ url('admin_order_change_shipping_state', {*/
/*                         id: order.id,*/
/*                         transition: shippingTransition.name*/
/*                     }) }}" class="button-secondary">*/
/*                         <i class="icon-truck"></i>*/
/*                         {{ "admin.order.transition.#{shippingTransition.name}"|trans }}*/
/*                     </a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="box ph-n">*/
/*                 <div class="box-none pv-n">*/
/*                     <h3 class="fw-n"><a href="{{ url('admin_customer_edit', { id: order.customer.id }) }}">{{ order.customer.fullName }}</a></h3>*/
/*                     <a href="mailto:{{ order.customer.email }}" class="c-foreground"><i class="icon-envelope"></i> {{ order.customer.username }}</a>*/
/*                 </div>*/
/*                 <a href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;q={{ deliveryInfo.fullAddress|url_encode }}" target="_blank">*/
/*                     <img id="CM_Map_map" src="http://maps.google.com/maps/api/staticmap?size=500x150&amp;zoom=15.5&amp;sensor=false&amp;center={{ deliveryInfo.fullAddress|url_encode }}&amp;markers=color:blue|{{ deliveryInfo.fullAddress|url_encode }}">*/
/*                 </a>*/
/*                 {% if deliveryInfo.id == billingInfo.id %}*/
/*                     {% include 'AdminCartBundle:Order:address.html.twig' with {*/
/*                         title: 'admin.order.field.both_addresses'|trans,*/
/*                         addressInfo: deliveryInfo,*/
/*                     } %}*/
/*                 {% else %}*/
/*                     {% include 'AdminCartBundle:Order:address.html.twig' with {*/
/*                         title: 'admin.order.field.delivery_address'|trans,*/
/*                         addressInfo: deliveryInfo,*/
/*                     } %}*/
/* */
/*                     {% include 'AdminCartBundle:Order:address.html.twig' with {*/
/*                         title: 'admin.order.field.billing_address'|trans,*/
/*                         addressInfo: deliveryInfo,*/
/*                     } %}*/
/*                 {% endif %}*/
/*                 <hr class="mb-n"/>*/
/*                 <div class="box-none pb-n">*/
/*                     <h3 class="fw-n">{{ 'admin.order.field.carrier'|trans }}</h3>*/
/*                     <i class="icon-truck"></i>*/
/*                     {# TODO: Extract carrier_name from the shown order #}*/
/*                     {{ order.shippingMethod.carrierName }} ( {{ order.shippingAmount|print_money }} )*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
