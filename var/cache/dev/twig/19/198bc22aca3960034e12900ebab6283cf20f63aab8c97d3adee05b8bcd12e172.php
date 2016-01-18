<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a6d1dc633d43285b69d4f3eeacc47f8cd36eea055282be2125e975b26461e78a extends Twig_Template
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
        $__internal_7d45d0843afa27002f83247a73362e63a2deac6a4681bf336516f1f78d269a98 = $this->env->getExtension("native_profiler");
        $__internal_7d45d0843afa27002f83247a73362e63a2deac6a4681bf336516f1f78d269a98->enter($__internal_7d45d0843afa27002f83247a73362e63a2deac6a4681bf336516f1f78d269a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7d45d0843afa27002f83247a73362e63a2deac6a4681bf336516f1f78d269a98->leave($__internal_7d45d0843afa27002f83247a73362e63a2deac6a4681bf336516f1f78d269a98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
