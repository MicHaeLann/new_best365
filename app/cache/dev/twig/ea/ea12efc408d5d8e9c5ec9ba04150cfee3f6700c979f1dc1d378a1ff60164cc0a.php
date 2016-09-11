<?php

/* StoreTemplateBundle:Pages:address-list.html.twig */
class __TwigTemplate_ab1187f964a44d6e3d5ab6d2714cf5e88e7e9f79678f2abe0b43151e42c0281e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@StoreTemplate/Layout/_layout.html.twig", "StoreTemplateBundle:Pages:address-list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d33592b22a9a1314820cd3ddc47ef2f1786a77ca8b9e64b2098fe74eb953257 = $this->env->getExtension("native_profiler");
        $__internal_3d33592b22a9a1314820cd3ddc47ef2f1786a77ca8b9e64b2098fe74eb953257->enter($__internal_3d33592b22a9a1314820cd3ddc47ef2f1786a77ca8b9e64b2098fe74eb953257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Pages:address-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d33592b22a9a1314820cd3ddc47ef2f1786a77ca8b9e64b2098fe74eb953257->leave($__internal_3d33592b22a9a1314820cd3ddc47ef2f1786a77ca8b9e64b2098fe74eb953257_prof);

    }

    // line 3
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_430d602ddb963f00da5ca4966664b1e59e2305d7e07605cfaced3eda62079554 = $this->env->getExtension("native_profiler");
        $__internal_430d602ddb963f00da5ca4966664b1e59e2305d7e07605cfaced3eda62079554->enter($__internal_430d602ddb963f00da5ca4966664b1e59e2305d7e07605cfaced3eda62079554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        
        $__internal_430d602ddb963f00da5ca4966664b1e59e2305d7e07605cfaced3eda62079554->leave($__internal_430d602ddb963f00da5ca4966664b1e59e2305d7e07605cfaced3eda62079554_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f44c2b0bc333a217b8684737941fef0607c51825ab8cfedbb46ac41e4b118b74 = $this->env->getExtension("native_profiler");
        $__internal_f44c2b0bc333a217b8684737941fef0607c51825ab8cfedbb46ac41e4b118b74->enter($__internal_f44c2b0bc333a217b8684737941fef0607c51825ab8cfedbb46ac41e4b118b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.list.addresses"), "html", null, true);
        echo "</h2>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["addresses"]) ? $context["addresses"] : null)) > 0)) {
            // line 8
            echo "    <div class=\"";
            if ((twig_length_filter($this->env, (isset($context["addresses"]) ? $context["addresses"] : null)) > 1)) {
                echo "address-list";
            }
            echo " address-list-profile\">
        <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("store_address_new");
            echo "\" class=\"button button-secondary address-list-add\" data-test=\"add-address\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.list.add_new_address"), "html", null, true);
            echo "</a>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "            ";
                $this->loadTemplate("@StoreTemplate/Modules/_address-item.html.twig", "StoreTemplateBundle:Pages:address-list.html.twig", 11)->display(array_merge($context, array("address" => $context["address"])));
                // line 12
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
    ";
        } else {
            // line 15
            echo "        <div class=\"empty-page\" data-test=\"empty-addresses-page\">
            <i class=\"fa fa-map-marker fa-3x\"></i>
            <h2 class=\"product-title\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.list.no_addresses"), "html", null, true);
            echo "</h2>
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getUrl("store_address_new");
            echo "\" class=\"button button-secondary\" data-test=\"add-address\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template.store_template_bundle.address.list.add_new_address"), "html", null, true);
            echo "</a>
        </div>

    ";
        }
        
        $__internal_f44c2b0bc333a217b8684737941fef0607c51825ab8cfedbb46ac41e4b118b74->leave($__internal_f44c2b0bc333a217b8684737941fef0607c51825ab8cfedbb46ac41e4b118b74_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Pages:address-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  114 => 17,  110 => 15,  106 => 13,  92 => 12,  89 => 11,  72 => 10,  66 => 9,  59 => 8,  57 => 7,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@StoreTemplate/Layout/_layout.html.twig' %}*/
/* */
/* {% block breadcrumb_container %}{% endblock breadcrumb_container %}*/
/* */
/* {% block content %}*/
/*     <h2>{{ 'template.store_template_bundle.address.list.addresses'|trans }}</h2>*/
/*     {% if addresses|length > 0 %}*/
/*     <div class="{% if addresses|length > 1 %}address-list{% endif %} address-list-profile">*/
/*         <a href="{{ url('store_address_new') }}" class="button button-secondary address-list-add" data-test="add-address">{{ 'template.store_template_bundle.address.list.add_new_address'|trans }}</a>*/
/*         {% for address in addresses %}*/
/*             {% include "@StoreTemplate/Modules/_address-item.html.twig" with {"address": address} %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     {% else %}*/
/*         <div class="empty-page" data-test="empty-addresses-page">*/
/*             <i class="fa fa-map-marker fa-3x"></i>*/
/*             <h2 class="product-title">{{ "template.store_template_bundle.address.list.no_addresses"|trans}}</h2>*/
/*             <a href="{{ url('store_address_new') }}" class="button button-secondary" data-test="add-address">{{ "template.store_template_bundle.address.list.add_new_address"|trans }}</a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* {% endblock content %}*/
/* */
