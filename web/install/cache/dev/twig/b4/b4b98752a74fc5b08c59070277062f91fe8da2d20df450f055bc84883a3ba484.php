<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_cf93f55f767bb0404f9f5800c0d892eb1b7d11111aa9f86adad0ae1dbb49b58d extends Twig_Template
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
        $__internal_a1f87d1daeac31b7db875139ff5c31c45286691b3ad5c0166ee8efda72f5008e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f87d1daeac31b7db875139ff5c31c45286691b3ad5c0166ee8efda72f5008e->enter($__internal_a1f87d1daeac31b7db875139ff5c31c45286691b3ad5c0166ee8efda72f5008e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_7930f3b61913ace128d1e6f1a64c0d1dae167527545ef9d831c05a6c4b50303d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7930f3b61913ace128d1e6f1a64c0d1dae167527545ef9d831c05a6c4b50303d->enter($__internal_7930f3b61913ace128d1e6f1a64c0d1dae167527545ef9d831c05a6c4b50303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_a1f87d1daeac31b7db875139ff5c31c45286691b3ad5c0166ee8efda72f5008e->leave($__internal_a1f87d1daeac31b7db875139ff5c31c45286691b3ad5c0166ee8efda72f5008e_prof);

        
        $__internal_7930f3b61913ace128d1e6f1a64c0d1dae167527545ef9d831c05a6c4b50303d->leave($__internal_7930f3b61913ace128d1e6f1a64c0d1dae167527545ef9d831c05a6c4b50303d_prof);

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
