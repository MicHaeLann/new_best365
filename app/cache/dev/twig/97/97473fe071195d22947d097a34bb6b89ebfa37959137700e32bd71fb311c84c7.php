<?php

/* @StoreTemplate/Layout/_layout.html.twig */
class __TwigTemplate_9780fdf46d3578c7656d4daa6bc29d5873abcf622ad34d69608936f2e0701656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::_base.html.twig", "@StoreTemplate/Layout/_layout.html.twig", 1);
        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'messages' => array($this, 'block_messages'),
            'breadcrumb_container' => array($this, 'block_breadcrumb_container'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'prefooter' => array($this, 'block_prefooter'),
            'footer' => array($this, 'block_footer'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1b4f95b7c61c173a938c694596271365106bb0a668eb981618e556aed597078 = $this->env->getExtension("native_profiler");
        $__internal_e1b4f95b7c61c173a938c694596271365106bb0a668eb981618e556aed597078->enter($__internal_e1b4f95b7c61c173a938c694596271365106bb0a668eb981618e556aed597078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StoreTemplate/Layout/_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b4f95b7c61c173a938c694596271365106bb0a668eb981618e556aed597078->leave($__internal_e1b4f95b7c61c173a938c694596271365106bb0a668eb981618e556aed597078_prof);

    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_b149650d9c889f915db9204cd432a2994b7ef8988a7f5b3a58659d74b9026831 = $this->env->getExtension("native_profiler");
        $__internal_b149650d9c889f915db9204cd432a2994b7ef8988a7f5b3a58659d74b9026831->enter($__internal_b149650d9c889f915db9204cd432a2994b7ef8988a7f5b3a58659d74b9026831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/storetemplate/css/main.css"), "html", null, true);
        echo "\" />

    <!-- External Font assets -->
    <link href=\"//fonts.googleapis.com/css?family=Bree+Serif\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_b149650d9c889f915db9204cd432a2994b7ef8988a7f5b3a58659d74b9026831->leave($__internal_b149650d9c889f915db9204cd432a2994b7ef8988a7f5b3a58659d74b9026831_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea2c8c80e9a42b7b3e6a522d36b1d6c94f5afe3a5fa8b895b5803dc3abd6decb = $this->env->getExtension("native_profiler");
        $__internal_ea2c8c80e9a42b7b3e6a522d36b1d6c94f5afe3a5fa8b895b5803dc3abd6decb->enter($__internal_ea2c8c80e9a42b7b3e6a522d36b1d6c94f5afe3a5fa8b895b5803dc3abd6decb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        if ($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "backgroundImage", array())) {
            // line 12
            echo "    <style>
       html {
           background-image:url('";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('image_extension')->resize($this->getAttribute((isset($context["store"]) ? $context["store"] : null), "backgroundImage", array()), array("height" => 1200, "width" => 1200, "type" => 2)), "html", null, true);
            echo "');
       }
    </style>
    ";
        }
        // line 18
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_ea2c8c80e9a42b7b3e6a522d36b1d6c94f5afe3a5fa8b895b5803dc3abd6decb->leave($__internal_ea2c8c80e9a42b7b3e6a522d36b1d6c94f5afe3a5fa8b895b5803dc3abd6decb_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_8328080ace7bd54769002464c256b15a66157b821d2b22cee394b87e610446b4 = $this->env->getExtension("native_profiler");
        $__internal_8328080ace7bd54769002464c256b15a66157b821d2b22cee394b87e610446b4->enter($__internal_8328080ace7bd54769002464c256b15a66157b821d2b22cee394b87e610446b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "        ";
        $this->loadTemplate("@StoreTemplate/Modules/_header.html.twig", "@StoreTemplate/Layout/_layout.html.twig", 19)->display($context);
        // line 20
        echo "    ";
        
        $__internal_8328080ace7bd54769002464c256b15a66157b821d2b22cee394b87e610446b4->leave($__internal_8328080ace7bd54769002464c256b15a66157b821d2b22cee394b87e610446b4_prof);

    }

    // line 22
    public function block_container($context, array $blocks = array())
    {
        $__internal_0d12bc4211f3d59c8af259ca421078bf686176af58e927076d5dc9467b82bbbf = $this->env->getExtension("native_profiler");
        $__internal_0d12bc4211f3d59c8af259ca421078bf686176af58e927076d5dc9467b82bbbf->enter($__internal_0d12bc4211f3d59c8af259ca421078bf686176af58e927076d5dc9467b82bbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('messages', $context, $blocks);
        // line 27
        echo "
        <div class=\"grid grid-pad\">
            <div class=\"col-1-1\">
                ";
        // line 30
        $this->displayBlock('breadcrumb_container', $context, $blocks);
        // line 44
        echo "
                ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "            </div>
        </div>
        ";
        // line 48
        $this->displayBlock('prefooter', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "
    ";
        
        $__internal_0d12bc4211f3d59c8af259ca421078bf686176af58e927076d5dc9467b82bbbf->leave($__internal_0d12bc4211f3d59c8af259ca421078bf686176af58e927076d5dc9467b82bbbf_prof);

    }

    // line 24
    public function block_messages($context, array $blocks = array())
    {
        $__internal_62e661d50039cfc672bf327a514b6e9b4b5f56b099c330c42032e8cebf3af0c2 = $this->env->getExtension("native_profiler");
        $__internal_62e661d50039cfc672bf327a514b6e9b4b5f56b099c330c42032e8cebf3af0c2->enter($__internal_62e661d50039cfc672bf327a514b6e9b4b5f56b099c330c42032e8cebf3af0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 25
        echo "            ";
        $this->loadTemplate("@StoreTemplate/Modules/_message-list.html.twig", "@StoreTemplate/Layout/_layout.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        
        $__internal_62e661d50039cfc672bf327a514b6e9b4b5f56b099c330c42032e8cebf3af0c2->leave($__internal_62e661d50039cfc672bf327a514b6e9b4b5f56b099c330c42032e8cebf3af0c2_prof);

    }

    // line 30
    public function block_breadcrumb_container($context, array $blocks = array())
    {
        $__internal_f35c88b3eefc7f864c7f360679fe7adebbcb8b621cd69fad86adf12daae56666 = $this->env->getExtension("native_profiler");
        $__internal_f35c88b3eefc7f864c7f360679fe7adebbcb8b621cd69fad86adf12daae56666->enter($__internal_f35c88b3eefc7f864c7f360679fe7adebbcb8b621cd69fad86adf12daae56666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_container"));

        // line 31
        echo "                    <nav class=\"breadcrumb desktop\">
                        <ul>
                            <li>
                                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("store_homepage");
        echo "\" class=\"logo\">
                                    <i class=\"fa fa-home\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
        echo "
                                </a>
                                <i class=\"fa fa-angle-right\"></i>
                            </li>
                            ";
        // line 39
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 40
        echo "                        </ul>
                    </nav>

                ";
        
        $__internal_f35c88b3eefc7f864c7f360679fe7adebbcb8b621cd69fad86adf12daae56666->leave($__internal_f35c88b3eefc7f864c7f360679fe7adebbcb8b621cd69fad86adf12daae56666_prof);

    }

    // line 39
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fe4b06118984befe1fe3e8e225cd04baa3678e72017654e28df50b9c79b6ab22 = $this->env->getExtension("native_profiler");
        $__internal_fe4b06118984befe1fe3e8e225cd04baa3678e72017654e28df50b9c79b6ab22->enter($__internal_fe4b06118984befe1fe3e8e225cd04baa3678e72017654e28df50b9c79b6ab22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_fe4b06118984befe1fe3e8e225cd04baa3678e72017654e28df50b9c79b6ab22->leave($__internal_fe4b06118984befe1fe3e8e225cd04baa3678e72017654e28df50b9c79b6ab22_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee80a915fa3f5fefef5ef81a83c99acd0062d55133b4ade0343a0d70c71e0252 = $this->env->getExtension("native_profiler");
        $__internal_ee80a915fa3f5fefef5ef81a83c99acd0062d55133b4ade0343a0d70c71e0252->enter($__internal_ee80a915fa3f5fefef5ef81a83c99acd0062d55133b4ade0343a0d70c71e0252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ee80a915fa3f5fefef5ef81a83c99acd0062d55133b4ade0343a0d70c71e0252->leave($__internal_ee80a915fa3f5fefef5ef81a83c99acd0062d55133b4ade0343a0d70c71e0252_prof);

    }

    // line 48
    public function block_prefooter($context, array $blocks = array())
    {
        $__internal_1df077ccdb91c7ce00ef93afc476f9cea3e3e00b6e3bb23e0009b3e4c47a8fb7 = $this->env->getExtension("native_profiler");
        $__internal_1df077ccdb91c7ce00ef93afc476f9cea3e3e00b6e3bb23e0009b3e4c47a8fb7->enter($__internal_1df077ccdb91c7ce00ef93afc476f9cea3e3e00b6e3bb23e0009b3e4c47a8fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prefooter"));

        
        $__internal_1df077ccdb91c7ce00ef93afc476f9cea3e3e00b6e3bb23e0009b3e4c47a8fb7->leave($__internal_1df077ccdb91c7ce00ef93afc476f9cea3e3e00b6e3bb23e0009b3e4c47a8fb7_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_07def7b97083a4222bd22a284f2cec7bf5f66e220ab4560dfc6eb056eaedbd0c = $this->env->getExtension("native_profiler");
        $__internal_07def7b97083a4222bd22a284f2cec7bf5f66e220ab4560dfc6eb056eaedbd0c->enter($__internal_07def7b97083a4222bd22a284f2cec7bf5f66e220ab4560dfc6eb056eaedbd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
        ";
        // line 51
        $this->loadTemplate("@StoreTemplate/Modules/_footer.html.twig", "@StoreTemplate/Layout/_layout.html.twig", 51)->display($context);
        // line 52
        echo "
        ";
        
        $__internal_07def7b97083a4222bd22a284f2cec7bf5f66e220ab4560dfc6eb056eaedbd0c->leave($__internal_07def7b97083a4222bd22a284f2cec7bf5f66e220ab4560dfc6eb056eaedbd0c_prof);

    }

    // line 58
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_8f32d5c2e58ceefb24a43217b3c7f1321dbbcd06e94408d26d5dd40aab89d857 = $this->env->getExtension("native_profiler");
        $__internal_8f32d5c2e58ceefb24a43217b3c7f1321dbbcd06e94408d26d5dd40aab89d857->enter($__internal_8f32d5c2e58ceefb24a43217b3c7f1321dbbcd06e94408d26d5dd40aab89d857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        // line 59
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/storetemplate/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8f32d5c2e58ceefb24a43217b3c7f1321dbbcd06e94408d26d5dd40aab89d857->leave($__internal_8f32d5c2e58ceefb24a43217b3c7f1321dbbcd06e94408d26d5dd40aab89d857_prof);

    }

    public function getTemplateName()
    {
        return "@StoreTemplate/Layout/_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 60,  260 => 59,  254 => 58,  246 => 52,  244 => 51,  241 => 50,  235 => 49,  224 => 48,  213 => 45,  202 => 39,  192 => 40,  190 => 39,  183 => 35,  179 => 34,  174 => 31,  168 => 30,  161 => 26,  158 => 25,  152 => 24,  144 => 54,  141 => 49,  139 => 48,  135 => 46,  133 => 45,  130 => 44,  128 => 30,  123 => 27,  121 => 24,  118 => 23,  112 => 22,  105 => 20,  102 => 19,  96 => 18,  89 => 22,  86 => 21,  83 => 18,  76 => 14,  72 => 12,  69 => 11,  63 => 10,  50 => 4,  44 => 3,  11 => 1,);
    }
}
/* {% extends '::_base.html.twig' %}*/
/* */
/* {% block head_style %}*/
/*     <link rel="stylesheet" type="text/css" media="all" href="{{ asset('bundles/storetemplate/css/main.css') }}" />*/
/* */
/*     <!-- External Font assets -->*/
/*     <link href="//fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css" />*/
/* {% endblock head_style %}*/
/* */
/* {% block body %}*/
/*     {% if store.backgroundImage %}*/
/*     <style>*/
/*        html {*/
/*            background-image:url('{{ store.backgroundImage|resize({ height: 1200, width: 1200, type: 2 })  }}');*/
/*        }*/
/*     </style>*/
/*     {% endif %}*/
/*     {% block header %}*/
/*         {% include '@StoreTemplate/Modules/_header.html.twig' %}*/
/*     {% endblock header %}*/
/* */
/*     {% block container %}*/
/* */
/*         {% block messages %}*/
/*             {% include "@StoreTemplate/Modules/_message-list.html.twig" %}*/
/*         {% endblock messages %}*/
/* */
/*         <div class="grid grid-pad">*/
/*             <div class="col-1-1">*/
/*                 {% block breadcrumb_container %}*/
/*                     <nav class="breadcrumb desktop">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ url('store_homepage') }}" class="logo">*/
/*                                     <i class="fa fa-home"></i> {{ store.name }}*/
/*                                 </a>*/
/*                                 <i class="fa fa-angle-right"></i>*/
/*                             </li>*/
/*                             {% block breadcrumb %}{% endblock breadcrumb %}*/
/*                         </ul>*/
/*                     </nav>*/
/* */
/*                 {% endblock breadcrumb_container %}*/
/* */
/*                 {% block content %}{% endblock content %}*/
/*             </div>*/
/*         </div>*/
/*         {% block prefooter %}{% endblock prefooter %}*/
/*         {%  block footer %}*/
/* */
/*         {% include '@StoreTemplate/Modules/_footer.html.twig' %}*/
/* */
/*         {%  endblock footer %}*/
/* */
/*     {% endblock container %}*/
/* {% endblock body %}*/
/* */
/* {% block foot_script %}*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>*/
/* <script src="{{ asset('bundles/storetemplate/js/bootstrap.min.js') }}"></script>*/
/* {% endblock foot_script %}*/
/* */
