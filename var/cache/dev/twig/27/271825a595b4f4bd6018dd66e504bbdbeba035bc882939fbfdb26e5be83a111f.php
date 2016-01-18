<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_2855ec43dd2e8c9f0714bd44cf233e0a69a5685f3de33d70f3b31c1b4a854e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85745415bfeb1944977be5fc262322f79f81673792bd73d9054df60ef2538d27 = $this->env->getExtension("native_profiler");
        $__internal_85745415bfeb1944977be5fc262322f79f81673792bd73d9054df60ef2538d27->enter($__internal_85745415bfeb1944977be5fc262322f79f81673792bd73d9054df60ef2538d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85745415bfeb1944977be5fc262322f79f81673792bd73d9054df60ef2538d27->leave($__internal_85745415bfeb1944977be5fc262322f79f81673792bd73d9054df60ef2538d27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c4157a73c3704a7dc8ef9b7fbcabea6f6fc0ee84f45d8ff56320e6e2e40aa4f = $this->env->getExtension("native_profiler");
        $__internal_5c4157a73c3704a7dc8ef9b7fbcabea6f6fc0ee84f45d8ff56320e6e2e40aa4f->enter($__internal_5c4157a73c3704a7dc8ef9b7fbcabea6f6fc0ee84f45d8ff56320e6e2e40aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5c4157a73c3704a7dc8ef9b7fbcabea6f6fc0ee84f45d8ff56320e6e2e40aa4f->leave($__internal_5c4157a73c3704a7dc8ef9b7fbcabea6f6fc0ee84f45d8ff56320e6e2e40aa4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
