<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_166aefbc4efd71b16b84d00edda01dadfa8b4f37572a1833f8b82fc5b480a43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ca84f1f4745cb841f018475167744f8b3202457ebe4532b59df0b998ac4c0160 = $this->env->getExtension("native_profiler");
        $__internal_ca84f1f4745cb841f018475167744f8b3202457ebe4532b59df0b998ac4c0160->enter($__internal_ca84f1f4745cb841f018475167744f8b3202457ebe4532b59df0b998ac4c0160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca84f1f4745cb841f018475167744f8b3202457ebe4532b59df0b998ac4c0160->leave($__internal_ca84f1f4745cb841f018475167744f8b3202457ebe4532b59df0b998ac4c0160_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abe6baf8899c35e0b590057b1d768091e49d2f7247adeb77ba50f7c5ae8377b0 = $this->env->getExtension("native_profiler");
        $__internal_abe6baf8899c35e0b590057b1d768091e49d2f7247adeb77ba50f7c5ae8377b0->enter($__internal_abe6baf8899c35e0b590057b1d768091e49d2f7247adeb77ba50f7c5ae8377b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_abe6baf8899c35e0b590057b1d768091e49d2f7247adeb77ba50f7c5ae8377b0->leave($__internal_abe6baf8899c35e0b590057b1d768091e49d2f7247adeb77ba50f7c5ae8377b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d2cde16dc4c00630f745f86d14cecef0c79b3bcac99f606435d096b98e55c13 = $this->env->getExtension("native_profiler");
        $__internal_7d2cde16dc4c00630f745f86d14cecef0c79b3bcac99f606435d096b98e55c13->enter($__internal_7d2cde16dc4c00630f745f86d14cecef0c79b3bcac99f606435d096b98e55c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d2cde16dc4c00630f745f86d14cecef0c79b3bcac99f606435d096b98e55c13->leave($__internal_7d2cde16dc4c00630f745f86d14cecef0c79b3bcac99f606435d096b98e55c13_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39a585d28cff67790c9df1ee5b708c2d0b6bb2405a173ca3cf6edc44255776a4 = $this->env->getExtension("native_profiler");
        $__internal_39a585d28cff67790c9df1ee5b708c2d0b6bb2405a173ca3cf6edc44255776a4->enter($__internal_39a585d28cff67790c9df1ee5b708c2d0b6bb2405a173ca3cf6edc44255776a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_39a585d28cff67790c9df1ee5b708c2d0b6bb2405a173ca3cf6edc44255776a4->leave($__internal_39a585d28cff67790c9df1ee5b708c2d0b6bb2405a173ca3cf6edc44255776a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
