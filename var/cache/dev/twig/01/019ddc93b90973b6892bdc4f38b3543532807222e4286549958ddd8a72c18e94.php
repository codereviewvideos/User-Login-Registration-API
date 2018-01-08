<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_74e16b2d2ff208021521ed98c8ff95e392c6c4a23170d456a3b3d33cfe19af1e extends Twig_Template
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
        $__internal_9e2cf66f841ee045a3b77974c7008b532ae2d9277fc5871550e48d454c4e45b2 = $this->env->getExtension("native_profiler");
        $__internal_9e2cf66f841ee045a3b77974c7008b532ae2d9277fc5871550e48d454c4e45b2->enter($__internal_9e2cf66f841ee045a3b77974c7008b532ae2d9277fc5871550e48d454c4e45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9e2cf66f841ee045a3b77974c7008b532ae2d9277fc5871550e48d454c4e45b2->leave($__internal_9e2cf66f841ee045a3b77974c7008b532ae2d9277fc5871550e48d454c4e45b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
