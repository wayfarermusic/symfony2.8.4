<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1c23ea33668fb9cfc41903fb790faa1856c2b51ef064219a3da82cbc291f57b5 extends Twig_Template
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
        $__internal_f0336ba4a2ad32b9b8dfcbc962669a26c1051d4a2c506e088ee8734ef483f1da = $this->env->getExtension("native_profiler");
        $__internal_f0336ba4a2ad32b9b8dfcbc962669a26c1051d4a2c506e088ee8734ef483f1da->enter($__internal_f0336ba4a2ad32b9b8dfcbc962669a26c1051d4a2c506e088ee8734ef483f1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f0336ba4a2ad32b9b8dfcbc962669a26c1051d4a2c506e088ee8734ef483f1da->leave($__internal_f0336ba4a2ad32b9b8dfcbc962669a26c1051d4a2c506e088ee8734ef483f1da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
