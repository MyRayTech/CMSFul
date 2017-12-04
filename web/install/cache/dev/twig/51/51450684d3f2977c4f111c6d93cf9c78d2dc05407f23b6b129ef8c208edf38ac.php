<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_923c7e24877ef0c82c58a674520b0693040da57b86a19f94d397520f7cbcb012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5854f9f20089c52696ce379de008843bc4c9554a0e9acc3ffc3a710b5cde35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5854f9f20089c52696ce379de008843bc4c9554a0e9acc3ffc3a710b5cde35e->enter($__internal_a5854f9f20089c52696ce379de008843bc4c9554a0e9acc3ffc3a710b5cde35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_982b4ff3855a7b5da301020a14e62a23c55458e17aaecfa1df05603b49469f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982b4ff3855a7b5da301020a14e62a23c55458e17aaecfa1df05603b49469f87->enter($__internal_982b4ff3855a7b5da301020a14e62a23c55458e17aaecfa1df05603b49469f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5854f9f20089c52696ce379de008843bc4c9554a0e9acc3ffc3a710b5cde35e->leave($__internal_a5854f9f20089c52696ce379de008843bc4c9554a0e9acc3ffc3a710b5cde35e_prof);

        
        $__internal_982b4ff3855a7b5da301020a14e62a23c55458e17aaecfa1df05603b49469f87->leave($__internal_982b4ff3855a7b5da301020a14e62a23c55458e17aaecfa1df05603b49469f87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4eb02dc9d94551ec39a71425dd0c10750af05bbc4921fa56e93031b258727f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb02dc9d94551ec39a71425dd0c10750af05bbc4921fa56e93031b258727f1a->enter($__internal_4eb02dc9d94551ec39a71425dd0c10750af05bbc4921fa56e93031b258727f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5901cfde3401adafcf31b451076855fa0ca1c2b60d4e1d41dbf2c93708dddd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5901cfde3401adafcf31b451076855fa0ca1c2b60d4e1d41dbf2c93708dddd4e->enter($__internal_5901cfde3401adafcf31b451076855fa0ca1c2b60d4e1d41dbf2c93708dddd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5901cfde3401adafcf31b451076855fa0ca1c2b60d4e1d41dbf2c93708dddd4e->leave($__internal_5901cfde3401adafcf31b451076855fa0ca1c2b60d4e1d41dbf2c93708dddd4e_prof);

        
        $__internal_4eb02dc9d94551ec39a71425dd0c10750af05bbc4921fa56e93031b258727f1a->leave($__internal_4eb02dc9d94551ec39a71425dd0c10750af05bbc4921fa56e93031b258727f1a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4257f1a7f5e0a863e3e3f67e784319293b04b7eeada262346f20f50d172e2fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4257f1a7f5e0a863e3e3f67e784319293b04b7eeada262346f20f50d172e2fbc->enter($__internal_4257f1a7f5e0a863e3e3f67e784319293b04b7eeada262346f20f50d172e2fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c55a3bb839840062033f061275a0a90034588c83f0d9f9c4d255adf89b6c15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c55a3bb839840062033f061275a0a90034588c83f0d9f9c4d255adf89b6c15a->enter($__internal_0c55a3bb839840062033f061275a0a90034588c83f0d9f9c4d255adf89b6c15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c55a3bb839840062033f061275a0a90034588c83f0d9f9c4d255adf89b6c15a->leave($__internal_0c55a3bb839840062033f061275a0a90034588c83f0d9f9c4d255adf89b6c15a_prof);

        
        $__internal_4257f1a7f5e0a863e3e3f67e784319293b04b7eeada262346f20f50d172e2fbc->leave($__internal_4257f1a7f5e0a863e3e3f67e784319293b04b7eeada262346f20f50d172e2fbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7fdbdeb648f9e318e2049e1d0f452c74ba7c061f20b575eea286dc0ea241e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fdbdeb648f9e318e2049e1d0f452c74ba7c061f20b575eea286dc0ea241e80->enter($__internal_d7fdbdeb648f9e318e2049e1d0f452c74ba7c061f20b575eea286dc0ea241e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4dbf1a740bdb40be4be32559c9f704d9a67344ba32d8684ffcd51a72b10a62aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbf1a740bdb40be4be32559c9f704d9a67344ba32d8684ffcd51a72b10a62aa->enter($__internal_4dbf1a740bdb40be4be32559c9f704d9a67344ba32d8684ffcd51a72b10a62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_4dbf1a740bdb40be4be32559c9f704d9a67344ba32d8684ffcd51a72b10a62aa->leave($__internal_4dbf1a740bdb40be4be32559c9f704d9a67344ba32d8684ffcd51a72b10a62aa_prof);

        
        $__internal_d7fdbdeb648f9e318e2049e1d0f452c74ba7c061f20b575eea286dc0ea241e80->leave($__internal_d7fdbdeb648f9e318e2049e1d0f452c74ba7c061f20b575eea286dc0ea241e80_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
