<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_6f6950d88d7236db5ab24f38e9d005734a21a1ead86f3b844a7365fcc4d52dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_992dabe0b254c0c618c080736825075bdc67d416f464d2cb7c32bae27ab88b44 = $this->env->getExtension("native_profiler");
        $__internal_992dabe0b254c0c618c080736825075bdc67d416f464d2cb7c32bae27ab88b44->enter($__internal_992dabe0b254c0c618c080736825075bdc67d416f464d2cb7c32bae27ab88b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_992dabe0b254c0c618c080736825075bdc67d416f464d2cb7c32bae27ab88b44->leave($__internal_992dabe0b254c0c618c080736825075bdc67d416f464d2cb7c32bae27ab88b44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83e449ebdbca9b88ea0686356c0da3575ce76419619f925e7ac83d55faad3827 = $this->env->getExtension("native_profiler");
        $__internal_83e449ebdbca9b88ea0686356c0da3575ce76419619f925e7ac83d55faad3827->enter($__internal_83e449ebdbca9b88ea0686356c0da3575ce76419619f925e7ac83d55faad3827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_83e449ebdbca9b88ea0686356c0da3575ce76419619f925e7ac83d55faad3827->leave($__internal_83e449ebdbca9b88ea0686356c0da3575ce76419619f925e7ac83d55faad3827_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
