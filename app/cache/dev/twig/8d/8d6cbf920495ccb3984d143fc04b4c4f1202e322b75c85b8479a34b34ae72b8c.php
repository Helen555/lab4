<?php

/* blocks/menu.html.twig */
class __TwigTemplate_0263f8db6f1a78244f8149358db2b760918ccf1a7e25fcdc0458a76a2b81a1c3 extends Twig_Template
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
        $__internal_f51c0334f444ec2aee076fc0dba209b40a8fb9fea13d3ed4d43adfda51d0e071 = $this->env->getExtension("native_profiler");
        $__internal_f51c0334f444ec2aee076fc0dba209b40a8fb9fea13d3ed4d43adfda51d0e071->enter($__internal_f51c0334f444ec2aee076fc0dba209b40a8fb9fea13d3ed4d43adfda51d0e071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks/menu.html.twig"));

        // line 1
        echo "<div id=\"menu\">
    <ul>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "            <li>
                <p>
                    <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_page", array("url" => twig_slice($this->env, $this->getAttribute($context["page"], "url", array()), 1))), "html", null, true);
            echo "\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "
                    </a>
                </p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "            <li>
                <p>
                    <a href=\"/'\">
                        Главная
                    </a>
                </p>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
</div>";
        
        $__internal_f51c0334f444ec2aee076fc0dba209b40a8fb9fea13d3ed4d43adfda51d0e071->leave($__internal_f51c0334f444ec2aee076fc0dba209b40a8fb9fea13d3ed4d43adfda51d0e071_prof);

    }

    public function getTemplateName()
    {
        return "blocks/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  49 => 12,  39 => 7,  35 => 6,  31 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div id="menu">*/
/*     <ul>*/
/*         {% for page in pages %}*/
/*             <li>*/
/*                 <p>*/
/*                     <a href="{{ path('show_page', {url: page.url|slice(1)}) }}">*/
/*                         {{ page.name }}*/
/*                     </a>*/
/*                 </p>*/
/*             </li>*/
/*         {% else %}*/
/*             <li>*/
/*                 <p>*/
/*                     <a href="/'">*/
/*                         Главная*/
/*                     </a>*/
/*                 </p>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
