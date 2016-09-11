<?php

/* AdminCoreBundle:Forms:fields.html.twig */
class __TwigTemplate_70a6efbe6ee0f2a121217da941334193ea2c62a449b6d2906ad7e835da0cb123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'number_widget' => array($this, 'block_number_widget'),
            'form_row' => array($this, 'block_form_row'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'money_object_label' => array($this, 'block_money_object_label'),
            'money_object_widget' => array($this, 'block_money_object_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c9cbf374b0b8f0ee6821c82359616ce10555709c06abb94a48c4997b8cad8b8 = $this->env->getExtension("native_profiler");
        $__internal_5c9cbf374b0b8f0ee6821c82359616ce10555709c06abb94a48c4997b8cad8b8->enter($__internal_5c9cbf374b0b8f0ee6821c82359616ce10555709c06abb94a48c4997b8cad8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Forms:fields.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 23
        echo "

";
        // line 25
        $this->displayBlock('number_widget', $context, $blocks);
        // line 32
        echo "

";
        // line 34
        $this->displayBlock('form_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 82
        echo "

";
        // line 84
        $this->displayBlock('form_label', $context, $blocks);
        // line 96
        echo "

";
        // line 98
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 108
        echo "

";
        // line 110
        $this->displayBlock('money_object_label', $context, $blocks);
        // line 116
        echo "

";
        // line 118
        $this->displayBlock('money_object_widget', $context, $blocks);
        // line 128
        echo "

";
        // line 130
        $this->displayBlock('date_widget', $context, $blocks);
        // line 145
        echo "

";
        // line 147
        $this->displayBlock('time_widget', $context, $blocks);
        // line 162
        echo "

";
        // line 164
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 182
        echo "

";
        // line 184
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 195
        echo "

";
        // line 197
        $this->displayBlock('url_widget', $context, $blocks);
        // line 204
        echo "

";
        // line 206
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_5c9cbf374b0b8f0ee6821c82359616ce10555709c06abb94a48c4997b8cad8b8->leave($__internal_5c9cbf374b0b8f0ee6821c82359616ce10555709c06abb94a48c4997b8cad8b8_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_74ab7a9ad1dea9926b672fd71bc28fa4abb3b978808f563af329c4db49c69a80 = $this->env->getExtension("native_profiler");
        $__internal_74ab7a9ad1dea9926b672fd71bc28fa4abb3b978808f563af329c4db49c69a80->enter($__internal_74ab7a9ad1dea9926b672fd71bc28fa4abb3b978808f563af329c4db49c69a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 4
        echo "    ";
        $context["form_method"] = ((((isset($context["method"]) ? $context["method"] : null) == "GET")) ? ((isset($context["method"]) ? $context["method"] : null)) : ("POST"));
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "form"));
        // line 6
        echo "    <form role=\"form\"
        name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
        data-fc-modules=\"form-validation\"
        method=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\"
        action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            // line 15
            echo "            enctype=\"multipart/form-data\"
        ";
        }
        // line 17
        echo "    >
    ";
        // line 18
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 19
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_74ab7a9ad1dea9926b672fd71bc28fa4abb3b978808f563af329c4db49c69a80->leave($__internal_74ab7a9ad1dea9926b672fd71bc28fa4abb3b978808f563af329c4db49c69a80_prof);

    }

    // line 25
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_7047a9da83852f9c0eab4fcb7bf268888f46da26ebd0871d55ccc5b9a67edd02 = $this->env->getExtension("native_profiler");
        $__internal_7047a9da83852f9c0eab4fcb7bf268888f46da26ebd0871d55ccc5b9a67edd02->enter($__internal_7047a9da83852f9c0eab4fcb7bf268888f46da26ebd0871d55ccc5b9a67edd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 29
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7047a9da83852f9c0eab4fcb7bf268888f46da26ebd0871d55ccc5b9a67edd02->leave($__internal_7047a9da83852f9c0eab4fcb7bf268888f46da26ebd0871d55ccc5b9a67edd02_prof);

    }

    // line 34
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dd0015d53deba219ca00d091c71ff352e95df76b1309d010138aa85630609413 = $this->env->getExtension("native_profiler");
        $__internal_dd0015d53deba219ca00d091c71ff352e95df76b1309d010138aa85630609413->enter($__internal_dd0015d53deba219ca00d091c71ff352e95df76b1309d010138aa85630609413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 35
        ob_start();
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array()), 1, array()) != "checkbox")) {
            // line 38
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
    ";
        }
        // line 40
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd0015d53deba219ca00d091c71ff352e95df76b1309d010138aa85630609413->leave($__internal_dd0015d53deba219ca00d091c71ff352e95df76b1309d010138aa85630609413_prof);

    }

    // line 44
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_d45afc361ea5ae958bfa43dfd0c793a09cf4049ee4a44fab2b9b3eb63912e249 = $this->env->getExtension("native_profiler");
        $__internal_d45afc361ea5ae958bfa43dfd0c793a09cf4049ee4a44fab2b9b3eb63912e249->enter($__internal_d45afc361ea5ae958bfa43dfd0c793a09cf4049ee4a44fab2b9b3eb63912e249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 47
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 49
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 51
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d45afc361ea5ae958bfa43dfd0c793a09cf4049ee4a44fab2b9b3eb63912e249->leave($__internal_d45afc361ea5ae958bfa43dfd0c793a09cf4049ee4a44fab2b9b3eb63912e249_prof);

    }

    // line 54
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e5c88a32429a3c1b0366b271acf39144753e78d6a35599946d09b7e8c07c691b = $this->env->getExtension("native_profiler");
        $__internal_e5c88a32429a3c1b0366b271acf39144753e78d6a35599946d09b7e8c07c691b->enter($__internal_e5c88a32429a3c1b0366b271acf39144753e78d6a35599946d09b7e8c07c691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"list-horizontal\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 58
            echo "                <li>
                    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </ul>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e5c88a32429a3c1b0366b271acf39144753e78d6a35599946d09b7e8c07c691b->leave($__internal_e5c88a32429a3c1b0366b271acf39144753e78d6a35599946d09b7e8c07c691b_prof);

    }

    // line 66
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5b9233a69a105c9199094e58b1f740deb63bb121549d1e04b262d677acf16b31 = $this->env->getExtension("native_profiler");
        $__internal_5b9233a69a105c9199094e58b1f740deb63bb121549d1e04b262d677acf16b31->enter($__internal_5b9233a69a105c9199094e58b1f740deb63bb121549d1e04b262d677acf16b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 67
        echo "    ";
        ob_start();
        // line 68
        echo "        <label>
            <input type=\"radio\"
                    ";
        // line 70
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
                    ";
        // line 71
        if (array_key_exists("value", $context)) {
            // line 72
            echo "                        value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
                    ";
        }
        // line 74
        echo "                    ";
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            // line 75
            echo "                        checked=\"checked\"
                    ";
        }
        // line 77
        echo "                    />
            ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5b9233a69a105c9199094e58b1f740deb63bb121549d1e04b262d677acf16b31->leave($__internal_5b9233a69a105c9199094e58b1f740deb63bb121549d1e04b262d677acf16b31_prof);

    }

    // line 84
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_83a68fc5f4203fb126733af5c07c1da32edab0ac7e595934d0fd322d4ef6f738 = $this->env->getExtension("native_profiler");
        $__internal_83a68fc5f4203fb126733af5c07c1da32edab0ac7e595934d0fd322d4ef6f738->enter($__internal_83a68fc5f4203fb126733af5c07c1da32edab0ac7e595934d0fd322d4ef6f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 85
        ob_start();
        // line 86
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : null) === false) && array_key_exists("label", $context))) {
            // line 87
            echo "        <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "
            ";
            // line 89
            if (array_key_exists("label_help", $context)) {
                // line 90
                echo "                <em>";
                echo twig_escape_filter($this->env, (isset($context["label_help"]) ? $context["label_help"] : null), "html", null, true);
                echo "</em>
            ";
            }
            // line 92
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_83a68fc5f4203fb126733af5c07c1da32edab0ac7e595934d0fd322d4ef6f738->leave($__internal_83a68fc5f4203fb126733af5c07c1da32edab0ac7e595934d0fd322d4ef6f738_prof);

    }

    // line 98
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6972a5f2a534468904c821d3b037b129f0a5b56d88f87f68b09c56f2eab67191 = $this->env->getExtension("native_profiler");
        $__internal_6972a5f2a534468904c821d3b037b129f0a5b56d88f87f68b09c56f2eab67191->enter($__internal_6972a5f2a534468904c821d3b037b129f0a5b56d88f87f68b09c56f2eab67191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 99
        ob_start();
        // line 100
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 101
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
        ";
        // line 102
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 103
            echo "            value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
        ";
        }
        // line 105
        echo "    />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6972a5f2a534468904c821d3b037b129f0a5b56d88f87f68b09c56f2eab67191->leave($__internal_6972a5f2a534468904c821d3b037b129f0a5b56d88f87f68b09c56f2eab67191_prof);

    }

    // line 110
    public function block_money_object_label($context, array $blocks = array())
    {
        $__internal_21e28bdb6a085ed8a72c53f619380b5b3b313469e5e3439e32e0dd8fcea26801 = $this->env->getExtension("native_profiler");
        $__internal_21e28bdb6a085ed8a72c53f619380b5b3b313469e5e3439e32e0dd8fcea26801->enter($__internal_21e28bdb6a085ed8a72c53f619380b5b3b313469e5e3439e32e0dd8fcea26801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_object_label"));

        // line 111
        ob_start();
        // line 112
        echo "    ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_amount");
        // line 113
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_21e28bdb6a085ed8a72c53f619380b5b3b313469e5e3439e32e0dd8fcea26801->leave($__internal_21e28bdb6a085ed8a72c53f619380b5b3b313469e5e3439e32e0dd8fcea26801_prof);

    }

    // line 118
    public function block_money_object_widget($context, array $blocks = array())
    {
        $__internal_1a8430dd4928035aa1e1b5207daa3c68f539a1a721879f113a629431303f7344 = $this->env->getExtension("native_profiler");
        $__internal_1a8430dd4928035aa1e1b5207daa3c68f539a1a721879f113a629431303f7344->enter($__internal_1a8430dd4928035aa1e1b5207daa3c68f539a1a721879f113a629431303f7344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_object_widget"));

        // line 119
        ob_start();
        // line 120
        echo "    <div class=\"d-ib mr-m va-m\" style=\"max-width:100px;\">
        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "amount", array()), 'widget');
        echo "
    </div>
    <div class=\"d-ib va-m\">
        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currency", array()), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1a8430dd4928035aa1e1b5207daa3c68f539a1a721879f113a629431303f7344->leave($__internal_1a8430dd4928035aa1e1b5207daa3c68f539a1a721879f113a629431303f7344_prof);

    }

    // line 130
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a44a3ef4645d0cc3545fc407dd1d71288641269f9bcccbfb779dbd133a48c6c1 = $this->env->getExtension("native_profiler");
        $__internal_a44a3ef4645d0cc3545fc407dd1d71288641269f9bcccbfb779dbd133a48c6c1->enter($__internal_a44a3ef4645d0cc3545fc407dd1d71288641269f9bcccbfb779dbd133a48c6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 131
        ob_start();
        // line 132
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 133
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 135
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 136
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 137
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 138
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 139
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 140
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a44a3ef4645d0cc3545fc407dd1d71288641269f9bcccbfb779dbd133a48c6c1->leave($__internal_a44a3ef4645d0cc3545fc407dd1d71288641269f9bcccbfb779dbd133a48c6c1_prof);

    }

    // line 147
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4ea6b196515329315c7ede730a4449632a88eb211bc37657e30e6e103de851dd = $this->env->getExtension("native_profiler");
        $__internal_4ea6b196515329315c7ede730a4449632a88eb211bc37657e30e6e103de851dd->enter($__internal_4ea6b196515329315c7ede730a4449632a88eb211bc37657e30e6e103de851dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 148
        ob_start();
        // line 149
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 150
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 152
            echo "        ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 153
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            // line 155
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 156
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 158
            echo "</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4ea6b196515329315c7ede730a4449632a88eb211bc37657e30e6e103de851dd->leave($__internal_4ea6b196515329315c7ede730a4449632a88eb211bc37657e30e6e103de851dd_prof);

    }

    // line 164
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_cace74648fc480862136ffc9fad84f164d980b8f70dd42c9023f8e7a887ce4cf = $this->env->getExtension("native_profiler");
        $__internal_cace74648fc480862136ffc9fad84f164d980b8f70dd42c9023f8e7a887ce4cf->enter($__internal_cace74648fc480862136ffc9fad84f164d980b8f70dd42c9023f8e7a887ce4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 165
        ob_start();
        // line 166
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 167
            echo "        ";
            // line 168
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 171
            echo "
    ";
        } else {
            // line 173
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
            ";
            // line 175
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            echo "
            ";
            // line 176
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            echo "
            ";
            // line 177
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget');
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cace74648fc480862136ffc9fad84f164d980b8f70dd42c9023f8e7a887ce4cf->leave($__internal_cace74648fc480862136ffc9fad84f164d980b8f70dd42c9023f8e7a887ce4cf_prof);

    }

    // line 184
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9420854f6f9ff1966d007d48fa3fe0dbcc70124bbfc084d589a5f9ab1159100c = $this->env->getExtension("native_profiler");
        $__internal_9420854f6f9ff1966d007d48fa3fe0dbcc70124bbfc084d589a5f9ab1159100c->enter($__internal_9420854f6f9ff1966d007d48fa3fe0dbcc70124bbfc084d589a5f9ab1159100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 185
        ob_start();
        // line 186
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"checkbox\">
        <input type=\"checkbox\" ";
        // line 187
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
               value=\"";
        // line 188
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), 1)) : (1)), "html", null, true);
        echo "\"
                ";
        // line 189
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo "checked=\"checked\"";
        }
        // line 190
        echo "                >
        ";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "
    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9420854f6f9ff1966d007d48fa3fe0dbcc70124bbfc084d589a5f9ab1159100c->leave($__internal_9420854f6f9ff1966d007d48fa3fe0dbcc70124bbfc084d589a5f9ab1159100c_prof);

    }

    // line 197
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_24cadbf5f58f2b8d289a99f97a462b11db67f4fa7194b148a84c7ffa87cdf971 = $this->env->getExtension("native_profiler");
        $__internal_24cadbf5f58f2b8d289a99f97a462b11db67f4fa7194b148a84c7ffa87cdf971->enter($__internal_24cadbf5f58f2b8d289a99f97a462b11db67f4fa7194b148a84c7ffa87cdf971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 198
        ob_start();
        // line 199
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 200
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("parsley-type" => "url"));
        // line 201
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_24cadbf5f58f2b8d289a99f97a462b11db67f4fa7194b148a84c7ffa87cdf971->leave($__internal_24cadbf5f58f2b8d289a99f97a462b11db67f4fa7194b148a84c7ffa87cdf971_prof);

    }

    // line 206
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7c1cb4a0884efb573adad41009802115af1690e74ada3915087f5b407a5a3d76 = $this->env->getExtension("native_profiler");
        $__internal_7c1cb4a0884efb573adad41009802115af1690e74ada3915087f5b407a5a3d76->enter($__internal_7c1cb4a0884efb573adad41009802115af1690e74ada3915087f5b407a5a3d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 207
        ob_start();
        // line 208
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 209
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7c1cb4a0884efb573adad41009802115af1690e74ada3915087f5b407a5a3d76->leave($__internal_7c1cb4a0884efb573adad41009802115af1690e74ada3915087f5b407a5a3d76_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Forms:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  704 => 209,  701 => 208,  699 => 207,  693 => 206,  682 => 201,  679 => 200,  676 => 199,  674 => 198,  668 => 197,  657 => 191,  654 => 190,  650 => 189,  646 => 188,  642 => 187,  637 => 186,  635 => 185,  629 => 184,  617 => 177,  613 => 176,  609 => 175,  605 => 174,  600 => 173,  596 => 171,  594 => 168,  592 => 167,  589 => 166,  587 => 165,  581 => 164,  571 => 158,  567 => 156,  565 => 155,  561 => 154,  556 => 153,  553 => 152,  547 => 150,  544 => 149,  542 => 148,  536 => 147,  525 => 140,  523 => 139,  522 => 138,  521 => 137,  520 => 136,  515 => 135,  509 => 133,  506 => 132,  504 => 131,  498 => 130,  487 => 124,  481 => 121,  478 => 120,  476 => 119,  470 => 118,  459 => 113,  456 => 112,  454 => 111,  448 => 110,  439 => 105,  433 => 103,  431 => 102,  424 => 101,  421 => 100,  419 => 99,  413 => 98,  403 => 92,  397 => 90,  395 => 89,  391 => 88,  386 => 87,  383 => 86,  381 => 85,  375 => 84,  364 => 78,  361 => 77,  357 => 75,  354 => 74,  348 => 72,  346 => 71,  342 => 70,  338 => 68,  335 => 67,  329 => 66,  320 => 62,  311 => 59,  308 => 58,  304 => 57,  299 => 56,  296 => 55,  290 => 54,  282 => 51,  276 => 49,  270 => 47,  267 => 46,  264 => 45,  258 => 44,  247 => 40,  241 => 38,  238 => 37,  236 => 36,  234 => 35,  228 => 34,  217 => 29,  214 => 28,  212 => 27,  210 => 26,  204 => 25,  192 => 19,  190 => 18,  187 => 17,  183 => 15,  180 => 14,  169 => 12,  165 => 11,  161 => 10,  157 => 9,  152 => 7,  149 => 6,  146 => 5,  143 => 4,  140 => 3,  138 => 2,  132 => 1,  125 => 206,  121 => 204,  119 => 197,  115 => 195,  113 => 184,  109 => 182,  107 => 164,  103 => 162,  101 => 147,  97 => 145,  95 => 130,  91 => 128,  89 => 118,  85 => 116,  83 => 110,  79 => 108,  77 => 98,  73 => 96,  71 => 84,  67 => 82,  65 => 66,  62 => 65,  60 => 54,  57 => 53,  55 => 44,  52 => 43,  50 => 34,  46 => 32,  44 => 25,  40 => 23,  38 => 1,);
    }
}
/* {% block form_start %}*/
/* {% spaceless %}*/
/*     {% set method = method|upper %}*/
/*     {% set form_method = (method == 'GET' ? method : 'POST') %}*/
/*     {% set attr = attr|merge({ class: 'form' }) %}*/
/*     <form role="form"*/
/*         name="{{ form.vars.name }}"*/
/*         data-fc-modules="form-validation"*/
/*         method="{{ form_method|lower }}"*/
/*         action="{{ action }}"*/
/*         {% for attrname, attrvalue in attr %}*/
/*             {{ attrname }}="{{ attrvalue }}"*/
/*         {% endfor %}*/
/*         {% if multipart %}*/
/*             enctype="multipart/form-data"*/
/*         {% endif %}*/
/*     >*/
/*     {% if form_method != method %}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_start %}*/
/* */
/* */
/* {% block number_widget %}*/
/* {% spaceless %}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {% set type = type|default('text') %}*/
/*     {{ block('form_widget_simple') }}*/
/* {% endspaceless %}*/
/* {% endblock number_widget %}*/
/* */
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     {# Yes, this is is a shitty way to get form type, but it's THE ONLY WAY #}*/
/*     {% if form.vars.block_prefixes.1 != 'checkbox' %}*/
/*         {{ form_label(form) }}*/
/*     {% endif %}*/
/*     {{ form_widget(form) }}*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block choice_widget %}*/
/*     {% spaceless %}*/
/*         {% if expanded %}*/
/*             {{ block('choice_widget_expanded') }}*/
/*         {% else %}*/
/*             {{ block('choice_widget_collapsed') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         <ul {{ block('widget_container_attributes') }} class="list-horizontal">*/
/*             {% for child in form %}*/
/*                 <li>*/
/*                     {{ form_widget(child) }}*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block radio_widget %}*/
/*     {% spaceless %}*/
/*         <label>*/
/*             <input type="radio"*/
/*                     {{ block('widget_attributes') }}*/
/*                     {% if value is defined %}*/
/*                         value="{{ value }}"*/
/*                     {% endif %}*/
/*                     {% if checked %}*/
/*                         checked="checked"*/
/*                     {% endif %}*/
/*                     />*/
/*             {{ label|trans }}*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endblock radio_widget %}*/
/* */
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not sameas(false) and label is defined %}*/
/*         <label for="{{ id }}">*/
/*             {{ label|trans }}*/
/*             {% if label_help is defined %}*/
/*                 <em>{{ label_help }}</em>*/
/*             {% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }}*/
/*         {% if value is not empty %}*/
/*             value="{{ value }}"*/
/*         {% endif %}*/
/*     />*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* */
/* {% block money_object_label %}*/
/* {% spaceless %}*/
/*     {% set id = "#{id}_amount" %}*/
/*     {{ block('form_label') }}*/
/* {% endspaceless %}*/
/* {% endblock money_object_label %}*/
/* */
/* */
/* {% block money_object_widget %}*/
/* {% spaceless %}*/
/*     <div class="d-ib mr-m va-m" style="max-width:100px;">*/
/*         {{ form_widget(form.amount) }}*/
/*     </div>*/
/*     <div class="d-ib va-m">*/
/*         {{ form_widget(form.currency) }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock money_object_widget %}*/
/* */
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% set vars = widget == 'text' ? { attr: { size: 1 }} : {} %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}:{{ form_widget(form.minute, vars) }}*/
/*             {%- if with_seconds -%}*/
/*                 :{{ form_widget(form.second, vars) }}*/
/*             {%- endif -%}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{*/
/*             block('form_widget_simple', {*/
/*                 attr: attr|merge({ class: (attr.class|default('') ~ ' form-control')|trim }),*/
/*             })*/
/*         }}*/
/*     {% else %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form.date) }}*/
/*             {{ form_errors(form.time) }}*/
/*             {{ form_widget(form.date) }}*/
/*             {{ form_widget(form.time) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* */
/* {% block checkbox_widget %}*/
/* {% spaceless %}*/
/*     <label for="{{ id }}" class="checkbox">*/
/*         <input type="checkbox" {{ block('widget_attributes') }}*/
/*                value="{{ value|default(1) }}"*/
/*                 {% if checked is defined and checked %}checked="checked"{% endif %}*/
/*                 >*/
/*         {{ label|trans }}*/
/*     </label>*/
/* {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* */
/* {% block url_widget %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('url') %}*/
/*     {% set attr = attr|merge({'parsley-type': 'url'}) %}*/
/*     {{ block('form_widget_simple') }}*/
/* {% endspaceless %}*/
/* {% endblock url_widget %}*/
/* */
/* */
/* {% block textarea_widget %}*/
/* {% spaceless %}*/
/*     {% set attr = attr|merge({ class: (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {% endspaceless %}*/
/* {% endblock textarea_widget %}*/
/* */
