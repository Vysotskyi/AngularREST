<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9ecc30b7316441e2cbe3c10b51e531f73200e85e6192044c1aae857c6e558a86 extends Twig_Template
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
        $__internal_d33b7c6ff3d1e30b34bb7fb456a211742658efeb1fef2a2801d8311ef39ba439 = $this->env->getExtension("native_profiler");
        $__internal_d33b7c6ff3d1e30b34bb7fb456a211742658efeb1fef2a2801d8311ef39ba439->enter($__internal_d33b7c6ff3d1e30b34bb7fb456a211742658efeb1fef2a2801d8311ef39ba439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d33b7c6ff3d1e30b34bb7fb456a211742658efeb1fef2a2801d8311ef39ba439->leave($__internal_d33b7c6ff3d1e30b34bb7fb456a211742658efeb1fef2a2801d8311ef39ba439_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
