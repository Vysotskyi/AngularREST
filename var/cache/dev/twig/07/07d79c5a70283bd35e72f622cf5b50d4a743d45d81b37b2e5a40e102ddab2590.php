<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e3d286204cefda551ad04721d8d2a23451f510023b6f2eb42ff9397fba47cd60 extends Twig_Template
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
        $__internal_1431fbab32ece5eecfb7bcac4933e2e2de9aeb7616bee99bd54218a1fcd35dc0 = $this->env->getExtension("native_profiler");
        $__internal_1431fbab32ece5eecfb7bcac4933e2e2de9aeb7616bee99bd54218a1fcd35dc0->enter($__internal_1431fbab32ece5eecfb7bcac4933e2e2de9aeb7616bee99bd54218a1fcd35dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1431fbab32ece5eecfb7bcac4933e2e2de9aeb7616bee99bd54218a1fcd35dc0->leave($__internal_1431fbab32ece5eecfb7bcac4933e2e2de9aeb7616bee99bd54218a1fcd35dc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
