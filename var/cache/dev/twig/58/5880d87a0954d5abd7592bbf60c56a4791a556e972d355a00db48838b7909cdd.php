<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_004f82eaf4d2dab15630b87985d080f144871317ec62fe29213b2f49cde5d939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0521850f0080ced6dca22cd852a71e867b2c7c12c98aa9e270a597c70837629 = $this->env->getExtension("native_profiler");
        $__internal_d0521850f0080ced6dca22cd852a71e867b2c7c12c98aa9e270a597c70837629->enter($__internal_d0521850f0080ced6dca22cd852a71e867b2c7c12c98aa9e270a597c70837629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d0521850f0080ced6dca22cd852a71e867b2c7c12c98aa9e270a597c70837629->leave($__internal_d0521850f0080ced6dca22cd852a71e867b2c7c12c98aa9e270a597c70837629_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
