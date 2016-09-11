<?php

/* AdminCoreBundle:Navs:side.html.twig */
class __TwigTemplate_fef0fed7aa4ccb8219b59e034bc194953b75c5e462fa408e4a306cfb222c0b14 extends Twig_Template
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
        $__internal_cca78be60898d8f8aeb88a5850e8e01bee96cc09655addd8931dc6371effb34c = $this->env->getExtension("native_profiler");
        $__internal_cca78be60898d8f8aeb88a5850e8e01bee96cc09655addd8931dc6371effb34c->enter($__internal_cca78be60898d8f8aeb88a5850e8e01bee96cc09655addd8931dc6371effb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Navs:side.html.twig"));

        // line 1
        $context["side_elements"] = $this->loadTemplate("AdminCoreBundle::Navs/side_elements.html.twig", "AdminCoreBundle:Navs:side.html.twig", 1);
        // line 2
        $context["side_elements_mobile"] = $this->loadTemplate("AdminCoreBundle::Navs/side_elements_mobile.html.twig", "AdminCoreBundle:Navs:side.html.twig", 2);
        // line 3
        echo "<p class=\"pa-m mb-n\">
    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/images/logo.png"), "html", null, true);
        echo "\" width=\"130\" />
</p>
<nav id=\"menu\" class=\"navigation navigation-vertical desktop\">
    <ul>
        <hr class=\"mb-n\" />
        ";
        // line 9
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "dashboard", (isset($context["route"]) ? $context["route"] : null));
        echo "
        ";
        // line 10
        echo $context["side_elements"]->getseparator();
        echo "
        ";
        // line 11
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "order", (isset($context["route"]) ? $context["route"] : null));
        echo "
        ";
        // line 12
        echo $context["side_elements"]->getseparator();
        echo "
        ";
        // line 13
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "catalog", (isset($context["route"]) ? $context["route"] : null));
        echo "
        ";
        // line 14
        echo $context["side_elements"]->getseparator();
        echo "
        ";
        // line 15
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "design", (isset($context["route"]) ? $context["route"] : null));
        echo "
        ";
        // line 16
        echo $context["side_elements"]->getseparator();
        echo "
        ";
        // line 17
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "communication", (isset($context["route"]) ? $context["route"] : null));
        echo "
        ";
        // line 18
        echo $context["side_elements"]->getseparator();
        echo "
        ";
        // line 19
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "settings", (isset($context["route"]) ? $context["route"] : null));
        echo "
        ";
        // line 20
        echo $context["side_elements"]->getseparator();
        echo "
        ";
        // line 21
        echo $context["side_elements"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "extra", (isset($context["route"]) ? $context["route"] : null));
        echo "
        <li>
            <a href=\"#sidebar-user-dropdown\" data-fc-modules=\"toggle\" class=\"c-background\">
                 <span class=\" tablet va-m\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('ornicar_gravatar')->getUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), 40), "html", null, true);
        echo "\" alt=\"Avatar\" class=\"image-circle\">
                </span>
                <span class=\"sidebar-user-info desktop\">
                    <i class=\"icon-caret-down fl-r\"></i>
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('ornicar_gravatar')->getUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), 15), "html", null, true);
        echo "\" alt=\"Avatar\" class=\"image-circle va-m\">
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
                </span>
            </a>
            <ul id=\"sidebar-user-dropdown\" class=\"sidebar-user-dropdown hidden\">
                <li data-test=\"menu-profile\">
                    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_admin_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                    <span class=\"mobile tablet\">
                        <i class=\"icon-user fz-xl\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.profile.single"), "html", null, true);
        echo "
                    </span>
                    <span class=\"desktop\">
                        <i class=\"icon-angle-right\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.profile.single"), "html", null, true);
        echo "
                    </span>
                    </a>
                </li>
                <li data-test=\"menu-logout\">
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getUrl("admin_logout");
        echo "\">
                    <span class=\"mobile tablet\">
                        <i class=\"icon-sign-out fz-xl\"></i> ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.logout"), "html", null, true);
        echo "
                    </span>
                    <span class=\"desktop\">
                        <i class=\"icon-angle-right\"></i> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.logout"), "html", null, true);
        echo "
                    </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div class=\"d-n\">
    <nav id=\"menu-mobile\" class=\"navigation navigation-vertical\">
        <ul>
            ";
        // line 61
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "dashboard", (isset($context["route"]) ? $context["route"] : null));
        echo "
            ";
        // line 62
        echo $context["side_elements_mobile"]->getseparator();
        echo "
            ";
        // line 63
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "catalog", (isset($context["route"]) ? $context["route"] : null));
        echo "
            ";
        // line 64
        echo $context["side_elements_mobile"]->getseparator();
        echo "
            ";
        // line 65
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "order", (isset($context["route"]) ? $context["route"] : null));
        echo "
            ";
        // line 66
        echo $context["side_elements_mobile"]->getseparator();
        echo "
            ";
        // line 67
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "design", (isset($context["route"]) ? $context["route"] : null));
        echo "
            ";
        // line 68
        echo $context["side_elements_mobile"]->getseparator();
        echo "
            ";
        // line 69
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "communication", (isset($context["route"]) ? $context["route"] : null));
        echo "
            ";
        // line 70
        echo $context["side_elements_mobile"]->getseparator();
        echo "
            ";
        // line 71
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "settings", (isset($context["route"]) ? $context["route"] : null));
        echo "
            ";
        // line 72
        echo $context["side_elements_mobile"]->getseparator();
        echo "
            ";
        // line 73
        echo $context["side_elements_mobile"]->getshowNodes((isset($context["menu"]) ? $context["menu"] : null), "extra", (isset($context["route"]) ? $context["route"] : null));
        echo "
        </ul>
    </nav>
    <nav id=\"sidebar-user-mobile\" class=\"navigation navigation-vertical\">
        <ul>
            <li data-test=\"menu-profile\">
                <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_admin_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                    <span class=\"mobile tablet\">
                        <i class=\"icon-user fz-xl\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.profile.single"), "html", null, true);
        echo "
                    </span>
                    <span class=\"desktop\">
                        <i class=\"icon-user\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.profile.single"), "html", null, true);
        echo "
                    </span>
                </a>
            </li>
            <li data-test=\"menu-logout\">
                <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getUrl("admin_logout");
        echo "\">
                    <span class=\"mobile tablet\">
                        <i class=\"icon-sign-out fz-xl\"></i> ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.logout"), "html", null, true);
        echo "
                    </span>
                    <span class=\"desktop\">
                        <i class=\"icon-sign-out\"></i> ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.login.action.logout"), "html", null, true);
        echo "
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
        
        $__internal_cca78be60898d8f8aeb88a5850e8e01bee96cc09655addd8931dc6371effb34c->leave($__internal_cca78be60898d8f8aeb88a5850e8e01bee96cc09655addd8931dc6371effb34c_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Navs:side.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 94,  236 => 91,  231 => 89,  223 => 84,  217 => 81,  212 => 79,  203 => 73,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  183 => 68,  179 => 67,  175 => 66,  171 => 65,  167 => 64,  163 => 63,  159 => 62,  155 => 61,  141 => 50,  135 => 47,  130 => 45,  122 => 40,  116 => 37,  111 => 35,  103 => 30,  99 => 29,  92 => 25,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% import "AdminCoreBundle::Navs/side_elements.html.twig" as side_elements %}*/
