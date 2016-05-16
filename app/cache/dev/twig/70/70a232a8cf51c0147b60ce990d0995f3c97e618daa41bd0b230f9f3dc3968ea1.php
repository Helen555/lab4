<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_1b0885f5a8769ead3dd718b5ac22655bff9aaba6bbbdb729535d1dabb483a4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a724b9ae14ada7e7ea11a2c82b45d56ec26e4086aa00a813987968c7d6d40f7b = $this->env->getExtension("native_profiler");
        $__internal_a724b9ae14ada7e7ea11a2c82b45d56ec26e4086aa00a813987968c7d6d40f7b->enter($__internal_a724b9ae14ada7e7ea11a2c82b45d56ec26e4086aa00a813987968c7d6d40f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a724b9ae14ada7e7ea11a2c82b45d56ec26e4086aa00a813987968c7d6d40f7b->leave($__internal_a724b9ae14ada7e7ea11a2c82b45d56ec26e4086aa00a813987968c7d6d40f7b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
