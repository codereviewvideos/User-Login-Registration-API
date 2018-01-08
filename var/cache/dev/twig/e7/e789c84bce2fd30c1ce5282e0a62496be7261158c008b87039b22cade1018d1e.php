<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_26cc2f6754ea87a96850381665825cb34d7b096c1d8501977f20bc5d50c2262e extends Twig_Template
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
        $__internal_504268adf808b1e93bb251e84adb5103839fe1d0bf6010bc6d1c662e02296669 = $this->env->getExtension("native_profiler");
        $__internal_504268adf808b1e93bb251e84adb5103839fe1d0bf6010bc6d1c662e02296669->enter($__internal_504268adf808b1e93bb251e84adb5103839fe1d0bf6010bc6d1c662e02296669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_504268adf808b1e93bb251e84adb5103839fe1d0bf6010bc6d1c662e02296669->leave($__internal_504268adf808b1e93bb251e84adb5103839fe1d0bf6010bc6d1c662e02296669_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
