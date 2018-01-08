<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_893661fe8f915247017da2be41ecd3849a4f12b0c8a3a6dc20fdad2d2c3a467e extends Twig_Template
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
        $__internal_a6946ab537f3bc4944fbd257e7b7c8c5d342ce0a28b0b46b7db55bfa85a6d7e3 = $this->env->getExtension("native_profiler");
        $__internal_a6946ab537f3bc4944fbd257e7b7c8c5d342ce0a28b0b46b7db55bfa85a6d7e3->enter($__internal_a6946ab537f3bc4944fbd257e7b7c8c5d342ce0a28b0b46b7db55bfa85a6d7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a6946ab537f3bc4944fbd257e7b7c8c5d342ce0a28b0b46b7db55bfa85a6d7e3->leave($__internal_a6946ab537f3bc4944fbd257e7b7c8c5d342ce0a28b0b46b7db55bfa85a6d7e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
