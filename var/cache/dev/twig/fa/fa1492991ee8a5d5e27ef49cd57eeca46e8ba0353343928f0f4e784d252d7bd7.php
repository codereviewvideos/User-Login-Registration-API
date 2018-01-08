<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_757e2e5b1af391e0c91944759d08447d29f3ef56229f0fdb9637e15d88204f20 extends Twig_Template
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
        $__internal_4cc6c80d6f1e4c951bc46aeb3aa918fd3806cce22fa4cdadc98e79724bba36d6 = $this->env->getExtension("native_profiler");
        $__internal_4cc6c80d6f1e4c951bc46aeb3aa918fd3806cce22fa4cdadc98e79724bba36d6->enter($__internal_4cc6c80d6f1e4c951bc46aeb3aa918fd3806cce22fa4cdadc98e79724bba36d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4cc6c80d6f1e4c951bc46aeb3aa918fd3806cce22fa4cdadc98e79724bba36d6->leave($__internal_4cc6c80d6f1e4c951bc46aeb3aa918fd3806cce22fa4cdadc98e79724bba36d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
