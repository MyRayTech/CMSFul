<?php

/* @styles/install.html.twig */
class __TwigTemplate_4b95363710025d858b957fa689655e4e01a15d2a2ba121de0ff9fad88de6208b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@styles/layout.html.twig", "@styles/install.html.twig", 1);
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
        $__internal_7558dc59945eee6af05cfb2156470f4126cab1c6c64fb8517ae0c9cb747100ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7558dc59945eee6af05cfb2156470f4126cab1c6c64fb8517ae0c9cb747100ee->enter($__internal_7558dc59945eee6af05cfb2156470f4126cab1c6c64fb8517ae0c9cb747100ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/install.html.twig"));

        $__internal_0cda53839c04d498742b3680fa8e55b63a45f1318106a1193abf20ea5739c7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cda53839c04d498742b3680fa8e55b63a45f1318106a1193abf20ea5739c7b1->enter($__internal_0cda53839c04d498742b3680fa8e55b63a45f1318106a1193abf20ea5739c7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/install.html.twig"));

        // line 3
        $context["title"] = "CMSFul Installer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7558dc59945eee6af05cfb2156470f4126cab1c6c64fb8517ae0c9cb747100ee->leave($__internal_7558dc59945eee6af05cfb2156470f4126cab1c6c64fb8517ae0c9cb747100ee_prof);

        
        $__internal_0cda53839c04d498742b3680fa8e55b63a45f1318106a1193abf20ea5739c7b1->leave($__internal_0cda53839c04d498742b3680fa8e55b63a45f1318106a1193abf20ea5739c7b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95378d024c0401b3302a3ac7c647b9073926818fec8372c54df0fa59de91d701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95378d024c0401b3302a3ac7c647b9073926818fec8372c54df0fa59de91d701->enter($__internal_95378d024c0401b3302a3ac7c647b9073926818fec8372c54df0fa59de91d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a245be2e382a6d6dc6206f0b715d43cbae1aee52fe86ad8128158c11b7a77c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a245be2e382a6d6dc6206f0b715d43cbae1aee52fe86ad8128158c11b7a77c09->enter($__internal_a245be2e382a6d6dc6206f0b715d43cbae1aee52fe86ad8128158c11b7a77c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <section id=\"install\">
                    <h1 class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                    <div class=\"row\">
                        <div class='col-md-12'>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
        
        $__internal_a245be2e382a6d6dc6206f0b715d43cbae1aee52fe86ad8128158c11b7a77c09->leave($__internal_a245be2e382a6d6dc6206f0b715d43cbae1aee52fe86ad8128158c11b7a77c09_prof);

        
        $__internal_95378d024c0401b3302a3ac7c647b9073926818fec8372c54df0fa59de91d701->leave($__internal_95378d024c0401b3302a3ac7c647b9073926818fec8372c54df0fa59de91d701_prof);

    }

    public function getTemplateName()
    {
        return "@styles/install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@styles/layout.html.twig' %}

{% set title = \"CMSFul Installer\" %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <section id=\"install\">
                    <h1 class=\"text-center\">{{title}}</h1>
                    <div class=\"row\">
                        <div class='col-md-12'>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{% endblock %}", "@styles/install.html.twig", "/home/devraytech/public_html/cms/web/install/templates/install.html.twig");
    }
}
