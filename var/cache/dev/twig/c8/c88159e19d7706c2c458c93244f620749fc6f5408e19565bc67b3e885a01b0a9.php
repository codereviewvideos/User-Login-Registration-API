<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5efad56ca5d1dba110fcdeed50c3705d5b4f073c9c3862981dd73de8bc4a4673 extends Twig_Template
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
        $__internal_4d3cc69cc3ca6e9fa9a344c79bf7d8c999ef40c6f54152a2266bee77c27fa472 = $this->env->getExtension("native_profiler");
        $__internal_4d3cc69cc3ca6e9fa9a344c79bf7d8c999ef40c6f54152a2266bee77c27fa472->enter($__internal_4d3cc69cc3ca6e9fa9a344c79bf7d8c999ef40c6f54152a2266bee77c27fa472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4d3cc69cc3ca6e9fa9a344c79bf7d8c999ef40c6f54152a2266bee77c27fa472->leave($__internal_4d3cc69cc3ca6e9fa9a344c79bf7d8c999ef40c6f54152a2266bee77c27fa472_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
