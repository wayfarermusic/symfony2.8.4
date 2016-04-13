<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bb6f1b7c58f050a5af56a48f43380762061b9620c32da929a7ad6798acf8c572 extends Twig_Template
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
        $__internal_0917cd509364bfd4272ed731a5d4d6452ba1f387589d2aee15a7d5c0323f5394 = $this->env->getExtension("native_profiler");
        $__internal_0917cd509364bfd4272ed731a5d4d6452ba1f387589d2aee15a7d5c0323f5394->enter($__internal_0917cd509364bfd4272ed731a5d4d6452ba1f387589d2aee15a7d5c0323f5394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0917cd509364bfd4272ed731a5d4d6452ba1f387589d2aee15a7d5c0323f5394->leave($__internal_0917cd509364bfd4272ed731a5d4d6452ba1f387589d2aee15a7d5c0323f5394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
