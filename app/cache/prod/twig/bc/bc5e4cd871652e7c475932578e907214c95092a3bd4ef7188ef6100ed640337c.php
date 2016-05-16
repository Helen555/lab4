<?php

/* blocks/layout.html.twig */
class __TwigTemplate_9961cba0ff7eb7a8b578b75018fd4b904dfa12b1e4b924208cc919cfd20fa009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blocks/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "     <div id=\"all\">
      <div id=\"top\">
        ";
        // line 5
        $this->loadTemplate("blocks/top.html.twig", "blocks/layout.html.twig", 5)->display($context);
        // line 6
        echo "      </div>
      <div id=\"other\">
        <div id=\"leftblock\">
          ";
        // line 9
        $this->loadTemplate("blocks/leftblock.html.twig", "blocks/layout.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
        <div id=\"rightblock\">
          ";
        // line 12
        $this->loadTemplate("blocks/rightblock.html.twig", "blocks/layout.html.twig", 12)->display($context);
        // line 13
        echo "        </div>
        <div id=\"content\">
            ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        </div>
      </div>
    </div>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "            ";
    }

    public function getTemplateName()
    {
        return "blocks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  64 => 15,  57 => 17,  55 => 15,  51 => 13,  49 => 12,  45 => 10,  43 => 9,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*      <div id="all">*/
/*       <div id="top">*/
/*         {% include 'blocks/top.html.twig' %}*/
/*       </div>*/
/*       <div id="other">*/
/*         <div id="leftblock">*/
/*           {% include 'blocks/leftblock.html.twig' %}*/
/*         </div>*/
/*         <div id="rightblock">*/
/*           {% include 'blocks/rightblock.html.twig' %}*/
/*         </div>*/
/*         <div id="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* {% endblock %}*/
