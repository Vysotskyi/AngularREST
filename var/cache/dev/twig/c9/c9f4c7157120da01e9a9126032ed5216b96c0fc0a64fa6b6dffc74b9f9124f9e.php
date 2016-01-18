<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_71716add0055927711aa9c9de484177238495591b5659e4bd819af8ed5af6324 extends Twig_Template
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
        $__internal_df6b938e24066044c179453bb7c9c3e8022c6bcc87734306c4c35f6da9db4c2f = $this->env->getExtension("native_profiler");
        $__internal_df6b938e24066044c179453bb7c9c3e8022c6bcc87734306c4c35f6da9db4c2f->enter($__internal_df6b938e24066044c179453bb7c9c3e8022c6bcc87734306c4c35f6da9db4c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_df6b938e24066044c179453bb7c9c3e8022c6bcc87734306c4c35f6da9db4c2f->leave($__internal_df6b938e24066044c179453bb7c9c3e8022c6bcc87734306c4c35f6da9db4c2f_prof);

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
