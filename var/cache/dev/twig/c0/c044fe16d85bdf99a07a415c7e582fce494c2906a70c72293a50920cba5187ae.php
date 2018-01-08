<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4e6dd9f854862459e8462b3076c4d5c476b6ed001d0179c200598934580d3bea extends Twig_Template
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
        $__internal_26cb98e2d7a2e7fffb51618569ad2200605a72e6021b9bf1ca31bebbf3bd0d26 = $this->env->getExtension("native_profiler");
        $__internal_26cb98e2d7a2e7fffb51618569ad2200605a72e6021b9bf1ca31bebbf3bd0d26->enter($__internal_26cb98e2d7a2e7fffb51618569ad2200605a72e6021b9bf1ca31bebbf3bd0d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_26cb98e2d7a2e7fffb51618569ad2200605a72e6021b9bf1ca31bebbf3bd0d26->leave($__internal_26cb98e2d7a2e7fffb51618569ad2200605a72e6021b9bf1ca31bebbf3bd0d26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
