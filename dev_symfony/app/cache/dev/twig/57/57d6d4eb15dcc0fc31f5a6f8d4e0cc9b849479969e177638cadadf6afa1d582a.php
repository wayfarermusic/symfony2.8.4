<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d29d44227ffc8c1c1f4fac18455ed55c7eb7346949d1b06f608a7297638aa4b1 extends Twig_Template
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
        $__internal_3a48cca5544bba8bd509de947ae0e3ffeb31754e73057759926eb805b8a1b7da = $this->env->getExtension("native_profiler");
        $__internal_3a48cca5544bba8bd509de947ae0e3ffeb31754e73057759926eb805b8a1b7da->enter($__internal_3a48cca5544bba8bd509de947ae0e3ffeb31754e73057759926eb805b8a1b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a48cca5544bba8bd509de947ae0e3ffeb31754e73057759926eb805b8a1b7da->leave($__internal_3a48cca5544bba8bd509de947ae0e3ffeb31754e73057759926eb805b8a1b7da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
