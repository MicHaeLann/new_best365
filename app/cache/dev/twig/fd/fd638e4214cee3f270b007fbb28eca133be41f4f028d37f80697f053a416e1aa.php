<?php

/* AdminNewsletterBundle:NewsletterSubscription/Component:viewComponent.html.twig */
class __TwigTemplate_ea86630088b4eb5d3157113215a1124e97eb3f5ded709180be84a1ef8d4141e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/viewComponent.html.twig", "AdminNewsletterBundle:NewsletterSubscription/Component:viewComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'view_buttons' => array($this, 'block_view_buttons'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/viewComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26cda83fd8c9a91d1f9bea175a07681519f2486ed8a7c814d442a0bb10833d27 = $this->env->getExtension("native_profiler");
        $__internal_26cda83fd8c9a91d1f9bea175a07681519f2486ed8a7c814d442a0bb10833d27->enter($__internal_26cda83fd8c9a91d1f9bea175a07681519f2486ed8a7c814d442a0bb10833d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminNewsletterBundle:NewsletterSubscription/Component:viewComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cda83fd8c9a91d1f9bea175a07681519f2486ed8a7c814d442a0bb10833d27->leave($__internal_26cda83fd8c9a91d1f9bea175a07681519f2486ed8a7c814d442a0bb10833d27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aa07dca89eb2857764e216ee3a1f24a4e7f4ffa9909a0cee2c79cbd7d18a05d = $this->env->getExtension("native_profiler");
        $__internal_7aa07dca89eb2857764e216ee3a1f24a4e7f4ffa9909a0cee2c79cbd7d18a05d->enter($__internal_7aa07dca89eb2857764e216ee3a1f24a4e7f4ffa9909a0cee2c79cbd7d18a05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NewsletterSubscription"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : null), "html", null, true);
        echo "
";
        
        $__internal_7aa07dca89eb2857764e216ee3a1f24a4e7f4ffa9909a0cee2c79cbd7d18a05d->leave($__internal_7aa07dca89eb2857764e216ee3a1f24a4e7f4ffa9909a0cee2c79cbd7d18a05d_prof);

    }

    // line 7
    public function block_view_buttons($context, array $blocks = array())
    {
        $__internal_b717c5d45c543b0ab6f4e01ec5e062b381b427aba80c801c0f2beb5d7316bc2c = $this->env->getExtension("native_profiler");
        $__internal_b717c5d45c543b0ab6f4e01ec5e062b381b427aba80c801c0f2beb5d7316bc2c->enter($__internal_b717c5d45c543b0ab6f4e01ec5e062b381b427aba80c801c0f2beb5d7316bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_buttons"));

        // line 8
        echo "    <div class=\"spacer spacer-bottom\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_list");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View all"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
        echo "</a>
        ";
        // line 11
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 12
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_disable", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Disable"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_newsletter_subscription_enable", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enable"), "html", null, true);
            echo "</a>
        ";
        }
        // line 16
        echo "    </div>
";
        
        $__internal_b717c5d45c543b0ab6f4e01ec5e062b381b427aba80c801c0f2beb5d7316bc2c->leave($__internal_b717c5d45c543b0ab6f4e01ec5e062b381b427aba80c801c0f2beb5d7316bc2c_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_c878bcaf94777e7a12fbb0755f8d6a61d719e79a1b471fcca84d0441e1857806 = $this->env->getExtension("native_profiler");
        $__internal_c878bcaf94777e7a12fbb0755f8d6a61d719e79a1b471fcca84d0441e1857806->enter($__internal_c878bcaf94777e7a12fbb0755f8d6a61d719e79a1b471fcca84d0441e1857806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <tr>
        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("email"), "html", null, true);
        echo "</td>
        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("language"), "html", null, true);
        echo "</td>
        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "language", array()), "name", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hash"), "html", null, true);
        echo "</td>
        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hash", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reason"), "html", null, true);
        echo "</td>
        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reason", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("createdAt"), "html", null, true);
        echo "</td>
        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt", array()), "Y.m.d - H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("updatedAt"), "html", null, true);
        echo "</td>
        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedAt", array()), "Y.m.d - H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("enabled"), "html", null, true);
        echo "</td>
        <td>";
        // line 47
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            echo "<span class=\"label label-success\">true</span>";
        } else {
            echo "<span class=\"label label-danger\">false</span>";
        }
        echo "</td>
    </tr>

";
        
        $__internal_c878bcaf94777e7a12fbb0755f8d6a61d719e79a1b471fcca84d0441e1857806->leave($__internal_c878bcaf94777e7a12fbb0755f8d6a61d719e79a1b471fcca84d0441e1857806_prof);

    }

    public function getTemplateName()
    {
        return "AdminNewsletterBundle:NewsletterSubscription/Component:viewComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 47,  170 => 46,  164 => 43,  160 => 42,  154 => 39,  150 => 38,  144 => 35,  140 => 34,  134 => 31,  130 => 30,  124 => 27,  120 => 26,  114 => 23,  110 => 22,  107 => 21,  101 => 20,  93 => 16,  85 => 14,  77 => 12,  75 => 11,  69 => 10,  63 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/viewComponent.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'NewsletterSubscription'|trans }} - {{ entity }}*/
/* {% endblock title %}*/
/* */
/* {% block view_buttons %}*/
/*     <div class="spacer spacer-bottom">*/
/*         <a href="{{ url("admin_newsletter_subscription_list") }}" class="btn">{{ 'View all'|trans }}</a>*/
/*         <a href="{{ url("admin_newsletter_subscription_edit", {"id": entity.id}) }}" class="btn btn-primary">{{ 'Edit'|trans }}</a>*/
/*         {% if entity.enabled %}*/
/*             <a href="{{ url("admin_newsletter_subscription_disable", {"id": entity.id}) }}" class="btn btn-warning">{{ 'Disable'|trans }}</a>*/
/*         {% else %}*/
/*             <a href="{{ url("admin_newsletter_subscription_enable", {"id": entity.id}) }}" class="btn btn-success">{{ 'Enable'|trans }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock view_buttons %}*/
/* */
/* */
/* {% block content %}*/
/*     <tr>*/
/*         <td>{{ 'email'|trans }}</td>*/
/*         <td>{{ entity.email }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'language'|trans }}</td>*/
/*         <td>{{ entity.language.name }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'hash'|trans }}</td>*/
/*         <td>{{ entity.hash }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'reason'|trans }}</td>*/
/*         <td>{{ entity.reason }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'createdAt'|trans }}</td>*/
/*         <td>{{ entity.createdAt|date('Y.m.d - H:i:s') }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'updatedAt'|trans }}</td>*/
/*         <td>{{ entity.updatedAt|date('Y.m.d - H:i:s') }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'enabled'|trans }}</td>*/
/*         <td>{% if entity.enabled %}<span class="label label-success">true</span>{% else %}<span class="label label-danger">false</span>{% endif %}</td>*/
/*     </tr>*/
/* */
/* {% endblock content %}*/
/* */
