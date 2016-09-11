<?php

/* AdminMediaBundle:Module:_images-form-field.html.twig */
class __TwigTemplate_29e751cd2ffd9d8239b9eec6c1e3221395d0ee23105fcbae1c327c1b815198a0 extends Twig_Template
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
        $__internal_9a5a12b7331beb3b621981cb7f8e8e43200de33d453209122cdbb703daed50cc = $this->env->getExtension("native_profiler");
        $__internal_9a5a12b7331beb3b621981cb7f8e8e43200de33d453209122cdbb703daed50cc->enter($__internal_9a5a12b7331beb3b621981cb7f8e8e43200de33d453209122cdbb703daed50cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMediaBundle:Module:_images-form-field.html.twig"));

        // line 1
        echo "<div class=\"grid\">
    <div class=\"col-1-3\">
        <div id=\"upload-container\" class=\"box-none\">
            <h3 class=\"fw-n\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.plural"), "html", null, true);
        echo "</h3>
            <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.info.principal"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.info.reorder"), "html", null, true);
        echo "</p>
            <div class=\"d-n js-images-form-field\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imagesSort", array()), 'row', array("attr" => array("class" => "js-image-order")));
        echo "
            </div>

        </div>
    </div>
    <div class=\"col-2-3\">
        <div class=\"box\" data-fc-modules=\"image-delete\">
            <div id=\"thumb-gallery-select\" class=\"d-n\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array()), 'row', array("attr" => array("class" => "js-images-select")));
        echo "
            </div>
            <ul id=\"thumb-gallery\" data-fc-modules=\"sortable\" data-fc-input=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imagesSort", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"thumbnail-group thumbnail-group-extended pl-s mb-n\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "                ";
            $context["imageResize"] = $this->env->getExtension('image_extension')->resize($context["image"], array("height" => 150, "width" => 150, "type" => 5));
            // line 20
            echo "                ";
            $context["imageView"] = $this->env->getExtension('image_extension')->resize($context["image"], array("height" => 1024, "width" => 1024, "type" => 5));
            // line 21
            echo "                <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["imageView"]) ? $context["imageView"] : null), "html", null, true);
            echo "\" data-fc-modules=\"modal\" class=\"group-images thumbnail\">
                        <img id=\"image-";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["imageResize"]) ? $context["imageResize"] : null), "html", null, true);
            echo "\" width=\"150\" height=\"150\" />
                    </a>
                    <ul class=\"thumbnail-actions\">
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_image_delete", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            if (array_key_exists("redirect_path", $context)) {
                echo twig_escape_filter($this->env, ("?redirect-path=" . (isset($context["redirect_path"]) ? $context["redirect_path"] : null)), "html", null, true);
            }
            echo "\" class=\"icon-trash-o\" data-fc-delete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "\"></a>
                        </li>
                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("admin_image_upload");
        echo "\" id=\"pickfiles\" class=\"button\" data-fc-modules=\"upload-gallery\">
                <i class=\"icon-file-image-o mr-s\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.info.upload"), "html", null, true);
        echo "
            </a>
            <progress id=\"progresBar\" value=\"0\" max=\"100\" style=\"display: none\"></progress>
            <p class=\"fz-s\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.image.info.format"), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>
";
        
        $__internal_9a5a12b7331beb3b621981cb7f8e8e43200de33d453209122cdbb703daed50cc->leave($__internal_9a5a12b7331beb3b621981cb7f8e8e43200de33d453209122cdbb703daed50cc_prof);

    }

    public function getTemplateName()
    {
        return "AdminMediaBundle:Module:_images-form-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  108 => 34,  104 => 33,  101 => 32,  85 => 27,  76 => 23,  72 => 22,  67 => 21,  64 => 20,  61 => 19,  57 => 18,  53 => 17,  48 => 15,  37 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="grid">*/
/*     <div class="col-1-3">*/
/*         <div id="upload-container" class="box-none">*/
/*             <h3 class="fw-n">{{ 'admin.image.plural'|trans }}</h3>*/
/*             <p>{{ 'admin.image.info.principal'|trans }}{{ 'admin.image.info.reorder'|trans }}</p>*/
/*             <div class="d-n js-images-form-field">*/
/*                 {{ form_row(form.imagesSort, { 'attr': {'class':'js-image-order'}}) }}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="col-2-3">*/
/*         <div class="box" data-fc-modules="image-delete">*/
/*             <div id="thumb-gallery-select" class="d-n">*/
/*                 {{ form_row(form.images, { attr: { class: 'js-images-select' } }) }}*/
/*             </div>*/
/*             <ul id="thumb-gallery" data-fc-modules="sortable" data-fc-input="{{ form.imagesSort.vars.id }}" class="thumbnail-group thumbnail-group-extended pl-s mb-n">*/
/*             {% for image in images %}*/
/*                 {% set imageResize = image|resize({ height: 150, width: 150, type: 5 }) %}*/
/*                 {% set imageView = image|resize({ height: 1024, width: 1024, type: 5 }) %}*/
/*                 <li id="{{ image.id }}">*/
/*                     <a href="{{ imageView }}" data-fc-modules="modal" class="group-images thumbnail">*/
/*                         <img id="image-{{ image.id }}" src="{{ imageResize }}" width="150" height="150" />*/
/*                     </a>*/
/*                     <ul class="thumbnail-actions">*/
/*                         <li>*/
/*                             <a href="{{ url('admin_image_delete', { id: image.id }) }}{% if redirect_path is defined %}{{ '?redirect-path=' ~ redirect_path }}{% endif %}" class="icon-trash-o" data-fc-delete="{{ image.id }}"></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             {% endfor %}*/
/*             </ul>*/
/*             <a href="{{ url('admin_image_upload') }}" id="pickfiles" class="button" data-fc-modules="upload-gallery">*/
/*                 <i class="icon-file-image-o mr-s"></i> {{ 'admin.image.info.upload'|trans }}*/
/*             </a>*/
/*             <progress id="progresBar" value="0" max="100" style="display: none"></progress>*/
/*             <p class="fz-s">{{ 'admin.image.info.format'|trans }}</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
