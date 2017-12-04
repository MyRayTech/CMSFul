<?php

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_2a28447d104a48bb0f455e2d33c88b716bf4536770c73d7c51ca7f6155d6c274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925f49fd48935e1a6b10ff81e455474d766b25999aa9e6808919c91481d4a23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925f49fd48935e1a6b10ff81e455474d766b25999aa9e6808919c91481d4a23a->enter($__internal_925f49fd48935e1a6b10ff81e455474d766b25999aa9e6808919c91481d4a23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_cb59aba266b304807daa5331f6ed67c19d504b0fd91fd7f0776747866c5c95ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb59aba266b304807daa5331f6ed67c19d504b0fd91fd7f0776747866c5c95ad->enter($__internal_cb59aba266b304807daa5331f6ed67c19d504b0fd91fd7f0776747866c5c95ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925f49fd48935e1a6b10ff81e455474d766b25999aa9e6808919c91481d4a23a->leave($__internal_925f49fd48935e1a6b10ff81e455474d766b25999aa9e6808919c91481d4a23a_prof);

        
        $__internal_cb59aba266b304807daa5331f6ed67c19d504b0fd91fd7f0776747866c5c95ad->leave($__internal_cb59aba266b304807daa5331f6ed67c19d504b0fd91fd7f0776747866c5c95ad_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68d8bcd75393f35232df1a0ff39efa7cfabac2fa91c6c02230560716b25f4312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d8bcd75393f35232df1a0ff39efa7cfabac2fa91c6c02230560716b25f4312->enter($__internal_68d8bcd75393f35232df1a0ff39efa7cfabac2fa91c6c02230560716b25f4312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fffa720311fba71ced9d54835ac3eb5f2c833f5b95eaa3fa10d7369a3f8fb4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffa720311fba71ced9d54835ac3eb5f2c833f5b95eaa3fa10d7369a3f8fb4d0->enter($__internal_fffa720311fba71ced9d54835ac3eb5f2c833f5b95eaa3fa10d7369a3f8fb4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array())) ? ("red") : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array()) + twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, ((($context["error_count"] ?? null)) ? (($context["error_count"] ?? null)) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 24
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 34
            echo "
        ";
            // line 35
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_fffa720311fba71ced9d54835ac3eb5f2c833f5b95eaa3fa10d7369a3f8fb4d0->leave($__internal_fffa720311fba71ced9d54835ac3eb5f2c833f5b95eaa3fa10d7369a3f8fb4d0_prof);

        
        $__internal_68d8bcd75393f35232df1a0ff39efa7cfabac2fa91c6c02230560716b25f4312->leave($__internal_68d8bcd75393f35232df1a0ff39efa7cfabac2fa91c6c02230560716b25f4312_prof);

    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d13fa8f95d72136e536cd8de2bad32caf74cd6278b689120cd40e3de6ea6f89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13fa8f95d72136e536cd8de2bad32caf74cd6278b689120cd40e3de6ea6f89e->enter($__internal_d13fa8f95d72136e536cd8de2bad32caf74cd6278b689120cd40e3de6ea6f89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eca52c5a0a5ffddb15e9e48ddc0281b834a9913f769775c51a39eddbf9935a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca52c5a0a5ffddb15e9e48ddc0281b834a9913f769775c51a39eddbf9935a17->enter($__internal_eca52c5a0a5ffddb15e9e48ddc0281b834a9913f769775c51a39eddbf9935a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 40
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array())) ? ("error") : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 41
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 43
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array()) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array()))) {
            // line 44
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array()) + twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array()));
            // line 45
            echo "            <span class=\"count\">
                <span>";
            // line 46
            echo twig_escape_filter($this->env, ($context["error_count"] ?? null), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 49
        echo "    </span>
";
        
        $__internal_eca52c5a0a5ffddb15e9e48ddc0281b834a9913f769775c51a39eddbf9935a17->leave($__internal_eca52c5a0a5ffddb15e9e48ddc0281b834a9913f769775c51a39eddbf9935a17_prof);

        
        $__internal_d13fa8f95d72136e536cd8de2bad32caf74cd6278b689120cd40e3de6ea6f89e->leave($__internal_d13fa8f95d72136e536cd8de2bad32caf74cd6278b689120cd40e3de6ea6f89e_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2183769fcadef7f505c5273315bb2a170b30f13b91b290be19b81ad378641d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2183769fcadef7f505c5273315bb2a170b30f13b91b290be19b81ad378641d2e->enter($__internal_2183769fcadef7f505c5273315bb2a170b30f13b91b290be19b81ad378641d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_922fcd65905820f347447277c7d690d17d307f0e9d674dc866ed220c04a3a250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922fcd65905820f347447277c7d690d17d307f0e9d674dc866ed220c04a3a250->enter($__internal_922fcd65905820f347447277c7d690d17d307f0e9d674dc866ed220c04a3a250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "messages", array()))) {
            // line 54
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_922fcd65905820f347447277c7d690d17d307f0e9d674dc866ed220c04a3a250->leave($__internal_922fcd65905820f347447277c7d690d17d307f0e9d674dc866ed220c04a3a250_prof);

        
        $__internal_2183769fcadef7f505c5273315bb2a170b30f13b91b290be19b81ad378641d2e->leave($__internal_2183769fcadef7f505c5273315bb2a170b30f13b91b290be19b81ad378641d2e_prof);

    }

    // line 63
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_b6967dd0012d7cbbe3e61a1119dd983ae06e060fe4bb64026df3caad1f97c84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6967dd0012d7cbbe3e61a1119dd983ae06e060fe4bb64026df3caad1f97c84f->enter($__internal_b6967dd0012d7cbbe3e61a1119dd983ae06e060fe4bb64026df3caad1f97c84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_416c8411d0dd9f85db3f327e027dd8174f2c44b1d5795fb7600eaa23dd6e65f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416c8411d0dd9f85db3f327e027dd8174f2c44b1d5795fb7600eaa23dd6e65f1->enter($__internal_416c8411d0dd9f85db3f327e027dd8174f2c44b1d5795fb7600eaa23dd6e65f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 64
        echo "    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 86
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 89
                echo "            ";
                $context["messages_defined"] = twig_array_merge(($context["messages_defined"] ?? null), array(0 => $context["message"]));
                // line 90
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 91
                echo "            ";
                $context["messages_missing"] = twig_array_merge(($context["messages_missing"] ?? null), array(0 => $context["message"]));
                // line 92
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 93
                echo "            ";
                $context["messages_fallback"] = twig_array_merge(($context["messages_fallback"] ?? null), array(0 => $context["message"]));
                // line 94
                echo "        ";
            }
            // line 95
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages_defined"] ?? null)), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 106
        if (twig_test_empty(($context["messages_defined"] ?? null))) {
            // line 107
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 111
            echo "                    ";
            echo $context["helper"]->macro_render_table(($context["messages_defined"] ?? null));
            echo "
                ";
        }
        // line 113
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">";
        // line 117
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages_fallback"] ?? null)), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 125
        if (twig_test_empty(($context["messages_fallback"] ?? null))) {
            // line 126
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 130
            echo "                    ";
            echo $context["helper"]->macro_render_table(($context["messages_fallback"] ?? null));
            echo "
                ";
        }
        // line 132
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">";
        // line 136
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages_missing"] ?? null)), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 145
        if (twig_test_empty(($context["messages_missing"] ?? null))) {
            // line 146
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 150
            echo "                    ";
            echo $context["helper"]->macro_render_table(($context["messages_missing"] ?? null));
            echo "
                ";
        }
        // line 152
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_416c8411d0dd9f85db3f327e027dd8174f2c44b1d5795fb7600eaa23dd6e65f1->leave($__internal_416c8411d0dd9f85db3f327e027dd8174f2c44b1d5795fb7600eaa23dd6e65f1_prof);

        
        $__internal_b6967dd0012d7cbbe3e61a1119dd983ae06e060fe4bb64026df3caad1f97c84f->leave($__internal_b6967dd0012d7cbbe3e61a1119dd983ae06e060fe4bb64026df3caad1f97c84f_prof);

    }

    // line 157
    public function macro_render_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2fb6ab0f95148f56d317f8e8297038884269f2c6ccab3bee1c47978147215db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2fb6ab0f95148f56d317f8e8297038884269f2c6ccab3bee1c47978147215db0->enter($__internal_2fb6ab0f95148f56d317f8e8297038884269f2c6ccab3bee1c47978147215db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_88f54d63330f0165b4254dc791b843d396d918e5564a72ca052ec7dbf3e3b6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_88f54d63330f0165b4254dc791b843d396d918e5564a72ca052ec7dbf3e3b6be->enter($__internal_88f54d63330f0165b4254dc791b843d396d918e5564a72ca052ec7dbf3e3b6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 158
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 170
                echo "            <tr>
                <td class=\"font-normal text-small\">";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold\">";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "id", array()), "html", null, true);
                echo "

                    ";
                // line 177
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "transChoiceNumber", array()))) {
                    // line 178
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 180
                echo "
                    ";
                // line 181
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "parameters", array())) > 0)) {
                    // line 182
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 184
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "parameters", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 186
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["parameters"], 1));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "                        </div>
                    ";
                }
                // line 190
                echo "                </td>
                <td>";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "        </tbody>
    </table>
