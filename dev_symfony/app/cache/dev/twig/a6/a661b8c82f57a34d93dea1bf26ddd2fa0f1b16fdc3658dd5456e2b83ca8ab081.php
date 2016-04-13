<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_62a9c56e4baf59c7468d05ba5b7acc1b088ad603bf947bc5a64c9a8bf44ab216 extends Twig_Template
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
        $__internal_34b944669d2e5ac8359956eb5f973d872e95e304db7390f66cf6c0f31f7a40b7 = $this->env->getExtension("native_profiler");
        $__internal_34b944669d2e5ac8359956eb5f973d872e95e304db7390f66cf6c0f31f7a40b7->enter($__internal_34b944669d2e5ac8359956eb5f973d872e95e304db7390f66cf6c0f31f7a40b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_34b944669d2e5ac8359956eb5f973d872e95e304db7390f66cf6c0f31f7a40b7->leave($__internal_34b944669d2e5ac8359956eb5f973d872e95e304db7390f66cf6c0f31f7a40b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
