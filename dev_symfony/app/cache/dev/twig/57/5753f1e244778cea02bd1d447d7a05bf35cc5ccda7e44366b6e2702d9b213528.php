<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e4d916c6ce349cf5c2971e140a9d19f80a09fcc40a87a80268b86000bfaf185a extends Twig_Template
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
        $__internal_86912e3b9b7dbb5a3fe856a8252e02302772940123c95b1b11a4fb7e8869a683 = $this->env->getExtension("native_profiler");
        $__internal_86912e3b9b7dbb5a3fe856a8252e02302772940123c95b1b11a4fb7e8869a683->enter($__internal_86912e3b9b7dbb5a3fe856a8252e02302772940123c95b1b11a4fb7e8869a683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_86912e3b9b7dbb5a3fe856a8252e02302772940123c95b1b11a4fb7e8869a683->leave($__internal_86912e3b9b7dbb5a3fe856a8252e02302772940123c95b1b11a4fb7e8869a683_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
