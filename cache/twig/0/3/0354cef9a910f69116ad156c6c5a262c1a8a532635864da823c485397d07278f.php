<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_0354cef9a910f69116ad156c6c5a262c1a8a532635864da823c485397d07278f extends Twig_Template
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
        echo "<div class=\"blog-item\">

    ";
        // line 3
        $context["header_image"] = defined($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = defined($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = defined($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"blog-item-header\">
    \t    \t
    \t    \t
    \t    \t";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 12
            echo "    \t    \t    <h2 class=\"article-title\">
    \t    \t        ";
            // line 13
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 14
                echo "    \t    \t        <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
    \t    \t        ";
            }
            // line 16
            echo "    \t    \t        <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
    \t    \t    </h2>
    \t    \t";
        } else {
            // line 19
            echo "    \t    \t    <h2 class=\"article-title\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
    \t    \t";
        }
        // line 21
        echo "    \t    \t
    \t    \t
    \t    \t <div class=\"article-info\">
    \t    \t
    \t    \t\t<p class=\"article-date\">
    \t    \t\t    <span class=\"date-day\">";
        // line 26
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
    \t    \t\t    <span class=\"date-month\">";
        // line 27
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</span>
    \t    \t\t    <span class=\"date-year\">";
        // line 28
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y");
        echo "</span>
    \t    \t\t<span class=\"separator\">-</span>
    \t    \t\t\t<span class=\"posted-by\">Written by <a href=\"";
        // line 30
        echo twig_lower_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array()), array(" " => "-")));
        echo "\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array());
        echo "</a></span>
    \t    \t\t</p>
    \t    \t\t\t
    \t    \t\t\t
    \t    \t\t\t<p class=\"posted-in\">Posted in <a href=\"";
        // line 34
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "catslug", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "category", array());
        echo "</a></p>
    \t    \t\t\t  \t    \t    \t
    \t    \t    </div>
    \t    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 42
            echo "    \t
        ";
            // line 43
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 44
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 45
                echo "        ";
                $context["show_prev_next"] = true;
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 48
            echo "    ";
            if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
                // line 49
                echo "         <div class=\"item-image zg-above\">
         \t<a href=\"";
                // line 50
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "html", array(0 => "", 1 => "page.title", 2 => ""), "method");
                echo "</a>
         </div>
       ";
            }
            // line 53
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
        <p><a class=\"readon\" href=\"";
            // line 54
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading</a></p>
    ";
        } elseif (        // line 55
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 56
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 57
                echo "            ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
                echo "
        ";
            } else {
                // line 59
                echo "            ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
        ";
            }
            // line 61
            echo "        <p><a  class=\"readon\" href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading</a></p>
    ";
        } else {
            // line 63
            echo "    
    \t";
            // line 64
            if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
                // line 65
                echo "    \t     <div class=\"item-image zg-above\">
    \t     \t<a href=\"";
                // line 66
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "html", array(0 => "", 1 => "page.title", 2 => ""), "method");
                echo "</a>
    \t     </div>
    \t   ";
            }
            // line 69
            echo "    \t   
        ";
            // line 70
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        <!-- Disqus -->
        \t  \t<div id=\"disqus_thread\"></div>
        \t  \t<script type=\"text/javascript\">
        \t  \t    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        \t  \t    var disqus_shortname = 'joomlabamboo'; // required: replace example with your forum shortname
        \t  \t
        \t  \t    // The following are highly recommended additional parameters. Remove the slashes in front to use.
        \t  \t    // var disqus_identifier = 'unique_dynamic_id_1234';
        \t  \t    // var disqus_url = 'http://example.com/permalink-to-page.html';
        \t  \t
        \t  \t    /* * * DON'T EDIT BELOW THIS LINE * * */
        \t  \t    (function() {
        \t  \t        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        \t  \t        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        \t  \t        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        \t  \t    })();
        \t  \t</script>
        \t  \t<noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
        \t  \t<a href=\"http://disqus.com\" class=\"dsq-brlink\">blog comments powered by <span class=\"logo-disqus\">Disqus</span></a>
        ";
            // line 90
            $context["show_prev_next"] = true;
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 94
            echo "
        <div class=\"pager\">
        \t<ul>
        \t";
            // line 97
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 98
                echo "        \t    <li>
        \t    \t<a class=\"button btn btn-primary\" href=\"";
                // line 99
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Older Posts <i class=\"fa fa-chevron-right\"></i></a>
        \t    </li>
        \t";
            }
            // line 102
            echo "        \t
            ";
            // line 103
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 104
                echo "                <li>
                \t<a class=\"button btn btn-primary\" href=\"";
                // line 105
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Newer Posts</a>
                </li>
            ";
            }
            // line 108
            echo "
            
        \t</ul>
        </div>
    ";
        }
        // line 113
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 113,  261 => 108,  255 => 105,  252 => 104,  250 => 103,  247 => 102,  241 => 99,  238 => 98,  236 => 97,  231 => 94,  229 => 93,  226 => 92,  223 => 91,  221 => 90,  198 => 70,  195 => 69,  187 => 66,  184 => 65,  182 => 64,  179 => 63,  173 => 61,  167 => 59,  161 => 57,  158 => 56,  156 => 55,  152 => 54,  147 => 53,  139 => 50,  136 => 49,  133 => 48,  130 => 47,  127 => 46,  124 => 45,  122 => 44,  118 => 43,  115 => 42,  113 => 41,  99 => 34,  90 => 30,  85 => 28,  81 => 27,  77 => 26,  70 => 21,  62 => 19,  53 => 16,  47 => 14,  45 => 13,  42 => 12,  40 => 11,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
