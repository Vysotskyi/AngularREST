<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6d000b9dbbf44b0129c03b542133707fe764cfe4a5dffec9c8b691c1fe3f1d82 extends Twig_Template
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
        $__internal_a5488b7af06e586d40623a396aed3ff9d6aef2e722c9e8999eba9a4ab99874d3 = $this->env->getExtension("native_profiler");
        $__internal_a5488b7af06e586d40623a396aed3ff9d6aef2e722c9e8999eba9a4ab99874d3->enter($__internal_a5488b7af06e586d40623a396aed3ff9d6aef2e722c9e8999eba9a4ab99874d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a5488b7af06e586d40623a396aed3ff9d6aef2e722c9e8999eba9a4ab99874d3->leave($__internal_a5488b7af06e586d40623a396aed3ff9d6aef2e722c9e8999eba9a4ab99874d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
