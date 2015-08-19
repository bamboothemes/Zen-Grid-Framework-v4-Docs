<?php

/* docs.html.twig */
class __TwigTemplate_70a42f6912090d93ab4e8ff245e4f1905e3e49b711223b644f6e518ea6dd4c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "docs.html.twig", 1);
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
        // line 2
        $context["tags"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array());
        // line 3
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 4
            $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "docs", "tag" => (isset($context["tags"]) ? $context["tags"] : null))), "order" => array("by" => "default", "dir" => "asc"))), "method");
        } else {
            // line 6
            $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "docs")), "order" => array("by" => "default", "dir" => "asc"))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navigation($context, array $blocks = array())
    {
        // line 10
        echo "
\t<div id=\"navigation\">
\t";
        // line 12
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 13
            echo "\t    <a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"> <i class=\"fa fa-chevron-left\"></i></a>
\t";
        }
        // line 15
        echo "
\t";
        // line 16
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 17
            echo "\t    <a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"fa fa-chevron-right\"></i></a>
\t";
        }
        // line 19
        echo "\t</div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("partials/page.html.twig", "docs.html.twig", 23)->display($context);
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
        return array (  74 => 23,  71 => 22,  66 => 19,  60 => 17,  58 => 16,  55 => 15,  49 => 13,  47 => 12,  43 => 10,  40 => 9,  36 => 1,  33 => 6,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }
}
