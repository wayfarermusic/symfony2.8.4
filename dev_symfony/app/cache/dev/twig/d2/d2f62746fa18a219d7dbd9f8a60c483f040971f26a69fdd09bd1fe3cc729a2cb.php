<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ff07bca72913e652a1acee349a98cadd5f998f0e233ee7063a456846df646047 extends Twig_Template
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
        $__internal_c19d11d8b45899f19f906fa289dc008dcd1c41cecd62f5db8fe6bfc7a70daf16 = $this->env->getExtension("native_profiler");
        $__internal_c19d11d8b45899f19f906fa289dc008dcd1c41cecd62f5db8fe6bfc7a70daf16->enter($__internal_c19d11d8b45899f19f906fa289dc008dcd1c41cecd62f5db8fe6bfc7a70daf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c19d11d8b45899f19f906fa289dc008dcd1c41cecd62f5db8fe6bfc7a70daf16->leave($__internal_c19d11d8b45899f19f906fa289dc008dcd1c41cecd62f5db8fe6bfc7a70daf16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
