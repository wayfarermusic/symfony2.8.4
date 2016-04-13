<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6c423e2ed24136840be1957be9d43c639f9f6be96d7d8e98a00eecc54146f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0cf41aece2af163123f3ed3b63f92fbfb9bab2d133b641bfddacb4cb35ac1ecf = $this->env->getExtension("native_profiler");
        $__internal_0cf41aece2af163123f3ed3b63f92fbfb9bab2d133b641bfddacb4cb35ac1ecf->enter($__internal_0cf41aece2af163123f3ed3b63f92fbfb9bab2d133b641bfddacb4cb35ac1ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf41aece2af163123f3ed3b63f92fbfb9bab2d133b641bfddacb4cb35ac1ecf->leave($__internal_0cf41aece2af163123f3ed3b63f92fbfb9bab2d133b641bfddacb4cb35ac1ecf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba26067d3b1b21f762be050b26f07a7a6f53755155c71e0b97e1213d113de888 = $this->env->getExtension("native_profiler");
        $__internal_ba26067d3b1b21f762be050b26f07a7a6f53755155c71e0b97e1213d113de888->enter($__internal_ba26067d3b1b21f762be050b26f07a7a6f53755155c71e0b97e1213d113de888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba26067d3b1b21f762be050b26f07a7a6f53755155c71e0b97e1213d113de888->leave($__internal_ba26067d3b1b21f762be050b26f07a7a6f53755155c71e0b97e1213d113de888_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a93dbd067bbac48a0539a65ab33de4fa4c90597ce8c65ac391a644e5d4589219 = $this->env->getExtension("native_profiler");
        $__internal_a93dbd067bbac48a0539a65ab33de4fa4c90597ce8c65ac391a644e5d4589219->enter($__internal_a93dbd067bbac48a0539a65ab33de4fa4c90597ce8c65ac391a644e5d4589219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a93dbd067bbac48a0539a65ab33de4fa4c90597ce8c65ac391a644e5d4589219->leave($__internal_a93dbd067bbac48a0539a65ab33de4fa4c90597ce8c65ac391a644e5d4589219_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_006f17bf119eef30ae155c080cdaf1a09e6a164c3f1a8a39d25d3b6005544afc = $this->env->getExtension("native_profiler");
        $__internal_006f17bf119eef30ae155c080cdaf1a09e6a164c3f1a8a39d25d3b6005544afc->enter($__internal_006f17bf119eef30ae155c080cdaf1a09e6a164c3f1a8a39d25d3b6005544afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_006f17bf119eef30ae155c080cdaf1a09e6a164c3f1a8a39d25d3b6005544afc->leave($__internal_006f17bf119eef30ae155c080cdaf1a09e6a164c3f1a8a39d25d3b6005544afc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
