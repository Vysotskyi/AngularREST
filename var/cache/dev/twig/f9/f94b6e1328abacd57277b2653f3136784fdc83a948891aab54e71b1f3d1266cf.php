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
        $__internal_f93e00417102dd2730a7c53ca3940a4e9bae310dc9b4576eeb6141d0adc210f4 = $this->env->getExtension("native_profiler");
        $__internal_f93e00417102dd2730a7c53ca3940a4e9bae310dc9b4576eeb6141d0adc210f4->enter($__internal_f93e00417102dd2730a7c53ca3940a4e9bae310dc9b4576eeb6141d0adc210f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f93e00417102dd2730a7c53ca3940a4e9bae310dc9b4576eeb6141d0adc210f4->leave($__internal_f93e00417102dd2730a7c53ca3940a4e9bae310dc9b4576eeb6141d0adc210f4_prof);

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
