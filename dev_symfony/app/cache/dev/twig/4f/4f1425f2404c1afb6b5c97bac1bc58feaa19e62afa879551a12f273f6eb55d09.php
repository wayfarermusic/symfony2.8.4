<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6510f6633c3ab22ec9f2eea56de80dd099d0e868e41c9c1d4ec5814aed3ad867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b141f4e03c5403ad180d3db0c45f161ba1c211d8c357dfa8ec361cb85c5c876a = $this->env->getExtension("native_profiler");
        $__internal_b141f4e03c5403ad180d3db0c45f161ba1c211d8c357dfa8ec361cb85c5c876a->enter($__internal_b141f4e03c5403ad180d3db0c45f161ba1c211d8c357dfa8ec361cb85c5c876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b141f4e03c5403ad180d3db0c45f161ba1c211d8c357dfa8ec361cb85c5c876a->leave($__internal_b141f4e03c5403ad180d3db0c45f161ba1c211d8c357dfa8ec361cb85c5c876a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a28cdb96241a91951f458b667226909977e1423fbffdc78dfd545ae441e4371d = $this->env->getExtension("native_profiler");
        $__internal_a28cdb96241a91951f458b667226909977e1423fbffdc78dfd545ae441e4371d->enter($__internal_a28cdb96241a91951f458b667226909977e1423fbffdc78dfd545ae441e4371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a28cdb96241a91951f458b667226909977e1423fbffdc78dfd545ae441e4371d->leave($__internal_a28cdb96241a91951f458b667226909977e1423fbffdc78dfd545ae441e4371d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
