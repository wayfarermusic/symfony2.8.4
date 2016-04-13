<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_28a235c7990a6e170b6dc0347593edde7f3e0a69cfe3fedb805d81dc15e9435b extends Twig_Template
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
        $__internal_c9528b8bd86c62b00cec1812ba3dbc5f497c536f5be96078895dddc4e01f8ebb = $this->env->getExtension("native_profiler");
        $__internal_c9528b8bd86c62b00cec1812ba3dbc5f497c536f5be96078895dddc4e01f8ebb->enter($__internal_c9528b8bd86c62b00cec1812ba3dbc5f497c536f5be96078895dddc4e01f8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c9528b8bd86c62b00cec1812ba3dbc5f497c536f5be96078895dddc4e01f8ebb->leave($__internal_c9528b8bd86c62b00cec1812ba3dbc5f497c536f5be96078895dddc4e01f8ebb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
