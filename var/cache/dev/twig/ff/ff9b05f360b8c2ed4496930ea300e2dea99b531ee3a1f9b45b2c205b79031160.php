<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_00cd3958b6ebb4e441f1cd55a9a692e5f9b7dab593bbc02dac191b8e915a7320 extends Twig_Template
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
        $__internal_d339657fa3030cb2b1962a1a4b9a83cd565be8069dc54cbd66a8b45d8fedef7e = $this->env->getExtension("native_profiler");
        $__internal_d339657fa3030cb2b1962a1a4b9a83cd565be8069dc54cbd66a8b45d8fedef7e->enter($__internal_d339657fa3030cb2b1962a1a4b9a83cd565be8069dc54cbd66a8b45d8fedef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d339657fa3030cb2b1962a1a4b9a83cd565be8069dc54cbd66a8b45d8fedef7e->leave($__internal_d339657fa3030cb2b1962a1a4b9a83cd565be8069dc54cbd66a8b45d8fedef7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
