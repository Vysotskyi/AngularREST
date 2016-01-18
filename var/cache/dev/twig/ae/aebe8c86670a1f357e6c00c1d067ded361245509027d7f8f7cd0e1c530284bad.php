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
        $__internal_ef0078d16efedec4caeb1dd814e6e425a79e6cb0f9f997c84da55d83521231f9 = $this->env->getExtension("native_profiler");
        $__internal_ef0078d16efedec4caeb1dd814e6e425a79e6cb0f9f997c84da55d83521231f9->enter($__internal_ef0078d16efedec4caeb1dd814e6e425a79e6cb0f9f997c84da55d83521231f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0078d16efedec4caeb1dd814e6e425a79e6cb0f9f997c84da55d83521231f9->leave($__internal_ef0078d16efedec4caeb1dd814e6e425a79e6cb0f9f997c84da55d83521231f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83e0f564fa189752886d9fdeb98855a0f64983ebf4d2928c50509a4a8a24501e = $this->env->getExtension("native_profiler");
        $__internal_83e0f564fa189752886d9fdeb98855a0f64983ebf4d2928c50509a4a8a24501e->enter($__internal_83e0f564fa189752886d9fdeb98855a0f64983ebf4d2928c50509a4a8a24501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_83e0f564fa189752886d9fdeb98855a0f64983ebf4d2928c50509a4a8a24501e->leave($__internal_83e0f564fa189752886d9fdeb98855a0f64983ebf4d2928c50509a4a8a24501e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef61e896e836be08680e7ed16c36fa949590abeef8dd17631aeb82555a6bed9c = $this->env->getExtension("native_profiler");
        $__internal_ef61e896e836be08680e7ed16c36fa949590abeef8dd17631aeb82555a6bed9c->enter($__internal_ef61e896e836be08680e7ed16c36fa949590abeef8dd17631aeb82555a6bed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef61e896e836be08680e7ed16c36fa949590abeef8dd17631aeb82555a6bed9c->leave($__internal_ef61e896e836be08680e7ed16c36fa949590abeef8dd17631aeb82555a6bed9c_prof);

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
