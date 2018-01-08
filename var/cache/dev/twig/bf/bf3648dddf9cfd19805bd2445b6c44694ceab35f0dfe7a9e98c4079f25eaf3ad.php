<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9f1dc026515ddcbe79a6b14461f63ed7c420ded775e6c41468c821f5fcd9288d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_7060a9035c86e285917a0e509ae8ce173ed83a041177b58654cd685501cce386 = $this->env->getExtension("native_profiler");
        $__internal_7060a9035c86e285917a0e509ae8ce173ed83a041177b58654cd685501cce386->enter($__internal_7060a9035c86e285917a0e509ae8ce173ed83a041177b58654cd685501cce386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7060a9035c86e285917a0e509ae8ce173ed83a041177b58654cd685501cce386->leave($__internal_7060a9035c86e285917a0e509ae8ce173ed83a041177b58654cd685501cce386_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c16f1268bcf7a09294092cb711af966f4abcb3828a15b8900531605d91a6bbb8 = $this->env->getExtension("native_profiler");
        $__internal_c16f1268bcf7a09294092cb711af966f4abcb3828a15b8900531605d91a6bbb8->enter($__internal_c16f1268bcf7a09294092cb711af966f4abcb3828a15b8900531605d91a6bbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c16f1268bcf7a09294092cb711af966f4abcb3828a15b8900531605d91a6bbb8->leave($__internal_c16f1268bcf7a09294092cb711af966f4abcb3828a15b8900531605d91a6bbb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
