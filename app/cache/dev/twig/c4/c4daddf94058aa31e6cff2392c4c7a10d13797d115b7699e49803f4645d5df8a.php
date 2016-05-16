<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8197373a7699e8844c4e7a8cae2af43553df73fa0ba91b9855e1f7802b8ba135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4710938e8542b6d466a61f0ffb9c77d9bf8c67457302a1844a08616041c03a90 = $this->env->getExtension("native_profiler");
        $__internal_4710938e8542b6d466a61f0ffb9c77d9bf8c67457302a1844a08616041c03a90->enter($__internal_4710938e8542b6d466a61f0ffb9c77d9bf8c67457302a1844a08616041c03a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4710938e8542b6d466a61f0ffb9c77d9bf8c67457302a1844a08616041c03a90->leave($__internal_4710938e8542b6d466a61f0ffb9c77d9bf8c67457302a1844a08616041c03a90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_941c9ecd7291799f884dc5bed0c819fa3e7200523c2a711c9bf37fc2be575b76 = $this->env->getExtension("native_profiler");
        $__internal_941c9ecd7291799f884dc5bed0c819fa3e7200523c2a711c9bf37fc2be575b76->enter($__internal_941c9ecd7291799f884dc5bed0c819fa3e7200523c2a711c9bf37fc2be575b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_941c9ecd7291799f884dc5bed0c819fa3e7200523c2a711c9bf37fc2be575b76->leave($__internal_941c9ecd7291799f884dc5bed0c819fa3e7200523c2a711c9bf37fc2be575b76_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2110dc86807d3f2287998c3cad55ea08de480793a93212502fc6da3439c4aab = $this->env->getExtension("native_profiler");
        $__internal_a2110dc86807d3f2287998c3cad55ea08de480793a93212502fc6da3439c4aab->enter($__internal_a2110dc86807d3f2287998c3cad55ea08de480793a93212502fc6da3439c4aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2110dc86807d3f2287998c3cad55ea08de480793a93212502fc6da3439c4aab->leave($__internal_a2110dc86807d3f2287998c3cad55ea08de480793a93212502fc6da3439c4aab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_536e1cd675b41047e19925e46c17374b7128890e040a89066f071e46d278bf06 = $this->env->getExtension("native_profiler");
        $__internal_536e1cd675b41047e19925e46c17374b7128890e040a89066f071e46d278bf06->enter($__internal_536e1cd675b41047e19925e46c17374b7128890e040a89066f071e46d278bf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_536e1cd675b41047e19925e46c17374b7128890e040a89066f071e46d278bf06->leave($__internal_536e1cd675b41047e19925e46c17374b7128890e040a89066f071e46d278bf06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
