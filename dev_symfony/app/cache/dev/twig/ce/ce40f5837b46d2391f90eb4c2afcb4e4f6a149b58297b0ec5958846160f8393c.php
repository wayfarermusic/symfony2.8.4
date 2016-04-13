<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_92273d89604a0c963ba0f592ae6fe2ba48532eddcaf7945c7607c1e751f6fbca extends Twig_Template
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
        $__internal_ab7df068cfec05180e0dd365be17589928da7a235ca235ec64b18a395a66bf90 = $this->env->getExtension("native_profiler");
        $__internal_ab7df068cfec05180e0dd365be17589928da7a235ca235ec64b18a395a66bf90->enter($__internal_ab7df068cfec05180e0dd365be17589928da7a235ca235ec64b18a395a66bf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ab7df068cfec05180e0dd365be17589928da7a235ca235ec64b18a395a66bf90->leave($__internal_ab7df068cfec05180e0dd365be17589928da7a235ca235ec64b18a395a66bf90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
