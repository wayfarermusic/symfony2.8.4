<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b05c15f02c7c38e7500f9f30895d1f7fd273f3ae6914349b729b21a7342fb762 extends Twig_Template
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
        $__internal_099fe9a0626a3a9b2f60d96af51ff937d4fa29526947a2f4661ffdfe091919d6 = $this->env->getExtension("native_profiler");
        $__internal_099fe9a0626a3a9b2f60d96af51ff937d4fa29526947a2f4661ffdfe091919d6->enter($__internal_099fe9a0626a3a9b2f60d96af51ff937d4fa29526947a2f4661ffdfe091919d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_099fe9a0626a3a9b2f60d96af51ff937d4fa29526947a2f4661ffdfe091919d6->leave($__internal_099fe9a0626a3a9b2f60d96af51ff937d4fa29526947a2f4661ffdfe091919d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
