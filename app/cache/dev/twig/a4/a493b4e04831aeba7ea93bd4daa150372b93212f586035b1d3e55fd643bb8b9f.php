<?php

/* base.html.twig */
class __TwigTemplate_c67e79bd1c58e3c460521dca4164f2c6f3a977bb226c85b4da8f8324d1d5c214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b46a2591cb339c6ace3824927ea58e1bde65b043ba7b708c7c219ceb6d7418db = $this->env->getExtension("native_profiler");
        $__internal_b46a2591cb339c6ace3824927ea58e1bde65b043ba7b708c7c219ceb6d7418db->enter($__internal_b46a2591cb339c6ace3824927ea58e1bde65b043ba7b708c7c219ceb6d7418db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</body>
</html>";
        
        $__internal_b46a2591cb339c6ace3824927ea58e1bde65b043ba7b708c7c219ceb6d7418db->leave($__internal_b46a2591cb339c6ace3824927ea58e1bde65b043ba7b708c7c219ceb6d7418db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bf1a83b50d65d07e45b4af3217e908511ae67d488ea0ad43f253b4ef4d445cd = $this->env->getExtension("native_profiler");
        $__internal_4bf1a83b50d65d07e45b4af3217e908511ae67d488ea0ad43f253b4ef4d445cd->enter($__internal_4bf1a83b50d65d07e45b4af3217e908511ae67d488ea0ad43f253b4ef4d445cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Проведи время с пользой";
        
        $__internal_4bf1a83b50d65d07e45b4af3217e908511ae67d488ea0ad43f253b4ef4d445cd->leave($__internal_4bf1a83b50d65d07e45b4af3217e908511ae67d488ea0ad43f253b4ef4d445cd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71bb3099d7239d52db47081696c5d6f57947801a4f3315f77478fcf61c38cee1 = $this->env->getExtension("native_profiler");
        $__internal_71bb3099d7239d52db47081696c5d6f57947801a4f3315f77478fcf61c38cee1->enter($__internal_71bb3099d7239d52db47081696c5d6f57947801a4f3315f77478fcf61c38cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link media=\"print\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/print.css"), "html", null, true);
        echo "\"/>
        <link media=\"screen\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_71bb3099d7239d52db47081696c5d6f57947801a4f3315f77478fcf61c38cee1->leave($__internal_71bb3099d7239d52db47081696c5d6f57947801a4f3315f77478fcf61c38cee1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_78be4efb4fdf9f9b6aef886d19e7cb8324681c977d057622abc52b1168e2ff42 = $this->env->getExtension("native_profiler");
        $__internal_78be4efb4fdf9f9b6aef886d19e7cb8324681c977d057622abc52b1168e2ff42->enter($__internal_78be4efb4fdf9f9b6aef886d19e7cb8324681c977d057622abc52b1168e2ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78be4efb4fdf9f9b6aef886d19e7cb8324681c977d057622abc52b1168e2ff42->leave($__internal_78be4efb4fdf9f9b6aef886d19e7cb8324681c977d057622abc52b1168e2ff42_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d3753b7bdbc88f54c9414f2502a6e5c7e9f53c1ad96e30eccdc8f533f155380 = $this->env->getExtension("native_profiler");
        $__internal_1d3753b7bdbc88f54c9414f2502a6e5c7e9f53c1ad96e30eccdc8f533f155380->enter($__internal_1d3753b7bdbc88f54c9414f2502a6e5c7e9f53c1ad96e30eccdc8f533f155380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1d3753b7bdbc88f54c9414f2502a6e5c7e9f53c1ad96e30eccdc8f533f155380->leave($__internal_1d3753b7bdbc88f54c9414f2502a6e5c7e9f53c1ad96e30eccdc8f533f155380_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  106 => 15,  100 => 14,  89 => 13,  80 => 8,  75 => 7,  69 => 6,  57 => 5,  49 => 18,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <title>{% block title %}Проведи время с пользой{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link media="print" rel="stylesheet" href="{{ asset('css/print.css') }}"/>*/
/*         <link media="screen" rel="stylesheet" href="{{ asset('css/main.css') }}"/>*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('script/jquery-2.1.4.min.js') }}"></script>*/
/*     <script src="{{ asset('script/main.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
