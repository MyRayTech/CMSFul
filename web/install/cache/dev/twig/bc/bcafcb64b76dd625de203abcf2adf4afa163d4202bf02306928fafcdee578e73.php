<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_fe8e504415622d4b75c823857deb3db8359317a1726c8255d96dc877adbc1497 extends Twig_Template
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
        $__internal_9e3354d16c60c9b38108ae949a0087de55ea962e5fe227eeaceac393ca01a1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3354d16c60c9b38108ae949a0087de55ea962e5fe227eeaceac393ca01a1cf->enter($__internal_9e3354d16c60c9b38108ae949a0087de55ea962e5fe227eeaceac393ca01a1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_5d51906862d127ec86d6c7db29bb10292f433aae0c570561827fbed06d3b71eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d51906862d127ec86d6c7db29bb10292f433aae0c570561827fbed06d3b71eb->enter($__internal_5d51906862d127ec86d6c7db29bb10292f433aae0c570561827fbed06d3b71eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

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
        
        $__internal_9e3354d16c60c9b38108ae949a0087de55ea962e5fe227eeaceac393ca01a1cf->leave($__internal_9e3354d16c60c9b38108ae949a0087de55ea962e5fe227eeaceac393ca01a1cf_prof);

        
        $__internal_5d51906862d127ec86d6c7db29bb10292f433aae0c570561827fbed06d3b71eb->leave($__internal_5d51906862d127ec86d6c7db29bb10292f433aae0c570561827fbed06d3b71eb_prof);

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
