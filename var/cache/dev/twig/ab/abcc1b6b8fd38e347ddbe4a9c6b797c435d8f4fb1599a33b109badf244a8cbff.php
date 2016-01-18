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
        $__internal_22b2a91c86c18204aa7217d69a29df616c4d17f161fc104419db8d0ffb678d79 = $this->env->getExtension("native_profiler");
        $__internal_22b2a91c86c18204aa7217d69a29df616c4d17f161fc104419db8d0ffb678d79->enter($__internal_22b2a91c86c18204aa7217d69a29df616c4d17f161fc104419db8d0ffb678d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_22b2a91c86c18204aa7217d69a29df616c4d17f161fc104419db8d0ffb678d79->leave($__internal_22b2a91c86c18204aa7217d69a29df616c4d17f161fc104419db8d0ffb678d79_prof);

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
