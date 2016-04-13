<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8f85ae6e77ffac109a93db9d8afb947a08f7d59086653f637163818670d91a78 extends Twig_Template
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
        $__internal_85d855354008048a8157effa096eb15cd1b964e532684134d4269a2c5206fc98 = $this->env->getExtension("native_profiler");
        $__internal_85d855354008048a8157effa096eb15cd1b964e532684134d4269a2c5206fc98->enter($__internal_85d855354008048a8157effa096eb15cd1b964e532684134d4269a2c5206fc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_85d855354008048a8157effa096eb15cd1b964e532684134d4269a2c5206fc98->leave($__internal_85d855354008048a8157effa096eb15cd1b964e532684134d4269a2c5206fc98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
