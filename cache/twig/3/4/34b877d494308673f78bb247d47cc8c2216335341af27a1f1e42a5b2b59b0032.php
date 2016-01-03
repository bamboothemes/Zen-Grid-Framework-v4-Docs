<?php

/* docs.html.twig */
class __TwigTemplate_34b877d494308673f78bb247d47cc8c2216335341af27a1f1e42a5b2b59b0032 extends Twig_Template
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
        $this->loadTemplate("docs.html.twig", "docs.html.twig", 1, "831479972")->display($context);
    }

    public function getTemplateName()
    {
        return "docs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* docs.html.twig */
class __TwigTemplate_34b877d494308673f78bb247d47cc8c2216335341af27a1f1e42a5b2b59b0032_831479972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "docs.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "docs.html.twig", 5)->display($context);
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "\t\t
\t\t<div class=\"blog-content-item\">
\t\t\t<div id=\"midcol\" class=\"zg-col zg-col-";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "midcol", array());
        echo "\">
\t\t\t    ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "docs.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 11
        echo "\t\t\t</div>
\t\t\t";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "sidebar", array()) != 0)) {
            // line 13
            echo "\t\t\t<div id=\"sidebar\" class=\"sidebar zg-col zg-col-";
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "sidebar", array());
            echo "\">
\t\t\t\t";
            // line 14
            $this->loadTemplate("partials/sidebar.html.twig", "docs.html.twig", 14)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
            // line 15
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo "\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 17,  92 => 15,  90 => 14,  85 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 9,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  19 => 1,);
    }
}
