<?php

/* StoreTemplateBundle:Subpages:category-nav.html.twig */
class __TwigTemplate_38b5236c462e5382cc92ec5b34b8b4d791267141486e88283c08e83fcde66dda extends Twig_Template
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
        $__internal_b47df133c6426d3f93377f65311fe9bb8583a33c2f34b58f834ab36fc305f0b8 = $this->env->getExtension("native_profiler");
        $__internal_b47df133c6426d3f93377f65311fe9bb8583a33c2f34b58f834ab36fc305f0b8->enter($__internal_b47df133c6426d3f93377f65311fe9bb8583a33c2f34b58f834ab36fc305f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Subpages:category-nav.html.twig"));

        // line 1
        echo "<ul class=\"category-nav\" data-test=\"category-nav\">
    <li>
        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("store_homepage");
        echo "\" ";
        if ( !(isset($context["currentCategory"]) ? $context["currentCategory"] : null)) {
            echo " class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.category.nav.new"), "html", null, true);
        echo "</a>
    </li>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        <li ";
            if (((($this->getAttribute((isset($context["currentCategory"]) ? $context["currentCategory"] : null), "id", array()) == $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array())) || ($this->getAttribute($this->getAttribute((isset($context["currentCategory"]) ? $context["currentCategory"] : null), "parent", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()))) && (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) > 0))) {
                echo " class=\"expand\" ";
            }
            echo ">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("slug" => $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "slug", array()), "id" => $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()))), "html", null, true);
            echo "\"
                ";
            // line 8
            if (($this->getAttribute((isset($context["currentCategory"]) ? $context["currentCategory"] : null), "id", array()) == $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()))) {
                echo "class=\"active\"";
            }
            echo ">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "name", array()), "html", null, true);
            echo "
            </a>
            ";
            // line 11
            if ((($this->getAttribute((isset($context["currentCategory"]) ? $context["currentCategory"] : null), "id", array()) == $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array())) || ($this->getAttribute($this->getAttribute((isset($context["currentCategory"]) ? $context["currentCategory"] : null), "parent", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array())))) {
                // line 12
                echo "                <ul>
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                    // line 14
                    echo "                        <li>
                            <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_category_purchasables_list", array("slug" => $this->getAttribute($this->getAttribute(                    // line 16
$context["subCategory"], "entity", array()), "slug", array()), "id" => $this->getAttribute($this->getAttribute(                    // line 17
$context["subCategory"], "entity", array()), "id", array()))), "html", null, true);
                    // line 18
                    echo "\" ";
                    if (($this->getAttribute((isset($context["currentCategory"]) ? $context["currentCategory"] : null), "id", array()) == $this->getAttribute($this->getAttribute($context["subCategory"], "entity", array()), "id", array()))) {
                        echo " class=\"active\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subCategory"], "entity", array()), "name", array()), "html", null, true);
                    echo "</a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                </ul>
            ";
            }
            // line 23
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
        
        $__internal_b47df133c6426d3f93377f65311fe9bb8583a33c2f34b58f834ab36fc305f0b8->leave($__internal_b47df133c6426d3f93377f65311fe9bb8583a33c2f34b58f834ab36fc305f0b8_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Subpages:category-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  97 => 23,  93 => 21,  79 => 18,  77 => 17,  76 => 16,  75 => 15,  72 => 14,  68 => 13,  65 => 12,  63 => 11,  58 => 9,  52 => 8,  48 => 7,  41 => 6,  37 => 5,  26 => 3,  22 => 1,);
    }
}
/* <ul class="category-nav" data-test="category-nav">*/
/*     <li>*/
/*         <a href="{{ url('store_homepage') }}" {% if not currentCategory %} class="active"{% endif %}>{{ 'template.store_template_bundle.category.nav.new'|trans }}</a>*/
/*     </li>*/
/*     {% for category in categoryTree %}*/
/*         <li {% if ( currentCategory.id == category.entity.id or currentCategory.parent.id == category.entity.id ) and category.children|length > 0 %} class="expand" {% endif %}>*/
/*             <a href="{{ url('store_category_purchasables_list', { slug: category.entity.slug, id: category.entity.id }) }}"*/
/*                 {% if currentCategory.id == category.entity.id %}class="active"{% endif %}>*/
/*                 {{ category.entity.name }}*/
/*             </a>*/
/*             {% if currentCategory.id == category.entity.id or currentCategory.parent.id == category.entity.id  %}*/
/*                 <ul>*/
/*                     {% for subCategory in category.children %}*/
/*                         <li>*/
/*                             <a href="{{ url('store_category_purchasables_list', {*/
/*                                 slug: subCategory.entity.slug,*/
/*                                 id: subCategory.entity.id*/
/*                             }) }}" {% if currentCategory.id == subCategory.entity.id %} class="active"{% endif %}>{{ subCategory.entity.name }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
