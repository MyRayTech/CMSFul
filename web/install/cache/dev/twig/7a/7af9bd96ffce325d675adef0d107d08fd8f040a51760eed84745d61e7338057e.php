<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf8d544a8ee6a517b405cfbe5c5cb774262eebbee69c2392c089d62bb95557cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1b7c6f30aa8be1495ceea184bac695f2ebeeb8213458e817a2e7b5c88a05d4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7c6f30aa8be1495ceea184bac695f2ebeeb8213458e817a2e7b5c88a05d4df->enter($__internal_1b7c6f30aa8be1495ceea184bac695f2ebeeb8213458e817a2e7b5c88a05d4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_44a2655046f7ba55c42eaf8388d96e69d380c8f2025824377408ce6cd0488858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a2655046f7ba55c42eaf8388d96e69d380c8f2025824377408ce6cd0488858->enter($__internal_44a2655046f7ba55c42eaf8388d96e69d380c8f2025824377408ce6cd0488858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7c6f30aa8be1495ceea184bac695f2ebeeb8213458e817a2e7b5c88a05d4df->leave($__internal_1b7c6f30aa8be1495ceea184bac695f2ebeeb8213458e817a2e7b5c88a05d4df_prof);

        
        $__internal_44a2655046f7ba55c42eaf8388d96e69d380c8f2025824377408ce6cd0488858->leave($__internal_44a2655046f7ba55c42eaf8388d96e69d380c8f2025824377408ce6cd0488858_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c3a64ed0271f7f8fefc60750e0024565cb1ab9d518a18fb78478b64353fec42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3a64ed0271f7f8fefc60750e0024565cb1ab9d518a18fb78478b64353fec42->enter($__internal_5c3a64ed0271f7f8fefc60750e0024565cb1ab9d518a18fb78478b64353fec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e0409b1c13da05a2c1a40265fa96ee20a2822bd8bcdd8088bb0e67725bd57f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0409b1c13da05a2c1a40265fa96ee20a2822bd8bcdd8088bb0e67725bd57f6->enter($__internal_5e0409b1c13da05a2c1a40265fa96ee20a2822bd8bcdd8088bb0e67725bd57f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5e0409b1c13da05a2c1a40265fa96ee20a2822bd8bcdd8088bb0e67725bd57f6->leave($__internal_5e0409b1c13da05a2c1a40265fa96ee20a2822bd8bcdd8088bb0e67725bd57f6_prof);

        
        $__internal_5c3a64ed0271f7f8fefc60750e0024565cb1ab9d518a18fb78478b64353fec42->leave($__internal_5c3a64ed0271f7f8fefc60750e0024565cb1ab9d518a18fb78478b64353fec42_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a607b32d0ffeaac2c49c93f9cde01d279afb64a28edaecbdd328d7b4bf7b9ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a607b32d0ffeaac2c49c93f9cde01d279afb64a28edaecbdd328d7b4bf7b9ed8->enter($__internal_a607b32d0ffeaac2c49c93f9cde01d279afb64a28edaecbdd328d7b4bf7b9ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c118e476b656e053bb5068f7560875aab6422171fad0d90211cd262fcf96e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c118e476b656e053bb5068f7560875aab6422171fad0d90211cd262fcf96e0d->enter($__internal_1c118e476b656e053bb5068f7560875aab6422171fad0d90211cd262fcf96e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1c118e476b656e053bb5068f7560875aab6422171fad0d90211cd262fcf96e0d->leave($__internal_1c118e476b656e053bb5068f7560875aab6422171fad0d90211cd262fcf96e0d_prof);

        
        $__internal_a607b32d0ffeaac2c49c93f9cde01d279afb64a28edaecbdd328d7b4bf7b9ed8->leave($__internal_a607b32d0ffeaac2c49c93f9cde01d279afb64a28edaecbdd328d7b4bf7b9ed8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_027474210d439f8136e4bbb93ffd181df8eb9c74073a9e280043cb6a443634ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027474210d439f8136e4bbb93ffd181df8eb9c74073a9e280043cb6a443634ae->enter($__internal_027474210d439f8136e4bbb93ffd181df8eb9c74073a9e280043cb6a443634ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b652270b40b6474e6f437c6d42b08d0f53551f0e22e7e53dc24ad40cfb9810f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b652270b40b6474e6f437c6d42b08d0f53551f0e22e7e53dc24ad40cfb9810f->enter($__internal_6b652270b40b6474e6f437c6d42b08d0f53551f0e22e7e53dc24ad40cfb9810f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_6b652270b40b6474e6f437c6d42b08d0f53551f0e22e7e53dc24ad40cfb9810f->leave($__internal_6b652270b40b6474e6f437c6d42b08d0f53551f0e22e7e53dc24ad40cfb9810f_prof);

        
        $__internal_027474210d439f8136e4bbb93ffd181df8eb9c74073a9e280043cb6a443634ae->leave($__internal_027474210d439f8136e4bbb93ffd181df8eb9c74073a9e280043cb6a443634ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
