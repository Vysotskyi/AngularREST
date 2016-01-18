<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8c6d3f85c97f8d53ef4e9938665696cd6099932e1f2e4acbb8c2e6653b6d2734 extends Twig_Template
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
        $__internal_2b2867d093d365386e0ebdf1b63302b3b3de4d03b6285e6d5565dd7b085f9f4f = $this->env->getExtension("native_profiler");
        $__internal_2b2867d093d365386e0ebdf1b63302b3b3de4d03b6285e6d5565dd7b085f9f4f->enter($__internal_2b2867d093d365386e0ebdf1b63302b3b3de4d03b6285e6d5565dd7b085f9f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2b2867d093d365386e0ebdf1b63302b3b3de4d03b6285e6d5565dd7b085f9f4f->leave($__internal_2b2867d093d365386e0ebdf1b63302b3b3de4d03b6285e6d5565dd7b085f9f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
