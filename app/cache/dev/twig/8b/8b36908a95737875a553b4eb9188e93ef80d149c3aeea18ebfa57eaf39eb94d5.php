<?php

/* StoreTemplateBundle:Modules:_message-list.html.twig */
class __TwigTemplate_34900755c4167e109cd42b156db37a5b454f00fce1a6a9e673cc9bba099b1a67 extends Twig_Template
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
        $__internal_a33dffb558c033674187c707f0a590e05093a8298d531b61d6aa4add2a2ee4d5 = $this->env->getExtension("native_profiler");
        $__internal_a33dffb558c033674187c707f0a590e05093a8298d531b61d6aa4add2a2ee4d5->enter($__internal_a33dffb558c033674187c707f0a590e05093a8298d531b61d6aa4add2a2ee4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreTemplateBundle:Modules:_message-list.html.twig"));

        // line 1
        echo "<div class=\"grid message-grid\">
    <div class=\"col-1-1\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "    ";
            $this->loadTemplate("@StoreTemplate/Modules/_message-item.html.twig", "StoreTemplateBundle:Modules:_message-list.html.twig", 5)->display(array_merge($context, array("flashMessage" => $context["flashMessage"], "class" => "")));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    ";
            $this->loadTemplate("@StoreTemplate/Modules/_message-item.html.twig", "StoreTemplateBundle:Modules:_message-list.html.twig", 10)->display(array_merge($context, array("flashMessage" => $context["flashMessage"], "class" => "message-ok")));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notification"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "    ";
            $this->loadTemplate("@StoreTemplate/Modules/_message-item.html.twig", "StoreTemplateBundle:Modules:_message-list.html.twig", 15)->display(array_merge($context, array("flashMessage" => $context["flashMessage"], "class" => "message-info")));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "alert"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "    ";
            $this->loadTemplate("@StoreTemplate/Modules/_message-item.html.twig", "StoreTemplateBundle:Modules:_message-list.html.twig", 20)->display(array_merge($context, array("flashMessage" => $context["flashMessage"], "class" => "message-warning")));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "    ";
            $this->loadTemplate("@StoreTemplate/Modules/_message-item.html.twig", "StoreTemplateBundle:Modules:_message-list.html.twig", 25)->display(array_merge($context, array("flashMessage" => $context["flashMessage"], "class" => "message-ko")));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
</div>
";
        
        $__internal_a33dffb558c033674187c707f0a590e05093a8298d531b61d6aa4add2a2ee4d5->leave($__internal_a33dffb558c033674187c707f0a590e05093a8298d531b61d6aa4add2a2ee4d5_prof);

    }

    public function getTemplateName()
    {
        return "StoreTemplateBundle:Modules:_message-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 27,  183 => 25,  166 => 24,  163 => 22,  148 => 20,  131 => 19,  128 => 17,  113 => 15,  96 => 14,  93 => 12,  78 => 10,  61 => 9,  58 => 7,  43 => 5,  26 => 4,  22 => 1,);
    }
}
/* <div class="grid message-grid">*/
/*     <div class="col-1-1">*/
/* {# Notice message (yellow) #}*/
/* {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*     {% include "@StoreTemplate/Modules/_message-item.html.twig" with {flashMessage: flashMessage, class: ''} %}*/
/* {% endfor %}*/
/* */
/* {# Success message (green) #}*/
/* {% for flashMessage in app.session.flashbag.get('success') %}*/
/*     {% include "@StoreTemplate/Modules/_message-item.html.twig" with {flashMessage: flashMessage, class: 'message-ok'} %}*/
/* {% endfor %}*/
/* */
/* {# Info message (blue) #}*/
/* {% for flashMessage in app.session.flashbag.get('notification') %}*/
/*     {% include "@StoreTemplate/Modules/_message-item.html.twig" with {flashMessage: flashMessage, class: 'message-info'} %}*/
/* {% endfor %}*/
/* */
/* {# Warning message (yellow) #}*/
/* {% for flashMessage in app.session.flashbag.get('alert') %}*/
/*     {% include "@StoreTemplate/Modules/_message-item.html.twig" with {flashMessage: flashMessage, class: 'message-warning'} %}*/
/* {% endfor %}*/
/* */
/* {# Error message (red) #}*/
/* {% for flashMessage in app.session.flashbag.get('error') %}*/
/*     {% include "@StoreTemplate/Modules/_message-item.html.twig" with {flashMessage: flashMessage, class: 'message-ko'} %}*/
/* {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
