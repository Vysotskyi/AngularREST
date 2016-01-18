<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8fc9b9fb1d2527ab84fb67b55bfd79154a9521e4a1be1108e7366cb374cf8e5a extends Twig_Template
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
        $__internal_b08e5d6900f2e721934b7dc328263956dfc74a2781adc8c4912ef6bab073335f = $this->env->getExtension("native_profiler");
        $__internal_b08e5d6900f2e721934b7dc328263956dfc74a2781adc8c4912ef6bab073335f->enter($__internal_b08e5d6900f2e721934b7dc328263956dfc74a2781adc8c4912ef6bab073335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b08e5d6900f2e721934b7dc328263956dfc74a2781adc8c4912ef6bab073335f->leave($__internal_b08e5d6900f2e721934b7dc328263956dfc74a2781adc8c4912ef6bab073335f_prof);

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
