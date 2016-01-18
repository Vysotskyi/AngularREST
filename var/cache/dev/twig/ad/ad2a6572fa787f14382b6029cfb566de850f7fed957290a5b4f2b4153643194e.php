<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9211782a879f6611ba9da35e19ed501067732eff75e5526797e969f6818f76f0 extends Twig_Template
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
        $__internal_6e1c1fdf4ed7c37001fcc78a0c1172a2e4405a284f700f16180b8e8f7bb5ce65 = $this->env->getExtension("native_profiler");
        $__internal_6e1c1fdf4ed7c37001fcc78a0c1172a2e4405a284f700f16180b8e8f7bb5ce65->enter($__internal_6e1c1fdf4ed7c37001fcc78a0c1172a2e4405a284f700f16180b8e8f7bb5ce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6e1c1fdf4ed7c37001fcc78a0c1172a2e4405a284f700f16180b8e8f7bb5ce65->leave($__internal_6e1c1fdf4ed7c37001fcc78a0c1172a2e4405a284f700f16180b8e8f7bb5ce65_prof);

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
