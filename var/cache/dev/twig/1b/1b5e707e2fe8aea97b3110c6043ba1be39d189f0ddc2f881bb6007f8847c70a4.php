<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_586ab26a9be4cd2b0c647b29362ea68366b70261fb89c5b2a6a28eb341d8667a extends Twig_Template
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
        $__internal_094656417b094df0675fd943f453dca7ad625ad23cd5eee706f76cd14828209a = $this->env->getExtension("native_profiler");
        $__internal_094656417b094df0675fd943f453dca7ad625ad23cd5eee706f76cd14828209a->enter($__internal_094656417b094df0675fd943f453dca7ad625ad23cd5eee706f76cd14828209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_094656417b094df0675fd943f453dca7ad625ad23cd5eee706f76cd14828209a->leave($__internal_094656417b094df0675fd943f453dca7ad625ad23cd5eee706f76cd14828209a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
