<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_79f943d479488b2cf719eff1f720f1f975fd38629df3dda32b1a785e99459890 extends Twig_Template
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
        $__internal_bae1557292ab973ed359a2c91340ef91a4cc5e9e10f38a4d73103f0f1b613378 = $this->env->getExtension("native_profiler");
        $__internal_bae1557292ab973ed359a2c91340ef91a4cc5e9e10f38a4d73103f0f1b613378->enter($__internal_bae1557292ab973ed359a2c91340ef91a4cc5e9e10f38a4d73103f0f1b613378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bae1557292ab973ed359a2c91340ef91a4cc5e9e10f38a4d73103f0f1b613378->leave($__internal_bae1557292ab973ed359a2c91340ef91a4cc5e9e10f38a4d73103f0f1b613378_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
