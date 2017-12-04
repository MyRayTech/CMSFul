<?php

/* @styles/step_2.html.twig */
class __TwigTemplate_3814643a46125c5ec5d36f2937209e71603bd9a1d686069cb9ab83d8743ae7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@styles/layout.html.twig", "@styles/step_2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@styles/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19c149ba991510f7b83e0e5953c0fe8713b8f7ddafd737a914aeaa6f9e53f113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c149ba991510f7b83e0e5953c0fe8713b8f7ddafd737a914aeaa6f9e53f113->enter($__internal_19c149ba991510f7b83e0e5953c0fe8713b8f7ddafd737a914aeaa6f9e53f113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/step_2.html.twig"));

        $__internal_9d979fa416edaa6121842c286cb98a8a33581b6df717acab282ca87bcf7d8d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d979fa416edaa6121842c286cb98a8a33581b6df717acab282ca87bcf7d8d06->enter($__internal_9d979fa416edaa6121842c286cb98a8a33581b6df717acab282ca87bcf7d8d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/step_2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c149ba991510f7b83e0e5953c0fe8713b8f7ddafd737a914aeaa6f9e53f113->leave($__internal_19c149ba991510f7b83e0e5953c0fe8713b8f7ddafd737a914aeaa6f9e53f113_prof);

        
        $__internal_9d979fa416edaa6121842c286cb98a8a33581b6df717acab282ca87bcf7d8d06->leave($__internal_9d979fa416edaa6121842c286cb98a8a33581b6df717acab282ca87bcf7d8d06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8fb96fe20825b549f984ae21356d2926a1009c3a810342590da3aa579f2f1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fb96fe20825b549f984ae21356d2926a1009c3a810342590da3aa579f2f1f1->enter($__internal_f8fb96fe20825b549f984ae21356d2926a1009c3a810342590da3aa579f2f1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78e3d443a7bd97d434e354dc7cd551fb66ec317e85eb91538ece72c025a1e23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e3d443a7bd97d434e354dc7cd551fb66ec317e85eb91538ece72c025a1e23b->enter($__internal_78e3d443a7bd97d434e354dc7cd551fb66ec317e85eb91538ece72c025a1e23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <section id=\"install\">
                    <h1 class=\"text-center\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                    <div class=\"row text-center\">
                        <div class='col-md-9'>
                            PHP version is at least or higher than 7.0.0
                        </div>
                        <div class='col-md-3'>
                            <span class='";
        // line 14
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "version_check", array()) == false)) {
            echo "red";
        } else {
            echo "green";
        }
        echo "' ></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "version", array()), "html", null, true);
        echo "</span>
                        </div>
                        <div class='col-md-12 text-center'>
                            <a class='btn btn-primary' href='";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "step/";
        echo twig_escape_filter($this->env, (($context["step"] ?? null) + 1), "html", null, true);
        echo "'>Next Step</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
        
        $__internal_78e3d443a7bd97d434e354dc7cd551fb66ec317e85eb91538ece72c025a1e23b->leave($__internal_78e3d443a7bd97d434e354dc7cd551fb66ec317e85eb91538ece72c025a1e23b_prof);

        
        $__internal_f8fb96fe20825b549f984ae21356d2926a1009c3a810342590da3aa579f2f1f1->leave($__internal_f8fb96fe20825b549f984ae21356d2926a1009c3a810342590da3aa579f2f1f1_prof);

    }

    public function getTemplateName()
    {
        return "@styles/step_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  64 => 14,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@styles/layout.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <section id=\"install\">
                    <h1 class=\"text-center\">{{title}}</h1>
                    <div class=\"row text-center\">
                        <div class='col-md-9'>
                            PHP version is at least or higher than 7.0.0
                        </div>
                        <div class='col-md-3'>
                            <span class='{% if data.version_check == false %}red{% else %}green{% endif %}' ></i> {{data.version}}</span>
                        </div>
                        <div class='col-md-12 text-center'>
                            <a class='btn btn-primary' href='{{base_url}}step/{{step+1}}'>Next Step</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{% endblock %}", "@styles/step_2.html.twig", "/home/devraytech/public_html/cms/web/install/templates/step_2.html.twig");
    }
}
