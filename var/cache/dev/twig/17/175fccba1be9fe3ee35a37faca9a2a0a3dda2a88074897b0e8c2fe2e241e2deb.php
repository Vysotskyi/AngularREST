<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3f7129218f8ceb6085f04bbf21cefe4bbdb32bb577381cf9949ceab58bb56208 extends Twig_Template
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
        $__internal_33822f161db55d3fe08ab73d339f2081e0aaefd648040c14a89dc294236b1afb = $this->env->getExtension("native_profiler");
        $__internal_33822f161db55d3fe08ab73d339f2081e0aaefd648040c14a89dc294236b1afb->enter($__internal_33822f161db55d3fe08ab73d339f2081e0aaefd648040c14a89dc294236b1afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_33822f161db55d3fe08ab73d339f2081e0aaefd648040c14a89dc294236b1afb->leave($__internal_33822f161db55d3fe08ab73d339f2081e0aaefd648040c14a89dc294236b1afb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
