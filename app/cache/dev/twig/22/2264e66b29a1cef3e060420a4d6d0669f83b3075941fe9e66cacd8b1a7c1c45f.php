<?php

/* AdminMediaBundle:Module:_images-gallery.html.twig */
class __TwigTemplate_5803821e6239cca00d85572d6bb54ea311ca9d96b5a6261e0585d6463bc8838d extends Twig_Template
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
        $__internal_06b93d085d4c76ff45dd5b99def0c95e80dff6cac1caa7097e18c710ae932832 = $this->env->getExtension("native_profiler");
        $__internal_06b93d085d4c76ff45dd5b99def0c95e80dff6cac1caa7097e18c710ae932832->enter($__internal_06b93d085d4c76ff45dd5b99def0c95e80dff6cac1caa7097e18c710ae932832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminMediaBundle:Module:_images-gallery.html.twig"));

        // line 1
        echo "<div class=\"gallery-cont\">
    <ul class=\"thumbnail-group\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "        ";
            $context["imageResize"] = $this->env->getExtension('image_extension')->resize($context["image"], array("height" => 150, "width" => 150, "type" => 5));
            // line 5
            echo "        ";
            $context["imageView"] = $this->env->getExtension('image_extension')->resize($context["image"], array("height" => 1024, "width" => 1024, "type" => 4));
            // line 6
            echo "        <li>
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["imageView"]) ? $context["imageView"] : null), "html", null, true);
            echo "\" class=\"thumbnail\" data-fc-modules=\"modal\">
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["imageResize"]) ? $context["imageResize"] : null), "html", null, true);
            echo "\" width=\"150\" height=\"150\" />
            </a>
            <ul class=\"thumbnail-actions\">
                <li>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_image_delete", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\" class=\"icon-trash-o\"></a>
                </li>
            </ul>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
</div>
";
        
        $__internal_06b93d085d4c76ff45dd5b99def0c95e80dff6cac1caa7097e18c710ae932832->leave($__internal_06b93d085d4c76ff45dd5b99def0c95e80dff6cac1caa7097e18c710ae932832_prof);

    }

    public function getTemplateName()
    {
        return "AdminMediaBundle:Module:_images-gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  50 => 12,  43 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="gallery-cont">*/
/*     <ul class="thumbnail-group">*/
/*     {% for image in images %}*/
/*         {% set imageResize = image|resize({ height: 150, width: 150, type: 5}) %}*/
/*         {% set imageView = image|resize({ height: 1024, width: 1024, type: 4}) %}*/
/*         <li>*/
/*             <a href="{{ imageView }}" class="thumbnail" data-fc-modules="modal">*/
/*                 <img src="{{ imageResize }}" width="150" height="150" />*/
/*             </a>*/
/*             <ul class="thumbnail-actions">*/
/*                 <li>*/
/*                     <a href="{{ url('admin_image_delete', { id: image.id }) }}" class="icon-trash-o"></a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
