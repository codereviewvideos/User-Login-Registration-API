<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_39a864aa59ddca61927e7f4ca763c2e00558a526ee8f0ec7ae5a009e096c4db9 extends Twig_Template
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
        $__internal_f26dc0e9b5b59f93ea9a2a79167a787f8291f47c8402a013924ee291fb52036a = $this->env->getExtension("native_profiler");
        $__internal_f26dc0e9b5b59f93ea9a2a79167a787f8291f47c8402a013924ee291fb52036a->enter($__internal_f26dc0e9b5b59f93ea9a2a79167a787f8291f47c8402a013924ee291fb52036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f26dc0e9b5b59f93ea9a2a79167a787f8291f47c8402a013924ee291fb52036a->leave($__internal_f26dc0e9b5b59f93ea9a2a79167a787f8291f47c8402a013924ee291fb52036a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
