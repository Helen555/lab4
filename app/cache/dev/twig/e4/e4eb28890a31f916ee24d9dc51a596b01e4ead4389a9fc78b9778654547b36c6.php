<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_575a1a41bd2ee955cc6858a1f4c296beed22ce7b12188b8a9de45dd898f3e3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb131b2aaa07e70a1e3b505462809f2a9721dda061340c862abbcf490651378c = $this->env->getExtension("native_profiler");
        $__internal_cb131b2aaa07e70a1e3b505462809f2a9721dda061340c862abbcf490651378c->enter($__internal_cb131b2aaa07e70a1e3b505462809f2a9721dda061340c862abbcf490651378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb131b2aaa07e70a1e3b505462809f2a9721dda061340c862abbcf490651378c->leave($__internal_cb131b2aaa07e70a1e3b505462809f2a9721dda061340c862abbcf490651378c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
