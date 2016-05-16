<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a40f8a8e4990bc91059fa58ef85b386f26dd4bccf67c9f4751d76c36ea6e2c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7b4dcb6dc0f482af765ae2c6058e3240c54ef7739e3d8c952377b4f8da4831f = $this->env->getExtension("native_profiler");
        $__internal_b7b4dcb6dc0f482af765ae2c6058e3240c54ef7739e3d8c952377b4f8da4831f->enter($__internal_b7b4dcb6dc0f482af765ae2c6058e3240c54ef7739e3d8c952377b4f8da4831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b4dcb6dc0f482af765ae2c6058e3240c54ef7739e3d8c952377b4f8da4831f->leave($__internal_b7b4dcb6dc0f482af765ae2c6058e3240c54ef7739e3d8c952377b4f8da4831f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46c5b973fc46e897c32a3ed56f7f9b54aa40ddfb087361071e988535c54c9723 = $this->env->getExtension("native_profiler");
        $__internal_46c5b973fc46e897c32a3ed56f7f9b54aa40ddfb087361071e988535c54c9723->enter($__internal_46c5b973fc46e897c32a3ed56f7f9b54aa40ddfb087361071e988535c54c9723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_46c5b973fc46e897c32a3ed56f7f9b54aa40ddfb087361071e988535c54c9723->leave($__internal_46c5b973fc46e897c32a3ed56f7f9b54aa40ddfb087361071e988535c54c9723_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
