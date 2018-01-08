<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bd7a60f61f71efce516437a53684600fb3935224624f25d3ab2817e487afc33b extends Twig_Template
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
        $__internal_c8acf1f1466ae0757a10a7e5a1fa094df2b5c9a4a48f4774b7579307dfc8534a = $this->env->getExtension("native_profiler");
        $__internal_c8acf1f1466ae0757a10a7e5a1fa094df2b5c9a4a48f4774b7579307dfc8534a->enter($__internal_c8acf1f1466ae0757a10a7e5a1fa094df2b5c9a4a48f4774b7579307dfc8534a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c8acf1f1466ae0757a10a7e5a1fa094df2b5c9a4a48f4774b7579307dfc8534a->leave($__internal_c8acf1f1466ae0757a10a7e5a1fa094df2b5c9a4a48f4774b7579307dfc8534a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
