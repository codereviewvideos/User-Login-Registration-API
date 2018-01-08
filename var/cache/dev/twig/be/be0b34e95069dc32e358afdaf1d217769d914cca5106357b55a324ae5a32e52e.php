<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3563629450e38fe67eecb4b438c22219f844104374400bce164cc30464339527 extends Twig_Template
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
        $__internal_6ed5fd59ce2b624a9d24f7ac58efe0e4c9767a42b3b870c9c9f26cec154d2955 = $this->env->getExtension("native_profiler");
        $__internal_6ed5fd59ce2b624a9d24f7ac58efe0e4c9767a42b3b870c9c9f26cec154d2955->enter($__internal_6ed5fd59ce2b624a9d24f7ac58efe0e4c9767a42b3b870c9c9f26cec154d2955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6ed5fd59ce2b624a9d24f7ac58efe0e4c9767a42b3b870c9c9f26cec154d2955->leave($__internal_6ed5fd59ce2b624a9d24f7ac58efe0e4c9767a42b3b870c9c9f26cec154d2955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
