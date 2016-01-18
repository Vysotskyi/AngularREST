<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c75693af0851ec1d8a867f978dfcb180018cbe6a81a10cc53e68026f4dc50883 extends Twig_Template
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
        $__internal_d41b9296499a24bdb2705b623ef2b6442acde21531e5efb2052d33154caaa8a5 = $this->env->getExtension("native_profiler");
        $__internal_d41b9296499a24bdb2705b623ef2b6442acde21531e5efb2052d33154caaa8a5->enter($__internal_d41b9296499a24bdb2705b623ef2b6442acde21531e5efb2052d33154caaa8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d41b9296499a24bdb2705b623ef2b6442acde21531e5efb2052d33154caaa8a5->leave($__internal_d41b9296499a24bdb2705b623ef2b6442acde21531e5efb2052d33154caaa8a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
