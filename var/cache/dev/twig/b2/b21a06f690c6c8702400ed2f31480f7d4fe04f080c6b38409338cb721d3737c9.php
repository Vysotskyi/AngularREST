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
        $__internal_5c3d6a5aea590cbb87b19ecf7ad808f547c309af7ebabcab2b8ad998237e3a12 = $this->env->getExtension("native_profiler");
        $__internal_5c3d6a5aea590cbb87b19ecf7ad808f547c309af7ebabcab2b8ad998237e3a12->enter($__internal_5c3d6a5aea590cbb87b19ecf7ad808f547c309af7ebabcab2b8ad998237e3a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5c3d6a5aea590cbb87b19ecf7ad808f547c309af7ebabcab2b8ad998237e3a12->leave($__internal_5c3d6a5aea590cbb87b19ecf7ad808f547c309af7ebabcab2b8ad998237e3a12_prof);

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
