<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d1fffe2d9b3d119e93e225fe77e228886f1855c3a7785a352c9ec4ea21f0dcac extends Twig_Template
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
        $__internal_23d3f516a84f4fbae9611d7e077523368987b240f4380ccb6fce807ccb7b7ead = $this->env->getExtension("native_profiler");
        $__internal_23d3f516a84f4fbae9611d7e077523368987b240f4380ccb6fce807ccb7b7ead->enter($__internal_23d3f516a84f4fbae9611d7e077523368987b240f4380ccb6fce807ccb7b7ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_23d3f516a84f4fbae9611d7e077523368987b240f4380ccb6fce807ccb7b7ead->leave($__internal_23d3f516a84f4fbae9611d7e077523368987b240f4380ccb6fce807ccb7b7ead_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
