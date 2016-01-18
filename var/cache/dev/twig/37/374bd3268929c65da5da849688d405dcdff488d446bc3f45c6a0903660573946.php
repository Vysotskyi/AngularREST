<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9738159d3ed008973e956a53da651f8ed6779a758a45b5a9d094dfc08c918fef extends Twig_Template
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
        $__internal_149b1b3121f6f747eb3cb9baa106847b4ef3744b4b9c607918a361b93a943d70 = $this->env->getExtension("native_profiler");
        $__internal_149b1b3121f6f747eb3cb9baa106847b4ef3744b4b9c607918a361b93a943d70->enter($__internal_149b1b3121f6f747eb3cb9baa106847b4ef3744b4b9c607918a361b93a943d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_149b1b3121f6f747eb3cb9baa106847b4ef3744b4b9c607918a361b93a943d70->leave($__internal_149b1b3121f6f747eb3cb9baa106847b4ef3744b4b9c607918a361b93a943d70_prof);

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
