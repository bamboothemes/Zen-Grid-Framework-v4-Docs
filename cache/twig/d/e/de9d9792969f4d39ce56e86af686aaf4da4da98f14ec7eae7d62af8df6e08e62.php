<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_de9d9792969f4d39ce56e86af686aaf4da4da98f14ec7eae7d62af8df6e08e62 extends Twig_Template
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
        echo " <h3>Contents</h3>
 ";
        // line 24
        echo "
";
        // line 37
        echo "
";
        // line 38
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "top_level_version", array())) {
            // line 39
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 40
                echo "        ";
                echo $this->getAttribute($this, "version", array(0 => $context["ver"]), "method");
                echo "
        <ul id=\"";
                // line 41
                echo $context["slug"];
                echo "\" class=\"topics\">
        ";
                // line 42
                echo $this->getAttribute($this, "loop", array(0 => $context["ver"], 1 => ""), "method");
                echo "
        </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 46
            echo "    <ul class=\"topics\">
    ";
            // line 47
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => ""), "method");
            echo "
    </ul>
";
        }
        // line 50
        echo "

<hr />

<a class=\"padding\" href=\"#\" data-clear-history-toggle><i class=\"fa fa-fw fa-history\"></i> Clear History</a><br />

<section id=\"footer\">
    <p>Built with <a href=\"http://getgrav.org\">Grav</a> - The Modern Flat File CMS</p>
</section>
";
    }

    // line 2
    public function getloop($__page__ = null, $__parent_loop__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "parent_loop" => $__parent_loop__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["parent_loop"]) ? $context["parent_loop"] : null)) > 0)) {
                // line 4
                echo "        ";
                $context["data_level"] = (isset($context["parent_loop"]) ? $context["parent_loop"] : null);
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["data_level"] = 0;
                // line 7
                echo "    ";
            }
            // line 8
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                echo "        ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", array())) ? (" parent") : (""));
                // line 10
                echo "        ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", array())) ? (" active") : (""));
                // line 11
                echo "        <li class=\"dd-item";
                echo (isset($context["parent_page"]) ? $context["parent_page"] : null);
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <a href=\"";
                // line 12
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>";
                // line 14
                if (((isset($context["data_level"]) ? $context["data_level"] : null) == 0)) {
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo ". ";
                }
                echo "</b>";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</span>
            </a>
            ";
                // line 16
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                    // line 17
                    echo "            <ul>
                ";
                    // line 18
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["parent_loop"]) ? $context["parent_loop"] : null) + $this->getAttribute($context["loop"], "index", array()))), "method");
                    echo "
            </ul>
            ";
                }
                // line 21
                echo "        </li>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getversion($__p__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            $context["parent_page"] = (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "activeChild", array())) ? (" parent") : (""));
            // line 27
            echo "    ";
            $context["current_page"] = (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "active", array())) ? (" active") : (""));
            // line 28
            echo "    <h5 class=\"";
            echo (isset($context["parent_page"]) ? $context["parent_page"] : null);
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
        ";
            // line 29
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "activeChild", array()) || $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "active", array()))) {
                // line 30
                echo "        <i class=\"fa fa-chevron-down fa-fw\"></i>
        ";
            } else {
                // line 32
                echo "        <i class=\"fa fa-plus fa-fw\"></i>
        ";
            }
            // line 34
            echo "        <a href=\"";
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "menu", array());
            echo "</a>
    </h5>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 34,  216 => 32,  212 => 30,  210 => 29,  204 => 28,  201 => 27,  198 => 26,  186 => 25,  162 => 21,  156 => 18,  153 => 17,  151 => 16,  141 => 14,  136 => 12,  128 => 11,  125 => 10,  122 => 9,  104 => 8,  101 => 7,  98 => 6,  95 => 5,  92 => 4,  89 => 3,  76 => 2,  63 => 50,  57 => 47,  54 => 46,  44 => 42,  40 => 41,  35 => 40,  30 => 39,  28 => 38,  25 => 37,  22 => 24,  19 => 1,);
    }
}
