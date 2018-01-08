<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6cf464c457285a1bd34ae91fb471a7a3abf5497b3900397dd0d55055aee5a09a extends Twig_Template
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
        $__internal_a5ca74b7d1433760a9ab37137a2a37ec9d6575bd91320181b9335e2fd2f35584 = $this->env->getExtension("native_profiler");
        $__internal_a5ca74b7d1433760a9ab37137a2a37ec9d6575bd91320181b9335e2fd2f35584->enter($__internal_a5ca74b7d1433760a9ab37137a2a37ec9d6575bd91320181b9335e2fd2f35584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a5ca74b7d1433760a9ab37137a2a37ec9d6575bd91320181b9335e2fd2f35584->leave($__internal_a5ca74b7d1433760a9ab37137a2a37ec9d6575bd91320181b9335e2fd2f35584_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
