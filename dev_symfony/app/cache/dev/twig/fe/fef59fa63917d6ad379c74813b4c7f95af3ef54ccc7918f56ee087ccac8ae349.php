<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3aa86620668f0bb0d1cb7888d898712a00e49c76f15600a35996424f4474ea5b extends Twig_Template
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
        $__internal_4b1c68332f275731047266c29f5cd1852e757b8bae00e2ade04744976b52640f = $this->env->getExtension("native_profiler");
        $__internal_4b1c68332f275731047266c29f5cd1852e757b8bae00e2ade04744976b52640f->enter($__internal_4b1c68332f275731047266c29f5cd1852e757b8bae00e2ade04744976b52640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4b1c68332f275731047266c29f5cd1852e757b8bae00e2ade04744976b52640f->leave($__internal_4b1c68332f275731047266c29f5cd1852e757b8bae00e2ade04744976b52640f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
