<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_624a5197ff3282a8fd128be084e10ab4fe5aaadcac7bbc35a5e49b6c97225d70 extends Twig_Template
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
        $__internal_a028fe1f0f3932f2a2337c1f3140d7f8f80e0d14c5820f690cb51b962ba1ed18 = $this->env->getExtension("native_profiler");
        $__internal_a028fe1f0f3932f2a2337c1f3140d7f8f80e0d14c5820f690cb51b962ba1ed18->enter($__internal_a028fe1f0f3932f2a2337c1f3140d7f8f80e0d14c5820f690cb51b962ba1ed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a028fe1f0f3932f2a2337c1f3140d7f8f80e0d14c5820f690cb51b962ba1ed18->leave($__internal_a028fe1f0f3932f2a2337c1f3140d7f8f80e0d14c5820f690cb51b962ba1ed18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
