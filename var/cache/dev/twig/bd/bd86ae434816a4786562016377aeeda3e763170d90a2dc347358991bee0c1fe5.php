<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cf5d2069334ad7cd2dc1d6d62d0f1bb8aed80c4b99f9ec5689e1361e7dd27c4b extends Twig_Template
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
        $__internal_670c1511ed6aad9c3c1096ebd9a9b9046d651fdd233501f9dd8e0e080832fd6b = $this->env->getExtension("native_profiler");
        $__internal_670c1511ed6aad9c3c1096ebd9a9b9046d651fdd233501f9dd8e0e080832fd6b->enter($__internal_670c1511ed6aad9c3c1096ebd9a9b9046d651fdd233501f9dd8e0e080832fd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_670c1511ed6aad9c3c1096ebd9a9b9046d651fdd233501f9dd8e0e080832fd6b->leave($__internal_670c1511ed6aad9c3c1096ebd9a9b9046d651fdd233501f9dd8e0e080832fd6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
