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
        $__internal_905ce3d30dafe45649248117a233e85de9e22b21cc953360e2cf4f9245ed05a1 = $this->env->getExtension("native_profiler");
        $__internal_905ce3d30dafe45649248117a233e85de9e22b21cc953360e2cf4f9245ed05a1->enter($__internal_905ce3d30dafe45649248117a233e85de9e22b21cc953360e2cf4f9245ed05a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_905ce3d30dafe45649248117a233e85de9e22b21cc953360e2cf4f9245ed05a1->leave($__internal_905ce3d30dafe45649248117a233e85de9e22b21cc953360e2cf4f9245ed05a1_prof);

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
