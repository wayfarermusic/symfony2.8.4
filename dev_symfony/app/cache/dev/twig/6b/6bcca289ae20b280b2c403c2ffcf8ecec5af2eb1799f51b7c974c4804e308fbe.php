<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4f77063551a2496083fb330d71bc1a5c6b9cb5b6d8c6a76a5fcc14128602237e extends Twig_Template
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
        $__internal_d023b7480d1ed1f558a259fce618b8f40e3aafc763660abc8bcf822c7dccc698 = $this->env->getExtension("native_profiler");
        $__internal_d023b7480d1ed1f558a259fce618b8f40e3aafc763660abc8bcf822c7dccc698->enter($__internal_d023b7480d1ed1f558a259fce618b8f40e3aafc763660abc8bcf822c7dccc698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d023b7480d1ed1f558a259fce618b8f40e3aafc763660abc8bcf822c7dccc698->leave($__internal_d023b7480d1ed1f558a259fce618b8f40e3aafc763660abc8bcf822c7dccc698_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
