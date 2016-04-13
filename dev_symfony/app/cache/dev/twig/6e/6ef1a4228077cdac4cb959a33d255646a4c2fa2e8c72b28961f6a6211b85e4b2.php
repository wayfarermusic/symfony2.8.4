<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5c16dc969618b74842c071e7833b0e98df8292ef018b797f807d90e0072f6334 extends Twig_Template
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
        $__internal_e446953f5f0e3b726f2940fe7799529da1128cb6b227a7e47f3f4ee04f35c15f = $this->env->getExtension("native_profiler");
        $__internal_e446953f5f0e3b726f2940fe7799529da1128cb6b227a7e47f3f4ee04f35c15f->enter($__internal_e446953f5f0e3b726f2940fe7799529da1128cb6b227a7e47f3f4ee04f35c15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e446953f5f0e3b726f2940fe7799529da1128cb6b227a7e47f3f4ee04f35c15f->leave($__internal_e446953f5f0e3b726f2940fe7799529da1128cb6b227a7e47f3f4ee04f35c15f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
