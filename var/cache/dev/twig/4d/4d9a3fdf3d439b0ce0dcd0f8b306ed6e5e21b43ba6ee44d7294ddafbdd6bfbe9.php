<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_608887b5d4d6ae8eb385490a501118453ac7d9262c64db2ca0c61e9a7bba389d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_a311bb140222c8fc16909cf6b3ffd394196dc42f95f208883eb4fd865bf06763 = $this->env->getExtension("native_profiler");
        $__internal_a311bb140222c8fc16909cf6b3ffd394196dc42f95f208883eb4fd865bf06763->enter($__internal_a311bb140222c8fc16909cf6b3ffd394196dc42f95f208883eb4fd865bf06763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a311bb140222c8fc16909cf6b3ffd394196dc42f95f208883eb4fd865bf06763->leave($__internal_a311bb140222c8fc16909cf6b3ffd394196dc42f95f208883eb4fd865bf06763_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c815c27688e51d9c2a0199086acf7401bf2ece66df2231928adcae97e02f6b7 = $this->env->getExtension("native_profiler");
        $__internal_0c815c27688e51d9c2a0199086acf7401bf2ece66df2231928adcae97e02f6b7->enter($__internal_0c815c27688e51d9c2a0199086acf7401bf2ece66df2231928adcae97e02f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0c815c27688e51d9c2a0199086acf7401bf2ece66df2231928adcae97e02f6b7->leave($__internal_0c815c27688e51d9c2a0199086acf7401bf2ece66df2231928adcae97e02f6b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
