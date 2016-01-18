<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2b77c2777d16ac7724a675867bcf7093c7cdd84aa0d7ba970b95002295f1d40c extends Twig_Template
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
        $__internal_4f955fce6815bd428db48556e41fd324a553d675ab2f01085e8392fe112a2c54 = $this->env->getExtension("native_profiler");
        $__internal_4f955fce6815bd428db48556e41fd324a553d675ab2f01085e8392fe112a2c54->enter($__internal_4f955fce6815bd428db48556e41fd324a553d675ab2f01085e8392fe112a2c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4f955fce6815bd428db48556e41fd324a553d675ab2f01085e8392fe112a2c54->leave($__internal_4f955fce6815bd428db48556e41fd324a553d675ab2f01085e8392fe112a2c54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
