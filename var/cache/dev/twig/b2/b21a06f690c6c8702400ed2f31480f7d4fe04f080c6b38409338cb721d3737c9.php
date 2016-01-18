<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e5952feef8b9048171578f6490ba183006545adb97c5b12e23cac937d9908cf0 extends Twig_Template
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
        $__internal_19f565863476a1b5e95a52f4a2db9ef9af5353166fea4f04cfee9e6628763ce1 = $this->env->getExtension("native_profiler");
        $__internal_19f565863476a1b5e95a52f4a2db9ef9af5353166fea4f04cfee9e6628763ce1->enter($__internal_19f565863476a1b5e95a52f4a2db9ef9af5353166fea4f04cfee9e6628763ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_19f565863476a1b5e95a52f4a2db9ef9af5353166fea4f04cfee9e6628763ce1->leave($__internal_19f565863476a1b5e95a52f4a2db9ef9af5353166fea4f04cfee9e6628763ce1_prof);

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
