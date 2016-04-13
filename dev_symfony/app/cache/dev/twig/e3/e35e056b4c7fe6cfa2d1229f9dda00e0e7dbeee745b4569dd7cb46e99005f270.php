<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_91df8941c0f85a77775d901a9fca9db13c0dfcf390e9c7beed0a33b618cef419 extends Twig_Template
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
        $__internal_bf3c8763c5ed731bd76e2dc9b2541e71419182b42ba1b4ebad5656b69d5cb65c = $this->env->getExtension("native_profiler");
        $__internal_bf3c8763c5ed731bd76e2dc9b2541e71419182b42ba1b4ebad5656b69d5cb65c->enter($__internal_bf3c8763c5ed731bd76e2dc9b2541e71419182b42ba1b4ebad5656b69d5cb65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_bf3c8763c5ed731bd76e2dc9b2541e71419182b42ba1b4ebad5656b69d5cb65c->leave($__internal_bf3c8763c5ed731bd76e2dc9b2541e71419182b42ba1b4ebad5656b69d5cb65c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
