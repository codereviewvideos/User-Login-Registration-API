<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3cfdb43f024a0db7dd8e8b5191c3b32c09e3ba3bb7738c121504925a68b44ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_01e0437dbca03987fbf64e4fff03e88cfce210da3d2011a81665fa873c0fae14 = $this->env->getExtension("native_profiler");
        $__internal_01e0437dbca03987fbf64e4fff03e88cfce210da3d2011a81665fa873c0fae14->enter($__internal_01e0437dbca03987fbf64e4fff03e88cfce210da3d2011a81665fa873c0fae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01e0437dbca03987fbf64e4fff03e88cfce210da3d2011a81665fa873c0fae14->leave($__internal_01e0437dbca03987fbf64e4fff03e88cfce210da3d2011a81665fa873c0fae14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bcdb18ceb8b818ccd2773dc82a0ffaa9120276bd75a8af9f8890bdabf16b718 = $this->env->getExtension("native_profiler");
        $__internal_4bcdb18ceb8b818ccd2773dc82a0ffaa9120276bd75a8af9f8890bdabf16b718->enter($__internal_4bcdb18ceb8b818ccd2773dc82a0ffaa9120276bd75a8af9f8890bdabf16b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4bcdb18ceb8b818ccd2773dc82a0ffaa9120276bd75a8af9f8890bdabf16b718->leave($__internal_4bcdb18ceb8b818ccd2773dc82a0ffaa9120276bd75a8af9f8890bdabf16b718_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
