<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ef9f28c16386634e5eb444b0a1c70c0197e548ce9804f4788139a5122a023aa3 extends Twig_Template
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
        $__internal_f23f9acb82aaaf2158cf2b6d85e772e78d9dadcbef00abfc43694de8c20ddcb1 = $this->env->getExtension("native_profiler");
        $__internal_f23f9acb82aaaf2158cf2b6d85e772e78d9dadcbef00abfc43694de8c20ddcb1->enter($__internal_f23f9acb82aaaf2158cf2b6d85e772e78d9dadcbef00abfc43694de8c20ddcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f23f9acb82aaaf2158cf2b6d85e772e78d9dadcbef00abfc43694de8c20ddcb1->leave($__internal_f23f9acb82aaaf2158cf2b6d85e772e78d9dadcbef00abfc43694de8c20ddcb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
