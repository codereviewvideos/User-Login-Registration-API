<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_85067ac9c98cec3167c0b85056259743c893e668fae068cd0a56d05b88c54dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ee6546afb4b4e2da80b4ee6c7d345a338f660e94bab5b65a8891605a79df5b = $this->env->getExtension("native_profiler");
        $__internal_59ee6546afb4b4e2da80b4ee6c7d345a338f660e94bab5b65a8891605a79df5b->enter($__internal_59ee6546afb4b4e2da80b4ee6c7d345a338f660e94bab5b65a8891605a79df5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ee6546afb4b4e2da80b4ee6c7d345a338f660e94bab5b65a8891605a79df5b->leave($__internal_59ee6546afb4b4e2da80b4ee6c7d345a338f660e94bab5b65a8891605a79df5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2195d1cf66b4748fad468e867bb38b85e9b7c3f3c52f905d0b4919406bd819b7 = $this->env->getExtension("native_profiler");
        $__internal_2195d1cf66b4748fad468e867bb38b85e9b7c3f3c52f905d0b4919406bd819b7->enter($__internal_2195d1cf66b4748fad468e867bb38b85e9b7c3f3c52f905d0b4919406bd819b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2195d1cf66b4748fad468e867bb38b85e9b7c3f3c52f905d0b4919406bd819b7->leave($__internal_2195d1cf66b4748fad468e867bb38b85e9b7c3f3c52f905d0b4919406bd819b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
