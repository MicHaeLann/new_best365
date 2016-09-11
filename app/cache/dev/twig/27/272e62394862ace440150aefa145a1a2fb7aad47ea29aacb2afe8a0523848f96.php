<?php

/* AdminMediaBundle:Module:_image-single-form-field.html.twig */
class __TwigTemplate_c7fb379aaa0bda683c834242934e3741e8c472be881ce7e08c608fe6503adf1a extends Twig_Template
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
        $__internal_c935df7f7e09bf4dfa108a913ddd6087b91a6027f868e392ea5a6d3a4598772d = $this->env->getExtension("native_profiler");
        $__internal_c935df7f7e09bf4dfa108a913ddd6087b91a6027f868e392ea5a6d3a4598772d->enter($__internal_c935df7f7e09bf4dfa108a913ddd6087b91a6027f868e392ea5a6d3a4598772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMediaBundle:Module:_image-single-form-field.html.twig"));

        // line 1
        echo "<div class=\"grid\">
    <div class=\"col-1-3\">
        <div class=\"box-none\">
            <h2 class=\"fw-n\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["sectionTitle"]) ? $context["sectionTitle"] : null)), "html", null, true);
        echo "</h2>
            <p class=\"mr-l\" data-fc-modules=\"truncate\" data-fc-max=\"90\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["sectionDescription"]) ? $context["sectionDescription"] : null)), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"col-2-3\">
        <div class=\"d-n\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imageForm"]) ? $context["imageForm"] : null), 'row', array("attr" => array("class" => "js-images-select")));
        echo "
        </div>
        <div class=\"box\">
            ";
        // line 13
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 14
            echo "                ";
            $context["logo"] = $this->env->getExtension('image_extension')->resize((isset($context["image"]) ? $context["image"] : null), array("height" => ((array_key_exists("imageHeight", $context)) ? (_twig_default_filter((isset($context["imageHeight"]) ? $context["imageHeight"] : null), 100)) : (100)), "width" => ((array_key_exists("imageWidth", $context)) ? (_twig_default_filter((isset($context["imageWidth"]) ? $context["imageWidth"] : null), 300)) : (300)), "type" => 2));
            // line 15
            echo "                ";
            $context["display"] = "block";
            // line 16
            echo "            ";
        } else {
            // line 17
            echo "                ";
            $context["logo"] = $this->env->getExtension('asset')->getAssetUrl("bundles/admincore/images/grey.png");
            // line 18
            echo "                ";
            $context["display"] = "none";
            // line 19
            echo "            ";
        }
        // line 20
        echo "            <ul id=\"upload-";
        echo twig_escape_filter($this->env, (isset($context["imageName"]) ? $context["imageName"] : null), "html", null, true);
        echo "-image\" class=\"thumbnail-group thumbnail-group-extended mb-m\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["display"]) ? $context["display"] : null), "html", null, true);
        echo ";\">
                <li style=\"min-width: 0; min-height: 0;\">
                    <img  src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
        echo "\" class=\"group-images thumbnail\" />
                    <ul class=\"thumbnail-actions\">
                        <li>
                            <a href=\"";
        // line 25
        if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_image_delete", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()))), "html", null, true);
            if (array_key_exists("redirect_path", $context)) {
                echo twig_escape_filter($this->env, ("?redirect-path=" . (isset($context["redirect_path"]) ? $context["redirect_path"] : null)), "html", null, true);
            }
        }
        echo "\" id=\"upload-";
        echo twig_escape_filter($this->env, (isset($context["imageName"]) ? $context["imageName"] : null), "html", null, true);
        echo "-delete\" ";
        if ( !$this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array())) {
            echo "style=\"display: none\"";
        }
        echo "> <i class=\"icon-trash-o\"></i> </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <progress id=\"upload-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["imageName"]) ? $context["imageName"] : null), "html", null, true);
        echo "-progress\" value=\"0\" max=\"100\" style=\"display: none\"></progress>
            <p class=\"mb-n\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("admin_image_upload");
        echo "\" id=\"upload-";
        echo twig_escape_filter($this->env, (isset($context["imageName"]) ? $context["imageName"] : null), "html", null, true);
        echo "\"  data-fc-modules=\"upload-single\" data-fc-height=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("imageHeight", $context)) ? (_twig_default_filter((isset($context["imageHeight"]) ? $context["imageHeight"] : null), 100)) : (100)), "html", null, true);
        echo "\" data-fc-width=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("imageWidth", $context)) ? (_twig_default_filter((isset($context["imageWidth"]) ? $context["imageWidth"] : null), 300)) : (300)), "html", null, true);
        echo "\" class=\"button mb-m\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.info.upload_single"), "html", null, true);
        echo "</a>
            </p>
            <p class=\"fz-s mb-n\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.info.format"), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>
";
        
        $__internal_c935df7f7e09bf4dfa108a913ddd6087b91a6027f868e392ea5a6d3a4598772d->leave($__internal_c935df7f7e09bf4dfa108a913ddd6087b91a6027f868e392ea5a6d3a4598772d_prof);

    }

    public function getTemplateName()
    {
        return "AdminMediaBundle:Module:_image-single-form-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  103 => 32,  98 => 30,  79 => 25,  73 => 22,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  45 => 13,  39 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="grid">*/
/*     <div class="col-1-3">*/
/*         <div class="box-none">*/
/*             <h2 class="fw-n">{{ sectionTitle|trans }}</h2>*/
/*             <p class="mr-l" data-fc-modules="truncate" data-fc-max="90">{{ sectionDescription|trans }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-2-3">*/
/*         <div class="d-n">*/
/*             {{ form_row( imageForm, { attr: { class: 'js-images-select' } }) }}*/
/*         </div>*/
/*         <div class="box">*/
/*             {% if image %}*/
/*                 {% set logo = image|resize({ height: imageHeight|default(100), width: imageWidth|default(300), type: 2 })  %}*/
/*                 {% set display = 'block' %}*/
/*             {% else %}*/
/*                 {% set logo = asset('bundles/admincore/images/grey.png') %}*/
/*                 {% set display = 'none' %}*/
/*             {% endif %}*/
/*             <ul id="upload-{{ imageName }}-image" class="thumbnail-group thumbnail-group-extended mb-m" style="display: {{ display }};">*/
/*                 <li style="min-width: 0; min-height: 0;">*/
/*                     <img  src="{{ logo }}" class="group-images thumbnail" />*/
/*                     <ul class="thumbnail-actions">*/
/*                         <li>*/
/*                             <a href="{% if image.id  %}{{ url('admin_image_delete', { id: image.id }) }}{% if redirect_path is defined %}{{ '?redirect-path=' ~ redirect_path }}{% endif %}{% endif %}" id="upload-{{ imageName }}-delete" {% if not image.id %}style="display: none"{% endif %}> <i class="icon-trash-o"></i> </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <progress id="upload-{{ imageName }}-progress" value="0" max="100" style="display: none"></progress>*/
/*             <p class="mb-n">*/
/*                 <a href="{{ url('admin_image_upload') }}" id="upload-{{ imageName }}"  data-fc-modules="upload-single" data-fc-height="{{ imageHeight|default(100) }}" data-fc-width="{{ imageWidth|default(300) }}" class="button mb-m">{{ 'admin.image.info.upload_single'|trans }}</a>*/
/*             </p>*/
/*             <p class="fz-s mb-n">{{ 'admin.image.info.format'|trans }}</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
