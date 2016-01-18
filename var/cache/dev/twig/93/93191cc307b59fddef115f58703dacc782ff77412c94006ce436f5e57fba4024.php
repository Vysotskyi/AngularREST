<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c6f1cec44b43077498add2f7eb6940a032bdfe6c36a11bd5ad3f8e59225a7343 extends Twig_Template
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
        $__internal_a338d0981610814d490fbeaa5824bde688f7ac9b95698f69186afd7e7332d327 = $this->env->getExtension("native_profiler");
        $__internal_a338d0981610814d490fbeaa5824bde688f7ac9b95698f69186afd7e7332d327->enter($__internal_a338d0981610814d490fbeaa5824bde688f7ac9b95698f69186afd7e7332d327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a338d0981610814d490fbeaa5824bde688f7ac9b95698f69186afd7e7332d327->leave($__internal_a338d0981610814d490fbeaa5824bde688f7ac9b95698f69186afd7e7332d327_prof);

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
