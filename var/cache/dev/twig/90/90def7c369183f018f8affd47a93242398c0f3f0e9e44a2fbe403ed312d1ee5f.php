<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b9cfc67e53f6736e0a7586d93660b876b941ce4409e8aa4835fb5a577535d6a4 extends Twig_Template
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
        $__internal_a112a4029c4c6418ceabd22162841f2fb0128cf8e26029d74770e9e0cbe9ff98 = $this->env->getExtension("native_profiler");
        $__internal_a112a4029c4c6418ceabd22162841f2fb0128cf8e26029d74770e9e0cbe9ff98->enter($__internal_a112a4029c4c6418ceabd22162841f2fb0128cf8e26029d74770e9e0cbe9ff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a112a4029c4c6418ceabd22162841f2fb0128cf8e26029d74770e9e0cbe9ff98->leave($__internal_a112a4029c4c6418ceabd22162841f2fb0128cf8e26029d74770e9e0cbe9ff98_prof);

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
