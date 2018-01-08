<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f6c33bf525f83631089ce957f7d9f7644f94779147e37a7ef34c4fd3c10b9cab extends Twig_Template
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
        $__internal_7dceb087d2ee05da103d19f10ce0b424dbf3bf489cef8059e1041e10d6a09807 = $this->env->getExtension("native_profiler");
        $__internal_7dceb087d2ee05da103d19f10ce0b424dbf3bf489cef8059e1041e10d6a09807->enter($__internal_7dceb087d2ee05da103d19f10ce0b424dbf3bf489cef8059e1041e10d6a09807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7dceb087d2ee05da103d19f10ce0b424dbf3bf489cef8059e1041e10d6a09807->leave($__internal_7dceb087d2ee05da103d19f10ce0b424dbf3bf489cef8059e1041e10d6a09807_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
