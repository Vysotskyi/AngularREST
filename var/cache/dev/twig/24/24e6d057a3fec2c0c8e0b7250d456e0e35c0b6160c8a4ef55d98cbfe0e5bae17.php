<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c75696113860d58211c5f91bef22a7495369ef5ab6d9f9a9f669a4458c45a736 extends Twig_Template
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
        $__internal_853d1e304e4cdc3e57231efe20040b86338b02edadf7e45d4f438e7ef63b677f = $this->env->getExtension("native_profiler");
        $__internal_853d1e304e4cdc3e57231efe20040b86338b02edadf7e45d4f438e7ef63b677f->enter($__internal_853d1e304e4cdc3e57231efe20040b86338b02edadf7e45d4f438e7ef63b677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_853d1e304e4cdc3e57231efe20040b86338b02edadf7e45d4f438e7ef63b677f->leave($__internal_853d1e304e4cdc3e57231efe20040b86338b02edadf7e45d4f438e7ef63b677f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
