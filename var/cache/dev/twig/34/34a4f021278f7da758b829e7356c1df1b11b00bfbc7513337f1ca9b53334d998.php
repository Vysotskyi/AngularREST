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
        $__internal_15606051e27f0d62e624b7b47f8c45531b641c71791ab9ec1ed5da883140f011 = $this->env->getExtension("native_profiler");
        $__internal_15606051e27f0d62e624b7b47f8c45531b641c71791ab9ec1ed5da883140f011->enter($__internal_15606051e27f0d62e624b7b47f8c45531b641c71791ab9ec1ed5da883140f011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_15606051e27f0d62e624b7b47f8c45531b641c71791ab9ec1ed5da883140f011->leave($__internal_15606051e27f0d62e624b7b47f8c45531b641c71791ab9ec1ed5da883140f011_prof);

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
