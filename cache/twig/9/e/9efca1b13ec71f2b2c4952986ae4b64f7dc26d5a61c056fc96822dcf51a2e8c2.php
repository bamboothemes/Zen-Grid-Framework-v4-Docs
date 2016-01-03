<?php

/* chapter.html.twig */
class __TwigTemplate_9efca1b13ec71f2b2c4952986ae4b64f7dc26d5a61c056fc96822dcf51a2e8c2 extends Twig_Template
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
        $this->loadTemplate("chapter.html.twig", "chapter.html.twig", 1, "847751166")->display($context);
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 39,  19 => 1,);
    }
}


/* chapter.html.twig */
class __TwigTemplate_9efca1b13ec71f2b2c4952986ae4b64f7dc26d5a61c056fc96822dcf51a2e8c2_847751166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "chapter.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 7
        echo "
\t\t";
        // line 8
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 9
            echo "\t\t<div class=\"item-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 11
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 13
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 17
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "chapter.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t<div class=\"zg-row\">
\t\t\t<div id=\"midcol\" class=\"zg-col zg-col-";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "midcol", array());
        echo "\">
\t\t\t
\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "\t\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "chapter.html.twig", 23)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 24
            echo "\t\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t
\t                ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 27
            echo "\t                    ";
            $this->loadTemplate("partials/pagination.html.twig", "chapter.html.twig", 27)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 28
            echo "\t                ";
        }
        // line 29
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "sidebar", array()) != 0)) {
            // line 31
            echo "\t\t\t\t<div id=\"sidebar\" class=\"sidebar zg-col zg-col-";
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "sidebar", array());
            echo "\">
\t\t\t\t\t";
            // line 32
            $this->loadTemplate("partials/sidebar.html.twig", "chapter.html.twig", 32)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
            // line 33
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo "\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 35,  172 => 33,  170 => 32,  165 => 31,  163 => 30,  160 => 29,  157 => 28,  154 => 27,  152 => 26,  149 => 25,  135 => 24,  132 => 23,  115 => 22,  110 => 20,  107 => 19,  104 => 18,  101 => 17,  99 => 16,  92 => 13,  88 => 11,  82 => 9,  80 => 8,  77 => 7,  74 => 6,  71 => 5,  67 => 1,  65 => 3,  51 => 1,  21 => 39,  19 => 1,);
    }
}
