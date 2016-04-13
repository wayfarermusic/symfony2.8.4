<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_fe328f7c1fa722074fa6138e7fa2bae90ec6eb1ef0c104cc553d35ea65d6a0f2 extends Twig_Template
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
        $__internal_71c4c6fcc5c3bdfe2a943ec08328906e967d39e6ef72b943d64f79d4a5e16edc = $this->env->getExtension("native_profiler");
        $__internal_71c4c6fcc5c3bdfe2a943ec08328906e967d39e6ef72b943d64f79d4a5e16edc->enter($__internal_71c4c6fcc5c3bdfe2a943ec08328906e967d39e6ef72b943d64f79d4a5e16edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_71c4c6fcc5c3bdfe2a943ec08328906e967d39e6ef72b943d64f79d4a5e16edc->leave($__internal_71c4c6fcc5c3bdfe2a943ec08328906e967d39e6ef72b943d64f79d4a5e16edc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
