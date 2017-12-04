<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_aeb6d8b64f366350ef2b8123964152fa84c12c73e7ef4d541a1bab2a29acd27f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ba9f91a313392dc3d88245d1a2ba46d6a145440ad8ee281dbecae69d005687f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba9f91a313392dc3d88245d1a2ba46d6a145440ad8ee281dbecae69d005687f->enter($__internal_8ba9f91a313392dc3d88245d1a2ba46d6a145440ad8ee281dbecae69d005687f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_18a57b70b48710790f4d3a082d83c62821812e31d407fae8f0a5131ed15e04e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a57b70b48710790f4d3a082d83c62821812e31d407fae8f0a5131ed15e04e5->enter($__internal_18a57b70b48710790f4d3a082d83c62821812e31d407fae8f0a5131ed15e04e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba9f91a313392dc3d88245d1a2ba46d6a145440ad8ee281dbecae69d005687f->leave($__internal_8ba9f91a313392dc3d88245d1a2ba46d6a145440ad8ee281dbecae69d005687f_prof);

        
        $__internal_18a57b70b48710790f4d3a082d83c62821812e31d407fae8f0a5131ed15e04e5->leave($__internal_18a57b70b48710790f4d3a082d83c62821812e31d407fae8f0a5131ed15e04e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ffc1a76d4942cb1838c12e6787e4879042efb2ebc5d26116ba0126276670e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffc1a76d4942cb1838c12e6787e4879042efb2ebc5d26116ba0126276670e20->enter($__internal_3ffc1a76d4942cb1838c12e6787e4879042efb2ebc5d26116ba0126276670e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7a292453ce914ddcc29f33a361d6ef1b28358eb0b0408c086552f724f798ac85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a292453ce914ddcc29f33a361d6ef1b28358eb0b0408c086552f724f798ac85->enter($__internal_7a292453ce914ddcc29f33a361d6ef1b28358eb0b0408c086552f724f798ac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7a292453ce914ddcc29f33a361d6ef1b28358eb0b0408c086552f724f798ac85->leave($__internal_7a292453ce914ddcc29f33a361d6ef1b28358eb0b0408c086552f724f798ac85_prof);

        
        $__internal_3ffc1a76d4942cb1838c12e6787e4879042efb2ebc5d26116ba0126276670e20->leave($__internal_3ffc1a76d4942cb1838c12e6787e4879042efb2ebc5d26116ba0126276670e20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
