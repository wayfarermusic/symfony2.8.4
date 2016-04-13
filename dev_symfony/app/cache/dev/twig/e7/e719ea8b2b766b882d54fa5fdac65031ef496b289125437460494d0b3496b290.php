<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ae78239d7b5919caa211611d7159aeae20a580174fc36896b888de09f4a30ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_6cc357d40756debc05deb56c548312740425b6b1a4fcf113c90ac4caeee49db4 = $this->env->getExtension("native_profiler");
        $__internal_6cc357d40756debc05deb56c548312740425b6b1a4fcf113c90ac4caeee49db4->enter($__internal_6cc357d40756debc05deb56c548312740425b6b1a4fcf113c90ac4caeee49db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc357d40756debc05deb56c548312740425b6b1a4fcf113c90ac4caeee49db4->leave($__internal_6cc357d40756debc05deb56c548312740425b6b1a4fcf113c90ac4caeee49db4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7202707779a724a7a89dc0e62f64657e6181b4a6ea4bef87cdbe1d0dd6ea2ac = $this->env->getExtension("native_profiler");
        $__internal_f7202707779a724a7a89dc0e62f64657e6181b4a6ea4bef87cdbe1d0dd6ea2ac->enter($__internal_f7202707779a724a7a89dc0e62f64657e6181b4a6ea4bef87cdbe1d0dd6ea2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f7202707779a724a7a89dc0e62f64657e6181b4a6ea4bef87cdbe1d0dd6ea2ac->leave($__internal_f7202707779a724a7a89dc0e62f64657e6181b4a6ea4bef87cdbe1d0dd6ea2ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a067cacfdc7e6eba3f6d423c0e5bb001b72768369b2ff9662a013130625f738f = $this->env->getExtension("native_profiler");
        $__internal_a067cacfdc7e6eba3f6d423c0e5bb001b72768369b2ff9662a013130625f738f->enter($__internal_a067cacfdc7e6eba3f6d423c0e5bb001b72768369b2ff9662a013130625f738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a067cacfdc7e6eba3f6d423c0e5bb001b72768369b2ff9662a013130625f738f->leave($__internal_a067cacfdc7e6eba3f6d423c0e5bb001b72768369b2ff9662a013130625f738f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
