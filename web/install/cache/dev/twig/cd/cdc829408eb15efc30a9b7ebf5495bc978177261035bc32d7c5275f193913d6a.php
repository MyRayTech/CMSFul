<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_448b173fbc5c8d39f58b4a1d903f7512397e7b2f78695f1a2efc483facb998ee extends Twig_Template
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
        $__internal_6511028b226c60a8aec7c5bcf10c317dd79e0830333b988db66ce4a6dfd9530f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6511028b226c60a8aec7c5bcf10c317dd79e0830333b988db66ce4a6dfd9530f->enter($__internal_6511028b226c60a8aec7c5bcf10c317dd79e0830333b988db66ce4a6dfd9530f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f1f32cadceb01fa52414de634dd8049c1d119ce07258b87f0d85cbd6e76b2a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f32cadceb01fa52414de634dd8049c1d119ce07258b87f0d85cbd6e76b2a6f->enter($__internal_f1f32cadceb01fa52414de634dd8049c1d119ce07258b87f0d85cbd6e76b2a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_6511028b226c60a8aec7c5bcf10c317dd79e0830333b988db66ce4a6dfd9530f->leave($__internal_6511028b226c60a8aec7c5bcf10c317dd79e0830333b988db66ce4a6dfd9530f_prof);

        
        $__internal_f1f32cadceb01fa52414de634dd8049c1d119ce07258b87f0d85cbd6e76b2a6f->leave($__internal_f1f32cadceb01fa52414de634dd8049c1d119ce07258b87f0d85cbd6e76b2a6f_prof);

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
