<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_95bb530ff47d057b099b26c70ab25d9cc5321491a7b7f154832a20006ced639b extends Twig_Template
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
        $__internal_332714bfe0aa57185a1f77cf621532bd3b54aa04cb89e2262d17586f09c2919d = $this->env->getExtension("native_profiler");
        $__internal_332714bfe0aa57185a1f77cf621532bd3b54aa04cb89e2262d17586f09c2919d->enter($__internal_332714bfe0aa57185a1f77cf621532bd3b54aa04cb89e2262d17586f09c2919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_332714bfe0aa57185a1f77cf621532bd3b54aa04cb89e2262d17586f09c2919d->leave($__internal_332714bfe0aa57185a1f77cf621532bd3b54aa04cb89e2262d17586f09c2919d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
