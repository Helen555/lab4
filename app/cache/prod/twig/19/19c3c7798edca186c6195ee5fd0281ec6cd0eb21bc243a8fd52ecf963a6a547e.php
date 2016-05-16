<?php

/* base.html.twig */
class __TwigTemplate_0ca2a21a5051e880b7fc7fc99dbf29be275e3806e177a311345e27a618f85f51 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Проведи время с пользой";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link media=\"print\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/print.css"), "html", null, true);
        echo "\"/>
        <link media=\"screen\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/main.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  84 => 16,  79 => 15,  76 => 14,  71 => 13,  65 => 8,  60 => 7,  57 => 6,  51 => 5,  46 => 18,  44 => 14,  42 => 13,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
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
