<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4a89ef7d533d0b4ab45aabc445128d5749ae86d5b87e9adb7155167be9d1183b extends Twig_Template
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
        $__internal_3db2eaa2a75711eaa68a24835b7704f0e1b5165aa70d5ae90f9aa67ff6909d09 = $this->env->getExtension("native_profiler");
        $__internal_3db2eaa2a75711eaa68a24835b7704f0e1b5165aa70d5ae90f9aa67ff6909d09->enter($__internal_3db2eaa2a75711eaa68a24835b7704f0e1b5165aa70d5ae90f9aa67ff6909d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3db2eaa2a75711eaa68a24835b7704f0e1b5165aa70d5ae90f9aa67ff6909d09->leave($__internal_3db2eaa2a75711eaa68a24835b7704f0e1b5165aa70d5ae90f9aa67ff6909d09_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_28c0b4f6430a3e74e5217483ce58d0ee5358b3ed844f57025e1320a96bd38a98 = $this->env->getExtension("native_profiler");
        $__internal_28c0b4f6430a3e74e5217483ce58d0ee5358b3ed844f57025e1320a96bd38a98->enter($__internal_28c0b4f6430a3e74e5217483ce58d0ee5358b3ed844f57025e1320a96bd38a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28c0b4f6430a3e74e5217483ce58d0ee5358b3ed844f57025e1320a96bd38a98->leave($__internal_28c0b4f6430a3e74e5217483ce58d0ee5358b3ed844f57025e1320a96bd38a98_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_10a8ee076e3f20602080e8aaf80147f027a4a7d1dfbb7a2b847ed09bcee41fef = $this->env->getExtension("native_profiler");
        $__internal_10a8ee076e3f20602080e8aaf80147f027a4a7d1dfbb7a2b847ed09bcee41fef->enter($__internal_10a8ee076e3f20602080e8aaf80147f027a4a7d1dfbb7a2b847ed09bcee41fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_10a8ee076e3f20602080e8aaf80147f027a4a7d1dfbb7a2b847ed09bcee41fef->leave($__internal_10a8ee076e3f20602080e8aaf80147f027a4a7d1dfbb7a2b847ed09bcee41fef_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4923ad2287853bd8c75aa9c8ce42a9bcac4657525d7f730d13139c29bd298ab0 = $this->env->getExtension("native_profiler");
        $__internal_4923ad2287853bd8c75aa9c8ce42a9bcac4657525d7f730d13139c29bd298ab0->enter($__internal_4923ad2287853bd8c75aa9c8ce42a9bcac4657525d7f730d13139c29bd298ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4923ad2287853bd8c75aa9c8ce42a9bcac4657525d7f730d13139c29bd298ab0->leave($__internal_4923ad2287853bd8c75aa9c8ce42a9bcac4657525d7f730d13139c29bd298ab0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
