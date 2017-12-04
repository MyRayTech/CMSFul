<?php

/* @styles/layout.html.twig */
class __TwigTemplate_56082e98896199820d1b1c5d5e10e7ab3d05e747adb6272754d115a5db7154e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=700, initial-scale=1, shrink-to-fit=yes\">
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        if (array_key_exists("sitename", $context)) {
            echo " | ";
            echo twig_escape_filter($this->env, ($context["sitename"] ?? null), "html", null, true);
        }
        echo "</title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tether/dist/css/tether.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lightbox2/dist/css/lightbox.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bxslider-4/dist/jquery.bxslider.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("animate.css/animate.min.css", "bower"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/dist/jquery.min.js", "bower"), "html", null, true);
        echo "\"></script>
</head>
<body>
    ";
        // line 22
        echo "    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 offset-md-4 logo text-center\"><img class=\"img-fluid img_logo\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cmsful_logo.png"), "html", null, true);
        echo "\" alt=\"CMS FUL\"></div>
            </div>
        </div>
    </header>
    ";
        // line 30
        echo "    <nav class=\"menu\">
        <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"true\" aria-controls=\"collapseExample\">
    Button with data-target
  </button>
        <div class=\"collapse\" id=\"collapseExample\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CMS:Navigation:createView"));
        echo "
        </div>
    </nav>
    ";
        // line 39
        echo "    <main>
    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
</main>
";
        // line 44
        echo "<footer> 

</footer>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tether/dist/js/tether.min.js", "bower"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/dist/js/bootstrap.min.js", "bower"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lightbox2/dist/js/lightbox.js", "bower"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wow/dist/wow.min.js", "bower"), "html", null, true);
        echo "\"></script>
";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cms.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  159 => 51,  154 => 40,  149 => 16,  140 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  117 => 44,  113 => 41,  111 => 40,  108 => 39,  102 => 35,  95 => 30,  88 => 25,  83 => 22,  77 => 18,  72 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  29 => 6,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@styles/layout.html.twig", "/home/devraytech/public_html/cms/styles/default/layout.html.twig");
    }
}
