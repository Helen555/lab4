<?php

/* blocks/menu.html.twig */
class __TwigTemplate_97e3e60d795fed30c5cc97ec28fe739ac199a1ece638c5e862e60c40e9d70897 extends Twig_Template
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
        // line 1
        echo "<div id=\"menu\">
    <ul>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
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
        return array (  59 => 20,  46 => 12,  36 => 7,  32 => 6,  28 => 4,  23 => 3,  19 => 1,);
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
