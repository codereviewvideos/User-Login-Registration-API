<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_be53b4aaaa4e864647099fde7c817404642a249b498576441d0e7ffeca2aace7 extends Twig_Template
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
        $__internal_aa6211e7b8012d542f4acd008028a54623987b80d5f847cf613f84e3521c0c39 = $this->env->getExtension("native_profiler");
        $__internal_aa6211e7b8012d542f4acd008028a54623987b80d5f847cf613f84e3521c0c39->enter($__internal_aa6211e7b8012d542f4acd008028a54623987b80d5f847cf613f84e3521c0c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_aa6211e7b8012d542f4acd008028a54623987b80d5f847cf613f84e3521c0c39->leave($__internal_aa6211e7b8012d542f4acd008028a54623987b80d5f847cf613f84e3521c0c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
