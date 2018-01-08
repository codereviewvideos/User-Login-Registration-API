<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4b052cb2d1c1ec6356b1e5e36176c03b304be19478f68f9fc1fc42c58fd30263 extends Twig_Template
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
        $__internal_5e3caaed89011d234d9ef687fc583a574cee2e7f0f33077e5650e21ef34d7f3f = $this->env->getExtension("native_profiler");
        $__internal_5e3caaed89011d234d9ef687fc583a574cee2e7f0f33077e5650e21ef34d7f3f->enter($__internal_5e3caaed89011d234d9ef687fc583a574cee2e7f0f33077e5650e21ef34d7f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5e3caaed89011d234d9ef687fc583a574cee2e7f0f33077e5650e21ef34d7f3f->leave($__internal_5e3caaed89011d234d9ef687fc583a574cee2e7f0f33077e5650e21ef34d7f3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
