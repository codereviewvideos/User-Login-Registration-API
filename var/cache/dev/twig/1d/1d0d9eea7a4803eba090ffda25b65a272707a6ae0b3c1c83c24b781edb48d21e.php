<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b6f011e1ff25b0960845a34063d8ceee224a981e91e67f7e52c775ba7ad17507 extends Twig_Template
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
        $__internal_6bbcbebd3532bf4c2bfd76bd67080f18d7f61d9da512834f31dee14d3725b3dc = $this->env->getExtension("native_profiler");
        $__internal_6bbcbebd3532bf4c2bfd76bd67080f18d7f61d9da512834f31dee14d3725b3dc->enter($__internal_6bbcbebd3532bf4c2bfd76bd67080f18d7f61d9da512834f31dee14d3725b3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6bbcbebd3532bf4c2bfd76bd67080f18d7f61d9da512834f31dee14d3725b3dc->leave($__internal_6bbcbebd3532bf4c2bfd76bd67080f18d7f61d9da512834f31dee14d3725b3dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
