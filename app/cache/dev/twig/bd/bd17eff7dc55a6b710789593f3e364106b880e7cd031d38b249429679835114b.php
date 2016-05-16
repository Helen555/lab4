<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e516358dcec0a1b09b9ddddaacb179cbb65207238f625a54dd7e37a0b8f21d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c522ba3668f2582faf0ad7cead2c8cf9240537b18a4f01113830a254d0a20a3d = $this->env->getExtension("native_profiler");
        $__internal_c522ba3668f2582faf0ad7cead2c8cf9240537b18a4f01113830a254d0a20a3d->enter($__internal_c522ba3668f2582faf0ad7cead2c8cf9240537b18a4f01113830a254d0a20a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_c522ba3668f2582faf0ad7cead2c8cf9240537b18a4f01113830a254d0a20a3d->leave($__internal_c522ba3668f2582faf0ad7cead2c8cf9240537b18a4f01113830a254d0a20a3d_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d03b1a236fc79e5b928ca437798216007be804baea2861d98fbe06cf64a781d = $this->env->getExtension("native_profiler");
        $__internal_5d03b1a236fc79e5b928ca437798216007be804baea2861d98fbe06cf64a781d->enter($__internal_5d03b1a236fc79e5b928ca437798216007be804baea2861d98fbe06cf64a781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_5d03b1a236fc79e5b928ca437798216007be804baea2861d98fbe06cf64a781d->leave($__internal_5d03b1a236fc79e5b928ca437798216007be804baea2861d98fbe06cf64a781d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
