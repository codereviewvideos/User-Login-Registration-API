<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7740c385db9647ea14a7a91f8f6246393c3b9944e7412ae0d6910241ea8cd9de extends Twig_Template
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
        $__internal_1a4897be36cc4e4e69ac6d0303fee86a2293c42d1558d69e9fbd8e445ca83db8 = $this->env->getExtension("native_profiler");
        $__internal_1a4897be36cc4e4e69ac6d0303fee86a2293c42d1558d69e9fbd8e445ca83db8->enter($__internal_1a4897be36cc4e4e69ac6d0303fee86a2293c42d1558d69e9fbd8e445ca83db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1a4897be36cc4e4e69ac6d0303fee86a2293c42d1558d69e9fbd8e445ca83db8->leave($__internal_1a4897be36cc4e4e69ac6d0303fee86a2293c42d1558d69e9fbd8e445ca83db8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
