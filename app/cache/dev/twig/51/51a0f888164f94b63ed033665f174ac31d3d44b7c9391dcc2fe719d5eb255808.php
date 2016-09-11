<?php

/* ElcodiPinterestBundle::product_pin.html.twig */
class __TwigTemplate_b01b6c7bdfebf1ad50eaea4b37e59450477a20d3d3c76cff1592ba11e6812bc1 extends Twig_Template
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
        $__internal_ca8dee505ead3ef9611571be2a3e39b67bb650651b98a06c56c469d187d75ebf = $this->env->getExtension("native_profiler");
        $__internal_ca8dee505ead3ef9611571be2a3e39b67bb650651b98a06c56c469d187d75ebf->enter($__internal_ca8dee505ead3ef9611571be2a3e39b67bb650651b98a06c56c469d187d75ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElcodiPinterestBundle::product_pin.html.twig"));

        // line 1
        $context["image"] = (((twig_length_filter($this->env, $this->getAttribute(        // line 2
(isset($context["product"]) ? $context["product"] : null), "images", array())) > 0)) ? ($this->env->getExtension('image_extension')->resize($this->getAttribute($this->getAttribute(        // line 3
(isset($context["product"]) ? $context["product"] : null), "images", array()), "first", array()), array("width" => 372, "height" => 291, "type" => 5))) : ("http://placehold.it/372x291"));
        // line 6
        echo "
<a href=\"https://www.pinterest.com/pin/create/button/?url=";
        // line 8
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("store_product_view", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug", array()))), "url"), "html", null, true);
        // line 9
        echo "&media=";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "url"), "html", null, true);
        // line 10
        echo "&description=";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "url"), "html", null, true);
        echo "\"
        data-pin-do=\"buttonPin\"
        data-pin-config=\"above\">
    <img src=\"//assets.pinterest.com/images/pidgets/pin_it_button.png\" />
</a>
";
        
        $__internal_ca8dee505ead3ef9611571be2a3e39b67bb650651b98a06c56c469d187d75ebf->leave($__internal_ca8dee505ead3ef9611571be2a3e39b67bb650651b98a06c56c469d187d75ebf_prof);

    }

    public function getTemplateName()
    {
        return "ElcodiPinterestBundle::product_pin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  31 => 9,  29 => 8,  26 => 6,  24 => 3,  23 => 2,  22 => 1,);
    }
}
/* {% set image =*/
/*     product.images|length > 0*/
/*         ? product.images.first|resize({ width: 372, height: 291, type: 5 })*/
/*         : 'http://placehold.it/372x291'*/
/* %}*/
/* */
/* <a href="https://www.pinterest.com/pin/create/button/?url=*/
/*         {{- url('store_product_view', { id: product.id, slug: product.slug })|e('url') -}}*/
/*         &media={{ image|e('url') -}}*/
/*         &description={{ product.description|e('url') -}}"*/
/*         data-pin-do="buttonPin"*/
/*         data-pin-config="above">*/
/*     <img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" />*/
/* </a>*/
/* */
