<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cd3d8c4de99b1318f1b05f67d697539cc8cd536f00ad4116236ba469fa06deab extends Twig_Template
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
        $__internal_1111a3629372045ddb292a199f2d36580e23207237cc8eac06b67e84b87b6522 = $this->env->getExtension("native_profiler");
        $__internal_1111a3629372045ddb292a199f2d36580e23207237cc8eac06b67e84b87b6522->enter($__internal_1111a3629372045ddb292a199f2d36580e23207237cc8eac06b67e84b87b6522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1111a3629372045ddb292a199f2d36580e23207237cc8eac06b67e84b87b6522->leave($__internal_1111a3629372045ddb292a199f2d36580e23207237cc8eac06b67e84b87b6522_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d430f6aefd4f60191dfe273ddc52f31b1dcb3ae5331fa6edea4ba69d6c531069 = $this->env->getExtension("native_profiler");
        $__internal_d430f6aefd4f60191dfe273ddc52f31b1dcb3ae5331fa6edea4ba69d6c531069->enter($__internal_d430f6aefd4f60191dfe273ddc52f31b1dcb3ae5331fa6edea4ba69d6c531069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d430f6aefd4f60191dfe273ddc52f31b1dcb3ae5331fa6edea4ba69d6c531069->leave($__internal_d430f6aefd4f60191dfe273ddc52f31b1dcb3ae5331fa6edea4ba69d6c531069_prof);

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
