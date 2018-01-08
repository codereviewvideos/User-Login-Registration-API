<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6d2522a688bdc697b2dc6ffb447d38390bbf472a87425f4654c82e92b396be54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f70c8d99898ffeeecca0efd47a954ef51d92679519ebc77934d0b8c6748a62bc = $this->env->getExtension("native_profiler");
        $__internal_f70c8d99898ffeeecca0efd47a954ef51d92679519ebc77934d0b8c6748a62bc->enter($__internal_f70c8d99898ffeeecca0efd47a954ef51d92679519ebc77934d0b8c6748a62bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70c8d99898ffeeecca0efd47a954ef51d92679519ebc77934d0b8c6748a62bc->leave($__internal_f70c8d99898ffeeecca0efd47a954ef51d92679519ebc77934d0b8c6748a62bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6447cfa34ec1c0695ac10924872e9093ee7f310f1f76404c4f4fc78ae9739bd1 = $this->env->getExtension("native_profiler");
        $__internal_6447cfa34ec1c0695ac10924872e9093ee7f310f1f76404c4f4fc78ae9739bd1->enter($__internal_6447cfa34ec1c0695ac10924872e9093ee7f310f1f76404c4f4fc78ae9739bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6447cfa34ec1c0695ac10924872e9093ee7f310f1f76404c4f4fc78ae9739bd1->leave($__internal_6447cfa34ec1c0695ac10924872e9093ee7f310f1f76404c4f4fc78ae9739bd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
