<?php

/* StoreTemplateBundle::fields.html.twig */
class __TwigTemplate_af89c7475dc39a720df9921f25de040aa4b1dc7cffa9c65f5dc64f6eb668ea95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b253adc075975aeaad3d80b6265f99c46249999f634e81e2bc189758dbf12b02 = $this->env->getExtension("native_profiler");
        $__internal_b253adc075975aeaad3d80b6265f99c46249999f634e81e2bc189758dbf12b02->enter($__internal_b253adc075975aeaad3d80b6265f99c46249999f634e81e2bc189758dbf12b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle::fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 10
        echo "

";
        // line 12
        $this->displayBlock('button_row', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('form_label', $context, $blocks);
        
        $__internal_b253adc075975aeaad3d80b6265f99c46249999f634e81e2bc189758dbf12b02->leave($__internal_b253adc075975aeaad3d80b6265f99c46249999f634e81e2bc189758dbf12b02_prof);

    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b23e418307b6d962fd4463e58a9150fe69f91c77a34e966b10a9fa1daa30f614 = $this->env->getExtension("native_profiler");
        $__internal_b23e418307b6d962fd4463e58a9150fe69f91c77a34e966b10a9fa1daa30f614->enter($__internal_b23e418307b6d962fd4463e58a9150fe69f91c77a34e966b10a9fa1daa30f614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        ob_start();
        // line 3
        echo "    <p>
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </p>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b23e418307b6d962fd4463e58a9150fe69f91c77a34e966b10a9fa1daa30f614->leave($__internal_b23e418307b6d962fd4463e58a9150fe69f91c77a34e966b10a9fa1daa30f614_prof);

    }

    // line 12
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a6f5aa8634d442c688581814b8cad3aa9e5486f4996149a217b87c338b275b67 = $this->env->getExtension("native_profiler");
        $__internal_a6f5aa8634d442c688581814b8cad3aa9e5486f4996149a217b87c338b275b67->enter($__internal_a6f5aa8634d442c688581814b8cad3aa9e5486f4996149a217b87c338b275b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a6f5aa8634d442c688581814b8cad3aa9e5486f4996149a217b87c338b275b67->leave($__internal_a6f5aa8634d442c688581814b8cad3aa9e5486f4996149a217b87c338b275b67_prof);

    }

    // line 19
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_53cfb372182d38d9910216889866793e8e9d51d346732b46cd9a06b7b1b21a31 = $this->env->getExtension("native_profiler");
        $__internal_53cfb372182d38d9910216889866793e8e9d51d346732b46cd9a06b7b1b21a31->enter($__internal_53cfb372182d38d9910216889866793e8e9d51d346732b46cd9a06b7b1b21a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 20
        ob_start();
        // line 21
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 22
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 23
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 24
                echo "        ";
            }
            // line 25
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 26
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 27
                echo "            ";
                $context["mand"] = true;
                // line 28
                echo "        ";
            }
            // line 29
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 30
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 31
                echo "        ";
            }
            // line 32
            echo "        <label
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                // line 34
                echo "                ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        >
            ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "
            ";
            // line 38
            if ((isset($context["mand"]) ? $context["mand"] : null)) {
                echo "<span class=\"mand\">&nbsp;*</span>";
            }
            // line 39
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53cfb372182d38d9910216889866793e8e9d51d346732b46cd9a06b7b1b21a31->leave($__internal_53cfb372182d38d9910216889866793e8e9d51d346732b46cd9a06b7b1b21a31_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 39,  159 => 38,  155 => 37,  152 => 36,  141 => 34,  137 => 33,  134 => 32,  131 => 31,  128 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  99 => 20,  93 => 19,  82 => 14,  80 => 13,  74 => 12,  63 => 6,  59 => 5,  55 => 4,  52 => 3,  50 => 2,  44 => 1,  37 => 19,  33 => 17,  31 => 12,  27 => 10,  25 => 1,);
    }
}
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <p>*/
/*         {{ form_label(form) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_widget(form) }}*/
/*     </p>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* */
/* {% block button_row %}*/
/* {% spaceless %}*/
/*     {{ form_widget(form) }}*/
/* {% endspaceless %}*/
/* {% endblock button_row %}*/
/* */
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not sameas(false) %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({ for: id }) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({ class: (label_attr.class|default('') ~ ' required')|trim }) %}*/
/*             {% set mand = true %}*/
/*         {% endif %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label*/
/*             {% for attrname, attrvalue in label_attr %}*/
/*                 {{ attrname }}="{{ attrvalue }}"*/
/*             {% endfor %}*/
/*         >*/
/*             {{ label|trans }}*/
/*             {% if mand %}<span class="mand">&nbsp;*</span>{% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
