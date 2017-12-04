<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b4af6c47a79b35667ff3eda212e15d0590c18aed29d21a21319f7d23a73c78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_344ff3326106f2aef70cc46d353dbafdff8a9728e44407ab9fe83afa521ccc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344ff3326106f2aef70cc46d353dbafdff8a9728e44407ab9fe83afa521ccc0d->enter($__internal_344ff3326106f2aef70cc46d353dbafdff8a9728e44407ab9fe83afa521ccc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8e86d079de7d5b080fb478447c60a4280ab6e5a9619a7ee06c9bd67c3f3063c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e86d079de7d5b080fb478447c60a4280ab6e5a9619a7ee06c9bd67c3f3063c3->enter($__internal_8e86d079de7d5b080fb478447c60a4280ab6e5a9619a7ee06c9bd67c3f3063c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344ff3326106f2aef70cc46d353dbafdff8a9728e44407ab9fe83afa521ccc0d->leave($__internal_344ff3326106f2aef70cc46d353dbafdff8a9728e44407ab9fe83afa521ccc0d_prof);

        
        $__internal_8e86d079de7d5b080fb478447c60a4280ab6e5a9619a7ee06c9bd67c3f3063c3->leave($__internal_8e86d079de7d5b080fb478447c60a4280ab6e5a9619a7ee06c9bd67c3f3063c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_748f975c7a7c31840a675356c4b65e18d1337342d2a1afc3e93753810154ae29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748f975c7a7c31840a675356c4b65e18d1337342d2a1afc3e93753810154ae29->enter($__internal_748f975c7a7c31840a675356c4b65e18d1337342d2a1afc3e93753810154ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_622512c51c56001cb5cab7cefe9db7dc0a5a47fa8d50f903760cfa1ea5a67b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622512c51c56001cb5cab7cefe9db7dc0a5a47fa8d50f903760cfa1ea5a67b93->enter($__internal_622512c51c56001cb5cab7cefe9db7dc0a5a47fa8d50f903760cfa1ea5a67b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_622512c51c56001cb5cab7cefe9db7dc0a5a47fa8d50f903760cfa1ea5a67b93->leave($__internal_622512c51c56001cb5cab7cefe9db7dc0a5a47fa8d50f903760cfa1ea5a67b93_prof);

        
        $__internal_748f975c7a7c31840a675356c4b65e18d1337342d2a1afc3e93753810154ae29->leave($__internal_748f975c7a7c31840a675356c4b65e18d1337342d2a1afc3e93753810154ae29_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_34949f38c057d4524c890c218f7bc472812e11173c0503ac8f271484845596d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34949f38c057d4524c890c218f7bc472812e11173c0503ac8f271484845596d2->enter($__internal_34949f38c057d4524c890c218f7bc472812e11173c0503ac8f271484845596d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7d73d5adc54f5448964b9ab3d26cf35f3fc1a843e8faffd22d575e363de8ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d73d5adc54f5448964b9ab3d26cf35f3fc1a843e8faffd22d575e363de8ca8->enter($__internal_f7d73d5adc54f5448964b9ab3d26cf35f3fc1a843e8faffd22d575e363de8ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
        
        $__internal_f7d73d5adc54f5448964b9ab3d26cf35f3fc1a843e8faffd22d575e363de8ca8->leave($__internal_f7d73d5adc54f5448964b9ab3d26cf35f3fc1a843e8faffd22d575e363de8ca8_prof);

        
        $__internal_34949f38c057d4524c890c218f7bc472812e11173c0503ac8f271484845596d2->leave($__internal_34949f38c057d4524c890c218f7bc472812e11173c0503ac8f271484845596d2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1a5a03386dfb67b0a0cb96fe30bc657098eabb656f640566a2f4fcc50cc1aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a5a03386dfb67b0a0cb96fe30bc657098eabb656f640566a2f4fcc50cc1aa3->enter($__internal_d1a5a03386dfb67b0a0cb96fe30bc657098eabb656f640566a2f4fcc50cc1aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_544b844df2073965c1b496234ba8a1a3aece1d8bb6461d4de24d2fd31954526a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544b844df2073965c1b496234ba8a1a3aece1d8bb6461d4de24d2fd31954526a->enter($__internal_544b844df2073965c1b496234ba8a1a3aece1d8bb6461d4de24d2fd31954526a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_544b844df2073965c1b496234ba8a1a3aece1d8bb6461d4de24d2fd31954526a->leave($__internal_544b844df2073965c1b496234ba8a1a3aece1d8bb6461d4de24d2fd31954526a_prof);

        
        $__internal_d1a5a03386dfb67b0a0cb96fe30bc657098eabb656f640566a2f4fcc50cc1aa3->leave($__internal_d1a5a03386dfb67b0a0cb96fe30bc657098eabb656f640566a2f4fcc50cc1aa3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
