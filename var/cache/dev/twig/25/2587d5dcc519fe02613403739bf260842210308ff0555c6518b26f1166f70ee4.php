<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d44082fe52ced47b97c70ec557c9d5ff8a02cde7e13bfd3372e204517172547f extends Twig_Template
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
        $__internal_b96e5c7f3db1ebd4bee57a645c138c55e136495233853a7fee9a381430de8b9f = $this->env->getExtension("native_profiler");
        $__internal_b96e5c7f3db1ebd4bee57a645c138c55e136495233853a7fee9a381430de8b9f->enter($__internal_b96e5c7f3db1ebd4bee57a645c138c55e136495233853a7fee9a381430de8b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b96e5c7f3db1ebd4bee57a645c138c55e136495233853a7fee9a381430de8b9f->leave($__internal_b96e5c7f3db1ebd4bee57a645c138c55e136495233853a7fee9a381430de8b9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
