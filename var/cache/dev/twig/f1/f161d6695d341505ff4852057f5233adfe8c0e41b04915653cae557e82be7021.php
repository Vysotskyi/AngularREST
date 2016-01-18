<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0c4a58f9fb36c9e8d03677827d330181cb36762c510c0802901e50cb38dc6b6c extends Twig_Template
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
        $__internal_d41751bd7d30f8c511cc9089a73d91dc38ddb1cf526767d7ac182367c590d558 = $this->env->getExtension("native_profiler");
        $__internal_d41751bd7d30f8c511cc9089a73d91dc38ddb1cf526767d7ac182367c590d558->enter($__internal_d41751bd7d30f8c511cc9089a73d91dc38ddb1cf526767d7ac182367c590d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d41751bd7d30f8c511cc9089a73d91dc38ddb1cf526767d7ac182367c590d558->leave($__internal_d41751bd7d30f8c511cc9089a73d91dc38ddb1cf526767d7ac182367c590d558_prof);

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
