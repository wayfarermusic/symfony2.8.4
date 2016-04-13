<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_78171bfae857f553e2b092a2dadb5a0016d6414d708a3b41baa04492f6bf19fe extends Twig_Template
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
        $__internal_bf49786b5c21fecaf859bc603653a8cf8f19649b804c284f81ebb8532c4e3c46 = $this->env->getExtension("native_profiler");
        $__internal_bf49786b5c21fecaf859bc603653a8cf8f19649b804c284f81ebb8532c4e3c46->enter($__internal_bf49786b5c21fecaf859bc603653a8cf8f19649b804c284f81ebb8532c4e3c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bf49786b5c21fecaf859bc603653a8cf8f19649b804c284f81ebb8532c4e3c46->leave($__internal_bf49786b5c21fecaf859bc603653a8cf8f19649b804c284f81ebb8532c4e3c46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
