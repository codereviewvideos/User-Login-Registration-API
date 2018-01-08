<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c2ec399dcf6de4aab54f31df703cb783e4b849161a17f97dfff1002cf1894ad6 extends Twig_Template
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
        $__internal_9b59fca3eeacc932181ec721a850305b1a1aaf481caed766d7334144f04a8687 = $this->env->getExtension("native_profiler");
        $__internal_9b59fca3eeacc932181ec721a850305b1a1aaf481caed766d7334144f04a8687->enter($__internal_9b59fca3eeacc932181ec721a850305b1a1aaf481caed766d7334144f04a8687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9b59fca3eeacc932181ec721a850305b1a1aaf481caed766d7334144f04a8687->leave($__internal_9b59fca3eeacc932181ec721a850305b1a1aaf481caed766d7334144f04a8687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
