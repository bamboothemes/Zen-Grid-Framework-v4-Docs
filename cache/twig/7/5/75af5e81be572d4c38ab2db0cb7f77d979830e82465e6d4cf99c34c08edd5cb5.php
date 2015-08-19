<?php

/* partials/page.html.twig */
class __TwigTemplate_75af5e81be572d4c38ab2db0cb7f77d979830e82465e6d4cf99c34c08edd5cb5 extends Twig_Template
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
        echo "<div id=\"body-inner\">
<h1>";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
<p>
\t";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
