<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1feb36f3d6fded5cb4c2f76685a7151ac3d197bdb74cdacdf9c6ca40dc2868b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c3d0a0eaac97c252e195916c237bce40ce1954a9e1b25d4773d4ff5083d9ea0b = $this->env->getExtension("native_profiler");
        $__internal_c3d0a0eaac97c252e195916c237bce40ce1954a9e1b25d4773d4ff5083d9ea0b->enter($__internal_c3d0a0eaac97c252e195916c237bce40ce1954a9e1b25d4773d4ff5083d9ea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d0a0eaac97c252e195916c237bce40ce1954a9e1b25d4773d4ff5083d9ea0b->leave($__internal_c3d0a0eaac97c252e195916c237bce40ce1954a9e1b25d4773d4ff5083d9ea0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d665369eca1b6a4d96e943946dbd1026d553d66ade9465c0e3383e0e7a6e8ec = $this->env->getExtension("native_profiler");
        $__internal_8d665369eca1b6a4d96e943946dbd1026d553d66ade9465c0e3383e0e7a6e8ec->enter($__internal_8d665369eca1b6a4d96e943946dbd1026d553d66ade9465c0e3383e0e7a6e8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8d665369eca1b6a4d96e943946dbd1026d553d66ade9465c0e3383e0e7a6e8ec->leave($__internal_8d665369eca1b6a4d96e943946dbd1026d553d66ade9465c0e3383e0e7a6e8ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
