<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec75cf9b0bac9fea400396d39bb734167b6ca374417beb7941276d6e511ea9f8 extends Twig_Template
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
        $__internal_01c3fadc3ccb7e41fd857b438d4f2dfdc139f2c9fc7026406f9694731b21d3ff = $this->env->getExtension("native_profiler");
        $__internal_01c3fadc3ccb7e41fd857b438d4f2dfdc139f2c9fc7026406f9694731b21d3ff->enter($__internal_01c3fadc3ccb7e41fd857b438d4f2dfdc139f2c9fc7026406f9694731b21d3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_01c3fadc3ccb7e41fd857b438d4f2dfdc139f2c9fc7026406f9694731b21d3ff->leave($__internal_01c3fadc3ccb7e41fd857b438d4f2dfdc139f2c9fc7026406f9694731b21d3ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
