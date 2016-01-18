<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0731d30227462b2cb2055e228ba98892eb1c32121ad5475beaf807aaf5165b6a extends Twig_Template
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
        $__internal_73dbd983f785be399ca1086db192342aa0e9f1e2aa3cd3b547bc758efcef1322 = $this->env->getExtension("native_profiler");
        $__internal_73dbd983f785be399ca1086db192342aa0e9f1e2aa3cd3b547bc758efcef1322->enter($__internal_73dbd983f785be399ca1086db192342aa0e9f1e2aa3cd3b547bc758efcef1322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_73dbd983f785be399ca1086db192342aa0e9f1e2aa3cd3b547bc758efcef1322->leave($__internal_73dbd983f785be399ca1086db192342aa0e9f1e2aa3cd3b547bc758efcef1322_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eddfbec5ee3c1542c416d1ee9b8ddf45a7964616193e312d7205fe32f881df74 = $this->env->getExtension("native_profiler");
        $__internal_eddfbec5ee3c1542c416d1ee9b8ddf45a7964616193e312d7205fe32f881df74->enter($__internal_eddfbec5ee3c1542c416d1ee9b8ddf45a7964616193e312d7205fe32f881df74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eddfbec5ee3c1542c416d1ee9b8ddf45a7964616193e312d7205fe32f881df74->leave($__internal_eddfbec5ee3c1542c416d1ee9b8ddf45a7964616193e312d7205fe32f881df74_prof);

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
