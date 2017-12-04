<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a20c9aeeffcfb5f68784142ab951a1539066b6ecbfce69ac1bc441c86915212e extends Twig_Template
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
        $__internal_205d537f26ebf878ffae4f92f5c2fc387884a1bfac7d6fe98cb3c48a9d3fbe28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205d537f26ebf878ffae4f92f5c2fc387884a1bfac7d6fe98cb3c48a9d3fbe28->enter($__internal_205d537f26ebf878ffae4f92f5c2fc387884a1bfac7d6fe98cb3c48a9d3fbe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cfa3769f955f3abdc9d96bfc84fa6863b44d83bb4f5b2eacfd1af0d8ad8ffb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa3769f955f3abdc9d96bfc84fa6863b44d83bb4f5b2eacfd1af0d8ad8ffb9b->enter($__internal_cfa3769f955f3abdc9d96bfc84fa6863b44d83bb4f5b2eacfd1af0d8ad8ffb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205d537f26ebf878ffae4f92f5c2fc387884a1bfac7d6fe98cb3c48a9d3fbe28->leave($__internal_205d537f26ebf878ffae4f92f5c2fc387884a1bfac7d6fe98cb3c48a9d3fbe28_prof);

        
        $__internal_cfa3769f955f3abdc9d96bfc84fa6863b44d83bb4f5b2eacfd1af0d8ad8ffb9b->leave($__internal_cfa3769f955f3abdc9d96bfc84fa6863b44d83bb4f5b2eacfd1af0d8ad8ffb9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb1f26e026a2abf018d722ddd7a44aa7bde32a52ca16ca980faff571cdb80780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1f26e026a2abf018d722ddd7a44aa7bde32a52ca16ca980faff571cdb80780->enter($__internal_fb1f26e026a2abf018d722ddd7a44aa7bde32a52ca16ca980faff571cdb80780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1fab7e76079b394ab4389530b87070a1115b1bee3e6295339b8415f50904f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fab7e76079b394ab4389530b87070a1115b1bee3e6295339b8415f50904f78->enter($__internal_b1fab7e76079b394ab4389530b87070a1115b1bee3e6295339b8415f50904f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b1fab7e76079b394ab4389530b87070a1115b1bee3e6295339b8415f50904f78->leave($__internal_b1fab7e76079b394ab4389530b87070a1115b1bee3e6295339b8415f50904f78_prof);

        
        $__internal_fb1f26e026a2abf018d722ddd7a44aa7bde32a52ca16ca980faff571cdb80780->leave($__internal_fb1f26e026a2abf018d722ddd7a44aa7bde32a52ca16ca980faff571cdb80780_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f5082261a18008fbdcc807ee526a6c411904cdfb53fe3552602a667490f7d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5082261a18008fbdcc807ee526a6c411904cdfb53fe3552602a667490f7d30->enter($__internal_0f5082261a18008fbdcc807ee526a6c411904cdfb53fe3552602a667490f7d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3939b7b3f45ca5bfedf634cccc082f10adc0f131372b6ff51c0ef6425284248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3939b7b3f45ca5bfedf634cccc082f10adc0f131372b6ff51c0ef6425284248b->enter($__internal_3939b7b3f45ca5bfedf634cccc082f10adc0f131372b6ff51c0ef6425284248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
        
        $__internal_3939b7b3f45ca5bfedf634cccc082f10adc0f131372b6ff51c0ef6425284248b->leave($__internal_3939b7b3f45ca5bfedf634cccc082f10adc0f131372b6ff51c0ef6425284248b_prof);

        
        $__internal_0f5082261a18008fbdcc807ee526a6c411904cdfb53fe3552602a667490f7d30->leave($__internal_0f5082261a18008fbdcc807ee526a6c411904cdfb53fe3552602a667490f7d30_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_27031a9943fefd399534c5317e777a8a593859fa3a8c0289e7d1ea23ffb88625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27031a9943fefd399534c5317e777a8a593859fa3a8c0289e7d1ea23ffb88625->enter($__internal_27031a9943fefd399534c5317e777a8a593859fa3a8c0289e7d1ea23ffb88625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5baa5b402c02a3a18b75ebe1ef43b1f06534f4d8f41725822b9fc7ccfaa04514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baa5b402c02a3a18b75ebe1ef43b1f06534f4d8f41725822b9fc7ccfaa04514->enter($__internal_5baa5b402c02a3a18b75ebe1ef43b1f06534f4d8f41725822b9fc7ccfaa04514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5baa5b402c02a3a18b75ebe1ef43b1f06534f4d8f41725822b9fc7ccfaa04514->leave($__internal_5baa5b402c02a3a18b75ebe1ef43b1f06534f4d8f41725822b9fc7ccfaa04514_prof);

        
        $__internal_27031a9943fefd399534c5317e777a8a593859fa3a8c0289e7d1ea23ffb88625->leave($__internal_27031a9943fefd399534c5317e777a8a593859fa3a8c0289e7d1ea23ffb88625_prof);

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
