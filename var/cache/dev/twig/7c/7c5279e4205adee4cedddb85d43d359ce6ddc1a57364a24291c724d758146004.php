<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b43043d21b0584d6a88217cff9d509f8a507b5899140354b6a539f1c8c3e913c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8237deda4281f7a1d80cfeaf7f97755b9cb4c0b43a1c045b589b5462b96ffd3 = $this->env->getExtension("native_profiler");
        $__internal_b8237deda4281f7a1d80cfeaf7f97755b9cb4c0b43a1c045b589b5462b96ffd3->enter($__internal_b8237deda4281f7a1d80cfeaf7f97755b9cb4c0b43a1c045b589b5462b96ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8237deda4281f7a1d80cfeaf7f97755b9cb4c0b43a1c045b589b5462b96ffd3->leave($__internal_b8237deda4281f7a1d80cfeaf7f97755b9cb4c0b43a1c045b589b5462b96ffd3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fc67558e58be737fa8bf7ebc62237f711f9072040d1f6a9ac00184249a384dd = $this->env->getExtension("native_profiler");
        $__internal_7fc67558e58be737fa8bf7ebc62237f711f9072040d1f6a9ac00184249a384dd->enter($__internal_7fc67558e58be737fa8bf7ebc62237f711f9072040d1f6a9ac00184249a384dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7fc67558e58be737fa8bf7ebc62237f711f9072040d1f6a9ac00184249a384dd->leave($__internal_7fc67558e58be737fa8bf7ebc62237f711f9072040d1f6a9ac00184249a384dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