";
            
            $__internal_88f54d63330f0165b4254dc791b843d396d918e5564a72ca052ec7dbf3e3b6be->leave($__internal_88f54d63330f0165b4254dc791b843d396d918e5564a72ca052ec7dbf3e3b6be_prof);

            
            $__internal_2fb6ab0f95148f56d317f8e8297038884269f2c6ccab3bee1c47978147215db0->leave($__internal_2fb6ab0f95148f56d317f8e8297038884269f2c6ccab3bee1c47978147215db0_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 194,  504 => 191,  501 => 190,  497 => 188,  488 => 186,  484 => 185,  480 => 184,  474 => 182,  472 => 181,  469 => 180,  465 => 178,  463 => 177,  458 => 175,  453 => 173,  449 => 172,  445 => 171,  442 => 170,  425 => 169,  412 => 158,  394 => 157,  381 => 152,  375 => 150,  369 => 146,  367 => 145,  355 => 136,  349 => 132,  343 => 130,  337 => 126,  335 => 125,  324 => 117,  318 => 113,  312 => 111,  306 => 107,  304 => 106,  294 => 99,  289 => 96,  283 => 95,  280 => 94,  277 => 93,  274 => 92,  271 => 91,  268 => 90,  265 => 89,  262 => 88,  257 => 87,  254 => 86,  244 => 78,  236 => 73,  228 => 68,  222 => 64,  213 => 63,  199 => 59,  192 => 54,  189 => 53,  180 => 52,  169 => 49,  163 => 46,  160 => 45,  157 => 44,  155 => 43,  150 => 41,  143 => 40,  134 => 39,  121 => 35,  118 => 34,  112 => 31,  103 => 25,  99 => 24,  90 => 18,  86 => 17,  82 => 15,  80 => 14,  77 => 13,  71 => 11,  68 => 10,  66 => 9,  61 => 8,  58 => 7,  55 => 6,  46 => 5,  36 => 1,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countdefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countdefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countdefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ messages_defined|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_defined) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">{{ messages_fallback|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_fallback) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">{{ messages_missing|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_missing) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    {{ message.id }}

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td>{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
    }
}
