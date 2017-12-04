<?php

/* @styles/step_1.html.twig */
class __TwigTemplate_72389635b3737085dae796688d8ee193b3e1b1e3239b6d2e1ee71d7f883831b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@styles/layout.html.twig", "@styles/step_1.html.twig", 1);
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
        $__internal_ee85243caede169605e8cf14f21c625589dd1c627399dfda36be12a8bf528fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee85243caede169605e8cf14f21c625589dd1c627399dfda36be12a8bf528fdb->enter($__internal_ee85243caede169605e8cf14f21c625589dd1c627399dfda36be12a8bf528fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/step_1.html.twig"));

        $__internal_820db73a112db5f6cf0314b8a6ac0fa96d283d4996b42c33154e830dce639cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820db73a112db5f6cf0314b8a6ac0fa96d283d4996b42c33154e830dce639cf7->enter($__internal_820db73a112db5f6cf0314b8a6ac0fa96d283d4996b42c33154e830dce639cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/step_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee85243caede169605e8cf14f21c625589dd1c627399dfda36be12a8bf528fdb->leave($__internal_ee85243caede169605e8cf14f21c625589dd1c627399dfda36be12a8bf528fdb_prof);

        
        $__internal_820db73a112db5f6cf0314b8a6ac0fa96d283d4996b42c33154e830dce639cf7->leave($__internal_820db73a112db5f6cf0314b8a6ac0fa96d283d4996b42c33154e830dce639cf7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c87d987f9818963e8dc6e8746add04acd2de6ce3b256f93740409613896e6de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87d987f9818963e8dc6e8746add04acd2de6ce3b256f93740409613896e6de9->enter($__internal_c87d987f9818963e8dc6e8746add04acd2de6ce3b256f93740409613896e6de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bccad219aff38b64ab02fe8b0811503b0b0b814f2150c092b457dbe028ad8725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccad219aff38b64ab02fe8b0811503b0b0b814f2150c092b457dbe028ad8725->enter($__internal_bccad219aff38b64ab02fe8b0811503b0b0b814f2150c092b457dbe028ad8725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <p class=\"text-center\">Welcome to the ";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo ".<br /> With this wizard you be able to create a administrative account and prepare the database information.<br />
                            Let's start be verifying some requirements for CMSFul.</p>
                        </div>
                        <div class='col-md-12 text-center'>
                            <a class='btn btn-primary' href='";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "step/";
        echo twig_escape_filter($this->env, (($context["step"] ?? null) + 1), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, ($context["next_step"] ?? null), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
        
        $__internal_bccad219aff38b64ab02fe8b0811503b0b0b814f2150c092b457dbe028ad8725->leave($__internal_bccad219aff38b64ab02fe8b0811503b0b0b814f2150c092b457dbe028ad8725_prof);

        
        $__internal_c87d987f9818963e8dc6e8746add04acd2de6ce3b256f93740409613896e6de9->leave($__internal_c87d987f9818963e8dc6e8746add04acd2de6ce3b256f93740409613896e6de9_prof);

    }

    public function getTemplateName()
    {
        return "@styles/step_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                            <p class=\"text-center\">Welcome to the {{title}}.<br /> With this wizard you be able to create a administrative account and prepare the database information.<br />
                            Let's start be verifying some requirements for CMSFul.</p>
                        </div>
                        <div class='col-md-12 text-center'>
                            <a class='btn btn-primary' href='{{base_url}}step/{{step+1}}'>{{next_step}}</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{% endblock %}", "@styles/step_1.html.twig", "/home/devraytech/public_html/cms/web/install/templates/step_1.html.twig");
    }
}
