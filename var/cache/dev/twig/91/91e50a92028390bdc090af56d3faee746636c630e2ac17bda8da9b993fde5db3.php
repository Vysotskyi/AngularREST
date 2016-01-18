<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a6fea8b86bbf3c4a61e7f4d48a0fda7fef4873f6222002b69aa7f31c2772e32b extends Twig_Template
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
        $__internal_7059cb26185cd9a7db841468e5cfe15e17095a9bbd1e8985b754762ba25cc9a6 = $this->env->getExtension("native_profiler");
        $__internal_7059cb26185cd9a7db841468e5cfe15e17095a9bbd1e8985b754762ba25cc9a6->enter($__internal_7059cb26185cd9a7db841468e5cfe15e17095a9bbd1e8985b754762ba25cc9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7059cb26185cd9a7db841468e5cfe15e17095a9bbd1e8985b754762ba25cc9a6->leave($__internal_7059cb26185cd9a7db841468e5cfe15e17095a9bbd1e8985b754762ba25cc9a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
