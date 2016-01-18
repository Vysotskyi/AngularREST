<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3739203fa401028f2e371f3e6c2130c3ff9006c4779a1efbc7d744f375894a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e9c7bb51a958fed96f687e7b44f224375fdea21e7b1cbe8f3f0312b321f88267 = $this->env->getExtension("native_profiler");
        $__internal_e9c7bb51a958fed96f687e7b44f224375fdea21e7b1cbe8f3f0312b321f88267->enter($__internal_e9c7bb51a958fed96f687e7b44f224375fdea21e7b1cbe8f3f0312b321f88267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c7bb51a958fed96f687e7b44f224375fdea21e7b1cbe8f3f0312b321f88267->leave($__internal_e9c7bb51a958fed96f687e7b44f224375fdea21e7b1cbe8f3f0312b321f88267_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f45d37747e99542d4dee7b933e48934db691fdabb5e916837ec1fc77ecc69b2 = $this->env->getExtension("native_profiler");
        $__internal_2f45d37747e99542d4dee7b933e48934db691fdabb5e916837ec1fc77ecc69b2->enter($__internal_2f45d37747e99542d4dee7b933e48934db691fdabb5e916837ec1fc77ecc69b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f45d37747e99542d4dee7b933e48934db691fdabb5e916837ec1fc77ecc69b2->leave($__internal_2f45d37747e99542d4dee7b933e48934db691fdabb5e916837ec1fc77ecc69b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_422c7845883e5d6b3a631be5e293c4a9e48b2aa2f2d7bdefe2e14dce1deb7ba6 = $this->env->getExtension("native_profiler");
        $__internal_422c7845883e5d6b3a631be5e293c4a9e48b2aa2f2d7bdefe2e14dce1deb7ba6->enter($__internal_422c7845883e5d6b3a631be5e293c4a9e48b2aa2f2d7bdefe2e14dce1deb7ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_422c7845883e5d6b3a631be5e293c4a9e48b2aa2f2d7bdefe2e14dce1deb7ba6->leave($__internal_422c7845883e5d6b3a631be5e293c4a9e48b2aa2f2d7bdefe2e14dce1deb7ba6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
