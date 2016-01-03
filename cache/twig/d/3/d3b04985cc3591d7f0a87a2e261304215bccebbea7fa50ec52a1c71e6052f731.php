<?php

/* partials/scripts.html.twig */
class __TwigTemplate_d3b04985cc3591d7f0a87a2e261304215bccebbea7fa50ec52a1c71e6052f731 extends Twig_Template
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
        echo "<script>

\t
\tjQuery(document).ready(function(\$) {
\t\t";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "lazyload", array()), "enable", array())) {
            // line 6
            echo "\t\t\t\$(\"";
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "lazyload", array()), "selector", array());
            echo "\").not(\"";
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "lazyload", array()), "notselector", array());
            echo "\").lazyload({
\t\t\t\teffect : \"fadeIn\"
\t\t\t});
\t\t";
        }
        // line 10
        echo "\t});
</script>";
    }

    public function getTemplateName()
    {
        return "partials/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }
}
