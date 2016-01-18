<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a1f3dc621863901553263189f35e16d027596af60c86e8083bd177daa12909c0 extends Twig_Template
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
        $__internal_af9dcd2e7b77bad8c9747ba8f4d769959d2ce4ab45e147ae2daa94e4e824f046 = $this->env->getExtension("native_profiler");
        $__internal_af9dcd2e7b77bad8c9747ba8f4d769959d2ce4ab45e147ae2daa94e4e824f046->enter($__internal_af9dcd2e7b77bad8c9747ba8f4d769959d2ce4ab45e147ae2daa94e4e824f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_af9dcd2e7b77bad8c9747ba8f4d769959d2ce4ab45e147ae2daa94e4e824f046->leave($__internal_af9dcd2e7b77bad8c9747ba8f4d769959d2ce4ab45e147ae2daa94e4e824f046_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
