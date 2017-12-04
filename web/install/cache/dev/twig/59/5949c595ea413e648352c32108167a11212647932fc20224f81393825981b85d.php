<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_090eead295ffdff56caedca21d8ef4221e09f1f7382d810e4274bcf9c96e707e extends Twig_Template
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
        $__internal_44ea55ed01148dfa011a16709df8a0e759f0028115ec50576b7e258f06898c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ea55ed01148dfa011a16709df8a0e759f0028115ec50576b7e258f06898c45->enter($__internal_44ea55ed01148dfa011a16709df8a0e759f0028115ec50576b7e258f06898c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_64e2bcd628e77063431abb65cfae4cd67255d91e419d6b66ba2319c6616fb0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e2bcd628e77063431abb65cfae4cd67255d91e419d6b66ba2319c6616fb0db->enter($__internal_64e2bcd628e77063431abb65cfae4cd67255d91e419d6b66ba2319c6616fb0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ea55ed01148dfa011a16709df8a0e759f0028115ec50576b7e258f06898c45->leave($__internal_44ea55ed01148dfa011a16709df8a0e759f0028115ec50576b7e258f06898c45_prof);

        
        $__internal_64e2bcd628e77063431abb65cfae4cd67255d91e419d6b66ba2319c6616fb0db->leave($__internal_64e2bcd628e77063431abb65cfae4cd67255d91e419d6b66ba2319c6616fb0db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dedfabc8b94256ebfb7f25a0a1ee339d0e198c391e8032f7e00364fdcc562c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedfabc8b94256ebfb7f25a0a1ee339d0e198c391e8032f7e00364fdcc562c37->enter($__internal_dedfabc8b94256ebfb7f25a0a1ee339d0e198c391e8032f7e00364fdcc562c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22bfdbd49e15872ab3ae388ff7c69eaa8e4d89e7a812f0a9843acaa5c7425087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bfdbd49e15872ab3ae388ff7c69eaa8e4d89e7a812f0a9843acaa5c7425087->enter($__internal_22bfdbd49e15872ab3ae388ff7c69eaa8e4d89e7a812f0a9843acaa5c7425087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_22bfdbd49e15872ab3ae388ff7c69eaa8e4d89e7a812f0a9843acaa5c7425087->leave($__internal_22bfdbd49e15872ab3ae388ff7c69eaa8e4d89e7a812f0a9843acaa5c7425087_prof);

        
        $__internal_dedfabc8b94256ebfb7f25a0a1ee339d0e198c391e8032f7e00364fdcc562c37->leave($__internal_dedfabc8b94256ebfb7f25a0a1ee339d0e198c391e8032f7e00364fdcc562c37_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfe8322e841581e02abb5465cbd9b01434ffffc991b2868c5755e205a036c0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe8322e841581e02abb5465cbd9b01434ffffc991b2868c5755e205a036c0b6->enter($__internal_dfe8322e841581e02abb5465cbd9b01434ffffc991b2868c5755e205a036c0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f262435e0f5776cad144ee75fc0c384c017a4f7c88a5f664d1c54d9f82c5431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f262435e0f5776cad144ee75fc0c384c017a4f7c88a5f664d1c54d9f82c5431->enter($__internal_0f262435e0f5776cad144ee75fc0c384c017a4f7c88a5f664d1c54d9f82c5431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
        
        $__internal_0f262435e0f5776cad144ee75fc0c384c017a4f7c88a5f664d1c54d9f82c5431->leave($__internal_0f262435e0f5776cad144ee75fc0c384c017a4f7c88a5f664d1c54d9f82c5431_prof);

        
        $__internal_dfe8322e841581e02abb5465cbd9b01434ffffc991b2868c5755e205a036c0b6->leave($__internal_dfe8322e841581e02abb5465cbd9b01434ffffc991b2868c5755e205a036c0b6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cc5d93d2afbbf6e93cd13f1bbbb9c0b67afdf84c8e4c01e4d41acf2143dfcfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc5d93d2afbbf6e93cd13f1bbbb9c0b67afdf84c8e4c01e4d41acf2143dfcfb->enter($__internal_6cc5d93d2afbbf6e93cd13f1bbbb9c0b67afdf84c8e4c01e4d41acf2143dfcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bddc5be366937e48badf3e9649091ddb05f0913f4834e42131693ba3ae5925c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddc5be366937e48badf3e9649091ddb05f0913f4834e42131693ba3ae5925c0->enter($__internal_bddc5be366937e48badf3e9649091ddb05f0913f4834e42131693ba3ae5925c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bddc5be366937e48badf3e9649091ddb05f0913f4834e42131693ba3ae5925c0->leave($__internal_bddc5be366937e48badf3e9649091ddb05f0913f4834e42131693ba3ae5925c0_prof);

        
        $__internal_6cc5d93d2afbbf6e93cd13f1bbbb9c0b67afdf84c8e4c01e4d41acf2143dfcfb->leave($__internal_6cc5d93d2afbbf6e93cd13f1bbbb9c0b67afdf84c8e4c01e4d41acf2143dfcfb_prof);

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
