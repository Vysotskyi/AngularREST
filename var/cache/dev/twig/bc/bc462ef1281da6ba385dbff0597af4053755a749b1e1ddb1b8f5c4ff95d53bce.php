<?php

/* base.html.twig */
class __TwigTemplate_6a0104ed3474a66a4861c0a2f551c4f7ea510be336a7be125d64f4d35dccd0e5 extends Twig_Template
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
        $__internal_ee416750385c3473b076ef5f2f4ed23556b68baa8fa63326322a76d08cdcbe03 = $this->env->getExtension("native_profiler");
        $__internal_ee416750385c3473b076ef5f2f4ed23556b68baa8fa63326322a76d08cdcbe03->enter($__internal_ee416750385c3473b076ef5f2f4ed23556b68baa8fa63326322a76d08cdcbe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ee416750385c3473b076ef5f2f4ed23556b68baa8fa63326322a76d08cdcbe03->leave($__internal_ee416750385c3473b076ef5f2f4ed23556b68baa8fa63326322a76d08cdcbe03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26cfc15b49619378606d22bf8af65fb6ea71f78df03e4e9bd18241c043e37fca = $this->env->getExtension("native_profiler");
        $__internal_26cfc15b49619378606d22bf8af65fb6ea71f78df03e4e9bd18241c043e37fca->enter($__internal_26cfc15b49619378606d22bf8af65fb6ea71f78df03e4e9bd18241c043e37fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26cfc15b49619378606d22bf8af65fb6ea71f78df03e4e9bd18241c043e37fca->leave($__internal_26cfc15b49619378606d22bf8af65fb6ea71f78df03e4e9bd18241c043e37fca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee80e76be95a4a627b13d0573d545492306251ff7fa9f4555bfde198aa9e8e49 = $this->env->getExtension("native_profiler");
        $__internal_ee80e76be95a4a627b13d0573d545492306251ff7fa9f4555bfde198aa9e8e49->enter($__internal_ee80e76be95a4a627b13d0573d545492306251ff7fa9f4555bfde198aa9e8e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee80e76be95a4a627b13d0573d545492306251ff7fa9f4555bfde198aa9e8e49->leave($__internal_ee80e76be95a4a627b13d0573d545492306251ff7fa9f4555bfde198aa9e8e49_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbcff5207e89d5e5f21bfd15f151d5f843e79c6e78b0c01bf2361a66b32e682a = $this->env->getExtension("native_profiler");
        $__internal_cbcff5207e89d5e5f21bfd15f151d5f843e79c6e78b0c01bf2361a66b32e682a->enter($__internal_cbcff5207e89d5e5f21bfd15f151d5f843e79c6e78b0c01bf2361a66b32e682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbcff5207e89d5e5f21bfd15f151d5f843e79c6e78b0c01bf2361a66b32e682a->leave($__internal_cbcff5207e89d5e5f21bfd15f151d5f843e79c6e78b0c01bf2361a66b32e682a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d7f06e0953d7ede915be8922aafb846a7dcb945c704a8f2874facdbcb53afb1 = $this->env->getExtension("native_profiler");
        $__internal_0d7f06e0953d7ede915be8922aafb846a7dcb945c704a8f2874facdbcb53afb1->enter($__internal_0d7f06e0953d7ede915be8922aafb846a7dcb945c704a8f2874facdbcb53afb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d7f06e0953d7ede915be8922aafb846a7dcb945c704a8f2874facdbcb53afb1->leave($__internal_0d7f06e0953d7ede915be8922aafb846a7dcb945c704a8f2874facdbcb53afb1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
