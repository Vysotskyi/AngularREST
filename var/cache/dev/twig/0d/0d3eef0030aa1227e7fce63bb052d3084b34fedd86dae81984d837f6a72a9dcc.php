<?php

/* ::base.html.twig */
class __TwigTemplate_6351cc33711dfb22da8edbcb30902511ccad04963bead712f9802a414a5f5986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2edaa5265d5eea63785843a3f07e72ffc1b5c0b30cc3f5ab66fcff0603ff0407 = $this->env->getExtension("native_profiler");
        $__internal_2edaa5265d5eea63785843a3f07e72ffc1b5c0b30cc3f5ab66fcff0603ff0407->enter($__internal_2edaa5265d5eea63785843a3f07e72ffc1b5c0b30cc3f5ab66fcff0603ff0407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2edaa5265d5eea63785843a3f07e72ffc1b5c0b30cc3f5ab66fcff0603ff0407->leave($__internal_2edaa5265d5eea63785843a3f07e72ffc1b5c0b30cc3f5ab66fcff0603ff0407_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8095e28dd3f9220cc900f34dedcf0cc5fcc92fdb62a13cdb771e7f21584c2789 = $this->env->getExtension("native_profiler");
        $__internal_8095e28dd3f9220cc900f34dedcf0cc5fcc92fdb62a13cdb771e7f21584c2789->enter($__internal_8095e28dd3f9220cc900f34dedcf0cc5fcc92fdb62a13cdb771e7f21584c2789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8095e28dd3f9220cc900f34dedcf0cc5fcc92fdb62a13cdb771e7f21584c2789->leave($__internal_8095e28dd3f9220cc900f34dedcf0cc5fcc92fdb62a13cdb771e7f21584c2789_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f8c06bb30b8406340cf44c139131e43af31523441addb58e5a41d08beac12ba = $this->env->getExtension("native_profiler");
        $__internal_4f8c06bb30b8406340cf44c139131e43af31523441addb58e5a41d08beac12ba->enter($__internal_4f8c06bb30b8406340cf44c139131e43af31523441addb58e5a41d08beac12ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f8c06bb30b8406340cf44c139131e43af31523441addb58e5a41d08beac12ba->leave($__internal_4f8c06bb30b8406340cf44c139131e43af31523441addb58e5a41d08beac12ba_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe380ecc65c10f5ad75da0cf39b9a85e24fbb08d66c5180060aac335af96001 = $this->env->getExtension("native_profiler");
        $__internal_9fe380ecc65c10f5ad75da0cf39b9a85e24fbb08d66c5180060aac335af96001->enter($__internal_9fe380ecc65c10f5ad75da0cf39b9a85e24fbb08d66c5180060aac335af96001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fe380ecc65c10f5ad75da0cf39b9a85e24fbb08d66c5180060aac335af96001->leave($__internal_9fe380ecc65c10f5ad75da0cf39b9a85e24fbb08d66c5180060aac335af96001_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62719eaa700e8c7a5e4abf85b18656e89ce2118175291ae648d05c8bf1dbdc25 = $this->env->getExtension("native_profiler");
        $__internal_62719eaa700e8c7a5e4abf85b18656e89ce2118175291ae648d05c8bf1dbdc25->enter($__internal_62719eaa700e8c7a5e4abf85b18656e89ce2118175291ae648d05c8bf1dbdc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62719eaa700e8c7a5e4abf85b18656e89ce2118175291ae648d05c8bf1dbdc25->leave($__internal_62719eaa700e8c7a5e4abf85b18656e89ce2118175291ae648d05c8bf1dbdc25_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
