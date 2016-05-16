<?php

/* blocks/rightblock.html.twig */
class __TwigTemplate_169fa24ab0f34075471adc56ae4e48c712b7df07b4627b505d1a11848fb977f7 extends Twig_Template
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
        $__internal_d6b3935e1b4d36296863f7e437bb1f7904747a04e8cdb19d7237ec1eaacc7bdd = $this->env->getExtension("native_profiler");
        $__internal_d6b3935e1b4d36296863f7e437bb1f7904747a04e8cdb19d7237ec1eaacc7bdd->enter($__internal_d6b3935e1b4d36296863f7e437bb1f7904747a04e8cdb19d7237ec1eaacc7bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/rightblock.html.twig"));

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
        
        $__internal_d6b3935e1b4d36296863f7e437bb1f7904747a04e8cdb19d7237ec1eaacc7bdd->leave($__internal_d6b3935e1b4d36296863f7e437bb1f7904747a04e8cdb19d7237ec1eaacc7bdd_prof);

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
        return array (  25 => 2,  22 => 1,);
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
