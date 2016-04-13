<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9da245aa6c3cbef297f221347a8d664748a25b409751f1a963f4513768a983b1 extends Twig_Template
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
        $__internal_16123aa08be779fa08e143d291d6bf17167cf41f99c3db56fe91acbd311d0174 = $this->env->getExtension("native_profiler");
        $__internal_16123aa08be779fa08e143d291d6bf17167cf41f99c3db56fe91acbd311d0174->enter($__internal_16123aa08be779fa08e143d291d6bf17167cf41f99c3db56fe91acbd311d0174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_16123aa08be779fa08e143d291d6bf17167cf41f99c3db56fe91acbd311d0174->leave($__internal_16123aa08be779fa08e143d291d6bf17167cf41f99c3db56fe91acbd311d0174_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
