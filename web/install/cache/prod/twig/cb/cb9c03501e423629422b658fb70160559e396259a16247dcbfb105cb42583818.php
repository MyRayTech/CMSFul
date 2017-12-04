<?php

/* @styles/step_1.html.twig */
class __TwigTemplate_53d8a929797bfc4cd2323a52b7828f0ad6a585537fcb7bd4f9ed6a465d79c8ce extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo "'>Next Step</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
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
        return array (  50 => 15,  43 => 11,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@styles/step_1.html.twig", "/home/devraytech/public_html/cms/web/install/templates/step_1.html.twig");
    }
}
