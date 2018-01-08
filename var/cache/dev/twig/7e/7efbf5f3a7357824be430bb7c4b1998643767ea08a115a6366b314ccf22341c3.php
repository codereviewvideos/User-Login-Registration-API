<?php

/* CsaGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_e3e90ac99311f1cd6da40ca2686144442520d30d2be612b2237db8ae07294696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CsaGuzzleBundle:Collector:guzzle.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be50dff2abbad5dc86c5000367e58b62dab0fb1fbf92db6fe0fd06aa5a48b4da = $this->env->getExtension("native_profiler");
        $__internal_be50dff2abbad5dc86c5000367e58b62dab0fb1fbf92db6fe0fd06aa5a48b4da->enter($__internal_be50dff2abbad5dc86c5000367e58b62dab0fb1fbf92db6fe0fd06aa5a48b4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be50dff2abbad5dc86c5000367e58b62dab0fb1fbf92db6fe0fd06aa5a48b4da->leave($__internal_be50dff2abbad5dc86c5000367e58b62dab0fb1fbf92db6fe0fd06aa5a48b4da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e65c33b9e911351fae8e19fbf7102a97b147ad23d08e655c7e2ba799b4e147ab = $this->env->getExtension("native_profiler");
        $__internal_e65c33b9e911351fae8e19fbf7102a97b147ad23d08e655c7e2ba799b4e147ab->enter($__internal_e65c33b9e911351fae8e19fbf7102a97b147ad23d08e655c7e2ba799b4e147ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        $context["callCount"] = twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()));
        // line 7
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "errors", array()));
        // line 8
        echo "
    ";
        // line 9
        $context["cacheHitCount"] = 0;
        // line 10
        echo "    ";
        $context["cacheMissCount"] = 0;
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            if (($this->getAttribute($context["call"], "cache", array(), "any", true, true) && ($this->getAttribute($context["call"], "cache", array()) == "HIT"))) {
                // line 13
                echo "        ";
                if (($this->getAttribute($context["call"], "cache", array()) == "HIT")) {
                    // line 14
                    echo "            ";
                    $context["cacheHitCount"] = ((isset($context["cacheHitCount"]) ? $context["cacheHitCount"] : $this->getContext($context, "cacheHitCount")) + 1);
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["cacheMissCount"] = ((isset($context["cacheMissCount"]) ? $context["cacheMissCount"] : $this->getContext($context, "cacheMissCount")) + 1);
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context["mockReplayCount"] = 0;
        // line 21
        echo "    ";
        $context["mockRecordCount"] = 0;
        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            if ($this->getAttribute($context["call"], "mock", array(), "any", true, true)) {
                // line 24
                echo "        ";
                if (($this->getAttribute($context["call"], "mock", array()) == "REPLAY")) {
                    // line 25
                    echo "            ";
                    $context["mockReplayCount"] = ((isset($context["mockReplayCount"]) ? $context["mockReplayCount"] : $this->getContext($context, "mockReplayCount")) + 1);
                    // line 26
                    echo "        ";
                } else {
                    // line 27
                    echo "            ";
                    $context["mockRecordCount"] = ((isset($context["mockRecordCount"]) ? $context["mockRecordCount"] : $this->getContext($context, "mockRecordCount")) + 1);
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        if (((isset($context["callCount"]) ? $context["callCount"] : $this->getContext($context, "callCount")) == 0)) {
            // line 32
            echo "        ";
            $context["color_code"] = "";
            // line 33
            echo "    ";
        } elseif (((isset($context["errorCount"]) ? $context["errorCount"] : $this->getContext($context, "errorCount")) > 0)) {
            // line 34
            echo "        ";
            $context["color_code"] = "red";
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        ";
            $context["color_code"] = "green";
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    ";
        // line 39
        ob_start();
        // line 40
        echo "        ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 41
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 28, "color" => "#3F3F3F"));
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["callCount"]) ? $context["callCount"] : $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["callCount"]) ? $context["callCount"] : $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        }
        // line 47
        echo "        ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) > 0)) {
            // line 48
            echo "            <span class=\"sf-toolbar-label\">
                in <span class=\"sf-toolbar-value\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array())), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 52
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
    ";
        // line 54
        ob_start();
        // line 55
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 57
        echo twig_escape_filter($this->env, ((isset($context["callCount"]) ? $context["callCount"] : $this->getContext($context, "callCount")) - (isset($context["errorCount"]) ? $context["errorCount"] : $this->getContext($context, "errorCount"))), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 59
        if ((isset($context["cacheHitCount"]) ? $context["cacheHitCount"] : $this->getContext($context, "cacheHitCount"))) {
            // line 60
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache HIT</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["cacheHitCount"]) ? $context["cacheHitCount"] : $this->getContext($context, "cacheHitCount")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 65
        echo "        ";
        if ((isset($context["cacheMissCount"]) ? $context["cacheMissCount"] : $this->getContext($context, "cacheMissCount"))) {
            // line 66
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache MISS</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["cacheMissCount"]) ? $context["cacheMissCount"] : $this->getContext($context, "cacheMissCount")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 71
        echo "        ";
        if ((isset($context["mockReplayCount"]) ? $context["mockReplayCount"] : $this->getContext($context, "mockReplayCount"))) {
            // line 72
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (replayed)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["mockReplayCount"]) ? $context["mockReplayCount"] : $this->getContext($context, "mockReplayCount")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 77
        echo "        ";
        if ((isset($context["mockRecordCount"]) ? $context["mockRecordCount"] : $this->getContext($context, "mockRecordCount"))) {
            // line 78
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (recorded)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["mockRecordCount"]) ? $context["mockRecordCount"] : $this->getContext($context, "mockRecordCount")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 83
        echo "        ";
        if ((isset($context["errorCount"]) ? $context["errorCount"] : $this->getContext($context, "errorCount"))) {
            // line 84
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["errorCount"]) ? $context["errorCount"] : $this->getContext($context, "errorCount")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 89
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 90
        echo "
    ";
        // line 91
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "guzzle", "status" => (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_e65c33b9e911351fae8e19fbf7102a97b147ad23d08e655c7e2ba799b4e147ab->leave($__internal_e65c33b9e911351fae8e19fbf7102a97b147ad23d08e655c7e2ba799b4e147ab_prof);

    }

    // line 94
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b7210294f1fa21cd9362919b2964d4b23e9a2da8766c8154792ae178a3938e9 = $this->env->getExtension("native_profiler");
        $__internal_9b7210294f1fa21cd9362919b2964d4b23e9a2da8766c8154792ae178a3938e9->enter($__internal_9b7210294f1fa21cd9362919b2964d4b23e9a2da8766c8154792ae178a3938e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 95
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/csaguzzle/css/screen.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/csaguzzle/js/guzzle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 98
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 99
        echo "    ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 100
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/csaguzzle/css/legacy.min.css"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/csaguzzle/js/legacy.min.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    ";
        }
        
        $__internal_9b7210294f1fa21cd9362919b2964d4b23e9a2da8766c8154792ae178a3938e9->leave($__internal_9b7210294f1fa21cd9362919b2964d4b23e9a2da8766c8154792ae178a3938e9_prof);

    }

    // line 106
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d7d21a40a4f2f483ca2e529cc9ccd60baf32107e7756ab793de0d2fd13f3b65 = $this->env->getExtension("native_profiler");
        $__internal_2d7d21a40a4f2f483ca2e529cc9ccd60baf32107e7756ab793de0d2fd13f3b65->enter($__internal_2d7d21a40a4f2f483ca2e529cc9ccd60baf32107e7756ab793de0d2fd13f3b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 107
        echo "    <span class=\"label ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "errors", array())) > 0)) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 109
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 110
        echo "            ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 111
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 30, "color" => "#3F3F3F"));
            echo "
            ";
        } else {
            // line 113
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            ";
        }
        // line 115
        echo "
        </span>
        <strong>";
        // line 117
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</strong>
        ";
        // line 118
        if ( !twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()))) {
            // line 119
            echo "            <span class=\"count\">
                <span>";
            // line 120
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
                ";
            // line 121
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) > 0)) {
                // line 122
                echo "                    <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array())), "html", null, true);
                echo "</span>
                ";
            }
            // line 124
            echo "            </span>
        ";
        }
        // line 126
        echo "    </span>
";
        
        $__internal_2d7d21a40a4f2f483ca2e529cc9ccd60baf32107e7756ab793de0d2fd13f3b65->leave($__internal_2d7d21a40a4f2f483ca2e529cc9ccd60baf32107e7756ab793de0d2fd13f3b65_prof);

    }

    // line 129
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56a281103bbae1d5a9f721093f37e9a1998490d49dec68b9b24e6e4dbd61d9a1 = $this->env->getExtension("native_profiler");
        $__internal_56a281103bbae1d5a9f721093f37e9a1998490d49dec68b9b24e6e4dbd61d9a1->enter($__internal_56a281103bbae1d5a9f721093f37e9a1998490d49dec68b9b24e6e4dbd61d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 130
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 131
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array())));
        echo "
";
        
        $__internal_56a281103bbae1d5a9f721093f37e9a1998490d49dec68b9b24e6e4dbd61d9a1->leave($__internal_56a281103bbae1d5a9f721093f37e9a1998490d49dec68b9b24e6e4dbd61d9a1_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 131,  405 => 130,  399 => 129,  391 => 126,  387 => 124,  381 => 122,  379 => 121,  375 => 120,  372 => 119,  370 => 118,  366 => 117,  362 => 115,  356 => 113,  350 => 111,  347 => 110,  345 => 109,  337 => 107,  331 => 106,  320 => 101,  315 => 100,  312 => 99,  310 => 98,  306 => 97,  302 => 96,  297 => 95,  291 => 94,  282 => 91,  279 => 90,  276 => 89,  270 => 86,  266 => 84,  263 => 83,  257 => 80,  253 => 78,  250 => 77,  244 => 74,  240 => 72,  237 => 71,  231 => 68,  227 => 66,  224 => 65,  218 => 62,  214 => 60,  212 => 59,  207 => 57,  203 => 55,  201 => 54,  198 => 53,  195 => 52,  189 => 49,  186 => 48,  183 => 47,  178 => 45,  173 => 44,  166 => 42,  161 => 41,  158 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  141 => 34,  138 => 33,  135 => 32,  133 => 31,  130 => 30,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  103 => 23,  100 => 22,  97 => 21,  95 => 20,  92 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% set cacheHitCount = 0 %}
    {% set cacheMissCount = 0 %}

    {% for call in collector.calls if call.cache is defined and call.cache == 'HIT' %}
        {% if call.cache == 'HIT' %}
            {% set cacheHitCount = cacheHitCount + 1 %}
        {% else %}
            {% set cacheMissCount = cacheMissCount + 1 %}
        {% endif %}
    {% endfor %}

    {% set mockReplayCount = 0 %}
    {% set mockRecordCount = 0 %}

    {% for call in collector.calls if call.mock is defined %}
        {% if call.mock == 'REPLAY' %}
            {% set mockReplayCount = mockReplayCount + 1 %}
        {% else %}
            {% set mockRecordCount = mockRecordCount + 1 %}
        {% endif %}
    {% endfor %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 28, color: '#3F3F3F' }) }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color_code }}\">{{ callCount }}</span>
        {% else %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
            <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% endif %}
        {% if collector.totalTime > 0 %}
            <span class=\"sf-toolbar-label\">
                in <span class=\"sf-toolbar-value\">{{ collector.totalTime|csa_guzzle_format_duration }}</span>
            </span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        {% if cacheHitCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache HIT</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ cacheHitCount }}</span>
            </div>
        {% endif %}
        {% if cacheMissCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache MISS</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ cacheMissCount }}</span>
            </div>
        {% endif %}
        {% if mockReplayCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (replayed)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ mockReplayCount }}</span>
            </div>
        {% endif %}
        {% if mockRecordCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (recorded)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ mockRecordCount }}</span>
            </div>
        {% endif %}
        {% if errorCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/screen.min.css') }}\">
    <script src=\"{{ asset('bundles/csaguzzle/js/guzzle.min.js') }}\"></script>
    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version == 1 %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/legacy.min.css') }}\">
        <script src=\"{{ asset('bundles/csaguzzle/js/legacy.min.js') }}\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {% set profiler_markup_version = profiler_markup_version|default(1) %}
            {% if profiler_markup_version == 1 %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 30, color: '#3F3F3F' }) }}
            {% else %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg')}}
            {% endif %}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        {% if collector.calls is not empty %}
            <span class=\"count\">
                <span>{{ collector.calls|length }}</span>
                {% if collector.totalTime > 0 %}
                    <span>{{ collector.totalTime|csa_guzzle_format_duration }}</span>
                {% endif %}
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
";
    }
}
