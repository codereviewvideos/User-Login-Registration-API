<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_73806f39319874c59d84408c17404bbdc78d80c31e12d0868cc8f1d770c442f8 extends Twig_Template
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
        $__internal_742636871b9d52906ab1c4f4d428a2aea714d7242f067483fec4cc47fae3f9e9 = $this->env->getExtension("native_profiler");
        $__internal_742636871b9d52906ab1c4f4d428a2aea714d7242f067483fec4cc47fae3f9e9->enter($__internal_742636871b9d52906ab1c4f4d428a2aea714d7242f067483fec4cc47fae3f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_742636871b9d52906ab1c4f4d428a2aea714d7242f067483fec4cc47fae3f9e9->leave($__internal_742636871b9d52906ab1c4f4d428a2aea714d7242f067483fec4cc47fae3f9e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
