<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_761f65a5951e400667d85a8236e8eaf7ad50009a3c8bf04c00e3fc22bb4bd8c3 extends Twig_Template
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
        $__internal_47d01520f630cfc4abeeade4eacbd07c36e2fcb129e6e239ce0e35d90450ca9f = $this->env->getExtension("native_profiler");
        $__internal_47d01520f630cfc4abeeade4eacbd07c36e2fcb129e6e239ce0e35d90450ca9f->enter($__internal_47d01520f630cfc4abeeade4eacbd07c36e2fcb129e6e239ce0e35d90450ca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_47d01520f630cfc4abeeade4eacbd07c36e2fcb129e6e239ce0e35d90450ca9f->leave($__internal_47d01520f630cfc4abeeade4eacbd07c36e2fcb129e6e239ce0e35d90450ca9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */