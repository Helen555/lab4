<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_124051e9e060c99de4be09263aa6fbe6db3191ab719b25e0bd7d09bbae98156b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47125cedebaa7e2ebcd0d249999f89223bce43585f93632eac4fe49146634e4e = $this->env->getExtension("native_profiler");
        $__internal_47125cedebaa7e2ebcd0d249999f89223bce43585f93632eac4fe49146634e4e->enter($__internal_47125cedebaa7e2ebcd0d249999f89223bce43585f93632eac4fe49146634e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_47125cedebaa7e2ebcd0d249999f89223bce43585f93632eac4fe49146634e4e->leave($__internal_47125cedebaa7e2ebcd0d249999f89223bce43585f93632eac4fe49146634e4e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_583039448dfd6e863612f1d5d42c6d1972ffd09d11ffbf3fe38e10c7ca627c1b = $this->env->getExtension("native_profiler");
        $__internal_583039448dfd6e863612f1d5d42c6d1972ffd09d11ffbf3fe38e10c7ca627c1b->enter($__internal_583039448dfd6e863612f1d5d42c6d1972ffd09d11ffbf3fe38e10c7ca627c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        <a class=\"dropdown-toggle\" href=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_583039448dfd6e863612f1d5d42c6d1972ffd09d11ffbf3fe38e10c7ca627c1b->leave($__internal_583039448dfd6e863612f1d5d42c6d1972ffd09d11ffbf3fe38e10c7ca627c1b_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  54 => 8,  48 => 6,  46 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block user_block %}*/
/*     {% if app.user %}*/
/*         <a class="dropdown-toggle" href="{{ url('sonata_user_admin_security_logout') }}">{{ app.user }}*/
/* */
/*         {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}*/
/*             <a href="{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) }}">(exit)</a>*/
/*         {% endif %}*/
/* */
/*         - {{ 'user_block_logout'|trans({}, 'SonataUserBundle') }}</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
