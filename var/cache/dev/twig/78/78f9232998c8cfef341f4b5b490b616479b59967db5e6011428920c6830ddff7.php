<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_821e1eb38430b75cae3e85eda8c4bfd91d2c311cfd1f57c0d2e0de53a42688a9 extends Twig_Template
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
        $__internal_3c533ae82e57a7aed8a8c3ff25996c5346fca448e13427d2c31b5e0c0376a715 = $this->env->getExtension("native_profiler");
        $__internal_3c533ae82e57a7aed8a8c3ff25996c5346fca448e13427d2c31b5e0c0376a715->enter($__internal_3c533ae82e57a7aed8a8c3ff25996c5346fca448e13427d2c31b5e0c0376a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3c533ae82e57a7aed8a8c3ff25996c5346fca448e13427d2c31b5e0c0376a715->leave($__internal_3c533ae82e57a7aed8a8c3ff25996c5346fca448e13427d2c31b5e0c0376a715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
