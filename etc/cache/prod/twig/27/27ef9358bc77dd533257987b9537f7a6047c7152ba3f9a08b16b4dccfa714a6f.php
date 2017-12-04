<?php

/* @styles/homepage.html.twig */
class __TwigTemplate_616c735d5c8c6bc43de00887fb06d759f7b39759849dc77061b79faede280eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@styles/layout.html.twig", "@styles/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@styles/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, twig_template_from_string($this->env, ($context["content"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@styles/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@styles/homepage.html.twig", "/home/devraytech/public_html/cms/styles/default/homepage.html.twig");
    }
}
