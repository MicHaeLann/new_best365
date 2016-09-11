<?php

/* StoreTemplateBundle:Modules:_header.html.twig */
class __TwigTemplate_6864c4b53b4640e92ab9ab28f444222b4a8cdfa9c3beb31643c67dad730e08d6 extends Twig_Template
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
        $__internal_415a80d5c5a785d54e9f4a54ba87a156190eff06e5b73a2d28ded09458d9774c = $this->env->getExtension("native_profiler");
        $__internal_415a80d5c5a785d54e9f4a54ba87a156190eff06e5b73a2d28ded09458d9774c->enter($__internal_415a80d5c5a785d54e9f4a54ba87a156190eff06e5b73a2d28ded09458d9774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_header.html.twig"));

        // line 1
        echo "
<header class=\"header\" ";
        // line 2
        if ($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "headerImage", array())) {
            echo "style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "headerImage", array()), array("height" => 1200, "width" => 1200, "type" => 2)), "html", null, true);
            echo "')\"";
        }
        echo ">
    ";
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_currency_nav"));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_language_nav"));
        echo "
    <div class=\"grid\">
        <div class=\"col-1-2\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("store_homepage");
        echo "\" class=\"logo\">
                ";
        // line 8
        if ($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "logo", array())) {
            // line 9
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "logo", array()), array("height" => 100, "width" => 300, "type" => 2)), "html", null, true);
            echo "\" />
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
            echo "
                ";
        }
        // line 13
        echo "            </a>
        </div>
        <div class=\"col-1-2\">
            ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_user_nav"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_cart_nav"));
        echo "
        </div>
    </div>
</header>
<div class=\"grid desktop\">
    ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("store_categories_nav"));
        echo "
</div>
<a href=\"#mobile-menu\" class=\"button mobile\"><i class=\"fa fa-arrow-down\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.header.menu"), "html", null, true);
        echo "</a>
";
        
        $__internal_415a80d5c5a785d54e9f4a54ba87a156190eff06e5b73a2d28ded09458d9774c->leave($__internal_415a80d5c5a785d54e9f4a54ba87a156190eff06e5b73a2d28ded09458d9774c_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 22,  70 => 17,  66 => 16,  61 => 13,  55 => 11,  49 => 9,  47 => 8,  43 => 7,  37 => 4,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* <header class="header" {% if store.headerImage %}style="background-image:url('{{ store.headerImage|resize({ height: 1200, width: 1200, type: 2 })  }}')"{% endif %}>*/
/*     {{ render(url('store_currency_nav')) }}*/
/*     {{ render(url('store_language_nav')) }}*/
/*     <div class="grid">*/
/*         <div class="col-1-2">*/
/*             <a href="{{ url('store_homepage') }}" class="logo">*/
/*                 {% if store.logo %}*/
/*                     <img src="{{ store.logo|resize({ height: 100, width: 300, type: 2 })  }}" />*/
/*                 {% else %}*/
/*                     {{ store.name }}*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-1-2">*/
/*             {{ render(url('store_user_nav')) }}*/
/*             {{ render(url('store_cart_nav')) }}*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* <div class="grid desktop">*/
/*     {{ render(url('store_categories_nav')) }}*/
/* </div>*/
/* <a href="#mobile-menu" class="button mobile"><i class="fa fa-arrow-down"></i> {{ 'template.store_template_bundle.header.menu'|trans }}</a>*/
/* */
