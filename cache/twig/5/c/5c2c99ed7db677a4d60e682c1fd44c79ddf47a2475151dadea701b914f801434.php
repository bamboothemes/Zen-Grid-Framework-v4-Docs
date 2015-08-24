<?php

/* partials/base.html.twig */
class __TwigTemplate_5c2c99ed7db677a4d60e682c1fd44c79ddf47a2475151dadea701b914f801434 extends Twig_Template
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
        echo "    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-1111124-2', 'auto');
      ga('send', 'pageview');
    
    </script>
</head>
<body class=\"";
        // line 50
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
        \t\t\t\t<li style=\"float: right;\" ><a href=\"https://github.com/locii/Zen-Grid-Framework-v4-Docs\"><span style=\"margin-right: 10px;\" class=\"fa fa-github\"></span>Download Documentation</a></li>
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
        // line 76
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search.json/query\" />
          \t\t    <span data-search-clear><i class=\"fa fa-close\"></i></span>
          \t\t</div>
          \t</div>
       
       </div>
    </div>
    ";
        // line 83
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 84
            echo "    ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 84)->display($context);
            // line 85
            echo "    ";
        }
        // line 86
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 118
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

    // line 86
    public function block_sidebar($context, array $blocks = array())
    {
        // line 87
        echo "   
    <nav id=\"sidebar\">
        
        <div class=\"padding highlightable\">
        ";
        // line 91
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 91)->display($context);
        // line 92
        echo "        </div>
    </nav>
    ";
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            

            ";
        // line 105
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "
            ";
        // line 107
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "
        </div>
        ";
        // line 114
        $this->displayBlock('navigation', $context, $blocks);
        // line 115
        echo "    </section>
    ";
    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
    }

    // line 107
    public function block_footer($context, array $blocks = array())
    {
        // line 108
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array()) == "bottom")) {
            // line 109
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 109)->display($context);
            // line 110
            echo "                ";
        }
        // line 111
        echo "            ";
    }

    // line 114
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 117
    public function block_analytics($context, array $blocks = array())
    {
        $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 117)->display($context);
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
        return array (  300 => 117,  295 => 114,  291 => 111,  288 => 110,  285 => 109,  282 => 108,  279 => 107,  274 => 105,  269 => 115,  267 => 114,  263 => 112,  261 => 107,  258 => 106,  256 => 105,  246 => 97,  243 => 96,  237 => 92,  235 => 91,  229 => 87,  226 => 86,  219 => 35,  216 => 34,  213 => 33,  210 => 32,  207 => 31,  204 => 30,  198 => 27,  195 => 26,  192 => 25,  189 => 24,  186 => 23,  183 => 22,  181 => 21,  178 => 20,  175 => 19,  172 => 18,  169 => 17,  166 => 16,  163 => 15,  160 => 14,  155 => 37,  153 => 30,  150 => 29,  148 => 14,  143 => 12,  139 => 11,  135 => 10,  132 => 9,  130 => 8,  122 => 7,  119 => 6,  116 => 5,  110 => 118,  107 => 117,  105 => 96,  102 => 95,  99 => 86,  96 => 85,  93 => 84,  91 => 83,  81 => 76,  50 => 50,  37 => 39,  35 => 5,  30 => 2,  28 => 1,);
    }
}
