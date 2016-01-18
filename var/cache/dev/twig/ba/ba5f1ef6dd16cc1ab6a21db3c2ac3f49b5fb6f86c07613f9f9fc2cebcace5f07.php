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
        $__internal_b98bed6251501c343b8e29e3a15246cd8770f11276354a359e1b819b3a5f07c8 = $this->env->getExtension("native_profiler");
        $__internal_b98bed6251501c343b8e29e3a15246cd8770f11276354a359e1b819b3a5f07c8->enter($__internal_b98bed6251501c343b8e29e3a15246cd8770f11276354a359e1b819b3a5f07c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b98bed6251501c343b8e29e3a15246cd8770f11276354a359e1b819b3a5f07c8->leave($__internal_b98bed6251501c343b8e29e3a15246cd8770f11276354a359e1b819b3a5f07c8_prof);

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
