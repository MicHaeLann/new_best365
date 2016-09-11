<?php

/* ::_base.html.twig */
class __TwigTemplate_796a56835319fe88144648cb3d1c62007bcc75e3a517a20055a40b2aefeb5118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'doctype_and_html' => array($this, 'block_doctype_and_html'),
            'title' => array($this, 'block_title'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
            'pixels' => array($this, 'block_pixels'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f662b94d1a96a1660a3c724fe485a1af6490aaa5ef6d6c64003d6b3be6507a4 = $this->env->getExtension("native_profiler");
        $__internal_2f662b94d1a96a1660a3c724fe485a1af6490aaa5ef6d6c64003d6b3be6507a4->enter($__internal_2f662b94d1a96a1660a3c724fe485a1af6490aaa5ef6d6c64003d6b3be6507a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::_base.html.twig"));

        // line 4
        $context["current_user_session_id"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "id", array());
        // line 5
        $context["current_user_session_sha1"] = $this->env->getExtension('encrypt_extension')->sha1((isset($context["current_user_session_sha1"]) ? $context["current_user_session_sha1"] : null));
        // line 6
        $context["current_route_name"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method");
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('doctype_and_html', $context, $blocks);
        // line 15
        echo "    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 19
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 20
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script type=\"text/javascript\">document.documentElement.className = document.documentElement.className.replace(/\\bno-js\\b/,'js');</script>

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-57x57.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-60x60.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-76x76.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-114x114.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-120x120.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-144x144.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-152x152.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-icon-180x180.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("android-icon-192x192.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon-96x96.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("manifest.json"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ms-icon-144x144.png"), "html", null, true);
        echo "\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        ";
        // line 41
        $this->displayBlock('head_style', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 43
        echo "        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        ";
        // line 45
        echo "        <!--[if lt IE 9]>
          <script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <script>
            /**
             * Tracker generator for elcodi bamboo store
             */
            var _etc = _etc || [];

            (function() {
                var _etracker = document.createElement('script');
                _etracker.type = 'text/javascript';
                _etracker.async = true;
                _etracker.src = '/bundles/elcodimetric/js/tracker.js';
                var _etracker_s = document.getElementsByTagName('script')[0];
                _etracker_s.parentNode.insertBefore(_etracker, _etracker_s);
            }());
        </script>

        ";
        // line 66
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.head_bottom"));
        echo "
    </head>

    <body ";
        // line 69
        $this->displayBlock('body_id', $context, $blocks);
        echo " ";
        $this->displayBlock('body_class', $context, $blocks);
        echo ">
        ";
        // line 70
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.body_top"));
        echo "

        <!--[if lt IE 8]>
            <!-- should warn for outdated browser -->
        <![endif]-->
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "        ";
        $this->displayBlock('pixels', $context, $blocks);
        // line 77
        echo "
        <script>

            var isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return ( isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };

            /**
             * Page view beacons
             */
            _etc.push([\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'pv', '";
        echo twig_escape_filter($this->env, (isset($context["current_user_session_sha1"]) ? $context["current_user_session_sha1"] : null), "html", null, true);
        echo "', '3']);
            _etc.push([\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'pv_";
        echo twig_escape_filter($this->env, (isset($context["current_route_name"]) ? $context["current_route_name"] : null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["current_user_session_sha1"]) ? $context["current_user_session_sha1"] : null), "html", null, true);
        echo "', '3']);

            /**
             * Specific product view beacon
             */
            ";
        // line 110
        if (((isset($context["current_route_name"]) ? $context["current_route_name"] : null) == "store_product_view")) {
            // line 111
            echo "                _etc.push([\"";
            echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
            echo "\", 'pv_store_product_view_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["current_user_session_sha1"]) ? $context["current_user_session_sha1"] : null), "html", null, true);
            echo "', '3']);
            ";
        }
        // line 113
        echo "
            /**
             * Specific blog view beacon
             */
            ";
        // line 117
        if (((isset($context["current_route_name"]) ? $context["current_route_name"] : null) == "store_blog_post_view")) {
            // line 118
            echo "                _etc.push([\"";
            echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
            echo "\", 'pv_store_blog_post_view_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog_post"]) ? $context["blog_post"] : null), "id", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["current_user_session_sha1"]) ? $context["current_user_session_sha1"] : null), "html", null, true);
            echo "', '3']);
            ";
        }
        // line 120
        echo "
            /**
             * Add mobile beacon
             */
            if (isMobile.any()) {
                _etc.push([\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'mob', '', '1']);
            } else {
                _etc.push([\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'no_mob', '', '1']);
            }

            /**
             * Add search engine beacon
             */
            var referrer = \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('referrer_extension')->getReferrerDomain(), "html", null, true);
        echo "\";
            var referrerIsSearchEngine = ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('referrer_extension')->referrerIsSearchEngine(), "html", null, true);
        echo ";
            if (referrerIsSearchEngine) {
                _etc.push([\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'source_se', '', '1']);
                _etc.push([\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'rf', referrer, '8']);
            } else if (referrer != false) {
                _etc.push([\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'source_ref', '', '1']);
                _etc.push([\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'rf', referrer, '8']);
            } else {
                _etc.push([\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["store_tracker"]) ? $context["store_tracker"] : null), "html", null, true);
        echo "\", 'source_dir', '', '1']);
            }
        </script>

        ";
        // line 146
        $this->displayBlock('foot_script', $context, $blocks);
        // line 147
        echo "
        ";
        // line 148
        echo call_user_func_array($this->env->getFunction('elcodi_hook')->getCallable(), array("store.body_bottom"));
        echo "
    </body>
