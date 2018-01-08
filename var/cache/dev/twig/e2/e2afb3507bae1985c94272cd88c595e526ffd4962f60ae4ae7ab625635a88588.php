<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e24fd41e51cf88ad53eb7c2033b4111e5ceccadfdc783b96ebc688b71d77f2c2 extends Twig_Template
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
        $__internal_4f42cf785055ad3b034e36417d97a64e1465a104219169d8bb59b8c1f59a8349 = $this->env->getExtension("native_profiler");
        $__internal_4f42cf785055ad3b034e36417d97a64e1465a104219169d8bb59b8c1f59a8349->enter($__internal_4f42cf785055ad3b034e36417d97a64e1465a104219169d8bb59b8c1f59a8349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4f42cf785055ad3b034e36417d97a64e1465a104219169d8bb59b8c1f59a8349->leave($__internal_4f42cf785055ad3b034e36417d97a64e1465a104219169d8bb59b8c1f59a8349_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
