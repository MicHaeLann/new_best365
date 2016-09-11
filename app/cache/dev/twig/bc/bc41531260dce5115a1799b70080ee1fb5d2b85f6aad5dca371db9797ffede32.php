<?php

/* AdminCoreBundle:Navs:side_elements_mobile.html.twig */
class __TwigTemplate_28bd59065ed1fb3adecbf0ad148f710a89bc0834b3c1aa38caa3408a2ef4719a extends Twig_Template
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
        $__internal_222a6a1181841846a8b18e149a23cac1623226fcbf87b34d2782ffb8224944cb = $this->env->getExtension("native_profiler");
        $__internal_222a6a1181841846a8b18e149a23cac1623226fcbf87b34d2782ffb8224944cb->enter($__internal_222a6a1181841846a8b18e149a23cac1623226fcbf87b34d2782ffb8224944cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Navs:side_elements_mobile.html.twig"));

        // line 8
        echo "

";
        // line 49
        echo "

";
        
        $__internal_222a6a1181841846a8b18e149a23cac1623226fcbf87b34d2782ffb8224944cb->leave($__internal_222a6a1181841846a8b18e149a23cac1623226fcbf87b34d2782ffb8224944cb_prof);

    }

    // line 1
    public function getshowNodes($__menu__ = null, $__tag__ = null, $__route__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "tag" => $__tag__,
            "route" => $__route__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_debf5e4ae390459340f106709d986d0d1080f35f887dae6f6a3f763e37e58934 = $this->env->getExtension("native_profiler");
            $__internal_debf5e4ae390459340f106709d986d0d1080f35f887dae6f6a3f763e37e58934->enter($__internal_debf5e4ae390459340f106709d986d0d1080f35f887dae6f6a3f763e37e58934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showNodes"));

            // line 2
            echo "    ";
            $context["side_elements_mobile"] = $this;
            // line 3
            echo "    ";
            $context["nodes"] = $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "getSubnodesByTag", array(0 => (isset($context["tag"]) ? $context["tag"] : null)), "method");
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nodes"]) ? $context["nodes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 5
                echo "        ";
                echo $context["side_elements_mobile"]->getshowNode($context["node"], (isset($context["route"]) ? $context["route"] : null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_debf5e4ae390459340f106709d986d0d1080f35f887dae6f6a3f763e37e58934->leave($__internal_debf5e4ae390459340f106709d986d0d1080f35f887dae6f6a3f763e37e58934_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshowNode($__node__ = null, $__route__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "node" => $__node__,
            "route" => $__route__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6be1c857e0a7f581e0f426f6ee3760e7304527574f274540465615fac570de69 = $this->env->getExtension("native_profiler");
            $__internal_6be1c857e0a7f581e0f426f6ee3760e7304527574f274540465615fac570de69->enter($__internal_6be1c857e0a7f581e0f426f6ee3760e7304527574f274540465615fac570de69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showNode"));

            // line 11
            echo "    <li class=\"";
            if ($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isActive", array(0 => (isset($context["route"]) ? $context["route"] : null)), "method")) {
                echo "active";
            }
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "subnodes", array()))) {
                echo "parent";
            }
            echo "\" data-test=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "name", array()), "html", null, true);
            echo "\">
    ";
            // line 12
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "subnodes", array())) == 0)) {
                // line 13
                echo "        ";
                $context["node_url"] = ((twig_test_iterable($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "url", array()))) ? ($this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute(                // line 14
(isset($context["node"]) ? $context["node"] : null), "url", array()), 0, array(), "array"), $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "url", array()), 1, array(), "array"))) : ($this->env->getExtension('routing')->getUrl($this->getAttribute(                // line 15
(isset($context["node"]) ? $context["node"] : null), "url", array()))));
                // line 17
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["node_url"]) ? $context["node_url"] : null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 19
                echo "        <a href=\"#";
                echo twig_escape_filter($this->env, $this->env->getExtension('encrypt_extension')->md5($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "name", array())), "html", null, true);
                echo "\" data-fc-modules=\"toggle\">
            <i class=\"icon-caret-down fl-r\"></i>
    ";
            }
            // line 22
            echo "    ";
            if ( !(null === $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "warnings", array()))) {
                echo "<span class=\"badge";
                if (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "warnings", array()) > 0)) {
                    echo " badge-alert";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "warnings", array()), "html", null, true);
                echo "</span>";
            }
            // line 23
            echo "            <span class=\"mobile tablet\">
                <i class=\"icon-";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "code", array()), "folder")) : ("folder")), "html", null, true);
            echo " fz-xl va-m mr-s\"></i>
                <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "name", array())), "html", null, true);
            echo "</span>
            </span>
            <span class=\"desktop\">
                <i class=\"icon-";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "code", array()), "folder")) : ("folder")), "html", null, true);
            echo " mr-m\"></i>
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "name", array())), "html", null, true);
            echo "
            </span>
        </a>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "subnodes", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subnode"]) {
                // line 33
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 34
                    echo "                <ul id=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('encrypt_extension')->md5($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "name", array())), "html", null, true);
                    echo "\" ";
                    if ( !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isExpanded", array(0 => (isset($context["route"]) ? $context["route"] : null)), "method")) {
                        echo "class=\"hidden\"";
                    }
                    echo ">
            ";
                }
                // line 36
                echo "            <li ";
                if ($this->getAttribute($context["subnode"], "isActive", array(0 => (isset($context["route"]) ? $context["route"] : null)), "method")) {
                    echo "class=\"active\"";
                }
                echo " data-test=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subnode"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 37
                $context["subnode_url"] = ((twig_test_iterable($this->getAttribute($context["subnode"], "url", array()))) ? ($this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute(                // line 38
$context["subnode"], "url", array()), 0, array(), "array"), $this->getAttribute($this->getAttribute($context["subnode"], "url", array()), 1, array(), "array"))) : ($this->env->getExtension('routing')->getUrl($this->getAttribute(                // line 39
$context["subnode"], "url", array()))));
                // line 41
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["subnode_url"]) ? $context["subnode_url"] : null), "html", null, true);
                echo "\" class=\"pl-l\"><i class=\"icon-angle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["subnode"], "name", array())), "html", null, true);
                echo "</a>
            </li>
            ";
                // line 43
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 44
                    echo "                </ul>
            ";
                }
                // line 46
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subnode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </li>
";
            
            $__internal_6be1c857e0a7f581e0f426f6ee3760e7304527574f274540465615fac570de69->leave($__internal_6be1c857e0a7f581e0f426f6ee3760e7304527574f274540465615fac570de69_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getseparator()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8ea80ac00eaa1a21ecb2bf442f4da0ebad3d649d047b780c25560a489b85202b = $this->env->getExtension("native_profiler");
            $__internal_8ea80ac00eaa1a21ecb2bf442f4da0ebad3d649d047b780c25560a489b85202b->enter($__internal_8ea80ac00eaa1a21ecb2bf442f4da0ebad3d649d047b780c25560a489b85202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "separator"));

            // line 52
            echo "    <li class=\"pt-s\">
        <hr class=\"rule\" />
    </li>
