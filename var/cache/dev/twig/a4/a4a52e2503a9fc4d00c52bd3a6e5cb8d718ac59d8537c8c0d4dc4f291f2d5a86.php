<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_428f5c43bc83ef79ffda37187107f26af629c6ea9696d2df5eb255f6479d6fd3 extends Twig_Template
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
        $__internal_b8ff09254a8817cfc3dfd066f1135cbf0e7f90e60b0e52d981989f89e7bac2ec = $this->env->getExtension("native_profiler");
        $__internal_b8ff09254a8817cfc3dfd066f1135cbf0e7f90e60b0e52d981989f89e7bac2ec->enter($__internal_b8ff09254a8817cfc3dfd066f1135cbf0e7f90e60b0e52d981989f89e7bac2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b8ff09254a8817cfc3dfd066f1135cbf0e7f90e60b0e52d981989f89e7bac2ec->leave($__internal_b8ff09254a8817cfc3dfd066f1135cbf0e7f90e60b0e52d981989f89e7bac2ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
