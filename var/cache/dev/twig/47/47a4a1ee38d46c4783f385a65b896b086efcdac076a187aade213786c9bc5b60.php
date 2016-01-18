<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_739e48fca1a46fa52e025d4918eafaf3f84c5f7015290b7eb03ce4d5cb45ee5e extends Twig_Template
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
        $__internal_78bbee7210400a3fbd044f5cf49ef2bf2fd401351b8515df796749ae0b3e2422 = $this->env->getExtension("native_profiler");
        $__internal_78bbee7210400a3fbd044f5cf49ef2bf2fd401351b8515df796749ae0b3e2422->enter($__internal_78bbee7210400a3fbd044f5cf49ef2bf2fd401351b8515df796749ae0b3e2422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78bbee7210400a3fbd044f5cf49ef2bf2fd401351b8515df796749ae0b3e2422->leave($__internal_78bbee7210400a3fbd044f5cf49ef2bf2fd401351b8515df796749ae0b3e2422_prof);

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
