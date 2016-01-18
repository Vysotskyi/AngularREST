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
        $__internal_bbae243c90314782c9bf319c4774f04f23f395430cd67a24f806903265bfa253 = $this->env->getExtension("native_profiler");
        $__internal_bbae243c90314782c9bf319c4774f04f23f395430cd67a24f806903265bfa253->enter($__internal_bbae243c90314782c9bf319c4774f04f23f395430cd67a24f806903265bfa253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bbae243c90314782c9bf319c4774f04f23f395430cd67a24f806903265bfa253->leave($__internal_bbae243c90314782c9bf319c4774f04f23f395430cd67a24f806903265bfa253_prof);

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
