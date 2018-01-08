<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_15d00bf0d5c2abf2961b694dcd4aa2b8755c707b811f04c4ebacc1dc3430afd7 extends Twig_Template
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
        $__internal_bad7c7abc002a2f86204b254a250ee453eb824d70660fc308c2e6e19dfc68fcc = $this->env->getExtension("native_profiler");
        $__internal_bad7c7abc002a2f86204b254a250ee453eb824d70660fc308c2e6e19dfc68fcc->enter($__internal_bad7c7abc002a2f86204b254a250ee453eb824d70660fc308c2e6e19dfc68fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bad7c7abc002a2f86204b254a250ee453eb824d70660fc308c2e6e19dfc68fcc->leave($__internal_bad7c7abc002a2f86204b254a250ee453eb824d70660fc308c2e6e19dfc68fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
