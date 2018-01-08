<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c45d1bfaab9bedaf5adf0179859d4b5c6655f77864a1e895ed29cdf1ae87c312 extends Twig_Template
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
        $__internal_576edefe216d7f04431508a2b2a5244d7cd26c9974e8c8763203345633100d62 = $this->env->getExtension("native_profiler");
        $__internal_576edefe216d7f04431508a2b2a5244d7cd26c9974e8c8763203345633100d62->enter($__internal_576edefe216d7f04431508a2b2a5244d7cd26c9974e8c8763203345633100d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_576edefe216d7f04431508a2b2a5244d7cd26c9974e8c8763203345633100d62->leave($__internal_576edefe216d7f04431508a2b2a5244d7cd26c9974e8c8763203345633100d62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
