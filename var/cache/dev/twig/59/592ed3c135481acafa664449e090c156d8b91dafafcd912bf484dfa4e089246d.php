<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1a43be9794fc9aab9174aee22b007f3c9f03cdaa3c17ffec0e32b2e3a54ff23b extends Twig_Template
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
        $__internal_16c0b49bfd0e5eb4d16ec873e150134d75e7254e1d405ca4dd4981b5d14c302d = $this->env->getExtension("native_profiler");
        $__internal_16c0b49bfd0e5eb4d16ec873e150134d75e7254e1d405ca4dd4981b5d14c302d->enter($__internal_16c0b49bfd0e5eb4d16ec873e150134d75e7254e1d405ca4dd4981b5d14c302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_16c0b49bfd0e5eb4d16ec873e150134d75e7254e1d405ca4dd4981b5d14c302d->leave($__internal_16c0b49bfd0e5eb4d16ec873e150134d75e7254e1d405ca4dd4981b5d14c302d_prof);

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
