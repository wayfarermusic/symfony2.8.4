<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75f24182362e0521ea094c8853e9d1f97f2a3c8807a5feffd0ad0602d35109e1 extends Twig_Template
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
        $__internal_5b4f0f2ac30354d7f66f4285c2f87a585dfccad47a6c65bf09ed0a5b2464ce16 = $this->env->getExtension("native_profiler");
        $__internal_5b4f0f2ac30354d7f66f4285c2f87a585dfccad47a6c65bf09ed0a5b2464ce16->enter($__internal_5b4f0f2ac30354d7f66f4285c2f87a585dfccad47a6c65bf09ed0a5b2464ce16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5b4f0f2ac30354d7f66f4285c2f87a585dfccad47a6c65bf09ed0a5b2464ce16->leave($__internal_5b4f0f2ac30354d7f66f4285c2f87a585dfccad47a6c65bf09ed0a5b2464ce16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
