<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b8cc68b28efe8fd586d0412160362574b06b8a91ef7b295909ff15439e973523 extends Twig_Template
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
        $__internal_c749b9f0805334ae03f5355e7a4fff95c364e4dfe44619cf0337c17f5ae61439 = $this->env->getExtension("native_profiler");
        $__internal_c749b9f0805334ae03f5355e7a4fff95c364e4dfe44619cf0337c17f5ae61439->enter($__internal_c749b9f0805334ae03f5355e7a4fff95c364e4dfe44619cf0337c17f5ae61439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c749b9f0805334ae03f5355e7a4fff95c364e4dfe44619cf0337c17f5ae61439->leave($__internal_c749b9f0805334ae03f5355e7a4fff95c364e4dfe44619cf0337c17f5ae61439_prof);

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
