<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_54b1575ffe008ef64c6c0255b8399aa5b927fa3e6e86094bddbcd7e1bbefbdce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b1f04368313810529b8efd3e67e4256fbaa90898a29a1a4f5ce8ff1fb2163350 = $this->env->getExtension("native_profiler");
        $__internal_b1f04368313810529b8efd3e67e4256fbaa90898a29a1a4f5ce8ff1fb2163350->enter($__internal_b1f04368313810529b8efd3e67e4256fbaa90898a29a1a4f5ce8ff1fb2163350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f04368313810529b8efd3e67e4256fbaa90898a29a1a4f5ce8ff1fb2163350->leave($__internal_b1f04368313810529b8efd3e67e4256fbaa90898a29a1a4f5ce8ff1fb2163350_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_230cf28d6e0f21881b83f7a19dcff1101a3d19bc03b5a62cb7f80af3de0f0161 = $this->env->getExtension("native_profiler");
        $__internal_230cf28d6e0f21881b83f7a19dcff1101a3d19bc03b5a62cb7f80af3de0f0161->enter($__internal_230cf28d6e0f21881b83f7a19dcff1101a3d19bc03b5a62cb7f80af3de0f0161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_230cf28d6e0f21881b83f7a19dcff1101a3d19bc03b5a62cb7f80af3de0f0161->leave($__internal_230cf28d6e0f21881b83f7a19dcff1101a3d19bc03b5a62cb7f80af3de0f0161_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
