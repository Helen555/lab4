<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_35d85d389ee5c57b7aa4d96928c47a11e675fedd6bc32c9bfe184e5dca13ee5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38037668236203961f255fe9fb1a6decf04a05e3553adf03125e72de6cab59b9 = $this->env->getExtension("native_profiler");
        $__internal_38037668236203961f255fe9fb1a6decf04a05e3553adf03125e72de6cab59b9->enter($__internal_38037668236203961f255fe9fb1a6decf04a05e3553adf03125e72de6cab59b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38037668236203961f255fe9fb1a6decf04a05e3553adf03125e72de6cab59b9->leave($__internal_38037668236203961f255fe9fb1a6decf04a05e3553adf03125e72de6cab59b9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
