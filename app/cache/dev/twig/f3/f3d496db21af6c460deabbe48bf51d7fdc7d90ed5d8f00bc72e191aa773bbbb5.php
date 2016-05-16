<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_c0542e02ff6ff63ec5b5fe0ab4ffba9ef304f870237ace4cf446cd5d5f02f972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_448d13ebd2ae8c268352ad79b3d31c2489f20012299ea8f514d1ee7b19aeb6d1 = $this->env->getExtension("native_profiler");
        $__internal_448d13ebd2ae8c268352ad79b3d31c2489f20012299ea8f514d1ee7b19aeb6d1->enter($__internal_448d13ebd2ae8c268352ad79b3d31c2489f20012299ea8f514d1ee7b19aeb6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_448d13ebd2ae8c268352ad79b3d31c2489f20012299ea8f514d1ee7b19aeb6d1->leave($__internal_448d13ebd2ae8c268352ad79b3d31c2489f20012299ea8f514d1ee7b19aeb6d1_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
