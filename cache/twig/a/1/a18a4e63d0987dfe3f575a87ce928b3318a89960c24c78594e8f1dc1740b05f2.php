<?php

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_a18a4e63d0987dfe3f575a87ce928b3318a89960c24c78594e8f1dc1740b05f2 extends Twig_Template
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
        $context["crumbs"] = $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "get", array(), "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array());
        // line 3
        $context["divider"] = $this->getAttribute((isset($context["breadcrumbs_config"]) ? $context["breadcrumbs_config"] : null), "icon_divider_classes", array());
        // line 4
        echo "
";
        // line 5
        if (((twig_length_filter($this->env, (isset($context["crumbs"]) ? $context["crumbs"] : null)) > 1) || $this->getAttribute((isset($context["breadcrumbs_config"]) ? $context["breadcrumbs_config"] : null), "show_all", array()))) {
            // line 6
            echo "<div id=\"breadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    ";
            // line 7
            if ($this->getAttribute((isset($context["breadcrumbs_config"]) ? $context["breadcrumbs_config"] : null), "icon_home", array())) {
                // line 8
                echo "    <i class=\"";
                echo $this->getAttribute((isset($context["breadcrumbs_config"]) ? $context["breadcrumbs_config"] : null), "icon_home", array());
                echo "\"></i>
    ";
            }
            // line 10
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 11
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 12
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["crumb"], "url", array());
                    echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                    echo $this->getAttribute($context["crumb"], "menu", array());
                    echo "</span></a>
            <i class=\"";
                    // line 13
                    echo (isset($context["divider"]) ? $context["divider"] : null);
                    echo "\"></i>
        ";
                } else {
                    // line 15
                    echo "            ";
                    if ($this->getAttribute((isset($context["breadcrumbs_config"]) ? $context["breadcrumbs_config"] : null), "link_trailing", array())) {
                        // line 16
                        echo "                <a href=\"";
                        echo $this->getAttribute($context["crumb"], "url", array());
                        echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", array());
                        echo "</span></a>
            ";
                    } else {
                        // line 18
                        echo "                <span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", array());
                        echo "</span>
            ";
                    }
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 22,  94 => 21,  91 => 20,  85 => 18,  77 => 16,  74 => 15,  69 => 13,  62 => 12,  59 => 11,  41 => 10,  35 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
