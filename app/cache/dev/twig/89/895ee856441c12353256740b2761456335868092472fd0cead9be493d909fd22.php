<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_1b481e6b76b7db6e846761f82a24b753b0918803f38a0f78616b0f6676c70a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4853d6cb7525e7c60bf1a41860f4f3df6813621df04390e15c84d0bc24a225c = $this->env->getExtension("native_profiler");
        $__internal_b4853d6cb7525e7c60bf1a41860f4f3df6813621df04390e15c84d0bc24a225c->enter($__internal_b4853d6cb7525e7c60bf1a41860f4f3df6813621df04390e15c84d0bc24a225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
        <title>
        ";
        // line 68
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 88
        echo "        </title>
    </head>
    <body ";
        // line 90
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 91
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 178
        echo "
        ";
        // line 179
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 336
        echo "    </body>
</html>
";
        
        $__internal_b4853d6cb7525e7c60bf1a41860f4f3df6813621df04390e15c84d0bc24a225c->leave($__internal_b4853d6cb7525e7c60bf1a41860f4f3df6813621df04390e15c84d0bc24a225c_prof);

    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_46653fc926f5e3ce4ce1ad7910ed0d4152537ded539dbc67522db71ff366cca0 = $this->env->getExtension("native_profiler");
        $__internal_46653fc926f5e3ce4ce1ad7910ed0d4152537ded539dbc67522db71ff366cca0->enter($__internal_46653fc926f5e3ce4ce1ad7910ed0d4152537ded539dbc67522db71ff366cca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_46653fc926f5e3ce4ce1ad7910ed0d4152537ded539dbc67522db71ff366cca0->leave($__internal_46653fc926f5e3ce4ce1ad7910ed0d4152537ded539dbc67522db71ff366cca0_prof);

    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_351408c94ca5f91e3fea1b83a1a198e27e36bec24fc6bbc6d05046fb77d6788e = $this->env->getExtension("native_profiler");
        $__internal_351408c94ca5f91e3fea1b83a1a198e27e36bec24fc6bbc6d05046fb77d6788e->enter($__internal_351408c94ca5f91e3fea1b83a1a198e27e36bec24fc6bbc6d05046fb77d6788e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_351408c94ca5f91e3fea1b83a1a198e27e36bec24fc6bbc6d05046fb77d6788e->leave($__internal_351408c94ca5f91e3fea1b83a1a198e27e36bec24fc6bbc6d05046fb77d6788e_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e1510cb8899d776c6d96079cf62c1b1a72a37c8e74277d2d524fddb9891870e = $this->env->getExtension("native_profiler");
        $__internal_1e1510cb8899d776c6d96079cf62c1b1a72a37c8e74277d2d524fddb9891870e->enter($__internal_1e1510cb8899d776c6d96079cf62c1b1a72a37c8e74277d2d524fddb9891870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
        
        $__internal_1e1510cb8899d776c6d96079cf62c1b1a72a37c8e74277d2d524fddb9891870e->leave($__internal_1e1510cb8899d776c6d96079cf62c1b1a72a37c8e74277d2d524fddb9891870e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8d6dcead332c04092f9cf1a65a2b7dc8cbad06e54f87ad25a541c492365b280 = $this->env->getExtension("native_profiler");
        $__internal_d8d6dcead332c04092f9cf1a65a2b7dc8cbad06e54f87ad25a541c492365b280->enter($__internal_d8d6dcead332c04092f9cf1a65a2b7dc8cbad06e54f87ad25a541c492365b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            ";
        // line 55
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 56
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
            // line 57
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 58
            echo "
                ";
            // line 60
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 61
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonataadmin/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 63
            echo "            ";
        }
        // line 64
        echo "
        ";
        
        $__internal_d8d6dcead332c04092f9cf1a65a2b7dc8cbad06e54f87ad25a541c492365b280->leave($__internal_d8d6dcead332c04092f9cf1a65a2b7dc8cbad06e54f87ad25a541c492365b280_prof);

    }

    // line 68
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_14e0397b565a51b7d3caa12d7b4f2c1c778ff0a60e6d18adf31b2101c662f82b = $this->env->getExtension("native_profiler");
        $__internal_14e0397b565a51b7d3caa12d7b4f2c1c778ff0a60e6d18adf31b2101c662f82b->enter($__internal_14e0397b565a51b7d3caa12d7b4f2c1c778ff0a60e6d18adf31b2101c662f82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 69
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 71
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 72
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 74
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 75
                echo "                    -
                    ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 77
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 78
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 79
                            echo "                                &gt;
                            ";
                        }
                        // line 81
                        echo "
                            ";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 84
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_14e0397b565a51b7d3caa12d7b4f2c1c778ff0a60e6d18adf31b2101c662f82b->leave($__internal_14e0397b565a51b7d3caa12d7b4f2c1c778ff0a60e6d18adf31b2101c662f82b_prof);

    }

    // line 90
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_c9c09817aeeb0d5ee0cf584ddd5bbf4d52b684c64e5b963d6433449430ab4110 = $this->env->getExtension("native_profiler");
        $__internal_c9c09817aeeb0d5ee0cf584ddd5bbf4d52b684c64e5b963d6433449430ab4110->enter($__internal_c9c09817aeeb0d5ee0cf584ddd5bbf4d52b684c64e5b963d6433449430ab4110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_c9c09817aeeb0d5ee0cf584ddd5bbf4d52b684c64e5b963d6433449430ab4110->leave($__internal_c9c09817aeeb0d5ee0cf584ddd5bbf4d52b684c64e5b963d6433449430ab4110_prof);

    }

    // line 91
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_c33221a20e8878f946dceba13545ef535114a74ceb85ad611d92c337c83c592f = $this->env->getExtension("native_profiler");
        $__internal_c33221a20e8878f946dceba13545ef535114a74ceb85ad611d92c337c83c592f->enter($__internal_c33221a20e8878f946dceba13545ef535114a74ceb85ad611d92c337c83c592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 92
        echo "            <header class=\"header\">
                ";
        // line 93
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 100
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 112
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 176
        echo "            </header>
        ";
        
        $__internal_c33221a20e8878f946dceba13545ef535114a74ceb85ad611d92c337c83c592f->leave($__internal_c33221a20e8878f946dceba13545ef535114a74ceb85ad611d92c337c83c592f_prof);

    }

    // line 93
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_ae7c4fd1f7a384842424bb7306c480b0236f4cf821522143702bc2f32c1c16b1 = $this->env->getExtension("native_profiler");
        $__internal_ae7c4fd1f7a384842424bb7306c480b0236f4cf821522143702bc2f32c1c16b1->enter($__internal_ae7c4fd1f7a384842424bb7306c480b0236f4cf821522143702bc2f32c1c16b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 94
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_ae7c4fd1f7a384842424bb7306c480b0236f4cf821522143702bc2f32c1c16b1->leave($__internal_ae7c4fd1f7a384842424bb7306c480b0236f4cf821522143702bc2f32c1c16b1_prof);

    }

    // line 100
    public function block_logo($context, array $blocks = array())
    {
        $__internal_a8a33f6c4b7c9756e4e9cbd419f60e9af93ab3d885cb48b7be74fb585e794d66 = $this->env->getExtension("native_profiler");
        $__internal_a8a33f6c4b7c9756e4e9cbd419f60e9af93ab3d885cb48b7be74fb585e794d66->enter($__internal_a8a33f6c4b7c9756e4e9cbd419f60e9af93ab3d885cb48b7be74fb585e794d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 101
        echo "                    ";
        ob_start();
        // line 102
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 103
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 104
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 106
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 107
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                        ";
        }
        // line 109
        echo "                    </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 111
        echo "                ";
        
        $__internal_a8a33f6c4b7c9756e4e9cbd419f60e9af93ab3d885cb48b7be74fb585e794d66->leave($__internal_a8a33f6c4b7c9756e4e9cbd419f60e9af93ab3d885cb48b7be74fb585e794d66_prof);

    }

    // line 112
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_1ba600d80912756ef04c08be925a0ce26fdd2e5fce76ccea1234335a4fc42f68 = $this->env->getExtension("native_profiler");
        $__internal_1ba600d80912756ef04c08be925a0ce26fdd2e5fce76ccea1234335a4fc42f68->enter($__internal_1ba600d80912756ef04c08be925a0ce26fdd2e5fce76ccea1234335a4fc42f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 113
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 114
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 123
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 148
            echo "                            </div>

                            ";
            // line 150
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 173
            echo "                        </nav>
                    ";
        }
        // line 175
        echo "                ";
        
        $__internal_1ba600d80912756ef04c08be925a0ce26fdd2e5fce76ccea1234335a4fc42f68->leave($__internal_1ba600d80912756ef04c08be925a0ce26fdd2e5fce76ccea1234335a4fc42f68_prof);

    }

    // line 123
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c1954e425cca9476965dd7bfd743fea402e83d232e53e00508f0e013a4098438 = $this->env->getExtension("native_profiler");
        $__internal_c1954e425cca9476965dd7bfd743fea402e83d232e53e00508f0e013a4098438->enter($__internal_c1954e425cca9476965dd7bfd743fea402e83d232e53e00508f0e013a4098438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 124
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 125
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 126
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 127
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 128
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 129
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 130
                            echo "                                                            <li>
                                                                ";
                            // line 131
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 132
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 134
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 136
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 138
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 140
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                                                ";
                }
                // line 142
                echo "                                            ";
            } else {
                // line 143
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 145
            echo "                                        </ol>
                                    ";
        }
        // line 147
        echo "                                ";
        
        $__internal_c1954e425cca9476965dd7bfd743fea402e83d232e53e00508f0e013a4098438->leave($__internal_c1954e425cca9476965dd7bfd743fea402e83d232e53e00508f0e013a4098438_prof);

    }

    // line 150
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_45cff6e77480895f626af576fe21275c5a36a6905a700f9e588060710a4b8e18 = $this->env->getExtension("native_profiler");
        $__internal_45cff6e77480895f626af576fe21275c5a36a6905a700f9e588060710a4b8e18->enter($__internal_45cff6e77480895f626af576fe21275c5a36a6905a700f9e588060710a4b8e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 151
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 157
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 157)->display($context);
        // line 158
        echo "                                        </li>
                                        <li style=\"display:none\" class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 164
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 164)->display($context);
        // line 165
        echo "                                            </ul>
                                        </li>
                                        <li>
                                            ";
        // line 168
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 168)->display($context);
        // line 169
        echo "                                        </li>
                                    </ul>
                                </div>
                            ";
        
        $__internal_45cff6e77480895f626af576fe21275c5a36a6905a700f9e588060710a4b8e18->leave($__internal_45cff6e77480895f626af576fe21275c5a36a6905a700f9e588060710a4b8e18_prof);

    }

    // line 179
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_335626e759771a0aa070fa6bd5e10fee6adf54896893d66793bcd1cbbecfbb1c = $this->env->getExtension("native_profiler");
        $__internal_335626e759771a0aa070fa6bd5e10fee6adf54896893d66793bcd1cbbecfbb1c->enter($__internal_335626e759771a0aa070fa6bd5e10fee6adf54896893d66793bcd1cbbecfbb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 180
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 181
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 253
        echo "
                <aside class=\"right-side\">
                    ";
        // line 255
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 332
        echo "                </aside>

            </div>
        ";
        
        $__internal_335626e759771a0aa070fa6bd5e10fee6adf54896893d66793bcd1cbbecfbb1c->leave($__internal_335626e759771a0aa070fa6bd5e10fee6adf54896893d66793bcd1cbbecfbb1c_prof);

    }

    // line 181
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e7dd222489ccf623d3e66849671a7de680321a5b5dee847ac54b8e5c35bdf521 = $this->env->getExtension("native_profiler");
        $__internal_e7dd222489ccf623d3e66849671a7de680321a5b5dee847ac54b8e5c35bdf521->enter($__internal_e7dd222489ccf623d3e66849671a7de680321a5b5dee847ac54b8e5c35bdf521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 182
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 184
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 250
        echo "                        </section>
                    </aside>
                ";
        
        $__internal_e7dd222489ccf623d3e66849671a7de680321a5b5dee847ac54b8e5c35bdf521->leave($__internal_e7dd222489ccf623d3e66849671a7de680321a5b5dee847ac54b8e5c35bdf521_prof);

    }

    // line 184
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_b3cbf5237559201f7a5ad8398ea94dbe1203ac72df84b8c299954076e37475fb = $this->env->getExtension("native_profiler");
        $__internal_b3cbf5237559201f7a5ad8398ea94dbe1203ac72df84b8c299954076e37475fb->enter($__internal_b3cbf5237559201f7a5ad8398ea94dbe1203ac72df84b8c299954076e37475fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 185
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 199
        echo "
                                ";
        // line 200
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 201
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 246
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 249
        echo "                            ";
        
        $__internal_b3cbf5237559201f7a5ad8398ea94dbe1203ac72df84b8c299954076e37475fb->leave($__internal_b3cbf5237559201f7a5ad8398ea94dbe1203ac72df84b8c299954076e37475fb_prof);

    }

    // line 185
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_34caa8aaead4d8d9807e9945d264bf754ff1e47a43f0683e4c577674cd0d18ef = $this->env->getExtension("native_profiler");
        $__internal_34caa8aaead4d8d9807e9945d264bf754ff1e47a43f0683e4c577674cd0d18ef->enter($__internal_34caa8aaead4d8d9807e9945d264bf754ff1e47a43f0683e4c577674cd0d18ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 186
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 187
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 198
        echo "                                ";
        
        $__internal_34caa8aaead4d8d9807e9945d264bf754ff1e47a43f0683e4c577674cd0d18ef->leave($__internal_34caa8aaead4d8d9807e9945d264bf754ff1e47a43f0683e4c577674cd0d18ef_prof);

    }

    // line 200
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_d5631b5df52f9beaf4026bcd61296684f8671c5752070cd0ba2e25319fc05e8c = $this->env->getExtension("native_profiler");
        $__internal_d5631b5df52f9beaf4026bcd61296684f8671c5752070cd0ba2e25319fc05e8c->enter($__internal_d5631b5df52f9beaf4026bcd61296684f8671c5752070cd0ba2e25319fc05e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_d5631b5df52f9beaf4026bcd61296684f8671c5752070cd0ba2e25319fc05e8c->leave($__internal_d5631b5df52f9beaf4026bcd61296684f8671c5752070cd0ba2e25319fc05e8c_prof);

    }

    // line 201
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_93957bf18b0b54f58d2d4a7edf3dd6cf5ee1845673e869f82d930051af71a030 = $this->env->getExtension("native_profiler");
        $__internal_93957bf18b0b54f58d2d4a7edf3dd6cf5ee1845673e869f82d930051af71a030->enter($__internal_93957bf18b0b54f58d2d4a7edf3dd6cf5ee1845673e869f82d930051af71a030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 202
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 203
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 205
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 206
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 207
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 208
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "
                                                ";
                // line 211
                echo "                                                ";
                $context["item_count"] = 0;
                // line 212
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 213
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 214
                            echo "                                                        ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 215
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 216
                                echo "                                                        ";
                            }
                            // line 217
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 218
                    echo "                                                ";
                }
                // line 219
                echo "
                                                ";
                // line 220
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 221
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 222
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 223
                        echo "                                                        ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 224
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 225
                            echo "                                                        ";
                        }
                        // line 226
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 229
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 230
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 233
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 234
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 235
                        echo "                                                                ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 236
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array()))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 238
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 239
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 242
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                                        </ul>
                                    ";
        }
        // line 245
        echo "                                ";
        
        $__internal_93957bf18b0b54f58d2d4a7edf3dd6cf5ee1845673e869f82d930051af71a030->leave($__internal_93957bf18b0b54f58d2d4a7edf3dd6cf5ee1845673e869f82d930051af71a030_prof);

    }

    // line 246
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_3eecc7c0805c83e6120502ee0235363ead4df60ffeabdb5692356f06e19b8e68 = $this->env->getExtension("native_profiler");
        $__internal_3eecc7c0805c83e6120502ee0235363ead4df60ffeabdb5692356f06e19b8e68->enter($__internal_3eecc7c0805c83e6120502ee0235363ead4df60ffeabdb5692356f06e19b8e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 247
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("show_page");
        echo "\" rel=\"noreferrer\">Перейти на общедоступную часть</a></p>
                                ";
        
        $__internal_3eecc7c0805c83e6120502ee0235363ead4df60ffeabdb5692356f06e19b8e68->leave($__internal_3eecc7c0805c83e6120502ee0235363ead4df60ffeabdb5692356f06e19b8e68_prof);

    }

    // line 255
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_8f652d52b47f2255f0e228911505aeffccdfb1f96fd5b2b85d5fac2b0c031e66 = $this->env->getExtension("native_profiler");
        $__internal_8f652d52b47f2255f0e228911505aeffccdfb1f96fd5b2b85d5fac2b0c031e66->enter($__internal_8f652d52b47f2255f0e228911505aeffccdfb1f96fd5b2b85d5fac2b0c031e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 256
        echo "                        <section class=\"content-header\">
                            ";
        // line 257
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 291
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 294
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 330
        echo "                        </section>
                    ";
        
        $__internal_8f652d52b47f2255f0e228911505aeffccdfb1f96fd5b2b85d5fac2b0c031e66->leave($__internal_8f652d52b47f2255f0e228911505aeffccdfb1f96fd5b2b85d5fac2b0c031e66_prof);

    }

    // line 257
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_f478c2f1012f6d13442e5e544f3826532c6a516ae31406e9ff9119c6f3a0c21b = $this->env->getExtension("native_profiler");
        $__internal_f478c2f1012f6d13442e5e544f3826532c6a516ae31406e9ff9119c6f3a0c21b->enter($__internal_f478c2f1012f6d13442e5e544f3826532c6a516ae31406e9ff9119c6f3a0c21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 258
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 289
        echo "
                            ";
        
        $__internal_f478c2f1012f6d13442e5e544f3826532c6a516ae31406e9ff9119c6f3a0c21b->leave($__internal_f478c2f1012f6d13442e5e544f3826532c6a516ae31406e9ff9119c6f3a0c21b_prof);

    }

    // line 258
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_7e8f52229f14e32730348e3584714706cf836e0014f466a7b6b899bb6a16f07b = $this->env->getExtension("native_profiler");
        $__internal_7e8f52229f14e32730348e3584714706cf836e0014f466a7b6b899bb6a16f07b->enter($__internal_7e8f52229f14e32730348e3584714706cf836e0014f466a7b6b899bb6a16f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 259
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 260
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 261
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 268
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 276
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 278
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 280
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 285
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 288
        echo "                                ";
        
        $__internal_7e8f52229f14e32730348e3584714706cf836e0014f466a7b6b899bb6a16f07b->leave($__internal_7e8f52229f14e32730348e3584714706cf836e0014f466a7b6b899bb6a16f07b_prof);

    }

    // line 261
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_6abacbaf7c8416dad07ef1245ab45abd8b7ad47c703eb0df7be667dfc7cfe60d = $this->env->getExtension("native_profiler");
        $__internal_6abacbaf7c8416dad07ef1245ab45abd8b7ad47c703eb0df7be667dfc7cfe60d->enter($__internal_6abacbaf7c8416dad07ef1245ab45abd8b7ad47c703eb0df7be667dfc7cfe60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 262
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 263
            echo "                                                    <div class=\"navbar-header\">
                                                        <span class=\"navbar-brand\">";
            // line 264
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                                    </div>
                                                ";
        }
        // line 267
        echo "                                            ";
        
        $__internal_6abacbaf7c8416dad07ef1245ab45abd8b7ad47c703eb0df7be667dfc7cfe60d->leave($__internal_6abacbaf7c8416dad07ef1245ab45abd8b7ad47c703eb0df7be667dfc7cfe60d_prof);

    }

    // line 294
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_c4e81b1620e49a26136f9070ceef4efe0e4629d07d7b4dff4cdc4675f5af9fb5 = $this->env->getExtension("native_profiler");
        $__internal_c4e81b1620e49a26136f9070ceef4efe0e4629d07d7b4dff4cdc4675f5af9fb5->enter($__internal_c4e81b1620e49a26136f9070ceef4efe0e4629d07d7b4dff4cdc4675f5af9fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 295
        echo "
                                ";
        // line 296
        $this->displayBlock('notice', $context, $blocks);
        // line 299
        echo "
                                ";
        // line 300
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 301
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 303
        echo "
                                ";
        // line 304
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 305
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 307
        echo "
                                ";
        // line 308
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 309
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 311
        echo "
                                ";
        // line 312
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 313
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 315
        echo "
                                ";
        // line 316
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 317
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 318
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 319
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 322
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 323
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 324
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 327
            echo "                                    </div>
                                ";
        }
        // line 329
        echo "                            ";
        
        $__internal_c4e81b1620e49a26136f9070ceef4efe0e4629d07d7b4dff4cdc4675f5af9fb5->leave($__internal_c4e81b1620e49a26136f9070ceef4efe0e4629d07d7b4dff4cdc4675f5af9fb5_prof);

    }

    // line 296
    public function block_notice($context, array $blocks = array())
    {
        $__internal_6f37cd1fb1421b475b77c89d2b5c5ab7b27a1cbbcc434de09279ea7c97ff5283 = $this->env->getExtension("native_profiler");
        $__internal_6f37cd1fb1421b475b77c89d2b5c5ab7b27a1cbbcc434de09279ea7c97ff5283->enter($__internal_6f37cd1fb1421b475b77c89d2b5c5ab7b27a1cbbcc434de09279ea7c97ff5283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 297
        echo "                                    ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 297)->display($context);
        // line 298
        echo "                                ";
        
        $__internal_6f37cd1fb1421b475b77c89d2b5c5ab7b27a1cbbcc434de09279ea7c97ff5283->leave($__internal_6f37cd1fb1421b475b77c89d2b5c5ab7b27a1cbbcc434de09279ea7c97ff5283_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1190 => 298,  1187 => 297,  1181 => 296,  1174 => 329,  1170 => 327,  1164 => 324,  1161 => 323,  1159 => 322,  1153 => 319,  1145 => 318,  1142 => 317,  1140 => 316,  1137 => 315,  1131 => 313,  1129 => 312,  1126 => 311,  1120 => 309,  1118 => 308,  1115 => 307,  1109 => 305,  1107 => 304,  1104 => 303,  1098 => 301,  1096 => 300,  1093 => 299,  1091 => 296,  1088 => 295,  1082 => 294,  1075 => 267,  1069 => 264,  1066 => 263,  1063 => 262,  1057 => 261,  1050 => 288,  1045 => 285,  1037 => 280,  1032 => 278,  1028 => 276,  1026 => 275,  1022 => 273,  1016 => 271,  1014 => 270,  1010 => 268,  1008 => 261,  1005 => 260,  1002 => 259,  996 => 258,  988 => 289,  985 => 258,  979 => 257,  971 => 330,  969 => 294,  964 => 291,  962 => 257,  959 => 256,  953 => 255,  943 => 247,  937 => 246,  930 => 245,  926 => 243,  920 => 242,  915 => 239,  909 => 238,  897 => 236,  894 => 235,  890 => 234,  884 => 233,  877 => 230,  873 => 229,  865 => 227,  859 => 226,  856 => 225,  853 => 224,  850 => 223,  845 => 222,  842 => 221,  840 => 220,  837 => 219,  834 => 218,  827 => 217,  824 => 216,  821 => 215,  818 => 214,  812 => 213,  809 => 212,  806 => 211,  803 => 209,  796 => 208,  793 => 207,  787 => 206,  784 => 205,  780 => 204,  777 => 203,  774 => 202,  768 => 201,  756 => 200,  749 => 198,  735 => 189,  729 => 187,  726 => 186,  720 => 185,  713 => 249,  710 => 246,  707 => 201,  705 => 200,  702 => 199,  699 => 185,  693 => 184,  684 => 250,  682 => 184,  678 => 182,  672 => 181,  662 => 332,  660 => 255,  656 => 253,  654 => 181,  651 => 180,  645 => 179,  635 => 169,  633 => 168,  628 => 165,  626 => 164,  618 => 158,  616 => 157,  608 => 151,  602 => 150,  595 => 147,  591 => 145,  585 => 143,  582 => 142,  579 => 141,  565 => 140,  559 => 138,  555 => 136,  549 => 134,  541 => 132,  539 => 131,  536 => 130,  533 => 129,  515 => 128,  512 => 127,  510 => 126,  507 => 125,  504 => 124,  498 => 123,  491 => 175,  487 => 173,  485 => 150,  481 => 148,  479 => 123,  468 => 114,  465 => 113,  459 => 112,  452 => 111,  448 => 109,  442 => 107,  439 => 106,  431 => 104,  429 => 103,  424 => 102,  421 => 101,  415 => 100,  404 => 96,  400 => 94,  394 => 93,  386 => 176,  383 => 112,  380 => 100,  378 => 93,  375 => 92,  369 => 91,  357 => 90,  350 => 87,  347 => 86,  344 => 85,  330 => 84,  325 => 82,  322 => 81,  318 => 79,  315 => 78,  312 => 77,  295 => 76,  292 => 75,  289 => 74,  283 => 72,  281 => 71,  275 => 69,  269 => 68,  261 => 64,  258 => 63,  252 => 61,  249 => 60,  246 => 58,  241 => 57,  238 => 56,  235 => 55,  232 => 53,  223 => 51,  219 => 50,  212 => 46,  208 => 44,  202 => 43,  194 => 42,  186 => 41,  182 => 39,  176 => 38,  168 => 35,  159 => 33,  155 => 32,  152 => 31,  146 => 30,  137 => 26,  131 => 25,  119 => 23,  110 => 336,  108 => 179,  105 => 178,  103 => 91,  99 => 90,  95 => 88,  93 => 68,  89 => 66,  87 => 38,  84 => 37,  82 => 30,  79 => 29,  77 => 25,  72 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% set _preview      = block('preview') %}*/
/* {% set _form         = block('form') %}*/
/* {% set _show         = block('show') %}*/
/* {% set _list_table   = block('list_table') %}*/
/* {% set _list_filters = block('list_filters') %}*/
/* {% set _tab_menu     = block('tab_menu') %}*/
/* {% set _content      = block('content') %}*/
/* {% set _title        = block('title') %}*/
/* {% set _breadcrumb   = block('breadcrumb') %}*/
/* {% set _actions      = block('actions') %}*/
/* {% set _navbar_title = block('navbar_title') %}*/
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/* */
/*             {% for stylesheet in admin_pool.getOption('stylesheets', []) %}*/
/*                 <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*             {% endfor %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if admin_pool is defined and admin_pool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if admin_pool is defined and admin_pool.getOption('use_icheck') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                };*/
/*             </script>*/
/* */
/*             {% for javascript in admin_pool.getOption('javascripts', []) %}*/
/*                 <script src="{{ asset(javascript) }}"></script>*/
/*             {% endfor %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if admin_pool is defined and admin_pool.getOption('use_select2') %}*/
/*                 {% set locale = app.request.locale %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonataadmin/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in admin.breadcrumbs(action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/*         {% block sonata_header %}*/
/*             <header class="header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% spaceless %}*/
/*                     <a class="logo" href="{{ url('sonata_admin_dashboard') }}">*/
/*                         {% if 'single_image' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                             <img src="{{ asset(admin_pool.titlelogo) }}" alt="{{ admin_pool.title }}">*/
/*                         {% endif %}*/
/*                         {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                             <span>{{ admin_pool.title }}</span>*/
/*                         {% endif %}*/
/*                     </a>*/
/*                     {% endspaceless %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     {% if admin_pool is defined %}*/
/*                         <nav class="navbar navbar-static-top" role="navigation">*/
/*                             <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </a>*/
/* */
/*                             <div class="navbar-left">*/
/*                                 {% block sonata_breadcrumb %}*/
/*                                     {% if _breadcrumb is not empty or action is defined %}*/
/*                                         <ol class="nav navbar-top-links breadcrumb">*/
/*                                             {% if _breadcrumb is empty %}*/
/*                                                 {% if action is defined %}*/
/*                                                     {% for menu in admin.breadcrumbs(action) %}*/
/*                                                         {% if not loop.last  %}*/
/*                                                             <li>*/
/*                                                                 {% if menu.uri is not empty %}*/
/*                                                                     <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                 {% else %}*/
/*                                                                     {{ menu.label }}*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {{ _breadcrumb|raw }}*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_breadcrumb %}*/
/*                             </div>*/
/* */
/*                             {% block sonata_top_nav_menu %}*/
/*                                 <div class="navbar-right">*/
/*                                     <ul class="nav navbar-nav">*/
/*                                         <li class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             {% include admin_pool.getTemplate('add_block') %}*/
/*                                         </li>*/
/*                                         <li style="display:none" class="dropdown user-menu">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             <ul class="dropdown-menu dropdown-user">*/
/*                                                 {% include admin_pool.getTemplate('user_block') %}*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             {% include admin_pool.getTemplate('user_block') %}*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% endblock %}*/
/*                         </nav>*/
/*                     {% endif %}*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             <div class="wrapper row-offcanvas row-offcanvas-left">*/
/*                 {% block sonata_left_side %}*/
/*                     <aside class="left-side sidebar-offcanvas">*/
/*                         <section class="sidebar">*/
/*                             {% block sonata_side_nav %}*/
/*                                 {% block sonata_sidebar_search %}*/
/*                                     {% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                         <form action="{{ url('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                             <div class="input-group custom-search-form">*/
/*                                                 <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                     <span class="input-group-btn">*/
/*                                                         <button class="btn btn-flat" type="submit">*/
/*                                                             <i class="fa fa-search"></i>*/
/*                                                         </button>*/
/*                                                     </span>*/
/*                                             </div>*/
/*                                         </form>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_sidebar_search %}*/
/* */
/*                                 {% block side_bar_before_nav %} {% endblock %}*/
/*                                 {% block side_bar_nav %}*/
/*                                     {% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                         <ul class="sidebar-menu">*/
/*                                             {% for group in admin_pool.dashboardgroups %}*/
/*                                                 {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*                                                 {% for role in group.roles if not display %}*/
/*                                                     {% set display = is_granted(role) %}*/
/*                                                 {% endfor %}*/
/* */
/*                                                 {# Do not display the group label if no item in group is available #}*/
/*                                                 {% set item_count = 0 %}*/
/*                                                 {% if display %}*/
/*                                                     {% for admin in group.items if item_count == 0 %}*/
/*                                                         {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                             {% set item_count = item_count+1 %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if display and (item_count > 0) %}*/
/*                                                     {% set active = false %}*/
/*                                                     {% for admin in group.items %}*/
/*                                                         {% if admin.hasroute('list') and admin.isGranted('LIST') and app.request.get('_sonata_admin') == admin.code %}*/
/*                                                             {% set active = true %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                     <li class="treeview{% if active %} active{% endif %}">*/
/*                                                         <a href="#">*/
/*                                                             {% if group.icon|default() %}{{ group.icon|raw }}{% endif %}*/
/*                                                             <span>{{ group.label|trans({}, group.label_catalogue) }}</span>*/
/*                                                             <i class="fa pull-right fa-angle-left"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu{% if active %} active{% endif %}">*/
/*                                                             {% for admin in group.items %}*/
/*                                                                 {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                                     <li{% if app.request.get('_sonata_admin') == admin.code %} class="active"{% endif %}><a href="{{ admin.generateUrl('list')}}"><i class="fa fa-angle-double-right"></i> {{ admin.label|trans({}, admin.translationdomain) }}</a></li>*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %}*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     {% endif %}*/
/*                                 {% endblock side_bar_nav %}*/
/*                                 {% block side_bar_after_nav %}*/
/*                                     <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px"><a href="{{ path('show_page') }}" rel="noreferrer">Перейти на общедоступную часть</a></p>*/
/*                                 {% endblock %}*/
/*                             {% endblock sonata_side_nav %}*/
/*                         </section>*/
/*                     </aside>*/
/*                 {% endblock sonata_left_side %}*/
/* */
/*                 <aside class="right-side">*/
/*                     {% block sonata_page_content %}*/
/*                         <section class="content-header">*/
/*                             {% block sonata_page_content_header %}*/
/*                                 {% block sonata_page_content_nav %}*/
/*                                     {% if _tab_menu is not empty or _actions is not empty %}*/
/*                                         <nav class="navbar navbar-default" role="navigation">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <span class="navbar-brand">{{ _navbar_title|raw }}</span>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/*                                             <div class="container-fluid">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                     <ul class="nav navbar-nav navbar-right">*/
/*                                                         <li class="dropdown sonata-actions">*/
/*                                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                             <ul class="dropdown-menu" role="menu">*/
/*                                                                 {{ _actions|raw }}*/
/*                                                             </ul>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </nav>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_page_content_nav %}*/
/* */
/*                             {% endblock sonata_page_content_header %}*/
/*                         </section>*/
/* */
/*                         <section class="content">*/
/*                             {% block sonata_admin_content %}*/
/* */
/*                                 {% block notice %}*/
/*                                     {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                                 {% endblock notice %}*/
/* */
/*                                 {% if _preview is not empty %}*/
/*                                     <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _content is not empty %}*/
/*                                     <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _show is not empty %}*/
/*                                     <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _form is not empty %}*/
/*                                     <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                     <div class="row">*/
/*                                         <div class="sonata-ba-list {% if _list_filters|trim %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                                             {{ _list_table|raw }}*/
/*                                         </div>*/
/* */
/*                                         {% if _list_filters|trim %}*/
/*                                             <div class="sonata-ba-filter col-md-2">*/
/*                                                 {{ _list_filters|raw }}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_admin_content %}*/
/*                         </section>*/
/*                     {% endblock sonata_page_content %}*/
/*                 </aside>*/
/* */
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </body>*/
/* </html>*/
/* */
