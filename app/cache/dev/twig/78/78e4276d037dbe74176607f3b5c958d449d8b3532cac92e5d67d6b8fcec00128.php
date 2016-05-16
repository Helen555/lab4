<?php

/* blocks/leftblock.html.twig */
class __TwigTemplate_ca70a88efedbc0a566f4905b9b9b47a5066d79d82c01220fbc586dfac8e13de5 extends Twig_Template
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
        $__internal_c1d477602bd2c17246a41b674924b8330374074aa18bafab375ebb9504e40742 = $this->env->getExtension("native_profiler");
        $__internal_c1d477602bd2c17246a41b674924b8330374074aa18bafab375ebb9504e40742->enter($__internal_c1d477602bd2c17246a41b674924b8330374074aa18bafab375ebb9504e40742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/leftblock.html.twig"));

        // line 1
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AppBundle:Default:menu"), array());
        // line 2
        $this->loadTemplate("blocks/admin.html.twig", "blocks/leftblock.html.twig", 2)->display($context);
        // line 3
        echo "<div id=\"counts\">
  <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/lv.jpg"), "html", null, true);
        echo "\" alt=\"counts\"/>
</div>";
        
        $__internal_c1d477602bd2c17246a41b674924b8330374074aa18bafab375ebb9504e40742->leave($__internal_c1d477602bd2c17246a41b674924b8330374074aa18bafab375ebb9504e40742_prof);

    }

    public function getTemplateName()
    {
        return "blocks/leftblock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% render(controller('AppBundle:Default:menu')) %}*/
/* {% include 'blocks/admin.html.twig' %}*/
/* <div id="counts">*/
/*   <img src="{{ asset('img/lv.jpg') }}" alt="counts"/>*/
/* </div>*/
