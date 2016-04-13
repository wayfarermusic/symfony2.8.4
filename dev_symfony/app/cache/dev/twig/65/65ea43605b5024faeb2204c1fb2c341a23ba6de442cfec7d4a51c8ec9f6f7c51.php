<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e35de96fb229d1c803d11eec45b4cb1fb6089c34a2b708f47d43e776178f474 extends Twig_Template
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
        $__internal_e47c27a88da0df19c92986fc5540baa8916efd3bfa91e13452ad1bc113407316 = $this->env->getExtension("native_profiler");
        $__internal_e47c27a88da0df19c92986fc5540baa8916efd3bfa91e13452ad1bc113407316->enter($__internal_e47c27a88da0df19c92986fc5540baa8916efd3bfa91e13452ad1bc113407316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e47c27a88da0df19c92986fc5540baa8916efd3bfa91e13452ad1bc113407316->leave($__internal_e47c27a88da0df19c92986fc5540baa8916efd3bfa91e13452ad1bc113407316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
