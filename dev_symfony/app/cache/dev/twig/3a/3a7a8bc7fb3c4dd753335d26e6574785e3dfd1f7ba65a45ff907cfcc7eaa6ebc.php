<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_88a2fed4c28f97fa1e9426a0ce08799ef9ea09810f453adf402d4b5978084475 extends Twig_Template
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
        $__internal_b8ef0063c79e2568037c3e637bdf969deeaa7dd5bc8f917c0dbf250c07e11f1d = $this->env->getExtension("native_profiler");
        $__internal_b8ef0063c79e2568037c3e637bdf969deeaa7dd5bc8f917c0dbf250c07e11f1d->enter($__internal_b8ef0063c79e2568037c3e637bdf969deeaa7dd5bc8f917c0dbf250c07e11f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b8ef0063c79e2568037c3e637bdf969deeaa7dd5bc8f917c0dbf250c07e11f1d->leave($__internal_b8ef0063c79e2568037c3e637bdf969deeaa7dd5bc8f917c0dbf250c07e11f1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
