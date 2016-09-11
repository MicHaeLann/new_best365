<?php

/* AdminCoreBundle:Forms:fields-plugins.html.twig */
class __TwigTemplate_c69b2cfc7e0579d545607cc06a736c88b795a7a46186d75aa0a1515247c53f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'button_row' => array($this, 'block_button_row'),
            'button_widget' => array($this, 'block_button_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_row' => array($this, 'block_form_row'),
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
        $__internal_c2d66d65d91fc144fc518a55efd0ae15a8c11c3027cd3ff4f4c4a858591b13e8 = $this->env->getExtension("native_profiler");
        $__internal_c2d66d65d91fc144fc518a55efd0ae15a8c11c3027cd3ff4f4c4a858591b13e8->enter($__internal_c2d66d65d91fc144fc518a55efd0ae15a8c11c3027cd3ff4f4c4a858591b13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminCoreBundle:Forms:fields-plugins.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_end', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('button_row', $context, $blocks);
        // line 46
        $this->displayBlock('button_widget', $context, $blocks);
        // line 53
        $this->displayBlock('number_widget', $context, $blocks);
        // line 62
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 74
        $this->displayBlock('form_row', $context, $blocks);
        // line 85
        echo "

";
        // line 87
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 100
        echo "

";
        // line 102
        $this->displayBlock('form_label', $context, $blocks);
        // line 114
        echo "

";
        // line 116
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 126
        echo "

";
        // line 128
        $this->displayBlock('money_object_label', $context, $blocks);
        // line 134
        echo "

";
        // line 136
        $this->displayBlock('money_object_widget', $context, $blocks);
        // line 146
        echo "

";
        // line 148
        $this->displayBlock('date_widget', $context, $blocks);
        // line 163
        echo "

";
        // line 165
        $this->displayBlock('time_widget', $context, $blocks);
        // line 180
        echo "

";
        // line 182
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 200
        echo "

";
        // line 202
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 213
        echo "

";
        // line 215
        $this->displayBlock('url_widget', $context, $blocks);
        // line 222
        echo "

";
        // line 224
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_c2d66d65d91fc144fc518a55efd0ae15a8c11c3027cd3ff4f4c4a858591b13e8->leave($__internal_c2d66d65d91fc144fc518a55efd0ae15a8c11c3027cd3ff4f4c4a858591b13e8_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6dc6ee8aa5143f2ca762f1d87ef3b49bbbabe2e851077753b93589ad405fd5d5 = $this->env->getExtension("native_profiler");
        $__internal_6dc6ee8aa5143f2ca762f1d87ef3b49bbbabe2e851077753b93589ad405fd5d5->enter($__internal_6dc6ee8aa5143f2ca762f1d87ef3b49bbbabe2e851077753b93589ad405fd5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        echo "    <form class=\"form\" role=\"form\"
        name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
        method=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\"
        action=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 11
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
        // line 13
        echo "        ";
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            // line 14
            echo "            enctype=\"multipart/form-data\"
        ";
        }
        // line 16
        echo "    >
    ";
        // line 17
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 18
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6dc6ee8aa5143f2ca762f1d87ef3b49bbbabe2e851077753b93589ad405fd5d5->leave($__internal_6dc6ee8aa5143f2ca762f1d87ef3b49bbbabe2e851077753b93589ad405fd5d5_prof);

    }

    // line 23
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_08dfef0943d4309847ce26598ef5d8dfadca595566aef091ec596d0ecf13d447 = $this->env->getExtension("native_profiler");
        $__internal_08dfef0943d4309847ce26598ef5d8dfadca595566aef091ec596d0ecf13d447->enter($__internal_08dfef0943d4309847ce26598ef5d8dfadca595566aef091ec596d0ecf13d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 24
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
        ";
        }
        // line 27
        echo "    </form>
";
        
        $__internal_08dfef0943d4309847ce26598ef5d8dfadca595566aef091ec596d0ecf13d447->leave($__internal_08dfef0943d4309847ce26598ef5d8dfadca595566aef091ec596d0ecf13d447_prof);

    }

    // line 30
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_723c8f5682a56288640383dc301cd3a97093228e8fd435f8a01dce4fd1e060cb = $this->env->getExtension("native_profiler");
        $__internal_723c8f5682a56288640383dc301cd3a97093228e8fd435f8a01dce4fd1e060cb->enter($__internal_723c8f5682a56288640383dc301cd3a97093228e8fd435f8a01dce4fd1e060cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 31
        echo "
    ";
        // line 32
        ob_start();
        // line 33
        echo "    <div class=\"grid fixed-bottom animated fade-in-up\">
        <div class=\"col-1-3\">
            &nbsp;
        </div>
        <div class=\"col-2-3\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("admin_plugin_list");
        echo "\">Cancel</a>
        </div>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 43
        echo "
";
        
        $__internal_723c8f5682a56288640383dc301cd3a97093228e8fd435f8a01dce4fd1e060cb->leave($__internal_723c8f5682a56288640383dc301cd3a97093228e8fd435f8a01dce4fd1e060cb_prof);

    }

    // line 46
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d537f71dbf5ecae8e539e0353db82b460d5057a1d9618af8854908af6c2a72b4 = $this->env->getExtension("native_profiler");
        $__internal_d537f71dbf5ecae8e539e0353db82b460d5057a1d9618af8854908af6c2a72b4->enter($__internal_d537f71dbf5ecae8e539e0353db82b460d5057a1d9618af8854908af6c2a72b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 47
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 48
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
        }
        // line 50
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo " class=\"button-primary button-fat pv-s mr-l\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>";
        
        $__internal_d537f71dbf5ecae8e539e0353db82b460d5057a1d9618af8854908af6c2a72b4->leave($__internal_d537f71dbf5ecae8e539e0353db82b460d5057a1d9618af8854908af6c2a72b4_prof);

    }

    // line 53
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_a2afcf2f0af91eba593073873ac7ff77681ad0322b1550c9301b3bfe262cfd01 = $this->env->getExtension("native_profiler");
        $__internal_a2afcf2f0af91eba593073873ac7ff77681ad0322b1550c9301b3bfe262cfd01->enter($__internal_a2afcf2f0af91eba593073873ac7ff77681ad0322b1550c9301b3bfe262cfd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 54
        ob_start();
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 57
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a2afcf2f0af91eba593073873ac7ff77681ad0322b1550c9301b3bfe262cfd01->leave($__internal_a2afcf2f0af91eba593073873ac7ff77681ad0322b1550c9301b3bfe262cfd01_prof);

    }

    // line 62
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_7a759f49a5de722da899318b0b7edc87ba561754a1108262513f4fd026ba5445 = $this->env->getExtension("native_profiler");
        $__internal_7a759f49a5de722da899318b0b7edc87ba561754a1108262513f4fd026ba5445->enter($__internal_7a759f49a5de722da899318b0b7edc87ba561754a1108262513f4fd026ba5445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 63
        echo "<fieldset class=\"mb-n\">
        <ol>";
        // line 65
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        }
        // line 68
        $this->displayBlock("form_rows", $context, $blocks);
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        // line 70
        echo "</ol>
    </fieldset>";
        
        $__internal_7a759f49a5de722da899318b0b7edc87ba561754a1108262513f4fd026ba5445->leave($__internal_7a759f49a5de722da899318b0b7edc87ba561754a1108262513f4fd026ba5445_prof);

    }

    // line 74
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7dbd15e9818c29a9f8b358f2dfc10d263f1eed2bbee3d272993f9a79d9b591e4 = $this->env->getExtension("native_profiler");
        $__internal_7dbd15e9818c29a9f8b358f2dfc10d263f1eed2bbee3d272993f9a79d9b591e4->enter($__internal_7dbd15e9818c29a9f8b358f2dfc10d263f1eed2bbee3d272993f9a79d9b591e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 75
        ob_start();
        // line 76
        echo "    <li>
    ";
        // line 78
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array()), 1, array()) != "checkbox")) {
            // line 79
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
    ";
        }
        // line 81
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </li>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7dbd15e9818c29a9f8b358f2dfc10d263f1eed2bbee3d272993f9a79d9b591e4->leave($__internal_7dbd15e9818c29a9f8b358f2dfc10d263f1eed2bbee3d272993f9a79d9b591e4_prof);

    }

    // line 87
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_185a3527e7acbb372a1483837ec2852e0334d44428b0ff72386fd94b6d557580 = $this->env->getExtension("native_profiler");
        $__internal_185a3527e7acbb372a1483837ec2852e0334d44428b0ff72386fd94b6d557580->enter($__internal_185a3527e7acbb372a1483837ec2852e0334d44428b0ff72386fd94b6d557580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 88
        ob_start();
        // line 89
        echo "    <input type=\"radio\"
        ";
        // line 90
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
        ";
        // line 91
        if (array_key_exists("value", $context)) {
            // line 92
            echo "            value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
        ";
        }
        // line 94
        echo "        ";
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            // line 95
            echo "            checked=\"checked\"
        ";
        }
        // line 97
        echo "    />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_185a3527e7acbb372a1483837ec2852e0334d44428b0ff72386fd94b6d557580->leave($__internal_185a3527e7acbb372a1483837ec2852e0334d44428b0ff72386fd94b6d557580_prof);

    }

    // line 102
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a599705bf290447dd0048499948954df67356ba89856ac4c86ee82bec0b20582 = $this->env->getExtension("native_profiler");
        $__internal_a599705bf290447dd0048499948954df67356ba89856ac4c86ee82bec0b20582->enter($__internal_a599705bf290447dd0048499948954df67356ba89856ac4c86ee82bec0b20582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 103
        ob_start();
        // line 104
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : null) === false) && array_key_exists("label", $context))) {
            // line 105
            echo "        <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "
            ";
            // line 107
            if (array_key_exists("label_help", $context)) {
                // line 108
                echo "                <em>";
                echo twig_escape_filter($this->env, (isset($context["label_help"]) ? $context["label_help"] : null), "html", null, true);
                echo "</em>
            ";
            }
            // line 110
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a599705bf290447dd0048499948954df67356ba89856ac4c86ee82bec0b20582->leave($__internal_a599705bf290447dd0048499948954df67356ba89856ac4c86ee82bec0b20582_prof);

    }

    // line 116
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_58d32e0167d6be12ab2cf49e703ef7d9cb91de010ce2d9f7c7581f090b25f325 = $this->env->getExtension("native_profiler");
        $__internal_58d32e0167d6be12ab2cf49e703ef7d9cb91de010ce2d9f7c7581f090b25f325->enter($__internal_58d32e0167d6be12ab2cf49e703ef7d9cb91de010ce2d9f7c7581f090b25f325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 117
        ob_start();
        // line 118
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 119
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
        ";
        // line 120
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 121
            echo "            value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
        ";
        }
        // line 123
        echo "    />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_58d32e0167d6be12ab2cf49e703ef7d9cb91de010ce2d9f7c7581f090b25f325->leave($__internal_58d32e0167d6be12ab2cf49e703ef7d9cb91de010ce2d9f7c7581f090b25f325_prof);

    }

    // line 128
    public function block_money_object_label($context, array $blocks = array())
    {
        $__internal_37d76853e098bbb31a3086fe226e7f50049f1bc014036081439bc2e1122f6c94 = $this->env->getExtension("native_profiler");
        $__internal_37d76853e098bbb31a3086fe226e7f50049f1bc014036081439bc2e1122f6c94->enter($__internal_37d76853e098bbb31a3086fe226e7f50049f1bc014036081439bc2e1122f6c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_object_label"));

        // line 129
        ob_start();
        // line 130
        echo "    ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_amount");
        // line 131
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_37d76853e098bbb31a3086fe226e7f50049f1bc014036081439bc2e1122f6c94->leave($__internal_37d76853e098bbb31a3086fe226e7f50049f1bc014036081439bc2e1122f6c94_prof);

    }

    // line 136
    public function block_money_object_widget($context, array $blocks = array())
    {
        $__internal_6433e086f78f4956012286d45a91b1866b154a181eaf6019dd6ad75126411f44 = $this->env->getExtension("native_profiler");
        $__internal_6433e086f78f4956012286d45a91b1866b154a181eaf6019dd6ad75126411f44->enter($__internal_6433e086f78f4956012286d45a91b1866b154a181eaf6019dd6ad75126411f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_object_widget"));

        // line 137
        ob_start();
        // line 138
        echo "    <div class=\"d-ib mr-m va-m\" style=\"max-width:100px;\">
        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "amount", array()), 'widget');
        echo "
    </div>
    <div class=\"d-ib va-m\">
        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currency", array()), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6433e086f78f4956012286d45a91b1866b154a181eaf6019dd6ad75126411f44->leave($__internal_6433e086f78f4956012286d45a91b1866b154a181eaf6019dd6ad75126411f44_prof);

    }

    // line 148
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1278d5432c73daf6b1acbb6b3ed3cab49f40a6665f2795991ad9fbe456d1de80 = $this->env->getExtension("native_profiler");
        $__internal_1278d5432c73daf6b1acbb6b3ed3cab49f40a6665f2795991ad9fbe456d1de80->enter($__internal_1278d5432c73daf6b1acbb6b3ed3cab49f40a6665f2795991ad9fbe456d1de80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 149
        ob_start();
        // line 150
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 151
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 153
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 154
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 155
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 156
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 157
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 158
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1278d5432c73daf6b1acbb6b3ed3cab49f40a6665f2795991ad9fbe456d1de80->leave($__internal_1278d5432c73daf6b1acbb6b3ed3cab49f40a6665f2795991ad9fbe456d1de80_prof);

    }

    // line 165
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a669034e48cd6595fde90633d1d882be2ad86a483b6eda05f08f843b3d191bd2 = $this->env->getExtension("native_profiler");
        $__internal_a669034e48cd6595fde90633d1d882be2ad86a483b6eda05f08f843b3d191bd2->enter($__internal_a669034e48cd6595fde90633d1d882be2ad86a483b6eda05f08f843b3d191bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 168
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 170
            echo "        ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 171
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 172
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            // line 173
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 174
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 176
            echo "</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a669034e48cd6595fde90633d1d882be2ad86a483b6eda05f08f843b3d191bd2->leave($__internal_a669034e48cd6595fde90633d1d882be2ad86a483b6eda05f08f843b3d191bd2_prof);

    }

    // line 182
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_889b9899f9b3b16b4b10c47115ee9e32de3ccb5843d41f94f3ed9bd5b9969c14 = $this->env->getExtension("native_profiler");
        $__internal_889b9899f9b3b16b4b10c47115ee9e32de3ccb5843d41f94f3ed9bd5b9969c14->enter($__internal_889b9899f9b3b16b4b10c47115ee9e32de3ccb5843d41f94f3ed9bd5b9969c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 183
        ob_start();
        // line 184
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 185
            echo "        ";
            // line 186
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 189
            echo "
    ";
        } else {
            // line 191
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 192
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
            ";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            echo "
            ";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            echo "
            ";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget');
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_889b9899f9b3b16b4b10c47115ee9e32de3ccb5843d41f94f3ed9bd5b9969c14->leave($__internal_889b9899f9b3b16b4b10c47115ee9e32de3ccb5843d41f94f3ed9bd5b9969c14_prof);

    }

    // line 202
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2be4b183f6477ae8c217745f74de13234c534dc1bcff28eec3b9ce7b0eef88ab = $this->env->getExtension("native_profiler");
        $__internal_2be4b183f6477ae8c217745f74de13234c534dc1bcff28eec3b9ce7b0eef88ab->enter($__internal_2be4b183f6477ae8c217745f74de13234c534dc1bcff28eec3b9ce7b0eef88ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 203
        ob_start();
        // line 204
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"checkbox\">
        <input type=\"checkbox\" ";
        // line 205
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
               value=\"";
        // line 206
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), 1)) : (1)), "html", null, true);
        echo "\"
                ";
        // line 207
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo "checked=\"checked\"";
        }
        // line 208
        echo "                >
        ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "
    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2be4b183f6477ae8c217745f74de13234c534dc1bcff28eec3b9ce7b0eef88ab->leave($__internal_2be4b183f6477ae8c217745f74de13234c534dc1bcff28eec3b9ce7b0eef88ab_prof);

    }

    // line 215
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_3ed35b334bfa5f7eb2d3301f5ba0f7f134f0c05db3fa1b3fc3bc56a12c43b879 = $this->env->getExtension("native_profiler");
        $__internal_3ed35b334bfa5f7eb2d3301f5ba0f7f134f0c05db3fa1b3fc3bc56a12c43b879->enter($__internal_3ed35b334bfa5f7eb2d3301f5ba0f7f134f0c05db3fa1b3fc3bc56a12c43b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 216
        ob_start();
        // line 217
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 218
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("parsley-type" => "url"));
        // line 219
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3ed35b334bfa5f7eb2d3301f5ba0f7f134f0c05db3fa1b3fc3bc56a12c43b879->leave($__internal_3ed35b334bfa5f7eb2d3301f5ba0f7f134f0c05db3fa1b3fc3bc56a12c43b879_prof);

    }

    // line 224
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_aaf834cc0e4791d1f72a288ef25eaaedb402143835c839e5cd374f01b3ef86a9 = $this->env->getExtension("native_profiler");
        $__internal_aaf834cc0e4791d1f72a288ef25eaaedb402143835c839e5cd374f01b3ef86a9->enter($__internal_aaf834cc0e4791d1f72a288ef25eaaedb402143835c839e5cd374f01b3ef86a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 225
        ob_start();
        // line 226
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 227
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aaf834cc0e4791d1f72a288ef25eaaedb402143835c839e5cd374f01b3ef86a9->leave($__internal_aaf834cc0e4791d1f72a288ef25eaaedb402143835c839e5cd374f01b3ef86a9_prof);

    }

    public function getTemplateName()
    {
        return "AdminCoreBundle:Forms:fields-plugins.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  735 => 227,  732 => 226,  730 => 225,  724 => 224,  713 => 219,  710 => 218,  707 => 217,  705 => 216,  699 => 215,  688 => 209,  685 => 208,  681 => 207,  677 => 206,  673 => 205,  668 => 204,  666 => 203,  660 => 202,  648 => 195,  644 => 194,  640 => 193,  636 => 192,  631 => 191,  627 => 189,  625 => 186,  623 => 185,  620 => 184,  618 => 183,  612 => 182,  602 => 176,  598 => 174,  596 => 173,  592 => 172,  587 => 171,  584 => 170,  578 => 168,  575 => 167,  573 => 166,  567 => 165,  556 => 158,  554 => 157,  553 => 156,  552 => 155,  551 => 154,  546 => 153,  540 => 151,  537 => 150,  535 => 149,  529 => 148,  518 => 142,  512 => 139,  509 => 138,  507 => 137,  501 => 136,  490 => 131,  487 => 130,  485 => 129,  479 => 128,  470 => 123,  464 => 121,  462 => 120,  455 => 119,  452 => 118,  450 => 117,  444 => 116,  434 => 110,  428 => 108,  426 => 107,  422 => 106,  417 => 105,  414 => 104,  412 => 103,  406 => 102,  397 => 97,  393 => 95,  390 => 94,  384 => 92,  382 => 91,  378 => 90,  375 => 89,  373 => 88,  367 => 87,  355 => 81,  349 => 79,  346 => 78,  343 => 76,  341 => 75,  335 => 74,  327 => 70,  325 => 69,  323 => 68,  320 => 66,  318 => 65,  315 => 63,  309 => 62,  298 => 57,  295 => 56,  293 => 55,  291 => 54,  285 => 53,  272 => 50,  269 => 48,  267 => 47,  261 => 46,  253 => 43,  246 => 39,  242 => 38,  235 => 33,  233 => 32,  230 => 31,  224 => 30,  216 => 27,  210 => 25,  208 => 24,  202 => 23,  190 => 18,  188 => 17,  185 => 16,  181 => 14,  178 => 13,  167 => 11,  163 => 10,  159 => 9,  155 => 8,  151 => 7,  148 => 6,  145 => 5,  142 => 4,  139 => 3,  137 => 2,  131 => 1,  124 => 224,  120 => 222,  118 => 215,  114 => 213,  112 => 202,  108 => 200,  106 => 182,  102 => 180,  100 => 165,  96 => 163,  94 => 148,  90 => 146,  88 => 136,  84 => 134,  82 => 128,  78 => 126,  76 => 116,  72 => 114,  70 => 102,  66 => 100,  64 => 87,  60 => 85,  58 => 74,  56 => 62,  54 => 53,  52 => 46,  50 => 30,  47 => 29,  45 => 23,  42 => 22,  40 => 1,);
    }
}
/* {% block form_start %}*/
/* {% spaceless %}*/
/*     {% set method = method|upper %}*/
/*     {% set form_method = (method == 'GET' ? method : 'POST') %}*/
/*     {% set attr = attr|merge({ class: 'form' }) %}*/
/*     <form class="form" role="form"*/
/*         name="{{ form.vars.name }}"*/
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
/* {% block form_end %}*/
/* {% if not render_rest is defined or render_rest %}*/
/*     {{ form_rest(form) }}*/
/*         {% endif %}*/
/*     </form>*/
/* {% endblock form_end %}*/
/* */
/* {% block button_row %}*/
/* */
/*     {% spaceless %}*/
/*     <div class="grid fixed-bottom animated fade-in-up">*/
/*         <div class="col-1-3">*/
/*             &nbsp;*/
/*         </div>*/
/*         <div class="col-2-3">*/
/*             {{ form_widget(form) }}*/
/*             <a href="{{ url('admin_plugin_list') }}">Cancel</a>*/
/*         </div>*/
/*     </div>*/
/*     {% endspaceless %}*/
/* */
/* {% endblock button_row %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {% set label = name|humanize %}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }} class="button-primary button-fat pv-s mr-l">{{ label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
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
/* {%- block form_widget_compound -%}*/
/*     <fieldset class="mb-n">*/
/*         <ol>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*         </ol>*/
/*     </fieldset>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <li>*/
/*     {# Yes, this is is a shitty way to get form type, but it's THE ONLY WAY #}*/
/*     {% if form.vars.block_prefixes.1 != 'checkbox' %}*/
/*         {{ form_label(form) }}*/
/*     {% endif %}*/
/*     {{ form_widget(form) }}*/
/*     </li>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* */
/* {% block radio_widget %}*/
/* {% spaceless %}*/
/*     <input type="radio"*/
/*         {{ block('widget_attributes') }}*/
/*         {% if value is defined %}*/
/*             value="{{ value }}"*/
/*         {% endif %}*/
/*         {% if checked %}*/
/*             checked="checked"*/
/*         {% endif %}*/
/*     />*/
/* {% endspaceless %}*/
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
