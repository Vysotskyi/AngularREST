<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8b2a3e7a877f0534d5f8af3f0bb1b2e7bfe280720229cabbc9fb838b55ca8133 extends Twig_Template
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
        $__internal_165bd1126f7c1e81ba718d0f04a457ca58a334726530cee4e0e3eb70c79da3ac = $this->env->getExtension("native_profiler");
        $__internal_165bd1126f7c1e81ba718d0f04a457ca58a334726530cee4e0e3eb70c79da3ac->enter($__internal_165bd1126f7c1e81ba718d0f04a457ca58a334726530cee4e0e3eb70c79da3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165bd1126f7c1e81ba718d0f04a457ca58a334726530cee4e0e3eb70c79da3ac->leave($__internal_165bd1126f7c1e81ba718d0f04a457ca58a334726530cee4e0e3eb70c79da3ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_489aa1d6e80393b6b2685447ed55b4101d979bdf33f395b8c842f3240cd102dc = $this->env->getExtension("native_profiler");
        $__internal_489aa1d6e80393b6b2685447ed55b4101d979bdf33f395b8c842f3240cd102dc->enter($__internal_489aa1d6e80393b6b2685447ed55b4101d979bdf33f395b8c842f3240cd102dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_489aa1d6e80393b6b2685447ed55b4101d979bdf33f395b8c842f3240cd102dc->leave($__internal_489aa1d6e80393b6b2685447ed55b4101d979bdf33f395b8c842f3240cd102dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed61e0346348c6902f60e34eeeb5f158d3baa091685588f3df774a4e0b2493a1 = $this->env->getExtension("native_profiler");
        $__internal_ed61e0346348c6902f60e34eeeb5f158d3baa091685588f3df774a4e0b2493a1->enter($__internal_ed61e0346348c6902f60e34eeeb5f158d3baa091685588f3df774a4e0b2493a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed61e0346348c6902f60e34eeeb5f158d3baa091685588f3df774a4e0b2493a1->leave($__internal_ed61e0346348c6902f60e34eeeb5f158d3baa091685588f3df774a4e0b2493a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e643c1355c7d9d3f62e800670898cf0ce80853314e14b2384681c1b434174939 = $this->env->getExtension("native_profiler");
        $__internal_e643c1355c7d9d3f62e800670898cf0ce80853314e14b2384681c1b434174939->enter($__internal_e643c1355c7d9d3f62e800670898cf0ce80853314e14b2384681c1b434174939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e643c1355c7d9d3f62e800670898cf0ce80853314e14b2384681c1b434174939->leave($__internal_e643c1355c7d9d3f62e800670898cf0ce80853314e14b2384681c1b434174939_prof);

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
