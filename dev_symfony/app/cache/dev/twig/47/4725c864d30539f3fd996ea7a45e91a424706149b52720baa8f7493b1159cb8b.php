<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fbb8622028a1d54efa315cb2d5a04b77d23bf707c272ca5b4b81973f8b701dce extends Twig_Template
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
        $__internal_ff027fbdb0879845b4cc7c3e8a1749bb554375199a2b995d65ab69756f49b6b8 = $this->env->getExtension("native_profiler");
        $__internal_ff027fbdb0879845b4cc7c3e8a1749bb554375199a2b995d65ab69756f49b6b8->enter($__internal_ff027fbdb0879845b4cc7c3e8a1749bb554375199a2b995d65ab69756f49b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ff027fbdb0879845b4cc7c3e8a1749bb554375199a2b995d65ab69756f49b6b8->leave($__internal_ff027fbdb0879845b4cc7c3e8a1749bb554375199a2b995d65ab69756f49b6b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
