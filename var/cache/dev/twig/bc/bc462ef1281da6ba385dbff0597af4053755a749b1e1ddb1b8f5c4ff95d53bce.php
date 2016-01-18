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
        $__internal_c60a7320d56d2d2ed83ec3e397f4dc8b75469038ccc787543d5b9da39e4607ed = $this->env->getExtension("native_profiler");
        $__internal_c60a7320d56d2d2ed83ec3e397f4dc8b75469038ccc787543d5b9da39e4607ed->enter($__internal_c60a7320d56d2d2ed83ec3e397f4dc8b75469038ccc787543d5b9da39e4607ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c60a7320d56d2d2ed83ec3e397f4dc8b75469038ccc787543d5b9da39e4607ed->leave($__internal_c60a7320d56d2d2ed83ec3e397f4dc8b75469038ccc787543d5b9da39e4607ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c20c05ea680fcb8bd4e3601ef05aa4ce228bfe775b55d023b5a40414781f33d0 = $this->env->getExtension("native_profiler");
        $__internal_c20c05ea680fcb8bd4e3601ef05aa4ce228bfe775b55d023b5a40414781f33d0->enter($__internal_c20c05ea680fcb8bd4e3601ef05aa4ce228bfe775b55d023b5a40414781f33d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c20c05ea680fcb8bd4e3601ef05aa4ce228bfe775b55d023b5a40414781f33d0->leave($__internal_c20c05ea680fcb8bd4e3601ef05aa4ce228bfe775b55d023b5a40414781f33d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_941cc72d4a4217d64828fd1bf1d6c7c0811124439c3b0c560d241f3f112a2a16 = $this->env->getExtension("native_profiler");
        $__internal_941cc72d4a4217d64828fd1bf1d6c7c0811124439c3b0c560d241f3f112a2a16->enter($__internal_941cc72d4a4217d64828fd1bf1d6c7c0811124439c3b0c560d241f3f112a2a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_941cc72d4a4217d64828fd1bf1d6c7c0811124439c3b0c560d241f3f112a2a16->leave($__internal_941cc72d4a4217d64828fd1bf1d6c7c0811124439c3b0c560d241f3f112a2a16_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8509485e8504c1085eb3740986fc0140a74a851c18999d6067f31000d593cbc = $this->env->getExtension("native_profiler");
        $__internal_e8509485e8504c1085eb3740986fc0140a74a851c18999d6067f31000d593cbc->enter($__internal_e8509485e8504c1085eb3740986fc0140a74a851c18999d6067f31000d593cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8509485e8504c1085eb3740986fc0140a74a851c18999d6067f31000d593cbc->leave($__internal_e8509485e8504c1085eb3740986fc0140a74a851c18999d6067f31000d593cbc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78819a6ffdce95086c49651acf550463a308ed95fe36b0872f1b3f6f8a1e322d = $this->env->getExtension("native_profiler");
        $__internal_78819a6ffdce95086c49651acf550463a308ed95fe36b0872f1b3f6f8a1e322d->enter($__internal_78819a6ffdce95086c49651acf550463a308ed95fe36b0872f1b3f6f8a1e322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78819a6ffdce95086c49651acf550463a308ed95fe36b0872f1b3f6f8a1e322d->leave($__internal_78819a6ffdce95086c49651acf550463a308ed95fe36b0872f1b3f6f8a1e322d_prof);

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
