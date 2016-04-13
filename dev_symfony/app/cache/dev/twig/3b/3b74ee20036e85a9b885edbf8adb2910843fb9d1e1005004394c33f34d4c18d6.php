<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_25046503d2b78295ca3be2821062213d0c3044994b734564006e991cc1844209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b764a1c56b8d80f08c1caa0c0390de98250f36fa0bdde769855349358741217 = $this->env->getExtension("native_profiler");
        $__internal_5b764a1c56b8d80f08c1caa0c0390de98250f36fa0bdde769855349358741217->enter($__internal_5b764a1c56b8d80f08c1caa0c0390de98250f36fa0bdde769855349358741217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b764a1c56b8d80f08c1caa0c0390de98250f36fa0bdde769855349358741217->leave($__internal_5b764a1c56b8d80f08c1caa0c0390de98250f36fa0bdde769855349358741217_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ed76fad9f8233bde8770216ae17fa1b67bffa3cea59c9454ca46751f48b4c6 = $this->env->getExtension("native_profiler");
        $__internal_f4ed76fad9f8233bde8770216ae17fa1b67bffa3cea59c9454ca46751f48b4c6->enter($__internal_f4ed76fad9f8233bde8770216ae17fa1b67bffa3cea59c9454ca46751f48b4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f4ed76fad9f8233bde8770216ae17fa1b67bffa3cea59c9454ca46751f48b4c6->leave($__internal_f4ed76fad9f8233bde8770216ae17fa1b67bffa3cea59c9454ca46751f48b4c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e167f65c1c8d41dfa22aea036b5b499900d5f48e7849583575582a84801a7b9 = $this->env->getExtension("native_profiler");
        $__internal_6e167f65c1c8d41dfa22aea036b5b499900d5f48e7849583575582a84801a7b9->enter($__internal_6e167f65c1c8d41dfa22aea036b5b499900d5f48e7849583575582a84801a7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6e167f65c1c8d41dfa22aea036b5b499900d5f48e7849583575582a84801a7b9->leave($__internal_6e167f65c1c8d41dfa22aea036b5b499900d5f48e7849583575582a84801a7b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
