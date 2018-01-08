<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4fdfd04b101281e9885730457c6fb18f62efd4473c08db54a4ef181e85717205 extends Twig_Template
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
        $__internal_02d506b298d11bdd23caace5bd0ae83de3705ac961de225a7a3e2b8b7556434a = $this->env->getExtension("native_profiler");
        $__internal_02d506b298d11bdd23caace5bd0ae83de3705ac961de225a7a3e2b8b7556434a->enter($__internal_02d506b298d11bdd23caace5bd0ae83de3705ac961de225a7a3e2b8b7556434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_02d506b298d11bdd23caace5bd0ae83de3705ac961de225a7a3e2b8b7556434a->leave($__internal_02d506b298d11bdd23caace5bd0ae83de3705ac961de225a7a3e2b8b7556434a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
