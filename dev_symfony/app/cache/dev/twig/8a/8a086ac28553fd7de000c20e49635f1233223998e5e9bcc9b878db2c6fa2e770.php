<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4af5d599b83b34320b544ab96450b4ccb72e2fac9ba19bc32150d4950c21c93a extends Twig_Template
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
        $__internal_a18c5c34033c91f2bb3c6dedde03c271e4d9648dec1c8d8fdaebbf1632565e02 = $this->env->getExtension("native_profiler");
        $__internal_a18c5c34033c91f2bb3c6dedde03c271e4d9648dec1c8d8fdaebbf1632565e02->enter($__internal_a18c5c34033c91f2bb3c6dedde03c271e4d9648dec1c8d8fdaebbf1632565e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a18c5c34033c91f2bb3c6dedde03c271e4d9648dec1c8d8fdaebbf1632565e02->leave($__internal_a18c5c34033c91f2bb3c6dedde03c271e4d9648dec1c8d8fdaebbf1632565e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
