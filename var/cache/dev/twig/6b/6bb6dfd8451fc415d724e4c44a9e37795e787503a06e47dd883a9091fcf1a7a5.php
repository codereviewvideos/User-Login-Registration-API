<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b52cba12da0bc88b0ef9724e46d4f55de70c95f9d4cd105c72e5f42a72710c3d extends Twig_Template
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
        $__internal_300e2270b8403b6bb7628ae4cdb6cda77759d9b1e2af26a608eb790b9d638159 = $this->env->getExtension("native_profiler");
        $__internal_300e2270b8403b6bb7628ae4cdb6cda77759d9b1e2af26a608eb790b9d638159->enter($__internal_300e2270b8403b6bb7628ae4cdb6cda77759d9b1e2af26a608eb790b9d638159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_300e2270b8403b6bb7628ae4cdb6cda77759d9b1e2af26a608eb790b9d638159->leave($__internal_300e2270b8403b6bb7628ae4cdb6cda77759d9b1e2af26a608eb790b9d638159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
