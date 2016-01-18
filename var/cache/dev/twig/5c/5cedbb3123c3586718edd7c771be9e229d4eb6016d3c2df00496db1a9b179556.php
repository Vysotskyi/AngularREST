<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b3bdecb6fd4ad55d21f51c224149ffb39bb7f01f3ea5534fc2d0c25bea116a52 extends Twig_Template
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
        $__internal_67f12cf5122f478d83e1564e3aa20498f8fd2692975063898c2813b437451cc8 = $this->env->getExtension("native_profiler");
        $__internal_67f12cf5122f478d83e1564e3aa20498f8fd2692975063898c2813b437451cc8->enter($__internal_67f12cf5122f478d83e1564e3aa20498f8fd2692975063898c2813b437451cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_67f12cf5122f478d83e1564e3aa20498f8fd2692975063898c2813b437451cc8->leave($__internal_67f12cf5122f478d83e1564e3aa20498f8fd2692975063898c2813b437451cc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
