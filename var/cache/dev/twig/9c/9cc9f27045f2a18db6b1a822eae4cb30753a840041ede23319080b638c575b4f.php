<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7ed2a52ad627976209d74402356e87afaa6267274a1040211e0f919f1a96b3a6 extends Twig_Template
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
        $__internal_47dbea38a4a8788615305606a28c81b8be4a850cc1be7d87288f5fea880d12cb = $this->env->getExtension("native_profiler");
        $__internal_47dbea38a4a8788615305606a28c81b8be4a850cc1be7d87288f5fea880d12cb->enter($__internal_47dbea38a4a8788615305606a28c81b8be4a850cc1be7d87288f5fea880d12cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_47dbea38a4a8788615305606a28c81b8be4a850cc1be7d87288f5fea880d12cb->leave($__internal_47dbea38a4a8788615305606a28c81b8be4a850cc1be7d87288f5fea880d12cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
