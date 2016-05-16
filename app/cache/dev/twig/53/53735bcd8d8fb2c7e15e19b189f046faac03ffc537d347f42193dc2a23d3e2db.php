<?php

/* blocks/index.html.twig */
class __TwigTemplate_4d038b40613db7ee063ba04ee9e9c928c6c840c1d60e4aecbeeb6eb9d5bbc8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blocks/layout.html.twig", "blocks/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blocks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d53acc788a64b9240ce38a0c20660baae178268686fb18e05afadad32731bbea = $this->env->getExtension("native_profiler");
        $__internal_d53acc788a64b9240ce38a0c20660baae178268686fb18e05afadad32731bbea->enter($__internal_d53acc788a64b9240ce38a0c20660baae178268686fb18e05afadad32731bbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53acc788a64b9240ce38a0c20660baae178268686fb18e05afadad32731bbea->leave($__internal_d53acc788a64b9240ce38a0c20660baae178268686fb18e05afadad32731bbea_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_593dda7ffd5b9cb14aa42a1b58ba4b7dddb571e68a26806e44721b88f0d857e2 = $this->env->getExtension("native_profiler");
        $__internal_593dda7ffd5b9cb14aa42a1b58ba4b7dddb571e68a26806e44721b88f0d857e2->enter($__internal_593dda7ffd5b9cb14aa42a1b58ba4b7dddb571e68a26806e44721b88f0d857e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_593dda7ffd5b9cb14aa42a1b58ba4b7dddb571e68a26806e44721b88f0d857e2->leave($__internal_593dda7ffd5b9cb14aa42a1b58ba4b7dddb571e68a26806e44721b88f0d857e2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f2754c0d59337c6fa660675bd67ac63dd66c43b8312e676ab386de1ef63341c = $this->env->getExtension("native_profiler");
        $__internal_2f2754c0d59337c6fa660675bd67ac63dd66c43b8312e676ab386de1ef63341c->enter($__internal_2f2754c0d59337c6fa660675bd67ac63dd66c43b8312e676ab386de1ef63341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
";
        
        $__internal_2f2754c0d59337c6fa660675bd67ac63dd66c43b8312e676ab386de1ef63341c->leave($__internal_2f2754c0d59337c6fa660675bd67ac63dd66c43b8312e676ab386de1ef63341c_prof);

    }

    public function getTemplateName()
    {
        return "blocks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  53 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'blocks/layout.html.twig' %}*/
/* {% block title %}*/
/*     {{ page.name }} - {{ parent() }}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     {{ page.content | raw }}*/
/* {% endblock %}*/
