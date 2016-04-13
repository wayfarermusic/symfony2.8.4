<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1f20db4cdc8798e92c36741d4775bc5de9e4b7d223ef71ef8b9c4f83f295d141 extends Twig_Template
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
        $__internal_2229622b8e1cc85e3002f60102e17c0d07d3f68ca40de366696f9c653100a6f9 = $this->env->getExtension("native_profiler");
        $__internal_2229622b8e1cc85e3002f60102e17c0d07d3f68ca40de366696f9c653100a6f9->enter($__internal_2229622b8e1cc85e3002f60102e17c0d07d3f68ca40de366696f9c653100a6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2229622b8e1cc85e3002f60102e17c0d07d3f68ca40de366696f9c653100a6f9->leave($__internal_2229622b8e1cc85e3002f60102e17c0d07d3f68ca40de366696f9c653100a6f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
