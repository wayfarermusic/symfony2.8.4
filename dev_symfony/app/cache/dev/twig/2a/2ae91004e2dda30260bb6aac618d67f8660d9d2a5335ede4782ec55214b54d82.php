<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1ab78694a50f562c8487bebec7f361be18cd0660eeca5b182fff5073f594acd8 extends Twig_Template
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
        $__internal_24158203e64e03420d3466f6fc72484874fb6eb5c724f6b9111b04c10b77e6ad = $this->env->getExtension("native_profiler");
        $__internal_24158203e64e03420d3466f6fc72484874fb6eb5c724f6b9111b04c10b77e6ad->enter($__internal_24158203e64e03420d3466f6fc72484874fb6eb5c724f6b9111b04c10b77e6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_24158203e64e03420d3466f6fc72484874fb6eb5c724f6b9111b04c10b77e6ad->leave($__internal_24158203e64e03420d3466f6fc72484874fb6eb5c724f6b9111b04c10b77e6ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
