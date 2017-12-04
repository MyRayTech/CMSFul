<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d3c9f578c641698497d51296dedc49476fdbfcd067d149885b45e826e8bad2c2 extends Twig_Template
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
        $__internal_67c5b6c4c66a08f4244fe6c50617a72130067166bd3f7a6594060d84c34a1b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c5b6c4c66a08f4244fe6c50617a72130067166bd3f7a6594060d84c34a1b34->enter($__internal_67c5b6c4c66a08f4244fe6c50617a72130067166bd3f7a6594060d84c34a1b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_81ef2ec98adac4f17f8c39963be30b80a008439da253124c4e609dc3d3556d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ef2ec98adac4f17f8c39963be30b80a008439da253124c4e609dc3d3556d45->enter($__internal_81ef2ec98adac4f17f8c39963be30b80a008439da253124c4e609dc3d3556d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_67c5b6c4c66a08f4244fe6c50617a72130067166bd3f7a6594060d84c34a1b34->leave($__internal_67c5b6c4c66a08f4244fe6c50617a72130067166bd3f7a6594060d84c34a1b34_prof);

        
        $__internal_81ef2ec98adac4f17f8c39963be30b80a008439da253124c4e609dc3d3556d45->leave($__internal_81ef2ec98adac4f17f8c39963be30b80a008439da253124c4e609dc3d3556d45_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
