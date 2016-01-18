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
        $__internal_e04f3d87f6a163b71e31f8533c9a87450131447679281a6a348d422959cf6e56 = $this->env->getExtension("native_profiler");
        $__internal_e04f3d87f6a163b71e31f8533c9a87450131447679281a6a348d422959cf6e56->enter($__internal_e04f3d87f6a163b71e31f8533c9a87450131447679281a6a348d422959cf6e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e04f3d87f6a163b71e31f8533c9a87450131447679281a6a348d422959cf6e56->leave($__internal_e04f3d87f6a163b71e31f8533c9a87450131447679281a6a348d422959cf6e56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97d89e76e90181f776b6121b0a5fc32124db0d91f4ddcebe6719c2cd1173b562 = $this->env->getExtension("native_profiler");
        $__internal_97d89e76e90181f776b6121b0a5fc32124db0d91f4ddcebe6719c2cd1173b562->enter($__internal_97d89e76e90181f776b6121b0a5fc32124db0d91f4ddcebe6719c2cd1173b562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97d89e76e90181f776b6121b0a5fc32124db0d91f4ddcebe6719c2cd1173b562->leave($__internal_97d89e76e90181f776b6121b0a5fc32124db0d91f4ddcebe6719c2cd1173b562_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5c0ca4829edb332bd28b25bd0ec91b39c7843638685de8e0211662c953d6b77 = $this->env->getExtension("native_profiler");
        $__internal_f5c0ca4829edb332bd28b25bd0ec91b39c7843638685de8e0211662c953d6b77->enter($__internal_f5c0ca4829edb332bd28b25bd0ec91b39c7843638685de8e0211662c953d6b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5c0ca4829edb332bd28b25bd0ec91b39c7843638685de8e0211662c953d6b77->leave($__internal_f5c0ca4829edb332bd28b25bd0ec91b39c7843638685de8e0211662c953d6b77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c313a6f4a1d523130466760f173b5fec93c8e0a28ab0dc7cf8bcaa5a417c6782 = $this->env->getExtension("native_profiler");
        $__internal_c313a6f4a1d523130466760f173b5fec93c8e0a28ab0dc7cf8bcaa5a417c6782->enter($__internal_c313a6f4a1d523130466760f173b5fec93c8e0a28ab0dc7cf8bcaa5a417c6782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c313a6f4a1d523130466760f173b5fec93c8e0a28ab0dc7cf8bcaa5a417c6782->leave($__internal_c313a6f4a1d523130466760f173b5fec93c8e0a28ab0dc7cf8bcaa5a417c6782_prof);

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
