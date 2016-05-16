<?php

/* blocks/top.html.twig */
class __TwigTemplate_ab4002af155e4129582b141921c25f05f0a1f3c8ca51f369a4c5fb5963754911 extends Twig_Template
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
        return array (  23 => 3,  19 => 1,);
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
