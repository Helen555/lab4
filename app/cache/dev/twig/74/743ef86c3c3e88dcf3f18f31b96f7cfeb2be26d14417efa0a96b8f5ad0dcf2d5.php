<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_fedb39da9df2f5cf8b9cca7305a2915f936b617423e0dff696ee928a1b3f0719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25456dcf8241cdfc99f85daa4a0be4959516ae981cf8aa462dd547d15b8fe524 = $this->env->getExtension("native_profiler");
        $__internal_25456dcf8241cdfc99f85daa4a0be4959516ae981cf8aa462dd547d15b8fe524->enter($__internal_25456dcf8241cdfc99f85daa4a0be4959516ae981cf8aa462dd547d15b8fe524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25456dcf8241cdfc99f85daa4a0be4959516ae981cf8aa462dd547d15b8fe524->leave($__internal_25456dcf8241cdfc99f85daa4a0be4959516ae981cf8aa462dd547d15b8fe524_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
