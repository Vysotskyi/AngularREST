<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_23db07172ffe319eae9e244f25d9becaee6163e6d428714b9afd67408f3fd6d9 extends Twig_Template
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
        $__internal_f0de25d3de1409cc330f390ad6e0f6063879fb3f8768494237e71f42c27f7fc0 = $this->env->getExtension("native_profiler");
        $__internal_f0de25d3de1409cc330f390ad6e0f6063879fb3f8768494237e71f42c27f7fc0->enter($__internal_f0de25d3de1409cc330f390ad6e0f6063879fb3f8768494237e71f42c27f7fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f0de25d3de1409cc330f390ad6e0f6063879fb3f8768494237e71f42c27f7fc0->leave($__internal_f0de25d3de1409cc330f390ad6e0f6063879fb3f8768494237e71f42c27f7fc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
