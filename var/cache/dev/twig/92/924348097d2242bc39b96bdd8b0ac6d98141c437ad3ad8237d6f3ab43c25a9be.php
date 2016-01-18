<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6542491cfe4752601ee454fde27213c5cddcc654ae659698f7ed849a26b6ea71 extends Twig_Template
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
        $__internal_d32a08d1188d8c0c084bd840bee94f10020e293d381bd56b96a54536fe391282 = $this->env->getExtension("native_profiler");
        $__internal_d32a08d1188d8c0c084bd840bee94f10020e293d381bd56b96a54536fe391282->enter($__internal_d32a08d1188d8c0c084bd840bee94f10020e293d381bd56b96a54536fe391282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d32a08d1188d8c0c084bd840bee94f10020e293d381bd56b96a54536fe391282->leave($__internal_d32a08d1188d8c0c084bd840bee94f10020e293d381bd56b96a54536fe391282_prof);

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
