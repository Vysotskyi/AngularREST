<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f1fc73de435ecfb206b29e7d4d9e72eb6afff90a1a47a6f856922516fb6c8534 extends Twig_Template
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
        $__internal_9f542b1dfdcffccbf3166c117a63e8b9234e112ab3557b099b04c08ce0b88ad4 = $this->env->getExtension("native_profiler");
        $__internal_9f542b1dfdcffccbf3166c117a63e8b9234e112ab3557b099b04c08ce0b88ad4->enter($__internal_9f542b1dfdcffccbf3166c117a63e8b9234e112ab3557b099b04c08ce0b88ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9f542b1dfdcffccbf3166c117a63e8b9234e112ab3557b099b04c08ce0b88ad4->leave($__internal_9f542b1dfdcffccbf3166c117a63e8b9234e112ab3557b099b04c08ce0b88ad4_prof);

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
