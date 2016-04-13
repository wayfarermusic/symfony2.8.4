<?php

/* base.html.twig */
class __TwigTemplate_e11ac567142dd74d60145cf0ccb82784e8d0a08d31cd451509d5135086dac48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af0a69ad1246c86f6e5a954a4399d5d6d8a9a5b7b92252aedaa37b7021663a84 = $this->env->getExtension("native_profiler");
        $__internal_af0a69ad1246c86f6e5a954a4399d5d6d8a9a5b7b92252aedaa37b7021663a84->enter($__internal_af0a69ad1246c86f6e5a954a4399d5d6d8a9a5b7b92252aedaa37b7021663a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_af0a69ad1246c86f6e5a954a4399d5d6d8a9a5b7b92252aedaa37b7021663a84->leave($__internal_af0a69ad1246c86f6e5a954a4399d5d6d8a9a5b7b92252aedaa37b7021663a84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ea6ca4138cd2145b645f69c16bdeb4b1bca97c453292fb9b10d54c9c43c00bd = $this->env->getExtension("native_profiler");
        $__internal_5ea6ca4138cd2145b645f69c16bdeb4b1bca97c453292fb9b10d54c9c43c00bd->enter($__internal_5ea6ca4138cd2145b645f69c16bdeb4b1bca97c453292fb9b10d54c9c43c00bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ea6ca4138cd2145b645f69c16bdeb4b1bca97c453292fb9b10d54c9c43c00bd->leave($__internal_5ea6ca4138cd2145b645f69c16bdeb4b1bca97c453292fb9b10d54c9c43c00bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_678ccf52d813a44468714069c4ecf347a1cdbbc02a576ee0e7963e17e76c50f5 = $this->env->getExtension("native_profiler");
        $__internal_678ccf52d813a44468714069c4ecf347a1cdbbc02a576ee0e7963e17e76c50f5->enter($__internal_678ccf52d813a44468714069c4ecf347a1cdbbc02a576ee0e7963e17e76c50f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_678ccf52d813a44468714069c4ecf347a1cdbbc02a576ee0e7963e17e76c50f5->leave($__internal_678ccf52d813a44468714069c4ecf347a1cdbbc02a576ee0e7963e17e76c50f5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cbbc3e53026640fc24dbb8721577dd6eaa6c7f21e04d8199f34f315e1de4f41 = $this->env->getExtension("native_profiler");
        $__internal_0cbbc3e53026640fc24dbb8721577dd6eaa6c7f21e04d8199f34f315e1de4f41->enter($__internal_0cbbc3e53026640fc24dbb8721577dd6eaa6c7f21e04d8199f34f315e1de4f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cbbc3e53026640fc24dbb8721577dd6eaa6c7f21e04d8199f34f315e1de4f41->leave($__internal_0cbbc3e53026640fc24dbb8721577dd6eaa6c7f21e04d8199f34f315e1de4f41_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11d2a2585d05528cbb395bf410e3deb805eced2d54fd633dd62a0b98e5b55c32 = $this->env->getExtension("native_profiler");
        $__internal_11d2a2585d05528cbb395bf410e3deb805eced2d54fd633dd62a0b98e5b55c32->enter($__internal_11d2a2585d05528cbb395bf410e3deb805eced2d54fd633dd62a0b98e5b55c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_11d2a2585d05528cbb395bf410e3deb805eced2d54fd633dd62a0b98e5b55c32->leave($__internal_11d2a2585d05528cbb395bf410e3deb805eced2d54fd633dd62a0b98e5b55c32_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
