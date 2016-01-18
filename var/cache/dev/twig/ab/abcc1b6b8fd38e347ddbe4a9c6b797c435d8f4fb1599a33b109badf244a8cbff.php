<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cd9ee9ea14631ad0ddff558f0e2ec42d1ea0b0763e58fff996cd79f4dd2322dc extends Twig_Template
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
        $__internal_ff930709ceae7869f7ac0eb440d55be57089686f90d29a4921f78bfb29bb7709 = $this->env->getExtension("native_profiler");
        $__internal_ff930709ceae7869f7ac0eb440d55be57089686f90d29a4921f78bfb29bb7709->enter($__internal_ff930709ceae7869f7ac0eb440d55be57089686f90d29a4921f78bfb29bb7709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ff930709ceae7869f7ac0eb440d55be57089686f90d29a4921f78bfb29bb7709->leave($__internal_ff930709ceae7869f7ac0eb440d55be57089686f90d29a4921f78bfb29bb7709_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
