<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_6ae43eee89d2da389d920064e9d74dd45f8b8ca710bb30a51b3330d2fa6340d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7af3c4469fcf7b6eb5d892db9239951c334c81771c34ff7c9c76750264f352df = $this->env->getExtension("native_profiler");
        $__internal_7af3c4469fcf7b6eb5d892db9239951c334c81771c34ff7c9c76750264f352df->enter($__internal_7af3c4469fcf7b6eb5d892db9239951c334c81771c34ff7c9c76750264f352df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af3c4469fcf7b6eb5d892db9239951c334c81771c34ff7c9c76750264f352df->leave($__internal_7af3c4469fcf7b6eb5d892db9239951c334c81771c34ff7c9c76750264f352df_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a3e27eb0938917dec2884a1a9a617d69cd47e67ba73a8e74d8ea7eae37fe13d = $this->env->getExtension("native_profiler");
        $__internal_6a3e27eb0938917dec2884a1a9a617d69cd47e67ba73a8e74d8ea7eae37fe13d->enter($__internal_6a3e27eb0938917dec2884a1a9a617d69cd47e67ba73a8e74d8ea7eae37fe13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_6a3e27eb0938917dec2884a1a9a617d69cd47e67ba73a8e74d8ea7eae37fe13d->leave($__internal_6a3e27eb0938917dec2884a1a9a617d69cd47e67ba73a8e74d8ea7eae37fe13d_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
";
    }
}
