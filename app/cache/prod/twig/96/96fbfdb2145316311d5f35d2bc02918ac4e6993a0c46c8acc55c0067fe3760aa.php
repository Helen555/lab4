<?php

/* blocks/rightblock.html.twig */
class __TwigTemplate_7897a9bb26e6109ebabadb7693ddb10c17dfc7f1544a8f2c43039263a1bf60b8 extends Twig_Template
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
        echo "<div id=\"google\">
  <a href=\"https://www.google.com.ua/\" ><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/61173170.jpg"), "html", null, true);
        echo "\" ></a>
</div>
<div id=\"copyright\">
  <p class=\"cop\">&copy;</p>
  <form id=\"datetime\" name=\"datetime\">
    <p id=\"date\">Текущая дата:<br><input name=date size=12><br></p>
    <p id=\"clock\">Текущее время:<br><input name=clock size=12><br></p>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "blocks/rightblock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="google">*/
/*   <a href="https://www.google.com.ua/" ><img src="{{ asset('img/61173170.jpg') }}" ></a>*/
/* </div>*/
/* <div id="copyright">*/
/*   <p class="cop">&copy;</p>*/
/*   <form id="datetime" name="datetime">*/
/*     <p id="date">Текущая дата:<br><input name=date size=12><br></p>*/
/*     <p id="clock">Текущее время:<br><input name=clock size=12><br></p>*/
/*   </form>*/
/* </div>*/
