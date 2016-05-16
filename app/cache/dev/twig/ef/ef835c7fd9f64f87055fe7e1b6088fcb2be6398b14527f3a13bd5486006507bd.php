<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f6f91a35fccada6371749a236ea21ce2993ac3fc2fc8f976086e59e61a78b314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea60984cfc4bed21020e9bf4ad423d42ed82576fbbc84e8d68f78f6d19cf6f8 = $this->env->getExtension("native_profiler");
        $__internal_2ea60984cfc4bed21020e9bf4ad423d42ed82576fbbc84e8d68f78f6d19cf6f8->enter($__internal_2ea60984cfc4bed21020e9bf4ad423d42ed82576fbbc84e8d68f78f6d19cf6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea60984cfc4bed21020e9bf4ad423d42ed82576fbbc84e8d68f78f6d19cf6f8->leave($__internal_2ea60984cfc4bed21020e9bf4ad423d42ed82576fbbc84e8d68f78f6d19cf6f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_944f7cdcb0e0a9c7ee8bc9b826d706a060cc638a16687d4ad6615464ff28d458 = $this->env->getExtension("native_profiler");
        $__internal_944f7cdcb0e0a9c7ee8bc9b826d706a060cc638a16687d4ad6615464ff28d458->enter($__internal_944f7cdcb0e0a9c7ee8bc9b826d706a060cc638a16687d4ad6615464ff28d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_944f7cdcb0e0a9c7ee8bc9b826d706a060cc638a16687d4ad6615464ff28d458->leave($__internal_944f7cdcb0e0a9c7ee8bc9b826d706a060cc638a16687d4ad6615464ff28d458_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2e8996f21eeafe9ff6316d089ffa11baf022be762d6d60f835c938c1d7bfa37 = $this->env->getExtension("native_profiler");
        $__internal_d2e8996f21eeafe9ff6316d089ffa11baf022be762d6d60f835c938c1d7bfa37->enter($__internal_d2e8996f21eeafe9ff6316d089ffa11baf022be762d6d60f835c938c1d7bfa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2e8996f21eeafe9ff6316d089ffa11baf022be762d6d60f835c938c1d7bfa37->leave($__internal_d2e8996f21eeafe9ff6316d089ffa11baf022be762d6d60f835c938c1d7bfa37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77f289793535af943d4236d6be375a057e62fc1e92ffa8fdafa3993a7c50ffd8 = $this->env->getExtension("native_profiler");
        $__internal_77f289793535af943d4236d6be375a057e62fc1e92ffa8fdafa3993a7c50ffd8->enter($__internal_77f289793535af943d4236d6be375a057e62fc1e92ffa8fdafa3993a7c50ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77f289793535af943d4236d6be375a057e62fc1e92ffa8fdafa3993a7c50ffd8->leave($__internal_77f289793535af943d4236d6be375a057e62fc1e92ffa8fdafa3993a7c50ffd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
