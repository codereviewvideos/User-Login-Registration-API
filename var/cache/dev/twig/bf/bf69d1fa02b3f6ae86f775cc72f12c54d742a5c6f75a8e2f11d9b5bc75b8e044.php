<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ed3931d7d9ed57e83dbca234ab15502d53632dc46092d046592a22d9edb798d7 extends Twig_Template
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
        $__internal_0807dec7066adae643d6bf0f4c59a3b1d64faf6f6accd8d615d977bf8755b407 = $this->env->getExtension("native_profiler");
        $__internal_0807dec7066adae643d6bf0f4c59a3b1d64faf6f6accd8d615d977bf8755b407->enter($__internal_0807dec7066adae643d6bf0f4c59a3b1d64faf6f6accd8d615d977bf8755b407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0807dec7066adae643d6bf0f4c59a3b1d64faf6f6accd8d615d977bf8755b407->leave($__internal_0807dec7066adae643d6bf0f4c59a3b1d64faf6f6accd8d615d977bf8755b407_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
