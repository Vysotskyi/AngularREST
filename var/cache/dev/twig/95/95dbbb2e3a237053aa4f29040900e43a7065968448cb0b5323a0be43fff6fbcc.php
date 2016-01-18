<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6fe6833096a066e52014863fbf08a95bedc6afa15557caf273d8eabdbe2f946c extends Twig_Template
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
        $__internal_601489688945272bed9de37663e3a88f79f013a147eda0adc83f9187841d8139 = $this->env->getExtension("native_profiler");
        $__internal_601489688945272bed9de37663e3a88f79f013a147eda0adc83f9187841d8139->enter($__internal_601489688945272bed9de37663e3a88f79f013a147eda0adc83f9187841d8139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_601489688945272bed9de37663e3a88f79f013a147eda0adc83f9187841d8139->leave($__internal_601489688945272bed9de37663e3a88f79f013a147eda0adc83f9187841d8139_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
