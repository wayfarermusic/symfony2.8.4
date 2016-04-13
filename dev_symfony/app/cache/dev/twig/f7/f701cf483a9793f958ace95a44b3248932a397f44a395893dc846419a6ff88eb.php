<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fc92b0622113c0fdf7b41b800f7110da1af52fac815ab49535c49fb9931acec3 extends Twig_Template
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
        $__internal_efb883f5de0ba08b097be79de4d28b4595af5604303a7d8779d9b5f02d2324c8 = $this->env->getExtension("native_profiler");
        $__internal_efb883f5de0ba08b097be79de4d28b4595af5604303a7d8779d9b5f02d2324c8->enter($__internal_efb883f5de0ba08b097be79de4d28b4595af5604303a7d8779d9b5f02d2324c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_efb883f5de0ba08b097be79de4d28b4595af5604303a7d8779d9b5f02d2324c8->leave($__internal_efb883f5de0ba08b097be79de4d28b4595af5604303a7d8779d9b5f02d2324c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
