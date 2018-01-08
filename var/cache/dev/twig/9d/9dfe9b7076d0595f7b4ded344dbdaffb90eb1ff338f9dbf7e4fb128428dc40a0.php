<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_51f96352c78e3486c6f844c806874192fc241d3ef31162cb22fcf5eab72ac8e2 extends Twig_Template
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
        $__internal_95a4ada44a1333ed52e8b712723643503e4362d6063bebeaa319fcc90cebc532 = $this->env->getExtension("native_profiler");
        $__internal_95a4ada44a1333ed52e8b712723643503e4362d6063bebeaa319fcc90cebc532->enter($__internal_95a4ada44a1333ed52e8b712723643503e4362d6063bebeaa319fcc90cebc532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_95a4ada44a1333ed52e8b712723643503e4362d6063bebeaa319fcc90cebc532->leave($__internal_95a4ada44a1333ed52e8b712723643503e4362d6063bebeaa319fcc90cebc532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
