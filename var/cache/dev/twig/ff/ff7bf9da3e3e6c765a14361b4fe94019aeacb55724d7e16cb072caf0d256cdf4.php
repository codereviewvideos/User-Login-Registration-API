<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5771bf3eb2798446e2514f7a7bc87266194aa5def31a56abeb4a671f94f5b54d extends Twig_Template
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
        $__internal_71c50789656a83454da2f8751f05a61f543a694ff9b87d11002756b4387f1deb = $this->env->getExtension("native_profiler");
        $__internal_71c50789656a83454da2f8751f05a61f543a694ff9b87d11002756b4387f1deb->enter($__internal_71c50789656a83454da2f8751f05a61f543a694ff9b87d11002756b4387f1deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_71c50789656a83454da2f8751f05a61f543a694ff9b87d11002756b4387f1deb->leave($__internal_71c50789656a83454da2f8751f05a61f543a694ff9b87d11002756b4387f1deb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
