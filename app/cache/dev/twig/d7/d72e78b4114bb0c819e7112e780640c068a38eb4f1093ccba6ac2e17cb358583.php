<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_1906d1df200dcffb7cb2fbd73813ce83c81cfe4841ab85130d73598ce83dd52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_accfa863f6b7a2f573408acf95278bd60227c015b2919dacaf55427408767a30 = $this->env->getExtension("native_profiler");
        $__internal_accfa863f6b7a2f573408acf95278bd60227c015b2919dacaf55427408767a30->enter($__internal_accfa863f6b7a2f573408acf95278bd60227c015b2919dacaf55427408767a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_accfa863f6b7a2f573408acf95278bd60227c015b2919dacaf55427408767a30->leave($__internal_accfa863f6b7a2f573408acf95278bd60227c015b2919dacaf55427408767a30_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_d3a471244b2cc61d9e5b3b49af72adbad8d4932990d5f719078cd6420f36a98d = $this->env->getExtension("native_profiler");
        $__internal_d3a471244b2cc61d9e5b3b49af72adbad8d4932990d5f719078cd6420f36a98d->enter($__internal_d3a471244b2cc61d9e5b3b49af72adbad8d4932990d5f719078cd6420f36a98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_d3a471244b2cc61d9e5b3b49af72adbad8d4932990d5f719078cd6420f36a98d->leave($__internal_d3a471244b2cc61d9e5b3b49af72adbad8d4932990d5f719078cd6420f36a98d_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_559949fb25708f017ce000d111b103e073fb156ab5c07274842bc2ac6b4a9f29 = $this->env->getExtension("native_profiler");
        $__internal_559949fb25708f017ce000d111b103e073fb156ab5c07274842bc2ac6b4a9f29->enter($__internal_559949fb25708f017ce000d111b103e073fb156ab5c07274842bc2ac6b4a9f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_559949fb25708f017ce000d111b103e073fb156ab5c07274842bc2ac6b4a9f29->leave($__internal_559949fb25708f017ce000d111b103e073fb156ab5c07274842bc2ac6b4a9f29_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_62fb91587539907be7ec194b73e073a2720c7773e3094b58e7bb6d7819a058bb = $this->env->getExtension("native_profiler");
        $__internal_62fb91587539907be7ec194b73e073a2720c7773e3094b58e7bb6d7819a058bb->enter($__internal_62fb91587539907be7ec194b73e073a2720c7773e3094b58e7bb6d7819a058bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_62fb91587539907be7ec194b73e073a2720c7773e3094b58e7bb6d7819a058bb->leave($__internal_62fb91587539907be7ec194b73e073a2720c7773e3094b58e7bb6d7819a058bb_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_b382c386ce453e2afed216270a44f8755dd07b186b03f226628766558c3bbe7f = $this->env->getExtension("native_profiler");
        $__internal_b382c386ce453e2afed216270a44f8755dd07b186b03f226628766558c3bbe7f->enter($__internal_b382c386ce453e2afed216270a44f8755dd07b186b03f226628766558c3bbe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_b382c386ce453e2afed216270a44f8755dd07b186b03f226628766558c3bbe7f->leave($__internal_b382c386ce453e2afed216270a44f8755dd07b186b03f226628766558c3bbe7f_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
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
/* */
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
