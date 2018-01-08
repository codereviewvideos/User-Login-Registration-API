<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d25c41007178295e86afe1057a0c0de3a08e71289ae2ee27f9e78ae0ec095dd7 extends Twig_Template
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
        $__internal_c0c200b95d593bf5195edad66a8edd64564867b4608b6ab2123df4ce803cb507 = $this->env->getExtension("native_profiler");
        $__internal_c0c200b95d593bf5195edad66a8edd64564867b4608b6ab2123df4ce803cb507->enter($__internal_c0c200b95d593bf5195edad66a8edd64564867b4608b6ab2123df4ce803cb507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c0c200b95d593bf5195edad66a8edd64564867b4608b6ab2123df4ce803cb507->leave($__internal_c0c200b95d593bf5195edad66a8edd64564867b4608b6ab2123df4ce803cb507_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
