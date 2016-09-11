<?php

/* AdminBannerBundle:BannerZone:viewComponent.html.twig */
class __TwigTemplate_9c07848d2e0645b69b4ecd27792a164fd7cb23cf2086baa064750e7efb6ad95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/viewComponent.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminCoreBundle::Common/viewComponent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e669c7067d4d53a5dd1965213fac3f31206c0d4aa413fc6035572ab45d2166 = $this->env->getExtension("native_profiler");
        $__internal_28e669c7067d4d53a5dd1965213fac3f31206c0d4aa413fc6035572ab45d2166->enter($__internal_28e669c7067d4d53a5dd1965213fac3f31206c0d4aa413fc6035572ab45d2166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:BannerZone:viewComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e669c7067d4d53a5dd1965213fac3f31206c0d4aa413fc6035572ab45d2166->leave($__internal_28e669c7067d4d53a5dd1965213fac3f31206c0d4aa413fc6035572ab45d2166_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9af48ba5677ff559de0fc664594c2e6262d152e900cea0464636010d72d57c2 = $this->env->getExtension("native_profiler");
        $__internal_a9af48ba5677ff559de0fc664594c2e6262d152e900cea0464636010d72d57c2->enter($__internal_a9af48ba5677ff559de0fc664594c2e6262d152e900cea0464636010d72d57c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("BannerZone"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : null), "html", null, true);
        echo "
";
        
        $__internal_a9af48ba5677ff559de0fc664594c2e6262d152e900cea0464636010d72d57c2->leave($__internal_a9af48ba5677ff559de0fc664594c2e6262d152e900cea0464636010d72d57c2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a740203f62569a87222ceac7ed7842dda748f17593fb451edb429d29efc45399 = $this->env->getExtension("native_profiler");
        $__internal_a740203f62569a87222ceac7ed7842dda748f17593fb451edb429d29efc45399->enter($__internal_a740203f62569a87222ceac7ed7842dda748f17593fb451edb429d29efc45399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "

    <tr>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 13
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 13)->display(array_merge($context, array("entity" =>         // line 14
(isset($context["entity"]) ? $context["entity"] : null), "field" => "name")));
        // line 17
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("code"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 22
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 22)->display(array_merge($context, array("entity" =>         // line 23
(isset($context["entity"]) ? $context["entity"] : null), "field" => "code")));
        // line 26
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("height"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 31
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 31)->display(array_merge($context, array("entity" =>         // line 32
(isset($context["entity"]) ? $context["entity"] : null), "field" => "height")));
        // line 35
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("width"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 40
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 40)->display(array_merge($context, array("entity" =>         // line 41
(isset($context["entity"]) ? $context["entity"] : null), "field" => "width")));
        // line 44
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("language"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 49
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 49)->display(array_merge($context, array("entity" =>         // line 50
(isset($context["entity"]) ? $context["entity"] : null), "field" => "language")));
        // line 53
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("banners"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 58
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:BannerZone:viewComponent.html.twig", 58)->display(array_merge($context, array("entity" =>         // line 59
(isset($context["entity"]) ? $context["entity"] : null), "field" => "banners")));
        // line 62
        echo "        </td>
    </tr>

    <tr>
        <td>
            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_zone_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary btn-flat\">Edit</a>
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_zone_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-danger btn-flat\">Delete</a>
        </td>
    </tr>

";
        
        $__internal_a740203f62569a87222ceac7ed7842dda748f17593fb451edb429d29efc45399->leave($__internal_a740203f62569a87222ceac7ed7842dda748f17593fb451edb429d29efc45399_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:BannerZone:viewComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 68,  144 => 67,  137 => 62,  135 => 59,  134 => 58,  129 => 56,  124 => 53,  122 => 50,  121 => 49,  116 => 47,  111 => 44,  109 => 41,  108 => 40,  103 => 38,  98 => 35,  96 => 32,  95 => 31,  90 => 29,  85 => 26,  83 => 23,  82 => 22,  77 => 20,  72 => 17,  70 => 14,  69 => 13,  64 => 11,  59 => 8,  53 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/viewComponent.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'BannerZone'|trans }} - {{ entity }}*/
/* {% endblock title %}*/
/* */
/* {% block content %}*/
/* */
/* */
/*     <tr>*/
/*         <td>{{ 'name'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'name',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'code'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'code',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'height'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'height',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'width'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'width',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'language'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'language',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'banners'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'banners',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td>*/
/*             <a href="{{ url("admin_banner_zone_edit", {"id": entity.id}) }}" type="button" class="btn btn-primary btn-flat">Edit</a>*/
/*             <a href="{{ url("admin_banner_zone_delete", {"id": entity.id}) }}" type="button" class="btn btn-danger btn-flat">Delete</a>*/
/*         </td>*/
/*     </tr>*/
/* */
/* {% endblock content %}*/
/* */
