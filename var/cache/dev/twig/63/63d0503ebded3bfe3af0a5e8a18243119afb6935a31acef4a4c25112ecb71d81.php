<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_52c0120b1600b3321c9beb49b162d82b23b95a3576746b4d48501e87db9c2eca extends Twig_Template
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
        $__internal_c78f96acf3ff96e8bf16afd9ff6e9a378380ec8d914781a9ae894be22de1f339 = $this->env->getExtension("native_profiler");
        $__internal_c78f96acf3ff96e8bf16afd9ff6e9a378380ec8d914781a9ae894be22de1f339->enter($__internal_c78f96acf3ff96e8bf16afd9ff6e9a378380ec8d914781a9ae894be22de1f339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78f96acf3ff96e8bf16afd9ff6e9a378380ec8d914781a9ae894be22de1f339->leave($__internal_c78f96acf3ff96e8bf16afd9ff6e9a378380ec8d914781a9ae894be22de1f339_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2715f118fda4d0789c8293ad43b1f341d17fd1018a742e20175b7fc0f6cea4c = $this->env->getExtension("native_profiler");
        $__internal_a2715f118fda4d0789c8293ad43b1f341d17fd1018a742e20175b7fc0f6cea4c->enter($__internal_a2715f118fda4d0789c8293ad43b1f341d17fd1018a742e20175b7fc0f6cea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2715f118fda4d0789c8293ad43b1f341d17fd1018a742e20175b7fc0f6cea4c->leave($__internal_a2715f118fda4d0789c8293ad43b1f341d17fd1018a742e20175b7fc0f6cea4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bcbd36b9f21b4722810a2cb4dfc00eccc609070ff73935de7ee89bff6d36d1b = $this->env->getExtension("native_profiler");
        $__internal_3bcbd36b9f21b4722810a2cb4dfc00eccc609070ff73935de7ee89bff6d36d1b->enter($__internal_3bcbd36b9f21b4722810a2cb4dfc00eccc609070ff73935de7ee89bff6d36d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3bcbd36b9f21b4722810a2cb4dfc00eccc609070ff73935de7ee89bff6d36d1b->leave($__internal_3bcbd36b9f21b4722810a2cb4dfc00eccc609070ff73935de7ee89bff6d36d1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f5b7f900a4f776c3b3891e7a154e92263399219f6ecc2d9ef1352502813165b = $this->env->getExtension("native_profiler");
        $__internal_2f5b7f900a4f776c3b3891e7a154e92263399219f6ecc2d9ef1352502813165b->enter($__internal_2f5b7f900a4f776c3b3891e7a154e92263399219f6ecc2d9ef1352502813165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f5b7f900a4f776c3b3891e7a154e92263399219f6ecc2d9ef1352502813165b->leave($__internal_2f5b7f900a4f776c3b3891e7a154e92263399219f6ecc2d9ef1352502813165b_prof);

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
