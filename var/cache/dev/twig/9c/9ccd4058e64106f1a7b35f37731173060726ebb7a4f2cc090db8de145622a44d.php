<?php

/* indexBundle:Default:index.html.twig */
class __TwigTemplate_e2fa98c3ab37a83fa61b97d42bf3db6fad3e12c0a0a566ed91ca8ecdf236fd0f extends Twig_Template
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
        $__internal_82907b66b524ec6ddb77e5903c9c48bdf6c2562dcab84ad994a7d3b0669a5756 = $this->env->getExtension("native_profiler");
        $__internal_82907b66b524ec6ddb77e5903c9c48bdf6c2562dcab84ad994a7d3b0669a5756->enter($__internal_82907b66b524ec6ddb77e5903c9c48bdf6c2562dcab84ad994a7d3b0669a5756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "indexBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Test task for MEV Ukraine\">
        <meta name=\"author\" content=\"Stanislav Vysotskyi\">
        <title>Todo Manager</title>
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cadec62_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cadec62_0") : $this->env->getExtension('asset')->getAssetUrl("css/cadec62_part_1_main_1.css");
            // line 11
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        } else {
            // asset "cadec62"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cadec62") : $this->env->getExtension('asset')->getAssetUrl("css/cadec62.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c1134c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_0") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_1jquery-2.2.0.min_1.js");
            // line 14
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8c1134c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_1") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_2angular.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8c1134c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_2") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_angular-route.min_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8c1134c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_3") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_bootstrap.min_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8c1134c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_4") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_jquery-ui.min_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8c1134c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_5") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_sortable_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8c1134c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c_6") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c_part_1_ui-bootstrap-tpls-1.0.3.min_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "8c1134c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c1134c") : $this->env->getExtension('asset')->getAssetUrl("js/8c1134c.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d285eaf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d285eaf_0") : $this->env->getExtension('asset')->getAssetUrl("css/d285eaf_part_1_bootstrap-theme.min_1.css");
            // line 17
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
            // asset "d285eaf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d285eaf_1") : $this->env->getExtension('asset')->getAssetUrl("css/d285eaf_part_1_bootstrap.min_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        } else {
            // asset "d285eaf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d285eaf") : $this->env->getExtension('asset')->getAssetUrl("css/d285eaf.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "90da6c5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_90da6c5_0") : $this->env->getExtension('asset')->getAssetUrl("js/90da6c5_part_1_main_1.js");
            // line 20
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "90da6c5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_90da6c5") : $this->env->getExtension('asset')->getAssetUrl("js/90da6c5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        <base href=\"";
        echo $this->env->getExtension('routing')->getUrl("index_homepage");
        echo "\">
    </head>
    <body ng-app=\"questApp\">
        <ng-view></ng-view>
    </body>
</html>";
        
        $__internal_82907b66b524ec6ddb77e5903c9c48bdf6c2562dcab84ad994a7d3b0669a5756->leave($__internal_82907b66b524ec6ddb77e5903c9c48bdf6c2562dcab84ad994a7d3b0669a5756_prof);

    }

    public function getTemplateName()
    {
        return "indexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 22,  136 => 20,  131 => 19,  111 => 17,  106 => 16,  56 => 14,  51 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="Test task for MEV Ukraine">*/
/*         <meta name="author" content="Stanislav Vysotskyi">*/
/*         <title>Todo Manager</title>*/
/*         {% stylesheets '@indexBundle/Resources/public/css/*' %}*/
/*         <link href="{{ asset_url }}" rel="stylesheet">*/
/*         {% endstylesheets %}*/
/*         {% javascripts '@indexBundle/Resources/public/assets/js/*' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         {% stylesheets '@indexBundle/Resources/public/assets/css/*' %}*/
/*         <link href="{{ asset_url }}" rel="stylesheet">*/
/*         {% endstylesheets %}*/
/*         {% javascripts '@indexBundle/Resources/public/js/*' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         <base href="{{ url('index_homepage') }}">*/
/*     </head>*/
/*     <body ng-app="questApp">*/
/*         <ng-view></ng-view>*/
/*     </body>*/
/* </html>*/
