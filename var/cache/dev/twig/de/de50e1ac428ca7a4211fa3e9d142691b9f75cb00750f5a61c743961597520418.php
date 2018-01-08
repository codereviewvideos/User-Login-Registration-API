<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6f3fea6a425926d0f307e8e43056304a4a8e63ddf35dc47a97252738687f597c extends Twig_Template
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
        $__internal_554121f55f98b8f947c99a65ac5cf967bf349d401be900e863dd75eacad2011b = $this->env->getExtension("native_profiler");
        $__internal_554121f55f98b8f947c99a65ac5cf967bf349d401be900e863dd75eacad2011b->enter($__internal_554121f55f98b8f947c99a65ac5cf967bf349d401be900e863dd75eacad2011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_554121f55f98b8f947c99a65ac5cf967bf349d401be900e863dd75eacad2011b->leave($__internal_554121f55f98b8f947c99a65ac5cf967bf349d401be900e863dd75eacad2011b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
