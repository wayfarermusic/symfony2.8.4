<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84ff8e98a5d47e21c91219fdfc464f2c5e9f2c316bf7af4ed5cc51a9629a803d extends Twig_Template
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
        $__internal_56d5325562fba5a6a730dd71ec026b099a2fd2cf131cfccc517249b1b3230bf3 = $this->env->getExtension("native_profiler");
        $__internal_56d5325562fba5a6a730dd71ec026b099a2fd2cf131cfccc517249b1b3230bf3->enter($__internal_56d5325562fba5a6a730dd71ec026b099a2fd2cf131cfccc517249b1b3230bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_56d5325562fba5a6a730dd71ec026b099a2fd2cf131cfccc517249b1b3230bf3->leave($__internal_56d5325562fba5a6a730dd71ec026b099a2fd2cf131cfccc517249b1b3230bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
