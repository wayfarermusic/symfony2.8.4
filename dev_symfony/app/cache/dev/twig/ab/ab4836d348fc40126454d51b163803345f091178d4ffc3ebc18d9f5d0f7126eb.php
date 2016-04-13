<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c54f78db2cd53a65040ac2ae1139862d49033e6e43dc2d16e868be4aee4710ff extends Twig_Template
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
        $__internal_cef0320babf3e21a00ac1873633136e83c99277526d1d5f78674b58dbf658eb1 = $this->env->getExtension("native_profiler");
        $__internal_cef0320babf3e21a00ac1873633136e83c99277526d1d5f78674b58dbf658eb1->enter($__internal_cef0320babf3e21a00ac1873633136e83c99277526d1d5f78674b58dbf658eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cef0320babf3e21a00ac1873633136e83c99277526d1d5f78674b58dbf658eb1->leave($__internal_cef0320babf3e21a00ac1873633136e83c99277526d1d5f78674b58dbf658eb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
