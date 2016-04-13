<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_84787e61eb367fbf322e1a70b5f92b8d780a344544f9d321f7f4177bbf131e31 extends Twig_Template
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
        $__internal_ea8cdf4fc5f091fea111c4951b47b479271d7cabf7902f6988b2dbd3f6f7892a = $this->env->getExtension("native_profiler");
        $__internal_ea8cdf4fc5f091fea111c4951b47b479271d7cabf7902f6988b2dbd3f6f7892a->enter($__internal_ea8cdf4fc5f091fea111c4951b47b479271d7cabf7902f6988b2dbd3f6f7892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ea8cdf4fc5f091fea111c4951b47b479271d7cabf7902f6988b2dbd3f6f7892a->leave($__internal_ea8cdf4fc5f091fea111c4951b47b479271d7cabf7902f6988b2dbd3f6f7892a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
