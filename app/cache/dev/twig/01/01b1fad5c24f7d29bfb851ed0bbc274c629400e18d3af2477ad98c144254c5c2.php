<?php

/* StoreTemplateBundle:Modules:_purchasable-list.html.twig */
class __TwigTemplate_92bdf53c1e9c4c5243385a8a8d8876bd2baeecb5bb0da5d67c924f49ddcc9f95 extends Twig_Template
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
        $__internal_e621c0b8c25310c2f29be1cc47881fb2388be4849a3d39204c975b320869db9d = $this->env->getExtension("native_profiler");
        $__internal_e621c0b8c25310c2f29be1cc47881fb2388be4849a3d39204c975b320869db9d->enter($__internal_e621c0b8c25310c2f29be1cc47881fb2388be4849a3d39204c975b320869db9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_purchasable-list.html.twig"));

        // line 1
        echo "<div class=\"product-list\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchasables"]) ? $context["purchasables"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["purchasable"]) {
            // line 3
            echo "    ";
            if (("product" == $this->getAttribute($context["purchasable"], "purchasableType", array()))) {
                // line 4
                echo "        ";
                $this->loadTemplate("@StoreTemplate/Modules/_product-item.html.twig", "StoreTemplateBundle:Modules:_purchasable-list.html.twig", 4)->display(array_merge($context, array("product" =>                 // line 5
$context["purchasable"])));
                // line 7
                echo "    ";
            } elseif (("purchasable_pack" == $this->getAttribute($context["purchasable"], "purchasableType", array()))) {
                // line 8
                echo "        ";
                $this->loadTemplate("@StoreTemplate/Modules/_product-pack-item.html.twig", "StoreTemplateBundle:Modules:_purchasable-list.html.twig", 8)->display(array_merge($context, array("pack" =>                 // line 9
$context["purchasable"])));
                // line 11
                echo "    ";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 13
            echo "    <div class=\"product-empty\">
        <i class=\"fa fa-frown-o fa-3x\"></i>
        <h2 class=\"product-title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.product.list.no_products_in_category"), "html", null, true);
            echo "</h2>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchasable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
        
        $__internal_e621c0b8c25310c2f29be1cc47881fb2388be4849a3d39204c975b320869db9d->leave($__internal_e621c0b8c25310c2f29be1cc47881fb2388be4849a3d39204c975b320869db9d_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_purchasable-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  75 => 15,  71 => 13,  57 => 11,  55 => 9,  53 => 8,  50 => 7,  48 => 5,  46 => 4,  43 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="product-list">*/
/* {% for purchasable in purchasables %}*/
/*     {% if "product" == purchasable.purchasableType %}*/
/*         {% include '@StoreTemplate/Modules/_product-item.html.twig' with {*/
/*             'product' : purchasable*/
/*         } %}*/
/*     {% elseif "purchasable_pack" == purchasable.purchasableType %}*/
/*         {% include '@StoreTemplate/Modules/_product-pack-item.html.twig' with {*/
/*             'pack' : purchasable*/
/*         } %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     <div class="product-empty">*/
/*         <i class="fa fa-frown-o fa-3x"></i>*/
/*         <h2 class="product-title">{{ "template.store_template_bundle.product.list.no_products_in_category"|trans}}</h2>*/
/*     </div>*/
/* {% endfor %}*/
/* </div>*/
/* */
