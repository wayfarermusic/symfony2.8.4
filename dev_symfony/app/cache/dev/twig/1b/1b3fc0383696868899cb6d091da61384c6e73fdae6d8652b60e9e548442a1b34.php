<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ffb379e0dc6ed7c10f328e59c4651cf8e8fc9e89599eeaefbe1250dcb9e1b7a6 extends Twig_Template
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
        $__internal_de30cd2b2c0ae69fa6f47074f23e3df85ce4852b6b41ccaa51d54a851d5bc61f = $this->env->getExtension("native_profiler");
        $__internal_de30cd2b2c0ae69fa6f47074f23e3df85ce4852b6b41ccaa51d54a851d5bc61f->enter($__internal_de30cd2b2c0ae69fa6f47074f23e3df85ce4852b6b41ccaa51d54a851d5bc61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de30cd2b2c0ae69fa6f47074f23e3df85ce4852b6b41ccaa51d54a851d5bc61f->leave($__internal_de30cd2b2c0ae69fa6f47074f23e3df85ce4852b6b41ccaa51d54a851d5bc61f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
