<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4f4ae8a768012a41bab34dae52ca731fce3b0a5c43ba7f40bd3a62285beaf06d extends Twig_Template
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
        $__internal_dad13afd054d07a16f2feeead12ead72a039a3614097c01891146a202835be81 = $this->env->getExtension("native_profiler");
        $__internal_dad13afd054d07a16f2feeead12ead72a039a3614097c01891146a202835be81->enter($__internal_dad13afd054d07a16f2feeead12ead72a039a3614097c01891146a202835be81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dad13afd054d07a16f2feeead12ead72a039a3614097c01891146a202835be81->leave($__internal_dad13afd054d07a16f2feeead12ead72a039a3614097c01891146a202835be81_prof);

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
