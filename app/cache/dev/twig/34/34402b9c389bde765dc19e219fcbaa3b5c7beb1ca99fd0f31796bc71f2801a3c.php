<?php

/* AdminBannerBundle:Banner:viewComponent.html.twig */
class __TwigTemplate_c06f523309e5513462334c31f3992d16fa787078f15950e64691811e5c9d458c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminCoreBundle::Common/viewComponent.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 1);
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
        $__internal_c0ff300c5b457e280eb691670c98820558d839d74e7c3682c693800e3c69135c = $this->env->getExtension("native_profiler");
        $__internal_c0ff300c5b457e280eb691670c98820558d839d74e7c3682c693800e3c69135c->enter($__internal_c0ff300c5b457e280eb691670c98820558d839d74e7c3682c693800e3c69135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBannerBundle:Banner:viewComponent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ff300c5b457e280eb691670c98820558d839d74e7c3682c693800e3c69135c->leave($__internal_c0ff300c5b457e280eb691670c98820558d839d74e7c3682c693800e3c69135c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4325a6fa82fbd1cd0d52e9f6d60d08cf902fdb46305557bf2c13d70b8dceaad9 = $this->env->getExtension("native_profiler");
        $__internal_4325a6fa82fbd1cd0d52e9f6d60d08cf902fdb46305557bf2c13d70b8dceaad9->enter($__internal_4325a6fa82fbd1cd0d52e9f6d60d08cf902fdb46305557bf2c13d70b8dceaad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Banner"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : null), "html", null, true);
        echo "
";
        
        $__internal_4325a6fa82fbd1cd0d52e9f6d60d08cf902fdb46305557bf2c13d70b8dceaad9->leave($__internal_4325a6fa82fbd1cd0d52e9f6d60d08cf902fdb46305557bf2c13d70b8dceaad9_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_e45a1c8ab9ad974d75e279f3dc3d050429e311b61edf8ae40c72cec3465d90b5 = $this->env->getExtension("native_profiler");
        $__internal_e45a1c8ab9ad974d75e279f3dc3d050429e311b61edf8ae40c72cec3465d90b5->enter($__internal_e45a1c8ab9ad974d75e279f3dc3d050429e311b61edf8ae40c72cec3465d90b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 13)->display(array_merge($context, array("entity" =>         // line 14
(isset($context["entity"]) ? $context["entity"] : null), "field" => "name")));
        // line 17
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("description"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 22
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 22)->display(array_merge($context, array("entity" =>         // line 23
(isset($context["entity"]) ? $context["entity"] : null), "field" => "description")));
        // line 26
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("url"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 31
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 31)->display(array_merge($context, array("entity" =>         // line 32
(isset($context["entity"]) ? $context["entity"] : null), "field" => "url")));
        // line 35
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("position"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 40
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 40)->display(array_merge($context, array("entity" =>         // line 41
(isset($context["entity"]) ? $context["entity"] : null), "field" => "position")));
        // line 44
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("enabled"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 49
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 49)->display(array_merge($context, array("entity" =>         // line 50
(isset($context["entity"]) ? $context["entity"] : null), "field" => "enabled")));
        // line 53
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("image"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 58
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 58)->display(array_merge($context, array("entity" =>         // line 59
(isset($context["entity"]) ? $context["entity"] : null), "field" => "image")));
        // line 62
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("principalImage"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 67
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 67)->display(array_merge($context, array("entity" =>         // line 68
(isset($context["entity"]) ? $context["entity"] : null), "field" => "principalImage")));
        // line 71
        echo "        </td>
    </tr>
    <tr>
        <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bannerZones"), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 76
        $this->loadTemplate("AdminCoreBundle::Common/viewField.html.twig", "AdminBannerBundle:Banner:viewComponent.html.twig", 76)->display(array_merge($context, array("entity" =>         // line 77
(isset($context["entity"]) ? $context["entity"] : null), "field" => "bannerZones")));
        // line 80
        echo "        </td>
    </tr>

    <tr>
        <td>
            <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary btn-flat\">Edit</a>
            <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_banner_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-danger btn-flat\">Delete</a>
        </td>
    </tr>

";
        
        $__internal_e45a1c8ab9ad974d75e279f3dc3d050429e311b61edf8ae40c72cec3465d90b5->leave($__internal_e45a1c8ab9ad974d75e279f3dc3d050429e311b61edf8ae40c72cec3465d90b5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBannerBundle:Banner:viewComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 86,  170 => 85,  163 => 80,  161 => 77,  160 => 76,  155 => 74,  150 => 71,  148 => 68,  147 => 67,  142 => 65,  137 => 62,  135 => 59,  134 => 58,  129 => 56,  124 => 53,  122 => 50,  121 => 49,  116 => 47,  111 => 44,  109 => 41,  108 => 40,  103 => 38,  98 => 35,  96 => 32,  95 => 31,  90 => 29,  85 => 26,  83 => 23,  82 => 22,  77 => 20,  72 => 17,  70 => 14,  69 => 13,  64 => 11,  59 => 8,  53 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminCoreBundle::Common/viewComponent.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'Banner'|trans }} - {{ entity }}*/
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
/*         <td>{{ 'description'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'description',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'url'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'url',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'position'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'position',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'enabled'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'enabled',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'image'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'image',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'principalImage'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'principalImage',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>{{ 'bannerZones'|trans }}</td>*/
/*         <td>*/
/*             {% include 'AdminCoreBundle::Common/viewField.html.twig' with {*/
/*             'entity': entity,*/
/*             'field': 'bannerZones',*/
/*             } %}*/
/*         </td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td>*/
/*             <a href="{{ url("admin_banner_edit", {"id": entity.id}) }}" type="button" class="btn btn-primary btn-flat">Edit</a>*/
/*             <a href="{{ url("admin_banner_delete", {"id": entity.id}) }}" type="button" class="btn btn-danger btn-flat">Delete</a>*/
/*         </td>*/
/*     </tr>*/
/* */
/* {% endblock content %}*/
/* */
