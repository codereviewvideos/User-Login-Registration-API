<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_99015dc7807827f5ba562491cbcdb77ee4ee18b61864a1b6c2551ffd9d1f3ae2 extends Twig_Template
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
        $__internal_a6ea37bf211f628fd254cd91bdde6f6ec49c5a85798a552ce3af456f665fb255 = $this->env->getExtension("native_profiler");
        $__internal_a6ea37bf211f628fd254cd91bdde6f6ec49c5a85798a552ce3af456f665fb255->enter($__internal_a6ea37bf211f628fd254cd91bdde6f6ec49c5a85798a552ce3af456f665fb255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a6ea37bf211f628fd254cd91bdde6f6ec49c5a85798a552ce3af456f665fb255->leave($__internal_a6ea37bf211f628fd254cd91bdde6f6ec49c5a85798a552ce3af456f665fb255_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
