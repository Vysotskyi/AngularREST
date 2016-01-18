<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f6ed6feb28f1b27bd3a38b5439d8434bbb808e1adbaac00a99079e6b4e4cfd22 extends Twig_Template
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
        $__internal_fda239e7cea5d183455b533e8d7becf8f5bf5b131b7724a8b23239c40f429502 = $this->env->getExtension("native_profiler");
        $__internal_fda239e7cea5d183455b533e8d7becf8f5bf5b131b7724a8b23239c40f429502->enter($__internal_fda239e7cea5d183455b533e8d7becf8f5bf5b131b7724a8b23239c40f429502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fda239e7cea5d183455b533e8d7becf8f5bf5b131b7724a8b23239c40f429502->leave($__internal_fda239e7cea5d183455b533e8d7becf8f5bf5b131b7724a8b23239c40f429502_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
