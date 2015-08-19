<?php

/* error.html.twig */
class __TwigTemplate_ecf3069d5eb71b764db9f71eb70b28594eab3e07af48cb64d5fba638a25ff017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
    \t\t<h1>Error ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "code", array());
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</p>
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 8,  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
    }
}
