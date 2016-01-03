<?php

/* partials/totop.html.twig */
class __TwigTemplate_b5e1fe5833a35f953cb91623d760d886065b9acd9496fb834b56fb2d15acced3 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "totop", array()), "enable", array())) {
            // line 2
            echo "<span class=\"zg-scroll-top btn btn-primary zg-scroll-fade zg-fixed min-width-";
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "totop", array()), "minwidth", array());
            echo "\">
\t";
            // line 3
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "totop", array()), "text", array());
            echo "
</span>
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/totop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }
}
