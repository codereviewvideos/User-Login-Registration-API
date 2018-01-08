<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f105907d375fd310d8c1f784c03c526c1b95809144b2157b5058ada31b782564 extends Twig_Template
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
        $__internal_338f744f9eebfe281a95e0ac5ec8fb1ae61e268287e8b31866e743706db47feb = $this->env->getExtension("native_profiler");
        $__internal_338f744f9eebfe281a95e0ac5ec8fb1ae61e268287e8b31866e743706db47feb->enter($__internal_338f744f9eebfe281a95e0ac5ec8fb1ae61e268287e8b31866e743706db47feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_338f744f9eebfe281a95e0ac5ec8fb1ae61e268287e8b31866e743706db47feb->leave($__internal_338f744f9eebfe281a95e0ac5ec8fb1ae61e268287e8b31866e743706db47feb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
