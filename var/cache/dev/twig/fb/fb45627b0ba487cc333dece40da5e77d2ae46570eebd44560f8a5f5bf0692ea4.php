<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_95ed8810d7199f9db2db7b7c974db8284c3d119418895b75247ce8e09b1f799a extends Twig_Template
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
        $__internal_92380d16bc8a1242efa18b500269b27759c1fbc87da7fb5422c0597829825ee7 = $this->env->getExtension("native_profiler");
        $__internal_92380d16bc8a1242efa18b500269b27759c1fbc87da7fb5422c0597829825ee7->enter($__internal_92380d16bc8a1242efa18b500269b27759c1fbc87da7fb5422c0597829825ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_92380d16bc8a1242efa18b500269b27759c1fbc87da7fb5422c0597829825ee7->leave($__internal_92380d16bc8a1242efa18b500269b27759c1fbc87da7fb5422c0597829825ee7_prof);

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
