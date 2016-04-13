<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2f235ce3b36ac2b66d3e6e62fe655ab5671cfb5dda7c86166cd79a04a0c26ea0 extends Twig_Template
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
        $__internal_89e7153e7480a99e609da1a8509eb03ba2ea2c22b14377c4f848ae49bc4c43b0 = $this->env->getExtension("native_profiler");
        $__internal_89e7153e7480a99e609da1a8509eb03ba2ea2c22b14377c4f848ae49bc4c43b0->enter($__internal_89e7153e7480a99e609da1a8509eb03ba2ea2c22b14377c4f848ae49bc4c43b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_89e7153e7480a99e609da1a8509eb03ba2ea2c22b14377c4f848ae49bc4c43b0->leave($__internal_89e7153e7480a99e609da1a8509eb03ba2ea2c22b14377c4f848ae49bc4c43b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
