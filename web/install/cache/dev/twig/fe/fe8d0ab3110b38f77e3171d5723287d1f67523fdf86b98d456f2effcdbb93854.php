<?php

/* @styles/step_3.html.twig */
class __TwigTemplate_cee525b13aba825a36adc4ebd921bd6dd65b729d090bae8b5588e938cfe1beed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@styles/layout.html.twig", "@styles/step_3.html.twig", 1);
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
        $__internal_5ec6886c378a17cb6e21b30816a78bb603e10e60ea74609d743b94397719bd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec6886c378a17cb6e21b30816a78bb603e10e60ea74609d743b94397719bd22->enter($__internal_5ec6886c378a17cb6e21b30816a78bb603e10e60ea74609d743b94397719bd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/step_3.html.twig"));

        $__internal_b4378c1cc4bfd278fe693ac5ff70bac25b008986cf12d38ad9702541c932d035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4378c1cc4bfd278fe693ac5ff70bac25b008986cf12d38ad9702541c932d035->enter($__internal_b4378c1cc4bfd278fe693ac5ff70bac25b008986cf12d38ad9702541c932d035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/step_3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec6886c378a17cb6e21b30816a78bb603e10e60ea74609d743b94397719bd22->leave($__internal_5ec6886c378a17cb6e21b30816a78bb603e10e60ea74609d743b94397719bd22_prof);

        
        $__internal_b4378c1cc4bfd278fe693ac5ff70bac25b008986cf12d38ad9702541c932d035->leave($__internal_b4378c1cc4bfd278fe693ac5ff70bac25b008986cf12d38ad9702541c932d035_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99a9743b25df9e0bbb6ccd77c28f5ae3609972e5e058cf35a49e0b8f73fd46f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a9743b25df9e0bbb6ccd77c28f5ae3609972e5e058cf35a49e0b8f73fd46f8->enter($__internal_99a9743b25df9e0bbb6ccd77c28f5ae3609972e5e058cf35a49e0b8f73fd46f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f95fad13e1a1582b9039d50b48f2cb55440d200c335747b386f9632d2fba752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f95fad13e1a1582b9039d50b48f2cb55440d200c335747b386f9632d2fba752->enter($__internal_5f95fad13e1a1582b9039d50b48f2cb55440d200c335747b386f9632d2fba752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <section id=\"install\">
                    <h1 class=\"text-center\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                    <div class=\"row\">
                        <div class='col-md-12'>
                            
                        </div>
                        <div class='col-md-12'>
                            <a class='btn btn-primary' href='";
        // line 14
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
        
        $__internal_5f95fad13e1a1582b9039d50b48f2cb55440d200c335747b386f9632d2fba752->leave($__internal_5f95fad13e1a1582b9039d50b48f2cb55440d200c335747b386f9632d2fba752_prof);

        
        $__internal_99a9743b25df9e0bbb6ccd77c28f5ae3609972e5e058cf35a49e0b8f73fd46f8->leave($__internal_99a9743b25df9e0bbb6ccd77c28f5ae3609972e5e058cf35a49e0b8f73fd46f8_prof);

    }

    public function getTemplateName()
    {
        return "@styles/step_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                    <div class=\"row\">
                        <div class='col-md-12'>
                            
                        </div>
                        <div class='col-md-12'>
                            <a class='btn btn-primary' href='{{base_url}}step/{{step+1}}'>Next Step</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{% endblock %}", "@styles/step_3.html.twig", "/home/devraytech/public_html/cms/web/install/templates/step_3.html.twig");
    }
}
