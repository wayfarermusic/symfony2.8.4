<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_80be87a225725002047dadcaf75dedb54a39f9c1df4cf9d3ff2c0b9974758efd extends Twig_Template
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
        $__internal_96da076ab66704af42433dc5090d735588eb8c0e9f468d166391a23527787f3d = $this->env->getExtension("native_profiler");
        $__internal_96da076ab66704af42433dc5090d735588eb8c0e9f468d166391a23527787f3d->enter($__internal_96da076ab66704af42433dc5090d735588eb8c0e9f468d166391a23527787f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_96da076ab66704af42433dc5090d735588eb8c0e9f468d166391a23527787f3d->leave($__internal_96da076ab66704af42433dc5090d735588eb8c0e9f468d166391a23527787f3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
