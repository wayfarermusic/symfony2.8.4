<?php

/* SystemCoreBundle:Admin:Setting/index.html.twig */
class __TwigTemplate_1ba534b3641919b94ed68e2e6fbcb3c20df4e643acba59578b6145a5de81413c extends Twig_Template
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
        $__internal_59a8114cfc6d062d5910c9d0f8cab64b344895cd036a2886048fcd3c2eb75a15 = $this->env->getExtension("native_profiler");
        $__internal_59a8114cfc6d062d5910c9d0f8cab64b344895cd036a2886048fcd3c2eb75a15->enter($__internal_59a8114cfc6d062d5910c9d0f8cab64b344895cd036a2886048fcd3c2eb75a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SystemCoreBundle:Admin:Setting/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head>
    <title>管理画面</title>
</head>
<body>
    <h1>管理画面</h1>
    
    <div id=\"container\">
        
        <div id=\"contents\">
            
            <div>
                
                <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_setting");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
                
                <dl>
                    <dt>Application Id</dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt>アプリケーション名</dt>
                    <dd>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "application_name", array()), 'widget');
        echo "</dd>
                </dl>
                <dl>
                    <dt>呼び出し元URL</dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt>有効・無効</dt>
                    <dd></dd>
                </dl>
                
                </form>
                
            </div>
            
        </div>
        
    </div>
    
</body>";
        
        $__internal_59a8114cfc6d062d5910c9d0f8cab64b344895cd036a2886048fcd3c2eb75a15->leave($__internal_59a8114cfc6d062d5910c9d0f8cab64b344895cd036a2886048fcd3c2eb75a15_prof);

    }

    public function getTemplateName()
    {
        return "SystemCoreBundle:Admin:Setting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/*     <title>管理画面</title>*/
/* </head>*/
/* <body>*/
/*     <h1>管理画面</h1>*/
/*     */
/*     <div id="container">*/
/*         */
/*         <div id="contents">*/
/*             */
/*             <div>*/
/*                 */
/*                 <form action="{{ path('admin_setting') }}" method="post" {{form_enctype(form)}}*/
/*                 */
/*                 <dl>*/
/*                     <dt>Application Id</dt>*/
/*                     <dd></dd>*/
/*                 </dl>*/
/*                 <dl>*/
/*                     <dt>アプリケーション名</dt>*/
/*                     <dd>{{ form_widget(form.application_name) }}</dd>*/
/*                 </dl>*/
/*                 <dl>*/
/*                     <dt>呼び出し元URL</dt>*/
/*                     <dd></dd>*/
/*                 </dl>*/
/*                 <dl>*/
/*                     <dt>有効・無効</dt>*/
/*                     <dd></dd>*/
/*                 </dl>*/
/*                 */
/*                 </form>*/
/*                 */
/*             </div>*/
/*             */
/*         </div>*/
/*         */
/*     </div>*/
/*     */
/* </body>*/
