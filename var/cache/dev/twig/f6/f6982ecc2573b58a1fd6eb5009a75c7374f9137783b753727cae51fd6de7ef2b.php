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
        $__internal_99bd73fd4df598504f05bb757aef57c73b78e983c1ee2b332b3a34cca409b4b3 = $this->env->getExtension("native_profiler");
        $__internal_99bd73fd4df598504f05bb757aef57c73b78e983c1ee2b332b3a34cca409b4b3->enter($__internal_99bd73fd4df598504f05bb757aef57c73b78e983c1ee2b332b3a34cca409b4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99bd73fd4df598504f05bb757aef57c73b78e983c1ee2b332b3a34cca409b4b3->leave($__internal_99bd73fd4df598504f05bb757aef57c73b78e983c1ee2b332b3a34cca409b4b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d82ae041611729c7495c0956dba1f73166ca85f6527d3355403536e0d006b11 = $this->env->getExtension("native_profiler");
        $__internal_3d82ae041611729c7495c0956dba1f73166ca85f6527d3355403536e0d006b11->enter($__internal_3d82ae041611729c7495c0956dba1f73166ca85f6527d3355403536e0d006b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d82ae041611729c7495c0956dba1f73166ca85f6527d3355403536e0d006b11->leave($__internal_3d82ae041611729c7495c0956dba1f73166ca85f6527d3355403536e0d006b11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d626c81d2bc9c8d71881511fb83ef60c0a0225ec5fac9cbf0c0514f67eaae3b = $this->env->getExtension("native_profiler");
        $__internal_2d626c81d2bc9c8d71881511fb83ef60c0a0225ec5fac9cbf0c0514f67eaae3b->enter($__internal_2d626c81d2bc9c8d71881511fb83ef60c0a0225ec5fac9cbf0c0514f67eaae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d626c81d2bc9c8d71881511fb83ef60c0a0225ec5fac9cbf0c0514f67eaae3b->leave($__internal_2d626c81d2bc9c8d71881511fb83ef60c0a0225ec5fac9cbf0c0514f67eaae3b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_622832277bb080bee9f3f3ebea6b3ff7303a809347f5633dc6939f081e8dd635 = $this->env->getExtension("native_profiler");
        $__internal_622832277bb080bee9f3f3ebea6b3ff7303a809347f5633dc6939f081e8dd635->enter($__internal_622832277bb080bee9f3f3ebea6b3ff7303a809347f5633dc6939f081e8dd635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_622832277bb080bee9f3f3ebea6b3ff7303a809347f5633dc6939f081e8dd635->leave($__internal_622832277bb080bee9f3f3ebea6b3ff7303a809347f5633dc6939f081e8dd635_prof);

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
