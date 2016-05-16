<?php

/* blocks/layout.html.twig */
class __TwigTemplate_98dabf4fa4a7d8abe8c900b4b850e7bd0b7a39925ca4061701c739869764653a extends Twig_Template
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
        $__internal_d29e73594234c9f50a449680ca24169e0b64658b96cfb6a31ecfd39129a63523 = $this->env->getExtension("native_profiler");
        $__internal_d29e73594234c9f50a449680ca24169e0b64658b96cfb6a31ecfd39129a63523->enter($__internal_d29e73594234c9f50a449680ca24169e0b64658b96cfb6a31ecfd39129a63523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29e73594234c9f50a449680ca24169e0b64658b96cfb6a31ecfd39129a63523->leave($__internal_d29e73594234c9f50a449680ca24169e0b64658b96cfb6a31ecfd39129a63523_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c36d3bdc69b3e49142f06a23ff8143530448fb7eb1034b7b2d18374deeb8ab = $this->env->getExtension("native_profiler");
        $__internal_90c36d3bdc69b3e49142f06a23ff8143530448fb7eb1034b7b2d18374deeb8ab->enter($__internal_90c36d3bdc69b3e49142f06a23ff8143530448fb7eb1034b7b2d18374deeb8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90c36d3bdc69b3e49142f06a23ff8143530448fb7eb1034b7b2d18374deeb8ab->leave($__internal_90c36d3bdc69b3e49142f06a23ff8143530448fb7eb1034b7b2d18374deeb8ab_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_1eabe15346735dc7e34cf50de3ba2253fd55cb701656e699f9f0408990f9f93e = $this->env->getExtension("native_profiler");
        $__internal_1eabe15346735dc7e34cf50de3ba2253fd55cb701656e699f9f0408990f9f93e->enter($__internal_1eabe15346735dc7e34cf50de3ba2253fd55cb701656e699f9f0408990f9f93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "            ";
        
        $__internal_1eabe15346735dc7e34cf50de3ba2253fd55cb701656e699f9f0408990f9f93e->leave($__internal_1eabe15346735dc7e34cf50de3ba2253fd55cb701656e699f9f0408990f9f93e_prof);

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
        return array (  82 => 16,  76 => 15,  66 => 17,  64 => 15,  60 => 13,  58 => 12,  54 => 10,  52 => 9,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
