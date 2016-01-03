<?php

/* partials/base.html.twig */
class __TwigTemplate_f02995343b59f958c8d9e4b2b1e579b81f2fad4d4b1e349fcc1635b1031bb6fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'offcanvas' => array($this, 'block_offcanvas'),
            'scripts' => array($this, 'block_scripts'),
            'totop' => array($this, 'block_totop'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"responsive-enabled\">
<head>
";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>
<body class=\"";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"zg-wrap\">
        <div id=\"top\">
          \t<div id=\"topmenu\">
         \t\t <a href=\"http://www.joomlabamboo.com\" class=\"logo-link\"><img class=\"logo float-left\" style=\"width:45px\" src=\"http://www.joomlabamboo.com/white-leaf.png\"></a>
          \t\t<nav id=\"naviTop\">
          \t\t\t<ul>
          \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/joomla-templates\">Templates</a></li>
          \t\t\t\t <li><a href=\"http://docs.joomlabamboo.com\">Documentation</a></li>\t
          \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/recent-topics/view-last-messages\">Forum</a></li>
          \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/index.php?option=com_rsticketspro&amp;view=submit&amp;Itemid=42\">Tickets</a></li>
          \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/downloads/template-downloads\">Downloads</a></li>
          \t\t\t</ul>
          \t\t</nav>
          \t</div>
          \t<div id=\"announcement\"><strong>Announcing:</strong>  <a href=\"";
        // line 62
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/bamboo-blog/a-new-blog-design\">Our new blog design and a hello2016 coupon</a></div>
          </div>
        ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('showcase', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
        ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 101
        echo "     </div>
    
   
    <div class=\"sb-slidebar off-canvas-";
        // line 104
        echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "offcanvas", array()), "position", array());
        echo " sb-width-thin\">
    \t<div class=\"off-canvas-inner\">
    \t\t<div class=\"off-canvas-heading\">
    \t\t\t<span class=\"sb-close\"><span class=\"zen-icon-remove zen-icon fa fa-remove\"></span></span>
    \t\t</div>
    \t\t<div class=\"off-canvas-body\">
    \t\t\t<div id=\"off-canvas-menu\"><ul></ul></div>
    \t\t\t";
        // line 111
        $this->displayBlock('offcanvas', $context, $blocks);
        // line 114
        echo "    \t\t</div>
    \t</div>
    </div>
    
    
    ";
        // line 119
        $this->displayBlock('scripts', $context, $blocks);
        // line 122
        echo "    
    
    ";
        // line 124
        $this->displayBlock('totop', $context, $blocks);
        // line 127
        echo "    
    
    ";
        // line 129
        $this->displayBlock('bottom', $context, $blocks);
        // line 140
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"http://www.joomlabamboo.com/blog/templates/zenbase/favicon.ico\" rel=\"shortcut icon\" type=\"image/vnd.microsoft.icon\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    
    <script type=\"text/javascript\">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-1111124-2']);
          _gaq.push(['_setDomainName', 'joomlabamboo.com']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css", 1 => 103), "method");
        // line 16
        echo "    ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 21
        echo "       \t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://zengrid/js/lib/modernizr.touch.js"), "method");
        // line 22
        echo "       \t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://zengrid/js/lib/lazyload.js"), "method");
        // line 23
        echo "       \t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://zengrid/js/lib/slidebars.js"), "method");
        // line 24
        echo "       \t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://zengrid/js/framework.js"), "method");
        // line 25
        echo "       \t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 26
        echo "        
    ";
    }

    // line 64
    public function block_header($context, array $blocks = array())
    {
        // line 65
        echo "        <div id=\"sidebar\">
    \t
      \t\t";
        // line 67
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 70
        echo "   \t\t\t<div id=\"sidebar-overlay\"></div>
       </div>
        ";
    }

    // line 67
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 68
        echo "   \t\t\t      ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "   \t\t\t";
    }

    // line 74
    public function block_showcase($context, array $blocks = array())
    {
        // line 75
        echo "        <div class=\"zg-container\">
        \t\t<div class=\"zg-row\"></div>
        </div>
        ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        // line 81
        echo "       
        \t
            \t\t";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "        \t
        ";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "        <footer id=\"footer\" class=\"section\">
        \t<div class=\"zg-container\">
        \t\t<div class=\"zg-row\">
        \t\t\t<div class=\"zg-col zg-col-";
        // line 91
        echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "footer", array());
        echo "\">
        \t\t\t\t
        \t\t\t</div>
        \t\t\t<div class=\"zg-col zg-col-";
        // line 94
        echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "layout", array()), "copyright", array());
        echo " zg-copyright\">
        \t\t\t\t <p>&copy; ";
        // line 95
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo " ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "</p>
\t\t\t         </div>
\t\t        </div>
\t\t     </div>
        </footer>
        ";
    }

    // line 111
    public function block_offcanvas($context, array $blocks = array())
    {
        // line 112
        echo "    \t\t\t";
        $this->loadTemplate("partials/offcanvas.html.twig", "partials/base.html.twig", 112)->display($context);
        // line 113
        echo "    \t\t\t";
    }

    // line 119
    public function block_scripts($context, array $blocks = array())
    {
        // line 120
        echo "   \t \t";
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 120)->display($context);
        // line 121
        echo "    ";
    }

    // line 124
    public function block_totop($context, array $blocks = array())
    {
        // line 125
        echo "    \t ";
        $this->loadTemplate("partials/totop.html.twig", "partials/base.html.twig", 125)->display($context);
        // line 126
        echo "    ";
    }

    // line 129
    public function block_bottom($context, array $blocks = array())
    {
        // line 130
        echo "\t\t<script type=\"text/javascript\" src=\"//use.typekit.net/lzu6fkn.js\"></script>
\t\t<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
\t\t<script>
\t\t\t(function(\$) {
    \t\t\t\$(document).ready(function() {
   \t\t\t\t\t\$.slidebars();
   \t    \t  \t});
   \t    \t });
   \t   \t</script>
    ";
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
        return array (  342 => 130,  339 => 129,  335 => 126,  332 => 125,  329 => 124,  325 => 121,  322 => 120,  319 => 119,  315 => 113,  312 => 112,  309 => 111,  297 => 95,  293 => 94,  287 => 91,  282 => 88,  279 => 87,  274 => 83,  269 => 84,  267 => 83,  263 => 81,  260 => 80,  253 => 75,  250 => 74,  246 => 69,  243 => 68,  240 => 67,  234 => 70,  232 => 67,  228 => 65,  225 => 64,  220 => 26,  217 => 25,  214 => 24,  211 => 23,  208 => 22,  205 => 21,  202 => 20,  199 => 19,  195 => 16,  192 => 15,  189 => 14,  166 => 28,  164 => 19,  158 => 17,  156 => 14,  151 => 12,  147 => 10,  145 => 9,  137 => 8,  134 => 7,  131 => 6,  125 => 140,  123 => 129,  119 => 127,  117 => 124,  113 => 122,  111 => 119,  104 => 114,  102 => 111,  92 => 104,  87 => 101,  85 => 87,  82 => 86,  80 => 80,  77 => 79,  75 => 74,  72 => 73,  70 => 64,  65 => 62,  47 => 47,  44 => 46,  42 => 6,  39 => 5,  37 => 4,  32 => 1,);
    }
}
