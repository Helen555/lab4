<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_228d59cd3b6a87c5917f77126c1e0f4b62a7d92e24ded6b2fc35979444e80f6f extends Twig_Template
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
        $__internal_1a430a057762e44dd4af23c353351738a2d55b08852cad9f7e819aae84648041 = $this->env->getExtension("native_profiler");
        $__internal_1a430a057762e44dd4af23c353351738a2d55b08852cad9f7e819aae84648041->enter($__internal_1a430a057762e44dd4af23c353351738a2d55b08852cad9f7e819aae84648041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_1a430a057762e44dd4af23c353351738a2d55b08852cad9f7e819aae84648041->leave($__internal_1a430a057762e44dd4af23c353351738a2d55b08852cad9f7e819aae84648041_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% if admin.hasroute('list') and admin.isGranted('LIST')%}*/
/*     <a class="sonata-action-element" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-list"></i>*/
/*         {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
