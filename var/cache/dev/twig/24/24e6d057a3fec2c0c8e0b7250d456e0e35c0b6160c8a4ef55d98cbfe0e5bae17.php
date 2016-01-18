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
        $__internal_5655e26b5e549585040113f49ee30a93c1eccc3bada64bb401597f23d11d180c = $this->env->getExtension("native_profiler");
        $__internal_5655e26b5e549585040113f49ee30a93c1eccc3bada64bb401597f23d11d180c->enter($__internal_5655e26b5e549585040113f49ee30a93c1eccc3bada64bb401597f23d11d180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_5655e26b5e549585040113f49ee30a93c1eccc3bada64bb401597f23d11d180c->leave($__internal_5655e26b5e549585040113f49ee30a93c1eccc3bada64bb401597f23d11d180c_prof);

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
