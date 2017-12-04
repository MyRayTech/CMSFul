<?php

/* @styles/navigation.html.twig */
class __TwigTemplate_16fae662830658018b5c9af0b7c7a3375e07426be8c901241f7226460aabd481 extends Twig_Template
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
        // line 2
        echo "<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "parent", array()), "name", array()) == "none")) {
                // line 5
                echo "                ";
                // line 6
                echo "                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "children", array()))) {
                    // line 7
                    echo "                <li class=\"dropdown\" ><a class=\"dropdown-toggle\"  id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "url", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array())), "html", null, true);
                    echo "</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                    ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_menu"]) {
                        // line 10
                        echo "                        <a class=\"dropdown-item\" href=\"";
                        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_menu"], "url", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_menu"], "name", array())), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_menu"], "name", array())), "html", null, true);
                        echo "</a>
                            ";
                        // line 11
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_menu"], "children", array()))) {
                            // line 12
                            echo "                            <ul>
                                ";
                            // line 13
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_menu"], "children", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_sub_menu"]) {
                                // line 14
                                echo "                                    <li><a href=\"";
                                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_sub_menu"], "url", array()), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_sub_menu"], "name", array())), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["sub_sub_menu"], "name", array())), "html", null, true);
                                echo "</a></li>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_sub_menu'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 16
                            echo "                            </ul>
                        ";
                        }
                        // line 18
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                    </div>
                </li>
                ";
                } else {
                    // line 22
                    echo "                    ";
                    // line 23
                    echo "                    <li class=\"\"><a class=\"\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "url", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array())), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "        <li class=\"\" ><a class=\"\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "logout\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("logout"), "html", null, true);
            echo "</a></li>
        ";
        } else {
            // line 30
            echo "        <li class=\"\"><a class=\"\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "login\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login"), "html", null, true);
            echo "</a></li>    
        ";
        }
        // line 32
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "@styles/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 32,  130 => 30,  122 => 28,  119 => 27,  113 => 26,  110 => 25,  99 => 23,  97 => 22,  92 => 19,  86 => 18,  82 => 16,  68 => 14,  64 => 13,  61 => 12,  59 => 11,  49 => 10,  45 => 9,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@styles/navigation.html.twig", "/home/devraytech/public_html/cms/styles/default/navigation.html.twig");
    }
}
