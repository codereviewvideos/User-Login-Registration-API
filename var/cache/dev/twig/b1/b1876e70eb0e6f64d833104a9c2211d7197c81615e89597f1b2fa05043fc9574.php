<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_85edfa3bbc81b8d85cfeaee9f1910f290961bd7916e90319d1c2d9f5c0571771 extends Twig_Template
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
        $__internal_b9b5ca68114c8258dcc3d4289206b3163cf992f3b1bd3ed7b812729f26bbe22c = $this->env->getExtension("native_profiler");
        $__internal_b9b5ca68114c8258dcc3d4289206b3163cf992f3b1bd3ed7b812729f26bbe22c->enter($__internal_b9b5ca68114c8258dcc3d4289206b3163cf992f3b1bd3ed7b812729f26bbe22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b9b5ca68114c8258dcc3d4289206b3163cf992f3b1bd3ed7b812729f26bbe22c->leave($__internal_b9b5ca68114c8258dcc3d4289206b3163cf992f3b1bd3ed7b812729f26bbe22c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
