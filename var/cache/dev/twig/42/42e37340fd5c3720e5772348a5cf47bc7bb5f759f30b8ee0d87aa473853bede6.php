<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_239b24d5968f5a54472276a5a997667962b47dc8e10a150384ef8de965e7c749 extends Twig_Template
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
        $__internal_95503be3972254b04e6294cc10aa6f7d86d1670f2cb524c2299f60ce0dc8d604 = $this->env->getExtension("native_profiler");
        $__internal_95503be3972254b04e6294cc10aa6f7d86d1670f2cb524c2299f60ce0dc8d604->enter($__internal_95503be3972254b04e6294cc10aa6f7d86d1670f2cb524c2299f60ce0dc8d604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_95503be3972254b04e6294cc10aa6f7d86d1670f2cb524c2299f60ce0dc8d604->leave($__internal_95503be3972254b04e6294cc10aa6f7d86d1670f2cb524c2299f60ce0dc8d604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
