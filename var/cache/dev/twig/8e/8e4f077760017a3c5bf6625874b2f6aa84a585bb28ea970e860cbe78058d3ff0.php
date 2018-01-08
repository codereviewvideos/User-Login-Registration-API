<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0d3159dadaedfc922226a46986ebc6276baee9216ac8b5607143f9ab1e2c25c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_589961884ccdc2aa4943d302b0360eacfccaa7720ca20a7b64cc873806d2d2cc = $this->env->getExtension("native_profiler");
        $__internal_589961884ccdc2aa4943d302b0360eacfccaa7720ca20a7b64cc873806d2d2cc->enter($__internal_589961884ccdc2aa4943d302b0360eacfccaa7720ca20a7b64cc873806d2d2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_589961884ccdc2aa4943d302b0360eacfccaa7720ca20a7b64cc873806d2d2cc->leave($__internal_589961884ccdc2aa4943d302b0360eacfccaa7720ca20a7b64cc873806d2d2cc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_10964b0355213753c1ff755823aa7c63f0353347d54fd07bdb9ceb99a14cc0ed = $this->env->getExtension("native_profiler");
        $__internal_10964b0355213753c1ff755823aa7c63f0353347d54fd07bdb9ceb99a14cc0ed->enter($__internal_10964b0355213753c1ff755823aa7c63f0353347d54fd07bdb9ceb99a14cc0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_10964b0355213753c1ff755823aa7c63f0353347d54fd07bdb9ceb99a14cc0ed->leave($__internal_10964b0355213753c1ff755823aa7c63f0353347d54fd07bdb9ceb99a14cc0ed_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d513d7b3a2f331426af471e372bc52f392d1bd24b7bf3bb80548a0c5c8c52607 = $this->env->getExtension("native_profiler");
        $__internal_d513d7b3a2f331426af471e372bc52f392d1bd24b7bf3bb80548a0c5c8c52607->enter($__internal_d513d7b3a2f331426af471e372bc52f392d1bd24b7bf3bb80548a0c5c8c52607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d513d7b3a2f331426af471e372bc52f392d1bd24b7bf3bb80548a0c5c8c52607->leave($__internal_d513d7b3a2f331426af471e372bc52f392d1bd24b7bf3bb80548a0c5c8c52607_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5289b2bf346cb8ded1ec1957421925796dbd826ec3a750235b073c02384c248d = $this->env->getExtension("native_profiler");
        $__internal_5289b2bf346cb8ded1ec1957421925796dbd826ec3a750235b073c02384c248d->enter($__internal_5289b2bf346cb8ded1ec1957421925796dbd826ec3a750235b073c02384c248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5289b2bf346cb8ded1ec1957421925796dbd826ec3a750235b073c02384c248d->leave($__internal_5289b2bf346cb8ded1ec1957421925796dbd826ec3a750235b073c02384c248d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
