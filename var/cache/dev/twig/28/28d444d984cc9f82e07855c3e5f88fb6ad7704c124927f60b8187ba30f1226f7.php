<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b5a856575741e3f971801aaeabbfa6bde010a90aa0d4a53d2eaf851459dd4cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95963f4114e7500e08950ae4ef8acd252d86046e1b05b6c64d792f9124f60e54 = $this->env->getExtension("native_profiler");
        $__internal_95963f4114e7500e08950ae4ef8acd252d86046e1b05b6c64d792f9124f60e54->enter($__internal_95963f4114e7500e08950ae4ef8acd252d86046e1b05b6c64d792f9124f60e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95963f4114e7500e08950ae4ef8acd252d86046e1b05b6c64d792f9124f60e54->leave($__internal_95963f4114e7500e08950ae4ef8acd252d86046e1b05b6c64d792f9124f60e54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b82207a280b42b8b78a09e2e334336009bf91d8e153fb0a2faab4574b9677e0 = $this->env->getExtension("native_profiler");
        $__internal_9b82207a280b42b8b78a09e2e334336009bf91d8e153fb0a2faab4574b9677e0->enter($__internal_9b82207a280b42b8b78a09e2e334336009bf91d8e153fb0a2faab4574b9677e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b82207a280b42b8b78a09e2e334336009bf91d8e153fb0a2faab4574b9677e0->leave($__internal_9b82207a280b42b8b78a09e2e334336009bf91d8e153fb0a2faab4574b9677e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f7e06bd6b51b57aa69e2076cc4132cb93cfcb3fc519bf6d544b31949708fe62 = $this->env->getExtension("native_profiler");
        $__internal_3f7e06bd6b51b57aa69e2076cc4132cb93cfcb3fc519bf6d544b31949708fe62->enter($__internal_3f7e06bd6b51b57aa69e2076cc4132cb93cfcb3fc519bf6d544b31949708fe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f7e06bd6b51b57aa69e2076cc4132cb93cfcb3fc519bf6d544b31949708fe62->leave($__internal_3f7e06bd6b51b57aa69e2076cc4132cb93cfcb3fc519bf6d544b31949708fe62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d5c7f5bd629b54a134ef36d497d2fa11d13894639de0fb04ff9ce3f8dce788d = $this->env->getExtension("native_profiler");
        $__internal_5d5c7f5bd629b54a134ef36d497d2fa11d13894639de0fb04ff9ce3f8dce788d->enter($__internal_5d5c7f5bd629b54a134ef36d497d2fa11d13894639de0fb04ff9ce3f8dce788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d5c7f5bd629b54a134ef36d497d2fa11d13894639de0fb04ff9ce3f8dce788d->leave($__internal_5d5c7f5bd629b54a134ef36d497d2fa11d13894639de0fb04ff9ce3f8dce788d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
