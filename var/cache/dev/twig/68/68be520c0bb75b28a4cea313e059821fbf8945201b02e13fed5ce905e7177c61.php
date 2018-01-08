<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_22bdad9e95ef309589b642769a388ba7911a80f41c9df51259a6e24bd3cbe233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b00598475b683176fa8c563b90aa56d24d65fb6b66821a4463a6816a92ad72d6 = $this->env->getExtension("native_profiler");
        $__internal_b00598475b683176fa8c563b90aa56d24d65fb6b66821a4463a6816a92ad72d6->enter($__internal_b00598475b683176fa8c563b90aa56d24d65fb6b66821a4463a6816a92ad72d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00598475b683176fa8c563b90aa56d24d65fb6b66821a4463a6816a92ad72d6->leave($__internal_b00598475b683176fa8c563b90aa56d24d65fb6b66821a4463a6816a92ad72d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13f666ce134da17438f8029fd5f9dd4a3258637bbeca4533261acbb7ecbd4e43 = $this->env->getExtension("native_profiler");
        $__internal_13f666ce134da17438f8029fd5f9dd4a3258637bbeca4533261acbb7ecbd4e43->enter($__internal_13f666ce134da17438f8029fd5f9dd4a3258637bbeca4533261acbb7ecbd4e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_13f666ce134da17438f8029fd5f9dd4a3258637bbeca4533261acbb7ecbd4e43->leave($__internal_13f666ce134da17438f8029fd5f9dd4a3258637bbeca4533261acbb7ecbd4e43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
