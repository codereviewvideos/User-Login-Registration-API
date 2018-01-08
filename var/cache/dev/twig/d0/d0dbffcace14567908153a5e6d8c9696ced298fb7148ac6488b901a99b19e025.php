<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e1ef59e2c1f356d3ee0b78ebda0ce72aedceb8efc9618bf5da1b5536f939a816 extends Twig_Template
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
        $__internal_e39bdc8c030915fcbedd1224ee8ac6152d57462a3f9d98d7c12fe827d49ba54b = $this->env->getExtension("native_profiler");
        $__internal_e39bdc8c030915fcbedd1224ee8ac6152d57462a3f9d98d7c12fe827d49ba54b->enter($__internal_e39bdc8c030915fcbedd1224ee8ac6152d57462a3f9d98d7c12fe827d49ba54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e39bdc8c030915fcbedd1224ee8ac6152d57462a3f9d98d7c12fe827d49ba54b->leave($__internal_e39bdc8c030915fcbedd1224ee8ac6152d57462a3f9d98d7c12fe827d49ba54b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
