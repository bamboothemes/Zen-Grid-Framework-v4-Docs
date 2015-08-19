<?php

/* partials/base.html.twig */
class __TwigTemplate_296210126e27a47464e257a6ccbc4362458788c367f1d6a212609de52eedeb49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "</head>
<body class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "\">
    <header id=\"header\" class=\"clearfix\">
    \t
    \t\t<div class=\"col\">
    \t\t\t<a href=\"http://www.joomlabamboo.com\"><img class=\"logo float-left\" style=\"width:45px\" src=\"http://docs.joomlabamboo.com/images/jblogo.png\"></a>
    \t\t\t<nav id=\"naviTop\">
    \t\t\t\t<ul>
    \t\t\t\t\t<li><a href=\"http://www.joomlabamboo.com/joomla-templates\">Templates</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/recent-topics/view-last-messages\">Forum</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/index.php?option=com_rsticketspro&amp;view=submit&amp;Itemid=42\">Tickets</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/downloads/template-downloads\">Downloads</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/blog\">Blog</a></li>\t
        \t\t\t</ul>
    \t\t\t</nav>
    \t\t</div>
    \t
    </header>
    <div id=\"title\">       
    \t
       \t  <div class=\"row\">
          \t<div class=\"col title\">
          \t\t<h2 class=\"bold\"><a href=\"http://docs.joomlabamboo.com/\">Zen Grid Framework v4 Documentation</a></h2>
          \t\t
          \t\t<div class=\"searchbox\">
          \t\t    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
          \t\t    <input id=\"search-by\" type=\"text\" placeholder=\"Search Documentation\" data-search-input=\"";
        // line 65
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search.json/query\" />
          \t\t    <span data-search-clear><i class=\"fa fa-close\"></i></span>
          \t\t</div>
          \t</div>
       
       </div>
    </div>
    ";
        // line 72
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 73
            echo "    ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 73)->display($context);
            // line 74
            echo "    ";
        }
        // line 75
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 84
        echo "
    ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 107
        echo " </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 10
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 11
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/theme.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 20
        echo "
        ";
        // line 21
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 22
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 24
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 35
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 75
    public function block_sidebar($context, array $blocks = array())
    {
        // line 76
        echo "   
    <nav id=\"sidebar\">
        
        <div class=\"padding highlightable\">
        ";
        // line 80
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 80)->display($context);
        // line 81
        echo "        </div>
    </nav>
    ";
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        // line 86
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            

            ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "
            ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 101
        echo "
        </div>
        ";
        // line 103
        $this->displayBlock('navigation', $context, $blocks);
        // line 104
        echo "    </section>
    ";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array()) == "bottom")) {
            // line 98
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 98)->display($context);
            // line 99
            echo "                ";
        }
        // line 100
        echo "            ";
    }

    // line 103
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 106
    public function block_analytics($context, array $blocks = array())
    {
        $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 106)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 106,  284 => 103,  280 => 100,  277 => 99,  274 => 98,  271 => 97,  268 => 96,  263 => 94,  258 => 104,  256 => 103,  252 => 101,  250 => 96,  247 => 95,  245 => 94,  235 => 86,  232 => 85,  226 => 81,  224 => 80,  218 => 76,  215 => 75,  208 => 35,  205 => 34,  202 => 33,  199 => 32,  196 => 31,  193 => 30,  187 => 27,  184 => 26,  181 => 25,  178 => 24,  175 => 23,  172 => 22,  170 => 21,  167 => 20,  164 => 19,  161 => 18,  158 => 17,  155 => 16,  152 => 15,  149 => 14,  144 => 37,  142 => 30,  139 => 29,  137 => 14,  132 => 12,  128 => 11,  124 => 10,  121 => 9,  119 => 8,  111 => 7,  108 => 6,  105 => 5,  99 => 107,  96 => 106,  94 => 85,  91 => 84,  88 => 75,  85 => 74,  82 => 73,  80 => 72,  70 => 65,  40 => 40,  37 => 39,  35 => 5,  30 => 2,  28 => 1,);
    }
}
