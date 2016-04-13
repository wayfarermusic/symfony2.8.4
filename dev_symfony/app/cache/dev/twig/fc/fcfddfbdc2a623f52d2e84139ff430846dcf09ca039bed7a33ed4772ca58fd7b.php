<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_188f8e0ad466c41cade528bf9fcf0e5c2f7156fb9854c72f7aad459673d24ca5 extends Twig_Template
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
        $__internal_084252190b5b6763faaf3d649500b803bfae7c080a3ebe4f2a60ecc5619267c6 = $this->env->getExtension("native_profiler");
        $__internal_084252190b5b6763faaf3d649500b803bfae7c080a3ebe4f2a60ecc5619267c6->enter($__internal_084252190b5b6763faaf3d649500b803bfae7c080a3ebe4f2a60ecc5619267c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_084252190b5b6763faaf3d649500b803bfae7c080a3ebe4f2a60ecc5619267c6->leave($__internal_084252190b5b6763faaf3d649500b803bfae7c080a3ebe4f2a60ecc5619267c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
