<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b95571104397bacc13f192b76c7191068a8ee704cbacf0d12e38c3086cb99f4d extends Twig_Template
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
        $__internal_75d20f3f7eb523d4d0ca44b4be63cb4f0116a3b23270e9e04a95356c0ba53cda = $this->env->getExtension("native_profiler");
        $__internal_75d20f3f7eb523d4d0ca44b4be63cb4f0116a3b23270e9e04a95356c0ba53cda->enter($__internal_75d20f3f7eb523d4d0ca44b4be63cb4f0116a3b23270e9e04a95356c0ba53cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_75d20f3f7eb523d4d0ca44b4be63cb4f0116a3b23270e9e04a95356c0ba53cda->leave($__internal_75d20f3f7eb523d4d0ca44b4be63cb4f0116a3b23270e9e04a95356c0ba53cda_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
