<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bc4277a24efb29dd2d8c464263a5fe8e4ae1ed3a80804ea8cbc4ffa485fbc15f extends Twig_Template
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
        $__internal_cc2cb2d7038065008bc8cb6817c473ec3dc5c9493bb67e8383d1b577e64e939d = $this->env->getExtension("native_profiler");
        $__internal_cc2cb2d7038065008bc8cb6817c473ec3dc5c9493bb67e8383d1b577e64e939d->enter($__internal_cc2cb2d7038065008bc8cb6817c473ec3dc5c9493bb67e8383d1b577e64e939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cc2cb2d7038065008bc8cb6817c473ec3dc5c9493bb67e8383d1b577e64e939d->leave($__internal_cc2cb2d7038065008bc8cb6817c473ec3dc5c9493bb67e8383d1b577e64e939d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
