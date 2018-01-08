<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bd0b5b822543a7ce9ae3daa5bd3ab8292758d1f120c42d79c63aec46bf016fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_16d418a828c50ce6a57a4efdfd46687231a9f0d7f01f074ee55e7f3a7f94aa98 = $this->env->getExtension("native_profiler");
        $__internal_16d418a828c50ce6a57a4efdfd46687231a9f0d7f01f074ee55e7f3a7f94aa98->enter($__internal_16d418a828c50ce6a57a4efdfd46687231a9f0d7f01f074ee55e7f3a7f94aa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d418a828c50ce6a57a4efdfd46687231a9f0d7f01f074ee55e7f3a7f94aa98->leave($__internal_16d418a828c50ce6a57a4efdfd46687231a9f0d7f01f074ee55e7f3a7f94aa98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_851217da465717ad944b7703e6fc84787e755c21bd4c253716fdca1bd7a5ad27 = $this->env->getExtension("native_profiler");
        $__internal_851217da465717ad944b7703e6fc84787e755c21bd4c253716fdca1bd7a5ad27->enter($__internal_851217da465717ad944b7703e6fc84787e755c21bd4c253716fdca1bd7a5ad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_851217da465717ad944b7703e6fc84787e755c21bd4c253716fdca1bd7a5ad27->leave($__internal_851217da465717ad944b7703e6fc84787e755c21bd4c253716fdca1bd7a5ad27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_512676cdb48b5ddab320ccce575f5bc37808e244051b05ee7e0adc608eaaab6b = $this->env->getExtension("native_profiler");
        $__internal_512676cdb48b5ddab320ccce575f5bc37808e244051b05ee7e0adc608eaaab6b->enter($__internal_512676cdb48b5ddab320ccce575f5bc37808e244051b05ee7e0adc608eaaab6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_512676cdb48b5ddab320ccce575f5bc37808e244051b05ee7e0adc608eaaab6b->leave($__internal_512676cdb48b5ddab320ccce575f5bc37808e244051b05ee7e0adc608eaaab6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fb54e1fdb38814e140c0128659bc841132018b81a6192141bd64fcec8f8eea5 = $this->env->getExtension("native_profiler");
        $__internal_9fb54e1fdb38814e140c0128659bc841132018b81a6192141bd64fcec8f8eea5->enter($__internal_9fb54e1fdb38814e140c0128659bc841132018b81a6192141bd64fcec8f8eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9fb54e1fdb38814e140c0128659bc841132018b81a6192141bd64fcec8f8eea5->leave($__internal_9fb54e1fdb38814e140c0128659bc841132018b81a6192141bd64fcec8f8eea5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
