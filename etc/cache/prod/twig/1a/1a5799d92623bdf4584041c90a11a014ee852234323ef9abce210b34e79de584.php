<?php

/* @styles/login.html.twig */
class __TwigTemplate_dfd447a0f96aec4decfb79e495b6b569d7dc6751d630b728688a718a8ad68e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@styles/layout.html.twig", "@styles/login.html.twig", 1);
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
        // line 2
        $context["title"] = "Log in";
        // line 3
        $context["active"] = "Account";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"from_login col-md-4 offset-md-4 text-center\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_check");
        echo "\" method=\"post\">
                    <h2>";
        // line 9
        echo "Please sign in";
        echo "</h2>
                    <label for=\"inputUsername\">Username</label>
                    <input type=\"text\" name=\"_username\" id=\"inputUsername\" placeholder=\"Username\" required autofocus><br />
                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" name=\"_password\" id=\"inputPassword\"  placeholder=\"Password\" required>
                    <div>
                        <label for=\"remember_me\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked> Remember me
                        </label>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <button type=\"submit\">Sign in</button>
                </form>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@styles/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  45 => 9,  41 => 8,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@styles/login.html.twig", "/home/devraytech/public_html/cms/styles/default/login.html.twig");
    }
}
