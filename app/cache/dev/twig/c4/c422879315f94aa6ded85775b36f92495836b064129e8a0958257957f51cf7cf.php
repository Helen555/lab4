<?php

/* SonataUserBundle:Profile:show.html.twig */
class __TwigTemplate_f8a2eae6e1b9b9a026a494b6b01402e2f7b022a363742cc3099549671df69ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:show.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_440a6baaf58a6cbdefe60d74fd2741056d16e62d381e5dc8e7a3099b5d78450e = $this->env->getExtension("native_profiler");
        $__internal_440a6baaf58a6cbdefe60d74fd2741056d16e62d381e5dc8e7a3099b5d78450e->enter($__internal_440a6baaf58a6cbdefe60d74fd2741056d16e62d381e5dc8e7a3099b5d78450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440a6baaf58a6cbdefe60d74fd2741056d16e62d381e5dc8e7a3099b5d78450e->leave($__internal_440a6baaf58a6cbdefe60d74fd2741056d16e62d381e5dc8e7a3099b5d78450e_prof);

    }

    // line 14
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_de351e7d1c722d78e9f3dd20b106ce1f36529628fbe4c283cb309dcb6e77b6d4 = $this->env->getExtension("native_profiler");
        $__internal_de351e7d1c722d78e9f3dd20b106ce1f36529628fbe4c283cb309dcb6e77b6d4->enter($__internal_de351e7d1c722d78e9f3dd20b106ce1f36529628fbe4c283cb309dcb6e77b6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 15
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile template. Feel free to override it.</strong>
    <div>sonata_core_template_box_file_found_in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 16
        echo "
    <div class=\"row row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 34
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
        
        $__internal_de351e7d1c722d78e9f3dd20b106ce1f36529628fbe4c283cb309dcb6e77b6d4->leave($__internal_de351e7d1c722d78e9f3dd20b106ce1f36529628fbe4c283cb309dcb6e77b6d4_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  157 => 48,  151 => 46,  148 => 45,  144 => 44,  136 => 43,  133 => 42,  129 => 40,  123 => 39,  117 => 37,  114 => 36,  110 => 35,  107 => 34,  105 => 33,  101 => 31,  95 => 30,  89 => 28,  86 => 27,  82 => 26,  74 => 25,  71 => 24,  65 => 23,  62 => 22,  59 => 21,  56 => 20,  51 => 19,  49 => 18,  45 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {% sonata_template_box 'This is the user profile template. Feel free to override it.' %}*/
/* */
/*     <div class="row row-fluid">*/
/*         {% set has_center = false %}*/
/*         {% for block in blocks %}*/
/*             {% if block.position == 'center' %}*/
/*                 {% set has_center = true %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <div class="{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}">*/
/*             {% for block in blocks %}*/
/*                 {% if block.position == 'left' %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         {% if has_center %}*/
/*             <div class="span4 col-lg-4">*/
/*                 {% for block in blocks %}*/
/*                     {% if block.position == 'center' %}*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}">*/
/*             {% for block in blocks %}*/
/*                 {% if block.position == 'right' %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
