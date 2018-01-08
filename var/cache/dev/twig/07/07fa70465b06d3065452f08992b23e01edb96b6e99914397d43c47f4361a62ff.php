<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d6b144967ffb020d10d1ce864a5b50d70ea016c98d5bf49a89fafc03296d8038 extends Twig_Template
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
        $__internal_3a3fd2e2a44436a5333ec26e3ff2a6a6b442971dcaae78492c7baae807203382 = $this->env->getExtension("native_profiler");
        $__internal_3a3fd2e2a44436a5333ec26e3ff2a6a6b442971dcaae78492c7baae807203382->enter($__internal_3a3fd2e2a44436a5333ec26e3ff2a6a6b442971dcaae78492c7baae807203382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3a3fd2e2a44436a5333ec26e3ff2a6a6b442971dcaae78492c7baae807203382->leave($__internal_3a3fd2e2a44436a5333ec26e3ff2a6a6b442971dcaae78492c7baae807203382_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
