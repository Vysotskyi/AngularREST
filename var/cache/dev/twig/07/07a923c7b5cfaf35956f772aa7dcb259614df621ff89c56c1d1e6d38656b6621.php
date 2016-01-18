<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5ef1372cee63f2928d2a4fc3f06d804bf28b81f63eb9d9e29970c7d3f888f921 extends Twig_Template
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
        $__internal_43c0c3f1b81b786e49e70cdef73e74de726f15fa412ba515d75c4b8258cc78ea = $this->env->getExtension("native_profiler");
        $__internal_43c0c3f1b81b786e49e70cdef73e74de726f15fa412ba515d75c4b8258cc78ea->enter($__internal_43c0c3f1b81b786e49e70cdef73e74de726f15fa412ba515d75c4b8258cc78ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_43c0c3f1b81b786e49e70cdef73e74de726f15fa412ba515d75c4b8258cc78ea->leave($__internal_43c0c3f1b81b786e49e70cdef73e74de726f15fa412ba515d75c4b8258cc78ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
