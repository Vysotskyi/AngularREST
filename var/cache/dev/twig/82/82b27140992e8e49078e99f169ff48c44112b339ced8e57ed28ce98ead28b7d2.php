<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_855574e6965722e10a6b7186b40e6b478eb939954bd3db935822299b27ae9702 extends Twig_Template
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
        $__internal_a42504ba09db9449fd1e32d0e72373a49ee10bfe9bae32abaa977ab1da01c08f = $this->env->getExtension("native_profiler");
        $__internal_a42504ba09db9449fd1e32d0e72373a49ee10bfe9bae32abaa977ab1da01c08f->enter($__internal_a42504ba09db9449fd1e32d0e72373a49ee10bfe9bae32abaa977ab1da01c08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a42504ba09db9449fd1e32d0e72373a49ee10bfe9bae32abaa977ab1da01c08f->leave($__internal_a42504ba09db9449fd1e32d0e72373a49ee10bfe9bae32abaa977ab1da01c08f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
