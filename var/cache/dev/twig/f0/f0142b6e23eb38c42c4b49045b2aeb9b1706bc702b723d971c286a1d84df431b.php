<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2290703b7daf5f2c4fdaa8ef6c31251fee59a56e756d0fd426f481568c70548b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db5d816790b6f38a40ccec0b9694ef7fc83878a84e10e7b59f54337540b9c527 = $this->env->getExtension("native_profiler");
        $__internal_db5d816790b6f38a40ccec0b9694ef7fc83878a84e10e7b59f54337540b9c527->enter($__internal_db5d816790b6f38a40ccec0b9694ef7fc83878a84e10e7b59f54337540b9c527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_db5d816790b6f38a40ccec0b9694ef7fc83878a84e10e7b59f54337540b9c527->leave($__internal_db5d816790b6f38a40ccec0b9694ef7fc83878a84e10e7b59f54337540b9c527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
