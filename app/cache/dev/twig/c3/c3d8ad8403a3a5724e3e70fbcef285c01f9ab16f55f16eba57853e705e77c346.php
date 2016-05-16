<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_9ee7c2c2de8862b655cb4b530dd73d56aba63807812252817ab23f581254009f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 36);
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b3c7cd19c15d3b37e2a4bb01695bc568be20dad3477cbf4616b5fa0be043eac = $this->env->getExtension("native_profiler");
        $__internal_6b3c7cd19c15d3b37e2a4bb01695bc568be20dad3477cbf4616b5fa0be043eac->enter($__internal_6b3c7cd19c15d3b37e2a4bb01695bc568be20dad3477cbf4616b5fa0be043eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3c7cd19c15d3b37e2a4bb01695bc568be20dad3477cbf4616b5fa0be043eac->leave($__internal_6b3c7cd19c15d3b37e2a4bb01695bc568be20dad3477cbf4616b5fa0be043eac_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6214a951440ca11c4f91993bec0f9ca6a2f7c26c18236a6584028d2460a02c91 = $this->env->getExtension("native_profiler");
        $__internal_6214a951440ca11c4f91993bec0f9ca6a2f7c26c18236a6584028d2460a02c91->enter($__internal_6214a951440ca11c4f91993bec0f9ca6a2f7c26c18236a6584028d2460a02c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_6214a951440ca11c4f91993bec0f9ca6a2f7c26c18236a6584028d2460a02c91->leave($__internal_6214a951440ca11c4f91993bec0f9ca6a2f7c26c18236a6584028d2460a02c91_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_db2160576580ad3ba29d2d5219f5eab4fceb7b3b05510dc562234d9ce7220b97 = $this->env->getExtension("native_profiler");
        $__internal_db2160576580ad3ba29d2d5219f5eab4fceb7b3b05510dc562234d9ce7220b97->enter($__internal_db2160576580ad3ba29d2d5219f5eab4fceb7b3b05510dc562234d9ce7220b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db2160576580ad3ba29d2d5219f5eab4fceb7b3b05510dc562234d9ce7220b97->leave($__internal_db2160576580ad3ba29d2d5219f5eab4fceb7b3b05510dc562234d9ce7220b97_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_532dcf3abfecc3812804d927bd623a83b0f06faa7044808aa376fdfff3f56083 = $this->env->getExtension("native_profiler");
        $__internal_532dcf3abfecc3812804d927bd623a83b0f06faa7044808aa376fdfff3f56083->enter($__internal_532dcf3abfecc3812804d927bd623a83b0f06faa7044808aa376fdfff3f56083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_532dcf3abfecc3812804d927bd623a83b0f06faa7044808aa376fdfff3f56083->leave($__internal_532dcf3abfecc3812804d927bd623a83b0f06faa7044808aa376fdfff3f56083_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_f7942dff3589ce556ad73d34555538d1ba66ca115971f3fab95468fef744a6c8 = $this->env->getExtension("native_profiler");
        $__internal_f7942dff3589ce556ad73d34555538d1ba66ca115971f3fab95468fef744a6c8->enter($__internal_f7942dff3589ce556ad73d34555538d1ba66ca115971f3fab95468fef744a6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f7942dff3589ce556ad73d34555538d1ba66ca115971f3fab95468fef744a6c8->leave($__internal_f7942dff3589ce556ad73d34555538d1ba66ca115971f3fab95468fef744a6c8_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_3461d936f1d00d80e02cd918ed8e2a24d049257a4ceb29b7949ffa6f6314b343 = $this->env->getExtension("native_profiler");
        $__internal_3461d936f1d00d80e02cd918ed8e2a24d049257a4ceb29b7949ffa6f6314b343->enter($__internal_3461d936f1d00d80e02cd918ed8e2a24d049257a4ceb29b7949ffa6f6314b343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_3461d936f1d00d80e02cd918ed8e2a24d049257a4ceb29b7949ffa6f6314b343->leave($__internal_3461d936f1d00d80e02cd918ed8e2a24d049257a4ceb29b7949ffa6f6314b343_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  132 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 37,  40 => 12,  12 => 36,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock%}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:show_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:acl_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
