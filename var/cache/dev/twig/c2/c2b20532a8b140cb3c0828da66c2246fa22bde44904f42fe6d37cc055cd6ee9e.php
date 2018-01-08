<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b22e17843085dacab34628e720159477b4061c1fd13941df2155c6aeec01e003 extends Twig_Template
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
        $__internal_cffce72bc31b1f94ccbb094b4b2d9a7691410e40967805dfb6245a71bf4fccf4 = $this->env->getExtension("native_profiler");
        $__internal_cffce72bc31b1f94ccbb094b4b2d9a7691410e40967805dfb6245a71bf4fccf4->enter($__internal_cffce72bc31b1f94ccbb094b4b2d9a7691410e40967805dfb6245a71bf4fccf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cffce72bc31b1f94ccbb094b4b2d9a7691410e40967805dfb6245a71bf4fccf4->leave($__internal_cffce72bc31b1f94ccbb094b4b2d9a7691410e40967805dfb6245a71bf4fccf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
