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
        $__internal_97f3742fec16b9097c9e1f7222935d5f1227139981a9902acb4724216ac22a9d = $this->env->getExtension("native_profiler");
        $__internal_97f3742fec16b9097c9e1f7222935d5f1227139981a9902acb4724216ac22a9d->enter($__internal_97f3742fec16b9097c9e1f7222935d5f1227139981a9902acb4724216ac22a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_97f3742fec16b9097c9e1f7222935d5f1227139981a9902acb4724216ac22a9d->leave($__internal_97f3742fec16b9097c9e1f7222935d5f1227139981a9902acb4724216ac22a9d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e909cf98541fd888b961253d5e4b0b0719d723eeffd0c173cb31660d8d8b5939 = $this->env->getExtension("native_profiler");
        $__internal_e909cf98541fd888b961253d5e4b0b0719d723eeffd0c173cb31660d8d8b5939->enter($__internal_e909cf98541fd888b961253d5e4b0b0719d723eeffd0c173cb31660d8d8b5939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e909cf98541fd888b961253d5e4b0b0719d723eeffd0c173cb31660d8d8b5939->leave($__internal_e909cf98541fd888b961253d5e4b0b0719d723eeffd0c173cb31660d8d8b5939_prof);

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
