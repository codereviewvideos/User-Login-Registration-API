<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0d5aa311aa4c229e207190f54b4de827053e4477f77c558f8d945f26e185df59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4df9543a8876f9a67dd30af7ddc9ee9bf1a7e5e1bd1fe40c669543a2ce0dd27b = $this->env->getExtension("native_profiler");
        $__internal_4df9543a8876f9a67dd30af7ddc9ee9bf1a7e5e1bd1fe40c669543a2ce0dd27b->enter($__internal_4df9543a8876f9a67dd30af7ddc9ee9bf1a7e5e1bd1fe40c669543a2ce0dd27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df9543a8876f9a67dd30af7ddc9ee9bf1a7e5e1bd1fe40c669543a2ce0dd27b->leave($__internal_4df9543a8876f9a67dd30af7ddc9ee9bf1a7e5e1bd1fe40c669543a2ce0dd27b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd541d274d1d78e64ae1cdce56ec40d180128553c4e92e839134c59421788b8e = $this->env->getExtension("native_profiler");
        $__internal_dd541d274d1d78e64ae1cdce56ec40d180128553c4e92e839134c59421788b8e->enter($__internal_dd541d274d1d78e64ae1cdce56ec40d180128553c4e92e839134c59421788b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dd541d274d1d78e64ae1cdce56ec40d180128553c4e92e839134c59421788b8e->leave($__internal_dd541d274d1d78e64ae1cdce56ec40d180128553c4e92e839134c59421788b8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
