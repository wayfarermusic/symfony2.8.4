<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7dd43ed80de09091dff7f6871909722f1f4871fd52ec5d6572f65241bbc48e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_24810a8584c8a8dce4094d9a90a7b5814062c5b8203da84e5c0e85c2b281c33b = $this->env->getExtension("native_profiler");
        $__internal_24810a8584c8a8dce4094d9a90a7b5814062c5b8203da84e5c0e85c2b281c33b->enter($__internal_24810a8584c8a8dce4094d9a90a7b5814062c5b8203da84e5c0e85c2b281c33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24810a8584c8a8dce4094d9a90a7b5814062c5b8203da84e5c0e85c2b281c33b->leave($__internal_24810a8584c8a8dce4094d9a90a7b5814062c5b8203da84e5c0e85c2b281c33b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b2f66cdcb05e48e0f50f87a76fe30a9783ba2b7b97022b1fff3b08fa169c54f = $this->env->getExtension("native_profiler");
        $__internal_2b2f66cdcb05e48e0f50f87a76fe30a9783ba2b7b97022b1fff3b08fa169c54f->enter($__internal_2b2f66cdcb05e48e0f50f87a76fe30a9783ba2b7b97022b1fff3b08fa169c54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b2f66cdcb05e48e0f50f87a76fe30a9783ba2b7b97022b1fff3b08fa169c54f->leave($__internal_2b2f66cdcb05e48e0f50f87a76fe30a9783ba2b7b97022b1fff3b08fa169c54f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_689a6dcfc22b4426d45c21606404de2cd476a00ad85690e1a681dc767ceeaac5 = $this->env->getExtension("native_profiler");
        $__internal_689a6dcfc22b4426d45c21606404de2cd476a00ad85690e1a681dc767ceeaac5->enter($__internal_689a6dcfc22b4426d45c21606404de2cd476a00ad85690e1a681dc767ceeaac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_689a6dcfc22b4426d45c21606404de2cd476a00ad85690e1a681dc767ceeaac5->leave($__internal_689a6dcfc22b4426d45c21606404de2cd476a00ad85690e1a681dc767ceeaac5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f86004da8fb714051a46f338ae9b2e09c966940c84ab49b9bf2f7821b19ca9f4 = $this->env->getExtension("native_profiler");
        $__internal_f86004da8fb714051a46f338ae9b2e09c966940c84ab49b9bf2f7821b19ca9f4->enter($__internal_f86004da8fb714051a46f338ae9b2e09c966940c84ab49b9bf2f7821b19ca9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f86004da8fb714051a46f338ae9b2e09c966940c84ab49b9bf2f7821b19ca9f4->leave($__internal_f86004da8fb714051a46f338ae9b2e09c966940c84ab49b9bf2f7821b19ca9f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
