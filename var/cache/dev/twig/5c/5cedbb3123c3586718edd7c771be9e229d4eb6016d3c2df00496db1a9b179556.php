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
        $__internal_2f509c804a51a99f65e616a06788d1760e810175f497555a710f83fee4dd16d7 = $this->env->getExtension("native_profiler");
        $__internal_2f509c804a51a99f65e616a06788d1760e810175f497555a710f83fee4dd16d7->enter($__internal_2f509c804a51a99f65e616a06788d1760e810175f497555a710f83fee4dd16d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2f509c804a51a99f65e616a06788d1760e810175f497555a710f83fee4dd16d7->leave($__internal_2f509c804a51a99f65e616a06788d1760e810175f497555a710f83fee4dd16d7_prof);

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
