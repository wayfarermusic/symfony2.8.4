<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f2953fd0b55cde76cd578196f471bb3d7e03eb93d862d746655d64aab456ed74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7e4297be00f7c1e7f7426d27ee945d5f02650246da341d490a22d67e7250ede9 = $this->env->getExtension("native_profiler");
        $__internal_7e4297be00f7c1e7f7426d27ee945d5f02650246da341d490a22d67e7250ede9->enter($__internal_7e4297be00f7c1e7f7426d27ee945d5f02650246da341d490a22d67e7250ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e4297be00f7c1e7f7426d27ee945d5f02650246da341d490a22d67e7250ede9->leave($__internal_7e4297be00f7c1e7f7426d27ee945d5f02650246da341d490a22d67e7250ede9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1abd4ac71db0b922442cc1415b6033d1cdebd6e1b048ac96abdee1c1b78f1328 = $this->env->getExtension("native_profiler");
        $__internal_1abd4ac71db0b922442cc1415b6033d1cdebd6e1b048ac96abdee1c1b78f1328->enter($__internal_1abd4ac71db0b922442cc1415b6033d1cdebd6e1b048ac96abdee1c1b78f1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1abd4ac71db0b922442cc1415b6033d1cdebd6e1b048ac96abdee1c1b78f1328->leave($__internal_1abd4ac71db0b922442cc1415b6033d1cdebd6e1b048ac96abdee1c1b78f1328_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a8efe41cbf325f9f2bad6ea0c029334d4a43379c43b9815f01a484e1e730d77 = $this->env->getExtension("native_profiler");
        $__internal_8a8efe41cbf325f9f2bad6ea0c029334d4a43379c43b9815f01a484e1e730d77->enter($__internal_8a8efe41cbf325f9f2bad6ea0c029334d4a43379c43b9815f01a484e1e730d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a8efe41cbf325f9f2bad6ea0c029334d4a43379c43b9815f01a484e1e730d77->leave($__internal_8a8efe41cbf325f9f2bad6ea0c029334d4a43379c43b9815f01a484e1e730d77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc1a68e7831d35c2bc3970660e0ac5384ff76d93313669bc0f2021315aff6833 = $this->env->getExtension("native_profiler");
        $__internal_bc1a68e7831d35c2bc3970660e0ac5384ff76d93313669bc0f2021315aff6833->enter($__internal_bc1a68e7831d35c2bc3970660e0ac5384ff76d93313669bc0f2021315aff6833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc1a68e7831d35c2bc3970660e0ac5384ff76d93313669bc0f2021315aff6833->leave($__internal_bc1a68e7831d35c2bc3970660e0ac5384ff76d93313669bc0f2021315aff6833_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
