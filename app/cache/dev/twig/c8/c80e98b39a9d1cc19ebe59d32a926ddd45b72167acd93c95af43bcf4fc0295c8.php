<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_a629377ee8b6bcb14c8b3c51a19ee0e2f34548f5e164db8b6ef25024a076b548 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ebc47535d67700f7eb534c62b609610c52b4aa215457302dbfe16ee3d5b7c07 = $this->env->getExtension("native_profiler");
        $__internal_2ebc47535d67700f7eb534c62b609610c52b4aa215457302dbfe16ee3d5b7c07->enter($__internal_2ebc47535d67700f7eb534c62b609610c52b4aa215457302dbfe16ee3d5b7c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ebc47535d67700f7eb534c62b609610c52b4aa215457302dbfe16ee3d5b7c07->leave($__internal_2ebc47535d67700f7eb534c62b609610c52b4aa215457302dbfe16ee3d5b7c07_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef7a7c0b43df7a6ebdd91c23d620f78f7694f5e7732a1bd8be7ff7e855ba5ae2 = $this->env->getExtension("native_profiler");
        $__internal_ef7a7c0b43df7a6ebdd91c23d620f78f7694f5e7732a1bd8be7ff7e855ba5ae2->enter($__internal_ef7a7c0b43df7a6ebdd91c23d620f78f7694f5e7732a1bd8be7ff7e855ba5ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_ef7a7c0b43df7a6ebdd91c23d620f78f7694f5e7732a1bd8be7ff7e855ba5ae2->leave($__internal_ef7a7c0b43df7a6ebdd91c23d620f78f7694f5e7732a1bd8be7ff7e855ba5ae2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
