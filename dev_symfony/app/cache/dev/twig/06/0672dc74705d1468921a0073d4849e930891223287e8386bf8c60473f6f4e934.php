<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a0cb3013446b805cdfb9b11acb463dc56ab637c0c4daad2c5f0f9a31ca61b8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f892c999327b54cdb5792d49fcb83caa9967a8581e8c23fb7f15cc3fa117149 = $this->env->getExtension("native_profiler");
        $__internal_9f892c999327b54cdb5792d49fcb83caa9967a8581e8c23fb7f15cc3fa117149->enter($__internal_9f892c999327b54cdb5792d49fcb83caa9967a8581e8c23fb7f15cc3fa117149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f892c999327b54cdb5792d49fcb83caa9967a8581e8c23fb7f15cc3fa117149->leave($__internal_9f892c999327b54cdb5792d49fcb83caa9967a8581e8c23fb7f15cc3fa117149_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3faa602cea480737c75c44494ca2f62bf20ce5805eb5b3c2e327f8eae6697e1 = $this->env->getExtension("native_profiler");
        $__internal_c3faa602cea480737c75c44494ca2f62bf20ce5805eb5b3c2e327f8eae6697e1->enter($__internal_c3faa602cea480737c75c44494ca2f62bf20ce5805eb5b3c2e327f8eae6697e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c3faa602cea480737c75c44494ca2f62bf20ce5805eb5b3c2e327f8eae6697e1->leave($__internal_c3faa602cea480737c75c44494ca2f62bf20ce5805eb5b3c2e327f8eae6697e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fad6017f0cc3acf7b08e447ea4168fe45af01139be31571d6e2f6f2d578d1bb = $this->env->getExtension("native_profiler");
        $__internal_5fad6017f0cc3acf7b08e447ea4168fe45af01139be31571d6e2f6f2d578d1bb->enter($__internal_5fad6017f0cc3acf7b08e447ea4168fe45af01139be31571d6e2f6f2d578d1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5fad6017f0cc3acf7b08e447ea4168fe45af01139be31571d6e2f6f2d578d1bb->leave($__internal_5fad6017f0cc3acf7b08e447ea4168fe45af01139be31571d6e2f6f2d578d1bb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9041627dd102004806fde7913c167f5d580d1c5e7aa88e01c483b743a3e62f4e = $this->env->getExtension("native_profiler");
        $__internal_9041627dd102004806fde7913c167f5d580d1c5e7aa88e01c483b743a3e62f4e->enter($__internal_9041627dd102004806fde7913c167f5d580d1c5e7aa88e01c483b743a3e62f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9041627dd102004806fde7913c167f5d580d1c5e7aa88e01c483b743a3e62f4e->leave($__internal_9041627dd102004806fde7913c167f5d580d1c5e7aa88e01c483b743a3e62f4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
