<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c18caddf7506532184b9f7c639b508c0f9f690859ed12020ed25f8c8a20630cf extends Twig_Template
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
        $__internal_1b7f1474a8ab4b1f581efbfa4b780646efecadff8a80f64b76d2e030fdbd5312 = $this->env->getExtension("native_profiler");
        $__internal_1b7f1474a8ab4b1f581efbfa4b780646efecadff8a80f64b76d2e030fdbd5312->enter($__internal_1b7f1474a8ab4b1f581efbfa4b780646efecadff8a80f64b76d2e030fdbd5312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1b7f1474a8ab4b1f581efbfa4b780646efecadff8a80f64b76d2e030fdbd5312->leave($__internal_1b7f1474a8ab4b1f581efbfa4b780646efecadff8a80f64b76d2e030fdbd5312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
