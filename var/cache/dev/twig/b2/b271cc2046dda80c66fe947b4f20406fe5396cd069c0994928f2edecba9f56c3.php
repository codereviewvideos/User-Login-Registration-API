<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5097f7149f8d37367546893210eab972b999495802fb82ea5d120a62bc722406 extends Twig_Template
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
        $__internal_ee87bec2fb74f021317b299b17c43608263a28e0935fe9098b7372757ac24667 = $this->env->getExtension("native_profiler");
        $__internal_ee87bec2fb74f021317b299b17c43608263a28e0935fe9098b7372757ac24667->enter($__internal_ee87bec2fb74f021317b299b17c43608263a28e0935fe9098b7372757ac24667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ee87bec2fb74f021317b299b17c43608263a28e0935fe9098b7372757ac24667->leave($__internal_ee87bec2fb74f021317b299b17c43608263a28e0935fe9098b7372757ac24667_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
