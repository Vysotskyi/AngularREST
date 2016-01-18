<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d53b5012ddfb01dac31ca0a286cd3f68211619fabd7a93d318837bbf477ff74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dbb6766fe7657962b7b8e15e3bd5cc3970aac0ec84632b5e19e9285a5a2c736 = $this->env->getExtension("native_profiler");
        $__internal_3dbb6766fe7657962b7b8e15e3bd5cc3970aac0ec84632b5e19e9285a5a2c736->enter($__internal_3dbb6766fe7657962b7b8e15e3bd5cc3970aac0ec84632b5e19e9285a5a2c736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dbb6766fe7657962b7b8e15e3bd5cc3970aac0ec84632b5e19e9285a5a2c736->leave($__internal_3dbb6766fe7657962b7b8e15e3bd5cc3970aac0ec84632b5e19e9285a5a2c736_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1c033c33c660396712a7252df609ba5207f0eb3c89ff9fc30fb6159d9782f89 = $this->env->getExtension("native_profiler");
        $__internal_e1c033c33c660396712a7252df609ba5207f0eb3c89ff9fc30fb6159d9782f89->enter($__internal_e1c033c33c660396712a7252df609ba5207f0eb3c89ff9fc30fb6159d9782f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1c033c33c660396712a7252df609ba5207f0eb3c89ff9fc30fb6159d9782f89->leave($__internal_e1c033c33c660396712a7252df609ba5207f0eb3c89ff9fc30fb6159d9782f89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0eaef492987836d61938938a271e1a8ac1bc07217075404f2476e330887ae289 = $this->env->getExtension("native_profiler");
        $__internal_0eaef492987836d61938938a271e1a8ac1bc07217075404f2476e330887ae289->enter($__internal_0eaef492987836d61938938a271e1a8ac1bc07217075404f2476e330887ae289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0eaef492987836d61938938a271e1a8ac1bc07217075404f2476e330887ae289->leave($__internal_0eaef492987836d61938938a271e1a8ac1bc07217075404f2476e330887ae289_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_815901536e2018468b16c88005a310dd7bc27186ad524d213074a47b340cad3e = $this->env->getExtension("native_profiler");
        $__internal_815901536e2018468b16c88005a310dd7bc27186ad524d213074a47b340cad3e->enter($__internal_815901536e2018468b16c88005a310dd7bc27186ad524d213074a47b340cad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_815901536e2018468b16c88005a310dd7bc27186ad524d213074a47b340cad3e->leave($__internal_815901536e2018468b16c88005a310dd7bc27186ad524d213074a47b340cad3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
