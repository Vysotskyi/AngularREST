<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_61183ff317e47867961cc7fc92276c08855ced0dbb4570105165975a8f37bfa1 extends Twig_Template
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
        $__internal_37ffbe20ef0f9b86019cef041386075d3466e8e57fb7294d4eccad7a584bd77d = $this->env->getExtension("native_profiler");
        $__internal_37ffbe20ef0f9b86019cef041386075d3466e8e57fb7294d4eccad7a584bd77d->enter($__internal_37ffbe20ef0f9b86019cef041386075d3466e8e57fb7294d4eccad7a584bd77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_37ffbe20ef0f9b86019cef041386075d3466e8e57fb7294d4eccad7a584bd77d->leave($__internal_37ffbe20ef0f9b86019cef041386075d3466e8e57fb7294d4eccad7a584bd77d_prof);

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