";
            
            $__internal_8ea80ac00eaa1a21ecb2bf442f4da0ebad3d649d047b780c25560a489b85202b->leave($__internal_8ea80ac00eaa1a21ecb2bf442f4da0ebad3d649d047b780c25560a489b85202b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Navs:side_elements_mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 52,  252 => 51,  237 => 47,  223 => 46,  219 => 44,  217 => 43,  209 => 41,  207 => 39,  206 => 38,  205 => 37,  196 => 36,  186 => 34,  183 => 33,  166 => 32,  160 => 29,  156 => 28,  150 => 25,  146 => 24,  143 => 23,  132 => 22,  125 => 19,  119 => 17,  117 => 15,  116 => 14,  114 => 13,  112 => 12,  100 => 11,  84 => 10,  63 => 5,  58 => 4,  55 => 3,  52 => 2,  35 => 1,  26 => 49,  22 => 8,);
    }
}
/* {% macro showNodes(menu, tag, route) %}*/
/*     {% import _self as side_elements_mobile %}*/
/*     {% set nodes = menu.getSubnodesByTag(tag) %}*/
/*     {% for node in nodes %}*/
/*         {{ side_elements_mobile.showNode(node, route) }}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro showNode(node, route) %}*/
/*     <li class="{% if node.isActive(route) %}active{% endif %}{% if node.subnodes|length %}parent{% endif %}" data-test="{{ node.name }}">*/
/*     {% if node.subnodes|length == 0 %}*/
/*         {% set node_url = node.url is iterable*/
/*             ? url(node.url[0], node.url[1])*/
/*             : url(node.url)*/
/*         %}*/
/*         <a href="{{ node_url }}">*/
/*     {% else %}*/
/*         <a href="#{{ node.name|md5 }}" data-fc-modules="toggle">*/
/*             <i class="icon-caret-down fl-r"></i>*/
/*     {% endif %}*/
/*     {% if node.warnings is not null %}<span class="badge{% if node.warnings > 0 %} badge-alert{% endif %}">{{ node.warnings }}</span>{% endif %}*/
/*             <span class="mobile tablet">*/
/*                 <i class="icon-{{ node.code|default("folder") }} fz-xl va-m mr-s"></i>*/
/*                 <span>{{ node.name|trans }}</span>*/
/*             </span>*/
/*             <span class="desktop">*/
/*                 <i class="icon-{{ node.code|default("folder") }} mr-m"></i>*/
/*                 {{ node.name|trans }}*/
/*             </span>*/
/*         </a>*/
/*         {% for subnode in node.subnodes %}*/
/*             {% if loop.first %}*/
/*                 <ul id="{{ node.name|md5 }}" {% if not node.isExpanded(route) %}class="hidden"{% endif %}>*/
/*             {% endif %}*/
/*             <li {% if subnode.isActive(route) %}class="active"{% endif %} data-test="{{ subnode.name }}">*/
/*                 {% set subnode_url = subnode.url is iterable*/
/*                     ? url(subnode.url[0], subnode.url[1])*/
/*                     : url(subnode.url)*/
/*                 %}*/
/*                 <a href="{{ subnode_url }}" class="pl-l"><i class="icon-angle-right"></i> {{ subnode.name|trans }}</a>*/
/*             </li>*/
/*             {% if loop.last %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro separator() %}*/
/*     <li class="pt-s">*/
/*         <hr class="rule" />*/
/*     </li>*/
/* {% endmacro %}*/
/* */
