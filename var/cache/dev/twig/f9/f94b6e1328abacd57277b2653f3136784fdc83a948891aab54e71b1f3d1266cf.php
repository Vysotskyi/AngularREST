<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5e86707cf1f27840940a02cde130b179aacbff3a9cf98a434815c5f5b7cd10e7 extends Twig_Template
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
        $__internal_1b0ac754a3fe1f1d5bec89c64d6c636b20c0d392e9c1161f11f7d8304521150b = $this->env->getExtension("native_profiler");
        $__internal_1b0ac754a3fe1f1d5bec89c64d6c636b20c0d392e9c1161f11f7d8304521150b->enter($__internal_1b0ac754a3fe1f1d5bec89c64d6c636b20c0d392e9c1161f11f7d8304521150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1b0ac754a3fe1f1d5bec89c64d6c636b20c0d392e9c1161f11f7d8304521150b->leave($__internal_1b0ac754a3fe1f1d5bec89c64d6c636b20c0d392e9c1161f11f7d8304521150b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
