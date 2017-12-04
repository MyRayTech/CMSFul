<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_1fdc71ea29ed6cac8acd317c7158bf0882ab0643c2d730b093acacebb7d13ae8 extends Twig_Template
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
        $__internal_e2c1806aeb569f4dc9f013a73b7d8d3df3c86f59e1269a650ea05f26b92933d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c1806aeb569f4dc9f013a73b7d8d3df3c86f59e1269a650ea05f26b92933d2->enter($__internal_e2c1806aeb569f4dc9f013a73b7d8d3df3c86f59e1269a650ea05f26b92933d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_1f162b0055e3439bfc40463fb33585e0892dbcaa9fd280a4146abf41bb00f764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f162b0055e3439bfc40463fb33585e0892dbcaa9fd280a4146abf41bb00f764->enter($__internal_1f162b0055e3439bfc40463fb33585e0892dbcaa9fd280a4146abf41bb00f764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array());
            echo " line ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array());
            echo "
";
        }
        
        $__internal_e2c1806aeb569f4dc9f013a73b7d8d3df3c86f59e1269a650ea05f26b92933d2->leave($__internal_e2c1806aeb569f4dc9f013a73b7d8d3df3c86f59e1269a650ea05f26b92933d2_prof);

        
        $__internal_1f162b0055e3439bfc40463fb33585e0892dbcaa9fd280a4146abf41bb00f764->leave($__internal_1f162b0055e3439bfc40463fb33585e0892dbcaa9fd280a4146abf41bb00f764_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
