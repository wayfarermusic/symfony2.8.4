<?php

/* ::base.html.twig */
class __TwigTemplate_f2a90033c4ea8ca1c4e95dcf5e47fb5fcdacee9a434666e2e3b55cc5bd77680d extends Twig_Template
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
        $__internal_978ab80b877371d802692959fc84c94247e3175c8f393ba1dbab03358cf48619 = $this->env->getExtension("native_profiler");
        $__internal_978ab80b877371d802692959fc84c94247e3175c8f393ba1dbab03358cf48619->enter($__internal_978ab80b877371d802692959fc84c94247e3175c8f393ba1dbab03358cf48619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_978ab80b877371d802692959fc84c94247e3175c8f393ba1dbab03358cf48619->leave($__internal_978ab80b877371d802692959fc84c94247e3175c8f393ba1dbab03358cf48619_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c9c568911da7ef297de39169e1c0e6c5223506c75cde0917f17e85bc452f05f = $this->env->getExtension("native_profiler");
        $__internal_6c9c568911da7ef297de39169e1c0e6c5223506c75cde0917f17e85bc452f05f->enter($__internal_6c9c568911da7ef297de39169e1c0e6c5223506c75cde0917f17e85bc452f05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6c9c568911da7ef297de39169e1c0e6c5223506c75cde0917f17e85bc452f05f->leave($__internal_6c9c568911da7ef297de39169e1c0e6c5223506c75cde0917f17e85bc452f05f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2579baffd8f407806b44803d977474edce7c6d1bcd83e4cc0742c6278782ce23 = $this->env->getExtension("native_profiler");
        $__internal_2579baffd8f407806b44803d977474edce7c6d1bcd83e4cc0742c6278782ce23->enter($__internal_2579baffd8f407806b44803d977474edce7c6d1bcd83e4cc0742c6278782ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2579baffd8f407806b44803d977474edce7c6d1bcd83e4cc0742c6278782ce23->leave($__internal_2579baffd8f407806b44803d977474edce7c6d1bcd83e4cc0742c6278782ce23_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3bf1ce7cd4f885efb1ca7f7c44fac6a5766b9b06978629b1247ccda4af7422b = $this->env->getExtension("native_profiler");
        $__internal_c3bf1ce7cd4f885efb1ca7f7c44fac6a5766b9b06978629b1247ccda4af7422b->enter($__internal_c3bf1ce7cd4f885efb1ca7f7c44fac6a5766b9b06978629b1247ccda4af7422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3bf1ce7cd4f885efb1ca7f7c44fac6a5766b9b06978629b1247ccda4af7422b->leave($__internal_c3bf1ce7cd4f885efb1ca7f7c44fac6a5766b9b06978629b1247ccda4af7422b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93b2d21a59acd8d3c82bc4e25dbe14bb05ee70890c87d35e50e4f7f682191a5c = $this->env->getExtension("native_profiler");
        $__internal_93b2d21a59acd8d3c82bc4e25dbe14bb05ee70890c87d35e50e4f7f682191a5c->enter($__internal_93b2d21a59acd8d3c82bc4e25dbe14bb05ee70890c87d35e50e4f7f682191a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_93b2d21a59acd8d3c82bc4e25dbe14bb05ee70890c87d35e50e4f7f682191a5c->leave($__internal_93b2d21a59acd8d3c82bc4e25dbe14bb05ee70890c87d35e50e4f7f682191a5c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
