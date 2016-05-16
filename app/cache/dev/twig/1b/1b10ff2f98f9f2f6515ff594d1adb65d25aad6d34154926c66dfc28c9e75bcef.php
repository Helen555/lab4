<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_b976c87765d6d9ff2abba683399f67bbca0d187a44197f2bfa3234ffc2f63b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f7060731488925f634b28b6c970cbdc3884ffe30f4e53ca6c520758f85d5b85 = $this->env->getExtension("native_profiler");
        $__internal_1f7060731488925f634b28b6c970cbdc3884ffe30f4e53ca6c520758f85d5b85->enter($__internal_1f7060731488925f634b28b6c970cbdc3884ffe30f4e53ca6c520758f85d5b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7060731488925f634b28b6c970cbdc3884ffe30f4e53ca6c520758f85d5b85->leave($__internal_1f7060731488925f634b28b6c970cbdc3884ffe30f4e53ca6c520758f85d5b85_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_36955e7b4471611aa5e477452a97cea201d0fb040f98e770ba85e21f365e532e = $this->env->getExtension("native_profiler");
        $__internal_36955e7b4471611aa5e477452a97cea201d0fb040f98e770ba85e21f365e532e->enter($__internal_36955e7b4471611aa5e477452a97cea201d0fb040f98e770ba85e21f365e532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_36955e7b4471611aa5e477452a97cea201d0fb040f98e770ba85e21f365e532e->leave($__internal_36955e7b4471611aa5e477452a97cea201d0fb040f98e770ba85e21f365e532e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
