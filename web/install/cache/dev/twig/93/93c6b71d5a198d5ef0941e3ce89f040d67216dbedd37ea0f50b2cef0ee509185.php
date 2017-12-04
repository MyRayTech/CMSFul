<?php

/* @styles/layout.html.twig */
class __TwigTemplate_6a3b96cbf662112a7684a6eaf1a4939e0bcec91343e1bd9eef4467d373f7ad98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76aa8feed9e9e3f862a150a30b81b3b72a48c4c76b1963b4b2ee71b1dc5decdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76aa8feed9e9e3f862a150a30b81b3b72a48c4c76b1963b4b2ee71b1dc5decdf->enter($__internal_76aa8feed9e9e3f862a150a30b81b3b72a48c4c76b1963b4b2ee71b1dc5decdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/layout.html.twig"));

        $__internal_e01b475a0b24d9add440225022184a4c9665950685d271117277dbd048fb92a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01b475a0b24d9add440225022184a4c9665950685d271117277dbd048fb92a0->enter($__internal_e01b475a0b24d9add440225022184a4c9665950685d271117277dbd048fb92a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@styles/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/dist/jquery.min.js", "bower"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tether/dist/js/tether.min.js", "bower"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/dist/js/bootstrap.min.js", "bower"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_76aa8feed9e9e3f862a150a30b81b3b72a48c4c76b1963b4b2ee71b1dc5decdf->leave($__internal_76aa8feed9e9e3f862a150a30b81b3b72a48c4c76b1963b4b2ee71b1dc5decdf_prof);

        
        $__internal_e01b475a0b24d9add440225022184a4c9665950685d271117277dbd048fb92a0->leave($__internal_e01b475a0b24d9add440225022184a4c9665950685d271117277dbd048fb92a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10a720fef9c5fa740ba1946f8adeedb458528ea5a4024eefad52a83ecad6a46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a720fef9c5fa740ba1946f8adeedb458528ea5a4024eefad52a83ecad6a46b->enter($__internal_10a720fef9c5fa740ba1946f8adeedb458528ea5a4024eefad52a83ecad6a46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adc005c1147ce6f95f5abfdbfe1a942b29dc2dee885355b9cc0025581a8880fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc005c1147ce6f95f5abfdbfe1a942b29dc2dee885355b9cc0025581a8880fc->enter($__internal_adc005c1147ce6f95f5abfdbfe1a942b29dc2dee885355b9cc0025581a8880fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_adc005c1147ce6f95f5abfdbfe1a942b29dc2dee885355b9cc0025581a8880fc->leave($__internal_adc005c1147ce6f95f5abfdbfe1a942b29dc2dee885355b9cc0025581a8880fc_prof);

        
        $__internal_10a720fef9c5fa740ba1946f8adeedb458528ea5a4024eefad52a83ecad6a46b->leave($__internal_10a720fef9c5fa740ba1946f8adeedb458528ea5a4024eefad52a83ecad6a46b_prof);

    }

    public function getTemplateName()
    {
        return "@styles/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  60 => 13,  55 => 12,  53 => 11,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{{title}}</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/dist/css/bootstrap.min.css', 'bower') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('font-awesome/css/font-awesome.min.css','bower') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\" />
        <script src=\"{{ asset('jquery/dist/jquery.min.js', 'bower') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        <script src=\"{{ asset('tether/dist/js/tether.min.js', 'bower') }}\"></script>
        <script src=\"{{ asset('bootstrap/dist/js/bootstrap.min.js', 'bower') }}\"></script>
    </body>
</html>", "@styles/layout.html.twig", "/home/devraytech/public_html/cms/web/install/templates/layout.html.twig");
    }
}
