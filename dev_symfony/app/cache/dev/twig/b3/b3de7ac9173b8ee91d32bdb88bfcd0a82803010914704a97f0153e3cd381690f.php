<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_633160eff78e7560ecffcceaee0eb73970d251b22e220a23c92ffcebb8466397 extends Twig_Template
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
        $__internal_a63e8325c294a3bf3e65c60f2547aabb0aa87f0c61ccfc23a3a3d4fdd565b011 = $this->env->getExtension("native_profiler");
        $__internal_a63e8325c294a3bf3e65c60f2547aabb0aa87f0c61ccfc23a3a3d4fdd565b011->enter($__internal_a63e8325c294a3bf3e65c60f2547aabb0aa87f0c61ccfc23a3a3d4fdd565b011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a63e8325c294a3bf3e65c60f2547aabb0aa87f0c61ccfc23a3a3d4fdd565b011->leave($__internal_a63e8325c294a3bf3e65c60f2547aabb0aa87f0c61ccfc23a3a3d4fdd565b011_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
