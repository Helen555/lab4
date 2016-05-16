<?php

/* blocks/admin.html.twig */
class __TwigTemplate_80e9ac84dfe90ca10819180cfe06224c25806f933860624e0a98b80dc3f552c0 extends Twig_Template
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
        $__internal_e0284a81962144c48b1264099cb4a34f4d550b747c80bb163a58be5011e39c80 = $this->env->getExtension("native_profiler");
        $__internal_e0284a81962144c48b1264099cb4a34f4d550b747c80bb163a58be5011e39c80->enter($__internal_e0284a81962144c48b1264099cb4a34f4d550b747c80bb163a58be5011e39c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/admin.html.twig"));

        // line 1
        echo "<div id=\"admin\"> 
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("admin_login");
        echo "\">Личный кабинет</a>
    ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 4
            echo "        </br>Здравствуйте, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</br>
        <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("admin_logout");
            echo "\">Выход</a>
    ";
        }
        // line 7
        echo "</div>";
        
        $__internal_e0284a81962144c48b1264099cb4a34f4d550b747c80bb163a58be5011e39c80->leave($__internal_e0284a81962144c48b1264099cb4a34f4d550b747c80bb163a58be5011e39c80_prof);

    }

    public function getTemplateName()
    {
        return "blocks/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 5,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div id="admin"> */
/*     <a href="{{ path('admin_login')}}">Личный кабинет</a>*/
/*     {% if app.user %}*/
/*         </br>Здравствуйте, {{ app.user.username }}</br>*/
/*         <a href="{{ path('admin_logout')}}">Выход</a>*/
/*     {% endif %}*/
/* </div>*/
