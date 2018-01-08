<?php

/* CsaGuzzleBundle:Calls:list.html.twig */
class __TwigTemplate_3096283854f04324b7ed449d8de1f6984d35745c0bebaf1cc08b43058e97f041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca9806e44b6b4a2df15ef73847b7a89a18491ebcd3e5dc7b98d0d0aeee662e0b = $this->env->getExtension("native_profiler");
        $__internal_ca9806e44b6b4a2df15ef73847b7a89a18491ebcd3e5dc7b98d0d0aeee662e0b->enter($__internal_ca9806e44b6b4a2df15ef73847b7a89a18491ebcd3e5dc7b98d0d0aeee662e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Calls:list.html.twig"));

        // line 1
        $context["macros"] = $this->loadTemplate("@CsaGuzzle/Calls/macros.html.twig", "CsaGuzzleBundle:Calls:list.html.twig", 1);
        // line 2
        echo "
<div class=\"accordion\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) ? $context["calls"] : $this->getContext($context, "calls")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 5
            echo "        <section class=\"call\">
            <header class=\"accordion-header ";
            // line 6
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["call"], "request", array()), "method", array())), "html", null, true);
            echo "\">
                <span class=\"method-name\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["call"], "request", array()), "method", array()), "html", null, true);
            echo "</span>
                ";
            // line 8
            if (($this->getAttribute($this->getAttribute($context["call"], "request", array()), "method", array()) == "GET")) {
                // line 9
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"path\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 11
                echo "                    <span class=\"path\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 13
            echo "                ";
            $context["statusCode"] = $this->getAttribute($context["call"], "httpCode", array());
            // line 14
            echo "                <span class=\"badge status-code ";
            echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->statusCodeClass((isset($context["statusCode"]) ? $context["statusCode"] : $this->getContext($context, "statusCode"))), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["statusCode"]) ? $context["statusCode"] : $this->getContext($context, "statusCode")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["call"], "response", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["call"], "response", array()), "reasonPhrase", array())) : ("Unknown error")), "html", null, true);
            echo "
                </span>
                ";
            // line 17
            if ($this->getAttribute($context["call"], "cache", array(), "any", true, true)) {
                echo "<span class=\"badge cache ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["call"], "cache", array())), "html", null, true);
                echo "\">Cache ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "cache", array()), "html", null, true);
                echo "</span>";
            }
            // line 18
            echo "                ";
            if ($this->getAttribute($context["call"], "mock", array(), "any", true, true)) {
                echo "<span class=\"badge mock ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["call"], "mock", array())), "html", null, true);
                echo "\">Mock ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "mock", array()), "html", null, true);
                echo "</span>";
            }
            // line 19
            echo "                ";
            if ($this->getAttribute($context["call"], "info", array())) {
                // line 20
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["call"], "info", array()), "total_time", array()) > 1)) {
                    // line 21
                    echo "                        ";
                    $context["duration_color"] = "error";
                    // line 22
                    echo "                    ";
                } elseif (($this->getAttribute($this->getAttribute($context["call"], "info", array()), "total_time", array()) < 0.2)) {
                    // line 23
                    echo "                        ";
                    $context["duration_color"] = "success";
                    // line 24
                    echo "                    ";
                } else {
                    // line 25
                    echo "                        ";
                    $context["duration_color"] = "warning";
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                    <span class=\"badge duration ";
                echo twig_escape_filter($this->env, (isset($context["duration_color"]) ? $context["duration_color"] : $this->getContext($context, "duration_color")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute($this->getAttribute($context["call"], "info", array()), "total_time", array())), "html", null, true);
                echo "</span>
                ";
            }
            // line 29
            echo "            </header>

            <div class=\"accordion-content";
            // line 31
            echo (($this->getAttribute($context["loop"], "first", array())) ? (" expanded") : (""));
            echo "\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            ";
            // line 36
            echo $context["macros"]->getrender_infos($this->getAttribute($context["call"], "info", array()));
            echo "
                            ";
            // line 37
            echo $context["macros"]->getrender_headers($this->getAttribute($this->getAttribute($context["call"], "request", array()), "headers", array()), $this->getAttribute($context["call"], "uri", array()));
            echo "
                            ";
            // line 38
            echo $context["macros"]->getrender_body($this->getAttribute($this->getAttribute($context["call"], "request", array()), "body", array()));
            echo "
                            ";
            // line 39
            if ($this->getAttribute($context["call"], "curl", array(), "any", true, true)) {
                // line 40
                echo "                                ";
                echo $context["macros"]->getrender_curl($this->getAttribute($context["call"], "curl", array()));
                echo "
                            ";
            }
            // line 42
            echo "                        </div>
                    </div>
                    ";
            // line 44
            if ($this->getAttribute($context["call"], "response", array(), "any", true, true)) {
                // line 45
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                ";
                // line 48
                echo $context["macros"]->getrender_headers($this->getAttribute($this->getAttribute($context["call"], "response", array()), "headers", array()), $this->getAttribute($context["call"], "uri", array()));
                echo "
                                ";
                // line 49
                echo $context["macros"]->getrender_body($this->getAttribute($this->getAttribute($context["call"], "response", array()), "body", array()));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 53
            echo "                </div>
            </div>
        </section>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>
";
        
        $__internal_ca9806e44b6b4a2df15ef73847b7a89a18491ebcd3e5dc7b98d0d0aeee662e0b->leave($__internal_ca9806e44b6b4a2df15ef73847b7a89a18491ebcd3e5dc7b98d0d0aeee662e0b_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Calls:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 57,  190 => 53,  183 => 49,  179 => 48,  174 => 45,  172 => 44,  168 => 42,  162 => 40,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  140 => 31,  136 => 29,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  116 => 23,  113 => 22,  110 => 21,  107 => 20,  104 => 19,  95 => 18,  87 => 17,  80 => 15,  75 => 14,  72 => 13,  66 => 11,  58 => 9,  56 => 8,  52 => 7,  48 => 6,  45 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import '@CsaGuzzle/Calls/macros.html.twig' as macros %}

<div class=\"accordion\">
    {% for call in calls %}
        <section class=\"call\">
            <header class=\"accordion-header {{ call.request.method|lower }}\">
                <span class=\"method-name\">{{ call.request.method }}</span>
                {% if call.request.method == 'GET' %}
                    <a href=\"{{ call.uri }}\" target=\"_blank\" class=\"path\">{{ call.uri }}</a>
                {% else %}
                    <span class=\"path\">{{ call.uri }}</span>
                {% endif %}
                {% set statusCode = call.httpCode %}
                <span class=\"badge status-code {{ statusCode|csa_guzzle_status_code_class }}\">
                    {{ statusCode }} - {{ call.response is defined ? call.response.reasonPhrase : 'Unknown error' }}
                </span>
                {% if call.cache is defined %}<span class=\"badge cache {{ call.cache|lower }}\">Cache {{ call.cache }}</span>{% endif %}
                {% if call.mock is defined %}<span class=\"badge mock {{ call.mock|lower }}\">Mock {{ call.mock }}</span>{% endif %}
                {% if call.info %}
                    {% if call.info.total_time > 1 %}
                        {% set duration_color = 'error' %}
                    {% elseif call.info.total_time < 0.2 %}
                        {% set duration_color = 'success' %}
                    {% else %}
                        {% set duration_color = 'warning' %}
                    {% endif %}
                    <span class=\"badge duration {{ duration_color }}\">{{ call.info.total_time|csa_guzzle_format_duration }}</span>
                {% endif %}
            </header>

            <div class=\"accordion-content{{ loop.first ? ' expanded': '' }}\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            {{ macros.render_infos(call.info) }}
                            {{ macros.render_headers(call.request.headers, call.uri) }}
                            {{ macros.render_body(call.request.body) }}
                            {% if call.curl is defined %}
                                {{ macros.render_curl(call.curl) }}
                            {% endif %}
                        </div>
                    </div>
                    {% if call.response is defined %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                {{ macros.render_headers(call.response.headers, call.uri) }}
                                {{ macros.render_body(call.response.body) }}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </section>
    {% endfor %}
</div>
";
    }
}