/* {% import "AdminCoreBundle::Navs/side_elements_mobile.html.twig" as side_elements_mobile %}*/
/* <p class="pa-m mb-n">*/
/*     <img src="{{ asset('bundles/admincore/images/logo.png') }}" width="130" />*/
/* </p>*/
/* <nav id="menu" class="navigation navigation-vertical desktop">*/
/*     <ul>*/
/*         <hr class="mb-n" />*/
/*         {{ side_elements.showNodes(menu, 'dashboard', route) }}*/
/*         {{ side_elements.separator() }}*/
/*         {{ side_elements.showNodes(menu, 'order', route) }}*/
/*         {{ side_elements.separator() }}*/
/*         {{ side_elements.showNodes(menu, 'catalog', route) }}*/
/*         {{ side_elements.separator() }}*/
/*         {{ side_elements.showNodes(menu, 'design', route) }}*/
/*         {{ side_elements.separator() }}*/
/*         {{ side_elements.showNodes(menu, 'communication', route) }}*/
/*         {{ side_elements.separator() }}*/
/*         {{ side_elements.showNodes(menu, 'settings', route) }}*/
/*         {{ side_elements.separator() }}*/
/*         {{ side_elements.showNodes(menu, 'extra', route) }}*/
/*         <li>*/
/*             <a href="#sidebar-user-dropdown" data-fc-modules="toggle" class="c-background">*/
/*                  <span class=" tablet va-m">*/
/*                     <img src="{{ gravatar(app.user.email, 40) }}" alt="Avatar" class="image-circle">*/
/*                 </span>*/
/*                 <span class="sidebar-user-info desktop">*/
/*                     <i class="icon-caret-down fl-r"></i>*/
/*                     <img src="{{ gravatar(app.user.email, 15) }}" alt="Avatar" class="image-circle va-m">*/
/*                     {{ app.user.username }}*/
/*                 </span>*/
/*             </a>*/
/*             <ul id="sidebar-user-dropdown" class="sidebar-user-dropdown hidden">*/
/*                 <li data-test="menu-profile">*/
/*                     <a href="{{ url('admin_admin_user_edit', {id: app.user.id }) }}">*/
/*                     <span class="mobile tablet">*/
/*                         <i class="icon-user fz-xl"></i> {{ 'admin.profile.single'|trans }}*/
/*                     </span>*/
/*                     <span class="desktop">*/
/*                         <i class="icon-angle-right"></i> {{ 'admin.profile.single'|trans }}*/
/*                     </span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li data-test="menu-logout">*/
/*                     <a href="{{ url('admin_logout') }}">*/
/*                     <span class="mobile tablet">*/
/*                         <i class="icon-sign-out fz-xl"></i> {{ 'admin.login.action.logout'|trans }}*/
/*                     </span>*/
/*                     <span class="desktop">*/
/*                         <i class="icon-angle-right"></i> {{ 'admin.login.action.logout'|trans }}*/
/*                     </span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
/* <div class="d-n">*/
/*     <nav id="menu-mobile" class="navigation navigation-vertical">*/
/*         <ul>*/
/*             {{ side_elements_mobile.showNodes(menu, 'dashboard', route) }}*/
/*             {{ side_elements_mobile.separator() }}*/
/*             {{ side_elements_mobile.showNodes(menu, 'catalog', route) }}*/
/*             {{ side_elements_mobile.separator() }}*/
/*             {{ side_elements_mobile.showNodes(menu, 'order', route) }}*/
/*             {{ side_elements_mobile.separator() }}*/
/*             {{ side_elements_mobile.showNodes(menu, 'design', route) }}*/
/*             {{ side_elements_mobile.separator() }}*/
/*             {{ side_elements_mobile.showNodes(menu, 'communication', route) }}*/
/*             {{ side_elements_mobile.separator() }}*/
/*             {{ side_elements_mobile.showNodes(menu, 'settings', route) }}*/
/*             {{ side_elements_mobile.separator() }}*/
/*             {{ side_elements_mobile.showNodes(menu, 'extra', route) }}*/
/*         </ul>*/
/*     </nav>*/
/*     <nav id="sidebar-user-mobile" class="navigation navigation-vertical">*/
/*         <ul>*/
/*             <li data-test="menu-profile">*/
/*                 <a href="{{ url('admin_admin_user_edit', {id: app.user.id }) }}">*/
/*                     <span class="mobile tablet">*/
/*                         <i class="icon-user fz-xl"></i> {{ 'admin.profile.single'|trans }}*/
/*                     </span>*/
/*                     <span class="desktop">*/
/*                         <i class="icon-user"></i> {{ 'admin.profile.single'|trans }}*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*             <li data-test="menu-logout">*/
/*                 <a href="{{ url('admin_logout') }}">*/
/*                     <span class="mobile tablet">*/
/*                         <i class="icon-sign-out fz-xl"></i> {{ 'admin.login.action.logout'|trans }}*/
/*                     </span>*/
/*                     <span class="desktop">*/
/*                         <i class="icon-sign-out"></i> {{ 'admin.login.action.logout'|trans }}*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* </div>*/
/* */
