<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1570707a769f3a6f6ebf1055782b57c4dce2432a2d569f65b5346d2d5ddc2677 extends Twig_Template
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
        $__internal_58482eba99533a1ed4517330a19788b2298bdf5ff80d5d16ebbc85d484c09990 = $this->env->getExtension("native_profiler");
        $__internal_58482eba99533a1ed4517330a19788b2298bdf5ff80d5d16ebbc85d484c09990->enter($__internal_58482eba99533a1ed4517330a19788b2298bdf5ff80d5d16ebbc85d484c09990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58482eba99533a1ed4517330a19788b2298bdf5ff80d5d16ebbc85d484c09990->leave($__internal_58482eba99533a1ed4517330a19788b2298bdf5ff80d5d16ebbc85d484c09990_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_368718145a5011168c1777af1b2ee27b2cd5c7d68e88cd0f5b622ca17f8c1e31 = $this->env->getExtension("native_profiler");
        $__internal_368718145a5011168c1777af1b2ee27b2cd5c7d68e88cd0f5b622ca17f8c1e31->enter($__internal_368718145a5011168c1777af1b2ee27b2cd5c7d68e88cd0f5b622ca17f8c1e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_368718145a5011168c1777af1b2ee27b2cd5c7d68e88cd0f5b622ca17f8c1e31->leave($__internal_368718145a5011168c1777af1b2ee27b2cd5c7d68e88cd0f5b622ca17f8c1e31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fd51f87e506a4559968fe8472a9494da6b30bf2ef8146a78b1a38009f1fa450 = $this->env->getExtension("native_profiler");
        $__internal_6fd51f87e506a4559968fe8472a9494da6b30bf2ef8146a78b1a38009f1fa450->enter($__internal_6fd51f87e506a4559968fe8472a9494da6b30bf2ef8146a78b1a38009f1fa450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6fd51f87e506a4559968fe8472a9494da6b30bf2ef8146a78b1a38009f1fa450->leave($__internal_6fd51f87e506a4559968fe8472a9494da6b30bf2ef8146a78b1a38009f1fa450_prof);

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
