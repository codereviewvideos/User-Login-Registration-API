<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a1ddccb3718fa828a8aeb75818b8b1fd339936f5edc2263499ae3a5f065c72cc extends Twig_Template
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
        $__internal_02c99d17be6b2c21aa49273e708444a2229700e8af9e421942fd4b18c679334f = $this->env->getExtension("native_profiler");
        $__internal_02c99d17be6b2c21aa49273e708444a2229700e8af9e421942fd4b18c679334f->enter($__internal_02c99d17be6b2c21aa49273e708444a2229700e8af9e421942fd4b18c679334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_02c99d17be6b2c21aa49273e708444a2229700e8af9e421942fd4b18c679334f->leave($__internal_02c99d17be6b2c21aa49273e708444a2229700e8af9e421942fd4b18c679334f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
