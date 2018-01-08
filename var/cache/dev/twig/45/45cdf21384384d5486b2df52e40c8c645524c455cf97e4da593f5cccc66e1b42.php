<?php

/* CsaGuzzleBundle:Calls:macros.html.twig */
class __TwigTemplate_0681eb3c135ed4756d063b0f9c7d05acb60fef3001b87b5be8d7e0d38d8d2a39 extends Twig_Template
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
        $__internal_aae82406cfc3f0d2e0aa62f236eb6a665eb98576a7a4654bf7e761b20ff3cf79 = $this->env->getExtension("native_profiler");
        $__internal_aae82406cfc3f0d2e0aa62f236eb6a665eb98576a7a4654bf7e761b20ff3cf79->enter($__internal_aae82406cfc3f0d2e0aa62f236eb6a665eb98576a7a4654bf7e761b20ff3cf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Calls:macros.html.twig"));

        // line 32
        echo "
";
        // line 42
        echo "
";
        // line 91
        echo "
";
        
        $__internal_aae82406cfc3f0d2e0aa62f236eb6a665eb98576a7a4654bf7e761b20ff3cf79->leave($__internal_aae82406cfc3f0d2e0aa62f236eb6a665eb98576a7a4654bf7e761b20ff3cf79_prof);

    }

    // line 1
    public function getrender_headers($__headers__ = null, $__uri__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "headers" => $__headers__,
            "uri" => $__uri__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_243dcc4b8000c9f0bc76e9326065072abd4c49c273b2309a0cd49d626b0d2622 = $this->env->getExtension("native_profiler");
            $__internal_243dcc4b8000c9f0bc76e9326065072abd4c49c273b2309a0cd49d626b0d2622->enter($__internal_243dcc4b8000c9f0bc76e9326065072abd4c49c273b2309a0cd49d626b0d2622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_headers"));

            // line 2
            echo "    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) ? $context["headers"] : $this->getContext($context, "headers")));
            foreach ($context['_seq'] as $context["header"] => $context["values"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 14
                if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                    // line 15
                    echo "                    <ul>
                        ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["values"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 17
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                    </ul>
                    ";
                } else {
                    // line 21
                    echo "                        ";
                    if (($context["header"] == "X-Debug-Token-Link")) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->shortenUri((isset($context["uri"]) ? $context["uri"] : $this->getContext($context, "uri"))), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["values"], 0, array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["values"], 0, array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["values"], 0, array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['header'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </table>
";
            
            $__internal_243dcc4b8000c9f0bc76e9326065072abd4c49c273b2309a0cd49d626b0d2622->leave($__internal_243dcc4b8000c9f0bc76e9326065072abd4c49c273b2309a0cd49d626b0d2622_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getrender_body($__body__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "body" => $__body__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_77f7978b1be451f0f236b7910f9a37b982c143eafe2c9ce48971c8145056a3f0 = $this->env->getExtension("native_profiler");
            $__internal_77f7978b1be451f0f236b7910f9a37b982c143eafe2c9ce48971c8145056a3f0->enter($__internal_77f7978b1be451f0f236b7910f9a37b982c143eafe2c9ce48971c8145056a3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_body"));

            // line 34
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")))) {
                // line 35
                echo "        <h4>Content</h4>

        ";
                // line 37
                $context["lang"] = $this->env->getExtension('csa_guzzle')->detectLang((isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")));
                // line 38
                echo "
        <pre><code class=\"language-";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->prettyPrint((isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")), (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang"))), "html", null, true);
                echo "</code></pre>
    ";
            }
            
            $__internal_77f7978b1be451f0f236b7910f9a37b982c143eafe2c9ce48971c8145056a3f0->leave($__internal_77f7978b1be451f0f236b7910f9a37b982c143eafe2c9ce48971c8145056a3f0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getrender_infos($__info__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "info" => $__info__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e87646564b928523c2bc5535ba8d98b8d445a59030fe4c7cb905eaed055fa997 = $this->env->getExtension("native_profiler");
            $__internal_e87646564b928523c2bc5535ba8d98b8d445a59030fe4c7cb905eaed055fa997->enter($__internal_e87646564b928523c2bc5535ba8d98b8d445a59030fe4c7cb905eaed055fa997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_infos"));

            // line 44
            echo "    ";
            if (((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")) && $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "total_time", array()))) {
                // line 45
                echo "        <h4>Time</h4>

        ";
                // line 47
                $context["wait_time"] = (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "namelookup_time", array()) + $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "connect_time", array())) + $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "redirect_time", array()));
                // line 48
                echo "        ";
                $context["process_time"] = ($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "total_time", array()) - (isset($context["wait_time"]) ? $context["wait_time"] : $this->getContext($context, "wait_time")));
                // line 49
                echo "
        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "total_time", array())), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "namelookup_time", array())), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "connect_time", array())), "html", null, true);
                echo "</td>
            </tr>
            ";
                // line 69
                if ($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "redirect_time", array())) {
                    // line 70
                    echo "                <tr>
                    <td>Redirect</td>
                    <td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "redirect_time", array())), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 75
                echo "            <tr>
                <td>Process</td>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('csa_guzzle')->formatDuration((isset($context["process_time"]) ? $context["process_time"] : $this->getContext($context, "process_time"))), "html", null, true);
                echo "</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: ";
                // line 82
                echo twig_escape_filter($this->env, (((isset($context["wait_time"]) ? $context["wait_time"] : $this->getContext($context, "wait_time")) / $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "total_time", array())) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                // line 85
                echo twig_escape_filter($this->env, (((isset($context["process_time"]) ? $context["process_time"] : $this->getContext($context, "process_time")) / $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "total_time", array())) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    ";
            }
            
            $__internal_e87646564b928523c2bc5535ba8d98b8d445a59030fe4c7cb905eaed055fa997->leave($__internal_e87646564b928523c2bc5535ba8d98b8d445a59030fe4c7cb905eaed055fa997_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getrender_curl($__curl__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "curl" => $__curl__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0240ce303df602df572d3b137ca529611fb8d96094f28c80042b40ecf0df42ec = $this->env->getExtension("native_profiler");
            $__internal_0240ce303df602df572d3b137ca529611fb8d96094f28c80042b40ecf0df42ec->enter($__internal_0240ce303df602df572d3b137ca529611fb8d96094f28c80042b40ecf0df42ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_curl"));

            // line 93
            echo "    <h4>cURL</h4>

    <pre><code>";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["curl"]) ? $context["curl"] : $this->getContext($context, "curl")), "html", null, true);
            echo "</code></pre>
";
            
            $__internal_0240ce303df602df572d3b137ca529611fb8d96094f28c80042b40ecf0df42ec->leave($__internal_0240ce303df602df572d3b137ca529611fb8d96094f28c80042b40ecf0df42ec_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Calls:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 95,  321 => 93,  306 => 92,  282 => 85,  276 => 82,  268 => 77,  264 => 75,  258 => 72,  254 => 70,  252 => 69,  247 => 67,  240 => 63,  233 => 59,  221 => 49,  218 => 48,  216 => 47,  212 => 45,  209 => 44,  194 => 43,  171 => 39,  168 => 38,  166 => 37,  162 => 35,  159 => 34,  144 => 33,  125 => 30,  117 => 27,  114 => 26,  108 => 24,  99 => 22,  96 => 21,  92 => 19,  83 => 17,  79 => 16,  76 => 15,  74 => 14,  69 => 12,  66 => 11,  62 => 10,  52 => 2,  36 => 1,  28 => 91,  25 => 42,  22 => 32,);
    }

    public function getSource()
    {
        return "{% macro render_headers(headers, uri) %}
    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        {% for header, values in headers %}
            <tr>
                <td>{{ header }}</td>
                <td>
                    {% if values|length > 1 %}
                    <ul>
                        {% for value in values %}
                            <li>{{ value }}</li>
                        {% endfor %}
                    </ul>
                    {% else %}
                        {% if header == 'X-Debug-Token-Link' %}
                            <a href=\"{{ uri|csa_guzzle_short_uri }}{{ values.0}}\" target=\"_blank\">{{ values.0 }}</a>
                        {% else %}
                            {{ values.0 }}
                        {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro render_body(body) %}
    {% if body is not empty %}
        <h4>Content</h4>

        {% set lang = csa_guzzle_detect_lang(body) %}

        <pre><code class=\"language-{{ lang }}\">{{ body|csa_guzzle_pretty_print(lang) }}</code></pre>
    {% endif %}
{% endmacro %}

{% macro render_infos(info) %}
    {% if info and info.total_time %}
        <h4>Time</h4>

        {% set wait_time = info.namelookup_time + info.connect_time + info.redirect_time %}
        {% set process_time = info.total_time - wait_time %}

        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>{{ info.total_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>{{ info.namelookup_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>{{ info.connect_time|csa_guzzle_format_duration }}</td>
            </tr>
            {% if info.redirect_time %}
                <tr>
                    <td>Redirect</td>
                    <td>{{ info.redirect_time|csa_guzzle_format_duration }}</td>
                </tr>
            {% endif %}
            <tr>
                <td>Process</td>
                <td>{{ process_time | csa_guzzle_format_duration }}</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: {{ wait_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: {{ process_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_curl(curl) %}
    <h4>cURL</h4>

    <pre><code>{{ curl }}</code></pre>
{% endmacro %}
";
    }
}
