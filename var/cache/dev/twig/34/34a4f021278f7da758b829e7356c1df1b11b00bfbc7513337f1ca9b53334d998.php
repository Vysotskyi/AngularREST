<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_59b8a6d7ba2c8575bb40519f9b6cc31e60006f1370ad6073b5ed8fa8ba61747a extends Twig_Template
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
        $__internal_57a2fa7290e9a0eff41a580e21583b249a52f81e5cc460270d11515b850aaa3b = $this->env->getExtension("native_profiler");
        $__internal_57a2fa7290e9a0eff41a580e21583b249a52f81e5cc460270d11515b850aaa3b->enter($__internal_57a2fa7290e9a0eff41a580e21583b249a52f81e5cc460270d11515b850aaa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_57a2fa7290e9a0eff41a580e21583b249a52f81e5cc460270d11515b850aaa3b->leave($__internal_57a2fa7290e9a0eff41a580e21583b249a52f81e5cc460270d11515b850aaa3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
