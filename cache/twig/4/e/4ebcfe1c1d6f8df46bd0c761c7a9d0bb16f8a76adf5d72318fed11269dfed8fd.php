<?php

/* partials/offcanvas.html.twig */
class __TwigTemplate_4ebcfe1c1d6f8df46bd0c761c7a9d0bb16f8a76adf5d72318fed11269dfed8fd extends Twig_Template
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
        // line 17
        echo "
<div id=\"off-canvas-menu\" class=\"zg-padding\">
\t<div class=\"sb-close\"><span class=\"zg-icon zg-icon-remove\"></span></div>
\t<nav>
\t<ul class=\"zg-nav zg-nav-stacked\">
\t    ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 23
            echo "\t        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
\t    ";
        } else {
            // line 25
            echo "\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 26
                echo "\t            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 27
                echo "\t            <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
\t                <a href=\"";
                // line 28
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
\t                    ";
                // line 29
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 30
                echo "\t                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
\t                </a>
\t            </li>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t    ";
        }
        // line 35
        echo "\t    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 36
            echo "\t        <li>
\t            <a href=\"";
            // line 37
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
\t                ";
            // line 38
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 39
            echo "\t                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
\t            </a>
\t        </li>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 44
            echo "\t        <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/offcanvas.html.twig", 44)->display($context);
            echo "</li>
\t    ";
        }
        // line 46
        echo "\t</ul>
\t</nav>
</div>";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    echo " parent";
                }
                echo "\">
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
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

    public function getTemplateName()
    {
        return "partials/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 14,  164 => 11,  161 => 10,  159 => 9,  153 => 7,  147 => 6,  143 => 5,  135 => 4,  132 => 3,  127 => 2,  115 => 1,  109 => 46,  103 => 44,  100 => 43,  89 => 39,  83 => 38,  79 => 37,  76 => 36,  71 => 35,  68 => 34,  57 => 30,  51 => 29,  47 => 28,  42 => 27,  39 => 26,  34 => 25,  28 => 23,  26 => 22,  19 => 17,);
    }
}
