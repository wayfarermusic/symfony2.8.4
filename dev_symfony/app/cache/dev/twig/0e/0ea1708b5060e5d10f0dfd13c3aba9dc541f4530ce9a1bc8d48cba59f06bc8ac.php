<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5ccbf3a497e3e1491a0201b4379c080a4379936021830b324ef9dc5a9b9e0ae7 extends Twig_Template
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
        $__internal_d8ac2c973620253d42c80b1fddeccaab5857c6a496a8c3610ae7898ad6f35ccb = $this->env->getExtension("native_profiler");
        $__internal_d8ac2c973620253d42c80b1fddeccaab5857c6a496a8c3610ae7898ad6f35ccb->enter($__internal_d8ac2c973620253d42c80b1fddeccaab5857c6a496a8c3610ae7898ad6f35ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d8ac2c973620253d42c80b1fddeccaab5857c6a496a8c3610ae7898ad6f35ccb->leave($__internal_d8ac2c973620253d42c80b1fddeccaab5857c6a496a8c3610ae7898ad6f35ccb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
