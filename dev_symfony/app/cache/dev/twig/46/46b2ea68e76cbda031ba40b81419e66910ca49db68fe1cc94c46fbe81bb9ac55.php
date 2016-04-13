<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2bfbaf107bc57b830ee0b7ea28b84830a98c2d1b6db6421ea4422e0ee24192e0 extends Twig_Template
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
        $__internal_ca85d3bd781aba140263cd50a131ca53638db2f87c08fb459a3a7f02b4abb531 = $this->env->getExtension("native_profiler");
        $__internal_ca85d3bd781aba140263cd50a131ca53638db2f87c08fb459a3a7f02b4abb531->enter($__internal_ca85d3bd781aba140263cd50a131ca53638db2f87c08fb459a3a7f02b4abb531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ca85d3bd781aba140263cd50a131ca53638db2f87c08fb459a3a7f02b4abb531->leave($__internal_ca85d3bd781aba140263cd50a131ca53638db2f87c08fb459a3a7f02b4abb531_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
