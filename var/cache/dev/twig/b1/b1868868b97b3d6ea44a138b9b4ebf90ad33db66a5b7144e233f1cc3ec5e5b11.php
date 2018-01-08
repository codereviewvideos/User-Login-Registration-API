<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_6e19a7b9128975c9fe1b1ff79e1514faf4d21f8e01f264a1f9f5b2e6c2612864 extends Twig_Template
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
        $__internal_e13f7a6c5d66394183dad4922edcc8762861a1a0b3051abf6f35c289dfdec116 = $this->env->getExtension("native_profiler");
        $__internal_e13f7a6c5d66394183dad4922edcc8762861a1a0b3051abf6f35c289dfdec116->enter($__internal_e13f7a6c5d66394183dad4922edcc8762861a1a0b3051abf6f35c289dfdec116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_e13f7a6c5d66394183dad4922edcc8762861a1a0b3051abf6f35c289dfdec116->leave($__internal_e13f7a6c5d66394183dad4922edcc8762861a1a0b3051abf6f35c289dfdec116_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
