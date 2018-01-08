<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_49ccd256ea81c504f7b5d5fe08a28f64a76bf522a5e890ed7db848774b594f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_744252a99e9b73ac97f80f8c98be6827b20bd12f2eb8c2dc243dd1c4b8c7f59c = $this->env->getExtension("native_profiler");
        $__internal_744252a99e9b73ac97f80f8c98be6827b20bd12f2eb8c2dc243dd1c4b8c7f59c->enter($__internal_744252a99e9b73ac97f80f8c98be6827b20bd12f2eb8c2dc243dd1c4b8c7f59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_744252a99e9b73ac97f80f8c98be6827b20bd12f2eb8c2dc243dd1c4b8c7f59c->leave($__internal_744252a99e9b73ac97f80f8c98be6827b20bd12f2eb8c2dc243dd1c4b8c7f59c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc79d9121f072f4e69b1e7c59ad631ae3067abc9630e7c7b86dc869876891e82 = $this->env->getExtension("native_profiler");
        $__internal_fc79d9121f072f4e69b1e7c59ad631ae3067abc9630e7c7b86dc869876891e82->enter($__internal_fc79d9121f072f4e69b1e7c59ad631ae3067abc9630e7c7b86dc869876891e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fc79d9121f072f4e69b1e7c59ad631ae3067abc9630e7c7b86dc869876891e82->leave($__internal_fc79d9121f072f4e69b1e7c59ad631ae3067abc9630e7c7b86dc869876891e82_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11bd9a9f4ea28b2b35c281a6c16694a8ba950c456ee32e4c47e8c6f9547ad40 = $this->env->getExtension("native_profiler");
        $__internal_b11bd9a9f4ea28b2b35c281a6c16694a8ba950c456ee32e4c47e8c6f9547ad40->enter($__internal_b11bd9a9f4ea28b2b35c281a6c16694a8ba950c456ee32e4c47e8c6f9547ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b11bd9a9f4ea28b2b35c281a6c16694a8ba950c456ee32e4c47e8c6f9547ad40->leave($__internal_b11bd9a9f4ea28b2b35c281a6c16694a8ba950c456ee32e4c47e8c6f9547ad40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