</html>
";
        
        $__internal_2f662b94d1a96a1660a3c724fe485a1af6490aaa5ef6d6c64003d6b3be6507a4->leave($__internal_2f662b94d1a96a1660a3c724fe485a1af6490aaa5ef6d6c64003d6b3be6507a4_prof);

    }

    // line 8
    public function block_doctype_and_html($context, array $blocks = array())
    {
        $__internal_5dff436782730eed17582442425d34d1048f9e30596bd177b38e8db55ef2275a = $this->env->getExtension("native_profiler");
        $__internal_5dff436782730eed17582442425d34d1048f9e30596bd177b38e8db55ef2275a->enter($__internal_5dff436782730eed17582442425d34d1048f9e30596bd177b38e8db55ef2275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "doctype_and_html"));

        // line 9
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html lang=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html lang=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" class=\"no-js\"> <!--<![endif]-->
";
        
        $__internal_5dff436782730eed17582442425d34d1048f9e30596bd177b38e8db55ef2275a->leave($__internal_5dff436782730eed17582442425d34d1048f9e30596bd177b38e8db55ef2275a_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_7494f1163c61e3c93daa329390443179a3ba60a50a8b56c7a84f648992e239dc = $this->env->getExtension("native_profiler");
        $__internal_7494f1163c61e3c93daa329390443179a3ba60a50a8b56c7a84f648992e239dc->enter($__internal_7494f1163c61e3c93daa329390443179a3ba60a50a8b56c7a84f648992e239dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "name", array()), "html", null, true);
        
        $__internal_7494f1163c61e3c93daa329390443179a3ba60a50a8b56c7a84f648992e239dc->leave($__internal_7494f1163c61e3c93daa329390443179a3ba60a50a8b56c7a84f648992e239dc_prof);

    }

    // line 19
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_bc652fe2b8bcb070617114b60ea7ca57e58cdcc9bbd674330e3a4a178ec60e79 = $this->env->getExtension("native_profiler");
        $__internal_bc652fe2b8bcb070617114b60ea7ca57e58cdcc9bbd674330e3a4a178ec60e79->enter($__internal_bc652fe2b8bcb070617114b60ea7ca57e58cdcc9bbd674330e3a4a178ec60e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        echo "";
        
        $__internal_bc652fe2b8bcb070617114b60ea7ca57e58cdcc9bbd674330e3a4a178ec60e79->leave($__internal_bc652fe2b8bcb070617114b60ea7ca57e58cdcc9bbd674330e3a4a178ec60e79_prof);

    }

    // line 41
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_e18dbfcb3efe4a7e4582d294e17f7128aa7486e4d7684e100e3d1d8196dd6959 = $this->env->getExtension("native_profiler");
        $__internal_e18dbfcb3efe4a7e4582d294e17f7128aa7486e4d7684e100e3d1d8196dd6959->enter($__internal_e18dbfcb3efe4a7e4582d294e17f7128aa7486e4d7684e100e3d1d8196dd6959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        
        $__internal_e18dbfcb3efe4a7e4582d294e17f7128aa7486e4d7684e100e3d1d8196dd6959->leave($__internal_e18dbfcb3efe4a7e4582d294e17f7128aa7486e4d7684e100e3d1d8196dd6959_prof);

    }

    // line 42
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_2a5b2c95c06bf53c2f47f87dfaa501b50c0becf6eba2e98ddea2005e182fab2c = $this->env->getExtension("native_profiler");
        $__internal_2a5b2c95c06bf53c2f47f87dfaa501b50c0becf6eba2e98ddea2005e182fab2c->enter($__internal_2a5b2c95c06bf53c2f47f87dfaa501b50c0becf6eba2e98ddea2005e182fab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        
        $__internal_2a5b2c95c06bf53c2f47f87dfaa501b50c0becf6eba2e98ddea2005e182fab2c->leave($__internal_2a5b2c95c06bf53c2f47f87dfaa501b50c0becf6eba2e98ddea2005e182fab2c_prof);

    }

    // line 69
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_36fedbfc5015bf22c496f01f470fcaf35a79372e4115d4f2a6fc80c61a420f3e = $this->env->getExtension("native_profiler");
        $__internal_36fedbfc5015bf22c496f01f470fcaf35a79372e4115d4f2a6fc80c61a420f3e->enter($__internal_36fedbfc5015bf22c496f01f470fcaf35a79372e4115d4f2a6fc80c61a420f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "";
        
        $__internal_36fedbfc5015bf22c496f01f470fcaf35a79372e4115d4f2a6fc80c61a420f3e->leave($__internal_36fedbfc5015bf22c496f01f470fcaf35a79372e4115d4f2a6fc80c61a420f3e_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_164b479d5d7a2c6afb418fa179b525b9d1c85d4909a515456528122a636e9214 = $this->env->getExtension("native_profiler");
        $__internal_164b479d5d7a2c6afb418fa179b525b9d1c85d4909a515456528122a636e9214->enter($__internal_164b479d5d7a2c6afb418fa179b525b9d1c85d4909a515456528122a636e9214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "";
        
        $__internal_164b479d5d7a2c6afb418fa179b525b9d1c85d4909a515456528122a636e9214->leave($__internal_164b479d5d7a2c6afb418fa179b525b9d1c85d4909a515456528122a636e9214_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_05a68ea71c9e966b454c284df32e5f742a682f3318953c0271d474f576e30773 = $this->env->getExtension("native_profiler");
        $__internal_05a68ea71c9e966b454c284df32e5f742a682f3318953c0271d474f576e30773->enter($__internal_05a68ea71c9e966b454c284df32e5f742a682f3318953c0271d474f576e30773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_05a68ea71c9e966b454c284df32e5f742a682f3318953c0271d474f576e30773->leave($__internal_05a68ea71c9e966b454c284df32e5f742a682f3318953c0271d474f576e30773_prof);

    }

    // line 76
    public function block_pixels($context, array $blocks = array())
    {
        $__internal_95b816696dd8c8bf972e64da0f383de33e2cacd1c016ad69d52e702055f83272 = $this->env->getExtension("native_profiler");
        $__internal_95b816696dd8c8bf972e64da0f383de33e2cacd1c016ad69d52e702055f83272->enter($__internal_95b816696dd8c8bf972e64da0f383de33e2cacd1c016ad69d52e702055f83272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pixels"));

        echo "";
        
        $__internal_95b816696dd8c8bf972e64da0f383de33e2cacd1c016ad69d52e702055f83272->leave($__internal_95b816696dd8c8bf972e64da0f383de33e2cacd1c016ad69d52e702055f83272_prof);

    }

    // line 146
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_2930d746b5a4048fc316cac9cb0c8a0966dab442f69d529a9b9903e7e86e37eb = $this->env->getExtension("native_profiler");
        $__internal_2930d746b5a4048fc316cac9cb0c8a0966dab442f69d529a9b9903e7e86e37eb->enter($__internal_2930d746b5a4048fc316cac9cb0c8a0966dab442f69d529a9b9903e7e86e37eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        echo "";
        
        $__internal_2930d746b5a4048fc316cac9cb0c8a0966dab442f69d529a9b9903e7e86e37eb->leave($__internal_2930d746b5a4048fc316cac9cb0c8a0966dab442f69d529a9b9903e7e86e37eb_prof);

    }

    public function getTemplateName()
    {
        return "::_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 146,  437 => 76,  425 => 75,  402 => 69,  391 => 42,  380 => 41,  368 => 19,  356 => 18,  347 => 13,  343 => 12,  339 => 11,  335 => 10,  332 => 9,  326 => 8,  315 => 148,  312 => 147,  310 => 146,  303 => 142,  298 => 140,  294 => 139,  289 => 137,  285 => 136,  280 => 134,  276 => 133,  267 => 127,  262 => 125,  255 => 120,  245 => 118,  243 => 117,  237 => 113,  227 => 111,  225 => 110,  213 => 105,  207 => 104,  178 => 77,  175 => 76,  173 => 75,  165 => 70,  159 => 69,  153 => 66,  130 => 45,  127 => 43,  124 => 42,  122 => 41,  116 => 38,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  59 => 23,  54 => 20,  52 => 19,  48 => 18,  43 => 15,  41 => 8,  38 => 7,  36 => 6,  34 => 5,  32 => 4,);
    }
}
/* {#*/
/*     Global variables environment*/
/* #}*/
/* {% set current_user_session_id = app.session.id %}*/
/* {% set current_user_session_sha1 = current_user_session_sha1|sha1 %}*/
/* {% set current_route_name = app.request.get('_route') %}*/
/* */
/* {% block doctype_and_html %}*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html lang="{{ app.request.locale }}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html lang="{{ app.request.locale }}" class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html lang="{{ app.request.locale }}" class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html lang="{{ app.request.locale }}" class="no-js"> <!--<![endif]-->*/
/* {% endblock %}*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>{% block title store.name %}</title>*/
/*         {% block meta_tags "" %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <script type="text/javascript">document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');</script>*/
/* */
/*         <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">*/
/*         <link rel="manifest" href="{{ asset('manifest.json') }}">*/
/*         <meta name="msapplication-TileColor" content="#ffffff">*/
/*         <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">*/
/*         <meta name="theme-color" content="#ffffff">*/
/* */
/*         {% block head_style %}{% endblock head_style %}*/
/*         {% block head_script %}{% endblock head_script %}*/
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         {# WARNING: Respond.js doesn't work if you view the page via file:// #}*/
/*         <!--[if lt IE 9]>*/
/*           <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*           <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <script>*/
/*             /***/
/*              * Tracker generator for elcodi bamboo store*/
/*              *//* */
/*             var _etc = _etc || [];*/
/* */
/*             (function() {*/
/*                 var _etracker = document.createElement('script');*/
/*                 _etracker.type = 'text/javascript';*/
/*                 _etracker.async = true;*/
/*                 _etracker.src = '/bundles/elcodimetric/js/tracker.js';*/
/*                 var _etracker_s = document.getElementsByTagName('script')[0];*/
/*                 _etracker_s.parentNode.insertBefore(_etracker, _etracker_s);*/
/*             }());*/
/*         </script>*/
/* */
/*         {{ elcodi_hook("store.head_bottom") }}*/
/*     </head>*/
/* */
/*     <body {% block body_id "" %} {% block body_class "" %}>*/
/*         {{ elcodi_hook("store.body_top") }}*/
/* */
/*         <!--[if lt IE 8]>*/
/*             <!-- should warn for outdated browser -->*/
/*         <![endif]-->*/
/*         {% block body "" %}*/
/*         {% block pixels "" %}*/
/* */
/*         <script>*/
/* */
/*             var isMobile = {*/
/*                 Android: function() {*/
/*                     return navigator.userAgent.match(/Android/i);*/
/*                 },*/
/*                 BlackBerry: function() {*/
/*                     return navigator.userAgent.match(/BlackBerry/i);*/
/*                 },*/
/*                 iOS: function() {*/
/*                     return navigator.userAgent.match(/iPhone|iPad|iPod/i);*/
/*                 },*/
/*                 Opera: function() {*/
/*                     return navigator.userAgent.match(/Opera Mini/i);*/
/*                 },*/
/*                 Windows: function() {*/
/*                     return navigator.userAgent.match(/IEMobile/i);*/
/*                 },*/
/*                 any: function() {*/
/*                     return ( isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());*/
/*                 }*/
/*             };*/
/* */
/*             /***/
/*              * Page view beacons*/
/*              *//* */
/*             _etc.push(["{{ store_tracker }}", 'pv', '{{ current_user_session_sha1 }}', '3']);*/
/*             _etc.push(["{{ store_tracker }}", 'pv_{{ current_route_name }}', '{{ current_user_session_sha1 }}', '3']);*/
/* */
/*             /***/
/*              * Specific product view beacon*/
/*              *//* */
/*             {% if current_route_name == 'store_product_view' %}*/
/*                 _etc.push(["{{ store_tracker }}", 'pv_store_product_view_{{ product.id }}', '{{ current_user_session_sha1 }}', '3']);*/
/*             {% endif %}*/
/* */
/*             /***/
/*              * Specific blog view beacon*/
/*              *//* */
/*             {% if current_route_name == 'store_blog_post_view' %}*/
/*                 _etc.push(["{{ store_tracker }}", 'pv_store_blog_post_view_{{ blog_post.id }}', '{{ current_user_session_sha1 }}', '3']);*/
/*             {% endif %}*/
/* */
/*             /***/
/*              * Add mobile beacon*/
/*              *//* */
/*             if (isMobile.any()) {*/
/*                 _etc.push(["{{ store_tracker }}", 'mob', '', '1']);*/
/*             } else {*/
/*                 _etc.push(["{{ store_tracker }}", 'no_mob', '', '1']);*/
/*             }*/
/* */
/*             /***/
/*              * Add search engine beacon*/
/*              *//* */
/*             var referrer = "{{ referrer_domain() }}";*/
/*             var referrerIsSearchEngine = {{ referrer_is_search_engine() }};*/
/*             if (referrerIsSearchEngine) {*/
/*                 _etc.push(["{{ store_tracker }}", 'source_se', '', '1']);*/
/*                 _etc.push(["{{ store_tracker }}", 'rf', referrer, '8']);*/
/*             } else if (referrer != false) {*/
/*                 _etc.push(["{{ store_tracker }}", 'source_ref', '', '1']);*/
/*                 _etc.push(["{{ store_tracker }}", 'rf', referrer, '8']);*/
/*             } else {*/
/*                 _etc.push(["{{ store_tracker }}", 'source_dir', '', '1']);*/
/*             }*/
/*         </script>*/
/* */
/*         {% block foot_script "" %}*/
/* */
/*         {{ elcodi_hook("store.body_bottom") }}*/
/*     </body>*/
/* </html>*/
/* */
