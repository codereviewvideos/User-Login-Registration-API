<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_151ca0de5d52648e08793bf799668e4a6dc20509fe0d1b34e2ab150209f36261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4ab66f9a60979ec9293137d16cc6ca42cbaeb366005fd9a6c6ae5d02fb2e09a0 = $this->env->getExtension("native_profiler");
        $__internal_4ab66f9a60979ec9293137d16cc6ca42cbaeb366005fd9a6c6ae5d02fb2e09a0->enter($__internal_4ab66f9a60979ec9293137d16cc6ca42cbaeb366005fd9a6c6ae5d02fb2e09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab66f9a60979ec9293137d16cc6ca42cbaeb366005fd9a6c6ae5d02fb2e09a0->leave($__internal_4ab66f9a60979ec9293137d16cc6ca42cbaeb366005fd9a6c6ae5d02fb2e09a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d86177314007cd57cdb951dd4436652f102c19a4112049032be628469f3de32e = $this->env->getExtension("native_profiler");
        $__internal_d86177314007cd57cdb951dd4436652f102c19a4112049032be628469f3de32e->enter($__internal_d86177314007cd57cdb951dd4436652f102c19a4112049032be628469f3de32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d86177314007cd57cdb951dd4436652f102c19a4112049032be628469f3de32e->leave($__internal_d86177314007cd57cdb951dd4436652f102c19a4112049032be628469f3de32e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
