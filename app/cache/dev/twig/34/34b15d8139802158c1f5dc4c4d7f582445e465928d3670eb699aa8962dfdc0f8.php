<?php

/* blocks/top.html.twig */
class __TwigTemplate_481b863e5050a5f128e4091b5135a5b2c56326b9de2b15c028644b3deaca81c8 extends Twig_Template
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
        $__internal_5db0969333a7fe70c72669c8520bbd8f0b1adf5947bc4c67eebc0a899896d1be = $this->env->getExtension("native_profiler");
        $__internal_5db0969333a7fe70c72669c8520bbd8f0b1adf5947bc4c67eebc0a899896d1be->enter($__internal_5db0969333a7fe70c72669c8520bbd8f0b1adf5947bc4c67eebc0a899896d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/top.html.twig"));

        // line 1
        echo "<div id=\"logo\" onmouseover=\"logoAnim();\" onmouseout=\"clearTimeout(m);\">
  <a href=\"JavaScript:window.open('http://javascript.ru','javascript', 'width=800,height=600');\">
    <img id=\"logoPicture\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/main.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
  </a>
</div>
<div id=\"contact\">
  <p>Контактые реквизиты:</p>
  <p>Телефон: +38-099-012-34-56;</p>
  <p>Факс: +38-099-012-34-56;</p>
</div>";
        
        $__internal_5db0969333a7fe70c72669c8520bbd8f0b1adf5947bc4c67eebc0a899896d1be->leave($__internal_5db0969333a7fe70c72669c8520bbd8f0b1adf5947bc4c67eebc0a899896d1be_prof);

    }

    public function getTemplateName()
    {
        return "blocks/top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="logo" onmouseover="logoAnim();" onmouseout="clearTimeout(m);">*/
/*   <a href="JavaScript:window.open('http://javascript.ru','javascript', 'width=800,height=600');">*/
/*     <img id="logoPicture" src="{{ asset('img/main.png') }}" alt="logo"/>*/
/*   </a>*/
/* </div>*/
/* <div id="contact">*/
/*   <p>Контактые реквизиты:</p>*/
/*   <p>Телефон: +38-099-012-34-56;</p>*/
/*   <p>Факс: +38-099-012-34-56;</p>*/
/* </div>*/
