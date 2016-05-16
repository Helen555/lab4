<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_66d26f11c8b6ed9b543a9e1de4d84212d0f4813d53e1f3c4f2a229537592bfde extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_244209fb77f593a7739a10b204cf3b8221fdcc4fe66b0c72c46b4c6baee5db41 = $this->env->getExtension("native_profiler");
        $__internal_244209fb77f593a7739a10b204cf3b8221fdcc4fe66b0c72c46b4c6baee5db41->enter($__internal_244209fb77f593a7739a10b204cf3b8221fdcc4fe66b0c72c46b4c6baee5db41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244209fb77f593a7739a10b204cf3b8221fdcc4fe66b0c72c46b4c6baee5db41->leave($__internal_244209fb77f593a7739a10b204cf3b8221fdcc4fe66b0c72c46b4c6baee5db41_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
