<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4b2c715a74910f747abbd317f9cc29db14ba5dd943635f84ef15ee531ee6bd72 extends Twig_Template
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
        $__internal_60e67a1c126df138d99ff59e6fd50b12a49fd356a5766f58a4c941002f345a10 = $this->env->getExtension("native_profiler");
        $__internal_60e67a1c126df138d99ff59e6fd50b12a49fd356a5766f58a4c941002f345a10->enter($__internal_60e67a1c126df138d99ff59e6fd50b12a49fd356a5766f58a4c941002f345a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_60e67a1c126df138d99ff59e6fd50b12a49fd356a5766f58a4c941002f345a10->leave($__internal_60e67a1c126df138d99ff59e6fd50b12a49fd356a5766f58a4c941002f345a10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
