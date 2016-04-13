<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_74294a90ebf6d7dec12f613bdb2a63ca849c2046db09a062876bdd59181958dc extends Twig_Template
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
        $__internal_afb25ece443cdc69ca02d6d1eb9d656b9c15a1cd976545560e844fa5d7d899ad = $this->env->getExtension("native_profiler");
        $__internal_afb25ece443cdc69ca02d6d1eb9d656b9c15a1cd976545560e844fa5d7d899ad->enter($__internal_afb25ece443cdc69ca02d6d1eb9d656b9c15a1cd976545560e844fa5d7d899ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_afb25ece443cdc69ca02d6d1eb9d656b9c15a1cd976545560e844fa5d7d899ad->leave($__internal_afb25ece443cdc69ca02d6d1eb9d656b9c15a1cd976545560e844fa5d7d899ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
