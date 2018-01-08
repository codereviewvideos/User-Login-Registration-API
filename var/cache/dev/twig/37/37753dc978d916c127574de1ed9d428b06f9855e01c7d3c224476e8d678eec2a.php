<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_936e2f630a54a9185f590878f11c63d9b06d7adb4df1d2543da9e2379ac6ad6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6bc7a2b16d3834553dacfd0ed65454607ba580b6810c96a42ca3738367bdca48 = $this->env->getExtension("native_profiler");
        $__internal_6bc7a2b16d3834553dacfd0ed65454607ba580b6810c96a42ca3738367bdca48->enter($__internal_6bc7a2b16d3834553dacfd0ed65454607ba580b6810c96a42ca3738367bdca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc7a2b16d3834553dacfd0ed65454607ba580b6810c96a42ca3738367bdca48->leave($__internal_6bc7a2b16d3834553dacfd0ed65454607ba580b6810c96a42ca3738367bdca48_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1de8f60d36f2bb3f2f26cbf263c32846df4e8eafd9319805fb2afc9c69859795 = $this->env->getExtension("native_profiler");
        $__internal_1de8f60d36f2bb3f2f26cbf263c32846df4e8eafd9319805fb2afc9c69859795->enter($__internal_1de8f60d36f2bb3f2f26cbf263c32846df4e8eafd9319805fb2afc9c69859795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1de8f60d36f2bb3f2f26cbf263c32846df4e8eafd9319805fb2afc9c69859795->leave($__internal_1de8f60d36f2bb3f2f26cbf263c32846df4e8eafd9319805fb2afc9c69859795_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
