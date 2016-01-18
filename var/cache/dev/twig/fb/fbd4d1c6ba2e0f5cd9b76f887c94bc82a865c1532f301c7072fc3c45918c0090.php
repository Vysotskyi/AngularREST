<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_61f8c9930a7e735893093be569e5db0b82c83bf552809973b12d9ad0e5c740f8 extends Twig_Template
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
        $__internal_34f2655a30da3365ac8705ad41106b83fb94297ef3fd587967eac258defecb94 = $this->env->getExtension("native_profiler");
        $__internal_34f2655a30da3365ac8705ad41106b83fb94297ef3fd587967eac258defecb94->enter($__internal_34f2655a30da3365ac8705ad41106b83fb94297ef3fd587967eac258defecb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_34f2655a30da3365ac8705ad41106b83fb94297ef3fd587967eac258defecb94->leave($__internal_34f2655a30da3365ac8705ad41106b83fb94297ef3fd587967eac258defecb94_prof);

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
