<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_be5849157bc74ad77fe3729ccd75ace005bc9fd2bb58891f9f544e81b32cbbe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_c5a927850c5b799509b038caf0d35635abbe759940223d545bc90dbffa212693 = $this->env->getExtension("native_profiler");
        $__internal_c5a927850c5b799509b038caf0d35635abbe759940223d545bc90dbffa212693->enter($__internal_c5a927850c5b799509b038caf0d35635abbe759940223d545bc90dbffa212693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a927850c5b799509b038caf0d35635abbe759940223d545bc90dbffa212693->leave($__internal_c5a927850c5b799509b038caf0d35635abbe759940223d545bc90dbffa212693_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6428589d68a411cfdb26f7dccf2da18f9bd7bed1426e91f3205b701ab9d2651f = $this->env->getExtension("native_profiler");
        $__internal_6428589d68a411cfdb26f7dccf2da18f9bd7bed1426e91f3205b701ab9d2651f->enter($__internal_6428589d68a411cfdb26f7dccf2da18f9bd7bed1426e91f3205b701ab9d2651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6428589d68a411cfdb26f7dccf2da18f9bd7bed1426e91f3205b701ab9d2651f->leave($__internal_6428589d68a411cfdb26f7dccf2da18f9bd7bed1426e91f3205b701ab9d2651f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
