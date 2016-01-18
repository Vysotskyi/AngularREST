<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dba11c4eb7400ee3f942226e5069fc1c0df10127146484d8ade8b7f04509f40b extends Twig_Template
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
        $__internal_5c7dbc40d2e82eaa4ad911064d1b39d1e8849c4782c828dcad5a2550edd38637 = $this->env->getExtension("native_profiler");
        $__internal_5c7dbc40d2e82eaa4ad911064d1b39d1e8849c4782c828dcad5a2550edd38637->enter($__internal_5c7dbc40d2e82eaa4ad911064d1b39d1e8849c4782c828dcad5a2550edd38637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5c7dbc40d2e82eaa4ad911064d1b39d1e8849c4782c828dcad5a2550edd38637->leave($__internal_5c7dbc40d2e82eaa4ad911064d1b39d1e8849c4782c828dcad5a2550edd38637_prof);

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
