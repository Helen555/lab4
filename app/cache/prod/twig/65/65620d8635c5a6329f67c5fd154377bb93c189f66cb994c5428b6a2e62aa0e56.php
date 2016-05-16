<?php

/* blocks/leftblock.html.twig */
class __TwigTemplate_9fc5329a21787a599830b4bdde3fe651927a46bc8a0c1fedbc6970e58e714e1e extends Twig_Template
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
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% render(controller('AppBundle:Default:menu')) %}*/
/* {% include 'blocks/admin.html.twig' %}*/
/* <div id="counts">*/
/*   <img src="{{ asset('img/lv.jpg') }}" alt="counts"/>*/
/* </div>*/
