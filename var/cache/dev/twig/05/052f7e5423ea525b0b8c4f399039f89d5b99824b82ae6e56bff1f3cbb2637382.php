<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c4c76be146236ec213bacd6bfdc255cbc2be849a1544554ab06ffa0fe11ed6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b4d0894d1dedbdc651976bd46c427021c067e0b0945476e74bd1be156524655b = $this->env->getExtension("native_profiler");
        $__internal_b4d0894d1dedbdc651976bd46c427021c067e0b0945476e74bd1be156524655b->enter($__internal_b4d0894d1dedbdc651976bd46c427021c067e0b0945476e74bd1be156524655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d0894d1dedbdc651976bd46c427021c067e0b0945476e74bd1be156524655b->leave($__internal_b4d0894d1dedbdc651976bd46c427021c067e0b0945476e74bd1be156524655b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54ed31fc90edb704efa8e495b1c7075f456a3395dad8655487915a653c3165f5 = $this->env->getExtension("native_profiler");
        $__internal_54ed31fc90edb704efa8e495b1c7075f456a3395dad8655487915a653c3165f5->enter($__internal_54ed31fc90edb704efa8e495b1c7075f456a3395dad8655487915a653c3165f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_54ed31fc90edb704efa8e495b1c7075f456a3395dad8655487915a653c3165f5->leave($__internal_54ed31fc90edb704efa8e495b1c7075f456a3395dad8655487915a653c3165f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
