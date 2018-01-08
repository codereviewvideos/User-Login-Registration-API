<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f79380f43ddbaa84f8117ae3945549e4c7566704e9fe0510123df8f26a6554b1 extends Twig_Template
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
        $__internal_912de41e4f255aac9d8e6798aac452df18382cc8ba5a30d2350e89e912c6fb7e = $this->env->getExtension("native_profiler");
        $__internal_912de41e4f255aac9d8e6798aac452df18382cc8ba5a30d2350e89e912c6fb7e->enter($__internal_912de41e4f255aac9d8e6798aac452df18382cc8ba5a30d2350e89e912c6fb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_912de41e4f255aac9d8e6798aac452df18382cc8ba5a30d2350e89e912c6fb7e->leave($__internal_912de41e4f255aac9d8e6798aac452df18382cc8ba5a30d2350e89e912c6fb7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
