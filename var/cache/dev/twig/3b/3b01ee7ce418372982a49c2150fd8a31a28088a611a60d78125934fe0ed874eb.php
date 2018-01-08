<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d426e84a2e55a807050e13b7528e5e6fa6eab688a18c445409ef1f6529217b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_53d6467ce153af45826a6199d5e9d57de6df6bad4ce55f300b9e10792dc1125f = $this->env->getExtension("native_profiler");
        $__internal_53d6467ce153af45826a6199d5e9d57de6df6bad4ce55f300b9e10792dc1125f->enter($__internal_53d6467ce153af45826a6199d5e9d57de6df6bad4ce55f300b9e10792dc1125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d6467ce153af45826a6199d5e9d57de6df6bad4ce55f300b9e10792dc1125f->leave($__internal_53d6467ce153af45826a6199d5e9d57de6df6bad4ce55f300b9e10792dc1125f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e41c2f2dee987ac6c234272cd333b9d6906982d42fedbfb8e6152d05efc933f = $this->env->getExtension("native_profiler");
        $__internal_2e41c2f2dee987ac6c234272cd333b9d6906982d42fedbfb8e6152d05efc933f->enter($__internal_2e41c2f2dee987ac6c234272cd333b9d6906982d42fedbfb8e6152d05efc933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2e41c2f2dee987ac6c234272cd333b9d6906982d42fedbfb8e6152d05efc933f->leave($__internal_2e41c2f2dee987ac6c234272cd333b9d6906982d42fedbfb8e6152d05efc933f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
