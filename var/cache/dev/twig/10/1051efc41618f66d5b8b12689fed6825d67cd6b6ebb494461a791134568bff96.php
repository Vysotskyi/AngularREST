<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6a12efc429a2819af43c0479c588de2ae1c5bae11dddfc39fd56ff7defef7562 extends Twig_Template
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
        $__internal_b25ab5f810ec179da86c2281ec0f5d8e3b02ea2018395938fed1bbef0069c922 = $this->env->getExtension("native_profiler");
        $__internal_b25ab5f810ec179da86c2281ec0f5d8e3b02ea2018395938fed1bbef0069c922->enter($__internal_b25ab5f810ec179da86c2281ec0f5d8e3b02ea2018395938fed1bbef0069c922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b25ab5f810ec179da86c2281ec0f5d8e3b02ea2018395938fed1bbef0069c922->leave($__internal_b25ab5f810ec179da86c2281ec0f5d8e3b02ea2018395938fed1bbef0069c922_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
